<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-02 00:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 00:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 00:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 00:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 00:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 00:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 00:15:15 --> Could not find the language line "Home"
ERROR - 2025-03-02 00:25:43 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 00:30:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-02 00:41:40 --> Could not find the language line "Home"
ERROR - 2025-03-02 00:42:08 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-02 00:45:16 --> Could not find the language line "Home"
ERROR - 2025-03-02 01:12:14 --> Could not find the language line "Home"
ERROR - 2025-03-02 01:13:41 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-02 01:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 01:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 01:14:52 --> Could not find the language line "Home"
ERROR - 2025-03-02 01:15:16 --> Could not find the language line "Home"
ERROR - 2025-03-02 01:32:34 --> Could not find the language line "Home"
ERROR - 2025-03-02 01:44:37 --> Could not find the language line "Home"
ERROR - 2025-03-02 01:45:16 --> Could not find the language line "Home"
ERROR - 2025-03-02 01:56:38 --> 404 Page Not Found: Funky%20unisex%20socks/index
ERROR - 2025-03-02 02:00:12 --> Could not find the language line "Home"
ERROR - 2025-03-02 02:01:51 --> Could not find the language line "Home"
ERROR - 2025-03-02 02:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 02:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 02:13:30 --> Could not find the language line "Home"
ERROR - 2025-03-02 02:15:14 --> Could not find the language line "Home"
ERROR - 2025-03-02 02:20:07 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-02 02:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 02:45:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-02 02:45:16 --> Could not find the language line "Home"
ERROR - 2025-03-02 03:15:16 --> Could not find the language line "Home"
ERROR - 2025-03-02 03:15:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-02 03:16:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-02 03:16:48 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-02 03:17:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-02 03:17:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-02 03:29:24 --> Could not find the language line "Home"
ERROR - 2025-03-02 03:30:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-02 03:33:47 --> Could not find the language line "Home"
ERROR - 2025-03-02 03:38:59 --> Could not find the language line "Home"
ERROR - 2025-03-02 03:44:15 --> Could not find the language line "Home"
ERROR - 2025-03-02 03:45:17 --> Could not find the language line "Home"
ERROR - 2025-03-02 03:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 04:04:29 --> Could not find the language line "Home"
ERROR - 2025-03-02 04:04:33 --> Could not find the language line "Other"
ERROR - 2025-03-02 04:15:17 --> Could not find the language line "Home"
ERROR - 2025-03-02 04:29:41 --> Could not find the language line "Home"
ERROR - 2025-03-02 04:31:03 --> Could not find the language line "Home"
ERROR - 2025-03-02 04:31:45 --> Could not find the language line "Home"
ERROR - 2025-03-02 04:39:35 --> Could not find the language line "Home"
ERROR - 2025-03-02 04:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 04:45:18 --> Could not find the language line "Home"
ERROR - 2025-03-02 04:47:06 --> Could not find the language line "Home"
ERROR - 2025-03-02 04:48:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-02 04:52:53 --> Could not find the language line "Home"
ERROR - 2025-03-02 05:15:19 --> Could not find the language line "Home"
ERROR - 2025-03-02 05:18:01 --> Could not find the language line "Home"
ERROR - 2025-03-02 05:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 05:45:19 --> Could not find the language line "Home"
ERROR - 2025-03-02 06:15:18 --> Could not find the language line "Home"
ERROR - 2025-03-02 06:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 06:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 06:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 06:32:34 --> Could not find the language line "Other"
ERROR - 2025-03-02 06:45:19 --> Could not find the language line "Home"
ERROR - 2025-03-02 06:46:48 --> Could not find the language line "Home"
ERROR - 2025-03-02 06:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 06:55:08 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-03-02 06:55:08 --> Could not find the language line "Home"
ERROR - 2025-03-02 07:05:35 --> Could not find the language line "Home"
ERROR - 2025-03-02 07:15:19 --> Could not find the language line "Home"
ERROR - 2025-03-02 07:45:19 --> Could not find the language line "Home"
ERROR - 2025-03-02 07:50:50 --> Could not find the language line "Home"
ERROR - 2025-03-02 07:51:12 --> Could not find the language line "Home"
ERROR - 2025-03-02 07:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 07:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 07:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 07:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 07:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 07:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 07:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 08:02:24 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-02 08:15:20 --> Could not find the language line "Home"
ERROR - 2025-03-02 08:28:45 --> Could not find the language line "Home"
ERROR - 2025-03-02 08:44:48 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-02 08:45:20 --> Could not find the language line "Home"
ERROR - 2025-03-02 08:51:32 --> Could not find the language line "Home"
ERROR - 2025-03-02 08:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 09:15:20 --> Could not find the language line "Home"
ERROR - 2025-03-02 09:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 09:45:21 --> Could not find the language line "Home"
ERROR - 2025-03-02 09:50:28 --> Could not find the language line "Home"
ERROR - 2025-03-02 10:13:41 --> Could not find the language line "Home"
ERROR - 2025-03-02 10:15:21 --> Could not find the language line "Home"
ERROR - 2025-03-02 10:20:16 --> Could not find the language line "Home"
ERROR - 2025-03-02 10:20:46 --> Could not find the language line "Home"
ERROR - 2025-03-02 10:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 10:32:13 --> Could not find the language line "Home"
ERROR - 2025-03-02 10:35:28 --> Could not find the language line "Home"
ERROR - 2025-03-02 10:35:47 --> Could not find the language line "Home"
ERROR - 2025-03-02 10:45:21 --> Could not find the language line "Home"
ERROR - 2025-03-02 11:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 11:15:21 --> Could not find the language line "Home"
ERROR - 2025-03-02 11:23:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-02 11:41:21 --> Could not find the language line "Home"
ERROR - 2025-03-02 11:41:26 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-03-02 11:45:22 --> Could not find the language line "Home"
ERROR - 2025-03-02 11:50:09 --> Could not find the language line "Home"
ERROR - 2025-03-02 11:54:02 --> Could not find the language line "Home"
ERROR - 2025-03-02 11:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 11:58:03 --> Could not find the language line "Home"
ERROR - 2025-03-02 12:01:12 --> Could not find the language line "Home"
ERROR - 2025-03-02 12:06:29 --> Could not find the language line "Other"
ERROR - 2025-03-02 12:07:09 --> Could not find the language line "products"
ERROR - 2025-03-02 12:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 12:15:20 --> Could not find the language line "Home"
ERROR - 2025-03-02 12:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 12:21:59 --> Could not find the language line "Home"
ERROR - 2025-03-02 12:23:35 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 12:45:21 --> Could not find the language line "Home"
ERROR - 2025-03-02 12:47:25 --> Could not find the language line "Home"
ERROR - 2025-03-02 12:48:54 --> Could not find the language line "Home"
ERROR - 2025-03-02 12:53:50 --> Could not find the language line "Home"
ERROR - 2025-03-02 12:59:45 --> Could not find the language line "Home"
ERROR - 2025-03-02 13:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 13:08:22 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-02 13:09:39 --> Could not find the language line "Home"
ERROR - 2025-03-02 13:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 13:12:57 --> Could not find the language line "Home"
ERROR - 2025-03-02 13:15:21 --> Could not find the language line "Home"
ERROR - 2025-03-02 13:20:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-02 13:20:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-02 13:20:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-02 13:20:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-02 13:20:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-02 13:20:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-02 13:20:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-02 13:20:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-02 13:20:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-02 13:20:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-02 13:20:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-02 13:20:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-02 13:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 13:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 13:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 13:30:08 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-02 13:40:13 --> Could not find the language line "Home"
ERROR - 2025-03-02 13:40:32 --> Could not find the language line "Home"
ERROR - 2025-03-02 13:40:33 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-03-02 13:40:33 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-03-02 13:45:21 --> Could not find the language line "Home"
ERROR - 2025-03-02 13:47:16 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-03-02 14:09:41 --> Could not find the language line "Home"
ERROR - 2025-03-02 14:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 14:15:22 --> Could not find the language line "Home"
ERROR - 2025-03-02 14:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 14:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 14:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 14:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 14:33:51 --> Could not find the language line "Home"
ERROR - 2025-03-02 14:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 14:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 14:45:22 --> Could not find the language line "Home"
ERROR - 2025-03-02 14:45:58 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-02 14:51:01 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 14:56:39 --> Could not find the language line "Home"
ERROR - 2025-03-02 14:57:29 --> Could not find the language line "Home"
ERROR - 2025-03-02 15:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 15:15:23 --> Could not find the language line "Home"
ERROR - 2025-03-02 15:17:35 --> Could not find the language line "Perfume"
ERROR - 2025-03-02 15:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 15:24:00 --> Could not find the language line "Home"
ERROR - 2025-03-02 15:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 15:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 15:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 15:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 15:31:03 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-02 15:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 15:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 15:31:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-02 15:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 15:33:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-02 15:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 15:45:23 --> Could not find the language line "Home"
ERROR - 2025-03-02 15:46:41 --> Could not find the language line "Home"
ERROR - 2025-03-02 15:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 15:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 16:02:52 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-02 16:08:08 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-02 16:15:23 --> Could not find the language line "Home"
ERROR - 2025-03-02 16:26:32 --> Could not find the language line "products"
ERROR - 2025-03-02 16:45:15 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-02 16:45:23 --> Could not find the language line "Home"
ERROR - 2025-03-02 16:47:32 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-02 16:48:41 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-02 16:49:34 --> Could not find the language line "Home"
ERROR - 2025-03-02 16:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 16:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 16:59:23 --> Could not find the language line "Home"
ERROR - 2025-03-02 17:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 17:01:03 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-02 17:01:31 --> Could not find the language line "Home"
ERROR - 2025-03-02 17:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 17:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 17:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 17:15:23 --> Could not find the language line "Home"
ERROR - 2025-03-02 17:20:01 --> Could not find the language line "Home"
ERROR - 2025-03-02 17:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 17:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 17:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 17:45:24 --> Could not find the language line "Home"
ERROR - 2025-03-02 18:00:27 --> Could not find the language line "Home"
ERROR - 2025-03-02 18:07:50 --> Could not find the language line "Home"
ERROR - 2025-03-02 18:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 18:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 18:08:08 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-02 18:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 18:08:08 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-02 18:08:08 --> 404 Page Not Found: Assets/img
ERROR - 2025-03-02 18:08:09 --> 404 Page Not Found: Assets/img
ERROR - 2025-03-02 18:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 18:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 18:11:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:11:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:11:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:11:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 18:11:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:11:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 18:12:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:12:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 18:12:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:12:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:12:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:12:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:12:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:12:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:12:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:12:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 18:12:48 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-02 18:15:24 --> Could not find the language line "Home"
ERROR - 2025-03-02 18:22:38 --> Could not find the language line "Home"
ERROR - 2025-03-02 18:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 18:23:52 --> Could not find the language line "Home"
ERROR - 2025-03-02 18:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 18:26:57 --> Could not find the language line "Home"
ERROR - 2025-03-02 18:27:00 --> Could not find the language line "Other"
ERROR - 2025-03-02 18:34:23 --> Could not find the language line "Home"
ERROR - 2025-03-02 18:34:25 --> Could not find the language line "Home"
ERROR - 2025-03-02 18:37:03 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-02 18:45:24 --> Could not find the language line "Home"
ERROR - 2025-03-02 18:48:59 --> Could not find the language line "Home"
ERROR - 2025-03-02 19:05:48 --> Could not find the language line "Home"
ERROR - 2025-03-02 19:06:03 --> Could not find the language line "Home"
ERROR - 2025-03-02 19:08:21 --> Could not find the language line "Home"
ERROR - 2025-03-02 19:15:25 --> Could not find the language line "Home"
ERROR - 2025-03-02 19:15:49 --> Could not find the language line "Home"
ERROR - 2025-03-02 19:18:46 --> Could not find the language line "Home"
ERROR - 2025-03-02 19:30:09 --> Could not find the language line "Home"
ERROR - 2025-03-02 19:43:14 --> Could not find the language line "Home"
ERROR - 2025-03-02 19:45:25 --> Could not find the language line "Home"
ERROR - 2025-03-02 19:47:46 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-03-02 19:47:46 --> Could not find the language line "Home"
ERROR - 2025-03-02 19:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 19:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 20:04:37 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:05:45 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 20:07:07 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:08:05 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 20:10:43 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-02 20:11:14 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-02 20:11:50 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-02 20:12:14 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-02 20:15:25 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:15:45 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:16:11 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-02 20:16:22 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-02 20:16:31 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-02 20:16:44 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-02 20:16:54 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-02 20:17:03 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-02 20:17:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-02 20:17:29 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 20:17:39 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-02 20:17:46 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-02 20:17:55 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-02 20:18:03 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-02 20:18:13 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-02 20:18:20 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-02 20:18:35 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 20:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 20:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 20:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 20:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 20:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 20:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 20:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 20:37:50 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 20:38:38 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:38:39 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:38:40 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:45:26 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 20:47:17 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-02 20:47:40 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:47:55 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-02 20:48:53 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-02 20:48:54 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-02 20:49:27 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-02 20:49:44 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:49:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 20:49:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 20:50:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 20:50:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 20:50:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 20:50:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 20:50:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 20:50:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-02 20:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 20:50:56 --> Could not find the language line "Home"
ERROR - 2025-03-02 20:51:09 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 20:52:04 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:01:10 --> Could not find the language line "Home"
ERROR - 2025-03-02 21:15:26 --> Could not find the language line "Home"
ERROR - 2025-03-02 21:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 21:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 21:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 21:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 21:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 21:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 21:41:11 --> Could not find the language line "Home"
ERROR - 2025-03-02 21:41:27 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:41:58 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:42:10 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:42:26 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:42:50 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:43:14 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:43:22 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:43:26 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:43:30 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:43:31 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:43:32 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:43:33 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:43:35 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:43:40 --> Could not find the language line "Clothing"
ERROR - 2025-03-02 21:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 21:45:26 --> Could not find the language line "Home"
ERROR - 2025-03-02 21:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 22:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 22:13:25 --> Could not find the language line "Home"
ERROR - 2025-03-02 22:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 22:15:27 --> Could not find the language line "Home"
ERROR - 2025-03-02 22:21:36 --> Could not find the language line "Home"
ERROR - 2025-03-02 22:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 22:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 22:45:27 --> Could not find the language line "Home"
ERROR - 2025-03-02 22:58:32 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-03-02 22:58:32 --> Could not find the language line "Home"
ERROR - 2025-03-02 23:05:49 --> Could not find the language line "Home"
ERROR - 2025-03-02 23:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 23:15:29 --> Could not find the language line "Home"
ERROR - 2025-03-02 23:31:06 --> Could not find the language line "Home"
ERROR - 2025-03-02 23:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-02 23:45:32 --> Could not find the language line "Home"
ERROR - 2025-03-02 23:54:48 --> Could not find the language line "Home"
ERROR - 2025-03-02 23:55:51 --> 404 Page Not Found: Well-known/traffic-advice
