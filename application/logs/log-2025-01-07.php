<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-07 00:17:44 --> Could not find the language line "Home"
ERROR - 2025-01-07 00:17:51 --> Could not find the language line "Home"
ERROR - 2025-01-07 00:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 00:47:46 --> Could not find the language line "Home"
ERROR - 2025-01-07 00:53:39 --> Could not find the language line "Home"
ERROR - 2025-01-07 00:53:54 --> Could not find the language line "Home"
ERROR - 2025-01-07 01:09:45 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-01-07 01:17:52 --> Could not find the language line "Home"
ERROR - 2025-01-07 01:47:48 --> Could not find the language line "Home"
ERROR - 2025-01-07 02:12:10 --> Could not find the language line "Home"
ERROR - 2025-01-07 02:17:45 --> Could not find the language line "Home"
ERROR - 2025-01-07 02:25:20 --> Could not find the language line "Clothing"
ERROR - 2025-01-07 02:28:53 --> Could not find the language line "Home"
ERROR - 2025-01-07 02:32:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-07 02:47:46 --> Could not find the language line "Home"
ERROR - 2025-01-07 03:17:48 --> Could not find the language line "Home"
ERROR - 2025-01-07 03:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 03:47:45 --> Could not find the language line "Home"
ERROR - 2025-01-07 03:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 04:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 04:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 04:11:20 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-07 04:17:13 --> Could not find the language line "Home"
ERROR - 2025-01-07 04:17:15 --> Could not find the language line "Home"
ERROR - 2025-01-07 04:17:49 --> Could not find the language line "Home"
ERROR - 2025-01-07 04:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 04:28:55 --> Could not find the language line "Clothing"
ERROR - 2025-01-07 04:33:52 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-07 04:47:47 --> Could not find the language line "Home"
ERROR - 2025-01-07 05:09:08 --> Could not find the language line "Home"
ERROR - 2025-01-07 05:17:46 --> Could not find the language line "Home"
ERROR - 2025-01-07 05:18:14 --> Could not find the language line "Home"
ERROR - 2025-01-07 05:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 05:31:48 --> Could not find the language line "0"
ERROR - 2025-01-07 05:47:46 --> Could not find the language line "Home"
ERROR - 2025-01-07 05:48:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-07 05:49:31 --> Could not find the language line "Home"
ERROR - 2025-01-07 06:17:47 --> Could not find the language line "Home"
ERROR - 2025-01-07 06:20:08 --> Could not find the language line "Home"
ERROR - 2025-01-07 06:31:44 --> Could not find the language line "Home"
ERROR - 2025-01-07 06:32:57 --> Could not find the language line "Home"
ERROR - 2025-01-07 06:35:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-07 06:40:25 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-07 06:47:47 --> Could not find the language line "Home"
ERROR - 2025-01-07 06:48:54 --> Could not find the language line "Home"
ERROR - 2025-01-07 07:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:03:25 --> Could not find the language line "Home"
ERROR - 2025-01-07 07:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:17:47 --> Could not find the language line "Home"
ERROR - 2025-01-07 07:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:38:22 --> Could not find the language line "Home"
ERROR - 2025-01-07 07:44:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-07 07:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 07:47:49 --> Could not find the language line "Home"
ERROR - 2025-01-07 08:04:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-07 08:06:00 --> Could not find the language line "Home"
ERROR - 2025-01-07 08:06:23 --> Could not find the language line "Clothing"
ERROR - 2025-01-07 08:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:10:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:15:41 --> Could not find the language line "Home"
ERROR - 2025-01-07 08:17:48 --> Could not find the language line "Home"
ERROR - 2025-01-07 08:22:26 --> Could not find the language line "Home"
ERROR - 2025-01-07 08:22:26 --> Could not find the language line "Home"
ERROR - 2025-01-07 08:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:35:56 --> Could not find the language line "Perfume"
ERROR - 2025-01-07 08:41:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 08:41:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 08:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 08:41:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 08:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:47:48 --> Could not find the language line "Home"
ERROR - 2025-01-07 08:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:53:51 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-07 08:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 08:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:05:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-07 09:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:13:08 --> Could not find the language line "Socks"
ERROR - 2025-01-07 09:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 09:17:49 --> Could not find the language line "Home"
ERROR - 2025-01-07 09:37:03 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-07 09:43:12 --> Could not find the language line "Home"
ERROR - 2025-01-07 09:47:48 --> Could not find the language line "Home"
ERROR - 2025-01-07 09:59:45 --> Could not find the language line "Home"
ERROR - 2025-01-07 09:59:45 --> Could not find the language line "Home"
ERROR - 2025-01-07 09:59:45 --> Could not find the language line "Home"
ERROR - 2025-01-07 10:06:27 --> Could not find the language line "Home"
ERROR - 2025-01-07 10:17:48 --> Could not find the language line "Home"
ERROR - 2025-01-07 10:20:43 --> Could not find the language line "Home"
ERROR - 2025-01-07 10:20:44 --> Could not find the language line "Home"
ERROR - 2025-01-07 10:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 10:33:58 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-07 10:47:48 --> Could not find the language line "Home"
ERROR - 2025-01-07 10:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 10:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 10:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 11:17:49 --> Could not find the language line "Home"
ERROR - 2025-01-07 11:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 11:34:00 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-07 11:35:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-07 11:37:40 --> Could not find the language line "Home"
ERROR - 2025-01-07 11:40:08 --> Could not find the language line "Home"
ERROR - 2025-01-07 11:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 11:42:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-07 11:42:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-07 11:42:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-07 11:42:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-07 11:42:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-07 11:42:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-07 11:42:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-07 11:42:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-07 11:42:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-07 11:42:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-07 11:42:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-07 11:42:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-07 11:47:51 --> Could not find the language line "Home"
ERROR - 2025-01-07 12:03:09 --> Could not find the language line "Home"
ERROR - 2025-01-07 12:08:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-07 12:17:49 --> Could not find the language line "Home"
ERROR - 2025-01-07 12:26:11 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-07 12:27:10 --> Could not find the language line "Home"
ERROR - 2025-01-07 12:27:12 --> Could not find the language line "Home"
ERROR - 2025-01-07 12:27:14 --> Could not find the language line "Home"
ERROR - 2025-01-07 12:30:11 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-07 12:31:03 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-07 12:31:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-07 12:34:24 --> Could not find the language line "Home"
ERROR - 2025-01-07 12:37:10 --> Could not find the language line "Home"
ERROR - 2025-01-07 12:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 12:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 12:47:50 --> Could not find the language line "Home"
ERROR - 2025-01-07 12:49:37 --> Could not find the language line "Home"
ERROR - 2025-01-07 13:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 13:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 13:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 13:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 13:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 13:17:51 --> Could not find the language line "Home"
ERROR - 2025-01-07 13:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 13:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 13:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 13:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 13:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 13:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 13:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 13:31:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-07 13:32:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-07 13:32:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-07 13:47:50 --> Could not find the language line "Home"
ERROR - 2025-01-07 14:00:56 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-07 14:04:58 --> Could not find the language line "Home"
ERROR - 2025-01-07 14:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 14:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 14:17:51 --> Could not find the language line "Home"
ERROR - 2025-01-07 14:47:52 --> Could not find the language line "Home"
ERROR - 2025-01-07 14:52:33 --> Could not find the language line "Home"
ERROR - 2025-01-07 14:55:11 --> Could not find the language line "Home"
ERROR - 2025-01-07 14:59:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-07 15:05:31 --> Could not find the language line "Home"
ERROR - 2025-01-07 15:08:29 --> Could not find the language line "Home"
ERROR - 2025-01-07 15:14:30 --> Could not find the language line "Home"
ERROR - 2025-01-07 15:17:51 --> Could not find the language line "Home"
ERROR - 2025-01-07 15:19:48 --> Could not find the language line "Home"
ERROR - 2025-01-07 15:20:44 --> Could not find the language line "Home"
ERROR - 2025-01-07 15:20:48 --> Could not find the language line "Home"
ERROR - 2025-01-07 15:27:06 --> Could not find the language line "Home"
ERROR - 2025-01-07 15:27:47 --> Could not find the language line "Home"
ERROR - 2025-01-07 15:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 15:34:05 --> Could not find the language line "Crocs"
ERROR - 2025-01-07 15:47:52 --> Could not find the language line "Home"
ERROR - 2025-01-07 15:53:05 --> Could not find the language line "Home"
ERROR - 2025-01-07 16:04:06 --> Could not find the language line "Home"
ERROR - 2025-01-07 16:08:04 --> Could not find the language line "Home"
ERROR - 2025-01-07 16:08:14 --> Could not find the language line "Home"
ERROR - 2025-01-07 16:08:35 --> 404 Page Not Found: Assets/mail
ERROR - 2025-01-07 16:08:56 --> Could not find the language line "Home"
ERROR - 2025-01-07 16:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 16:10:08 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-07 16:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 16:15:43 --> Could not find the language line "Home"
ERROR - 2025-01-07 16:17:53 --> Could not find the language line "Home"
ERROR - 2025-01-07 16:47:52 --> Could not find the language line "Home"
ERROR - 2025-01-07 16:50:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-07 16:52:10 --> Could not find the language line "Home"
ERROR - 2025-01-07 16:59:31 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-01-07 16:59:31 --> Could not find the language line "Home"
ERROR - 2025-01-07 17:14:28 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-07 17:14:28 --> Could not find the language line "Home"
ERROR - 2025-01-07 17:14:28 --> Could not find the language line "Home"
ERROR - 2025-01-07 17:17:54 --> Could not find the language line "Home"
ERROR - 2025-01-07 17:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 17:27:52 --> Could not find the language line "Home"
ERROR - 2025-01-07 17:28:12 --> 404 Page Not Found: Assets/mail
ERROR - 2025-01-07 17:42:48 --> Could not find the language line "Home"
ERROR - 2025-01-07 17:43:46 --> Could not find the language line "Home"
ERROR - 2025-01-07 17:43:47 --> Could not find the language line "Home"
ERROR - 2025-01-07 17:43:48 --> Could not find the language line "Home"
ERROR - 2025-01-07 17:43:50 --> Could not find the language line "Home"
ERROR - 2025-01-07 17:47:52 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:00:55 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:01:03 --> Could not find the language line "Clothing"
ERROR - 2025-01-07 18:01:16 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:01:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:01:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:01:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:01:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:02:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:02:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:02:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:02:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:02:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:02:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:03:06 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 18:03:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:03:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:03:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:03:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:03:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:03:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:03:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:03:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:03:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:03:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 18:03:23 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:03:49 --> Could not find the language line "Socks"
ERROR - 2025-01-07 18:03:53 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:04:11 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:04:14 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-07 18:04:57 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:05:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-07 18:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 18:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 18:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 18:09:09 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:09:27 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 18:10:30 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 18:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 18:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 18:12:17 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 18:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 18:17:53 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:34:44 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 18:41:39 --> Could not find the language line "Clothing"
ERROR - 2025-01-07 18:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 18:47:53 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:48:29 --> Could not find the language line "Home"
ERROR - 2025-01-07 18:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 18:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 18:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:09:13 --> Could not find the language line "Clothing"
ERROR - 2025-01-07 19:14:52 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-07 19:17:54 --> Could not find the language line "Home"
ERROR - 2025-01-07 19:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:30:39 --> Could not find the language line "accounts"
ERROR - 2025-01-07 19:35:27 --> Could not find the language line "Home"
ERROR - 2025-01-07 19:36:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-07 19:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:37:24 --> Could not find the language line "Home"
ERROR - 2025-01-07 19:37:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:37:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:37:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:37:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:38:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-07 19:39:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-07 19:39:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 100
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-07 19:39:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-07 19:39:11 --> Could not find the language line "Home"
ERROR - 2025-01-07 19:39:17 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-07 19:39:31 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-07 19:39:46 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-07 19:39:55 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-07 19:40:01 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-07 19:40:02 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-07 19:40:03 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-07 19:40:05 --> Could not find the language line "Home"
ERROR - 2025-01-07 19:42:44 --> Could not find the language line "Home"
ERROR - 2025-01-07 19:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:44:40 --> Could not find the language line "Home"
ERROR - 2025-01-07 19:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:46:17 --> Could not find the language line "Home"
ERROR - 2025-01-07 19:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 19:47:55 --> Could not find the language line "Home"
ERROR - 2025-01-07 19:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 20:11:51 --> Could not find the language line "Home"
ERROR - 2025-01-07 20:17:54 --> Could not find the language line "Home"
ERROR - 2025-01-07 20:20:37 --> Could not find the language line "Home"
ERROR - 2025-01-07 20:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 20:47:55 --> Could not find the language line "Home"
ERROR - 2025-01-07 21:03:14 --> Could not find the language line "Home"
ERROR - 2025-01-07 21:17:55 --> Could not find the language line "Home"
ERROR - 2025-01-07 21:25:34 --> Could not find the language line "Home"
ERROR - 2025-01-07 21:25:34 --> Could not find the language line "Home"
ERROR - 2025-01-07 21:25:35 --> Could not find the language line "Home"
ERROR - 2025-01-07 21:47:55 --> Could not find the language line "Home"
ERROR - 2025-01-07 21:54:55 --> Could not find the language line "Home"
ERROR - 2025-01-07 22:17:57 --> Could not find the language line "Home"
ERROR - 2025-01-07 22:24:08 --> Could not find the language line "Home"
ERROR - 2025-01-07 22:47:58 --> Could not find the language line "Home"
ERROR - 2025-01-07 22:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 22:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 22:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 22:54:51 --> Could not find the language line "Home"
ERROR - 2025-01-07 22:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 23:02:33 --> Could not find the language line "Home"
ERROR - 2025-01-07 23:17:56 --> Could not find the language line "Home"
ERROR - 2025-01-07 23:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-07 23:26:16 --> Could not find the language line "Home"
ERROR - 2025-01-07 23:46:05 --> Could not find the language line "Home"
ERROR - 2025-01-07 23:48:00 --> Could not find the language line "Home"
ERROR - 2025-01-07 23:49:26 --> Could not find the language line "Home"
ERROR - 2025-01-07 23:55:02 --> Could not find the language line "Home"
ERROR - 2025-01-07 23:58:46 --> Could not find the language line "Home"
