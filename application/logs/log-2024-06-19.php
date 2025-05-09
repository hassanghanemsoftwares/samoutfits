<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-19 00:07:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-19 00:07:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-19 00:07:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-19 00:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 00:17:12 --> Could not find the language line "Home"
ERROR - 2024-06-19 00:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 00:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 00:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 00:36:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 00:36:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 00:40:13 --> Could not find the language line "Home"
ERROR - 2024-06-19 00:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 00:45:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 00:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 00:47:16 --> Could not find the language line "Home"
ERROR - 2024-06-19 00:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 00:57:46 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 00:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 00:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 00:57:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 00:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 00:57:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 00:57:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 00:57:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 00:57:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 00:57:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 00:57:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 01:06:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 01:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:06:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 01:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:06:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 01:06:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 01:06:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 01:06:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 01:06:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 01:06:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 01:06:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 01:06:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 01:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:14:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 01:14:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 01:17:20 --> Could not find the language line "Home"
ERROR - 2024-06-19 01:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:27:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 01:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:27:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 01:32:16 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-19 01:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:37:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 01:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:39:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 01:39:41 --> Could not find the language line "Home"
ERROR - 2024-06-19 01:40:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 01:40:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 01:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:43:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 01:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:43:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 01:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:44:57 --> Could not find the language line "Other"
ERROR - 2024-06-19 01:47:11 --> Could not find the language line "Home"
ERROR - 2024-06-19 01:47:47 --> Could not find the language line "Other"
ERROR - 2024-06-19 01:47:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 01:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:47:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 01:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:52:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 01:52:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 01:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:52:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 01:55:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 01:55:38 --> Could not find the language line "Perfume"
ERROR - 2024-06-19 01:55:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 01:55:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-19 01:55:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-19 01:55:41 --> Could not find the language line "Other"
ERROR - 2024-06-19 01:55:42 --> Could not find the language line "Other"
ERROR - 2024-06-19 01:55:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 01:55:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 01:55:46 --> Could not find the language line "Bracelets"
ERROR - 2024-06-19 01:55:47 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-19 01:56:08 --> Could not find the language line "Bracelets"
ERROR - 2024-06-19 01:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:56:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 01:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 01:58:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 02:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:00:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 02:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:00:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 02:00:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 02:00:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 02:00:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 02:04:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 02:14:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 02:16:21 --> Could not find the language line "Other"
ERROR - 2024-06-19 02:16:37 --> Could not find the language line "Socks"
ERROR - 2024-06-19 02:17:21 --> Could not find the language line "Home"
ERROR - 2024-06-19 02:20:19 --> Could not find the language line "Home"
ERROR - 2024-06-19 02:20:58 --> Could not find the language line "Home"
ERROR - 2024-06-19 02:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:24:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 02:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:31:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 02:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:46:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 02:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:46:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 02:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:46:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 02:47:12 --> Could not find the language line "Home"
ERROR - 2024-06-19 02:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:54:16 --> Could not find the language line "Home"
ERROR - 2024-06-19 02:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:54:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 02:54:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 02:54:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 02:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 02:58:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 02:58:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 02:58:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 02:58:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 03:02:04 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 03:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 03:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 03:11:09 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 03:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 03:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 03:17:22 --> Could not find the language line "Home"
ERROR - 2024-06-19 03:18:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 03:18:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 03:19:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 03:23:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 03:24:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-19 03:25:15 --> Could not find the language line "Home"
ERROR - 2024-06-19 03:25:20 --> Could not find the language line "Home"
ERROR - 2024-06-19 03:28:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 03:29:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 03:30:48 --> Could not find the language line "Home"
ERROR - 2024-06-19 03:32:40 --> Could not find the language line "Home"
ERROR - 2024-06-19 03:36:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 03:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 03:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 03:36:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 03:36:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 03:36:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 03:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 03:40:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 03:40:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 03:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 03:40:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 03:40:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 03:47:49 --> Could not find the language line "Home"
ERROR - 2024-06-19 03:50:59 --> Could not find the language line "Home"
ERROR - 2024-06-19 03:56:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-19 03:56:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-19 03:56:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-19 03:59:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 03:59:15 --> Could not find the language line "Other"
ERROR - 2024-06-19 04:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 04:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 04:13:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 04:17:18 --> Could not find the language line "Home"
ERROR - 2024-06-19 04:20:38 --> Could not find the language line "Home"
ERROR - 2024-06-19 04:20:40 --> Could not find the language line "Home"
ERROR - 2024-06-19 04:21:27 --> Could not find the language line "Home"
ERROR - 2024-06-19 04:24:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 04:24:23 --> Could not find the language line "Home"
ERROR - 2024-06-19 04:26:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 04:26:37 --> Could not find the language line "Home"
ERROR - 2024-06-19 04:30:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 04:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 04:34:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 04:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 04:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 04:42:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 04:46:53 --> Could not find the language line "Home"
ERROR - 2024-06-19 04:47:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 04:47:15 --> Could not find the language line "Home"
ERROR - 2024-06-19 04:50:26 --> Could not find the language line "Home"
ERROR - 2024-06-19 04:51:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 04:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 04:59:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 05:03:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 05:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 05:12:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 05:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 05:17:14 --> Could not find the language line "Home"
ERROR - 2024-06-19 05:20:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 05:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 05:28:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 05:32:59 --> Could not find the language line "Home"
ERROR - 2024-06-19 05:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 05:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 05:44:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 05:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 05:47:13 --> Could not find the language line "Home"
ERROR - 2024-06-19 05:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:02:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 06:03:59 --> Could not find the language line "Home"
ERROR - 2024-06-19 06:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:07:47 --> Could not find the language line "Home"
ERROR - 2024-06-19 06:08:13 --> Could not find the language line "Home"
ERROR - 2024-06-19 06:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:14:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 06:14:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 06:14:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 06:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:14:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 06:15:23 --> Could not find the language line "Home"
ERROR - 2024-06-19 06:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:17:14 --> Could not find the language line "Home"
ERROR - 2024-06-19 06:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:31:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 06:32:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 06:32:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 06:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:37:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 06:37:37 --> Could not find the language line "Other"
ERROR - 2024-06-19 06:39:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 06:39:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 06:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:42:34 --> Could not find the language line "Home"
ERROR - 2024-06-19 06:42:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 06:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:43:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 06:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:43:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 06:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:43:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 06:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:45:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 06:45:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 06:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:47:17 --> Could not find the language line "Home"
ERROR - 2024-06-19 06:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:51:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 06:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:56:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 06:56:13 --> Could not find the language line "Bracelets"
ERROR - 2024-06-19 06:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 06:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:08:38 --> Could not find the language line "Home"
ERROR - 2024-06-19 07:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:09:00 --> Could not find the language line "Home"
ERROR - 2024-06-19 07:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:17:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 07:17:15 --> Could not find the language line "Home"
ERROR - 2024-06-19 07:23:06 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 07:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:26:16 --> Could not find the language line "products"
ERROR - 2024-06-19 07:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:27:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 07:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:28:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 07:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:29:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 07:29:42 --> Could not find the language line "Home"
ERROR - 2024-06-19 07:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:38:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 07:38:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-19 07:41:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 07:41:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 07:42:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 07:42:24 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 07:42:24 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 07:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:47:15 --> Could not find the language line "Home"
ERROR - 2024-06-19 07:52:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 07:54:28 --> Could not find the language line "Bracelets"
ERROR - 2024-06-19 07:54:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 07:55:39 --> Could not find the language line "Home"
ERROR - 2024-06-19 07:56:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 07:57:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 07:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:57:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 07:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:57:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 07:58:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 07:58:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 07:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 07:58:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 07:58:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 07:58:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 07:58:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 07:59:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 07:59:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 07:59:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 07:59:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 07:59:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 08:02:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 08:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:02:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 08:02:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 08:02:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 08:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:03:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 08:04:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 08:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:05:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 08:06:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 08:06:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 08:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:15:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 08:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:15:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 08:15:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 08:15:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 08:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:17:16 --> Could not find the language line "Home"
ERROR - 2024-06-19 08:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:19:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 08:25:19 --> Could not find the language line "Home"
ERROR - 2024-06-19 08:27:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 08:27:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 08:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:28:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 08:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:30:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 08:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:32:50 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 08:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:34:29 --> Could not find the language line "Socks"
ERROR - 2024-06-19 08:35:46 --> Could not find the language line "Home"
ERROR - 2024-06-19 08:36:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 08:42:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 08:43:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 08:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:47:15 --> Could not find the language line "Home"
ERROR - 2024-06-19 08:48:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 08:48:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 08:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 08:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:06:17 --> Could not find the language line "Home"
ERROR - 2024-06-19 09:06:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 09:06:47 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 09:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:07:17 --> Could not find the language line "Home"
ERROR - 2024-06-19 09:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:09:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 09:17:19 --> Could not find the language line "Home"
ERROR - 2024-06-19 09:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:19:12 --> Could not find the language line "Home"
ERROR - 2024-06-19 09:22:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 09:25:32 --> Could not find the language line "Home"
ERROR - 2024-06-19 09:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:27:41 --> Could not find the language line "Home"
ERROR - 2024-06-19 09:30:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 09:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:37:52 --> Could not find the language line "Other"
ERROR - 2024-06-19 09:38:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 09:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:39:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 09:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:40:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 09:40:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 09:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:47:16 --> Could not find the language line "Home"
ERROR - 2024-06-19 09:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:54:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 09:54:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 09:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:55:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 09:55:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 09:55:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 09:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:55:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 09:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 09:59:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 10:00:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 10:00:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 10:02:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 10:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:03:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 10:03:54 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:04:11 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:04:15 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:04:17 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:04:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 10:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:05:04 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:06:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 10:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:09:19 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:10:04 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:12:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 10:17:18 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:20:53 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:20:54 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:24:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 10:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:24:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 10:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:24:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 10:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:24:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 10:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:29:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 10:29:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 10:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:34:00 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:34:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 10:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:37:24 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:37:51 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:38:17 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:38:24 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 10:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:38:34 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 10:39:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 10:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:39:13 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 10:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:39:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 10:39:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 10:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:39:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 10:40:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 10:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:40:13 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:41:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 10:41:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 10:41:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 10:41:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 10:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:41:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 10:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:45:15 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:45:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 10:45:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 10:45:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 10:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:46:27 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:47:18 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:49:00 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:49:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 10:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:49:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 10:49:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 10:50:13 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:53:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 10:55:35 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 10:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 10:56:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 10:56:24 --> Could not find the language line "Home"
ERROR - 2024-06-19 10:57:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 11:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:04:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 11:04:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 11:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:05:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 11:05:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 11:06:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 11:07:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 11:10:19 --> Could not find the language line "Other"
ERROR - 2024-06-19 11:10:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 11:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:10:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 11:13:17 --> Could not find the language line "Home"
ERROR - 2024-06-19 11:14:01 --> Could not find the language line "Home"
ERROR - 2024-06-19 11:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:16:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 11:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:17:18 --> Could not find the language line "Home"
ERROR - 2024-06-19 11:18:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 11:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:22:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 11:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:22:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 11:23:22 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 11:23:28 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 11:23:32 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 11:23:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 11:23:34 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-06-19 11:23:34 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-06-19 11:23:34 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-06-19 11:23:34 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-06-19 11:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:23:54 --> Could not find the language line "Home"
ERROR - 2024-06-19 11:24:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 11:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:25:35 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 11:25:46 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 11:26:01 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 11:26:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 11:26:31 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 11:26:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 11:27:01 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 11:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:28:32 --> Could not find the language line "Bracelets"
ERROR - 2024-06-19 11:33:14 --> Could not find the language line "Home"
ERROR - 2024-06-19 11:37:00 --> Could not find the language line "Home"
ERROR - 2024-06-19 11:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:43:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 11:43:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 11:47:19 --> Could not find the language line "Home"
ERROR - 2024-06-19 11:47:26 --> Could not find the language line "Home"
ERROR - 2024-06-19 11:47:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 11:48:06 --> Could not find the language line "Socks"
ERROR - 2024-06-19 11:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 11:52:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 11:56:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 11:58:32 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 12:00:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 12:00:26 --> Could not find the language line "Home"
ERROR - 2024-06-19 12:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:01:59 --> Could not find the language line "Other"
ERROR - 2024-06-19 12:04:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 12:07:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 12:07:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 12:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:07:28 --> Could not find the language line "Home"
ERROR - 2024-06-19 12:07:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 12:07:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 12:07:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 12:07:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 12:08:18 --> Could not find the language line "Home"
ERROR - 2024-06-19 12:11:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 12:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:12:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 12:16:07 --> Could not find the language line "Home"
ERROR - 2024-06-19 12:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:17:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 12:17:19 --> Could not find the language line "Home"
ERROR - 2024-06-19 12:19:50 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 12:19:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 12:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:22:37 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-19 12:25:18 --> Could not find the language line "Home"
ERROR - 2024-06-19 12:28:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-19 12:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:29:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 12:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:29:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 12:29:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 12:29:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 12:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:36:57 --> Could not find the language line "Home"
ERROR - 2024-06-19 12:37:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 12:37:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 12:37:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 12:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:37:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 12:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:37:54 --> Could not find the language line "Home"
ERROR - 2024-06-19 12:38:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 12:38:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 12:38:44 --> Could not find the language line "Home"
ERROR - 2024-06-19 12:38:57 --> Could not find the language line "Home"
ERROR - 2024-06-19 12:39:00 --> Could not find the language line "Home"
ERROR - 2024-06-19 12:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:40:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 12:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:42:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 12:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:47:19 --> Could not find the language line "Home"
ERROR - 2024-06-19 12:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:57:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 12:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 12:58:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 12:59:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 12:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:02:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 13:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:07:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 13:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:10:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 13:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:15:27 --> Could not find the language line "Home"
ERROR - 2024-06-19 13:15:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-19 13:15:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-19 13:17:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 13:17:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 13:17:20 --> Could not find the language line "Home"
ERROR - 2024-06-19 13:19:12 --> Could not find the language line "Home"
ERROR - 2024-06-19 13:19:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 13:22:21 --> Could not find the language line "Home"
ERROR - 2024-06-19 13:23:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 13:23:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 13:23:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 13:27:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 13:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:27:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 13:27:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 13:27:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 13:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:29:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 13:29:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 13:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:32:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 13:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:36:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 13:36:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 13:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:40:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 13:40:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 13:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:40:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 13:40:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 13:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:44:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 13:47:19 --> Could not find the language line "Home"
ERROR - 2024-06-19 13:48:04 --> Could not find the language line "Home"
ERROR - 2024-06-19 13:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:50:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 13:50:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 13:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 13:51:48 --> Could not find the language line "Socks"
ERROR - 2024-06-19 13:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:01:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 14:01:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 14:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:01:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 14:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:01:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 14:05:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 14:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:13:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 14:13:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 14:14:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 14:14:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 14:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:17:20 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:17:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 14:18:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-19 14:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:22:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 14:22:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 14:22:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 14:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:22:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 14:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:32:26 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:32:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 14:32:42 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:32:47 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 14:33:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 14:33:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 14:33:33 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:33:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-19 14:33:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-19 14:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:33:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-19 14:33:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-19 14:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:34:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-19 14:34:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-19 14:34:16 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:34:36 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 14:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:35:08 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:35:13 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:35:16 --> Could not find the language line "Socks"
ERROR - 2024-06-19 14:35:36 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:35:44 --> Could not find the language line "Perfume"
ERROR - 2024-06-19 14:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:35:51 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:35:54 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:35:55 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:35:55 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:35:56 --> Could not find the language line "Perfume"
ERROR - 2024-06-19 14:35:56 --> Could not find the language line "Perfume"
ERROR - 2024-06-19 14:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:36:09 --> Could not find the language line "Perfume"
ERROR - 2024-06-19 14:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:36:14 --> Could not find the language line "Perfume"
ERROR - 2024-06-19 14:36:16 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:36:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 14:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:36:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 14:37:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 14:37:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 14:38:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 14:38:09 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:38:15 --> Could not find the language line "Bracelets"
ERROR - 2024-06-19 14:38:19 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:38:20 --> Could not find the language line "Bracelets"
ERROR - 2024-06-19 14:38:20 --> Could not find the language line "Bracelets"
ERROR - 2024-06-19 14:38:22 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 14:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:38:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 14:38:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 14:38:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 14:38:50 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:39:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:40:04 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-19 14:40:32 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:40:58 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:41:25 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:41:33 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:42:13 --> Could not find the language line "Perfume"
ERROR - 2024-06-19 14:42:16 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:42:54 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:43:05 --> Could not find the language line "Perfume"
ERROR - 2024-06-19 14:44:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 14:44:39 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 14:44:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 14:45:10 --> Could not find the language line "Socks"
ERROR - 2024-06-19 14:45:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-19 14:45:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-19 14:45:40 --> Could not find the language line "Bracelets"
ERROR - 2024-06-19 14:45:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 14:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:46:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 14:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:46:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 14:46:17 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 14:46:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 14:46:26 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 14:46:29 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:46:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 14:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:47:20 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:48:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 14:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:49:33 --> Could not find the language line "Home"
ERROR - 2024-06-19 14:51:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 14:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 14:59:12 --> Could not find the language line "Home"
ERROR - 2024-06-19 15:03:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-19 15:03:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-19 15:03:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-19 15:04:08 --> Could not find the language line "Home"
ERROR - 2024-06-19 15:07:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 15:07:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 15:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 15:13:06 --> Could not find the language line "Home"
ERROR - 2024-06-19 15:13:16 --> Could not find the language line "Home"
ERROR - 2024-06-19 15:14:42 --> Could not find the language line "Home"
ERROR - 2024-06-19 15:16:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-19 15:16:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-19 15:16:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-19 15:17:24 --> Could not find the language line "Home"
ERROR - 2024-06-19 15:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 15:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 15:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 15:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 15:28:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 15:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 15:32:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 15:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 15:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 15:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 15:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 15:47:20 --> Could not find the language line "Home"
ERROR - 2024-06-19 15:51:55 --> Could not find the language line "Home"
ERROR - 2024-06-19 15:52:43 --> Could not find the language line "Home"
ERROR - 2024-06-19 15:57:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 15:58:42 --> Could not find the language line "Home"
ERROR - 2024-06-19 16:00:20 --> Could not find the language line "Home"
ERROR - 2024-06-19 16:00:22 --> Could not find the language line "Home"
ERROR - 2024-06-19 16:00:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 16:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:02:30 --> Could not find the language line "Home"
ERROR - 2024-06-19 16:02:47 --> Could not find the language line "Home"
ERROR - 2024-06-19 16:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:03:02 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-19 16:03:03 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-19 16:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:03:36 --> Could not find the language line "Home"
ERROR - 2024-06-19 16:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:05:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 16:05:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 16:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:05:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 16:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:10:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 16:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:14:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 16:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:14:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 16:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:16:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 16:17:22 --> Could not find the language line "Home"
ERROR - 2024-06-19 16:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:18:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 16:19:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 16:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:24:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 16:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:27:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 16:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:28:52 --> Could not find the language line "Home"
ERROR - 2024-06-19 16:31:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 16:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:38:16 --> Could not find the language line "Home"
ERROR - 2024-06-19 16:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:43:41 --> Could not find the language line "Home"
ERROR - 2024-06-19 16:43:57 --> Could not find the language line "Home"
ERROR - 2024-06-19 16:47:21 --> Could not find the language line "Home"
ERROR - 2024-06-19 16:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:53:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 16:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 16:56:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 16:56:50 --> Could not find the language line "Home"
ERROR - 2024-06-19 17:02:44 --> Could not find the language line "Home"
ERROR - 2024-06-19 17:08:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 17:08:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 17:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 17:08:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 17:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 17:08:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 17:08:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 17:08:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 17:12:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 17:17:22 --> Could not find the language line "Home"
ERROR - 2024-06-19 17:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 17:25:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-19 17:25:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-19 17:25:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-19 17:29:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 17:29:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 17:29:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 17:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 17:29:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 17:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 17:29:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 17:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 17:42:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 17:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 17:47:23 --> Could not find the language line "Home"
ERROR - 2024-06-19 17:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 17:57:30 --> Could not find the language line "Home"
ERROR - 2024-06-19 17:57:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 17:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 17:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 18:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 18:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 18:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 18:12:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 18:12:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 18:13:12 --> Could not find the language line "Home"
ERROR - 2024-06-19 18:13:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 18:13:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 18:13:32 --> Could not find the language line "Home"
ERROR - 2024-06-19 18:15:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 18:15:59 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-19 18:17:22 --> Could not find the language line "Home"
ERROR - 2024-06-19 18:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 18:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 18:24:59 --> Could not find the language line "Home"
ERROR - 2024-06-19 18:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 18:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 18:32:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 18:32:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 18:33:11 --> Could not find the language line "Home"
ERROR - 2024-06-19 18:33:42 --> Could not find the language line "Home"
ERROR - 2024-06-19 18:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 18:37:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 18:40:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 18:40:56 --> Could not find the language line "Home"
ERROR - 2024-06-19 18:42:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 18:42:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 18:42:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 18:42:28 --> Could not find the language line "Home"
ERROR - 2024-06-19 18:42:33 --> Could not find the language line "Perfume"
ERROR - 2024-06-19 18:42:35 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 18:42:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 18:42:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 18:44:09 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 18:44:13 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 18:47:23 --> Could not find the language line "Home"
ERROR - 2024-06-19 18:48:08 --> Could not find the language line "Bracelets"
ERROR - 2024-06-19 18:48:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 18:53:43 --> 404 Page Not Found: Gtmstart/index
ERROR - 2024-06-19 18:54:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-19 18:54:35 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 18:55:20 --> Could not find the language line "Home"
ERROR - 2024-06-19 18:55:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 18:55:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 18:56:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 18:56:58 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 18:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 19:04:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 19:04:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 19:05:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 19:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 19:10:47 --> Could not find the language line "Home"
ERROR - 2024-06-19 19:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 19:13:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 19:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 19:16:52 --> Could not find the language line "Home"
ERROR - 2024-06-19 19:17:24 --> Could not find the language line "Home"
ERROR - 2024-06-19 19:17:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 19:20:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 19:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 19:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 19:25:02 --> Could not find the language line "Home"
ERROR - 2024-06-19 19:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 19:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 19:30:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 19:30:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%shoes%' OR a.description LIKE '%shoes%' OR a.color LIKE '%shoes%' OR a.barcode LIKE '%shoes%' OR a.category LIKE '%shoes%' OR a.sub_category LIKE '%shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-19 19:33:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 19:33:30 --> Could not find the language line "Home"
ERROR - 2024-06-19 19:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 19:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 19:40:42 --> Could not find the language line "Socks"
ERROR - 2024-06-19 19:41:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 19:41:48 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 19:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 19:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 19:47:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 19:47:27 --> Could not find the language line "Home"
ERROR - 2024-06-19 19:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 19:52:07 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 19:52:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 19:56:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 19:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:01:19 --> Could not find the language line "Home"
ERROR - 2024-06-19 20:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:14:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 20:14:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 20:14:36 --> Could not find the language line "Socks"
ERROR - 2024-06-19 20:14:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 20:14:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:14:47 --> Could not find the language line "Other"
ERROR - 2024-06-19 20:14:48 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:14:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-19 20:14:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-19 20:14:52 --> Could not find the language line "Other"
ERROR - 2024-06-19 20:14:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:14:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:14:57 --> Could not find the language line "Other"
ERROR - 2024-06-19 20:15:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:15:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:15:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 20:16:38 --> Could not find the language line "Other"
ERROR - 2024-06-19 20:17:26 --> Could not find the language line "Home"
ERROR - 2024-06-19 20:18:07 --> Could not find the language line "Other"
ERROR - 2024-06-19 20:20:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 20:20:50 --> Could not find the language line "Other"
ERROR - 2024-06-19 20:22:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 20:22:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 20:22:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 20:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:27:07 --> Could not find the language line "Other"
ERROR - 2024-06-19 20:27:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:28:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 20:28:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 20:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:28:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 20:28:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 20:28:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 20:28:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 20:28:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 20:28:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 20:29:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 20:29:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 20:31:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 20:31:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 20:36:35 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-19 20:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:37:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 20:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:37:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 20:37:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 20:37:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 20:38:55 --> Could not find the language line "Home"
ERROR - 2024-06-19 20:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:42:27 --> Could not find the language line "Home"
ERROR - 2024-06-19 20:43:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 20:43:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-19 20:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:47:24 --> Could not find the language line "Home"
ERROR - 2024-06-19 20:47:56 --> Could not find the language line "Home"
ERROR - 2024-06-19 20:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:48:51 --> Could not find the language line "Home"
ERROR - 2024-06-19 20:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:49:51 --> Could not find the language line "Home"
ERROR - 2024-06-19 20:50:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:50:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:50:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:51:06 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:51:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:51:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:52:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:52:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:52:36 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:53:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:53:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:53:36 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:53:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:54:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 20:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 20:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:07:48 --> Could not find the language line "Home"
ERROR - 2024-06-19 21:07:57 --> Could not find the language line "Home"
ERROR - 2024-06-19 21:08:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 21:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:08:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 21:08:47 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 21:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:09:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 21:09:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 21:09:11 --> Could not find the language line "Home"
ERROR - 2024-06-19 21:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:10:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 21:13:23 --> Could not find the language line "Home"
ERROR - 2024-06-19 21:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:14:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 21:14:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 21:17:29 --> Could not find the language line "Home"
ERROR - 2024-06-19 21:19:58 --> Could not find the language line "Home"
ERROR - 2024-06-19 21:22:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 21:22:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 21:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:23:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 21:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:43:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 21:43:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 21:45:14 --> Could not find the language line "Home"
ERROR - 2024-06-19 21:47:27 --> Could not find the language line "Home"
ERROR - 2024-06-19 21:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:49:13 --> Could not find the language line "Home"
ERROR - 2024-06-19 21:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 21:57:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 21:57:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 21:57:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 21:57:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 21:57:22 --> Could not find the language line "Other"
ERROR - 2024-06-19 21:57:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 21:58:04 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 21:59:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 21:59:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 21:59:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 22:00:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 22:01:15 --> Could not find the language line "Other"
ERROR - 2024-06-19 22:03:22 --> Could not find the language line "Other"
ERROR - 2024-06-19 22:04:16 --> Could not find the language line "Home"
ERROR - 2024-06-19 22:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 22:06:18 --> Could not find the language line "Other"
ERROR - 2024-06-19 22:06:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 22:07:08 --> Could not find the language line "Home"
ERROR - 2024-06-19 22:07:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 22:07:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 22:07:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 22:07:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 22:08:20 --> Could not find the language line "Home"
ERROR - 2024-06-19 22:08:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 22:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 22:14:45 --> Could not find the language line "Home"
ERROR - 2024-06-19 22:17:28 --> Could not find the language line "Home"
ERROR - 2024-06-19 22:24:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 22:25:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 22:31:11 --> Could not find the language line "Home"
ERROR - 2024-06-19 22:31:28 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 22:33:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 22:36:56 --> Could not find the language line "Home"
ERROR - 2024-06-19 22:37:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 22:42:09 --> Could not find the language line "Home"
ERROR - 2024-06-19 22:47:29 --> Could not find the language line "Home"
ERROR - 2024-06-19 22:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 22:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 22:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 23:02:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 23:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 23:08:43 --> Could not find the language line "Home"
ERROR - 2024-06-19 23:08:44 --> Could not find the language line "Home"
ERROR - 2024-06-19 23:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 23:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 23:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 23:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 23:15:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 23:15:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 23:17:29 --> Could not find the language line "Home"
ERROR - 2024-06-19 23:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 23:26:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 23:27:20 --> Could not find the language line "Other"
ERROR - 2024-06-19 23:27:47 --> Could not find the language line "Home"
ERROR - 2024-06-19 23:27:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 23:28:16 --> Could not find the language line "Home"
ERROR - 2024-06-19 23:28:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-19 23:28:31 --> Could not find the language line "Home"
ERROR - 2024-06-19 23:29:30 --> Could not find the language line "Home"
ERROR - 2024-06-19 23:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 23:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 23:36:51 --> Could not find the language line "Home"
ERROR - 2024-06-19 23:45:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 23:45:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 23:45:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 23:45:23 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-19 23:45:24 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-19 23:45:35 --> Could not find the language line "Other"
ERROR - 2024-06-19 23:45:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-19 23:46:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 23:47:29 --> Could not find the language line "Home"
ERROR - 2024-06-19 23:48:33 --> Could not find the language line "Other"
ERROR - 2024-06-19 23:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 23:51:03 --> Could not find the language line "Other"
ERROR - 2024-06-19 23:52:17 --> Could not find the language line "Other"
ERROR - 2024-06-19 23:52:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-19 23:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 23:52:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-19 23:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-19 23:52:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-19 23:54:24 --> Could not find the language line "Other"
ERROR - 2024-06-19 23:55:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 23:55:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 23:56:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 23:56:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-19 23:57:11 --> Could not find the language line "Home"
