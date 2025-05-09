<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-10 00:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-10 00:25:41 --> Could not find the language line "Home"
ERROR - 2023-05-10 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-10 00:30:54 --> Could not find the language line "Home"
ERROR - 2023-05-10 00:31:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 00:31:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-10 00:31:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 00:31:41 --> Could not find the language line "Home"
ERROR - 2023-05-10 00:31:46 --> Could not find the language line "Home"
ERROR - 2023-05-10 00:32:38 --> Could not find the language line "Home"
ERROR - 2023-05-10 00:32:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 00:32:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 00:33:13 --> Could not find the language line "Home"
ERROR - 2023-05-10 01:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-10 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-10 01:37:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-10 02:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-10 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 02:53:30 --> Could not find the language line "Home"
ERROR - 2023-05-10 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-10 03:02:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 03:07:46 --> Could not find the language line "Home"
ERROR - 2023-05-10 03:07:46 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-05-10 03:07:47 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-05-10 03:07:47 --> Could not find the language line "Home"
ERROR - 2023-05-10 03:07:48 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-05-10 03:07:48 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-05-10 03:07:48 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-05-10 03:07:48 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-05-10 03:07:48 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-05-10 03:07:49 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-05-10 03:07:49 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-05-10 03:07:49 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-05-10 03:07:49 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-05-10 03:07:50 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-05-10 03:07:50 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-05-10 03:07:50 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-05-10 03:07:50 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-05-10 03:07:50 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-05-10 03:07:51 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-05-10 03:27:31 --> Could not find the language line "Home"
ERROR - 2023-05-10 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-10 03:35:05 --> Could not find the language line "Home"
ERROR - 2023-05-10 03:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 03:37:01 --> Could not find the language line "Home"
ERROR - 2023-05-10 03:49:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-10 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-10 04:09:32 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-05-10 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 04:55:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-10 04:55:40 --> Could not find the language line "Home"
ERROR - 2023-05-10 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-10 05:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 05:26:46 --> Could not find the language line "Home"
ERROR - 2023-05-10 05:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-10 05:40:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-10 05:53:39 --> Could not find the language line "Home"
ERROR - 2023-05-10 05:54:43 --> Could not find the language line "Home"
ERROR - 2023-05-10 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-10 06:06:05 --> Could not find the language line "Home"
ERROR - 2023-05-10 06:17:01 --> Could not find the language line "Home"
ERROR - 2023-05-10 06:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 06:20:46 --> Could not find the language line "Home"
ERROR - 2023-05-10 06:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 06:25:47 --> Could not find the language line "Home"
ERROR - 2023-05-10 06:26:09 --> Could not find the language line "Home"
ERROR - 2023-05-10 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-10 06:31:18 --> Could not find the language line "Home"
ERROR - 2023-05-10 06:31:54 --> Could not find the language line "Home"
ERROR - 2023-05-10 06:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 06:50:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 06:54:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 06:54:25 --> Could not find the language line "Home"
ERROR - 2023-05-10 06:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 06:55:45 --> Could not find the language line "Home"
ERROR - 2023-05-10 06:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 06:56:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-10 06:56:52 --> Could not find the language line "Home"
ERROR - 2023-05-10 06:56:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-10 06:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 06:57:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 06:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 06:57:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 06:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 06:58:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 06:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 06:58:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 06:58:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 06:59:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 06:59:10 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:06:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:06:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:06:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:08:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:15:23 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:17:34 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:18:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:19:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:19:11 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:19:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:20:13 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:20:23 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:25:50 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:26:32 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:27:28 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:27:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 07:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:27:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:27:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 07:28:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:28:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:28:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 07:28:33 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:28:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:28:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 07:28:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-10 07:29:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 07:29:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 07:29:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-10 07:29:17 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:29:34 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:30:07 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:30:17 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:31:15 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:31:28 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:31:30 --> Could not find the language line "Bracelets"
ERROR - 2023-05-10 07:31:42 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:31:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:32:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:32:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:33:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:33:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:33:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:36:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:36:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:36:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:36:58 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:37:04 --> Could not find the language line "Bracelets"
ERROR - 2023-05-10 07:37:06 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:37:19 --> Could not find the language line "Bracelets"
ERROR - 2023-05-10 07:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:37:43 --> Could not find the language line "Bracelets"
ERROR - 2023-05-10 07:37:57 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:38:17 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:39:28 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:39:30 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:39:36 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:43:11 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:44:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-10 07:44:21 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:44:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:44:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:44:53 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:45:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:45:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 07:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:46:00 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:46:51 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:47:31 --> Could not find the language line "Bracelets"
ERROR - 2023-05-10 07:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:48:22 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:49:11 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:49:12 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:50:27 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:50:27 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:54:50 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 07:57:24 --> Could not find the language line "Home"
ERROR - 2023-05-10 07:59:46 --> Could not find the language line "Home"
ERROR - 2023-05-10 08:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-10 08:09:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 08:09:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 08:09:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 08:17:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 08:17:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 08:17:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 08:18:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 08:18:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-10 08:19:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 08:19:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 08:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 08:20:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 08:21:18 --> Could not find the language line "Home"
ERROR - 2023-05-10 08:23:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 08:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-10 08:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 08:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 08:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 08:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 08:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 08:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 08:48:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-10 08:48:23 --> Could not find the language line "Home"
ERROR - 2023-05-10 08:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 08:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 08:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 08:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 08:59:12 --> Could not find the language line "Home"
ERROR - 2023-05-10 08:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 09:09:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:15:40 --> Could not find the language line "Home"
ERROR - 2023-05-10 09:16:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:17:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:18:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:18:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:18:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:20:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:25:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:25:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-10 09:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:34:31 --> Could not find the language line "Home"
ERROR - 2023-05-10 09:38:57 --> Could not find the language line "Home"
ERROR - 2023-05-10 09:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:43:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 09:43:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:43:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:45:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:46:18 --> Could not find the language line "Home"
ERROR - 2023-05-10 09:49:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:50:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:50:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:50:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:50:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 09:50:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 09:50:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 09:50:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 09:50:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 09:50:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 09:50:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 09:50:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 09:50:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 09:50:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 09:50:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:50:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:50:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 09:50:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 09:50:35 --> Could not find the language line "Home"
ERROR - 2023-05-10 09:52:59 --> Could not find the language line "Home"
ERROR - 2023-05-10 09:53:47 --> Could not find the language line "Home"
ERROR - 2023-05-10 09:56:38 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:05:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 10:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 10:05:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 10:05:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 10:05:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 10:05:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 10:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 10:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 10:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 10:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 10:05:06 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:06:28 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:06:36 --> Could not find the language line "Bracelets"
ERROR - 2023-05-10 10:07:04 --> Could not find the language line "Bracelets"
ERROR - 2023-05-10 10:07:15 --> Could not find the language line "Bracelets"
ERROR - 2023-05-10 10:07:16 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:07:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:07:33 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:10:09 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:10:18 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:12:52 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:17:17 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:17:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 10:17:39 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:21:00 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:21:03 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:26:03 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:29:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:30:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:30:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:30:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:30:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:31:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:31:58 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:33:12 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:33:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:33:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:35:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:36:07 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:36:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 10:36:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 10:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:37:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:37:03 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:37:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:37:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:37:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:37:51 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:43:44 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:49:53 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:50:02 --> 404 Page Not Found: Admin/index
ERROR - 2023-05-10 10:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:50:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 10:51:57 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:55:30 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 10:56:06 --> Could not find the language line "Home"
ERROR - 2023-05-10 10:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:02:18 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:04:06 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:14:15 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:16:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-10 11:17:59 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:18:06 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:18:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 11:18:33 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:22:21 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:22:31 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:22:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 11:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:23:58 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:27:33 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:27:34 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:30:25 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:30:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 11:32:15 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:34:34 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:35:07 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:35:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 11:35:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 11:36:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 11:36:19 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:36:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 11:36:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 11:36:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 11:36:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 11:38:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 11:38:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 11:38:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-10 11:39:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 11:39:16 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:39:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-10 11:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:41:41 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:41:57 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:42:27 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:42:39 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:42:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-10 11:43:03 --> Could not find the language line "Home"
ERROR - 2023-05-10 11:43:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 11:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:50:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-10 11:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 11:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-10 12:00:17 --> Could not find the language line "Home"
ERROR - 2023-05-10 12:00:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-10 12:03:54 --> Could not find the language line "Home"
ERROR - 2023-05-10 12:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:06:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-10 12:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:10:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 12:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:16:05 --> Could not find the language line "Home"
ERROR - 2023-05-10 12:16:17 --> Could not find the language line "Home"
ERROR - 2023-05-10 12:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:18:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 12:18:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 12:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:27:45 --> Could not find the language line "Home"
ERROR - 2023-05-10 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-10 12:32:19 --> Could not find the language line "Home"
ERROR - 2023-05-10 12:34:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 12:34:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 12:34:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 12:34:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 12:34:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 12:34:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 12:34:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 12:34:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 12:34:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 12:34:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 12:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:40:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 12:50:38 --> Could not find the language line "Home"
ERROR - 2023-05-10 12:51:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 12:51:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 12:51:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 12:51:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 12:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 12:59:31 --> Could not find the language line "Home"
ERROR - 2023-05-10 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-10 13:03:15 --> Could not find the language line "Home"
ERROR - 2023-05-10 13:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:19:15 --> Could not find the language line "Home"
ERROR - 2023-05-10 13:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:21:17 --> Could not find the language line "Home"
ERROR - 2023-05-10 13:22:56 --> Could not find the language line "Home"
ERROR - 2023-05-10 13:22:56 --> Could not find the language line "Home"
ERROR - 2023-05-10 13:23:28 --> Could not find the language line "Home"
ERROR - 2023-05-10 13:24:13 --> Could not find the language line "Home"
ERROR - 2023-05-10 13:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:29:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 13:29:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 13:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-10 13:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:33:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 13:33:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 13:33:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 13:33:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 13:34:18 --> Could not find the language line "Home"
ERROR - 2023-05-10 13:35:15 --> Could not find the language line "Home"
ERROR - 2023-05-10 13:36:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 13:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:53:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-10 13:55:05 --> Could not find the language line "Home"
ERROR - 2023-05-10 13:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 13:59:44 --> Could not find the language line "Home"
ERROR - 2023-05-10 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-10 14:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:01:32 --> Could not find the language line "Home"
ERROR - 2023-05-10 14:01:33 --> Could not find the language line "Home"
ERROR - 2023-05-10 14:04:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 14:05:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 14:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:08:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 14:08:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 14:08:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 14:08:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 14:08:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 14:08:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 14:08:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 14:08:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 14:08:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 14:08:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 14:08:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-10 14:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:08:25 --> Could not find the language line "Home"
ERROR - 2023-05-10 14:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:09:58 --> Could not find the language line "Home"
ERROR - 2023-05-10 14:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:25:54 --> Could not find the language line "Home"
ERROR - 2023-05-10 14:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:28:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-10 14:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-10 14:33:31 --> Could not find the language line "Home"
ERROR - 2023-05-10 14:33:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 14:34:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 14:34:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 14:35:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 14:37:55 --> Could not find the language line "Home"
ERROR - 2023-05-10 14:49:38 --> Could not find the language line "Home"
ERROR - 2023-05-10 14:49:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 14:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 14:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-10 15:03:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 15:04:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 15:21:15 --> Could not find the language line "Home"
ERROR - 2023-05-10 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-10 15:32:42 --> Could not find the language line "Home"
ERROR - 2023-05-10 15:55:03 --> 404 Page Not Found: Git/config
ERROR - 2023-05-10 15:58:02 --> Could not find the language line "Home"
ERROR - 2023-05-10 16:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 16:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:01:27 --> Could not find the language line "Home"
ERROR - 2023-05-10 16:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:01:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 16:02:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 16:02:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 16:02:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-10 16:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:06:35 --> Could not find the language line "Home"
ERROR - 2023-05-10 16:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:27:11 --> Could not find the language line "Home"
ERROR - 2023-05-10 16:27:54 --> Could not find the language line "Home"
ERROR - 2023-05-10 16:28:04 --> Could not find the language line "Socks"
ERROR - 2023-05-10 16:29:18 --> Could not find the language line "Home"
ERROR - 2023-05-10 16:29:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-10 16:30:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 16:31:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 16:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:33:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 16:33:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 16:33:38 --> Could not find the language line "Home"
ERROR - 2023-05-10 16:33:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-10 16:37:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 16:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 16:57:18 --> Could not find the language line "Home"
ERROR - 2023-05-10 16:57:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 16:58:05 --> Could not find the language line "Home"
ERROR - 2023-05-10 16:59:41 --> Could not find the language line "Home"
ERROR - 2023-05-10 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-10 17:15:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-10 17:15:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-10 17:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 17:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 17:19:22 --> Could not find the language line "Home"
ERROR - 2023-05-10 17:19:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 17:19:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 17:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 17:21:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 17:21:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 17:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 17:21:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 17:21:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 17:21:52 --> Could not find the language line "Home"
ERROR - 2023-05-10 17:21:59 --> Could not find the language line "Socks"
ERROR - 2023-05-10 17:22:23 --> Could not find the language line "Home"
ERROR - 2023-05-10 17:22:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 17:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 17:23:06 --> Could not find the language line "Socks"
ERROR - 2023-05-10 17:23:12 --> Could not find the language line "Socks"
ERROR - 2023-05-10 17:23:34 --> Could not find the language line "Socks"
ERROR - 2023-05-10 17:23:36 --> Could not find the language line "Socks"
ERROR - 2023-05-10 17:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 17:27:29 --> Could not find the language line "Home"
ERROR - 2023-05-10 17:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 17:28:33 --> Could not find the language line "Home"
ERROR - 2023-05-10 17:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 17:31:23 --> Could not find the language line "Home"
ERROR - 2023-05-10 17:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 17:31:51 --> Could not find the language line "Home"
ERROR - 2023-05-10 17:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 17:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 17:36:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 17:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:03:32 --> Could not find the language line "accounting"
ERROR - 2023-05-10 18:03:33 --> Could not find the language line "accounting"
ERROR - 2023-05-10 18:03:33 --> Could not find the language line "accounting"
ERROR - 2023-05-10 18:03:33 --> Could not find the language line "accounting"
ERROR - 2023-05-10 18:03:33 --> Could not find the language line "accounting"
ERROR - 2023-05-10 18:10:03 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 18:10:24 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:10:52 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 18:12:35 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:19:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-10 18:21:26 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:22:22 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:22:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 18:22:59 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:23:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 18:23:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 18:23:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 18:23:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 18:23:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 18:23:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 18:23:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 18:23:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 18:23:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 18:23:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 18:23:59 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 18:24:37 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:26:24 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:26:28 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:27:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-10 18:27:39 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:31:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 18:31:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 18:31:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 18:31:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 18:31:35 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:41:12 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:43:33 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:43:43 --> Could not find the language line "Crocs"
ERROR - 2023-05-10 18:51:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-10 18:52:10 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 18:55:53 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 18:56:32 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:56:56 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 18:57:08 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 18:57:18 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 18:57:35 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 18:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 18:57:44 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:57:44 --> Could not find the language line "Home"
ERROR - 2023-05-10 18:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:08:18 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:10:15 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:10:46 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:10:47 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:13:46 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:14:04 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:14:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 19:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:16:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 19:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:19:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 19:20:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 19:21:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 19:22:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-10 19:23:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:36:23 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:38:38 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:39:46 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:40:14 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:41:56 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:42:47 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=71 494 539&amp;text=6498%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-05-10 19:42:49 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=71 494 539&amp;text=2820%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-05-10 19:45:51 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:46:49 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:46:51 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:47:49 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:51:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:51:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:53:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:53:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:53:45 --> Could not find the language line "Socks"
ERROR - 2023-05-10 19:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:54:06 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:54:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:54:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:54:30 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:54:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:54:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:54:47 --> Could not find the language line "Home"
ERROR - 2023-05-10 19:54:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:54:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:55:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-10 19:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:55:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:55:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:55:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:55:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:56:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:56:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:56:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:56:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:56:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:56:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:57:10 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-10 19:57:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:57:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:57:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:57:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:57:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:57:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:57:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:57:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:58:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:58:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:58:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:58:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 19:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 19:59:56 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:03:01 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:04:05 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:12:12 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:12:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:12:20 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:13:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:14:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:15:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:15:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:15:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:16:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:16:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-10 20:16:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:17:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:17:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:18:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:18:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:19:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 20:19:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 20:19:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 20:19:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 20:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:19:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:20:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:20:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:20:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:21:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:21:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:21:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:22:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:22:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:22:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:22:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:23:08 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:23:08 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:23:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:23:41 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:24:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:24:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:24:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:24:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:25:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:25:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:25:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:25:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:25:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:25:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:25:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:25:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:25:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:25:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:25:41 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:28:41 --> 404 Page Not Found: Home%20/index
ERROR - 2023-05-10 20:28:58 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:31:04 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:31:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 20:31:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 20:31:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 20:31:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 20:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:47:55 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:48:19 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:48:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:49:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:49:56 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:49:57 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:50:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:50:03 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:50:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:50:20 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:50:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:50:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:51:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:51:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:51:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:51:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:52:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:52:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:52:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:52:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:52:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:52:21 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:52:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:52:28 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:52:31 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:52:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-10 20:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:52:49 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:52:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:52:58 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:53:02 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:53:09 --> Could not find the language line "Bracelets"
ERROR - 2023-05-10 20:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 20:53:58 --> Could not find the language line "Bracelets"
ERROR - 2023-05-10 20:54:12 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:54:20 --> Could not find the language line "Home"
ERROR - 2023-05-10 20:54:24 --> Could not find the language line "Bracelets"
ERROR - 2023-05-10 20:54:28 --> Could not find the language line "Perfume"
ERROR - 2023-05-10 20:54:36 --> Could not find the language line "Socks"
ERROR - 2023-05-10 20:55:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 20:55:27 --> Could not find the language line "Socks"
ERROR - 2023-05-10 20:56:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:56:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:56:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:56:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 20:56:18 --> Could not find the language line "Home"
ERROR - 2023-05-10 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-05-10 21:05:09 --> Could not find the language line "Home"
ERROR - 2023-05-10 21:05:38 --> 404 Page Not Found: Assets/elfinder
ERROR - 2023-05-10 21:10:20 --> Could not find the language line "Home"
ERROR - 2023-05-10 21:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 21:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 21:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 21:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 21:12:22 --> Could not find the language line "Home"
ERROR - 2023-05-10 21:12:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-10 21:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 21:13:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-10 21:13:13 --> Could not find the language line "Home"
ERROR - 2023-05-10 21:13:20 --> Could not find the language line "Socks"
ERROR - 2023-05-10 21:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 21:13:55 --> Could not find the language line "Socks"
ERROR - 2023-05-10 21:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 21:14:08 --> Could not find the language line "Socks"
ERROR - 2023-05-10 21:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 21:14:23 --> Could not find the language line "Socks"
ERROR - 2023-05-10 21:14:31 --> Could not find the language line "Home"
ERROR - 2023-05-10 21:17:01 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-10 21:17:02 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-10 21:17:02 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-10 21:17:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-10 21:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 21:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 21:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 21:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-10 21:50:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-10 22:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-10 22:19:42 --> Could not find the language line "Home"
ERROR - 2023-05-10 22:21:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 22:21:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-10 22:21:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 22:21:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-10 22:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 22:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 22:30:08 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-10 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-10 22:37:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-10 22:42:00 --> Could not find the language line "Home"
ERROR - 2023-05-10 22:42:29 --> Could not find the language line "Home"
ERROR - 2023-05-10 22:44:41 --> Could not find the language line "Home"
ERROR - 2023-05-10 22:45:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-10 22:45:22 --> Could not find the language line "Home"
ERROR - 2023-05-10 22:45:47 --> Could not find the language line "Home"
ERROR - 2023-05-10 22:49:18 --> Could not find the language line "Home"
ERROR - 2023-05-10 22:49:45 --> Could not find the language line "Socks"
ERROR - 2023-05-10 22:49:58 --> Could not find the language line "Socks"
ERROR - 2023-05-10 22:50:08 --> Could not find the language line "Socks"
ERROR - 2023-05-10 22:50:10 --> Could not find the language line "Home"
ERROR - 2023-05-10 22:50:19 --> Could not find the language line "Perfume"
ERROR - 2023-05-10 22:50:25 --> Could not find the language line "Home"
ERROR - 2023-05-10 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-10 23:21:55 --> Could not find the language line "Home"
ERROR - 2023-05-10 23:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-10 23:22:50 --> Could not find the language line "Home"
ERROR - 2023-05-10 23:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-10 23:38:53 --> Could not find the language line "Home"
ERROR - 2023-05-10 23:39:43 --> Could not find the language line "Home"
ERROR - 2023-05-10 23:39:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-10 23:39:57 --> Could not find the language line "Home"
ERROR - 2023-05-10 23:41:20 --> Could not find the language line "Home"
ERROR - 2023-05-10 23:41:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 23:41:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 23:41:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 23:41:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 23:42:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 23:42:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 23:42:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 23:42:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 23:42:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 23:42:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 23:42:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 23:42:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 23:43:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 23:43:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-10 23:43:18 --> Could not find the language line "Home"
ERROR - 2023-05-10 23:47:05 --> 404 Page Not Found: Assets/css
