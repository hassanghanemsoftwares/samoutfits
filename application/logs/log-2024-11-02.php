<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-02 00:16:37 --> Could not find the language line "Home"
ERROR - 2024-11-02 00:43:53 --> Could not find the language line "Home"
ERROR - 2024-11-02 00:46:31 --> Could not find the language line "Home"
ERROR - 2024-11-02 01:15:04 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-02 01:16:31 --> Could not find the language line "Home"
ERROR - 2024-11-02 01:18:34 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-02 01:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 01:32:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-02 01:35:28 --> Could not find the language line "Home"
ERROR - 2024-11-02 01:46:42 --> Could not find the language line "Home"
ERROR - 2024-11-02 02:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 02:16:34 --> Could not find the language line "Home"
ERROR - 2024-11-02 02:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-02 02:31:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-02 02:36:17 --> Could not find the language line "Home"
ERROR - 2024-11-02 02:42:12 --> Could not find the language line "Home"
ERROR - 2024-11-02 02:46:40 --> Could not find the language line "Home"
ERROR - 2024-11-02 02:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 02:53:49 --> Could not find the language line "Home"
ERROR - 2024-11-02 02:57:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-02 02:57:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-02 02:57:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-02 02:57:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-02 02:57:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-02 02:57:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-02 02:57:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-02 02:57:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-02 02:57:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-02 02:57:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-02 02:57:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-02 02:57:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-02 02:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 03:03:27 --> Could not find the language line "Home"
ERROR - 2024-11-02 03:16:36 --> Could not find the language line "Home"
ERROR - 2024-11-02 03:18:35 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-11-02 03:21:28 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-02 03:21:29 --> Could not find the language line "Home"
ERROR - 2024-11-02 03:26:28 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 03:42:11 --> Could not find the language line "Home"
ERROR - 2024-11-02 03:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 03:43:48 --> Could not find the language line "Home"
ERROR - 2024-11-02 03:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 03:45:10 --> Could not find the language line "Home"
ERROR - 2024-11-02 03:45:15 --> Could not find the language line "Home"
ERROR - 2024-11-02 03:46:32 --> Could not find the language line "Home"
ERROR - 2024-11-02 03:47:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-02 03:54:16 --> Could not find the language line "Home"
ERROR - 2024-11-02 03:54:32 --> Could not find the language line "Home"
ERROR - 2024-11-02 03:54:33 --> Could not find the language line "Home"
ERROR - 2024-11-02 03:54:33 --> Could not find the language line "Home"
ERROR - 2024-11-02 03:54:43 --> Could not find the language line "Home"
ERROR - 2024-11-02 03:54:59 --> Could not find the language line "Home"
ERROR - 2024-11-02 04:02:23 --> Could not find the language line "Home"
ERROR - 2024-11-02 04:02:59 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-11-02 04:05:35 --> Could not find the language line "Home"
ERROR - 2024-11-02 04:08:40 --> Could not find the language line "Home"
ERROR - 2024-11-02 04:16:36 --> Could not find the language line "Home"
ERROR - 2024-11-02 04:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 04:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 04:29:11 --> Could not find the language line "Other"
ERROR - 2024-11-02 04:35:56 --> Could not find the language line "Home"
ERROR - 2024-11-02 04:38:13 --> Could not find the language line "Home"
ERROR - 2024-11-02 04:45:00 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-02 04:46:33 --> Could not find the language line "Home"
ERROR - 2024-11-02 04:46:57 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-02 04:46:57 --> Could not find the language line "Home"
ERROR - 2024-11-02 04:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 04:57:58 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 05:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 05:16:34 --> Could not find the language line "Home"
ERROR - 2024-11-02 05:16:45 --> Could not find the language line "Home"
ERROR - 2024-11-02 05:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 05:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 05:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 05:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 05:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 05:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 05:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 05:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 05:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 05:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 05:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 05:46:33 --> Could not find the language line "Home"
ERROR - 2024-11-02 05:50:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-02 05:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 06:02:22 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-02 06:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 06:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 06:16:35 --> Could not find the language line "Home"
ERROR - 2024-11-02 06:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 06:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 06:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 06:34:17 --> Could not find the language line "Home"
ERROR - 2024-11-02 06:34:17 --> Could not find the language line "Home"
ERROR - 2024-11-02 06:34:17 --> Could not find the language line "Home"
ERROR - 2024-11-02 06:37:44 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-02 06:46:33 --> Could not find the language line "Home"
ERROR - 2024-11-02 06:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 06:55:11 --> Could not find the language line "Home"
ERROR - 2024-11-02 06:58:42 --> Could not find the language line "Home"
ERROR - 2024-11-02 07:03:13 --> Could not find the language line "Home"
ERROR - 2024-11-02 07:09:33 --> Could not find the language line "Home"
ERROR - 2024-11-02 07:10:37 --> Could not find the language line "Home"
ERROR - 2024-11-02 07:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:16:35 --> Could not find the language line "Home"
ERROR - 2024-11-02 07:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:28:34 --> Could not find the language line "Home"
ERROR - 2024-11-02 07:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:40:53 --> Could not find the language line "Home"
ERROR - 2024-11-02 07:40:53 --> Could not find the language line "Home"
ERROR - 2024-11-02 07:44:33 --> Could not find the language line "Home"
ERROR - 2024-11-02 07:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 07:46:34 --> Could not find the language line "Home"
ERROR - 2024-11-02 08:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:13:52 --> Could not find the language line "Home"
ERROR - 2024-11-02 08:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:15:03 --> Could not find the language line "Home"
ERROR - 2024-11-02 08:15:05 --> Could not find the language line "Home"
ERROR - 2024-11-02 08:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:16:37 --> Could not find the language line "Home"
ERROR - 2024-11-02 08:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:20:26 --> Could not find the language line "Home"
ERROR - 2024-11-02 08:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:46:35 --> Could not find the language line "Home"
ERROR - 2024-11-02 08:50:32 --> Could not find the language line "Home"
ERROR - 2024-11-02 08:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:51:33 --> Could not find the language line "Bracelets"
ERROR - 2024-11-02 08:51:35 --> Could not find the language line "Home"
ERROR - 2024-11-02 08:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 08:53:04 --> Could not find the language line "Home"
ERROR - 2024-11-02 09:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 09:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 09:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 09:16:36 --> Could not find the language line "Home"
ERROR - 2024-11-02 09:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 09:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 09:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 09:26:17 --> Could not find the language line "Home"
ERROR - 2024-11-02 09:26:26 --> Could not find the language line "Home"
ERROR - 2024-11-02 09:28:18 --> Could not find the language line "Home"
ERROR - 2024-11-02 09:29:44 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-11-02 09:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 09:43:05 --> Could not find the language line "Home"
ERROR - 2024-11-02 09:46:36 --> Could not find the language line "Home"
ERROR - 2024-11-02 09:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 09:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 10:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 10:12:31 --> Could not find the language line "Home"
ERROR - 2024-11-02 10:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 10:16:37 --> Could not find the language line "Home"
ERROR - 2024-11-02 10:20:01 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 10:20:43 --> Could not find the language line "Home"
ERROR - 2024-11-02 10:20:48 --> Could not find the language line "Home"
ERROR - 2024-11-02 10:22:31 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 10:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 10:29:59 --> Could not find the language line "Home"
ERROR - 2024-11-02 10:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 10:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 10:45:06 --> Could not find the language line "Home"
ERROR - 2024-11-02 10:45:06 --> Could not find the language line "Home"
ERROR - 2024-11-02 10:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 10:46:37 --> Could not find the language line "Home"
ERROR - 2024-11-02 10:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 10:50:36 --> Could not find the language line "Home"
ERROR - 2024-11-02 10:50:38 --> Could not find the language line "Home"
ERROR - 2024-11-02 10:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 10:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 10:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 10:56:33 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-02 11:05:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-02 11:07:13 --> Could not find the language line "Home"
ERROR - 2024-11-02 11:07:30 --> Could not find the language line "Home"
ERROR - 2024-11-02 11:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:08:43 --> Could not find the language line "Home"
ERROR - 2024-11-02 11:14:53 --> Could not find the language line "Home"
ERROR - 2024-11-02 11:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:15:35 --> Could not find the language line "Home"
ERROR - 2024-11-02 11:16:05 --> Could not find the language line "Home"
ERROR - 2024-11-02 11:16:36 --> Could not find the language line "Home"
ERROR - 2024-11-02 11:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:19:35 --> Could not find the language line "Home"
ERROR - 2024-11-02 11:21:28 --> Could not find the language line "Home"
ERROR - 2024-11-02 11:23:15 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-11-02 11:23:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-02 11:23:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-11-02 11:23:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-02 11:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:34:08 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 11:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:37:53 --> Could not find the language line "Home"
ERROR - 2024-11-02 11:39:18 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 11:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:46:37 --> Could not find the language line "Home"
ERROR - 2024-11-02 11:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 11:55:06 --> Could not find the language line "Home"
ERROR - 2024-11-02 11:55:08 --> Could not find the language line "Home"
ERROR - 2024-11-02 12:05:55 --> Could not find the language line "Home"
ERROR - 2024-11-02 12:06:44 --> Could not find the language line "Home"
ERROR - 2024-11-02 12:11:40 --> Could not find the language line "Other"
ERROR - 2024-11-02 12:16:37 --> Could not find the language line "Home"
ERROR - 2024-11-02 12:18:59 --> Could not find the language line "Home"
ERROR - 2024-11-02 12:26:54 --> Could not find the language line "Home"
ERROR - 2024-11-02 12:33:05 --> Could not find the language line "Home"
ERROR - 2024-11-02 12:33:37 --> Could not find the language line "Home"
ERROR - 2024-11-02 12:34:11 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-02 12:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 12:45:27 --> Could not find the language line "Home"
ERROR - 2024-11-02 12:46:37 --> Could not find the language line "Home"
ERROR - 2024-11-02 12:49:20 --> Could not find the language line "Home"
ERROR - 2024-11-02 12:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 12:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 12:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 12:57:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 12:57:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 13:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:16:37 --> Could not find the language line "Home"
ERROR - 2024-11-02 13:27:11 --> Could not find the language line "Home"
ERROR - 2024-11-02 13:27:18 --> Could not find the language line "Home"
ERROR - 2024-11-02 13:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:27:43 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-02 13:27:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-02 13:27:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-02 13:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:28:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-02 13:28:13 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-02 13:28:27 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-02 13:28:30 --> Could not find the language line "Home"
ERROR - 2024-11-02 13:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:31:36 --> Could not find the language line "Home"
ERROR - 2024-11-02 13:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:33:15 --> Could not find the language line "Home"
ERROR - 2024-11-02 13:33:17 --> Could not find the language line "Home"
ERROR - 2024-11-02 13:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:35:29 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:35:57 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:36:15 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:36:28 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:36:43 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:36:52 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:36:59 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:37:10 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:37:18 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:46:38 --> Could not find the language line "Home"
ERROR - 2024-11-02 13:51:08 --> Could not find the language line "Home"
ERROR - 2024-11-02 13:51:57 --> Could not find the language line "Home"
ERROR - 2024-11-02 13:52:31 --> Could not find the language line "Home"
ERROR - 2024-11-02 13:52:38 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:52:54 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:53:13 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:53:43 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:54:03 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:54:18 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:54:29 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:54:44 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:54:55 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:55:06 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:55:13 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:55:13 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:55:23 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:55:36 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:57:49 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:58:06 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:58:11 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:58:11 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:58:24 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:58:36 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:58:44 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:58:53 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:59:05 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:59:15 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:59:17 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:59:35 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:59:49 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 13:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 13:59:58 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 14:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:00:09 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 14:00:13 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 14:00:14 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 14:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:00:27 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 14:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:00:38 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 14:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:00:56 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 14:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:01:10 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 14:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:01:34 --> Could not find the language line "Socks"
ERROR - 2024-11-02 14:01:39 --> Could not find the language line "Socks"
ERROR - 2024-11-02 14:01:39 --> Could not find the language line "Socks"
ERROR - 2024-11-02 14:01:55 --> Could not find the language line "Socks"
ERROR - 2024-11-02 14:02:06 --> Could not find the language line "Socks"
ERROR - 2024-11-02 14:02:08 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 14:02:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 14:02:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 14:02:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 14:02:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 14:02:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 14:02:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 14:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:02:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 14:02:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 14:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:03:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 14:03:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 14:03:17 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 14:03:23 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 14:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:06:04 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-02 14:06:05 --> Could not find the language line "Home"
ERROR - 2024-11-02 14:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:16:39 --> Could not find the language line "Home"
ERROR - 2024-11-02 14:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:31:30 --> Could not find the language line "Home"
ERROR - 2024-11-02 14:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 14:46:38 --> Could not find the language line "Home"
ERROR - 2024-11-02 14:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 15:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 15:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 15:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 15:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 15:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 15:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 15:03:24 --> Could not find the language line "Home"
ERROR - 2024-11-02 15:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 15:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 15:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 15:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 15:16:39 --> Could not find the language line "Home"
ERROR - 2024-11-02 15:31:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-02 15:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 15:43:13 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-02 15:46:38 --> Could not find the language line "Home"
ERROR - 2024-11-02 15:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 16:00:17 --> Could not find the language line "Home"
ERROR - 2024-11-02 16:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 16:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 16:07:35 --> Could not find the language line "Home"
ERROR - 2024-11-02 16:16:40 --> Could not find the language line "Home"
ERROR - 2024-11-02 16:23:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-02 16:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 16:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 16:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 16:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 16:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 16:34:33 --> Could not find the language line "Home"
ERROR - 2024-11-02 16:34:34 --> Could not find the language line "Home"
ERROR - 2024-11-02 16:34:35 --> Could not find the language line "Home"
ERROR - 2024-11-02 16:35:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-02 16:42:18 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-02 16:42:18 --> Could not find the language line "Home"
ERROR - 2024-11-02 16:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 16:45:23 --> Could not find the language line "Home"
ERROR - 2024-11-02 16:46:25 --> Could not find the language line "Home"
ERROR - 2024-11-02 16:46:37 --> Could not find the language line "Home"
ERROR - 2024-11-02 16:46:39 --> Could not find the language line "Home"
ERROR - 2024-11-02 16:50:23 --> Could not find the language line "Home"
ERROR - 2024-11-02 16:53:36 --> Could not find the language line "Home"
ERROR - 2024-11-02 16:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 17:05:43 --> Could not find the language line "Home"
ERROR - 2024-11-02 17:10:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-02 17:16:39 --> Could not find the language line "Home"
ERROR - 2024-11-02 17:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 17:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 17:46:40 --> Could not find the language line "Home"
ERROR - 2024-11-02 18:08:15 --> Could not find the language line "Home"
ERROR - 2024-11-02 18:16:40 --> Could not find the language line "Home"
ERROR - 2024-11-02 18:20:59 --> Could not find the language line "Home"
ERROR - 2024-11-02 18:21:10 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 18:21:44 --> Could not find the language line "Home"
ERROR - 2024-11-02 18:22:52 --> Could not find the language line "Home"
ERROR - 2024-11-02 18:24:28 --> Could not find the language line "Home"
ERROR - 2024-11-02 18:24:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 18:24:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 18:25:46 --> Could not find the language line "Home"
ERROR - 2024-11-02 18:25:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-02 18:26:30 --> Could not find the language line "Home"
ERROR - 2024-11-02 18:26:37 --> Could not find the language line "Home"
ERROR - 2024-11-02 18:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 18:32:14 --> Could not find the language line "Other"
ERROR - 2024-11-02 18:46:40 --> Could not find the language line "Home"
ERROR - 2024-11-02 18:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 18:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 18:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 19:02:25 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-02 19:16:42 --> Could not find the language line "Home"
ERROR - 2024-11-02 19:26:10 --> Could not find the language line "Home"
ERROR - 2024-11-02 19:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 19:43:42 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-11-02 19:46:40 --> Could not find the language line "Home"
ERROR - 2024-11-02 19:46:41 --> Could not find the language line "Home"
ERROR - 2024-11-02 20:02:37 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-02 20:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:16:42 --> Could not find the language line "Home"
ERROR - 2024-11-02 20:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:31:40 --> Could not find the language line "Home"
ERROR - 2024-11-02 20:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:37:55 --> Could not find the language line "Home"
ERROR - 2024-11-02 20:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:46:41 --> Could not find the language line "Home"
ERROR - 2024-11-02 20:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 20:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 21:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 21:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 21:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 21:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 21:05:21 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:05:58 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:07:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 21:07:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-02 21:08:07 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:08:11 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:08:15 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:08:24 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:08:41 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:09:09 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 21:09:24 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:09:50 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:10:26 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:10:40 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:10:55 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 21:11:23 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:11:36 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:11:52 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:12:07 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:12:31 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:12:46 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:12:49 --> Could not find the language line "Clothing"
ERROR - 2024-11-02 21:16:06 --> Could not find the language line "Home"
ERROR - 2024-11-02 21:16:42 --> Could not find the language line "Home"
ERROR - 2024-11-02 21:19:28 --> Could not find the language line "Home"
ERROR - 2024-11-02 21:22:10 --> Could not find the language line "Home"
ERROR - 2024-11-02 21:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 21:31:29 --> Could not find the language line "Home"
ERROR - 2024-11-02 21:35:49 --> Could not find the language line "Home"
ERROR - 2024-11-02 21:38:38 --> Could not find the language line "Home"
ERROR - 2024-11-02 21:42:47 --> Could not find the language line "Home"
ERROR - 2024-11-02 21:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 21:46:42 --> Could not find the language line "Home"
ERROR - 2024-11-02 21:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 21:50:37 --> Could not find the language line "Home"
ERROR - 2024-11-02 22:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 22:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 22:16:44 --> Could not find the language line "Home"
ERROR - 2024-11-02 22:20:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-02 22:41:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-02 22:46:43 --> Could not find the language line "Home"
ERROR - 2024-11-02 23:16:20 --> Could not find the language line "Home"
ERROR - 2024-11-02 23:16:31 --> Could not find the language line "Home"
ERROR - 2024-11-02 23:16:45 --> Could not find the language line "Home"
ERROR - 2024-11-02 23:17:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-02 23:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 23:19:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-02 23:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-02 23:46:49 --> Could not find the language line "Home"
ERROR - 2024-11-02 23:57:43 --> Could not find the language line "Clothing"
