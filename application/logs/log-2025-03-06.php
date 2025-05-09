<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-06 00:16:10 --> Could not find the language line "Home"
ERROR - 2025-03-06 00:46:13 --> Could not find the language line "Home"
ERROR - 2025-03-06 01:01:19 --> Could not find the language line "Home"
ERROR - 2025-03-06 01:16:11 --> Could not find the language line "Home"
ERROR - 2025-03-06 01:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 01:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 01:35:34 --> Could not find the language line "Home"
ERROR - 2025-03-06 01:40:37 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-06 01:40:39 --> Could not find the language line "Home"
ERROR - 2025-03-06 01:40:53 --> Could not find the language line "Clothing"
ERROR - 2025-03-06 01:40:58 --> Could not find the language line "Clothing"
ERROR - 2025-03-06 01:40:58 --> Could not find the language line "Clothing"
ERROR - 2025-03-06 01:46:12 --> Could not find the language line "Home"
ERROR - 2025-03-06 01:48:13 --> Could not find the language line "Clothing"
ERROR - 2025-03-06 01:50:54 --> Could not find the language line "Clothing"
ERROR - 2025-03-06 02:15:33 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-06 02:16:12 --> Could not find the language line "Home"
ERROR - 2025-03-06 02:21:24 --> Could not find the language line "Home"
ERROR - 2025-03-06 02:26:45 --> Could not find the language line "Home"
ERROR - 2025-03-06 02:32:22 --> Could not find the language line "Home"
ERROR - 2025-03-06 02:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 02:43:50 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-06 02:46:13 --> Could not find the language line "Home"
ERROR - 2025-03-06 02:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 03:16:12 --> Could not find the language line "Home"
ERROR - 2025-03-06 03:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 03:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 03:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 03:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 03:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 03:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 03:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 03:46:17 --> Could not find the language line "Home"
ERROR - 2025-03-06 03:59:36 --> Could not find the language line "Disclaimer"
ERROR - 2025-03-06 04:16:12 --> Could not find the language line "Home"
ERROR - 2025-03-06 04:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 04:28:52 --> Could not find the language line "Home"
ERROR - 2025-03-06 04:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 04:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 04:41:08 --> Could not find the language line "Home"
ERROR - 2025-03-06 04:41:43 --> Could not find the language line "Home"
ERROR - 2025-03-06 04:46:12 --> Could not find the language line "Home"
ERROR - 2025-03-06 04:46:48 --> Could not find the language line "Home"
ERROR - 2025-03-06 04:57:07 --> Could not find the language line "Home"
ERROR - 2025-03-06 05:16:13 --> Could not find the language line "Home"
ERROR - 2025-03-06 05:24:01 --> Could not find the language line "Home"
ERROR - 2025-03-06 05:24:25 --> Could not find the language line "Home"
ERROR - 2025-03-06 05:26:15 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-06 05:27:54 --> Could not find the language line "Home"
ERROR - 2025-03-06 05:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 05:34:33 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-06 05:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 05:40:36 --> Could not find the language line "Home"
ERROR - 2025-03-06 05:45:25 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-06 05:46:13 --> Could not find the language line "Home"
ERROR - 2025-03-06 05:46:42 --> Could not find the language line "Home"
ERROR - 2025-03-06 05:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 05:51:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-06 05:56:51 --> Could not find the language line "Home"
ERROR - 2025-03-06 06:16:22 --> Could not find the language line "Home"
ERROR - 2025-03-06 06:26:00 --> Could not find the language line "Home"
ERROR - 2025-03-06 06:45:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-06 06:46:13 --> Could not find the language line "Home"
ERROR - 2025-03-06 07:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 07:12:21 --> Could not find the language line "Home"
ERROR - 2025-03-06 07:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 07:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 07:16:14 --> Could not find the language line "Home"
ERROR - 2025-03-06 07:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 07:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 07:33:26 --> Could not find the language line "Home"
ERROR - 2025-03-06 07:35:35 --> Could not find the language line "Home"
ERROR - 2025-03-06 07:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 07:46:14 --> Could not find the language line "Home"
ERROR - 2025-03-06 07:57:34 --> Could not find the language line "Home"
ERROR - 2025-03-06 08:00:30 --> Could not find the language line "Home"
ERROR - 2025-03-06 08:00:36 --> 404 Page Not Found: Assets/mail
ERROR - 2025-03-06 08:13:20 --> Could not find the language line "Socks"
ERROR - 2025-03-06 08:16:14 --> Could not find the language line "Home"
ERROR - 2025-03-06 08:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 08:43:32 --> Could not find the language line "Home"
ERROR - 2025-03-06 08:44:02 --> Could not find the language line "Home"
ERROR - 2025-03-06 08:46:16 --> Could not find the language line "Home"
ERROR - 2025-03-06 08:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 09:03:01 --> Could not find the language line "Home"
ERROR - 2025-03-06 09:08:11 --> Could not find the language line "Home"
ERROR - 2025-03-06 09:13:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-06 09:13:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-06 09:15:29 --> Could not find the language line "Home"
ERROR - 2025-03-06 09:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 09:16:15 --> Could not find the language line "Home"
ERROR - 2025-03-06 09:16:16 --> Could not find the language line "Home"
ERROR - 2025-03-06 09:19:29 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-06 09:19:30 --> Could not find the language line "Home"
ERROR - 2025-03-06 09:19:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-06 09:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 09:46:15 --> Could not find the language line "Home"
ERROR - 2025-03-06 09:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:09:16 --> Could not find the language line "Home"
ERROR - 2025-03-06 10:16:15 --> Could not find the language line "Home"
ERROR - 2025-03-06 10:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:40:52 --> Could not find the language line "Home"
ERROR - 2025-03-06 10:46:17 --> Could not find the language line "Home"
ERROR - 2025-03-06 10:54:49 --> Could not find the language line "Home"
ERROR - 2025-03-06 10:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 10:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 11:04:41 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-06 11:16:17 --> Could not find the language line "Home"
ERROR - 2025-03-06 11:20:42 --> Could not find the language line "Home"
ERROR - 2025-03-06 11:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 11:46:17 --> Could not find the language line "Home"
ERROR - 2025-03-06 11:46:39 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-06 11:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 11:56:09 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-06 12:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 12:16:17 --> Could not find the language line "Home"
ERROR - 2025-03-06 12:19:44 --> Could not find the language line "Home"
ERROR - 2025-03-06 12:19:47 --> Could not find the language line "Home"
ERROR - 2025-03-06 12:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 12:46:17 --> Could not find the language line "Home"
ERROR - 2025-03-06 12:46:57 --> Could not find the language line "Home"
ERROR - 2025-03-06 12:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 13:12:21 --> Could not find the language line "Home"
ERROR - 2025-03-06 13:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 13:15:42 --> Could not find the language line "Home"
ERROR - 2025-03-06 13:16:17 --> Could not find the language line "Home"
ERROR - 2025-03-06 13:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 13:20:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-06 13:20:04 --> Could not find the language line "Home"
ERROR - 2025-03-06 13:23:21 --> Could not find the language line "Home"
ERROR - 2025-03-06 13:23:37 --> Could not find the language line "Home"
ERROR - 2025-03-06 13:46:17 --> Could not find the language line "Home"
ERROR - 2025-03-06 13:54:00 --> Could not find the language line "Clothing"
ERROR - 2025-03-06 13:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 13:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 13:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 13:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 13:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 13:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 13:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 13:58:55 --> Could not find the language line "Home"
ERROR - 2025-03-06 13:59:05 --> Could not find the language line "Home"
ERROR - 2025-03-06 14:02:00 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-03-06 14:02:00 --> Could not find the language line "Home"
ERROR - 2025-03-06 14:02:25 --> Could not find the language line "Other"
ERROR - 2025-03-06 14:02:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-06 14:02:32 --> Could not find the language line "Other"
ERROR - 2025-03-06 14:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 14:11:57 --> Could not find the language line "Home"
ERROR - 2025-03-06 14:12:56 --> Could not find the language line "Socks"
ERROR - 2025-03-06 14:13:12 --> Could not find the language line "Other"
ERROR - 2025-03-06 14:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 14:15:40 --> Could not find the language line "Home"
ERROR - 2025-03-06 14:16:17 --> Could not find the language line "Home"
ERROR - 2025-03-06 14:20:23 --> Could not find the language line "Home"
ERROR - 2025-03-06 14:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 14:25:56 --> Could not find the language line "Home"
ERROR - 2025-03-06 14:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 14:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 14:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 14:31:30 --> Could not find the language line "Home"
ERROR - 2025-03-06 14:46:18 --> Could not find the language line "Home"
ERROR - 2025-03-06 14:59:23 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-06 15:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 15:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 15:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 15:08:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-06 15:16:19 --> Could not find the language line "Home"
ERROR - 2025-03-06 15:18:31 --> Could not find the language line "Home"
ERROR - 2025-03-06 15:19:56 --> Could not find the language line "Home"
ERROR - 2025-03-06 15:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 15:46:18 --> Could not find the language line "Home"
ERROR - 2025-03-06 16:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 16:05:25 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-06 16:11:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-06 16:11:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-06 16:11:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-06 16:16:19 --> Could not find the language line "Home"
ERROR - 2025-03-06 16:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 16:25:00 --> Could not find the language line "Home"
ERROR - 2025-03-06 16:46:19 --> Could not find the language line "Home"
ERROR - 2025-03-06 17:13:39 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2025-03-06 17:13:40 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2025-03-06 17:13:40 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-03-06 17:13:40 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-03-06 17:16:19 --> Could not find the language line "Home"
ERROR - 2025-03-06 17:24:56 --> Could not find the language line "Home"
ERROR - 2025-03-06 17:28:32 --> Could not find the language line "Home"
ERROR - 2025-03-06 17:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 17:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 17:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 17:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 17:46:19 --> Could not find the language line "Home"
ERROR - 2025-03-06 17:53:48 --> Could not find the language line "Home"
ERROR - 2025-03-06 18:16:20 --> Could not find the language line "Home"
ERROR - 2025-03-06 18:46:20 --> Could not find the language line "Home"
ERROR - 2025-03-06 18:51:44 --> Could not find the language line "Home"
ERROR - 2025-03-06 18:52:14 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-06 18:57:28 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-06 19:02:17 --> Could not find the language line "Home"
ERROR - 2025-03-06 19:03:22 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-06 19:03:30 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-06 19:03:30 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-06 19:03:30 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-06 19:15:21 --> Could not find the language line "Home"
ERROR - 2025-03-06 19:16:20 --> Could not find the language line "Home"
ERROR - 2025-03-06 19:22:38 --> Could not find the language line "Crocs"
ERROR - 2025-03-06 19:26:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-06 19:46:21 --> Could not find the language line "Home"
ERROR - 2025-03-06 19:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 19:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 20:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 20:16:21 --> Could not find the language line "Home"
ERROR - 2025-03-06 20:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 20:26:23 --> Could not find the language line "Home"
ERROR - 2025-03-06 20:33:57 --> Could not find the language line "Home"
ERROR - 2025-03-06 20:46:22 --> Could not find the language line "Home"
ERROR - 2025-03-06 20:51:28 --> Could not find the language line "Home"
ERROR - 2025-03-06 20:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 20:58:03 --> Could not find the language line "Home"
ERROR - 2025-03-06 21:16:21 --> Could not find the language line "Home"
ERROR - 2025-03-06 21:17:02 --> Could not find the language line "Home"
ERROR - 2025-03-06 21:17:59 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-06 21:20:20 --> Could not find the language line "Home"
ERROR - 2025-03-06 21:26:06 --> Could not find the language line "Home"
ERROR - 2025-03-06 21:36:07 --> Could not find the language line "Home"
ERROR - 2025-03-06 21:36:09 --> Could not find the language line "Other"
ERROR - 2025-03-06 21:43:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-06 21:46:22 --> Could not find the language line "Home"
ERROR - 2025-03-06 21:57:07 --> Could not find the language line "Home"
ERROR - 2025-03-06 21:58:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 22:02:30 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-06 22:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 22:16:22 --> Could not find the language line "Home"
ERROR - 2025-03-06 22:17:45 --> Could not find the language line "Home"
ERROR - 2025-03-06 22:21:49 --> Could not find the language line "Home"
ERROR - 2025-03-06 22:25:52 --> Could not find the language line "Home"
ERROR - 2025-03-06 22:38:40 --> Could not find the language line "Home"
ERROR - 2025-03-06 22:46:23 --> Could not find the language line "Home"
ERROR - 2025-03-06 22:56:55 --> Could not find the language line "Home"
ERROR - 2025-03-06 22:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 22:58:55 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-06 22:58:55 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-06 22:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 22:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-06 23:05:18 --> Could not find the language line "Other"
ERROR - 2025-03-06 23:05:30 --> 404 Page Not Found: _profiler/phpinfo
ERROR - 2025-03-06 23:16:23 --> Could not find the language line "Home"
ERROR - 2025-03-06 23:46:24 --> Could not find the language line "Home"
