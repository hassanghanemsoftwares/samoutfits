<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-22 00:02:46 --> Could not find the language line "Home"
ERROR - 2024-04-22 00:02:56 --> Could not find the language line "Bracelets"
ERROR - 2024-04-22 00:03:10 --> Could not find the language line "Bracelets"
ERROR - 2024-04-22 00:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:06:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-22 00:06:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-22 00:06:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 00:08:04 --> Could not find the language line "Home"
ERROR - 2024-04-22 00:08:40 --> Could not find the language line "Home"
ERROR - 2024-04-22 00:10:17 --> Could not find the language line "Other"
ERROR - 2024-04-22 00:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:10:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 00:10:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 00:10:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 00:10:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 00:14:04 --> Could not find the language line "Home"
ERROR - 2024-04-22 00:14:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:14:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 00:14:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 00:17:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 00:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:29:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 00:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:30:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 00:30:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 00:33:01 --> Could not find the language line "Home"
ERROR - 2024-04-22 00:34:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 00:42:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 00:42:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 00:42:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 00:42:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 00:42:39 --> Could not find the language line "Home"
ERROR - 2024-04-22 00:43:59 --> Could not find the language line "Home"
ERROR - 2024-04-22 00:46:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 00:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:46:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 00:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 00:49:05 --> Could not find the language line "Home"
ERROR - 2024-04-22 00:50:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 00:54:16 --> Could not find the language line "Home"
ERROR - 2024-04-22 00:54:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 00:54:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 00:57:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 00:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:01:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 01:01:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 01:01:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 01:01:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 01:01:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 01:01:32 --> Could not find the language line "assets"
ERROR - 2024-04-22 01:01:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 01:01:32 --> Could not find the language line "assets"
ERROR - 2024-04-22 01:01:32 --> Could not find the language line "assets"
ERROR - 2024-04-22 01:01:32 --> Could not find the language line "assets"
ERROR - 2024-04-22 01:01:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 01:01:32 --> Could not find the language line "assets"
ERROR - 2024-04-22 01:01:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 01:01:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 01:01:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 01:01:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 01:02:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 01:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:05:52 --> Could not find the language line "Home"
ERROR - 2024-04-22 01:06:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 01:07:20 --> Could not find the language line "Home"
ERROR - 2024-04-22 01:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:10:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 01:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:10:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 01:10:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 01:14:00 --> Could not find the language line "Home"
ERROR - 2024-04-22 01:14:27 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 01:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:22:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 01:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:22:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 01:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:24:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 01:26:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 01:30:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 01:32:57 --> Could not find the language line "Home"
ERROR - 2024-04-22 01:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:34:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 01:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:34:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 01:34:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 01:38:27 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 01:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:42:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 01:44:01 --> Could not find the language line "Home"
ERROR - 2024-04-22 01:46:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 01:47:21 --> Could not find the language line "products"
ERROR - 2024-04-22 01:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:48:38 --> Could not find the language line "products"
ERROR - 2024-04-22 01:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:51:19 --> Could not find the language line "products"
ERROR - 2024-04-22 01:52:40 --> Could not find the language line "products"
ERROR - 2024-04-22 01:54:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 01:55:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 01:58:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 01:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 01:58:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 02:02:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 02:06:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 02:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 02:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 02:06:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 02:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 02:11:27 --> Could not find the language line "products"
ERROR - 2024-04-22 02:14:08 --> Could not find the language line "Home"
ERROR - 2024-04-22 02:14:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 02:18:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 02:21:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 02:21:17 --> Could not find the language line "Disclaimer"
ERROR - 2024-04-22 02:22:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 02:26:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 02:30:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 02:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 02:34:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 02:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 02:34:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 02:34:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 02:38:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 02:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 02:44:00 --> Could not find the language line "Home"
ERROR - 2024-04-22 02:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 02:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 02:54:23 --> Could not find the language line "products"
ERROR - 2024-04-22 02:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 02:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:02:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:02:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:02:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 03:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:06:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:06:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:10:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:10:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:10:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:10:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:10:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 03:10:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:13:35 --> Could not find the language line "Home"
ERROR - 2024-04-22 03:14:05 --> Could not find the language line "Home"
ERROR - 2024-04-22 03:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:14:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:14:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:14:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:14:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 03:18:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-22 03:18:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-22 03:18:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 03:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:22:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 03:22:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:22:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:22:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:22:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-22 03:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:26:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:30:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:30:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:30:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 03:30:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 03:30:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 03:30:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 03:34:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:35:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 03:38:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:38:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:42:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:42:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 03:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:42:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:44:04 --> Could not find the language line "Home"
ERROR - 2024-04-22 03:46:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 03:46:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:50:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:52:51 --> Could not find the language line "Home"
ERROR - 2024-04-22 03:54:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:54:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:57:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 03:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 03:58:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 03:58:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:02:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:02:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:04:13 --> Could not find the language line "Socks"
ERROR - 2024-04-22 04:06:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:06:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:06:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 04:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:14:14 --> Could not find the language line "Home"
ERROR - 2024-04-22 04:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:18:30 --> Could not find the language line "Home"
ERROR - 2024-04-22 04:18:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:22:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:30:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:30:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:32:57 --> Could not find the language line "Home"
ERROR - 2024-04-22 04:33:58 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 04:34:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 04:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:34:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:34:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:38:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 04:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:38:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:38:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:42:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:44:02 --> Could not find the language line "Home"
ERROR - 2024-04-22 04:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:46:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:50:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 04:58:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 04:58:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 04:58:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 05:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:02:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 05:02:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 05:10:51 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-22 05:10:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 05:10:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 05:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:10:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 05:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:11:02 --> Could not find the language line "Home"
ERROR - 2024-04-22 05:12:55 --> Could not find the language line "Home"
ERROR - 2024-04-22 05:14:03 --> Could not find the language line "Home"
ERROR - 2024-04-22 05:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:14:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 05:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:18:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 05:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:20:18 --> Could not find the language line "Home"
ERROR - 2024-04-22 05:20:18 --> Could not find the language line "Home"
ERROR - 2024-04-22 05:20:21 --> 404 Page Not Found: Admin/index
ERROR - 2024-04-22 05:20:24 --> 404 Page Not Found: Manager/index
ERROR - 2024-04-22 05:20:26 --> 404 Page Not Found: Admin/content
ERROR - 2024-04-22 05:20:28 --> 404 Page Not Found: Simpla/index
ERROR - 2024-04-22 05:20:29 --> 404 Page Not Found: Js/mage
ERROR - 2024-04-22 05:20:31 --> 404 Page Not Found: Administrator/index
ERROR - 2024-04-22 05:22:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 05:23:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 05:23:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 05:23:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 05:26:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 05:26:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 05:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:30:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 05:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:38:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 05:38:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 05:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:43:47 --> Could not find the language line "Home"
ERROR - 2024-04-22 05:44:01 --> Could not find the language line "Socks"
ERROR - 2024-04-22 05:44:03 --> Could not find the language line "Home"
ERROR - 2024-04-22 05:44:16 --> Could not find the language line "Home"
ERROR - 2024-04-22 05:44:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:44:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 05:45:55 --> Could not find the language line "Home"
ERROR - 2024-04-22 05:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:47:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 05:47:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 05:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 05:58:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-22 05:58:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-22 05:58:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 06:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:03:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 06:04:43 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:06:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 06:09:29 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:10:03 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:11:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 06:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:11:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 06:14:03 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:15:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 06:15:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 06:18:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 06:18:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 06:18:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 06:18:12 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:23:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 06:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:24:05 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:25:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 06:26:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 06:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:31:20 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:31:53 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:31:55 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:32:02 --> Could not find the language line "Socks"
ERROR - 2024-04-22 06:32:12 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:32:20 --> Could not find the language line "Socks"
ERROR - 2024-04-22 06:32:29 --> Could not find the language line "Socks"
ERROR - 2024-04-22 06:32:33 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:32:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-22 06:32:46 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:33:07 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:33:10 --> Could not find the language line "Bracelets"
ERROR - 2024-04-22 06:33:14 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:37:20 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:39:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 06:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:39:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 06:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:39:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 06:39:11 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:39:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:39:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-22 06:39:46 --> Could not find the language line "Bracelets"
ERROR - 2024-04-22 06:39:53 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:40:25 --> Could not find the language line "Other"
ERROR - 2024-04-22 06:40:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:40:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 06:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:40:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:40:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:41:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:41:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:41:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:41:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:41:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:41:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:41:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:41:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:41:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:41:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:42:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:42:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:42:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:42:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:42:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:42:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:42:23 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:42:36 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-22 06:43:03 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-22 06:43:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 06:43:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-22 06:43:14 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:44:03 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:47:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:47:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:48:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:48:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:49:00 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:49:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:49:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:49:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:49:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:50:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:50:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:50:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:50:55 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:51:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 06:51:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:51:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:51:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:51:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:51:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:52:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:52:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:52:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:52:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:53:08 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:53:08 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:53:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:53:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:53:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:53:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 06:53:51 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:53:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 06:53:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 06:54:08 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:54:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:54:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:54:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 06:55:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:55:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 06:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:56:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:58:24 --> Could not find the language line "Home"
ERROR - 2024-04-22 06:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 06:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:01:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 07:02:30 --> Could not find the language line "Home"
ERROR - 2024-04-22 07:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:07:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 07:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:11:23 --> Could not find the language line "Home"
ERROR - 2024-04-22 07:14:04 --> Could not find the language line "Home"
ERROR - 2024-04-22 07:15:06 --> Could not find the language line "Home"
ERROR - 2024-04-22 07:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:15:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 07:15:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 07:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:15:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 07:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:16:14 --> Could not find the language line "Home"
ERROR - 2024-04-22 07:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 07:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 07:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:24:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 07:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:25:54 --> Could not find the language line "Home"
ERROR - 2024-04-22 07:27:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 07:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:30:21 --> Could not find the language line "Home"
ERROR - 2024-04-22 07:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:39:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 07:43:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 07:44:04 --> Could not find the language line "Home"
ERROR - 2024-04-22 07:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:55:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 07:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 07:55:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 07:58:49 --> Could not find the language line "Home"
ERROR - 2024-04-22 07:58:55 --> Could not find the language line "Home"
ERROR - 2024-04-22 07:59:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 08:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:03:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 08:04:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 08:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:07:17 --> Could not find the language line "Home"
ERROR - 2024-04-22 08:07:17 --> Could not find the language line "Home"
ERROR - 2024-04-22 08:08:34 --> Could not find the language line "Home"
ERROR - 2024-04-22 08:08:34 --> Could not find the language line "Home"
ERROR - 2024-04-22 08:10:33 --> Could not find the language line "Home"
ERROR - 2024-04-22 08:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:11:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 08:11:59 --> Could not find the language line "Home"
ERROR - 2024-04-22 08:13:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 08:13:11 --> Could not find the language line "Home"
ERROR - 2024-04-22 08:13:36 --> Could not find the language line "Home"
ERROR - 2024-04-22 08:13:37 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-04-22 08:13:37 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-04-22 08:13:38 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-04-22 08:13:38 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-04-22 08:14:04 --> Could not find the language line "Home"
ERROR - 2024-04-22 08:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:15:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 08:15:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 08:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:23:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 08:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:34:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-22 08:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:35:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 08:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:35:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 08:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:39:55 --> Could not find the language line "Home"
ERROR - 2024-04-22 08:40:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 08:40:31 --> Could not find the language line "Home"
ERROR - 2024-04-22 08:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:44:05 --> Could not find the language line "Home"
ERROR - 2024-04-22 08:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:47:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 08:47:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 08:51:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 08:51:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 08:51:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 08:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:55:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 08:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:55:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 08:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:59:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 08:59:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 08:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 08:59:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:03:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:03:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:11:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:14:05 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:15:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 09:18:28 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:19:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:23:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:23:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:24:56 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:25:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 09:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:26:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 09:26:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 09:27:13 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:27:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:31:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:32:08 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:32:18 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:33:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 09:33:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 09:33:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 09:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:34:38 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:34:39 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:37:24 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:39:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:39:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:42:58 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:43:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:44:05 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:47:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:47:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:48:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 09:48:55 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:48:58 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:51:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:51:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 09:52:11 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:52:11 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:52:11 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:52:12 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:52:12 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:52:12 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:52:25 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:53:26 --> Could not find the language line "Home"
ERROR - 2024-04-22 09:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 09:55:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-22 09:55:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-22 09:55:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 09:59:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 10:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:03:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 10:03:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 10:05:24 --> Could not find the language line "Home"
ERROR - 2024-04-22 10:05:36 --> Could not find the language line "Home"
ERROR - 2024-04-22 10:06:27 --> Could not find the language line "Home"
ERROR - 2024-04-22 10:06:44 --> Could not find the language line "Home"
ERROR - 2024-04-22 10:07:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 10:07:28 --> Could not find the language line "Home"
ERROR - 2024-04-22 10:07:46 --> Could not find the language line "Home"
ERROR - 2024-04-22 10:14:06 --> Could not find the language line "Home"
ERROR - 2024-04-22 10:15:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 10:15:38 --> Could not find the language line "Home"
ERROR - 2024-04-22 10:15:47 --> Could not find the language line "Home"
ERROR - 2024-04-22 10:19:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 10:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:19:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 10:20:53 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-22 10:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:23:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 10:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:23:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 10:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:26:58 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 10:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:31:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 10:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:35:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 10:35:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 10:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:39:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 10:40:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 10:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:43:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 10:44:04 --> Could not find the language line "Home"
ERROR - 2024-04-22 10:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:47:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 10:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:59:07 --> Could not find the language line "Home"
ERROR - 2024-04-22 10:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 10:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:03:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 11:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:05:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 11:06:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 11:06:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 11:06:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 11:06:41 --> Could not find the language line "Home"
ERROR - 2024-04-22 11:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:07:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 11:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:11:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 11:14:06 --> Could not find the language line "Home"
ERROR - 2024-04-22 11:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:19:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 11:19:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 11:23:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 11:23:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 11:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:27:27 --> Could not find the language line "Home"
ERROR - 2024-04-22 11:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:30:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 11:31:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 11:31:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 11:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:35:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-22 11:35:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-22 11:35:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 11:36:16 --> Could not find the language line "Home"
ERROR - 2024-04-22 11:36:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 11:36:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 11:36:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 11:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:39:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 11:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:41:17 --> Could not find the language line "Home"
ERROR - 2024-04-22 11:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:42:18 --> Could not find the language line "Home"
ERROR - 2024-04-22 11:42:26 --> Could not find the language line "Home"
ERROR - 2024-04-22 11:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:43:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 11:43:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 11:43:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-22 11:43:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 11:44:06 --> Could not find the language line "Home"
ERROR - 2024-04-22 11:45:44 --> Could not find the language line "Home"
ERROR - 2024-04-22 11:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:47:54 --> Could not find the language line "Home"
ERROR - 2024-04-22 11:48:11 --> Could not find the language line "Home"
ERROR - 2024-04-22 11:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 11:52:40 --> Could not find the language line "Home"
ERROR - 2024-04-22 11:55:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 11:56:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 11:56:01 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-22 11:59:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-22 11:59:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:03:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:06:01 --> Could not find the language line "Home"
ERROR - 2024-04-22 12:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:11:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:11:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:14:00 --> Could not find the language line "Home"
ERROR - 2024-04-22 12:14:08 --> Could not find the language line "Home"
ERROR - 2024-04-22 12:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:15:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:15:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:19:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:19:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:27:04 --> Could not find the language line "Home"
ERROR - 2024-04-22 12:27:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:27:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:30:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 12:30:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 12:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:31:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:31:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:34:17 --> Could not find the language line "Home"
ERROR - 2024-04-22 12:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:36:28 --> Could not find the language line "Home"
ERROR - 2024-04-22 12:36:32 --> Could not find the language line "Home"
ERROR - 2024-04-22 12:36:51 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 12:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:37:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 12:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:38:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 12:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:39:54 --> Could not find the language line "Home"
ERROR - 2024-04-22 12:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:43:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:43:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:44:06 --> Could not find the language line "Home"
ERROR - 2024-04-22 12:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:47:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:47:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:48:59 --> Could not find the language line "products"
ERROR - 2024-04-22 12:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:51:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:51:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:52:50 --> Could not find the language line "Home"
ERROR - 2024-04-22 12:52:50 --> Could not find the language line "Home"
ERROR - 2024-04-22 12:52:50 --> Could not find the language line "Home"
ERROR - 2024-04-22 12:52:51 --> Could not find the language line "Home"
ERROR - 2024-04-22 12:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:55:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 12:55:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 12:55:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 12:55:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 12:59:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 12:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:07:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 13:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:12:44 --> Could not find the language line "products"
ERROR - 2024-04-22 13:14:07 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:15:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 13:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:15:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 13:15:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 13:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:19:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 13:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:19:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 13:20:13 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:23:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 13:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:23:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 13:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:24:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 13:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:25:51 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:25:56 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:26:00 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:26:05 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:26:08 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:26:18 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:29:09 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:29:12 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:30:44 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:31:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 13:31:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 13:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:35:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 13:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:35:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 13:39:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 13:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:39:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 13:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:40:26 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:40:29 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:42:16 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:44:09 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:45:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 13:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:50:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 13:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:55:43 --> Could not find the language line "Home"
ERROR - 2024-04-22 13:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:59:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 13:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 13:59:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:03:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:07:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:07:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:10:02 --> Could not find the language line "Home"
ERROR - 2024-04-22 14:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:11:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:11:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:12:38 --> Could not find the language line "Home"
ERROR - 2024-04-22 14:14:09 --> Could not find the language line "Home"
ERROR - 2024-04-22 14:14:45 --> Could not find the language line "Home"
ERROR - 2024-04-22 14:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:15:42 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-04-22 14:15:42 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-04-22 14:15:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:15:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:19:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:22:27 --> Could not find the language line "Home"
ERROR - 2024-04-22 14:22:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 14:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:27:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:34:01 --> Could not find the language line "Home"
ERROR - 2024-04-22 14:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:35:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:35:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:38:45 --> Could not find the language line "products"
ERROR - 2024-04-22 14:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:40:13 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-04-22 14:40:13 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-04-22 14:40:16 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-04-22 14:40:16 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-04-22 14:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:43:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:43:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:44:07 --> Could not find the language line "Home"
ERROR - 2024-04-22 14:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:51:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 14:53:49 --> Could not find the language line "Home"
ERROR - 2024-04-22 14:53:54 --> Could not find the language line "Bracelets"
ERROR - 2024-04-22 14:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 14:55:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:00:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:02:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 15:02:03 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:02:03 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:02:03 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:02:14 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:04:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:04:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:09:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 15:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:12:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:12:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:12:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:14:09 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:14:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 15:14:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 15:14:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 15:16:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:16:20 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:16:20 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:19:23 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:19:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:19:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:20:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:20:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:20:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:21:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:21:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:22:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:22:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:22:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:22:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:22:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:23:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:23:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-22 15:23:09 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:24:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:24:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:28:06 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:28:41 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:28:41 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:32:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:36:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-22 15:36:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-22 15:36:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 15:39:08 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:44:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:44:10 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:46:34 --> Could not find the language line "Home"
ERROR - 2024-04-22 15:48:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:52:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 15:52:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 15:55:19 --> Could not find the language line "Other"
ERROR - 2024-04-22 15:55:38 --> Could not find the language line "Socks"
ERROR - 2024-04-22 15:59:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2024-04-22 15:59:52 --> Could not find the language line "products"
ERROR - 2024-04-22 16:04:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-22 16:04:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-22 16:04:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 16:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 16:08:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 16:08:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 16:14:10 --> Could not find the language line "Home"
ERROR - 2024-04-22 16:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 16:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 16:20:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 16:20:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 16:23:47 --> Could not find the language line "Home"
ERROR - 2024-04-22 16:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 16:24:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 16:24:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 16:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 16:27:18 --> Could not find the language line "products"
ERROR - 2024-04-22 16:29:04 --> Could not find the language line "Home"
ERROR - 2024-04-22 16:32:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 16:36:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 16:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 16:36:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 16:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 16:36:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 16:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 16:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 16:40:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 16:40:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 16:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 16:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 16:44:10 --> Could not find the language line "Home"
ERROR - 2024-04-22 16:44:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 16:45:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 16:45:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 16:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 16:48:28 --> Could not find the language line "Home"
ERROR - 2024-04-22 16:49:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 16:52:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 16:52:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 16:53:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2024-04-22 16:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 16:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 16:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 17:00:26 --> Could not find the language line "Home"
ERROR - 2024-04-22 17:03:06 --> Could not find the language line "Home"
ERROR - 2024-04-22 17:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 17:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 17:12:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 17:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 17:12:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 17:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 17:14:11 --> Could not find the language line "Home"
ERROR - 2024-04-22 17:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 17:20:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 17:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 17:20:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 17:21:14 --> Could not find the language line "Home"
ERROR - 2024-04-22 17:21:14 --> Could not find the language line "Home"
ERROR - 2024-04-22 17:21:14 --> Could not find the language line "Home"
ERROR - 2024-04-22 17:21:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 17:24:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-22 17:24:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-22 17:24:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 17:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 17:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 17:28:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 17:28:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 17:44:12 --> Could not find the language line "Home"
ERROR - 2024-04-22 17:45:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 17:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 17:45:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 17:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 17:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 17:45:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 17:55:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-22 17:57:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 17:57:16 --> Could not find the language line "Home"
ERROR - 2024-04-22 17:57:16 --> Could not find the language line "Home"
ERROR - 2024-04-22 17:57:50 --> Could not find the language line "Home"
ERROR - 2024-04-22 17:58:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 17:58:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 17:58:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 18:03:38 --> Could not find the language line "Home"
ERROR - 2024-04-22 18:05:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 18:05:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 18:05:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 18:06:22 --> Could not find the language line "Bracelets"
ERROR - 2024-04-22 18:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:07:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 18:14:10 --> Could not find the language line "Home"
ERROR - 2024-04-22 18:15:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 18:15:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 18:15:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 18:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:21:03 --> Could not find the language line "Home"
ERROR - 2024-04-22 18:22:05 --> Could not find the language line "products"
ERROR - 2024-04-22 18:22:25 --> Could not find the language line "Home"
ERROR - 2024-04-22 18:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:27:34 --> Could not find the language line "Home"
ERROR - 2024-04-22 18:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:34:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 18:34:26 --> Could not find the language line "Home"
ERROR - 2024-04-22 18:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:39:46 --> Could not find the language line "Home"
ERROR - 2024-04-22 18:44:11 --> Could not find the language line "Home"
ERROR - 2024-04-22 18:48:17 --> Could not find the language line "Home"
ERROR - 2024-04-22 18:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 18:52:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 18:52:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 18:56:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 18:56:24 --> Could not find the language line "Home"
ERROR - 2024-04-22 18:59:54 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:00:58 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:01:04 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:14:12 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:16:43 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:16:59 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:17:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-22 19:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:17:34 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-22 19:17:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-22 19:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:21:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 19:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:21:46 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:21:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 19:21:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 19:21:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 19:22:31 --> Could not find the language line "Bracelets"
ERROR - 2024-04-22 19:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:25:28 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:29:15 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-22 19:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:29:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-22 19:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:31:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:31:58 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:32:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:32:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:32:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:33:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:33:05 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:33:11 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:33:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:33:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:33:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 19:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:35:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:35:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:36:11 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:36:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:37:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:37:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:37:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:37:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:37:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:38:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:38:08 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:38:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:41:53 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:42:50 --> Could not find the language line "Socks"
ERROR - 2024-04-22 19:42:52 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:43:24 --> Could not find the language line "Socks"
ERROR - 2024-04-22 19:43:49 --> Could not find the language line "Socks"
ERROR - 2024-04-22 19:44:03 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:44:13 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:45:33 --> Could not find the language line "Perfume"
ERROR - 2024-04-22 19:45:34 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:45:49 --> Could not find the language line "Perfume"
ERROR - 2024-04-22 19:45:53 --> Could not find the language line "Perfume"
ERROR - 2024-04-22 19:46:22 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-22 19:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:46:36 --> Could not find the language line "Socks"
ERROR - 2024-04-22 19:46:47 --> Could not find the language line "products"
ERROR - 2024-04-22 19:46:47 --> Could not find the language line "Bracelets"
ERROR - 2024-04-22 19:46:52 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:46:52 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:47:00 --> Could not find the language line "Perfume"
ERROR - 2024-04-22 19:47:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 19:47:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 19:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:47:53 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:47:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 19:47:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-22 19:48:31 --> Could not find the language line "Perfume"
ERROR - 2024-04-22 19:48:36 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:48:36 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:48:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:48:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:49:30 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-22 19:49:45 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:49:47 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:50:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:50:22 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:50:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:51:23 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:51:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:51:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 19:55:32 --> Could not find the language line "Home"
ERROR - 2024-04-22 19:58:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 19:58:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-22 19:58:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-22 19:58:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 19:59:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 19:59:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 19:59:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 20:06:46 --> Could not find the language line "Home"
ERROR - 2024-04-22 20:06:46 --> Could not find the language line "Home"
ERROR - 2024-04-22 20:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 20:14:13 --> Could not find the language line "Home"
ERROR - 2024-04-22 20:15:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 20:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 20:15:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 20:19:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 20:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 20:22:34 --> Could not find the language line "products"
ERROR - 2024-04-22 20:23:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 20:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 20:27:48 --> Could not find the language line "Home"
ERROR - 2024-04-22 20:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 20:28:39 --> Could not find the language line "Home"
ERROR - 2024-04-22 20:28:40 --> Could not find the language line "Home"
ERROR - 2024-04-22 20:29:24 --> Could not find the language line "Home"
ERROR - 2024-04-22 20:29:30 --> Could not find the language line "Socks"
ERROR - 2024-04-22 20:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 20:30:16 --> Could not find the language line "Socks"
ERROR - 2024-04-22 20:30:18 --> Could not find the language line "Home"
ERROR - 2024-04-22 20:30:24 --> Could not find the language line "Home"
ERROR - 2024-04-22 20:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 20:30:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 20:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 20:43:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 20:43:29 --> Could not find the language line "Home"
ERROR - 2024-04-22 20:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 20:44:13 --> Could not find the language line "Home"
ERROR - 2024-04-22 20:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 20:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 20:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 20:54:18 --> Could not find the language line "Home"
ERROR - 2024-04-22 20:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 21:03:14 --> Could not find the language line "Home"
ERROR - 2024-04-22 21:03:14 --> 404 Page Not Found: Assets/mail
ERROR - 2024-04-22 21:03:14 --> 404 Page Not Found: Assets/mail
ERROR - 2024-04-22 21:03:34 --> Could not find the language line "Home"
ERROR - 2024-04-22 21:03:34 --> 404 Page Not Found: Assets/mail
ERROR - 2024-04-22 21:03:34 --> 404 Page Not Found: Assets/mail
ERROR - 2024-04-22 21:10:43 --> Could not find the language line "Home"
ERROR - 2024-04-22 21:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 21:14:19 --> Could not find the language line "Home"
ERROR - 2024-04-22 21:22:06 --> Could not find the language line "products"
ERROR - 2024-04-22 21:25:03 --> Could not find the language line "Home"
ERROR - 2024-04-22 21:25:04 --> Could not find the language line "Home"
ERROR - 2024-04-22 21:25:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 21:25:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 21:25:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 21:25:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-22 21:39:01 --> Could not find the language line "accounts"
ERROR - 2024-04-22 21:39:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 21:43:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 21:43:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 21:43:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-22 21:44:21 --> Could not find the language line "Home"
ERROR - 2024-04-22 21:46:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 21:49:09 --> Could not find the language line "products"
ERROR - 2024-04-22 21:54:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 21:54:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 21:54:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 21:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 22:08:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 22:08:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 22:08:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 22:14:16 --> Could not find the language line "Home"
ERROR - 2024-04-22 22:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 22:37:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-22 22:44:15 --> Could not find the language line "Home"
ERROR - 2024-04-22 22:50:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 22:50:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 22:50:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 22:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 22:56:18 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-22 22:57:16 --> Could not find the language line "products"
ERROR - 2024-04-22 23:13:49 --> Could not find the language line "Home"
ERROR - 2024-04-22 23:14:25 --> Could not find the language line "Home"
ERROR - 2024-04-22 23:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 23:19:39 --> Could not find the language line "Home"
ERROR - 2024-04-22 23:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 23:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 23:21:29 --> Could not find the language line "Home"
ERROR - 2024-04-22 23:21:31 --> Could not find the language line "Home"
ERROR - 2024-04-22 23:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 23:42:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-22 23:42:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-22 23:42:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-22 23:44:15 --> Could not find the language line "Home"
ERROR - 2024-04-22 23:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-22 23:48:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-22 23:48:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-22 23:48:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
