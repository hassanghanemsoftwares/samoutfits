<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-20 00:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 00:01:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:01:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 00:01:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 00:01:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:01:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 00:01:55 --> Could not find the language line "Home"
ERROR - 2024-06-20 00:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 00:09:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 00:09:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 00:09:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 00:09:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:09:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 00:09:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:09:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 00:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 00:17:28 --> Could not find the language line "Home"
ERROR - 2024-06-20 00:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 00:22:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:22:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 00:26:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-20 00:26:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-20 00:26:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-20 00:26:19 --> Could not find the language line "Home"
ERROR - 2024-06-20 00:26:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 00:30:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 00:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 00:38:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 00:38:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:38:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 00:38:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 00:38:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:38:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 00:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 00:42:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:42:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 00:44:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 00:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 00:47:30 --> Could not find the language line "Home"
ERROR - 2024-06-20 00:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 01:07:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 01:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 01:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 01:16:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 01:16:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 01:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 01:16:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 01:16:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 01:16:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 01:16:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 01:17:32 --> Could not find the language line "Home"
ERROR - 2024-06-20 01:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 01:20:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 01:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 01:24:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 01:24:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 01:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 01:24:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 01:24:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 01:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 01:26:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 01:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 01:29:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 01:34:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 01:34:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 01:36:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 01:36:50 --> Could not find the language line "Home"
ERROR - 2024-06-20 01:37:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 01:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 01:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 01:45:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 01:47:28 --> Could not find the language line "Home"
ERROR - 2024-06-20 01:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 02:02:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:02:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 02:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 02:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 02:02:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:02:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 02:10:47 --> 404 Page Not Found: Metajson/index
ERROR - 2024-06-20 02:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 02:14:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:17:36 --> Could not find the language line "Home"
ERROR - 2024-06-20 02:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 02:24:31 --> Could not find the language line "Home"
ERROR - 2024-06-20 02:27:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:27:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 02:27:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:27:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 02:27:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 02:28:08 --> Could not find the language line "products"
ERROR - 2024-06-20 02:30:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 02:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 02:31:36 --> Could not find the language line "products"
ERROR - 2024-06-20 02:31:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 02:32:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 02:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 02:35:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 02:35:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:35:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:35:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:35:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 02:35:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:35:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 02:35:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:35:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 02:35:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 02:35:46 --> Could not find the language line "products"
ERROR - 2024-06-20 02:39:17 --> Could not find the language line "Home"
ERROR - 2024-06-20 02:39:25 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 02:39:37 --> Could not find the language line "Home"
ERROR - 2024-06-20 02:39:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 02:39:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 02:40:54 --> Could not find the language line "Home"
ERROR - 2024-06-20 02:41:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 02:41:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 02:41:21 --> Could not find the language line "Home"
ERROR - 2024-06-20 02:41:25 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 02:41:29 --> Could not find the language line "Home"
ERROR - 2024-06-20 02:41:30 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-20 02:41:42 --> Could not find the language line "Home"
ERROR - 2024-06-20 02:41:46 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 02:42:07 --> Could not find the language line "Home"
ERROR - 2024-06-20 02:42:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 02:42:22 --> Could not find the language line "Home"
ERROR - 2024-06-20 02:42:26 --> Could not find the language line "Perfume"
ERROR - 2024-06-20 02:42:29 --> Could not find the language line "Home"
ERROR - 2024-06-20 02:42:51 --> Could not find the language line "Home"
ERROR - 2024-06-20 02:42:52 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 02:42:54 --> Could not find the language line "Home"
ERROR - 2024-06-20 02:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 02:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-20 02:47:33 --> Could not find the language line "Home"
ERROR - 2024-06-20 02:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 02:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 03:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 03:00:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 03:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 03:00:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 03:07:03 --> Could not find the language line "Home"
ERROR - 2024-06-20 03:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 03:17:49 --> Could not find the language line "Home"
ERROR - 2024-06-20 03:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 03:22:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 03:23:38 --> Could not find the language line "Home"
ERROR - 2024-06-20 03:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 03:26:19 --> Could not find the language line "Home"
ERROR - 2024-06-20 03:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 03:29:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 03:33:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 03:34:21 --> Could not find the language line "Home"
ERROR - 2024-06-20 03:34:48 --> Could not find the language line "products"
ERROR - 2024-06-20 03:37:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 03:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 03:37:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 03:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 03:37:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 03:37:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 03:37:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 03:37:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 03:38:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 03:42:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 03:42:58 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-20 03:44:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 03:44:27 --> Could not find the language line "Perfume"
ERROR - 2024-06-20 03:44:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 03:47:44 --> Could not find the language line "Home"
ERROR - 2024-06-20 03:54:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 03:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 03:54:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 03:54:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 03:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 03:54:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 03:54:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 03:54:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 03:54:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 03:54:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 03:58:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 03:58:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 04:00:54 --> Could not find the language line "Home"
ERROR - 2024-06-20 04:01:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 04:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 04:02:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 04:02:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 04:03:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 04:03:16 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 04:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 04:07:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 04:07:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 04:07:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 04:07:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 04:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 04:09:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 04:09:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 04:09:09 --> Could not find the language line "Home"
ERROR - 2024-06-20 04:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 04:17:34 --> Could not find the language line "Home"
ERROR - 2024-06-20 04:19:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 04:24:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-20 04:28:19 --> Could not find the language line "products"
ERROR - 2024-06-20 04:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 04:34:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 04:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 04:36:15 --> Could not find the language line "Other"
ERROR - 2024-06-20 04:36:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 04:36:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 04:36:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 04:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 04:40:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 04:47:32 --> Could not find the language line "Home"
ERROR - 2024-06-20 04:49:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 04:53:02 --> Could not find the language line "Home"
ERROR - 2024-06-20 04:57:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:01:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 05:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 05:01:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:01:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:01:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:01:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 05:01:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 05:01:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:01:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 05:05:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 05:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 05:09:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:09:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 05:09:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:09:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:09:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 05:09:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:09:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 05:09:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 05:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 05:17:34 --> Could not find the language line "Home"
ERROR - 2024-06-20 05:17:55 --> Could not find the language line "Other"
ERROR - 2024-06-20 05:17:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:21:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:21:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 05:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 05:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 05:29:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 05:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 05:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 05:37:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 05:42:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 05:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 05:47:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 05:47:38 --> Could not find the language line "Home"
ERROR - 2024-06-20 05:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 05:50:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 05:59:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 06:00:34 --> Could not find the language line "Home"
ERROR - 2024-06-20 06:01:00 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 06:03:12 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 06:04:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 06:04:09 --> Could not find the language line "Home"
ERROR - 2024-06-20 06:04:12 --> Could not find the language line "Other"
ERROR - 2024-06-20 06:04:17 --> Could not find the language line "Home"
ERROR - 2024-06-20 06:06:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 06:06:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 06:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:06:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 06:06:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 06:06:57 --> Could not find the language line "Socks"
ERROR - 2024-06-20 06:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:12:13 --> Could not find the language line "Home"
ERROR - 2024-06-20 06:13:47 --> 404 Page Not Found: Metajson/index
ERROR - 2024-06-20 06:17:53 --> Could not find the language line "Home"
ERROR - 2024-06-20 06:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:18:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 06:18:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 06:20:05 --> Could not find the language line "Home"
ERROR - 2024-06-20 06:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:23:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 06:23:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 06:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:30:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 06:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:30:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 06:30:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 06:30:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 06:31:58 --> Could not find the language line "Home"
ERROR - 2024-06-20 06:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:34:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 06:34:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 06:35:59 --> Could not find the language line "Home"
ERROR - 2024-06-20 06:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:38:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 06:39:03 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 06:39:12 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 06:39:55 --> Could not find the language line "Home"
ERROR - 2024-06-20 06:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:47:34 --> Could not find the language line "Home"
ERROR - 2024-06-20 06:50:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:50:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 06:50:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 06:50:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 06:54:04 --> Could not find the language line "Other"
ERROR - 2024-06-20 06:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:57:51 --> Could not find the language line "Home"
ERROR - 2024-06-20 06:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:58:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 06:58:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 06:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:58:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 06:58:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 06:58:55 --> Could not find the language line "Home"
ERROR - 2024-06-20 06:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 06:59:15 --> Could not find the language line "Home"
ERROR - 2024-06-20 07:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:02:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 07:06:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 07:06:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 07:10:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 07:14:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 07:14:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 07:14:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 07:15:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 07:17:32 --> Could not find the language line "Home"
ERROR - 2024-06-20 07:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:30:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 07:31:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 07:31:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 07:31:13 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 07:31:34 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 07:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:32:25 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 07:32:28 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 07:33:05 --> Could not find the language line "Home"
ERROR - 2024-06-20 07:33:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 07:33:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 07:33:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 07:33:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 07:33:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 07:33:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 07:33:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 07:33:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 07:33:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 07:33:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 07:33:58 --> Could not find the language line "Home"
ERROR - 2024-06-20 07:35:33 --> Could not find the language line "Home"
ERROR - 2024-06-20 07:36:01 --> Could not find the language line "Home"
ERROR - 2024-06-20 07:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:39:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 07:40:58 --> Could not find the language line "Home"
ERROR - 2024-06-20 07:42:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 07:42:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 07:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:42:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 07:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:42:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 07:44:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 07:45:53 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 07:46:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 07:46:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 07:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:46:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 07:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:47:33 --> Could not find the language line "Home"
ERROR - 2024-06-20 07:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:49:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 07:49:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 07:49:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 07:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:50:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 07:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:52:15 --> Could not find the language line "Home"
ERROR - 2024-06-20 07:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:54:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 07:54:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 07:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:54:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 07:56:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 07:57:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 07:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 07:59:06 --> Could not find the language line "Home"
ERROR - 2024-06-20 08:01:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 08:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:02:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 08:03:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 08:03:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 08:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:05:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 08:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:05:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 08:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:09:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-20 08:09:07 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-20 08:09:07 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-20 08:10:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 08:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:14:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 08:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:15:22 --> Could not find the language line "products"
ERROR - 2024-06-20 08:17:36 --> Could not find the language line "Home"
ERROR - 2024-06-20 08:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:21:47 --> Could not find the language line "Home"
ERROR - 2024-06-20 08:22:04 --> Could not find the language line "Home"
ERROR - 2024-06-20 08:22:14 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-20 08:26:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 08:28:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 08:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:33:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 08:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:34:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 08:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:36:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 08:36:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 08:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:40:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 08:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:42:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 08:44:08 --> Could not find the language line "Home"
ERROR - 2024-06-20 08:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:46:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 08:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:47:33 --> Could not find the language line "Home"
ERROR - 2024-06-20 08:48:17 --> Could not find the language line "Home"
ERROR - 2024-06-20 08:49:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 08:49:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 08:49:51 --> Could not find the language line "Home"
ERROR - 2024-06-20 08:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:50:33 --> Could not find the language line "Home"
ERROR - 2024-06-20 08:50:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 08:50:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 08:50:56 --> Could not find the language line "Home"
ERROR - 2024-06-20 08:50:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 08:51:26 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 08:51:50 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 08:51:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 08:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:52:00 --> Could not find the language line "Home"
ERROR - 2024-06-20 08:52:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 08:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:52:18 --> Could not find the language line "Home"
ERROR - 2024-06-20 08:52:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 08:52:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 08:52:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 08:52:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 08:53:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 08:53:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 08:53:07 --> Could not find the language line "Home"
ERROR - 2024-06-20 08:53:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 08:53:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 08:53:37 --> Could not find the language line "Home"
ERROR - 2024-06-20 08:53:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 08:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:56:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 08:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:56:33 --> Could not find the language line "products"
ERROR - 2024-06-20 08:56:36 --> Could not find the language line "products"
ERROR - 2024-06-20 08:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:58:14 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 08:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 08:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:00:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 09:00:28 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 09:02:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 09:02:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 09:04:58 --> Could not find the language line "Home"
ERROR - 2024-06-20 09:05:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 09:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:08:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 09:08:51 --> Could not find the language line "Home"
ERROR - 2024-06-20 09:08:51 --> Could not find the language line "Home"
ERROR - 2024-06-20 09:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:09:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 09:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:10:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 09:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:11:50 --> Could not find the language line "Home"
ERROR - 2024-06-20 09:12:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 09:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:15:40 --> Could not find the language line "Home"
ERROR - 2024-06-20 09:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:16:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 09:16:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 09:17:36 --> Could not find the language line "Home"
ERROR - 2024-06-20 09:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:19:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 09:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:26:22 --> Could not find the language line "Home"
ERROR - 2024-06-20 09:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:26:56 --> Could not find the language line "Home"
ERROR - 2024-06-20 09:27:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 09:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:27:38 --> Could not find the language line "Home"
ERROR - 2024-06-20 09:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:28:38 --> Could not find the language line "Home"
ERROR - 2024-06-20 09:28:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 09:29:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 09:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:31:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 09:33:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 09:34:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 09:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:39:47 --> Could not find the language line "Home"
ERROR - 2024-06-20 09:40:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 09:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:46:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 09:47:34 --> Could not find the language line "Home"
ERROR - 2024-06-20 09:48:50 --> Could not find the language line "Home"
ERROR - 2024-06-20 09:50:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 09:50:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 09:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:50:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 09:54:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 09:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 09:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:03:57 --> Could not find the language line "Home"
ERROR - 2024-06-20 10:05:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 10:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:06:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 10:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:06:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 10:10:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 10:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:12:18 --> Could not find the language line "Home"
ERROR - 2024-06-20 10:15:41 --> Could not find the language line "Home"
ERROR - 2024-06-20 10:16:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 10:16:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 10:17:36 --> Could not find the language line "Home"
ERROR - 2024-06-20 10:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:23:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 10:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:31:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 10:31:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 10:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:35:40 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-06-20 10:38:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 10:38:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 10:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:41:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 10:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:47:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 10:47:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 10:47:37 --> Could not find the language line "Home"
ERROR - 2024-06-20 10:47:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 10:49:33 --> Could not find the language line "Home"
ERROR - 2024-06-20 10:49:44 --> Could not find the language line "Home"
ERROR - 2024-06-20 10:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 10:56:09 --> Could not find the language line "Home"
ERROR - 2024-06-20 10:58:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 11:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:04:06 --> Could not find the language line "Socks"
ERROR - 2024-06-20 11:04:43 --> Could not find the language line "Other"
ERROR - 2024-06-20 11:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:10:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 11:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:16:05 --> Could not find the language line "Home"
ERROR - 2024-06-20 11:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:17:35 --> Could not find the language line "Home"
ERROR - 2024-06-20 11:19:26 --> Could not find the language line "Home"
ERROR - 2024-06-20 11:21:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 11:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:30:32 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-06-20 11:32:57 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-20 11:34:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 11:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:41:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 11:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:42:39 --> Could not find the language line "Home"
ERROR - 2024-06-20 11:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:47:35 --> Could not find the language line "Home"
ERROR - 2024-06-20 11:50:57 --> Could not find the language line "Home"
ERROR - 2024-06-20 11:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 11:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:00:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 12:01:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 12:01:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 12:02:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 12:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:02:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 12:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:04:02 --> Could not find the language line "Home"
ERROR - 2024-06-20 12:06:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 12:06:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 12:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:07:09 --> Could not find the language line "Home"
ERROR - 2024-06-20 12:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:07:54 --> Could not find the language line "Home"
ERROR - 2024-06-20 12:08:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 12:08:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 12:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:10:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 12:14:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 12:16:35 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 12:17:39 --> Could not find the language line "Home"
ERROR - 2024-06-20 12:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:22:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 12:22:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 12:22:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 12:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:25:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 12:25:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 12:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:28:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 12:28:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 12:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:31:13 --> Could not find the language line "Home"
ERROR - 2024-06-20 12:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:35:12 --> Could not find the language line "Home"
ERROR - 2024-06-20 12:35:44 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-20 12:36:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 12:36:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 12:36:08 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-20 12:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:42:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 12:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:44:14 --> Could not find the language line "Home"
ERROR - 2024-06-20 12:44:44 --> Could not find the language line "Home"
ERROR - 2024-06-20 12:44:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 12:45:10 --> Could not find the language line "Home"
ERROR - 2024-06-20 12:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:47:39 --> Could not find the language line "Home"
ERROR - 2024-06-20 12:49:07 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 12:49:14 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 12:49:25 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 12:49:52 --> Could not find the language line "Home"
ERROR - 2024-06-20 12:50:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 12:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:50:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 12:50:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 12:50:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 12:50:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 12:50:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 12:50:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 12:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:51:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 12:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:53:45 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 12:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 12:56:49 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 13:01:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 13:01:24 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:04:01 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 13:04:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 13:04:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 13:04:13 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 13:06:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 13:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:08:51 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:08:57 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:10:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 13:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:10:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 13:10:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 13:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:10:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 13:10:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 13:10:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 13:10:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 13:10:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:10:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:10:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:10:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 13:10:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:10:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:10:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 13:11:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 13:12:06 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:13:53 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:14:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 13:14:47 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:14:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:14:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:15:21 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:15:23 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:17:24 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:17:27 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:17:29 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:17:37 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:20:23 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:22:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 13:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:26:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 13:26:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 13:26:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 13:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:32:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:32:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:33:08 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:34:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:34:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:36:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:37:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:41:58 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:42:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:42:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 13:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:42:59 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:46:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 13:47:36 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:56:06 --> Could not find the language line "Home"
ERROR - 2024-06-20 13:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 13:56:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 13:58:15 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-20 13:58:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 14:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:02:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 14:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:02:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 14:02:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 14:02:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 14:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:03:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 14:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:10:44 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-20 14:10:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 14:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:11:00 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:11:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 14:11:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 14:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:13:07 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:13:13 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:13:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:13:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:13:53 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:13:56 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:14:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 14:14:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-20 14:14:26 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:15:48 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:15:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 14:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:16:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 14:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:17:37 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:20:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 14:20:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 14:20:34 --> Could not find the language line "Perfume"
ERROR - 2024-06-20 14:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:20:52 --> Could not find the language line "Perfume"
ERROR - 2024-06-20 14:21:20 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 14:21:32 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 14:22:34 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 14:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:25:45 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:25:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 14:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:25:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 14:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:26:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 14:26:12 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-20 14:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:26:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 14:26:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 14:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:29:04 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:29:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:29:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:29:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:30:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:31:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:31:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:31:17 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:31:41 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:31:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 14:31:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 14:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:33:49 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:34:51 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 14:34:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 14:35:10 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:35:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 14:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:42:13 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:42:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 14:43:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:43:36 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:43:44 --> Could not find the language line "Socks"
ERROR - 2024-06-20 14:43:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 14:43:55 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:43:57 --> Could not find the language line "Perfume"
ERROR - 2024-06-20 14:43:59 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:44:52 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:44:54 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:46:19 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:46:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:46:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:46:47 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 14:46:47 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:46:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 14:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:47:22 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:47:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 14:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:47:40 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 14:58:07 --> Could not find the language line "Home"
ERROR - 2024-06-20 14:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:03:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 15:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:06:28 --> Could not find the language line "Home"
ERROR - 2024-06-20 15:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:10:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:17:00 --> Could not find the language line "Home"
ERROR - 2024-06-20 15:17:38 --> Could not find the language line "Home"
ERROR - 2024-06-20 15:17:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-20 15:18:07 --> Could not find the language line "products"
ERROR - 2024-06-20 15:18:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:22:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:26:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:26:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:26:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:26:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 15:30:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:31:04 --> Could not find the language line "Home"
ERROR - 2024-06-20 15:32:07 --> Could not find the language line "Home"
ERROR - 2024-06-20 15:32:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 15:32:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 15:32:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 15:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:34:24 --> Could not find the language line "Home"
ERROR - 2024-06-20 15:34:34 --> Could not find the language line "Home"
ERROR - 2024-06-20 15:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:35:15 --> Could not find the language line "Bracelets"
ERROR - 2024-06-20 15:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:35:32 --> Could not find the language line "Home"
ERROR - 2024-06-20 15:36:29 --> Could not find the language line "Home"
ERROR - 2024-06-20 15:36:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 15:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:43:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 15:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:43:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:43:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:43:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:44:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 15:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:45:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 15:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:46:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 15:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:47:38 --> Could not find the language line "Home"
ERROR - 2024-06-20 15:49:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 15:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:50:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 15:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:59:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:59:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 15:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 15:59:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:59:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:59:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:59:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 15:59:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 15:59:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 16:00:23 --> Could not find the language line "Other"
ERROR - 2024-06-20 16:01:08 --> Could not find the language line "Home"
ERROR - 2024-06-20 16:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:06:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-20 16:06:41 --> Could not find the language line "products"
ERROR - 2024-06-20 16:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:11:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 16:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:17:39 --> Could not find the language line "Home"
ERROR - 2024-06-20 16:18:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 16:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:19:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 16:19:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 16:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:19:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 16:19:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 16:24:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-20 16:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:28:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 16:30:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 16:31:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 16:31:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 16:31:46 --> Could not find the language line "Home"
ERROR - 2024-06-20 16:33:44 --> Could not find the language line "Home"
ERROR - 2024-06-20 16:34:16 --> Could not find the language line "Home"
ERROR - 2024-06-20 16:34:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 16:34:41 --> Could not find the language line "Home"
ERROR - 2024-06-20 16:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:35:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 16:35:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 16:35:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 16:35:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 16:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:35:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 16:35:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 16:35:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 16:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:35:32 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 16:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:36:37 --> Could not find the language line "Perfume"
ERROR - 2024-06-20 16:36:49 --> Could not find the language line "Other"
ERROR - 2024-06-20 16:37:39 --> Could not find the language line "Other"
ERROR - 2024-06-20 16:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:38:06 --> Could not find the language line "Other"
ERROR - 2024-06-20 16:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:38:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:39:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 16:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:39:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:39:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:40:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:40:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:41:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:41:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:41:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:41:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:42:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:42:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:43:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:43:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:44:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:44:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:44:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:45:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:45:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:46:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:46:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:46:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:47:04 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 16:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:47:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:47:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:47:39 --> Could not find the language line "Home"
ERROR - 2024-06-20 16:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:48:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:48:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:49:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:49:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:50:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:50:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:50:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:50:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:51:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:51:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:52:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:52:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:52:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 16:52:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:52:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:53:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:53:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 16:55:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:55:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:55:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:55:39 --> Could not find the language line "Home"
ERROR - 2024-06-20 16:55:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:55:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-20 16:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:03:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 17:05:45 --> Could not find the language line "Home"
ERROR - 2024-06-20 17:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:11:56 --> Could not find the language line "Home"
ERROR - 2024-06-20 17:12:31 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 17:15:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 17:17:39 --> Could not find the language line "Home"
ERROR - 2024-06-20 17:19:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 17:19:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 17:21:10 --> Could not find the language line "Home"
ERROR - 2024-06-20 17:21:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 17:21:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 17:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:27:53 --> Could not find the language line "Other"
ERROR - 2024-06-20 17:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:31:21 --> Could not find the language line "Home"
ERROR - 2024-06-20 17:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:34:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 17:36:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 17:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:47:39 --> Could not find the language line "Home"
ERROR - 2024-06-20 17:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 17:52:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 17:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 18:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 18:08:02 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-20 18:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 18:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 18:09:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 18:09:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 18:09:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 18:09:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 18:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 18:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 18:13:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 18:17:40 --> Could not find the language line "Home"
ERROR - 2024-06-20 18:18:06 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-20 18:21:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 18:24:50 --> Could not find the language line "Home"
ERROR - 2024-06-20 18:26:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 18:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 18:37:43 --> Could not find the language line "Home"
ERROR - 2024-06-20 18:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 18:39:59 --> Could not find the language line "Home"
ERROR - 2024-06-20 18:40:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 18:40:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 18:40:32 --> Could not find the language line "Home"
ERROR - 2024-06-20 18:40:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 18:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 18:41:09 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 18:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 18:41:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 18:41:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 18:42:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 18:42:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 18:42:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 18:42:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 18:43:04 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 18:43:08 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 18:44:14 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 18:44:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 18:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 18:47:40 --> Could not find the language line "Home"
ERROR - 2024-06-20 18:50:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 18:50:18 --> Could not find the language line "Home"
ERROR - 2024-06-20 18:51:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 18:54:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 18:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 18:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 18:58:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 18:58:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 19:02:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 19:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 19:02:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 19:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 19:02:40 --> Could not find the language line "Home"
ERROR - 2024-06-20 19:06:23 --> Could not find the language line "Home"
ERROR - 2024-06-20 19:10:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 19:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 19:10:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 19:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 19:10:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 19:14:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 19:17:42 --> Could not find the language line "Home"
ERROR - 2024-06-20 19:18:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 19:26:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 19:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 19:28:52 --> Could not find the language line "Home"
ERROR - 2024-06-20 19:30:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 19:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 19:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 19:42:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 19:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 19:42:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 19:42:55 --> Could not find the language line "Home"
ERROR - 2024-06-20 19:43:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 19:43:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 19:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 19:47:41 --> Could not find the language line "Home"
ERROR - 2024-06-20 19:50:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 19:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 19:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 19:54:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 19:55:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-20 19:55:27 --> Could not find the language line "Home"
ERROR - 2024-06-20 19:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:02:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 20:06:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 20:08:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 20:08:24 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-20 20:10:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 20:10:17 --> Could not find the language line "Home"
ERROR - 2024-06-20 20:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:10:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 20:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:11:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 20:14:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 20:14:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 20:14:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:14:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 20:15:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 20:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:16:43 --> Could not find the language line "Home"
ERROR - 2024-06-20 20:17:04 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-20 20:17:04 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-20 20:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:17:18 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-20 20:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:17:42 --> Could not find the language line "Home"
ERROR - 2024-06-20 20:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:18:09 --> Could not find the language line "Home"
ERROR - 2024-06-20 20:18:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 20:18:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 20:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:22:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 20:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:24:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-20 20:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:26:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 20:30:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 20:35:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 20:35:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 20:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 20:42:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 20:46:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 20:47:43 --> Could not find the language line "Home"
ERROR - 2024-06-20 20:54:40 --> 404 Page Not Found: Vendor/laravel-filemanager
ERROR - 2024-06-20 20:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 21:02:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 21:02:06 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-20 21:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 21:02:27 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 21:02:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 21:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 21:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 21:14:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 21:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 21:17:55 --> Could not find the language line "Home"
ERROR - 2024-06-20 21:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 21:26:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 21:30:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 21:30:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 21:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 21:34:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 21:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 21:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 21:46:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 21:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 21:46:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 21:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 21:47:44 --> Could not find the language line "Home"
ERROR - 2024-06-20 21:50:25 --> Could not find the language line "Other"
ERROR - 2024-06-20 21:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 21:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 22:02:19 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-20 22:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 22:06:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 22:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 22:14:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 22:17:49 --> Could not find the language line "Home"
ERROR - 2024-06-20 22:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 22:22:31 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 22:22:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 22:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 22:30:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 22:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 22:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 22:38:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 22:38:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 22:38:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 22:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 22:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 22:38:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 22:38:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 22:38:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 22:38:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 22:38:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 22:38:48 --> Could not find the language line "Home"
ERROR - 2024-06-20 22:39:09 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-20 22:41:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-20 22:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 22:46:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 22:47:59 --> Could not find the language line "Home"
ERROR - 2024-06-20 22:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 22:50:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 22:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 22:58:20 --> Could not find the language line "Home"
ERROR - 2024-06-20 22:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 22:58:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-20 23:08:22 --> Could not find the language line "Home"
ERROR - 2024-06-20 23:10:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 23:14:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 23:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 23:17:50 --> Could not find the language line "Home"
ERROR - 2024-06-20 23:18:44 --> Could not find the language line "Clothing"
ERROR - 2024-06-20 23:30:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 23:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 23:38:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 23:42:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-20 23:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-20 23:47:46 --> Could not find the language line "Home"
ERROR - 2024-06-20 23:50:43 --> 404 Page Not Found: Assets/css
