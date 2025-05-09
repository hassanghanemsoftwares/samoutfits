<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-09-10 00:01:11 --> Could not find the language line "Home"
ERROR - 2024-09-10 00:22:59 --> Could not find the language line "Home"
ERROR - 2024-09-10 00:53:00 --> Could not find the language line "Home"
ERROR - 2024-09-10 01:23:00 --> Could not find the language line "Home"
ERROR - 2024-09-10 01:53:00 --> Could not find the language line "Home"
ERROR - 2024-09-10 02:23:01 --> Could not find the language line "Home"
ERROR - 2024-09-10 02:53:01 --> Could not find the language line "Home"
ERROR - 2024-09-10 03:08:52 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-09-10 03:23:01 --> Could not find the language line "Home"
ERROR - 2024-09-10 03:53:02 --> Could not find the language line "Home"
ERROR - 2024-09-10 04:23:03 --> Could not find the language line "Home"
ERROR - 2024-09-10 04:24:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-10 04:24:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-10 04:24:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-10 04:24:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-10 04:24:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-10 04:24:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-10 04:24:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-10 04:24:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-10 04:24:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-10 04:24:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-10 04:24:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-10 04:24:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-10 04:24:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-10 04:24:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-10 04:24:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-10 04:24:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-10 04:24:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-10 04:24:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-10 04:42:36 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-09-10 04:50:06 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-09-10 04:53:03 --> Could not find the language line "Home"
ERROR - 2024-09-10 05:23:03 --> Could not find the language line "Home"
ERROR - 2024-09-10 05:44:51 --> Could not find the language line "Home"
ERROR - 2024-09-10 05:53:05 --> Could not find the language line "Home"
ERROR - 2024-09-10 06:09:46 --> Could not find the language line "Home"
ERROR - 2024-09-10 06:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:20:25 --> Could not find the language line "Home"
ERROR - 2024-09-10 06:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:23:03 --> Could not find the language line "Home"
ERROR - 2024-09-10 06:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:53:05 --> Could not find the language line "Home"
ERROR - 2024-09-10 06:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:54:48 --> Could not find the language line "Home"
ERROR - 2024-09-10 06:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:56:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-10 06:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 06:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 07:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 07:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 07:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 07:23:04 --> Could not find the language line "Home"
ERROR - 2024-09-10 07:36:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-10 07:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 07:48:57 --> Could not find the language line "Home"
ERROR - 2024-09-10 07:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 07:49:36 --> Could not find the language line "Home"
ERROR - 2024-09-10 07:49:40 --> Could not find the language line "Socks"
ERROR - 2024-09-10 07:49:47 --> Could not find the language line "Socks"
ERROR - 2024-09-10 07:49:56 --> Could not find the language line "Socks"
ERROR - 2024-09-10 07:50:09 --> Could not find the language line "Socks"
ERROR - 2024-09-10 07:50:17 --> Could not find the language line "Socks"
ERROR - 2024-09-10 07:50:20 --> Could not find the language line "Socks"
ERROR - 2024-09-10 07:50:21 --> Could not find the language line "Socks"
ERROR - 2024-09-10 07:50:21 --> Could not find the language line "Home"
ERROR - 2024-09-10 07:53:05 --> Could not find the language line "Home"
ERROR - 2024-09-10 08:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:23:06 --> Could not find the language line "Home"
ERROR - 2024-09-10 08:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:50:12 --> Could not find the language line "Home"
ERROR - 2024-09-10 08:52:13 --> Could not find the language line "Home"
ERROR - 2024-09-10 08:52:36 --> Could not find the language line "Home"
ERROR - 2024-09-10 08:52:59 --> Could not find the language line "Home"
ERROR - 2024-09-10 08:53:08 --> Could not find the language line "Home"
ERROR - 2024-09-10 08:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 08:57:31 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-10 08:57:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-10 08:59:54 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-10 09:00:10 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-10 09:00:17 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-10 09:00:52 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-10 09:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:16:44 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-10 09:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:17:01 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-10 09:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:23:06 --> Could not find the language line "Home"
ERROR - 2024-09-10 09:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:30:43 --> Could not find the language line "Home"
ERROR - 2024-09-10 09:33:24 --> Could not find the language line "Home"
ERROR - 2024-09-10 09:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 09:53:08 --> Could not find the language line "Home"
ERROR - 2024-09-10 10:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:07:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-10 10:07:25 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-10 10:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:23:07 --> Could not find the language line "Home"
ERROR - 2024-09-10 10:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 10:53:07 --> Could not find the language line "Home"
ERROR - 2024-09-10 11:14:21 --> Could not find the language line "Home"
ERROR - 2024-09-10 11:23:07 --> Could not find the language line "Home"
ERROR - 2024-09-10 11:53:08 --> Could not find the language line "Home"
ERROR - 2024-09-10 12:08:02 --> Could not find the language line "Home"
ERROR - 2024-09-10 12:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:23:08 --> Could not find the language line "Home"
ERROR - 2024-09-10 12:23:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-10 12:28:34 --> 404 Page Not Found: Storage/settings
ERROR - 2024-09-10 12:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 12:53:08 --> Could not find the language line "Home"
ERROR - 2024-09-10 12:53:16 --> Could not find the language line "Home"
ERROR - 2024-09-10 13:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:23:08 --> Could not find the language line "Home"
ERROR - 2024-09-10 13:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:33:49 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-09-10 13:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 13:53:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-10 13:53:10 --> Could not find the language line "Home"
ERROR - 2024-09-10 13:53:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-10 13:53:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-10 13:54:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-10 13:54:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-10 13:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 14:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 14:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 14:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 14:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 14:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 14:20:00 --> Could not find the language line "Home"
ERROR - 2024-09-10 14:22:53 --> Could not find the language line "Home"
ERROR - 2024-09-10 14:23:09 --> Could not find the language line "Home"
ERROR - 2024-09-10 14:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 14:42:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-10 14:42:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-10 14:42:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-10 14:42:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-10 14:42:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-10 14:42:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-10 14:42:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-10 14:42:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-10 14:42:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-10 14:42:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-10 14:42:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-10 14:42:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-10 14:46:14 --> Could not find the language line "Home"
ERROR - 2024-09-10 14:47:00 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-10 14:51:46 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-10 14:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 14:52:52 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-10 14:53:10 --> Could not find the language line "Home"
ERROR - 2024-09-10 15:23:10 --> Could not find the language line "Home"
ERROR - 2024-09-10 15:53:11 --> Could not find the language line "Home"
ERROR - 2024-09-10 16:23:11 --> Could not find the language line "Home"
ERROR - 2024-09-10 16:53:12 --> Could not find the language line "Home"
ERROR - 2024-09-10 17:12:51 --> Could not find the language line "Home"
ERROR - 2024-09-10 17:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 17:14:37 --> Could not find the language line "Home"
ERROR - 2024-09-10 17:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 17:16:45 --> Could not find the language line "Home"
ERROR - 2024-09-10 17:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 17:17:20 --> Could not find the language line "Home"
ERROR - 2024-09-10 17:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 17:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 17:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 17:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 17:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 17:23:12 --> Could not find the language line "Home"
ERROR - 2024-09-10 17:53:12 --> Could not find the language line "Home"
ERROR - 2024-09-10 17:55:50 --> Could not find the language line "Home"
ERROR - 2024-09-10 17:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 18:15:01 --> 404 Page Not Found: FileZillaxml/index
ERROR - 2024-09-10 18:23:14 --> Could not find the language line "Home"
ERROR - 2024-09-10 18:27:45 --> 404 Page Not Found: Assets/mail
ERROR - 2024-09-10 18:28:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-10 18:28:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 100
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-10 18:28:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-10 18:53:13 --> Could not find the language line "Home"
ERROR - 2024-09-10 19:23:13 --> Could not find the language line "Home"
ERROR - 2024-09-10 19:42:00 --> Could not find the language line "Home"
ERROR - 2024-09-10 19:48:57 --> Could not find the language line "Home"
ERROR - 2024-09-10 19:49:33 --> Could not find the language line "Home"
ERROR - 2024-09-10 19:53:14 --> Could not find the language line "Home"
ERROR - 2024-09-10 20:23:14 --> Could not find the language line "Home"
ERROR - 2024-09-10 20:53:14 --> Could not find the language line "Home"
ERROR - 2024-09-10 20:58:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-10 20:58:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 100
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-10 20:58:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-10 21:21:31 --> Could not find the language line "Home"
ERROR - 2024-09-10 21:23:15 --> Could not find the language line "Home"
ERROR - 2024-09-10 21:53:16 --> Could not find the language line "Home"
ERROR - 2024-09-10 22:04:48 --> Could not find the language line "Home"
ERROR - 2024-09-10 22:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 22:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-10 22:23:20 --> Could not find the language line "Home"
ERROR - 2024-09-10 22:53:21 --> Could not find the language line "Home"
ERROR - 2024-09-10 23:23:16 --> Could not find the language line "Home"
ERROR - 2024-09-10 23:24:58 --> Could not find the language line "Home"
ERROR - 2024-09-10 23:53:16 --> Could not find the language line "Home"
