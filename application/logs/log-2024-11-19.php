<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-19 00:07:06 --> Could not find the language line "Home"
ERROR - 2024-11-19 00:12:04 --> Could not find the language line "Home"
ERROR - 2024-11-19 00:14:52 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-19 00:17:01 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-19 00:24:43 --> Could not find the language line "Home"
ERROR - 2024-11-19 00:37:54 --> Could not find the language line "Home"
ERROR - 2024-11-19 00:42:19 --> Could not find the language line "Home"
ERROR - 2024-11-19 00:45:26 --> Could not find the language line "Home"
ERROR - 2024-11-19 00:50:28 --> Could not find the language line "Home"
ERROR - 2024-11-19 00:51:13 --> Could not find the language line "Home"
ERROR - 2024-11-19 01:10:04 --> Could not find the language line "Home"
ERROR - 2024-11-19 01:12:04 --> Could not find the language line "Home"
ERROR - 2024-11-19 01:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 01:23:39 --> Could not find the language line "Home"
ERROR - 2024-11-19 01:37:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-19 01:41:59 --> Could not find the language line "Home"
ERROR - 2024-11-19 01:44:25 --> Could not find the language line "Home"
ERROR - 2024-11-19 02:12:04 --> Could not find the language line "Home"
ERROR - 2024-11-19 02:26:51 --> Could not find the language line "Home"
ERROR - 2024-11-19 02:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 02:42:14 --> Could not find the language line "Home"
ERROR - 2024-11-19 03:12:15 --> Could not find the language line "Home"
ERROR - 2024-11-19 03:20:43 --> Could not find the language line "Clothing"
ERROR - 2024-11-19 03:42:00 --> Could not find the language line "Home"
ERROR - 2024-11-19 03:43:19 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-19 03:52:48 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-19 03:53:09 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-19 03:56:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-19 03:57:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-19 03:57:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-19 03:58:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-19 04:12:00 --> Could not find the language line "Home"
ERROR - 2024-11-19 04:24:19 --> Could not find the language line "Home"
ERROR - 2024-11-19 04:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 04:34:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-19 04:42:05 --> Could not find the language line "Home"
ERROR - 2024-11-19 04:46:47 --> Could not find the language line "products"
ERROR - 2024-11-19 05:12:00 --> Could not find the language line "Home"
ERROR - 2024-11-19 05:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 05:42:03 --> Could not find the language line "Home"
ERROR - 2024-11-19 05:49:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-19 06:05:10 --> Could not find the language line "Home"
ERROR - 2024-11-19 06:12:00 --> Could not find the language line "Home"
ERROR - 2024-11-19 06:16:52 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-19 06:18:12 --> Could not find the language line "Home"
ERROR - 2024-11-19 06:22:46 --> Could not find the language line "Home"
ERROR - 2024-11-19 06:24:56 --> Could not find the language line "Home"
ERROR - 2024-11-19 06:32:09 --> Could not find the language line "Home"
ERROR - 2024-11-19 06:42:02 --> Could not find the language line "Home"
ERROR - 2024-11-19 06:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 07:06:51 --> Could not find the language line "Home"
ERROR - 2024-11-19 07:12:01 --> Could not find the language line "Home"
ERROR - 2024-11-19 07:15:17 --> Could not find the language line "Home"
ERROR - 2024-11-19 07:15:18 --> Could not find the language line "Home"
ERROR - 2024-11-19 07:18:14 --> Could not find the language line "Home"
ERROR - 2024-11-19 07:25:39 --> Could not find the language line "Home"
ERROR - 2024-11-19 07:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 07:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 07:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 07:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 07:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 07:39:09 --> Could not find the language line "Home"
ERROR - 2024-11-19 07:42:01 --> Could not find the language line "Home"
ERROR - 2024-11-19 07:46:07 --> Could not find the language line "Home"
ERROR - 2024-11-19 08:00:00 --> Could not find the language line "Home"
ERROR - 2024-11-19 08:04:33 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-19 08:04:59 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-19 08:05:23 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-19 08:05:47 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-19 08:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:12:01 --> Could not find the language line "Home"
ERROR - 2024-11-19 08:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:24:48 --> Could not find the language line "Home"
ERROR - 2024-11-19 08:24:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-19 08:24:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-19 08:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:25:47 --> Could not find the language line "Home"
ERROR - 2024-11-19 08:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:26:28 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-19 08:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:27:18 --> Could not find the language line "Home"
ERROR - 2024-11-19 08:27:19 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-19 08:27:42 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-11-19 08:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:28:07 --> Could not find the language line "Home"
ERROR - 2024-11-19 08:28:09 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-19 08:28:09 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-19 08:30:24 --> Could not find the language line "Home"
ERROR - 2024-11-19 08:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 08:42:02 --> Could not find the language line "Home"
ERROR - 2024-11-19 08:53:49 --> Could not find the language line "Home"
ERROR - 2024-11-19 09:01:20 --> Could not find the language line "Home"
ERROR - 2024-11-19 09:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 09:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 09:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 09:12:02 --> Could not find the language line "Home"
ERROR - 2024-11-19 09:17:21 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-11-19 09:17:22 --> Could not find the language line "Home"
ERROR - 2024-11-19 09:17:22 --> 404 Page Not Found: Wp/index
ERROR - 2024-11-19 09:17:23 --> 404 Page Not Found: Bc/index
ERROR - 2024-11-19 09:17:23 --> 404 Page Not Found: Bk/index
ERROR - 2024-11-19 09:17:24 --> 404 Page Not Found: Backup/index
ERROR - 2024-11-19 09:17:25 --> 404 Page Not Found: New/index
ERROR - 2024-11-19 09:17:25 --> 404 Page Not Found: Main/index
ERROR - 2024-11-19 09:17:26 --> Could not find the language line "Home"
ERROR - 2024-11-19 09:20:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-19 09:21:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-19 09:27:48 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-19 09:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 09:40:28 --> Could not find the language line "Home"
ERROR - 2024-11-19 09:42:02 --> Could not find the language line "Home"
ERROR - 2024-11-19 09:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 09:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 09:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 09:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 09:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 09:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 09:44:18 --> Could not find the language line "Home"
ERROR - 2024-11-19 09:44:27 --> Could not find the language line "Home"
ERROR - 2024-11-19 09:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 09:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 09:47:16 --> Could not find the language line "Home"
ERROR - 2024-11-19 09:53:04 --> Could not find the language line "Perfume"
ERROR - 2024-11-19 10:10:47 --> Could not find the language line "Home"
ERROR - 2024-11-19 10:11:04 --> Could not find the language line "Perfume"
ERROR - 2024-11-19 10:11:11 --> Could not find the language line "Home"
ERROR - 2024-11-19 10:12:04 --> Could not find the language line "Home"
ERROR - 2024-11-19 10:21:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-19 10:21:51 --> Could not find the language line "Home"
ERROR - 2024-11-19 10:22:12 --> Could not find the language line "Home"
ERROR - 2024-11-19 10:23:17 --> Could not find the language line "Home"
ERROR - 2024-11-19 10:24:53 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-11-19 10:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 10:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 10:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 10:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 10:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 10:39:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-19 10:39:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-19 10:39:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-19 10:39:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-19 10:39:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-19 10:39:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-19 10:39:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-19 10:39:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-19 10:39:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-19 10:39:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-19 10:39:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-19 10:39:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-19 10:39:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-19 10:39:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-19 10:39:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-19 10:39:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-19 10:39:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-19 10:39:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-19 10:39:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-19 10:39:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-19 10:39:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-19 10:39:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-19 10:39:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-19 10:39:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-19 10:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 10:42:03 --> Could not find the language line "Home"
ERROR - 2024-11-19 10:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 10:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 10:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 10:46:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-19 11:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 11:12:04 --> Could not find the language line "Home"
ERROR - 2024-11-19 11:23:09 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-11-19 11:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 11:42:04 --> Could not find the language line "Home"
ERROR - 2024-11-19 12:01:01 --> Could not find the language line "Home"
ERROR - 2024-11-19 12:01:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-19 12:01:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-19 12:01:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-19 12:01:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-19 12:01:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-19 12:01:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-19 12:01:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-19 12:01:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-19 12:01:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-19 12:01:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-19 12:02:01 --> Could not find the language line "Home"
ERROR - 2024-11-19 12:03:04 --> Could not find the language line "Home"
ERROR - 2024-11-19 12:03:04 --> Could not find the language line "Home"
ERROR - 2024-11-19 12:03:16 --> 404 Page Not Found: Plugins/function.php
ERROR - 2024-11-19 12:12:07 --> Could not find the language line "Home"
ERROR - 2024-11-19 12:17:20 --> 404 Page Not Found: Plugins/function.php
ERROR - 2024-11-19 12:18:18 --> 404 Page Not Found: File/function.php
ERROR - 2024-11-19 12:19:06 --> 404 Page Not Found: As/function
ERROR - 2024-11-19 12:19:46 --> 404 Page Not Found: Mah/function.php
ERROR - 2024-11-19 12:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 12:20:39 --> 404 Page Not Found: Admin/function.php
ERROR - 2024-11-19 12:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 12:21:23 --> 404 Page Not Found: Doc/function.php
ERROR - 2024-11-19 12:21:57 --> 404 Page Not Found: About/function.php
ERROR - 2024-11-19 12:22:37 --> 404 Page Not Found: Index/function.php
ERROR - 2024-11-19 12:35:11 --> Could not find the language line "Home"
ERROR - 2024-11-19 12:41:10 --> Could not find the language line "Home"
ERROR - 2024-11-19 12:42:04 --> Could not find the language line "Home"
ERROR - 2024-11-19 12:56:14 --> Could not find the language line "Home"
ERROR - 2024-11-19 13:07:02 --> Could not find the language line "Home"
ERROR - 2024-11-19 13:12:05 --> Could not find the language line "Home"
ERROR - 2024-11-19 13:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 13:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 13:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 13:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 13:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 13:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 13:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 13:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 13:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 13:34:23 --> Could not find the language line "Home"
ERROR - 2024-11-19 13:40:21 --> Could not find the language line "Home"
ERROR - 2024-11-19 13:42:05 --> Could not find the language line "Home"
ERROR - 2024-11-19 13:43:07 --> Could not find the language line "Home"
ERROR - 2024-11-19 13:43:32 --> Could not find the language line "Home"
ERROR - 2024-11-19 13:43:50 --> Could not find the language line "Home"
ERROR - 2024-11-19 13:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 13:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 13:51:09 --> Could not find the language line "Home"
ERROR - 2024-11-19 13:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 13:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 14:12:05 --> Could not find the language line "Home"
ERROR - 2024-11-19 14:17:14 --> Could not find the language line "products"
ERROR - 2024-11-19 14:23:34 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-19 14:24:47 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-19 14:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 14:42:05 --> Could not find the language line "Home"
ERROR - 2024-11-19 14:50:28 --> Could not find the language line "Home"
ERROR - 2024-11-19 15:05:07 --> Could not find the language line "Socks"
ERROR - 2024-11-19 15:11:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-19 15:12:07 --> Could not find the language line "Home"
ERROR - 2024-11-19 15:16:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-19 15:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 15:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 15:25:20 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-11-19 15:25:20 --> Could not find the language line "Home"
ERROR - 2024-11-19 15:25:21 --> 404 Page Not Found: Wp/index
ERROR - 2024-11-19 15:25:21 --> 404 Page Not Found: Bc/index
ERROR - 2024-11-19 15:25:22 --> 404 Page Not Found: Bk/index
ERROR - 2024-11-19 15:25:22 --> 404 Page Not Found: Backup/index
ERROR - 2024-11-19 15:25:24 --> 404 Page Not Found: New/index
ERROR - 2024-11-19 15:25:24 --> 404 Page Not Found: Main/index
ERROR - 2024-11-19 15:25:25 --> Could not find the language line "Home"
ERROR - 2024-11-19 15:39:54 --> Could not find the language line "Home"
ERROR - 2024-11-19 15:39:54 --> Could not find the language line "Home"
ERROR - 2024-11-19 15:42:06 --> Could not find the language line "Home"
ERROR - 2024-11-19 15:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 15:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 16:00:55 --> Could not find the language line "Clothing"
ERROR - 2024-11-19 16:01:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-19 16:01:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-19 16:01:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-19 16:02:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-19 16:07:33 --> Could not find the language line "Home"
ERROR - 2024-11-19 16:12:06 --> Could not find the language line "Home"
ERROR - 2024-11-19 16:12:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-19 16:12:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-11-19 16:12:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-19 16:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 16:13:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 16:17:22 --> Could not find the language line "Other"
ERROR - 2024-11-19 16:21:44 --> Could not find the language line "Home"
ERROR - 2024-11-19 16:22:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-19 16:22:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-11-19 16:22:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-19 16:23:10 --> Could not find the language line "Clothing"
ERROR - 2024-11-19 16:23:13 --> Could not find the language line "Home"
ERROR - 2024-11-19 16:24:58 --> Could not find the language line "Clothing"
ERROR - 2024-11-19 16:25:07 --> Could not find the language line "Clothing"
ERROR - 2024-11-19 16:25:07 --> Could not find the language line "Clothing"
ERROR - 2024-11-19 16:25:08 --> Could not find the language line "Clothing"
ERROR - 2024-11-19 16:25:37 --> Could not find the language line "Clothing"
ERROR - 2024-11-19 16:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 16:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 16:41:12 --> Could not find the language line "Other"
ERROR - 2024-11-19 16:42:06 --> Could not find the language line "Home"
ERROR - 2024-11-19 16:47:28 --> Could not find the language line "Home"
ERROR - 2024-11-19 16:55:31 --> Could not find the language line "Other"
ERROR - 2024-11-19 17:00:26 --> Could not find the language line "Home"
ERROR - 2024-11-19 17:12:06 --> Could not find the language line "Home"
ERROR - 2024-11-19 17:15:23 --> Could not find the language line "Home"
ERROR - 2024-11-19 17:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 17:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 17:30:16 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-11-19 17:42:06 --> Could not find the language line "Home"
ERROR - 2024-11-19 17:47:25 --> Could not find the language line "products"
ERROR - 2024-11-19 18:03:33 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-19 18:12:07 --> Could not find the language line "Home"
ERROR - 2024-11-19 18:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 18:33:54 --> Could not find the language line "Home"
ERROR - 2024-11-19 18:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 18:37:59 --> Could not find the language line "Home"
ERROR - 2024-11-19 18:38:03 --> Could not find the language line "Home"
ERROR - 2024-11-19 18:42:07 --> Could not find the language line "Home"
ERROR - 2024-11-19 19:09:42 --> Could not find the language line "Home"
ERROR - 2024-11-19 19:12:07 --> Could not find the language line "Home"
ERROR - 2024-11-19 19:12:15 --> Could not find the language line "Clothing"
ERROR - 2024-11-19 19:20:03 --> Could not find the language line "Home"
ERROR - 2024-11-19 19:23:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-19 19:26:46 --> Could not find the language line "Home"
ERROR - 2024-11-19 19:30:05 --> Could not find the language line "Home"
ERROR - 2024-11-19 19:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 19:36:22 --> Could not find the language line "Home"
ERROR - 2024-11-19 19:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 19:42:08 --> Could not find the language line "Home"
ERROR - 2024-11-19 19:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 20:08:11 --> Could not find the language line "Home"
ERROR - 2024-11-19 20:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 20:12:08 --> Could not find the language line "Home"
ERROR - 2024-11-19 20:18:10 --> Could not find the language line "Home"
ERROR - 2024-11-19 20:25:06 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-19 20:25:30 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-19 20:25:54 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-19 20:27:12 --> Could not find the language line "Home"
ERROR - 2024-11-19 20:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 20:30:08 --> Could not find the language line "Home"
ERROR - 2024-11-19 20:31:24 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-19 20:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 20:42:14 --> Could not find the language line "Home"
ERROR - 2024-11-19 20:50:04 --> Could not find the language line "Home"
ERROR - 2024-11-19 20:50:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-19 20:50:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-19 20:50:22 --> Could not find the language line "Home"
ERROR - 2024-11-19 20:50:56 --> Could not find the language line "Home"
ERROR - 2024-11-19 20:51:10 --> Could not find the language line "Home"
ERROR - 2024-11-19 20:51:14 --> Could not find the language line "Clothing"
ERROR - 2024-11-19 20:51:25 --> Could not find the language line "Home"
ERROR - 2024-11-19 20:59:57 --> Could not find the language line "Home"
ERROR - 2024-11-19 21:00:01 --> Could not find the language line "Home"
ERROR - 2024-11-19 21:02:44 --> Could not find the language line "Home"
ERROR - 2024-11-19 21:03:33 --> Could not find the language line "Home"
ERROR - 2024-11-19 21:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 21:12:09 --> Could not find the language line "Home"
ERROR - 2024-11-19 21:18:35 --> Could not find the language line "Home"
ERROR - 2024-11-19 21:18:35 --> Could not find the language line "Home"
ERROR - 2024-11-19 21:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 21:18:46 --> Could not find the language line "Clothing"
ERROR - 2024-11-19 21:42:09 --> Could not find the language line "Home"
ERROR - 2024-11-19 21:52:53 --> Could not find the language line "Home"
ERROR - 2024-11-19 21:53:17 --> 404 Page Not Found: Js/main.js
ERROR - 2024-11-19 21:53:17 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2024-11-19 21:53:17 --> 404 Page Not Found: Mail/contact.js
ERROR - 2024-11-19 21:53:17 --> 404 Page Not Found: Pagead2googlesyndicationcom/pagead
ERROR - 2024-11-19 21:53:17 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2024-11-19 21:53:17 --> 404 Page Not Found: Lib/easing
ERROR - 2024-11-19 21:53:17 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2024-11-19 21:53:17 --> 404 Page Not Found: Js/common.js
ERROR - 2024-11-19 21:53:17 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2024-11-19 21:53:17 --> 404 Page Not Found: Wwwgoogletagmanagercom/gtm.js
ERROR - 2024-11-19 21:53:17 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2024-11-19 21:53:17 --> 404 Page Not Found: Lib/swiper
ERROR - 2024-11-19 21:53:57 --> 404 Page Not Found: Mail/contact.js
ERROR - 2024-11-19 21:53:57 --> 404 Page Not Found: Lib/swiper
ERROR - 2024-11-19 21:53:57 --> 404 Page Not Found: Wwwgoogletagmanagercom/gtm.js
ERROR - 2024-11-19 21:53:57 --> 404 Page Not Found: Lib/easing
ERROR - 2024-11-19 21:53:57 --> 404 Page Not Found: Js/main.js
ERROR - 2024-11-19 21:53:57 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2024-11-19 21:53:58 --> 404 Page Not Found: Pagead2googlesyndicationcom/pagead
ERROR - 2024-11-19 21:53:58 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2024-11-19 21:53:58 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2024-11-19 21:53:58 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2024-11-19 21:53:59 --> 404 Page Not Found: Js/common.js
ERROR - 2024-11-19 21:53:59 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2024-11-19 21:54:39 --> 404 Page Not Found: Mail/contact.js
ERROR - 2024-11-19 21:54:39 --> 404 Page Not Found: Lib/swiper
ERROR - 2024-11-19 21:54:39 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2024-11-19 21:54:39 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2024-11-19 21:54:39 --> 404 Page Not Found: Lib/easing
ERROR - 2024-11-19 21:54:39 --> 404 Page Not Found: Js/main.js
ERROR - 2024-11-19 21:54:39 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2024-11-19 21:54:39 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2024-11-19 21:54:39 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2024-11-19 21:54:39 --> 404 Page Not Found: Pagead2googlesyndicationcom/pagead
ERROR - 2024-11-19 21:54:39 --> 404 Page Not Found: Js/common.js
ERROR - 2024-11-19 21:54:39 --> 404 Page Not Found: Wwwgoogletagmanagercom/gtm.js
ERROR - 2024-11-19 21:54:44 --> Could not find the language line "Home"
ERROR - 2024-11-19 21:55:14 --> 404 Page Not Found: Js/common.js
ERROR - 2024-11-19 21:55:14 --> 404 Page Not Found: Pagead2googlesyndicationcom/pagead
ERROR - 2024-11-19 21:55:14 --> 404 Page Not Found: Lib/easing
ERROR - 2024-11-19 21:55:14 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2024-11-19 21:55:14 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2024-11-19 21:55:14 --> 404 Page Not Found: Js/main.js
ERROR - 2024-11-19 21:55:15 --> 404 Page Not Found: Mail/contact.js
ERROR - 2024-11-19 21:55:15 --> 404 Page Not Found: Lib/swiper
ERROR - 2024-11-19 21:55:15 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2024-11-19 21:55:15 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2024-11-19 21:55:15 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2024-11-19 21:55:15 --> 404 Page Not Found: Wwwgoogletagmanagercom/gtm.js
ERROR - 2024-11-19 21:55:51 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2024-11-19 21:55:51 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2024-11-19 21:55:51 --> 404 Page Not Found: Wwwgoogletagmanagercom/gtm.js
ERROR - 2024-11-19 21:55:51 --> 404 Page Not Found: Lib/swiper
ERROR - 2024-11-19 21:55:51 --> 404 Page Not Found: Mail/contact.js
ERROR - 2024-11-19 21:55:51 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2024-11-19 21:55:51 --> 404 Page Not Found: Js/main.js
ERROR - 2024-11-19 21:55:53 --> 404 Page Not Found: Pagead2googlesyndicationcom/pagead
ERROR - 2024-11-19 21:55:53 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2024-11-19 21:55:53 --> 404 Page Not Found: Lib/easing
ERROR - 2024-11-19 22:12:10 --> Could not find the language line "Home"
ERROR - 2024-11-19 22:13:54 --> Could not find the language line "Home"
ERROR - 2024-11-19 22:23:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-19 22:42:11 --> Could not find the language line "Home"
ERROR - 2024-11-19 22:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 22:45:19 --> Could not find the language line "Clothing"
ERROR - 2024-11-19 22:47:18 --> Could not find the language line "Clothing"
ERROR - 2024-11-19 22:47:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-19 22:59:19 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-19 23:12:12 --> Could not find the language line "Home"
ERROR - 2024-11-19 23:42:18 --> Could not find the language line "Home"
ERROR - 2024-11-19 23:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 23:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-19 23:59:54 --> 404 Page Not Found: Git/config
ERROR - 2024-11-19 23:59:55 --> 404 Page Not Found: Assets/css
