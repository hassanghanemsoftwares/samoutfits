<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-28 00:05:45 --> Could not find the language line "Home"
ERROR - 2024-10-28 00:15:24 --> Could not find the language line "Home"
ERROR - 2024-10-28 00:40:01 --> Could not find the language line "Home"
ERROR - 2024-10-28 00:45:38 --> Could not find the language line "Home"
ERROR - 2024-10-28 01:01:19 --> Could not find the language line "Home"
ERROR - 2024-10-28 01:08:50 --> Could not find the language line "Home"
ERROR - 2024-10-28 01:15:31 --> Could not find the language line "Home"
ERROR - 2024-10-28 01:16:03 --> Could not find the language line "Home"
ERROR - 2024-10-28 01:18:50 --> Could not find the language line "Home"
ERROR - 2024-10-28 01:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 01:40:10 --> Could not find the language line "Home"
ERROR - 2024-10-28 01:41:37 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 01:45:24 --> Could not find the language line "Home"
ERROR - 2024-10-28 01:50:00 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 01:59:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-28 02:14:07 --> Could not find the language line "Home"
ERROR - 2024-10-28 02:15:23 --> Could not find the language line "Home"
ERROR - 2024-10-28 02:45:29 --> Could not find the language line "Home"
ERROR - 2024-10-28 02:55:48 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 03:08:25 --> Could not find the language line "Home"
ERROR - 2024-10-28 03:11:15 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-28 03:11:15 --> Could not find the language line "Home"
ERROR - 2024-10-28 03:11:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-28 03:11:16 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-28 03:11:24 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 03:11:26 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 03:11:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-28 03:11:27 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 03:15:25 --> Could not find the language line "Home"
ERROR - 2024-10-28 03:45:24 --> Could not find the language line "Home"
ERROR - 2024-10-28 03:55:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-28 04:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 04:15:27 --> Could not find the language line "Home"
ERROR - 2024-10-28 04:45:24 --> Could not find the language line "Home"
ERROR - 2024-10-28 05:04:36 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 05:09:48 --> Could not find the language line "Home"
ERROR - 2024-10-28 05:09:49 --> Could not find the language line "Home"
ERROR - 2024-10-28 05:09:49 --> Could not find the language line "Home"
ERROR - 2024-10-28 05:10:15 --> Could not find the language line "Home"
ERROR - 2024-10-28 05:10:22 --> Could not find the language line "Disclaimer"
ERROR - 2024-10-28 05:15:28 --> Could not find the language line "Home"
ERROR - 2024-10-28 05:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 05:41:55 --> Could not find the language line "Perfume"
ERROR - 2024-10-28 05:42:01 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-28 05:42:01 --> Could not find the language line "Home"
ERROR - 2024-10-28 05:42:01 --> Could not find the language line "Home"
ERROR - 2024-10-28 05:45:25 --> Could not find the language line "Home"
ERROR - 2024-10-28 06:01:31 --> Could not find the language line "Home"
ERROR - 2024-10-28 06:01:32 --> Could not find the language line "Home"
ERROR - 2024-10-28 06:03:26 --> Could not find the language line "Home"
ERROR - 2024-10-28 06:10:53 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 06:12:55 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 06:15:24 --> Could not find the language line "Home"
ERROR - 2024-10-28 06:25:51 --> Could not find the language line "Home"
ERROR - 2024-10-28 06:29:59 --> Could not find the language line "Home"
ERROR - 2024-10-28 06:30:26 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-28 06:30:26 --> Could not find the language line "Home"
ERROR - 2024-10-28 06:30:26 --> Could not find the language line "Home"
ERROR - 2024-10-28 06:33:57 --> Could not find the language line "Home"
ERROR - 2024-10-28 06:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 06:42:46 --> Could not find the language line "Home"
ERROR - 2024-10-28 06:45:25 --> Could not find the language line "Home"
ERROR - 2024-10-28 07:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 07:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 07:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 07:15:25 --> Could not find the language line "Home"
ERROR - 2024-10-28 07:15:48 --> Could not find the language line "Home"
ERROR - 2024-10-28 07:32:29 --> Could not find the language line "Home"
ERROR - 2024-10-28 07:45:26 --> Could not find the language line "Home"
ERROR - 2024-10-28 07:57:43 --> Could not find the language line "Home"
ERROR - 2024-10-28 07:59:25 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-28 08:12:59 --> 404 Page Not Found: Media/system
ERROR - 2024-10-28 08:12:59 --> 404 Page Not Found: Wp-includes/js
ERROR - 2024-10-28 08:15:25 --> Could not find the language line "Home"
ERROR - 2024-10-28 08:22:33 --> Could not find the language line "Home"
ERROR - 2024-10-28 08:23:13 --> Could not find the language line "Home"
ERROR - 2024-10-28 08:23:26 --> Could not find the language line "Home"
ERROR - 2024-10-28 08:25:29 --> Could not find the language line "Home"
ERROR - 2024-10-28 08:28:58 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-10-28 08:28:58 --> Could not find the language line "Home"
ERROR - 2024-10-28 08:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 08:45:25 --> Could not find the language line "Home"
ERROR - 2024-10-28 08:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:01:18 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-28 09:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:01:30 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:02:26 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:03:10 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:05:46 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:07:18 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:07:18 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:09:33 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-10-28 09:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:11:13 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-28 09:11:13 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:11:13 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:15:26 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:25:50 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:26:24 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:30:32 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:30:33 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:40:44 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:45:27 --> Could not find the language line "Home"
ERROR - 2024-10-28 09:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 09:52:48 --> Could not find the language line "Home"
ERROR - 2024-10-28 10:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:01:18 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-10-28 10:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:04:23 --> Could not find the language line "Home"
ERROR - 2024-10-28 10:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:15:28 --> Could not find the language line "Home"
ERROR - 2024-10-28 10:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:25:27 --> Could not find the language line "Home"
ERROR - 2024-10-28 10:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:45:27 --> Could not find the language line "Home"
ERROR - 2024-10-28 10:46:10 --> Could not find the language line "Bracelets"
ERROR - 2024-10-28 10:46:10 --> Could not find the language line "Bracelets"
ERROR - 2024-10-28 10:46:20 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-10-28 10:46:20 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-10-28 10:47:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-28 10:47:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-28 10:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 10:57:51 --> Could not find the language line "Home"
ERROR - 2024-10-28 11:02:41 --> Could not find the language line "Home"
ERROR - 2024-10-28 11:08:35 --> Could not find the language line "Home"
ERROR - 2024-10-28 11:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 11:15:28 --> Could not find the language line "Home"
ERROR - 2024-10-28 11:16:56 --> Could not find the language line "Home"
ERROR - 2024-10-28 11:23:52 --> Could not find the language line "Home"
ERROR - 2024-10-28 11:25:19 --> Could not find the language line "Home"
ERROR - 2024-10-28 11:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 11:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 11:27:31 --> Could not find the language line "Home"
ERROR - 2024-10-28 11:28:56 --> Could not find the language line "Home"
ERROR - 2024-10-28 11:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 11:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 11:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 11:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 11:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 11:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 11:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 11:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 11:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 11:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 11:45:27 --> Could not find the language line "Home"
ERROR - 2024-10-28 11:53:31 --> Could not find the language line "Home"
ERROR - 2024-10-28 11:53:31 --> Could not find the language line "Home"
ERROR - 2024-10-28 11:56:58 --> Could not find the language line "Home"
ERROR - 2024-10-28 12:06:54 --> Could not find the language line "Home"
ERROR - 2024-10-28 12:15:28 --> Could not find the language line "Home"
ERROR - 2024-10-28 12:30:16 --> Could not find the language line "Home"
ERROR - 2024-10-28 12:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 12:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 12:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 12:45:30 --> Could not find the language line "Home"
ERROR - 2024-10-28 12:52:15 --> Could not find the language line "Home"
ERROR - 2024-10-28 12:53:44 --> Could not find the language line "Home"
ERROR - 2024-10-28 12:53:47 --> Could not find the language line "Home"
ERROR - 2024-10-28 13:00:43 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-28 13:00:44 --> Could not find the language line "Home"
ERROR - 2024-10-28 13:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 13:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 13:15:31 --> Could not find the language line "Home"
ERROR - 2024-10-28 13:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 13:16:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-28 13:16:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-28 13:16:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-28 13:16:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-28 13:16:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-28 13:16:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-28 13:16:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-28 13:16:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-28 13:16:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-28 13:16:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-28 13:16:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-28 13:16:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-28 13:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 13:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 13:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 13:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 13:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 13:28:39 --> Could not find the language line "Home"
ERROR - 2024-10-28 13:28:39 --> Could not find the language line "Home"
ERROR - 2024-10-28 13:28:40 --> Could not find the language line "Home"
ERROR - 2024-10-28 13:28:41 --> Could not find the language line "Home"
ERROR - 2024-10-28 13:28:42 --> Could not find the language line "Home"
ERROR - 2024-10-28 13:28:42 --> Could not find the language line "Home"
ERROR - 2024-10-28 13:28:43 --> Could not find the language line "Home"
ERROR - 2024-10-28 13:28:45 --> Could not find the language line "Home"
ERROR - 2024-10-28 13:28:46 --> Could not find the language line "Home"
ERROR - 2024-10-28 13:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 13:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 13:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 13:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 13:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 13:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 13:45:29 --> Could not find the language line "Home"
ERROR - 2024-10-28 14:00:20 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-28 14:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 14:08:09 --> Could not find the language line "Home"
ERROR - 2024-10-28 14:15:29 --> Could not find the language line "Home"
ERROR - 2024-10-28 14:16:58 --> Could not find the language line "Home"
ERROR - 2024-10-28 14:18:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-28 14:18:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-28 14:18:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-28 14:20:51 --> Could not find the language line "Home"
ERROR - 2024-10-28 14:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 14:22:45 --> Could not find the language line "Home"
ERROR - 2024-10-28 14:22:48 --> Could not find the language line "Home"
ERROR - 2024-10-28 14:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 14:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 14:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 14:45:29 --> Could not find the language line "Home"
ERROR - 2024-10-28 14:48:02 --> Could not find the language line "Home"
ERROR - 2024-10-28 14:48:27 --> Could not find the language line "Home"
ERROR - 2024-10-28 14:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 15:15:30 --> Could not find the language line "Home"
ERROR - 2024-10-28 15:17:21 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-28 15:17:23 --> Could not find the language line "Home"
ERROR - 2024-10-28 15:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 15:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 15:24:28 --> Could not find the language line "Home"
ERROR - 2024-10-28 15:45:11 --> Could not find the language line "Home"
ERROR - 2024-10-28 15:45:30 --> Could not find the language line "Home"
ERROR - 2024-10-28 15:53:07 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-28 15:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 15:54:49 --> Could not find the language line "Home"
ERROR - 2024-10-28 16:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 16:00:33 --> 404 Page Not Found: Products/products
ERROR - 2024-10-28 16:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 16:05:11 --> Could not find the language line "Home"
ERROR - 2024-10-28 16:06:48 --> Could not find the language line "Home"
ERROR - 2024-10-28 16:08:56 --> Could not find the language line "Home"
ERROR - 2024-10-28 16:08:57 --> Could not find the language line "Home"
ERROR - 2024-10-28 16:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 16:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 16:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 16:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 16:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 16:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 16:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 16:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 16:15:30 --> Could not find the language line "Home"
ERROR - 2024-10-28 16:35:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-28 16:35:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-28 16:35:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-28 16:39:57 --> Could not find the language line "products"
ERROR - 2024-10-28 16:45:30 --> Could not find the language line "Home"
ERROR - 2024-10-28 17:04:47 --> Could not find the language line "Other"
ERROR - 2024-10-28 17:07:49 --> Could not find the language line "Home"
ERROR - 2024-10-28 17:08:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-28 17:08:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-28 17:08:33 --> Could not find the language line "Home"
ERROR - 2024-10-28 17:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 17:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 17:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 17:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 17:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 17:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 17:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 17:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 17:14:02 --> Could not find the language line "Home"
ERROR - 2024-10-28 17:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 17:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 17:15:31 --> Could not find the language line "Home"
ERROR - 2024-10-28 17:38:13 --> Could not find the language line "Home"
ERROR - 2024-10-28 17:45:30 --> Could not find the language line "Home"
ERROR - 2024-10-28 17:55:47 --> Could not find the language line "Home"
ERROR - 2024-10-28 18:04:58 --> Could not find the language line "Home"
ERROR - 2024-10-28 18:06:05 --> Could not find the language line "Home"
ERROR - 2024-10-28 18:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 18:06:45 --> Could not find the language line "Home"
ERROR - 2024-10-28 18:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 18:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 18:09:46 --> Could not find the language line "Home"
ERROR - 2024-10-28 18:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 18:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 18:15:31 --> Could not find the language line "Home"
ERROR - 2024-10-28 18:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 18:45:31 --> Could not find the language line "Home"
ERROR - 2024-10-28 18:52:18 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-28 18:52:18 --> Could not find the language line "Home"
ERROR - 2024-10-28 18:52:19 --> Could not find the language line "Home"
ERROR - 2024-10-28 19:13:53 --> Could not find the language line "Home"
ERROR - 2024-10-28 19:15:32 --> Could not find the language line "Home"
ERROR - 2024-10-28 19:16:29 --> Could not find the language line "Home"
ERROR - 2024-10-28 19:26:37 --> Could not find the language line "Bracelets"
ERROR - 2024-10-28 19:27:10 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-28 19:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 19:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 19:45:32 --> Could not find the language line "Home"
ERROR - 2024-10-28 19:56:37 --> Could not find the language line "Home"
ERROR - 2024-10-28 19:58:52 --> Could not find the language line "Home"
ERROR - 2024-10-28 19:59:30 --> Could not find the language line "Home"
ERROR - 2024-10-28 20:15:33 --> Could not find the language line "Home"
ERROR - 2024-10-28 20:17:26 --> Could not find the language line "Home"
ERROR - 2024-10-28 20:22:30 --> Could not find the language line "Home"
ERROR - 2024-10-28 20:27:53 --> Could not find the language line "Home"
ERROR - 2024-10-28 20:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 20:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 20:40:53 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-28 20:45:33 --> Could not find the language line "Home"
ERROR - 2024-10-28 21:09:15 --> 404 Page Not Found: Home/products
ERROR - 2024-10-28 21:15:34 --> Could not find the language line "Home"
ERROR - 2024-10-28 21:24:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-28 21:45:33 --> Could not find the language line "Home"
ERROR - 2024-10-28 21:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 21:58:29 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 21:58:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-28 21:58:43 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 21:59:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-28 21:59:14 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 22:10:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-28 22:10:48 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 22:10:59 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 22:11:23 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 22:15:34 --> Could not find the language line "Home"
ERROR - 2024-10-28 22:21:40 --> Could not find the language line "Home"
ERROR - 2024-10-28 22:21:42 --> 404 Page Not Found: Home/accounts
ERROR - 2024-10-28 22:21:42 --> 404 Page Not Found: Home/home
ERROR - 2024-10-28 22:21:42 --> 404 Page Not Found: Home/assets
ERROR - 2024-10-28 22:25:42 --> Could not find the language line "Clothing"
ERROR - 2024-10-28 22:35:14 --> Could not find the language line "Home"
ERROR - 2024-10-28 22:45:34 --> Could not find the language line "Home"
ERROR - 2024-10-28 22:46:14 --> Could not find the language line "Home"
ERROR - 2024-10-28 23:01:34 --> Could not find the language line "Home"
ERROR - 2024-10-28 23:02:17 --> Could not find the language line "Home"
ERROR - 2024-10-28 23:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 23:11:02 --> Could not find the language line "Home"
ERROR - 2024-10-28 23:12:27 --> Could not find the language line "Home"
ERROR - 2024-10-28 23:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 23:15:36 --> Could not find the language line "Home"
ERROR - 2024-10-28 23:20:55 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-28 23:35:02 --> Could not find the language line "Home"
ERROR - 2024-10-28 23:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-28 23:45:37 --> Could not find the language line "Home"
ERROR - 2024-10-28 23:47:08 --> Could not find the language line "Home"
ERROR - 2024-10-28 23:55:15 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-28 23:55:15 --> Could not find the language line "Home"
ERROR - 2024-10-28 23:55:15 --> Could not find the language line "Home"
ERROR - 2024-10-28 23:58:10 --> Could not find the language line "Home"
