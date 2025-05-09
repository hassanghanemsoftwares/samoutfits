<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-10 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 00:07:51 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-04-10 00:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-10 00:56:37 --> Could not find the language line "Home"
ERROR - 2023-04-10 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-10 01:14:28 --> Could not find the language line "Home"
ERROR - 2023-04-10 01:15:11 --> Could not find the language line "Home"
ERROR - 2023-04-10 01:20:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-10 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-10 02:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-10 02:26:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 02:26:39 --> Could not find the language line "Home"
ERROR - 2023-04-10 02:29:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-10 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-10 02:34:55 --> Could not find the language line "Home"
ERROR - 2023-04-10 02:41:38 --> Could not find the language line "Home"
ERROR - 2023-04-10 02:55:46 --> Could not find the language line "Home"
ERROR - 2023-04-10 03:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-10 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-10 03:33:46 --> Could not find the language line "Home"
ERROR - 2023-04-10 03:45:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-10 04:07:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-10 04:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 05:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-10 05:05:32 --> Could not find the language line "Home"
ERROR - 2023-04-10 05:07:49 --> Could not find the language line "Home"
ERROR - 2023-04-10 05:15:40 --> Could not find the language line "Home"
ERROR - 2023-04-10 05:27:50 --> Could not find the language line "Home"
ERROR - 2023-04-10 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 05:47:01 --> Could not find the language line "Home"
ERROR - 2023-04-10 05:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 05:47:58 --> Could not find the language line "Home"
ERROR - 2023-04-10 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 06:06:59 --> Could not find the language line "Home"
ERROR - 2023-04-10 06:08:33 --> Could not find the language line "Home"
ERROR - 2023-04-10 06:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:09:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-10 06:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:15:44 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 06:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:27:39 --> Could not find the language line "Home"
ERROR - 2023-04-10 06:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-10 06:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:36:40 --> Could not find the language line "Home"
ERROR - 2023-04-10 06:36:46 --> Could not find the language line "Home"
ERROR - 2023-04-10 06:37:05 --> Could not find the language line "Home"
ERROR - 2023-04-10 06:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:45:05 --> Could not find the language line "Home"
ERROR - 2023-04-10 06:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:50:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 06:50:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 06:50:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 06:50:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 06:51:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-10 06:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:54:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 06:55:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 06:55:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 06:55:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 06:55:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 06:55:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 06:55:36 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 06:56:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 06:56:21 --> Could not find the language line "Home"
ERROR - 2023-04-10 06:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:56:38 --> Could not find the language line "Home"
ERROR - 2023-04-10 06:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 06:59:03 --> Could not find the language line "Home"
ERROR - 2023-04-10 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-10 07:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:12:35 --> Could not find the language line "Home"
ERROR - 2023-04-10 07:19:53 --> Could not find the language line "Home"
ERROR - 2023-04-10 07:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:24:55 --> Could not find the language line "Home"
ERROR - 2023-04-10 07:25:03 --> Could not find the language line "Home"
ERROR - 2023-04-10 07:25:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:26:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-10 07:30:29 --> Could not find the language line "Home"
ERROR - 2023-04-10 07:30:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:31:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:35:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:35:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:35:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:36:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:36:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 07:36:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:36:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:37:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:37:49 --> Could not find the language line "Home"
ERROR - 2023-04-10 07:37:57 --> Could not find the language line "Home"
ERROR - 2023-04-10 07:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:42:33 --> Could not find the language line "Home"
ERROR - 2023-04-10 07:45:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 07:46:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:46:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:47:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:48:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:48:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 07:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 07:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-10 08:04:01 --> Could not find the language line "Socks"
ERROR - 2023-04-10 08:04:01 --> Could not find the language line "Socks"
ERROR - 2023-04-10 08:04:02 --> Could not find the language line "Socks"
ERROR - 2023-04-10 08:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:12:01 --> Could not find the language line "Home"
ERROR - 2023-04-10 08:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:15:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 08:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:26:42 --> Could not find the language line "Home"
ERROR - 2023-04-10 08:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:30:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 08:30:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-10 08:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:31:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 08:31:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 08:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:41:44 --> Could not find the language line "Home"
ERROR - 2023-04-10 08:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:43:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 08:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:48:55 --> Could not find the language line "Home"
ERROR - 2023-04-10 08:50:40 --> Could not find the language line "Home"
ERROR - 2023-04-10 08:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 08:59:06 --> Could not find the language line "Home"
ERROR - 2023-04-10 08:59:09 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:05:26 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:11:09 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:11:34 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:12:06 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:15:36 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:17:24 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:22:08 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:22:13 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:27:04 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:27:40 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:31:32 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:31:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-10 09:31:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-10 09:32:09 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:36:43 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:40:57 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:40:59 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:41:35 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:41:36 --> 404 Page Not Found: Home/assets
ERROR - 2023-04-10 09:41:36 --> 404 Page Not Found: Home/assets
ERROR - 2023-04-10 09:41:36 --> 404 Page Not Found: Home/assets
ERROR - 2023-04-10 09:41:36 --> 404 Page Not Found: Home/assets
ERROR - 2023-04-10 09:41:41 --> Could not find the language line "Home"
ERROR - 2023-04-10 09:41:42 --> 404 Page Not Found: Home/assets
ERROR - 2023-04-10 09:41:42 --> 404 Page Not Found: Home/assets
ERROR - 2023-04-10 09:41:42 --> 404 Page Not Found: Home/assets
ERROR - 2023-04-10 09:41:42 --> 404 Page Not Found: Home/assets
ERROR - 2023-04-10 09:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:55:18 --> Could not find the language line "Other"
ERROR - 2023-04-10 09:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 09:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-10 10:02:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-10 10:02:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-10 10:03:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-10 10:03:54 --> Could not find the language line "Home"
ERROR - 2023-04-10 10:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:04:22 --> Could not find the language line "Home"
ERROR - 2023-04-10 10:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:24:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 10:24:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 10:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:28:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-10 10:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-10 10:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:42:42 --> Could not find the language line "Home"
ERROR - 2023-04-10 10:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:56:24 --> Could not find the language line "Home"
ERROR - 2023-04-10 10:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 10:57:25 --> Could not find the language line "Home"
ERROR - 2023-04-10 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-10 11:20:52 --> Could not find the language line "Home"
ERROR - 2023-04-10 11:21:35 --> Could not find the language line "Home"
ERROR - 2023-04-10 11:21:53 --> Could not find the language line "Home"
ERROR - 2023-04-10 11:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 11:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 11:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-10 11:38:46 --> Could not find the language line "Home"
ERROR - 2023-04-10 11:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 11:47:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 11:49:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 11:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 11:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 11:51:05 --> Could not find the language line "Home"
ERROR - 2023-04-10 11:54:00 --> Could not find the language line "Home"
ERROR - 2023-04-10 11:54:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 11:55:02 --> Could not find the language line "Home"
ERROR - 2023-04-10 11:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 11:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 12:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:21:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-10 12:21:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-10 12:22:10 --> Could not find the language line "Home"
ERROR - 2023-04-10 12:23:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 12:23:43 --> Could not find the language line "Home"
ERROR - 2023-04-10 12:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:24:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 12:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:24:35 --> Could not find the language line "Home"
ERROR - 2023-04-10 12:24:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-10 12:26:12 --> Could not find the language line "Home"
ERROR - 2023-04-10 12:28:29 --> Could not find the language line "Home"
ERROR - 2023-04-10 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-10 12:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:36:51 --> Could not find the language line "Home"
ERROR - 2023-04-10 12:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:45:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-10 12:45:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
AND `transaction_item_sizes`.`size` IN('Allhttps:')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-10 12:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:48:39 --> Could not find the language line "Home"
ERROR - 2023-04-10 12:48:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 12:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:49:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 12:51:04 --> Could not find the language line "Home"
ERROR - 2023-04-10 12:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:52:19 --> Could not find the language line "Home"
ERROR - 2023-04-10 12:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 12:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:01:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-10 13:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:01:30 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:01:41 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:01:45 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:02:38 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:02:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 13:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:03:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 13:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:03:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 13:03:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:03:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 13:03:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 13:03:49 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:04:24 --> Could not find the language line "Bracelets"
ERROR - 2023-04-10 13:04:30 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:05:43 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:05:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 13:06:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 13:06:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 13:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:10:21 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:10:40 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:11:03 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:11:11 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:11:55 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:42:43 --> Could not find the language line "Home"
ERROR - 2023-04-10 13:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 13:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:05:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:05:15 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:15:39 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:20:39 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:21:15 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:21:45 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:22:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-10 14:23:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-10 14:23:18 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-10 14:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:25:23 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:25:42 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:27:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:30:47 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:31:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 14:31:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 14:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:32:33 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 14:32:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 14:32:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 14:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:33:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 14:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:34:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 14:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:34:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 14:34:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 14:35:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 14:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:36:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-10 14:36:40 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:40:39 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:41:41 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:43:56 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:46:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-10 14:49:32 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:50:32 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:51:03 --> Could not find the language line "Home"
ERROR - 2023-04-10 14:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 14:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-10 15:12:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 15:12:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 15:24:31 --> Could not find the language line "Home"
ERROR - 2023-04-10 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-10 15:42:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 15:43:07 --> Could not find the language line "Home"
ERROR - 2023-04-10 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-10 16:08:22 --> Could not find the language line "Home"
ERROR - 2023-04-10 16:13:45 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-10 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 16:33:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 16:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 16:34:06 --> Could not find the language line "Home"
ERROR - 2023-04-10 16:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 16:39:51 --> Could not find the language line "Home"
ERROR - 2023-04-10 16:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 16:40:11 --> Could not find the language line "Home"
ERROR - 2023-04-10 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-10 17:01:12 --> 404 Page Not Found: Admin/assets
ERROR - 2023-04-10 17:01:44 --> Could not find the language line "Home"
ERROR - 2023-04-10 17:05:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-10 17:05:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-10 17:25:50 --> Could not find the language line "Home"
ERROR - 2023-04-10 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-10 17:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 17:39:13 --> Could not find the language line "Home"
ERROR - 2023-04-10 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-10 18:05:40 --> Could not find the language line "Home"
ERROR - 2023-04-10 18:13:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 18:14:56 --> Could not find the language line "Home"
ERROR - 2023-04-10 18:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 18:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 18:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 18:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 18:20:15 --> Could not find the language line "Home"
ERROR - 2023-04-10 18:21:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-10 18:27:45 --> Could not find the language line "Home"
ERROR - 2023-04-10 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-10 18:37:16 --> Could not find the language line "Home"
ERROR - 2023-04-10 18:45:44 --> Could not find the language line "Home"
ERROR - 2023-04-10 18:54:44 --> Could not find the language line "Home"
ERROR - 2023-04-10 18:56:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 19:04:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 19:05:55 --> Could not find the language line "Home"
ERROR - 2023-04-10 19:07:21 --> Could not find the language line "Home"
ERROR - 2023-04-10 19:07:37 --> Could not find the language line "Home"
ERROR - 2023-04-10 19:09:28 --> Could not find the language line "Home"
ERROR - 2023-04-10 19:11:24 --> Could not find the language line "Home"
ERROR - 2023-04-10 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-10 19:32:29 --> Could not find the language line "Home"
ERROR - 2023-04-10 19:32:53 --> Could not find the language line "Home"
ERROR - 2023-04-10 19:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 19:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 19:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 20:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-10 20:14:03 --> Could not find the language line "Home"
ERROR - 2023-04-10 20:15:01 --> Could not find the language line "Other"
ERROR - 2023-04-10 20:19:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-10 20:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 20:23:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 20:25:24 --> Could not find the language line "Home"
ERROR - 2023-04-10 20:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 20:31:19 --> Could not find the language line "Home"
ERROR - 2023-04-10 20:31:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-10 20:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 20:32:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-10 20:32:48 --> Could not find the language line "Home"
ERROR - 2023-04-10 20:32:53 --> Could not find the language line "Perfume"
ERROR - 2023-04-10 20:32:59 --> Could not find the language line "Home"
ERROR - 2023-04-10 20:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 20:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 20:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-04-10 21:03:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-10 21:05:15 --> Could not find the language line "Home"
ERROR - 2023-04-10 21:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 21:05:40 --> Could not find the language line "Home"
ERROR - 2023-04-10 21:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 21:07:59 --> Could not find the language line "Home"
ERROR - 2023-04-10 21:13:10 --> Could not find the language line "Home"
ERROR - 2023-04-10 21:14:22 --> Could not find the language line "Home"
ERROR - 2023-04-10 21:16:01 --> Could not find the language line "Home"
ERROR - 2023-04-10 21:21:02 --> Could not find the language line "Home"
ERROR - 2023-04-10 21:21:19 --> Could not find the language line "Home"
ERROR - 2023-04-10 21:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 21:22:08 --> Could not find the language line "Home"
ERROR - 2023-04-10 21:22:13 --> Could not find the language line "Home"
ERROR - 2023-04-10 21:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 21:24:28 --> Could not find the language line "Home"
ERROR - 2023-04-10 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-10 21:50:44 --> Could not find the language line "Home"
ERROR - 2023-04-10 22:00:23 --> Could not find the language line "Home"
ERROR - 2023-04-10 22:03:36 --> Could not find the language line "Home"
ERROR - 2023-04-10 22:04:05 --> Could not find the language line "Home"
ERROR - 2023-04-10 22:04:17 --> Could not find the language line "Home"
ERROR - 2023-04-10 22:12:14 --> Could not find the language line "Home"
ERROR - 2023-04-10 22:14:16 --> Could not find the language line "Home"
ERROR - 2023-04-10 22:17:20 --> Could not find the language line "Home"
ERROR - 2023-04-10 22:23:10 --> Could not find the language line "Home"
ERROR - 2023-04-10 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-10 22:38:36 --> Could not find the language line "Home"
ERROR - 2023-04-10 22:39:40 --> Could not find the language line "Home"
ERROR - 2023-04-10 22:51:36 --> Could not find the language line "Home"
ERROR - 2023-04-10 22:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-10 22:54:20 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:16:03 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:16:07 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:17:32 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:18:40 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:19:06 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:25:49 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:26:18 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-04-10 23:26:18 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-04-10 23:26:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 23:26:31 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-04-10 23:26:31 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-04-10 23:26:31 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2023-04-10 23:26:31 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-04-10 23:26:31 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2023-04-10 23:26:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 23:26:31 --> 404 Page Not Found: Well-known/change-password
ERROR - 2023-04-10 23:28:47 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:29:59 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:30:08 --> Could not find the language line "Perfume"
ERROR - 2023-04-10 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:30:22 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:30:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 23:30:29 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:35:58 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:38:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-10 23:53:20 --> Could not find the language line "Home"
ERROR - 2023-04-10 23:54:01 --> 404 Page Not Found: Assets/css
