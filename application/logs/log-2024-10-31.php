<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-31 00:02:04 --> Could not find the language line "Home"
ERROR - 2024-10-31 00:13:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 00:16:03 --> Could not find the language line "Home"
ERROR - 2024-10-31 00:32:55 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 00:35:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 00:40:03 --> Could not find the language line "Home"
ERROR - 2024-10-31 00:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 00:46:07 --> Could not find the language line "Home"
ERROR - 2024-10-31 00:54:13 --> Could not find the language line "Home"
ERROR - 2024-10-31 00:57:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 01:01:16 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-31 01:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 01:16:07 --> Could not find the language line "Home"
ERROR - 2024-10-31 01:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 01:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 01:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 01:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 01:46:05 --> Could not find the language line "Home"
ERROR - 2024-10-31 02:16:05 --> Could not find the language line "Home"
ERROR - 2024-10-31 02:25:54 --> Could not find the language line "Other"
ERROR - 2024-10-31 02:27:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-31 02:46:07 --> Could not find the language line "Home"
ERROR - 2024-10-31 02:48:31 --> Could not find the language line "Home"
ERROR - 2024-10-31 03:00:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 03:16:15 --> Could not find the language line "Home"
ERROR - 2024-10-31 03:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 03:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 03:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 03:42:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-31 03:46:05 --> Could not find the language line "Home"
ERROR - 2024-10-31 04:12:28 --> Could not find the language line "Home"
ERROR - 2024-10-31 04:13:48 --> Could not find the language line "Home"
ERROR - 2024-10-31 04:13:51 --> Could not find the language line "Home"
ERROR - 2024-10-31 04:16:05 --> Could not find the language line "Home"
ERROR - 2024-10-31 04:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 04:46:09 --> Could not find the language line "Home"
ERROR - 2024-10-31 04:58:47 --> Could not find the language line "Home"
ERROR - 2024-10-31 05:04:57 --> Could not find the language line "Home"
ERROR - 2024-10-31 05:08:01 --> Could not find the language line "Home"
ERROR - 2024-10-31 05:08:57 --> Could not find the language line "Home"
ERROR - 2024-10-31 05:16:08 --> Could not find the language line "Home"
ERROR - 2024-10-31 05:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 05:38:07 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-31 05:38:07 --> Could not find the language line "Home"
ERROR - 2024-10-31 05:43:00 --> Could not find the language line "Other"
ERROR - 2024-10-31 05:46:05 --> Could not find the language line "Home"
ERROR - 2024-10-31 05:46:18 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-31 06:01:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 06:01:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 06:01:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 06:01:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 06:01:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 06:01:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 06:01:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 06:01:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 06:01:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 06:01:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 06:01:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 06:01:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 06:07:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 06:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 06:16:06 --> Could not find the language line "Home"
ERROR - 2024-10-31 06:31:22 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-31 06:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 06:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 06:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 06:46:06 --> Could not find the language line "Home"
ERROR - 2024-10-31 06:51:31 --> Could not find the language line "Home"
ERROR - 2024-10-31 06:51:34 --> Could not find the language line "Home"
ERROR - 2024-10-31 06:51:36 --> Could not find the language line "Home"
ERROR - 2024-10-31 07:00:20 --> Could not find the language line "Home"
ERROR - 2024-10-31 07:10:12 --> Could not find the language line "Home"
ERROR - 2024-10-31 07:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 07:10:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 07:16:06 --> Could not find the language line "Home"
ERROR - 2024-10-31 07:23:41 --> Could not find the language line "Home"
ERROR - 2024-10-31 07:23:44 --> Could not find the language line "Home"
ERROR - 2024-10-31 07:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 07:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 07:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 07:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 07:33:59 --> Could not find the language line "Home"
ERROR - 2024-10-31 07:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 07:46:06 --> Could not find the language line "Home"
ERROR - 2024-10-31 07:47:14 --> Could not find the language line "Home"
ERROR - 2024-10-31 07:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 07:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 07:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 07:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 07:50:52 --> Could not find the language line "Home"
ERROR - 2024-10-31 07:54:40 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 07:55:03 --> Could not find the language line "Other"
ERROR - 2024-10-31 07:55:21 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-31 07:56:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 07:56:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 07:56:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t174%' OR a.description LIKE '%t174%' OR a.color LIKE '%t174%' OR a.barcode LIKE '%t174%' OR a.category LIKE '%t174%' OR a.sub_category LIKE '%t174%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 07:56:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 07:56:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t174%' OR a.description LIKE '%t174%' OR a.color LIKE '%t174%' OR a.barcode LIKE '%t174%' OR a.category LIKE '%t174%' OR a.sub_category LIKE '%t174%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 07:56:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 07:56:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 07:56:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 07:56:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t174%' OR a.description LIKE '%t174%' OR a.color LIKE '%t174%' OR a.barcode LIKE '%t174%' OR a.category LIKE '%t174%' OR a.sub_category LIKE '%t174%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 07:56:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 07:56:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t174%' OR a.description LIKE '%t174%' OR a.color LIKE '%t174%' OR a.barcode LIKE '%t174%' OR a.category LIKE '%t174%' OR a.sub_category LIKE '%t174%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 07:56:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 07:56:45 --> Could not find the language line "Home"
ERROR - 2024-10-31 07:56:52 --> Could not find the language line "Home"
ERROR - 2024-10-31 07:56:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 07:56:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 07:56:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h462%' OR a.description LIKE '%h462%' OR a.color LIKE '%h462%' OR a.barcode LIKE '%h462%' OR a.category LIKE '%h462%' OR a.sub_category LIKE '%h462%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 07:56:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 07:56:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h462%' OR a.description LIKE '%h462%' OR a.color LIKE '%h462%' OR a.barcode LIKE '%h462%' OR a.category LIKE '%h462%' OR a.sub_category LIKE '%h462%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 07:56:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 07:56:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 07:56:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h462%' OR a.description LIKE '%h462%' OR a.color LIKE '%h462%' OR a.barcode LIKE '%h462%' OR a.category LIKE '%h462%' OR a.sub_category LIKE '%h462%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 07:56:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 07:56:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 07:56:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h462%' OR a.description LIKE '%h462%' OR a.color LIKE '%h462%' OR a.barcode LIKE '%h462%' OR a.category LIKE '%h462%' OR a.sub_category LIKE '%h462%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 07:56:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 07:57:03 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 07:57:16 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 07:59:04 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 08:01:17 --> Could not find the language line "Home"
ERROR - 2024-10-31 08:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:08:43 --> Could not find the language line "Home"
ERROR - 2024-10-31 08:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:15:17 --> Could not find the language line "Home"
ERROR - 2024-10-31 08:16:06 --> Could not find the language line "Home"
ERROR - 2024-10-31 08:16:09 --> Could not find the language line "Home"
ERROR - 2024-10-31 08:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:23:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 08:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h462%' OR a.description LIKE '%h462%' OR a.color LIKE '%h462%' OR a.barcode LIKE '%h462%' OR a.category LIKE '%h462%' OR a.sub_category LIKE '%h462%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 08:23:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 08:23:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 08:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h462%' OR a.description LIKE '%h462%' OR a.color LIKE '%h462%' OR a.barcode LIKE '%h462%' OR a.category LIKE '%h462%' OR a.sub_category LIKE '%h462%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 08:23:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 08:23:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 08:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h462%' OR a.description LIKE '%h462%' OR a.color LIKE '%h462%' OR a.barcode LIKE '%h462%' OR a.category LIKE '%h462%' OR a.sub_category LIKE '%h462%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 08:23:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 08:23:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 08:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h462%' OR a.description LIKE '%h462%' OR a.color LIKE '%h462%' OR a.barcode LIKE '%h462%' OR a.category LIKE '%h462%' OR a.sub_category LIKE '%h462%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 08:23:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 08:24:34 --> Could not find the language line "Home"
ERROR - 2024-10-31 08:24:45 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 08:25:02 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 08:25:18 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 08:25:29 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 08:25:45 --> Could not find the language line "Home"
ERROR - 2024-10-31 08:25:47 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 08:26:00 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 08:26:21 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 08:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:26:34 --> Could not find the language line "Home"
ERROR - 2024-10-31 08:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:46:07 --> Could not find the language line "Home"
ERROR - 2024-10-31 08:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:47:16 --> Could not find the language line "Home"
ERROR - 2024-10-31 08:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:50:54 --> Could not find the language line "Home"
ERROR - 2024-10-31 08:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 08:52:11 --> Could not find the language line "Home"
ERROR - 2024-10-31 08:56:10 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-10-31 08:57:41 --> Could not find the language line "Home"
ERROR - 2024-10-31 08:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:03:07 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:14:29 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:16:08 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:17:01 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:17:04 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2024-10-31 09:21:17 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:21:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-31 09:21:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-31 09:22:05 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:22:46 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:31:29 --> Could not find the language line "Disclaimer"
ERROR - 2024-10-31 09:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:37:12 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:39:49 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:40:45 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:42:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-31 09:42:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-31 09:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:42:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-31 09:42:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-31 09:42:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-31 09:42:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-31 09:42:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-31 09:42:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-31 09:42:45 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:42:55 --> Could not find the language line "Socks"
ERROR - 2024-10-31 09:42:58 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:42:59 --> Could not find the language line "Other"
ERROR - 2024-10-31 09:43:02 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 09:43:11 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:43:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-31 09:43:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-31 09:46:08 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:46:24 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:49:24 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-10-31 09:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 09:59:40 --> Could not find the language line "Home"
ERROR - 2024-10-31 09:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 10:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 10:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 10:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 10:12:34 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2024-10-31 10:13:14 --> Could not find the language line "Home"
ERROR - 2024-10-31 10:16:08 --> Could not find the language line "Home"
ERROR - 2024-10-31 10:17:15 --> Could not find the language line "Home"
ERROR - 2024-10-31 10:18:55 --> Could not find the language line "Home"
ERROR - 2024-10-31 10:19:15 --> Could not find the language line "Home"
ERROR - 2024-10-31 10:20:26 --> Could not find the language line "Home"
ERROR - 2024-10-31 10:23:23 --> Could not find the language line "Home"
ERROR - 2024-10-31 10:41:06 --> Could not find the language line "Home"
ERROR - 2024-10-31 10:41:41 --> Could not find the language line "Home"
ERROR - 2024-10-31 10:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 10:42:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 10:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 10:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 10:46:09 --> Could not find the language line "Home"
ERROR - 2024-10-31 10:55:39 --> Could not find the language line "Home"
ERROR - 2024-10-31 10:56:44 --> Could not find the language line "Home"
ERROR - 2024-10-31 10:56:51 --> Could not find the language line "Home"
ERROR - 2024-10-31 10:57:38 --> Could not find the language line "Home"
ERROR - 2024-10-31 10:58:35 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:02:05 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:02:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-31 11:02:40 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-31 11:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:02:44 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-31 11:02:45 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-31 11:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:03:01 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-31 11:03:02 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:03:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 11:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:03:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 11:03:19 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:03:26 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:04:15 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:04:42 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:08:47 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:08:49 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:12:14 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:14:25 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:16:08 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:16:55 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:24:43 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:35:49 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:40:32 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:46:09 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:49:47 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 11:54:06 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:54:07 --> Could not find the language line "Home"
ERROR - 2024-10-31 11:54:08 --> Could not find the language line "Home"
ERROR - 2024-10-31 12:04:40 --> Could not find the language line "Home"
ERROR - 2024-10-31 12:16:09 --> Could not find the language line "Home"
ERROR - 2024-10-31 12:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 12:24:34 --> Could not find the language line "Other"
ERROR - 2024-10-31 12:25:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 12:26:17 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 12:26:40 --> Could not find the language line "Home"
ERROR - 2024-10-31 12:30:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 12:31:04 --> Could not find the language line "Home"
ERROR - 2024-10-31 12:33:03 --> Could not find the language line "Other"
ERROR - 2024-10-31 12:33:09 --> Could not find the language line "Other"
ERROR - 2024-10-31 12:33:45 --> Could not find the language line "Other"
ERROR - 2024-10-31 12:34:26 --> Could not find the language line "Other"
ERROR - 2024-10-31 12:34:47 --> Could not find the language line "Home"
ERROR - 2024-10-31 12:36:14 --> Could not find the language line "Socks"
ERROR - 2024-10-31 12:36:18 --> Could not find the language line "Socks"
ERROR - 2024-10-31 12:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 12:37:04 --> Could not find the language line "Socks"
ERROR - 2024-10-31 12:38:11 --> Could not find the language line "Home"
ERROR - 2024-10-31 12:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 12:38:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 12:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 12:39:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 12:39:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 12:40:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 12:40:35 --> Could not find the language line "Home"
ERROR - 2024-10-31 12:46:04 --> Could not find the language line "Home"
ERROR - 2024-10-31 12:46:05 --> Could not find the language line "Home"
ERROR - 2024-10-31 12:46:09 --> Could not find the language line "Home"
ERROR - 2024-10-31 12:51:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-31 12:51:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-10-31 12:51:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 12:56:14 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-31 12:57:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-31 12:57:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-31 12:57:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 13:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 13:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 13:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 13:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 13:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 13:16:10 --> Could not find the language line "Home"
ERROR - 2024-10-31 13:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 13:19:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 13:20:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 13:21:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 13:21:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 13:22:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 13:22:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-31 13:22:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 13:22:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-31 13:22:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 13:22:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 13:22:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 13:22:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 13:22:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 13:28:36 --> Could not find the language line "Home"
ERROR - 2024-10-31 13:29:33 --> Could not find the language line "Home"
ERROR - 2024-10-31 13:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 13:36:06 --> Could not find the language line "Home"
ERROR - 2024-10-31 13:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 13:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 13:43:09 --> Could not find the language line "Home"
ERROR - 2024-10-31 13:45:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 13:45:11 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 13:45:12 --> Could not find the language line "Other"
ERROR - 2024-10-31 13:45:12 --> Could not find the language line "Other"
ERROR - 2024-10-31 13:45:14 --> Could not find the language line "Other"
ERROR - 2024-10-31 13:45:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 13:45:19 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 13:46:10 --> Could not find the language line "Home"
ERROR - 2024-10-31 14:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 14:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 14:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 14:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 14:14:33 --> Could not find the language line "Home"
ERROR - 2024-10-31 14:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 14:16:10 --> Could not find the language line "Home"
ERROR - 2024-10-31 14:34:37 --> Could not find the language line "products"
ERROR - 2024-10-31 14:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 14:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 14:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 14:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 14:46:11 --> Could not find the language line "Home"
ERROR - 2024-10-31 14:53:12 --> Could not find the language line "Home"
ERROR - 2024-10-31 14:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 15:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 15:15:13 --> Could not find the language line "Home"
ERROR - 2024-10-31 15:16:11 --> Could not find the language line "Home"
ERROR - 2024-10-31 15:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 15:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 15:17:56 --> Could not find the language line "Home"
ERROR - 2024-10-31 15:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 15:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 15:21:33 --> Could not find the language line "Home"
ERROR - 2024-10-31 15:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 15:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 15:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 15:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 15:46:11 --> Could not find the language line "Home"
ERROR - 2024-10-31 15:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 15:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 15:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 15:56:24 --> Could not find the language line "Home"
ERROR - 2024-10-31 15:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 16:00:15 --> Could not find the language line "Home"
ERROR - 2024-10-31 16:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 16:02:06 --> Could not find the language line "Home"
ERROR - 2024-10-31 16:03:58 --> Could not find the language line "Home"
ERROR - 2024-10-31 16:05:12 --> Could not find the language line "Home"
ERROR - 2024-10-31 16:09:59 --> Could not find the language line "Home"
ERROR - 2024-10-31 16:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 16:15:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 16:15:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 16:15:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 16:15:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 16:15:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 16:15:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 16:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 16:16:11 --> Could not find the language line "Home"
ERROR - 2024-10-31 16:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 16:17:06 --> Could not find the language line "Home"
ERROR - 2024-10-31 16:33:06 --> Could not find the language line "Home"
ERROR - 2024-10-31 16:39:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 16:46:11 --> Could not find the language line "Home"
ERROR - 2024-10-31 16:48:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-31 16:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 16:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 16:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 16:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:04:28 --> Could not find the language line "Home"
ERROR - 2024-10-31 17:04:29 --> Could not find the language line "Home"
ERROR - 2024-10-31 17:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:05:41 --> Could not find the language line "Other"
ERROR - 2024-10-31 17:05:47 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 17:05:48 --> Could not find the language line "Perfume"
ERROR - 2024-10-31 17:05:50 --> Could not find the language line "Other"
ERROR - 2024-10-31 17:06:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-31 17:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:09:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-31 17:09:59 --> Could not find the language line "Home"
ERROR - 2024-10-31 17:10:29 --> Could not find the language line "Home"
ERROR - 2024-10-31 17:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:12:52 --> Could not find the language line "Home"
ERROR - 2024-10-31 17:16:12 --> Could not find the language line "Home"
ERROR - 2024-10-31 17:16:31 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-31 17:17:59 --> Could not find the language line "Home"
ERROR - 2024-10-31 17:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:29:04 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-10-31 17:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 17:41:33 --> Could not find the language line "Home"
ERROR - 2024-10-31 17:41:47 --> Could not find the language line "Home"
ERROR - 2024-10-31 17:41:48 --> Could not find the language line "Home"
ERROR - 2024-10-31 17:46:12 --> Could not find the language line "Home"
ERROR - 2024-10-31 17:55:55 --> Could not find the language line "Home"
ERROR - 2024-10-31 17:59:54 --> Could not find the language line "Home"
ERROR - 2024-10-31 18:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 18:16:12 --> Could not find the language line "Home"
ERROR - 2024-10-31 18:40:37 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 18:46:12 --> Could not find the language line "Home"
ERROR - 2024-10-31 18:50:25 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-31 18:50:25 --> Could not find the language line "Home"
ERROR - 2024-10-31 18:51:11 --> Could not find the language line "Home"
ERROR - 2024-10-31 18:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 18:57:09 --> Could not find the language line "Home"
ERROR - 2024-10-31 18:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 18:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 18:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 18:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 18:58:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 18:58:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 18:58:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 18:58:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 18:58:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 18:58:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 18:58:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 18:58:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 18:58:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 18:58:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 18:58:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 18:58:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 18:59:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 18:59:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 18:59:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 18:59:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 18:59:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 18:59:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 18:59:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 18:59:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 18:59:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 18:59:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 18:59:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 18:59:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 18:59:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 18:59:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 18:59:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 18:59:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 18:59:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 18:59:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 18:59:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 18:59:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 18:59:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 18:59:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 18:59:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 18:59:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 19:05:04 --> Could not find the language line "Home"
ERROR - 2024-10-31 19:05:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 19:05:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 19:05:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 19:05:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 19:05:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 19:05:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 19:05:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 19:05:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 19:05:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 19:05:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 19:05:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 19:05:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 19:12:10 --> Could not find the language line "Home"
ERROR - 2024-10-31 19:12:20 --> Could not find the language line "Home"
ERROR - 2024-10-31 19:16:13 --> Could not find the language line "Home"
ERROR - 2024-10-31 19:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 19:40:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 19:40:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 19:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 19:40:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 19:40:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 19:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 19:40:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 19:40:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 19:40:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 19:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 19:40:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 19:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 19:40:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 19:40:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 19:40:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 19:40:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 19:40:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 19:40:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 19:40:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 19:40:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 19:40:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 19:40:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 19:40:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 19:40:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 19:46:13 --> Could not find the language line "Home"
ERROR - 2024-10-31 20:01:45 --> Could not find the language line "Home"
ERROR - 2024-10-31 20:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 20:03:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-31 20:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 20:03:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-31 20:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 20:16:13 --> Could not find the language line "Home"
ERROR - 2024-10-31 20:19:06 --> Could not find the language line "Home"
ERROR - 2024-10-31 20:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 20:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 20:29:07 --> Could not find the language line "Home"
ERROR - 2024-10-31 20:35:55 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-31 20:41:09 --> Could not find the language line "Home"
ERROR - 2024-10-31 20:46:15 --> Could not find the language line "Home"
ERROR - 2024-10-31 20:48:47 --> Could not find the language line "Home"
ERROR - 2024-10-31 20:48:52 --> Could not find the language line "Home"
ERROR - 2024-10-31 20:48:58 --> Could not find the language line "Home"
ERROR - 2024-10-31 20:50:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 20:50:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 20:50:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 20:50:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 20:50:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 20:50:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 20:50:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 20:50:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 20:50:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 20:50:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 20:50:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 20:50:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 20:51:00 --> Could not find the language line "Home"
ERROR - 2024-10-31 20:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 20:51:46 --> Could not find the language line "Home"
ERROR - 2024-10-31 20:56:26 --> Could not find the language line "Home"
ERROR - 2024-10-31 21:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 21:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 21:05:06 --> Could not find the language line "Home"
ERROR - 2024-10-31 21:16:14 --> Could not find the language line "Home"
ERROR - 2024-10-31 21:19:53 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-31 21:38:33 --> Could not find the language line "Home"
ERROR - 2024-10-31 21:39:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-31 21:43:30 --> Could not find the language line "Home"
ERROR - 2024-10-31 21:46:14 --> Could not find the language line "Home"
ERROR - 2024-10-31 21:52:51 --> Could not find the language line "Home"
ERROR - 2024-10-31 21:52:52 --> Could not find the language line "Home"
ERROR - 2024-10-31 21:55:37 --> Could not find the language line "Home"
ERROR - 2024-10-31 21:59:03 --> Could not find the language line "Home"
ERROR - 2024-10-31 22:00:32 --> Could not find the language line "Home"
ERROR - 2024-10-31 22:00:32 --> Could not find the language line "Home"
ERROR - 2024-10-31 22:01:23 --> Could not find the language line "Home"
ERROR - 2024-10-31 22:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 22:02:32 --> Could not find the language line "Home"
ERROR - 2024-10-31 22:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 22:16:15 --> Could not find the language line "Home"
ERROR - 2024-10-31 22:16:43 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-31 22:16:44 --> Could not find the language line "Home"
ERROR - 2024-10-31 22:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 22:34:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 22:34:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 22:34:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 22:34:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 22:34:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 22:34:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 22:34:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 22:34:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-31 22:34:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 22:34:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 22:34:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-31 22:34:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-31 22:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 22:46:15 --> Could not find the language line "Home"
ERROR - 2024-10-31 22:57:00 --> Could not find the language line "Other"
ERROR - 2024-10-31 23:00:21 --> Could not find the language line "Home"
ERROR - 2024-10-31 23:08:50 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2024-10-31 23:10:19 --> Could not find the language line "Home"
ERROR - 2024-10-31 23:16:22 --> Could not find the language line "Home"
ERROR - 2024-10-31 23:22:16 --> Could not find the language line "Perfume"
ERROR - 2024-10-31 23:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 23:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 23:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 23:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 23:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 23:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 23:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 23:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-31 23:34:39 --> Could not find the language line "Home"
ERROR - 2024-10-31 23:35:22 --> Could not find the language line "Home"
ERROR - 2024-10-31 23:37:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-31 23:37:51 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-31 23:38:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-31 23:38:40 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-31 23:39:04 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-31 23:39:28 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-31 23:39:45 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-31 23:39:55 --> Could not find the language line "Clothing"
ERROR - 2024-10-31 23:40:03 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-31 23:40:12 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-31 23:40:21 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-31 23:40:30 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-31 23:40:38 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-31 23:40:48 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-31 23:46:19 --> Could not find the language line "Home"
