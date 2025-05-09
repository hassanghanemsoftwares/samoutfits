<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-29 00:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-29 00:12:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 00:30:17 --> Could not find the language line "Home"
ERROR - 2023-05-29 00:43:14 --> Could not find the language line "Home"
ERROR - 2023-05-29 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-05-29 01:05:14 --> Could not find the language line "Home"
ERROR - 2023-05-29 01:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-29 01:50:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 02:10:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-29 02:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 02:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 02:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 02:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 02:25:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-29 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 02:43:54 --> Could not find the language line "Home"
ERROR - 2023-05-29 03:00:09 --> Could not find the language line "Socks"
ERROR - 2023-05-29 03:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 03:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-29 03:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 03:12:20 --> Could not find the language line "Home"
ERROR - 2023-05-29 03:21:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 03:26:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-29 03:28:18 --> Could not find the language line "Home"
ERROR - 2023-05-29 03:28:18 --> Could not find the language line "Home"
ERROR - 2023-05-29 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 03:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 03:36:23 --> Could not find the language line "Home"
ERROR - 2023-05-29 03:54:00 --> Could not find the language line "Home"
ERROR - 2023-05-29 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 04:12:37 --> 404 Page Not Found: Community/index
ERROR - 2023-05-29 04:30:16 --> Could not find the language line "Home"
ERROR - 2023-05-29 04:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 04:31:24 --> Could not find the language line "Home"
ERROR - 2023-05-29 04:58:29 --> Could not find the language line "Home"
ERROR - 2023-05-29 04:59:00 --> Could not find the language line "Home"
ERROR - 2023-05-29 05:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-29 05:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 05:12:35 --> Could not find the language line "Home"
ERROR - 2023-05-29 05:19:26 --> Could not find the language line "Home"
ERROR - 2023-05-29 05:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 05:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 05:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 05:35:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 05:38:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 05:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 05:45:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 05:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 05:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 05:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 05:56:01 --> Could not find the language line "Home"
ERROR - 2023-05-29 06:00:16 --> Could not find the language line "Home"
ERROR - 2023-05-29 06:00:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 06:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 06:05:20 --> Could not find the language line "Home"
ERROR - 2023-05-29 06:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 06:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 06:09:01 --> Could not find the language line "Home"
ERROR - 2023-05-29 06:10:40 --> Could not find the language line "Home"
ERROR - 2023-05-29 06:14:16 --> Could not find the language line "Home"
ERROR - 2023-05-29 06:14:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-29 06:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 06:15:31 --> Could not find the language line "Home"
ERROR - 2023-05-29 06:17:15 --> Could not find the language line "Home"
ERROR - 2023-05-29 06:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 06:20:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 06:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 06:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 06:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 06:34:18 --> Could not find the language line "Home"
ERROR - 2023-05-29 06:35:57 --> Could not find the language line "Home"
ERROR - 2023-05-29 06:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 06:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 06:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 06:46:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-29 06:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 07:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 07:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 07:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 07:23:03 --> Could not find the language line "Home"
ERROR - 2023-05-29 07:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 07:25:03 --> Could not find the language line "Home"
ERROR - 2023-05-29 07:30:18 --> Could not find the language line "Home"
ERROR - 2023-05-29 07:38:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 07:38:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 07:38:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 07:40:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 08:00:30 --> Could not find the language line "Home"
ERROR - 2023-05-29 08:17:19 --> Could not find the language line "Home"
ERROR - 2023-05-29 08:20:04 --> Could not find the language line "Home"
ERROR - 2023-05-29 08:29:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 08:36:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 08:39:51 --> Could not find the language line "Home"
ERROR - 2023-05-29 08:44:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 08:48:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 08:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-29 09:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:05:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 09:07:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 09:07:51 --> Could not find the language line "Home"
ERROR - 2023-05-29 09:09:38 --> Could not find the language line "Home"
ERROR - 2023-05-29 09:15:42 --> Could not find the language line "Home"
ERROR - 2023-05-29 09:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:22:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-29 09:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:29:11 --> Could not find the language line "Home"
ERROR - 2023-05-29 09:29:22 --> Could not find the language line "Bracelets"
ERROR - 2023-05-29 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 09:33:54 --> Could not find the language line "Home"
ERROR - 2023-05-29 09:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:42:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-29 09:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:46:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 09:46:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 09:46:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 09:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:50:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:51:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-29 09:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 09:52:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-29 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 10:08:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:08:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:09:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:10:45 --> Could not find the language line "Home"
ERROR - 2023-05-29 10:11:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:11:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:11:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:11:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:12:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:13:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:13:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:14:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:14:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:14:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:14:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:15:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:15:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:15:50 --> Could not find the language line "Home"
ERROR - 2023-05-29 10:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:16:48 --> Could not find the language line "Home"
ERROR - 2023-05-29 10:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:18:44 --> Could not find the language line "Home"
ERROR - 2023-05-29 10:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:25:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 10:25:18 --> Could not find the language line "Home"
ERROR - 2023-05-29 10:26:17 --> Could not find the language line "Home"
ERROR - 2023-05-29 10:26:43 --> Could not find the language line "Home"
ERROR - 2023-05-29 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-29 10:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:32:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 10:32:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 10:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:35:52 --> Could not find the language line "Home"
ERROR - 2023-05-29 10:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:41:56 --> 404 Page Not Found: Assets/fileupload
ERROR - 2023-05-29 10:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 10:55:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 10:57:25 --> Could not find the language line "Home"
ERROR - 2023-05-29 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 11:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 11:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 11:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 11:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 11:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 11:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 11:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 11:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 11:09:46 --> Could not find the language line "Home"
ERROR - 2023-05-29 11:14:34 --> Could not find the language line "Home"
ERROR - 2023-05-29 11:18:23 --> Could not find the language line "Home"
ERROR - 2023-05-29 11:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 11:23:25 --> Could not find the language line "Home"
ERROR - 2023-05-29 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:00:16 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:02:35 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:02:52 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:03:50 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:05:54 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:07:53 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:09:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 12:15:52 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:26:35 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:27:58 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-29 12:27:58 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-29 12:28:46 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:29:32 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:31:07 --> Could not find the language line "accounting"
ERROR - 2023-05-29 12:31:07 --> Could not find the language line "accounting"
ERROR - 2023-05-29 12:31:07 --> Could not find the language line "accounting"
ERROR - 2023-05-29 12:31:07 --> Could not find the language line "accounting"
ERROR - 2023-05-29 12:31:07 --> Could not find the language line "accounting"
ERROR - 2023-05-29 12:31:07 --> Could not find the language line "accounting"
ERROR - 2023-05-29 12:31:08 --> Could not find the language line "accounting"
ERROR - 2023-05-29 12:31:08 --> Could not find the language line "accounting"
ERROR - 2023-05-29 12:31:08 --> Could not find the language line "accounting"
ERROR - 2023-05-29 12:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:31:54 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-29 12:31:54 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-29 12:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:37:11 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:37:47 --> Severity: Notice --> Undefined variable: keywords /home/samfit/public_html/application/models/Item.php 294
ERROR - 2023-05-29 12:37:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0' at line 15 - Invalid query: SELECT a.*
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
		WHERE  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0
ERROR - 2023-05-29 12:38:02 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:38:14 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:38:46 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:43:06 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:43:06 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:43:08 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:43:09 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 12:44:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 12:50:39 --> Could not find the language line "Home"
ERROR - 2023-05-29 12:50:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 12:51:07 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:01:05 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:09:00 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-29 13:09:00 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-29 13:09:00 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-29 13:09:01 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-29 13:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 13:14:07 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:18:42 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 13:32:07 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:34:35 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:36:37 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:37:08 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:37:46 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:38:08 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:38:34 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:38:58 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:39:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 13:39:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 13:39:19 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:39:26 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:39:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 13:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 13:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 13:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 13:41:49 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:42:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-29 13:42:26 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:44:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-29 13:45:45 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:46:17 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:47:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:47:27 --> 404 Page Not Found: Wp-includes/ID3
ERROR - 2023-05-29 13:47:27 --> 404 Page Not Found: Feed/index
ERROR - 2023-05-29 13:47:27 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-05-29 13:47:27 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-05-29 13:47:28 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-05-29 13:47:28 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-05-29 13:47:28 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-05-29 13:47:28 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-05-29 13:47:28 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-05-29 13:47:29 --> 404 Page Not Found: 2021/wp-includes
ERROR - 2023-05-29 13:47:29 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-05-29 13:47:29 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-05-29 13:47:29 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-05-29 13:47:30 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-05-29 13:47:30 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-05-29 13:47:30 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:47:31 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 13:48:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 13:48:06 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 13:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 13:49:23 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:49:35 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 13:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 13:51:33 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 13:53:41 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-29 13:54:21 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:54:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 13:54:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 13:54:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 13:54:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 13:57:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-29 13:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 13:59:25 --> Could not find the language line "Home"
ERROR - 2023-05-29 13:59:30 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:02:04 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:04:07 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:06:53 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 14:09:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:11:27 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:11:39 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:11:49 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:14:46 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 14:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 14:25:02 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:32:42 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:32:42 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 14:35:01 --> Could not find the language line "Home"
ERROR - 2023-05-29 14:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 14:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 14:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 14:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 14:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 14:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 14:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 15:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:04:09 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:09:54 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 15:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 15:14:39 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:15:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:15:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:15:14 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 15:16:31 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 15:16:46 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:17:38 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:18:10 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:19:19 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:22:21 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:22:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 15:22:59 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:23:02 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:32:57 --> 404 Page Not Found: Casual-shoes-ahthy-yomy/b026-shoes
ERROR - 2023-05-29 15:33:46 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 15:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 15:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 15:37:43 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:42:18 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 15:46:07 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:46:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 15:46:37 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:52:52 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:53:20 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:53:24 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:53:45 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:55:07 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:58:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-29 15:58:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-29 15:58:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-29 15:58:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-29 15:58:58 --> Could not find the language line "Home"
ERROR - 2023-05-29 15:59:11 --> Could not find the language line "Home"
ERROR - 2023-05-29 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 16:04:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-29 16:05:01 --> Could not find the language line "Perfume"
ERROR - 2023-05-29 16:05:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-29 16:05:18 --> Could not find the language line "Perfume"
ERROR - 2023-05-29 16:05:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:05:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:05:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:05:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:06:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:06:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:06:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:06:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:06:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:06:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:07:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:07:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:07:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:07:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:07:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:07:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:08:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:08:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:08:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:08:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:08:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:08:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:08:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:08:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:08:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:08:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:08:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:08:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:08:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:08:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 16:09:09 --> Could not find the language line "Perfume"
ERROR - 2023-05-29 16:09:25 --> Could not find the language line "Perfume"
ERROR - 2023-05-29 16:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:24:52 --> Could not find the language line "Home"
ERROR - 2023-05-29 16:30:16 --> Could not find the language line "Home"
ERROR - 2023-05-29 16:31:31 --> Could not find the language line "Home"
ERROR - 2023-05-29 16:31:53 --> Could not find the language line "Home"
ERROR - 2023-05-29 16:31:54 --> Could not find the language line "Home"
ERROR - 2023-05-29 16:31:54 --> Could not find the language line "Home"
ERROR - 2023-05-29 16:32:27 --> Could not find the language line "Home"
ERROR - 2023-05-29 16:34:51 --> Could not find the language line "Home"
ERROR - 2023-05-29 16:34:54 --> Could not find the language line "Home"
ERROR - 2023-05-29 16:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:37:15 --> Could not find the language line "Home"
ERROR - 2023-05-29 16:37:42 --> Could not find the language line "Home"
ERROR - 2023-05-29 16:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 16:45:39 --> Could not find the language line "Home"
ERROR - 2023-05-29 16:47:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-29 16:47:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-29 16:47:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-29 16:47:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-29 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 17:03:56 --> Could not find the language line "Home"
ERROR - 2023-05-29 17:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 17:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 17:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 17:12:23 --> Could not find the language line "Home"
ERROR - 2023-05-29 17:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 17:12:49 --> Could not find the language line "Home"
ERROR - 2023-05-29 17:15:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 17:33:20 --> Could not find the language line "Home"
ERROR - 2023-05-29 17:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 17:45:34 --> Could not find the language line "Home"
ERROR - 2023-05-29 17:45:34 --> Could not find the language line "Home"
ERROR - 2023-05-29 17:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 17:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 17:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 17:46:27 --> Could not find the language line "Home"
ERROR - 2023-05-29 17:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 17:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 17:46:54 --> Could not find the language line "Home"
ERROR - 2023-05-29 17:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 17:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 17:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 17:58:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 17:58:19 --> Could not find the language line "Home"
ERROR - 2023-05-29 17:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 17:59:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 18:00:16 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:01:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-29 18:03:54 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:03:54 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:04:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 18:04:39 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:04:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 18:04:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 18:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 18:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 18:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 18:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 18:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 18:08:54 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:14:29 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:16:57 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:27:28 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:27:29 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:35:43 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:39:43 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:40:03 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:42:05 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:43:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 18:43:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 18:47:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-29 18:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-29 18:47:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-29 18:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-29 18:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 18:57:10 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:59:00 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:59:26 --> Could not find the language line "Home"
ERROR - 2023-05-29 18:59:28 --> Could not find the language line "Bracelets"
ERROR - 2023-05-29 18:59:39 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:00:40 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:18:32 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:18:32 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:19:52 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:25:16 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:25:24 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-29 19:25:24 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-29 19:25:24 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-29 19:25:25 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-29 19:25:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-29 19:25:36 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:25:36 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:26:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-29 19:26:20 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:26:52 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:27:26 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:28:58 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:30:37 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:30:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 19:31:08 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:31:49 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:31:50 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:31:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 19:33:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 19:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:34:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 19:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:34:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 19:34:46 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:34:54 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:35:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 19:35:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-29 19:35:14 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:36:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 19:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:38:52 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:39:16 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:52:32 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:52:41 --> Could not find the language line "Bracelets"
ERROR - 2023-05-29 19:53:05 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:53:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 19:53:53 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:54:46 --> Could not find the language line "Home"
ERROR - 2023-05-29 19:54:58 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:01:56 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 20:02:46 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:03:06 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 20:04:11 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:21:56 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 20:23:35 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:23:43 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:33:03 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:33:04 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:33:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-29 20:44:47 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:45:38 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:45:39 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:45:39 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:45:39 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 20:46:24 --> Could not find the language line "Home"
ERROR - 2023-05-29 20:46:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 20:57:46 --> Could not find the language line "Home"
ERROR - 2023-05-29 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-05-29 21:20:33 --> Could not find the language line "Home"
ERROR - 2023-05-29 21:20:57 --> Could not find the language line "Home"
ERROR - 2023-05-29 21:20:57 --> Could not find the language line "Home"
ERROR - 2023-05-29 21:26:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-29 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 21:37:21 --> Could not find the language line "Home"
ERROR - 2023-05-29 21:38:06 --> Could not find the language line "Home"
ERROR - 2023-05-29 21:59:56 --> Could not find the language line "Home"
ERROR - 2023-05-29 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-29 22:05:03 --> Could not find the language line "Home"
ERROR - 2023-05-29 22:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 22:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 22:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 22:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 22:10:03 --> Could not find the language line "Home"
ERROR - 2023-05-29 22:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 22:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 22:13:22 --> Could not find the language line "Home"
ERROR - 2023-05-29 22:13:32 --> Could not find the language line "Home"
ERROR - 2023-05-29 22:13:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-29 22:13:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-29 22:14:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-29 22:14:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-29 22:14:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-29 22:14:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-29 22:14:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 22:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 22:15:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 22:16:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 22:16:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 22:16:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 22:16:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 22:16:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 22:16:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 22:16:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-29 22:16:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-29 22:16:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-29 22:16:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-29 22:16:51 --> Could not find the language line "Home"
ERROR - 2023-05-29 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-29 22:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 22:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 22:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 22:33:37 --> Could not find the language line "Home"
ERROR - 2023-05-29 22:51:58 --> 404 Page Not Found: Sftp-configjson/index
ERROR - 2023-05-29 22:51:59 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-05-29 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-29 23:07:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-29 23:07:52 --> Could not find the language line "Home"
ERROR - 2023-05-29 23:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-29 23:30:11 --> Could not find the language line "Home"
