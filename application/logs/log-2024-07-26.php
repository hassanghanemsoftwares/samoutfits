<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-26 00:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 00:16:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-26 00:16:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-26 00:16:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-26 00:16:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-26 00:16:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-26 00:16:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-26 00:16:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-26 00:16:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-26 00:16:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-26 00:16:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-26 00:16:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-26 00:16:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-26 00:18:50 --> Could not find the language line "Home"
ERROR - 2024-07-26 00:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 00:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 00:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 00:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 00:48:52 --> Could not find the language line "Home"
ERROR - 2024-07-26 01:05:16 --> Could not find the language line "Disclaimer"
ERROR - 2024-07-26 01:18:51 --> Could not find the language line "Home"
ERROR - 2024-07-26 01:22:09 --> Could not find the language line "Socks"
ERROR - 2024-07-26 01:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 01:48:51 --> Could not find the language line "Home"
ERROR - 2024-07-26 02:18:51 --> Could not find the language line "Home"
ERROR - 2024-07-26 02:45:42 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-07-26 02:48:51 --> Could not find the language line "Home"
ERROR - 2024-07-26 02:56:58 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-07-26 03:15:00 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-26 03:18:53 --> Could not find the language line "Home"
ERROR - 2024-07-26 03:48:59 --> Could not find the language line "Home"
ERROR - 2024-07-26 04:06:18 --> 404 Page Not Found: Cart/cart
ERROR - 2024-07-26 04:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 04:18:53 --> Could not find the language line "Home"
ERROR - 2024-07-26 04:38:54 --> Could not find the language line "Home"
ERROR - 2024-07-26 04:39:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-26 04:46:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-26 04:46:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-26 04:46:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-26 04:46:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-26 04:46:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-26 04:46:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-26 04:46:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-26 04:46:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-26 04:46:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-26 04:46:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-26 04:46:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-26 04:46:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-26 04:48:54 --> Could not find the language line "Home"
ERROR - 2024-07-26 04:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 04:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 05:18:53 --> Could not find the language line "Home"
ERROR - 2024-07-26 05:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 05:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 05:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 05:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 05:45:34 --> Could not find the language line "Home"
ERROR - 2024-07-26 05:48:53 --> Could not find the language line "Home"
ERROR - 2024-07-26 05:53:12 --> Could not find the language line "Other"
ERROR - 2024-07-26 05:54:13 --> Could not find the language line "Socks"
ERROR - 2024-07-26 05:57:13 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-26 06:04:01 --> Could not find the language line "Home"
ERROR - 2024-07-26 06:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 06:18:54 --> Could not find the language line "Home"
ERROR - 2024-07-26 06:19:23 --> Could not find the language line "Home"
ERROR - 2024-07-26 06:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 06:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 06:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 06:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 06:37:34 --> Could not find the language line "Home"
ERROR - 2024-07-26 06:44:03 --> Could not find the language line "Home"
ERROR - 2024-07-26 06:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 06:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 06:48:54 --> Could not find the language line "Home"
ERROR - 2024-07-26 06:49:37 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 06:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 06:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 06:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:09:36 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 07:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:10:05 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 07:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:11:10 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 07:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:16:53 --> Could not find the language line "Home"
ERROR - 2024-07-26 07:18:54 --> Could not find the language line "Home"
ERROR - 2024-07-26 07:24:53 --> Could not find the language line "Home"
ERROR - 2024-07-26 07:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:37:34 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 07:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:46:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-26 07:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 07:48:55 --> Could not find the language line "Home"
ERROR - 2024-07-26 07:51:10 --> Could not find the language line "Home"
ERROR - 2024-07-26 07:51:21 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 07:51:51 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 07:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:12:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-26 08:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:18:55 --> Could not find the language line "Home"
ERROR - 2024-07-26 08:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:48:56 --> Could not find the language line "Home"
ERROR - 2024-07-26 08:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 08:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:13:15 --> Could not find the language line "Home"
ERROR - 2024-07-26 09:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:18:56 --> Could not find the language line "Home"
ERROR - 2024-07-26 09:24:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-26 09:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:26:05 --> Could not find the language line "Home"
ERROR - 2024-07-26 09:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:26:35 --> Could not find the language line "Home"
ERROR - 2024-07-26 09:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 09:48:56 --> Could not find the language line "Home"
ERROR - 2024-07-26 09:56:21 --> Could not find the language line "Home"
ERROR - 2024-07-26 10:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:18:57 --> Could not find the language line "Home"
ERROR - 2024-07-26 10:18:58 --> Could not find the language line "Home"
ERROR - 2024-07-26 10:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:19:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-26 10:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:22:51 --> Could not find the language line "Home"
ERROR - 2024-07-26 10:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 10:34:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-26 10:49:00 --> Could not find the language line "Home"
ERROR - 2024-07-26 10:49:53 --> Could not find the language line "Home"
ERROR - 2024-07-26 10:49:53 --> Could not find the language line "Home"
ERROR - 2024-07-26 10:51:11 --> Could not find the language line "Home"
ERROR - 2024-07-26 11:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 11:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 11:16:17 --> Could not find the language line "Other"
ERROR - 2024-07-26 11:18:57 --> Could not find the language line "Home"
ERROR - 2024-07-26 11:27:03 --> Could not find the language line "Home"
ERROR - 2024-07-26 11:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 11:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 11:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 11:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 11:48:58 --> Could not find the language line "Home"
ERROR - 2024-07-26 11:54:49 --> Could not find the language line "Home"
ERROR - 2024-07-26 11:56:03 --> Could not find the language line "Home"
ERROR - 2024-07-26 11:56:08 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 11:56:14 --> Could not find the language line "Home"
ERROR - 2024-07-26 12:03:57 --> Could not find the language line "Home"
ERROR - 2024-07-26 12:05:50 --> Could not find the language line "Home"
ERROR - 2024-07-26 12:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:13:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-26 12:13:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-26 12:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:15:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-26 12:15:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-26 12:15:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-26 12:15:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-26 12:15:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-26 12:15:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-26 12:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:17:56 --> Could not find the language line "Home"
ERROR - 2024-07-26 12:18:58 --> Could not find the language line "Home"
ERROR - 2024-07-26 12:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:28:02 --> Could not find the language line "Home"
ERROR - 2024-07-26 12:32:50 --> Could not find the language line "Home"
ERROR - 2024-07-26 12:34:16 --> Could not find the language line "Home"
ERROR - 2024-07-26 12:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:37:50 --> Could not find the language line "Home"
ERROR - 2024-07-26 12:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 12:48:59 --> Could not find the language line "Home"
ERROR - 2024-07-26 13:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:13:44 --> Could not find the language line "Home"
ERROR - 2024-07-26 13:18:59 --> Could not find the language line "Home"
ERROR - 2024-07-26 13:21:44 --> 404 Page Not Found: Cart/cart
ERROR - 2024-07-26 13:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:41:13 --> Could not find the language line "Home"
ERROR - 2024-07-26 13:42:36 --> Could not find the language line "Home"
ERROR - 2024-07-26 13:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 13:49:00 --> Could not find the language line "Home"
ERROR - 2024-07-26 13:56:17 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 13:56:23 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 13:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 14:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 14:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 14:09:59 --> Could not find the language line "Socks"
ERROR - 2024-07-26 14:13:57 --> Could not find the language line "Home"
ERROR - 2024-07-26 14:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 14:19:00 --> Could not find the language line "Home"
ERROR - 2024-07-26 14:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 14:21:32 --> Could not find the language line "Home"
ERROR - 2024-07-26 14:21:37 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 14:21:48 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 14:21:56 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 14:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 14:22:38 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 14:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 14:22:55 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 14:22:56 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 14:23:03 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 14:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 14:23:13 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 14:23:15 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 14:23:17 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 14:23:19 --> Could not find the language line "Home"
ERROR - 2024-07-26 14:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 14:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 14:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 14:43:59 --> Could not find the language line "Home"
ERROR - 2024-07-26 14:49:00 --> Could not find the language line "Home"
ERROR - 2024-07-26 15:19:01 --> Could not find the language line "Home"
ERROR - 2024-07-26 15:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 15:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 15:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 15:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 15:49:01 --> Could not find the language line "Home"
ERROR - 2024-07-26 15:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 16:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 16:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 16:13:30 --> Could not find the language line "Home"
ERROR - 2024-07-26 16:14:06 --> Could not find the language line "Home"
ERROR - 2024-07-26 16:19:01 --> Could not find the language line "Home"
ERROR - 2024-07-26 16:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 16:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 16:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 16:31:18 --> Could not find the language line "Home"
ERROR - 2024-07-26 16:31:57 --> Could not find the language line "Bracelets"
ERROR - 2024-07-26 16:49:01 --> Could not find the language line "Home"
ERROR - 2024-07-26 17:11:15 --> Could not find the language line "Home"
ERROR - 2024-07-26 17:13:35 --> Could not find the language line "Home"
ERROR - 2024-07-26 17:19:02 --> Could not find the language line "Home"
ERROR - 2024-07-26 17:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 17:37:29 --> Could not find the language line "Socks"
ERROR - 2024-07-26 17:49:03 --> Could not find the language line "Home"
ERROR - 2024-07-26 17:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 17:53:14 --> Could not find the language line "Home"
ERROR - 2024-07-26 17:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 17:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 18:13:53 --> Could not find the language line "Home"
ERROR - 2024-07-26 18:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 18:19:03 --> Could not find the language line "Home"
ERROR - 2024-07-26 18:19:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-26 18:19:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-26 18:19:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-26 18:19:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-26 18:19:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-26 18:19:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-26 18:19:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-26 18:19:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-26 18:19:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-26 18:19:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-26 18:19:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-26 18:19:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-26 18:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 18:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 18:41:34 --> Could not find the language line "Home"
ERROR - 2024-07-26 18:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 18:49:04 --> Could not find the language line "Home"
ERROR - 2024-07-26 19:05:18 --> Could not find the language line "Home"
ERROR - 2024-07-26 19:12:44 --> Could not find the language line "Home"
ERROR - 2024-07-26 19:12:49 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-26 19:19:03 --> Could not find the language line "Home"
ERROR - 2024-07-26 19:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 19:49:04 --> Could not find the language line "Home"
ERROR - 2024-07-26 19:51:52 --> Could not find the language line "Home"
ERROR - 2024-07-26 20:12:21 --> Could not find the language line "Home"
ERROR - 2024-07-26 20:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 20:12:52 --> Could not find the language line "Home"
ERROR - 2024-07-26 20:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 20:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 20:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 20:18:09 --> Could not find the language line "Home"
ERROR - 2024-07-26 20:18:16 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-26 20:18:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-26 20:18:49 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-26 20:18:52 --> Could not find the language line "Home"
ERROR - 2024-07-26 20:19:04 --> Could not find the language line "Home"
ERROR - 2024-07-26 20:19:20 --> Could not find the language line "Home"
ERROR - 2024-07-26 20:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 20:47:28 --> Could not find the language line "Home"
ERROR - 2024-07-26 20:47:29 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 20:47:30 --> Could not find the language line "Perfume"
ERROR - 2024-07-26 20:47:30 --> Could not find the language line "Bracelets"
ERROR - 2024-07-26 20:47:31 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 20:47:33 --> Could not find the language line "Other"
ERROR - 2024-07-26 20:47:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-26 20:47:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-26 20:47:33 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 20:47:34 --> Could not find the language line "Other"
ERROR - 2024-07-26 20:47:34 --> Could not find the language line "Clothing"
ERROR - 2024-07-26 20:47:36 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-26 20:49:05 --> Could not find the language line "Home"
ERROR - 2024-07-26 21:19:05 --> Could not find the language line "Home"
ERROR - 2024-07-26 21:19:51 --> Could not find the language line "Home"
ERROR - 2024-07-26 21:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 21:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 21:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 21:49:06 --> Could not find the language line "Home"
ERROR - 2024-07-26 22:07:12 --> Could not find the language line "Home"
ERROR - 2024-07-26 22:10:29 --> Could not find the language line "Other"
ERROR - 2024-07-26 22:17:27 --> Could not find the language line "Socks"
ERROR - 2024-07-26 22:19:07 --> Could not find the language line "Home"
ERROR - 2024-07-26 22:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 22:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 22:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 22:45:46 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-07-26 22:49:06 --> Could not find the language line "Home"
ERROR - 2024-07-26 23:19:09 --> Could not find the language line "Home"
ERROR - 2024-07-26 23:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 23:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-26 23:49:09 --> Could not find the language line "Home"
ERROR - 2024-07-26 23:56:49 --> Could not find the language line "Home"
