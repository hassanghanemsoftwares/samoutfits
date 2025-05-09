<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-29 00:00:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:00:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:01:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:01:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:02:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:02:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:02:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-29 00:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:03:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:03:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:04:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-29 00:04:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-29 00:04:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-29 00:07:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:08:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:08:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:09:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:11:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:12:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:12:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:13:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 00:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:13:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:13:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:13:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-29 00:13:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-29 00:13:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-29 00:14:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 00:14:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 00:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:15:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:15:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:16:00 --> Could not find the language line "Home"
ERROR - 2024-04-29 00:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:16:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:16:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:17:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:17:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:20:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:20:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:21:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:21:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:22:42 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 00:23:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:23:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:24:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:24:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:25:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:25:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:26:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:26:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:29:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:29:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:30:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:30:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:32:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:32:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:33:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:34:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:34:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:36:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:37:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:37:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:38:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:38:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:39:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:39:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:41:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:41:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:42:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:42:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:43:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:43:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:44:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:44:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:44:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:44:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:45:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:45:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:45:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:46:03 --> Could not find the language line "Home"
ERROR - 2024-04-29 00:46:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:46:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:47:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:47:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:47:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:47:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:48:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 00:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:48:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:48:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:49:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:49:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:49:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:50:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:50:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:50:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 00:50:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-29 00:50:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-29 00:50:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-29 00:50:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-29 00:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-29 00:50:27 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 00:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:50:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:50:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:51:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:51:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:51:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:51:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:52:02 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 00:53:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:53:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:53:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:54:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:54:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:55:15 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 00:55:39 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 00:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:56:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:56:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:56:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:57:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:57:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:58:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 00:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:58:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:58:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 00:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 00:59:53 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 01:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 01:00:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 01:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 01:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 01:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 01:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 01:04:36 --> Could not find the language line "Other"
ERROR - 2024-04-29 01:06:00 --> Could not find the language line "Other"
ERROR - 2024-04-29 01:16:02 --> Could not find the language line "Home"
ERROR - 2024-04-29 01:16:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 01:16:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 01:21:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 01:46:01 --> Could not find the language line "Home"
ERROR - 2024-04-29 01:46:01 --> Could not find the language line "Home"
ERROR - 2024-04-29 01:49:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 01:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 02:04:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-29 02:12:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-29 02:16:04 --> Could not find the language line "Home"
ERROR - 2024-04-29 02:19:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 02:20:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 02:21:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 02:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 02:32:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 02:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 02:46:04 --> Could not find the language line "Home"
ERROR - 2024-04-29 02:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 02:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 02:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 02:54:20 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 02:55:28 --> Could not find the language line "products"
ERROR - 2024-04-29 03:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 03:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 03:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 03:10:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-29 03:10:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-29 03:10:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-29 03:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 03:12:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:13:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:13:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:14:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:14:53 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 03:15:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:16:06 --> Could not find the language line "Home"
ERROR - 2024-04-29 03:16:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 03:17:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:18:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:18:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:19:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:20:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:21:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 03:21:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 03:22:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:23:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:23:46 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-04-29 03:24:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:25:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:25:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:26:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 03:26:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 03:27:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:28:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 03:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 03:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 03:43:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 03:46:02 --> Could not find the language line "Home"
ERROR - 2024-04-29 03:53:07 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 03:53:40 --> Could not find the language line "Home"
ERROR - 2024-04-29 03:53:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-29 03:53:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-29 03:53:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-29 03:53:56 --> Could not find the language line "Home"
ERROR - 2024-04-29 03:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 04:00:46 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 04:06:59 --> Could not find the language line "Home"
ERROR - 2024-04-29 04:12:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 04:13:16 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 04:16:07 --> Could not find the language line "Home"
ERROR - 2024-04-29 04:22:09 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 04:24:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 04:24:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 04:26:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 04:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 04:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 04:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 04:35:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-29 04:37:17 --> Could not find the language line "Home"
ERROR - 2024-04-29 04:37:54 --> Could not find the language line "Home"
ERROR - 2024-04-29 04:37:58 --> Could not find the language line "Home"
ERROR - 2024-04-29 04:40:28 --> Could not find the language line "Home"
ERROR - 2024-04-29 04:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 04:43:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 04:45:44 --> Could not find the language line "Home"
ERROR - 2024-04-29 04:45:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 04:45:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 04:46:02 --> Could not find the language line "Home"
ERROR - 2024-04-29 04:46:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 04:46:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 04:46:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 04:46:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 04:46:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 04:46:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 04:47:02 --> Could not find the language line "Home"
ERROR - 2024-04-29 04:47:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 04:47:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 04:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 04:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 04:49:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 04:59:33 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 05:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 05:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 05:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 05:08:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 05:12:28 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 05:16:03 --> Could not find the language line "Home"
ERROR - 2024-04-29 05:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 05:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 05:26:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 05:26:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 05:33:48 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 05:36:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 05:46:04 --> Could not find the language line "Home"
ERROR - 2024-04-29 05:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 05:46:17 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-29 05:58:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 06:00:17 --> Could not find the language line "Home"
ERROR - 2024-04-29 06:00:21 --> Could not find the language line "Home"
ERROR - 2024-04-29 06:01:33 --> Could not find the language line "Home"
ERROR - 2024-04-29 06:02:32 --> Could not find the language line "Home"
ERROR - 2024-04-29 06:04:24 --> Could not find the language line "Home"
ERROR - 2024-04-29 06:05:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 06:08:46 --> Could not find the language line "Home"
ERROR - 2024-04-29 06:09:27 --> Could not find the language line "Home"
ERROR - 2024-04-29 06:11:21 --> Could not find the language line "Home"
ERROR - 2024-04-29 06:12:01 --> Could not find the language line "Home"
ERROR - 2024-04-29 06:16:04 --> Could not find the language line "Home"
ERROR - 2024-04-29 06:21:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 06:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:27:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 06:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:33:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 06:34:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 06:34:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 06:34:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 06:34:19 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 06:35:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 06:35:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 06:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:37:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 06:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:38:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 06:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:42:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 06:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:43:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 06:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:46:03 --> Could not find the language line "Home"
ERROR - 2024-04-29 06:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:49:07 --> Could not find the language line "Home"
ERROR - 2024-04-29 06:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:52:00 --> Could not find the language line "Home"
ERROR - 2024-04-29 06:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:54:05 --> Could not find the language line "Home"
ERROR - 2024-04-29 06:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:56:31 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-29 06:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 06:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:12:55 --> Could not find the language line "products"
ERROR - 2024-04-29 07:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:14:59 --> Could not find the language line "Home"
ERROR - 2024-04-29 07:15:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 07:15:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 07:15:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 07:15:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 07:15:53 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 07:16:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 07:16:05 --> Could not find the language line "Home"
ERROR - 2024-04-29 07:20:41 --> Could not find the language line "Home"
ERROR - 2024-04-29 07:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:23:11 --> Could not find the language line "Home"
ERROR - 2024-04-29 07:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:25:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 07:26:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-29 07:28:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 07:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:32:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 07:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:40:55 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-04-29 07:41:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 07:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:45:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 07:46:04 --> Could not find the language line "Home"
ERROR - 2024-04-29 07:49:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 07:53:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 07:53:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 07:54:23 --> Could not find the language line "Home"
ERROR - 2024-04-29 07:54:23 --> Could not find the language line "Home"
ERROR - 2024-04-29 07:55:01 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-29 07:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 07:59:30 --> Could not find the language line "Home"
ERROR - 2024-04-29 08:00:36 --> Could not find the language line "Home"
ERROR - 2024-04-29 08:00:36 --> Could not find the language line "Home"
ERROR - 2024-04-29 08:00:36 --> Could not find the language line "Home"
ERROR - 2024-04-29 08:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:03:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 08:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:03:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 08:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:10:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 08:11:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 08:11:21 --> Could not find the language line "Home"
ERROR - 2024-04-29 08:11:45 --> Could not find the language line "Home"
ERROR - 2024-04-29 08:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:15:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 08:15:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 08:16:04 --> Could not find the language line "Home"
ERROR - 2024-04-29 08:16:38 --> Could not find the language line "Home"
ERROR - 2024-04-29 08:16:38 --> Could not find the language line "Home"
ERROR - 2024-04-29 08:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:22:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 08:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:26:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 08:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:31:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 08:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:40:38 --> Could not find the language line "Home"
ERROR - 2024-04-29 08:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 08:46:05 --> Could not find the language line "Home"
ERROR - 2024-04-29 08:48:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 08:50:37 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-04-29 08:50:37 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-04-29 08:50:37 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-04-29 08:50:37 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-04-29 09:00:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-29 09:00:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-29 09:00:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-29 09:01:51 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:01:52 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:05:41 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:06:00 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-29 09:06:26 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:16:05 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:16:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 09:17:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-29 09:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:20:54 --> Could not find the language line "Other"
ERROR - 2024-04-29 09:23:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 09:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:24:30 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:25:00 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:25:02 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:26:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 09:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:27:44 --> Could not find the language line "Bracelets"
ERROR - 2024-04-29 09:29:14 --> Could not find the language line "Socks"
ERROR - 2024-04-29 09:29:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 09:29:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 09:29:59 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:30:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 09:30:07 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:31:25 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:31:26 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:32:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 09:32:21 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:33:21 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:33:52 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:33:57 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:34:59 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:37:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-29 09:37:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-29 09:37:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-29 09:37:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-29 09:37:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-29 09:37:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-29 09:37:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-29 09:37:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-29 09:37:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-29 09:37:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-29 09:37:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-29 09:37:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-29 09:38:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-29 09:38:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-29 09:38:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-29 09:38:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-29 09:38:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-29 09:38:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-29 09:38:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-29 09:38:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-29 09:38:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-29 09:38:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-29 09:38:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-29 09:38:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-29 09:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:40:35 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:40:35 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:46:05 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:46:38 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:47:46 --> Could not find the language line "Home"
ERROR - 2024-04-29 09:47:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 09:48:14 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2024-04-29 09:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:49:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 09:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 09:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:02:10 --> Could not find the language line "Home"
ERROR - 2024-04-29 10:02:10 --> Could not find the language line "Home"
ERROR - 2024-04-29 10:02:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 10:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:03:45 --> Could not find the language line "products"
ERROR - 2024-04-29 10:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:04:07 --> Could not find the language line "Home"
ERROR - 2024-04-29 10:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:06:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 10:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:08:24 --> Could not find the language line "Home"
ERROR - 2024-04-29 10:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:10:55 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 10:11:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 10:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:15:06 --> Could not find the language line "Other"
ERROR - 2024-04-29 10:15:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 10:16:04 --> Could not find the language line "Home"
ERROR - 2024-04-29 10:19:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 10:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:23:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 10:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:27:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 10:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:31:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 10:36:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 10:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:38:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 10:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:39:26 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-04-29 10:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:42:34 --> Could not find the language line "Home"
ERROR - 2024-04-29 10:42:36 --> Could not find the language line "Home"
ERROR - 2024-04-29 10:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:43:10 --> Could not find the language line "Home"
ERROR - 2024-04-29 10:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:44:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 10:46:06 --> Could not find the language line "Home"
ERROR - 2024-04-29 10:48:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 10:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:52:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 10:54:42 --> Could not find the language line "Home"
ERROR - 2024-04-29 10:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 10:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 11:02:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 11:02:57 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:02:58 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:02:58 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:07:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 11:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 11:16:06 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:16:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 11:17:05 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:17:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 11:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 11:20:28 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 11:24:19 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:24:27 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:29:43 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:33:34 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:33:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 11:34:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-29 11:34:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-29 11:34:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-29 11:35:57 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:38:14 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:38:39 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-04-29 11:38:59 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:40:14 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:40:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 11:46:06 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:50:12 --> Could not find the language line "Home"
ERROR - 2024-04-29 11:54:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 11:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 11:57:48 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:00:48 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:00:50 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:02:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 12:02:21 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:02:32 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:02:36 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:03:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 12:03:53 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:03:58 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:04:52 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:05:00 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:08:26 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:11:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 12:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:15:20 --> Could not find the language line "Other"
ERROR - 2024-04-29 12:16:09 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:21:17 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:22:59 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:25:58 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:31:35 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:41:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 12:41:45 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-29 12:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:43:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 12:46:07 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 12:54:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 12:55:07 --> Could not find the language line "Home"
ERROR - 2024-04-29 12:55:11 --> Could not find the language line "Home"
ERROR - 2024-04-29 13:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:05:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 13:07:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 13:07:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 13:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:07:23 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 13:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:11:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 13:11:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-29 13:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:14:50 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 13:16:08 --> Could not find the language line "Home"
ERROR - 2024-04-29 13:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:19:27 --> Could not find the language line "Home"
ERROR - 2024-04-29 13:19:27 --> Could not find the language line "Home"
ERROR - 2024-04-29 13:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:21:31 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 13:23:25 --> Could not find the language line "Home"
ERROR - 2024-04-29 13:25:20 --> Could not find the language line "Home"
ERROR - 2024-04-29 13:26:08 --> Could not find the language line "Home"
ERROR - 2024-04-29 13:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:40:02 --> Could not find the language line "Home"
ERROR - 2024-04-29 13:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:41:12 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 13:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:42:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 13:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:42:10 --> Could not find the language line "Home"
ERROR - 2024-04-29 13:42:23 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 13:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:43:19 --> Could not find the language line "Home"
ERROR - 2024-04-29 13:43:19 --> Could not find the language line "Home"
ERROR - 2024-04-29 13:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:45:05 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 13:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:45:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 13:46:09 --> Could not find the language line "Home"
ERROR - 2024-04-29 13:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:49:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 13:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:49:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 13:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:52:30 --> Could not find the language line "Socks"
ERROR - 2024-04-29 13:53:37 --> Could not find the language line "Socks"
ERROR - 2024-04-29 13:53:43 --> Could not find the language line "Socks"
ERROR - 2024-04-29 13:54:05 --> Could not find the language line "Socks"
ERROR - 2024-04-29 13:54:37 --> Could not find the language line "Socks"
ERROR - 2024-04-29 13:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:55:03 --> Could not find the language line "Socks"
ERROR - 2024-04-29 13:55:05 --> Could not find the language line "Socks"
ERROR - 2024-04-29 13:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:56:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 13:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 13:58:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 14:00:27 --> Could not find the language line "Home"
ERROR - 2024-04-29 14:00:27 --> Could not find the language line "Home"
ERROR - 2024-04-29 14:00:28 --> Could not find the language line "Home"
ERROR - 2024-04-29 14:01:11 --> Could not find the language line "Home"
ERROR - 2024-04-29 14:01:11 --> Could not find the language line "Home"
ERROR - 2024-04-29 14:01:28 --> Could not find the language line "Home"
ERROR - 2024-04-29 14:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:03:24 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 14:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:07:15 --> Could not find the language line "Home"
ERROR - 2024-04-29 14:07:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 14:08:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 14:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:12:39 --> Could not find the language line "Home"
ERROR - 2024-04-29 14:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:16:08 --> Could not find the language line "Home"
ERROR - 2024-04-29 14:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:19:04 --> Could not find the language line "Home"
ERROR - 2024-04-29 14:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:25:50 --> Could not find the language line "Home"
ERROR - 2024-04-29 14:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:46:09 --> Could not find the language line "Home"
ERROR - 2024-04-29 14:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:55:01 --> Could not find the language line "Home"
ERROR - 2024-04-29 14:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 14:58:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 15:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:15:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 15:16:09 --> Could not find the language line "Home"
ERROR - 2024-04-29 15:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:22:36 --> Could not find the language line "Perfume"
ERROR - 2024-04-29 15:22:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 15:23:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 15:23:57 --> Could not find the language line "Socks"
ERROR - 2024-04-29 15:23:58 --> Could not find the language line "Socks"
ERROR - 2024-04-29 15:23:59 --> Could not find the language line "Socks"
ERROR - 2024-04-29 15:24:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 15:24:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 15:24:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 15:25:05 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 15:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:25:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 15:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:26:10 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-04-29 15:26:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 15:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:26:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 15:26:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 15:26:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 15:26:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 15:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:27:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 15:27:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 15:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:27:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 15:27:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 15:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:27:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 15:27:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 15:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:28:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 15:28:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 15:28:05 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 15:28:08 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 15:31:00 --> Could not find the language line "Home"
ERROR - 2024-04-29 15:31:46 --> Could not find the language line "Home"
ERROR - 2024-04-29 15:31:48 --> Could not find the language line "Home"
ERROR - 2024-04-29 15:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:32:46 --> Could not find the language line "Home"
ERROR - 2024-04-29 15:32:51 --> Could not find the language line "Home"
ERROR - 2024-04-29 15:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:40:27 --> Could not find the language line "Home"
ERROR - 2024-04-29 15:41:32 --> Could not find the language line "Home"
ERROR - 2024-04-29 15:46:10 --> Could not find the language line "Home"
ERROR - 2024-04-29 15:49:30 --> Could not find the language line "products"
ERROR - 2024-04-29 15:51:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 15:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 15:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 16:00:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 16:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 16:03:40 --> Could not find the language line "Home"
ERROR - 2024-04-29 16:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 16:04:16 --> Could not find the language line "Home"
ERROR - 2024-04-29 16:04:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 16:07:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 16:07:45 --> Could not find the language line "Home"
ERROR - 2024-04-29 16:08:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 16:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 16:09:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 16:11:31 --> Could not find the language line "Home"
ERROR - 2024-04-29 16:11:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 16:13:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 16:15:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 16:16:10 --> Could not find the language line "Home"
ERROR - 2024-04-29 16:23:27 --> Could not find the language line "Home"
ERROR - 2024-04-29 16:23:29 --> Could not find the language line "Home"
ERROR - 2024-04-29 16:24:04 --> Could not find the language line "Home"
ERROR - 2024-04-29 16:32:15 --> Could not find the language line "Home"
ERROR - 2024-04-29 16:35:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 16:35:29 --> Could not find the language line "Home"
ERROR - 2024-04-29 16:42:44 --> Could not find the language line "products"
ERROR - 2024-04-29 16:46:10 --> Could not find the language line "Home"
ERROR - 2024-04-29 16:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 16:51:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 16:51:15 --> Could not find the language line "Home"
ERROR - 2024-04-29 16:56:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 16:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 16:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 16:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 16:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 16:59:38 --> Could not find the language line "Home"
ERROR - 2024-04-29 17:03:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 17:03:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 17:16:10 --> Could not find the language line "Home"
ERROR - 2024-04-29 17:16:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 17:21:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-29 17:21:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-29 17:21:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-29 17:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 17:22:27 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 17:29:16 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-29 17:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 17:39:12 --> Could not find the language line "Home"
ERROR - 2024-04-29 17:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 17:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 17:46:12 --> Could not find the language line "Home"
ERROR - 2024-04-29 17:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 17:49:19 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 17:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 17:54:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 17:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:02:57 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 18:04:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 18:06:12 --> Could not find the language line "products"
ERROR - 2024-04-29 18:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:16:13 --> Could not find the language line "Home"
ERROR - 2024-04-29 18:16:37 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 18:18:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 18:18:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 18:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:23:22 --> Could not find the language line "products"
ERROR - 2024-04-29 18:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:31:29 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 18:36:31 --> Could not find the language line "Home"
ERROR - 2024-04-29 18:38:06 --> Could not find the language line "Home"
ERROR - 2024-04-29 18:39:08 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-29 18:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:40:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:46:11 --> Could not find the language line "Home"
ERROR - 2024-04-29 18:47:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 18:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 18:49:44 --> Could not find the language line "Home"
ERROR - 2024-04-29 18:59:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 19:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:05:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 19:05:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 19:05:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 19:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:11:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 19:13:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-29 19:16:11 --> Could not find the language line "Home"
ERROR - 2024-04-29 19:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:17:39 --> Could not find the language line "Home"
ERROR - 2024-04-29 19:18:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 19:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:19:19 --> Could not find the language line "Home"
ERROR - 2024-04-29 19:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:34:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-29 19:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:42:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 19:43:41 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-29 19:44:06 --> Could not find the language line "Home"
ERROR - 2024-04-29 19:46:14 --> Could not find the language line "Home"
ERROR - 2024-04-29 19:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:50:41 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-04-29 19:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:53:13 --> Could not find the language line "Home"
ERROR - 2024-04-29 19:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 19:58:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 20:00:47 --> Could not find the language line "Home"
ERROR - 2024-04-29 20:03:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 20:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 20:16:14 --> Could not find the language line "Home"
ERROR - 2024-04-29 20:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 20:17:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 20:20:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 20:20:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 20:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 20:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 20:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 20:46:12 --> Could not find the language line "Home"
ERROR - 2024-04-29 21:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 21:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 21:06:14 --> Could not find the language line "Home"
ERROR - 2024-04-29 21:06:15 --> Could not find the language line "Home"
ERROR - 2024-04-29 21:06:15 --> Could not find the language line "Home"
ERROR - 2024-04-29 21:06:15 --> Could not find the language line "Home"
ERROR - 2024-04-29 21:16:19 --> Could not find the language line "Home"
ERROR - 2024-04-29 21:19:44 --> Could not find the language line "Home"
ERROR - 2024-04-29 21:19:44 --> Could not find the language line "Home"
ERROR - 2024-04-29 21:19:45 --> Could not find the language line "Home"
ERROR - 2024-04-29 21:19:45 --> Could not find the language line "Home"
ERROR - 2024-04-29 21:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 21:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 21:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 21:28:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 21:28:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 21:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 21:46:14 --> Could not find the language line "Home"
ERROR - 2024-04-29 21:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 21:59:53 --> Could not find the language line "products"
ERROR - 2024-04-29 22:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 22:16:15 --> Could not find the language line "Home"
ERROR - 2024-04-29 22:31:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-29 22:31:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 22:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 22:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 22:41:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 22:46:14 --> Could not find the language line "Home"
ERROR - 2024-04-29 22:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:08:15 --> Could not find the language line "Home"
ERROR - 2024-04-29 23:08:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 23:08:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-29 23:08:38 --> Could not find the language line "Home"
ERROR - 2024-04-29 23:08:45 --> Could not find the language line "Socks"
ERROR - 2024-04-29 23:08:50 --> Could not find the language line "Home"
ERROR - 2024-04-29 23:09:35 --> Could not find the language line "Home"
ERROR - 2024-04-29 23:14:12 --> Could not find the language line "Home"
ERROR - 2024-04-29 23:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:16:18 --> Could not find the language line "Home"
ERROR - 2024-04-29 23:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:21:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-29 23:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:27:24 --> Could not find the language line "Home"
ERROR - 2024-04-29 23:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:29:39 --> Could not find the language line "Home"
ERROR - 2024-04-29 23:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:46:16 --> Could not find the language line "Home"
ERROR - 2024-04-29 23:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-29 23:59:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-29 23:59:21 --> 404 Page Not Found: Assets/lib
