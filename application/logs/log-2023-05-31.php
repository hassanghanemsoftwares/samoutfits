<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-31 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 00:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 01:00:19 --> Could not find the language line "Home"
ERROR - 2023-05-31 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 01:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 01:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 01:49:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-31 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 02:02:08 --> Could not find the language line "Home"
ERROR - 2023-05-31 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 02:30:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-31 02:36:15 --> Could not find the language line "Home"
ERROR - 2023-05-31 02:40:23 --> Could not find the language line "Crocs"
ERROR - 2023-05-31 02:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 02:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 02:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 02:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 02:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 03:15:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 03:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 03:27:30 --> Could not find the language line "Home"
ERROR - 2023-05-31 03:28:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 03:28:31 --> Could not find the language line "Home"
ERROR - 2023-05-31 03:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 03:28:58 --> Could not find the language line "Home"
ERROR - 2023-05-31 03:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 03:30:30 --> Could not find the language line "Home"
ERROR - 2023-05-31 03:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 03:32:02 --> Could not find the language line "Home"
ERROR - 2023-05-31 03:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 03:32:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-31 03:32:25 --> Could not find the language line "Home"
ERROR - 2023-05-31 03:32:34 --> Could not find the language line "Home"
ERROR - 2023-05-31 03:32:42 --> Could not find the language line "Home"
ERROR - 2023-05-31 03:32:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 03:34:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 03:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 03:35:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 03:43:41 --> Could not find the language line "Home"
ERROR - 2023-05-31 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-31 04:13:23 --> Could not find the language line "Home"
ERROR - 2023-05-31 04:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 04:15:09 --> Could not find the language line "Home"
ERROR - 2023-05-31 04:15:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-31 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 04:35:54 --> Could not find the language line "Home"
ERROR - 2023-05-31 04:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 04:57:19 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:02:30 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:05:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-31 05:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:16:54 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:17:03 --> Could not find the language line "Bracelets"
ERROR - 2023-05-31 05:27:09 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:27:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:27:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:27:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-31 05:28:08 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:28:13 --> Could not find the language line "Perfume"
ERROR - 2023-05-31 05:28:20 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:28:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 05:29:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 05:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:29:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 05:29:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 05:29:44 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:30:07 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:36:15 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:37:05 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:37:06 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:37:06 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:37:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 05:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:37:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 05:37:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 05:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:39:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:43:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 05:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:49:30 --> Could not find the language line "Home"
ERROR - 2023-05-31 05:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 05:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:09:23 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:10:16 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:13:04 --> 404 Page Not Found: Storage/settings
ERROR - 2023-05-31 06:13:06 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:13:06 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:13:08 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:13:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 06:13:51 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:13:55 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:14:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 06:14:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 06:14:32 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:14:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 06:15:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 06:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:15:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 06:15:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 06:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:20:42 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:20:43 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:22:35 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:26:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-31 06:27:32 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:46:38 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:48:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 06:48:01 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:48:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 06:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:50:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 06:51:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 06:51:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 06:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:52:08 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:52:32 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:52:45 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-31 06:52:46 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-31 06:52:46 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-31 06:52:46 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-31 06:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:53:10 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:54:26 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:54:38 --> Could not find the language line "Perfume"
ERROR - 2023-05-31 06:54:50 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:54:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 06:54:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 06:55:18 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:55:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 06:55:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 06:55:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 06:55:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 06:55:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 06:55:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 06:55:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 06:55:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 06:55:38 --> Could not find the language line "Home"
ERROR - 2023-05-31 06:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:58:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-31 06:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 06:59:56 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:01:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-31 07:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:07:55 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:09:18 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:09:35 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:12:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-31 07:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:13:50 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:13:50 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:14:30 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:14:32 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:15:49 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:15:56 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:16:04 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:16:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 07:16:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 07:16:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 07:16:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 07:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:17:00 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:17:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 07:17:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 07:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:27:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-31 07:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:38:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:42:10 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:42:22 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:43:26 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:44:54 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:44:55 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:46:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-31 07:46:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-31 07:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:49:44 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:51:50 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:52:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 07:53:09 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:53:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 07:53:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 07:53:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 07:53:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 07:54:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 07:54:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 07:54:25 --> Could not find the language line "Home"
ERROR - 2023-05-31 07:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 07:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-31 08:04:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 08:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:24:25 --> Could not find the language line "Home"
ERROR - 2023-05-31 08:24:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-31 08:25:58 --> Could not find the language line "Home"
ERROR - 2023-05-31 08:29:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-31 08:29:59 --> Could not find the language line "Home"
ERROR - 2023-05-31 08:30:08 --> Could not find the language line "Home"
ERROR - 2023-05-31 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 08:31:45 --> Could not find the language line "Home"
ERROR - 2023-05-31 08:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:42:44 --> Could not find the language line "Home"
ERROR - 2023-05-31 08:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:49:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-31 08:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:56:51 --> Could not find the language line "Home"
ERROR - 2023-05-31 08:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 08:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 09:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 09:02:06 --> Could not find the language line "Home"
ERROR - 2023-05-31 09:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 09:08:59 --> Could not find the language line "Home"
ERROR - 2023-05-31 09:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 09:10:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 09:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 09:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 09:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 09:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 09:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 09:21:37 --> Could not find the language line "Home"
ERROR - 2023-05-31 09:22:46 --> Could not find the language line "Home"
ERROR - 2023-05-31 09:22:50 --> Could not find the language line "hats"
ERROR - 2023-05-31 09:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 09:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 09:32:42 --> Could not find the language line "Home"
ERROR - 2023-05-31 09:32:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 09:36:37 --> Could not find the language line "Home"
ERROR - 2023-05-31 09:36:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 09:37:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 09:41:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 09:42:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 09:50:05 --> Could not find the language line "Home"
ERROR - 2023-05-31 09:50:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 09:50:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 09:51:51 --> Could not find the language line "Home"
ERROR - 2023-05-31 09:57:11 --> Could not find the language line "Home"
ERROR - 2023-05-31 09:57:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 09:59:11 --> Could not find the language line "Home"
ERROR - 2023-05-31 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 10:00:36 --> Could not find the language line "Home"
ERROR - 2023-05-31 10:00:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:00:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:01:41 --> Could not find the language line "Home"
ERROR - 2023-05-31 10:02:28 --> Could not find the language line "Home"
ERROR - 2023-05-31 10:02:35 --> Could not find the language line "Home"
ERROR - 2023-05-31 10:03:41 --> Could not find the language line "Home"
ERROR - 2023-05-31 10:03:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:04:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:05:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:06:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:07:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:07:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-31 10:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:13:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:15:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:17:59 --> Could not find the language line "Home"
ERROR - 2023-05-31 10:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:24:23 --> Could not find the language line "Home"
ERROR - 2023-05-31 10:24:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:24:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:26:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:29:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:29:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:29:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-31 10:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:36:32 --> Could not find the language line "Home"
ERROR - 2023-05-31 10:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:41:56 --> Could not find the language line "Home"
ERROR - 2023-05-31 10:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:47:49 --> Could not find the language line "Home"
ERROR - 2023-05-31 10:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:48:50 --> Could not find the language line "Home"
ERROR - 2023-05-31 10:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 10:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 11:02:48 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:02:50 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:02:52 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:02:52 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:11:54 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:11:54 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:11:55 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:12:56 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:16:21 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:42:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-31 11:46:47 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:47:00 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:47:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:47:38 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:47:42 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:47:48 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:49:31 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:50:39 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:50:52 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:51:57 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:52:11 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:52:42 --> Could not find the language line "Home"
ERROR - 2023-05-31 11:59:26 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:04:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-31 12:09:00 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:19:38 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:19:39 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:19:44 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:19:48 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:21:11 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:29:55 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:29:58 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:30:16 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:32:04 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:32:46 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:35:20 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:36:10 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:36:22 --> Could not find the language line "Bracelets"
ERROR - 2023-05-31 12:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:36:33 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:37:39 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:37:43 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:38:21 --> Could not find the language line "hats"
ERROR - 2023-05-31 12:39:00 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-05-31 12:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:39:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:39:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:39:18 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:39:45 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:39:53 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:40:46 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:41:06 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:41:37 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:42:08 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:44:05 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:45:11 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:46:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:46:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 12:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:47:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 12:47:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 12:47:52 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:48:31 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:48:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 12:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:49:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 12:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:49:36 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:50:00 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:50:44 --> Could not find the language line "Home"
ERROR - 2023-05-31 12:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:52:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 12:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:53:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 12:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 12:57:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-31 12:57:26 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-05-31 12:57:27 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-05-31 12:57:29 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:07:23 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:08:50 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:09:08 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:09:19 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:13:48 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:14:17 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:15:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 13:15:50 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:15:50 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:15:50 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:16:52 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:16:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 13:16:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 13:17:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:17:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 13:17:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 13:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:17:42 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:17:50 --> Could not find the language line "Bracelets"
ERROR - 2023-05-31 13:18:19 --> Could not find the language line "Bracelets"
ERROR - 2023-05-31 13:18:42 --> Could not find the language line "Bracelets"
ERROR - 2023-05-31 13:18:44 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:19:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 13:19:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:35:59 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:37:01 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:37:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-31 13:37:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-31 13:37:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-31 13:37:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-31 13:37:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-31 13:37:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-31 13:37:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-31 13:37:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-31 13:37:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-31 13:37:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-31 13:38:22 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:38:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 13:39:33 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:39:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 13:39:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-31 13:39:53 --> Could not find the language line "Home"
ERROR - 2023-05-31 13:50:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 13:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 13:51:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 13:58:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-31 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:02:43 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:03:46 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:04:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-31 14:05:24 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:09:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-31 14:09:29 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 14:11:40 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:12:22 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 14:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 14:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 14:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 14:20:20 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:31:21 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:31:48 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:32:47 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:33:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 14:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 14:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 14:34:40 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:35:09 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:35:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 14:35:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 14:36:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 14:36:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 14:36:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 14:36:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 14:36:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 14:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 14:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 14:38:17 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 14:39:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 14:43:04 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:51:58 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:52:29 --> Could not find the language line "Home"
ERROR - 2023-05-31 14:53:33 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:17:59 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:20:07 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:20:27 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:20:29 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:20:30 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:20:43 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:22:21 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:22:57 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:23:45 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:25:26 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:29:05 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:30:48 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:30:48 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:37:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:39:35 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:40:23 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:43:23 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:49:29 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 15:52:01 --> Could not find the language line "Home"
ERROR - 2023-05-31 15:52:38 --> Could not find the language line "Home"
ERROR - 2023-05-31 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 16:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 16:03:11 --> Could not find the language line "Home"
ERROR - 2023-05-31 16:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 16:04:37 --> Could not find the language line "Home"
ERROR - 2023-05-31 16:10:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 16:13:01 --> Could not find the language line "Home"
ERROR - 2023-05-31 16:13:49 --> Could not find the language line "Home"
ERROR - 2023-05-31 16:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 16:14:22 --> Could not find the language line "Home"
ERROR - 2023-05-31 16:14:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 16:15:07 --> Could not find the language line "Home"
ERROR - 2023-05-31 16:15:36 --> Could not find the language line "Home"
ERROR - 2023-05-31 16:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 16:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 16:20:42 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-31 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 16:39:08 --> Could not find the language line "Home"
ERROR - 2023-05-31 16:56:07 --> Could not find the language line "Home"
ERROR - 2023-05-31 16:56:07 --> Could not find the language line "Home"
ERROR - 2023-05-31 16:56:08 --> Could not find the language line "Home"
ERROR - 2023-05-31 16:56:15 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-31 16:56:15 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-31 16:56:15 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-31 16:56:16 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-31 16:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 16:59:20 --> Could not find the language line "Home"
ERROR - 2023-05-31 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 17:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 17:19:05 --> Could not find the language line "Home"
ERROR - 2023-05-31 17:20:05 --> Could not find the language line "Home"
ERROR - 2023-05-31 17:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 17:28:21 --> Could not find the language line "Home"
ERROR - 2023-05-31 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-31 17:39:16 --> Could not find the language line "Home"
ERROR - 2023-05-31 17:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 17:40:19 --> Could not find the language line "Home"
ERROR - 2023-05-31 17:44:22 --> Could not find the language line "Home"
ERROR - 2023-05-31 17:45:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-31 17:56:26 --> Could not find the language line "Home"
ERROR - 2023-05-31 17:56:33 --> Could not find the language line "Home"
ERROR - 2023-05-31 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 18:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 18:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 18:06:43 --> Could not find the language line "Home"
ERROR - 2023-05-31 18:13:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-31 18:18:42 --> Could not find the language line "Bracelets"
ERROR - 2023-05-31 18:21:31 --> Could not find the language line "Home"
ERROR - 2023-05-31 18:25:48 --> Could not find the language line "Home"
ERROR - 2023-05-31 18:29:43 --> Could not find the language line "Home"
ERROR - 2023-05-31 18:30:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-31 18:30:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 18:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 18:31:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 18:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 18:31:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 18:31:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 18:31:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 18:31:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 18:31:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 18:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 18:38:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 18:43:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-31 18:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 18:58:42 --> Could not find the language line "Socks"
ERROR - 2023-05-31 18:59:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-31 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 19:00:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-31 19:13:24 --> Could not find the language line "Home"
ERROR - 2023-05-31 19:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 19:29:50 --> Could not find the language line "Home"
ERROR - 2023-05-31 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 19:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 19:30:45 --> Could not find the language line "Home"
ERROR - 2023-05-31 19:30:47 --> Could not find the language line "Home"
ERROR - 2023-05-31 19:30:51 --> Could not find the language line "Home"
ERROR - 2023-05-31 19:30:59 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-31 19:30:59 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-31 19:31:06 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-31 19:31:06 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-31 19:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 19:31:55 --> Could not find the language line "Home"
ERROR - 2023-05-31 19:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 19:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 19:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 19:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 19:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 19:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 19:37:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 19:37:26 --> 404 Page Not Found: Well-known/change-password
ERROR - 2023-05-31 19:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 19:40:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 19:41:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 19:59:50 --> Could not find the language line "Home"
ERROR - 2023-05-31 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-31 20:08:29 --> Could not find the language line "Home"
ERROR - 2023-05-31 20:10:36 --> Could not find the language line "Home"
ERROR - 2023-05-31 20:10:37 --> Could not find the language line "Home"
ERROR - 2023-05-31 20:12:28 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-31 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-31 20:30:46 --> Could not find the language line "Home"
ERROR - 2023-05-31 20:31:51 --> Could not find the language line "Home"
ERROR - 2023-05-31 20:34:45 --> Could not find the language line "Home"
ERROR - 2023-05-31 20:42:38 --> Could not find the language line "Home"
ERROR - 2023-05-31 20:42:39 --> Could not find the language line "Home"
ERROR - 2023-05-31 20:43:05 --> Could not find the language line "Home"
ERROR - 2023-05-31 20:43:05 --> Could not find the language line "Home"
ERROR - 2023-05-31 20:43:06 --> Could not find the language line "Home"
ERROR - 2023-05-31 21:00:16 --> Could not find the language line "Home"
ERROR - 2023-05-31 21:12:38 --> Could not find the language line "Home"
ERROR - 2023-05-31 21:19:26 --> Could not find the language line "Home"
ERROR - 2023-05-31 21:19:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 21:20:17 --> Could not find the language line "Home"
ERROR - 2023-05-31 21:20:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 21:20:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 21:28:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-31 21:29:43 --> Could not find the language line "Home"
ERROR - 2023-05-31 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 21:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-31 21:31:45 --> Could not find the language line "Home"
ERROR - 2023-05-31 21:36:41 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-05-31 21:37:11 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-05-31 21:38:40 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-05-31 21:39:10 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-05-31 21:42:53 --> Could not find the language line "Home"
ERROR - 2023-05-31 21:51:06 --> Could not find the language line "Home"
ERROR - 2023-05-31 21:51:25 --> Could not find the language line "Home"
ERROR - 2023-05-31 21:56:07 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-05-31 21:56:07 --> 404 Page Not Found: Js/common.js
ERROR - 2023-05-31 21:56:08 --> 404 Page Not Found: Lib/easing
ERROR - 2023-05-31 21:56:08 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-05-31 21:56:08 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-05-31 21:56:08 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-05-31 21:56:08 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-05-31 21:56:08 --> 404 Page Not Found: Js/main.js
ERROR - 2023-05-31 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 22:16:45 --> Could not find the language line "Home"
ERROR - 2023-05-31 22:16:47 --> Could not find the language line "Home"
ERROR - 2023-05-31 22:29:29 --> Could not find the language line "Home"
ERROR - 2023-05-31 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 22:30:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-31 22:30:32 --> Could not find the language line "Home"
ERROR - 2023-05-31 22:30:35 --> Could not find the language line "Home"
ERROR - 2023-05-31 22:30:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-31 22:30:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-31 22:31:00 --> Could not find the language line "Home"
ERROR - 2023-05-31 22:31:01 --> Could not find the language line "Home"
ERROR - 2023-05-31 22:47:00 --> Could not find the language line "Home"
ERROR - 2023-05-31 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-31 23:06:56 --> Could not find the language line "Home"
ERROR - 2023-05-31 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-31 23:52:49 --> Could not find the language line "Home"
ERROR - 2023-05-31 23:53:03 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-31 23:53:03 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-31 23:53:03 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-31 23:53:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-31 23:54:03 --> Could not find the language line "Home"
