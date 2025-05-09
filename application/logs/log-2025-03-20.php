<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-20 00:07:22 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-20 00:07:23 --> Could not find the language line "Home"
ERROR - 2025-03-20 00:07:23 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-20 00:07:23 --> 404 Page Not Found: Bc/index
ERROR - 2025-03-20 00:07:23 --> 404 Page Not Found: Bk/index
ERROR - 2025-03-20 00:07:23 --> 404 Page Not Found: Backup/index
ERROR - 2025-03-20 00:07:24 --> 404 Page Not Found: New/index
ERROR - 2025-03-20 00:07:24 --> 404 Page Not Found: Main/index
ERROR - 2025-03-20 00:07:24 --> Could not find the language line "Home"
ERROR - 2025-03-20 00:10:40 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-20 00:12:24 --> Could not find the language line "Home"
ERROR - 2025-03-20 00:42:23 --> Could not find the language line "Home"
ERROR - 2025-03-20 00:54:08 --> Could not find the language line "Home"
ERROR - 2025-03-20 01:12:16 --> Could not find the language line "Home"
ERROR - 2025-03-20 01:18:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-20 01:19:56 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-20 01:34:23 --> Could not find the language line "Home"
ERROR - 2025-03-20 01:37:23 --> Could not find the language line "Bracelets"
ERROR - 2025-03-20 01:42:21 --> Could not find the language line "Home"
ERROR - 2025-03-20 01:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 01:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 02:12:15 --> Could not find the language line "Home"
ERROR - 2025-03-20 02:21:41 --> Could not find the language line "Home"
ERROR - 2025-03-20 02:29:25 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-20 02:42:19 --> Could not find the language line "Home"
ERROR - 2025-03-20 02:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 02:56:35 --> Could not find the language line "Home"
ERROR - 2025-03-20 03:11:36 --> Could not find the language line "Home"
ERROR - 2025-03-20 03:12:22 --> Could not find the language line "Home"
ERROR - 2025-03-20 03:33:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-20 03:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 03:37:45 --> Could not find the language line "Home"
ERROR - 2025-03-20 03:38:55 --> Could not find the language line "Home"
ERROR - 2025-03-20 03:42:15 --> Could not find the language line "Home"
ERROR - 2025-03-20 03:42:45 --> Could not find the language line "Home"
ERROR - 2025-03-20 03:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 03:45:48 --> Could not find the language line "Home"
ERROR - 2025-03-20 03:47:52 --> Could not find the language line "Home"
ERROR - 2025-03-20 03:56:59 --> Could not find the language line "Home"
ERROR - 2025-03-20 04:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 04:12:15 --> Could not find the language line "Home"
ERROR - 2025-03-20 04:42:28 --> Could not find the language line "Home"
ERROR - 2025-03-20 04:48:36 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-20 05:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 05:09:42 --> Could not find the language line "Home"
ERROR - 2025-03-20 05:12:15 --> Could not find the language line "Home"
ERROR - 2025-03-20 05:15:01 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-20 05:26:04 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-03-20 05:37:11 --> Could not find the language line "Home"
ERROR - 2025-03-20 05:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 05:42:17 --> Could not find the language line "Home"
ERROR - 2025-03-20 05:52:24 --> Could not find the language line "Home"
ERROR - 2025-03-20 06:12:15 --> Could not find the language line "Home"
ERROR - 2025-03-20 06:42:17 --> Could not find the language line "Home"
ERROR - 2025-03-20 06:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 06:44:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-20 06:47:37 --> Could not find the language line "Home"
ERROR - 2025-03-20 06:53:41 --> Could not find the language line "Clothing"
ERROR - 2025-03-20 06:58:39 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-20 06:58:48 --> Could not find the language line "Home"
ERROR - 2025-03-20 06:59:03 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-20 07:02:21 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-20 07:12:15 --> Could not find the language line "Home"
ERROR - 2025-03-20 07:13:17 --> Could not find the language line "Home"
ERROR - 2025-03-20 07:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:29:22 --> Could not find the language line "Home"
ERROR - 2025-03-20 07:30:46 --> Could not find the language line "Home"
ERROR - 2025-03-20 07:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:32:49 --> Could not find the language line "Home"
ERROR - 2025-03-20 07:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:33:28 --> Could not find the language line "Home"
ERROR - 2025-03-20 07:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:34:37 --> Could not find the language line "Home"
ERROR - 2025-03-20 07:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:36:23 --> Could not find the language line "Home"
ERROR - 2025-03-20 07:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:42:16 --> Could not find the language line "Home"
ERROR - 2025-03-20 07:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 07:52:05 --> Could not find the language line "Home"
ERROR - 2025-03-20 07:54:36 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-20 07:54:37 --> Could not find the language line "Home"
ERROR - 2025-03-20 07:54:37 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-20 07:54:38 --> 404 Page Not Found: Bc/index
ERROR - 2025-03-20 07:54:38 --> 404 Page Not Found: Bk/index
ERROR - 2025-03-20 07:54:38 --> 404 Page Not Found: Backup/index
ERROR - 2025-03-20 07:54:38 --> 404 Page Not Found: New/index
ERROR - 2025-03-20 07:54:39 --> 404 Page Not Found: Main/index
ERROR - 2025-03-20 07:54:39 --> Could not find the language line "Home"
ERROR - 2025-03-20 07:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:12:16 --> Could not find the language line "Home"
ERROR - 2025-03-20 08:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:34:33 --> Could not find the language line "Home"
ERROR - 2025-03-20 08:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:38:20 --> Could not find the language line "Home"
ERROR - 2025-03-20 08:42:16 --> Could not find the language line "Home"
ERROR - 2025-03-20 08:44:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-20 08:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:52:25 --> Could not find the language line "Home"
ERROR - 2025-03-20 08:52:59 --> Could not find the language line "Home"
ERROR - 2025-03-20 08:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 08:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:05:37 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:06:06 --> 404 Page Not Found: Users/products
ERROR - 2025-03-20 09:06:44 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:10:04 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:12:18 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:12:41 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:13:24 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:13:59 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:14:02 --> Could not find the language line "Other"
ERROR - 2025-03-20 09:18:17 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:18:40 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:22:01 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-20 09:23:44 --> 404 Page Not Found: Users/users
ERROR - 2025-03-20 09:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:34:55 --> Could not find the language line "users"
ERROR - 2025-03-20 09:36:40 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:38:14 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:38:44 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:42:17 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:44:57 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:45:01 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:46:20 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:47:52 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:48:07 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:50:13 --> Could not find the language line "Home"
ERROR - 2025-03-20 09:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 09:59:38 --> Could not find the language line "Home"
ERROR - 2025-03-20 10:00:53 --> Could not find the language line "users"
ERROR - 2025-03-20 10:04:50 --> Could not find the language line "Home"
ERROR - 2025-03-20 10:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:12:17 --> Could not find the language line "Home"
ERROR - 2025-03-20 10:13:21 --> Could not find the language line "Home"
ERROR - 2025-03-20 10:14:48 --> Could not find the language line "users"
ERROR - 2025-03-20 10:16:52 --> Could not find the language line "Home"
ERROR - 2025-03-20 10:18:55 --> Could not find the language line "users"
ERROR - 2025-03-20 10:27:48 --> Could not find the language line "Home"
ERROR - 2025-03-20 10:30:56 --> Could not find the language line "users"
ERROR - 2025-03-20 10:34:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-20 10:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:37:32 --> Could not find the language line "Home"
ERROR - 2025-03-20 10:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:42:17 --> Could not find the language line "Home"
ERROR - 2025-03-20 10:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:46:36 --> Could not find the language line "Home"
ERROR - 2025-03-20 10:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 10:48:49 --> Could not find the language line "users"
ERROR - 2025-03-20 10:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 11:07:44 --> Could not find the language line "Home"
ERROR - 2025-03-20 11:11:48 --> Could not find the language line "Home"
ERROR - 2025-03-20 11:12:17 --> Could not find the language line "Home"
ERROR - 2025-03-20 11:17:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-20 11:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 11:42:17 --> Could not find the language line "Home"
ERROR - 2025-03-20 11:53:42 --> Could not find the language line "Home"
ERROR - 2025-03-20 11:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 11:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 11:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 12:05:12 --> Could not find the language line "Clothing"
ERROR - 2025-03-20 12:05:29 --> Could not find the language line "Home"
ERROR - 2025-03-20 12:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 12:12:19 --> Could not find the language line "Home"
ERROR - 2025-03-20 12:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 12:20:17 --> Could not find the language line "Home"
ERROR - 2025-03-20 12:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 12:25:28 --> Could not find the language line "Home"
ERROR - 2025-03-20 12:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 12:33:51 --> Could not find the language line "Home"
ERROR - 2025-03-20 12:33:52 --> Could not find the language line "Home"
ERROR - 2025-03-20 12:42:20 --> Could not find the language line "Home"
ERROR - 2025-03-20 12:43:38 --> Could not find the language line "products"
ERROR - 2025-03-20 12:45:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-03-20 12:45:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-03-20 12:45:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-20 12:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 12:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 13:12:18 --> Could not find the language line "Home"
ERROR - 2025-03-20 13:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 13:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 13:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 13:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 13:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 13:16:52 --> Could not find the language line "Home"
ERROR - 2025-03-20 13:16:53 --> Could not find the language line "Home"
ERROR - 2025-03-20 13:19:50 --> Could not find the language line "Home"
ERROR - 2025-03-20 13:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 13:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 13:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 13:38:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-20 13:38:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-20 13:39:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-20 13:39:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-20 13:40:28 --> Could not find the language line "Home"
ERROR - 2025-03-20 13:42:18 --> Could not find the language line "Home"
ERROR - 2025-03-20 13:46:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-20 13:46:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-20 13:46:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-20 13:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 13:53:09 --> Could not find the language line "Home"
ERROR - 2025-03-20 13:53:13 --> Could not find the language line "Home"
ERROR - 2025-03-20 14:06:53 --> Could not find the language line "Home"
ERROR - 2025-03-20 14:07:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-20 14:12:19 --> Could not find the language line "Home"
ERROR - 2025-03-20 14:20:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-20 14:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 14:22:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-20 14:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 14:22:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-20 14:26:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-20 14:26:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-20 14:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 14:39:03 --> Could not find the language line "Home"
ERROR - 2025-03-20 14:42:19 --> Could not find the language line "Home"
ERROR - 2025-03-20 14:44:46 --> Could not find the language line "Home"
ERROR - 2025-03-20 14:56:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-20 15:02:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-20 15:02:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-20 15:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 15:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 15:10:25 --> Could not find the language line "Home"
ERROR - 2025-03-20 15:12:20 --> Could not find the language line "Home"
ERROR - 2025-03-20 15:15:27 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2025-03-20 15:31:42 --> Could not find the language line "Home"
ERROR - 2025-03-20 15:31:48 --> Could not find the language line "Home"
ERROR - 2025-03-20 15:31:55 --> Could not find the language line "Home"
ERROR - 2025-03-20 15:32:00 --> Could not find the language line "Home"
ERROR - 2025-03-20 15:32:02 --> Could not find the language line "Home"
ERROR - 2025-03-20 15:37:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-20 15:38:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-20 15:39:15 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-20 15:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 15:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 15:39:15 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-20 15:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 15:39:15 --> 404 Page Not Found: Assets/img
ERROR - 2025-03-20 15:39:16 --> 404 Page Not Found: Assets/img
ERROR - 2025-03-20 15:39:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-20 15:40:05 --> Could not find the language line "Home"
ERROR - 2025-03-20 15:41:49 --> Could not find the language line "Home"
ERROR - 2025-03-20 15:42:20 --> Could not find the language line "Home"
ERROR - 2025-03-20 15:48:10 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-20 15:48:10 --> Could not find the language line "Home"
ERROR - 2025-03-20 15:48:11 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-20 15:48:11 --> 404 Page Not Found: Bc/index
ERROR - 2025-03-20 15:48:11 --> 404 Page Not Found: Bk/index
ERROR - 2025-03-20 15:48:11 --> 404 Page Not Found: Backup/index
ERROR - 2025-03-20 15:48:12 --> 404 Page Not Found: New/index
ERROR - 2025-03-20 15:48:12 --> 404 Page Not Found: Main/index
ERROR - 2025-03-20 15:48:12 --> Could not find the language line "Home"
ERROR - 2025-03-20 15:49:47 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2025-03-20 16:12:20 --> Could not find the language line "Home"
ERROR - 2025-03-20 16:15:45 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2025-03-20 16:18:52 --> Could not find the language line "Socks"
ERROR - 2025-03-20 16:19:03 --> Could not find the language line "Home"
ERROR - 2025-03-20 16:25:26 --> Could not find the language line "Home"
ERROR - 2025-03-20 16:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 16:32:48 --> Could not find the language line "Home"
ERROR - 2025-03-20 16:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 16:38:04 --> Could not find the language line "Home"
ERROR - 2025-03-20 16:42:21 --> Could not find the language line "Home"
ERROR - 2025-03-20 16:45:37 --> Could not find the language line "Home"
ERROR - 2025-03-20 16:46:18 --> Could not find the language line "Home"
ERROR - 2025-03-20 16:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 16:51:23 --> Could not find the language line "Home"
ERROR - 2025-03-20 16:51:29 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2025-03-20 17:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 17:12:21 --> Could not find the language line "Home"
ERROR - 2025-03-20 17:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 17:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 17:25:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-20 17:34:45 --> Could not find the language line "Home"
ERROR - 2025-03-20 17:37:46 --> Could not find the language line "Home"
ERROR - 2025-03-20 17:40:41 --> Could not find the language line "Home"
ERROR - 2025-03-20 17:42:21 --> Could not find the language line "Home"
ERROR - 2025-03-20 17:45:46 --> Could not find the language line "Home"
ERROR - 2025-03-20 17:46:11 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-20 17:47:45 --> Could not find the language line "Home"
ERROR - 2025-03-20 17:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 18:12:21 --> Could not find the language line "Home"
ERROR - 2025-03-20 18:13:25 --> Could not find the language line "Home"
ERROR - 2025-03-20 18:25:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-20 18:29:26 --> Could not find the language line "Home"
ERROR - 2025-03-20 18:42:22 --> Could not find the language line "Home"
ERROR - 2025-03-20 18:56:13 --> Could not find the language line "Home"
ERROR - 2025-03-20 18:56:59 --> Could not find the language line "Home"
ERROR - 2025-03-20 18:57:49 --> Could not find the language line "Home"
ERROR - 2025-03-20 19:00:39 --> Could not find the language line "Home"
ERROR - 2025-03-20 19:05:38 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-20 19:05:39 --> Could not find the language line "Home"
ERROR - 2025-03-20 19:05:39 --> Could not find the language line "Home"
ERROR - 2025-03-20 19:12:22 --> Could not find the language line "Home"
ERROR - 2025-03-20 19:37:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-20 19:42:22 --> Could not find the language line "Home"
ERROR - 2025-03-20 19:51:33 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-20 20:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 20:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 20:12:23 --> Could not find the language line "Home"
ERROR - 2025-03-20 20:18:34 --> Could not find the language line "Home"
ERROR - 2025-03-20 20:26:33 --> Could not find the language line "Home"
ERROR - 2025-03-20 20:29:53 --> Could not find the language line "Home"
ERROR - 2025-03-20 20:37:19 --> Could not find the language line "Socks"
ERROR - 2025-03-20 20:37:36 --> Could not find the language line "Home"
ERROR - 2025-03-20 20:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 20:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 20:41:08 --> Could not find the language line "Home"
ERROR - 2025-03-20 20:42:22 --> Could not find the language line "Home"
ERROR - 2025-03-20 20:49:23 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-20 20:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 20:55:58 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-20 21:03:09 --> Could not find the language line "Home"
ERROR - 2025-03-20 21:12:25 --> Could not find the language line "Home"
ERROR - 2025-03-20 21:13:02 --> Could not find the language line "Home"
ERROR - 2025-03-20 21:24:21 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-20 21:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 21:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 21:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 21:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 21:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 21:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 21:41:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-20 21:42:24 --> Could not find the language line "Home"
ERROR - 2025-03-20 21:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 21:56:47 --> Could not find the language line "Home"
ERROR - 2025-03-20 21:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 22:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 22:12:27 --> Could not find the language line "Home"
ERROR - 2025-03-20 22:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 22:22:58 --> Could not find the language line "Home"
ERROR - 2025-03-20 22:41:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-20 22:42:37 --> Could not find the language line "Home"
ERROR - 2025-03-20 22:46:44 --> Could not find the language line "Clothing"
ERROR - 2025-03-20 22:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 22:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 22:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 22:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 22:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 22:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 22:53:42 --> Could not find the language line "Home"
ERROR - 2025-03-20 22:54:29 --> Could not find the language line "Home"
ERROR - 2025-03-20 23:12:34 --> Could not find the language line "Home"
ERROR - 2025-03-20 23:17:37 --> Could not find the language line "Home"
ERROR - 2025-03-20 23:27:34 --> Could not find the language line "Home"
ERROR - 2025-03-20 23:36:26 --> Could not find the language line "Home"
ERROR - 2025-03-20 23:42:37 --> Could not find the language line "Home"
ERROR - 2025-03-20 23:43:47 --> Could not find the language line "Home"
ERROR - 2025-03-20 23:46:41 --> Could not find the language line "Home"
ERROR - 2025-03-20 23:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 23:52:10 --> Could not find the language line "Home"
ERROR - 2025-03-20 23:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-20 23:59:19 --> Could not find the language line "Home"
