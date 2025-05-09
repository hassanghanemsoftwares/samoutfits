<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-02-24 00:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 00:03:26 --> Could not find the language line "Home"
ERROR - 2023-02-24 00:03:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 00:03:38 --> 404 Page Not Found: Asset-manifestjson/index
ERROR - 2023-02-24 00:21:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 00:23:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 00:23:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 00:23:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 00:23:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 00:23:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 00:23:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 00:23:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 00:23:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-24 00:32:49 --> Could not find the language line "Home"
ERROR - 2023-02-24 00:56:03 --> Could not find the language line "Home"
ERROR - 2023-02-24 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 01:00:38 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-02-24 01:13:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-24 01:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 01:47:18 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-24 01:51:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 01:53:59 --> Could not find the language line "Home"
ERROR - 2023-02-24 01:54:41 --> Could not find the language line "Home"
ERROR - 2023-02-24 01:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-24 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 02:57:57 --> Could not find the language line "Home"
ERROR - 2023-02-24 02:58:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-24 02:59:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 03:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-24 03:16:43 --> Could not find the language line "Home"
ERROR - 2023-02-24 03:28:35 --> Could not find the language line "Home"
ERROR - 2023-02-24 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-24 03:46:27 --> Could not find the language line "Home"
ERROR - 2023-02-24 03:46:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 03:47:08 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 03:47:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 03:47:39 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 03:47:56 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 03:47:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 04:22:09 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 04:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:32:49 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:33:48 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:34:33 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:42:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 04:48:57 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:49:12 --> Could not find the language line "Perfume"
ERROR - 2023-02-24 04:49:22 --> Could not find the language line "Perfume"
ERROR - 2023-02-24 04:49:28 --> Could not find the language line "Perfume"
ERROR - 2023-02-24 04:49:30 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:50:05 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:50:08 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 04:50:22 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:50:25 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:50:29 --> Could not find the language line "Bracelets"
ERROR - 2023-02-24 04:50:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-24 04:50:42 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:51:15 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:51:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-24 04:51:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-24 04:51:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 04:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 04:51:49 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:51:53 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:51:54 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 04:51:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 04:52:02 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 04:52:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 04:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 04:52:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 04:52:31 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:52:32 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 04:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 04:53:32 --> Could not find the language line "Home"
ERROR - 2023-02-24 04:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 04:59:50 --> Could not find the language line "Home"
ERROR - 2023-02-24 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-24 05:06:06 --> Could not find the language line "Home"
ERROR - 2023-02-24 05:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 05:07:06 --> Could not find the language line "Home"
ERROR - 2023-02-24 05:18:56 --> Could not find the language line "Home"
ERROR - 2023-02-24 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-24 05:42:41 --> Could not find the language line "Home"
ERROR - 2023-02-24 05:44:07 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:00:37 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 06:01:17 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:04:45 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:08:19 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:10:13 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:18:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 06:18:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 06:18:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 06:18:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 06:18:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 06:18:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 06:18:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 06:18:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 06:18:53 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:20:23 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:20:26 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:20:28 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:28:51 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:29:27 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:30:00 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:30:04 --> Could not find the language line "Perfume"
ERROR - 2023-02-24 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:30:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 06:30:30 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:33:19 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:37:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 06:37:42 --> Could not find the language line "Home"
ERROR - 2023-02-24 06:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 06:59:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 07:16:25 --> Could not find the language line "Home"
ERROR - 2023-02-24 07:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 07:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 07:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-24 07:37:05 --> Could not find the language line "Home"
ERROR - 2023-02-24 07:38:00 --> Could not find the language line "Home"
ERROR - 2023-02-24 07:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 07:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 07:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 07:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 07:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 07:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:01:49 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:01:55 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:02:09 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:02:16 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:04:04 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:04:47 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:13:05 --> Could not find the language line "Perfume"
ERROR - 2023-02-24 08:14:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 08:15:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:16:51 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:17:09 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:19:37 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:24:22 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:24:29 --> 404 Page Not Found: Home/accounting
ERROR - 2023-02-24 08:24:29 --> 404 Page Not Found: Home/accounting
ERROR - 2023-02-24 08:24:29 --> 404 Page Not Found: Home/accounting
ERROR - 2023-02-24 08:24:30 --> 404 Page Not Found: Home/accounting
ERROR - 2023-02-24 08:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:25:07 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:29:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:29:54 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:31:17 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:31:27 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:31:29 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:31:38 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:43:54 --> Could not find the language line "Home"
ERROR - 2023-02-24 08:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 08:49:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-24 08:49:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-24 08:56:27 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:01:02 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:02:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 09:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:04:26 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:05:51 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:08:53 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:31:04 --> Could not find the language line "Perfume"
ERROR - 2023-02-24 09:31:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:31:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-24 09:31:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 09:31:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 09:31:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 09:31:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 09:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:38:16 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:38:17 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:38:17 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:38:41 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:38:49 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:40:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:45:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 09:45:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 09:45:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-24 09:45:44 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:49:20 --> Could not find the language line "Home"
ERROR - 2023-02-24 09:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 09:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:00:50 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:01:04 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:01:05 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:07:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:11:19 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:20:20 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:32:49 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:35:27 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:40:10 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:40:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 10:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:47:54 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:49:32 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:50:51 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-02-24 10:50:52 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:52:04 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:52:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 10:52:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 10:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:52:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 10:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:53:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 10:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:54:02 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:55:58 --> Could not find the language line "Home"
ERROR - 2023-02-24 10:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 10:59:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:07:03 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:07:21 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:10:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-24 11:11:38 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:11:49 --> Could not find the language line "Perfume"
ERROR - 2023-02-24 11:12:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 11:13:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 11:14:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 11:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:15:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 11:15:24 --> Could not find the language line "Bracelets"
ERROR - 2023-02-24 11:15:34 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:15:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 11:15:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 11:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:16:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 11:16:12 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 11:16:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 11:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:17:34 --> Could not find the language line "Bracelets"
ERROR - 2023-02-24 11:18:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 11:18:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 11:19:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 11:19:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 11:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:19:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 11:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:20:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 11:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:23:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 11:23:46 --> Could not find the language line "Socks"
ERROR - 2023-02-24 11:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:24:18 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:28:28 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:28:29 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:29:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:29:16 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 11:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:29:34 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:29:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 11:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:30:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 11:30:45 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:31:19 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:32:00 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:33:53 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:34:44 --> Could not find the language line "Home"
ERROR - 2023-02-24 11:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:35:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 11:35:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 11:35:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 11:35:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 11:35:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 11:35:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 11:35:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 11:35:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 11:35:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 11:35:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 11:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:49:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 11:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 11:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:00:08 --> Could not find the language line "Home"
ERROR - 2023-02-24 12:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:18:53 --> Could not find the language line "Home"
ERROR - 2023-02-24 12:19:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 12:19:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 12:19:04 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 12:19:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 12:19:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 12:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:19:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 12:19:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 12:19:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 12:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:19:35 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 12:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:19:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 12:19:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 12:19:50 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 12:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:20:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 12:20:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 12:20:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 12:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:21:54 --> Could not find the language line "Home"
ERROR - 2023-02-24 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 12:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 12:58:42 --> Could not find the language line "Home"
ERROR - 2023-02-24 12:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-24 13:04:09 --> Could not find the language line "Home"
ERROR - 2023-02-24 13:04:48 --> Could not find the language line "Home"
ERROR - 2023-02-24 13:05:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 13:05:13 --> Could not find the language line "Home"
ERROR - 2023-02-24 13:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 13:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 13:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 13:12:10 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 13:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 13:25:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 13:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-24 13:33:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 13:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 13:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 13:42:20 --> Could not find the language line "Home"
ERROR - 2023-02-24 13:42:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 13:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 13:42:56 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 13:43:15 --> Could not find the language line "Home"
ERROR - 2023-02-24 13:45:57 --> Could not find the language line "Home"
ERROR - 2023-02-24 13:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 13:51:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 13:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 13:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:21:21 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:29:21 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:32:50 --> 404 Page Not Found: Env/index
ERROR - 2023-02-24 14:36:49 --> 404 Page Not Found: Sites/all
ERROR - 2023-02-24 14:37:16 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:40:42 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:41:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 14:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:43:14 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:44:01 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:44:40 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:44:44 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:45:30 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:45:51 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:45:54 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:47:49 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:52:06 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:52:06 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:57:09 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:57:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:57:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:57:13 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:57:14 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 14:59:19 --> Could not find the language line "Home"
ERROR - 2023-02-24 14:59:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:02:10 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:02:29 --> Could not find the language line "Socks"
ERROR - 2023-02-24 15:02:34 --> Could not find the language line "Socks"
ERROR - 2023-02-24 15:02:53 --> Could not find the language line "Socks"
ERROR - 2023-02-24 15:03:06 --> Could not find the language line "Socks"
ERROR - 2023-02-24 15:03:09 --> Could not find the language line "Socks"
ERROR - 2023-02-24 15:03:11 --> Could not find the language line "Socks"
ERROR - 2023-02-24 15:04:52 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:11:48 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:12:19 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:12:24 --> Could not find the language line "Bracelets"
ERROR - 2023-02-24 15:12:42 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:13:33 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:14:38 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:15:34 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:15:46 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 15:15:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 15:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:25:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:27:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 15:28:22 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:36:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-24 15:37:45 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:45:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-24 15:45:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-24 15:45:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-24 15:45:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-24 15:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:51:22 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:51:51 --> Could not find the language line "Home"
ERROR - 2023-02-24 15:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 15:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:10:23 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:11:14 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:11:27 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:14:43 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:20:21 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:20:33 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:21:36 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:28:04 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:28:14 --> Could not find the language line "Bracelets"
ERROR - 2023-02-24 16:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:28:35 --> Could not find the language line "Bracelets"
ERROR - 2023-02-24 16:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:28:40 --> Could not find the language line "Bracelets"
ERROR - 2023-02-24 16:28:49 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:29:19 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:30:23 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:30:26 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:30:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 16:30:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 16:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:30:45 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:53:43 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:54:54 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:55:32 --> Could not find the language line "Home"
ERROR - 2023-02-24 16:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 16:58:52 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:00:58 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:02:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:10:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:16:32 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 17:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:19:04 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:19:05 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:19:05 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:38:37 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:44:36 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:45:06 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:46:22 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:46:22 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:46:26 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:46:42 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:53:55 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:56:17 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:57:05 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 17:57:49 --> Could not find the language line "Home"
ERROR - 2023-02-24 17:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:06:55 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:10:42 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:10:43 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:10:44 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:10:45 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:12:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 18:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:15:47 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:16:02 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 18:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:16:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 18:16:49 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:18:17 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:19:38 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 18:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:21:48 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:24:25 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:24:28 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:30:16 --> Could not find the language line "Socks"
ERROR - 2023-02-24 18:30:18 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:37:06 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-02-24 18:37:20 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:39:31 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:45:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-24 18:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:51:00 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:51:52 --> Could not find the language line "Bracelets"
ERROR - 2023-02-24 18:51:54 --> Could not find the language line "Bracelets"
ERROR - 2023-02-24 18:52:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 18:52:57 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:54:34 --> Could not find the language line "Home"
ERROR - 2023-02-24 18:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 18:59:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 19:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:01:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:01:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:02:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:02:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:02:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:02:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:03:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:03:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:03:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:03:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:03:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:03:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:04:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:04:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:05:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:05:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:06:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 19:06:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:06:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:06:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:06:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:07:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:07:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:07:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:07:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:09:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:09:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:09:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:09:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:10:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:10:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:10:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:10:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:10:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:10:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:11:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:11:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-24 19:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:13:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 19:14:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 19:18:07 --> Could not find the language line "Home"
ERROR - 2023-02-24 19:18:50 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 19:18:50 --> Could not find the language line "Home"
ERROR - 2023-02-24 19:18:58 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 19:20:05 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-02-24 19:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:27:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 19:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:27:51 --> Could not find the language line "socks"
ERROR - 2023-02-24 19:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:29:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 19:29:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 19:29:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 19:29:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 19:29:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 19:29:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 19:29:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 19:29:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 19:29:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 19:29:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 19:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:30:09 --> Could not find the language line "Home"
ERROR - 2023-02-24 19:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:36:24 --> Could not find the language line "Home"
ERROR - 2023-02-24 19:37:57 --> Could not find the language line "Home"
ERROR - 2023-02-24 19:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:51:49 --> Could not find the language line "Home"
ERROR - 2023-02-24 19:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:52:19 --> Could not find the language line "Home"
ERROR - 2023-02-24 19:52:29 --> Could not find the language line "Home"
ERROR - 2023-02-24 19:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 19:57:31 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:00:17 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:01:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 20:01:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 20:01:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 20:01:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 20:01:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 20:01:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 20:01:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 20:01:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 20:08:23 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:10:03 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:13:04 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:14:51 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:15:08 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:16:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 20:18:58 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:19:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:20:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:21:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:22:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:22:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:22:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:23:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:23:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:23:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:23:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:24:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:24:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:24:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:25:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:25:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:25:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:26:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-24 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:33:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 20:33:55 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:36:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 20:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:38:30 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:40:31 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:41:20 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:41:24 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:43:24 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:44:44 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:52:41 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-24 20:53:28 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:53:44 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:53:55 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:54:00 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:54:37 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:56:26 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:57:35 --> Could not find the language line "Home"
ERROR - 2023-02-24 20:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 20:58:11 --> Could not find the language line "Home"
ERROR - 2023-02-24 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-24 21:06:44 --> Could not find the language line "Home"
ERROR - 2023-02-24 21:11:10 --> Could not find the language line "Home"
ERROR - 2023-02-24 21:13:10 --> Could not find the language line "Home"
ERROR - 2023-02-24 21:13:48 --> Could not find the language line "Home"
ERROR - 2023-02-24 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 21:42:14 --> Could not find the language line "Home"
ERROR - 2023-02-24 21:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 21:43:39 --> Could not find the language line "Home"
ERROR - 2023-02-24 21:45:26 --> Could not find the language line "Home"
ERROR - 2023-02-24 21:45:34 --> Could not find the language line "Home"
ERROR - 2023-02-24 21:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 21:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 21:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 21:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 21:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 21:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 21:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 21:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 21:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 21:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 21:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 21:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 21:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:11:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 22:11:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 22:11:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 22:11:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 22:11:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 22:11:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 22:11:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 22:11:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 22:12:30 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:13:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 22:13:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 22:13:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 22:13:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 22:13:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 22:13:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-24 22:13:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 22:13:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-24 22:13:47 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:17:21 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:18:39 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:18:48 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:19:02 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 22:19:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:19:25 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:19:37 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:19:40 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:19:51 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:20:16 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:21:12 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:24:24 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:30:59 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:31:47 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:44:09 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:47:00 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 22:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 22:48:32 --> Could not find the language line "Bracelets"
ERROR - 2023-02-24 22:48:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-24 22:49:23 --> Could not find the language line "Bracelets"
ERROR - 2023-02-24 22:49:51 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:50:25 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:50:39 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 22:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 22:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 22:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 22:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 22:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 22:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 22:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 22:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 22:59:15 --> Could not find the language line "Home"
ERROR - 2023-02-24 22:59:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-24 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-24 23:01:58 --> Could not find the language line "Home"
ERROR - 2023-02-24 23:02:24 --> Could not find the language line "Home"
ERROR - 2023-02-24 23:02:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-24 23:03:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-24 23:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-24 23:18:39 --> Could not find the language line "Home"
ERROR - 2023-02-24 23:28:26 --> Could not find the language line "Clothing"
ERROR - 2023-02-24 23:30:10 --> Could not find the language line "Home"
