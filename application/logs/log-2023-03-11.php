<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-11 00:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 00:23:07 --> Could not find the language line "Home"
ERROR - 2023-03-11 00:30:17 --> Could not find the language line "Home"
ERROR - 2023-03-11 00:43:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 00:43:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 00:43:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 00:43:37 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-03-11 00:43:57 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-03-11 00:44:15 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-03-11 00:44:33 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-03-11 00:44:51 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-03-11 00:45:08 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-03-11 00:45:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:46:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:47:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:48:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:48:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:49:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:50:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:51:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:52:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:53:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:54:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:55:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:56:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:56:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:57:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:58:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 00:59:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 01:00:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 01:00:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:01:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:02:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:03:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:04:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:05:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:05:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:06:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:07:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:08:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:09:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:09:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:10:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:11:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:12:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:13:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:13:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:14:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:15:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:16:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 01:16:51 --> Could not find the language line "Home"
ERROR - 2023-03-11 01:17:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 01:17:39 --> Could not find the language line "Home"
ERROR - 2023-03-11 01:17:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 01:17:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 01:23:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-11 01:48:30 --> Could not find the language line "Home"
ERROR - 2023-03-11 01:51:09 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-11 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-11 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 02:57:26 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 02:58:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 02:59:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 03:00:29 --> Could not find the language line "Bracelets"
ERROR - 2023-03-11 03:03:33 --> Could not find the language line "Home"
ERROR - 2023-03-11 03:04:34 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 03:09:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 03:21:53 --> Could not find the language line "Disclaimer"
ERROR - 2023-03-11 03:26:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 03:29:01 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 03:35:56 --> Could not find the language line "Home"
ERROR - 2023-03-11 03:36:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 03:36:49 --> Could not find the language line "Home"
ERROR - 2023-03-11 03:40:29 --> Could not find the language line "Home"
ERROR - 2023-03-11 03:42:58 --> Could not find the language line "Home"
ERROR - 2023-03-11 03:44:06 --> Could not find the language line "Bracelets"
ERROR - 2023-03-11 03:44:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 03:44:09 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 03:44:50 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 03:44:53 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 03:45:00 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 03:45:06 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 03:45:09 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 03:46:21 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 03:48:26 --> Could not find the language line "Socks"
ERROR - 2023-03-11 03:48:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-11 03:48:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 03:48:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 03:51:26 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 03:54:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 03:55:31 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 03:59:36 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 04:04:24 --> Could not find the language line "Disclaimer"
ERROR - 2023-03-11 04:17:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-11 04:18:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 04:22:59 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-11 04:23:02 --> Could not find the language line "Perfume"
ERROR - 2023-03-11 04:25:17 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-03-11 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 04:40:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 04:44:23 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 04:59:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 05:14:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 05:19:34 --> Could not find the language line "Home"
ERROR - 2023-03-11 05:21:37 --> Could not find the language line "Home"
ERROR - 2023-03-11 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 05:34:01 --> Could not find the language line "Home"
ERROR - 2023-03-11 05:34:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-11 05:34:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-11 05:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 05:34:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-11 05:34:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-11 05:34:56 --> Could not find the language line "Home"
ERROR - 2023-03-11 05:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 05:35:39 --> Could not find the language line "Home"
ERROR - 2023-03-11 05:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 05:40:33 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:05:10 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 06:10:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:10:22 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:13:49 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:15:56 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-03-11 06:16:29 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:16:30 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-03-11 06:16:30 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-03-11 06:16:30 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:16:30 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-03-11 06:16:31 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-03-11 06:16:31 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-03-11 06:16:31 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-03-11 06:16:31 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-03-11 06:16:31 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-03-11 06:16:31 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-03-11 06:16:32 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-03-11 06:16:32 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-03-11 06:16:32 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-03-11 06:16:32 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-03-11 06:16:32 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-03-11 06:16:32 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-03-11 06:16:33 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-03-11 06:16:33 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-03-11 06:16:52 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:18:45 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 06:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 06:36:01 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 06:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 06:39:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 06:39:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 06:39:23 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:39:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 06:39:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 06:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 06:40:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 06:40:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 06:40:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 06:40:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 06:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 06:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 06:43:00 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:51:48 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:54:45 --> Could not find the language line "Home"
ERROR - 2023-03-11 06:55:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 06:55:40 --> Could not find the language line "socks"
ERROR - 2023-03-11 06:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 06:59:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 06:59:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 06:59:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 06:59:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 07:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:04:55 --> Could not find the language line "Home"
ERROR - 2023-03-11 07:06:30 --> Could not find the language line "Home"
ERROR - 2023-03-11 07:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:27:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 07:28:13 --> Could not find the language line "Home"
ERROR - 2023-03-11 07:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:29:37 --> Could not find the language line "Home"
ERROR - 2023-03-11 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 07:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:36:49 --> Could not find the language line "Home"
ERROR - 2023-03-11 07:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:42:32 --> Could not find the language line "Home"
ERROR - 2023-03-11 07:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:48:02 --> Could not find the language line "Home"
ERROR - 2023-03-11 07:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 07:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:03:17 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:08:03 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 08:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 08:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 08:15:38 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:15:46 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 08:19:26 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:21:28 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:21:29 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:21:29 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:21:29 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:21:29 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:21:29 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:32:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 08:32:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 08:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 08:32:52 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 08:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 08:47:35 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:47:50 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 08:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 08:52:27 --> Could not find the language line "Home"
ERROR - 2023-03-11 08:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 08:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 08:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 09:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:12:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 09:12:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 09:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:14:21 --> Could not find the language line "Home"
ERROR - 2023-03-11 09:17:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 09:17:15 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-03-11 09:17:16 --> 404 Page Not Found: Wordpress/xmlrpc.php
ERROR - 2023-03-11 09:17:17 --> 404 Page Not Found: Wp/xmlrpc.php
ERROR - 2023-03-11 09:17:18 --> Could not find the language line "Home"
ERROR - 2023-03-11 09:17:19 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-11 09:17:20 --> 404 Page Not Found: Admin/index
ERROR - 2023-03-11 09:17:21 --> 404 Page Not Found: Login/index
ERROR - 2023-03-11 09:28:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-11 09:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:41:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 09:41:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 09:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:53:51 --> Could not find the language line "Home"
ERROR - 2023-03-11 09:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 09:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:09:05 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:22:41 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:29:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 10:29:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 10:29:53 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:31:31 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:32:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 10:32:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 10:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:33:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:36:16 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:36:25 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:36:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-11 10:38:08 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:38:29 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:39:05 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:39:06 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-11 10:43:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 10:43:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 10:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:44:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 10:45:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 10:45:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 10:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:46:07 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:46:10 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:47:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:49:43 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:51:25 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:59:00 --> Could not find the language line "Home"
ERROR - 2023-03-11 10:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 10:59:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 10:59:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 10:59:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:01:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 11:01:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 11:01:51 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:02:00 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:02:02 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:02:35 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:03:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 11:03:13 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:03:25 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:03:49 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:06:24 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:07:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 11:07:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 11:14:32 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:22:00 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:22:07 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:22:08 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-11 11:22:20 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:22:24 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:22:44 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:22:49 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:23:00 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:23:26 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:23:49 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:23:52 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:24:24 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:32:51 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:35:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-11 11:35:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-11 11:35:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-11 11:35:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-11 11:35:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-11 11:35:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-11 11:35:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-11 11:35:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-11 11:35:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-11 11:35:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-11 11:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:35:31 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:37:31 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:37:45 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:39:37 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:45:57 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:48:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 11:50:02 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:50:17 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:50:40 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 11:56:44 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:57:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 11:57:55 --> Could not find the language line "Home"
ERROR - 2023-03-11 12:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-11 12:01:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-11 12:01:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-11 12:01:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-11 12:01:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-11 12:01:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-11 12:01:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-11 12:01:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-11 12:01:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-11 12:01:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-11 12:01:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-11 12:01:31 --> Could not find the language line "Home"
ERROR - 2023-03-11 12:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 12:06:36 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-11 12:06:36 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-11 12:06:37 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-11 12:06:37 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-11 12:20:20 --> Could not find the language line "Home"
ERROR - 2023-03-11 12:21:28 --> Could not find the language line "Home"
ERROR - 2023-03-11 12:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 12:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 12:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 12:41:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 12:55:42 --> Could not find the language line "Home"
ERROR - 2023-03-11 12:55:42 --> Could not find the language line "Home"
ERROR - 2023-03-11 12:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 12:56:17 --> Could not find the language line "Home"
ERROR - 2023-03-11 12:56:17 --> Could not find the language line "Home"
ERROR - 2023-03-11 12:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 12:59:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 12:59:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 12:59:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 12:59:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 13:00:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 13:00:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 13:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:19:52 --> Could not find the language line "Home"
ERROR - 2023-03-11 13:20:04 --> 404 Page Not Found: Sqlphp/index
ERROR - 2023-03-11 13:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 13:31:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 13:32:10 --> Could not find the language line "Home"
ERROR - 2023-03-11 13:32:50 --> Could not find the language line "Home"
ERROR - 2023-03-11 13:34:54 --> Could not find the language line "Home"
ERROR - 2023-03-11 13:35:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-11 13:35:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-11 13:36:46 --> Could not find the language line "Home"
ERROR - 2023-03-11 13:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:45:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 13:46:27 --> Could not find the language line "Home"
ERROR - 2023-03-11 13:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:52:55 --> Could not find the language line "Home"
ERROR - 2023-03-11 13:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 13:55:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-11 13:56:18 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:05:46 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:07:03 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:08:36 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:09:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 14:10:44 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:12:29 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:13:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:13:30 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:13:37 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:13:38 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:14:08 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:14:30 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:15:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 14:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:18:45 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:19:28 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:20:31 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:21:00 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:21:57 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:26:15 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:28:57 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:30:32 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 14:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:31:47 --> Could not find the language line "Home"
ERROR - 2023-03-11 14:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:43:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 14:43:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 14:43:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 14:43:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 14:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:43:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 14:43:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 14:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 14:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:00:42 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:16:26 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:18:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 15:18:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 15:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:26:50 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:26:59 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:27:36 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:28:15 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:34:09 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:36:30 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:37:08 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:37:57 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:38:04 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:38:08 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:38:27 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:38:32 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 15:38:47 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:39:22 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:47:47 --> Could not find the language line "Perfume"
ERROR - 2023-03-11 15:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:49:04 --> Could not find the language line "Perfume"
ERROR - 2023-03-11 15:52:33 --> Could not find the language line "Home"
ERROR - 2023-03-11 15:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:53:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 15:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 15:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 16:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:09:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 16:09:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 16:11:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:15:25 --> Could not find the language line "Home"
ERROR - 2023-03-11 16:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:24:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 16:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:26:02 --> Could not find the language line "Home"
ERROR - 2023-03-11 16:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 16:31:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 16:33:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 16:33:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 16:35:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 16:45:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 16:45:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 16:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:46:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 16:46:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 16:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 16:46:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 16:46:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 16:49:08 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:22:27 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:26:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 17:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:27:58 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:28:51 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:29:46 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:30:05 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:30:29 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:30:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-11 17:31:27 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:31:31 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 17:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:32:24 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 17:32:36 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 17:32:40 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:33:09 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:33:20 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 17:33:33 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 17:33:40 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 17:33:42 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:34:06 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 17:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:34:17 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:34:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:34:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 17:34:37 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 17:35:00 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:35:03 --> Could not find the language line "Bracelets"
ERROR - 2023-03-11 17:35:28 --> Could not find the language line "Bracelets"
ERROR - 2023-03-11 17:35:47 --> Could not find the language line "Bracelets"
ERROR - 2023-03-11 17:35:49 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:35:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:36:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 17:36:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:36:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:36:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:37:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:37:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:37:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:37:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:37:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:37:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 17:38:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:38:05 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:38:10 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:38:14 --> Could not find the language line "Socks"
ERROR - 2023-03-11 17:38:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:38:45 --> Could not find the language line "Socks"
ERROR - 2023-03-11 17:38:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:38:53 --> Could not find the language line "Socks"
ERROR - 2023-03-11 17:39:03 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:39:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:39:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:39:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:39:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:40:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:40:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:40:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:40:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:40:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:40:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:41:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:41:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:41:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:41:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:41:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 17:41:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:41:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:41:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:41:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:41:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:41:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:41:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:41:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:41:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:41:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:41:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:41:58 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:41:59 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:42:03 --> Could not find the language line "Socks"
ERROR - 2023-03-11 17:42:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:44:08 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:44:16 --> Could not find the language line "Perfume"
ERROR - 2023-03-11 17:44:23 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:44:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 17:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:52:54 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:54:01 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:56:18 --> Could not find the language line "Home"
ERROR - 2023-03-11 17:56:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:56:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 17:57:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:58:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:58:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 17:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 17:59:27 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:04:59 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:05:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:06:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 18:13:16 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:17:45 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:19:01 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:20:59 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 18:24:02 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:25:51 --> Could not find the language line "Socks"
ERROR - 2023-03-11 18:26:28 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:27:07 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:29:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 18:29:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 18:30:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:30:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 18:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 18:32:15 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:32:18 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:32:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 18:32:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 18:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 18:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 18:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 18:34:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 18:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 18:34:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 18:35:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 18:35:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 18:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 18:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 18:36:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 18:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 18:37:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 18:37:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 18:37:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 18:37:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 18:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 18:37:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-11 18:38:17 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:47:45 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:49:22 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 18:56:06 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:57:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 18:57:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 18:57:35 --> Could not find the language line "Home"
ERROR - 2023-03-11 18:58:11 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-11 18:58:11 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-11 18:58:11 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-11 18:58:11 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-11 18:58:11 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-11 18:58:11 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-11 18:58:11 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-11 18:58:11 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-11 18:58:57 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:00:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 19:00:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 19:10:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 19:10:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-11 19:10:06 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:10:07 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:10:08 --> Could not find the language line "Socks"
ERROR - 2023-03-11 19:10:09 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:10:53 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:13:57 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:20:02 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:20:03 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:20:03 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:20:04 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:20:47 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:21:34 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:22:57 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:23:46 --> 404 Page Not Found: Produc/index
ERROR - 2023-03-11 19:25:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 19:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:26:16 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:31:32 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:34:29 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:35:47 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:46:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 19:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:50:50 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:51:28 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:51:35 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:51:39 --> Could not find the language line "Home"
ERROR - 2023-03-11 19:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 19:57:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 19:57:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 19:57:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 19:57:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 19:58:45 --> Could not find the language line "Home"
ERROR - 2023-03-11 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 20:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 20:01:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 20:01:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 20:02:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 20:02:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 20:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 20:02:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 20:02:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 20:02:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 20:02:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 20:08:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 20:12:16 --> Could not find the language line "Home"
ERROR - 2023-03-11 20:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 20:13:33 --> Could not find the language line "Home"
ERROR - 2023-03-11 20:13:45 --> Could not find the language line "Home"
ERROR - 2023-03-11 20:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 20:17:01 --> Could not find the language line "Home"
ERROR - 2023-03-11 20:17:02 --> Could not find the language line "Home"
ERROR - 2023-03-11 20:18:07 --> Could not find the language line "Home"
ERROR - 2023-03-11 20:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 20:19:00 --> Could not find the language line "Home"
ERROR - 2023-03-11 20:19:09 --> Could not find the language line "Home"
ERROR - 2023-03-11 20:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 20:20:51 --> Could not find the language line "Home"
ERROR - 2023-03-11 20:20:57 --> Could not find the language line "Home"
ERROR - 2023-03-11 20:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 20:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 20:50:38 --> Could not find the language line "Home"
ERROR - 2023-03-11 20:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 20:54:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 21:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 21:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 21:09:00 --> Could not find the language line "Home"
ERROR - 2023-03-11 21:15:17 --> Could not find the language line "Home"
ERROR - 2023-03-11 21:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 21:39:01 --> Could not find the language line "Home"
ERROR - 2023-03-11 21:39:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 21:40:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 21:51:04 --> Could not find the language line "Home"
ERROR - 2023-03-11 21:51:46 --> Could not find the language line "Home"
ERROR - 2023-03-11 21:52:06 --> Could not find the language line "Home"
ERROR - 2023-03-11 21:52:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 21:52:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 22:04:25 --> Could not find the language line "Home"
ERROR - 2023-03-11 22:14:33 --> Could not find the language line "Home"
ERROR - 2023-03-11 22:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-11 22:42:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 22:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 22:46:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-11 22:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 22:48:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 22:48:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-11 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-11 23:02:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 23:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 23:03:42 --> Could not find the language line "Clothing"
ERROR - 2023-03-11 23:03:58 --> Could not find the language line "Home"
ERROR - 2023-03-11 23:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-11 23:05:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 23:27:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-11 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-11 23:44:11 --> Could not find the language line "Home"
ERROR - 2023-03-11 23:52:04 --> Could not find the language line "Home"
