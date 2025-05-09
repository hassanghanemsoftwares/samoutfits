<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-09 00:02:48 --> Could not find the language line "Home"
ERROR - 2024-08-09 00:14:43 --> Could not find the language line "Home"
ERROR - 2024-08-09 00:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 00:44:44 --> Could not find the language line "Home"
ERROR - 2024-08-09 00:55:37 --> Could not find the language line "Home"
ERROR - 2024-08-09 01:09:38 --> Could not find the language line "Home"
ERROR - 2024-08-09 01:14:43 --> Could not find the language line "Home"
ERROR - 2024-08-09 01:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 01:23:17 --> Could not find the language line "Home"
ERROR - 2024-08-09 01:24:31 --> Could not find the language line "Home"
ERROR - 2024-08-09 01:25:45 --> Could not find the language line "Home"
ERROR - 2024-08-09 01:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 01:26:13 --> Could not find the language line "Home"
ERROR - 2024-08-09 01:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 01:26:58 --> Could not find the language line "Home"
ERROR - 2024-08-09 01:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 01:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 01:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 01:44:44 --> Could not find the language line "Home"
ERROR - 2024-08-09 02:00:10 --> Could not find the language line "Other"
ERROR - 2024-08-09 02:05:10 --> Could not find the language line "Socks"
ERROR - 2024-08-09 02:14:43 --> Could not find the language line "Home"
ERROR - 2024-08-09 02:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 02:44:43 --> Could not find the language line "Home"
ERROR - 2024-08-09 03:14:43 --> Could not find the language line "Home"
ERROR - 2024-08-09 03:44:44 --> Could not find the language line "Home"
ERROR - 2024-08-09 04:06:44 --> Could not find the language line "Home"
ERROR - 2024-08-09 04:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 04:14:44 --> Could not find the language line "Home"
ERROR - 2024-08-09 04:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 04:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 04:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 04:44:57 --> Could not find the language line "Home"
ERROR - 2024-08-09 04:45:37 --> Could not find the language line "Clothing"
ERROR - 2024-08-09 04:45:38 --> Could not find the language line "Perfume"
ERROR - 2024-08-09 04:45:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-09 04:45:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-09 04:45:43 --> Could not find the language line "Clothing"
ERROR - 2024-08-09 04:56:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-09 04:57:48 --> Could not find the language line "Home"
ERROR - 2024-08-09 05:09:03 --> Could not find the language line "Socks"
ERROR - 2024-08-09 05:10:51 --> Could not find the language line "Home"
ERROR - 2024-08-09 05:14:46 --> Could not find the language line "Home"
ERROR - 2024-08-09 05:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 05:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 05:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 05:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 05:44:45 --> Could not find the language line "Home"
ERROR - 2024-08-09 05:52:09 --> 404 Page Not Found: Cart/cart
ERROR - 2024-08-09 06:02:15 --> Could not find the language line "Home"
ERROR - 2024-08-09 06:14:46 --> Could not find the language line "Home"
ERROR - 2024-08-09 06:22:55 --> Could not find the language line "Home"
ERROR - 2024-08-09 06:25:34 --> Could not find the language line "Other"
ERROR - 2024-08-09 06:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 06:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 06:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 06:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 06:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 06:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 06:44:47 --> Could not find the language line "Home"
ERROR - 2024-08-09 06:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 06:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 06:58:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-09 07:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 07:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-09 07:09:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C892%' OR a.description LIKE '%C892%' OR a.color LIKE '%C892%' OR a.barcode LIKE '%C892%' OR a.category LIKE '%C892%' OR a.sub_category LIKE '%C892%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-09 07:09:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C892%' OR a.description LIKE '%C892%' OR a.color LIKE '%C892%' OR a.barcode LIKE '%C892%' OR a.category LIKE '%C892%' OR a.sub_category LIKE '%C892%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-09 07:09:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C892%' OR a.description LIKE '%C892%' OR a.color LIKE '%C892%' OR a.barcode LIKE '%C892%' OR a.category LIKE '%C892%' OR a.sub_category LIKE '%C892%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-09 07:09:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C892%' OR a.description LIKE '%C892%' OR a.color LIKE '%C892%' OR a.barcode LIKE '%C892%' OR a.category LIKE '%C892%' OR a.sub_category LIKE '%C892%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-09 07:09:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C892%' OR a.description LIKE '%C892%' OR a.color LIKE '%C892%' OR a.barcode LIKE '%C892%' OR a.category LIKE '%C892%' OR a.sub_category LIKE '%C892%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-09 07:09:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C892%' OR a.description LIKE '%C892%' OR a.color LIKE '%C892%' OR a.barcode LIKE '%C892%' OR a.category LIKE '%C892%' OR a.sub_category LIKE '%C892%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-09 07:09:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C892%' OR a.description LIKE '%C892%' OR a.color LIKE '%C892%' OR a.barcode LIKE '%C892%' OR a.category LIKE '%C892%' OR a.sub_category LIKE '%C892%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-09 07:09:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C892%' OR a.description LIKE '%C892%' OR a.color LIKE '%C892%' OR a.barcode LIKE '%C892%' OR a.category LIKE '%C892%' OR a.sub_category LIKE '%C892%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-09 07:09:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-09 07:14:47 --> Could not find the language line "Home"
ERROR - 2024-08-09 07:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 07:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 07:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 07:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 07:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 07:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 07:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 07:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 07:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 07:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 07:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 07:44:47 --> Could not find the language line "Home"
ERROR - 2024-08-09 07:51:04 --> Could not find the language line "Home"
ERROR - 2024-08-09 07:51:39 --> Could not find the language line "Home"
ERROR - 2024-08-09 07:58:30 --> Could not find the language line "Home"
ERROR - 2024-08-09 08:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 08:08:38 --> Could not find the language line "Home"
ERROR - 2024-08-09 08:14:47 --> Could not find the language line "Home"
ERROR - 2024-08-09 08:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 08:19:37 --> Could not find the language line "Home"
ERROR - 2024-08-09 08:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 08:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 08:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 08:44:48 --> Could not find the language line "Home"
ERROR - 2024-08-09 08:51:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-09 09:03:41 --> Could not find the language line "Home"
ERROR - 2024-08-09 09:08:58 --> Could not find the language line "Other"
ERROR - 2024-08-09 09:09:48 --> Could not find the language line "Socks"
ERROR - 2024-08-09 09:14:48 --> Could not find the language line "Home"
ERROR - 2024-08-09 09:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 09:44:49 --> Could not find the language line "Home"
ERROR - 2024-08-09 09:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 09:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 09:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 09:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 09:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 10:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 10:14:48 --> Could not find the language line "Home"
ERROR - 2024-08-09 10:24:57 --> Could not find the language line "Home"
ERROR - 2024-08-09 10:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 10:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 10:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 10:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 10:44:50 --> Could not find the language line "Home"
ERROR - 2024-08-09 10:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 10:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 10:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 11:00:21 --> Could not find the language line "Home"
ERROR - 2024-08-09 11:00:33 --> Could not find the language line "Home"
ERROR - 2024-08-09 11:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 11:14:49 --> Could not find the language line "Home"
ERROR - 2024-08-09 11:22:02 --> Could not find the language line "Home"
ERROR - 2024-08-09 11:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 11:44:28 --> Could not find the language line "Clothing"
ERROR - 2024-08-09 11:44:49 --> Could not find the language line "Home"
ERROR - 2024-08-09 11:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 11:58:02 --> Could not find the language line "Clothing"
ERROR - 2024-08-09 12:02:53 --> Could not find the language line "Home"
ERROR - 2024-08-09 12:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 12:14:50 --> Could not find the language line "Home"
ERROR - 2024-08-09 12:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 12:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 12:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 12:26:50 --> Could not find the language line "Home"
ERROR - 2024-08-09 12:26:50 --> Could not find the language line "Home"
ERROR - 2024-08-09 12:37:33 --> Could not find the language line "Home"
ERROR - 2024-08-09 12:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 12:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 12:41:11 --> Could not find the language line "Home"
ERROR - 2024-08-09 12:44:50 --> Could not find the language line "Home"
ERROR - 2024-08-09 12:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 12:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 12:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 12:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 12:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 12:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 13:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 13:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 13:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 13:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 13:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 13:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 13:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 13:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 13:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 13:14:17 --> Could not find the language line "Home"
ERROR - 2024-08-09 13:14:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-09 13:14:51 --> Could not find the language line "Home"
ERROR - 2024-08-09 13:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 13:28:39 --> Could not find the language line "Socks"
ERROR - 2024-08-09 13:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 13:30:54 --> Could not find the language line "Other"
ERROR - 2024-08-09 13:44:51 --> Could not find the language line "Home"
ERROR - 2024-08-09 13:56:00 --> Could not find the language line "Home"
ERROR - 2024-08-09 13:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 14:02:53 --> Could not find the language line "Home"
ERROR - 2024-08-09 14:03:38 --> Could not find the language line "Home"
ERROR - 2024-08-09 14:03:41 --> Could not find the language line "Home"
ERROR - 2024-08-09 14:04:52 --> Could not find the language line "Home"
ERROR - 2024-08-09 14:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 14:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 14:08:16 --> Could not find the language line "Home"
ERROR - 2024-08-09 14:14:51 --> Could not find the language line "Home"
ERROR - 2024-08-09 14:44:52 --> Could not find the language line "Home"
ERROR - 2024-08-09 15:13:44 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-08-09 15:14:52 --> Could not find the language line "Home"
ERROR - 2024-08-09 15:31:46 --> Could not find the language line "Home"
ERROR - 2024-08-09 15:31:46 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-08-09 15:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 15:44:53 --> Could not find the language line "Home"
ERROR - 2024-08-09 16:14:53 --> Could not find the language line "Home"
ERROR - 2024-08-09 16:22:53 --> Could not find the language line "Home"
ERROR - 2024-08-09 16:32:59 --> Could not find the language line "Home"
ERROR - 2024-08-09 16:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 16:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 16:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 16:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 16:35:23 --> Could not find the language line "Home"
ERROR - 2024-08-09 16:35:23 --> Could not find the language line "Home"
ERROR - 2024-08-09 16:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 16:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 16:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 16:44:55 --> Could not find the language line "Home"
ERROR - 2024-08-09 16:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 17:04:15 --> Could not find the language line "Home"
ERROR - 2024-08-09 17:14:53 --> Could not find the language line "Home"
ERROR - 2024-08-09 17:44:54 --> Could not find the language line "Home"
ERROR - 2024-08-09 17:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 17:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 17:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 18:06:09 --> Could not find the language line "Perfume"
ERROR - 2024-08-09 18:14:54 --> Could not find the language line "Home"
ERROR - 2024-08-09 18:25:12 --> Could not find the language line "Other"
ERROR - 2024-08-09 18:44:55 --> Could not find the language line "Home"
ERROR - 2024-08-09 19:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 19:14:55 --> Could not find the language line "Home"
ERROR - 2024-08-09 19:19:37 --> Could not find the language line "Home"
ERROR - 2024-08-09 19:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 19:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 19:44:57 --> Could not find the language line "Home"
ERROR - 2024-08-09 19:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 19:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 19:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 20:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 20:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 20:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 20:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 20:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 20:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 20:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 20:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 20:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 20:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 20:14:56 --> Could not find the language line "Home"
ERROR - 2024-08-09 20:31:59 --> Could not find the language line "Home"
ERROR - 2024-08-09 20:32:21 --> Could not find the language line "Home"
ERROR - 2024-08-09 20:32:23 --> Could not find the language line "Home"
ERROR - 2024-08-09 20:32:24 --> Could not find the language line "Home"
ERROR - 2024-08-09 20:32:25 --> Could not find the language line "Home"
ERROR - 2024-08-09 20:44:57 --> Could not find the language line "Home"
ERROR - 2024-08-09 20:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 20:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 21:14:57 --> Could not find the language line "Home"
ERROR - 2024-08-09 21:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-09 21:22:18 --> Could not find the language line "Home"
ERROR - 2024-08-09 21:22:19 --> Could not find the language line "Home"
ERROR - 2024-08-09 21:38:53 --> Could not find the language line "Home"
ERROR - 2024-08-09 21:44:57 --> Could not find the language line "Home"
ERROR - 2024-08-09 22:15:01 --> Could not find the language line "Home"
ERROR - 2024-08-09 22:44:59 --> Could not find the language line "Home"
ERROR - 2024-08-09 23:14:59 --> Could not find the language line "Home"
ERROR - 2024-08-09 23:38:19 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-08-09 23:44:59 --> Could not find the language line "Home"
