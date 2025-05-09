<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-13 00:15:53 --> Could not find the language line "Home"
ERROR - 2024-08-13 00:46:02 --> Could not find the language line "Home"
ERROR - 2024-08-13 01:15:54 --> Could not find the language line "Home"
ERROR - 2024-08-13 01:24:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-13 01:31:34 --> Could not find the language line "Socks"
ERROR - 2024-08-13 01:32:12 --> Could not find the language line "Other"
ERROR - 2024-08-13 01:35:45 --> Could not find the language line "Home"
ERROR - 2024-08-13 01:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 01:39:34 --> Could not find the language line "Home"
ERROR - 2024-08-13 01:45:55 --> Could not find the language line "Home"
ERROR - 2024-08-13 01:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 02:15:55 --> Could not find the language line "Home"
ERROR - 2024-08-13 02:45:55 --> Could not find the language line "Home"
ERROR - 2024-08-13 03:15:56 --> Could not find the language line "Home"
ERROR - 2024-08-13 03:45:56 --> Could not find the language line "Home"
ERROR - 2024-08-13 03:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 03:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 04:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 04:06:32 --> Could not find the language line "Home"
ERROR - 2024-08-13 04:13:35 --> Could not find the language line "Home"
ERROR - 2024-08-13 04:15:57 --> Could not find the language line "Home"
ERROR - 2024-08-13 04:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 04:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 04:40:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-13 04:40:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-13 04:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 04:45:59 --> Could not find the language line "Home"
ERROR - 2024-08-13 05:09:19 --> Could not find the language line "Other"
ERROR - 2024-08-13 05:11:07 --> Could not find the language line "Home"
ERROR - 2024-08-13 05:15:08 --> Could not find the language line "Other"
ERROR - 2024-08-13 05:15:57 --> Could not find the language line "Home"
ERROR - 2024-08-13 05:17:28 --> Could not find the language line "Socks"
ERROR - 2024-08-13 05:45:58 --> Could not find the language line "Home"
ERROR - 2024-08-13 05:59:58 --> Could not find the language line "Home"
ERROR - 2024-08-13 06:00:30 --> Could not find the language line "Home"
ERROR - 2024-08-13 06:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:04:31 --> Could not find the language line "Home"
ERROR - 2024-08-13 06:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:15:56 --> Could not find the language line "Home"
ERROR - 2024-08-13 06:15:58 --> Could not find the language line "Home"
ERROR - 2024-08-13 06:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:33:20 --> Could not find the language line "Home"
ERROR - 2024-08-13 06:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:34:20 --> Could not find the language line "Home"
ERROR - 2024-08-13 06:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:41:58 --> Could not find the language line "Home"
ERROR - 2024-08-13 06:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:45:59 --> Could not find the language line "Home"
ERROR - 2024-08-13 06:47:48 --> Could not find the language line "Home"
ERROR - 2024-08-13 06:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 06:51:06 --> Could not find the language line "Home"
ERROR - 2024-08-13 06:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:15:58 --> Could not find the language line "Home"
ERROR - 2024-08-13 07:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:45:59 --> Could not find the language line "Home"
ERROR - 2024-08-13 07:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 07:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:15:59 --> Could not find the language line "Home"
ERROR - 2024-08-13 08:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:25:02 --> Could not find the language line "Home"
ERROR - 2024-08-13 08:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:46:00 --> Could not find the language line "Home"
ERROR - 2024-08-13 08:47:53 --> Could not find the language line "Home"
ERROR - 2024-08-13 08:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:51:49 --> Could not find the language line "Home"
ERROR - 2024-08-13 08:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 08:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 09:12:56 --> Could not find the language line "Home"
ERROR - 2024-08-13 09:16:00 --> Could not find the language line "Home"
ERROR - 2024-08-13 09:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 09:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 09:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 09:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 09:18:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-13 09:18:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-13 09:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 09:46:00 --> Could not find the language line "Home"
ERROR - 2024-08-13 09:48:51 --> Could not find the language line "Home"
ERROR - 2024-08-13 09:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 09:51:00 --> Could not find the language line "Home"
ERROR - 2024-08-13 09:51:15 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 10:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:09:57 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 10:10:00 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 10:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:15:54 --> Could not find the language line "Home"
ERROR - 2024-08-13 10:16:02 --> Could not find the language line "Home"
ERROR - 2024-08-13 10:16:57 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 10:17:08 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 10:18:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-08-13 10:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:35:47 --> Could not find the language line "Home"
ERROR - 2024-08-13 10:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:37:12 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-08-13 10:37:13 --> 404 Page Not Found: Wp/index
ERROR - 2024-08-13 10:37:13 --> 404 Page Not Found: Blog/index
ERROR - 2024-08-13 10:37:16 --> 404 Page Not Found: New/index
ERROR - 2024-08-13 10:37:21 --> 404 Page Not Found: Backup/index
ERROR - 2024-08-13 10:37:22 --> 404 Page Not Found: Temp/index
ERROR - 2024-08-13 10:37:22 --> Could not find the language line "Home"
ERROR - 2024-08-13 10:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:41:08 --> Could not find the language line "Home"
ERROR - 2024-08-13 10:41:25 --> Could not find the language line "Home"
ERROR - 2024-08-13 10:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:46:01 --> Could not find the language line "Home"
ERROR - 2024-08-13 10:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:49:05 --> Could not find the language line "Home"
ERROR - 2024-08-13 10:49:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-08-13 10:49:51 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 10:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 10:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 11:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 11:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 11:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 11:16:01 --> Could not find the language line "Home"
ERROR - 2024-08-13 11:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 11:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 11:46:02 --> Could not find the language line "Home"
ERROR - 2024-08-13 11:50:12 --> Could not find the language line "Home"
ERROR - 2024-08-13 12:01:44 --> Could not find the language line "Home"
ERROR - 2024-08-13 12:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:02:11 --> Could not find the language line "Home"
ERROR - 2024-08-13 12:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:04:30 --> Could not find the language line "Home"
ERROR - 2024-08-13 12:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:05:51 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 12:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:06:54 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 12:07:00 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 12:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:09:34 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 12:09:45 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 12:12:09 --> Could not find the language line "Home"
ERROR - 2024-08-13 12:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:14:31 --> Could not find the language line "Home"
ERROR - 2024-08-13 12:14:33 --> Could not find the language line "Home"
ERROR - 2024-08-13 12:15:25 --> Could not find the language line "Home"
ERROR - 2024-08-13 12:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:16:05 --> Could not find the language line "Home"
ERROR - 2024-08-13 12:27:20 --> Could not find the language line "Home"
ERROR - 2024-08-13 12:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:46:03 --> Could not find the language line "Home"
ERROR - 2024-08-13 12:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:49:02 --> Could not find the language line "Home"
ERROR - 2024-08-13 12:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 12:53:36 --> Could not find the language line "Home"
ERROR - 2024-08-13 12:55:04 --> Could not find the language line "Home"
ERROR - 2024-08-13 13:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:03:35 --> Could not find the language line "Home"
ERROR - 2024-08-13 13:03:46 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 13:04:42 --> Could not find the language line "Perfume"
ERROR - 2024-08-13 13:05:23 --> Could not find the language line "Bracelets"
ERROR - 2024-08-13 13:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:06:40 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 13:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:07:29 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 13:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:08:52 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 13:09:47 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 13:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:10:19 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 13:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:11:04 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 13:12:04 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 13:12:26 --> Could not find the language line "Bracelets"
ERROR - 2024-08-13 13:12:38 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 13:12:52 --> Could not find the language line "Other"
ERROR - 2024-08-13 13:13:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-13 13:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:15:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-13 13:16:03 --> Could not find the language line "Home"
ERROR - 2024-08-13 13:17:00 --> Could not find the language line "Home"
ERROR - 2024-08-13 13:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:18:31 --> Could not find the language line "Home"
ERROR - 2024-08-13 13:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:19:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-13 13:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:20:04 --> Could not find the language line "Home"
ERROR - 2024-08-13 13:20:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-13 13:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:20:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-13 13:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:20:42 --> Could not find the language line "Home"
ERROR - 2024-08-13 13:20:43 --> Could not find the language line "Other"
ERROR - 2024-08-13 13:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:24:31 --> Could not find the language line "Socks"
ERROR - 2024-08-13 13:24:50 --> Could not find the language line "Socks"
ERROR - 2024-08-13 13:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:26:55 --> Could not find the language line "Other"
ERROR - 2024-08-13 13:27:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-13 13:27:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-13 13:27:37 --> Could not find the language line "Socks"
ERROR - 2024-08-13 13:27:55 --> Could not find the language line "Socks"
ERROR - 2024-08-13 13:28:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-13 13:28:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-13 13:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:28:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-13 13:28:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-13 13:28:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-13 13:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:30:16 --> Could not find the language line "Home"
ERROR - 2024-08-13 13:30:20 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 13:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:30:37 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 13:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:31:24 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 13:31:34 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 13:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:31:56 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 13:32:04 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 13:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:35:18 --> Could not find the language line "Home"
ERROR - 2024-08-13 13:36:14 --> Could not find the language line "Home"
ERROR - 2024-08-13 13:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:46:03 --> Could not find the language line "Home"
ERROR - 2024-08-13 13:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 13:52:59 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-08-13 14:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 14:16:03 --> Could not find the language line "Home"
ERROR - 2024-08-13 14:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 14:23:21 --> Could not find the language line "Home"
ERROR - 2024-08-13 14:43:40 --> Could not find the language line "Home"
ERROR - 2024-08-13 14:43:46 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 14:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 14:44:12 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 14:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 14:44:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 14:44:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 14:44:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 14:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 14:44:55 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 14:45:12 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 14:45:13 --> Could not find the language line "Home"
ERROR - 2024-08-13 14:46:04 --> Could not find the language line "Home"
ERROR - 2024-08-13 14:47:05 --> Could not find the language line "Home"
ERROR - 2024-08-13 14:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 14:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 15:06:32 --> Could not find the language line "Home"
ERROR - 2024-08-13 15:16:04 --> Could not find the language line "Home"
ERROR - 2024-08-13 15:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 15:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 15:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 15:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 15:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 15:35:36 --> Could not find the language line "Home"
ERROR - 2024-08-13 15:35:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 15:36:17 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 15:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 15:37:07 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 15:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 15:37:47 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 15:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 15:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 15:38:07 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 15:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 15:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 15:46:04 --> Could not find the language line "Home"
ERROR - 2024-08-13 15:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 15:58:21 --> Could not find the language line "Home"
ERROR - 2024-08-13 15:59:06 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-08-13 15:59:06 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-08-13 15:59:06 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-08-13 15:59:17 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-08-13 15:59:17 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-08-13 16:00:13 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-08-13 16:00:13 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-08-13 16:00:13 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2024-08-13 16:00:13 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-08-13 16:00:13 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2024-08-13 16:00:13 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-08-13 16:00:13 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-08-13 16:00:13 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-08-13 16:00:24 --> Could not find the language line "Home"
ERROR - 2024-08-13 16:02:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-08-13 16:02:09 --> Could not find the language line "Home"
ERROR - 2024-08-13 16:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 16:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 16:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 16:16:05 --> Could not find the language line "Home"
ERROR - 2024-08-13 16:46:05 --> Could not find the language line "Home"
ERROR - 2024-08-13 17:02:27 --> Could not find the language line "Home"
ERROR - 2024-08-13 17:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 17:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 17:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 17:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 17:05:25 --> Could not find the language line "Home"
ERROR - 2024-08-13 17:05:33 --> Could not find the language line "Socks"
ERROR - 2024-08-13 17:05:40 --> Could not find the language line "Socks"
ERROR - 2024-08-13 17:05:46 --> Could not find the language line "Home"
ERROR - 2024-08-13 17:06:58 --> Could not find the language line "Home"
ERROR - 2024-08-13 17:07:02 --> Could not find the language line "Bracelets"
ERROR - 2024-08-13 17:07:15 --> Could not find the language line "Bracelets"
ERROR - 2024-08-13 17:07:17 --> Could not find the language line "Bracelets"
ERROR - 2024-08-13 17:07:18 --> Could not find the language line "Home"
ERROR - 2024-08-13 17:07:22 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-13 17:07:36 --> Could not find the language line "Home"
ERROR - 2024-08-13 17:07:37 --> Could not find the language line "Socks"
ERROR - 2024-08-13 17:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 17:16:06 --> Could not find the language line "Home"
ERROR - 2024-08-13 17:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 17:19:54 --> Could not find the language line "Socks"
ERROR - 2024-08-13 17:28:36 --> Could not find the language line "Home"
ERROR - 2024-08-13 17:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 17:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 17:42:54 --> 404 Page Not Found: Cart/cart
ERROR - 2024-08-13 17:46:06 --> Could not find the language line "Home"
ERROR - 2024-08-13 18:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 18:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 18:13:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-13 18:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 18:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 18:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 18:16:06 --> Could not find the language line "Home"
ERROR - 2024-08-13 18:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 18:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 18:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 18:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 18:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 18:39:16 --> Could not find the language line "Home"
ERROR - 2024-08-13 18:39:19 --> Could not find the language line "Home"
ERROR - 2024-08-13 18:46:07 --> Could not find the language line "Home"
ERROR - 2024-08-13 18:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 18:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 18:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 19:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 19:12:30 --> Could not find the language line "Home"
ERROR - 2024-08-13 19:16:07 --> Could not find the language line "Home"
ERROR - 2024-08-13 19:42:36 --> Could not find the language line "Home"
ERROR - 2024-08-13 19:43:18 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 19:43:45 --> Could not find the language line "Home"
ERROR - 2024-08-13 19:44:03 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 19:46:08 --> Could not find the language line "Home"
ERROR - 2024-08-13 19:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 20:00:56 --> Could not find the language line "Clothing"
ERROR - 2024-08-13 20:00:58 --> Could not find the language line "Home"
ERROR - 2024-08-13 20:01:01 --> Could not find the language line "Home"
ERROR - 2024-08-13 20:15:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-13 20:15:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-13 20:15:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-13 20:15:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-13 20:15:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-13 20:15:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-13 20:15:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-13 20:15:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-13 20:15:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-13 20:15:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-13 20:15:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-13 20:15:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-13 20:16:08 --> Could not find the language line "Home"
ERROR - 2024-08-13 20:46:08 --> Could not find the language line "Home"
ERROR - 2024-08-13 21:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 21:16:09 --> Could not find the language line "Home"
ERROR - 2024-08-13 21:44:17 --> Could not find the language line "Home"
ERROR - 2024-08-13 21:46:10 --> Could not find the language line "Home"
ERROR - 2024-08-13 22:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 22:08:27 --> Could not find the language line "Home"
ERROR - 2024-08-13 22:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 22:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 22:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 22:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 22:12:52 --> Could not find the language line "Home"
ERROR - 2024-08-13 22:14:59 --> Could not find the language line "Home"
ERROR - 2024-08-13 22:16:11 --> Could not find the language line "Home"
ERROR - 2024-08-13 22:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 22:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 22:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 22:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-13 22:46:11 --> Could not find the language line "Home"
ERROR - 2024-08-13 22:54:42 --> Could not find the language line "Socks"
ERROR - 2024-08-13 23:03:03 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-08-13 23:16:13 --> Could not find the language line "Home"
ERROR - 2024-08-13 23:46:21 --> Could not find the language line "Home"
