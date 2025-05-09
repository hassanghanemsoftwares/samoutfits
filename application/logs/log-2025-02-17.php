<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-17 00:10:15 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-17 00:13:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-17 00:14:39 --> Could not find the language line "Home"
ERROR - 2025-02-17 00:21:22 --> Could not find the language line "Home"
ERROR - 2025-02-17 00:44:38 --> Could not find the language line "Home"
ERROR - 2025-02-17 00:45:11 --> Could not find the language line "Home"
ERROR - 2025-02-17 00:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 01:12:50 --> Could not find the language line "Socks"
ERROR - 2025-02-17 01:14:42 --> Could not find the language line "Home"
ERROR - 2025-02-17 01:25:14 --> Could not find the language line "Home"
ERROR - 2025-02-17 01:44:39 --> Could not find the language line "Home"
ERROR - 2025-02-17 02:10:48 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-17 02:14:39 --> Could not find the language line "Home"
ERROR - 2025-02-17 02:17:16 --> Could not find the language line "Home"
ERROR - 2025-02-17 02:17:18 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-17 02:17:22 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-17 02:17:26 --> 404 Page Not Found: Samoutfits/index
ERROR - 2025-02-17 02:17:41 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-17 02:17:52 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-17 02:17:57 --> 404 Page Not Found: New/index
ERROR - 2025-02-17 02:18:05 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-17 02:18:10 --> 404 Page Not Found: Temp/index
ERROR - 2025-02-17 02:18:26 --> 404 Page Not Found: Blog/index
ERROR - 2025-02-17 02:40:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-17 02:40:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-17 02:40:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-17 02:40:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-17 02:40:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-17 02:40:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-17 02:40:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-17 02:40:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-17 02:40:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-17 02:40:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-17 02:40:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-17 02:40:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-17 02:44:42 --> Could not find the language line "Home"
ERROR - 2025-02-17 02:53:11 --> Could not find the language line "Home"
ERROR - 2025-02-17 02:54:57 --> Could not find the language line "Home"
ERROR - 2025-02-17 02:57:07 --> Could not find the language line "Home"
ERROR - 2025-02-17 03:14:39 --> Could not find the language line "Home"
ERROR - 2025-02-17 03:14:52 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 03:19:35 --> Could not find the language line "Home"
ERROR - 2025-02-17 03:23:23 --> Could not find the language line "Home"
ERROR - 2025-02-17 03:37:09 --> Could not find the language line "Home"
ERROR - 2025-02-17 03:37:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-17 03:44:43 --> Could not find the language line "Home"
ERROR - 2025-02-17 03:52:23 --> Could not find the language line "Home"
ERROR - 2025-02-17 03:54:15 --> Could not find the language line "Home"
ERROR - 2025-02-17 03:56:20 --> Could not find the language line "Home"
ERROR - 2025-02-17 04:11:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-17 04:12:46 --> Could not find the language line "Home"
ERROR - 2025-02-17 04:14:37 --> Could not find the language line "Home"
ERROR - 2025-02-17 04:24:19 --> Could not find the language line "Home"
ERROR - 2025-02-17 04:38:26 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-17 04:44:38 --> Could not find the language line "Home"
ERROR - 2025-02-17 05:14:39 --> Could not find the language line "Home"
ERROR - 2025-02-17 05:25:05 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-17 05:25:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V010%' OR a.description LIKE '%V010%' OR a.color LIKE '%V010%' OR a.barcode LIKE '%V010%' OR a.category LIKE '%V010%' OR a.sub_category LIKE '%V010%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-17 05:44:39 --> Could not find the language line "Home"
ERROR - 2025-02-17 05:50:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-17 05:54:32 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-17 05:54:32 --> Could not find the language line "Home"
ERROR - 2025-02-17 06:14:40 --> Could not find the language line "Home"
ERROR - 2025-02-17 06:22:37 --> Could not find the language line "Home"
ERROR - 2025-02-17 06:23:56 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 06:24:31 --> Could not find the language line "Home"
ERROR - 2025-02-17 06:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 06:27:28 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-17 06:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 06:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 06:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 06:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 06:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 06:44:41 --> Could not find the language line "Home"
ERROR - 2025-02-17 06:47:24 --> Could not find the language line "Home"
ERROR - 2025-02-17 07:05:27 --> Could not find the language line "Home"
ERROR - 2025-02-17 07:05:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-17 07:05:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-17 07:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 07:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 07:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 07:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 07:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 07:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 07:11:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-17 07:11:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-17 07:11:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-17 07:11:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-17 07:11:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-17 07:11:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-17 07:11:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-17 07:11:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-17 07:11:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-17 07:11:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-17 07:11:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-17 07:11:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-17 07:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 07:14:39 --> Could not find the language line "Home"
ERROR - 2025-02-17 07:16:27 --> Could not find the language line "Home"
ERROR - 2025-02-17 07:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 07:36:17 --> 404 Page Not Found: Media/system
ERROR - 2025-02-17 07:36:20 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-02-17 07:38:18 --> Could not find the language line "Home"
ERROR - 2025-02-17 07:38:20 --> Could not find the language line "Home"
ERROR - 2025-02-17 07:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 07:44:39 --> Could not find the language line "Home"
ERROR - 2025-02-17 07:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 07:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 07:50:00 --> Could not find the language line "Home"
ERROR - 2025-02-17 07:55:48 --> Could not find the language line "Home"
ERROR - 2025-02-17 07:58:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-17 07:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:03:32 --> Could not find the language line "Socks"
ERROR - 2025-02-17 08:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:09:35 --> Could not find the language line "Home"
ERROR - 2025-02-17 08:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:14:39 --> Could not find the language line "Home"
ERROR - 2025-02-17 08:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:15:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-17 08:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:16:23 --> Could not find the language line "Home"
ERROR - 2025-02-17 08:16:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-17 08:16:39 --> Could not find the language line "Home"
ERROR - 2025-02-17 08:16:41 --> Could not find the language line "Home"
ERROR - 2025-02-17 08:16:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-17 08:16:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-17 08:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:26:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-17 08:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:32:55 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 08:39:34 --> Could not find the language line "Home"
ERROR - 2025-02-17 08:44:39 --> Could not find the language line "Home"
ERROR - 2025-02-17 08:44:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-17 08:44:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-17 08:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 08:46:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h515%' OR a.description LIKE '%h515%' OR a.color LIKE '%h515%' OR a.barcode LIKE '%h515%' OR a.category LIKE '%h515%' OR a.sub_category LIKE '%h515%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-17 08:51:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-17 09:14:41 --> Could not find the language line "Home"
ERROR - 2025-02-17 09:15:39 --> Could not find the language line "Home"
ERROR - 2025-02-17 09:18:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-17 09:18:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-17 09:29:25 --> Could not find the language line "Home"
ERROR - 2025-02-17 09:29:29 --> Could not find the language line "Home"
ERROR - 2025-02-17 09:44:41 --> Could not find the language line "Home"
ERROR - 2025-02-17 09:54:48 --> Could not find the language line "Home"
ERROR - 2025-02-17 09:54:48 --> Could not find the language line "Home"
ERROR - 2025-02-17 10:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 10:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 10:14:40 --> Could not find the language line "Home"
ERROR - 2025-02-17 10:15:47 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2025-02-17 10:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 10:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 10:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 10:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 10:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 10:24:29 --> Could not find the language line "Home"
ERROR - 2025-02-17 10:24:41 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-17 10:25:02 --> Could not find the language line "Home"
ERROR - 2025-02-17 10:31:29 --> Could not find the language line "Home"
ERROR - 2025-02-17 10:37:16 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 10:37:21 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 10:44:42 --> Could not find the language line "Home"
ERROR - 2025-02-17 10:48:32 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-17 10:56:28 --> Could not find the language line "Home"
ERROR - 2025-02-17 10:57:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-17 10:57:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-17 10:58:56 --> Could not find the language line "Home"
ERROR - 2025-02-17 11:01:35 --> Could not find the language line "Home"
ERROR - 2025-02-17 11:14:41 --> Could not find the language line "Home"
ERROR - 2025-02-17 11:16:37 --> Could not find the language line "Home"
ERROR - 2025-02-17 11:21:35 --> Could not find the language line "Home"
ERROR - 2025-02-17 11:24:33 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2025-02-17 11:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 11:32:51 --> Could not find the language line "Home"
ERROR - 2025-02-17 11:44:45 --> Could not find the language line "Home"
ERROR - 2025-02-17 11:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 11:54:38 --> Could not find the language line "Home"
ERROR - 2025-02-17 11:58:36 --> Could not find the language line "Home"
ERROR - 2025-02-17 12:01:13 --> Could not find the language line "Home"
ERROR - 2025-02-17 12:02:34 --> Could not find the language line "Socks"
ERROR - 2025-02-17 12:05:45 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-17 12:06:59 --> Could not find the language line "Other"
ERROR - 2025-02-17 12:12:30 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 12:14:42 --> Could not find the language line "Home"
ERROR - 2025-02-17 12:19:31 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 12:23:19 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 12:25:00 --> Could not find the language line "Other"
ERROR - 2025-02-17 12:26:31 --> Could not find the language line "Perfume"
ERROR - 2025-02-17 12:34:02 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-17 12:34:20 --> Could not find the language line "Disclaimer"
ERROR - 2025-02-17 12:35:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-17 12:35:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-17 12:36:04 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 12:44:45 --> Could not find the language line "Home"
ERROR - 2025-02-17 12:45:47 --> Could not find the language line "Home"
ERROR - 2025-02-17 13:01:25 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 13:02:43 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 13:02:54 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 13:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 13:14:42 --> Could not find the language line "Home"
ERROR - 2025-02-17 13:15:04 --> Could not find the language line "Home"
ERROR - 2025-02-17 13:18:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-17 13:29:03 --> Could not find the language line "Home"
ERROR - 2025-02-17 13:35:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-17 13:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 13:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 13:37:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-17 13:44:31 --> Could not find the language line "Home"
ERROR - 2025-02-17 13:44:43 --> Could not find the language line "Home"
ERROR - 2025-02-17 13:48:57 --> Could not find the language line "Home"
ERROR - 2025-02-17 13:50:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-17 13:53:30 --> Could not find the language line "Other"
ERROR - 2025-02-17 13:58:41 --> Could not find the language line "Home"
ERROR - 2025-02-17 13:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 14:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 14:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 14:14:43 --> Could not find the language line "Home"
ERROR - 2025-02-17 14:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 14:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 14:32:25 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-17 14:33:04 --> Could not find the language line "Home"
ERROR - 2025-02-17 14:33:34 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-17 14:44:44 --> Could not find the language line "Home"
ERROR - 2025-02-17 14:59:45 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 15:02:14 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 15:03:05 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:03:06 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 15:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 15:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 15:14:44 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 15:24:00 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:24:06 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-17 15:24:12 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-17 15:24:19 --> 404 Page Not Found: Samoutfits/index
ERROR - 2025-02-17 15:24:22 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-17 15:24:31 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-17 15:24:34 --> 404 Page Not Found: New/index
ERROR - 2025-02-17 15:24:40 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-17 15:24:46 --> 404 Page Not Found: Temp/index
ERROR - 2025-02-17 15:24:51 --> 404 Page Not Found: Blog/index
ERROR - 2025-02-17 15:26:44 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:26:47 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:34:31 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:44:45 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:50:38 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:51:11 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:51:16 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:52:56 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 15:55:19 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 15:56:46 --> Could not find the language line "Home"
ERROR - 2025-02-17 15:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 15:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 15:58:24 --> Could not find the language line "Home"
ERROR - 2025-02-17 16:14:44 --> Could not find the language line "Home"
ERROR - 2025-02-17 16:17:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-17 16:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 16:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 16:31:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-17 16:44:44 --> Could not find the language line "Home"
ERROR - 2025-02-17 17:06:33 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-17 17:14:46 --> Could not find the language line "Home"
ERROR - 2025-02-17 17:15:52 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 17:17:17 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-17 17:27:20 --> Could not find the language line "Other"
ERROR - 2025-02-17 17:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 17:44:45 --> Could not find the language line "Home"
ERROR - 2025-02-17 18:01:46 --> Could not find the language line "Home"
ERROR - 2025-02-17 18:03:06 --> Could not find the language line "Home"
ERROR - 2025-02-17 18:03:31 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 18:14:45 --> Could not find the language line "Home"
ERROR - 2025-02-17 18:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 18:20:16 --> Could not find the language line "Home"
ERROR - 2025-02-17 18:44:46 --> Could not find the language line "Home"
ERROR - 2025-02-17 18:45:15 --> Could not find the language line "Home"
ERROR - 2025-02-17 18:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 18:54:28 --> Could not find the language line "Home"
ERROR - 2025-02-17 18:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 18:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 19:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 19:00:35 --> Could not find the language line "Home"
ERROR - 2025-02-17 19:06:42 --> Could not find the language line "Home"
ERROR - 2025-02-17 19:14:46 --> Could not find the language line "Home"
ERROR - 2025-02-17 19:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 19:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 19:41:26 --> Could not find the language line "Home"
ERROR - 2025-02-17 19:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 19:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 19:43:21 --> Could not find the language line "Home"
ERROR - 2025-02-17 19:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 19:44:47 --> Could not find the language line "Home"
ERROR - 2025-02-17 19:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 19:47:56 --> Could not find the language line "Home"
ERROR - 2025-02-17 19:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 19:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 19:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 20:07:23 --> Could not find the language line "Home"
ERROR - 2025-02-17 20:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 20:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 20:09:53 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2025-02-17 20:09:53 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2025-02-17 20:09:53 --> 404 Page Not Found: Wp-admin/index
ERROR - 2025-02-17 20:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 20:14:46 --> Could not find the language line "Home"
ERROR - 2025-02-17 20:19:28 --> Could not find the language line "Home"
ERROR - 2025-02-17 20:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 20:25:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-17 20:25:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-17 20:35:31 --> Could not find the language line "Home"
ERROR - 2025-02-17 20:42:01 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2025-02-17 20:42:01 --> Unable to connect to the database
ERROR - 2025-02-17 20:42:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-17 20:43:37 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2025-02-17 20:43:37 --> Unable to connect to the database
ERROR - 2025-02-17 20:43:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-17 20:44:48 --> Could not find the language line "Home"
ERROR - 2025-02-17 20:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 20:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 20:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 20:55:11 --> Could not find the language line "Home"
ERROR - 2025-02-17 21:11:14 --> Could not find the language line "Home"
ERROR - 2025-02-17 21:14:47 --> Could not find the language line "Home"
ERROR - 2025-02-17 21:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 21:20:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-17 21:23:50 --> Could not find the language line "Home"
ERROR - 2025-02-17 21:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 21:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 21:26:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-17 21:32:35 --> Could not find the language line "Home"
ERROR - 2025-02-17 21:32:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-17 21:33:12 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-02-17 21:33:12 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-02-17 21:33:58 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-17 21:35:07 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-02-17 21:35:07 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-02-17 21:44:47 --> Could not find the language line "Home"
ERROR - 2025-02-17 22:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 22:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 22:11:16 --> Could not find the language line "Home"
ERROR - 2025-02-17 22:13:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-17 22:13:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-17 22:14:47 --> Could not find the language line "Home"
ERROR - 2025-02-17 22:17:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-17 22:23:48 --> Could not find the language line "Other"
ERROR - 2025-02-17 22:28:39 --> Could not find the language line "Other"
ERROR - 2025-02-17 22:38:41 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-02-17 22:42:14 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-17 22:44:50 --> Could not find the language line "Home"
ERROR - 2025-02-17 22:48:40 --> Could not find the language line "Crocs"
ERROR - 2025-02-17 22:53:39 --> Could not find the language line "Clothing"
ERROR - 2025-02-17 23:14:53 --> Could not find the language line "Home"
ERROR - 2025-02-17 23:19:26 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2025-02-17 23:19:26 --> 404 Page Not Found: Wp-admin/index
ERROR - 2025-02-17 23:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 23:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 23:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 23:36:39 --> Could not find the language line "Home"
ERROR - 2025-02-17 23:44:51 --> Could not find the language line "Home"
ERROR - 2025-02-17 23:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-17 23:53:05 --> Could not find the language line "Home"
