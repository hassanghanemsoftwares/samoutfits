<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-30 00:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 00:12:26 --> Could not find the language line "Home"
ERROR - 2024-10-30 00:12:36 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 00:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 00:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 00:15:21 --> Could not find the language line "Bracelets"
ERROR - 2024-10-30 00:15:55 --> Could not find the language line "Home"
ERROR - 2024-10-30 00:16:43 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 00:17:50 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 00:20:36 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 00:27:23 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 00:31:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-30 00:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 00:36:53 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 00:45:57 --> Could not find the language line "Home"
ERROR - 2024-10-30 00:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 00:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 00:57:54 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 01:15:54 --> Could not find the language line "Home"
ERROR - 2024-10-30 01:40:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-30 01:45:57 --> Could not find the language line "Home"
ERROR - 2024-10-30 01:59:53 --> Could not find the language line "Home"
ERROR - 2024-10-30 02:10:06 --> Could not find the language line "Home"
ERROR - 2024-10-30 02:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 02:15:53 --> Could not find the language line "Home"
ERROR - 2024-10-30 02:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 02:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 02:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 02:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 02:41:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-30 02:45:55 --> Could not find the language line "Home"
ERROR - 2024-10-30 02:51:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-30 02:57:09 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-30 03:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 03:06:00 --> Could not find the language line "Home"
ERROR - 2024-10-30 03:08:45 --> Could not find the language line "Home"
ERROR - 2024-10-30 03:13:42 --> Could not find the language line "Home"
ERROR - 2024-10-30 03:15:37 --> Could not find the language line "Home"
ERROR - 2024-10-30 03:15:52 --> Could not find the language line "Home"
ERROR - 2024-10-30 03:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 03:25:13 --> Could not find the language line "Home"
ERROR - 2024-10-30 03:25:37 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-10-30 03:25:38 --> Could not find the language line "Home"
ERROR - 2024-10-30 03:25:38 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-10-30 03:25:38 --> 404 Page Not Found: Wp/index
ERROR - 2024-10-30 03:25:38 --> 404 Page Not Found: Wp-admin/setup-config.php
ERROR - 2024-10-30 03:25:38 --> 404 Page Not Found: Wp-admin/install.php
ERROR - 2024-10-30 03:25:38 --> 404 Page Not Found: Blog/index
ERROR - 2024-10-30 03:25:38 --> 404 Page Not Found: New/index
ERROR - 2024-10-30 03:25:38 --> 404 Page Not Found: Newsite/index
ERROR - 2024-10-30 03:25:42 --> 404 Page Not Found: Core/index
ERROR - 2024-10-30 03:25:42 --> 404 Page Not Found: Testing/index
ERROR - 2024-10-30 03:25:42 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-10-30 03:25:42 --> Could not find the language line "Home"
ERROR - 2024-10-30 03:45:52 --> Could not find the language line "Home"
ERROR - 2024-10-30 03:58:55 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-30 04:10:35 --> Could not find the language line "Home"
ERROR - 2024-10-30 04:16:00 --> Could not find the language line "Home"
ERROR - 2024-10-30 04:18:51 --> Could not find the language line "Home"
ERROR - 2024-10-30 04:18:57 --> Could not find the language line "Home"
ERROR - 2024-10-30 04:20:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-30 04:20:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-30 04:20:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-30 04:20:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-30 04:20:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-30 04:20:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-30 04:20:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-30 04:20:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-30 04:20:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-30 04:20:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-30 04:20:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-30 04:20:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-30 04:25:01 --> Could not find the language line "Home"
ERROR - 2024-10-30 04:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 04:29:55 --> Could not find the language line "Home"
ERROR - 2024-10-30 04:45:55 --> Could not find the language line "Home"
ERROR - 2024-10-30 05:00:09 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 05:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 05:11:03 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 05:15:54 --> Could not find the language line "Home"
ERROR - 2024-10-30 05:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 05:15:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-30 05:15:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-30 05:15:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-30 05:15:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-30 05:16:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-30 05:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 05:31:21 --> Could not find the language line "Home"
ERROR - 2024-10-30 05:31:28 --> Could not find the language line "Home"
ERROR - 2024-10-30 05:31:30 --> Could not find the language line "Home"
ERROR - 2024-10-30 05:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 05:31:49 --> Could not find the language line "Home"
ERROR - 2024-10-30 05:34:22 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-10-30 05:38:22 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-10-30 05:39:23 --> Could not find the language line "Home"
ERROR - 2024-10-30 05:39:47 --> Could not find the language line "Other"
ERROR - 2024-10-30 05:45:53 --> Could not find the language line "Home"
ERROR - 2024-10-30 06:15:52 --> Could not find the language line "Home"
ERROR - 2024-10-30 06:17:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-30 06:17:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-30 06:17:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-30 06:17:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-30 06:17:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-30 06:17:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-30 06:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 06:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 06:44:29 --> Could not find the language line "Home"
ERROR - 2024-10-30 06:45:52 --> Could not find the language line "Home"
ERROR - 2024-10-30 06:51:25 --> Could not find the language line "Home"
ERROR - 2024-10-30 06:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 06:56:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-30 06:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 07:00:53 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-30 07:04:02 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 07:07:28 --> Could not find the language line "products"
ERROR - 2024-10-30 07:09:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-30 07:12:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-30 07:14:11 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 07:14:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-30 07:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 07:15:53 --> Could not find the language line "Home"
ERROR - 2024-10-30 07:24:17 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-10-30 07:24:17 --> Could not find the language line "Home"
ERROR - 2024-10-30 07:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 07:25:20 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 07:25:22 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 07:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 07:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 07:26:57 --> Could not find the language line "Home"
ERROR - 2024-10-30 07:37:14 --> Could not find the language line "Home"
ERROR - 2024-10-30 07:39:53 --> Could not find the language line "Home"
ERROR - 2024-10-30 07:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 07:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 07:45:55 --> Could not find the language line "Home"
ERROR - 2024-10-30 07:55:03 --> Could not find the language line "Home"
ERROR - 2024-10-30 07:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 07:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 07:57:26 --> Could not find the language line "Perfume"
ERROR - 2024-10-30 07:57:33 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 07:57:39 --> Could not find the language line "Perfume"
ERROR - 2024-10-30 07:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:01:57 --> Could not find the language line "Home"
ERROR - 2024-10-30 08:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:03:20 --> Could not find the language line "Home"
ERROR - 2024-10-30 08:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:15:53 --> Could not find the language line "Home"
ERROR - 2024-10-30 08:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:18:22 --> Could not find the language line "Home"
ERROR - 2024-10-30 08:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:45:53 --> Could not find the language line "Home"
ERROR - 2024-10-30 08:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 08:51:32 --> Could not find the language line "Home"
ERROR - 2024-10-30 08:55:35 --> Could not find the language line "Home"
ERROR - 2024-10-30 08:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:07:43 --> Could not find the language line "Home"
ERROR - 2024-10-30 09:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:15:53 --> Could not find the language line "Home"
ERROR - 2024-10-30 09:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:23:28 --> Could not find the language line "Home"
ERROR - 2024-10-30 09:24:41 --> Could not find the language line "Home"
ERROR - 2024-10-30 09:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 09:45:55 --> Could not find the language line "Home"
ERROR - 2024-10-30 09:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:15:54 --> Could not find the language line "Home"
ERROR - 2024-10-30 10:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:21:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-30 10:21:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-30 10:23:02 --> Could not find the language line "Home"
ERROR - 2024-10-30 10:26:06 --> Could not find the language line "Home"
ERROR - 2024-10-30 10:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:26:20 --> Could not find the language line "Home"
ERROR - 2024-10-30 10:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:27:53 --> Could not find the language line "Home"
ERROR - 2024-10-30 10:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:36:27 --> Could not find the language line "Home"
ERROR - 2024-10-30 10:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:38:54 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 10:39:44 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2024-10-30 10:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 10:45:54 --> Could not find the language line "Home"
ERROR - 2024-10-30 10:50:44 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2024-10-30 10:51:58 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2024-10-30 10:56:08 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-10-30 10:56:35 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-10-30 11:02:07 --> Could not find the language line "Home"
ERROR - 2024-10-30 11:03:06 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-10-30 11:05:05 --> Could not find the language line "Home"
ERROR - 2024-10-30 11:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:05:20 --> Could not find the language line "Bracelets"
ERROR - 2024-10-30 11:05:37 --> Could not find the language line "Bracelets"
ERROR - 2024-10-30 11:05:42 --> Could not find the language line "Bracelets"
ERROR - 2024-10-30 11:05:44 --> Could not find the language line "Home"
ERROR - 2024-10-30 11:06:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-30 11:06:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-30 11:06:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-30 11:06:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-30 11:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:08:40 --> Could not find the language line "Home"
ERROR - 2024-10-30 11:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:15:56 --> Could not find the language line "Home"
ERROR - 2024-10-30 11:18:47 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 11:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:26:02 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-10-30 11:29:12 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 11:29:17 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 11:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 11:40:27 --> Could not find the language line "Home"
ERROR - 2024-10-30 11:45:55 --> Could not find the language line "Home"
ERROR - 2024-10-30 11:49:05 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2024-10-30 11:56:50 --> 404 Page Not Found: Atomxml/index
ERROR - 2024-10-30 12:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 12:05:54 --> Could not find the language line "Home"
ERROR - 2024-10-30 12:05:56 --> Could not find the language line "Home"
ERROR - 2024-10-30 12:11:24 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-10-30 12:12:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-30 12:15:56 --> Could not find the language line "Home"
ERROR - 2024-10-30 12:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 12:18:33 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-10-30 12:18:33 --> Could not find the language line "Home"
ERROR - 2024-10-30 12:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 12:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 12:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 12:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 12:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 12:35:28 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-30 12:45:55 --> Could not find the language line "Home"
ERROR - 2024-10-30 12:46:30 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2024-10-30 12:47:07 --> Could not find the language line "Home"
ERROR - 2024-10-30 12:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 12:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 12:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 12:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 12:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 12:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 13:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 13:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 13:07:59 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-10-30 13:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 13:14:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-30 13:14:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-30 13:14:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-30 13:15:58 --> Could not find the language line "Home"
ERROR - 2024-10-30 13:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 13:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 13:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 13:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 13:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 13:35:44 --> Could not find the language line "Home"
ERROR - 2024-10-30 13:37:14 --> Could not find the language line "Home"
ERROR - 2024-10-30 13:40:13 --> Could not find the language line "Home"
ERROR - 2024-10-30 13:40:59 --> Could not find the language line "Home"
ERROR - 2024-10-30 13:45:56 --> Could not find the language line "Home"
ERROR - 2024-10-30 13:47:18 --> Could not find the language line "Home"
ERROR - 2024-10-30 13:49:29 --> Could not find the language line "Home"
ERROR - 2024-10-30 14:00:56 --> Could not find the language line "Home"
ERROR - 2024-10-30 14:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 14:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 14:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 14:15:19 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 14:15:57 --> Could not find the language line "Home"
ERROR - 2024-10-30 14:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 14:22:55 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-30 14:45:56 --> Could not find the language line "Home"
ERROR - 2024-10-30 14:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 14:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 14:52:35 --> Could not find the language line "Home"
ERROR - 2024-10-30 14:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 14:55:45 --> Could not find the language line "Home"
ERROR - 2024-10-30 14:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 14:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:01:45 --> Could not find the language line "Home"
ERROR - 2024-10-30 15:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:03:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-30 15:03:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44-45', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-30 15:03:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-30 15:04:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-30 15:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:09:24 --> Could not find the language line "Home"
ERROR - 2024-10-30 15:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:15:58 --> Could not find the language line "Home"
ERROR - 2024-10-30 15:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:25:41 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 15:25:56 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 15:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:26:12 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 15:30:45 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 15:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:45:55 --> Could not find the language line "Home"
ERROR - 2024-10-30 15:46:00 --> Could not find the language line "Home"
ERROR - 2024-10-30 15:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:56:01 --> Could not find the language line "Home"
ERROR - 2024-10-30 15:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:56:31 --> Could not find the language line "Home"
ERROR - 2024-10-30 15:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 15:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:02:18 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-30 16:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:15:58 --> Could not find the language line "Home"
ERROR - 2024-10-30 16:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:36:06 --> Could not find the language line "Home"
ERROR - 2024-10-30 16:36:13 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 16:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:36:43 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 16:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:36:47 --> Could not find the language line "Home"
ERROR - 2024-10-30 16:36:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-30 16:36:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-30 16:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:37:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-30 16:37:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-30 16:37:27 --> Could not find the language line "Home"
ERROR - 2024-10-30 16:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:37:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-30 16:37:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-30 16:37:38 --> Could not find the language line "Home"
ERROR - 2024-10-30 16:37:46 --> Could not find the language line "Bracelets"
ERROR - 2024-10-30 16:38:02 --> Could not find the language line "Home"
ERROR - 2024-10-30 16:38:04 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-30 16:38:19 --> Could not find the language line "Home"
ERROR - 2024-10-30 16:42:43 --> Could not find the language line "Home"
ERROR - 2024-10-30 16:45:58 --> Could not find the language line "Home"
ERROR - 2024-10-30 16:50:29 --> Could not find the language line "Home"
ERROR - 2024-10-30 16:50:34 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 16:50:45 --> Could not find the language line "Home"
ERROR - 2024-10-30 16:50:48 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 16:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:51:01 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 16:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 16:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:02:25 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:02:48 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:03:49 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:15:59 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:31:05 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:32:25 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:33:56 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 17:34:12 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:36:11 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:36:21 --> Could not find the language line "Perfume"
ERROR - 2024-10-30 17:36:28 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:36:43 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:37:30 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:44:11 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 17:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:45:58 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:51:51 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:53:29 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:53:35 --> Could not find the language line "Bracelets"
ERROR - 2024-10-30 17:53:59 --> Could not find the language line "Bracelets"
ERROR - 2024-10-30 17:54:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-30 17:54:10 --> Could not find the language line "Bracelets"
ERROR - 2024-10-30 17:54:11 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:55:07 --> Could not find the language line "Home"
ERROR - 2024-10-30 17:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 17:56:01 --> Could not find the language line "Home"
ERROR - 2024-10-30 18:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 18:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 18:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 18:05:27 --> Could not find the language line "Home"
ERROR - 2024-10-30 18:05:40 --> Could not find the language line "Home"
ERROR - 2024-10-30 18:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 18:14:17 --> Could not find the language line "Home"
ERROR - 2024-10-30 18:15:59 --> Could not find the language line "Home"
ERROR - 2024-10-30 18:19:14 --> Could not find the language line "Home"
ERROR - 2024-10-30 18:32:01 --> Could not find the language line "Home"
ERROR - 2024-10-30 18:32:21 --> Could not find the language line "Home"
ERROR - 2024-10-30 18:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 18:35:02 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-30 18:35:02 --> Could not find the language line "Home"
ERROR - 2024-10-30 18:36:10 --> Could not find the language line "Home"
ERROR - 2024-10-30 18:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 18:37:17 --> Could not find the language line "Home"
ERROR - 2024-10-30 18:37:50 --> Could not find the language line "Home"
ERROR - 2024-10-30 18:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 18:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-30 18:45:59 --> Could not find the language line "Home"
ERROR - 2024-10-30 18:51:01 --> Could not find the language line "Home"
ERROR - 2024-10-30 19:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 19:12:29 --> Could not find the language line "Home"
ERROR - 2024-10-30 19:15:59 --> Could not find the language line "Home"
ERROR - 2024-10-30 19:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 19:37:35 --> Could not find the language line "Home"
ERROR - 2024-10-30 19:37:39 --> Could not find the language line "Home"
ERROR - 2024-10-30 19:40:56 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-30 19:41:41 --> Could not find the language line "Home"
ERROR - 2024-10-30 19:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 19:46:01 --> Could not find the language line "Home"
ERROR - 2024-10-30 20:16:00 --> Could not find the language line "Home"
ERROR - 2024-10-30 20:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 20:44:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-30 20:46:01 --> Could not find the language line "Home"
ERROR - 2024-10-30 20:50:40 --> Could not find the language line "Home"
ERROR - 2024-10-30 21:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 21:16:02 --> Could not find the language line "Home"
ERROR - 2024-10-30 21:16:55 --> Could not find the language line "Home"
ERROR - 2024-10-30 21:17:15 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 21:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 21:17:25 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 21:17:32 --> Could not find the language line "Home"
ERROR - 2024-10-30 21:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 21:22:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-30 21:40:19 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-30 21:44:35 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 21:44:35 --> Could not find the language line "Other"
ERROR - 2024-10-30 21:44:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-30 21:44:35 --> Could not find the language line "Home"
ERROR - 2024-10-30 21:44:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-30 21:44:38 --> Could not find the language line "Other"
ERROR - 2024-10-30 21:44:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-30 21:44:39 --> Could not find the language line "Other"
ERROR - 2024-10-30 21:44:39 --> Could not find the language line "Other"
ERROR - 2024-10-30 21:44:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-30 21:46:01 --> Could not find the language line "Home"
ERROR - 2024-10-30 21:46:13 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 21:47:17 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-30 21:50:44 --> Could not find the language line "Clothing"
ERROR - 2024-10-30 22:13:38 --> Could not find the language line "Home"
ERROR - 2024-10-30 22:16:04 --> Could not find the language line "Home"
ERROR - 2024-10-30 22:16:33 --> Could not find the language line "Home"
ERROR - 2024-10-30 22:17:12 --> Could not find the language line "Bracelets"
ERROR - 2024-10-30 22:17:19 --> Could not find the language line "Home"
ERROR - 2024-10-30 22:17:21 --> Could not find the language line "Home"
ERROR - 2024-10-30 22:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 22:19:54 --> Could not find the language line "Home"
ERROR - 2024-10-30 22:19:58 --> Could not find the language line "Home"
ERROR - 2024-10-30 22:22:29 --> Could not find the language line "Home"
ERROR - 2024-10-30 22:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 22:29:58 --> Could not find the language line "Home"
ERROR - 2024-10-30 22:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 22:46:02 --> Could not find the language line "Home"
ERROR - 2024-10-30 23:01:25 --> Could not find the language line "Home"
ERROR - 2024-10-30 23:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 23:02:15 --> Could not find the language line "Home"
ERROR - 2024-10-30 23:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-30 23:02:57 --> Could not find the language line "Home"
ERROR - 2024-10-30 23:03:21 --> Could not find the language line "Home"
ERROR - 2024-10-30 23:13:06 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-30 23:13:07 --> Could not find the language line "Home"
ERROR - 2024-10-30 23:16:05 --> Could not find the language line "Home"
ERROR - 2024-10-30 23:20:05 --> Could not find the language line "Home"
ERROR - 2024-10-30 23:33:45 --> Could not find the language line "Home"
ERROR - 2024-10-30 23:46:08 --> Could not find the language line "Home"
ERROR - 2024-10-30 23:49:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-30 23:51:10 --> Could not find the language line "Home"
ERROR - 2024-10-30 23:56:30 --> Could not find the language line "Home"
