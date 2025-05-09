<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-15 00:16:32 --> Could not find the language line "Home"
ERROR - 2024-08-15 00:46:31 --> Could not find the language line "Home"
ERROR - 2024-08-15 01:16:31 --> Could not find the language line "Home"
ERROR - 2024-08-15 01:46:30 --> Could not find the language line "Home"
ERROR - 2024-08-15 02:16:31 --> Could not find the language line "Home"
ERROR - 2024-08-15 02:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 02:46:31 --> Could not find the language line "Home"
ERROR - 2024-08-15 02:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 03:16:48 --> Could not find the language line "Home"
ERROR - 2024-08-15 03:46:39 --> Could not find the language line "Home"
ERROR - 2024-08-15 04:16:35 --> Could not find the language line "Home"
ERROR - 2024-08-15 04:46:33 --> Could not find the language line "Home"
ERROR - 2024-08-15 05:07:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-15 05:16:35 --> Could not find the language line "Home"
ERROR - 2024-08-15 05:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 05:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 05:19:31 --> Could not find the language line "Disclaimer"
ERROR - 2024-08-15 05:19:34 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-15 05:19:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-15 05:19:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-15 05:24:08 --> Could not find the language line "Other"
ERROR - 2024-08-15 05:25:50 --> Could not find the language line "Socks"
ERROR - 2024-08-15 05:46:35 --> Could not find the language line "Home"
ERROR - 2024-08-15 05:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 05:48:04 --> 404 Page Not Found: Cart/cart
ERROR - 2024-08-15 06:04:24 --> Could not find the language line "Home"
ERROR - 2024-08-15 06:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 06:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 06:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 06:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 06:16:34 --> Could not find the language line "Home"
ERROR - 2024-08-15 06:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 06:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 06:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 06:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 06:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 06:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 06:46:35 --> Could not find the language line "Home"
ERROR - 2024-08-15 07:13:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-15 07:13:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-15 07:16:34 --> Could not find the language line "Home"
ERROR - 2024-08-15 07:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 07:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 07:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 07:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 07:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 07:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 07:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 07:46:36 --> Could not find the language line "Home"
ERROR - 2024-08-15 07:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 07:48:07 --> Could not find the language line "Home"
ERROR - 2024-08-15 07:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 07:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 07:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 07:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 07:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 07:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:04:12 --> Could not find the language line "Home"
ERROR - 2024-08-15 08:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:09:39 --> Could not find the language line "Home"
ERROR - 2024-08-15 08:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:16:35 --> Could not find the language line "Home"
ERROR - 2024-08-15 08:18:01 --> Could not find the language line "Home"
ERROR - 2024-08-15 08:28:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-15 08:28:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-15 08:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:39:25 --> Could not find the language line "Home"
ERROR - 2024-08-15 08:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:46:35 --> Could not find the language line "Home"
ERROR - 2024-08-15 08:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 08:52:20 --> Could not find the language line "Home"
ERROR - 2024-08-15 09:00:07 --> Could not find the language line "Home"
ERROR - 2024-08-15 09:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:03:29 --> Could not find the language line "Home"
ERROR - 2024-08-15 09:12:30 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-15 09:12:45 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-15 09:12:57 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-15 09:12:59 --> Could not find the language line "Home"
ERROR - 2024-08-15 09:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:16:23 --> Could not find the language line "Socks"
ERROR - 2024-08-15 09:16:33 --> Could not find the language line "Socks"
ERROR - 2024-08-15 09:16:36 --> Could not find the language line "Home"
ERROR - 2024-08-15 09:16:49 --> Could not find the language line "Home"
ERROR - 2024-08-15 09:19:14 --> Could not find the language line "Socks"
ERROR - 2024-08-15 09:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:19:52 --> Could not find the language line "Socks"
ERROR - 2024-08-15 09:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:20:00 --> Could not find the language line "Socks"
ERROR - 2024-08-15 09:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:21:10 --> Could not find the language line "Home"
ERROR - 2024-08-15 09:21:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-15 09:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:30:48 --> Could not find the language line "Other"
ERROR - 2024-08-15 09:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 09:46:37 --> Could not find the language line "Home"
ERROR - 2024-08-15 10:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:06:29 --> Could not find the language line "Home"
ERROR - 2024-08-15 10:06:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-15 10:06:47 --> Could not find the language line "Home"
ERROR - 2024-08-15 10:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:15:02 --> Could not find the language line "Home"
ERROR - 2024-08-15 10:16:37 --> Could not find the language line "Home"
ERROR - 2024-08-15 10:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:25:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 10:26:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 10:26:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 10:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:26:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 10:26:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 10:27:04 --> Could not find the language line "Home"
ERROR - 2024-08-15 10:27:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 10:27:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 10:27:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-15 10:28:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 10:28:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-15 10:28:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 10:28:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 10:28:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 10:28:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 10:28:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 10:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 10:46:37 --> Could not find the language line "Home"
ERROR - 2024-08-15 10:59:28 --> Could not find the language line "Home"
ERROR - 2024-08-15 10:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 11:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 11:16:37 --> Could not find the language line "Home"
ERROR - 2024-08-15 11:46:38 --> Could not find the language line "Home"
ERROR - 2024-08-15 11:49:03 --> Could not find the language line "Home"
ERROR - 2024-08-15 11:51:23 --> Could not find the language line "Home"
ERROR - 2024-08-15 11:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 11:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 11:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 11:52:27 --> Could not find the language line "Home"
ERROR - 2024-08-15 11:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 11:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 11:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 11:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 11:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 11:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 11:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 11:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:00:38 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:06:06 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:08:51 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:11:17 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:11:29 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:11:30 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:16:39 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:33:53 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:42:00 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:46:39 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:49:50 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:49:54 --> Could not find the language line "Bracelets"
ERROR - 2024-08-15 12:49:56 --> Could not find the language line "Bracelets"
ERROR - 2024-08-15 12:49:56 --> Could not find the language line "Bracelets"
ERROR - 2024-08-15 12:50:08 --> Could not find the language line "Bracelets"
ERROR - 2024-08-15 12:50:14 --> Could not find the language line "Bracelets"
ERROR - 2024-08-15 12:50:15 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:50:19 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:50:31 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:50:36 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:50:51 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:51:09 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:51:20 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:51:35 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:51:50 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:52:05 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:52:12 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:52:13 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:52:23 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:52:29 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:52:40 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:52:46 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:53:06 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:53:22 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:53:31 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:53:39 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:54:03 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:54:08 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:54:09 --> Could not find the language line "Clothing"
ERROR - 2024-08-15 12:54:13 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:54:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-15 12:54:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-15 12:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 12:56:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-15 12:58:09 --> Could not find the language line "Home"
ERROR - 2024-08-15 12:58:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 13:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:08:53 --> Could not find the language line "Home"
ERROR - 2024-08-15 13:09:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 13:15:35 --> 404 Page Not Found: Storage/settings
ERROR - 2024-08-15 13:16:39 --> Could not find the language line "Home"
ERROR - 2024-08-15 13:17:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 13:18:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 13:19:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 13:20:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 13:20:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-15 13:21:56 --> Could not find the language line "Home"
ERROR - 2024-08-15 13:22:06 --> Could not find the language line "Socks"
ERROR - 2024-08-15 13:22:22 --> Could not find the language line "Socks"
ERROR - 2024-08-15 13:22:27 --> Could not find the language line "Socks"
ERROR - 2024-08-15 13:22:27 --> Could not find the language line "Socks"
ERROR - 2024-08-15 13:22:27 --> Could not find the language line "Socks"
ERROR - 2024-08-15 13:22:38 --> Could not find the language line "Home"
ERROR - 2024-08-15 13:22:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-15 13:22:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-15 13:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:22:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-15 13:22:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-15 13:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:24:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-15 13:24:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-15 13:24:09 --> Could not find the language line "Home"
ERROR - 2024-08-15 13:36:22 --> Could not find the language line "Other"
ERROR - 2024-08-15 13:36:32 --> Could not find the language line "Socks"
ERROR - 2024-08-15 13:46:39 --> Could not find the language line "Home"
ERROR - 2024-08-15 13:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:56:38 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-08-15 13:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 13:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 14:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 14:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 14:16:40 --> Could not find the language line "Home"
ERROR - 2024-08-15 14:19:22 --> Could not find the language line "Home"
ERROR - 2024-08-15 14:19:53 --> Could not find the language line "Home"
ERROR - 2024-08-15 14:19:57 --> Could not find the language line "Home"
ERROR - 2024-08-15 14:20:20 --> Could not find the language line "Home"
ERROR - 2024-08-15 14:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 14:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 14:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 14:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 14:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 14:41:47 --> Could not find the language line "Home"
ERROR - 2024-08-15 14:46:40 --> Could not find the language line "Home"
ERROR - 2024-08-15 14:47:12 --> Could not find the language line "Home"
ERROR - 2024-08-15 14:47:52 --> Could not find the language line "Home"
ERROR - 2024-08-15 14:47:55 --> Could not find the language line "Home"
ERROR - 2024-08-15 14:50:08 --> Could not find the language line "Home"
ERROR - 2024-08-15 15:13:21 --> Could not find the language line "Home"
ERROR - 2024-08-15 15:13:26 --> Could not find the language line "Home"
ERROR - 2024-08-15 15:16:40 --> Could not find the language line "Home"
ERROR - 2024-08-15 15:46:45 --> Could not find the language line "Home"
ERROR - 2024-08-15 16:15:00 --> Could not find the language line "Home"
ERROR - 2024-08-15 16:16:42 --> Could not find the language line "Home"
ERROR - 2024-08-15 16:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 16:37:01 --> Could not find the language line "Home"
ERROR - 2024-08-15 16:42:03 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-08-15 16:42:04 --> Could not find the language line "Home"
ERROR - 2024-08-15 16:42:04 --> 404 Page Not Found: Wp/index
ERROR - 2024-08-15 16:42:04 --> 404 Page Not Found: Bc/index
ERROR - 2024-08-15 16:42:04 --> 404 Page Not Found: Bk/index
ERROR - 2024-08-15 16:42:04 --> 404 Page Not Found: Backup/index
ERROR - 2024-08-15 16:42:05 --> 404 Page Not Found: New/index
ERROR - 2024-08-15 16:42:05 --> 404 Page Not Found: Main/index
ERROR - 2024-08-15 16:42:05 --> Could not find the language line "Home"
ERROR - 2024-08-15 16:46:41 --> Could not find the language line "Home"
ERROR - 2024-08-15 16:57:21 --> Could not find the language line "Home"
ERROR - 2024-08-15 17:01:58 --> Could not find the language line "Home"
ERROR - 2024-08-15 17:02:24 --> Could not find the language line "Home"
ERROR - 2024-08-15 17:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 17:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 17:16:42 --> Could not find the language line "Home"
ERROR - 2024-08-15 17:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 17:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 17:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 17:38:03 --> Could not find the language line "Home"
ERROR - 2024-08-15 17:46:42 --> Could not find the language line "Home"
ERROR - 2024-08-15 17:48:19 --> Could not find the language line "Home"
ERROR - 2024-08-15 18:08:43 --> Could not find the language line "Other"
ERROR - 2024-08-15 18:11:59 --> Could not find the language line "Home"
ERROR - 2024-08-15 18:15:15 --> Could not find the language line "Home"
ERROR - 2024-08-15 18:16:42 --> Could not find the language line "Home"
ERROR - 2024-08-15 18:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 18:21:09 --> Could not find the language line "Home"
ERROR - 2024-08-15 18:21:53 --> Could not find the language line "Home"
ERROR - 2024-08-15 18:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 18:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 18:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 18:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 18:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 18:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 18:26:02 --> Could not find the language line "Home"
ERROR - 2024-08-15 18:32:23 --> Could not find the language line "Home"
ERROR - 2024-08-15 18:36:11 --> 404 Page Not Found: Cart/cart
ERROR - 2024-08-15 18:46:43 --> Could not find the language line "Home"
ERROR - 2024-08-15 18:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 18:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 18:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 18:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 18:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 19:16:43 --> Could not find the language line "Home"
ERROR - 2024-08-15 19:40:12 --> Could not find the language line "Home"
ERROR - 2024-08-15 19:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 19:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 19:46:44 --> Could not find the language line "Home"
ERROR - 2024-08-15 20:06:28 --> Could not find the language line "Home"
ERROR - 2024-08-15 20:06:29 --> 404 Page Not Found: Payment/index.php
ERROR - 2024-08-15 20:16:44 --> Could not find the language line "Home"
ERROR - 2024-08-15 20:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 20:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 20:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-15 20:46:45 --> Could not find the language line "Home"
ERROR - 2024-08-15 20:48:19 --> Could not find the language line "Home"
ERROR - 2024-08-15 21:16:57 --> Could not find the language line "Home"
ERROR - 2024-08-15 21:19:58 --> Could not find the language line "Home"
ERROR - 2024-08-15 21:19:58 --> 404 Page Not Found: Feed/index
ERROR - 2024-08-15 21:46:50 --> Could not find the language line "Home"
ERROR - 2024-08-15 22:16:48 --> Could not find the language line "Home"
ERROR - 2024-08-15 22:18:49 --> 404 Page Not Found: Payment/index.php
ERROR - 2024-08-15 22:18:52 --> Could not find the language line "Home"
ERROR - 2024-08-15 22:41:27 --> Could not find the language line "Other"
ERROR - 2024-08-15 22:45:57 --> Could not find the language line "Socks"
ERROR - 2024-08-15 22:46:49 --> Could not find the language line "Home"
ERROR - 2024-08-15 23:16:50 --> Could not find the language line "Home"
ERROR - 2024-08-15 23:46:51 --> Could not find the language line "Home"
