<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-01 00:04:50 --> Could not find the language line "Home"
ERROR - 2025-03-01 00:15:00 --> Could not find the language line "Home"
ERROR - 2025-03-01 00:25:53 --> Could not find the language line "Home"
ERROR - 2025-03-01 00:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 00:26:03 --> Could not find the language line "Home"
ERROR - 2025-03-01 00:26:04 --> Could not find the language line "Home"
ERROR - 2025-03-01 00:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 00:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 00:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 00:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 00:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 00:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 00:29:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-01 00:29:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-01 00:29:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-01 00:29:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-01 00:29:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-01 00:29:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-01 00:29:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-01 00:29:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-01 00:29:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-01 00:29:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-01 00:29:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-01 00:29:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-01 00:30:03 --> Could not find the language line "Home"
ERROR - 2025-03-01 00:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 00:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 00:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 00:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 00:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 00:45:01 --> Could not find the language line "Home"
ERROR - 2025-03-01 01:14:00 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-01 01:15:02 --> Could not find the language line "Home"
ERROR - 2025-03-01 01:22:57 --> Could not find the language line "Home"
ERROR - 2025-03-01 01:34:36 --> Could not find the language line "Home"
ERROR - 2025-03-01 01:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 01:45:04 --> Could not find the language line "Home"
ERROR - 2025-03-01 01:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 01:49:46 --> Could not find the language line "Home"
ERROR - 2025-03-01 01:50:35 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-01 01:51:24 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-01 01:51:54 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-01 01:52:18 --> Could not find the language line "Perfume"
ERROR - 2025-03-01 01:52:32 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-01 01:53:11 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-01 01:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 01:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 01:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 02:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 02:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 02:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 02:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 02:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 02:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 02:11:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 02:11:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 02:11:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 02:12:08 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 02:12:29 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 02:12:39 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 02:12:54 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 02:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 02:13:32 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 02:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 02:14:03 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 02:15:03 --> Could not find the language line "Home"
ERROR - 2025-03-01 02:19:56 --> Could not find the language line "Home"
ERROR - 2025-03-01 02:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 02:22:59 --> Could not find the language line "Other"
ERROR - 2025-03-01 02:45:04 --> Could not find the language line "Home"
ERROR - 2025-03-01 02:52:03 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 02:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 02:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 02:57:51 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-01 03:06:19 --> Could not find the language line "Home"
ERROR - 2025-03-01 03:09:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-01 03:10:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-01 03:12:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-01 03:15:10 --> Could not find the language line "Home"
ERROR - 2025-03-01 03:27:46 --> Could not find the language line "Home"
ERROR - 2025-03-01 03:27:55 --> Could not find the language line "Home"
ERROR - 2025-03-01 03:30:10 --> Could not find the language line "Home"
ERROR - 2025-03-01 03:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 03:45:08 --> Could not find the language line "Home"
ERROR - 2025-03-01 03:49:52 --> Could not find the language line "Home"
ERROR - 2025-03-01 04:04:20 --> Could not find the language line "Home"
ERROR - 2025-03-01 04:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 04:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 04:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 04:15:07 --> Could not find the language line "Home"
ERROR - 2025-03-01 04:16:27 --> Could not find the language line "Home"
ERROR - 2025-03-01 04:16:43 --> Could not find the language line "Home"
ERROR - 2025-03-01 04:45:03 --> Could not find the language line "Home"
ERROR - 2025-03-01 04:48:22 --> Could not find the language line "Home"
ERROR - 2025-03-01 04:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 04:54:17 --> Could not find the language line "Home"
ERROR - 2025-03-01 05:04:31 --> Could not find the language line "Home"
ERROR - 2025-03-01 05:15:04 --> Could not find the language line "Home"
ERROR - 2025-03-01 05:16:30 --> Could not find the language line "Home"
ERROR - 2025-03-01 05:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 05:40:34 --> Could not find the language line "Home"
ERROR - 2025-03-01 05:40:34 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-01 05:40:34 --> Could not find the language line "Home"
ERROR - 2025-03-01 05:45:08 --> Could not find the language line "Home"
ERROR - 2025-03-01 05:56:46 --> Could not find the language line "Home"
ERROR - 2025-03-01 06:03:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-01 06:05:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-01 06:10:40 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-01 06:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 06:15:08 --> Could not find the language line "Home"
ERROR - 2025-03-01 06:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 06:39:18 --> Could not find the language line "Home"
ERROR - 2025-03-01 06:45:05 --> Could not find the language line "Home"
ERROR - 2025-03-01 06:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 06:49:15 --> Could not find the language line "Home"
ERROR - 2025-03-01 06:57:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-01 06:59:00 --> Could not find the language line "Home"
ERROR - 2025-03-01 07:08:09 --> Could not find the language line "Home"
ERROR - 2025-03-01 07:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 07:15:04 --> Could not find the language line "Home"
ERROR - 2025-03-01 07:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 07:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 07:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 07:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 07:27:45 --> Could not find the language line "Home"
ERROR - 2025-03-01 07:27:50 --> Could not find the language line "Other"
ERROR - 2025-03-01 07:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 07:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 07:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 07:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 07:45:05 --> Could not find the language line "Home"
ERROR - 2025-03-01 07:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 07:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 08:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 08:09:56 --> Could not find the language line "Home"
ERROR - 2025-03-01 08:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 08:14:12 --> Could not find the language line "Home"
ERROR - 2025-03-01 08:15:06 --> Could not find the language line "Home"
ERROR - 2025-03-01 08:16:49 --> Could not find the language line "Home"
ERROR - 2025-03-01 08:33:53 --> Could not find the language line "Home"
ERROR - 2025-03-01 08:39:19 --> Could not find the language line "Home"
ERROR - 2025-03-01 08:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 08:45:05 --> Could not find the language line "Home"
ERROR - 2025-03-01 08:48:06 --> Could not find the language line "Other"
ERROR - 2025-03-01 08:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 08:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 08:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 08:53:15 --> Could not find the language line "Other"
ERROR - 2025-03-01 08:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 09:03:25 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 09:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 09:15:06 --> Could not find the language line "Home"
ERROR - 2025-03-01 09:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 09:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 09:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 09:30:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-01 09:30:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-01 09:30:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-01 09:30:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-01 09:30:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-01 09:30:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-01 09:30:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-01 09:30:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-01 09:30:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-01 09:30:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-01 09:30:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-01 09:30:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-01 09:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 09:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 09:34:13 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-03-01 09:45:06 --> Could not find the language line "Home"
ERROR - 2025-03-01 10:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 10:06:51 --> Could not find the language line "Home"
ERROR - 2025-03-01 10:15:07 --> Could not find the language line "Home"
ERROR - 2025-03-01 10:45:07 --> Could not find the language line "Home"
ERROR - 2025-03-01 10:50:28 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:08:47 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-01 11:08:47 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:08:47 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:14:13 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:15:07 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:15:32 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:16:46 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:17:47 --> Could not find the language line "Other"
ERROR - 2025-03-01 11:18:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-01 11:19:12 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:21:46 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:33:50 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:43:57 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:44:04 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:44:05 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:44:05 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:44:18 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:44:52 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:44:54 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:44:58 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-01 11:45:03 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-01 11:45:04 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-01 11:45:04 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-01 11:45:08 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:45:23 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-01 11:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:45:42 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-01 11:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:47:00 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-01 11:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:47:05 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-01 11:47:07 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:59:09 --> Could not find the language line "Home"
ERROR - 2025-03-01 11:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 11:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 12:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 12:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 12:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 12:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 12:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 12:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 12:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 12:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 12:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 12:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 12:13:45 --> Could not find the language line "Home"
ERROR - 2025-03-01 12:15:07 --> Could not find the language line "Home"
ERROR - 2025-03-01 12:15:46 --> Could not find the language line "Home"
ERROR - 2025-03-01 12:17:45 --> Could not find the language line "Home"
ERROR - 2025-03-01 12:21:49 --> Could not find the language line "Home"
ERROR - 2025-03-01 12:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 12:45:08 --> Could not find the language line "Home"
ERROR - 2025-03-01 12:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 12:46:55 --> Could not find the language line "Home"
ERROR - 2025-03-01 12:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 12:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 13:06:04 --> Could not find the language line "Home"
ERROR - 2025-03-01 13:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 13:11:39 --> Could not find the language line "Home"
ERROR - 2025-03-01 13:14:12 --> Could not find the language line "Home"
ERROR - 2025-03-01 13:15:08 --> Could not find the language line "Home"
ERROR - 2025-03-01 13:15:53 --> Could not find the language line "Home"
ERROR - 2025-03-01 13:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 13:17:27 --> Could not find the language line "Home"
ERROR - 2025-03-01 13:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 13:20:20 --> Could not find the language line "Home"
ERROR - 2025-03-01 13:28:13 --> Could not find the language line "Home"
ERROR - 2025-03-01 13:45:08 --> Could not find the language line "Home"
ERROR - 2025-03-01 13:50:05 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-01 13:50:05 --> Could not find the language line "Home"
ERROR - 2025-03-01 13:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:02:37 --> Could not find the language line "Home"
ERROR - 2025-03-01 14:02:38 --> Could not find the language line "Home"
ERROR - 2025-03-01 14:15:09 --> Could not find the language line "Home"
ERROR - 2025-03-01 14:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:24:46 --> Could not find the language line "Home"
ERROR - 2025-03-01 14:43:19 --> Could not find the language line "Home"
ERROR - 2025-03-01 14:45:09 --> Could not find the language line "Home"
ERROR - 2025-03-01 14:46:47 --> Could not find the language line "Home"
ERROR - 2025-03-01 14:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:48:28 --> Could not find the language line "Home"
ERROR - 2025-03-01 14:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 14:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 15:01:08 --> Could not find the language line "Home"
ERROR - 2025-03-01 15:01:09 --> Could not find the language line "Home"
ERROR - 2025-03-01 15:01:29 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-01 15:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 15:03:14 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-01 15:03:14 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-01 15:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 15:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 15:03:14 --> 404 Page Not Found: Assets/img
ERROR - 2025-03-01 15:10:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-01 15:11:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-01 15:14:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-01 15:15:09 --> Could not find the language line "Home"
ERROR - 2025-03-01 15:28:17 --> Could not find the language line "Home"
ERROR - 2025-03-01 15:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 15:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 15:41:09 --> Could not find the language line "Home"
ERROR - 2025-03-01 15:42:10 --> Could not find the language line "Home"
ERROR - 2025-03-01 15:45:10 --> Could not find the language line "Home"
ERROR - 2025-03-01 15:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 15:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:15:10 --> Could not find the language line "Home"
ERROR - 2025-03-01 16:30:56 --> Could not find the language line "Home"
ERROR - 2025-03-01 16:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:33:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 16:33:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 16:33:30 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-01 16:33:30 --> Could not find the language line "Home"
ERROR - 2025-03-01 16:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:33:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 16:33:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 16:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:33:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 16:33:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 16:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 16:45:10 --> Could not find the language line "Home"
ERROR - 2025-03-01 16:47:09 --> Could not find the language line "Home"
ERROR - 2025-03-01 17:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 17:09:45 --> Could not find the language line "Home"
ERROR - 2025-03-01 17:15:10 --> Could not find the language line "Home"
ERROR - 2025-03-01 17:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 17:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 17:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 17:30:55 --> Could not find the language line "Home"
ERROR - 2025-03-01 17:38:24 --> Could not find the language line "Home"
ERROR - 2025-03-01 17:45:10 --> Could not find the language line "Home"
ERROR - 2025-03-01 18:05:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-01 18:06:15 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-01 18:07:03 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-01 18:15:11 --> Could not find the language line "Home"
ERROR - 2025-03-01 18:33:38 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 18:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 18:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 18:45:11 --> Could not find the language line "Home"
ERROR - 2025-03-01 18:55:53 --> Could not find the language line "Home"
ERROR - 2025-03-01 19:14:09 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-01 19:15:11 --> Could not find the language line "Home"
ERROR - 2025-03-01 19:22:04 --> Could not find the language line "Home"
ERROR - 2025-03-01 19:25:36 --> Could not find the language line "Home"
ERROR - 2025-03-01 19:31:07 --> Could not find the language line "Home"
ERROR - 2025-03-01 19:32:26 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-01 19:33:00 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-01 19:33:35 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-01 19:34:10 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-01 19:35:09 --> Could not find the language line "Home"
ERROR - 2025-03-01 19:42:13 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-01 19:45:12 --> Could not find the language line "Home"
ERROR - 2025-03-01 19:54:08 --> Could not find the language line "Other"
ERROR - 2025-03-01 20:15:12 --> Could not find the language line "Home"
ERROR - 2025-03-01 20:22:16 --> Could not find the language line "Home"
ERROR - 2025-03-01 20:25:18 --> Could not find the language line "Home"
ERROR - 2025-03-01 20:29:15 --> Could not find the language line "Home"
ERROR - 2025-03-01 20:33:28 --> Could not find the language line "Home"
ERROR - 2025-03-01 20:35:06 --> Could not find the language line "Home"
ERROR - 2025-03-01 20:45:12 --> Could not find the language line "Home"
ERROR - 2025-03-01 20:47:39 --> Could not find the language line "Home"
ERROR - 2025-03-01 20:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 20:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 20:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 20:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 20:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 20:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 20:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 20:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 21:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 21:15:12 --> Could not find the language line "Home"
ERROR - 2025-03-01 21:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 21:22:51 --> Could not find the language line "Home"
ERROR - 2025-03-01 21:35:45 --> Could not find the language line "Home"
ERROR - 2025-03-01 21:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 21:45:13 --> Could not find the language line "Home"
ERROR - 2025-03-01 21:51:04 --> Could not find the language line "Home"
ERROR - 2025-03-01 21:51:05 --> Could not find the language line "Home"
ERROR - 2025-03-01 22:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 22:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 22:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 22:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 22:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 22:12:50 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-01 22:15:13 --> Could not find the language line "Home"
ERROR - 2025-03-01 22:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 22:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 22:18:47 --> Could not find the language line "Home"
ERROR - 2025-03-01 22:18:49 --> Could not find the language line "Home"
ERROR - 2025-03-01 22:19:12 --> Could not find the language line "Home"
ERROR - 2025-03-01 22:23:17 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-01 22:26:16 --> Could not find the language line "Home"
ERROR - 2025-03-01 22:28:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-01 22:29:14 --> Could not find the language line "Home"
ERROR - 2025-03-01 22:45:15 --> Could not find the language line "Home"
ERROR - 2025-03-01 22:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 22:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 22:48:10 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 22:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 22:49:41 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 22:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 22:50:28 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 22:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 22:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 22:57:40 --> Could not find the language line "products"
ERROR - 2025-03-01 22:58:46 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 23:00:01 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 23:00:45 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 23:01:14 --> Could not find the language line "Clothing"
ERROR - 2025-03-01 23:01:32 --> Could not find the language line "Socks"
ERROR - 2025-03-01 23:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 23:01:55 --> Could not find the language line "Socks"
ERROR - 2025-03-01 23:02:15 --> Could not find the language line "Socks"
ERROR - 2025-03-01 23:02:39 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-01 23:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 23:05:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 23:05:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 23:06:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 23:06:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 23:06:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 23:06:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 23:06:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 23:06:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 23:07:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 23:07:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-01 23:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 23:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 23:15:14 --> Could not find the language line "Home"
ERROR - 2025-03-01 23:36:54 --> Could not find the language line "Home"
ERROR - 2025-03-01 23:45:15 --> Could not find the language line "Home"
ERROR - 2025-03-01 23:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-01 23:54:02 --> Could not find the language line "Home"
