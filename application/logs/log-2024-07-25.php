<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-25 00:18:33 --> Could not find the language line "Home"
ERROR - 2024-07-25 00:45:30 --> Could not find the language line "Home"
ERROR - 2024-07-25 00:45:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-25 00:48:35 --> Could not find the language line "Home"
ERROR - 2024-07-25 01:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 01:18:34 --> Could not find the language line "Home"
ERROR - 2024-07-25 01:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 01:29:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-25 01:47:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-25 01:48:33 --> Could not find the language line "Home"
ERROR - 2024-07-25 01:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 02:18:34 --> Could not find the language line "Home"
ERROR - 2024-07-25 02:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 02:25:17 --> Could not find the language line "Socks"
ERROR - 2024-07-25 02:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 02:48:34 --> Could not find the language line "Home"
ERROR - 2024-07-25 02:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 02:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 03:18:35 --> Could not find the language line "Home"
ERROR - 2024-07-25 03:48:27 --> 404 Page Not Found: Cart/cart
ERROR - 2024-07-25 03:48:36 --> Could not find the language line "Home"
ERROR - 2024-07-25 04:18:40 --> Could not find the language line "Home"
ERROR - 2024-07-25 04:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 04:26:02 --> Could not find the language line "Home"
ERROR - 2024-07-25 04:35:49 --> Could not find the language line "Home"
ERROR - 2024-07-25 04:42:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-25 04:48:36 --> Could not find the language line "Home"
ERROR - 2024-07-25 04:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 05:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 05:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 05:18:36 --> Could not find the language line "Home"
ERROR - 2024-07-25 05:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 05:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 05:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 05:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 05:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 05:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 05:48:37 --> Could not find the language line "Home"
ERROR - 2024-07-25 06:04:03 --> Could not find the language line "Home"
ERROR - 2024-07-25 06:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 06:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 06:18:37 --> Could not find the language line "Home"
ERROR - 2024-07-25 06:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 06:26:48 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-25 06:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 06:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 06:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 06:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 06:48:16 --> Could not find the language line "Home"
ERROR - 2024-07-25 06:48:37 --> Could not find the language line "Home"
ERROR - 2024-07-25 07:03:08 --> Could not find the language line "Home"
ERROR - 2024-07-25 07:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:18:39 --> Could not find the language line "Home"
ERROR - 2024-07-25 07:21:33 --> Could not find the language line "Home"
ERROR - 2024-07-25 07:21:35 --> Could not find the language line "Home"
ERROR - 2024-07-25 07:27:25 --> Could not find the language line "Home"
ERROR - 2024-07-25 07:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:36:06 --> Could not find the language line "Home"
ERROR - 2024-07-25 07:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:38:33 --> Could not find the language line "Home"
ERROR - 2024-07-25 07:38:52 --> Could not find the language line "Home"
ERROR - 2024-07-25 07:39:00 --> Could not find the language line "Home"
ERROR - 2024-07-25 07:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:48:39 --> Could not find the language line "Home"
ERROR - 2024-07-25 07:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 07:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:12:20 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-25 08:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:18:38 --> Could not find the language line "Home"
ERROR - 2024-07-25 08:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:19:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-25 08:19:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-25 08:19:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-25 08:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:25:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-25 08:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:31:16 --> Could not find the language line "Home"
ERROR - 2024-07-25 08:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:48:40 --> Could not find the language line "Home"
ERROR - 2024-07-25 08:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 08:57:52 --> Could not find the language line "Home"
ERROR - 2024-07-25 09:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:04:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-25 09:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:18:39 --> Could not find the language line "Home"
ERROR - 2024-07-25 09:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:34:52 --> Could not find the language line "Home"
ERROR - 2024-07-25 09:41:30 --> Could not find the language line "Home"
ERROR - 2024-07-25 09:41:30 --> Could not find the language line "Home"
ERROR - 2024-07-25 09:41:31 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-07-25 09:41:31 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-07-25 09:41:32 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-07-25 09:41:32 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-07-25 09:48:40 --> Could not find the language line "Home"
ERROR - 2024-07-25 09:53:49 --> Could not find the language line "Home"
ERROR - 2024-07-25 09:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 09:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 10:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 10:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 10:18:40 --> Could not find the language line "Home"
ERROR - 2024-07-25 10:22:37 --> Could not find the language line "Home"
ERROR - 2024-07-25 10:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 10:26:28 --> Could not find the language line "Home"
ERROR - 2024-07-25 10:26:37 --> Could not find the language line "Home"
ERROR - 2024-07-25 10:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 10:44:45 --> Could not find the language line "Home"
ERROR - 2024-07-25 10:48:02 --> Could not find the language line "Home"
ERROR - 2024-07-25 10:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 10:48:41 --> Could not find the language line "Home"
ERROR - 2024-07-25 10:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 10:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 10:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 10:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 10:56:24 --> Could not find the language line "Home"
ERROR - 2024-07-25 10:57:30 --> Could not find the language line "Home"
ERROR - 2024-07-25 10:57:42 --> Could not find the language line "Clothing"
ERROR - 2024-07-25 10:57:53 --> Could not find the language line "Clothing"
ERROR - 2024-07-25 10:57:58 --> Could not find the language line "Clothing"
ERROR - 2024-07-25 11:04:55 --> Could not find the language line "Home"
ERROR - 2024-07-25 11:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 11:18:40 --> Could not find the language line "Home"
ERROR - 2024-07-25 11:25:29 --> Could not find the language line "Home"
ERROR - 2024-07-25 11:28:32 --> Could not find the language line "Other"
ERROR - 2024-07-25 11:28:34 --> Could not find the language line "Home"
ERROR - 2024-07-25 11:32:07 --> Could not find the language line "Socks"
ERROR - 2024-07-25 11:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 11:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 11:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 11:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 11:48:41 --> Could not find the language line "Home"
ERROR - 2024-07-25 11:51:14 --> Could not find the language line "Home"
ERROR - 2024-07-25 11:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 11:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 11:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:04:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-25 12:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:18:41 --> Could not find the language line "Home"
ERROR - 2024-07-25 12:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:25:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-25 12:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:25:48 --> Could not find the language line "Home"
ERROR - 2024-07-25 12:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:42:00 --> Could not find the language line "Home"
ERROR - 2024-07-25 12:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:45:03 --> Could not find the language line "Home"
ERROR - 2024-07-25 12:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:45:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-25 12:45:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-25 12:45:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-25 12:45:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-25 12:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-25 12:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-25 12:45:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-25 12:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-25 12:45:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-25 12:45:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-25 12:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-25 12:45:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-25 12:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 12:48:41 --> Could not find the language line "Home"
ERROR - 2024-07-25 12:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:04:33 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:07:36 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:07:47 --> Could not find the language line "Clothing"
ERROR - 2024-07-25 13:08:09 --> Could not find the language line "Clothing"
ERROR - 2024-07-25 13:08:33 --> Could not find the language line "Clothing"
ERROR - 2024-07-25 13:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:12:11 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:12:27 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:12:32 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:12:48 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:12:49 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:13:06 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:13:08 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:13:09 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:13:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-25 13:13:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-25 13:13:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c886%' OR a.description LIKE '%c886%' OR a.color LIKE '%c886%' OR a.barcode LIKE '%c886%' OR a.category LIKE '%c886%' OR a.sub_category LIKE '%c886%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-25 13:13:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-25 13:13:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c886%' OR a.description LIKE '%c886%' OR a.color LIKE '%c886%' OR a.barcode LIKE '%c886%' OR a.category LIKE '%c886%' OR a.sub_category LIKE '%c886%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-25 13:13:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-25 13:13:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-25 13:13:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-25 13:13:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c886%' OR a.description LIKE '%c886%' OR a.color LIKE '%c886%' OR a.barcode LIKE '%c886%' OR a.category LIKE '%c886%' OR a.sub_category LIKE '%c886%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-25 13:13:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-25 13:13:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c886%' OR a.description LIKE '%c886%' OR a.color LIKE '%c886%' OR a.barcode LIKE '%c886%' OR a.category LIKE '%c886%' OR a.sub_category LIKE '%c886%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-25 13:13:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-25 13:18:42 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:29:22 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:29:51 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:29:59 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:29:59 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:30:14 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:30:28 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:31:00 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:41:37 --> Could not find the language line "Other"
ERROR - 2024-07-25 13:41:41 --> Could not find the language line "Other"
ERROR - 2024-07-25 13:46:22 --> 404 Page Not Found: Storage/settings
ERROR - 2024-07-25 13:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:48:42 --> Could not find the language line "Home"
ERROR - 2024-07-25 13:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 13:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 14:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 14:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 14:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 14:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 14:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 14:14:17 --> Could not find the language line "Home"
ERROR - 2024-07-25 14:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 14:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 14:18:42 --> Could not find the language line "Home"
ERROR - 2024-07-25 14:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 14:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 14:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 14:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 14:48:43 --> Could not find the language line "Home"
ERROR - 2024-07-25 14:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 14:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 14:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 15:06:08 --> Could not find the language line "Home"
ERROR - 2024-07-25 15:06:24 --> Could not find the language line "Clothing"
ERROR - 2024-07-25 15:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 15:07:14 --> Could not find the language line "Clothing"
ERROR - 2024-07-25 15:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 15:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 15:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 15:18:43 --> Could not find the language line "Home"
ERROR - 2024-07-25 15:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 15:48:44 --> Could not find the language line "Home"
ERROR - 2024-07-25 16:18:44 --> Could not find the language line "Home"
ERROR - 2024-07-25 16:22:52 --> Could not find the language line "Home"
ERROR - 2024-07-25 16:48:45 --> Could not find the language line "Home"
ERROR - 2024-07-25 17:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 17:03:45 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-25 17:05:04 --> Could not find the language line "Home"
ERROR - 2024-07-25 17:05:15 --> Could not find the language line "Home"
ERROR - 2024-07-25 17:05:46 --> Could not find the language line "Clothing"
ERROR - 2024-07-25 17:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 17:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 17:18:44 --> Could not find the language line "Home"
ERROR - 2024-07-25 17:28:47 --> Could not find the language line "Home"
ERROR - 2024-07-25 17:46:44 --> Could not find the language line "Home"
ERROR - 2024-07-25 17:48:45 --> Could not find the language line "Home"
ERROR - 2024-07-25 18:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 18:18:45 --> Could not find the language line "Home"
ERROR - 2024-07-25 18:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 18:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 18:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 18:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 18:31:50 --> Could not find the language line "Home"
ERROR - 2024-07-25 18:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 18:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 18:38:58 --> Could not find the language line "Home"
ERROR - 2024-07-25 18:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 18:39:28 --> Could not find the language line "Home"
ERROR - 2024-07-25 18:39:45 --> Could not find the language line "Socks"
ERROR - 2024-07-25 18:39:54 --> Could not find the language line "Home"
ERROR - 2024-07-25 18:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 18:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 18:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 18:46:10 --> Could not find the language line "Home"
ERROR - 2024-07-25 18:47:01 --> Could not find the language line "Home"
ERROR - 2024-07-25 18:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 18:48:46 --> Could not find the language line "Home"
ERROR - 2024-07-25 18:58:27 --> Could not find the language line "Home"
ERROR - 2024-07-25 19:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 19:10:13 --> Could not find the language line "Home"
ERROR - 2024-07-25 19:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 19:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 19:18:46 --> Could not find the language line "Home"
ERROR - 2024-07-25 19:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 19:29:16 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-25 19:29:38 --> Could not find the language line "Clothing"
ERROR - 2024-07-25 19:29:41 --> Could not find the language line "Bracelets"
ERROR - 2024-07-25 19:29:45 --> Could not find the language line "Clothing"
ERROR - 2024-07-25 19:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 19:30:34 --> Could not find the language line "Home"
ERROR - 2024-07-25 19:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 19:47:54 --> Could not find the language line "Home"
ERROR - 2024-07-25 19:48:47 --> Could not find the language line "Home"
ERROR - 2024-07-25 19:49:40 --> Could not find the language line "Home"
ERROR - 2024-07-25 19:49:56 --> Could not find the language line "Clothing"
ERROR - 2024-07-25 19:50:27 --> Could not find the language line "Home"
ERROR - 2024-07-25 19:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 19:51:29 --> Could not find the language line "Home"
ERROR - 2024-07-25 19:51:32 --> Could not find the language line "Bracelets"
ERROR - 2024-07-25 19:51:58 --> Could not find the language line "Home"
ERROR - 2024-07-25 19:52:22 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-25 19:52:40 --> Could not find the language line "Home"
ERROR - 2024-07-25 19:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 20:13:46 --> Could not find the language line "Home"
ERROR - 2024-07-25 20:18:47 --> Could not find the language line "Home"
ERROR - 2024-07-25 20:26:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-25 20:26:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-25 20:26:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-25 20:26:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-25 20:26:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-25 20:26:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-25 20:26:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-25 20:26:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-25 20:26:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-25 20:26:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-25 20:26:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-25 20:26:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-25 20:48:48 --> Could not find the language line "Home"
ERROR - 2024-07-25 20:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 21:18:48 --> Could not find the language line "Home"
ERROR - 2024-07-25 21:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 21:48:51 --> Could not find the language line "Home"
ERROR - 2024-07-25 22:18:52 --> Could not find the language line "Home"
ERROR - 2024-07-25 22:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 22:48:50 --> Could not find the language line "Home"
ERROR - 2024-07-25 23:18:49 --> Could not find the language line "Home"
ERROR - 2024-07-25 23:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 23:48:53 --> Could not find the language line "Home"
ERROR - 2024-07-25 23:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 23:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 23:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-25 23:59:54 --> 404 Page Not Found: Assets/css
