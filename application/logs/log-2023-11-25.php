<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-25 00:00:16 --> Could not find the language line "Home"
ERROR - 2023-11-25 00:26:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 00:30:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2023-11-25 00:30:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2023-11-25 00:30:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C844%' OR a.description LIKE '%C844%' OR a.color LIKE '%C844%' OR a.barcode LIKE '%C844%' OR a.category LIKE '%C844%' OR a.sub_category LIKE '%C844%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-25 00:30:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 00:30:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C844%' OR a.description LIKE '%C844%' OR a.color LIKE '%C844%' OR a.barcode LIKE '%C844%' OR a.category LIKE '%C844%' OR a.sub_category LIKE '%C844%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-25 00:30:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 00:30:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2023-11-25 00:30:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C844%' OR a.description LIKE '%C844%' OR a.color LIKE '%C844%' OR a.barcode LIKE '%C844%' OR a.category LIKE '%C844%' OR a.sub_category LIKE '%C844%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-25 00:30:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 00:30:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2023-11-25 00:30:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C844%' OR a.description LIKE '%C844%' OR a.color LIKE '%C844%' OR a.barcode LIKE '%C844%' OR a.category LIKE '%C844%' OR a.sub_category LIKE '%C844%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-25 00:30:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 00:30:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2023-11-25 00:30:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C844%' OR a.description LIKE '%C844%' OR a.color LIKE '%C844%' OR a.barcode LIKE '%C844%' OR a.category LIKE '%C844%' OR a.sub_category LIKE '%C844%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-25 00:30:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 00:30:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2023-11-25 00:30:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C844%' OR a.description LIKE '%C844%' OR a.color LIKE '%C844%' OR a.barcode LIKE '%C844%' OR a.category LIKE '%C844%' OR a.sub_category LIKE '%C844%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-25 00:30:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 00:30:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2023-11-25 00:30:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C844%' OR a.description LIKE '%C844%' OR a.color LIKE '%C844%' OR a.barcode LIKE '%C844%' OR a.category LIKE '%C844%' OR a.sub_category LIKE '%C844%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-25 00:30:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 00:30:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2023-11-25 00:30:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%C844%' OR a.description LIKE '%C844%' OR a.color LIKE '%C844%' OR a.barcode LIKE '%C844%' OR a.category LIKE '%C844%' OR a.sub_category LIKE '%C844%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-25 00:30:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 00:30:16 --> Could not find the language line "Home"
ERROR - 2023-11-25 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 01:12:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-25 01:17:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 01:18:01 --> Could not find the language line "products"
ERROR - 2023-11-25 01:19:40 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-25 01:29:26 --> Could not find the language line "Home"
ERROR - 2023-11-25 01:30:17 --> Could not find the language line "Home"
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 01:33:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 01:35:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 01:44:31 --> Could not find the language line "products"
ERROR - 2023-11-25 02:00:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-25 02:04:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 02:13:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 02:18:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 02:30:19 --> Could not find the language line "Home"
ERROR - 2023-11-25 02:35:13 --> Could not find the language line "products"
ERROR - 2023-11-25 02:35:45 --> 404 Page Not Found: Products/products
ERROR - 2023-11-25 02:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 02:58:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 02:58:04 --> Could not find the language line "Home"
ERROR - 2023-11-25 02:59:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-25 03:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 03:01:47 --> Could not find the language line "Home"
ERROR - 2023-11-25 03:05:33 --> Could not find the language line "Home"
ERROR - 2023-11-25 03:13:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 03:13:06 --> Could not find the language line "Home"
ERROR - 2023-11-25 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 03:30:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 03:38:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 03:49:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 03:52:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 03:54:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 03:57:38 --> Could not find the language line "Home"
ERROR - 2023-11-25 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-11-25 04:01:33 --> Could not find the language line "Home"
ERROR - 2023-11-25 04:05:34 --> Could not find the language line "Home"
ERROR - 2023-11-25 04:11:35 --> Could not find the language line "Home"
ERROR - 2023-11-25 04:16:49 --> Could not find the language line "Socks"
ERROR - 2023-11-25 04:16:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 04:32:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 04:34:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:01:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 05:07:07 --> Could not find the language line "Home"
ERROR - 2023-11-25 05:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 05:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 05:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 05:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 05:11:47 --> Could not find the language line "0"
ERROR - 2023-11-25 05:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 05:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:12:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:14:08 --> Could not find the language line "Home"
ERROR - 2023-11-25 05:14:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-25 05:15:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-25 05:15:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-25 05:15:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-25 05:15:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-25 05:15:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-25 05:16:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-25 05:16:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-25 05:16:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-25 05:16:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-25 05:16:15 --> Could not find the language line "Home"
ERROR - 2023-11-25 05:16:19 --> Could not find the language line "Perfume"
ERROR - 2023-11-25 05:16:33 --> Could not find the language line "Home"
ERROR - 2023-11-25 05:16:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-25 05:16:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-25 05:16:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-25 05:16:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-25 05:17:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-25 05:17:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-25 05:17:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-25 05:17:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-25 05:17:11 --> Could not find the language line "Home"
ERROR - 2023-11-25 05:17:14 --> Could not find the language line "Bracelets"
ERROR - 2023-11-25 05:17:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-25 05:18:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-25 05:18:18 --> Could not find the language line "Home"
ERROR - 2023-11-25 05:18:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 05:18:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 05:18:50 --> 404 Page Not Found: Products/products
ERROR - 2023-11-25 05:18:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 05:19:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 05:19:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 05:19:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 05:19:20 --> Could not find the language line "Home"
ERROR - 2023-11-25 05:19:26 --> Could not find the language line "Socks"
ERROR - 2023-11-25 05:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 05:21:52 --> Could not find the language line "Home"
ERROR - 2023-11-25 05:22:17 --> Could not find the language line "Home"
ERROR - 2023-11-25 05:24:24 --> Could not find the language line "Home"
ERROR - 2023-11-25 05:24:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-25 05:24:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-25 05:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 05:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 05:25:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-25 05:25:30 --> Could not find the language line "Home"
ERROR - 2023-11-25 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:31:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 05:33:50 --> Could not find the language line "products"
ERROR - 2023-11-25 05:48:50 --> Could not find the language line "products"
ERROR - 2023-11-25 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-25 06:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 06:03:09 --> Could not find the language line "Home"
ERROR - 2023-11-25 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 06:30:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-25 06:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 06:46:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 06:46:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 06:46:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 06:46:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 06:46:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 06:46:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 06:46:10 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 06:46:11 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 06:48:18 --> Could not find the language line "Home"
ERROR - 2023-11-25 06:48:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 06:49:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:49:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 06:49:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:49:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 06:50:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 06:50:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 06:50:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 06:51:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 06:51:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:52:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:52:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:52:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 06:52:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:53:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 06:53:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:54:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:54:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 06:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 06:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-25 06:56:42 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:01:09 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:03:50 --> Could not find the language line "products"
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 07:07:31 --> Could not find the language line "Socks"
ERROR - 2023-11-25 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-25 07:31:37 --> Could not find the language line "Home"
ERROR - 2023-11-25 07:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 07:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 07:34:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 07:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 07:41:20 --> 404 Page Not Found: Products/products
ERROR - 2023-11-25 07:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 07:53:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 07:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-25 08:11:20 --> Could not find the language line "products"
ERROR - 2023-11-25 08:13:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 08:26:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-25 08:37:03 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-25 08:40:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 08:40:29 --> Could not find the language line "Home"
ERROR - 2023-11-25 08:41:20 --> Could not find the language line "products"
ERROR - 2023-11-25 08:42:53 --> Could not find the language line "Home"
ERROR - 2023-11-25 08:42:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-25 08:42:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-25 08:43:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 08:43:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 08:43:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 08:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 08:45:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 08:48:34 --> Could not find the language line "Home"
ERROR - 2023-11-25 08:53:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 08:53:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 08:53:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 08:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 08:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 08:56:20 --> Could not find the language line "products"
ERROR - 2023-11-25 09:00:15 --> Could not find the language line "Home"
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 09:01:02 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 09:01:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 09:01:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 09:01:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 09:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 09:03:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 09:03:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 09:03:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 09:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 09:05:47 --> Could not find the language line "products"
ERROR - 2023-11-25 09:06:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 09:07:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 09:09:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 09:09:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 09:11:47 --> Could not find the language line "Home"
ERROR - 2023-11-25 09:23:43 --> Could not find the language line "products"
ERROR - 2023-11-25 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-25 09:31:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 09:37:35 --> Could not find the language line "Home"
ERROR - 2023-11-25 09:40:07 --> Could not find the language line "Home"
ERROR - 2023-11-25 09:42:48 --> Could not find the language line "Home"
ERROR - 2023-11-25 09:47:29 --> Could not find the language line "Home"
ERROR - 2023-11-25 09:51:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 09:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-25 10:00:29 --> Could not find the language line "Home"
ERROR - 2023-11-25 10:06:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 10:10:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 10:22:25 --> Could not find the language line "products"
ERROR - 2023-11-25 10:26:20 --> 404 Page Not Found: Products/products
ERROR - 2023-11-25 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 10:31:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 10:31:33 --> Could not find the language line "Home"
ERROR - 2023-11-25 10:34:11 --> Could not find the language line "products"
ERROR - 2023-11-25 10:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 10:40:29 --> Could not find the language line "Home"
ERROR - 2023-11-25 10:41:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 10:43:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 10:45:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 10:45:51 --> Could not find the language line "Home"
ERROR - 2023-11-25 10:47:58 --> Could not find the language line "Home"
ERROR - 2023-11-25 10:55:26 --> Could not find the language line "Home"
ERROR - 2023-11-25 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 11:09:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 11:11:33 --> Could not find the language line "products"
ERROR - 2023-11-25 11:16:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 11:21:33 --> Could not find the language line "products"
ERROR - 2023-11-25 11:24:17 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-25 11:26:33 --> Could not find the language line "products"
ERROR - 2023-11-25 11:28:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-25 11:30:17 --> Could not find the language line "Home"
ERROR - 2023-11-25 11:31:33 --> Could not find the language line "products"
ERROR - 2023-11-25 11:32:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 11:36:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 11:36:33 --> Could not find the language line "products"
ERROR - 2023-11-25 11:41:33 --> Could not find the language line "products"
ERROR - 2023-11-25 11:43:32 --> Could not find the language line "Home"
ERROR - 2023-11-25 11:43:33 --> Could not find the language line "products"
ERROR - 2023-11-25 11:46:33 --> Could not find the language line "products"
ERROR - 2023-11-25 11:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 11:54:03 --> Could not find the language line "products"
ERROR - 2023-11-25 11:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 12:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-25 12:04:03 --> Could not find the language line "products"
ERROR - 2023-11-25 12:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 12:14:04 --> Could not find the language line "products"
ERROR - 2023-11-25 12:19:03 --> Could not find the language line "products"
ERROR - 2023-11-25 12:21:33 --> Could not find the language line "products"
ERROR - 2023-11-25 12:24:03 --> Could not find the language line "products"
ERROR - 2023-11-25 12:26:33 --> Could not find the language line "products"
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:27:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 12:29:03 --> Could not find the language line "products"
ERROR - 2023-11-25 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-25 12:31:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 12:31:33 --> Could not find the language line "products"
ERROR - 2023-11-25 12:31:34 --> Could not find the language line "products"
ERROR - 2023-11-25 12:34:03 --> Could not find the language line "products"
ERROR - 2023-11-25 12:35:39 --> Could not find the language line "Home"
ERROR - 2023-11-25 12:41:33 --> Could not find the language line "products"
ERROR - 2023-11-25 12:44:03 --> Could not find the language line "products"
ERROR - 2023-11-25 12:45:40 --> Could not find the language line "Home"
ERROR - 2023-11-25 12:45:43 --> Could not find the language line "Home"
ERROR - 2023-11-25 12:46:33 --> Could not find the language line "products"
ERROR - 2023-11-25 12:49:03 --> 404 Page Not Found: Products/products
ERROR - 2023-11-25 12:53:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 12:54:03 --> Could not find the language line "products"
ERROR - 2023-11-25 12:56:33 --> Could not find the language line "products"
ERROR - 2023-11-25 12:59:03 --> Could not find the language line "products"
ERROR - 2023-11-25 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-25 13:01:33 --> Could not find the language line "products"
ERROR - 2023-11-25 13:04:03 --> Could not find the language line "products"
ERROR - 2023-11-25 13:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 13:07:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 13:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 13:12:23 --> Could not find the language line "products"
ERROR - 2023-11-25 13:13:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 13:19:03 --> Could not find the language line "products"
ERROR - 2023-11-25 13:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 13:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 13:25:43 --> Could not find the language line "products"
ERROR - 2023-11-25 13:27:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 13:29:03 --> Could not find the language line "products"
ERROR - 2023-11-25 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-25 13:33:39 --> Could not find the language line "Home"
ERROR - 2023-11-25 13:37:02 --> Could not find the language line "products"
ERROR - 2023-11-25 13:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 13:44:14 --> Could not find the language line "Home"
ERROR - 2023-11-25 13:48:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 13:55:02 --> Could not find the language line "Other"
ERROR - 2023-11-25 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-25 14:08:43 --> Could not find the language line "products"
ERROR - 2023-11-25 14:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 14:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 14:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 14:20:45 --> Could not find the language line "products"
ERROR - 2023-11-25 14:24:53 --> 404 Page Not Found: Products/products
ERROR - 2023-11-25 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-25 14:32:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 14:32:15 --> Could not find the language line "Home"
ERROR - 2023-11-25 14:33:49 --> Could not find the language line "Home"
ERROR - 2023-11-25 14:37:02 --> Could not find the language line "products"
ERROR - 2023-11-25 14:37:29 --> Could not find the language line "Home"
ERROR - 2023-11-25 14:37:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 14:37:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 14:38:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 14:38:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 14:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 14:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 14:38:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 14:38:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 14:38:54 --> Could not find the language line "Home"
ERROR - 2023-11-25 14:38:56 --> Could not find the language line "Home"
ERROR - 2023-11-25 14:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 14:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 14:40:04 --> Could not find the language line "Home"
ERROR - 2023-11-25 14:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 14:40:18 --> Could not find the language line "Other"
ERROR - 2023-11-25 14:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 14:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 14:41:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 14:42:32 --> Could not find the language line "Other"
ERROR - 2023-11-25 14:42:38 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-11-25 14:42:38 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-25 14:42:38 --> Could not find the language line "Home"
ERROR - 2023-11-25 14:42:40 --> Could not find the language line "Other"
ERROR - 2023-11-25 14:42:57 --> Could not find the language line "Other"
ERROR - 2023-11-25 14:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 14:43:23 --> Could not find the language line "Other"
ERROR - 2023-11-25 14:43:23 --> Could not find the language line "Other"
ERROR - 2023-11-25 14:43:33 --> Could not find the language line "Other"
ERROR - 2023-11-25 14:46:23 --> Could not find the language line "Other"
ERROR - 2023-11-25 14:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 14:46:31 --> Could not find the language line "Home"
ERROR - 2023-11-25 14:47:31 --> Could not find the language line "Home"
ERROR - 2023-11-25 14:47:39 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:47:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-25 14:48:04 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-11-25 14:48:05 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-25 14:48:12 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:48:12 --> Could not find the language line "assets"
ERROR - 2023-11-25 14:49:27 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:50:35 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:51:00 --> Could not find the language line "Other"
ERROR - 2023-11-25 14:52:23 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:52:55 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 14:53:17 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:53:22 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:54:00 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:54:24 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:54:34 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 14:54:53 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:55:16 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:56:10 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:56:50 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:57:49 --> Could not find the language line "Socks"
ERROR - 2023-11-25 14:58:11 --> Could not find the language line "Socks"
ERROR - 2023-11-25 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 15:06:38 --> Could not find the language line "products"
ERROR - 2023-11-25 15:08:18 --> Could not find the language line "products"
ERROR - 2023-11-25 15:26:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 15:26:58 --> Could not find the language line "Home"
ERROR - 2023-11-25 15:29:13 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-11-25 15:29:13 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-11-25 15:29:13 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-11-25 15:29:14 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-25 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 15:32:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-11-25 15:33:22 --> Could not find the language line "Home"
ERROR - 2023-11-25 15:45:54 --> Could not find the language line "Home"
ERROR - 2023-11-25 15:53:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 15:53:27 --> Could not find the language line "Home"
ERROR - 2023-11-25 15:53:52 --> Could not find the language line "Home"
ERROR - 2023-11-25 15:54:58 --> Could not find the language line "products"
ERROR - 2023-11-25 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 16:00:38 --> Could not find the language line "Home"
ERROR - 2023-11-25 16:04:35 --> Could not find the language line "Home"
ERROR - 2023-11-25 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-25 16:34:08 --> Could not find the language line "Home"
ERROR - 2023-11-25 16:38:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 16:39:58 --> 404 Page Not Found: Products/products
ERROR - 2023-11-25 16:42:51 --> Could not find the language line "Home"
ERROR - 2023-11-25 16:51:35 --> Could not find the language line "Home"
ERROR - 2023-11-25 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-25 17:23:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 17:28:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-25 17:31:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 17:33:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 17:37:08 --> Could not find the language line "Perfume"
ERROR - 2023-11-25 17:37:47 --> 404 Page Not Found: Products/products
ERROR - 2023-11-25 17:49:25 --> Could not find the language line "Home"
ERROR - 2023-11-25 17:50:45 --> Could not find the language line "Home"
ERROR - 2023-11-25 17:52:32 --> Could not find the language line "Home"
ERROR - 2023-11-25 17:53:11 --> Could not find the language line "Home"
ERROR - 2023-11-25 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-25 18:03:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-25 18:06:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 18:17:36 --> Could not find the language line "Home"
ERROR - 2023-11-25 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 18:37:05 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-25 18:38:48 --> Could not find the language line "Home"
ERROR - 2023-11-25 18:42:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 18:48:20 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-25 18:49:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 18:50:56 --> Could not find the language line "Home"
ERROR - 2023-11-25 18:59:35 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-25 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-25 19:04:40 --> Could not find the language line "Home"
ERROR - 2023-11-25 19:07:47 --> Could not find the language line "products"
ERROR - 2023-11-25 19:10:50 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-25 19:14:19 --> Could not find the language line "Home"
ERROR - 2023-11-25 19:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 19:14:28 --> Could not find the language line "Home"
ERROR - 2023-11-25 19:15:13 --> Could not find the language line "Home"
ERROR - 2023-11-25 19:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 19:26:07 --> Could not find the language line "Home"
ERROR - 2023-11-25 19:26:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 19:26:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 19:26:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 19:26:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 19:26:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 19:26:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 19:26:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 19:26:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 19:26:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 19:26:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 19:26:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 19:26:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 19:26:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 19:26:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 19:26:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 19:26:45 --> Could not find the language line "Home"
ERROR - 2023-11-25 19:28:37 --> Could not find the language line "Home"
ERROR - 2023-11-25 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 19:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 19:31:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 19:31:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 19:31:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 19:31:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 19:31:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 19:31:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:31:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 19:33:08 --> Could not find the language line "Home"
ERROR - 2023-11-25 19:41:47 --> Could not find the language line "products"
ERROR - 2023-11-25 19:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 19:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 19:53:09 --> Could not find the language line "Home"
ERROR - 2023-11-25 19:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 19:53:47 --> Could not find the language line "Home"
ERROR - 2023-11-25 19:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 19:54:23 --> Could not find the language line "Home"
ERROR - 2023-11-25 19:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 20:00:06 --> Could not find the language line "Home"
ERROR - 2023-11-25 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 20:00:30 --> Could not find the language line "Home"
ERROR - 2023-11-25 20:01:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 20:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 20:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 20:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 20:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 20:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 20:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 20:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 20:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 20:16:47 --> Could not find the language line "products"
ERROR - 2023-11-25 20:19:37 --> Could not find the language line "products"
ERROR - 2023-11-25 20:21:18 --> Could not find the language line "Home"
ERROR - 2023-11-25 20:21:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 20:21:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 20:21:35 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 20:21:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 20:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 20:22:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 20:22:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 20:22:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 20:22:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 20:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 20:22:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-25 20:43:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-25 20:43:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 20:43:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 20:43:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 20:43:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 20:43:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 20:43:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 20:43:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 20:43:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 20:43:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 20:43:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 20:43:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 20:43:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 20:43:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 20:43:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 20:43:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 20:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 20:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 20:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 20:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:04:22 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:06:47 --> Could not find the language line "products"
ERROR - 2023-11-25 21:07:19 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-25 21:11:47 --> Could not find the language line "products"
ERROR - 2023-11-25 21:12:03 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:14:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:15:40 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:19:48 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-11-25 21:19:48 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:19:52 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:22:05 --> Could not find the language line "products"
ERROR - 2023-11-25 21:27:23 --> Could not find the language line "products"
ERROR - 2023-11-25 21:30:15 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:32:40 --> Could not find the language line "products"
ERROR - 2023-11-25 21:33:37 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:37:00 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 21:37:38 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:38:02 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:40:38 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:43:15 --> Could not find the language line "products"
ERROR - 2023-11-25 21:43:55 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 21:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 21:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 21:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 21:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 21:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 21:46:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 21:46:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 21:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 21:46:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 21:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 21:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 21:46:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 21:46:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 21:46:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 21:46:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 21:46:47 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:48:33 --> Could not find the language line "products"
ERROR - 2023-11-25 21:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 21:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 21:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 21:52:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 21:52:12 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:53:51 --> Could not find the language line "products"
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:54:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-25 21:55:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 21:56:13 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 21:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 21:57:42 --> Could not find the language line "Home"
ERROR - 2023-11-25 21:59:08 --> Could not find the language line "products"
ERROR - 2023-11-25 22:00:18 --> Could not find the language line "Home"
ERROR - 2023-11-25 22:04:26 --> Could not find the language line "products"
ERROR - 2023-11-25 22:05:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 22:05:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 22:05:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 22:05:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 22:05:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 22:05:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 22:05:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 22:05:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 22:05:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 22:05:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 22:05:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 22:05:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 22:05:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 22:05:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 22:05:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 22:09:44 --> Could not find the language line "products"
ERROR - 2023-11-25 22:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-25 22:10:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-25 22:13:53 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-25 22:20:19 --> Could not find the language line "products"
ERROR - 2023-11-25 22:25:37 --> Could not find the language line "products"
ERROR - 2023-11-25 22:30:16 --> Could not find the language line "Home"
ERROR - 2023-11-25 22:30:57 --> Could not find the language line "products"
ERROR - 2023-11-25 22:31:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-25 22:36:13 --> Could not find the language line "products"
ERROR - 2023-11-25 22:38:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 22:40:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 22:45:15 --> Could not find the language line "products"
ERROR - 2023-11-25 22:46:47 --> Could not find the language line "products"
ERROR - 2023-11-25 22:51:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 22:52:05 --> Could not find the language line "products"
ERROR - 2023-11-25 22:55:51 --> Could not find the language line "products"
ERROR - 2023-11-25 22:57:22 --> Could not find the language line "products"
ERROR - 2023-11-25 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-25 23:02:40 --> Could not find the language line "products"
ERROR - 2023-11-25 23:07:58 --> Could not find the language line "products"
ERROR - 2023-11-25 23:11:27 --> Could not find the language line "Socks"
ERROR - 2023-11-25 23:13:15 --> Could not find the language line "products"
ERROR - 2023-11-25 23:18:33 --> Could not find the language line "products"
ERROR - 2023-11-25 23:19:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 23:19:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 23:19:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 23:19:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 23:19:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 23:19:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 23:19:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 23:19:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 23:19:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 23:19:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 23:19:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 23:19:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 23:19:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 23:19:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 23:19:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 23:19:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 23:19:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 23:19:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 23:19:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 23:19:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-25 23:19:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 23:19:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 23:19:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-25 23:19:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-25 23:23:51 --> Could not find the language line "products"
ERROR - 2023-11-25 23:29:08 --> Could not find the language line "products"
ERROR - 2023-11-25 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-11-25 23:34:26 --> Could not find the language line "products"
ERROR - 2023-11-25 23:39:44 --> Could not find the language line "products"
ERROR - 2023-11-25 23:45:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-25 23:50:24 --> Could not find the language line "products"
ERROR - 2023-11-25 23:55:37 --> Could not find the language line "products"
