<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-02 00:11:09 --> Could not find the language line "Home"
ERROR - 2025-02-02 00:21:01 --> Could not find the language line "Home"
ERROR - 2025-02-02 00:22:11 --> Could not find the language line "Home"
ERROR - 2025-02-02 00:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 00:41:08 --> Could not find the language line "Home"
ERROR - 2025-02-02 00:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 00:54:22 --> Could not find the language line "Home"
ERROR - 2025-02-02 00:59:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 01:03:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 01:11:10 --> Could not find the language line "Home"
ERROR - 2025-02-02 01:41:09 --> Could not find the language line "Home"
ERROR - 2025-02-02 01:57:22 --> Could not find the language line "Home"
ERROR - 2025-02-02 02:09:34 --> Could not find the language line "Home"
ERROR - 2025-02-02 02:11:10 --> Could not find the language line "Home"
ERROR - 2025-02-02 02:27:36 --> Could not find the language line "Home"
ERROR - 2025-02-02 02:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 02:41:09 --> Could not find the language line "Home"
ERROR - 2025-02-02 03:11:09 --> Could not find the language line "Home"
ERROR - 2025-02-02 03:11:23 --> Could not find the language line "Home"
ERROR - 2025-02-02 03:18:35 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-02 03:21:19 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2025-02-02 03:27:22 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-02-02 03:29:13 --> Could not find the language line "Bracelets"
ERROR - 2025-02-02 03:41:09 --> Could not find the language line "Home"
ERROR - 2025-02-02 04:03:26 --> Could not find the language line "Home"
ERROR - 2025-02-02 04:11:09 --> Could not find the language line "Home"
ERROR - 2025-02-02 04:34:40 --> Could not find the language line "Clothing"
ERROR - 2025-02-02 04:34:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-02 04:35:19 --> Could not find the language line "Home"
ERROR - 2025-02-02 04:36:59 --> Could not find the language line "Home"
ERROR - 2025-02-02 04:41:10 --> Could not find the language line "Home"
ERROR - 2025-02-02 04:43:40 --> Could not find the language line "Home"
ERROR - 2025-02-02 04:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 04:48:37 --> Could not find the language line "Home"
ERROR - 2025-02-02 04:49:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 04:51:45 --> Could not find the language line "Other"
ERROR - 2025-02-02 04:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 04:59:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 05:02:25 --> Could not find the language line "Home"
ERROR - 2025-02-02 05:10:58 --> 404 Page Not Found: Media/system
ERROR - 2025-02-02 05:11:10 --> Could not find the language line "Home"
ERROR - 2025-02-02 05:12:12 --> Could not find the language line "Home"
ERROR - 2025-02-02 05:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 05:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 05:35:32 --> Could not find the language line "Home"
ERROR - 2025-02-02 05:41:12 --> Could not find the language line "Home"
ERROR - 2025-02-02 05:43:36 --> Could not find the language line "Home"
ERROR - 2025-02-02 05:47:35 --> Could not find the language line "Home"
ERROR - 2025-02-02 05:52:09 --> Could not find the language line "Home"
ERROR - 2025-02-02 06:01:38 --> Could not find the language line "Home"
ERROR - 2025-02-02 06:11:11 --> Could not find the language line "Home"
ERROR - 2025-02-02 06:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 06:33:48 --> Could not find the language line "Home"
ERROR - 2025-02-02 06:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 06:41:11 --> Could not find the language line "Home"
ERROR - 2025-02-02 06:41:43 --> Could not find the language line "Home"
ERROR - 2025-02-02 06:45:41 --> Could not find the language line "Home"
ERROR - 2025-02-02 06:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 06:59:44 --> Could not find the language line "Home"
ERROR - 2025-02-02 07:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 07:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 07:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 07:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 07:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 07:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 07:11:12 --> Could not find the language line "Home"
ERROR - 2025-02-02 07:33:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-02 07:41:12 --> Could not find the language line "Home"
ERROR - 2025-02-02 07:44:21 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-02 07:51:12 --> Could not find the language line "Home"
ERROR - 2025-02-02 08:11:12 --> Could not find the language line "Home"
ERROR - 2025-02-02 08:24:37 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-02 08:24:37 --> Could not find the language line "Home"
ERROR - 2025-02-02 08:32:15 --> Could not find the language line "Other"
ERROR - 2025-02-02 08:41:13 --> Could not find the language line "Home"
ERROR - 2025-02-02 09:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 09:03:32 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-02 09:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 09:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 09:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 09:11:13 --> Could not find the language line "Home"
ERROR - 2025-02-02 09:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 09:40:35 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-02 09:40:35 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-02 09:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 09:41:13 --> Could not find the language line "Home"
ERROR - 2025-02-02 09:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 10:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 10:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 10:11:14 --> Could not find the language line "Home"
ERROR - 2025-02-02 10:16:13 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-02 10:16:13 --> Could not find the language line "Home"
ERROR - 2025-02-02 10:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 10:26:41 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-02 10:30:35 --> Could not find the language line "Home"
ERROR - 2025-02-02 10:41:14 --> Could not find the language line "Home"
ERROR - 2025-02-02 10:54:29 --> Could not find the language line "Home"
ERROR - 2025-02-02 11:11:13 --> Could not find the language line "Home"
ERROR - 2025-02-02 11:35:52 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-02 11:39:47 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-02 11:41:14 --> Could not find the language line "Home"
ERROR - 2025-02-02 11:44:47 --> Could not find the language line "Home"
ERROR - 2025-02-02 11:45:16 --> Could not find the language line "Home"
ERROR - 2025-02-02 11:54:28 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-02 11:56:06 --> Could not find the language line "Home"
ERROR - 2025-02-02 11:59:18 --> Could not find the language line "Home"
ERROR - 2025-02-02 11:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 12:00:00 --> Could not find the language line "Other"
ERROR - 2025-02-02 12:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 12:00:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-02 12:00:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-02 12:00:18 --> Could not find the language line "Home"
ERROR - 2025-02-02 12:00:22 --> Could not find the language line "Home"
ERROR - 2025-02-02 12:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 12:00:55 --> Could not find the language line "Home"
ERROR - 2025-02-02 12:01:01 --> Could not find the language line "Perfume"
ERROR - 2025-02-02 12:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 12:01:35 --> Could not find the language line "Home"
ERROR - 2025-02-02 12:01:42 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-02-02 12:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 12:04:56 --> Could not find the language line "Other"
ERROR - 2025-02-02 12:06:39 --> Could not find the language line "Home"
ERROR - 2025-02-02 12:06:43 --> Could not find the language line "Home"
ERROR - 2025-02-02 12:06:44 --> Could not find the language line "Home"
ERROR - 2025-02-02 12:06:44 --> Could not find the language line "Home"
ERROR - 2025-02-02 12:06:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-02 12:06:53 --> Could not find the language line "Home"
ERROR - 2025-02-02 12:07:05 --> Could not find the language line "Other"
ERROR - 2025-02-02 12:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 12:07:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-02 12:07:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-02 12:07:14 --> Could not find the language line "Other"
ERROR - 2025-02-02 12:07:25 --> Could not find the language line "Other"
ERROR - 2025-02-02 12:07:35 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-02 12:11:14 --> Could not find the language line "Home"
ERROR - 2025-02-02 12:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 12:41:13 --> Could not find the language line "Home"
ERROR - 2025-02-02 12:44:44 --> Could not find the language line "Home"
ERROR - 2025-02-02 12:46:32 --> Could not find the language line "Other"
ERROR - 2025-02-02 12:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 13:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 13:11:14 --> Could not find the language line "Home"
ERROR - 2025-02-02 13:24:17 --> Could not find the language line "Home"
ERROR - 2025-02-02 13:27:13 --> Could not find the language line "Home"
ERROR - 2025-02-02 13:30:12 --> Could not find the language line "Home"
ERROR - 2025-02-02 13:30:14 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-02 13:36:05 --> Could not find the language line "Home"
ERROR - 2025-02-02 13:41:14 --> Could not find the language line "Home"
ERROR - 2025-02-02 13:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 13:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 14:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 14:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 14:07:26 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-02 14:11:14 --> Could not find the language line "Home"
ERROR - 2025-02-02 14:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 14:17:18 --> Could not find the language line "Home"
ERROR - 2025-02-02 14:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 14:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 14:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 14:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 14:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 14:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 14:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 14:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 14:23:32 --> Could not find the language line "Home"
ERROR - 2025-02-02 14:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 14:28:29 --> Could not find the language line "Home"
ERROR - 2025-02-02 14:38:31 --> Could not find the language line "Home"
ERROR - 2025-02-02 14:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 14:41:15 --> Could not find the language line "Home"
ERROR - 2025-02-02 14:48:28 --> Could not find the language line "Home"
ERROR - 2025-02-02 15:11:15 --> Could not find the language line "Home"
ERROR - 2025-02-02 15:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 15:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 15:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 15:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 15:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 15:41:15 --> Could not find the language line "Home"
ERROR - 2025-02-02 15:46:34 --> Could not find the language line "Home"
ERROR - 2025-02-02 15:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 15:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 16:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 16:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 16:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 16:11:17 --> Could not find the language line "Home"
ERROR - 2025-02-02 16:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 16:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 16:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 16:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 16:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 16:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 16:41:16 --> Could not find the language line "Home"
ERROR - 2025-02-02 16:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 17:03:45 --> Could not find the language line "Socks"
ERROR - 2025-02-02 17:11:16 --> Could not find the language line "Home"
ERROR - 2025-02-02 17:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 17:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 17:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 17:38:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 17:41:17 --> Could not find the language line "Home"
ERROR - 2025-02-02 17:42:53 --> Could not find the language line "Home"
ERROR - 2025-02-02 17:43:36 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-02 17:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 17:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 17:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 17:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 17:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 18:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 18:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 18:11:17 --> Could not find the language line "Home"
ERROR - 2025-02-02 18:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 18:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 18:13:53 --> Could not find the language line "Socks"
ERROR - 2025-02-02 18:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 18:14:17 --> Could not find the language line "Socks"
ERROR - 2025-02-02 18:14:27 --> Could not find the language line "Socks"
ERROR - 2025-02-02 18:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 18:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 18:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 18:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 18:36:13 --> Could not find the language line "users"
ERROR - 2025-02-02 18:39:17 --> Could not find the language line "Home"
ERROR - 2025-02-02 18:39:18 --> Could not find the language line "Home"
ERROR - 2025-02-02 18:41:17 --> Could not find the language line "Home"
ERROR - 2025-02-02 18:48:30 --> Could not find the language line "Home"
ERROR - 2025-02-02 18:48:30 --> Could not find the language line "Home"
ERROR - 2025-02-02 18:48:30 --> Could not find the language line "Home"
ERROR - 2025-02-02 18:48:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-02 18:48:30 --> Could not find the language line "Perfume"
ERROR - 2025-02-02 18:48:30 --> Could not find the language line "Clothing"
ERROR - 2025-02-02 18:48:32 --> Could not find the language line "Home"
ERROR - 2025-02-02 18:48:32 --> Could not find the language line "Home"
ERROR - 2025-02-02 18:48:33 --> Could not find the language line "Home"
ERROR - 2025-02-02 18:48:34 --> Could not find the language line "Home"
ERROR - 2025-02-02 18:48:34 --> Could not find the language line "Home"
ERROR - 2025-02-02 18:48:34 --> Could not find the language line "Clothing"
ERROR - 2025-02-02 18:48:34 --> Could not find the language line "Clothing"
ERROR - 2025-02-02 18:48:34 --> 404 Page Not Found: Home/assets
ERROR - 2025-02-02 18:48:34 --> Could not find the language line "Clothing"
ERROR - 2025-02-02 18:48:34 --> 404 Page Not Found: Home/assets
ERROR - 2025-02-02 18:48:34 --> 404 Page Not Found: Home/assets
ERROR - 2025-02-02 18:48:34 --> 404 Page Not Found: Home/assets
ERROR - 2025-02-02 18:48:34 --> 404 Page Not Found: Home/assets
ERROR - 2025-02-02 18:48:34 --> Could not find the language line "Perfume"
ERROR - 2025-02-02 18:48:34 --> Could not find the language line "Perfume"
ERROR - 2025-02-02 18:48:34 --> Could not find the language line "Home"
ERROR - 2025-02-02 18:48:34 --> Could not find the language line "Clothing"
ERROR - 2025-02-02 18:48:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-02 18:48:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-02 18:48:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-02 18:48:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-02 18:48:35 --> Could not find the language line "assets"
ERROR - 2025-02-02 18:48:35 --> Could not find the language line "assets"
ERROR - 2025-02-02 18:48:35 --> Could not find the language line "assets"
ERROR - 2025-02-02 18:48:35 --> Could not find the language line "assets"
ERROR - 2025-02-02 18:48:35 --> Could not find the language line "assets"
ERROR - 2025-02-02 18:48:36 --> Could not find the language line "Clothing"
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:36 --> Could not find the language line "Clothing"
ERROR - 2025-02-02 18:48:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:36 --> Could not find the language line "Clothing"
ERROR - 2025-02-02 18:48:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '25'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '25'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '25'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-02 18:48:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '25'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '25'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-02 18:48:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 18:48:37 --> Could not find the language line "Clothing"
ERROR - 2025-02-02 18:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 18:56:37 --> Could not find the language line "Home"
ERROR - 2025-02-02 18:56:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 19:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 19:11:18 --> Could not find the language line "Home"
ERROR - 2025-02-02 19:41:17 --> Could not find the language line "Home"
ERROR - 2025-02-02 19:49:18 --> 404 Page Not Found: Wp-admin/index
ERROR - 2025-02-02 19:49:26 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2025-02-02 19:49:32 --> 404 Page Not Found: User/login
ERROR - 2025-02-02 19:49:35 --> 404 Page Not Found: Login/index
ERROR - 2025-02-02 19:49:38 --> 404 Page Not Found: Dashboard/index
ERROR - 2025-02-02 19:49:42 --> 404 Page Not Found: Cms/index
ERROR - 2025-02-02 19:49:46 --> 404 Page Not Found: Panel/index
ERROR - 2025-02-02 19:49:50 --> 404 Page Not Found: Backend/index
ERROR - 2025-02-02 20:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 20:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 20:11:18 --> Could not find the language line "Home"
ERROR - 2025-02-02 20:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 20:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 20:17:52 --> Could not find the language line "Home"
ERROR - 2025-02-02 20:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 20:25:15 --> Could not find the language line "Home"
ERROR - 2025-02-02 20:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 20:27:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-02 20:27:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 20:27:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 20:27:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-02 20:27:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 20:27:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 20:27:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-02 20:27:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-02 20:27:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 20:27:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 20:27:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 20:27:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 20:34:15 --> Could not find the language line "Home"
ERROR - 2025-02-02 20:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 20:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 20:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 20:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 20:41:18 --> Could not find the language line "Home"
ERROR - 2025-02-02 20:44:31 --> Could not find the language line "Home"
ERROR - 2025-02-02 20:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 20:51:52 --> Could not find the language line "Home"
ERROR - 2025-02-02 20:53:27 --> Could not find the language line "Home"
ERROR - 2025-02-02 20:53:30 --> Could not find the language line "Home"
ERROR - 2025-02-02 20:53:30 --> Could not find the language line "Home"
ERROR - 2025-02-02 20:55:53 --> Could not find the language line "Home"
ERROR - 2025-02-02 20:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 20:56:16 --> Could not find the language line "Home"
ERROR - 2025-02-02 20:56:18 --> Could not find the language line "Home"
ERROR - 2025-02-02 21:00:11 --> Could not find the language line "Home"
ERROR - 2025-02-02 21:03:34 --> Could not find the language line "Home"
ERROR - 2025-02-02 21:06:54 --> Could not find the language line "Home"
ERROR - 2025-02-02 21:07:10 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-02 21:07:13 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-02 21:07:36 --> Could not find the language line "Home"
ERROR - 2025-02-02 21:07:41 --> Could not find the language line "Clothing"
ERROR - 2025-02-02 21:07:55 --> Could not find the language line "Home"
ERROR - 2025-02-02 21:08:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-02 21:08:19 --> Could not find the language line "Home"
ERROR - 2025-02-02 21:11:18 --> Could not find the language line "Home"
ERROR - 2025-02-02 21:11:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-02 21:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 21:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 21:33:34 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-02 21:41:20 --> Could not find the language line "Home"
ERROR - 2025-02-02 21:43:53 --> Could not find the language line "Home"
ERROR - 2025-02-02 21:45:17 --> Could not find the language line "Home"
ERROR - 2025-02-02 21:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 21:51:50 --> Could not find the language line "Home"
ERROR - 2025-02-02 21:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 21:59:52 --> Could not find the language line "Home"
ERROR - 2025-02-02 22:03:36 --> Could not find the language line "Home"
ERROR - 2025-02-02 22:04:43 --> Could not find the language line "Clothing"
ERROR - 2025-02-02 22:11:20 --> Could not find the language line "Home"
ERROR - 2025-02-02 22:41:27 --> Could not find the language line "Home"
ERROR - 2025-02-02 22:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 22:43:42 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-02 22:55:20 --> Could not find the language line "Clothing"
ERROR - 2025-02-02 23:11:28 --> Could not find the language line "Home"
ERROR - 2025-02-02 23:18:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 23:24:48 --> Could not find the language line "Clothing"
ERROR - 2025-02-02 23:40:25 --> Could not find the language line "Other"
ERROR - 2025-02-02 23:41:21 --> Could not find the language line "Home"
ERROR - 2025-02-02 23:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 23:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 23:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 23:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 23:54:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-02 23:54:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-02 23:54:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 23:54:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 23:54:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-02 23:54:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 23:54:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 23:54:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 23:54:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 23:54:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-02 23:54:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-02 23:54:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-02 23:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-02 23:58:13 --> 404 Page Not Found: Assets/uploads
