<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-21 00:17:26 --> Could not find the language line "Home"
ERROR - 2024-07-21 00:47:25 --> Could not find the language line "Home"
ERROR - 2024-07-21 00:55:59 --> Could not find the language line "Other"
ERROR - 2024-07-21 00:58:07 --> Could not find the language line "Socks"
ERROR - 2024-07-21 01:17:26 --> Could not find the language line "Home"
ERROR - 2024-07-21 01:20:02 --> Could not find the language line "Home"
ERROR - 2024-07-21 01:22:36 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-07-21 01:38:41 --> 404 Page Not Found: Cart/cart
ERROR - 2024-07-21 01:47:25 --> Could not find the language line "Home"
ERROR - 2024-07-21 02:10:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-21 02:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 02:17:26 --> Could not find the language line "Home"
ERROR - 2024-07-21 02:47:29 --> Could not find the language line "Home"
ERROR - 2024-07-21 03:17:26 --> Could not find the language line "Home"
ERROR - 2024-07-21 03:29:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-21 03:29:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-21 03:29:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-21 03:29:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-21 03:29:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-21 03:29:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-21 03:29:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-21 03:29:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-21 03:29:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-21 03:29:14 --> Could not find the language line "Home"
ERROR - 2024-07-21 03:29:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-21 03:29:27 --> Could not find the language line "Home"
ERROR - 2024-07-21 03:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 03:47:27 --> Could not find the language line "Home"
ERROR - 2024-07-21 04:17:27 --> Could not find the language line "Home"
ERROR - 2024-07-21 04:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 04:47:28 --> Could not find the language line "Home"
ERROR - 2024-07-21 05:03:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-21 05:17:27 --> Could not find the language line "Home"
ERROR - 2024-07-21 05:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 05:47:30 --> Could not find the language line "Home"
ERROR - 2024-07-21 06:05:04 --> Could not find the language line "Home"
ERROR - 2024-07-21 06:07:08 --> Could not find the language line "Home"
ERROR - 2024-07-21 06:07:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-21 06:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-21 06:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:17:29 --> Could not find the language line "Home"
ERROR - 2024-07-21 06:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:41:06 --> Could not find the language line "Home"
ERROR - 2024-07-21 06:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:45:54 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-21 06:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:47:29 --> Could not find the language line "Home"
ERROR - 2024-07-21 06:49:20 --> Could not find the language line "Home"
ERROR - 2024-07-21 06:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 06:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:03:36 --> Could not find the language line "Socks"
ERROR - 2024-07-21 07:11:05 --> Could not find the language line "Home"
ERROR - 2024-07-21 07:17:29 --> Could not find the language line "Home"
ERROR - 2024-07-21 07:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:29:43 --> Could not find the language line "Home"
ERROR - 2024-07-21 07:31:41 --> Could not find the language line "Home"
ERROR - 2024-07-21 07:31:45 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:32:01 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:32:21 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:32:27 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:32:51 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:33:07 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:33:29 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:34:47 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:34:53 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:34:58 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:35:00 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:35:11 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:35:32 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:35:54 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:36:03 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 07:36:08 --> Could not find the language line "Home"
ERROR - 2024-07-21 07:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:47:29 --> Could not find the language line "Home"
ERROR - 2024-07-21 07:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:57:26 --> Could not find the language line "Home"
ERROR - 2024-07-21 07:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 07:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:08:02 --> Could not find the language line "Home"
ERROR - 2024-07-21 08:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:13:21 --> Could not find the language line "Home"
ERROR - 2024-07-21 08:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:17:29 --> Could not find the language line "Home"
ERROR - 2024-07-21 08:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:26:18 --> Could not find the language line "Home"
ERROR - 2024-07-21 08:27:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-21 08:28:51 --> Could not find the language line "Home"
ERROR - 2024-07-21 08:29:29 --> Could not find the language line "Home"
ERROR - 2024-07-21 08:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:45:40 --> Could not find the language line "Home"
ERROR - 2024-07-21 08:47:16 --> Could not find the language line "Home"
ERROR - 2024-07-21 08:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:47:30 --> Could not find the language line "Home"
ERROR - 2024-07-21 08:47:37 --> Could not find the language line "Home"
ERROR - 2024-07-21 08:48:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-21 08:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:52:20 --> Could not find the language line "Home"
ERROR - 2024-07-21 08:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:54:55 --> Could not find the language line "Home"
ERROR - 2024-07-21 08:55:01 --> Could not find the language line "Bracelets"
ERROR - 2024-07-21 08:55:25 --> Could not find the language line "Home"
ERROR - 2024-07-21 08:55:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-21 08:55:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-21 08:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 08:56:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-21 08:56:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-21 08:56:30 --> Could not find the language line "Home"
ERROR - 2024-07-21 08:56:51 --> Could not find the language line "Other"
ERROR - 2024-07-21 08:58:13 --> Could not find the language line "Socks"
ERROR - 2024-07-21 08:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:00:11 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:02:28 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:07:53 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:08:46 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:09:50 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:10:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-21 09:11:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-21 09:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:11:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-21 09:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:17:33 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:23:25 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:32:32 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:32:32 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:32:32 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:33:07 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:33:08 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:33:08 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:33:09 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:33:17 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:33:18 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:41:24 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:41:27 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:47:33 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:56:35 --> Could not find the language line "Home"
ERROR - 2024-07-21 09:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 09:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 10:17:32 --> Could not find the language line "Home"
ERROR - 2024-07-21 10:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 10:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 10:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 10:47:32 --> Could not find the language line "Home"
ERROR - 2024-07-21 10:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 10:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 10:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 10:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 10:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 10:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 10:58:25 --> Could not find the language line "Home"
ERROR - 2024-07-21 10:58:27 --> 404 Page Not Found: Payment/index.php
ERROR - 2024-07-21 11:17:31 --> Could not find the language line "Home"
ERROR - 2024-07-21 11:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 11:38:37 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 11:47:33 --> Could not find the language line "Home"
ERROR - 2024-07-21 12:05:58 --> Could not find the language line "Home"
ERROR - 2024-07-21 12:09:19 --> Could not find the language line "Home"
ERROR - 2024-07-21 12:17:33 --> Could not find the language line "Home"
ERROR - 2024-07-21 12:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 12:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 12:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 12:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 12:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 12:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 12:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 12:47:33 --> Could not find the language line "Home"
ERROR - 2024-07-21 12:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 12:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 12:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:17:33 --> Could not find the language line "Home"
ERROR - 2024-07-21 13:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:40:11 --> Could not find the language line "Other"
ERROR - 2024-07-21 13:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:41:02 --> Could not find the language line "Home"
ERROR - 2024-07-21 13:47:08 --> Could not find the language line "Home"
ERROR - 2024-07-21 13:47:33 --> Could not find the language line "Home"
ERROR - 2024-07-21 13:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 13:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 14:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 14:02:00 --> Could not find the language line "Home"
ERROR - 2024-07-21 14:02:54 --> Could not find the language line "Home"
ERROR - 2024-07-21 14:17:34 --> Could not find the language line "Home"
ERROR - 2024-07-21 14:24:49 --> Could not find the language line "Home"
ERROR - 2024-07-21 14:25:34 --> Could not find the language line "Home"
ERROR - 2024-07-21 14:25:56 --> Could not find the language line "Home"
ERROR - 2024-07-21 14:25:58 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 14:26:31 --> Could not find the language line "Home"
ERROR - 2024-07-21 14:26:33 --> Could not find the language line "Bracelets"
ERROR - 2024-07-21 14:26:44 --> Could not find the language line "Home"
ERROR - 2024-07-21 14:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 14:44:23 --> Could not find the language line "Home"
ERROR - 2024-07-21 14:47:34 --> Could not find the language line "Home"
ERROR - 2024-07-21 14:52:17 --> Could not find the language line "Other"
ERROR - 2024-07-21 14:52:18 --> Could not find the language line "Other"
ERROR - 2024-07-21 14:52:20 --> Could not find the language line "Clothing"
ERROR - 2024-07-21 14:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 14:55:40 --> Could not find the language line "Home"
ERROR - 2024-07-21 15:17:16 --> Could not find the language line "Home"
ERROR - 2024-07-21 15:17:35 --> Could not find the language line "Home"
ERROR - 2024-07-21 15:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 15:46:43 --> Could not find the language line "Home"
ERROR - 2024-07-21 15:47:36 --> Could not find the language line "Home"
ERROR - 2024-07-21 16:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 16:17:36 --> Could not find the language line "Home"
ERROR - 2024-07-21 16:41:43 --> Could not find the language line "Home"
ERROR - 2024-07-21 16:47:36 --> Could not find the language line "Home"
ERROR - 2024-07-21 17:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 17:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 17:17:37 --> Could not find the language line "Home"
ERROR - 2024-07-21 17:19:23 --> Could not find the language line "Other"
ERROR - 2024-07-21 17:19:48 --> Could not find the language line "Home"
ERROR - 2024-07-21 17:20:28 --> Could not find the language line "Socks"
ERROR - 2024-07-21 17:23:20 --> Could not find the language line "Home"
ERROR - 2024-07-21 17:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 17:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 17:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 17:47:37 --> Could not find the language line "Home"
ERROR - 2024-07-21 18:17:37 --> Could not find the language line "Home"
ERROR - 2024-07-21 18:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 18:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 18:32:44 --> Could not find the language line "Home"
ERROR - 2024-07-21 18:35:30 --> Could not find the language line "Home"
ERROR - 2024-07-21 18:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 18:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 18:44:35 --> Could not find the language line "Home"
ERROR - 2024-07-21 18:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 18:47:37 --> Could not find the language line "Home"
ERROR - 2024-07-21 19:17:38 --> Could not find the language line "Home"
ERROR - 2024-07-21 19:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 19:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 19:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 19:36:21 --> Could not find the language line "Home"
ERROR - 2024-07-21 19:47:41 --> Could not find the language line "Home"
ERROR - 2024-07-21 20:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 20:04:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-21 20:04:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-21 20:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 20:05:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-21 20:05:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-21 20:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 20:17:39 --> Could not find the language line "Home"
ERROR - 2024-07-21 20:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 20:47:39 --> Could not find the language line "Home"
ERROR - 2024-07-21 21:17:39 --> Could not find the language line "Home"
ERROR - 2024-07-21 21:17:47 --> Could not find the language line "Home"
ERROR - 2024-07-21 21:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 21:47:40 --> Could not find the language line "Home"
ERROR - 2024-07-21 21:52:43 --> Could not find the language line "Home"
ERROR - 2024-07-21 21:53:12 --> Could not find the language line "Other"
ERROR - 2024-07-21 21:55:22 --> Could not find the language line "Socks"
ERROR - 2024-07-21 22:01:02 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-21 22:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 22:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 22:13:12 --> Could not find the language line "Home"
ERROR - 2024-07-21 22:17:40 --> Could not find the language line "Home"
ERROR - 2024-07-21 22:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-21 22:47:40 --> Could not find the language line "Home"
ERROR - 2024-07-21 23:17:41 --> Could not find the language line "Home"
ERROR - 2024-07-21 23:47:43 --> Could not find the language line "Home"
