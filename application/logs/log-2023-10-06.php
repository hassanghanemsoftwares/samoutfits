<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-06 00:01:35 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:03:26 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:03:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:04:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:04:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 00:05:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:05:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:06:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:06:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 00:06:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:07:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 00:07:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 00:07:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 00:08:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:08:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 00:08:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:09:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:09:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-06 00:19:44 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:19:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 00:20:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:20:35 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-06 00:23:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 00:25:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 00:25:43 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:26:14 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:26:14 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:26:14 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:26:14 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:26:14 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:26:14 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:26:15 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:30:50 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:47:44 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 00:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 00:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 00:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 00:51:45 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 00:52:04 --> Could not find the language line "Perfume"
ERROR - 2023-10-06 00:52:26 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:52:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 00:52:40 --> Could not find the language line "Home"
ERROR - 2023-10-06 00:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 01:24:39 --> Could not find the language line "Home"
ERROR - 2023-10-06 01:26:27 --> Could not find the language line "Home"
ERROR - 2023-10-06 01:27:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 01:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 01:27:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 01:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 01:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 01:32:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 01:36:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 01:46:05 --> Could not find the language line "Home"
ERROR - 2023-10-06 01:46:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 01:46:46 --> Could not find the language line "Home"
ERROR - 2023-10-06 01:48:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 01:49:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-06 02:04:22 --> Could not find the language line "Home"
ERROR - 2023-10-06 02:09:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 02:09:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 02:23:39 --> Could not find the language line "Home"
ERROR - 2023-10-06 02:26:52 --> Could not find the language line "Home"
ERROR - 2023-10-06 02:29:48 --> Could not find the language line "Socks"
ERROR - 2023-10-06 02:31:21 --> Could not find the language line "Home"
ERROR - 2023-10-06 02:32:20 --> Could not find the language line "Home"
ERROR - 2023-10-06 02:42:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 02:46:19 --> Could not find the language line "Home"
ERROR - 2023-10-06 03:04:43 --> Could not find the language line "Home"
ERROR - 2023-10-06 03:06:16 --> Could not find the language line "Home"
ERROR - 2023-10-06 03:14:36 --> Could not find the language line "Home"
ERROR - 2023-10-06 03:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 03:36:28 --> Could not find the language line "Home"
ERROR - 2023-10-06 03:42:49 --> Could not find the language line "Home"
ERROR - 2023-10-06 03:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 03:43:56 --> Could not find the language line "Home"
ERROR - 2023-10-06 03:43:59 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-06 03:43:59 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-06 03:55:06 --> Could not find the language line "Home"
ERROR - 2023-10-06 04:04:33 --> Could not find the language line "Home"
ERROR - 2023-10-06 04:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 04:05:55 --> Could not find the language line "Home"
ERROR - 2023-10-06 04:09:07 --> Could not find the language line "Home"
ERROR - 2023-10-06 04:16:17 --> Could not find the language line "Other"
ERROR - 2023-10-06 04:22:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 04:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 04:39:35 --> Could not find the language line "Home"
ERROR - 2023-10-06 04:41:10 --> Could not find the language line "Home"
ERROR - 2023-10-06 04:45:28 --> Could not find the language line "Home"
ERROR - 2023-10-06 04:45:58 --> Could not find the language line "Home"
ERROR - 2023-10-06 04:49:09 --> Could not find the language line "Home"
ERROR - 2023-10-06 04:55:44 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:00:43 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:03:39 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:04:22 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:05:00 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:05:08 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:05:14 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:09:01 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:11:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 05:11:12 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:13:19 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:13:51 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:17:52 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 05:17:52 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:18:19 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:18:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 05:18:32 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:19:13 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:21:20 --> Could not find the language line "Home"
ERROR - 2023-10-06 05:36:03 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:03:06 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:07:07 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:09:28 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:19:01 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:19:48 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:20:22 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:20:47 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:21:30 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:21:59 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:47:58 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-06 06:47:58 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-06 06:47:58 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-06 06:47:59 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-06 06:55:24 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:57:15 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:57:38 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:57:46 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:58:39 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:59:20 --> Could not find the language line "Home"
ERROR - 2023-10-06 06:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 06:59:43 --> Could not find the language line "Home"
ERROR - 2023-10-06 07:03:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 07:03:10 --> Could not find the language line "Home"
ERROR - 2023-10-06 07:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 07:13:20 --> Could not find the language line "Home"
ERROR - 2023-10-06 07:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 07:20:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 07:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 07:20:34 --> Could not find the language line "Home"
ERROR - 2023-10-06 07:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 07:24:45 --> Could not find the language line "Home"
ERROR - 2023-10-06 07:25:45 --> Could not find the language line "Home"
ERROR - 2023-10-06 07:28:03 --> Could not find the language line "Home"
ERROR - 2023-10-06 07:29:08 --> Could not find the language line "Home"
ERROR - 2023-10-06 07:29:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 07:29:22 --> Could not find the language line "Home"
ERROR - 2023-10-06 07:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 07:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 07:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 07:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 07:33:04 --> Could not find the language line "Home"
ERROR - 2023-10-06 07:34:48 --> Could not find the language line "Home"
ERROR - 2023-10-06 07:37:19 --> Could not find the language line "Home"
ERROR - 2023-10-06 07:42:17 --> Could not find the language line "Home"
ERROR - 2023-10-06 07:48:24 --> Could not find the language line "Home"
ERROR - 2023-10-06 07:49:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 07:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 07:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 07:52:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 07:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 07:59:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 07:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 08:02:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 08:02:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 08:07:04 --> Could not find the language line "Home"
ERROR - 2023-10-06 08:07:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 08:07:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 08:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 08:08:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 08:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 08:09:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 08:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 08:09:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 08:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 08:09:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 08:09:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 08:10:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 08:10:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 08:16:50 --> Could not find the language line "Home"
ERROR - 2023-10-06 08:20:08 --> Could not find the language line "Home"
ERROR - 2023-10-06 08:20:21 --> Could not find the language line "Home"
ERROR - 2023-10-06 08:20:25 --> Could not find the language line "Home"
ERROR - 2023-10-06 08:20:30 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 08:20:43 --> Could not find the language line "Home"
ERROR - 2023-10-06 08:22:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 08:25:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 08:30:33 --> Could not find the language line "Home"
ERROR - 2023-10-06 08:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 08:34:47 --> Could not find the language line "Home"
ERROR - 2023-10-06 08:36:54 --> Could not find the language line "Home"
ERROR - 2023-10-06 08:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 08:53:41 --> Could not find the language line "Home"
ERROR - 2023-10-06 08:53:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 08:53:56 --> 404 Page Not Found: Asset-manifestjson/index
ERROR - 2023-10-06 08:59:41 --> Could not find the language line "Home"
ERROR - 2023-10-06 09:00:29 --> Could not find the language line "Home"
ERROR - 2023-10-06 09:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 09:03:47 --> Could not find the language line "Home"
ERROR - 2023-10-06 09:03:53 --> Could not find the language line "Home"
ERROR - 2023-10-06 09:09:40 --> Could not find the language line "Home"
ERROR - 2023-10-06 09:12:48 --> Could not find the language line "Home"
ERROR - 2023-10-06 09:16:24 --> Could not find the language line "Home"
ERROR - 2023-10-06 09:21:48 --> Could not find the language line "Home"
ERROR - 2023-10-06 09:22:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-06 09:22:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-06 09:22:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-06 09:22:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-06 09:22:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-06 09:22:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-06 09:22:43 --> Could not find the language line "Home"
ERROR - 2023-10-06 09:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 09:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 09:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 09:25:44 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-06 09:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 09:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 09:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 09:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 09:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 09:36:53 --> Could not find the language line "Home"
ERROR - 2023-10-06 09:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 09:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 09:39:39 --> Could not find the language line "Home"
ERROR - 2023-10-06 09:41:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 09:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 09:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 09:57:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 09:57:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 09:58:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 09:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 09:58:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 10:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 10:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 10:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 10:06:06 --> Could not find the language line "Home"
ERROR - 2023-10-06 10:06:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 10:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 10:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 10:09:00 --> Could not find the language line "Home"
ERROR - 2023-10-06 10:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 10:11:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 10:12:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 10:12:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 10:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 10:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 10:15:55 --> Could not find the language line "Home"
ERROR - 2023-10-06 10:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 10:24:08 --> Could not find the language line "Home"
ERROR - 2023-10-06 10:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 10:30:17 --> Could not find the language line "Home"
ERROR - 2023-10-06 10:32:59 --> Could not find the language line "Home"
ERROR - 2023-10-06 10:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 10:44:56 --> Could not find the language line "Home"
ERROR - 2023-10-06 10:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 10:45:48 --> Could not find the language line "Home"
ERROR - 2023-10-06 10:51:07 --> Could not find the language line "Home"
ERROR - 2023-10-06 10:51:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-06 10:52:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-06 10:52:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-06 10:52:42 --> Could not find the language line "Home"
ERROR - 2023-10-06 10:52:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 10:53:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 10:54:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 10:54:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 10:54:41 --> Could not find the language line "Home"
ERROR - 2023-10-06 10:54:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 11:00:49 --> Could not find the language line "Home"
ERROR - 2023-10-06 11:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 11:06:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-06 11:11:33 --> Could not find the language line "Home"
ERROR - 2023-10-06 11:20:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-06 11:21:07 --> Could not find the language line "Home"
ERROR - 2023-10-06 11:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 11:24:36 --> Could not find the language line "Home"
ERROR - 2023-10-06 11:30:16 --> Could not find the language line "Home"
ERROR - 2023-10-06 11:35:17 --> Could not find the language line "Home"
ERROR - 2023-10-06 11:56:31 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 11:56:42 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 12:06:22 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:06:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-06 12:06:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-06 12:07:13 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 12:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 12:09:42 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 12:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 12:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 12:10:43 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:11:09 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:11:25 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 12:13:01 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 12:18:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 12:18:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 12:19:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 12:20:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 12:20:22 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 12:26:06 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:26:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 12:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 12:26:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 12:33:59 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 12:35:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 12:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 12:37:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 12:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 12:39:23 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 12:50:28 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:51:01 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:52:41 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:52:41 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:52:41 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:52:41 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:52:41 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:55:05 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:57:11 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:57:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 12:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 12:57:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 12:57:33 --> Could not find the language line "Home"
ERROR - 2023-10-06 12:59:04 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:00:44 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:01:22 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:01:29 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:03:53 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:05:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 13:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:05:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 13:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:06:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 13:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:06:47 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:07:04 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 13:07:52 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:08:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 13:08:32 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 13:08:38 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 13:08:52 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 13:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:12:55 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:14:49 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:20:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 13:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:20:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 13:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:21:14 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:26:45 --> Could not find the language line "assets"
ERROR - 2023-10-06 13:28:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 13:34:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 13:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:41:10 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:41:22 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:44:37 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:45:01 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:45:05 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:45:24 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:45:27 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:45:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 13:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:45:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 13:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:45:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 13:46:12 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:46:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 13:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:46:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 13:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:47:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 13:47:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 13:47:49 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:50:48 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:51:42 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:53:55 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 13:54:11 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 13:54:38 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:55:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 13:55:03 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 13:57:08 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:57:08 --> Could not find the language line "Home"
ERROR - 2023-10-06 13:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:07:58 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:08:52 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:11:53 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:12:09 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:14:14 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:15:27 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:21:59 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:23:37 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:24:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 14:24:59 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:25:40 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:25:41 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:25:41 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:25:41 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:25:41 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:25:42 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:27:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 14:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:28:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 14:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:28:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 14:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:28:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 14:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:34:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 14:34:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 14:35:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 14:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:35:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 14:35:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 14:36:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 14:36:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 14:36:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 14:36:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 14:36:41 --> Could not find the language line "products"
ERROR - 2023-10-06 14:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:37:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 14:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:42:21 --> Could not find the language line "products"
ERROR - 2023-10-06 14:42:27 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 14:42:40 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 14:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:43:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 14:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:43:19 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:43:25 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 14:43:29 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 14:43:41 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 14:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:49:54 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:50:50 --> Could not find the language line "products"
ERROR - 2023-10-06 14:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:56:23 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:58:05 --> Could not find the language line "Home"
ERROR - 2023-10-06 14:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 14:59:17 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:04:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 15:04:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 15:04:57 --> Could not find the language line "products"
ERROR - 2023-10-06 15:04:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 15:05:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 15:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:21:55 --> Could not find the language line "products"
ERROR - 2023-10-06 15:22:11 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:22:36 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:27:52 --> Could not find the language line "products"
ERROR - 2023-10-06 15:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:33:00 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:33:20 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:39:10 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:39:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 15:39:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 15:40:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 15:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:41:44 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:41:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 15:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:41:47 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:41:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 15:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:42:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 15:42:43 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:43:23 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:45:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 15:46:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 15:48:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 15:49:50 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:55:45 --> Could not find the language line "products"
ERROR - 2023-10-06 15:55:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 15:56:00 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:56:09 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:56:49 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:57:15 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 15:58:46 --> Could not find the language line "Home"
ERROR - 2023-10-06 15:59:22 --> Could not find the language line "Home"
ERROR - 2023-10-06 16:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:07:11 --> Could not find the language line "products"
ERROR - 2023-10-06 16:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:12:27 --> Could not find the language line "Home"
ERROR - 2023-10-06 16:12:42 --> Could not find the language line "products"
ERROR - 2023-10-06 16:18:22 --> Could not find the language line "products"
ERROR - 2023-10-06 16:19:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:19:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:23:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 16:23:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:24:01 --> Could not find the language line "products"
ERROR - 2023-10-06 16:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:24:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:24:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:24:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:25:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:25:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:26:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:27:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:28:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:29:40 --> Could not find the language line "products"
ERROR - 2023-10-06 16:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:32:54 --> Could not find the language line "Home"
ERROR - 2023-10-06 16:35:17 --> Could not find the language line "Home"
ERROR - 2023-10-06 16:35:19 --> Could not find the language line "products"
ERROR - 2023-10-06 16:37:35 --> Could not find the language line "Home"
ERROR - 2023-10-06 16:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:38:53 --> Could not find the language line "Home"
ERROR - 2023-10-06 16:42:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 16:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:46:07 --> Could not find the language line "products"
ERROR - 2023-10-06 16:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 16:54:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 16:55:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:55:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:55:35 --> Could not find the language line "Home"
ERROR - 2023-10-06 16:55:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:56:32 --> Could not find the language line "Home"
ERROR - 2023-10-06 16:58:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:58:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:59:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 16:59:41 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:00:48 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:00:58 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:04:44 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:06:07 --> Could not find the language line "Perfume"
ERROR - 2023-10-06 17:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:07:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 17:07:22 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:07:46 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:14:06 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:14:28 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:15:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-06 17:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:16:08 --> Could not find the language line "products"
ERROR - 2023-10-06 17:18:39 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:27:16 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:34:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-06 17:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:38:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-06 17:38:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-06 17:38:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-06 17:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:39:54 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:41:03 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:47:58 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:51:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 17:51:44 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:57:39 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 17:58:15 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:58:21 --> Could not find the language line "Home"
ERROR - 2023-10-06 17:58:27 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2023-10-06 17:58:27 --> Unable to connect to the database
ERROR - 2023-10-06 17:58:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-06 17:58:33 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2023-10-06 17:58:33 --> Unable to connect to the database
ERROR - 2023-10-06 17:58:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-06 17:58:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 17:58:48 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 17:58:50 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 17:59:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-06 17:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 18:00:14 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:00:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-06 18:00:18 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:00:20 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:00:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-06 18:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 18:00:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-06 18:00:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-06 18:01:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-06 18:01:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-06 18:01:08 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:01:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:01:18 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:01:20 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:01:40 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:01:47 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:01:58 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:02:02 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:02:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:03:09 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:03:31 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:04:23 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-06 18:05:06 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:05:12 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 18:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 18:08:02 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 18:10:39 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:11:40 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:11:48 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:13:02 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 18:13:48 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 18:16:07 --> Could not find the language line "products"
ERROR - 2023-10-06 18:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 18:17:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 18:20:09 --> Could not find the language line "products"
ERROR - 2023-10-06 18:23:21 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:24:20 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:26:07 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:26:23 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:27:02 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 18:27:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 18:27:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 18:27:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 18:27:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 18:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 18:28:36 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:28:42 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:28:55 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 18:29:16 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:30:45 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 18:31:26 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:34:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-06 18:38:48 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:42:06 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:42:23 --> Could not find the language line "Bracelets"
ERROR - 2023-10-06 18:42:52 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:43:12 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:43:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 18:43:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 18:43:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 18:43:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 18:44:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 18:44:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 18:44:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 18:44:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 18:44:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 18:45:06 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 18:46:22 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:46:43 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 18:47:38 --> Could not find the language line "Home"
ERROR - 2023-10-06 18:59:45 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:05:59 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:15:40 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:16:05 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:16:07 --> Could not find the language line "products"
ERROR - 2023-10-06 19:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:17:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:17:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:27:21 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:28:40 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:29:00 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:29:29 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:29:56 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:29:58 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-06 19:29:58 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-06 19:29:58 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-06 19:29:58 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-06 19:29:58 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-06 19:29:58 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-06 19:29:58 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-06 19:29:58 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-06 19:33:14 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:34:47 --> Could not find the language line "products"
ERROR - 2023-10-06 19:35:16 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:35:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:35:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:35:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-06 19:35:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-06 19:35:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-06 19:35:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-06 19:35:51 --> Could not find the language line "Socks"
ERROR - 2023-10-06 19:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:39:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:39:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:40:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:41:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:42:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:42:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:42:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:42:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:45:06 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:45:13 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:46:07 --> Could not find the language line "products"
ERROR - 2023-10-06 19:46:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:47:36 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:47:46 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:47:58 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:48:45 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:48:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:49:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 19:53:00 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 19:54:52 --> Could not find the language line "Home"
ERROR - 2023-10-06 19:56:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 20:02:35 --> Could not find the language line "Home"
ERROR - 2023-10-06 20:02:43 --> Could not find the language line "Home"
ERROR - 2023-10-06 20:03:11 --> Could not find the language line "Perfume"
ERROR - 2023-10-06 20:10:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 20:14:08 --> Could not find the language line "Home"
ERROR - 2023-10-06 20:16:08 --> Could not find the language line "products"
ERROR - 2023-10-06 20:16:40 --> Could not find the language line "Home"
ERROR - 2023-10-06 20:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 20:18:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 20:18:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-06 20:19:08 --> Could not find the language line "Home"
ERROR - 2023-10-06 20:33:51 --> Could not find the language line "Home"
ERROR - 2023-10-06 20:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 20:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 20:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 20:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 20:42:38 --> Could not find the language line "Home"
ERROR - 2023-10-06 20:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 20:51:44 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-06 20:51:44 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-06 20:51:44 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-06 20:51:45 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-06 21:07:11 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-06 21:13:33 --> Could not find the language line "Home"
ERROR - 2023-10-06 21:16:08 --> Could not find the language line "products"
ERROR - 2023-10-06 21:19:12 --> 404 Page Not Found: Storage/settings
ERROR - 2023-10-06 21:23:16 --> Could not find the language line "Home"
ERROR - 2023-10-06 21:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 21:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 21:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 21:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 21:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 21:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 21:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 21:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 21:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 21:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 21:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 21:29:01 --> Could not find the language line "Home"
ERROR - 2023-10-06 21:29:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 21:31:28 --> Could not find the language line "Home"
ERROR - 2023-10-06 21:31:29 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-10-06 21:31:29 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-06 21:31:29 --> Could not find the language line "Home"
ERROR - 2023-10-06 21:31:30 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-10-06 21:31:30 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-10-06 21:31:30 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-10-06 21:31:31 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-10-06 21:31:31 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-10-06 21:31:31 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-10-06 21:31:31 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-10-06 21:31:32 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-10-06 21:31:32 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-10-06 21:31:32 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-10-06 21:31:33 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-10-06 21:31:33 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-10-06 21:31:33 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-10-06 21:31:33 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-10-06 21:31:34 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-10-06 21:31:34 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-10-06 21:37:28 --> Could not find the language line "Home"
ERROR - 2023-10-06 21:40:18 --> Could not find the language line "Home"
ERROR - 2023-10-06 21:40:58 --> Could not find the language line "Home"
ERROR - 2023-10-06 21:43:34 --> Could not find the language line "Home"
ERROR - 2023-10-06 21:44:25 --> Could not find the language line "Home"
ERROR - 2023-10-06 21:46:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 21:47:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 21:47:06 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-06 21:47:10 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-06 21:47:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 21:47:17 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-06 21:47:21 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-06 21:47:26 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-06 21:47:30 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-06 21:53:03 --> Could not find the language line "Home"
ERROR - 2023-10-06 21:54:32 --> Could not find the language line "Home"
ERROR - 2023-10-06 21:54:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 21:54:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 21:55:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-06 21:55:29 --> Could not find the language line "Other"
ERROR - 2023-10-06 21:55:34 --> Could not find the language line "Other"
ERROR - 2023-10-06 21:57:15 --> Could not find the language line "products"
ERROR - 2023-10-06 22:12:16 --> Could not find the language line "Home"
ERROR - 2023-10-06 22:19:56 --> Could not find the language line "Home"
ERROR - 2023-10-06 22:21:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 22:21:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-06 22:21:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-06 22:21:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 22:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 22:26:54 --> Could not find the language line "Home"
ERROR - 2023-10-06 22:27:36 --> Could not find the language line "Home"
ERROR - 2023-10-06 22:28:38 --> Could not find the language line "Home"
ERROR - 2023-10-06 22:30:05 --> Could not find the language line "Home"
ERROR - 2023-10-06 22:32:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 22:34:15 --> Could not find the language line "Home"
ERROR - 2023-10-06 22:43:00 --> Could not find the language line "Home"
ERROR - 2023-10-06 22:43:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 22:43:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 22:43:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 22:44:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-06 22:49:09 --> Could not find the language line "Home"
ERROR - 2023-10-06 22:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-06 22:49:53 --> Could not find the language line "Home"
ERROR - 2023-10-06 22:50:15 --> Could not find the language line "Home"
ERROR - 2023-10-06 22:52:28 --> Could not find the language line "Home"
ERROR - 2023-10-06 22:52:51 --> Could not find the language line "Home"
ERROR - 2023-10-06 22:53:35 --> Could not find the language line "Home"
ERROR - 2023-10-06 22:59:55 --> Could not find the language line "products"
ERROR - 2023-10-06 23:14:09 --> Could not find the language line "Home"
ERROR - 2023-10-06 23:17:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-06 23:17:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-06 23:29:02 --> Could not find the language line "Home"
ERROR - 2023-10-06 23:30:57 --> Could not find the language line "Home"
ERROR - 2023-10-06 23:33:01 --> Could not find the language line "Home"
ERROR - 2023-10-06 23:41:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-06 23:47:13 --> Could not find the language line "Home"
