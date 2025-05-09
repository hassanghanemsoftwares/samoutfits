<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-05 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-05 00:22:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 00:23:15 --> Could not find the language line "Home"
ERROR - 2023-05-05 00:25:48 --> Could not find the language line "Home"
ERROR - 2023-05-05 00:28:25 --> Could not find the language line "Home"
ERROR - 2023-05-05 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-05 00:45:56 --> Could not find the language line "Home"
ERROR - 2023-05-05 00:56:31 --> Could not find the language line "Other"
ERROR - 2023-05-05 01:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 01:02:43 --> Could not find the language line "Home"
ERROR - 2023-05-05 01:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 01:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 01:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 01:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 01:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 01:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 01:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 01:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 01:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 01:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 01:09:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 01:27:21 --> Could not find the language line "Home"
ERROR - 2023-05-05 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-05 01:39:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-05 01:46:27 --> Could not find the language line "Home"
ERROR - 2023-05-05 02:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 02:08:59 --> Could not find the language line "Home"
ERROR - 2023-05-05 02:24:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 02:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 02:40:55 --> Could not find the language line "Home"
ERROR - 2023-05-05 02:48:45 --> 404 Page Not Found: Backupzip/index
ERROR - 2023-05-05 02:50:58 --> Could not find the language line "Home"
ERROR - 2023-05-05 02:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 02:51:36 --> Could not find the language line "Home"
ERROR - 2023-05-05 02:51:39 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 02:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 02:51:58 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:00:20 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:00:20 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-05-05 03:00:21 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-05-05 03:00:21 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:00:22 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-05-05 03:00:22 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-05-05 03:00:22 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-05-05 03:00:22 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-05-05 03:00:23 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-05-05 03:00:23 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-05-05 03:00:23 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-05-05 03:00:23 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-05-05 03:00:23 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:00:24 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-05-05 03:00:24 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-05-05 03:00:24 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-05-05 03:00:24 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-05-05 03:00:24 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-05-05 03:00:25 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-05-05 03:00:25 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-05-05 03:00:25 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-05-05 03:00:28 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 03:00:48 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 03:01:07 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 03:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 03:01:16 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:01:38 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 03:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 03:01:40 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:01:42 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 03:01:59 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:02:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-05 03:02:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:02:22 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 03:02:39 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:03:06 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:03:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 03:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 03:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 03:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 03:03:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 03:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 03:03:48 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:03:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 03:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 03:04:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 03:04:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 03:04:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 03:04:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 03:04:59 --> Could not find the language line "Perfume"
ERROR - 2023-05-05 03:06:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:06:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-05 03:06:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-05 03:06:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 03:07:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 03:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 03:07:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 03:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 03:08:14 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:22:00 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:22:09 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:28:53 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:28:53 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:31:26 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:31:41 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 03:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 03:32:22 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 03:32:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 03:32:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 03:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 03:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 03:33:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 03:33:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 03:33:46 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 03:33:53 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 03:33:56 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:34:05 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:34:52 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:44:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 03:48:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 04:02:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 04:02:21 --> Could not find the language line "Home"
ERROR - 2023-05-05 04:04:06 --> Could not find the language line "Home"
ERROR - 2023-05-05 04:08:46 --> Could not find the language line "Home"
ERROR - 2023-05-05 04:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 04:24:09 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-05 04:24:42 --> Could not find the language line "Home"
ERROR - 2023-05-05 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-05 04:34:55 --> Could not find the language line "Home"
ERROR - 2023-05-05 04:35:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 05:02:52 --> Could not find the language line "Home"
ERROR - 2023-05-05 05:03:00 --> Could not find the language line "Home"
ERROR - 2023-05-05 05:07:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 05:07:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 05:07:16 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-05 05:07:46 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-05 05:08:17 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-05 05:08:49 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-05 05:09:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 05:09:20 --> Could not find the language line "Home"
ERROR - 2023-05-05 05:10:06 --> Could not find the language line "Home"
ERROR - 2023-05-05 05:10:40 --> Could not find the language line "Home"
ERROR - 2023-05-05 05:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 05:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 05:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 05:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 05:12:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 05:12:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 05:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 05:14:38 --> Could not find the language line "Disclaimer"
ERROR - 2023-05-05 05:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 05:15:40 --> Could not find the language line "Home"
ERROR - 2023-05-05 05:16:08 --> Could not find the language line "Home"
ERROR - 2023-05-05 05:16:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:16:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:16:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:17:44 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 05:18:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 05:18:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:19:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:19:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:19:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:20:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:20:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:20:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:20:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:21:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:25:00 --> Could not find the language line "Other"
ERROR - 2023-05-05 05:25:30 --> Could not find the language line "Other"
ERROR - 2023-05-05 05:26:02 --> Could not find the language line "Other"
ERROR - 2023-05-05 05:26:33 --> Could not find the language line "Other"
ERROR - 2023-05-05 05:27:04 --> Could not find the language line "Perfume"
ERROR - 2023-05-05 05:29:45 --> Could not find the language line "Socks"
ERROR - 2023-05-05 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 05:30:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-05 05:34:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-05 05:34:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-05 05:36:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:37:31 --> Could not find the language line "Home"
ERROR - 2023-05-05 05:48:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 05:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 05:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 06:04:21 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:04:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:04:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 06:11:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 06:14:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:14:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:23:32 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:24:43 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:25:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-05 06:25:26 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:25:45 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:26:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-05 06:26:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-05 06:27:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-05 06:27:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:27:12 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:27:51 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:28:12 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:35:00 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:40:24 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:41:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:41:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:41:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:41:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 06:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 06:45:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:45:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:45:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:45:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 06:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 06:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 06:48:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:48:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:51:09 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 06:54:02 --> Could not find the language line "Home"
ERROR - 2023-05-05 06:59:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 06:59:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 07:00:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 07:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 07:05:25 --> Could not find the language line "Home"
ERROR - 2023-05-05 07:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 07:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 07:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 07:18:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 07:18:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 07:18:51 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-05 07:18:51 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-05 07:18:51 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-05 07:18:52 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-05 07:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 07:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 07:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 07:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 07:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-05 07:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 07:45:41 --> Could not find the language line "Home"
ERROR - 2023-05-05 07:54:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-05 07:56:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 07:56:58 --> Could not find the language line "Home"
ERROR - 2023-05-05 07:57:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 07:57:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 07:57:45 --> Could not find the language line "Perfume"
ERROR - 2023-05-05 07:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 07:57:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-05 07:58:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 07:58:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 07:58:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 07:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 08:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:00:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-05 08:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:10:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 08:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:22:35 --> Could not find the language line "Home"
ERROR - 2023-05-05 08:27:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 08:27:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 08:27:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 08:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 08:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:41:40 --> Could not find the language line "Home"
ERROR - 2023-05-05 08:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:43:26 --> Could not find the language line "Home"
ERROR - 2023-05-05 08:43:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-05 08:43:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-05 08:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:52:21 --> Could not find the language line "Home"
ERROR - 2023-05-05 08:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 08:56:18 --> Could not find the language line "Other"
ERROR - 2023-05-05 08:57:35 --> Could not find the language line "Home"
ERROR - 2023-05-05 08:58:19 --> Could not find the language line "Home"
ERROR - 2023-05-05 08:58:23 --> Could not find the language line "Home"
ERROR - 2023-05-05 08:58:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 08:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-05 09:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:04:48 --> Could not find the language line "Home"
ERROR - 2023-05-05 09:04:48 --> Could not find the language line "Home"
ERROR - 2023-05-05 09:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:16:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:19:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:20:03 --> Could not find the language line "Home"
ERROR - 2023-05-05 09:20:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:20:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:20:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:20:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:20:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:21:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:21:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:21:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:28:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-05 09:28:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-05 09:28:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:28:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-05 09:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:36:03 --> Could not find the language line "Home"
ERROR - 2023-05-05 09:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:37:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 09:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:40:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:40:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 09:47:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:47:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:47:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 09:55:30 --> Could not find the language line "Home"
ERROR - 2023-05-05 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 10:22:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-05 10:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 10:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 10:26:31 --> Could not find the language line "Other"
ERROR - 2023-05-05 10:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 10:40:28 --> Could not find the language line "Home"
ERROR - 2023-05-05 10:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 10:41:22 --> Could not find the language line "Home"
ERROR - 2023-05-05 10:41:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 10:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 10:42:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 10:42:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 10:42:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 10:42:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 10:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 10:42:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 10:51:50 --> Could not find the language line "Home"
ERROR - 2023-05-05 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-05 11:03:20 --> Could not find the language line "Home"
ERROR - 2023-05-05 11:03:42 --> Could not find the language line "Home"
ERROR - 2023-05-05 11:09:39 --> Could not find the language line "Home"
ERROR - 2023-05-05 11:11:22 --> Could not find the language line "Home"
ERROR - 2023-05-05 11:11:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 11:11:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 11:12:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 11:12:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 11:12:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 11:12:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 11:12:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 11:12:35 --> Could not find the language line "Home"
ERROR - 2023-05-05 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 11:34:33 --> Could not find the language line "Home"
ERROR - 2023-05-05 11:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 11:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 11:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 11:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 11:39:56 --> Could not find the language line "Home"
ERROR - 2023-05-05 11:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 11:54:43 --> Could not find the language line "Home"
ERROR - 2023-05-05 11:54:45 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-05 11:54:45 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-05 11:54:45 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-05 11:54:46 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-05 12:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 12:05:59 --> Could not find the language line "Home"
ERROR - 2023-05-05 12:06:29 --> Could not find the language line "Socks"
ERROR - 2023-05-05 12:07:03 --> Could not find the language line "Home"
ERROR - 2023-05-05 12:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 12:14:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 12:14:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 12:14:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 12:15:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 12:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 12:24:36 --> Could not find the language line "Home"
ERROR - 2023-05-05 12:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-05 12:35:22 --> Could not find the language line "Home"
ERROR - 2023-05-05 12:35:23 --> Could not find the language line "Home"
ERROR - 2023-05-05 12:39:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 12:39:39 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:10:35 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:11:23 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:11:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-05 13:14:14 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:16:28 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:17:17 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:19:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-05 13:19:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-05 13:20:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 13:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:20:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 13:21:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 13:21:45 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:21:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 13:27:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-05 13:27:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-05 13:28:25 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:35:07 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:35:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 13:35:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 13:43:46 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:50:19 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:50:38 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 13:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:53:14 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:53:24 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:53:48 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:54:05 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:54:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 13:54:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 13:54:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 13:55:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 13:55:15 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:55:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-05 13:55:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-05 13:55:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-05 13:55:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-05 13:55:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-05 13:55:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-05 13:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:56:26 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 13:57:58 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:58:23 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:59:25 --> Could not find the language line "Home"
ERROR - 2023-05-05 13:59:42 --> Could not find the language line "Home"
ERROR - 2023-05-05 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-05 14:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 14:01:22 --> Could not find the language line "Home"
ERROR - 2023-05-05 14:01:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-05 14:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 14:01:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-05 14:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 14:02:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-05 14:02:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-05 14:02:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-05 14:02:27 --> Could not find the language line "Home"
ERROR - 2023-05-05 14:02:32 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 14:02:45 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 14:02:56 --> Could not find the language line "Home"
ERROR - 2023-05-05 14:03:14 --> Could not find the language line "Home"
ERROR - 2023-05-05 14:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 14:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 14:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 14:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 14:07:25 --> Could not find the language line "Home"
ERROR - 2023-05-05 14:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 14:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 14:12:52 --> Could not find the language line "Home"
ERROR - 2023-05-05 14:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 14:14:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 14:14:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 14:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 14:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 15:20:18 --> Could not find the language line "Home"
ERROR - 2023-05-05 15:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 15:20:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 15:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 15:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 15:21:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 15:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 15:21:40 --> Could not find the language line "Home"
ERROR - 2023-05-05 15:21:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 15:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 15:25:47 --> Could not find the language line "Home"
ERROR - 2023-05-05 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-05 15:31:32 --> Could not find the language line "Home"
ERROR - 2023-05-05 15:35:46 --> Could not find the language line "Home"
ERROR - 2023-05-05 15:36:24 --> Could not find the language line "Home"
ERROR - 2023-05-05 15:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 15:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 15:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 15:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 15:54:12 --> Could not find the language line "Home"
ERROR - 2023-05-05 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 16:00:17 --> Could not find the language line "Home"
ERROR - 2023-05-05 16:07:32 --> Could not find the language line "Home"
ERROR - 2023-05-05 16:22:24 --> Could not find the language line "Home"
ERROR - 2023-05-05 16:23:07 --> Could not find the language line "Home"
ERROR - 2023-05-05 16:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 16:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 16:23:42 --> Could not find the language line "Home"
ERROR - 2023-05-05 16:29:18 --> Could not find the language line "Home"
ERROR - 2023-05-05 16:30:09 --> Could not find the language line "Home"
ERROR - 2023-05-05 16:35:37 --> Could not find the language line "Home"
ERROR - 2023-05-05 16:38:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 16:38:26 --> Could not find the language line "Home"
ERROR - 2023-05-05 16:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 16:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 16:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 16:41:43 --> Could not find the language line "Home"
ERROR - 2023-05-05 16:53:30 --> 404 Page Not Found: Plugins/elfinder
ERROR - 2023-05-05 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-05 17:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 17:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 17:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 17:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 17:12:54 --> Could not find the language line "Home"
ERROR - 2023-05-05 17:13:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 17:13:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 17:13:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 17:13:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 17:13:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 17:14:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 17:14:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 17:15:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 17:15:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 17:15:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 17:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 17:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 17:35:07 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-05 17:44:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 17:47:50 --> Could not find the language line "Home"
ERROR - 2023-05-05 17:47:52 --> Could not find the language line "Home"
ERROR - 2023-05-05 17:59:48 --> Could not find the language line "Home"
ERROR - 2023-05-05 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-05 18:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 18:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 18:01:33 --> Could not find the language line "Home"
ERROR - 2023-05-05 18:02:55 --> Could not find the language line "Home"
ERROR - 2023-05-05 18:04:01 --> Could not find the language line "Home"
ERROR - 2023-05-05 18:11:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-05 18:21:44 --> Could not find the language line "Home"
ERROR - 2023-05-05 18:22:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 18:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 18:22:41 --> Could not find the language line "Home"
ERROR - 2023-05-05 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-05 18:42:34 --> Could not find the language line "Home"
ERROR - 2023-05-05 18:44:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 18:44:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 18:45:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-05 18:55:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 18:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 18:56:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 18:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 18:56:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 18:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 18:56:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 18:56:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 18:57:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 18:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 18:57:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 18:57:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 18:57:37 --> Could not find the language line "Home"
ERROR - 2023-05-05 18:58:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 18:58:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 18:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 18:58:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 18:58:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 18:58:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:00:08 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:07:35 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:07:58 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:08:39 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:09:27 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:10:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 19:10:32 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:10:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-05 19:11:02 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:11:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:11:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:11:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:12:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:12:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:12:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:12:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:12:53 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:13:04 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 19:19:31 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:20:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:22:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:22:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:23:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:23:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:24:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:25:52 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:26:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:26:18 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:26:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:26:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:26:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:27:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:27:38 --> Could not find the language line "Crocs"
ERROR - 2023-05-05 19:28:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-05 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:35:04 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:35:42 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:36:38 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:39:49 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:43:44 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:44:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-05 19:44:21 --> Could not find the language line "Home"
ERROR - 2023-05-05 19:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 19:53:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 19:58:29 --> Could not find the language line "Home"
ERROR - 2023-05-05 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 20:01:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-05 20:02:05 --> Could not find the language line "Home"
ERROR - 2023-05-05 20:10:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 20:13:09 --> Could not find the language line "Home"
ERROR - 2023-05-05 20:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 20:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 20:25:15 --> Could not find the language line "Home"
ERROR - 2023-05-05 20:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-05 20:30:40 --> Could not find the language line "Home"
ERROR - 2023-05-05 20:30:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 20:31:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 20:31:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 20:31:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 20:39:12 --> Could not find the language line "Home"
ERROR - 2023-05-05 20:54:55 --> Could not find the language line "Home"
ERROR - 2023-05-05 21:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-05 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-05-05 21:04:43 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-05-05 21:06:06 --> Could not find the language line "Home"
ERROR - 2023-05-05 21:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 21:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 21:26:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 21:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 21:58:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 21:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 21:58:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 21:58:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 22:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 22:26:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 22:27:03 --> Could not find the language line "Home"
ERROR - 2023-05-05 22:27:33 --> Could not find the language line "Home"
ERROR - 2023-05-05 22:27:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-05 22:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 22:28:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-05 22:28:54 --> Could not find the language line "Home"
ERROR - 2023-05-05 22:30:01 --> Could not find the language line "Home"
ERROR - 2023-05-05 22:30:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-05 22:36:11 --> Could not find the language line "Perfume"
ERROR - 2023-05-05 22:44:49 --> Could not find the language line "Home"
ERROR - 2023-05-05 22:49:27 --> Could not find the language line "Home"
ERROR - 2023-05-05 22:49:32 --> Could not find the language line "Bracelets"
ERROR - 2023-05-05 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-05 23:23:53 --> Could not find the language line "Home"
ERROR - 2023-05-05 23:24:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 23:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 23:24:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-05 23:24:53 --> Could not find the language line "Home"
ERROR - 2023-05-05 23:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-05 23:29:46 --> Could not find the language line "Home"
ERROR - 2023-05-05 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-05 23:59:35 --> Could not find the language line "Home"
