<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-05 00:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 00:15:43 --> Could not find the language line "Home"
ERROR - 2024-11-05 00:17:16 --> Could not find the language line "Home"
ERROR - 2024-11-05 00:18:41 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-05 00:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 00:38:00 --> Could not find the language line "Home"
ERROR - 2024-11-05 00:42:39 --> Could not find the language line "Home"
ERROR - 2024-11-05 00:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 00:44:15 --> Could not find the language line "Home"
ERROR - 2024-11-05 00:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 00:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 00:47:15 --> Could not find the language line "Home"
ERROR - 2024-11-05 01:06:09 --> Could not find the language line "Home"
ERROR - 2024-11-05 01:12:52 --> Could not find the language line "Home"
ERROR - 2024-11-05 01:17:22 --> Could not find the language line "Home"
ERROR - 2024-11-05 01:19:25 --> Could not find the language line "Home"
ERROR - 2024-11-05 01:27:22 --> 404 Page Not Found: Storage/settings
ERROR - 2024-11-05 01:34:39 --> Could not find the language line "Home"
ERROR - 2024-11-05 01:36:44 --> Could not find the language line "Home"
ERROR - 2024-11-05 01:39:00 --> Could not find the language line "Home"
ERROR - 2024-11-05 01:45:25 --> Could not find the language line "Home"
ERROR - 2024-11-05 01:47:20 --> Could not find the language line "Home"
ERROR - 2024-11-05 02:01:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-05 02:01:49 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 02:01:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-05 02:01:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-05 02:01:50 --> Could not find the language line "Other"
ERROR - 2024-11-05 02:01:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-05 02:01:50 --> Could not find the language line "Other"
ERROR - 2024-11-05 02:02:16 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 02:03:18 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 02:03:41 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 02:05:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-05 02:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 02:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 02:05:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-05 02:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 02:05:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-05 02:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 02:17:16 --> Could not find the language line "Home"
ERROR - 2024-11-05 02:17:44 --> Could not find the language line "Home"
ERROR - 2024-11-05 02:27:45 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 02:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 02:47:14 --> Could not find the language line "Home"
ERROR - 2024-11-05 03:05:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-05 03:13:05 --> Could not find the language line "Home"
ERROR - 2024-11-05 03:17:16 --> Could not find the language line "Home"
ERROR - 2024-11-05 03:47:17 --> Could not find the language line "Home"
ERROR - 2024-11-05 03:58:53 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-05 04:17:14 --> Could not find the language line "Home"
ERROR - 2024-11-05 04:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 04:47:20 --> Could not find the language line "Home"
ERROR - 2024-11-05 04:55:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-05 05:17:18 --> Could not find the language line "Home"
ERROR - 2024-11-05 05:18:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-05 05:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 05:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 05:32:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-05 05:32:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-05 05:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 05:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 05:32:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-05 05:32:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-05 05:32:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-05 05:32:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-05 05:32:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-05 05:32:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-05 05:32:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-05 05:32:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-05 05:32:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-05 05:47:16 --> Could not find the language line "Home"
ERROR - 2024-11-05 06:03:22 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-05 06:04:16 --> Could not find the language line "Home"
ERROR - 2024-11-05 06:15:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-05 06:17:14 --> Could not find the language line "Home"
ERROR - 2024-11-05 06:35:21 --> Could not find the language line "Home"
ERROR - 2024-11-05 06:35:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-05 06:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 06:45:28 --> Could not find the language line "Home"
ERROR - 2024-11-05 06:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 06:46:03 --> Could not find the language line "Home"
ERROR - 2024-11-05 06:46:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-05 06:46:16 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-05 06:46:18 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-05 06:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 06:47:01 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-05 06:47:05 --> Could not find the language line "Home"
ERROR - 2024-11-05 06:47:07 --> Could not find the language line "Bracelets"
ERROR - 2024-11-05 06:47:09 --> Could not find the language line "Bracelets"
ERROR - 2024-11-05 06:47:10 --> Could not find the language line "Bracelets"
ERROR - 2024-11-05 06:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 06:47:15 --> Could not find the language line "Home"
ERROR - 2024-11-05 06:48:01 --> Could not find the language line "Bracelets"
ERROR - 2024-11-05 06:48:04 --> Could not find the language line "Home"
ERROR - 2024-11-05 06:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 06:49:27 --> Could not find the language line "Home"
ERROR - 2024-11-05 06:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 06:49:55 --> Could not find the language line "Home"
ERROR - 2024-11-05 06:50:05 --> Could not find the language line "Home"
ERROR - 2024-11-05 06:50:07 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-05 06:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 06:50:28 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-05 06:50:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-05 06:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 06:51:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-05 06:51:39 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-05 06:51:41 --> Could not find the language line "Home"
ERROR - 2024-11-05 06:52:01 --> Could not find the language line "Home"
ERROR - 2024-11-05 06:52:04 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-05 06:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 06:52:22 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-05 06:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 07:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 07:09:27 --> Could not find the language line "Home"
ERROR - 2024-11-05 07:17:15 --> Could not find the language line "Home"
ERROR - 2024-11-05 07:22:48 --> Could not find the language line "Home"
ERROR - 2024-11-05 07:26:55 --> Could not find the language line "Home"
ERROR - 2024-11-05 07:27:26 --> Could not find the language line "Other"
ERROR - 2024-11-05 07:29:50 --> Could not find the language line "Home"
ERROR - 2024-11-05 07:30:14 --> Could not find the language line "Home"
ERROR - 2024-11-05 07:30:20 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 07:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 07:31:54 --> Could not find the language line "Home"
ERROR - 2024-11-05 07:47:15 --> Could not find the language line "Home"
ERROR - 2024-11-05 07:48:55 --> Could not find the language line "Perfume"
ERROR - 2024-11-05 07:51:23 --> Could not find the language line "Home"
ERROR - 2024-11-05 07:51:33 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 07:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 07:57:24 --> Could not find the language line "Home"
ERROR - 2024-11-05 07:58:39 --> Could not find the language line "Home"
ERROR - 2024-11-05 07:58:40 --> Could not find the language line "Home"
ERROR - 2024-11-05 08:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:11:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-05 08:17:17 --> Could not find the language line "Home"
ERROR - 2024-11-05 08:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:19:05 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 08:19:20 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 08:19:34 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 08:19:47 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 08:20:34 --> Could not find the language line "Home"
ERROR - 2024-11-05 08:20:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-05 08:21:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-05 08:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:34:35 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-05 08:38:24 --> Could not find the language line "Home"
ERROR - 2024-11-05 08:39:31 --> Could not find the language line "Home"
ERROR - 2024-11-05 08:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:43:24 --> Could not find the language line "Home"
ERROR - 2024-11-05 08:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:44:14 --> Could not find the language line "Home"
ERROR - 2024-11-05 08:47:16 --> Could not find the language line "Home"
ERROR - 2024-11-05 08:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 08:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 09:00:48 --> Could not find the language line "Home"
ERROR - 2024-11-05 09:04:20 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-05 09:04:20 --> Could not find the language line "Home"
ERROR - 2024-11-05 09:04:21 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-05 09:04:21 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-05 09:04:23 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-05 09:04:23 --> Could not find the language line "Home"
ERROR - 2024-11-05 09:04:23 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-05 09:04:24 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-05 09:04:25 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-05 09:04:25 --> Could not find the language line "Home"
ERROR - 2024-11-05 09:04:26 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-05 09:04:26 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-05 09:04:36 --> Could not find the language line "Home"
ERROR - 2024-11-05 09:04:44 --> Could not find the language line "Home"
ERROR - 2024-11-05 09:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 09:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 09:10:25 --> Could not find the language line "Home"
ERROR - 2024-11-05 09:17:16 --> Could not find the language line "Home"
ERROR - 2024-11-05 09:26:20 --> Could not find the language line "Home"
ERROR - 2024-11-05 09:28:50 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 09:29:18 --> Could not find the language line "Home"
ERROR - 2024-11-05 09:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 09:29:49 --> Could not find the language line "Home"
ERROR - 2024-11-05 09:30:45 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 09:31:13 --> Could not find the language line "Home"
ERROR - 2024-11-05 09:31:31 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 09:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 09:40:42 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 09:44:41 --> Could not find the language line "Socks"
ERROR - 2024-11-05 09:44:45 --> Could not find the language line "Home"
ERROR - 2024-11-05 09:47:16 --> Could not find the language line "Home"
ERROR - 2024-11-05 09:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 09:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 09:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 09:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 09:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 10:08:51 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:08:51 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:08:52 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:17:18 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:22:04 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:22:07 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:22:24 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:26:24 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:32:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-05 10:34:26 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:34:33 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 10:34:54 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 10:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 10:35:15 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 10:35:28 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 10:35:42 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 10:35:55 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 10:35:57 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 10:40:01 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:40:02 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:40:12 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:46:39 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:46:39 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:47:17 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 10:56:48 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 10:57:05 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 10:57:24 --> Could not find the language line "Home"
ERROR - 2024-11-05 10:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 11:00:13 --> Could not find the language line "Home"
ERROR - 2024-11-05 11:00:46 --> Could not find the language line "Home"
ERROR - 2024-11-05 11:01:07 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 11:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 11:01:23 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 11:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 11:03:42 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 11:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 11:06:05 --> Could not find the language line "Home"
ERROR - 2024-11-05 11:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 11:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 11:08:54 --> Could not find the language line "Home"
ERROR - 2024-11-05 11:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 11:12:52 --> Could not find the language line "Home"
ERROR - 2024-11-05 11:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 11:17:17 --> Could not find the language line "Home"
ERROR - 2024-11-05 11:20:24 --> Could not find the language line "Home"
ERROR - 2024-11-05 11:21:12 --> Could not find the language line "Home"
ERROR - 2024-11-05 11:21:31 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 11:21:46 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 11:21:59 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 11:22:19 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 11:26:00 --> Could not find the language line "Home"
ERROR - 2024-11-05 11:47:17 --> Could not find the language line "Home"
ERROR - 2024-11-05 11:51:49 --> Could not find the language line "Home"
ERROR - 2024-11-05 11:51:49 --> Could not find the language line "Home"
ERROR - 2024-11-05 11:52:11 --> Could not find the language line "Home"
ERROR - 2024-11-05 11:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 11:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 11:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 11:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 11:57:43 --> Could not find the language line "Home"
ERROR - 2024-11-05 11:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 11:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 12:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 12:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 12:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 12:10:06 --> Could not find the language line "Home"
ERROR - 2024-11-05 12:17:18 --> Could not find the language line "Home"
ERROR - 2024-11-05 12:20:16 --> Could not find the language line "Home"
ERROR - 2024-11-05 12:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 12:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 12:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 12:22:34 --> Could not find the language line "assets"
ERROR - 2024-11-05 12:24:15 --> Could not find the language line "Home"
ERROR - 2024-11-05 12:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 12:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 12:33:51 --> Could not find the language line "Home"
ERROR - 2024-11-05 12:33:52 --> Could not find the language line "Home"
ERROR - 2024-11-05 12:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 12:47:18 --> Could not find the language line "Home"
ERROR - 2024-11-05 12:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:03:33 --> Could not find the language line "Home"
ERROR - 2024-11-05 13:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:06:55 --> Could not find the language line "Home"
ERROR - 2024-11-05 13:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:13:34 --> Could not find the language line "Home"
ERROR - 2024-11-05 13:14:31 --> Could not find the language line "Perfume"
ERROR - 2024-11-05 13:17:19 --> Could not find the language line "Home"
ERROR - 2024-11-05 13:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:23:35 --> Could not find the language line "Home"
ERROR - 2024-11-05 13:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:47:18 --> Could not find the language line "Home"
ERROR - 2024-11-05 13:49:53 --> Could not find the language line "Home"
ERROR - 2024-11-05 13:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 13:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 14:02:55 --> Could not find the language line "Home"
ERROR - 2024-11-05 14:03:12 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 14:03:13 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 14:04:03 --> Could not find the language line "Home"
ERROR - 2024-11-05 14:04:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-05 14:04:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-11-05 14:04:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-05 14:06:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-05 14:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 14:17:19 --> Could not find the language line "Home"
ERROR - 2024-11-05 14:18:55 --> Could not find the language line "Home"
ERROR - 2024-11-05 14:18:58 --> Could not find the language line "Home"
ERROR - 2024-11-05 14:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 14:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 14:47:19 --> Could not find the language line "Home"
ERROR - 2024-11-05 14:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 14:59:39 --> Could not find the language line "Home"
ERROR - 2024-11-05 15:17:20 --> Could not find the language line "Home"
ERROR - 2024-11-05 15:20:52 --> Could not find the language line "Other"
ERROR - 2024-11-05 15:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 15:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 15:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 15:36:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-05 15:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 15:41:09 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-05 15:47:19 --> Could not find the language line "Home"
ERROR - 2024-11-05 16:00:44 --> Could not find the language line "Home"
ERROR - 2024-11-05 16:17:20 --> Could not find the language line "Home"
ERROR - 2024-11-05 16:19:16 --> Could not find the language line "Home"
ERROR - 2024-11-05 16:19:19 --> Could not find the language line "Home"
ERROR - 2024-11-05 16:19:19 --> Could not find the language line "Home"
ERROR - 2024-11-05 16:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 16:47:20 --> Could not find the language line "Home"
ERROR - 2024-11-05 16:55:02 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-05 17:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 17:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 17:17:20 --> Could not find the language line "Home"
ERROR - 2024-11-05 17:27:00 --> Could not find the language line "Home"
ERROR - 2024-11-05 17:40:34 --> 404 Page Not Found: Storage/settings
ERROR - 2024-11-05 17:47:20 --> Could not find the language line "Home"
ERROR - 2024-11-05 17:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 18:05:26 --> Could not find the language line "Home"
ERROR - 2024-11-05 18:09:49 --> Could not find the language line "Home"
ERROR - 2024-11-05 18:13:31 --> Could not find the language line "Home"
ERROR - 2024-11-05 18:16:58 --> Could not find the language line "Home"
ERROR - 2024-11-05 18:17:21 --> Could not find the language line "Home"
ERROR - 2024-11-05 18:29:06 --> Could not find the language line "Home"
ERROR - 2024-11-05 18:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 18:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 18:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 18:43:28 --> Could not find the language line "Home"
ERROR - 2024-11-05 18:43:36 --> Could not find the language line "Bracelets"
ERROR - 2024-11-05 18:43:44 --> Could not find the language line "Bracelets"
ERROR - 2024-11-05 18:44:05 --> Could not find the language line "Bracelets"
ERROR - 2024-11-05 18:44:07 --> Could not find the language line "Bracelets"
ERROR - 2024-11-05 18:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 18:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 18:47:22 --> Could not find the language line "Home"
ERROR - 2024-11-05 18:57:29 --> Could not find the language line "Home"
ERROR - 2024-11-05 19:00:22 --> Could not find the language line "Home"
ERROR - 2024-11-05 19:01:14 --> Could not find the language line "Clothing"
ERROR - 2024-11-05 19:03:19 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-05 19:17:21 --> Could not find the language line "Home"
ERROR - 2024-11-05 19:26:02 --> Could not find the language line "Home"
ERROR - 2024-11-05 19:45:40 --> Could not find the language line "Home"
ERROR - 2024-11-05 19:47:21 --> Could not find the language line "Home"
ERROR - 2024-11-05 20:04:59 --> Could not find the language line "Home"
ERROR - 2024-11-05 20:05:01 --> Could not find the language line "Home"
ERROR - 2024-11-05 20:05:20 --> Could not find the language line "Home"
ERROR - 2024-11-05 20:06:21 --> Could not find the language line "Bracelets"
ERROR - 2024-11-05 20:06:47 --> Could not find the language line "Home"
ERROR - 2024-11-05 20:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 20:07:52 --> Could not find the language line "Bracelets%20and%20Necklaces"
ERROR - 2024-11-05 20:12:54 --> Could not find the language line "Bracelets%20and%20Necklaces"
ERROR - 2024-11-05 20:13:03 --> Could not find the language line "Bracelets%20and%20Necklaces"
ERROR - 2024-11-05 20:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 20:13:21 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-05 20:14:05 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-05 20:16:16 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-05 20:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 20:16:38 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-05 20:17:22 --> Could not find the language line "Home"
ERROR - 2024-11-05 20:23:17 --> Could not find the language line "Home"
ERROR - 2024-11-05 20:33:27 --> Could not find the language line "Home"
ERROR - 2024-11-05 20:47:22 --> Could not find the language line "Home"
ERROR - 2024-11-05 21:09:30 --> Could not find the language line "Home"
ERROR - 2024-11-05 21:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 21:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 21:17:23 --> Could not find the language line "Home"
ERROR - 2024-11-05 21:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 21:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 21:45:54 --> Could not find the language line "Home"
ERROR - 2024-11-05 21:47:23 --> Could not find the language line "Home"
ERROR - 2024-11-05 22:05:52 --> Could not find the language line "Home"
ERROR - 2024-11-05 22:05:54 --> Could not find the language line "Home"
ERROR - 2024-11-05 22:05:57 --> Could not find the language line "Home"
ERROR - 2024-11-05 22:06:02 --> Could not find the language line "Home"
ERROR - 2024-11-05 22:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-05 22:17:23 --> Could not find the language line "Home"
ERROR - 2024-11-05 22:47:24 --> Could not find the language line "Home"
ERROR - 2024-11-05 22:48:07 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-05 22:53:54 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-05 22:54:16 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-05 22:54:40 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-05 22:55:05 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-05 23:09:24 --> Could not find the language line "Home"
ERROR - 2024-11-05 23:10:29 --> Could not find the language line "Home"
ERROR - 2024-11-05 23:13:15 --> Could not find the language line "Home"
ERROR - 2024-11-05 23:14:31 --> Could not find the language line "Home"
ERROR - 2024-11-05 23:17:30 --> Could not find the language line "Home"
ERROR - 2024-11-05 23:30:32 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-05 23:30:32 --> Could not find the language line "Home"
ERROR - 2024-11-05 23:30:32 --> Could not find the language line "Home"
ERROR - 2024-11-05 23:31:04 --> Could not find the language line "Home"
ERROR - 2024-11-05 23:34:06 --> Could not find the language line "Other"
ERROR - 2024-11-05 23:41:36 --> Could not find the language line "Home"
ERROR - 2024-11-05 23:44:34 --> Could not find the language line "Home"
ERROR - 2024-11-05 23:46:05 --> Could not find the language line "Home"
ERROR - 2024-11-05 23:47:30 --> Could not find the language line "Home"
ERROR - 2024-11-05 23:47:37 --> Could not find the language line "Home"
ERROR - 2024-11-05 23:50:47 --> Could not find the language line "Home"
ERROR - 2024-11-05 23:53:47 --> Could not find the language line "Home"
