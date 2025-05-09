<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-04-25 00:01:32 --> Could not find the language line "Home"
ERROR - 2025-04-25 00:04:06 --> Could not find the language line "Home"
ERROR - 2025-04-25 00:11:38 --> 404 Page Not Found: Media/system
ERROR - 2025-04-25 00:11:42 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-04-25 00:15:59 --> Could not find the language line "Home"
ERROR - 2025-04-25 00:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 00:16:43 --> Could not find the language line "Home"
ERROR - 2025-04-25 00:17:43 --> Could not find the language line "Home"
ERROR - 2025-04-25 00:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 00:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 00:31:13 --> Could not find the language line "Home"
ERROR - 2025-04-25 00:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 00:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 00:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 00:36:16 --> Could not find the language line "Home"
ERROR - 2025-04-25 00:47:43 --> Could not find the language line "Home"
ERROR - 2025-04-25 00:51:54 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-25 00:53:45 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-25 00:59:46 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 01:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 01:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 01:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 01:14:56 --> Could not find the language line "Home"
ERROR - 2025-04-25 01:17:51 --> Could not find the language line "Home"
ERROR - 2025-04-25 01:19:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 01:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 01:26:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 01:47:51 --> Could not find the language line "Home"
ERROR - 2025-04-25 01:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 01:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 02:08:11 --> Could not find the language line "Home"
ERROR - 2025-04-25 02:08:18 --> Could not find the language line "Home"
ERROR - 2025-04-25 02:08:29 --> Could not find the language line "Home"
ERROR - 2025-04-25 02:08:30 --> Could not find the language line "Home"
ERROR - 2025-04-25 02:08:48 --> Could not find the language line "Home"
ERROR - 2025-04-25 02:10:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 02:17:48 --> Could not find the language line "Home"
ERROR - 2025-04-25 02:18:26 --> Could not find the language line "Home"
ERROR - 2025-04-25 02:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 02:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 02:38:46 --> Could not find the language line "Home"
ERROR - 2025-04-25 02:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 02:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 02:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 02:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 02:47:53 --> Could not find the language line "Home"
ERROR - 2025-04-25 02:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 03:03:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 03:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 03:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 03:06:19 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-25 03:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 03:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 03:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 03:15:32 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 03:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 03:17:49 --> Could not find the language line "Home"
ERROR - 2025-04-25 03:19:27 --> Could not find the language line "Home"
ERROR - 2025-04-25 03:19:31 --> Could not find the language line "Home"
ERROR - 2025-04-25 03:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 03:21:19 --> Could not find the language line "Home"
ERROR - 2025-04-25 03:21:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 03:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 03:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 03:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 03:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 03:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 03:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 03:47:48 --> Could not find the language line "Home"
ERROR - 2025-04-25 03:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 04:08:44 --> Could not find the language line "Home"
ERROR - 2025-04-25 04:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 04:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 04:12:57 --> Could not find the language line "Home"
ERROR - 2025-04-25 04:14:51 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 04:17:39 --> Could not find the language line "Home"
ERROR - 2025-04-25 04:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 04:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 04:26:15 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-25 04:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 04:29:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-25 04:30:29 --> Could not find the language line "Home"
ERROR - 2025-04-25 04:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 04:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 04:36:28 --> Could not find the language line "Home"
ERROR - 2025-04-25 04:37:39 --> Could not find the language line "Home"
ERROR - 2025-04-25 04:37:41 --> Could not find the language line "Home"
ERROR - 2025-04-25 04:37:51 --> Could not find the language line "Home"
ERROR - 2025-04-25 04:38:23 --> Could not find the language line "Home"
ERROR - 2025-04-25 04:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 04:38:48 --> Could not find the language line "Home"
ERROR - 2025-04-25 04:39:17 --> Could not find the language line "Home"
ERROR - 2025-04-25 04:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 04:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 04:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 04:47:43 --> Could not find the language line "Home"
ERROR - 2025-04-25 04:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 04:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 04:53:51 --> Could not find the language line "Home"
ERROR - 2025-04-25 04:54:53 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 04:54:57 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 04:59:41 --> Could not find the language line "Home"
ERROR - 2025-04-25 04:59:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 05:05:29 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 05:07:43 --> Could not find the language line "Home"
ERROR - 2025-04-25 05:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 05:13:31 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 05:17:41 --> Could not find the language line "Home"
ERROR - 2025-04-25 05:24:24 --> Could not find the language line "Home"
ERROR - 2025-04-25 05:24:55 --> Could not find the language line "accounts"
ERROR - 2025-04-25 05:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 05:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 05:34:02 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-25 05:35:34 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-25 05:37:27 --> Could not find the language line "Home"
ERROR - 2025-04-25 05:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 05:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 05:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 05:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 05:45:49 --> Could not find the language line "Home"
ERROR - 2025-04-25 05:46:34 --> Could not find the language line "Home"
ERROR - 2025-04-25 05:47:26 --> Could not find the language line "Home"
ERROR - 2025-04-25 05:47:41 --> Could not find the language line "Home"
ERROR - 2025-04-25 05:50:01 --> Could not find the language line "Home"
ERROR - 2025-04-25 05:50:01 --> Could not find the language line "Home"
ERROR - 2025-04-25 05:50:26 --> Could not find the language line "Home"
ERROR - 2025-04-25 05:50:27 --> Could not find the language line "Home"
ERROR - 2025-04-25 05:54:20 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 05:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 05:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 06:02:31 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 06:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 06:04:53 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 06:04:59 --> Could not find the language line "Home"
ERROR - 2025-04-25 06:05:44 --> Could not find the language line "Home"
ERROR - 2025-04-25 06:05:48 --> Could not find the language line "Home"
ERROR - 2025-04-25 06:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 06:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 06:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 06:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 06:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 06:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 06:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 06:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 06:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 06:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 06:13:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 06:13:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 06:13:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 06:14:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 06:15:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 06:15:38 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 06:17:40 --> Could not find the language line "Home"
ERROR - 2025-04-25 06:22:06 --> Could not find the language line "Home"
ERROR - 2025-04-25 06:22:07 --> Could not find the language line "Bracelets"
ERROR - 2025-04-25 06:24:47 --> Could not find the language line "Home"
ERROR - 2025-04-25 06:25:52 --> Could not find the language line "accounts"
ERROR - 2025-04-25 06:27:42 --> Could not find the language line "Home"
ERROR - 2025-04-25 06:38:00 --> Could not find the language line "Home"
ERROR - 2025-04-25 06:39:28 --> Could not find the language line "Home"
ERROR - 2025-04-25 06:47:40 --> Could not find the language line "Home"
ERROR - 2025-04-25 06:50:02 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-25 07:04:04 --> Could not find the language line "Home"
ERROR - 2025-04-25 07:04:08 --> 404 Page Not Found: Aviator%20Basic%20Shades/index
ERROR - 2025-04-25 07:16:41 --> Could not find the language line "Home"
ERROR - 2025-04-25 07:17:40 --> Could not find the language line "Home"
ERROR - 2025-04-25 07:19:32 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-25 07:19:33 --> Could not find the language line "Home"
ERROR - 2025-04-25 07:23:04 --> Could not find the language line "Home"
ERROR - 2025-04-25 07:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 07:47:41 --> Could not find the language line "Home"
ERROR - 2025-04-25 07:48:09 --> Could not find the language line "Home"
ERROR - 2025-04-25 07:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 07:48:10 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-25 07:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 07:48:10 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-25 07:48:10 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-25 08:00:20 --> Could not find the language line "Home"
ERROR - 2025-04-25 08:01:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 08:15:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-25 08:15:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-25 08:15:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-25 08:15:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 08:15:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 08:15:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-25 08:15:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-25 08:15:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 08:15:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-25 08:15:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-25 08:15:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 08:15:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-25 08:15:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-25 08:15:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 08:15:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-25 08:15:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-25 08:15:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 08:15:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-25 08:15:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-25 08:15:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 08:15:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-25 08:15:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-25 08:15:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 08:15:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-25 08:15:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-25 08:15:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-25 08:15:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 08:15:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 08:15:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-25 08:15:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-25 08:15:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-25 08:15:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 08:15:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-25 08:15:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-25 08:15:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 08:15:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-25 08:17:41 --> Could not find the language line "Home"
ERROR - 2025-04-25 08:17:42 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 08:21:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 08:22:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 08:23:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 08:24:26 --> Could not find the language line "Home"
ERROR - 2025-04-25 08:31:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 08:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 08:38:53 --> Could not find the language line "Home"
ERROR - 2025-04-25 08:39:00 --> Could not find the language line "Home"
ERROR - 2025-04-25 08:47:42 --> Could not find the language line "Home"
ERROR - 2025-04-25 08:49:54 --> Could not find the language line "Home"
ERROR - 2025-04-25 08:51:10 --> Could not find the language line "Home"
ERROR - 2025-04-25 08:54:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 08:58:53 --> Could not find the language line "Home"
ERROR - 2025-04-25 09:02:00 --> Could not find the language line "Home"
ERROR - 2025-04-25 09:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 09:04:26 --> Could not find the language line "Home"
ERROR - 2025-04-25 09:04:26 --> Could not find the language line "Home"
ERROR - 2025-04-25 09:11:23 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 09:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 09:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 09:17:44 --> Could not find the language line "Home"
ERROR - 2025-04-25 09:20:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 09:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 09:27:53 --> Could not find the language line "Home"
ERROR - 2025-04-25 09:45:10 --> Could not find the language line "Home"
ERROR - 2025-04-25 09:46:22 --> Could not find the language line "Home"
ERROR - 2025-04-25 09:47:09 --> Could not find the language line "Home"
ERROR - 2025-04-25 09:47:41 --> Could not find the language line "Home"
ERROR - 2025-04-25 09:47:50 --> Could not find the language line "Home"
ERROR - 2025-04-25 09:48:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 10:01:22 --> Could not find the language line "Home"
ERROR - 2025-04-25 10:07:47 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-25 10:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 10:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 10:15:31 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-25 10:17:42 --> Could not find the language line "Home"
ERROR - 2025-04-25 10:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 10:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 10:29:39 --> Could not find the language line "Home"
ERROR - 2025-04-25 10:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 10:35:10 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 10:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 10:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 10:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 10:37:00 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 10:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 10:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 10:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 10:47:42 --> Could not find the language line "Home"
ERROR - 2025-04-25 10:51:45 --> Could not find the language line "Home"
ERROR - 2025-04-25 10:53:54 --> Could not find the language line "Home"
ERROR - 2025-04-25 10:54:58 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 10:59:00 --> 404 Page Not Found: Cart/accounts
ERROR - 2025-04-25 11:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 11:02:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 11:09:19 --> Could not find the language line "Other"
ERROR - 2025-04-25 11:09:44 --> 404 Page Not Found: Users/accounts
ERROR - 2025-04-25 11:12:06 --> Could not find the language line "Crocs"
ERROR - 2025-04-25 11:13:29 --> Could not find the language line "Bracelets"
ERROR - 2025-04-25 11:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 11:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 11:17:43 --> Could not find the language line "Home"
ERROR - 2025-04-25 11:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 11:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 11:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 11:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 11:46:19 --> 404 Page Not Found: Clubmaster%20Shades/index
ERROR - 2025-04-25 11:47:38 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-25 11:47:43 --> Could not find the language line "Home"
ERROR - 2025-04-25 11:57:47 --> Could not find the language line "Home"
ERROR - 2025-04-25 11:57:50 --> Could not find the language line "Home"
ERROR - 2025-04-25 11:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 11:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:01:26 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:07:37 --> 404 Page Not Found: Storage/settings
ERROR - 2025-04-25 12:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:14:29 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:15:30 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:17:47 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:21:43 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:24:57 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:28:57 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:30:04 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:35:48 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:39:13 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 12:39:21 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 12:39:25 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 12:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:42:51 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 12:42:57 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 12:43:01 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 12:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:45:19 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:47:45 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:49:17 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:51:54 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:54:46 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:56:35 --> Could not find the language line "Home"
ERROR - 2025-04-25 12:56:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-25 12:56:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-25 12:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 12:57:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-25 12:57:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-25 12:58:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-25 12:58:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-25 13:02:04 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-25 13:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 13:03:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 13:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 13:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 13:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 13:17:44 --> Could not find the language line "Home"
ERROR - 2025-04-25 13:24:04 --> Could not find the language line "Home"
ERROR - 2025-04-25 13:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 13:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 13:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 13:39:09 --> Could not find the language line "Home"
ERROR - 2025-04-25 13:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 13:45:53 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-25 13:45:59 --> Could not find the language line "Home"
ERROR - 2025-04-25 13:46:39 --> Could not find the language line "Home"
ERROR - 2025-04-25 13:47:44 --> Could not find the language line "Home"
ERROR - 2025-04-25 13:51:21 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-25 13:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 13:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 13:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:11:11 --> Could not find the language line "Home"
ERROR - 2025-04-25 14:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:15:56 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-25 14:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:17:46 --> Could not find the language line "Home"
ERROR - 2025-04-25 14:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:28:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 14:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:31:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 14:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:34:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 14:36:53 --> Could not find the language line "Home"
ERROR - 2025-04-25 14:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:42:50 --> Could not find the language line "Home"
ERROR - 2025-04-25 14:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 14:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:47:46 --> Could not find the language line "Home"
ERROR - 2025-04-25 14:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 14:58:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 14:58:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 14:58:54 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-25 15:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:09:30 --> Could not find the language line "Home"
ERROR - 2025-04-25 15:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:17:46 --> Could not find the language line "Home"
ERROR - 2025-04-25 15:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:24:00 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2025-04-25 15:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:38:47 --> Could not find the language line "Home"
ERROR - 2025-04-25 15:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:43:40 --> Could not find the language line "Home"
ERROR - 2025-04-25 15:47:21 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2025-04-25 15:47:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-25 15:47:47 --> Could not find the language line "Home"
ERROR - 2025-04-25 15:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:56:21 --> Could not find the language line "Home"
ERROR - 2025-04-25 15:56:28 --> Could not find the language line "Home"
ERROR - 2025-04-25 15:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 15:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 16:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 16:02:07 --> Could not find the language line "Home"
ERROR - 2025-04-25 16:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 16:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 16:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 16:17:46 --> Could not find the language line "Home"
ERROR - 2025-04-25 16:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 16:21:43 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2025-04-25 16:22:24 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-25 16:24:09 --> Could not find the language line "Home"
ERROR - 2025-04-25 16:28:33 --> Could not find the language line "Home"
ERROR - 2025-04-25 16:31:59 --> Could not find the language line "Home"
ERROR - 2025-04-25 16:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 16:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 16:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 16:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 16:42:48 --> Could not find the language line "Home"
ERROR - 2025-04-25 16:43:29 --> Could not find the language line "Home"
ERROR - 2025-04-25 16:47:46 --> Could not find the language line "Home"
ERROR - 2025-04-25 16:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 16:49:27 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2025-04-25 16:54:33 --> Could not find the language line "Home"
ERROR - 2025-04-25 17:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 17:02:27 --> 404 Page Not Found: Users/products
ERROR - 2025-04-25 17:05:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 17:05:41 --> Could not find the language line "Home"
ERROR - 2025-04-25 17:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 17:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 17:12:24 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-25 17:13:11 --> Could not find the language line "Home"
ERROR - 2025-04-25 17:13:44 --> Could not find the language line "Home"
ERROR - 2025-04-25 17:17:48 --> Could not find the language line "Home"
ERROR - 2025-04-25 17:20:27 --> Could not find the language line "Home"
ERROR - 2025-04-25 17:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 17:24:09 --> Could not find the language line "Home"
ERROR - 2025-04-25 17:24:51 --> Could not find the language line "Home"
ERROR - 2025-04-25 17:24:52 --> 404 Page Not Found: 404error_testhtml/index
ERROR - 2025-04-25 17:24:53 --> 404 Page Not Found: Contact_us/index
ERROR - 2025-04-25 17:26:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 17:31:26 --> Could not find the language line "Home"
ERROR - 2025-04-25 17:31:26 --> Could not find the language line "Home"
ERROR - 2025-04-25 17:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 17:33:13 --> Could not find the language line "Home"
ERROR - 2025-04-25 17:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 17:43:59 --> Could not find the language line "Home"
ERROR - 2025-04-25 17:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 17:47:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 17:47:46 --> Could not find the language line "Home"
ERROR - 2025-04-25 17:48:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m130%' OR a.description LIKE '%m130%' OR a.color LIKE '%m130%' OR a.barcode LIKE '%m130%' OR a.category LIKE '%m130%' OR a.sub_category LIKE '%m130%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 17:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 17:51:17 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 17:54:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C901%' OR a.description LIKE '%C901%' OR a.color LIKE '%C901%' OR a.barcode LIKE '%C901%' OR a.category LIKE '%C901%' OR a.sub_category LIKE '%C901%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-25 18:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 18:05:17 --> Could not find the language line "Home"
ERROR - 2025-04-25 18:05:17 --> 404 Page Not Found: Assets/mail
ERROR - 2025-04-25 18:05:17 --> 404 Page Not Found: Assets/mail
ERROR - 2025-04-25 18:05:18 --> 404 Page Not Found: Assets/mail
ERROR - 2025-04-25 18:05:23 --> 404 Page Not Found: Assets/mail
ERROR - 2025-04-25 18:05:24 --> 404 Page Not Found: Assets/mail
ERROR - 2025-04-25 18:06:23 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 18:07:12 --> Could not find the language line "Home"
ERROR - 2025-04-25 18:13:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 18:17:48 --> Could not find the language line "Home"
ERROR - 2025-04-25 18:20:35 --> Could not find the language line "Home"
ERROR - 2025-04-25 18:26:30 --> Could not find the language line "Home"
ERROR - 2025-04-25 18:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 18:37:43 --> Could not find the language line "Home"
ERROR - 2025-04-25 18:47:47 --> Could not find the language line "Home"
ERROR - 2025-04-25 18:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 18:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 18:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 18:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 18:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 19:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 19:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 19:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 19:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 19:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 19:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 19:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 19:07:45 --> Could not find the language line "Home"
ERROR - 2025-04-25 19:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 19:16:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-25 19:17:48 --> Could not find the language line "Home"
ERROR - 2025-04-25 19:23:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-25 19:24:21 --> Could not find the language line "Home"
ERROR - 2025-04-25 19:24:35 --> Could not find the language line "Perfume"
ERROR - 2025-04-25 19:26:00 --> Could not find the language line "Other"
ERROR - 2025-04-25 19:26:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-25 19:27:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-25 19:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 19:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 19:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 19:39:52 --> Could not find the language line "Home"
ERROR - 2025-04-25 19:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 19:47:47 --> Could not find the language line "Home"
ERROR - 2025-04-25 19:47:48 --> Could not find the language line "Home"
ERROR - 2025-04-25 19:52:37 --> Could not find the language line "Home"
ERROR - 2025-04-25 19:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 19:56:19 --> Could not find the language line "Home"
ERROR - 2025-04-25 20:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:17:48 --> Could not find the language line "Home"
ERROR - 2025-04-25 20:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:24:27 --> Could not find the language line "Home"
ERROR - 2025-04-25 20:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:24:56 --> Could not find the language line "Home"
ERROR - 2025-04-25 20:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:47:49 --> Could not find the language line "Home"
ERROR - 2025-04-25 20:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 20:55:00 --> Could not find the language line "Home"
ERROR - 2025-04-25 21:02:02 --> Could not find the language line "Disclaimer"
ERROR - 2025-04-25 21:05:48 --> Could not find the language line "Home"
ERROR - 2025-04-25 21:06:01 --> Could not find the language line "Home"
ERROR - 2025-04-25 21:06:26 --> Could not find the language line "Home"
ERROR - 2025-04-25 21:06:30 --> Could not find the language line "Socks"
ERROR - 2025-04-25 21:07:01 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 21:07:06 --> Could not find the language line "Socks"
ERROR - 2025-04-25 21:07:29 --> Could not find the language line "Socks"
ERROR - 2025-04-25 21:07:39 --> Could not find the language line "Socks"
ERROR - 2025-04-25 21:07:39 --> Could not find the language line "Socks"
ERROR - 2025-04-25 21:07:42 --> Could not find the language line "Home"
ERROR - 2025-04-25 21:07:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-25 21:07:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-25 21:08:06 --> Could not find the language line "Home"
ERROR - 2025-04-25 21:08:13 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-25 21:08:20 --> Could not find the language line "Home"
ERROR - 2025-04-25 21:08:23 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-25 21:08:41 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-25 21:08:53 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-25 21:08:56 --> Could not find the language line "Home"
ERROR - 2025-04-25 21:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 21:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 21:14:49 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 21:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 21:16:22 --> Could not find the language line "Socks"
ERROR - 2025-04-25 21:16:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-25 21:16:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-25 21:17:23 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-25 21:17:51 --> Could not find the language line "Home"
ERROR - 2025-04-25 21:17:54 --> Could not find the language line "Perfume"
ERROR - 2025-04-25 21:18:39 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 21:18:54 --> Could not find the language line "Other"
ERROR - 2025-04-25 21:19:10 --> Could not find the language line "Other"
ERROR - 2025-04-25 21:19:25 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 21:19:40 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 21:20:41 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 21:23:57 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 21:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 21:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 21:29:14 --> Could not find the language line "Home"
ERROR - 2025-04-25 21:29:33 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-25 21:29:47 --> Could not find the language line "Home"
ERROR - 2025-04-25 21:30:03 --> Could not find the language line "Home"
ERROR - 2025-04-25 21:31:28 --> Could not find the language line "Other"
ERROR - 2025-04-25 21:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 21:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 21:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 21:33:59 --> Could not find the language line "Socks"
ERROR - 2025-04-25 21:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 21:39:01 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-25 21:41:31 --> Could not find the language line "Clothing"
ERROR - 2025-04-25 21:44:01 --> Could not find the language line "Other"
ERROR - 2025-04-25 21:46:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-25 21:47:51 --> Could not find the language line "Home"
ERROR - 2025-04-25 21:49:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-25 21:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 21:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 21:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 22:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 22:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 22:15:44 --> Could not find the language line "Home"
ERROR - 2025-04-25 22:17:50 --> Could not find the language line "Home"
ERROR - 2025-04-25 22:20:51 --> Could not find the language line "Home"
ERROR - 2025-04-25 22:21:21 --> Could not find the language line "Home"
ERROR - 2025-04-25 22:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 22:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 22:22:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-25 22:24:14 --> Could not find the language line "Home"
ERROR - 2025-04-25 22:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 22:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 22:26:46 --> Could not find the language line "Home"
ERROR - 2025-04-25 22:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 22:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 22:28:56 --> Could not find the language line "Home"
ERROR - 2025-04-25 22:30:28 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-25 22:32:07 --> Could not find the language line "Home"
ERROR - 2025-04-25 22:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 22:47:56 --> Could not find the language line "Home"
ERROR - 2025-04-25 22:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 22:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 22:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 22:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 22:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 23:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 23:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 23:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 23:17:59 --> Could not find the language line "Home"
ERROR - 2025-04-25 23:29:18 --> Could not find the language line "0"
ERROR - 2025-04-25 23:29:21 --> Could not find the language line "Home"
ERROR - 2025-04-25 23:35:00 --> Could not find the language line "Other"
ERROR - 2025-04-25 23:47:54 --> Could not find the language line "Home"
ERROR - 2025-04-25 23:47:55 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-25 23:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-25 23:51:47 --> 404 Page Not Found: Assets/css
