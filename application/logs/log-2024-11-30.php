<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-30 00:00:20 --> Could not find the language line "Clothing"
ERROR - 2024-11-30 00:14:31 --> Could not find the language line "Home"
ERROR - 2024-11-30 00:44:35 --> Could not find the language line "Home"
ERROR - 2024-11-30 01:13:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-30 01:13:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-30 01:14:33 --> Could not find the language line "Home"
ERROR - 2024-11-30 01:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 01:44:34 --> Could not find the language line "Home"
ERROR - 2024-11-30 01:51:59 --> Could not find the language line "Home"
ERROR - 2024-11-30 02:14:42 --> Could not find the language line "Home"
ERROR - 2024-11-30 02:44:14 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-11-30 02:44:34 --> Could not find the language line "Home"
ERROR - 2024-11-30 02:46:51 --> Could not find the language line "Home"
ERROR - 2024-11-30 02:51:32 --> Could not find the language line "Home"
ERROR - 2024-11-30 03:00:50 --> Could not find the language line "Home"
ERROR - 2024-11-30 03:05:34 --> Could not find the language line "Home"
ERROR - 2024-11-30 03:10:07 --> Could not find the language line "Home"
ERROR - 2024-11-30 03:15:11 --> Could not find the language line "Home"
ERROR - 2024-11-30 03:18:47 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-11-30 03:44:30 --> Could not find the language line "Home"
ERROR - 2024-11-30 04:01:00 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-30 04:14:29 --> Could not find the language line "Home"
ERROR - 2024-11-30 04:33:20 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-30 04:35:00 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-30 04:35:50 --> Could not find the language line "Home"
ERROR - 2024-11-30 04:36:12 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-30 04:36:38 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-30 04:38:27 --> Could not find the language line "Home"
ERROR - 2024-11-30 04:44:34 --> Could not find the language line "Home"
ERROR - 2024-11-30 04:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 05:14:31 --> Could not find the language line "Home"
ERROR - 2024-11-30 05:29:58 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-11-30 05:29:58 --> Could not find the language line "Home"
ERROR - 2024-11-30 05:29:58 --> 404 Page Not Found: Wp/index
ERROR - 2024-11-30 05:29:58 --> 404 Page Not Found: Bc/index
ERROR - 2024-11-30 05:29:58 --> 404 Page Not Found: Bk/index
ERROR - 2024-11-30 05:29:58 --> 404 Page Not Found: Backup/index
ERROR - 2024-11-30 05:29:58 --> 404 Page Not Found: New/index
ERROR - 2024-11-30 05:29:58 --> 404 Page Not Found: Main/index
ERROR - 2024-11-30 05:29:58 --> Could not find the language line "Home"
ERROR - 2024-11-30 05:44:30 --> Could not find the language line "Home"
ERROR - 2024-11-30 05:53:40 --> Could not find the language line "Home"
ERROR - 2024-11-30 06:14:31 --> Could not find the language line "Home"
ERROR - 2024-11-30 06:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 06:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 06:44:31 --> Could not find the language line "Home"
ERROR - 2024-11-30 07:14:31 --> Could not find the language line "Home"
ERROR - 2024-11-30 07:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 07:30:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-30 07:44:32 --> Could not find the language line "Home"
ERROR - 2024-11-30 08:13:55 --> Could not find the language line "Home"
ERROR - 2024-11-30 08:13:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-30 08:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 08:13:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-30 08:14:32 --> Could not find the language line "Home"
ERROR - 2024-11-30 08:15:31 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-30 08:16:19 --> Could not find the language line "Home"
ERROR - 2024-11-30 08:16:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-30 08:16:21 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-11-30 08:16:21 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-30 08:16:43 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-11-30 08:17:07 --> Could not find the language line "Home"
ERROR - 2024-11-30 08:17:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-30 08:17:09 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-30 08:30:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 08:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-30 08:30:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 08:34:33 --> Could not find the language line "Home"
ERROR - 2024-11-30 08:41:13 --> Could not find the language line "Home"
ERROR - 2024-11-30 08:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 08:43:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 08:43:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-30 08:43:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 08:44:32 --> Could not find the language line "Home"
ERROR - 2024-11-30 08:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 08:52:29 --> Could not find the language line "Home"
ERROR - 2024-11-30 08:57:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 08:57:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-30 08:57:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 09:12:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 09:12:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-30 09:12:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 09:14:33 --> Could not find the language line "Home"
ERROR - 2024-11-30 09:20:09 --> Could not find the language line "Home"
ERROR - 2024-11-30 09:23:47 --> Could not find the language line "Home"
ERROR - 2024-11-30 09:23:48 --> Could not find the language line "Home"
ERROR - 2024-11-30 09:28:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 09:28:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-30 09:28:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 09:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 09:44:32 --> Could not find the language line "Home"
ERROR - 2024-11-30 09:44:37 --> Could not find the language line "Home"
ERROR - 2024-11-30 09:44:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 09:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-30 09:44:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 09:50:21 --> Could not find the language line "Home"
ERROR - 2024-11-30 09:56:17 --> Could not find the language line "Home"
ERROR - 2024-11-30 10:01:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-30 10:01:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 10:01:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-30 10:01:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 10:02:01 --> Could not find the language line "Home"
ERROR - 2024-11-30 10:03:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-30 10:09:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-30 10:10:49 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-11-30 10:10:49 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-11-30 10:10:50 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-11-30 10:10:50 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-11-30 10:11:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-30 10:14:20 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-11-30 10:14:20 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-11-30 10:14:20 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-11-30 10:14:20 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-11-30 10:14:33 --> Could not find the language line "Home"
ERROR - 2024-11-30 10:19:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 10:19:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-30 10:19:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 10:22:46 --> Could not find the language line "Clothing"
ERROR - 2024-11-30 10:37:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 10:37:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-30 10:37:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 10:44:00 --> Could not find the language line "Home"
ERROR - 2024-11-30 10:44:33 --> Could not find the language line "Home"
ERROR - 2024-11-30 10:45:07 --> Could not find the language line "Clothing"
ERROR - 2024-11-30 10:45:28 --> Could not find the language line "Clothing"
ERROR - 2024-11-30 10:45:42 --> Could not find the language line "Clothing"
ERROR - 2024-11-30 10:45:58 --> Could not find the language line "Clothing"
ERROR - 2024-11-30 10:46:10 --> Could not find the language line "Clothing"
ERROR - 2024-11-30 10:46:18 --> Could not find the language line "Clothing"
ERROR - 2024-11-30 10:46:20 --> Could not find the language line "Clothing"
ERROR - 2024-11-30 10:47:24 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-30 10:47:24 --> Could not find the language line "Home"
ERROR - 2024-11-30 10:48:22 --> Could not find the language line "Home"
ERROR - 2024-11-30 10:50:27 --> Could not find the language line "Home"
ERROR - 2024-11-30 10:55:22 --> Could not find the language line "Home"
ERROR - 2024-11-30 10:56:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 10:56:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-30 10:56:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 11:01:24 --> Could not find the language line "Home"
ERROR - 2024-11-30 11:14:34 --> Could not find the language line "Home"
ERROR - 2024-11-30 11:16:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 11:16:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-30 11:16:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 11:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 11:36:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 11:36:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-30 11:36:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 11:43:45 --> Could not find the language line "Clothing"
ERROR - 2024-11-30 11:44:34 --> Could not find the language line "Home"
ERROR - 2024-11-30 11:47:58 --> Could not find the language line "Home"
ERROR - 2024-11-30 11:50:26 --> Could not find the language line "Home"
ERROR - 2024-11-30 11:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 11:52:46 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-30 12:14:35 --> Could not find the language line "Home"
ERROR - 2024-11-30 12:18:43 --> Could not find the language line "Home"
ERROR - 2024-11-30 12:19:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 12:19:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-30 12:19:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 12:19:51 --> Could not find the language line "Home"
ERROR - 2024-11-30 12:19:58 --> Could not find the language line "Home"
ERROR - 2024-11-30 12:21:42 --> Could not find the language line "Home"
ERROR - 2024-11-30 12:21:43 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2024-11-30 12:21:43 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-11-30 12:21:43 --> Could not find the language line "Home"
ERROR - 2024-11-30 12:21:44 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2024-11-30 12:21:44 --> 404 Page Not Found: Web/wp-includes
ERROR - 2024-11-30 12:21:44 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2024-11-30 12:21:44 --> 404 Page Not Found: Website/wp-includes
ERROR - 2024-11-30 12:21:44 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2024-11-30 12:21:44 --> 404 Page Not Found: News/wp-includes
ERROR - 2024-11-30 12:21:44 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2024-11-30 12:21:44 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2024-11-30 12:21:45 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2024-11-30 12:21:45 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2024-11-30 12:21:45 --> 404 Page Not Found: Test/wp-includes
ERROR - 2024-11-30 12:21:45 --> 404 Page Not Found: Media/wp-includes
ERROR - 2024-11-30 12:21:45 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2024-11-30 12:21:46 --> 404 Page Not Found: Site/wp-includes
ERROR - 2024-11-30 12:21:46 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2024-11-30 12:21:46 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2024-11-30 12:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 12:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 12:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 12:33:13 --> Could not find the language line "Home"
ERROR - 2024-11-30 12:33:52 --> Could not find the language line "Home"
ERROR - 2024-11-30 12:34:31 --> Could not find the language line "Home"
ERROR - 2024-11-30 12:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 12:42:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 12:42:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-30 12:42:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 12:44:34 --> Could not find the language line "Home"
ERROR - 2024-11-30 13:05:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 13:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-30 13:05:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 13:14:35 --> Could not find the language line "Home"
ERROR - 2024-11-30 13:21:04 --> Could not find the language line "Home"
ERROR - 2024-11-30 13:43:58 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-11-30 13:43:58 --> Could not find the language line "Home"
ERROR - 2024-11-30 13:43:58 --> 404 Page Not Found: Wp/index
ERROR - 2024-11-30 13:43:58 --> 404 Page Not Found: Bc/index
ERROR - 2024-11-30 13:43:59 --> 404 Page Not Found: Bk/index
ERROR - 2024-11-30 13:43:59 --> 404 Page Not Found: Backup/index
ERROR - 2024-11-30 13:43:59 --> 404 Page Not Found: New/index
ERROR - 2024-11-30 13:43:59 --> 404 Page Not Found: Main/index
ERROR - 2024-11-30 13:43:59 --> Could not find the language line "Home"
ERROR - 2024-11-30 13:44:34 --> Could not find the language line "Home"
ERROR - 2024-11-30 13:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 13:54:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 13:54:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-30 13:54:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 13:56:11 --> Could not find the language line "Home"
ERROR - 2024-11-30 14:14:35 --> Could not find the language line "Home"
ERROR - 2024-11-30 14:18:58 --> 404 Page Not Found: Home/products
ERROR - 2024-11-30 14:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 14:43:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 14:43:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-30 14:43:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 14:44:36 --> Could not find the language line "Home"
ERROR - 2024-11-30 15:07:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 15:07:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-30 15:07:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 15:14:37 --> Could not find the language line "Home"
ERROR - 2024-11-30 15:22:28 --> Could not find the language line "Home"
ERROR - 2024-11-30 15:30:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 15:30:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-30 15:30:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 15:30:49 --> Could not find the language line "Home"
ERROR - 2024-11-30 15:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 15:44:36 --> Could not find the language line "Home"
ERROR - 2024-11-30 15:49:27 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-11-30 15:52:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 15:52:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-30 15:52:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 16:14:37 --> Could not find the language line "Home"
ERROR - 2024-11-30 16:23:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 16:23:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-30 16:23:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 16:29:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 16:29:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-30 16:29:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 16:38:49 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-30 16:40:00 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-30 16:40:25 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-30 16:40:50 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-30 16:44:37 --> Could not find the language line "Home"
ERROR - 2024-11-30 16:45:42 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-11-30 16:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 16:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 16:59:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-30 16:59:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-30 16:59:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-30 17:10:15 --> 404 Page Not Found: Static/admin
ERROR - 2024-11-30 17:10:19 --> Could not find the language line "Home"
ERROR - 2024-11-30 17:10:25 --> 404 Page Not Found: Static/admin
ERROR - 2024-11-30 17:10:41 --> 404 Page Not Found: Public/home
ERROR - 2024-11-30 17:14:37 --> Could not find the language line "Home"
ERROR - 2024-11-30 17:17:41 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-30 17:17:41 --> Could not find the language line "Home"
ERROR - 2024-11-30 17:21:11 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-30 17:25:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-30 17:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 17:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 17:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 17:44:37 --> Could not find the language line "Home"
ERROR - 2024-11-30 17:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 17:50:17 --> Could not find the language line "Home"
ERROR - 2024-11-30 17:50:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-30 17:52:27 --> Could not find the language line "Home"
ERROR - 2024-11-30 17:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 17:57:45 --> Could not find the language line "Other"
ERROR - 2024-11-30 17:59:26 --> Could not find the language line "Home"
ERROR - 2024-11-30 18:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 18:05:55 --> Could not find the language line "Home"
ERROR - 2024-11-30 18:12:46 --> Could not find the language line "Home"
ERROR - 2024-11-30 18:14:17 --> Could not find the language line "Home"
ERROR - 2024-11-30 18:14:37 --> Could not find the language line "Home"
ERROR - 2024-11-30 18:16:26 --> Could not find the language line "Home"
ERROR - 2024-11-30 18:44:37 --> Could not find the language line "Home"
ERROR - 2024-11-30 18:48:23 --> Could not find the language line "Home"
ERROR - 2024-11-30 18:52:23 --> Could not find the language line "Home"
ERROR - 2024-11-30 19:12:24 --> Could not find the language line "Home"
ERROR - 2024-11-30 19:14:38 --> Could not find the language line "Home"
ERROR - 2024-11-30 19:16:23 --> Could not find the language line "Home"
ERROR - 2024-11-30 19:44:38 --> Could not find the language line "Home"
ERROR - 2024-11-30 19:46:28 --> Could not find the language line "Home"
ERROR - 2024-11-30 19:53:35 --> Could not find the language line "Clothing"
ERROR - 2024-11-30 19:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 19:59:44 --> Could not find the language line "Home"
ERROR - 2024-11-30 20:00:04 --> Could not find the language line "Home"
ERROR - 2024-11-30 20:00:04 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-30 20:00:04 --> Could not find the language line "Home"
ERROR - 2024-11-30 20:00:04 --> Could not find the language line "Home"
ERROR - 2024-11-30 20:00:12 --> Could not find the language line "Home"
ERROR - 2024-11-30 20:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 20:01:12 --> Could not find the language line "Home"
ERROR - 2024-11-30 20:01:21 --> Could not find the language line "Socks"
ERROR - 2024-11-30 20:01:27 --> Could not find the language line "Socks"
ERROR - 2024-11-30 20:01:27 --> Could not find the language line "Socks"
ERROR - 2024-11-30 20:02:11 --> Could not find the language line "Socks"
ERROR - 2024-11-30 20:02:16 --> Could not find the language line "Socks"
ERROR - 2024-11-30 20:02:16 --> Could not find the language line "Socks"
ERROR - 2024-11-30 20:02:16 --> Could not find the language line "Socks"
ERROR - 2024-11-30 20:02:38 --> Could not find the language line "Socks"
ERROR - 2024-11-30 20:02:57 --> Could not find the language line "Home"
ERROR - 2024-11-30 20:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 20:14:39 --> Could not find the language line "Home"
ERROR - 2024-11-30 20:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 20:44:41 --> Could not find the language line "Home"
ERROR - 2024-11-30 21:03:09 --> 404 Page Not Found: Wp-content/themes
ERROR - 2024-11-30 21:03:10 --> 404 Page Not Found: Wp-content/themes
ERROR - 2024-11-30 21:03:11 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2024-11-30 21:03:13 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2024-11-30 21:03:14 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2024-11-30 21:14:39 --> Could not find the language line "Home"
ERROR - 2024-11-30 21:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 21:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 21:25:38 --> Could not find the language line "Home"
ERROR - 2024-11-30 21:44:39 --> Could not find the language line "Home"
ERROR - 2024-11-30 21:46:44 --> Could not find the language line "Clothing"
ERROR - 2024-11-30 21:46:48 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-30 21:47:00 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-30 21:47:00 --> Could not find the language line "Home"
ERROR - 2024-11-30 21:47:00 --> Could not find the language line "Home"
ERROR - 2024-11-30 22:14:41 --> Could not find the language line "Home"
ERROR - 2024-11-30 22:44:40 --> Could not find the language line "Home"
ERROR - 2024-11-30 23:03:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-30 23:12:21 --> Could not find the language line "Clothing"
ERROR - 2024-11-30 23:14:43 --> Could not find the language line "Home"
ERROR - 2024-11-30 23:15:09 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-30 23:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-30 23:38:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-30 23:44:44 --> Could not find the language line "Home"
ERROR - 2024-11-30 23:45:38 --> Could not find the language line "Home"
