<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-04-24 00:06:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-24 00:06:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-24 00:06:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-24 00:06:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 00:06:48 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 00:07:06 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 00:07:54 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 00:07:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 00:08:25 --> Could not find the language line "Bracelets"
ERROR - 2025-04-24 00:10:14 --> Could not find the language line "Home"
ERROR - 2025-04-24 00:17:28 --> Could not find the language line "Home"
ERROR - 2025-04-24 00:47:26 --> Could not find the language line "Home"
ERROR - 2025-04-24 01:01:21 --> Could not find the language line "Home"
ERROR - 2025-04-24 01:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 01:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 01:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 01:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 01:14:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-24 01:18:14 --> Could not find the language line "Home"
ERROR - 2025-04-24 01:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 01:26:54 --> Could not find the language line "Home"
ERROR - 2025-04-24 01:33:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 01:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 01:37:11 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 01:39:13 --> Could not find the language line "Home"
ERROR - 2025-04-24 01:46:11 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 01:46:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 01:47:41 --> Could not find the language line "Home"
ERROR - 2025-04-24 01:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 01:52:05 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 01:57:54 --> Could not find the language line "Home"
ERROR - 2025-04-24 01:58:45 --> Could not find the language line "Home"
ERROR - 2025-04-24 01:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 01:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 02:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 02:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 02:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 02:13:28 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 02:14:38 --> Could not find the language line "accounts"
ERROR - 2025-04-24 02:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 02:17:26 --> Could not find the language line "Home"
ERROR - 2025-04-24 02:18:38 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 02:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 02:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 02:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 02:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 02:46:09 --> Could not find the language line "Home"
ERROR - 2025-04-24 02:47:33 --> Could not find the language line "Home"
ERROR - 2025-04-24 02:52:10 --> Could not find the language line "Home"
ERROR - 2025-04-24 02:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 02:54:38 --> Could not find the language line "Home"
ERROR - 2025-04-24 02:55:23 --> Could not find the language line "Home"
ERROR - 2025-04-24 02:55:55 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-24 02:56:08 --> Could not find the language line "Home"
ERROR - 2025-04-24 02:56:27 --> Could not find the language line "Home"
ERROR - 2025-04-24 02:56:30 --> Could not find the language line "Home"
ERROR - 2025-04-24 02:57:29 --> Could not find the language line "Home"
ERROR - 2025-04-24 02:57:43 --> Could not find the language line "Perfume"
ERROR - 2025-04-24 02:57:51 --> Could not find the language line "Home"
ERROR - 2025-04-24 02:57:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-24 02:58:11 --> Could not find the language line "Home"
ERROR - 2025-04-24 03:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 03:03:11 --> Could not find the language line "Home"
ERROR - 2025-04-24 03:04:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 03:17:32 --> Could not find the language line "Home"
ERROR - 2025-04-24 03:47:32 --> Could not find the language line "Home"
ERROR - 2025-04-24 03:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 03:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 03:50:06 --> Could not find the language line "Home"
ERROR - 2025-04-24 03:54:22 --> Could not find the language line "Home"
ERROR - 2025-04-24 03:55:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 04:17:26 --> Could not find the language line "Home"
ERROR - 2025-04-24 04:19:42 --> Could not find the language line "Home"
ERROR - 2025-04-24 04:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 04:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 04:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 04:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 04:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 04:36:25 --> Could not find the language line "Home"
ERROR - 2025-04-24 04:47:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 04:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 04:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 04:56:42 --> Could not find the language line "Home"
ERROR - 2025-04-24 05:13:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 05:17:27 --> Could not find the language line "Home"
ERROR - 2025-04-24 05:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 05:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 05:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 05:18:54 --> Could not find the language line "Home"
ERROR - 2025-04-24 05:19:00 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-24 05:19:15 --> Could not find the language line "Home"
ERROR - 2025-04-24 05:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 05:22:06 --> Could not find the language line "Home"
ERROR - 2025-04-24 05:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 05:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 05:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 05:25:39 --> Could not find the language line "Clothing"
ERROR - 2025-04-24 05:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 05:28:03 --> Could not find the language line "Home"
ERROR - 2025-04-24 05:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 05:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 05:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 05:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 05:47:27 --> Could not find the language line "Home"
ERROR - 2025-04-24 05:49:01 --> Could not find the language line "0"
ERROR - 2025-04-24 05:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 05:55:41 --> Could not find the language line "Home"
ERROR - 2025-04-24 05:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 06:03:53 --> Could not find the language line "Home"
ERROR - 2025-04-24 06:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 06:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 06:14:53 --> Could not find the language line "Home"
ERROR - 2025-04-24 06:17:26 --> Could not find the language line "Home"
ERROR - 2025-04-24 06:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 06:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 06:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 06:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 06:30:18 --> Could not find the language line "Home"
ERROR - 2025-04-24 06:46:37 --> Could not find the language line "Home"
ERROR - 2025-04-24 06:47:27 --> Could not find the language line "Home"
ERROR - 2025-04-24 06:47:29 --> Could not find the language line "Home"
ERROR - 2025-04-24 06:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 06:55:07 --> Could not find the language line "Home"
ERROR - 2025-04-24 06:55:11 --> Could not find the language line "Other"
ERROR - 2025-04-24 06:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 07:02:25 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 07:13:27 --> Could not find the language line "Home"
ERROR - 2025-04-24 07:15:10 --> Could not find the language line "Clothing"
ERROR - 2025-04-24 07:17:27 --> Could not find the language line "Home"
ERROR - 2025-04-24 07:18:14 --> Could not find the language line "Home"
ERROR - 2025-04-24 07:18:38 --> Could not find the language line "Home"
ERROR - 2025-04-24 07:23:20 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-24 07:23:22 --> Could not find the language line "Home"
ERROR - 2025-04-24 07:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 07:25:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-24 07:28:36 --> Could not find the language line "Home"
ERROR - 2025-04-24 07:37:27 --> Could not find the language line "Other"
ERROR - 2025-04-24 07:40:32 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-24 07:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 07:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 07:40:32 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-24 07:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 07:40:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-24 07:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 07:41:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-24 07:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 07:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 07:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 07:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 07:47:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 07:56:18 --> Could not find the language line "Home"
ERROR - 2025-04-24 07:58:42 --> Could not find the language line "Home"
ERROR - 2025-04-24 07:59:42 --> Could not find the language line "Home"
ERROR - 2025-04-24 08:01:08 --> Could not find the language line "Home"
ERROR - 2025-04-24 08:02:20 --> Could not find the language line "Home"
ERROR - 2025-04-24 08:03:09 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-24 08:04:04 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 08:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 08:16:15 --> Could not find the language line "Clothing"
ERROR - 2025-04-24 08:17:27 --> Could not find the language line "Home"
ERROR - 2025-04-24 08:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 08:18:11 --> Could not find the language line "Home"
ERROR - 2025-04-24 08:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 08:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 08:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 08:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 08:19:58 --> Could not find the language line "Other"
ERROR - 2025-04-24 08:23:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 08:25:07 --> Could not find the language line "Home"
ERROR - 2025-04-24 08:26:46 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-24 08:27:20 --> Could not find the language line "Other"
ERROR - 2025-04-24 08:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 08:31:27 --> Could not find the language line "Home"
ERROR - 2025-04-24 08:38:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-24 08:39:16 --> Could not find the language line "Home"
ERROR - 2025-04-24 08:40:06 --> Could not find the language line "Home"
ERROR - 2025-04-24 08:47:27 --> Could not find the language line "Home"
ERROR - 2025-04-24 08:58:50 --> Could not find the language line "Home"
ERROR - 2025-04-24 08:58:51 --> Could not find the language line "Home"
ERROR - 2025-04-24 08:58:53 --> Could not find the language line "Home"
ERROR - 2025-04-24 08:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 08:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:01:54 --> Could not find the language line "Home"
ERROR - 2025-04-24 09:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:15:07 --> Could not find the language line "Home"
ERROR - 2025-04-24 09:15:31 --> Could not find the language line "Clothing"
ERROR - 2025-04-24 09:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:16:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 09:17:28 --> Could not find the language line "Home"
ERROR - 2025-04-24 09:17:37 --> Could not find the language line "Home"
ERROR - 2025-04-24 09:21:03 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-24 09:21:33 --> Could not find the language line "Home"
ERROR - 2025-04-24 09:22:15 --> Could not find the language line "Home"
ERROR - 2025-04-24 09:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:24:54 --> Could not find the language line "Home"
ERROR - 2025-04-24 09:28:01 --> Could not find the language line "Other"
ERROR - 2025-04-24 09:28:33 --> Could not find the language line "Home"
ERROR - 2025-04-24 09:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:32:30 --> Could not find the language line "Home"
ERROR - 2025-04-24 09:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:35:13 --> Could not find the language line "Home"
ERROR - 2025-04-24 09:36:55 --> Could not find the language line "Home"
ERROR - 2025-04-24 09:37:16 --> Could not find the language line "Home"
ERROR - 2025-04-24 09:41:06 --> 404 Page Not Found: Adminphp/index
ERROR - 2025-04-24 09:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:47:28 --> Could not find the language line "Home"
ERROR - 2025-04-24 09:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 09:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 10:08:03 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-24 10:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 10:13:28 --> Could not find the language line "Home"
ERROR - 2025-04-24 10:15:12 --> Could not find the language line "Clothing"
ERROR - 2025-04-24 10:17:28 --> Could not find the language line "Home"
ERROR - 2025-04-24 10:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 10:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 10:25:54 --> Could not find the language line "Other"
ERROR - 2025-04-24 10:42:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 10:47:28 --> Could not find the language line "Home"
ERROR - 2025-04-24 10:47:28 --> Could not find the language line "Home"
ERROR - 2025-04-24 10:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 10:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 10:51:10 --> Could not find the language line "Home"
ERROR - 2025-04-24 10:51:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 11:00:53 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:04:22 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:06:59 --> Could not find the language line "Perfume"
ERROR - 2025-04-24 11:07:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-24 11:07:47 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:07:53 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:08:02 --> Could not find the language line "Clothing"
ERROR - 2025-04-24 11:08:24 --> Could not find the language line "Clothing"
ERROR - 2025-04-24 11:08:58 --> Could not find the language line "Clothing"
ERROR - 2025-04-24 11:09:04 --> Could not find the language line "Clothing"
ERROR - 2025-04-24 11:09:08 --> Could not find the language line "Clothing"
ERROR - 2025-04-24 11:10:34 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:14:55 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:14:55 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:14:55 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:17:29 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 11:23:51 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:23:53 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:23:59 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:23:59 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:24:02 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:25:04 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:26:32 --> Could not find the language line "Other"
ERROR - 2025-04-24 11:28:37 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:28:37 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 11:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 11:38:36 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:39:56 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:39:59 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:40:12 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:41:24 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:46:35 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:47:29 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:47:48 --> Could not find the language line "Home"
ERROR - 2025-04-24 11:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 11:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 11:58:38 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 11:59:11 --> Could not find the language line "Clothing"
ERROR - 2025-04-24 12:02:50 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:02:50 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:03:45 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:04:24 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:04:27 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:04:34 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:05:34 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:05:34 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:05:35 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:05:46 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:05:46 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:05:46 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:06:16 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:06:17 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 12:06:22 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:06:43 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:06:43 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:06:48 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:06:49 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:06:52 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:06:53 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 12:06:58 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:07:02 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:07:04 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:07:09 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:08:13 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:08:59 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:09:07 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:11:48 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:11:56 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:11:56 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:12:52 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:12:54 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:12:57 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:12:57 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:17:01 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:17:30 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 12:18:47 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:18:47 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:18:48 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:18:51 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:18:54 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 12:19:30 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 12:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 12:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 12:24:40 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 12:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 12:47:29 --> Could not find the language line "Home"
ERROR - 2025-04-24 12:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 12:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 13:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 13:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 13:17:30 --> Could not find the language line "Home"
ERROR - 2025-04-24 13:43:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 13:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 13:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 13:47:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 13:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 13:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 13:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 13:57:06 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:11:03 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:11:58 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:11:58 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:12:00 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-24 14:12:08 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:12:09 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:12:16 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:12:43 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:15:14 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:15:29 --> Could not find the language line "Other"
ERROR - 2025-04-24 14:17:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:30:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:31:07 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:31:30 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:35:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 14:37:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 14:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:40:50 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:43:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-24 14:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:47:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 14:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 14:56:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 146
ERROR - 2025-04-24 14:56:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-04-24 14:56:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-24 15:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:12:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 15:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:17:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 15:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:23:13 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-04-24 15:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:24:27 --> Could not find the language line "Home"
ERROR - 2025-04-24 15:25:22 --> 404 Page Not Found: Users/products
ERROR - 2025-04-24 15:28:04 --> Could not find the language line "Home"
ERROR - 2025-04-24 15:28:14 --> Could not find the language line "Home"
ERROR - 2025-04-24 15:28:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 15:29:23 --> Could not find the language line "Home"
ERROR - 2025-04-24 15:31:43 --> Could not find the language line "Home"
ERROR - 2025-04-24 15:31:44 --> Could not find the language line "Home"
ERROR - 2025-04-24 15:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:32:41 --> Could not find the language line "Home"
ERROR - 2025-04-24 15:32:50 --> Could not find the language line "Clothing"
ERROR - 2025-04-24 15:33:23 --> Could not find the language line "Home"
ERROR - 2025-04-24 15:33:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 15:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:41:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-24 15:43:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 15:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:47:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 15:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 15:58:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 15:58:52 --> Could not find the language line "Home"
ERROR - 2025-04-24 16:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:09:17 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-24 16:09:17 --> Could not find the language line "Home"
ERROR - 2025-04-24 16:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:12:05 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 16:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:16:05 --> Could not find the language line "Home"
ERROR - 2025-04-24 16:17:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 16:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:22:44 --> Could not find the language line "Home"
ERROR - 2025-04-24 16:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:23:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 16:24:04 --> Could not find the language line "Home"
ERROR - 2025-04-24 16:24:27 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-04-24 16:30:42 --> Could not find the language line "Home"
ERROR - 2025-04-24 16:31:18 --> Could not find the language line "Home"
ERROR - 2025-04-24 16:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:38:00 --> Could not find the language line "Home"
ERROR - 2025-04-24 16:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:44:39 --> Could not find the language line "Home"
ERROR - 2025-04-24 16:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:46:34 --> Could not find the language line "Home"
ERROR - 2025-04-24 16:47:32 --> Could not find the language line "Home"
ERROR - 2025-04-24 16:47:45 --> Could not find the language line "Home"
ERROR - 2025-04-24 16:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:54:19 --> Could not find the language line "Home"
ERROR - 2025-04-24 16:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 16:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:03:22 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:03:24 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:03:27 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:03:29 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:04:04 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:12:44 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:17:32 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:24:40 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:31:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-24 17:33:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 17:36:03 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:37:30 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:38:03 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:38:40 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:38:48 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:40:52 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:41:42 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:44:35 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:47:22 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:47:33 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:48:48 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:49:21 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:49:26 --> Could not find the language line "Home"
ERROR - 2025-04-24 17:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:51:45 --> 404 Page Not Found: Media/system
ERROR - 2025-04-24 17:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 17:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:08:42 --> Could not find the language line "Home"
ERROR - 2025-04-24 18:17:32 --> Could not find the language line "Home"
ERROR - 2025-04-24 18:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:25:39 --> Could not find the language line "Other"
ERROR - 2025-04-24 18:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:33:22 --> Could not find the language line "Home"
ERROR - 2025-04-24 18:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:47:33 --> Could not find the language line "Home"
ERROR - 2025-04-24 18:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:57:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 18:57:53 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-24 18:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 18:58:28 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-24 18:58:49 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-24 18:58:53 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-24 18:58:54 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-24 18:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:05:44 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:06:06 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:07:00 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:09:16 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:11:22 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:15:18 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:17:33 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:35:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:42:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:42:35 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:42:37 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:45:01 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:47:33 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 19:57:51 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:57:53 --> Could not find the language line "Home"
ERROR - 2025-04-24 19:57:55 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 20:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 20:05:16 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:05:20 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:05:22 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:05:26 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:05:30 --> Could not find the language line "Other"
ERROR - 2025-04-24 20:05:51 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-24 20:05:57 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 20:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 20:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 20:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 20:10:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 20:11:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 20:12:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-24 20:12:55 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 20:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 20:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 20:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 20:15:25 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:17:34 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 20:23:06 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:24:08 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-24 20:24:08 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:24:08 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:25:34 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:31:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 146
ERROR - 2025-04-24 20:31:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-04-24 20:31:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-24 20:32:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-24 20:32:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-24 20:41:06 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:47:34 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:49:13 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:51:31 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:56:40 --> Could not find the language line "Home"
ERROR - 2025-04-24 20:57:23 --> Could not find the language line "Home"
ERROR - 2025-04-24 21:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 21:09:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-24 21:09:15 --> Could not find the language line "Home"
ERROR - 2025-04-24 21:17:37 --> Could not find the language line "Home"
ERROR - 2025-04-24 21:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 21:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 21:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 21:21:17 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-24 21:21:18 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-24 21:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 21:21:45 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-24 21:21:45 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-24 21:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 21:30:10 --> Could not find the language line "Home"
ERROR - 2025-04-24 21:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 21:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 21:34:27 --> Could not find the language line "Home"
ERROR - 2025-04-24 21:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 21:37:09 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 21:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 21:41:54 --> Could not find the language line "Home"
ERROR - 2025-04-24 21:45:06 --> Could not find the language line "Clothing"
ERROR - 2025-04-24 21:45:18 --> Could not find the language line "Home"
ERROR - 2025-04-24 21:47:45 --> Could not find the language line "Home"
ERROR - 2025-04-24 21:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 21:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 22:04:53 --> 404 Page Not Found: Home/users
ERROR - 2025-04-24 22:10:28 --> Could not find the language line "Home"
ERROR - 2025-04-24 22:15:10 --> 404 Page Not Found: Users/home
ERROR - 2025-04-24 22:17:35 --> Could not find the language line "Home"
ERROR - 2025-04-24 22:24:45 --> Could not find the language line "Home"
ERROR - 2025-04-24 22:26:15 --> 404 Page Not Found: Users/accounts
ERROR - 2025-04-24 22:47:26 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-24 22:47:34 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-24 22:47:43 --> Could not find the language line "Home"
ERROR - 2025-04-24 22:56:28 --> Could not find the language line "Home"
ERROR - 2025-04-24 22:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 22:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 22:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 22:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 23:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 23:12:38 --> Could not find the language line "Home"
ERROR - 2025-04-24 23:13:29 --> Could not find the language line "Clothing"
ERROR - 2025-04-24 23:14:58 --> Could not find the language line "Home"
ERROR - 2025-04-24 23:16:41 --> Could not find the language line "Home"
ERROR - 2025-04-24 23:17:48 --> Could not find the language line "Home"
ERROR - 2025-04-24 23:20:46 --> Could not find the language line "Home"
ERROR - 2025-04-24 23:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 23:29:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-24 23:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 23:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 23:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 23:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 23:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 23:35:26 --> Could not find the language line "Home"
ERROR - 2025-04-24 23:37:20 --> Could not find the language line "Home"
ERROR - 2025-04-24 23:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 23:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 23:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 23:45:36 --> 404 Page Not Found: Users/users
ERROR - 2025-04-24 23:47:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-24 23:47:45 --> Could not find the language line "Home"
ERROR - 2025-04-24 23:47:53 --> Could not find the language line "Home"
ERROR - 2025-04-24 23:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 23:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-24 23:52:51 --> Could not find the language line "Home"
