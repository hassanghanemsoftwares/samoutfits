<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-18 00:04:18 --> Could not find the language line "Home"
ERROR - 2025-02-18 00:14:50 --> Could not find the language line "Home"
ERROR - 2025-02-18 00:18:45 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 00:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 00:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 00:23:41 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 00:24:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-18 00:28:47 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-18 00:33:48 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-18 00:45:05 --> Could not find the language line "Home"
ERROR - 2025-02-18 00:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 01:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 01:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 01:14:53 --> Could not find the language line "Home"
ERROR - 2025-02-18 01:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 01:44:51 --> Could not find the language line "Home"
ERROR - 2025-02-18 02:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 02:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 02:14:50 --> Could not find the language line "Home"
ERROR - 2025-02-18 02:22:25 --> Could not find the language line "Home"
ERROR - 2025-02-18 02:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 02:31:02 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-18 02:32:30 --> Could not find the language line "Home"
ERROR - 2025-02-18 02:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 02:36:11 --> Could not find the language line "Home"
ERROR - 2025-02-18 02:44:51 --> Could not find the language line "Home"
ERROR - 2025-02-18 02:56:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-18 03:09:32 --> Could not find the language line "Home"
ERROR - 2025-02-18 03:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 03:12:24 --> Could not find the language line "Home"
ERROR - 2025-02-18 03:14:54 --> Could not find the language line "Home"
ERROR - 2025-02-18 03:21:08 --> Could not find the language line "Home"
ERROR - 2025-02-18 03:22:04 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-18 03:29:47 --> Could not find the language line "Home"
ERROR - 2025-02-18 03:30:15 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 03:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 03:35:36 --> Could not find the language line "Home"
ERROR - 2025-02-18 03:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 03:40:30 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 03:44:53 --> Could not find the language line "Home"
ERROR - 2025-02-18 03:44:56 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 04:08:31 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-18 04:09:06 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-18 04:09:52 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-18 04:10:16 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-18 04:12:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-18 04:12:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-18 04:15:00 --> Could not find the language line "Home"
ERROR - 2025-02-18 04:15:32 --> Could not find the language line "Home"
ERROR - 2025-02-18 04:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 04:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 04:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 04:38:48 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-18 04:44:52 --> Could not find the language line "Home"
ERROR - 2025-02-18 05:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 05:07:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-18 05:14:53 --> Could not find the language line "Home"
ERROR - 2025-02-18 05:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 05:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 05:44:54 --> Could not find the language line "Home"
ERROR - 2025-02-18 05:48:53 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-18 05:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 06:05:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-18 06:14:54 --> Could not find the language line "Home"
ERROR - 2025-02-18 06:16:38 --> Could not find the language line "Home"
ERROR - 2025-02-18 06:21:32 --> Could not find the language line "Socks"
ERROR - 2025-02-18 06:34:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-18 06:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 06:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 06:44:53 --> Could not find the language line "Home"
ERROR - 2025-02-18 07:01:24 --> Could not find the language line "Home"
ERROR - 2025-02-18 07:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:08:09 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 07:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:08:45 --> Could not find the language line "Home"
ERROR - 2025-02-18 07:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:14:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-18 07:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:14:53 --> Could not find the language line "Home"
ERROR - 2025-02-18 07:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:44:54 --> Could not find the language line "Home"
ERROR - 2025-02-18 07:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 07:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 08:00:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-18 08:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 08:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 08:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 08:14:53 --> Could not find the language line "Home"
ERROR - 2025-02-18 08:15:13 --> Could not find the language line "Home"
ERROR - 2025-02-18 08:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 08:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 08:25:48 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-18 08:25:48 --> Could not find the language line "Home"
ERROR - 2025-02-18 08:25:48 --> Could not find the language line "Home"
ERROR - 2025-02-18 08:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 08:44:53 --> Could not find the language line "Home"
ERROR - 2025-02-18 08:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 08:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 08:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 08:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 08:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 08:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 08:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 08:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:00:04 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 09:00:11 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-18 09:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:05:58 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-02-18 09:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:12:16 --> Could not find the language line "Home"
ERROR - 2025-02-18 09:14:53 --> Could not find the language line "Home"
ERROR - 2025-02-18 09:14:54 --> Could not find the language line "Home"
ERROR - 2025-02-18 09:21:39 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 09:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:24:39 --> 404 Page Not Found: Sitemap/index
ERROR - 2025-02-18 09:28:31 --> 404 Page Not Found: Sitemap/index
ERROR - 2025-02-18 09:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:44:55 --> Could not find the language line "Home"
ERROR - 2025-02-18 09:47:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-18 09:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 09:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:14:55 --> Could not find the language line "Home"
ERROR - 2025-02-18 10:19:33 --> 404 Page Not Found: Sitemap/index
ERROR - 2025-02-18 10:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:24:51 --> Could not find the language line "Home"
ERROR - 2025-02-18 10:28:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-18 10:29:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-18 10:33:40 --> Could not find the language line "Home"
ERROR - 2025-02-18 10:40:38 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 10:40:48 --> Could not find the language line "Home"
ERROR - 2025-02-18 10:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:42:29 --> Could not find the language line "Home"
ERROR - 2025-02-18 10:44:29 --> Could not find the language line "Home"
ERROR - 2025-02-18 10:44:55 --> Could not find the language line "Home"
ERROR - 2025-02-18 10:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:49:19 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-02-18 10:52:51 --> Could not find the language line "Home"
ERROR - 2025-02-18 10:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:53:49 --> Could not find the language line "Home"
ERROR - 2025-02-18 10:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:55:13 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-02-18 10:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 10:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 11:05:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-18 11:05:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-18 11:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 11:14:55 --> Could not find the language line "Home"
ERROR - 2025-02-18 11:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 11:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 11:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 11:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 11:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 11:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 11:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 11:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 11:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 11:39:36 --> Could not find the language line "Home"
ERROR - 2025-02-18 11:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 11:41:33 --> Could not find the language line "Home"
ERROR - 2025-02-18 11:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 11:42:42 --> Could not find the language line "Home"
ERROR - 2025-02-18 11:43:36 --> Could not find the language line "Home"
ERROR - 2025-02-18 11:44:55 --> Could not find the language line "Home"
ERROR - 2025-02-18 11:49:05 --> Could not find the language line "Home"
ERROR - 2025-02-18 11:49:31 --> Could not find the language line "Home"
ERROR - 2025-02-18 11:53:02 --> Could not find the language line "Home"
ERROR - 2025-02-18 11:56:10 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-18 12:01:26 --> Could not find the language line "Home"
ERROR - 2025-02-18 12:04:32 --> Could not find the language line "Home"
ERROR - 2025-02-18 12:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 12:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 12:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 12:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 12:14:55 --> Could not find the language line "Home"
ERROR - 2025-02-18 12:24:45 --> Could not find the language line "Home"
ERROR - 2025-02-18 12:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 12:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 12:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 12:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 12:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 12:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 12:44:46 --> Could not find the language line "Home"
ERROR - 2025-02-18 12:44:56 --> Could not find the language line "Home"
ERROR - 2025-02-18 12:46:59 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-18 12:46:59 --> Could not find the language line "Home"
ERROR - 2025-02-18 12:46:59 --> Could not find the language line "Home"
ERROR - 2025-02-18 13:14:57 --> Could not find the language line "Home"
ERROR - 2025-02-18 13:17:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-18 13:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 13:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 13:44:57 --> Could not find the language line "Home"
ERROR - 2025-02-18 13:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 13:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 13:47:06 --> Could not find the language line "Home"
ERROR - 2025-02-18 14:05:12 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-18 14:06:35 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 14:08:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-18 14:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 14:14:57 --> Could not find the language line "Home"
ERROR - 2025-02-18 14:16:25 --> Could not find the language line "Home"
ERROR - 2025-02-18 14:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 14:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 14:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 14:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 14:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 14:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 14:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 14:44:57 --> Could not find the language line "Home"
ERROR - 2025-02-18 14:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 14:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:00:25 --> Could not find the language line "Home"
ERROR - 2025-02-18 15:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:00:37 --> Could not find the language line "Home"
ERROR - 2025-02-18 15:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:03:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-18 15:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:14:57 --> Could not find the language line "Home"
ERROR - 2025-02-18 15:18:36 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-18 15:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:18:37 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-18 15:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:22:37 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-18 15:22:37 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-18 15:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:23:11 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-18 15:23:11 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-18 15:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:23:45 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-18 15:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:23:46 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-18 15:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:26:03 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 15:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:26:04 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-18 15:26:52 --> Could not find the language line "Home"
ERROR - 2025-02-18 15:27:32 --> Could not find the language line "Home"
ERROR - 2025-02-18 15:29:31 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-18 15:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 15:30:06 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-18 15:30:06 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-18 15:44:58 --> Could not find the language line "Home"
ERROR - 2025-02-18 15:50:40 --> Could not find the language line "Home"
ERROR - 2025-02-18 15:55:10 --> Could not find the language line "Home"
ERROR - 2025-02-18 16:07:50 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-18 16:07:50 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-18 16:07:50 --> Could not find the language line "Home"
ERROR - 2025-02-18 16:14:58 --> Could not find the language line "Home"
ERROR - 2025-02-18 16:15:05 --> Could not find the language line "Home"
ERROR - 2025-02-18 16:39:37 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-18 16:39:38 --> Could not find the language line "Home"
ERROR - 2025-02-18 16:39:38 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-18 16:39:39 --> 404 Page Not Found: Bc/index
ERROR - 2025-02-18 16:39:39 --> 404 Page Not Found: Bk/index
ERROR - 2025-02-18 16:39:40 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-18 16:39:41 --> 404 Page Not Found: New/index
ERROR - 2025-02-18 16:39:42 --> 404 Page Not Found: Main/index
ERROR - 2025-02-18 16:39:42 --> Could not find the language line "Home"
ERROR - 2025-02-18 16:44:58 --> Could not find the language line "Home"
ERROR - 2025-02-18 16:54:25 --> Could not find the language line "Home"
ERROR - 2025-02-18 17:03:52 --> Could not find the language line "Home"
ERROR - 2025-02-18 17:14:59 --> Could not find the language line "Home"
ERROR - 2025-02-18 17:18:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-18 17:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 17:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 17:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 17:29:49 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-18 17:44:59 --> Could not find the language line "Home"
ERROR - 2025-02-18 17:45:05 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-18 17:45:10 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-18 17:45:16 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-18 17:45:22 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-18 17:45:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-18 17:45:31 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-18 17:45:37 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-18 17:45:42 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 17:45:54 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-02-18 17:46:00 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-02-18 17:46:06 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-02-18 17:46:13 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-02-18 17:46:19 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-02-18 17:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 18:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 18:14:59 --> Could not find the language line "Home"
ERROR - 2025-02-18 18:24:40 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-18 18:24:43 --> Could not find the language line "Home"
ERROR - 2025-02-18 18:25:01 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 18:25:07 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 18:25:07 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 18:25:23 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 18:25:28 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 18:25:28 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 18:25:28 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 18:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 18:25:48 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 18:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 18:25:54 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 18:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 18:26:25 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 18:26:30 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 18:26:34 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 18:26:35 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 18:26:35 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 18:33:27 --> Could not find the language line "Home"
ERROR - 2025-02-18 18:37:24 --> Could not find the language line "Home"
ERROR - 2025-02-18 18:38:30 --> Could not find the language line "Home"
ERROR - 2025-02-18 18:42:45 --> Could not find the language line "Home"
ERROR - 2025-02-18 18:44:59 --> Could not find the language line "Home"
ERROR - 2025-02-18 18:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 19:15:00 --> Could not find the language line "Home"
ERROR - 2025-02-18 19:15:01 --> Could not find the language line "Home"
ERROR - 2025-02-18 19:17:36 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 19:33:23 --> Could not find the language line "Home"
ERROR - 2025-02-18 19:37:21 --> Could not find the language line "Home"
ERROR - 2025-02-18 19:38:37 --> Could not find the language line "Home"
ERROR - 2025-02-18 19:38:41 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 19:43:35 --> Could not find the language line "Home"
ERROR - 2025-02-18 19:45:00 --> Could not find the language line "Home"
ERROR - 2025-02-18 19:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 20:11:34 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 20:15:00 --> Could not find the language line "Home"
ERROR - 2025-02-18 20:19:43 --> Could not find the language line "Home"
ERROR - 2025-02-18 20:30:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-18 20:30:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-18 20:45:14 --> Could not find the language line "Home"
ERROR - 2025-02-18 20:48:58 --> 404 Page Not Found: Sitemap/index
ERROR - 2025-02-18 20:58:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-18 20:59:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-18 21:00:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-18 21:07:01 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-02-18 21:15:02 --> Could not find the language line "Home"
ERROR - 2025-02-18 21:15:48 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-18 21:45:01 --> Could not find the language line "Home"
ERROR - 2025-02-18 22:08:49 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-18 22:15:01 --> Could not find the language line "Home"
ERROR - 2025-02-18 22:20:32 --> Could not find the language line "Socks"
ERROR - 2025-02-18 22:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-18 22:21:12 --> Could not find the language line "Home"
ERROR - 2025-02-18 22:22:58 --> Could not find the language line "Home"
ERROR - 2025-02-18 22:25:07 --> Could not find the language line "Clothing"
ERROR - 2025-02-18 22:45:07 --> Could not find the language line "Home"
ERROR - 2025-02-18 23:05:18 --> Could not find the language line "Home"
ERROR - 2025-02-18 23:05:29 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-18 23:09:47 --> Could not find the language line "Home"
ERROR - 2025-02-18 23:09:47 --> Could not find the language line "Home"
ERROR - 2025-02-18 23:09:47 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-18 23:15:10 --> Could not find the language line "Home"
ERROR - 2025-02-18 23:20:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-18 23:20:56 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-18 23:39:03 --> Could not find the language line "Home"
ERROR - 2025-02-18 23:45:04 --> Could not find the language line "Home"
