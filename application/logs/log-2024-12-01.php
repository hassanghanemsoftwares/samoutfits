<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-01 00:08:15 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-01 00:14:45 --> Could not find the language line "Home"
ERROR - 2024-12-01 00:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 00:44:43 --> Could not find the language line "Home"
ERROR - 2024-12-01 01:14:42 --> Could not find the language line "Home"
ERROR - 2024-12-01 01:35:21 --> Could not find the language line "Bracelets"
ERROR - 2024-12-01 01:43:28 --> Could not find the language line "Home"
ERROR - 2024-12-01 01:44:44 --> Could not find the language line "Home"
ERROR - 2024-12-01 01:46:03 --> Could not find the language line "Home"
ERROR - 2024-12-01 02:14:57 --> Could not find the language line "Home"
ERROR - 2024-12-01 02:23:27 --> Could not find the language line "Home"
ERROR - 2024-12-01 02:29:09 --> Could not find the language line "Home"
ERROR - 2024-12-01 02:30:51 --> Could not find the language line "Home"
ERROR - 2024-12-01 02:44:12 --> Could not find the language line "Home"
ERROR - 2024-12-01 02:44:44 --> Could not find the language line "Home"
ERROR - 2024-12-01 03:14:44 --> Could not find the language line "Home"
ERROR - 2024-12-01 03:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 03:44:46 --> Could not find the language line "Home"
ERROR - 2024-12-01 04:14:45 --> Could not find the language line "Home"
ERROR - 2024-12-01 04:29:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 04:29:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 04:29:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 04:35:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 04:35:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 04:35:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 04:42:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 04:42:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 04:42:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 04:44:45 --> Could not find the language line "Home"
ERROR - 2024-12-01 04:48:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 04:48:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 04:48:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 04:55:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 04:55:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 04:55:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 05:03:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 05:03:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 05:03:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 05:04:23 --> Could not find the language line "Home"
ERROR - 2024-12-01 05:10:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 05:10:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 05:10:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 05:13:58 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-01 05:14:17 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-01 05:14:48 --> Could not find the language line "Home"
ERROR - 2024-12-01 05:15:11 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-01 05:16:30 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-01 05:17:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 05:17:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 05:17:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 05:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 05:25:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 05:25:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 05:25:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 05:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 05:35:14 --> Could not find the language line "Home"
ERROR - 2024-12-01 05:42:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 05:42:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 05:42:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 05:44:46 --> Could not find the language line "Home"
ERROR - 2024-12-01 05:50:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 05:50:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 05:50:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 05:53:07 --> Could not find the language line "Home"
ERROR - 2024-12-01 05:59:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 05:59:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 05:59:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 06:09:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 06:09:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 06:09:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 06:14:45 --> Could not find the language line "Home"
ERROR - 2024-12-01 06:19:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 06:19:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 06:19:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 06:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 06:30:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 06:30:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 06:30:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 06:31:55 --> Could not find the language line "Home"
ERROR - 2024-12-01 06:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 06:42:42 --> 404 Page Not Found: Storage/settings
ERROR - 2024-12-01 06:43:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 06:43:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 06:43:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 06:44:51 --> Could not find the language line "Home"
ERROR - 2024-12-01 07:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 07:09:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 07:09:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 07:09:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 07:14:49 --> Could not find the language line "Home"
ERROR - 2024-12-01 07:18:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 07:22:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 07:22:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 07:22:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 07:32:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 07:37:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 07:37:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 07:37:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 07:44:46 --> Could not find the language line "Home"
ERROR - 2024-12-01 07:53:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 07:53:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 07:53:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 08:09:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 08:09:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 08:09:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 08:10:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 08:13:49 --> Could not find the language line "Home"
ERROR - 2024-12-01 08:14:51 --> Could not find the language line "Home"
ERROR - 2024-12-01 08:26:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 08:26:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 08:26:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 08:30:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 08:37:24 --> Could not find the language line "Home"
ERROR - 2024-12-01 08:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 08:44:50 --> Could not find the language line "Home"
ERROR - 2024-12-01 08:44:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 08:44:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 08:44:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 08:45:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-01 08:52:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-01 08:52:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-01 09:04:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 09:04:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 09:04:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 09:14:50 --> Could not find the language line "Home"
ERROR - 2024-12-01 09:26:06 --> Could not find the language line "Home"
ERROR - 2024-12-01 09:28:13 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-01 09:28:13 --> Could not find the language line "Home"
ERROR - 2024-12-01 09:28:13 --> Could not find the language line "Home"
ERROR - 2024-12-01 09:28:51 --> Could not find the language line "Home"
ERROR - 2024-12-01 09:34:15 --> Could not find the language line "Home"
ERROR - 2024-12-01 09:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 09:41:58 --> Could not find the language line "Home"
ERROR - 2024-12-01 09:42:33 --> Could not find the language line "Home"
ERROR - 2024-12-01 09:43:33 --> Could not find the language line "Home"
ERROR - 2024-12-01 09:44:54 --> Could not find the language line "Home"
ERROR - 2024-12-01 09:46:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 09:46:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 09:46:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 10:08:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 10:08:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 10:08:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 10:14:48 --> Could not find the language line "Home"
ERROR - 2024-12-01 10:27:30 --> Could not find the language line "Home"
ERROR - 2024-12-01 10:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 10:33:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 10:33:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 10:33:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 10:44:52 --> Could not find the language line "Home"
ERROR - 2024-12-01 10:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 10:58:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 10:58:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 10:58:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 11:07:31 --> Could not find the language line "Home"
ERROR - 2024-12-01 11:14:51 --> Could not find the language line "Home"
ERROR - 2024-12-01 11:24:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-01 11:24:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 11:24:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 11:24:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 11:44:54 --> Could not find the language line "Home"
ERROR - 2024-12-01 11:52:56 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-01 11:59:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 11:59:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 11:59:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 12:04:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-01 12:14:54 --> Could not find the language line "Home"
ERROR - 2024-12-01 12:29:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 12:29:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 12:29:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 12:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 12:39:06 --> Could not find the language line "Home"
ERROR - 2024-12-01 12:39:09 --> Could not find the language line "Home"
ERROR - 2024-12-01 12:39:11 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-12-01 12:39:11 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-12-01 12:39:12 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-12-01 12:39:12 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-12-01 12:45:08 --> Could not find the language line "Home"
ERROR - 2024-12-01 12:51:39 --> Could not find the language line "Home"
ERROR - 2024-12-01 12:59:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 12:59:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 12:59:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 13:15:29 --> Could not find the language line "Home"
ERROR - 2024-12-01 13:16:22 --> Could not find the language line "Home"
ERROR - 2024-12-01 13:19:59 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-01 13:30:47 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-01 13:31:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 13:31:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 13:31:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 13:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 13:45:04 --> Could not find the language line "Home"
ERROR - 2024-12-01 14:03:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 14:03:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 14:03:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 14:15:04 --> Could not find the language line "Home"
ERROR - 2024-12-01 14:21:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-01 14:21:56 --> Could not find the language line "Home"
ERROR - 2024-12-01 14:36:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 14:36:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 14:36:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 14:45:03 --> Could not find the language line "Home"
ERROR - 2024-12-01 14:47:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-01 15:08:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 15:08:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 15:08:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 15:15:05 --> Could not find the language line "Home"
ERROR - 2024-12-01 15:30:50 --> Could not find the language line "Home"
ERROR - 2024-12-01 15:45:03 --> Could not find the language line "Home"
ERROR - 2024-12-01 15:59:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 15:59:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 15:59:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 16:10:04 --> 404 Page Not Found: Cart/products
ERROR - 2024-12-01 16:15:04 --> Could not find the language line "Home"
ERROR - 2024-12-01 16:26:58 --> Could not find the language line "Home"
ERROR - 2024-12-01 16:41:07 --> Could not find the language line "Home"
ERROR - 2024-12-01 16:41:09 --> Could not find the language line "Other"
ERROR - 2024-12-01 16:43:54 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-01 16:43:56 --> Could not find the language line "Home"
ERROR - 2024-12-01 16:43:56 --> Could not find the language line "Home"
ERROR - 2024-12-01 16:45:05 --> Could not find the language line "Home"
ERROR - 2024-12-01 16:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 16:45:51 --> Could not find the language line "Home"
ERROR - 2024-12-01 16:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 16:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 17:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 17:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 17:13:26 --> Could not find the language line "Home"
ERROR - 2024-12-01 17:14:32 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-01 17:14:53 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-01 17:15:05 --> Could not find the language line "Home"
ERROR - 2024-12-01 17:20:23 --> Could not find the language line "Home"
ERROR - 2024-12-01 17:22:01 --> Could not find the language line "Home"
ERROR - 2024-12-01 17:22:09 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-01 17:22:15 --> Could not find the language line "Home"
ERROR - 2024-12-01 17:22:33 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-01 17:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 17:23:59 --> Could not find the language line "Home"
ERROR - 2024-12-01 17:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 17:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 17:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 17:27:17 --> Could not find the language line "Home"
ERROR - 2024-12-01 17:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 17:29:33 --> Could not find the language line "Home"
ERROR - 2024-12-01 17:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 17:32:51 --> Could not find the language line "Home"
ERROR - 2024-12-01 17:45:05 --> Could not find the language line "Home"
ERROR - 2024-12-01 17:53:24 --> Could not find the language line "Other"
ERROR - 2024-12-01 17:55:42 --> Could not find the language line "Home"
ERROR - 2024-12-01 17:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 17:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 17:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 18:12:41 --> Could not find the language line "Home"
ERROR - 2024-12-01 18:14:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-01 18:15:04 --> Could not find the language line "Home"
ERROR - 2024-12-01 18:19:03 --> Could not find the language line "Home"
ERROR - 2024-12-01 18:26:37 --> Could not find the language line "Home"
ERROR - 2024-12-01 18:33:39 --> Could not find the language line "Home"
ERROR - 2024-12-01 18:45:10 --> Could not find the language line "Home"
ERROR - 2024-12-01 19:05:30 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-01 19:12:45 --> Could not find the language line "Home"
ERROR - 2024-12-01 19:15:05 --> Could not find the language line "Home"
ERROR - 2024-12-01 19:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 19:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 19:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 19:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 19:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 19:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 19:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 19:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 19:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 19:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 19:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 19:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 19:39:06 --> Could not find the language line "Home"
ERROR - 2024-12-01 19:40:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-01 19:40:31 --> Could not find the language line "Home"
ERROR - 2024-12-01 19:41:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-01 19:41:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-01 19:41:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-01 19:45:06 --> Could not find the language line "Home"
ERROR - 2024-12-01 20:15:08 --> Could not find the language line "Home"
ERROR - 2024-12-01 20:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 20:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 20:45:13 --> Could not find the language line "Home"
ERROR - 2024-12-01 21:15:07 --> Could not find the language line "Home"
ERROR - 2024-12-01 21:23:25 --> Could not find the language line "Home"
ERROR - 2024-12-01 21:45:07 --> Could not find the language line "Home"
ERROR - 2024-12-01 22:00:35 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-01 22:08:27 --> Could not find the language line "Other"
ERROR - 2024-12-01 22:15:13 --> Could not find the language line "Home"
ERROR - 2024-12-01 22:23:38 --> Could not find the language line "products"
ERROR - 2024-12-01 22:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 22:28:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-01 22:28:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-01 22:28:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-01 22:45:12 --> Could not find the language line "Home"
ERROR - 2024-12-01 23:03:21 --> Could not find the language line "Home"
ERROR - 2024-12-01 23:15:08 --> Could not find the language line "Home"
ERROR - 2024-12-01 23:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-01 23:45:33 --> Could not find the language line "Home"
