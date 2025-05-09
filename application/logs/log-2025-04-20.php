<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-04-20 00:08:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C900%' OR a.description LIKE '%C900%' OR a.color LIKE '%C900%' OR a.barcode LIKE '%C900%' OR a.category LIKE '%C900%' OR a.sub_category LIKE '%C900%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-20 00:12:47 --> Could not find the language line "users"
ERROR - 2025-04-20 00:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 00:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 00:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 00:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 00:19:12 --> Could not find the language line "users"
ERROR - 2025-04-20 00:24:31 --> Could not find the language line "Home"
ERROR - 2025-04-20 00:39:11 --> Could not find the language line "Home"
ERROR - 2025-04-20 00:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 00:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 00:54:31 --> Could not find the language line "Home"
ERROR - 2025-04-20 01:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:22:58 --> Could not find the language line "Home"
ERROR - 2025-04-20 01:22:59 --> Could not find the language line "Home"
ERROR - 2025-04-20 01:24:31 --> Could not find the language line "Home"
ERROR - 2025-04-20 01:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:31:53 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-20 01:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:36:50 --> Could not find the language line "Home"
ERROR - 2025-04-20 01:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:42:15 --> Could not find the language line "Home"
ERROR - 2025-04-20 01:42:34 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-20 01:43:07 --> Could not find the language line "Home"
ERROR - 2025-04-20 01:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:46:03 --> Could not find the language line "Home"
ERROR - 2025-04-20 01:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 01:54:31 --> Could not find the language line "Home"
ERROR - 2025-04-20 01:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 02:01:57 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-04-20 02:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 02:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 02:04:03 --> Could not find the language line "Home"
ERROR - 2025-04-20 02:13:09 --> 404 Page Not Found: Aviator%20Basic%20Shades/index
ERROR - 2025-04-20 02:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 02:24:31 --> Could not find the language line "Home"
ERROR - 2025-04-20 02:25:14 --> Could not find the language line "Home"
ERROR - 2025-04-20 02:26:10 --> Could not find the language line "Home"
ERROR - 2025-04-20 02:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 02:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 02:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 02:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 02:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 02:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 02:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 02:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 02:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 02:50:56 --> Could not find the language line "Home"
ERROR - 2025-04-20 02:54:32 --> Could not find the language line "Home"
ERROR - 2025-04-20 02:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 02:59:56 --> Could not find the language line "Home"
ERROR - 2025-04-20 03:02:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-20 03:04:47 --> Could not find the language line "Socks"
ERROR - 2025-04-20 03:24:32 --> Could not find the language line "Home"
ERROR - 2025-04-20 03:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 03:25:58 --> Could not find the language line "Home"
ERROR - 2025-04-20 03:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 03:35:25 --> Could not find the language line "Home"
ERROR - 2025-04-20 03:41:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 03:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 03:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 03:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 03:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 03:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 03:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 03:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 03:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 03:50:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 03:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 03:54:31 --> Could not find the language line "Home"
ERROR - 2025-04-20 03:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 04:01:53 --> Could not find the language line "Home"
ERROR - 2025-04-20 04:04:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-20 04:05:03 --> Could not find the language line "Home"
ERROR - 2025-04-20 04:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 04:23:15 --> Could not find the language line "Home"
ERROR - 2025-04-20 04:23:15 --> Could not find the language line "Home"
ERROR - 2025-04-20 04:24:33 --> Could not find the language line "Home"
ERROR - 2025-04-20 04:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 04:37:31 --> Could not find the language line "Home"
ERROR - 2025-04-20 04:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 04:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 04:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 04:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 04:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 04:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 04:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 04:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 04:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 04:54:33 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:00:14 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 05:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 05:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 05:07:53 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-20 05:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 05:17:13 --> 404 Page Not Found: Home/accounts
ERROR - 2025-04-20 05:17:40 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:17:44 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:17:45 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 05:24:33 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:25:34 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 05:27:44 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:29:19 --> 404 Page Not Found: Users/accounts
ERROR - 2025-04-20 05:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 05:35:30 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:35:32 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:40:35 --> 404 Page Not Found: Users/home
ERROR - 2025-04-20 05:41:20 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 05:44:48 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:46:17 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:46:25 --> Could not find the language line "Other"
ERROR - 2025-04-20 05:48:18 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:48:24 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 05:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 05:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 05:54:33 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 05:56:29 --> Could not find the language line "Home"
ERROR - 2025-04-20 05:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 05:57:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-20 05:58:01 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 05:58:51 --> Could not find the language line "Home"
ERROR - 2025-04-20 06:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:05:01 --> Could not find the language line "Home"
ERROR - 2025-04-20 06:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:05:34 --> Could not find the language line "Home"
ERROR - 2025-04-20 06:05:58 --> Could not find the language line "users"
ERROR - 2025-04-20 06:09:32 --> Could not find the language line "Home"
ERROR - 2025-04-20 06:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:19:33 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 06:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:24:34 --> Could not find the language line "Home"
ERROR - 2025-04-20 06:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:28:29 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 06:35:00 --> Could not find the language line "Home"
ERROR - 2025-04-20 06:39:15 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 06:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:49:37 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 06:51:29 --> Could not find the language line "Home"
ERROR - 2025-04-20 06:54:35 --> Could not find the language line "Home"
ERROR - 2025-04-20 06:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 06:58:15 --> Could not find the language line "Home"
ERROR - 2025-04-20 06:58:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-20 06:59:20 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 07:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:05:14 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:05:58 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:07:53 --> Could not find the language line "users"
ERROR - 2025-04-20 07:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:10:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:24:26 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:24:35 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:26:15 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:29:35 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 07:34:35 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:34:43 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:34:45 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:34:45 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:34:48 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:34:52 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:34:54 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:44:43 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:50:15 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:51:59 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:54:35 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:56:54 --> Could not find the language line "Home"
ERROR - 2025-04-20 07:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 07:58:15 --> Could not find the language line "Home"
ERROR - 2025-04-20 08:00:26 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-20 08:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 08:13:50 --> Could not find the language line "Home"
ERROR - 2025-04-20 08:15:01 --> Could not find the language line "Home"
ERROR - 2025-04-20 08:16:09 --> Could not find the language line "Home"
ERROR - 2025-04-20 08:18:14 --> Severity: Notice --> Undefined index: discount /home/samfit/public_html/application/controllers/Checkout.php 29
ERROR - 2025-04-20 08:18:14 --> Severity: Notice --> Undefined index: coupon_id /home/samfit/public_html/application/controllers/Checkout.php 30
ERROR - 2025-04-20 08:18:14 --> Severity: Notice --> Undefined index: discount_type /home/samfit/public_html/application/controllers/Checkout.php 31
ERROR - 2025-04-20 08:18:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2025-04-20 08:24:35 --> Could not find the language line "Home"
ERROR - 2025-04-20 08:27:40 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-20 08:31:44 --> Could not find the language line "Home"
ERROR - 2025-04-20 08:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 08:47:53 --> Could not find the language line "Home"
ERROR - 2025-04-20 08:53:03 --> Could not find the language line "Home"
ERROR - 2025-04-20 08:53:11 --> Could not find the language line "Home"
ERROR - 2025-04-20 08:53:12 --> Could not find the language line "Home"
ERROR - 2025-04-20 08:53:17 --> Could not find the language line "Home"
ERROR - 2025-04-20 08:53:18 --> Could not find the language line "Home"
ERROR - 2025-04-20 08:54:36 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:02:26 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 09:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 09:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 09:09:47 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:11:11 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 09:11:19 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 09:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 09:16:36 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:16:49 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:17:01 --> Could not find the language line "Socks"
ERROR - 2025-04-20 09:17:45 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:18:20 --> Could not find the language line "Other"
ERROR - 2025-04-20 09:24:35 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 09:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 09:35:12 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:35:19 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:35:22 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:35:24 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:35:28 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:35:34 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:35:39 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:35:58 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:40:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-20 09:54:37 --> Could not find the language line "Home"
ERROR - 2025-04-20 09:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 10:00:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-20 10:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 10:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 10:14:06 --> Could not find the language line "Home"
ERROR - 2025-04-20 10:24:36 --> Could not find the language line "Home"
ERROR - 2025-04-20 10:27:44 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-20 10:50:18 --> Could not find the language line "Home"
ERROR - 2025-04-20 10:53:22 --> Could not find the language line "Home"
ERROR - 2025-04-20 10:53:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-20 10:54:36 --> Could not find the language line "Home"
ERROR - 2025-04-20 10:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 10:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 10:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 11:17:57 --> Could not find the language line "Home"
ERROR - 2025-04-20 11:24:36 --> Could not find the language line "Home"
ERROR - 2025-04-20 11:35:00 --> Could not find the language line "Home"
ERROR - 2025-04-20 11:35:05 --> Could not find the language line "Home"
ERROR - 2025-04-20 11:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 11:48:42 --> Could not find the language line "Home"
ERROR - 2025-04-20 11:54:36 --> Could not find the language line "Home"
ERROR - 2025-04-20 11:57:56 --> Could not find the language line "Home"
ERROR - 2025-04-20 11:57:57 --> Could not find the language line "Home"
ERROR - 2025-04-20 12:07:49 --> Could not find the language line "Home"
ERROR - 2025-04-20 12:08:28 --> 404 Page Not Found: Users/accounts
ERROR - 2025-04-20 12:16:58 --> 404 Page Not Found: Cart/accounts
ERROR - 2025-04-20 12:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 12:24:37 --> Could not find the language line "Home"
ERROR - 2025-04-20 12:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 12:43:38 --> Could not find the language line "Other"
ERROR - 2025-04-20 12:54:37 --> Could not find the language line "Home"
ERROR - 2025-04-20 12:55:19 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:01:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 13:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 13:03:43 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-20 13:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 13:07:06 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 13:08:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-20 13:10:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 13:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 13:17:15 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:21:08 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-20 13:21:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-20 13:21:57 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-20 13:22:15 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-20 13:22:34 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-20 13:22:55 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-20 13:23:16 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-20 13:23:33 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 13:23:50 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-20 13:24:13 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-20 13:24:29 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-20 13:24:37 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:24:48 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-20 13:25:03 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-20 13:25:17 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-20 13:26:11 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 13:26:42 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:26:43 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:26:45 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:26:51 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:27:03 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:27:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 13:27:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 13:27:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 13:27:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 13:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 13:28:51 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:31:53 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 13:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 13:49:02 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 13:49:42 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:54:20 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:54:38 --> Could not find the language line "Home"
ERROR - 2025-04-20 13:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 13:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:16:39 --> Could not find the language line "Home"
ERROR - 2025-04-20 14:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:19:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-20 14:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:24:39 --> Could not find the language line "Home"
ERROR - 2025-04-20 14:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:48:40 --> Could not find the language line "Home"
ERROR - 2025-04-20 14:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:54:39 --> Could not find the language line "Home"
ERROR - 2025-04-20 14:56:17 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-20 14:56:17 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-20 14:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 14:56:18 --> 404 Page Not Found: Assets/img
ERROR - 2025-04-20 14:56:18 --> 404 Page Not Found: Assets/img
ERROR - 2025-04-20 15:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:04:20 --> Could not find the language line "Home"
ERROR - 2025-04-20 15:05:16 --> Could not find the language line "Home"
ERROR - 2025-04-20 15:10:38 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-20 15:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:20:52 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-20 15:24:39 --> Could not find the language line "Home"
ERROR - 2025-04-20 15:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:35:19 --> Could not find the language line "Home"
ERROR - 2025-04-20 15:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:46:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-20 15:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:52:12 --> Could not find the language line "Home"
ERROR - 2025-04-20 15:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:54:06 --> Could not find the language line "Home"
ERROR - 2025-04-20 15:54:39 --> Could not find the language line "Home"
ERROR - 2025-04-20 15:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 15:56:35 --> Could not find the language line "Home"
ERROR - 2025-04-20 15:57:14 --> Could not find the language line "Home"
ERROR - 2025-04-20 15:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:03:32 --> Could not find the language line "Home"
ERROR - 2025-04-20 16:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:17:02 --> Could not find the language line "Home"
ERROR - 2025-04-20 16:20:32 --> Could not find the language line "Home"
ERROR - 2025-04-20 16:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:24:39 --> Could not find the language line "Home"
ERROR - 2025-04-20 16:24:59 --> Could not find the language line "Home"
ERROR - 2025-04-20 16:25:28 --> Could not find the language line "Home"
ERROR - 2025-04-20 16:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:52:24 --> 404 Page Not Found: Users/users
ERROR - 2025-04-20 16:52:29 --> Could not find the language line "Home"
ERROR - 2025-04-20 16:54:39 --> Could not find the language line "Home"
ERROR - 2025-04-20 16:54:57 --> Could not find the language line "Home"
ERROR - 2025-04-20 16:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 16:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:01:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 17:01:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 17:01:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 17:01:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 17:01:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 17:01:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 17:01:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 17:01:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 17:01:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 17:01:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 17:01:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 17:02:13 --> 404 Page Not Found: Users/users
ERROR - 2025-04-20 17:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:12:19 --> Could not find the language line "products"
ERROR - 2025-04-20 17:24:40 --> Could not find the language line "Home"
ERROR - 2025-04-20 17:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:27:41 --> Could not find the language line "Home"
ERROR - 2025-04-20 17:37:10 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-20 17:42:15 --> Could not find the language line "Home"
ERROR - 2025-04-20 17:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:43:34 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-20 17:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:43:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-20 17:44:42 --> Could not find the language line "Home"
ERROR - 2025-04-20 17:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:46:20 --> Could not find the language line "Home"
ERROR - 2025-04-20 17:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:48:01 --> Could not find the language line "Home"
ERROR - 2025-04-20 17:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:54:13 --> Could not find the language line "Home"
ERROR - 2025-04-20 17:54:40 --> Could not find the language line "Home"
ERROR - 2025-04-20 17:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 17:59:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-20 18:01:41 --> Could not find the language line "Home"
ERROR - 2025-04-20 18:13:44 --> Could not find the language line "products"
ERROR - 2025-04-20 18:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:19:52 --> Could not find the language line "Home"
ERROR - 2025-04-20 18:19:54 --> Could not find the language line "Home"
ERROR - 2025-04-20 18:19:55 --> Could not find the language line "Home"
ERROR - 2025-04-20 18:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:24:41 --> Could not find the language line "Home"
ERROR - 2025-04-20 18:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:30:27 --> Could not find the language line "Home"
ERROR - 2025-04-20 18:30:55 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 18:31:16 --> Could not find the language line "Home"
ERROR - 2025-04-20 18:31:57 --> Could not find the language line "Home"
ERROR - 2025-04-20 18:34:06 --> Could not find the language line "Home"
ERROR - 2025-04-20 18:34:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-20 18:35:17 --> Could not find the language line "Home"
ERROR - 2025-04-20 18:35:26 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 18:36:32 --> Could not find the language line "Home"
ERROR - 2025-04-20 18:36:44 --> Could not find the language line "Home"
ERROR - 2025-04-20 18:38:48 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-20 18:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:51:27 --> Could not find the language line "Home"
ERROR - 2025-04-20 18:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:54:41 --> Could not find the language line "Home"
ERROR - 2025-04-20 18:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:59:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-20 18:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 18:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:02:58 --> Could not find the language line "Home"
ERROR - 2025-04-20 19:03:11 --> Could not find the language line "Home"
ERROR - 2025-04-20 19:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:05:31 --> Could not find the language line "Home"
ERROR - 2025-04-20 19:06:02 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 19:07:02 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 19:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:07:35 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 19:07:49 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 19:07:58 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 19:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:08:11 --> Could not find the language line "Home"
ERROR - 2025-04-20 19:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:08:25 --> Could not find the language line "Perfume"
ERROR - 2025-04-20 19:08:41 --> Could not find the language line "Home"
ERROR - 2025-04-20 19:08:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:08:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:09:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:09:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:09:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:09:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:10:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:10:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:10:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:10:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:11:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:11:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:11:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:11:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:11:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:11:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:11:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:11:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:12:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:12:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 19:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:13:43 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 19:13:43 --> Could not find the language line "Clothing"
ERROR - 2025-04-20 19:13:43 --> Could not find the language line "Home"
ERROR - 2025-04-20 19:13:47 --> Could not find the language line "Home"
ERROR - 2025-04-20 19:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:16:41 --> Could not find the language line "Home"
ERROR - 2025-04-20 19:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:20:57 --> Could not find the language line "Home"
ERROR - 2025-04-20 19:24:41 --> Could not find the language line "Home"
ERROR - 2025-04-20 19:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:40:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-20 19:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:54:41 --> Could not find the language line "Home"
ERROR - 2025-04-20 19:57:26 --> Could not find the language line "Home"
ERROR - 2025-04-20 19:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 19:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 20:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 20:02:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-20 20:02:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-20 20:02:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-20 20:02:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-20 20:02:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-20 20:02:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-20 20:02:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-20 20:02:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-20 20:02:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-20 20:02:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-20 20:02:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-20 20:02:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-20 20:03:34 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:09:38 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:11:12 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:11:48 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:11:49 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:15:03 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:15:08 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:15:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:15:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:15:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:15:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:16:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:16:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:16:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:16:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:16:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:16:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:17:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:17:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:17:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:17:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 20:17:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:17:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:18:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:18:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:18:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:18:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-20 20:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 20:24:41 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 20:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 20:29:34 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 20:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 20:30:54 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:31:57 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:33:35 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 20:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 20:36:11 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:38:58 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:39:01 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:53:40 --> Could not find the language line "Home"
ERROR - 2025-04-20 20:54:42 --> Could not find the language line "Home"
ERROR - 2025-04-20 21:00:30 --> Could not find the language line "Home"
ERROR - 2025-04-20 21:03:50 --> Could not find the language line "Home"
ERROR - 2025-04-20 21:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:11:37 --> Could not find the language line "Home"
ERROR - 2025-04-20 21:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:24:49 --> Could not find the language line "Home"
ERROR - 2025-04-20 21:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:34:08 --> Could not find the language line "Home"
ERROR - 2025-04-20 21:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:35:21 --> Could not find the language line "Home"
ERROR - 2025-04-20 21:37:51 --> Could not find the language line "Home"
ERROR - 2025-04-20 21:39:02 --> Could not find the language line "Home"
ERROR - 2025-04-20 21:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 21:45:31 --> Could not find the language line "Home"
ERROR - 2025-04-20 21:50:13 --> Could not find the language line "Home"
ERROR - 2025-04-20 21:50:57 --> Could not find the language line "Home"
ERROR - 2025-04-20 21:54:44 --> Could not find the language line "Home"
ERROR - 2025-04-20 21:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 22:01:29 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-20 22:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 22:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 22:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 22:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 22:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 22:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 22:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 22:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 22:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 22:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 22:08:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-20 22:14:13 --> Could not find the language line "Home"
ERROR - 2025-04-20 22:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 22:24:02 --> Could not find the language line "Home"
ERROR - 2025-04-20 22:24:50 --> Could not find the language line "Home"
ERROR - 2025-04-20 22:29:28 --> Could not find the language line "Home"
ERROR - 2025-04-20 22:36:14 --> Could not find the language line "Home"
ERROR - 2025-04-20 22:39:16 --> Could not find the language line "Home"
ERROR - 2025-04-20 22:48:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-20 22:54:45 --> Could not find the language line "Home"
ERROR - 2025-04-20 22:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 23:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 23:14:30 --> Could not find the language line "Home"
ERROR - 2025-04-20 23:17:28 --> 404 Page Not Found: Git/HEAD
ERROR - 2025-04-20 23:17:28 --> 404 Page Not Found: Git/config
ERROR - 2025-04-20 23:24:47 --> Could not find the language line "Home"
ERROR - 2025-04-20 23:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 23:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 23:27:06 --> Could not find the language line "Home"
ERROR - 2025-04-20 23:27:11 --> 404 Page Not Found: Home/assets
ERROR - 2025-04-20 23:27:11 --> 404 Page Not Found: Home/accounts
ERROR - 2025-04-20 23:27:11 --> 404 Page Not Found: Home/home
ERROR - 2025-04-20 23:49:13 --> Could not find the language line "Home"
ERROR - 2025-04-20 23:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 23:54:44 --> Could not find the language line "Home"
ERROR - 2025-04-20 23:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-20 23:59:57 --> 404 Page Not Found: Assets/css
