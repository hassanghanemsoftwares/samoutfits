<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-02 00:15:14 --> Could not find the language line "Home"
ERROR - 2024-12-02 00:23:05 --> 404 Page Not Found: Products/products
ERROR - 2024-12-02 00:45:22 --> Could not find the language line "Home"
ERROR - 2024-12-02 01:15:10 --> Could not find the language line "Home"
ERROR - 2024-12-02 01:18:14 --> Could not find the language line "Home"
ERROR - 2024-12-02 01:23:17 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-02 01:32:51 --> Could not find the language line "Home"
ERROR - 2024-12-02 01:45:40 --> Could not find the language line "Home"
ERROR - 2024-12-02 01:48:06 --> Could not find the language line "Home"
ERROR - 2024-12-02 01:48:39 --> Could not find the language line "Home"
ERROR - 2024-12-02 01:59:24 --> Could not find the language line "Home"
ERROR - 2024-12-02 02:09:55 --> Could not find the language line "Home"
ERROR - 2024-12-02 02:13:20 --> Could not find the language line "Home"
ERROR - 2024-12-02 02:13:42 --> Could not find the language line "Home"
ERROR - 2024-12-02 02:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 02:15:14 --> Could not find the language line "Home"
ERROR - 2024-12-02 02:18:24 --> Could not find the language line "Home"
ERROR - 2024-12-02 02:22:40 --> Could not find the language line "Home"
ERROR - 2024-12-02 02:45:17 --> Could not find the language line "Home"
ERROR - 2024-12-02 02:50:43 --> Could not find the language line "Home"
ERROR - 2024-12-02 02:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 02:58:52 --> Could not find the language line "Home"
ERROR - 2024-12-02 03:08:52 --> Could not find the language line "Home"
ERROR - 2024-12-02 03:15:14 --> Could not find the language line "Home"
ERROR - 2024-12-02 03:16:54 --> Could not find the language line "Home"
ERROR - 2024-12-02 03:45:52 --> Could not find the language line "Home"
ERROR - 2024-12-02 03:58:45 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 04:03:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-02 04:10:05 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 04:15:16 --> Could not find the language line "Home"
ERROR - 2024-12-02 04:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 04:29:57 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-12-02 04:29:57 --> Could not find the language line "Home"
ERROR - 2024-12-02 04:34:11 --> Could not find the language line "Home"
ERROR - 2024-12-02 04:45:18 --> Could not find the language line "Home"
ERROR - 2024-12-02 05:13:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-02 05:15:13 --> Could not find the language line "Home"
ERROR - 2024-12-02 05:22:42 --> Could not find the language line "Home"
ERROR - 2024-12-02 05:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 05:27:45 --> Could not find the language line "Home"
ERROR - 2024-12-02 05:34:07 --> Could not find the language line "Home"
ERROR - 2024-12-02 05:44:14 --> Could not find the language line "Home"
ERROR - 2024-12-02 05:45:14 --> Could not find the language line "Home"
ERROR - 2024-12-02 06:15:12 --> Could not find the language line "Home"
ERROR - 2024-12-02 06:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 06:30:59 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-02 06:33:02 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-02 06:35:03 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-02 06:35:27 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-02 06:45:16 --> Could not find the language line "Home"
ERROR - 2024-12-02 06:46:59 --> Could not find the language line "Home"
ERROR - 2024-12-02 06:47:16 --> Could not find the language line "Socks"
ERROR - 2024-12-02 06:51:39 --> 404 Page Not Found: Products/products
ERROR - 2024-12-02 06:52:18 --> Could not find the language line "Home"
ERROR - 2024-12-02 07:15:12 --> Could not find the language line "Home"
ERROR - 2024-12-02 07:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 07:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 07:45:13 --> Could not find the language line "Home"
ERROR - 2024-12-02 07:58:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-02 07:59:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-02 08:00:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-02 08:01:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-02 08:15:14 --> Could not find the language line "Home"
ERROR - 2024-12-02 08:45:15 --> Could not find the language line "Home"
ERROR - 2024-12-02 09:15:14 --> Could not find the language line "Home"
ERROR - 2024-12-02 09:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 09:35:50 --> Could not find the language line "Home"
ERROR - 2024-12-02 09:43:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-02 09:45:13 --> Could not find the language line "Home"
ERROR - 2024-12-02 09:56:23 --> Could not find the language line "Home"
ERROR - 2024-12-02 09:56:57 --> Could not find the language line "Home"
ERROR - 2024-12-02 09:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 09:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 10:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 10:04:22 --> Could not find the language line "Home"
ERROR - 2024-12-02 10:04:32 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-02 10:05:03 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-02 10:05:46 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-02 10:05:49 --> Could not find the language line "Home"
ERROR - 2024-12-02 10:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 10:07:00 --> Could not find the language line "Home"
ERROR - 2024-12-02 10:08:55 --> Could not find the language line "Home"
ERROR - 2024-12-02 10:09:18 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-02 10:09:55 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-02 10:10:15 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-02 10:10:21 --> Could not find the language line "Home"
ERROR - 2024-12-02 10:13:06 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 10:13:12 --> Could not find the language line "Home"
ERROR - 2024-12-02 10:13:18 --> Could not find the language line "Perfume"
ERROR - 2024-12-02 10:13:25 --> Could not find the language line "Home"
ERROR - 2024-12-02 10:13:28 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 10:13:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 10:14:23 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 10:14:49 --> Could not find the language line "Home"
ERROR - 2024-12-02 10:14:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-02 10:15:16 --> Could not find the language line "Home"
ERROR - 2024-12-02 10:15:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-02 10:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 10:16:02 --> Could not find the language line "Home"
ERROR - 2024-12-02 10:19:01 --> Could not find the language line "Home"
ERROR - 2024-12-02 10:19:10 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-02 10:35:07 --> Could not find the language line "Home"
ERROR - 2024-12-02 10:45:14 --> Could not find the language line "Home"
ERROR - 2024-12-02 10:57:40 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 10:58:43 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-02 10:58:43 --> Could not find the language line "Home"
ERROR - 2024-12-02 11:01:58 --> Could not find the language line "Home"
ERROR - 2024-12-02 11:11:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 11:12:25 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-02 11:13:37 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-02 11:15:16 --> Could not find the language line "Home"
ERROR - 2024-12-02 11:16:11 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-02 11:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 11:23:27 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-02 11:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 11:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 11:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 11:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 11:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 11:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 11:45:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 11:45:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-02 11:45:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 11:45:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 11:45:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-02 11:45:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 11:45:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 11:45:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-02 11:45:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 11:45:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 11:45:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-02 11:45:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 11:45:20 --> Could not find the language line "Home"
ERROR - 2024-12-02 11:45:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 11:45:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-02 11:45:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 11:45:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 11:45:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 11:45:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-02 11:45:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 11:45:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-02 11:45:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 11:45:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 11:45:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-02 11:45:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 12:02:27 --> Could not find the language line "Home"
ERROR - 2024-12-02 12:15:16 --> Could not find the language line "Home"
ERROR - 2024-12-02 12:21:26 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-02 12:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 12:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 12:45:17 --> Could not find the language line "Home"
ERROR - 2024-12-02 12:45:34 --> Could not find the language line "Home"
ERROR - 2024-12-02 12:47:30 --> Could not find the language line "Home"
ERROR - 2024-12-02 12:51:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-02 12:51:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 100
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-02 12:51:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 13:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 13:15:15 --> Could not find the language line "Home"
ERROR - 2024-12-02 13:41:52 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-02 13:43:04 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-02 13:45:16 --> Could not find the language line "Home"
ERROR - 2024-12-02 13:48:25 --> Could not find the language line "Home"
ERROR - 2024-12-02 14:15:18 --> Could not find the language line "Home"
ERROR - 2024-12-02 14:16:44 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-02 14:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:38:36 --> Could not find the language line "Home"
ERROR - 2024-12-02 14:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:40:13 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 14:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:41:09 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 14:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:42:25 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 14:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:44:29 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 14:44:47 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 14:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:45:17 --> Could not find the language line "Home"
ERROR - 2024-12-02 14:45:20 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 14:45:30 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 14:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 14:46:03 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 14:46:06 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 14:46:09 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 14:46:13 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 15:07:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-02 15:15:17 --> Could not find the language line "Home"
ERROR - 2024-12-02 15:15:26 --> Could not find the language line "Home"
ERROR - 2024-12-02 15:34:35 --> Could not find the language line "Home"
ERROR - 2024-12-02 15:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 15:45:16 --> Could not find the language line "Home"
ERROR - 2024-12-02 16:02:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 16:02:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 16:02:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 16:15:17 --> Could not find the language line "Home"
ERROR - 2024-12-02 16:42:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 16:42:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 16:42:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 16:45:18 --> Could not find the language line "Home"
ERROR - 2024-12-02 16:57:36 --> Could not find the language line "Home"
ERROR - 2024-12-02 16:59:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 16:59:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 16:59:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 17:03:41 --> Severity: Notice --> Undefined index: discount /home/samfit/public_html/application/controllers/Checkout.php 29
ERROR - 2024-12-02 17:03:41 --> Severity: Notice --> Undefined index: coupon_id /home/samfit/public_html/application/controllers/Checkout.php 30
ERROR - 2024-12-02 17:03:41 --> Severity: Notice --> Undefined index: discount_type /home/samfit/public_html/application/controllers/Checkout.php 31
ERROR - 2024-12-02 17:03:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2024-12-02 17:07:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 17:07:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 17:07:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 17:12:36 --> Could not find the language line "Home"
ERROR - 2024-12-02 17:15:18 --> Could not find the language line "Home"
ERROR - 2024-12-02 17:17:38 --> Could not find the language line "Home"
ERROR - 2024-12-02 17:24:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 17:24:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 17:24:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 17:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 17:36:07 --> Could not find the language line "Home"
ERROR - 2024-12-02 17:41:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 17:41:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 17:41:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 17:45:19 --> Could not find the language line "Home"
ERROR - 2024-12-02 17:55:53 --> Could not find the language line "Home"
ERROR - 2024-12-02 17:56:56 --> Could not find the language line "Home"
ERROR - 2024-12-02 17:58:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 17:58:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 17:58:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 18:14:07 --> Could not find the language line "Home"
ERROR - 2024-12-02 18:15:20 --> Could not find the language line "Home"
ERROR - 2024-12-02 18:19:12 --> Could not find the language line "Home"
ERROR - 2024-12-02 18:23:55 --> Could not find the language line "Home"
ERROR - 2024-12-02 18:23:56 --> Could not find the language line "Home"
ERROR - 2024-12-02 18:32:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 18:32:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 18:32:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 18:45:18 --> Could not find the language line "Home"
ERROR - 2024-12-02 18:57:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 18:57:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 18:57:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 18:59:48 --> Could not find the language line "Home"
ERROR - 2024-12-02 19:01:13 --> Could not find the language line "Home"
ERROR - 2024-12-02 19:02:23 --> Could not find the language line "Home"
ERROR - 2024-12-02 19:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 19:03:00 --> Could not find the language line "Home"
ERROR - 2024-12-02 19:05:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-02 19:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 19:05:21 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-02 19:05:33 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 19:05:51 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 19:06:00 --> Could not find the language line "Home"
ERROR - 2024-12-02 19:06:14 --> Could not find the language line "Clothing"
ERROR - 2024-12-02 19:06:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 19:06:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 19:06:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 19:06:25 --> Could not find the language line "Home"
ERROR - 2024-12-02 19:06:31 --> Could not find the language line "Other"
ERROR - 2024-12-02 19:06:43 --> Could not find the language line "Other"
ERROR - 2024-12-02 19:06:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-02 19:07:13 --> Could not find the language line "Socks"
ERROR - 2024-12-02 19:07:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-02 19:07:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-02 19:13:55 --> Could not find the language line "Home"
ERROR - 2024-12-02 19:14:04 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-02 19:14:28 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-02 19:14:52 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-02 19:15:16 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-02 19:15:20 --> Could not find the language line "Home"
ERROR - 2024-12-02 19:23:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 19:23:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 19:23:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 19:31:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 19:31:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 19:31:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 19:45:19 --> Could not find the language line "Home"
ERROR - 2024-12-02 19:48:29 --> Could not find the language line "Home"
ERROR - 2024-12-02 19:48:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 19:48:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 19:48:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 20:13:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-02 20:14:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 20:14:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 20:14:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 20:15:22 --> Could not find the language line "Home"
ERROR - 2024-12-02 20:22:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 20:22:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 20:22:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 20:31:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 20:31:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 20:31:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 20:35:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-02 20:35:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-02 20:36:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-02 20:37:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-02 20:45:22 --> Could not find the language line "Home"
ERROR - 2024-12-02 21:04:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 21:04:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 21:04:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 21:15:20 --> Could not find the language line "Home"
ERROR - 2024-12-02 21:26:33 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-02 21:27:43 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-02 21:30:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 21:30:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 21:30:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 21:32:47 --> Could not find the language line "Home"
ERROR - 2024-12-02 21:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:34:39 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-02 21:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:39:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-02 21:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 21:45:22 --> Could not find the language line "Home"
ERROR - 2024-12-02 21:45:49 --> Could not find the language line "Home"
ERROR - 2024-12-02 21:48:31 --> Could not find the language line "Home"
ERROR - 2024-12-02 21:50:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-02 21:51:21 --> Could not find the language line "Home"
ERROR - 2024-12-02 22:11:41 --> Could not find the language line "Home"
ERROR - 2024-12-02 22:15:22 --> Could not find the language line "Home"
ERROR - 2024-12-02 22:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 22:28:28 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-02 22:29:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 22:29:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 22:29:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 22:38:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 22:38:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 22:38:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 22:45:22 --> Could not find the language line "Home"
ERROR - 2024-12-02 22:46:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 22:46:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 22:46:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 22:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-02 23:10:14 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-02 23:10:14 --> Could not find the language line "Home"
ERROR - 2024-12-02 23:10:14 --> Could not find the language line "Home"
ERROR - 2024-12-02 23:12:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-02 23:12:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-02 23:12:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-02 23:15:24 --> Could not find the language line "Home"
ERROR - 2024-12-02 23:31:04 --> Could not find the language line "Home"
ERROR - 2024-12-02 23:45:30 --> Could not find the language line "Home"
ERROR - 2024-12-02 23:50:21 --> 404 Page Not Found: Assets/uploads
