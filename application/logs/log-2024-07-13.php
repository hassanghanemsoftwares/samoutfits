<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-13 00:09:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 00:15:07 --> Could not find the language line "Home"
ERROR - 2024-07-13 00:16:32 --> Could not find the language line "products"
ERROR - 2024-07-13 00:19:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 00:22:00 --> Could not find the language line "products"
ERROR - 2024-07-13 00:22:40 --> Could not find the language line "products"
ERROR - 2024-07-13 00:23:58 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 00:27:31 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 00:45:06 --> Could not find the language line "Home"
ERROR - 2024-07-13 00:50:48 --> Could not find the language line "Other"
ERROR - 2024-07-13 00:52:40 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-13 00:53:04 --> Could not find the language line "Socks"
ERROR - 2024-07-13 00:56:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 01:02:04 --> Could not find the language line "Home"
ERROR - 2024-07-13 01:02:43 --> Could not find the language line "Home"
ERROR - 2024-07-13 01:04:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 01:10:03 --> Could not find the language line "Home"
ERROR - 2024-07-13 01:11:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 01:12:41 --> Could not find the language line "Home"
ERROR - 2024-07-13 01:15:07 --> Could not find the language line "Home"
ERROR - 2024-07-13 01:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 01:30:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-13 01:30:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-13 01:30:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-13 01:30:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-13 01:30:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 01:30:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 01:30:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-13 01:30:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-13 01:30:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 01:30:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 01:30:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-13 01:30:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-13 01:30:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-13 01:30:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 01:30:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-13 01:30:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-13 01:30:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-13 01:30:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 01:30:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-13 01:30:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 01:30:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-13 01:30:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-13 01:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 01:30:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-13 01:30:57 --> Could not find the language line "Home"
ERROR - 2024-07-13 01:31:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-13 01:31:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 01:31:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-13 01:31:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-13 01:31:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 01:31:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-13 01:31:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-13 01:31:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 01:31:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-13 01:31:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-13 01:31:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 01:31:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-13 01:32:57 --> Could not find the language line "Home"
ERROR - 2024-07-13 01:45:08 --> Could not find the language line "Home"
ERROR - 2024-07-13 01:50:08 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 01:57:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 02:15:11 --> Could not find the language line "Home"
ERROR - 2024-07-13 02:37:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 02:41:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 02:44:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-13 02:45:09 --> Could not find the language line "Home"
ERROR - 2024-07-13 02:45:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 02:49:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 02:49:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 02:54:03 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-13 02:59:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 03:13:01 --> Could not find the language line "Home"
ERROR - 2024-07-13 03:15:10 --> Could not find the language line "Home"
ERROR - 2024-07-13 03:17:24 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 03:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 03:37:31 --> Could not find the language line "Home"
ERROR - 2024-07-13 03:37:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 03:38:10 --> Could not find the language line "products"
ERROR - 2024-07-13 03:38:25 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-07-13 03:38:25 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-07-13 03:38:25 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-07-13 03:38:29 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-13 03:38:29 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-07-13 03:38:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 03:38:54 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-13 03:38:54 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-07-13 03:38:54 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2024-07-13 03:38:54 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2024-07-13 03:38:54 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-07-13 03:38:54 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-07-13 03:38:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 03:38:54 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-07-13 03:38:54 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-07-13 03:41:23 --> Could not find the language line "Home"
ERROR - 2024-07-13 03:43:19 --> Could not find the language line "Home"
ERROR - 2024-07-13 03:45:08 --> Could not find the language line "Home"
ERROR - 2024-07-13 03:47:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 03:48:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 03:52:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 03:54:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 04:00:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 04:15:08 --> Could not find the language line "Home"
ERROR - 2024-07-13 04:17:36 --> Could not find the language line "products"
ERROR - 2024-07-13 04:17:44 --> Could not find the language line "Home"
ERROR - 2024-07-13 04:20:24 --> Could not find the language line "Home"
ERROR - 2024-07-13 04:32:33 --> Could not find the language line "Home"
ERROR - 2024-07-13 04:39:31 --> Could not find the language line "Home"
ERROR - 2024-07-13 04:44:38 --> Could not find the language line "Home"
ERROR - 2024-07-13 04:45:11 --> Could not find the language line "Home"
ERROR - 2024-07-13 04:56:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 04:56:14 --> Could not find the language line "Home"
ERROR - 2024-07-13 05:00:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 05:12:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 05:15:14 --> Could not find the language line "Home"
ERROR - 2024-07-13 05:20:12 --> Could not find the language line "Home"
ERROR - 2024-07-13 05:20:47 --> Could not find the language line "Socks"
ERROR - 2024-07-13 05:26:43 --> Could not find the language line "Home"
ERROR - 2024-07-13 05:39:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 05:45:10 --> Could not find the language line "Home"
ERROR - 2024-07-13 05:52:28 --> Could not find the language line "Home"
ERROR - 2024-07-13 06:01:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 06:01:30 --> Could not find the language line "Home"
ERROR - 2024-07-13 06:15:11 --> Could not find the language line "Home"
ERROR - 2024-07-13 06:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 06:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 06:29:22 --> Could not find the language line "Home"
ERROR - 2024-07-13 06:45:12 --> Could not find the language line "Home"
ERROR - 2024-07-13 06:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 06:50:39 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-13 06:50:39 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-13 06:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 06:51:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 07:01:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 07:03:35 --> 404 Page Not Found: All/index
ERROR - 2024-07-13 07:04:21 --> Could not find the language line "Home"
ERROR - 2024-07-13 07:06:42 --> Could not find the language line "Home"
ERROR - 2024-07-13 07:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 07:09:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 07:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 07:15:11 --> Could not find the language line "Home"
ERROR - 2024-07-13 07:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 07:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 07:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 07:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 07:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 07:23:12 --> Could not find the language line "Home"
ERROR - 2024-07-13 07:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 07:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 07:24:05 --> Could not find the language line "Home"
ERROR - 2024-07-13 07:26:46 --> Could not find the language line "Home"
ERROR - 2024-07-13 07:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 07:28:31 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-07-13 07:29:12 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-07-13 07:29:39 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-07-13 07:39:07 --> Could not find the language line "Home"
ERROR - 2024-07-13 07:42:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 07:44:29 --> Could not find the language line "Home"
ERROR - 2024-07-13 07:45:11 --> Could not find the language line "Home"
ERROR - 2024-07-13 07:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 07:55:53 --> Could not find the language line "Home"
ERROR - 2024-07-13 07:56:00 --> Could not find the language line "Home"
ERROR - 2024-07-13 07:56:48 --> Could not find the language line "Home"
ERROR - 2024-07-13 07:56:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 08:00:24 --> Could not find the language line "Home"
ERROR - 2024-07-13 08:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 08:04:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 08:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 08:15:13 --> Could not find the language line "Home"
ERROR - 2024-07-13 08:22:08 --> Could not find the language line "Home"
ERROR - 2024-07-13 08:32:02 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-13 08:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 08:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 08:45:11 --> Could not find the language line "Home"
ERROR - 2024-07-13 08:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 08:52:26 --> Could not find the language line "Disclaimer"
ERROR - 2024-07-13 08:59:51 --> Could not find the language line "Home"
ERROR - 2024-07-13 09:01:18 --> Could not find the language line "Other"
ERROR - 2024-07-13 09:01:18 --> 404 Page Not Found: Products/products
ERROR - 2024-07-13 09:01:57 --> Could not find the language line "Socks"
ERROR - 2024-07-13 09:03:56 --> 404 Page Not Found: Products/products
ERROR - 2024-07-13 09:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 09:09:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 09:11:37 --> Could not find the language line "Other"
ERROR - 2024-07-13 09:12:14 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 09:12:45 --> Could not find the language line "Other"
ERROR - 2024-07-13 09:15:12 --> Could not find the language line "Home"
ERROR - 2024-07-13 09:22:05 --> Could not find the language line "Home"
ERROR - 2024-07-13 09:30:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 09:45:17 --> Could not find the language line "Home"
ERROR - 2024-07-13 09:45:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 09:48:59 --> Could not find the language line "Bracelets"
ERROR - 2024-07-13 09:49:28 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 09:49:38 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 09:49:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-13 09:49:45 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 09:49:50 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 09:49:56 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 09:50:01 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 09:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 09:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 09:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 09:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 09:53:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 09:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 09:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 09:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 09:58:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 10:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 10:07:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 10:13:55 --> Could not find the language line "Home"
ERROR - 2024-07-13 10:15:12 --> Could not find the language line "Home"
ERROR - 2024-07-13 10:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 10:22:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 10:27:59 --> Could not find the language line "hats"
ERROR - 2024-07-13 10:45:13 --> Could not find the language line "Home"
ERROR - 2024-07-13 10:48:55 --> Could not find the language line "Home"
ERROR - 2024-07-13 10:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 10:51:17 --> Could not find the language line "Home"
ERROR - 2024-07-13 10:54:39 --> Could not find the language line "Bracelets"
ERROR - 2024-07-13 10:54:39 --> Could not find the language line "Other"
ERROR - 2024-07-13 10:54:39 --> Could not find the language line "Other"
ERROR - 2024-07-13 10:54:39 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 10:54:41 --> Could not find the language line "Perfume"
ERROR - 2024-07-13 10:54:41 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 10:54:44 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 10:54:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-13 10:54:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-13 10:54:47 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-13 10:56:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 11:15:13 --> Could not find the language line "Home"
ERROR - 2024-07-13 11:19:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 11:37:25 --> Could not find the language line "products"
ERROR - 2024-07-13 11:45:14 --> Could not find the language line "Home"
ERROR - 2024-07-13 11:47:02 --> Could not find the language line "Home"
ERROR - 2024-07-13 11:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 11:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 11:55:13 --> Could not find the language line "Home"
ERROR - 2024-07-13 12:02:21 --> Could not find the language line "Home"
ERROR - 2024-07-13 12:15:14 --> Could not find the language line "Home"
ERROR - 2024-07-13 12:15:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 12:15:51 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-13 12:22:28 --> Could not find the language line "Home"
ERROR - 2024-07-13 12:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 12:37:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 12:44:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 12:45:15 --> Could not find the language line "Home"
ERROR - 2024-07-13 12:46:54 --> Could not find the language line "Home"
ERROR - 2024-07-13 12:49:39 --> Could not find the language line "Home"
ERROR - 2024-07-13 12:50:33 --> Could not find the language line "products"
ERROR - 2024-07-13 12:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 13:02:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%D010%' OR a.description LIKE '%D010%' OR a.color LIKE '%D010%' OR a.barcode LIKE '%D010%' OR a.category LIKE '%D010%' OR a.sub_category LIKE '%D010%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 13:04:32 --> Could not find the language line "Other"
ERROR - 2024-07-13 13:07:09 --> Could not find the language line "Bracelets"
ERROR - 2024-07-13 13:08:06 --> Could not find the language line "Home"
ERROR - 2024-07-13 13:08:17 --> Could not find the language line "Disclaimer"
ERROR - 2024-07-13 13:09:43 --> Could not find the language line "Socks"
ERROR - 2024-07-13 13:11:29 --> Could not find the language line "Home"
ERROR - 2024-07-13 13:13:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 13:15:15 --> Could not find the language line "Home"
ERROR - 2024-07-13 13:29:21 --> Could not find the language line "Home"
ERROR - 2024-07-13 13:29:34 --> Could not find the language line "Home"
ERROR - 2024-07-13 13:35:50 --> Could not find the language line "Home"
ERROR - 2024-07-13 13:35:59 --> Could not find the language line "Home"
ERROR - 2024-07-13 13:38:29 --> Could not find the language line "Other"
ERROR - 2024-07-13 13:39:24 --> Could not find the language line "products"
ERROR - 2024-07-13 13:45:15 --> Could not find the language line "Home"
ERROR - 2024-07-13 13:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 14:15:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 14:15:15 --> Could not find the language line "Home"
ERROR - 2024-07-13 14:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 14:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 14:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 14:17:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 14:18:03 --> Could not find the language line "Home"
ERROR - 2024-07-13 14:19:16 --> Could not find the language line "products"
ERROR - 2024-07-13 14:36:37 --> Could not find the language line "Home"
ERROR - 2024-07-13 14:37:46 --> Could not find the language line "products"
ERROR - 2024-07-13 14:39:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 14:43:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 14:45:16 --> Could not find the language line "Home"
ERROR - 2024-07-13 14:59:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 15:03:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 15:12:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 15:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 15:15:16 --> Could not find the language line "Home"
ERROR - 2024-07-13 15:20:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 15:33:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 15:41:04 --> Could not find the language line "Home"
ERROR - 2024-07-13 15:41:04 --> Could not find the language line "Home"
ERROR - 2024-07-13 15:45:16 --> Could not find the language line "Home"
ERROR - 2024-07-13 15:51:47 --> Could not find the language line "hats"
ERROR - 2024-07-13 15:51:47 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-07-13 15:51:47 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-07-13 15:51:47 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-07-13 15:51:47 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-07-13 15:51:52 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-07-13 15:51:52 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-07-13 15:51:52 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-07-13 15:51:52 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-07-13 16:01:35 --> Could not find the language line "Home"
ERROR - 2024-07-13 16:02:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 16:03:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 16:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 16:06:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 16:10:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 16:13:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 16:14:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 16:15:17 --> Could not find the language line "Home"
ERROR - 2024-07-13 16:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 16:28:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 16:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 16:32:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 16:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 16:41:58 --> Could not find the language line "Home"
ERROR - 2024-07-13 16:44:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 16:45:17 --> Could not find the language line "Home"
ERROR - 2024-07-13 17:00:54 --> Could not find the language line "Home"
ERROR - 2024-07-13 17:04:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 17:07:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 17:08:47 --> Could not find the language line "Socks"
ERROR - 2024-07-13 17:15:18 --> Could not find the language line "Home"
ERROR - 2024-07-13 17:34:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 17:35:07 --> Could not find the language line "Home"
ERROR - 2024-07-13 17:36:32 --> Could not find the language line "Home"
ERROR - 2024-07-13 17:42:33 --> Could not find the language line "Home"
ERROR - 2024-07-13 17:45:18 --> Could not find the language line "Home"
ERROR - 2024-07-13 18:05:38 --> Could not find the language line "Home"
ERROR - 2024-07-13 18:15:18 --> Could not find the language line "Home"
ERROR - 2024-07-13 18:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 18:27:03 --> Could not find the language line "Home"
ERROR - 2024-07-13 18:45:18 --> Could not find the language line "Home"
ERROR - 2024-07-13 18:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 18:52:13 --> Could not find the language line "Home"
ERROR - 2024-07-13 18:54:07 --> Could not find the language line "Home"
ERROR - 2024-07-13 18:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 19:02:59 --> Could not find the language line "Home"
ERROR - 2024-07-13 19:11:26 --> Could not find the language line "Home"
ERROR - 2024-07-13 19:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 19:15:19 --> Could not find the language line "Home"
ERROR - 2024-07-13 19:27:19 --> Could not find the language line "products"
ERROR - 2024-07-13 19:27:58 --> Could not find the language line "Home"
ERROR - 2024-07-13 19:28:41 --> Could not find the language line "Clothing"
ERROR - 2024-07-13 19:29:11 --> Could not find the language line "Home"
ERROR - 2024-07-13 19:31:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 19:43:23 --> Could not find the language line "products"
ERROR - 2024-07-13 19:45:20 --> Could not find the language line "Home"
ERROR - 2024-07-13 19:47:03 --> Could not find the language line "products"
ERROR - 2024-07-13 20:09:18 --> Could not find the language line "Home"
ERROR - 2024-07-13 20:10:27 --> Could not find the language line "Home"
ERROR - 2024-07-13 20:10:35 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-13 20:10:35 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-13 20:10:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 20:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 20:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 20:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 20:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 20:12:17 --> Could not find the language line "Home"
ERROR - 2024-07-13 20:12:37 --> Could not find the language line "Home"
ERROR - 2024-07-13 20:13:08 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-13 20:13:10 --> Could not find the language line "Home"
ERROR - 2024-07-13 20:15:19 --> Could not find the language line "Home"
ERROR - 2024-07-13 20:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 20:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 20:35:20 --> Could not find the language line "Home"
ERROR - 2024-07-13 20:42:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 20:45:20 --> Could not find the language line "Home"
ERROR - 2024-07-13 20:57:11 --> Could not find the language line "Home"
ERROR - 2024-07-13 21:00:03 --> Could not find the language line "Other"
ERROR - 2024-07-13 21:15:22 --> Could not find the language line "Home"
ERROR - 2024-07-13 21:16:29 --> Could not find the language line "Home"
ERROR - 2024-07-13 21:16:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-13 21:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 21:35:46 --> Could not find the language line "Home"
ERROR - 2024-07-13 21:37:46 --> Could not find the language line "Home"
ERROR - 2024-07-13 21:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 21:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 21:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 21:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 21:45:21 --> Could not find the language line "Home"
ERROR - 2024-07-13 21:45:44 --> Could not find the language line "products"
ERROR - 2024-07-13 21:55:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-13 22:15:22 --> Could not find the language line "Home"
ERROR - 2024-07-13 22:17:48 --> Could not find the language line "Home"
ERROR - 2024-07-13 22:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 22:27:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 22:45:22 --> Could not find the language line "Home"
ERROR - 2024-07-13 22:57:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-13 23:06:26 --> Could not find the language line "Home"
ERROR - 2024-07-13 23:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 23:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 23:15:22 --> Could not find the language line "Home"
ERROR - 2024-07-13 23:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-13 23:35:08 --> Could not find the language line "Other"
ERROR - 2024-07-13 23:40:45 --> Could not find the language line "Disclaimer"
ERROR - 2024-07-13 23:45:23 --> Could not find the language line "Home"
