<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-22 00:09:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-22 00:14:07 --> Could not find the language line "Home"
ERROR - 2024-10-22 00:15:50 --> Could not find the language line "Home"
ERROR - 2024-10-22 00:15:55 --> 404 Page Not Found: Assets/mail
ERROR - 2024-10-22 00:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 00:44:10 --> Could not find the language line "Home"
ERROR - 2024-10-22 01:14:05 --> Could not find the language line "Home"
ERROR - 2024-10-22 01:44:02 --> Could not find the language line "Home"
ERROR - 2024-10-22 01:55:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-22 02:05:36 --> Could not find the language line "products"
ERROR - 2024-10-22 02:07:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-22 02:14:01 --> Could not find the language line "Home"
ERROR - 2024-10-22 02:14:38 --> Could not find the language line "Home"
ERROR - 2024-10-22 02:44:00 --> Could not find the language line "Home"
ERROR - 2024-10-22 02:55:48 --> Could not find the language line "Clothing"
ERROR - 2024-10-22 03:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 03:14:03 --> Could not find the language line "Home"
ERROR - 2024-10-22 03:44:03 --> Could not find the language line "Home"
ERROR - 2024-10-22 03:55:11 --> Could not find the language line "products"
ERROR - 2024-10-22 04:07:04 --> Could not find the language line "Clothing"
ERROR - 2024-10-22 04:13:20 --> Could not find the language line "Home"
ERROR - 2024-10-22 04:14:03 --> Could not find the language line "Home"
ERROR - 2024-10-22 04:16:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-22 04:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 04:21:44 --> Could not find the language line "Home"
ERROR - 2024-10-22 04:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 04:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 04:43:15 --> Could not find the language line "Home"
ERROR - 2024-10-22 04:44:02 --> Could not find the language line "Home"
ERROR - 2024-10-22 04:45:38 --> Could not find the language line "Home"
ERROR - 2024-10-22 04:46:57 --> Could not find the language line "Home"
ERROR - 2024-10-22 05:14:04 --> Could not find the language line "Home"
ERROR - 2024-10-22 05:21:10 --> Could not find the language line "Home"
ERROR - 2024-10-22 05:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 05:34:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-22 05:44:02 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:08:43 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:10:53 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:14:02 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:18:16 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 06:37:51 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-22 06:38:08 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 06:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 06:44:02 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:47:22 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 06:49:18 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:49:58 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 06:52:24 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:52:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-22 06:52:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-22 06:53:06 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:53:08 --> Could not find the language line "Socks"
ERROR - 2024-10-22 06:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 06:54:32 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:55:06 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 06:56:49 --> Could not find the language line "Home"
ERROR - 2024-10-22 06:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 07:13:43 --> Could not find the language line "Home"
ERROR - 2024-10-22 07:14:05 --> Could not find the language line "Home"
ERROR - 2024-10-22 07:39:32 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-22 07:44:03 --> Could not find the language line "Home"
ERROR - 2024-10-22 07:44:52 --> Could not find the language line "Home"
ERROR - 2024-10-22 07:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 07:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 07:45:29 --> Could not find the language line "Home"
ERROR - 2024-10-22 07:45:35 --> Could not find the language line "Home"
ERROR - 2024-10-22 07:45:35 --> Could not find the language line "Home"
ERROR - 2024-10-22 07:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 07:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 07:51:10 --> Could not find the language line "Home"
ERROR - 2024-10-22 07:51:35 --> Could not find the language line "Home"
ERROR - 2024-10-22 07:51:44 --> Could not find the language line "Home"
ERROR - 2024-10-22 07:52:05 --> Could not find the language line "Home"
ERROR - 2024-10-22 07:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 07:53:12 --> Could not find the language line "Home"
ERROR - 2024-10-22 07:55:16 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-22 08:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 08:14:03 --> Could not find the language line "Home"
ERROR - 2024-10-22 08:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 08:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 08:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 08:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 08:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 08:22:46 --> Could not find the language line "Home"
ERROR - 2024-10-22 08:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 08:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 08:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 08:30:56 --> Could not find the language line "Home"
ERROR - 2024-10-22 08:33:03 --> Could not find the language line "Home"
ERROR - 2024-10-22 08:33:40 --> Could not find the language line "Home"
ERROR - 2024-10-22 08:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 08:43:58 --> Could not find the language line "Home"
ERROR - 2024-10-22 08:44:05 --> Could not find the language line "Home"
ERROR - 2024-10-22 08:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 08:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 09:08:09 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-22 09:09:04 --> Could not find the language line "Home"
ERROR - 2024-10-22 09:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 09:14:04 --> Could not find the language line "Home"
ERROR - 2024-10-22 09:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 09:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 09:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 09:26:25 --> Could not find the language line "Home"
ERROR - 2024-10-22 09:31:38 --> Could not find the language line "Home"
ERROR - 2024-10-22 09:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 09:34:42 --> Could not find the language line "Home"
ERROR - 2024-10-22 09:44:04 --> Could not find the language line "Home"
ERROR - 2024-10-22 09:46:52 --> Could not find the language line "Other"
ERROR - 2024-10-22 09:53:54 --> Could not find the language line "Perfume"
ERROR - 2024-10-22 09:55:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-22 09:57:47 --> Could not find the language line "Home"
ERROR - 2024-10-22 09:57:48 --> Could not find the language line "Home"
ERROR - 2024-10-22 09:57:48 --> Could not find the language line "Home"
ERROR - 2024-10-22 09:58:00 --> Could not find the language line "Home"
ERROR - 2024-10-22 09:58:54 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:14:05 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:17:00 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:17:01 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:17:02 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:17:03 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:17:04 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:17:24 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:17:25 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:17:26 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:17:27 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:17:28 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:17:29 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:17:30 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:17:31 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:27:05 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:27:07 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:27:08 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:31:12 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:31:20 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:31:25 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:31:44 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:36:59 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:42:24 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:44:04 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:45:09 --> Could not find the language line "Home"
ERROR - 2024-10-22 10:57:02 --> Could not find the language line "Clothing"
ERROR - 2024-10-22 11:09:31 --> Could not find the language line "Home"
ERROR - 2024-10-22 11:14:05 --> Could not find the language line "Home"
ERROR - 2024-10-22 11:21:59 --> Could not find the language line "Other"
ERROR - 2024-10-22 11:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 11:31:28 --> Could not find the language line "Home"
ERROR - 2024-10-22 11:37:46 --> Could not find the language line "Home"
ERROR - 2024-10-22 11:38:18 --> Could not find the language line "Home"
ERROR - 2024-10-22 11:39:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-22 11:41:34 --> Could not find the language line "Clothing"
ERROR - 2024-10-22 11:42:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-22 11:42:16 --> Could not find the language line "Clothing"
ERROR - 2024-10-22 11:44:05 --> Could not find the language line "Home"
ERROR - 2024-10-22 11:44:28 --> Could not find the language line "Home"
ERROR - 2024-10-22 11:46:34 --> Could not find the language line "Home"
ERROR - 2024-10-22 11:47:50 --> Could not find the language line "Home"
ERROR - 2024-10-22 11:52:28 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-22 11:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 11:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 12:00:18 --> Could not find the language line "Home"
ERROR - 2024-10-22 12:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 12:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 12:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 12:14:07 --> Could not find the language line "Home"
ERROR - 2024-10-22 12:29:28 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-22 12:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 12:44:06 --> Could not find the language line "Home"
ERROR - 2024-10-22 13:01:20 --> Could not find the language line "Home"
ERROR - 2024-10-22 13:01:50 --> Could not find the language line "Home"
ERROR - 2024-10-22 13:05:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-22 13:05:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-22 13:05:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-22 13:05:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-22 13:05:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-22 13:05:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-22 13:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 13:14:06 --> Could not find the language line "Home"
ERROR - 2024-10-22 13:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 13:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 13:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 13:15:11 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-22 13:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 13:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 13:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 13:25:11 --> Could not find the language line "products"
ERROR - 2024-10-22 13:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 13:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 13:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 13:44:06 --> Could not find the language line "Home"
ERROR - 2024-10-22 13:59:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-22 13:59:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-22 13:59:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-22 13:59:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-22 13:59:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-22 13:59:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-22 13:59:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-22 13:59:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-22 13:59:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-22 13:59:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-22 13:59:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-22 13:59:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-22 14:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 14:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 14:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 14:13:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-22 14:13:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-22 14:13:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-22 14:13:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-22 14:13:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-22 14:13:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-22 14:13:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-22 14:13:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-22 14:13:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-22 14:13:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-22 14:13:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-22 14:13:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-22 14:14:07 --> Could not find the language line "Home"
ERROR - 2024-10-22 14:15:52 --> Could not find the language line "Home"
ERROR - 2024-10-22 14:16:22 --> Could not find the language line "Bracelets"
ERROR - 2024-10-22 14:16:35 --> Could not find the language line "Home"
ERROR - 2024-10-22 14:16:35 --> Could not find the language line "Home"
ERROR - 2024-10-22 14:16:35 --> Could not find the language line "Home"
ERROR - 2024-10-22 14:16:35 --> Could not find the language line "Home"
ERROR - 2024-10-22 14:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 14:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 14:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 14:41:22 --> Could not find the language line "Home"
ERROR - 2024-10-22 14:44:07 --> Could not find the language line "Home"
ERROR - 2024-10-22 14:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 14:47:23 --> Could not find the language line "Home"
ERROR - 2024-10-22 14:50:39 --> Could not find the language line "Home"
ERROR - 2024-10-22 14:51:26 --> Could not find the language line "Other"
ERROR - 2024-10-22 14:53:14 --> Could not find the language line "Home"
ERROR - 2024-10-22 14:58:06 --> Could not find the language line "Home"
ERROR - 2024-10-22 15:08:00 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-22 15:14:08 --> Could not find the language line "Home"
ERROR - 2024-10-22 15:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 15:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 15:35:08 --> Could not find the language line "Other"
ERROR - 2024-10-22 15:43:37 --> Could not find the language line "Home"
ERROR - 2024-10-22 15:44:07 --> Could not find the language line "Home"
ERROR - 2024-10-22 16:14:08 --> Could not find the language line "Home"
ERROR - 2024-10-22 16:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 16:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 16:44:08 --> Could not find the language line "Home"
ERROR - 2024-10-22 16:44:38 --> Could not find the language line "Home"
ERROR - 2024-10-22 16:59:21 --> Could not find the language line "Home"
ERROR - 2024-10-22 17:00:36 --> Could not find the language line "Home"
ERROR - 2024-10-22 17:00:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-22 17:01:56 --> Could not find the language line "Home"
ERROR - 2024-10-22 17:06:13 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-22 17:14:09 --> Could not find the language line "Home"
ERROR - 2024-10-22 17:36:49 --> Could not find the language line "Home"
ERROR - 2024-10-22 17:36:52 --> Could not find the language line "Home"
ERROR - 2024-10-22 17:44:09 --> Could not find the language line "Home"
ERROR - 2024-10-22 17:44:24 --> Could not find the language line "Home"
ERROR - 2024-10-22 17:57:19 --> Could not find the language line "Home"
ERROR - 2024-10-22 18:00:31 --> Could not find the language line "Home"
ERROR - 2024-10-22 18:02:28 --> Could not find the language line "Home"
ERROR - 2024-10-22 18:03:49 --> Could not find the language line "Home"
ERROR - 2024-10-22 18:14:09 --> Could not find the language line "Home"
ERROR - 2024-10-22 18:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 18:34:22 --> Could not find the language line "products"
ERROR - 2024-10-22 18:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 18:44:09 --> Could not find the language line "Home"
ERROR - 2024-10-22 18:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 18:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 18:54:26 --> Could not find the language line "Home"
ERROR - 2024-10-22 19:08:25 --> Could not find the language line "Home"
ERROR - 2024-10-22 19:14:09 --> Could not find the language line "Home"
ERROR - 2024-10-22 19:14:11 --> Could not find the language line "Home"
ERROR - 2024-10-22 19:14:43 --> Could not find the language line "Home"
ERROR - 2024-10-22 19:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 19:44:10 --> Could not find the language line "Home"
ERROR - 2024-10-22 19:52:33 --> Could not find the language line "Home"
ERROR - 2024-10-22 19:52:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-22 19:53:06 --> Could not find the language line "Bracelets"
ERROR - 2024-10-22 19:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 19:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 19:53:31 --> Could not find the language line "Bracelets"
ERROR - 2024-10-22 19:53:48 --> Could not find the language line "Bracelets"
ERROR - 2024-10-22 19:53:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-22 19:54:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-22 19:54:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-22 19:54:52 --> Could not find the language line "Socks"
ERROR - 2024-10-22 19:55:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-22 19:55:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-22 19:55:28 --> Could not find the language line "Socks"
ERROR - 2024-10-22 20:10:22 --> Could not find the language line "Home"
ERROR - 2024-10-22 20:11:59 --> Could not find the language line "Home"
ERROR - 2024-10-22 20:14:10 --> Could not find the language line "Home"
ERROR - 2024-10-22 20:28:35 --> Could not find the language line "Home"
ERROR - 2024-10-22 20:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 20:44:10 --> Could not find the language line "Home"
ERROR - 2024-10-22 21:03:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-22 21:09:11 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-22 21:14:11 --> Could not find the language line "Home"
ERROR - 2024-10-22 21:32:34 --> Could not find the language line "Home"
ERROR - 2024-10-22 21:33:16 --> Could not find the language line "Home"
ERROR - 2024-10-22 21:44:13 --> Could not find the language line "Home"
ERROR - 2024-10-22 21:49:48 --> Could not find the language line "Home"
ERROR - 2024-10-22 21:55:31 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-22 21:55:45 --> Could not find the language line "Other"
ERROR - 2024-10-22 22:02:50 --> Could not find the language line "Home"
ERROR - 2024-10-22 22:11:25 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-22 22:11:25 --> Could not find the language line "Home"
ERROR - 2024-10-22 22:14:18 --> Could not find the language line "Home"
ERROR - 2024-10-22 22:22:59 --> Could not find the language line "Clothing"
ERROR - 2024-10-22 22:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 22:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 22:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 22:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 22:44:15 --> Could not find the language line "Home"
ERROR - 2024-10-22 22:46:25 --> Could not find the language line "Home"
ERROR - 2024-10-22 23:01:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-22 23:02:59 --> Could not find the language line "Home"
ERROR - 2024-10-22 23:07:25 --> Could not find the language line "Home"
ERROR - 2024-10-22 23:14:14 --> Could not find the language line "Home"
ERROR - 2024-10-22 23:16:53 --> Could not find the language line "Home"
ERROR - 2024-10-22 23:32:42 --> Could not find the language line "Home"
ERROR - 2024-10-22 23:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-22 23:44:00 --> Could not find the language line "Home"
ERROR - 2024-10-22 23:44:15 --> Could not find the language line "Home"
ERROR - 2024-10-22 23:47:15 --> Could not find the language line "Home"
