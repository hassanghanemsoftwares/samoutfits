<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-17 00:01:25 --> Could not find the language line "Home"
ERROR - 2025-01-17 00:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 00:11:52 --> Could not find the language line "Home"
ERROR - 2025-01-17 00:20:07 --> Could not find the language line "Home"
ERROR - 2025-01-17 00:21:29 --> Could not find the language line "Home"
ERROR - 2025-01-17 00:50:08 --> Could not find the language line "Home"
ERROR - 2025-01-17 00:58:14 --> Could not find the language line "Home"
ERROR - 2025-01-17 01:03:00 --> Could not find the language line "Home"
ERROR - 2025-01-17 01:03:05 --> Could not find the language line "Home"
ERROR - 2025-01-17 01:03:11 --> Could not find the language line "Home"
ERROR - 2025-01-17 01:03:13 --> Could not find the language line "Home"
ERROR - 2025-01-17 01:03:24 --> Could not find the language line "Home"
ERROR - 2025-01-17 01:03:26 --> Could not find the language line "Home"
ERROR - 2025-01-17 01:03:27 --> Could not find the language line "Home"
ERROR - 2025-01-17 01:03:37 --> Could not find the language line "Home"
ERROR - 2025-01-17 01:20:06 --> Could not find the language line "Home"
ERROR - 2025-01-17 01:50:05 --> Could not find the language line "Home"
ERROR - 2025-01-17 01:50:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 02:20:06 --> Could not find the language line "Home"
ERROR - 2025-01-17 02:30:51 --> Could not find the language line "Home"
ERROR - 2025-01-17 02:50:05 --> Could not find the language line "Home"
ERROR - 2025-01-17 03:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 03:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 03:20:05 --> Could not find the language line "Home"
ERROR - 2025-01-17 03:49:42 --> Could not find the language line "Home"
ERROR - 2025-01-17 03:49:50 --> Could not find the language line "Other"
ERROR - 2025-01-17 03:50:16 --> Could not find the language line "Home"
ERROR - 2025-01-17 04:20:15 --> Could not find the language line "Home"
ERROR - 2025-01-17 04:27:04 --> Could not find the language line "Clothing"
ERROR - 2025-01-17 04:46:18 --> Could not find the language line "Clothing"
ERROR - 2025-01-17 04:50:13 --> Could not find the language line "Home"
ERROR - 2025-01-17 04:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 05:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 05:11:43 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-17 05:16:43 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-17 05:20:06 --> Could not find the language line "Home"
ERROR - 2025-01-17 05:50:08 --> Could not find the language line "Home"
ERROR - 2025-01-17 06:20:11 --> Could not find the language line "Home"
ERROR - 2025-01-17 06:37:00 --> Could not find the language line "Home"
ERROR - 2025-01-17 06:39:36 --> Could not find the language line "Home"
ERROR - 2025-01-17 06:45:20 --> Could not find the language line "Home"
ERROR - 2025-01-17 06:46:58 --> Could not find the language line "Home"
ERROR - 2025-01-17 06:50:08 --> Could not find the language line "Home"
ERROR - 2025-01-17 07:07:33 --> Could not find the language line "Home"
ERROR - 2025-01-17 07:13:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-17 07:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 07:20:10 --> Could not find the language line "Home"
ERROR - 2025-01-17 07:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 07:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 07:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 07:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 07:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 07:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 07:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 07:35:14 --> Could not find the language line "Home"
ERROR - 2025-01-17 07:40:51 --> Could not find the language line "Home"
ERROR - 2025-01-17 07:45:50 --> Could not find the language line "Home"
ERROR - 2025-01-17 07:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 07:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 07:48:34 --> Could not find the language line "Home"
ERROR - 2025-01-17 07:50:08 --> Could not find the language line "Home"
ERROR - 2025-01-17 07:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 07:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:02:34 --> Could not find the language line "Home"
ERROR - 2025-01-17 08:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:20:09 --> Could not find the language line "Home"
ERROR - 2025-01-17 08:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:24:37 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-01-17 08:35:45 --> Could not find the language line "Home"
ERROR - 2025-01-17 08:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 08:50:08 --> Could not find the language line "Home"
ERROR - 2025-01-17 08:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 09:00:08 --> Could not find the language line "Home"
ERROR - 2025-01-17 09:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 09:15:01 --> Could not find the language line "Home"
ERROR - 2025-01-17 09:19:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-17 09:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 09:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 09:20:10 --> Could not find the language line "Home"
ERROR - 2025-01-17 09:33:26 --> Could not find the language line "Clothing"
ERROR - 2025-01-17 09:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 09:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 09:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 09:41:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-17 09:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 09:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 09:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 09:50:09 --> Could not find the language line "Home"
ERROR - 2025-01-17 10:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 10:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 10:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 10:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 10:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 10:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 10:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 10:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 10:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 10:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 10:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 10:16:15 --> Could not find the language line "Home"
ERROR - 2025-01-17 10:20:10 --> Could not find the language line "Home"
ERROR - 2025-01-17 10:22:02 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-17 10:24:56 --> Could not find the language line "Home"
ERROR - 2025-01-17 10:26:57 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2025-01-17 10:40:09 --> Could not find the language line "Home"
ERROR - 2025-01-17 10:50:09 --> Could not find the language line "Home"
ERROR - 2025-01-17 11:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:06:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-17 11:06:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-17 11:06:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-17 11:06:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-17 11:06:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 11:06:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 11:06:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 11:06:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 11:06:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-17 11:06:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-17 11:06:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-17 11:06:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-17 11:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:08:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-17 11:08:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 11:08:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-17 11:08:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-17 11:08:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 11:08:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-17 11:08:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-17 11:08:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-17 11:08:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 11:08:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-17 11:08:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 11:08:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-17 11:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:18:31 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2025-01-17 11:20:21 --> Could not find the language line "Home"
ERROR - 2025-01-17 11:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:34:16 --> Could not find the language line "Home"
ERROR - 2025-01-17 11:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:36:13 --> Could not find the language line "Home"
ERROR - 2025-01-17 11:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:50:10 --> Could not find the language line "Home"
ERROR - 2025-01-17 11:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 11:55:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-17 11:56:24 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-17 11:56:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-17 12:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 12:08:46 --> Could not find the language line "Home"
ERROR - 2025-01-17 12:09:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 12:14:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 12:14:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 12:14:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 12:14:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 12:15:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 12:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 12:15:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 12:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 12:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 12:16:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 12:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 12:19:19 --> Could not find the language line "Home"
ERROR - 2025-01-17 12:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 12:19:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 12:20:11 --> Could not find the language line "Home"
ERROR - 2025-01-17 12:20:59 --> Could not find the language line "Home"
ERROR - 2025-01-17 12:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 12:23:01 --> Could not find the language line "Home"
ERROR - 2025-01-17 12:23:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 12:23:11 --> Could not find the language line "Home"
ERROR - 2025-01-17 12:23:50 --> Could not find the language line "Home"
ERROR - 2025-01-17 12:24:25 --> Could not find the language line "Disclaimer"
ERROR - 2025-01-17 12:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 12:48:41 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-17 12:48:42 --> Could not find the language line "Home"
ERROR - 2025-01-17 12:50:11 --> Could not find the language line "Home"
ERROR - 2025-01-17 13:01:29 --> Could not find the language line "Home"
ERROR - 2025-01-17 13:01:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:01:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:02:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:02:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:03:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:04:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:08:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:09:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:09:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:13:16 --> Could not find the language line "Home"
ERROR - 2025-01-17 13:14:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:20:11 --> Could not find the language line "Home"
ERROR - 2025-01-17 13:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:21:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:21:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:23:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:23:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:24:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:24:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:26:31 --> Could not find the language line "Home"
ERROR - 2025-01-17 13:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:27:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:27:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 13:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 13:50:12 --> Could not find the language line "Home"
ERROR - 2025-01-17 13:53:18 --> Could not find the language line "Home"
ERROR - 2025-01-17 14:11:02 --> Could not find the language line "Home"
ERROR - 2025-01-17 14:12:14 --> Could not find the language line "Home"
ERROR - 2025-01-17 14:15:59 --> Could not find the language line "Home"
ERROR - 2025-01-17 14:20:12 --> Could not find the language line "Home"
ERROR - 2025-01-17 14:25:29 --> Could not find the language line "Home"
ERROR - 2025-01-17 14:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 14:39:23 --> Could not find the language line "Other"
ERROR - 2025-01-17 14:39:30 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-17 14:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 14:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 14:48:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 14:49:24 --> Could not find the language line "Home"
ERROR - 2025-01-17 14:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 14:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 14:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 14:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 14:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 14:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 14:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 14:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 14:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 14:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 14:49:38 --> Could not find the language line "Home"
ERROR - 2025-01-17 14:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 14:50:12 --> Could not find the language line "Home"
ERROR - 2025-01-17 14:51:45 --> Could not find the language line "Home"
ERROR - 2025-01-17 15:06:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-17 15:08:33 --> Could not find the language line "Home"
ERROR - 2025-01-17 15:09:20 --> Could not find the language line "Home"
ERROR - 2025-01-17 15:09:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 15:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 15:10:17 --> Could not find the language line "Home"
ERROR - 2025-01-17 15:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 15:14:05 --> Could not find the language line "Home"
ERROR - 2025-01-17 15:18:39 --> Could not find the language line "Home"
ERROR - 2025-01-17 15:18:40 --> Could not find the language line "Home"
ERROR - 2025-01-17 15:20:12 --> Could not find the language line "Home"
ERROR - 2025-01-17 15:39:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-17 15:48:43 --> Could not find the language line "Home"
ERROR - 2025-01-17 15:50:12 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:20:12 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:29:28 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:29:30 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:29:31 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 16:29:39 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:29:42 --> Could not find the language line "Clothing"
ERROR - 2025-01-17 16:29:45 --> Could not find the language line "Socks"
ERROR - 2025-01-17 16:29:51 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:29:51 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:29:54 --> Could not find the language line "Socks"
ERROR - 2025-01-17 16:29:54 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:29:56 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:30:37 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:31:22 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:32:13 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:37:28 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:38:38 --> Could not find the language line "Home"
ERROR - 2025-01-17 16:50:12 --> Could not find the language line "Home"
ERROR - 2025-01-17 17:12:40 --> Could not find the language line "Home"
ERROR - 2025-01-17 17:20:14 --> Could not find the language line "Home"
ERROR - 2025-01-17 17:30:08 --> Could not find the language line "Other"
ERROR - 2025-01-17 17:41:57 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-17 17:50:14 --> Could not find the language line "Home"
ERROR - 2025-01-17 18:03:06 --> Could not find the language line "Home"
ERROR - 2025-01-17 18:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 18:15:40 --> Could not find the language line "Other"
ERROR - 2025-01-17 18:15:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-17 18:15:43 --> Could not find the language line "Other"
ERROR - 2025-01-17 18:15:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-17 18:15:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-17 18:15:44 --> Could not find the language line "Other"
ERROR - 2025-01-17 18:15:45 --> Could not find the language line "Other"
ERROR - 2025-01-17 18:16:43 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-17 18:17:38 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-17 18:20:13 --> Could not find the language line "Home"
ERROR - 2025-01-17 18:20:31 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-17 18:20:45 --> Could not find the language line "Clothing"
ERROR - 2025-01-17 18:21:35 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-17 18:23:57 --> Could not find the language line "Other"
ERROR - 2025-01-17 18:25:20 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-17 18:26:13 --> Could not find the language line "Clothing"
ERROR - 2025-01-17 18:28:13 --> Could not find the language line "Clothing"
ERROR - 2025-01-17 18:36:44 --> Could not find the language line "Socks"
ERROR - 2025-01-17 18:39:29 --> Could not find the language line "Home"
ERROR - 2025-01-17 18:40:51 --> Could not find the language line "Other"
ERROR - 2025-01-17 18:43:02 --> Could not find the language line "Perfume"
ERROR - 2025-01-17 18:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 18:50:14 --> Could not find the language line "Home"
ERROR - 2025-01-17 18:52:31 --> Could not find the language line "Disclaimer"
ERROR - 2025-01-17 18:53:25 --> Could not find the language line "Clothing"
ERROR - 2025-01-17 18:54:13 --> Could not find the language line "Clothing"
ERROR - 2025-01-17 19:17:26 --> Could not find the language line "Home"
ERROR - 2025-01-17 19:20:15 --> Could not find the language line "Home"
ERROR - 2025-01-17 19:34:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 19:39:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 19:44:54 --> Could not find the language line "Home"
ERROR - 2025-01-17 19:46:34 --> Could not find the language line "Home"
ERROR - 2025-01-17 19:48:37 --> Could not find the language line "Home"
ERROR - 2025-01-17 19:48:38 --> Could not find the language line "Home"
ERROR - 2025-01-17 19:50:14 --> Could not find the language line "Home"
ERROR - 2025-01-17 20:17:36 --> Could not find the language line "Home"
ERROR - 2025-01-17 20:20:14 --> Could not find the language line "Home"
ERROR - 2025-01-17 20:22:05 --> Could not find the language line "Other"
ERROR - 2025-01-17 20:27:55 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-17 20:29:05 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-17 20:30:15 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-17 20:43:08 --> Could not find the language line "Home"
ERROR - 2025-01-17 20:48:55 --> Could not find the language line "Home"
ERROR - 2025-01-17 20:52:50 --> Could not find the language line "Home"
ERROR - 2025-01-17 20:53:43 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-01-17 20:53:43 --> 404 Page Not Found: App-adstxt/index
ERROR - 2025-01-17 20:53:43 --> 404 Page Not Found: Sellersjson/index
ERROR - 2025-01-17 20:53:45 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-17 20:53:45 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-01-17 20:53:57 --> 404 Page Not Found: Dsrdeletejson/index
ERROR - 2025-01-17 20:54:04 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-17 20:54:04 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-01-17 20:54:04 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2025-01-17 20:54:04 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2025-01-17 20:54:04 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2025-01-17 20:54:04 --> 404 Page Not Found: Well-known/change-password
ERROR - 2025-01-17 20:54:04 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2025-01-17 20:54:04 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2025-01-17 20:55:29 --> Could not find the language line "Home"
ERROR - 2025-01-17 20:57:15 --> Could not find the language line "Home"
ERROR - 2025-01-17 20:57:15 --> 404 Page Not Found: Assets/lib
ERROR - 2025-01-17 21:01:58 --> Could not find the language line "Home"
ERROR - 2025-01-17 21:13:09 --> Could not find the language line "Home"
ERROR - 2025-01-17 21:20:38 --> Could not find the language line "Home"
ERROR - 2025-01-17 21:43:09 --> Could not find the language line "Home"
ERROR - 2025-01-17 21:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 21:49:16 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-17 21:49:16 --> Could not find the language line "Home"
ERROR - 2025-01-17 21:49:17 --> Could not find the language line "Home"
ERROR - 2025-01-17 21:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 21:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 21:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-17 21:58:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 22:01:05 --> Could not find the language line "Home"
ERROR - 2025-01-17 22:03:15 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-17 22:03:15 --> Could not find the language line "Home"
ERROR - 2025-01-17 22:03:15 --> Could not find the language line "Home"
ERROR - 2025-01-17 22:05:57 --> Could not find the language line "Home"
ERROR - 2025-01-17 22:06:55 --> Could not find the language line "Home"
ERROR - 2025-01-17 22:13:09 --> Could not find the language line "Home"
ERROR - 2025-01-17 22:16:59 --> Could not find the language line "Home"
ERROR - 2025-01-17 22:20:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-17 22:20:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 22:20:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-17 22:20:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-17 22:20:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 22:20:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-17 22:20:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-17 22:20:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 22:20:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-17 22:20:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-17 22:20:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-17 22:20:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-17 22:34:54 --> Could not find the language line "Clothing"
ERROR - 2025-01-17 22:36:59 --> Could not find the language line "Home"
ERROR - 2025-01-17 22:43:09 --> Could not find the language line "Home"
ERROR - 2025-01-17 22:57:11 --> Could not find the language line "Crocs"
ERROR - 2025-01-17 23:13:11 --> Could not find the language line "Home"
ERROR - 2025-01-17 23:43:12 --> Could not find the language line "Home"
ERROR - 2025-01-17 23:48:40 --> Could not find the language line "Home"
ERROR - 2025-01-17 23:52:15 --> Could not find the language line "Home"
