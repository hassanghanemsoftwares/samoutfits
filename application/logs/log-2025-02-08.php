<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-08 00:12:35 --> Could not find the language line "Home"
ERROR - 2025-02-08 00:42:31 --> Could not find the language line "Home"
ERROR - 2025-02-08 00:47:57 --> 404 Page Not Found: Media/system
ERROR - 2025-02-08 00:48:03 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-02-08 00:59:59 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-08 01:12:34 --> Could not find the language line "Home"
ERROR - 2025-02-08 01:13:40 --> Could not find the language line "Perfume"
ERROR - 2025-02-08 01:29:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-08 01:30:08 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-08 01:30:08 --> Could not find the language line "Home"
ERROR - 2025-02-08 01:30:09 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-08 01:30:09 --> 404 Page Not Found: Bc/index
ERROR - 2025-02-08 01:30:10 --> 404 Page Not Found: Bk/index
ERROR - 2025-02-08 01:30:10 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-08 01:30:12 --> 404 Page Not Found: New/index
ERROR - 2025-02-08 01:30:12 --> 404 Page Not Found: Main/index
ERROR - 2025-02-08 01:30:13 --> Could not find the language line "Home"
ERROR - 2025-02-08 01:30:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-08 01:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 01:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 01:42:29 --> 404 Page Not Found: Funky%20unisex%20socks/index
ERROR - 2025-02-08 01:42:34 --> Could not find the language line "Home"
ERROR - 2025-02-08 01:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 01:51:26 --> Could not find the language line "Home"
ERROR - 2025-02-08 01:53:15 --> Could not find the language line "Home"
ERROR - 2025-02-08 01:54:52 --> Could not find the language line "Home"
ERROR - 2025-02-08 01:57:38 --> Could not find the language line "Home"
ERROR - 2025-02-08 02:08:57 --> Could not find the language line "Home"
ERROR - 2025-02-08 02:11:07 --> Could not find the language line "Home"
ERROR - 2025-02-08 02:12:32 --> Could not find the language line "Home"
ERROR - 2025-02-08 02:29:47 --> Could not find the language line "Home"
ERROR - 2025-02-08 02:38:40 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-08 02:38:40 --> Could not find the language line "Home"
ERROR - 2025-02-08 02:42:36 --> Could not find the language line "Home"
ERROR - 2025-02-08 02:51:59 --> Could not find the language line "Home"
ERROR - 2025-02-08 02:53:10 --> Could not find the language line "Home"
ERROR - 2025-02-08 02:57:10 --> Could not find the language line "Home"
ERROR - 2025-02-08 03:09:12 --> Could not find the language line "Home"
ERROR - 2025-02-08 03:12:34 --> Could not find the language line "Home"
ERROR - 2025-02-08 03:15:59 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-08 03:42:46 --> Could not find the language line "Home"
ERROR - 2025-02-08 03:50:55 --> Could not find the language line "Home"
ERROR - 2025-02-08 04:02:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-08 04:12:41 --> Could not find the language line "Home"
ERROR - 2025-02-08 04:24:23 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-08 04:24:41 --> Could not find the language line "Home"
ERROR - 2025-02-08 04:41:27 --> Could not find the language line "Socks"
ERROR - 2025-02-08 04:42:34 --> Could not find the language line "Home"
ERROR - 2025-02-08 04:44:02 --> Could not find the language line "Home"
ERROR - 2025-02-08 05:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 05:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 05:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 05:12:34 --> Could not find the language line "Home"
ERROR - 2025-02-08 05:23:38 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-08 05:27:31 --> Could not find the language line "Home"
ERROR - 2025-02-08 05:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 05:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 05:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 05:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 05:41:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-08 05:42:34 --> Could not find the language line "Home"
ERROR - 2025-02-08 05:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 05:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 05:50:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-08 06:06:08 --> Could not find the language line "Home"
ERROR - 2025-02-08 06:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:12:38 --> Could not find the language line "Home"
ERROR - 2025-02-08 06:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:36:31 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 06:42:35 --> Could not find the language line "Home"
ERROR - 2025-02-08 06:42:41 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 06:42:46 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 06:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:42:58 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 06:43:04 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 06:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 06:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 07:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 07:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 07:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 07:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 07:12:35 --> Could not find the language line "Home"
ERROR - 2025-02-08 07:22:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-08 07:22:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-08 07:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 07:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 07:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 07:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 07:28:36 --> Could not find the language line "Home"
ERROR - 2025-02-08 07:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 07:42:35 --> Could not find the language line "Home"
ERROR - 2025-02-08 07:59:28 --> Could not find the language line "Home"
ERROR - 2025-02-08 08:12:36 --> Could not find the language line "Home"
ERROR - 2025-02-08 08:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 08:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 08:20:02 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 08:20:06 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 08:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 08:20:14 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 08:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 08:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 08:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 08:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 08:34:59 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-08 08:38:07 --> 404 Page Not Found: Funky%20unisex%20socks/index
ERROR - 2025-02-08 08:42:36 --> Could not find the language line "Home"
ERROR - 2025-02-08 08:55:01 --> Could not find the language line "Home"
ERROR - 2025-02-08 08:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 08:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 08:58:06 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 08:58:11 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 08:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 08:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:06:41 --> Could not find the language line "Home"
ERROR - 2025-02-08 09:07:05 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 09:07:12 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 09:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:07:53 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 09:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:12:36 --> Could not find the language line "Home"
ERROR - 2025-02-08 09:19:06 --> Could not find the language line "Home"
ERROR - 2025-02-08 09:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:26:13 --> Could not find the language line "Home"
ERROR - 2025-02-08 09:26:17 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 09:26:21 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 09:27:07 --> Could not find the language line "Perfume"
ERROR - 2025-02-08 09:27:09 --> Could not find the language line "Home"
ERROR - 2025-02-08 09:27:21 --> Could not find the language line "Home"
ERROR - 2025-02-08 09:28:57 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 09:29:00 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 09:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:19 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 09:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:32:46 --> Could not find the language line "Home"
ERROR - 2025-02-08 09:42:36 --> Could not find the language line "Home"
ERROR - 2025-02-08 09:50:45 --> Could not find the language line "Home"
ERROR - 2025-02-08 09:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 09:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:05:57 --> Could not find the language line "Home"
ERROR - 2025-02-08 10:12:36 --> Could not find the language line "Home"
ERROR - 2025-02-08 10:19:39 --> Could not find the language line "Home"
ERROR - 2025-02-08 10:19:39 --> Could not find the language line "Home"
ERROR - 2025-02-08 10:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:29:25 --> Could not find the language line "Home"
ERROR - 2025-02-08 10:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:42:37 --> Could not find the language line "Home"
ERROR - 2025-02-08 10:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 10:49:03 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-08 10:49:06 --> Could not find the language line "Home"
ERROR - 2025-02-08 10:49:24 --> Could not find the language line "Home"
ERROR - 2025-02-08 10:54:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-08 10:54:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-08 10:54:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-08 10:54:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-08 10:54:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-08 10:54:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-08 10:54:41 --> Could not find the language line "Home"
ERROR - 2025-02-08 10:54:53 --> Could not find the language line "Socks"
ERROR - 2025-02-08 10:55:21 --> Could not find the language line "Socks"
ERROR - 2025-02-08 10:55:44 --> Could not find the language line "Socks"
ERROR - 2025-02-08 10:55:48 --> Could not find the language line "Socks"
ERROR - 2025-02-08 10:55:49 --> Could not find the language line "Socks"
ERROR - 2025-02-08 10:55:49 --> Could not find the language line "Socks"
ERROR - 2025-02-08 10:55:57 --> Could not find the language line "Socks"
ERROR - 2025-02-08 10:56:07 --> Could not find the language line "Socks"
ERROR - 2025-02-08 10:56:09 --> Could not find the language line "Socks"
ERROR - 2025-02-08 10:56:09 --> Could not find the language line "Socks"
ERROR - 2025-02-08 10:56:10 --> Could not find the language line "Home"
ERROR - 2025-02-08 11:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 11:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 11:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 11:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 11:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 11:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 11:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 11:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 11:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 11:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 11:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 11:12:38 --> Could not find the language line "Home"
ERROR - 2025-02-08 11:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 11:16:14 --> Could not find the language line "Home"
ERROR - 2025-02-08 11:33:15 --> Could not find the language line "Socks"
ERROR - 2025-02-08 11:37:43 --> Could not find the language line "Home"
ERROR - 2025-02-08 11:42:10 --> Could not find the language line "Home"
ERROR - 2025-02-08 11:42:37 --> Could not find the language line "Home"
ERROR - 2025-02-08 12:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 12:12:40 --> Could not find the language line "Home"
ERROR - 2025-02-08 12:38:11 --> Could not find the language line "Home"
ERROR - 2025-02-08 12:42:37 --> Could not find the language line "Home"
ERROR - 2025-02-08 13:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 13:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 13:06:41 --> Could not find the language line "Home"
ERROR - 2025-02-08 13:12:38 --> Could not find the language line "Home"
ERROR - 2025-02-08 13:13:28 --> Could not find the language line "Home"
ERROR - 2025-02-08 13:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 13:42:39 --> Could not find the language line "Home"
ERROR - 2025-02-08 13:57:27 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 13:57:33 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 13:57:52 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 13:58:03 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 14:12:38 --> Could not find the language line "Home"
ERROR - 2025-02-08 14:15:42 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 14:26:42 --> Could not find the language line "Home"
ERROR - 2025-02-08 14:29:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-08 14:41:04 --> Could not find the language line "Home"
ERROR - 2025-02-08 14:42:39 --> Could not find the language line "Home"
ERROR - 2025-02-08 15:04:43 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-08 15:12:39 --> Could not find the language line "Home"
ERROR - 2025-02-08 15:18:38 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-08 15:18:39 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-08 15:21:44 --> Could not find the language line "Home"
ERROR - 2025-02-08 15:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 15:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 15:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 15:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 15:42:40 --> Could not find the language line "Home"
ERROR - 2025-02-08 15:44:17 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2025-02-08 15:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 16:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 16:12:17 --> Could not find the language line "Home"
ERROR - 2025-02-08 16:12:39 --> Could not find the language line "Home"
ERROR - 2025-02-08 16:24:44 --> Could not find the language line "Home"
ERROR - 2025-02-08 16:24:47 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-08 16:24:58 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 16:25:23 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 16:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 16:25:45 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 16:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 16:25:51 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 16:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 16:26:04 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 16:26:14 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 16:26:17 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 16:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 16:30:09 --> Could not find the language line "Home"
ERROR - 2025-02-08 16:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 16:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 16:32:29 --> Could not find the language line "Home"
ERROR - 2025-02-08 16:34:44 --> Could not find the language line "Home"
ERROR - 2025-02-08 16:38:09 --> Could not find the language line "Home"
ERROR - 2025-02-08 16:42:40 --> Could not find the language line "Home"
ERROR - 2025-02-08 16:43:52 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2025-02-08 16:48:51 --> Could not find the language line "Home"
ERROR - 2025-02-08 16:49:20 --> Could not find the language line "Home"
ERROR - 2025-02-08 17:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 17:12:40 --> Could not find the language line "Home"
ERROR - 2025-02-08 17:15:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-08 17:22:27 --> Could not find the language line "Home"
ERROR - 2025-02-08 17:31:31 --> Could not find the language line "Home"
ERROR - 2025-02-08 17:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 17:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 17:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 17:36:57 --> Could not find the language line "Home"
ERROR - 2025-02-08 17:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 17:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 17:40:38 --> Could not find the language line "Home"
ERROR - 2025-02-08 17:40:41 --> Could not find the language line "Home"
ERROR - 2025-02-08 17:42:40 --> Could not find the language line "Home"
ERROR - 2025-02-08 17:43:49 --> Could not find the language line "Home"
ERROR - 2025-02-08 17:45:03 --> Could not find the language line "Home"
ERROR - 2025-02-08 17:47:12 --> Could not find the language line "Home"
ERROR - 2025-02-08 17:51:35 --> Could not find the language line "Home"
ERROR - 2025-02-08 17:51:43 --> Could not find the language line "Home"
ERROR - 2025-02-08 17:55:48 --> Could not find the language line "Home"
ERROR - 2025-02-08 18:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 18:03:05 --> 404 Page Not Found: Home/users
ERROR - 2025-02-08 18:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 18:04:55 --> Could not find the language line "Home"
ERROR - 2025-02-08 18:12:40 --> Could not find the language line "Home"
ERROR - 2025-02-08 18:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 18:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 18:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 18:15:24 --> 404 Page Not Found: Home/accounts
ERROR - 2025-02-08 18:15:25 --> Could not find the language line "Home"
ERROR - 2025-02-08 18:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 18:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 18:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 18:22:27 --> 404 Page Not Found: Home/cart
ERROR - 2025-02-08 18:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 18:29:12 --> 404 Page Not Found: Home/home
ERROR - 2025-02-08 18:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 18:35:06 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 18:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 18:37:13 --> 404 Page Not Found: Home/products
ERROR - 2025-02-08 18:42:38 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 18:42:41 --> Could not find the language line "Home"
ERROR - 2025-02-08 18:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 18:53:27 --> 404 Page Not Found: Users/home
ERROR - 2025-02-08 18:54:42 --> Could not find the language line "Home"
ERROR - 2025-02-08 18:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 19:00:46 --> 404 Page Not Found: Users/users
ERROR - 2025-02-08 19:09:07 --> Could not find the language line "Home"
ERROR - 2025-02-08 19:10:13 --> 404 Page Not Found: Users/accounts
ERROR - 2025-02-08 19:11:30 --> Could not find the language line "Home"
ERROR - 2025-02-08 19:12:41 --> Could not find the language line "Home"
ERROR - 2025-02-08 19:18:13 --> 404 Page Not Found: Users/accounts
ERROR - 2025-02-08 19:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 19:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 19:25:02 --> 404 Page Not Found: Users/users
ERROR - 2025-02-08 19:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 19:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 19:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 19:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 19:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 19:32:59 --> Could not find the language line "Home"
ERROR - 2025-02-08 19:33:01 --> Could not find the language line "Home"
ERROR - 2025-02-08 19:33:04 --> Could not find the language line "Home"
ERROR - 2025-02-08 19:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 19:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 19:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 19:42:41 --> Could not find the language line "Home"
ERROR - 2025-02-08 19:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 19:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 19:56:08 --> Could not find the language line "Home"
ERROR - 2025-02-08 19:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 19:57:11 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-08 19:57:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-08 20:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 20:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 20:12:42 --> Could not find the language line "Home"
ERROR - 2025-02-08 20:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 20:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 20:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 20:42:43 --> Could not find the language line "Home"
ERROR - 2025-02-08 20:48:39 --> Could not find the language line "Home"
ERROR - 2025-02-08 20:48:59 --> Could not find the language line "Home"
ERROR - 2025-02-08 20:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 20:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 20:58:18 --> Could not find the language line "Home"
ERROR - 2025-02-08 21:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 21:12:43 --> Could not find the language line "Home"
ERROR - 2025-02-08 21:22:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-08 21:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 21:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 21:42:42 --> Could not find the language line "Home"
ERROR - 2025-02-08 21:44:20 --> Could not find the language line "Home"
ERROR - 2025-02-08 22:01:47 --> Could not find the language line "Home"
ERROR - 2025-02-08 22:01:49 --> Could not find the language line "Home"
ERROR - 2025-02-08 22:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 22:10:07 --> Could not find the language line "Home"
ERROR - 2025-02-08 22:12:42 --> Could not find the language line "Home"
ERROR - 2025-02-08 22:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 22:20:42 --> Could not find the language line "Home"
ERROR - 2025-02-08 22:41:02 --> Could not find the language line "Perfume"
ERROR - 2025-02-08 22:42:43 --> Could not find the language line "Home"
ERROR - 2025-02-08 22:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 22:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 22:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 23:06:13 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 23:06:29 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-08 23:06:29 --> Could not find the language line "Home"
ERROR - 2025-02-08 23:11:16 --> Could not find the language line "Clothing"
ERROR - 2025-02-08 23:12:44 --> Could not find the language line "Home"
ERROR - 2025-02-08 23:14:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-08 23:14:16 --> Could not find the language line "Home"
ERROR - 2025-02-08 23:14:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-08 23:14:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-08 23:17:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-08 23:17:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-08 23:17:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-08 23:42:47 --> Could not find the language line "Home"
ERROR - 2025-02-08 23:44:01 --> Could not find the language line "Home"
ERROR - 2025-02-08 23:45:03 --> Could not find the language line "Home"
ERROR - 2025-02-08 23:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-08 23:55:25 --> Could not find the language line "Home"
ERROR - 2025-02-08 23:55:42 --> Could not find the language line "Home"
