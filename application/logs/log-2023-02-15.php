<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-02-15 00:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-15 00:03:00 --> Could not find the language line "Home"
ERROR - 2023-02-15 00:03:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 00:03:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 00:04:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 00:06:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 00:06:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 00:06:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 00:06:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 00:06:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 00:06:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 00:06:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 00:06:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 00:07:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 00:07:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 00:07:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 00:07:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 00:07:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 00:07:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 00:07:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 00:07:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-15 00:35:59 --> Could not find the language line "Home"
ERROR - 2023-02-15 00:36:29 --> Could not find the language line "Home"
ERROR - 2023-02-15 00:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 00:37:58 --> Could not find the language line "Home"
ERROR - 2023-02-15 00:37:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 00:38:08 --> Could not find the language line "Home"
ERROR - 2023-02-15 00:39:21 --> Could not find the language line "Home"
ERROR - 2023-02-15 00:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 00:41:43 --> Could not find the language line "Home"
ERROR - 2023-02-15 00:41:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 00:41:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-15 01:07:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 01:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 01:22:54 --> Could not find the language line "Home"
ERROR - 2023-02-15 01:22:57 --> Could not find the language line "Home"
ERROR - 2023-02-15 01:23:18 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 01:23:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 01:23:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 01:24:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 01:24:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 01:24:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 01:24:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 01:24:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 01:24:24 --> Could not find the language line "Home"
ERROR - 2023-02-15 01:24:28 --> Could not find the language line "Socks"
ERROR - 2023-02-15 01:24:41 --> Could not find the language line "Home"
ERROR - 2023-02-15 01:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-15 01:36:16 --> Could not find the language line "Home"
ERROR - 2023-02-15 01:38:35 --> Could not find the language line "Home"
ERROR - 2023-02-15 01:46:25 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 01:58:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 01:58:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 02:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 02:15:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 02:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 02:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 02:27:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 02:27:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 02:27:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 02:27:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 02:27:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 02:27:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 02:27:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 02:27:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 02:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 02:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 02:28:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 02:28:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 02:28:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 02:28:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 02:28:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 02:28:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 02:28:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 02:28:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 02:28:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 02:28:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 02:34:03 --> Could not find the language line "Home"
ERROR - 2023-02-15 02:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 02:49:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:03:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 03:11:40 --> Could not find the language line "Socks"
ERROR - 2023-02-15 03:22:40 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:22:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 03:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 03:23:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 03:23:25 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 03:23:40 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 03:24:17 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 03:24:38 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 03:25:38 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:29:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-15 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 03:32:51 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 03:34:09 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:34:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 03:34:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 03:34:29 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:34:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 03:35:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 03:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 03:36:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 03:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 03:36:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 03:36:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 03:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 03:36:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 03:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 03:37:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 03:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 03:37:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 03:37:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 03:37:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 03:37:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 03:37:44 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:37:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 03:37:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 03:38:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 03:38:03 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:38:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 03:38:33 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:39:14 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 03:40:00 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 03:40:56 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:57:45 --> Could not find the language line "Home"
ERROR - 2023-02-15 03:59:31 --> Could not find the language line "Home"
ERROR - 2023-02-15 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 04:12:41 --> Could not find the language line "Home"
ERROR - 2023-02-15 04:13:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 04:19:05 --> Could not find the language line "Home"
ERROR - 2023-02-15 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-15 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-15 04:45:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 04:45:24 --> Could not find the language line "Home"
ERROR - 2023-02-15 04:56:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 04:56:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 04:57:07 --> Could not find the language line "Home"
ERROR - 2023-02-15 05:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 05:04:40 --> Could not find the language line "Home"
ERROR - 2023-02-15 05:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 05:07:32 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 05:07:36 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 05:08:00 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 05:14:17 --> Could not find the language line "Home"
ERROR - 2023-02-15 05:16:03 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 05:16:18 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 05:16:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 05:17:19 --> Could not find the language line "Socks"
ERROR - 2023-02-15 05:17:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 05:17:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 05:17:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 05:17:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 05:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 05:30:04 --> Could not find the language line "Home"
ERROR - 2023-02-15 05:30:08 --> Could not find the language line "Home"
ERROR - 2023-02-15 05:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 05:41:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 05:48:46 --> Could not find the language line "Home"
ERROR - 2023-02-15 05:48:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 05:48:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 05:48:59 --> Could not find the language line "Home"
ERROR - 2023-02-15 05:49:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 05:57:27 --> Could not find the language line "Home"
ERROR - 2023-02-15 05:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 06:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 06:01:06 --> Could not find the language line "Home"
ERROR - 2023-02-15 06:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 06:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 06:03:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 06:07:00 --> Could not find the language line "Perfume"
ERROR - 2023-02-15 06:12:12 --> Could not find the language line "Home"
ERROR - 2023-02-15 06:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 06:22:29 --> Could not find the language line "Home"
ERROR - 2023-02-15 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-15 06:40:24 --> Could not find the language line "Home"
ERROR - 2023-02-15 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 07:07:37 --> Could not find the language line "Home"
ERROR - 2023-02-15 07:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 07:09:39 --> Could not find the language line "Home"
ERROR - 2023-02-15 07:11:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-15 07:12:24 --> Could not find the language line "Home"
ERROR - 2023-02-15 07:12:28 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 07:12:31 --> Could not find the language line "Home"
ERROR - 2023-02-15 07:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 07:21:39 --> Could not find the language line "Home"
ERROR - 2023-02-15 07:26:10 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 07:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 07:52:07 --> Could not find the language line "Home"
ERROR - 2023-02-15 07:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 07:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 07:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 07:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 07:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 07:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 08:01:50 --> Could not find the language line "Home"
ERROR - 2023-02-15 08:02:32 --> Could not find the language line "Home"
ERROR - 2023-02-15 08:02:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 08:02:41 --> Could not find the language line "Home"
ERROR - 2023-02-15 08:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 08:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 08:10:39 --> Could not find the language line "Home"
ERROR - 2023-02-15 08:11:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 08:11:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 08:16:53 --> Could not find the language line "Home"
ERROR - 2023-02-15 08:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 08:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 08:19:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 08:19:47 --> Could not find the language line "Home"
ERROR - 2023-02-15 08:24:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 08:24:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 08:24:35 --> Could not find the language line "Home"
ERROR - 2023-02-15 08:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 08:31:20 --> Could not find the language line "Home"
ERROR - 2023-02-15 08:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 08:37:29 --> Could not find the language line "Home"
ERROR - 2023-02-15 08:38:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 08:38:25 --> Could not find the language line "socks"
ERROR - 2023-02-15 08:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 08:53:25 --> Could not find the language line "Home"
ERROR - 2023-02-15 08:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 08:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 08:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-15 09:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 09:14:54 --> Could not find the language line "Home"
ERROR - 2023-02-15 09:17:28 --> Could not find the language line "Home"
ERROR - 2023-02-15 09:20:35 --> Could not find the language line "Home"
ERROR - 2023-02-15 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 09:33:30 --> Could not find the language line "Home"
ERROR - 2023-02-15 09:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 09:33:51 --> Could not find the language line "Perfume"
ERROR - 2023-02-15 09:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 09:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 09:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 09:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 09:46:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 09:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 10:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 10:07:32 --> Could not find the language line "Home"
ERROR - 2023-02-15 10:07:58 --> Could not find the language line "Home"
ERROR - 2023-02-15 10:15:51 --> Could not find the language line "Home"
ERROR - 2023-02-15 10:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 10:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 10:29:18 --> Could not find the language line "Home"
ERROR - 2023-02-15 10:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 10:30:16 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 10:30:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 10:31:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 10:31:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 10:42:34 --> Could not find the language line "Home"
ERROR - 2023-02-15 10:42:39 --> Could not find the language line "Home"
ERROR - 2023-02-15 10:43:00 --> Could not find the language line "Home"
ERROR - 2023-02-15 10:43:03 --> Could not find the language line "Home"
ERROR - 2023-02-15 10:45:27 --> Could not find the language line "Home"
ERROR - 2023-02-15 10:46:02 --> Could not find the language line "Home"
ERROR - 2023-02-15 10:47:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 10:47:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 10:47:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 10:47:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 10:47:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 10:47:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 10:47:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 10:47:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 10:50:55 --> Could not find the language line "Home"
ERROR - 2023-02-15 10:51:50 --> Could not find the language line "Home"
ERROR - 2023-02-15 10:55:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:06:25 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:06:56 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 11:07:35 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 11:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 11:26:39 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:26:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-15 11:27:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 11:27:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 11:27:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 11:27:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 11:27:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 11:27:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 11:28:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 11:28:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 11:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 11:28:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 11:28:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 11:28:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 11:28:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 11:28:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 11:28:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 11:28:38 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:30:07 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:31:08 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 11:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 11:31:35 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:32:04 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:32:19 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:32:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 11:33:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 11:33:30 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:33:32 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:33:32 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 11:35:57 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:35:58 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 11:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 11:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 11:39:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 11:45:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 11:46:31 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:46:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 11:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 11:47:04 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:47:08 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 11:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 11:48:47 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 11:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 11:48:52 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:48:56 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:48:59 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:49:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 11:49:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 11:49:24 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:49:35 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:49:38 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 11:49:54 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:50:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 11:50:10 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 11:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 11:50:29 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:50:35 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 11:50:38 --> Could not find the language line "Home"
ERROR - 2023-02-15 11:55:29 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 11:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 11:59:02 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:00:08 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:01:56 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:11:25 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:11:26 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:11:28 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:12:00 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:12:01 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:12:02 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:14:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 12:15:34 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:16:02 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:19:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 12:19:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 12:19:53 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-02-15 12:19:57 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-02-15 12:20:00 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-15 12:20:02 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-15 12:20:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 12:20:07 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:21:17 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:21:19 --> Could not find the language line "Disclaimer"
ERROR - 2023-02-15 12:21:31 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:21:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 12:21:55 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 12:22:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 12:22:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 12:22:08 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 12:22:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 12:22:19 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 12:22:26 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 12:22:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 12:22:36 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 12:22:39 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 12:22:44 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:23:17 --> Could not find the language line "Perfume"
ERROR - 2023-02-15 12:24:05 --> Could not find the language line "Socks"
ERROR - 2023-02-15 12:24:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 12:24:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:24:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:25:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:25:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:36:15 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 12:36:43 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 12:36:45 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:38:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-15 12:38:17 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:39:56 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 12:40:31 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 12:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:40:54 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 12:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:41:56 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:41:57 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:41:58 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:41:58 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:42:23 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:42:25 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:42:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:42:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:42:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:42:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:42:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:42:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:43:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:43:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:43:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:43:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:43:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:43:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:43:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:43:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:43:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:43:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:43:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:43:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 12:43:41 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:43:52 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:49:49 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:51:14 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:51:19 --> Could not find the language line "Home"
ERROR - 2023-02-15 12:55:49 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 12:56:49 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 12:57:34 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 12:57:58 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 12:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 12:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:04:34 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 13:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 13:11:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-15 13:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 13:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 13:15:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:15:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 13:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 13:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 13:24:35 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:24:39 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:24:39 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:24:40 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:24:44 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:25:21 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:25:42 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:26:00 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:26:04 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:26:06 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:26:07 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:26:08 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:26:09 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 13:29:52 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 13:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 13:37:39 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:37:43 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:37:43 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:37:44 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:37:45 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:38:12 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 13:45:39 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:46:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 13:46:52 --> Could not find the language line "Home"
ERROR - 2023-02-15 13:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 13:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 13:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 13:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 13:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 13:52:18 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 14:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 14:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 14:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 14:06:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 14:11:57 --> Could not find the language line "Home"
ERROR - 2023-02-15 14:14:25 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 14:15:15 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 14:19:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 14:19:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 14:19:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 14:19:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 14:19:39 --> Could not find the language line "Home"
ERROR - 2023-02-15 14:19:54 --> Could not find the language line "Home"
ERROR - 2023-02-15 14:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 14:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 14:22:54 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 14:23:04 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 14:23:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 14:23:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 14:23:37 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 14:26:15 --> Could not find the language line "Home"
ERROR - 2023-02-15 14:27:12 --> Could not find the language line "Home"
ERROR - 2023-02-15 14:28:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 14:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 14:29:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 14:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-15 14:30:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 14:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 14:32:04 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 14:32:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 14:38:18 --> Could not find the language line "Home"
ERROR - 2023-02-15 14:57:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:05:51 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:05:57 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:16:26 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 15:21:21 --> Could not find the language line "Socks"
ERROR - 2023-02-15 15:21:55 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:22:08 --> Could not find the language line "Socks"
ERROR - 2023-02-15 15:23:58 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:25:20 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:25:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 15:25:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 15:25:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 15:25:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 15:25:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 15:25:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 15:25:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 15:25:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 15:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:26:21 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:26:55 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:29:48 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:30:46 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:32:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 15:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:32:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 15:32:52 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 15:33:06 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:33:15 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 15:33:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 15:33:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 15:33:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 15:33:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 15:33:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 15:33:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 15:33:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 15:33:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 15:33:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 15:33:35 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 15:33:35 --> Could not find the language line "Perfume"
ERROR - 2023-02-15 15:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:33:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 15:34:06 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 15:34:46 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:34:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 15:34:58 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 15:35:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 15:43:55 --> Could not find the language line "Socks"
ERROR - 2023-02-15 15:44:01 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:44:02 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:44:03 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:44:04 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:44:05 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:44:06 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:45:43 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:46:25 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:46:51 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:47:24 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:47:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 15:47:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 15:47:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 15:47:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 15:48:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 15:48:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 15:48:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 15:48:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 15:49:03 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:49:39 --> 404 Page Not Found: Big-sizes-mkasat-kbyr/b128-shoes
ERROR - 2023-02-15 15:51:40 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:52:08 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:52:11 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 15:52:30 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 15:52:36 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 15:52:37 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 15:58:39 --> Could not find the language line "Home"
ERROR - 2023-02-15 15:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-15 16:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 16:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 16:02:11 --> Could not find the language line "Home"
ERROR - 2023-02-15 16:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 16:11:48 --> Could not find the language line "Home"
ERROR - 2023-02-15 16:14:01 --> Could not find the language line "Home"
ERROR - 2023-02-15 16:14:32 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 16:20:18 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 16:20:39 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-15 16:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 16:21:02 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 16:21:05 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 16:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 16:21:58 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 16:22:13 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 16:24:25 --> Could not find the language line "Home"
ERROR - 2023-02-15 16:25:03 --> Could not find the language line "Home"
ERROR - 2023-02-15 16:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 16:29:46 --> Could not find the language line "Home"
ERROR - 2023-02-15 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-15 16:30:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:30:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 16:30:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:30:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:31:07 --> Could not find the language line "Home"
ERROR - 2023-02-15 16:31:28 --> Could not find the language line "Home"
ERROR - 2023-02-15 16:31:38 --> Could not find the language line "Perfume"
ERROR - 2023-02-15 16:31:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:31:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:32:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:32:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:32:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:32:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:32:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:32:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:32:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:32:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:32:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:32:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 16:33:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:33:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 16:34:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:34:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 16:34:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 16:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 16:35:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 16:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 16:35:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 16:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 16:49:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 16:49:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 16:49:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 16:49:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 16:49:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 16:49:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 16:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 16:54:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 16:55:59 --> Could not find the language line "Home"
ERROR - 2023-02-15 16:56:30 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 17:09:43 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:11:16 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:11:59 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-15 17:12:08 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:12:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:12:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:12:31 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:12:39 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:12:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:13:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:13:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:13:33 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:13:35 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:13:39 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:13:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:13:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:14:17 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:18:09 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 17:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 17:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:40:05 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:40:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:45:36 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 17:47:24 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 17:48:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:48:50 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:49:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:49:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:50:08 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:50:24 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:50:40 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:51:15 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 17:51:30 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:52:17 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 17:53:38 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 17:54:34 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:54:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 17:54:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 17:54:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 17:54:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 17:54:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 17:54:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 17:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 17:56:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 17:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 17:58:08 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 17:58:27 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-02-15 17:58:28 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-02-15 17:58:28 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-02-15 17:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 17:58:57 --> Could not find the language line "Home"
ERROR - 2023-02-15 17:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-15 18:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:00:59 --> Could not find the language line "Home"
ERROR - 2023-02-15 18:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:03:34 --> Could not find the language line "Home"
ERROR - 2023-02-15 18:03:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 18:03:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 18:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:06:31 --> Could not find the language line "Home"
ERROR - 2023-02-15 18:23:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 18:23:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 18:23:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 18:23:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 18:23:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 18:23:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 18:23:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-15 18:23:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-15 18:24:04 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 18:24:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 18:25:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 18:25:12 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 18:25:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-15 18:34:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 18:34:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 18:37:47 --> Could not find the language line "Home"
ERROR - 2023-02-15 18:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:38:19 --> Could not find the language line "Home"
ERROR - 2023-02-15 18:38:21 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 18:38:22 --> Could not find the language line "Home"
ERROR - 2023-02-15 18:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:48:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 18:50:56 --> Could not find the language line "Home"
ERROR - 2023-02-15 18:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 18:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:06:24 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:06:36 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:08:02 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:08:49 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:14:57 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:16:39 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:16:40 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:16:50 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:16:52 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:18:41 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:19:34 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:20:01 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:22:42 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-02-15 19:22:42 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:26:21 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:26:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 19:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:27:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 19:28:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 19:28:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 19:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:29:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 19:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:29:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 19:29:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 19:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:29:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 19:29:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 19:30:09 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:30:51 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 19:31:17 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:33:40 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:42:27 --> Could not find the language line "Home"
ERROR - 2023-02-15 19:48:21 --> 404 Page Not Found: Dup-installer/main.installer.php
ERROR - 2023-02-15 19:53:11 --> 404 Page Not Found: Components/com_creativecontactform
ERROR - 2023-02-15 19:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 19:58:21 --> Could not find the language line "Perfume"
ERROR - 2023-02-15 19:58:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 19:58:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 19:58:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 19:58:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 19:59:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 19:59:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 19:59:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 19:59:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 19:59:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 19:59:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 20:00:03 --> Could not find the language line "Socks"
ERROR - 2023-02-15 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 20:01:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 20:01:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 20:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 20:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 20:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 20:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 20:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 20:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 20:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 20:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 20:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 20:15:26 --> Could not find the language line "Home"
ERROR - 2023-02-15 20:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 20:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 20:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 20:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 20:21:16 --> Could not find the language line "Bracelets"
ERROR - 2023-02-15 20:21:58 --> Could not find the language line "Socks"
ERROR - 2023-02-15 20:22:14 --> Could not find the language line "Home"
ERROR - 2023-02-15 20:25:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 20:25:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 20:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 20:26:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 20:26:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 20:26:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-15 20:29:55 --> Could not find the language line "Home"
ERROR - 2023-02-15 20:30:09 --> Could not find the language line "Home"
ERROR - 2023-02-15 20:44:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 20:44:33 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:00:12 --> Could not find the language line "Socks"
ERROR - 2023-02-15 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:01:27 --> Could not find the language line "Socks"
ERROR - 2023-02-15 21:02:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-15 21:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 21:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 21:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 21:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 21:05:44 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 21:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 21:06:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 21:06:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-15 21:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 21:06:56 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:06:58 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:06:58 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:07:00 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 21:07:20 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 21:07:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-15 21:07:56 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 21:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 21:23:53 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:43:33 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:46:20 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:48:11 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 21:49:42 --> Could not find the language line "Socks"
ERROR - 2023-02-15 21:50:26 --> Could not find the language line "Socks"
ERROR - 2023-02-15 21:58:14 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 21:59:18 --> Could not find the language line "Home"
ERROR - 2023-02-15 21:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-15 22:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 22:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 22:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 22:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 22:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 22:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 22:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 22:01:57 --> Could not find the language line "Home"
ERROR - 2023-02-15 22:06:08 --> Could not find the language line "Home"
ERROR - 2023-02-15 22:06:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 22:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 22:06:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 22:06:50 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 22:07:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 22:07:19 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 22:07:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 22:07:32 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 22:07:54 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 22:07:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-15 22:19:14 --> Could not find the language line "Home"
ERROR - 2023-02-15 22:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 22:19:55 --> Could not find the language line "Home"
ERROR - 2023-02-15 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-15 22:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-15 23:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:09:57 --> Could not find the language line "Home"
ERROR - 2023-02-15 23:10:25 --> Could not find the language line "Socks"
ERROR - 2023-02-15 23:10:36 --> Could not find the language line "Socks"
ERROR - 2023-02-15 23:10:41 --> Could not find the language line "Socks"
ERROR - 2023-02-15 23:10:45 --> Could not find the language line "Home"
ERROR - 2023-02-15 23:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:11:44 --> Could not find the language line "Home"
ERROR - 2023-02-15 23:12:39 --> Could not find the language line "Home"
ERROR - 2023-02-15 23:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:12:56 --> Could not find the language line "Home"
ERROR - 2023-02-15 23:13:01 --> Could not find the language line "Perfume"
ERROR - 2023-02-15 23:13:02 --> Could not find the language line "Perfume"
ERROR - 2023-02-15 23:13:12 --> Could not find the language line "Home"
ERROR - 2023-02-15 23:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:15:51 --> Could not find the language line "Home"
ERROR - 2023-02-15 23:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-15 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-15 23:38:45 --> Could not find the language line "Home"
ERROR - 2023-02-15 23:39:57 --> Could not find the language line "Home"
