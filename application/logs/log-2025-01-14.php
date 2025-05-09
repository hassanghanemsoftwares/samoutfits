<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-14 00:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 00:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 00:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 00:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 00:19:23 --> Could not find the language line "Home"
ERROR - 2025-01-14 00:22:12 --> Could not find the language line "Home"
ERROR - 2025-01-14 00:24:04 --> Could not find the language line "Home"
ERROR - 2025-01-14 00:35:13 --> Could not find the language line "Home"
ERROR - 2025-01-14 00:41:07 --> Could not find the language line "Home"
ERROR - 2025-01-14 00:41:09 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-01-14 00:41:09 --> Could not find the language line "Home"
ERROR - 2025-01-14 00:41:21 --> Could not find the language line "Home"
ERROR - 2025-01-14 00:41:22 --> 404 Page Not Found: Humanstxt/index
ERROR - 2025-01-14 00:41:23 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-01-14 00:41:23 --> 404 Page Not Found: Securitytxt/index
ERROR - 2025-01-14 00:41:24 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2025-01-14 00:41:47 --> Could not find the language line "Home"
ERROR - 2025-01-14 00:42:14 --> Could not find the language line "Home"
ERROR - 2025-01-14 00:46:19 --> Could not find the language line "Home"
ERROR - 2025-01-14 00:49:22 --> Could not find the language line "Home"
ERROR - 2025-01-14 01:19:22 --> Could not find the language line "Home"
ERROR - 2025-01-14 01:49:22 --> Could not find the language line "Home"
ERROR - 2025-01-14 02:19:22 --> Could not find the language line "Home"
ERROR - 2025-01-14 02:21:03 --> Could not find the language line "Home"
ERROR - 2025-01-14 02:49:21 --> Could not find the language line "Home"
ERROR - 2025-01-14 02:59:03 --> Could not find the language line "Home"
ERROR - 2025-01-14 03:19:27 --> Could not find the language line "Home"
ERROR - 2025-01-14 03:35:17 --> Could not find the language line "Home"
ERROR - 2025-01-14 03:46:42 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-01-14 03:49:23 --> Could not find the language line "Home"
ERROR - 2025-01-14 04:19:28 --> Could not find the language line "Home"
ERROR - 2025-01-14 04:49:32 --> Could not find the language line "Home"
ERROR - 2025-01-14 05:19:24 --> Could not find the language line "Home"
ERROR - 2025-01-14 05:27:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 05:34:29 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2025-01-14 05:49:30 --> Could not find the language line "Home"
ERROR - 2025-01-14 06:14:48 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2025-01-14 06:14:49 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-01-14 06:14:49 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2025-01-14 06:14:50 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-01-14 06:19:24 --> Could not find the language line "Home"
ERROR - 2025-01-14 06:27:09 --> Could not find the language line "Home"
ERROR - 2025-01-14 06:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 06:49:24 --> Could not find the language line "Home"
ERROR - 2025-01-14 07:06:25 --> Could not find the language line "Home"
ERROR - 2025-01-14 07:14:55 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-14 07:19:24 --> Could not find the language line "Home"
ERROR - 2025-01-14 07:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 07:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 07:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 07:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 07:40:00 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2025-01-14 07:40:00 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-01-14 07:40:01 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2025-01-14 07:40:01 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-01-14 07:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 07:49:27 --> Could not find the language line "Home"
ERROR - 2025-01-14 08:09:58 --> Could not find the language line "Clothing"
ERROR - 2025-01-14 08:18:44 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-14 08:19:25 --> Could not find the language line "Home"
ERROR - 2025-01-14 08:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:27:20 --> Could not find the language line "Home"
ERROR - 2025-01-14 08:28:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-14 08:29:26 --> Could not find the language line "Home"
ERROR - 2025-01-14 08:33:40 --> Could not find the language line "Home"
ERROR - 2025-01-14 08:35:51 --> Could not find the language line "Home"
ERROR - 2025-01-14 08:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:35:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-14 08:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:38:14 --> Could not find the language line "Home"
ERROR - 2025-01-14 08:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:38:15 --> 404 Page Not Found: Assets/lib
ERROR - 2025-01-14 08:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:49:25 --> Could not find the language line "Home"
ERROR - 2025-01-14 08:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 08:51:46 --> Could not find the language line "Home"
ERROR - 2025-01-14 09:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 09:00:44 --> Could not find the language line "Home"
ERROR - 2025-01-14 09:00:45 --> Could not find the language line "Home"
ERROR - 2025-01-14 09:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 09:04:00 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-14 09:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 09:19:25 --> Could not find the language line "Home"
ERROR - 2025-01-14 09:25:35 --> Could not find the language line "Home"
ERROR - 2025-01-14 09:27:39 --> Could not find the language line "Home"
ERROR - 2025-01-14 09:33:47 --> Could not find the language line "Home"
ERROR - 2025-01-14 09:33:55 --> Could not find the language line "Home"
ERROR - 2025-01-14 09:34:05 --> Could not find the language line "Home"
ERROR - 2025-01-14 09:35:54 --> Could not find the language line "Home"
ERROR - 2025-01-14 09:49:27 --> Could not find the language line "Home"
ERROR - 2025-01-14 09:59:35 --> Could not find the language line "Clothing"
ERROR - 2025-01-14 10:01:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-14 10:04:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-14 10:19:27 --> Could not find the language line "Home"
ERROR - 2025-01-14 10:23:55 --> Could not find the language line "Home"
ERROR - 2025-01-14 10:26:04 --> Could not find the language line "Home"
ERROR - 2025-01-14 10:26:08 --> Could not find the language line "Socks"
ERROR - 2025-01-14 10:26:54 --> Could not find the language line "Home"
ERROR - 2025-01-14 10:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 10:31:47 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2025-01-14 10:31:55 --> Could not find the language line "Home"
ERROR - 2025-01-14 10:35:55 --> Could not find the language line "Home"
ERROR - 2025-01-14 10:41:15 --> Could not find the language line "Home"
ERROR - 2025-01-14 10:49:29 --> Could not find the language line "Home"
ERROR - 2025-01-14 11:19:27 --> Could not find the language line "Home"
ERROR - 2025-01-14 11:22:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-14 11:29:52 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2025-01-14 11:45:13 --> Could not find the language line "Home"
ERROR - 2025-01-14 11:49:28 --> Could not find the language line "Home"
ERROR - 2025-01-14 11:54:48 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2025-01-14 12:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 12:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 12:15:37 --> Could not find the language line "Home"
ERROR - 2025-01-14 12:15:57 --> Could not find the language line "Home"
ERROR - 2025-01-14 12:19:28 --> Could not find the language line "Home"
ERROR - 2025-01-14 12:23:45 --> Could not find the language line "Clothing"
ERROR - 2025-01-14 12:25:52 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-14 12:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 12:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 12:41:51 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-14 12:49:27 --> Could not find the language line "Home"
ERROR - 2025-01-14 12:51:37 --> Could not find the language line "Home"
ERROR - 2025-01-14 12:54:49 --> Could not find the language line "Home"
ERROR - 2025-01-14 12:58:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-14 12:58:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 13:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:17:29 --> Could not find the language line "Home"
ERROR - 2025-01-14 13:17:33 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-01-14 13:19:28 --> Could not find the language line "Home"
ERROR - 2025-01-14 13:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:23:15 --> Could not find the language line "Home"
ERROR - 2025-01-14 13:24:27 --> Could not find the language line "Home"
ERROR - 2025-01-14 13:25:00 --> Could not find the language line "Home"
ERROR - 2025-01-14 13:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:37:15 --> Could not find the language line "Home"
ERROR - 2025-01-14 13:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:47:57 --> Could not find the language line "Clothing"
ERROR - 2025-01-14 13:48:05 --> Could not find the language line "Home"
ERROR - 2025-01-14 13:48:08 --> Could not find the language line "Clothing"
ERROR - 2025-01-14 13:48:28 --> Could not find the language line "Clothing"
ERROR - 2025-01-14 13:48:36 --> Could not find the language line "Clothing"
ERROR - 2025-01-14 13:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:49:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 13:49:27 --> Could not find the language line "Home"
ERROR - 2025-01-14 13:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 13:53:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-14 13:55:58 --> Could not find the language line "Home"
ERROR - 2025-01-14 13:56:38 --> Could not find the language line "Clothing"
ERROR - 2025-01-14 13:56:52 --> Could not find the language line "Home"
ERROR - 2025-01-14 13:57:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-14 13:57:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-14 13:57:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-14 13:57:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-14 13:57:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-14 13:57:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-14 13:57:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-14 13:57:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-14 13:57:56 --> Could not find the language line "Clothing"
ERROR - 2025-01-14 13:58:14 --> Could not find the language line "Clothing"
ERROR - 2025-01-14 13:58:23 --> Could not find the language line "Home"
ERROR - 2025-01-14 13:59:08 --> Could not find the language line "Home"
ERROR - 2025-01-14 14:13:44 --> Could not find the language line "Home"
ERROR - 2025-01-14 14:14:49 --> Could not find the language line "Clothing"
ERROR - 2025-01-14 14:19:28 --> Could not find the language line "Home"
ERROR - 2025-01-14 14:20:56 --> Could not find the language line "Home"
ERROR - 2025-01-14 14:49:28 --> Could not find the language line "Home"
ERROR - 2025-01-14 14:51:08 --> Could not find the language line "Home"
ERROR - 2025-01-14 14:54:46 --> Could not find the language line "Home"
ERROR - 2025-01-14 14:54:46 --> Could not find the language line "Home"
ERROR - 2025-01-14 14:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 15:05:55 --> Could not find the language line "Clothing"
ERROR - 2025-01-14 15:16:21 --> Could not find the language line "Home"
ERROR - 2025-01-14 15:16:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 15:17:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 15:17:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 15:19:29 --> Could not find the language line "Home"
ERROR - 2025-01-14 15:36:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 15:49:29 --> Could not find the language line "Home"
ERROR - 2025-01-14 15:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 16:19:29 --> Could not find the language line "Home"
ERROR - 2025-01-14 16:24:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 16:30:17 --> Could not find the language line "Home"
ERROR - 2025-01-14 16:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 16:31:27 --> Could not find the language line "Home"
ERROR - 2025-01-14 16:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 16:31:56 --> Could not find the language line "Home"
ERROR - 2025-01-14 16:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 16:32:37 --> Could not find the language line "Home"
ERROR - 2025-01-14 16:33:35 --> Could not find the language line "Home"
ERROR - 2025-01-14 16:34:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-14 16:34:13 --> Could not find the language line "Home"
ERROR - 2025-01-14 16:34:16 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-14 16:34:34 --> Could not find the language line "Home"
ERROR - 2025-01-14 16:34:38 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-14 16:35:27 --> Could not find the language line "Home"
ERROR - 2025-01-14 16:35:39 --> Could not find the language line "Perfume"
ERROR - 2025-01-14 16:35:46 --> Could not find the language line "Home"
ERROR - 2025-01-14 16:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 16:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 16:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 16:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 16:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 16:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 16:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 16:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 16:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 16:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 16:49:29 --> Could not find the language line "Home"
ERROR - 2025-01-14 17:19:29 --> Could not find the language line "Home"
ERROR - 2025-01-14 17:24:33 --> Could not find the language line "Home"
ERROR - 2025-01-14 17:30:37 --> Could not find the language line "Home"
ERROR - 2025-01-14 17:36:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-14 17:36:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 17:39:41 --> Could not find the language line "Home"
ERROR - 2025-01-14 17:41:57 --> Could not find the language line "Home"
ERROR - 2025-01-14 17:44:30 --> Could not find the language line "Home"
ERROR - 2025-01-14 17:45:22 --> Could not find the language line "Clothing"
ERROR - 2025-01-14 17:49:30 --> Could not find the language line "Home"
ERROR - 2025-01-14 17:54:18 --> Could not find the language line "Home"
ERROR - 2025-01-14 17:54:29 --> Could not find the language line "Home"
ERROR - 2025-01-14 18:08:34 --> Could not find the language line "Other"
ERROR - 2025-01-14 18:10:00 --> Could not find the language line "Home"
ERROR - 2025-01-14 18:19:30 --> Could not find the language line "Home"
ERROR - 2025-01-14 18:21:07 --> Could not find the language line "Home"
ERROR - 2025-01-14 18:24:28 --> Could not find the language line "Home"
ERROR - 2025-01-14 18:25:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 18:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 18:40:33 --> Could not find the language line "Home"
ERROR - 2025-01-14 18:49:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 18:49:31 --> Could not find the language line "Home"
ERROR - 2025-01-14 18:58:33 --> Could not find the language line "Home"
ERROR - 2025-01-14 19:09:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 19:11:47 --> Could not find the language line "0"
ERROR - 2025-01-14 19:16:49 --> Could not find the language line "Clothing"
ERROR - 2025-01-14 19:19:31 --> Could not find the language line "Home"
ERROR - 2025-01-14 19:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 19:44:35 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-14 19:44:44 --> Could not find the language line "Home"
ERROR - 2025-01-14 19:45:16 --> Could not find the language line "Home"
ERROR - 2025-01-14 19:49:31 --> Could not find the language line "Home"
ERROR - 2025-01-14 19:57:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 19:59:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 20:19:32 --> Could not find the language line "Home"
ERROR - 2025-01-14 20:29:22 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-14 20:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 20:49:32 --> Could not find the language line "Home"
ERROR - 2025-01-14 20:49:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-14 20:50:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-14 20:58:47 --> Could not find the language line "Home"
ERROR - 2025-01-14 20:59:43 --> Could not find the language line "Home"
ERROR - 2025-01-14 21:00:01 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-14 21:00:01 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-14 21:19:33 --> Could not find the language line "Home"
ERROR - 2025-01-14 21:21:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 21:29:45 --> Could not find the language line "Home"
ERROR - 2025-01-14 21:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 21:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 21:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 21:45:17 --> Could not find the language line "Home"
ERROR - 2025-01-14 21:49:33 --> Could not find the language line "Home"
ERROR - 2025-01-14 21:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 21:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 22:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 22:19:33 --> Could not find the language line "Home"
ERROR - 2025-01-14 22:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 22:43:55 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-14 22:43:55 --> Could not find the language line "Home"
ERROR - 2025-01-14 22:43:55 --> Could not find the language line "Home"
ERROR - 2025-01-14 22:49:36 --> Could not find the language line "Home"
ERROR - 2025-01-14 22:55:31 --> Could not find the language line "Home"
ERROR - 2025-01-14 23:03:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 23:10:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 23:16:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-14 23:19:37 --> Could not find the language line "Home"
ERROR - 2025-01-14 23:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 23:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 23:39:30 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-14 23:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-14 23:49:36 --> Could not find the language line "Home"
