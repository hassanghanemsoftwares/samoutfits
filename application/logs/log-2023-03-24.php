<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-24 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-24 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-24 01:14:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-24 01:16:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-24 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-24 01:38:27 --> Could not find the language line "Home"
ERROR - 2023-03-24 01:39:07 --> Could not find the language line "Home"
ERROR - 2023-03-24 01:44:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-24 01:46:32 --> Could not find the language line "Home"
ERROR - 2023-03-24 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-24 02:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-24 02:10:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 02:29:27 --> Could not find the language line "Home"
ERROR - 2023-03-24 02:29:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-24 02:34:07 --> Could not find the language line "Home"
ERROR - 2023-03-24 02:34:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 02:34:12 --> Could not find the language line "Bracelets"
ERROR - 2023-03-24 02:49:18 --> Could not find the language line "Home"
ERROR - 2023-03-24 02:49:45 --> Could not find the language line "Home"
ERROR - 2023-03-24 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 03:05:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-24 03:05:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-24 03:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 03:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 03:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-24 03:30:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-24 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-24 04:12:05 --> Could not find the language line "Home"
ERROR - 2023-03-24 04:21:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-24 04:21:19 --> Could not find the language line "Home"
ERROR - 2023-03-24 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-24 04:37:57 --> Could not find the language line "Home"
ERROR - 2023-03-24 04:38:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 04:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:40:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:42:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-24 04:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 04:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-24 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 05:40:19 --> Could not find the language line "Home"
ERROR - 2023-03-24 05:40:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 05:40:58 --> Could not find the language line "Home"
ERROR - 2023-03-24 05:41:06 --> Could not find the language line "Home"
ERROR - 2023-03-24 05:41:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 05:41:44 --> Could not find the language line "Home"
ERROR - 2023-03-24 05:41:49 --> Could not find the language line "Home"
ERROR - 2023-03-24 05:41:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 05:42:38 --> Could not find the language line "Home"
ERROR - 2023-03-24 05:42:43 --> Could not find the language line "Home"
ERROR - 2023-03-24 05:42:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 05:43:18 --> Could not find the language line "Home"
ERROR - 2023-03-24 05:52:35 --> Could not find the language line "Home"
ERROR - 2023-03-24 05:52:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 05:53:50 --> Could not find the language line "Home"
ERROR - 2023-03-24 05:54:53 --> Could not find the language line "Home"
ERROR - 2023-03-24 05:54:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 05:55:36 --> Could not find the language line "Home"
ERROR - 2023-03-24 05:55:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-24 06:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-24 06:04:39 --> Could not find the language line "Home"
ERROR - 2023-03-24 06:04:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-24 06:34:11 --> Could not find the language line "Home"
ERROR - 2023-03-24 06:34:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-24 07:03:15 --> Could not find the language line "Home"
ERROR - 2023-03-24 07:03:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 07:03:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 07:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 07:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 07:12:27 --> Could not find the language line "Home"
ERROR - 2023-03-24 07:12:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 07:12:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 07:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 07:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-24 07:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 07:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 07:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 07:40:01 --> Could not find the language line "Home"
ERROR - 2023-03-24 07:40:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 07:42:17 --> Could not find the language line "Home"
ERROR - 2023-03-24 07:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 07:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 07:44:27 --> Could not find the language line "Home"
ERROR - 2023-03-24 07:44:44 --> Could not find the language line "Home"
ERROR - 2023-03-24 07:46:07 --> Could not find the language line "Home"
ERROR - 2023-03-24 07:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 07:55:04 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-24 07:55:04 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-24 07:55:05 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-24 07:55:05 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-24 07:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 07:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 07:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 07:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 07:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-24 08:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:11:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:16:07 --> Could not find the language line "Home"
ERROR - 2023-03-24 08:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 08:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:35:03 --> Could not find the language line "Home"
ERROR - 2023-03-24 08:35:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 08:35:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 08:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:36:09 --> Could not find the language line "Home"
ERROR - 2023-03-24 08:36:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 08:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:38:23 --> Could not find the language line "Home"
ERROR - 2023-03-24 08:38:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 08:38:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-24 08:38:44 --> Could not find the language line "Clothing"
ERROR - 2023-03-24 08:38:49 --> Could not find the language line "Home"
ERROR - 2023-03-24 08:38:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 08:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:46:05 --> Could not find the language line "Bracelets"
ERROR - 2023-03-24 08:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:55:47 --> Could not find the language line "Home"
ERROR - 2023-03-24 08:55:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 08:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 08:58:20 --> Could not find the language line "Home"
ERROR - 2023-03-24 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 09:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 09:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 09:01:35 --> Could not find the language line "Home"
ERROR - 2023-03-24 09:01:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 09:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 09:07:00 --> Could not find the language line "Home"
ERROR - 2023-03-24 09:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 09:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 09:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-24 09:30:18 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-24 09:30:18 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-24 09:30:19 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-24 09:30:19 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-24 09:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 09:32:59 --> Could not find the language line "Home"
ERROR - 2023-03-24 09:37:45 --> Could not find the language line "Home"
ERROR - 2023-03-24 09:37:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 09:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 09:44:17 --> Could not find the language line "Home"
ERROR - 2023-03-24 09:44:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 09:44:25 --> Could not find the language line "Home"
ERROR - 2023-03-24 09:44:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 09:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 09:46:34 --> Could not find the language line "Home"
ERROR - 2023-03-24 09:46:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 09:46:38 --> Could not find the language line "Clothing"
ERROR - 2023-03-24 09:46:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-24 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-24 10:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-24 10:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 10:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 10:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 10:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 10:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 10:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 10:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 10:33:10 --> Could not find the language line "Home"
ERROR - 2023-03-24 10:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 10:38:41 --> Could not find the language line "Home"
ERROR - 2023-03-24 10:38:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 10:39:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-24 10:39:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-24 10:39:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-24 10:39:50 --> Could not find the language line "Home"
ERROR - 2023-03-24 10:39:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 10:39:52 --> Could not find the language line "Bracelets"
ERROR - 2023-03-24 10:40:19 --> Could not find the language line "Bracelets"
ERROR - 2023-03-24 10:40:34 --> Could not find the language line "Bracelets"
ERROR - 2023-03-24 10:40:37 --> Could not find the language line "Home"
ERROR - 2023-03-24 10:40:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 10:40:43 --> Could not find the language line "Clothing"
ERROR - 2023-03-24 10:41:09 --> Could not find the language line "Clothing"
ERROR - 2023-03-24 10:41:24 --> Could not find the language line "Clothing"
ERROR - 2023-03-24 10:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 10:42:33 --> Could not find the language line "Home"
ERROR - 2023-03-24 10:42:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 10:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 10:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 10:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 10:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 10:48:19 --> Could not find the language line "Home"
ERROR - 2023-03-24 10:48:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 10:48:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-24 10:48:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 10:49:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-24 10:49:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-24 10:49:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-24 10:50:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-24 10:50:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-24 10:50:49 --> Could not find the language line "Home"
ERROR - 2023-03-24 10:50:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 10:51:13 --> Could not find the language line "Perfume"
ERROR - 2023-03-24 10:51:19 --> Could not find the language line "Home"
ERROR - 2023-03-24 10:51:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 10:51:21 --> Could not find the language line "Socks"
ERROR - 2023-03-24 10:51:46 --> Could not find the language line "Socks"
ERROR - 2023-03-24 10:51:59 --> Could not find the language line "Socks"
ERROR - 2023-03-24 10:52:07 --> Could not find the language line "Home"
ERROR - 2023-03-24 10:52:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 11:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 11:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 11:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 11:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 11:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-24 11:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 11:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 11:45:14 --> 404 Page Not Found: Server/php
ERROR - 2023-03-24 11:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 11:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 11:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 11:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-24 12:22:19 --> Could not find the language line "Home"
ERROR - 2023-03-24 12:22:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 12:23:38 --> Could not find the language line "Home"
ERROR - 2023-03-24 12:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 12:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 12:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-24 12:39:54 --> Could not find the language line "Home"
ERROR - 2023-03-24 12:40:49 --> Could not find the language line "Home"
ERROR - 2023-03-24 12:51:23 --> Could not find the language line "Home"
ERROR - 2023-03-24 12:54:24 --> Could not find the language line "Home"
ERROR - 2023-03-24 12:59:56 --> Could not find the language line "Home"
ERROR - 2023-03-24 13:00:16 --> Could not find the language line "Home"
ERROR - 2023-03-24 13:00:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 13:01:14 --> Could not find the language line "Home"
ERROR - 2023-03-24 13:01:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 13:18:24 --> Could not find the language line "Home"
ERROR - 2023-03-24 13:18:26 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-03-24 13:25:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-24 13:25:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-24 13:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 13:44:20 --> Could not find the language line "Home"
ERROR - 2023-03-24 13:44:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 13:46:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-24 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-24 14:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-24 14:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 14:06:15 --> Could not find the language line "Home"
ERROR - 2023-03-24 14:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 14:07:01 --> Could not find the language line "Home"
ERROR - 2023-03-24 14:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 14:08:03 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-03-24 14:09:10 --> Could not find the language line "Home"
ERROR - 2023-03-24 14:14:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-24 14:14:57 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-03-24 14:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 14:24:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 14:24:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 14:24:27 --> Could not find the language line "Home"
ERROR - 2023-03-24 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-24 14:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 14:52:36 --> Could not find the language line "Home"
ERROR - 2023-03-24 14:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 14:53:08 --> Could not find the language line "Home"
ERROR - 2023-03-24 14:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 14:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 14:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 14:56:27 --> Could not find the language line "Home"
ERROR - 2023-03-24 14:56:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-24 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-24 15:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 15:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 15:32:34 --> Could not find the language line "Home"
ERROR - 2023-03-24 15:34:53 --> Could not find the language line "Home"
ERROR - 2023-03-24 15:35:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 15:41:52 --> Could not find the language line "Home"
ERROR - 2023-03-24 15:41:53 --> Could not find the language line "Home"
ERROR - 2023-03-24 15:41:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 15:42:33 --> Could not find the language line "Home"
ERROR - 2023-03-24 15:52:46 --> Could not find the language line "Home"
ERROR - 2023-03-24 15:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-24 16:01:56 --> Could not find the language line "Home"
ERROR - 2023-03-24 16:18:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-24 16:20:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-24 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-24 16:30:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-24 16:30:49 --> Could not find the language line "Home"
ERROR - 2023-03-24 16:36:57 --> Could not find the language line "Home"
ERROR - 2023-03-24 16:37:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 16:40:32 --> Could not find the language line "Home"
ERROR - 2023-03-24 16:40:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 16:40:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-24 16:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 16:40:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-24 16:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 16:41:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-24 16:41:26 --> Could not find the language line "Home"
ERROR - 2023-03-24 16:41:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 16:41:31 --> Could not find the language line "Clothing"
ERROR - 2023-03-24 16:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 16:41:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-24 16:46:30 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-03-24 16:46:37 --> Could not find the language line "Home"
ERROR - 2023-03-24 16:47:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 16:49:05 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:05:36 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:05:40 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:05:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 17:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 17:06:14 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:06:17 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:06:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 17:09:24 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:09:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 17:09:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 17:10:35 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:10:59 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:11:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 17:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 17:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 17:14:02 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:15:29 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:15:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 17:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 17:15:43 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:15:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 17:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 17:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 17:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 17:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 17:46:24 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:46:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 17:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 17:48:00 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:48:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 17:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 17:49:46 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:49:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 17:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 17:50:25 --> Could not find the language line "Home"
ERROR - 2023-03-24 17:50:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 17:58:20 --> Could not find the language line "Home"
ERROR - 2023-03-24 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 18:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-24 18:27:17 --> Could not find the language line "Home"
ERROR - 2023-03-24 18:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-24 18:35:17 --> Could not find the language line "Home"
ERROR - 2023-03-24 18:35:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 18:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 18:36:37 --> Could not find the language line "Home"
ERROR - 2023-03-24 18:36:43 --> Could not find the language line "Home"
ERROR - 2023-03-24 19:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-24 19:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 19:06:13 --> Could not find the language line "Home"
ERROR - 2023-03-24 19:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 19:07:58 --> Could not find the language line "Home"
ERROR - 2023-03-24 19:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 19:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 19:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 19:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 19:50:29 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:11:04 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:11:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 20:28:47 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:28:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 20:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 20:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 20:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 20:38:33 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:38:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 20:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 20:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 20:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 20:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 20:49:33 --> Could not find the language line "Clothing"
ERROR - 2023-03-24 20:49:45 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:49:52 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:50:08 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:50:16 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:50:22 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:51:07 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:55:00 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:55:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 20:56:10 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:56:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 20:56:33 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:56:43 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:57:26 --> Could not find the language line "Home"
ERROR - 2023-03-24 20:59:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 21:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-24 21:06:51 --> Could not find the language line "Home"
ERROR - 2023-03-24 21:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 21:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-24 21:12:23 --> Could not find the language line "Home"
ERROR - 2023-03-24 21:16:27 --> Could not find the language line "Home"
ERROR - 2023-03-24 21:16:27 --> Could not find the language line "Home"
ERROR - 2023-03-24 21:16:27 --> Could not find the language line "Home"
ERROR - 2023-03-24 21:16:27 --> Could not find the language line "Home"
ERROR - 2023-03-24 21:16:27 --> Could not find the language line "Home"
ERROR - 2023-03-24 21:25:14 --> Could not find the language line "Home"
ERROR - 2023-03-24 21:25:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 21:25:39 --> Could not find the language line "Home"
ERROR - 2023-03-24 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-24 21:45:02 --> Could not find the language line "Home"
ERROR - 2023-03-24 21:45:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 21:45:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 21:59:45 --> Could not find the language line "Home"
ERROR - 2023-03-24 22:00:20 --> Could not find the language line "Home"
ERROR - 2023-03-24 22:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-24 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-24 22:37:21 --> Could not find the language line "Home"
ERROR - 2023-03-24 22:57:33 --> Could not find the language line "Home"
ERROR - 2023-03-24 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-24 23:23:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-24 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-24 23:39:40 --> Could not find the language line "Home"
