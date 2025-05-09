<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-30 00:03:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 00:03:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 00:03:46 --> Could not find the language line "Home"
ERROR - 2024-04-30 00:07:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-30 00:08:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 00:08:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 00:16:23 --> Could not find the language line "Home"
ERROR - 2024-04-30 00:24:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 00:24:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 00:24:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 00:24:16 --> Could not find the language line "Home"
ERROR - 2024-04-30 00:31:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 00:46:18 --> Could not find the language line "Home"
ERROR - 2024-04-30 00:51:59 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-04-30 00:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:06:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:06:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:10:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:10:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:11:57 --> Could not find the language line "Other"
ERROR - 2024-04-30 01:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:14:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:14:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:15:23 --> Could not find the language line "products"
ERROR - 2024-04-30 01:16:24 --> Could not find the language line "Home"
ERROR - 2024-04-30 01:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:22:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:22:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:26:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:31:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:31:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:37:22 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-04-30 01:41:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 01:43:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:44:11 --> Could not find the language line "products"
ERROR - 2024-04-30 01:46:17 --> Could not find the language line "Home"
ERROR - 2024-04-30 01:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:47:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:47:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:53:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 01:56:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 01:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 01:56:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:00:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:00:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:05:53 --> Could not find the language line "products"
ERROR - 2024-04-30 02:12:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:12:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:16:22 --> Could not find the language line "Home"
ERROR - 2024-04-30 02:16:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:16:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:25:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:25:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:29:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:29:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:33:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:33:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:40:57 --> Could not find the language line "products"
ERROR - 2024-04-30 02:41:48 --> Could not find the language line "1"
ERROR - 2024-04-30 02:41:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:41:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:41:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-30 02:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:41:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-30 02:45:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 02:46:24 --> Could not find the language line "Home"
ERROR - 2024-04-30 02:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:50:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:50:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 02:54:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 02:54:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:02:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:02:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:06:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:06:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:11:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:11:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:15:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:15:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:16:19 --> Could not find the language line "Home"
ERROR - 2024-04-30 03:19:27 --> Could not find the language line "Home"
ERROR - 2024-04-30 03:19:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 03:19:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 03:19:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 03:19:30 --> 404 Page Not Found: Home/accounts
ERROR - 2024-04-30 03:19:30 --> 404 Page Not Found: Home/home
ERROR - 2024-04-30 03:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:27:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:29:07 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-04-30 03:31:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:35:58 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 03:36:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:36:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:40:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:40:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:44:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:46:25 --> Could not find the language line "Home"
ERROR - 2024-04-30 03:47:43 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-04-30 03:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:48:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:48:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:52:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 03:52:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 03:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:01:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 04:01:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 04:01:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 04:03:10 --> Could not find the language line "products"
ERROR - 2024-04-30 04:04:47 --> Could not find the language line "Home"
ERROR - 2024-04-30 04:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:09:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 04:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:11:33 --> Could not find the language line "Home"
ERROR - 2024-04-30 04:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:15:02 --> Could not find the language line "Home"
ERROR - 2024-04-30 04:16:21 --> Could not find the language line "Home"
ERROR - 2024-04-30 04:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:23:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 04:28:17 --> Could not find the language line "Home"
ERROR - 2024-04-30 04:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:34:18 --> Could not find the language line "Other"
ERROR - 2024-04-30 04:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:37:56 --> Could not find the language line "Home"
ERROR - 2024-04-30 04:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:40:34 --> Could not find the language line "Other"
ERROR - 2024-04-30 04:41:58 --> Could not find the language line "Crocs"
ERROR - 2024-04-30 04:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:46:25 --> Could not find the language line "Home"
ERROR - 2024-04-30 04:46:33 --> Could not find the language line "Home"
ERROR - 2024-04-30 04:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:49:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 04:49:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 04:50:12 --> Could not find the language line "products"
ERROR - 2024-04-30 04:52:47 --> Could not find the language line "Home"
ERROR - 2024-04-30 04:58:56 --> Could not find the language line "Home"
ERROR - 2024-04-30 04:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 04:59:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 04:59:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 04:59:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 04:59:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 04:59:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 04:59:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 04:59:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 04:59:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 04:59:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 04:59:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 05:00:48 --> Could not find the language line "Home"
ERROR - 2024-04-30 05:00:48 --> Could not find the language line "Home"
ERROR - 2024-04-30 05:00:48 --> Could not find the language line "Home"
ERROR - 2024-04-30 05:00:49 --> Could not find the language line "Home"
ERROR - 2024-04-30 05:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:03:56 --> Could not find the language line "Home"
ERROR - 2024-04-30 05:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:16:21 --> Could not find the language line "Home"
ERROR - 2024-04-30 05:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:20:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 05:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:41:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 05:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:45:18 --> Could not find the language line "Home"
ERROR - 2024-04-30 05:46:22 --> Could not find the language line "Home"
ERROR - 2024-04-30 05:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 05:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:01:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 06:03:26 --> Could not find the language line "Home"
ERROR - 2024-04-30 06:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:16:19 --> Could not find the language line "Home"
ERROR - 2024-04-30 06:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:20:35 --> Could not find the language line "Home"
ERROR - 2024-04-30 06:20:52 --> Could not find the language line "Home"
ERROR - 2024-04-30 06:23:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 06:24:23 --> Could not find the language line "Home"
ERROR - 2024-04-30 06:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:27:53 --> Could not find the language line "Home"
ERROR - 2024-04-30 06:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:29:43 --> Could not find the language line "Home"
ERROR - 2024-04-30 06:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:39:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 06:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:41:45 --> Could not find the language line "Home"
ERROR - 2024-04-30 06:43:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 06:46:21 --> Could not find the language line "Home"
ERROR - 2024-04-30 06:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 06:55:42 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-04-30 07:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:02:01 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:02:02 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:16:19 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:24:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 07:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:25:15 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:26:55 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:27:06 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-30 07:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:32:30 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:34:51 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:37:28 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:38:00 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:38:34 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:40:13 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:40:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 07:40:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 07:40:39 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:41:10 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:44:09 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:46:20 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:56:24 --> Could not find the language line "Home"
ERROR - 2024-04-30 07:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 07:58:51 --> Could not find the language line "Home"
ERROR - 2024-04-30 08:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:02:52 --> Could not find the language line "Home"
ERROR - 2024-04-30 08:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:06:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:06:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 08:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:09:31 --> Could not find the language line "Other"
ERROR - 2024-04-30 08:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:13:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 08:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:16:22 --> Could not find the language line "Home"
ERROR - 2024-04-30 08:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:20:21 --> Could not find the language line "Home"
ERROR - 2024-04-30 08:20:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 08:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:21:51 --> Could not find the language line "Home"
ERROR - 2024-04-30 08:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:23:35 --> Could not find the language line "Home"
ERROR - 2024-04-30 08:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:29:25 --> Could not find the language line "accounting"
ERROR - 2024-04-30 08:31:36 --> Could not find the language line "Home"
ERROR - 2024-04-30 08:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:32:18 --> Could not find the language line "products"
ERROR - 2024-04-30 08:35:32 --> Could not find the language line "Home"
ERROR - 2024-04-30 08:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:43:03 --> Could not find the language line "Home"
ERROR - 2024-04-30 08:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:46:23 --> Could not find the language line "Home"
ERROR - 2024-04-30 08:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:55:44 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 08:56:07 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 08:56:44 --> Could not find the language line "Home"
ERROR - 2024-04-30 08:57:10 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 08:57:24 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 08:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 08:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:05:07 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 09:05:16 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 09:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:05:33 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 09:05:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 09:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:07:41 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:10:30 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:10:55 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:11:02 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:12:12 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:12:14 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:16:15 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:16:25 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:16:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 09:17:05 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:17:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 09:17:28 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:17:30 --> Could not find the language line "Bracelets"
ERROR - 2024-04-30 09:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:19:22 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:19:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 09:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:26:40 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:26:57 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:27:14 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:36:07 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:36:33 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:36:36 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:38:37 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:42:07 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:42:10 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:46:24 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:48:56 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:48:56 --> Could not find the language line "Home"
ERROR - 2024-04-30 09:51:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 09:51:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 09:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 09:59:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 10:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 10:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 10:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 10:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 10:11:38 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-04-30 10:11:38 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-04-30 10:11:38 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-04-30 10:11:38 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-04-30 10:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 10:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 10:16:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 10:16:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 10:16:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 10:16:22 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 10:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 10:16:24 --> Could not find the language line "Home"
ERROR - 2024-04-30 10:16:27 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 10:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 10:17:03 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 10:17:04 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 10:17:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 10:17:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 10:17:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 10:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 10:17:07 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 10:17:08 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 10:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 10:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 10:33:56 --> Could not find the language line "products"
ERROR - 2024-04-30 10:35:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 10:35:04 --> Could not find the language line "Other"
ERROR - 2024-04-30 10:46:23 --> Could not find the language line "Home"
ERROR - 2024-04-30 10:49:00 --> Could not find the language line "products"
ERROR - 2024-04-30 10:49:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 10:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 10:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 10:55:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 10:56:57 --> Could not find the language line "Home"
ERROR - 2024-04-30 11:00:39 --> Could not find the language line "Home"
ERROR - 2024-04-30 11:06:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 11:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:14:03 --> Could not find the language line "Home"
ERROR - 2024-04-30 11:15:04 --> Could not find the language line "Home"
ERROR - 2024-04-30 11:16:23 --> Could not find the language line "Home"
ERROR - 2024-04-30 11:16:30 --> Could not find the language line "Home"
ERROR - 2024-04-30 11:17:06 --> Could not find the language line "products"
ERROR - 2024-04-30 11:17:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 11:17:57 --> Could not find the language line "Home"
ERROR - 2024-04-30 11:17:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 11:18:02 --> Could not find the language line "Home"
ERROR - 2024-04-30 11:18:06 --> Could not find the language line "Bracelets"
ERROR - 2024-04-30 11:18:23 --> Could not find the language line "Home"
ERROR - 2024-04-30 11:18:34 --> Could not find the language line "Perfume"
ERROR - 2024-04-30 11:18:42 --> Could not find the language line "Home"
ERROR - 2024-04-30 11:18:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 11:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:22:43 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-04-30 11:24:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 11:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:24:15 --> Could not find the language line "products"
ERROR - 2024-04-30 11:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:38:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 11:42:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 11:46:23 --> Could not find the language line "Home"
ERROR - 2024-04-30 11:55:49 --> Could not find the language line "products"
ERROR - 2024-04-30 11:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 11:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:03:00 --> Could not find the language line "Home"
ERROR - 2024-04-30 12:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:03:43 --> Could not find the language line "Home"
ERROR - 2024-04-30 12:03:47 --> Could not find the language line "Home"
ERROR - 2024-04-30 12:03:52 --> Could not find the language line "Home"
ERROR - 2024-04-30 12:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:05:59 --> Could not find the language line "Home"
ERROR - 2024-04-30 12:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:13:24 --> Could not find the language line "products"
ERROR - 2024-04-30 12:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:15:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-30 12:15:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 12:15:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 12:15:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-30 12:15:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 12:16:25 --> Could not find the language line "Home"
ERROR - 2024-04-30 12:19:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 12:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:21:34 --> Could not find the language line "Home"
ERROR - 2024-04-30 12:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:22:10 --> Could not find the language line "Home"
ERROR - 2024-04-30 12:22:10 --> Could not find the language line "Home"
ERROR - 2024-04-30 12:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:28:03 --> Could not find the language line "Home"
ERROR - 2024-04-30 12:28:03 --> Could not find the language line "Home"
ERROR - 2024-04-30 12:28:03 --> Could not find the language line "Home"
ERROR - 2024-04-30 12:28:04 --> Could not find the language line "Home"
ERROR - 2024-04-30 12:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:39:16 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-04-30 12:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:46:25 --> Could not find the language line "Home"
ERROR - 2024-04-30 12:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:51:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 12:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 12:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:00:06 --> Could not find the language line "products"
ERROR - 2024-04-30 13:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:01:52 --> Could not find the language line "Home"
ERROR - 2024-04-30 13:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:02:34 --> Could not find the language line "Home"
ERROR - 2024-04-30 13:05:39 --> Could not find the language line "Home"
ERROR - 2024-04-30 13:08:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 13:16:25 --> Could not find the language line "Home"
ERROR - 2024-04-30 13:20:23 --> Could not find the language line "Home"
ERROR - 2024-04-30 13:23:20 --> Could not find the language line "Home"
ERROR - 2024-04-30 13:23:49 --> Could not find the language line "products"
ERROR - 2024-04-30 13:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:35:50 --> Could not find the language line "Home"
ERROR - 2024-04-30 13:42:31 --> Could not find the language line "Home"
ERROR - 2024-04-30 13:43:08 --> Could not find the language line "Home"
ERROR - 2024-04-30 13:43:08 --> Could not find the language line "Home"
ERROR - 2024-04-30 13:44:09 --> Could not find the language line "Home"
ERROR - 2024-04-30 13:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:46:26 --> Could not find the language line "Home"
ERROR - 2024-04-30 13:46:27 --> Could not find the language line "Home"
ERROR - 2024-04-30 13:46:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 13:47:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-30 13:50:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:51:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 13:51:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 13:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:57:17 --> Could not find the language line "Socks"
ERROR - 2024-04-30 13:57:28 --> Could not find the language line "Socks"
ERROR - 2024-04-30 13:57:40 --> Could not find the language line "Socks"
ERROR - 2024-04-30 13:57:50 --> Could not find the language line "Socks"
ERROR - 2024-04-30 13:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:58:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 13:58:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 13:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:58:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 13:58:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 13:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:58:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 13:58:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 13:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:59:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 13:59:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 13:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 13:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:01:54 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:02:36 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:04:40 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:05:46 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 14:06:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 14:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:06:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 14:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:07:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-30 14:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:08:06 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:08:25 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:08:42 --> Could not find the language line "Bracelets"
ERROR - 2024-04-30 14:08:58 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 14:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:09:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 14:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:09:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 14:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:10:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 14:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:10:08 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 14:10:09 --> Could not find the language line "Bracelets"
ERROR - 2024-04-30 14:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:10:33 --> Could not find the language line "Bracelets"
ERROR - 2024-04-30 14:10:39 --> Could not find the language line "Bracelets"
ERROR - 2024-04-30 14:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:12:46 --> Could not find the language line "Perfume"
ERROR - 2024-04-30 14:12:50 --> Could not find the language line "Bracelets"
ERROR - 2024-04-30 14:13:07 --> Could not find the language line "Bracelets"
ERROR - 2024-04-30 14:13:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 14:13:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 14:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:14:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 14:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:15:05 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 14:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:15:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 14:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:15:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 14:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:15:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 14:15:52 --> Could not find the language line "Other"
ERROR - 2024-04-30 14:16:21 --> Could not find the language line "Other"
ERROR - 2024-04-30 14:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:16:27 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:16:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 14:16:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 14:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:17:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 14:17:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 14:17:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 14:18:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 14:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:18:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 14:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:19:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 14:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:20:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 14:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:20:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 14:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:21:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 14:21:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 14:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:21:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 14:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:22:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 14:22:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-30 14:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:22:41 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:23:03 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:24:45 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:27:48 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:31:27 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:32:52 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:32:52 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:32:55 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:32:55 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:32:56 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:32:56 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:34:10 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:34:29 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:34:34 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:35:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:37:55 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:39:15 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:41:00 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:42:07 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:43:47 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:44:33 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:44:33 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:44:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 14:45:06 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:46:08 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:46:09 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:46:09 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:46:09 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:46:25 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:51:24 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:51:58 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:52:27 --> Could not find the language line "Home"
ERROR - 2024-04-30 14:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 14:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 15:16:26 --> Could not find the language line "Home"
ERROR - 2024-04-30 15:18:39 --> Could not find the language line "Home"
ERROR - 2024-04-30 15:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 15:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 15:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 15:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 15:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 15:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 15:34:04 --> Could not find the language line "products"
ERROR - 2024-04-30 15:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 15:46:25 --> Could not find the language line "Home"
ERROR - 2024-04-30 15:50:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 15:51:48 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-04-30 15:55:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 15:58:23 --> Could not find the language line "Home"
ERROR - 2024-04-30 15:58:23 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-04-30 15:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 15:59:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 16:01:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-30 16:03:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 16:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 16:03:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 16:03:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 16:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 16:07:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 16:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 16:12:14 --> Could not find the language line "Home"
ERROR - 2024-04-30 16:12:44 --> Could not find the language line "Bracelets"
ERROR - 2024-04-30 16:13:46 --> Could not find the language line "Home"
ERROR - 2024-04-30 16:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 16:16:24 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-04-30 16:16:27 --> Could not find the language line "Home"
ERROR - 2024-04-30 16:16:41 --> Could not find the language line "Home"
ERROR - 2024-04-30 16:18:34 --> Could not find the language line "Home"
ERROR - 2024-04-30 16:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 16:19:32 --> Could not find the language line "Home"
ERROR - 2024-04-30 16:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 16:23:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 16:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 16:27:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 16:28:40 --> Could not find the language line "Home"
ERROR - 2024-04-30 16:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 16:33:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 16:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 16:34:22 --> Could not find the language line "Home"
ERROR - 2024-04-30 16:34:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 16:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 16:39:10 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-04-30 16:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 16:39:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 16:39:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 16:43:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 16:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 16:43:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 16:46:08 --> Could not find the language line "Home"
ERROR - 2024-04-30 16:46:27 --> Could not find the language line "Home"
ERROR - 2024-04-30 16:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 16:47:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 16:47:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 16:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 16:55:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 16:59:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:01:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 17:01:35 --> Could not find the language line "Home"
ERROR - 2024-04-30 17:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:03:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:03:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:13:49 --> Could not find the language line "Home"
ERROR - 2024-04-30 17:13:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 17:13:51 --> 404 Page Not Found: 404error_testhtml/index
ERROR - 2024-04-30 17:13:52 --> 404 Page Not Found: Contact_us/index
ERROR - 2024-04-30 17:14:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 17:14:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 17:14:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 17:14:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 17:14:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 17:14:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 17:14:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 17:14:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 17:14:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 17:14:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 17:14:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 17:14:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 17:14:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 17:14:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 17:14:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 17:14:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 17:14:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 17:14:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 17:14:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 17:14:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 17:14:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 17:14:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 17:14:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 17:14:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 17:14:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 17:14:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 17:14:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 17:14:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 17:14:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 17:14:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 17:14:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 17:14:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 17:14:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 17:14:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 17:14:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 17:14:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 17:15:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:16:27 --> Could not find the language line "Home"
ERROR - 2024-04-30 17:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:31:49 --> Could not find the language line "Home"
ERROR - 2024-04-30 17:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:32:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:32:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:33:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:33:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:35:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:35:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:35:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:36:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:36:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:37:15 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 17:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:37:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:37:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:37:45 --> Could not find the language line "Home"
ERROR - 2024-04-30 17:38:07 --> Could not find the language line "Home"
ERROR - 2024-04-30 17:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:38:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:38:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:39:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:39:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:40:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:40:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:42:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 17:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:42:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:42:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:43:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:43:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:43:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:43:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:45:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:45:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:46:27 --> Could not find the language line "Home"
ERROR - 2024-04-30 17:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:48:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:48:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:48:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:48:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:49:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:49:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:52:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:52:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:53:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:55:42 --> Could not find the language line "Home"
ERROR - 2024-04-30 17:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:56:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:57:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:58:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:58:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 17:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 17:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:00:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:00:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:01:35 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 18:01:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:03:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:03:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:03:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:03:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:03:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:05:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:05:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:07:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:07:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:07:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:07:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:08:04 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:09:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:09:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:10:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:11:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:11:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:11:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:12:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:12:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:13:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:13:46 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:14:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:14:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:15:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:15:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:16:28 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:17:20 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:17:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:18:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:19:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:21:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:21:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:22:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:22:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:23:07 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:23:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:23:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:25:58 --> Could not find the language line "products"
ERROR - 2024-04-30 18:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:27:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:27:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:27:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:27:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:28:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 18:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:28:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:29:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 18:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:31:19 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:32:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:33:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:33:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:35:45 --> Could not find the language line "Other"
ERROR - 2024-04-30 18:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:36:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:36:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:37:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:39:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:40:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:41:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:41:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:43:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:43:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:43:12 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:44:21 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:44:43 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:45:41 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:45:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 18:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:46:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 18:46:30 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:46:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 18:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:47:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 18:47:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 18:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:48:00 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 18:48:03 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:48:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 18:48:28 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:48:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 18:48:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 18:49:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 18:50:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 18:50:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 18:50:20 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:50:25 --> Could not find the language line "Socks"
ERROR - 2024-04-30 18:50:38 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:50:42 --> Could not find the language line "Socks"
ERROR - 2024-04-30 18:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:51:24 --> Could not find the language line "Socks"
ERROR - 2024-04-30 18:51:34 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:51:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 18:51:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 18:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:53:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:53:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:53:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 18:57:36 --> Could not find the language line "Home"
ERROR - 2024-04-30 18:57:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 18:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:01:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:01:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:04:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:06:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:06:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:08:52 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:09:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 19:09:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 19:09:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:10:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-30 19:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-30 19:10:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:12:46 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:13:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:13:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:14:00 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:14:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:14:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:15:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:15:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:15:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:16:29 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:17:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:17:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:18:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:18:23 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:19:33 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:19:38 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:19:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:19:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:20:05 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:20:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:21:29 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:23:09 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:23:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:23:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:23:44 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:24:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:24:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:24:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:25:19 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:25:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:25:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:26:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:26:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:28:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:28:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:33:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:33:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:34:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:34:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:35:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:35:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:35:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:35:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:37:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:37:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:37:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:37:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:38:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-30 19:39:09 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:39:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:40:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:40:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:42:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:42:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 19:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:43:30 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:43:59 --> Could not find the language line "Home"
ERROR - 2024-04-30 19:44:57 --> Could not find the language line "products"
ERROR - 2024-04-30 19:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 19:46:03 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-30 19:46:23 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:46:23 --> Unable to connect to the database
ERROR - 2024-04-30 19:46:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:46:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:46:28 --> Unable to connect to the database
ERROR - 2024-04-30 19:46:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:47:00 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:47:00 --> Unable to connect to the database
ERROR - 2024-04-30 19:47:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:47:25 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:47:25 --> Unable to connect to the database
ERROR - 2024-04-30 19:47:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:47:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:47:30 --> Unable to connect to the database
ERROR - 2024-04-30 19:47:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:48:02 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:48:02 --> Unable to connect to the database
ERROR - 2024-04-30 19:48:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:48:02 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:48:02 --> Unable to connect to the database
ERROR - 2024-04-30 19:48:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:48:09 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-30 19:48:09 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:48:09 --> Unable to connect to the database
ERROR - 2024-04-30 19:48:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:48:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:48:30 --> Unable to connect to the database
ERROR - 2024-04-30 19:48:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:49:02 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:49:02 --> Unable to connect to the database
ERROR - 2024-04-30 19:49:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:49:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:49:14 --> Unable to connect to the database
ERROR - 2024-04-30 19:49:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:49:32 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:49:32 --> Unable to connect to the database
ERROR - 2024-04-30 19:49:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:49:57 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:49:57 --> Unable to connect to the database
ERROR - 2024-04-30 19:49:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:50:35 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:50:35 --> Unable to connect to the database
ERROR - 2024-04-30 19:50:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:52:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:52:04 --> Unable to connect to the database
ERROR - 2024-04-30 19:52:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:52:36 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:52:36 --> Unable to connect to the database
ERROR - 2024-04-30 19:52:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:54:02 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:54:02 --> Unable to connect to the database
ERROR - 2024-04-30 19:54:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:54:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:54:06 --> Unable to connect to the database
ERROR - 2024-04-30 19:54:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:54:07 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:54:08 --> Unable to connect to the database
ERROR - 2024-04-30 19:54:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:54:10 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:54:10 --> Unable to connect to the database
ERROR - 2024-04-30 19:54:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:54:12 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:54:12 --> Unable to connect to the database
ERROR - 2024-04-30 19:54:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:54:13 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:54:13 --> Unable to connect to the database
ERROR - 2024-04-30 19:54:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:54:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:54:14 --> Unable to connect to the database
ERROR - 2024-04-30 19:54:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:54:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:54:41 --> Unable to connect to the database
ERROR - 2024-04-30 19:54:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:56:35 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:56:35 --> Unable to connect to the database
ERROR - 2024-04-30 19:56:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:56:40 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-04-30 19:56:40 --> Unable to connect to the database
ERROR - 2024-04-30 19:56:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-30 19:57:36 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-04-30 19:58:47 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 19:59:11 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 19:59:28 --> Could not find the language line "Home"
ERROR - 2024-04-30 20:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:04:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:04:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:05:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:05:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:06:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:06:59 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 20:07:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:07:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:07:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:08:12 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 20:08:36 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 20:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:09:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:09:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:10:14 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 20:10:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:10:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:11:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:11:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:11:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:11:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:11:51 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 20:12:15 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 20:12:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 20:12:58 --> Could not find the language line "Home"
ERROR - 2024-04-30 20:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:13:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:13:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:13:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:13:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:13:35 --> Could not find the language line "Home"
ERROR - 2024-04-30 20:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:13:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:13:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:14:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:15:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:15:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:15:30 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 20:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:16:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:16:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:16:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:16:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:17:08 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 20:18:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:18:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:18:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:18:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:19:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:19:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:20:22 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 20:20:50 --> Could not find the language line "Home"
ERROR - 2024-04-30 20:21:32 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-04-30 20:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:22:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:22:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:22:07 --> Could not find the language line "Home"
ERROR - 2024-04-30 20:22:08 --> Could not find the language line "Home"
ERROR - 2024-04-30 20:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:22:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:22:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:23:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 20:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:23:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:23:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:23:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 20:23:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 20:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:24:01 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 20:24:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 20:24:26 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 20:24:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:25:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:25:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:26:00 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-04-30 20:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:27:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:27:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:27:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:27:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:28:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 20:28:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:28:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:29:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:30:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:30:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:30:56 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-30 20:31:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 20:32:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:32:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:32:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:32:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:33:37 --> Could not find the language line "Home"
ERROR - 2024-04-30 20:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:36:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:36:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:36:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:36:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:37:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:37:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:37:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:38:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 20:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:39:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:39:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:39:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:39:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:39:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:39:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:40:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:40:42 --> Could not find the language line "Home"
ERROR - 2024-04-30 20:40:42 --> Could not find the language line "Home"
ERROR - 2024-04-30 20:40:42 --> Could not find the language line "Home"
ERROR - 2024-04-30 20:40:43 --> Could not find the language line "Home"
ERROR - 2024-04-30 20:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:41:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:41:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:42:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:42:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:43:32 --> Could not find the language line "Home"
ERROR - 2024-04-30 20:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:44:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:45:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:45:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:45:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:46:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:47:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:49:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 20:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:52:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:52:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:53:14 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2024-04-30 20:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:54:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:54:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:54:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:54:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:54:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:56:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:56:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:56:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:56:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:56:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:57:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:57:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:57:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:58:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:58:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:58:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:58:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:59:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 20:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 20:59:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:00:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:00:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:00:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:00:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:01:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:01:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:02:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:02:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:03:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:03:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:03:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:03:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:05:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:05:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:06:02 --> Could not find the language line "products"
ERROR - 2024-04-30 21:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:07:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:07:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:08:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:09:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:09:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:09:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:09:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:11:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:11:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:11:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:12:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:12:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:13:32 --> Could not find the language line "Home"
ERROR - 2024-04-30 21:13:40 --> Could not find the language line "Home"
ERROR - 2024-04-30 21:13:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:13:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:13:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 21:13:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 21:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:14:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 21:14:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-30 21:14:09 --> Could not find the language line "Home"
ERROR - 2024-04-30 21:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:14:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:14:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:14:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:16:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:16:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:16:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:16:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:18:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:18:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:20:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:21:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:21:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:23:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:23:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:27:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:27:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:28:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:28:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:28:48 --> Could not find the language line "Home"
ERROR - 2024-04-30 21:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:31:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:31:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:32:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:32:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:33:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:33:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:35:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:35:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:35:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:35:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:36:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:36:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:36:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:36:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:39:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:39:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:41:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:41:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:43:33 --> Could not find the language line "Home"
ERROR - 2024-04-30 21:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:44:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:44:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:45:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:45:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:45:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:45:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:46:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:46:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:47:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:47:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:48:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:48:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:49:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:49:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:50:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:50:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:50:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:51:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:51:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:51:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:51:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:52:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:52:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:52:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:53:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:53:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:54:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:54:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 21:59:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 21:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:02:06 --> Could not find the language line "Home"
ERROR - 2024-04-30 22:02:07 --> Could not find the language line "Home"
ERROR - 2024-04-30 22:02:07 --> Could not find the language line "Home"
ERROR - 2024-04-30 22:02:08 --> Could not find the language line "Home"
ERROR - 2024-04-30 22:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:02:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:02:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:04:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:04:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:04:59 --> Could not find the language line "Home"
ERROR - 2024-04-30 22:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:06:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:06:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:06:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:06:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:07:06 --> Could not find the language line "products"
ERROR - 2024-04-30 22:07:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:07:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:07:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:07:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:10:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:10:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:11:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:11:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:13:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:13:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:13:40 --> Could not find the language line "Home"
ERROR - 2024-04-30 22:15:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:15:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 22:17:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:17:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:17:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:17:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:19:11 --> Could not find the language line "Home"
ERROR - 2024-04-30 22:19:25 --> Could not find the language line "Home"
ERROR - 2024-04-30 22:19:27 --> Could not find the language line "Home"
ERROR - 2024-04-30 22:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:22:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:23:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:23:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:24:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:24:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:25:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:25:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:26:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:26:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:26:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 22:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:27:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:27:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:29:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:29:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:29:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:30:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:30:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:32:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:32:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:32:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:32:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:34:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:34:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:35:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:35:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:35:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:35:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:36:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:36:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:37:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:37:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:39:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:39:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:39:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:41:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:41:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:41:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:41:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:43:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:43:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:43:40 --> Could not find the language line "Home"
ERROR - 2024-04-30 22:44:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:44:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:45:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:45:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:45:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:46:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:46:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:46:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:46:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:48:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:48:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:49:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:49:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:50:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:50:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:51:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:51:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:53:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:53:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:53:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:53:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:55:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:57:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:57:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:57:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:58:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:58:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:58:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:59:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:59:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 22:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 22:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:00:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:00:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:00:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:01:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:01:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:01:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 23:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:02:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:02:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:02:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:02:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:03:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:03:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:03:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:03:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:04:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:05:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:05:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:05:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:05:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:05:47 --> Could not find the language line "Home"
ERROR - 2024-04-30 23:05:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:05:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:06:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 23:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:07:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:07:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:08:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:08:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:10:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:10:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:11:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:11:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:11:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:13:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:13:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:13:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 23:13:35 --> Could not find the language line "Home"
ERROR - 2024-04-30 23:14:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:14:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:14:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:14:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:16:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:16:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:16:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:16:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:18:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:18:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:18:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:18:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:19:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:19:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:19:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:19:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:20:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:20:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:20:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:20:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:21:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:21:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:21:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:21:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:22:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:22:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:22:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:22:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:23:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:23:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:25:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:25:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:25:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:25:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:26:20 --> Could not find the language line "Home"
ERROR - 2024-04-30 23:27:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:27:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:27:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:27:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:27:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:28:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 23:28:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-30 23:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:28:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:28:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:28:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:28:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:29:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-30 23:30:09 --> Could not find the language line "products"
ERROR - 2024-04-30 23:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:36:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:36:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:36:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:36:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:38:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:38:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:39:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:39:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:40:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:42:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:43:36 --> Could not find the language line "Home"
ERROR - 2024-04-30 23:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:43:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:43:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:45:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:46:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:47:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:47:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:50:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-30 23:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-30 23:59:48 --> Could not find the language line "Home"
