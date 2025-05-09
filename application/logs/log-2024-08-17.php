<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-17 00:17:07 --> Could not find the language line "Home"
ERROR - 2024-08-17 00:47:07 --> Could not find the language line "Home"
ERROR - 2024-08-17 00:47:08 --> Could not find the language line "Home"
ERROR - 2024-08-17 00:47:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-17 01:13:57 --> Could not find the language line "Other"
ERROR - 2024-08-17 01:17:08 --> Could not find the language line "Home"
ERROR - 2024-08-17 01:17:57 --> Could not find the language line "Home"
ERROR - 2024-08-17 01:19:28 --> Could not find the language line "Socks"
ERROR - 2024-08-17 01:43:24 --> 404 Page Not Found: Cart/cart
ERROR - 2024-08-17 01:47:08 --> Could not find the language line "Home"
ERROR - 2024-08-17 02:17:09 --> Could not find the language line "Home"
ERROR - 2024-08-17 02:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 02:47:09 --> Could not find the language line "Home"
ERROR - 2024-08-17 03:17:09 --> Could not find the language line "Home"
ERROR - 2024-08-17 03:47:10 --> Could not find the language line "Home"
ERROR - 2024-08-17 04:17:10 --> Could not find the language line "Home"
ERROR - 2024-08-17 04:22:33 --> Could not find the language line "Home"
ERROR - 2024-08-17 04:47:12 --> Could not find the language line "Home"
ERROR - 2024-08-17 04:55:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-17 04:55:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-17 05:05:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-17 05:05:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-17 05:05:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-17 05:05:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-17 05:05:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-17 05:05:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-17 05:05:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-17 05:05:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-17 05:05:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-17 05:05:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-17 05:05:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-17 05:05:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-17 05:17:12 --> Could not find the language line "Home"
ERROR - 2024-08-17 05:34:00 --> Could not find the language line "Other"
ERROR - 2024-08-17 05:34:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-17 05:34:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-17 05:47:14 --> Could not find the language line "Home"
ERROR - 2024-08-17 06:17:12 --> Could not find the language line "Home"
ERROR - 2024-08-17 06:42:37 --> Could not find the language line "Socks"
ERROR - 2024-08-17 06:47:12 --> Could not find the language line "Home"
ERROR - 2024-08-17 06:58:42 --> Could not find the language line "Home"
ERROR - 2024-08-17 07:17:13 --> Could not find the language line "Home"
ERROR - 2024-08-17 07:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 07:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 07:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 07:20:54 --> Could not find the language line "Home"
ERROR - 2024-08-17 07:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 07:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 07:30:13 --> Could not find the language line "Home"
ERROR - 2024-08-17 07:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 07:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 07:47:13 --> Could not find the language line "Home"
ERROR - 2024-08-17 07:50:20 --> Could not find the language line "Home"
ERROR - 2024-08-17 07:50:23 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-08-17 08:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:02:14 --> Could not find the language line "Home"
ERROR - 2024-08-17 08:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:12:42 --> Could not find the language line "Home"
ERROR - 2024-08-17 08:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:16:34 --> Could not find the language line "Home"
ERROR - 2024-08-17 08:17:13 --> Could not find the language line "Home"
ERROR - 2024-08-17 08:17:15 --> Could not find the language line "Home"
ERROR - 2024-08-17 08:17:25 --> Could not find the language line "Home"
ERROR - 2024-08-17 08:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 08:47:13 --> Could not find the language line "Home"
ERROR - 2024-08-17 08:52:01 --> Could not find the language line "Home"
ERROR - 2024-08-17 08:55:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-17 08:55:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-17 09:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:10:28 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:10:28 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:14:10 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:14:33 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:14:55 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:14:58 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:15:30 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:15:34 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:17:13 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:20:15 --> Could not find the language line "Socks"
ERROR - 2024-08-17 09:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:32:41 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:32:45 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-17 09:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:33:59 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-17 09:34:04 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-17 09:34:28 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-17 09:34:30 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:34:49 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:37:34 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:38:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 09:47:14 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:49:33 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:50:24 --> Could not find the language line "Home"
ERROR - 2024-08-17 09:50:36 --> Could not find the language line "Home"
ERROR - 2024-08-17 10:01:11 --> Could not find the language line "Home"
ERROR - 2024-08-17 10:17:14 --> Could not find the language line "Home"
ERROR - 2024-08-17 10:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 10:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 10:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 10:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 10:47:15 --> Could not find the language line "Home"
ERROR - 2024-08-17 10:49:56 --> Could not find the language line "Home"
ERROR - 2024-08-17 11:05:13 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-08-17 11:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 11:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 11:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 11:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 11:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 11:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 11:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 11:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 11:17:16 --> Could not find the language line "Home"
ERROR - 2024-08-17 11:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 11:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 11:21:51 --> Could not find the language line "Home"
ERROR - 2024-08-17 11:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 11:47:16 --> Could not find the language line "Home"
ERROR - 2024-08-17 11:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 11:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 11:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 11:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 12:17:17 --> Could not find the language line "Home"
ERROR - 2024-08-17 12:26:10 --> Could not find the language line "Home"
ERROR - 2024-08-17 12:33:37 --> Could not find the language line "Home"
ERROR - 2024-08-17 12:33:42 --> Could not find the language line "Home"
ERROR - 2024-08-17 12:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 12:34:58 --> Could not find the language line "Home"
ERROR - 2024-08-17 12:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 12:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 12:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 12:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 12:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 12:47:16 --> Could not find the language line "Home"
ERROR - 2024-08-17 12:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 12:54:00 --> Could not find the language line "Home"
ERROR - 2024-08-17 13:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 13:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 13:14:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-17 13:17:17 --> Could not find the language line "Home"
ERROR - 2024-08-17 13:19:16 --> Could not find the language line "Home"
ERROR - 2024-08-17 13:20:45 --> Could not find the language line "Home"
ERROR - 2024-08-17 13:21:45 --> Could not find the language line "Home"
ERROR - 2024-08-17 13:23:54 --> Could not find the language line "Home"
ERROR - 2024-08-17 13:27:42 --> Could not find the language line "Other"
ERROR - 2024-08-17 13:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 13:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 13:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 13:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 13:32:29 --> Could not find the language line "Socks"
ERROR - 2024-08-17 13:47:17 --> Could not find the language line "Home"
ERROR - 2024-08-17 13:49:17 --> Could not find the language line "Home"
ERROR - 2024-08-17 13:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 13:56:48 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-08-17 14:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 14:17:17 --> Could not find the language line "Home"
ERROR - 2024-08-17 14:19:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-17 14:19:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-17 14:19:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-17 14:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 14:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 14:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 14:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 14:47:18 --> Could not find the language line "Home"
ERROR - 2024-08-17 14:48:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-17 14:48:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-17 14:48:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-17 14:48:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-17 14:48:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-17 14:48:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-17 14:48:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-17 14:48:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-17 14:48:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-17 14:48:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-17 14:48:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-17 14:48:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-17 15:15:29 --> Could not find the language line "Clothing"
ERROR - 2024-08-17 15:17:18 --> Could not find the language line "Home"
ERROR - 2024-08-17 15:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 15:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 15:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 15:24:57 --> Could not find the language line "Home"
ERROR - 2024-08-17 15:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 15:26:44 --> Could not find the language line "Home"
ERROR - 2024-08-17 15:47:19 --> Could not find the language line "Home"
ERROR - 2024-08-17 15:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 15:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 15:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 16:17:19 --> Could not find the language line "Home"
ERROR - 2024-08-17 16:35:03 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-08-17 16:47:19 --> Could not find the language line "Home"
ERROR - 2024-08-17 16:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 16:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 16:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 16:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 17:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 17:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 17:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 17:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 17:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 17:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 17:08:43 --> Could not find the language line "Home"
ERROR - 2024-08-17 17:17:19 --> Could not find the language line "Home"
ERROR - 2024-08-17 17:28:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-17 17:28:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-17 17:28:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-17 17:28:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-17 17:47:20 --> Could not find the language line "Home"
ERROR - 2024-08-17 18:02:45 --> Could not find the language line "Home"
ERROR - 2024-08-17 18:02:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-17 18:17:20 --> Could not find the language line "Home"
ERROR - 2024-08-17 18:29:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-17 18:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 18:47:20 --> Could not find the language line "Home"
ERROR - 2024-08-17 18:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 18:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 18:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 18:59:19 --> Could not find the language line "Other"
ERROR - 2024-08-17 19:01:02 --> Could not find the language line "Socks"
ERROR - 2024-08-17 19:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 19:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 19:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 19:17:21 --> Could not find the language line "Home"
ERROR - 2024-08-17 19:27:00 --> Could not find the language line "Home"
ERROR - 2024-08-17 19:47:23 --> Could not find the language line "Home"
ERROR - 2024-08-17 20:04:53 --> 404 Page Not Found: Cart/cart
ERROR - 2024-08-17 20:06:04 --> Could not find the language line "Home"
ERROR - 2024-08-17 20:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 20:17:22 --> Could not find the language line "Home"
ERROR - 2024-08-17 20:47:22 --> Could not find the language line "Home"
ERROR - 2024-08-17 20:52:28 --> Could not find the language line "Home"
ERROR - 2024-08-17 21:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 21:17:22 --> Could not find the language line "Home"
ERROR - 2024-08-17 21:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 21:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 21:40:25 --> Could not find the language line "Other"
ERROR - 2024-08-17 21:47:25 --> Could not find the language line "Home"
ERROR - 2024-08-17 21:53:09 --> Could not find the language line "Home"
ERROR - 2024-08-17 21:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 21:55:13 --> Could not find the language line "Home"
ERROR - 2024-08-17 21:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 21:57:21 --> Could not find the language line "Home"
ERROR - 2024-08-17 21:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 21:57:53 --> Could not find the language line "Home"
ERROR - 2024-08-17 21:59:18 --> Could not find the language line "Home"
ERROR - 2024-08-17 21:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-17 22:17:24 --> Could not find the language line "Home"
ERROR - 2024-08-17 22:47:24 --> Could not find the language line "Home"
ERROR - 2024-08-17 22:54:59 --> 404 Page Not Found: Storage/settings
ERROR - 2024-08-17 23:17:24 --> Could not find the language line "Home"
ERROR - 2024-08-17 23:47:25 --> Could not find the language line "Home"
