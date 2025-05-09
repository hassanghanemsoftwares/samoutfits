<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-22 00:08:25 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-22 00:09:00 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-22 00:09:31 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-22 00:10:10 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-22 00:14:32 --> Could not find the language line "Home"
ERROR - 2025-01-22 00:21:06 --> Could not find the language line "Home"
ERROR - 2025-01-22 00:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 00:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 00:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 00:42:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 00:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 00:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 00:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 00:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 00:44:42 --> Could not find the language line "Home"
ERROR - 2025-01-22 00:44:47 --> Could not find the language line "Home"
ERROR - 2025-01-22 00:45:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 00:45:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:45:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:46:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:47:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 00:48:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:49:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:50:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-22 00:50:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:51:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:51:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:51:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-22 00:51:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:51:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:51:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:51:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:51:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:51:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:51:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:51:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:51:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 00:51:57 --> Could not find the language line "Home"
ERROR - 2025-01-22 00:51:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 01:14:11 --> Could not find the language line "Home"
ERROR - 2025-01-22 01:34:18 --> Could not find the language line "Home"
ERROR - 2025-01-22 01:41:46 --> Could not find the language line "Home"
ERROR - 2025-01-22 01:44:15 --> Could not find the language line "Home"
ERROR - 2025-01-22 01:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 02:00:38 --> Could not find the language line "Clothing"
ERROR - 2025-01-22 02:11:42 --> Could not find the language line "Home"
ERROR - 2025-01-22 02:14:10 --> Could not find the language line "Home"
ERROR - 2025-01-22 02:17:31 --> Could not find the language line "Home"
ERROR - 2025-01-22 02:19:15 --> Could not find the language line "Home"
ERROR - 2025-01-22 02:23:32 --> Could not find the language line "Home"
ERROR - 2025-01-22 02:38:51 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-22 02:40:15 --> Could not find the language line "Home"
ERROR - 2025-01-22 02:41:30 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-22 02:41:30 --> Could not find the language line "Home"
ERROR - 2025-01-22 02:41:30 --> Could not find the language line "Home"
ERROR - 2025-01-22 02:44:11 --> Could not find the language line "Home"
ERROR - 2025-01-22 03:10:22 --> Could not find the language line "Home"
ERROR - 2025-01-22 03:14:11 --> Could not find the language line "Home"
ERROR - 2025-01-22 03:19:06 --> Could not find the language line "Home"
ERROR - 2025-01-22 03:25:01 --> Could not find the language line "Home"
ERROR - 2025-01-22 03:25:33 --> Could not find the language line "Clothing"
ERROR - 2025-01-22 03:30:34 --> Could not find the language line "Bracelets"
ERROR - 2025-01-22 03:35:41 --> Could not find the language line "Home"
ERROR - 2025-01-22 03:44:24 --> Could not find the language line "Home"
ERROR - 2025-01-22 04:01:59 --> Could not find the language line "Perfume"
ERROR - 2025-01-22 04:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 04:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 04:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 04:14:11 --> Could not find the language line "Home"
ERROR - 2025-01-22 04:25:36 --> Could not find the language line "Clothing"
ERROR - 2025-01-22 04:44:13 --> Could not find the language line "Home"
ERROR - 2025-01-22 05:14:10 --> Could not find the language line "Home"
ERROR - 2025-01-22 05:23:33 --> Could not find the language line "Home"
ERROR - 2025-01-22 05:44:09 --> Could not find the language line "Home"
ERROR - 2025-01-22 05:58:53 --> Could not find the language line "Home"
ERROR - 2025-01-22 06:14:09 --> Could not find the language line "Home"
ERROR - 2025-01-22 06:44:10 --> Could not find the language line "Home"
ERROR - 2025-01-22 06:55:27 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-01-22 06:58:28 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2025-01-22 07:08:39 --> Could not find the language line "Home"
ERROR - 2025-01-22 07:12:11 --> Could not find the language line "Home"
ERROR - 2025-01-22 07:14:09 --> Could not find the language line "Home"
ERROR - 2025-01-22 07:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 07:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 07:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 07:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 07:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 07:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 07:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 07:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 07:43:02 --> Could not find the language line "Home"
ERROR - 2025-01-22 07:44:10 --> Could not find the language line "Home"
ERROR - 2025-01-22 07:45:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-22 07:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:07:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-22 08:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:14:10 --> Could not find the language line "Home"
ERROR - 2025-01-22 08:21:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-22 08:38:36 --> Could not find the language line "Home"
ERROR - 2025-01-22 08:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:44:10 --> Could not find the language line "Home"
ERROR - 2025-01-22 08:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 08:58:01 --> Could not find the language line "Home"
ERROR - 2025-01-22 08:58:22 --> Could not find the language line "Home"
ERROR - 2025-01-22 09:05:42 --> Could not find the language line "Clothing"
ERROR - 2025-01-22 09:14:11 --> Could not find the language line "Home"
ERROR - 2025-01-22 09:15:44 --> Could not find the language line "Home"
ERROR - 2025-01-22 09:16:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-22 09:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:34:17 --> Could not find the language line "Home"
ERROR - 2025-01-22 09:38:04 --> Could not find the language line "Home"
ERROR - 2025-01-22 09:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:46 --> Could not find the language line "Home"
ERROR - 2025-01-22 09:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 09:44:11 --> Could not find the language line "Home"
ERROR - 2025-01-22 09:47:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 09:52:43 --> Could not find the language line "Home"
ERROR - 2025-01-22 09:53:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-22 09:54:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-22 09:56:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-22 10:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 10:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 10:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 10:04:55 --> Could not find the language line "Home"
ERROR - 2025-01-22 10:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 10:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 10:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 10:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 10:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 10:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 10:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 10:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 10:14:12 --> Could not find the language line "Home"
ERROR - 2025-01-22 10:19:47 --> Could not find the language line "Home"
ERROR - 2025-01-22 10:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 10:25:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-22 10:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 10:32:34 --> Could not find the language line "Home"
ERROR - 2025-01-22 10:44:12 --> Could not find the language line "Home"
ERROR - 2025-01-22 10:55:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-22 11:06:08 --> Could not find the language line "Clothing"
ERROR - 2025-01-22 11:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 11:06:24 --> Could not find the language line "Clothing"
ERROR - 2025-01-22 11:06:28 --> Could not find the language line "Clothing"
ERROR - 2025-01-22 11:06:35 --> Could not find the language line "Clothing"
ERROR - 2025-01-22 11:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 11:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 11:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 11:10:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-22 11:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 11:14:12 --> Could not find the language line "Home"
ERROR - 2025-01-22 11:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 11:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 11:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 11:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 11:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 11:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 11:28:14 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-22 11:29:11 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-22 11:29:21 --> Could not find the language line "Home"
ERROR - 2025-01-22 11:29:21 --> Could not find the language line "Home"
ERROR - 2025-01-22 11:38:11 --> Could not find the language line "Other"
ERROR - 2025-01-22 11:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 11:44:12 --> Could not find the language line "Home"
ERROR - 2025-01-22 12:14:13 --> Could not find the language line "Home"
ERROR - 2025-01-22 12:26:52 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-22 12:28:38 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-22 12:34:29 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-22 12:44:13 --> Could not find the language line "Home"
ERROR - 2025-01-22 12:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 13:12:01 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-22 13:12:01 --> Could not find the language line "Home"
ERROR - 2025-01-22 13:12:01 --> Could not find the language line "Home"
ERROR - 2025-01-22 13:14:12 --> Could not find the language line "Home"
ERROR - 2025-01-22 13:14:18 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-22 13:21:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 13:21:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 13:21:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 13:21:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 13:21:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 13:21:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 13:21:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 13:21:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 13:21:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 13:21:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 13:21:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 13:21:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 13:21:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 13:21:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 13:21:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 13:21:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 13:21:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 13:21:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 13:21:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 13:21:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 13:21:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 13:21:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 13:21:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 13:21:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 13:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 13:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 13:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 13:44:13 --> Could not find the language line "Home"
ERROR - 2025-01-22 13:45:18 --> Could not find the language line "Home"
ERROR - 2025-01-22 14:14:13 --> Could not find the language line "Home"
ERROR - 2025-01-22 14:27:20 --> Could not find the language line "Home"
ERROR - 2025-01-22 14:44:14 --> Could not find the language line "Home"
ERROR - 2025-01-22 14:47:39 --> Could not find the language line "Home"
ERROR - 2025-01-22 14:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 14:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 14:57:57 --> Could not find the language line "Home"
ERROR - 2025-01-22 15:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 15:14:14 --> Could not find the language line "Home"
ERROR - 2025-01-22 15:35:08 --> Could not find the language line "Home"
ERROR - 2025-01-22 15:44:14 --> Could not find the language line "Home"
ERROR - 2025-01-22 15:55:20 --> Could not find the language line "Home"
ERROR - 2025-01-22 16:14:16 --> Could not find the language line "Home"
ERROR - 2025-01-22 16:39:34 --> Could not find the language line "Home"
ERROR - 2025-01-22 16:39:52 --> Could not find the language line "Other"
ERROR - 2025-01-22 16:44:15 --> Could not find the language line "Home"
ERROR - 2025-01-22 16:52:14 --> Could not find the language line "Home"
ERROR - 2025-01-22 16:55:35 --> Could not find the language line "Home"
ERROR - 2025-01-22 16:59:18 --> Could not find the language line "Home"
ERROR - 2025-01-22 17:07:37 --> Could not find the language line "Home"
ERROR - 2025-01-22 17:08:57 --> Could not find the language line "Home"
ERROR - 2025-01-22 17:14:14 --> Could not find the language line "Home"
ERROR - 2025-01-22 17:44:15 --> Could not find the language line "Home"
ERROR - 2025-01-22 17:45:57 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-22 17:53:41 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-22 17:53:41 --> Could not find the language line "Home"
ERROR - 2025-01-22 17:53:52 --> Could not find the language line "Home"
ERROR - 2025-01-22 17:57:53 --> Could not find the language line "Home"
ERROR - 2025-01-22 18:07:53 --> Could not find the language line "Home"
ERROR - 2025-01-22 18:09:53 --> Could not find the language line "Home"
ERROR - 2025-01-22 18:14:16 --> Could not find the language line "Home"
ERROR - 2025-01-22 18:44:16 --> Could not find the language line "Home"
ERROR - 2025-01-22 18:46:43 --> Could not find the language line "Home"
ERROR - 2025-01-22 18:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 19:14:16 --> Could not find the language line "Home"
ERROR - 2025-01-22 19:44:16 --> Could not find the language line "Home"
ERROR - 2025-01-22 19:50:51 --> Could not find the language line "Home"
ERROR - 2025-01-22 20:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 20:14:16 --> Could not find the language line "Home"
ERROR - 2025-01-22 20:44:17 --> Could not find the language line "Home"
ERROR - 2025-01-22 20:57:14 --> Could not find the language line "Home"
ERROR - 2025-01-22 20:57:16 --> Could not find the language line "Home"
ERROR - 2025-01-22 20:59:43 --> Could not find the language line "Home"
ERROR - 2025-01-22 21:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 21:00:41 --> Could not find the language line "Home"
ERROR - 2025-01-22 21:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 21:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 21:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 21:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 21:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 21:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 21:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 21:14:18 --> Could not find the language line "Home"
ERROR - 2025-01-22 21:44:17 --> Could not find the language line "Home"
ERROR - 2025-01-22 21:45:48 --> Could not find the language line "Home"
ERROR - 2025-01-22 21:51:11 --> Could not find the language line "Clothing"
ERROR - 2025-01-22 21:51:12 --> Could not find the language line "Clothing"
ERROR - 2025-01-22 21:51:12 --> Could not find the language line "Other"
ERROR - 2025-01-22 21:51:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 21:51:15 --> Could not find the language line "Other"
ERROR - 2025-01-22 21:51:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-22 21:51:18 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-22 21:52:58 --> Could not find the language line "Clothing"
ERROR - 2025-01-22 21:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-22 21:58:33 --> Could not find the language line "Clothing"
ERROR - 2025-01-22 21:59:32 --> Could not find the language line "Clothing"
ERROR - 2025-01-22 21:59:34 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-22 21:59:48 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-22 21:59:51 --> Could not find the language line "Other"
ERROR - 2025-01-22 21:59:51 --> Could not find the language line "Home"
ERROR - 2025-01-22 21:59:52 --> Could not find the language line "Other"
ERROR - 2025-01-22 22:14:19 --> Could not find the language line "Home"
ERROR - 2025-01-22 22:23:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-22 22:26:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 22:26:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 22:26:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 22:26:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 22:26:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 22:26:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 22:26:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 22:26:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 22:26:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 22:26:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 22:26:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 22:26:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 22:26:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 22:26:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 22:26:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 22:26:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 22:26:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 22:26:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 22:26:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 22:26:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 22:26:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 22:26:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-22 22:26:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-22 22:26:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-22 22:36:42 --> Could not find the language line "Home"
ERROR - 2025-01-22 22:44:18 --> Could not find the language line "Home"
ERROR - 2025-01-22 22:47:37 --> Could not find the language line "Home"
ERROR - 2025-01-22 22:58:51 --> Could not find the language line "Home"
ERROR - 2025-01-22 22:58:51 --> Could not find the language line "Home"
ERROR - 2025-01-22 22:58:52 --> Could not find the language line "Home"
ERROR - 2025-01-22 22:58:52 --> Could not find the language line "Home"
ERROR - 2025-01-22 23:01:14 --> Could not find the language line "Clothing"
ERROR - 2025-01-22 23:08:48 --> Could not find the language line "Home"
ERROR - 2025-01-22 23:14:25 --> Could not find the language line "Home"
ERROR - 2025-01-22 23:41:28 --> Could not find the language line "Home"
ERROR - 2025-01-22 23:44:24 --> Could not find the language line "Home"
ERROR - 2025-01-22 23:47:32 --> Could not find the language line "Home"
ERROR - 2025-01-22 23:52:50 --> Could not find the language line "Home"
