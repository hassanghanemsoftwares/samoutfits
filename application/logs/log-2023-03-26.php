<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-26 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-26 00:25:16 --> Could not find the language line "Home"
ERROR - 2023-03-26 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-26 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 01:08:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 01:29:22 --> Could not find the language line "Home"
ERROR - 2023-03-26 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 02:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 02:23:49 --> Could not find the language line "Home"
ERROR - 2023-03-26 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 02:58:15 --> Could not find the language line "Home"
ERROR - 2023-03-26 03:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-26 03:01:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-26 03:23:02 --> Could not find the language line "Home"
ERROR - 2023-03-26 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-26 03:46:55 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-03-26 04:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-26 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 04:32:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 04:41:17 --> Could not find the language line "Home"
ERROR - 2023-03-26 05:00:09 --> Could not find the language line "Home"
ERROR - 2023-03-26 05:00:20 --> Could not find the language line "Home"
ERROR - 2023-03-26 05:03:43 --> Could not find the language line "Home"
ERROR - 2023-03-26 05:24:37 --> Could not find the language line "Home"
ERROR - 2023-03-26 05:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-26 05:34:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 06:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 06:03:25 --> Could not find the language line "Home"
ERROR - 2023-03-26 06:12:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-26 06:45:21 --> Could not find the language line "Home"
ERROR - 2023-03-26 06:45:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 06:48:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 06:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 06:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-26 07:15:03 --> Could not find the language line "Home"
ERROR - 2023-03-26 07:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 07:20:40 --> Could not find the language line "Home"
ERROR - 2023-03-26 07:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 07:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 07:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 07:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 07:38:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 07:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 07:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 07:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 07:50:22 --> Could not find the language line "Home"
ERROR - 2023-03-26 07:54:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 07:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 07:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 07:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 07:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-26 08:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:09:56 --> Could not find the language line "Other"
ERROR - 2023-03-26 08:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-26 08:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:33:39 --> Could not find the language line "Home"
ERROR - 2023-03-26 08:33:49 --> Could not find the language line "Perfume"
ERROR - 2023-03-26 08:33:54 --> Could not find the language line "Home"
ERROR - 2023-03-26 08:34:04 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 08:34:16 --> Could not find the language line "Home"
ERROR - 2023-03-26 08:34:19 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 08:34:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 08:35:04 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 08:35:22 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 08:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:35:29 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 08:35:34 --> Could not find the language line "Home"
ERROR - 2023-03-26 08:35:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 08:36:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 08:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:36:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 08:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:37:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 08:37:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 08:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:37:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 08:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:37:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 08:38:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 08:38:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 08:38:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 08:38:17 --> Could not find the language line "Home"
ERROR - 2023-03-26 08:38:17 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 08:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 08:53:36 --> Could not find the language line "Home"
ERROR - 2023-03-26 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 09:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 09:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 09:22:27 --> Could not find the language line "Home"
ERROR - 2023-03-26 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-26 09:33:16 --> Could not find the language line "Home"
ERROR - 2023-03-26 09:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 09:34:08 --> Could not find the language line "Home"
ERROR - 2023-03-26 09:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 09:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 09:36:15 --> Could not find the language line "Home"
ERROR - 2023-03-26 09:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 09:39:38 --> Could not find the language line "Home"
ERROR - 2023-03-26 09:56:36 --> Could not find the language line "Home"
ERROR - 2023-03-26 09:56:36 --> Could not find the language line "Home"
ERROR - 2023-03-26 09:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 10:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-26 10:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 10:08:12 --> Could not find the language line "Home"
ERROR - 2023-03-26 10:12:43 --> Could not find the language line "Home"
ERROR - 2023-03-26 10:14:06 --> Could not find the language line "Home"
ERROR - 2023-03-26 10:15:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 10:15:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 10:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-26 10:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 10:35:00 --> Could not find the language line "Home"
ERROR - 2023-03-26 10:41:09 --> Could not find the language line "Home"
ERROR - 2023-03-26 10:43:44 --> Could not find the language line "Home"
ERROR - 2023-03-26 10:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:01:12 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:08:54 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:08:54 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-26 11:25:51 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:25:58 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 11:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 11:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 11:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 11:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 11:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:32:09 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 11:35:18 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:35:18 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 11:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 11:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 11:37:34 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 11:37:34 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 11:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 11:41:42 --> 404 Page Not Found: Products/index
ERROR - 2023-03-26 11:53:36 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:53:37 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:53:37 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:53:37 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:53:37 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:53:37 --> Could not find the language line "Home"
ERROR - 2023-03-26 11:59:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 11:59:38 --> Could not find the language line "Home"
ERROR - 2023-03-26 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 12:07:58 --> Could not find the language line "Home"
ERROR - 2023-03-26 12:21:23 --> Could not find the language line "Home"
ERROR - 2023-03-26 12:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-26 12:30:26 --> Could not find the language line "Home"
ERROR - 2023-03-26 12:42:21 --> Could not find the language line "Home"
ERROR - 2023-03-26 12:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 12:44:31 --> Could not find the language line "Home"
ERROR - 2023-03-26 12:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 12:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 12:54:44 --> Could not find the language line "Home"
ERROR - 2023-03-26 12:54:55 --> Could not find the language line "Socks"
ERROR - 2023-03-26 12:55:08 --> Could not find the language line "Home"
ERROR - 2023-03-26 12:55:11 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 12:55:31 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 12:55:46 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 12:56:01 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 12:56:02 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 12:56:03 --> Could not find the language line "Home"
ERROR - 2023-03-26 12:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 12:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 12:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 12:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 12:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 12:58:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 12:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 12:59:19 --> Could not find the language line "Home"
ERROR - 2023-03-26 13:00:05 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-26 13:08:51 --> Could not find the language line "Home"
ERROR - 2023-03-26 13:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 13:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 13:29:49 --> Could not find the language line "Home"
ERROR - 2023-03-26 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-26 13:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 13:43:10 --> Could not find the language line "Home"
ERROR - 2023-03-26 13:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 13:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 13:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 13:45:12 --> Could not find the language line "Home"
ERROR - 2023-03-26 13:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 13:45:35 --> Could not find the language line "Home"
ERROR - 2023-03-26 13:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 13:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 13:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 13:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 13:48:21 --> Could not find the language line "Home"
ERROR - 2023-03-26 13:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 13:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 13:53:08 --> Could not find the language line "Home"
ERROR - 2023-03-26 13:53:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 13:53:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 13:59:50 --> Could not find the language line "Home"
ERROR - 2023-03-26 14:00:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 14:00:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-26 14:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 14:00:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 14:00:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 14:00:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 14:00:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 14:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 14:01:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 14:01:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 14:07:59 --> Could not find the language line "Home"
ERROR - 2023-03-26 14:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 14:09:01 --> Could not find the language line "Home"
ERROR - 2023-03-26 14:13:37 --> Could not find the language line "Home"
ERROR - 2023-03-26 14:13:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 14:14:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 14:14:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 14:14:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 14:14:26 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-26 14:14:27 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-26 14:14:28 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-26 14:14:29 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-26 14:16:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 14:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 14:21:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 14:21:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 14:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 14:23:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 14:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 14:23:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 14:23:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 14:24:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 14:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 14:27:59 --> Could not find the language line "Home"
ERROR - 2023-03-26 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-26 14:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 14:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 14:37:26 --> Could not find the language line "Home"
ERROR - 2023-03-26 14:37:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 14:37:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-26 14:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 14:46:57 --> Could not find the language line "Home"
ERROR - 2023-03-26 14:59:24 --> Could not find the language line "Home"
ERROR - 2023-03-26 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 15:26:08 --> Could not find the language line "Home"
ERROR - 2023-03-26 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-26 15:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 16:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-26 16:05:36 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 16:24:13 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 16:24:22 --> Could not find the language line "Home"
ERROR - 2023-03-26 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 16:33:23 --> Could not find the language line "Home"
ERROR - 2023-03-26 16:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 16:34:34 --> Could not find the language line "Home"
ERROR - 2023-03-26 16:54:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-26 16:54:43 --> Could not find the language line "Home"
ERROR - 2023-03-26 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-26 17:19:00 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-26 17:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 17:29:00 --> Could not find the language line "Home"
ERROR - 2023-03-26 17:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-26 17:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 17:57:29 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 18:20:09 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:23:21 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:25:51 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:25:56 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:32:20 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:32:59 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:33:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 18:33:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 18:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:33:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 18:33:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 18:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:33:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 18:33:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 18:34:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 18:34:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 18:34:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 18:34:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 18:34:22 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:35:37 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:35:44 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 18:36:02 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 18:36:03 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 18:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:36:14 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 18:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:36:20 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 18:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:36:30 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:38:00 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 18:38:06 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:38:07 --> Could not find the language line "Clothing"
ERROR - 2023-03-26 18:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:38:08 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:38:36 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:38:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 18:38:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 18:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:38:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 18:38:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 18:38:54 --> Could not find the language line "Home"
ERROR - 2023-03-26 18:39:33 --> 404 Page Not Found: Backupsql/index
ERROR - 2023-03-26 18:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:58:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 18:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 18:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:11:16 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:19:38 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:21:34 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:22:07 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:22:55 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:25:02 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:27:57 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:28:19 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:28:35 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:29:15 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:29:57 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:30:23 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:30:34 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:36:33 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 19:42:02 --> Could not find the language line "Home"
ERROR - 2023-03-26 19:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-26 20:09:18 --> Could not find the language line "Home"
ERROR - 2023-03-26 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 20:34:19 --> Could not find the language line "Home"
ERROR - 2023-03-26 20:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 20:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 20:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 20:46:02 --> Could not find the language line "Home"
ERROR - 2023-03-26 20:47:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 20:47:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-26 20:50:52 --> Could not find the language line "Home"
ERROR - 2023-03-26 20:52:49 --> Could not find the language line "Home"
ERROR - 2023-03-26 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-26 21:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 21:12:06 --> Could not find the language line "Home"
ERROR - 2023-03-26 21:15:06 --> Could not find the language line "Home"
ERROR - 2023-03-26 21:16:44 --> Could not find the language line "Home"
ERROR - 2023-03-26 21:20:46 --> Could not find the language line "Home"
ERROR - 2023-03-26 21:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 21:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-26 21:40:55 --> Could not find the language line "Home"
ERROR - 2023-03-26 21:41:19 --> Could not find the language line "Home"
ERROR - 2023-03-26 21:55:07 --> Could not find the language line "Home"
ERROR - 2023-03-26 21:56:39 --> Could not find the language line "Home"
ERROR - 2023-03-26 21:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 21:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-26 21:58:03 --> Could not find the language line "Home"
ERROR - 2023-03-26 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-26 22:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-26 22:19:54 --> Could not find the language line "Home"
ERROR - 2023-03-26 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-26 22:55:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-26 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-26 23:06:02 --> Could not find the language line "Home"
ERROR - 2023-03-26 23:06:40 --> Could not find the language line "Home"
ERROR - 2023-03-26 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-26 23:37:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-26 23:50:33 --> Could not find the language line "Home"
ERROR - 2023-03-26 23:56:26 --> Could not find the language line "Home"
