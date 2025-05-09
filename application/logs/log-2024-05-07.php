<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-07 00:01:26 --> Could not find the language line "Home"
ERROR - 2024-05-07 00:05:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:07:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:07:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 00:09:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:11:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-07 00:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:12:04 --> Could not find the language line "Home"
ERROR - 2024-05-07 00:13:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:15:20 --> Could not find the language line "Home"
ERROR - 2024-05-07 00:15:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:16:02 --> Could not find the language line "Home"
ERROR - 2024-05-07 00:20:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 00:21:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:23:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:23:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:23:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:26:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:26:25 --> Could not find the language line "Other"
ERROR - 2024-05-07 00:27:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 00:28:04 --> Could not find the language line "Home"
ERROR - 2024-05-07 00:29:36 --> Could not find the language line "Home"
ERROR - 2024-05-07 00:30:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:30:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:30:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:31:06 --> Could not find the language line "Home"
ERROR - 2024-05-07 00:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:32:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:32:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:34:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:34:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:35:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 00:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:36:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:36:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:38:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:38:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:40:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 00:40:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:42:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:42:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:44:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:44:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:45:22 --> Could not find the language line "Home"
ERROR - 2024-05-07 00:53:01 --> Could not find the language line "Home"
ERROR - 2024-05-07 00:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:57:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-07 00:57:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-07 00:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 00:59:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:59:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 00:59:50 --> Could not find the language line "products"
ERROR - 2024-05-07 01:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:01:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:01:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:01:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 01:01:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 01:01:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 01:01:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 01:01:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 01:01:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 01:01:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 01:01:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 01:04:02 --> Could not find the language line "Home"
ERROR - 2024-05-07 01:04:03 --> Could not find the language line "Home"
ERROR - 2024-05-07 01:08:03 --> Could not find the language line "Home"
ERROR - 2024-05-07 01:10:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 01:11:22 --> Could not find the language line "Home"
ERROR - 2024-05-07 01:12:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 01:15:20 --> Could not find the language line "Home"
ERROR - 2024-05-07 01:15:22 --> Could not find the language line "Home"
ERROR - 2024-05-07 01:16:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:16:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:17:29 --> Could not find the language line "Home"
ERROR - 2024-05-07 01:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:22:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 01:26:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:30:30 --> Could not find the language line "Home"
ERROR - 2024-05-07 01:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:30:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:30:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:31:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 01:31:52 --> Could not find the language line "Home"
ERROR - 2024-05-07 01:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:33:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:33:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:35:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:35:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:37:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 01:43:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:45:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 01:45:22 --> Could not find the language line "Home"
ERROR - 2024-05-07 01:45:38 --> Could not find the language line "products"
ERROR - 2024-05-07 01:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:47:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:47:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:49:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:49:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:51:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:51:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:54:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:54:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:56:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:56:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 01:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 01:58:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:00:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:00:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:02:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:02:30 --> Could not find the language line "Home"
ERROR - 2024-05-07 02:04:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:04:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:06:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:06:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:08:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:10:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:10:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:11:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 02:12:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:12:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:14:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:14:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:15:21 --> Could not find the language line "Home"
ERROR - 2024-05-07 02:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:17:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:17:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:19:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:19:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:21:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:21:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:27:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 02:28:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 02:29:40 --> Could not find the language line "products"
ERROR - 2024-05-07 02:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:35:34 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-07 02:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:40:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 02:40:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:43:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 02:45:25 --> Could not find the language line "Home"
ERROR - 2024-05-07 02:48:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 02:54:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 02:56:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:01:12 --> Could not find the language line "products"
ERROR - 2024-05-07 03:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:05:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:05:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:09:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:09:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:12:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 03:13:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:13:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:15:23 --> Could not find the language line "Home"
ERROR - 2024-05-07 03:15:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-07 03:15:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-07 03:15:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-07 03:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:19:04 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-07 03:19:05 --> Could not find the language line "Home"
ERROR - 2024-05-07 03:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:19:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:19:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:21:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 03:21:54 --> Could not find the language line "Home"
ERROR - 2024-05-07 03:22:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 03:24:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:24:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:24:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 03:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:26:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:26:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:30:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:30:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:32:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 03:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:32:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:32:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:35:15 --> Could not find the language line "Home"
ERROR - 2024-05-07 03:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:36:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:36:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:38:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:38:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:40:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:40:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:42:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:42:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:45:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:45:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:45:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:45:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:45:23 --> Could not find the language line "Home"
ERROR - 2024-05-07 03:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:47:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:47:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:49:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:49:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:51:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:55:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:55:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:57:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:57:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 03:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 03:59:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:00:21 --> Could not find the language line "products"
ERROR - 2024-05-07 04:01:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:03:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:03:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:04:35 --> Could not find the language line "Home"
ERROR - 2024-05-07 04:04:35 --> Could not find the language line "Home"
ERROR - 2024-05-07 04:04:35 --> Could not find the language line "Home"
ERROR - 2024-05-07 04:04:35 --> Could not find the language line "Home"
ERROR - 2024-05-07 04:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:05:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:05:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:08:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:08:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:10:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:14:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:14:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:15:32 --> Could not find the language line "Home"
ERROR - 2024-05-07 04:15:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 04:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:16:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:16:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:16:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 04:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:20:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 04:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:26:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:26:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:43:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:43:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:44:21 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-07 04:45:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 04:45:28 --> Could not find the language line "Home"
ERROR - 2024-05-07 04:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:49:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:50:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:54:49 --> Could not find the language line "Home"
ERROR - 2024-05-07 04:55:49 --> Could not find the language line "Home"
ERROR - 2024-05-07 04:58:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 04:58:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 04:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:00:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:00:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:01:34 --> Could not find the language line "Home"
ERROR - 2024-05-07 05:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:08:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:08:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:08:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 05:08:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 05:08:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 05:08:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 05:08:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 05:08:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 05:08:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 05:08:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 05:12:35 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-07 05:13:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:13:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 05:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:13:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:13:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 05:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:15:22 --> Could not find the language line "Home"
ERROR - 2024-05-07 05:17:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 05:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:17:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 05:17:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:17:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:17:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 05:21:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 05:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:21:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:21:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:21:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 05:23:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:25:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:25:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:25:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 05:25:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 05:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:34:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:34:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:40:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:42:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:45:22 --> Could not find the language line "Home"
ERROR - 2024-05-07 05:46:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:46:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:46:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 05:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:48:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:48:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:50:43 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-07 05:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:57:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:57:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 05:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 05:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:03:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:05:30 --> Could not find the language line "Home"
ERROR - 2024-05-07 06:07:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:11:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:11:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:11:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:13:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:13:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:13:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:15:22 --> Could not find the language line "Home"
ERROR - 2024-05-07 06:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:15:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:15:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:17:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 06:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:20:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:20:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:20:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:24:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:24:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:26:20 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-07 06:28:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:32:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-07 06:32:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-07 06:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:34:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:34:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:36:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:36:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:41:05 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-07 06:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:43:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:43:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:43:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:45:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:45:24 --> Could not find the language line "Home"
ERROR - 2024-05-07 06:48:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 06:48:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 06:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:51:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:51:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:53:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:53:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 06:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 06:58:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 07:00:22 --> Could not find the language line "Home"
ERROR - 2024-05-07 07:00:23 --> Could not find the language line "Home"
ERROR - 2024-05-07 07:00:23 --> Could not find the language line "Home"
ERROR - 2024-05-07 07:00:23 --> Could not find the language line "Home"
ERROR - 2024-05-07 07:01:12 --> Could not find the language line "Home"
ERROR - 2024-05-07 07:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:05:30 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-07 07:05:31 --> Could not find the language line "Home"
ERROR - 2024-05-07 07:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:06:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:08:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:08:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:15:23 --> Could not find the language line "Home"
ERROR - 2024-05-07 07:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:18:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:18:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:18:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 07:22:12 --> Could not find the language line "Home"
ERROR - 2024-05-07 07:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:31:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:31:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:33:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:33:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:35:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:35:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:36:13 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 07:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:38:49 --> Could not find the language line "Home"
ERROR - 2024-05-07 07:38:49 --> Could not find the language line "Home"
ERROR - 2024-05-07 07:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:41:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:43:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:43:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:45:23 --> Could not find the language line "Home"
ERROR - 2024-05-07 07:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:49:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 07:50:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:50:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:52:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:56:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:56:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:58:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 07:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 07:59:58 --> Could not find the language line "Home"
ERROR - 2024-05-07 07:59:58 --> Could not find the language line "Home"
ERROR - 2024-05-07 08:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:02:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:02:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:08:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:08:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:10:14 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 08:10:19 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 08:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:11:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:11:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:13:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:13:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:15:25 --> Could not find the language line "Home"
ERROR - 2024-05-07 08:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:17:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:17:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:18:18 --> Could not find the language line "Home"
ERROR - 2024-05-07 08:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:19:58 --> Could not find the language line "Home"
ERROR - 2024-05-07 08:20:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 08:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:27:11 --> Could not find the language line "Home"
ERROR - 2024-05-07 08:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:27:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:27:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:29:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:29:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:30:49 --> Could not find the language line "Home"
ERROR - 2024-05-07 08:31:56 --> Could not find the language line "Home"
ERROR - 2024-05-07 08:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:35:23 --> Could not find the language line "Home"
ERROR - 2024-05-07 08:35:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 08:35:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 08:35:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 08:35:25 --> 404 Page Not Found: Home/accounts
ERROR - 2024-05-07 08:41:45 --> Could not find the language line "Home"
ERROR - 2024-05-07 08:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:42:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 08:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:44:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:44:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:45:24 --> Could not find the language line "Home"
ERROR - 2024-05-07 08:46:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:46:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:51:46 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 08:52:03 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 08:52:18 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 08:52:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 08:52:33 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 08:52:51 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 08:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:52:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:52:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:53:37 --> Could not find the language line "Home"
ERROR - 2024-05-07 08:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:55:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:55:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 08:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:56:21 --> Could not find the language line "Home"
ERROR - 2024-05-07 08:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 08:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:01:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:03:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:03:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:05:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:05:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:06:52 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:06:53 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:06:53 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:06:53 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:07:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:07:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:13:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:13:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:15:25 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:16:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:16:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:18:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:18:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:18:18 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:18:36 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:18:46 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:19:10 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:19:16 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:19:52 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:19:54 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:20:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:20:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:20:26 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:20:45 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:20:47 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:20:59 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:21:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 09:22:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:24:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:24:44 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:24:44 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:24:44 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:24:45 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:25:47 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:26:16 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-05-07 09:26:17 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-05-07 09:26:17 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-05-07 09:26:17 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-05-07 09:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:28:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 09:28:49 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:30:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:30:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:41:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-07 09:41:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-07 09:41:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-07 09:43:19 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-07 09:44:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 09:45:26 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:47:07 --> Could not find the language line "Home"
ERROR - 2024-05-07 09:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:49:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:49:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:57:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:57:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 09:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 09:58:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 10:02:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 10:04:03 --> Could not find the language line "Home"
ERROR - 2024-05-07 10:04:12 --> Could not find the language line "Home"
ERROR - 2024-05-07 10:09:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 10:10:05 --> Could not find the language line "Home"
ERROR - 2024-05-07 10:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:14:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:14:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:15:27 --> Could not find the language line "Home"
ERROR - 2024-05-07 10:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:18:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:18:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:20:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:21:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 10:21:33 --> Could not find the language line "Home"
ERROR - 2024-05-07 10:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:31:24 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 10:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:33:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-07 10:33:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:37:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:37:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:39:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:41:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:41:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:45:26 --> Could not find the language line "Home"
ERROR - 2024-05-07 10:46:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:46:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:48:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:48:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:49:41 --> Could not find the language line "Home"
ERROR - 2024-05-07 10:49:45 --> Could not find the language line "Home"
ERROR - 2024-05-07 10:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:56:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:56:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 10:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 10:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:00:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 11:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:02:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:02:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:03:59 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:03:59 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:03:59 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:03:59 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:04:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:04:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:05:11 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:07:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:07:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:07:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 11:07:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 11:07:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 11:07:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 11:07:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 11:07:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 11:07:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 11:07:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 11:07:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 11:07:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-07 11:10:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 11:10:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 11:10:38 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:10:38 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:10:50 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:13:50 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:14:14 --> Could not find the language line "Bracelets"
ERROR - 2024-05-07 11:14:31 --> Could not find the language line "Bracelets"
ERROR - 2024-05-07 11:14:39 --> Could not find the language line "Bracelets"
ERROR - 2024-05-07 11:14:41 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:15:04 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:15:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:15:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:15:26 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:19:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:21:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:21:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:22:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 11:25:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:26:12 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:29:24 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:30:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:30:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:32:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:32:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:36:13 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:40:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:40:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:42:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:42:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:45:27 --> Could not find the language line "Home"
ERROR - 2024-05-07 11:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:48:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:48:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:51:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:51:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 11:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 11:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:00:33 --> Could not find the language line "Home"
ERROR - 2024-05-07 12:00:34 --> Could not find the language line "Home"
ERROR - 2024-05-07 12:00:34 --> Could not find the language line "Home"
ERROR - 2024-05-07 12:03:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 12:05:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 12:07:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 12:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:09:26 --> Could not find the language line "Home"
ERROR - 2024-05-07 12:11:37 --> Could not find the language line "Home"
ERROR - 2024-05-07 12:13:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 12:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:15:28 --> Could not find the language line "Home"
ERROR - 2024-05-07 12:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:16:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 12:16:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 12:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:20:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 12:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:22:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-07 12:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:32:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 12:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:32:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 12:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:37:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 12:38:23 --> Could not find the language line "Home"
ERROR - 2024-05-07 12:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:41:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 12:41:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 12:41:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 12:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:45:29 --> Could not find the language line "Home"
ERROR - 2024-05-07 12:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:47:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 12:47:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 12:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 12:55:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 12:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:01:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 13:01:51 --> Could not find the language line "Home"
ERROR - 2024-05-07 13:01:52 --> Could not find the language line "Home"
ERROR - 2024-05-07 13:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:04:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:04:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:06:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:06:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:06:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 13:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:15:27 --> Could not find the language line "Home"
ERROR - 2024-05-07 13:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:23:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:23:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:26:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 13:29:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:31:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:31:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:35:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:35:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:39:26 --> Could not find the language line "Home"
ERROR - 2024-05-07 13:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:39:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:39:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:44:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:44:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:45:28 --> Could not find the language line "Home"
ERROR - 2024-05-07 13:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:46:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:48:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:50:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:52:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:55:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 13:55:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 13:56:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 13:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 13:58:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 14:00:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 14:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:00:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 14:01:36 --> Could not find the language line "Home"
ERROR - 2024-05-07 14:01:37 --> Could not find the language line "Home"
ERROR - 2024-05-07 14:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:07:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 14:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:09:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 14:11:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 14:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:15:29 --> Could not find the language line "Home"
ERROR - 2024-05-07 14:15:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 14:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:15:44 --> Could not find the language line "Home"
ERROR - 2024-05-07 14:16:24 --> Could not find the language line "Home"
ERROR - 2024-05-07 14:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:23:46 --> Could not find the language line "Home"
ERROR - 2024-05-07 14:23:46 --> Could not find the language line "Home"
ERROR - 2024-05-07 14:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:30:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-07 14:30:12 --> Could not find the language line "products"
ERROR - 2024-05-07 14:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:30:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 14:30:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-07 14:30:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-07 14:31:06 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 14:31:14 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-07 14:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:31:29 --> Could not find the language line "products"
ERROR - 2024-05-07 14:32:06 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 14:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:32:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 14:32:27 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 14:32:30 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 14:32:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-07 14:32:43 --> Could not find the language line "Other"
ERROR - 2024-05-07 14:32:52 --> Could not find the language line "products"
ERROR - 2024-05-07 14:33:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-07 14:33:53 --> Could not find the language line "Other"
ERROR - 2024-05-07 14:33:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-07 14:33:59 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 14:34:02 --> Could not find the language line "Other"
ERROR - 2024-05-07 14:34:03 --> Could not find the language line "Other"
ERROR - 2024-05-07 14:34:05 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 14:34:15 --> Could not find the language line "products"
ERROR - 2024-05-07 14:34:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-07 14:34:59 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 14:35:05 --> Could not find the language line "Other"
ERROR - 2024-05-07 14:35:10 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 14:35:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-07 14:35:17 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 14:35:25 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 14:35:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-07 14:35:40 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 14:35:43 --> Could not find the language line "Socks"
ERROR - 2024-05-07 14:35:45 --> Could not find the language line "Bracelets"
ERROR - 2024-05-07 14:35:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-07 14:45:28 --> Could not find the language line "Home"
ERROR - 2024-05-07 14:45:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 14:45:42 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-07 14:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:49:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 14:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:56:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 14:57:22 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-07 14:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:58:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-07 14:59:03 --> Could not find the language line "Home"
ERROR - 2024-05-07 14:59:07 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-07 14:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 14:59:55 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-07 15:00:37 --> Could not find the language line "Home"
ERROR - 2024-05-07 15:00:48 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-07 15:00:56 --> Could not find the language line "Home"
ERROR - 2024-05-07 15:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:02:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-07 15:02:34 --> Could not find the language line "Home"
ERROR - 2024-05-07 15:03:10 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-07 15:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:03:51 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 15:04:33 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-07 15:05:13 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-07 15:05:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 15:05:55 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-07 15:06:50 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-07 15:07:35 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-07 15:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:07:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 15:08:13 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-07 15:10:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 15:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:11:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 15:11:54 --> Could not find the language line "assets"
ERROR - 2024-05-07 15:11:54 --> Could not find the language line "assets"
ERROR - 2024-05-07 15:11:54 --> Could not find the language line "assets"
ERROR - 2024-05-07 15:11:54 --> Could not find the language line "assets"
ERROR - 2024-05-07 15:11:54 --> Could not find the language line "assets"
ERROR - 2024-05-07 15:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:12:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 15:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:14:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 15:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:15:29 --> Could not find the language line "Home"
ERROR - 2024-05-07 15:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:20:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 15:24:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 15:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:26:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 15:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:33:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 15:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:36:10 --> Could not find the language line "accounts"
ERROR - 2024-05-07 15:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:37:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 15:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:45:31 --> Could not find the language line "Home"
ERROR - 2024-05-07 15:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:45:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 15:46:19 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-07 15:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:53:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 15:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:56:42 --> Could not find the language line "Home"
ERROR - 2024-05-07 15:56:54 --> Could not find the language line "Bracelets"
ERROR - 2024-05-07 15:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:57:53 --> Could not find the language line "Bracelets"
ERROR - 2024-05-07 15:57:56 --> Could not find the language line "Home"
ERROR - 2024-05-07 15:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 15:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:00:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 16:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:00:49 --> Could not find the language line "Home"
ERROR - 2024-05-07 16:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:10:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 16:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:12:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 16:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:15:29 --> Could not find the language line "Home"
ERROR - 2024-05-07 16:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:18:42 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-07 16:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:19:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 16:19:32 --> Could not find the language line "Home"
ERROR - 2024-05-07 16:21:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 16:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:27:28 --> Could not find the language line "Socks"
ERROR - 2024-05-07 16:27:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 16:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:27:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 16:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:29:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 16:33:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 16:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:38:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 16:44:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 16:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:45:30 --> Could not find the language line "Home"
ERROR - 2024-05-07 16:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:47:19 --> Could not find the language line "Home"
ERROR - 2024-05-07 16:49:25 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-07 16:49:46 --> Could not find the language line "Perfume"
ERROR - 2024-05-07 16:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:49:59 --> Could not find the language line "Perfume"
ERROR - 2024-05-07 16:50:00 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-07 16:50:22 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-07 16:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 16:51:31 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-07 16:52:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 16:54:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 16:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:01:53 --> Could not find the language line "Home"
ERROR - 2024-05-07 17:01:53 --> Could not find the language line "Home"
ERROR - 2024-05-07 17:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:05:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 17:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:09:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 17:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:15:30 --> Could not find the language line "Home"
ERROR - 2024-05-07 17:17:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 17:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:17:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 17:19:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 17:24:57 --> Could not find the language line "Home"
ERROR - 2024-05-07 17:26:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 17:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:26:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 17:26:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 17:28:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 17:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:32:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 17:36:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 17:36:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 17:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:38:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 17:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:38:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 17:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:42:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 17:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:45:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 17:45:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 17:45:31 --> Could not find the language line "Home"
ERROR - 2024-05-07 17:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:51:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 17:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:55:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 17:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 17:59:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:01:21 --> Could not find the language line "Home"
ERROR - 2024-05-07 18:01:21 --> Could not find the language line "Home"
ERROR - 2024-05-07 18:01:21 --> Could not find the language line "Home"
ERROR - 2024-05-07 18:01:47 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-07 18:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:07:28 --> Could not find the language line "Home"
ERROR - 2024-05-07 18:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:10:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:12:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:15:32 --> Could not find the language line "Home"
ERROR - 2024-05-07 18:15:47 --> Could not find the language line "Home"
ERROR - 2024-05-07 18:16:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:18:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 18:18:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:24:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:24:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 18:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:29:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:31:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-07 18:31:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-07 18:31:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-07 18:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:43:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:45:32 --> Could not find the language line "Home"
ERROR - 2024-05-07 18:45:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:47:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:49:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:51:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 18:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:54:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:54:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:56:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 18:56:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 18:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:06:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:06:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:08:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 19:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:08:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:10:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:12:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:12:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:15:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:15:33 --> Could not find the language line "Home"
ERROR - 2024-05-07 19:17:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-07 19:17:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-07 19:17:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-07 19:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:25:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:29:25 --> Could not find the language line "Home"
ERROR - 2024-05-07 19:29:54 --> Could not find the language line "Home"
ERROR - 2024-05-07 19:31:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:34:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 19:34:29 --> Could not find the language line "Home"
ERROR - 2024-05-07 19:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:40:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:40:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:45:32 --> Could not find the language line "Home"
ERROR - 2024-05-07 19:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:48:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:48:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:50:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:50:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:57:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 19:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 19:59:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:00:52 --> Could not find the language line "Home"
ERROR - 2024-05-07 20:00:52 --> Could not find the language line "Home"
ERROR - 2024-05-07 20:03:14 --> Could not find the language line "Perfume"
ERROR - 2024-05-07 20:03:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:04:18 --> Could not find the language line "products"
ERROR - 2024-05-07 20:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:05:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:05:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:07:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:13:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:15:34 --> Could not find the language line "Home"
ERROR - 2024-05-07 20:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:15:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:20:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:30:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:32:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:34:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:35:58 --> Could not find the language line "Home"
ERROR - 2024-05-07 20:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:36:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:41:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:45:33 --> Could not find the language line "Home"
ERROR - 2024-05-07 20:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:49:51 --> Could not find the language line "Home"
ERROR - 2024-05-07 20:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:51:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:55:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 20:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 20:59:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 21:00:15 --> Could not find the language line "Home"
ERROR - 2024-05-07 21:00:56 --> Could not find the language line "products"
ERROR - 2024-05-07 21:06:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 21:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:08:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 21:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:10:35 --> Could not find the language line "Home"
ERROR - 2024-05-07 21:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:12:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 21:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:14:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 21:15:34 --> Could not find the language line "Home"
ERROR - 2024-05-07 21:16:35 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-07 21:18:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 21:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:22:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 21:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:24:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 21:26:07 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-07 21:33:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 21:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:45:36 --> Could not find the language line "Home"
ERROR - 2024-05-07 21:45:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 21:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:48:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 21:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:49:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 21:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:54:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 21:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 21:58:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:01:02 --> Could not find the language line "Home"
ERROR - 2024-05-07 22:01:03 --> Could not find the language line "Home"
ERROR - 2024-05-07 22:01:03 --> Could not find the language line "Home"
ERROR - 2024-05-07 22:01:03 --> Could not find the language line "Home"
ERROR - 2024-05-07 22:02:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 22:04:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:06:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:11:02 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-07 22:13:10 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-07 22:13:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 22:14:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 22:15:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:15:38 --> Could not find the language line "Home"
ERROR - 2024-05-07 22:19:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:21:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:23:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:27:45 --> Could not find the language line "Home"
ERROR - 2024-05-07 22:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:27:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:29:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:29:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 22:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:30:28 --> Could not find the language line "Clothing"
ERROR - 2024-05-07 22:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:31:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:32:49 --> Could not find the language line "products"
ERROR - 2024-05-07 22:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:36:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:38:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:40:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:42:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:44:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:45:35 --> Could not find the language line "Home"
ERROR - 2024-05-07 22:46:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:48:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 22:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:52:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-07 22:52:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-07 22:52:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-07 22:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 22:59:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 23:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 23:01:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 23:01:47 --> Could not find the language line "products"
ERROR - 2024-05-07 23:03:36 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-07 23:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 23:06:32 --> Could not find the language line "Home"
ERROR - 2024-05-07 23:15:35 --> Could not find the language line "Home"
ERROR - 2024-05-07 23:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 23:24:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 23:25:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 23:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 23:26:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 23:30:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-07 23:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 23:32:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 23:34:50 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-07 23:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 23:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 23:43:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 23:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 23:45:38 --> Could not find the language line "Home"
ERROR - 2024-05-07 23:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 23:47:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 23:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 23:49:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 23:49:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-07 23:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 23:51:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 23:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 23:55:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 23:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-07 23:57:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-07 23:57:53 --> 404 Page Not Found: Assets/js
