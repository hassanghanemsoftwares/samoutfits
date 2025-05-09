<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-12 00:01:36 --> Could not find the language line "Home"
ERROR - 2024-12-12 00:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 00:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 00:17:30 --> Could not find the language line "Home"
ERROR - 2024-12-12 00:18:20 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-12 00:35:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-12 00:36:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-12 00:38:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-12 00:47:30 --> Could not find the language line "Home"
ERROR - 2024-12-12 01:06:30 --> Could not find the language line "Home"
ERROR - 2024-12-12 01:06:41 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 01:06:58 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 01:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 01:07:09 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 01:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 01:07:16 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 01:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 01:07:23 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 01:07:37 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 01:07:48 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 01:08:02 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 01:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 01:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 01:12:18 --> Could not find the language line "Home"
ERROR - 2024-12-12 01:15:13 --> 404 Page Not Found: Wp-includes/ID3
ERROR - 2024-12-12 01:15:13 --> 404 Page Not Found: Feed/index
ERROR - 2024-12-12 01:15:15 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-12-12 01:15:15 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2024-12-12 01:15:16 --> 404 Page Not Found: Web/wp-includes
ERROR - 2024-12-12 01:17:33 --> Could not find the language line "Home"
ERROR - 2024-12-12 01:39:21 --> Could not find the language line "Home"
ERROR - 2024-12-12 01:47:30 --> Could not find the language line "Home"
ERROR - 2024-12-12 02:00:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-12 02:02:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-12 02:04:06 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-12 02:05:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-12 02:06:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-12 02:07:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-12 02:17:32 --> Could not find the language line "Home"
ERROR - 2024-12-12 02:36:35 --> Could not find the language line "Home"
ERROR - 2024-12-12 02:47:32 --> Could not find the language line "Home"
ERROR - 2024-12-12 02:51:56 --> Could not find the language line "Home"
ERROR - 2024-12-12 03:03:17 --> Could not find the language line "Other"
ERROR - 2024-12-12 03:17:29 --> Could not find the language line "Home"
ERROR - 2024-12-12 03:21:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-12 03:43:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-12 03:48:03 --> Could not find the language line "Home"
ERROR - 2024-12-12 04:17:33 --> Could not find the language line "Home"
ERROR - 2024-12-12 04:23:55 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-12 04:29:28 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-12 04:30:30 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-12 04:30:57 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-12 04:32:00 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-12 04:46:24 --> Could not find the language line "Home"
ERROR - 2024-12-12 04:47:31 --> Could not find the language line "Home"
ERROR - 2024-12-12 04:48:54 --> Could not find the language line "Home"
ERROR - 2024-12-12 04:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 04:58:24 --> Could not find the language line "Home"
ERROR - 2024-12-12 05:01:21 --> Could not find the language line "Home"
ERROR - 2024-12-12 05:17:29 --> Could not find the language line "Home"
ERROR - 2024-12-12 05:41:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 05:45:13 --> Could not find the language line "Home"
ERROR - 2024-12-12 05:47:13 --> Could not find the language line "Home"
ERROR - 2024-12-12 05:47:32 --> Could not find the language line "Home"
ERROR - 2024-12-12 05:56:49 --> Could not find the language line "Home"
ERROR - 2024-12-12 05:57:40 --> Could not find the language line "Home"
ERROR - 2024-12-12 06:03:01 --> Could not find the language line "Home"
ERROR - 2024-12-12 06:17:29 --> Could not find the language line "Home"
ERROR - 2024-12-12 06:47:30 --> Could not find the language line "Home"
ERROR - 2024-12-12 07:09:50 --> Could not find the language line "Home"
ERROR - 2024-12-12 07:17:29 --> Could not find the language line "Home"
ERROR - 2024-12-12 07:18:23 --> Could not find the language line "Home"
ERROR - 2024-12-12 07:19:10 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-12 07:19:10 --> Could not find the language line "Home"
ERROR - 2024-12-12 07:19:10 --> Could not find the language line "Home"
ERROR - 2024-12-12 07:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:28:46 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-12 07:33:44 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 07:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:43:32 --> Could not find the language line "Home"
ERROR - 2024-12-12 07:44:49 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 07:47:30 --> Could not find the language line "Home"
ERROR - 2024-12-12 07:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 07:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 08:02:34 --> Could not find the language line "Home"
ERROR - 2024-12-12 08:02:47 --> Could not find the language line "Home"
ERROR - 2024-12-12 08:02:48 --> 404 Page Not Found: Home/assets
ERROR - 2024-12-12 08:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 08:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 08:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 08:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 08:09:51 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 08:09:54 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 08:10:00 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 08:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 08:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 08:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 08:17:29 --> Could not find the language line "Home"
ERROR - 2024-12-12 08:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 08:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 08:47:30 --> Could not find the language line "Home"
ERROR - 2024-12-12 08:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 08:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 09:02:44 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-12 09:17:31 --> Could not find the language line "Home"
ERROR - 2024-12-12 09:30:15 --> Could not find the language line "Home"
ERROR - 2024-12-12 09:38:59 --> Could not find the language line "Home"
ERROR - 2024-12-12 09:39:01 --> Could not find the language line "Other"
ERROR - 2024-12-12 09:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 09:43:09 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 09:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 09:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 09:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 09:47:31 --> Could not find the language line "Home"
ERROR - 2024-12-12 09:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 10:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 10:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 10:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 10:17:31 --> Could not find the language line "Home"
ERROR - 2024-12-12 10:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 10:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 10:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 10:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 10:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 10:47:13 --> Could not find the language line "Home"
ERROR - 2024-12-12 10:47:32 --> Could not find the language line "Home"
ERROR - 2024-12-12 10:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 10:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 10:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 10:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 10:56:15 --> Could not find the language line "Home"
ERROR - 2024-12-12 10:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 11:07:30 --> Could not find the language line "Home"
ERROR - 2024-12-12 11:12:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-12 11:12:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-12 11:12:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-12 11:12:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-12 11:12:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-12 11:12:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-12 11:12:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-12 11:12:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-12 11:12:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-12 11:12:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-12 11:12:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-12 11:12:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-12 11:17:32 --> Could not find the language line "Home"
ERROR - 2024-12-12 11:18:25 --> Could not find the language line "Home"
ERROR - 2024-12-12 11:47:31 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 11:47:33 --> Could not find the language line "Home"
ERROR - 2024-12-12 12:17:32 --> Could not find the language line "Home"
ERROR - 2024-12-12 12:18:28 --> Could not find the language line "Perfume"
ERROR - 2024-12-12 12:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 12:23:30 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-12 12:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 12:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 12:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 12:47:32 --> Could not find the language line "Home"
ERROR - 2024-12-12 13:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 13:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 13:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 13:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 13:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 13:15:54 --> Could not find the language line "Home"
ERROR - 2024-12-12 13:17:32 --> Could not find the language line "Home"
ERROR - 2024-12-12 13:17:34 --> Could not find the language line "Home"
ERROR - 2024-12-12 13:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 13:20:52 --> Could not find the language line "Home"
ERROR - 2024-12-12 13:22:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-12 13:22:29 --> Could not find the language line "Home"
ERROR - 2024-12-12 13:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 13:38:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-12 13:47:32 --> Could not find the language line "Home"
ERROR - 2024-12-12 13:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 13:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 13:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 13:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 13:56:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-12 13:58:57 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:03:05 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:03:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-12 14:05:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-12 14:07:43 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:09:00 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-12-12 14:09:00 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-12-12 14:09:00 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-12-12 14:09:00 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-12-12 14:09:00 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-12 14:09:02 --> 404 Page Not Found: Dsrdeletejson/index
ERROR - 2024-12-12 14:09:04 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-12-12 14:09:04 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-12-12 14:09:04 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2024-12-12 14:09:04 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2024-12-12 14:09:04 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-12-12 14:09:04 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-12-12 14:09:04 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-12 14:09:04 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-12-12 14:10:33 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:11:38 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:13:56 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:14:52 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:16:54 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:17:32 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:20:56 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:22:01 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:28:05 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-12 14:47:33 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:51:50 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:53:13 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:53:45 --> Could not find the language line "Home"
ERROR - 2024-12-12 14:53:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-12 14:53:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-12 15:00:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-12 15:00:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-12 15:08:57 --> Could not find the language line "Home"
ERROR - 2024-12-12 15:10:26 --> Could not find the language line "Home"
ERROR - 2024-12-12 15:11:01 --> Could not find the language line "Home"
ERROR - 2024-12-12 15:13:20 --> Could not find the language line "Home"
ERROR - 2024-12-12 15:16:12 --> Could not find the language line "Home"
ERROR - 2024-12-12 15:17:33 --> Could not find the language line "Home"
ERROR - 2024-12-12 15:35:06 --> Could not find the language line "Home"
ERROR - 2024-12-12 15:40:36 --> Could not find the language line "Home"
ERROR - 2024-12-12 15:42:18 --> Could not find the language line "Home"
ERROR - 2024-12-12 15:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 15:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 15:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 15:46:23 --> Could not find the language line "Home"
ERROR - 2024-12-12 15:46:25 --> Could not find the language line "Home"
ERROR - 2024-12-12 15:47:33 --> Could not find the language line "Home"
ERROR - 2024-12-12 15:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 15:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 15:52:30 --> Could not find the language line "Home"
ERROR - 2024-12-12 15:52:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-12 15:52:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-12 15:52:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-12 15:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 15:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 15:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 16:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 16:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 16:07:43 --> Could not find the language line "Home"
ERROR - 2024-12-12 16:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 16:08:03 --> Could not find the language line "Home"
ERROR - 2024-12-12 16:08:25 --> Could not find the language line "Home"
ERROR - 2024-12-12 16:08:27 --> Could not find the language line "Home"
ERROR - 2024-12-12 16:08:27 --> Could not find the language line "Home"
ERROR - 2024-12-12 16:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 16:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 16:17:33 --> Could not find the language line "Home"
ERROR - 2024-12-12 16:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 16:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 16:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 16:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 16:47:34 --> Could not find the language line "Home"
ERROR - 2024-12-12 16:50:17 --> Could not find the language line "Home"
ERROR - 2024-12-12 17:17:35 --> Could not find the language line "Home"
ERROR - 2024-12-12 17:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 17:32:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-12 17:47:35 --> Could not find the language line "Home"
ERROR - 2024-12-12 17:55:35 --> Could not find the language line "Home"
ERROR - 2024-12-12 18:17:35 --> Could not find the language line "Home"
ERROR - 2024-12-12 18:30:50 --> Could not find the language line "Home"
ERROR - 2024-12-12 18:30:59 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-12 18:31:12 --> Could not find the language line "Home"
ERROR - 2024-12-12 18:31:32 --> Could not find the language line "Home"
ERROR - 2024-12-12 18:31:36 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 18:31:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-12 18:32:01 --> Could not find the language line "Home"
ERROR - 2024-12-12 18:32:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-12 18:32:24 --> Could not find the language line "Home"
ERROR - 2024-12-12 18:32:27 --> Could not find the language line "Socks"
ERROR - 2024-12-12 18:32:40 --> Could not find the language line "Home"
ERROR - 2024-12-12 18:32:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-12 18:32:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-12 18:33:04 --> Could not find the language line "Home"
ERROR - 2024-12-12 18:43:06 --> Could not find the language line "Home"
ERROR - 2024-12-12 18:47:35 --> Could not find the language line "Home"
ERROR - 2024-12-12 18:58:07 --> Could not find the language line "Other"
ERROR - 2024-12-12 19:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 19:17:36 --> Could not find the language line "Home"
ERROR - 2024-12-12 19:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 19:21:12 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-12 19:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 19:31:55 --> Could not find the language line "Home"
ERROR - 2024-12-12 19:47:35 --> Could not find the language line "Home"
ERROR - 2024-12-12 19:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 19:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 19:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 19:58:25 --> Could not find the language line "Home"
ERROR - 2024-12-12 19:58:39 --> Could not find the language line "Home"
ERROR - 2024-12-12 19:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 20:05:33 --> Could not find the language line "Other"
ERROR - 2024-12-12 20:05:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-12 20:06:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-12 20:06:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-12 20:07:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-12 20:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 20:08:27 --> Could not find the language line "Home"
ERROR - 2024-12-12 20:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 20:17:36 --> Could not find the language line "Home"
ERROR - 2024-12-12 20:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 20:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 20:47:36 --> Could not find the language line "Home"
ERROR - 2024-12-12 20:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 21:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 21:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 21:05:45 --> Could not find the language line "Home"
ERROR - 2024-12-12 21:05:45 --> Could not find the language line "Home"
ERROR - 2024-12-12 21:06:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-12 21:06:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-12 21:09:55 --> Could not find the language line "Home"
ERROR - 2024-12-12 21:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 21:17:38 --> Could not find the language line "Home"
ERROR - 2024-12-12 21:20:13 --> Could not find the language line "Home"
ERROR - 2024-12-12 21:22:14 --> Could not find the language line "Home"
ERROR - 2024-12-12 21:25:19 --> Could not find the language line "Socks"
ERROR - 2024-12-12 21:29:38 --> Could not find the language line "Other"
ERROR - 2024-12-12 21:31:46 --> Could not find the language line "Home"
ERROR - 2024-12-12 21:32:19 --> Could not find the language line "Home"
ERROR - 2024-12-12 21:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 21:33:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-12 21:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 21:42:40 --> Could not find the language line "Home"
ERROR - 2024-12-12 21:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 21:46:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-12 21:47:37 --> Could not find the language line "Home"
ERROR - 2024-12-12 21:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 21:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 22:08:21 --> Could not find the language line "Home"
ERROR - 2024-12-12 22:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 22:17:39 --> Could not find the language line "Home"
ERROR - 2024-12-12 22:18:30 --> Could not find the language line "Home"
ERROR - 2024-12-12 22:19:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-12 22:20:25 --> Could not find the language line "Home"
ERROR - 2024-12-12 22:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 22:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 22:43:04 --> Could not find the language line "Home"
ERROR - 2024-12-12 22:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 22:46:07 --> Could not find the language line "Home"
ERROR - 2024-12-12 22:47:40 --> Could not find the language line "Home"
ERROR - 2024-12-12 23:07:12 --> Could not find the language line "Home"
ERROR - 2024-12-12 23:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-12 23:17:15 --> Could not find the language line "Home"
ERROR - 2024-12-12 23:17:39 --> Could not find the language line "Home"
ERROR - 2024-12-12 23:19:14 --> Could not find the language line "Home"
ERROR - 2024-12-12 23:26:14 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-12 23:40:06 --> Could not find the language line "Home"
ERROR - 2024-12-12 23:41:39 --> Could not find the language line "Home"
ERROR - 2024-12-12 23:41:40 --> Could not find the language line "Home"
ERROR - 2024-12-12 23:47:47 --> Could not find the language line "Home"
