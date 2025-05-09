<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-05 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 00:02:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 00:09:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 00:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-05 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-05 01:21:46 --> Could not find the language line "Crocs"
ERROR - 2023-07-05 01:25:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 01:26:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 01:27:32 --> Could not find the language line "Disclaimer"
ERROR - 2023-07-05 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-05 02:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-05 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 02:43:08 --> 404 Page Not Found: ALFA_DATA/alfacgiapi
ERROR - 2023-07-05 02:43:10 --> 404 Page Not Found: ALFA_DATA/alfacgiapi
ERROR - 2023-07-05 02:43:11 --> 404 Page Not Found: ALFA_DATA/alfacgiapi
ERROR - 2023-07-05 02:43:12 --> 404 Page Not Found: Alfacgiapi/perl.alfa
ERROR - 2023-07-05 02:43:29 --> 404 Page Not Found: Alfacgiapi/py.alfa
ERROR - 2023-07-05 02:43:30 --> 404 Page Not Found: Css/ALFA_DATA
ERROR - 2023-07-05 02:43:32 --> 404 Page Not Found: Css/ALFA_DATA
ERROR - 2023-07-05 02:43:33 --> 404 Page Not Found: Css/ALFA_DATA
ERROR - 2023-07-05 02:43:34 --> 404 Page Not Found: Files/ALFA_DATA
ERROR - 2023-07-05 02:43:51 --> 404 Page Not Found: Files/ALFA_DATA
ERROR - 2023-07-05 02:43:55 --> 404 Page Not Found: Images/ALFA_DATA
ERROR - 2023-07-05 02:43:56 --> 404 Page Not Found: Images/ALFA_DATA
ERROR - 2023-07-05 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-05 03:16:07 --> Could not find the language line "Home"
ERROR - 2023-07-05 03:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-05 03:32:38 --> Could not find the language line "Home"
ERROR - 2023-07-05 03:32:39 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-05 03:32:39 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-07-05 03:32:42 --> Could not find the language line "Home"
ERROR - 2023-07-05 03:32:44 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-07-05 03:32:45 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-07-05 03:32:47 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-07-05 03:32:48 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-07-05 03:32:49 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-07-05 03:32:51 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-07-05 03:32:52 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-07-05 03:32:54 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-07-05 03:32:56 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-07-05 03:32:57 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-07-05 03:32:59 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-07-05 03:33:00 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-07-05 03:33:01 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-07-05 03:33:03 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-07-05 03:33:04 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-07-05 03:43:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 03:56:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 04:22:04 --> Could not find the language line "Home"
ERROR - 2023-07-05 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 04:45:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 04:53:25 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:03:28 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:03:28 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:05:11 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:06:35 --> 404 Page Not Found: ALFA_DATA/alfacgiapi
ERROR - 2023-07-05 05:06:43 --> 404 Page Not Found: ALFA_DATA/alfacgiapi
ERROR - 2023-07-05 05:07:03 --> 404 Page Not Found: Alfacgiapi/perl.alfa
ERROR - 2023-07-05 05:07:25 --> 404 Page Not Found: Alfacgiapi/py.alfa
ERROR - 2023-07-05 05:07:36 --> 404 Page Not Found: Css/ALFA_DATA
ERROR - 2023-07-05 05:07:41 --> 404 Page Not Found: Css/ALFA_DATA
ERROR - 2023-07-05 05:07:45 --> 404 Page Not Found: Css/ALFA_DATA
ERROR - 2023-07-05 05:07:46 --> 404 Page Not Found: Files/ALFA_DATA
ERROR - 2023-07-05 05:07:55 --> 404 Page Not Found: Files/ALFA_DATA
ERROR - 2023-07-05 05:08:02 --> 404 Page Not Found: Files/ALFA_DATA
ERROR - 2023-07-05 05:08:12 --> 404 Page Not Found: Images/ALFA_DATA
ERROR - 2023-07-05 05:08:31 --> 404 Page Not Found: Images/ALFA_DATA
ERROR - 2023-07-05 05:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:18:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 05:18:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 05:18:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 05:18:10 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-05 05:18:15 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-05 05:18:19 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-05 05:18:26 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-05 05:18:33 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-05 05:18:36 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-05 05:18:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:18:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:19:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:19:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:19:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:19:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:20:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:20:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:20:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:20:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:21:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:21:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:21:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:21:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:22:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:22:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:22:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:22:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:23:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:23:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:23:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:23:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:23:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:24:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:24:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:24:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:24:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:24:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:25:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:25:05 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:25:05 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:25:05 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:25:05 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:25:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:25:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:25:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 05:25:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-05 05:25:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:25:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:25:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:25:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:26:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:26:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-05 05:26:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 05:26:46 --> Could not find the language line "Other"
ERROR - 2023-07-05 05:26:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 05:26:49 --> Could not find the language line "Other"
ERROR - 2023-07-05 05:27:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 05:28:59 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:31:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 05:31:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 05:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:32:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 05:32:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 05:36:54 --> Could not find the language line "assets"
ERROR - 2023-07-05 05:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:40:41 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:43:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 05:43:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-05 05:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:44:25 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:45:21 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:50:27 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:50:35 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:55:05 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:55:23 --> Could not find the language line "Bracelets"
ERROR - 2023-07-05 05:55:33 --> Could not find the language line "Home"
ERROR - 2023-07-05 05:55:46 --> Could not find the language line "Perfume"
ERROR - 2023-07-05 05:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:56:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 05:57:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 05:58:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 05:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 05:58:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 05:59:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 05:59:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 05:59:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:03:36 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:04:43 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:04:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:05:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 06:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-05 06:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:07:55 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:08:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:08:58 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:08:59 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:09:27 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:09:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:10:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 06:10:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:14:25 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:18:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:21:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:21:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:22:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:25:08 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:33:11 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:33:11 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:33:11 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:33:11 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:33:11 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:33:11 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:33:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:34:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:34:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:36:39 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:37:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-05 06:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:40:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:43:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 06:43:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 06:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 06:53:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:53:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:54:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:54:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 06:54:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Shorts')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 06:54:37 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:54:37 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:54:37 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:54:37 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:54:37 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:54:37 --> Could not find the language line "Home"
ERROR - 2023-07-05 06:57:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:57:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:57:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:57:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:57:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 06:57:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 06:57:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:03:04 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:08:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:08:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:16:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:17:27 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:18:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:18:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:18:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:18:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 07:18:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 07:18:37 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:18:37 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:19:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:19:17 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:19:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:19:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:19:22 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-05 07:19:23 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-05 07:19:23 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-05 07:19:23 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-05 07:19:23 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-05 07:19:23 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-05 07:19:24 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-05 07:19:24 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-05 07:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:21:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:21:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:21:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:21:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:23:24 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:23:24 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:25:45 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:28:24 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:29:15 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:29:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:30:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:31:38 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:31:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:32:29 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-07-05 07:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:43:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:43:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:43:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:44:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:44:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:44:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:44:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:45:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:45:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:46:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 07:46:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-05 07:47:24 --> Could not find the language line "Other"
ERROR - 2023-07-05 07:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:48:01 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:48:22 --> Could not find the language line "Socks"
ERROR - 2023-07-05 07:48:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 07:48:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 07:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:48:55 --> Could not find the language line "Bracelets"
ERROR - 2023-07-05 07:49:15 --> Could not find the language line "Perfume"
ERROR - 2023-07-05 07:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:52:39 --> Could not find the language line "Home"
ERROR - 2023-07-05 07:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 07:59:56 --> Could not find the language line "Home"
ERROR - 2023-07-05 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 08:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:10:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 08:11:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 08:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:11:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 08:11:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 08:11:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 08:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:23:18 --> Could not find the language line "Home"
ERROR - 2023-07-05 08:25:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 08:25:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-05 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 08:30:24 --> Could not find the language line "Home"
ERROR - 2023-07-05 08:30:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 08:30:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 08:30:39 --> Could not find the language line "Home"
ERROR - 2023-07-05 08:32:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 08:32:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 08:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:32:17 --> Could not find the language line "Home"
ERROR - 2023-07-05 08:34:29 --> Could not find the language line "Home"
ERROR - 2023-07-05 08:38:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 08:38:56 --> Could not find the language line "Home"
ERROR - 2023-07-05 08:39:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 08:39:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41', '40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 08:39:18 --> Could not find the language line "Bracelets"
ERROR - 2023-07-05 08:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:45:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 08:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:48:20 --> Could not find the language line "Home"
ERROR - 2023-07-05 08:48:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 08:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:52:03 --> Could not find the language line "Home"
ERROR - 2023-07-05 08:52:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-05 08:53:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-05 08:53:03 --> Could not find the language line "Home"
ERROR - 2023-07-05 08:53:31 --> Could not find the language line "Home"
ERROR - 2023-07-05 08:53:32 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-05 08:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 08:58:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 08:58:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 08:58:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 08:58:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 08:58:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 08:58:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 08:59:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 09:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:00:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:00:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:01:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:01:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:02:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:02:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:03:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:03:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:04:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:05:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:05:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:05:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:07:09 --> Could not find the language line "Home"
ERROR - 2023-07-05 09:08:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:12:18 --> Could not find the language line "Home"
ERROR - 2023-07-05 09:14:31 --> Could not find the language line "Home"
ERROR - 2023-07-05 09:15:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:17:20 --> Could not find the language line "Home"
ERROR - 2023-07-05 09:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:17:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 09:17:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 09:17:49 --> Could not find the language line "Home"
ERROR - 2023-07-05 09:17:53 --> Could not find the language line "Other"
ERROR - 2023-07-05 09:17:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:18:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:18:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:18:42 --> Could not find the language line "Home"
ERROR - 2023-07-05 09:18:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:18:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 09:18:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 09:18:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:19:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:19:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:19:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:20:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:20:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:20:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:20:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:24:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 09:24:13 --> Could not find the language line "Home"
ERROR - 2023-07-05 09:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:26:07 --> Could not find the language line "Home"
ERROR - 2023-07-05 09:26:18 --> Could not find the language line "Home"
ERROR - 2023-07-05 09:26:19 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-05 09:27:20 --> Could not find the language line "Home"
ERROR - 2023-07-05 09:27:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 09:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:41:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:43:39 --> 404 Page Not Found: Public/admin
ERROR - 2023-07-05 09:45:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:46:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:46:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:48:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:48:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 09:48:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Sweatpants')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 09:48:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:49:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:55:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 09:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 09:59:01 --> Could not find the language line "Bracelets"
ERROR - 2023-07-05 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:06:49 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:08:09 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:13:53 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:15:44 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:16:13 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:16:53 --> Could not find the language line "Bracelets"
ERROR - 2023-07-05 10:19:35 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:19:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 10:19:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 10:19:38 --> Could not find the language line "Bracelets"
ERROR - 2023-07-05 10:19:58 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:20:01 --> Could not find the language line "Bracelets"
ERROR - 2023-07-05 10:20:03 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:20:29 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:21:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:23:21 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:24:31 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:25:02 --> Could not find the language line "Socks"
ERROR - 2023-07-05 10:25:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:28:16 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:31:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-05 10:31:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:31:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:32:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 10:32:48 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:33:24 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:33:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:34:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:34:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:35:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:35:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:42:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:42:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:43:06 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:43:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:43:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:44:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:44:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:45:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:45:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:45:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:46:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:46:15 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:46:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:46:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:46:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:47:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:47:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:48:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:48:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:48:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:48:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:48:27 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:48:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:48:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:49:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:52:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 10:57:23 --> Could not find the language line "Home"
ERROR - 2023-07-05 10:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 10:59:06 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:01:47 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:05:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 11:05:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 11:05:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 11:08:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 11:09:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:09:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:09:39 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:17:32 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:18:10 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-05 11:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 11:22:47 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:22:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:22:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:23:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:23:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:24:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 11:24:20 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-07-05 11:24:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:24:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:24:21 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-07-05 11:24:22 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:24:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:24:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:25:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:25:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:25:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:25:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:25:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:25:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:25:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:25:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:25:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:25:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:25:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:25:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:26:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:26:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:26:05 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:26:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:26:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:26:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:26:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:26:32 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:26:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 11:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 11:27:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 11:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 11:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 11:27:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 11:27:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 11:29:32 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 11:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 11:29:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 11:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 11:31:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-05 11:31:53 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:32:39 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:34:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:36:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 11:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 11:37:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 11:37:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 11:37:15 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:37:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 11:37:19 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:37:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 11:37:22 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:40:48 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:53:55 --> Could not find the language line "Home"
ERROR - 2023-07-05 11:54:00 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-05 11:54:00 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-05 11:54:01 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-05 11:54:01 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-05 11:59:23 --> Could not find the language line "Home"
ERROR - 2023-07-05 12:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-05 12:05:43 --> Could not find the language line "Home"
ERROR - 2023-07-05 12:05:44 --> Could not find the language line "Home"
ERROR - 2023-07-05 12:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:10:10 --> Could not find the language line "Home"
ERROR - 2023-07-05 12:10:31 --> Could not find the language line "Home"
ERROR - 2023-07-05 12:11:11 --> Could not find the language line "Home"
ERROR - 2023-07-05 12:11:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:11:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:11:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:11:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:15:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 12:15:47 --> Could not find the language line "Bracelets"
ERROR - 2023-07-05 12:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:17:43 --> Could not find the language line "Bracelets"
ERROR - 2023-07-05 12:17:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:17:54 --> Could not find the language line "Home"
ERROR - 2023-07-05 12:17:57 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-05 12:17:57 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-05 12:17:58 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-05 12:17:58 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-05 12:18:28 --> Could not find the language line "Bracelets"
ERROR - 2023-07-05 12:18:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:18:49 --> Could not find the language line "Home"
ERROR - 2023-07-05 12:18:49 --> Could not find the language line "Home"
ERROR - 2023-07-05 12:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:19:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:19:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:19:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:19:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 12:19:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Shorts')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 12:19:28 --> Could not find the language line "Home"
ERROR - 2023-07-05 12:19:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:19:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:20:36 --> Could not find the language line "Bracelets"
ERROR - 2023-07-05 12:21:00 --> Could not find the language line "Bracelets"
ERROR - 2023-07-05 12:21:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:21:49 --> Could not find the language line "Bracelets"
ERROR - 2023-07-05 12:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:22:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-05 12:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:22:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:24:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 12:30:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:31:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:31:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:31:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:32:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:36:13 --> Could not find the language line "Home"
ERROR - 2023-07-05 12:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:43:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:43:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:43:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:49:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:49:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:49:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 12:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 12:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-05 13:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:02:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 13:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:09:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 13:09:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 13:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:13:44 --> Could not find the language line "Home"
ERROR - 2023-07-05 13:15:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 13:18:22 --> Could not find the language line "Home"
ERROR - 2023-07-05 13:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 13:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:45:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 13:45:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 13:45:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 13:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:47:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-05 13:47:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-05 13:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 13:50:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 13:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 14:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 14:04:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 14:10:02 --> Could not find the language line "Home"
ERROR - 2023-07-05 14:10:45 --> Could not find the language line "Home"
ERROR - 2023-07-05 14:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 14:14:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 14:14:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 14:14:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 14:14:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 14:14:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 14:14:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 14:14:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 14:14:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 14:14:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 14:14:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 14:31:47 --> Could not find the language line "Home"
ERROR - 2023-07-05 14:34:16 --> Could not find the language line "Home"
ERROR - 2023-07-05 14:35:01 --> Could not find the language line "Home"
ERROR - 2023-07-05 14:42:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-05 14:45:09 --> Could not find the language line "Home"
ERROR - 2023-07-05 14:49:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 14:49:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 14:49:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 14:49:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 14:50:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 14:50:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 14:51:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-05 14:51:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-05 14:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 14:55:04 --> Could not find the language line "Home"
ERROR - 2023-07-05 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-05 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 15:00:39 --> Could not find the language line "Home"
ERROR - 2023-07-05 15:27:07 --> Could not find the language line "Home"
ERROR - 2023-07-05 15:27:08 --> Could not find the language line "Home"
ERROR - 2023-07-05 15:27:08 --> Could not find the language line "Home"
ERROR - 2023-07-05 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 15:40:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 15:46:55 --> Could not find the language line "Home"
ERROR - 2023-07-05 15:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 15:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 15:51:46 --> Could not find the language line "Home"
ERROR - 2023-07-05 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 16:11:22 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-05 16:11:22 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-05 16:11:22 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-05 16:11:22 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-05 16:11:22 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-05 16:11:22 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-05 16:11:23 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-05 16:11:23 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-05 16:13:59 --> Could not find the language line "Home"
ERROR - 2023-07-05 16:17:42 --> Could not find the language line "Home"
ERROR - 2023-07-05 16:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 16:29:35 --> Could not find the language line "Home"
ERROR - 2023-07-05 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 16:30:14 --> Could not find the language line "Bracelets"
ERROR - 2023-07-05 16:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 16:45:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 16:46:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 16:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 16:47:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 16:48:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 16:48:22 --> 404 Page Not Found: Env/index
ERROR - 2023-07-05 16:48:23 --> 404 Page Not Found: Wp-content/index
ERROR - 2023-07-05 16:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 16:52:36 --> Could not find the language line "Home"
ERROR - 2023-07-05 16:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 16:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 16:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 16:57:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 16:59:37 --> Could not find the language line "Home"
ERROR - 2023-07-05 16:59:44 --> Could not find the language line "Home"
ERROR - 2023-07-05 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 17:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 17:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 17:04:46 --> Could not find the language line "Home"
ERROR - 2023-07-05 17:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 17:09:05 --> Could not find the language line "Home"
ERROR - 2023-07-05 17:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 17:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 17:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 17:10:39 --> Could not find the language line "Home"
ERROR - 2023-07-05 17:12:16 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-05 17:17:07 --> Could not find the language line "Home"
ERROR - 2023-07-05 17:20:53 --> Could not find the language line "Home"
ERROR - 2023-07-05 17:20:58 --> 404 Page Not Found: Fatmous7231231/index
ERROR - 2023-07-05 17:21:03 --> 404 Page Not Found: Admin/index
ERROR - 2023-07-05 17:21:10 --> 404 Page Not Found: Admin/login.php
ERROR - 2023-07-05 17:21:15 --> 404 Page Not Found: Admin/login
ERROR - 2023-07-05 17:21:21 --> 404 Page Not Found: Adminphp/index
ERROR - 2023-07-05 17:21:27 --> 404 Page Not Found: Admin/login
ERROR - 2023-07-05 17:21:32 --> 404 Page Not Found: Login/index
ERROR - 2023-07-05 17:21:37 --> 404 Page Not Found: Loginphp/index
ERROR - 2023-07-05 17:21:43 --> 404 Page Not Found: Admin/index
ERROR - 2023-07-05 17:21:49 --> 404 Page Not Found: Loginaspx/index
ERROR - 2023-07-05 17:21:55 --> 404 Page Not Found: Login/index
ERROR - 2023-07-05 17:22:02 --> 404 Page Not Found: Login/index
ERROR - 2023-07-05 17:22:07 --> 404 Page Not Found: Loginhtml/index
ERROR - 2023-07-05 17:22:13 --> Could not find the language line "Home"
ERROR - 2023-07-05 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-05 17:30:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 17:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 17:38:45 --> Could not find the language line "Home"
ERROR - 2023-07-05 17:39:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 17:39:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 17:45:32 --> Could not find the language line "Home"
ERROR - 2023-07-05 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 18:00:53 --> Could not find the language line "Home"
ERROR - 2023-07-05 18:06:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-05 18:08:05 --> Could not find the language line "Home"
ERROR - 2023-07-05 18:23:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 18:42:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 18:42:29 --> Could not find the language line "Home"
ERROR - 2023-07-05 18:43:38 --> 404 Page Not Found: Js/main.js
ERROR - 2023-07-05 18:43:38 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-07-05 18:43:38 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-07-05 18:43:38 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-07-05 18:43:38 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-07-05 18:43:38 --> 404 Page Not Found: Lib/easing
ERROR - 2023-07-05 18:43:38 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-07-05 18:43:38 --> 404 Page Not Found: Js/common.js
ERROR - 2023-07-05 18:47:50 --> Could not find the language line "Home"
ERROR - 2023-07-05 18:55:35 --> Could not find the language line "Home"
ERROR - 2023-07-05 18:55:36 --> Could not find the language line "Home"
ERROR - 2023-07-05 18:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 18:55:41 --> Could not find the language line "Home"
ERROR - 2023-07-05 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 19:00:38 --> Could not find the language line "Home"
ERROR - 2023-07-05 19:02:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 19:02:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 19:08:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 19:14:13 --> Could not find the language line "Home"
ERROR - 2023-07-05 19:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 19:19:35 --> Could not find the language line "Home"
ERROR - 2023-07-05 19:25:07 --> Could not find the language line "Home"
ERROR - 2023-07-05 19:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 19:29:26 --> Could not find the language line "Home"
ERROR - 2023-07-05 19:30:00 --> Could not find the language line "Home"
ERROR - 2023-07-05 19:30:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-05 19:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 19:30:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 19:35:23 --> Could not find the language line "Home"
ERROR - 2023-07-05 19:48:48 --> Could not find the language line "Home"
ERROR - 2023-07-05 20:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-05 20:00:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-05 20:24:08 --> Could not find the language line "Home"
ERROR - 2023-07-05 20:24:49 --> Could not find the language line "Home"
ERROR - 2023-07-05 20:27:23 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-05 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 20:54:44 --> Could not find the language line "Home"
ERROR - 2023-07-05 20:54:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 20:55:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 20:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 20:56:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 20:56:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 20:56:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 20:58:50 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-05 21:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-05 21:05:52 --> 404 Page Not Found: Git/HEAD
ERROR - 2023-07-05 21:11:26 --> Could not find the language line "Home"
ERROR - 2023-07-05 21:11:27 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-05 21:11:28 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-05 21:11:28 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-05 21:11:29 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-05 21:16:02 --> Could not find the language line "Home"
ERROR - 2023-07-05 21:16:03 --> Could not find the language line "Home"
ERROR - 2023-07-05 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-05 21:40:25 --> 404 Page Not Found: Git/HEAD
ERROR - 2023-07-05 21:50:57 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-05 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-05 22:18:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 22:25:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-05 22:28:14 --> Could not find the language line "Home"
ERROR - 2023-07-05 22:28:53 --> Could not find the language line "Home"
ERROR - 2023-07-05 22:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 22:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:33:07 --> Could not find the language line "Home"
ERROR - 2023-07-05 22:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:34:17 --> Could not find the language line "Home"
ERROR - 2023-07-05 22:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 22:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-05 23:12:51 --> Could not find the language line "Home"
ERROR - 2023-07-05 23:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 23:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 23:15:25 --> Could not find the language line "Home"
ERROR - 2023-07-05 23:16:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 23:16:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 23:16:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 23:16:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 23:16:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 23:16:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-05 23:16:47 --> Could not find the language line "Home"
ERROR - 2023-07-05 23:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 23:19:47 --> Could not find the language line "Home"
ERROR - 2023-07-05 23:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-05 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-05 23:34:47 --> Could not find the language line "Home"
ERROR - 2023-07-05 23:36:17 --> Could not find the language line "Home"
ERROR - 2023-07-05 23:48:47 --> 404 Page Not Found: Assets/css
