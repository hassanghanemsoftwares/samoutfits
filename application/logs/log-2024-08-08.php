<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-08 00:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 00:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 00:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 00:22:40 --> Could not find the language line "Home"
ERROR - 2024-08-08 00:52:38 --> Could not find the language line "Home"
ERROR - 2024-08-08 01:22:40 --> Could not find the language line "Home"
ERROR - 2024-08-08 01:52:39 --> Could not find the language line "Home"
ERROR - 2024-08-08 02:22:40 --> Could not find the language line "Home"
ERROR - 2024-08-08 02:52:41 --> Could not find the language line "Home"
ERROR - 2024-08-08 03:15:16 --> Could not find the language line "Disclaimer"
ERROR - 2024-08-08 03:15:16 --> Could not find the language line "Other"
ERROR - 2024-08-08 03:15:18 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-08 03:15:19 --> Could not find the language line "Other"
ERROR - 2024-08-08 03:15:20 --> Could not find the language line "Socks"
ERROR - 2024-08-08 03:15:20 --> Could not find the language line "Bracelets"
ERROR - 2024-08-08 03:15:27 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 03:15:30 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 03:15:31 --> Could not find the language line "Perfume"
ERROR - 2024-08-08 03:15:35 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 03:15:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-08 03:15:38 --> Could not find the language line "Other"
ERROR - 2024-08-08 03:18:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-08 03:22:41 --> Could not find the language line "Home"
ERROR - 2024-08-08 03:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 03:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 03:23:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 03:23:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 03:23:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 03:23:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 03:23:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 03:23:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 03:23:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 03:23:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 03:23:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 03:23:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 03:23:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 03:23:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 03:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 03:37:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 03:37:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 03:37:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 03:37:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 03:37:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 03:37:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 03:37:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 03:37:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 03:37:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 03:37:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 03:37:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 03:37:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 03:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 03:52:44 --> Could not find the language line "Home"
ERROR - 2024-08-08 03:57:18 --> Could not find the language line "Home"
ERROR - 2024-08-08 03:57:18 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-08-08 04:22:40 --> Could not find the language line "Home"
ERROR - 2024-08-08 04:32:46 --> Could not find the language line "Home"
ERROR - 2024-08-08 04:52:46 --> Could not find the language line "Home"
ERROR - 2024-08-08 05:02:33 --> Could not find the language line "Home"
ERROR - 2024-08-08 05:22:42 --> Could not find the language line "Home"
ERROR - 2024-08-08 05:27:02 --> Could not find the language line "Home"
ERROR - 2024-08-08 05:27:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-08 05:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 05:40:22 --> 404 Page Not Found: Cart/cart
ERROR - 2024-08-08 05:52:42 --> Could not find the language line "Home"
ERROR - 2024-08-08 06:15:17 --> Could not find the language line "Home"
ERROR - 2024-08-08 06:22:42 --> Could not find the language line "Home"
ERROR - 2024-08-08 06:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 06:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 06:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 06:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 06:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 06:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 06:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 06:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 06:52:43 --> Could not find the language line "Home"
ERROR - 2024-08-08 07:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:02:04 --> Could not find the language line "Home"
ERROR - 2024-08-08 07:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:05:23 --> Could not find the language line "Home"
ERROR - 2024-08-08 07:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:06:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:15:11 --> Could not find the language line "Home"
ERROR - 2024-08-08 07:15:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:22:43 --> Could not find the language line "Home"
ERROR - 2024-08-08 07:24:09 --> Could not find the language line "Home"
ERROR - 2024-08-08 07:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:52:43 --> Could not find the language line "Home"
ERROR - 2024-08-08 07:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 07:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:00:18 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 08:00:40 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 08:00:48 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 08:01:05 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 08:01:22 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 08:01:32 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 08:01:40 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 08:01:47 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 08:01:51 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 08:01:57 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 08:02:01 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 08:02:06 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 08:02:08 --> Could not find the language line "Home"
ERROR - 2024-08-08 08:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:22:43 --> Could not find the language line "Home"
ERROR - 2024-08-08 08:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:30:01 --> Could not find the language line "Home"
ERROR - 2024-08-08 08:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 08:45:48 --> Could not find the language line "Home"
ERROR - 2024-08-08 08:45:50 --> 404 Page Not Found: Home/assets
ERROR - 2024-08-08 08:45:50 --> 404 Page Not Found: Home/assets
ERROR - 2024-08-08 08:45:50 --> 404 Page Not Found: Home/assets
ERROR - 2024-08-08 08:45:50 --> 404 Page Not Found: Home/assets
ERROR - 2024-08-08 08:45:50 --> 404 Page Not Found: Home/assets
ERROR - 2024-08-08 08:46:07 --> Could not find the language line "Home"
ERROR - 2024-08-08 08:46:45 --> Could not find the language line "Home"
ERROR - 2024-08-08 08:52:45 --> Could not find the language line "Home"
ERROR - 2024-08-08 08:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 09:02:50 --> Could not find the language line "Home"
ERROR - 2024-08-08 09:11:05 --> Could not find the language line "Home"
ERROR - 2024-08-08 09:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 09:17:38 --> Could not find the language line "Home"
ERROR - 2024-08-08 09:22:45 --> Could not find the language line "Home"
ERROR - 2024-08-08 09:25:28 --> Could not find the language line "Home"
ERROR - 2024-08-08 09:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 09:25:47 --> Could not find the language line "Home"
ERROR - 2024-08-08 09:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 09:29:40 --> Could not find the language line "Home"
ERROR - 2024-08-08 09:34:39 --> Could not find the language line "Home"
ERROR - 2024-08-08 09:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 09:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 09:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 09:41:42 --> Could not find the language line "Home"
ERROR - 2024-08-08 09:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 09:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 09:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 09:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 09:52:45 --> Could not find the language line "Home"
ERROR - 2024-08-08 09:55:42 --> Could not find the language line "Home"
ERROR - 2024-08-08 10:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:07:19 --> Could not find the language line "Home"
ERROR - 2024-08-08 10:07:37 --> Could not find the language line "Other"
ERROR - 2024-08-08 10:08:01 --> Could not find the language line "Home"
ERROR - 2024-08-08 10:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:11:59 --> Could not find the language line "Home"
ERROR - 2024-08-08 10:12:02 --> Could not find the language line "Socks"
ERROR - 2024-08-08 10:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:22:45 --> Could not find the language line "Home"
ERROR - 2024-08-08 10:29:52 --> Could not find the language line "Home"
ERROR - 2024-08-08 10:31:45 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 10:31:52 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 10:32:04 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 10:32:13 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 10:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:34:21 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 10:34:24 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 10:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:34:32 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 10:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:38:19 --> Could not find the language line "Home"
ERROR - 2024-08-08 10:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:41:01 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 10:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:41:23 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 10:41:50 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 10:42:29 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 10:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 10:43:01 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 10:52:45 --> Could not find the language line "Home"
ERROR - 2024-08-08 11:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 11:22:46 --> Could not find the language line "Home"
ERROR - 2024-08-08 11:24:20 --> Could not find the language line "Home"
ERROR - 2024-08-08 11:52:46 --> Could not find the language line "Home"
ERROR - 2024-08-08 12:04:38 --> Could not find the language line "Home"
ERROR - 2024-08-08 12:10:34 --> Could not find the language line "Home"
ERROR - 2024-08-08 12:16:03 --> Could not find the language line "Home"
ERROR - 2024-08-08 12:22:50 --> Could not find the language line "Home"
ERROR - 2024-08-08 12:28:49 --> Could not find the language line "Home"
ERROR - 2024-08-08 12:45:46 --> Could not find the language line "Home"
ERROR - 2024-08-08 12:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 12:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 12:52:47 --> Could not find the language line "Home"
ERROR - 2024-08-08 13:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:07:35 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 13:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:22:47 --> Could not find the language line "Home"
ERROR - 2024-08-08 13:26:12 --> Could not find the language line "Home"
ERROR - 2024-08-08 13:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 13:52:47 --> Could not find the language line "Home"
ERROR - 2024-08-08 13:53:47 --> Could not find the language line "Other"
ERROR - 2024-08-08 14:00:59 --> Could not find the language line "Socks"
ERROR - 2024-08-08 14:06:10 --> Could not find the language line "Home"
ERROR - 2024-08-08 14:06:24 --> Could not find the language line "Home"
ERROR - 2024-08-08 14:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 14:22:47 --> Could not find the language line "Home"
ERROR - 2024-08-08 14:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 14:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 14:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 14:46:04 --> Could not find the language line "Home"
ERROR - 2024-08-08 14:52:49 --> Could not find the language line "Home"
ERROR - 2024-08-08 14:56:54 --> Could not find the language line "Home"
ERROR - 2024-08-08 14:59:31 --> Could not find the language line "Home"
ERROR - 2024-08-08 15:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 15:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 15:21:30 --> Could not find the language line "Home"
ERROR - 2024-08-08 15:21:41 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-08-08 15:22:49 --> Could not find the language line "Home"
ERROR - 2024-08-08 15:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 15:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 15:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 15:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 15:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 15:29:05 --> Could not find the language line "Home"
ERROR - 2024-08-08 15:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 15:31:47 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 15:32:15 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 15:32:35 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 15:32:58 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 15:33:24 --> Could not find the language line "Perfume"
ERROR - 2024-08-08 15:33:56 --> Could not find the language line "Other"
ERROR - 2024-08-08 15:36:08 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 15:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 15:37:36 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 15:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 15:52:49 --> Could not find the language line "Home"
ERROR - 2024-08-08 15:55:35 --> Could not find the language line "Home"
ERROR - 2024-08-08 16:22:49 --> Could not find the language line "Home"
ERROR - 2024-08-08 16:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 16:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 16:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 16:47:26 --> Could not find the language line "Other"
ERROR - 2024-08-08 16:52:49 --> Could not find the language line "Home"
ERROR - 2024-08-08 16:55:24 --> Could not find the language line "Home"
ERROR - 2024-08-08 16:59:28 --> Could not find the language line "Other"
ERROR - 2024-08-08 17:22:50 --> Could not find the language line "Home"
ERROR - 2024-08-08 17:40:40 --> Could not find the language line "Home"
ERROR - 2024-08-08 17:40:47 --> Could not find the language line "Home"
ERROR - 2024-08-08 17:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 17:41:50 --> Could not find the language line "Home"
ERROR - 2024-08-08 17:41:50 --> Could not find the language line "Home"
ERROR - 2024-08-08 17:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 17:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 17:52:50 --> Could not find the language line "Home"
ERROR - 2024-08-08 17:58:48 --> Could not find the language line "Home"
ERROR - 2024-08-08 17:59:05 --> Could not find the language line "Home"
ERROR - 2024-08-08 18:11:31 --> Could not find the language line "Home"
ERROR - 2024-08-08 18:13:13 --> Could not find the language line "Other"
ERROR - 2024-08-08 18:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:22:51 --> Could not find the language line "Home"
ERROR - 2024-08-08 18:24:18 --> Could not find the language line "Home"
ERROR - 2024-08-08 18:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:52:51 --> Could not find the language line "Home"
ERROR - 2024-08-08 18:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:55:10 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:55:27 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:55:47 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:56:08 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:56:14 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:56:15 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:56:15 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:56:51 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:57:07 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:57:31 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:57:55 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:57:59 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:58:03 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:58:17 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:58:42 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:58:42 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:58:48 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:58:53 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:59:04 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:59:06 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:59:17 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:59:21 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 18:59:38 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:59:41 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:59:44 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 18:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 19:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 19:00:19 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 19:00:20 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 19:00:20 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 19:00:20 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 19:07:23 --> Could not find the language line "Home"
ERROR - 2024-08-08 19:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 19:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 19:22:51 --> Could not find the language line "Home"
ERROR - 2024-08-08 19:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 19:27:00 --> Could not find the language line "Home"
ERROR - 2024-08-08 19:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 19:28:22 --> Could not find the language line "Home"
ERROR - 2024-08-08 19:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 19:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 19:34:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 19:34:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 19:34:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 19:34:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 19:34:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 19:34:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 19:34:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-08 19:34:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c868%' OR a.description LIKE '%c868%' OR a.color LIKE '%c868%' OR a.barcode LIKE '%c868%' OR a.category LIKE '%c868%' OR a.sub_category LIKE '%c868%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-08 19:34:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-08 19:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 19:44:37 --> Could not find the language line "Home"
ERROR - 2024-08-08 19:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 19:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 20:08:35 --> Could not find the language line "Home"
ERROR - 2024-08-08 20:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 20:14:38 --> Could not find the language line "Home"
ERROR - 2024-08-08 20:17:42 --> Could not find the language line "Home"
ERROR - 2024-08-08 20:18:03 --> Could not find the language line "Home"
ERROR - 2024-08-08 20:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 20:37:40 --> Could not find the language line "Home"
ERROR - 2024-08-08 20:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 20:44:38 --> Could not find the language line "Home"
ERROR - 2024-08-08 21:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 21:14:42 --> Could not find the language line "Home"
ERROR - 2024-08-08 21:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 21:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 21:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 21:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 21:44:40 --> Could not find the language line "Home"
ERROR - 2024-08-08 21:50:38 --> Could not find the language line "Home"
ERROR - 2024-08-08 21:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 22:14:43 --> Could not find the language line "Home"
ERROR - 2024-08-08 22:22:12 --> Could not find the language line "Other"
ERROR - 2024-08-08 22:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 22:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-08 22:41:13 --> Could not find the language line "Home"
ERROR - 2024-08-08 22:41:23 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 22:41:36 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 22:42:40 --> Could not find the language line "Home"
ERROR - 2024-08-08 22:42:46 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 22:42:57 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 22:43:05 --> Could not find the language line "Home"
ERROR - 2024-08-08 22:43:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-08 22:43:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-08 22:43:43 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 22:44:01 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 22:44:13 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 22:44:47 --> Could not find the language line "Home"
ERROR - 2024-08-08 23:14:41 --> Could not find the language line "Home"
ERROR - 2024-08-08 23:22:12 --> Could not find the language line "Bracelets"
ERROR - 2024-08-08 23:22:17 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-08 23:22:27 --> Could not find the language line "Bracelets"
ERROR - 2024-08-08 23:22:49 --> Could not find the language line "Clothing"
ERROR - 2024-08-08 23:23:02 --> Could not find the language line "Bracelets"
ERROR - 2024-08-08 23:44:41 --> Could not find the language line "Home"
ERROR - 2024-08-08 23:48:36 --> 404 Page Not Found: Assets/css
