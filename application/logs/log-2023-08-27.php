<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-27 00:00:25 --> Could not find the language line "Home"
ERROR - 2023-08-27 00:21:36 --> Could not find the language line "Home"
ERROR - 2023-08-27 00:25:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic '))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:27:05 --> Could not find the language line "Home"
ERROR - 2023-08-27 00:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 00:29:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 00:29:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:29:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:29:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:29:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:29:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:30:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:30:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-27 00:30:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:30:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:30:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:30:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:30:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:30:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:30:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:31:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:31:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:31:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:31:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:31:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:31:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal '))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:32:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:32:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:32:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:32:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:32:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:32:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:32:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic '))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:32:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:32:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:32:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:33:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:33:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:33:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:33:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:33:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:33:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 00:33:47 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-27 00:40:43 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-27 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-27 01:13:28 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-27 01:30:20 --> Could not find the language line "Home"
ERROR - 2023-08-27 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-27 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-27 02:38:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 02:38:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 02:45:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 02:45:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 03:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:03:19 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:06:38 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:06:38 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:06:40 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:13:34 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:16:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 03:23:09 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:24:06 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:38:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 03:38:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 03:41:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 03:41:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 03:41:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 03:41:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 03:46:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 03:47:29 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:47:54 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:48:16 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 03:56:54 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:56:59 --> Could not find the language line "Bracelets"
ERROR - 2023-08-27 03:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 03:57:07 --> Could not find the language line "Bracelets"
ERROR - 2023-08-27 03:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 03:57:19 --> Could not find the language line "Bracelets"
ERROR - 2023-08-27 03:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 03:57:29 --> Could not find the language line "Bracelets"
ERROR - 2023-08-27 03:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 03:58:00 --> Could not find the language line "Bracelets"
ERROR - 2023-08-27 03:58:06 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 03:58:32 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:58:39 --> Could not find the language line "Home"
ERROR - 2023-08-27 03:58:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-27 03:58:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-27 03:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 03:58:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-27 03:59:08 --> Could not find the language line "Home"
ERROR - 2023-08-27 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-27 04:14:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 04:16:38 --> Could not find the language line "Home"
ERROR - 2023-08-27 04:16:39 --> Could not find the language line "Home"
ERROR - 2023-08-27 04:23:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 04:23:20 --> Could not find the language line "Home"
ERROR - 2023-08-27 04:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-27 04:43:19 --> Could not find the language line "Home"
ERROR - 2023-08-27 04:56:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 04:56:50 --> Could not find the language line "Home"
ERROR - 2023-08-27 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-27 05:22:45 --> Could not find the language line "Home"
ERROR - 2023-08-27 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-27 05:32:44 --> Could not find the language line "Home"
ERROR - 2023-08-27 05:40:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 05:40:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 05:40:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 05:40:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 05:40:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 05:40:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 05:40:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 05:40:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 05:40:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 05:40:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 05:42:45 --> Could not find the language line "Home"
ERROR - 2023-08-27 05:43:34 --> Could not find the language line "Home"
ERROR - 2023-08-27 06:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-27 06:03:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 06:04:25 --> Could not find the language line "Home"
ERROR - 2023-08-27 06:05:18 --> Could not find the language line "Home"
ERROR - 2023-08-27 06:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:08:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 06:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:09:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 06:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:13:23 --> Could not find the language line "Home"
ERROR - 2023-08-27 06:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:15:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 06:16:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 06:16:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 06:17:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 06:17:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 06:17:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Shorts')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 06:17:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 06:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:18:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 06:18:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 06:18:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 06:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:19:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 06:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:21:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 06:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:21:31 --> Could not find the language line "Home"
ERROR - 2023-08-27 06:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:22:20 --> Could not find the language line "Home"
ERROR - 2023-08-27 06:22:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 06:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-27 06:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:35:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 06:40:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 06:40:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 06:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:44:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 06:44:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 06:44:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 06:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:54:34 --> Could not find the language line "Home"
ERROR - 2023-08-27 06:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:57:13 --> Could not find the language line "Home"
ERROR - 2023-08-27 06:57:27 --> Could not find the language line "Home"
ERROR - 2023-08-27 06:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:58:34 --> Could not find the language line "Home"
ERROR - 2023-08-27 06:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 06:59:40 --> Could not find the language line "Home"
ERROR - 2023-08-27 06:59:53 --> Could not find the language line "Other"
ERROR - 2023-08-27 07:00:05 --> Could not find the language line "Other"
ERROR - 2023-08-27 07:00:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 07:00:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:00:25 --> Could not find the language line "Other"
ERROR - 2023-08-27 07:00:37 --> Could not find the language line "Bracelets"
ERROR - 2023-08-27 07:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:00:55 --> Could not find the language line "Bracelets"
ERROR - 2023-08-27 07:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:02:12 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:02:14 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:04:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 07:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 07:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:07:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 07:07:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 07:07:52 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:08:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 07:08:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 07:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:09:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 07:09:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 07:09:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 07:09:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 07:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:10:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 07:10:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 07:10:14 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:10:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-27 07:10:28 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:10:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 07:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:12:00 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:13:02 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:13:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 07:13:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 07:15:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-27 07:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:16:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-27 07:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:19:52 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:22:55 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:22:55 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:23:06 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:24:41 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-27 07:24:42 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-27 07:24:44 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-27 07:24:45 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-27 07:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:33:04 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-27 07:37:20 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:47:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 07:47:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 07:47:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 07:47:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 07:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:49:10 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-27 07:49:10 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-27 07:49:11 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-27 07:49:11 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-27 07:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:52:39 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:56:16 --> Could not find the language line "Home"
ERROR - 2023-08-27 07:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 07:59:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 07:59:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-27 08:00:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 08:00:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 08:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:17:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 08:17:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 08:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-27 08:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:32:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 08:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:42:17 --> Could not find the language line "products"
ERROR - 2023-08-27 08:42:59 --> Could not find the language line "products"
ERROR - 2023-08-27 08:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:48:51 --> Could not find the language line "Home"
ERROR - 2023-08-27 08:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:49:18 --> Could not find the language line "products"
ERROR - 2023-08-27 08:50:38 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-27 08:50:43 --> Could not find the language line "products"
ERROR - 2023-08-27 08:51:59 --> Could not find the language line "Home"
ERROR - 2023-08-27 08:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:52:07 --> Could not find the language line "products"
ERROR - 2023-08-27 08:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:53:22 --> Could not find the language line "Home"
ERROR - 2023-08-27 08:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:54:28 --> Could not find the language line "Home"
ERROR - 2023-08-27 08:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:54:40 --> Could not find the language line "Home"
ERROR - 2023-08-27 08:54:56 --> Could not find the language line "products"
ERROR - 2023-08-27 08:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:56:20 --> Could not find the language line "products"
ERROR - 2023-08-27 08:56:29 --> Could not find the language line "Home"
ERROR - 2023-08-27 08:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:56:40 --> Could not find the language line "Home"
ERROR - 2023-08-27 08:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:57:15 --> Could not find the language line "Home"
ERROR - 2023-08-27 08:57:45 --> Could not find the language line "products"
ERROR - 2023-08-27 08:57:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 08:58:06 --> Could not find the language line "Home"
ERROR - 2023-08-27 08:58:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 08:58:21 --> Could not find the language line "Home"
ERROR - 2023-08-27 08:58:24 --> Could not find the language line "Perfume"
ERROR - 2023-08-27 08:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:58:43 --> Could not find the language line "Perfume"
ERROR - 2023-08-27 08:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 08:58:54 --> Could not find the language line "Perfume"
ERROR - 2023-08-27 08:58:56 --> Could not find the language line "Home"
ERROR - 2023-08-27 08:59:09 --> Could not find the language line "products"
ERROR - 2023-08-27 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-27 09:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:00:33 --> Could not find the language line "products"
ERROR - 2023-08-27 09:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:01:58 --> Could not find the language line "products"
ERROR - 2023-08-27 09:03:22 --> Could not find the language line "products"
ERROR - 2023-08-27 09:04:00 --> Could not find the language line "Home"
ERROR - 2023-08-27 09:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:07:33 --> Could not find the language line "Home"
ERROR - 2023-08-27 09:07:35 --> Could not find the language line "products"
ERROR - 2023-08-27 09:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:09:00 --> Could not find the language line "products"
ERROR - 2023-08-27 09:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:10:24 --> Could not find the language line "products"
ERROR - 2023-08-27 09:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:18:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 09:18:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 09:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:20:40 --> Could not find the language line "Home"
ERROR - 2023-08-27 09:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:27:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 09:27:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-27 09:31:36 --> Could not find the language line "Home"
ERROR - 2023-08-27 09:34:18 --> Could not find the language line "products"
ERROR - 2023-08-27 09:37:07 --> Could not find the language line "products"
ERROR - 2023-08-27 09:38:31 --> Could not find the language line "Home"
ERROR - 2023-08-27 09:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:40:32 --> Could not find the language line "Home"
ERROR - 2023-08-27 09:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:40:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 09:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:42:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 09:42:15 --> Could not find the language line "Home"
ERROR - 2023-08-27 09:42:44 --> Could not find the language line "products"
ERROR - 2023-08-27 09:42:57 --> Could not find the language line "Home"
ERROR - 2023-08-27 09:43:02 --> Could not find the language line "Socks"
ERROR - 2023-08-27 09:43:32 --> Could not find the language line "Socks"
ERROR - 2023-08-27 09:43:40 --> Could not find the language line "Socks"
ERROR - 2023-08-27 09:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:43:45 --> Could not find the language line "Socks"
ERROR - 2023-08-27 09:43:47 --> Could not find the language line "Home"
ERROR - 2023-08-27 09:44:05 --> Could not find the language line "products"
ERROR - 2023-08-27 09:44:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 09:44:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 09:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:45:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 09:45:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 09:46:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 09:46:11 --> Could not find the language line "products"
ERROR - 2023-08-27 09:46:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 09:46:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 09:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 09:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-27 10:00:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 10:00:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 10:01:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 10:01:05 --> Could not find the language line "Home"
ERROR - 2023-08-27 10:03:37 --> Could not find the language line "products"
ERROR - 2023-08-27 10:05:01 --> Could not find the language line "products"
ERROR - 2023-08-27 10:06:21 --> Could not find the language line "Home"
ERROR - 2023-08-27 10:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:08:02 --> Could not find the language line "Home"
ERROR - 2023-08-27 10:08:20 --> Could not find the language line "Home"
ERROR - 2023-08-27 10:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:09:07 --> Could not find the language line "Home"
ERROR - 2023-08-27 10:09:10 --> Could not find the language line "Home"
ERROR - 2023-08-27 10:09:54 --> Could not find the language line "products"
ERROR - 2023-08-27 10:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:11:18 --> Could not find the language line "products"
ERROR - 2023-08-27 10:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:12:41 --> Could not find the language line "products"
ERROR - 2023-08-27 10:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:14:05 --> Could not find the language line "products"
ERROR - 2023-08-27 10:14:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 10:14:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 10:15:29 --> Could not find the language line "products"
ERROR - 2023-08-27 10:16:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 10:17:22 --> Could not find the language line "Home"
ERROR - 2023-08-27 10:17:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 10:17:40 --> Could not find the language line "products"
ERROR - 2023-08-27 10:17:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 10:17:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 10:17:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 10:17:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 10:17:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 10:17:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 10:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:21:45 --> Could not find the language line "products"
ERROR - 2023-08-27 10:23:09 --> Could not find the language line "products"
ERROR - 2023-08-27 10:23:15 --> Could not find the language line "Home"
ERROR - 2023-08-27 10:28:02 --> Could not find the language line "products"
ERROR - 2023-08-27 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-27 10:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:32:13 --> Could not find the language line "products"
ERROR - 2023-08-27 10:33:37 --> Could not find the language line "products"
ERROR - 2023-08-27 10:33:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2023-08-27 10:33:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%crocs%' OR a.description LIKE '%crocs%' OR a.color LIKE '%crocs%' OR a.barcode LIKE '%crocs%' OR a.category LIKE '%crocs%' OR a.sub_category LIKE '%crocs%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 10:35:43 --> Could not find the language line "products"
ERROR - 2023-08-27 10:37:06 --> Could not find the language line "products"
ERROR - 2023-08-27 10:37:16 --> Could not find the language line "Home"
ERROR - 2023-08-27 10:38:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 10:38:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 10:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:44:57 --> Could not find the language line "products"
ERROR - 2023-08-27 10:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:46:24 --> Could not find the language line "products"
ERROR - 2023-08-27 10:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 10:50:45 --> Could not find the language line "products"
ERROR - 2023-08-27 10:52:12 --> Could not find the language line "products"
ERROR - 2023-08-27 10:55:07 --> Could not find the language line "products"
ERROR - 2023-08-27 10:55:31 --> Could not find the language line "Home"
ERROR - 2023-08-27 10:56:34 --> Could not find the language line "products"
ERROR - 2023-08-27 10:58:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 10:58:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 10:58:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 10:58:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('47', '45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 10:58:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 10:58:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 10:58:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('47', '45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 10:58:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('47', '45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 10:58:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('47', '45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 10:58:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('47', '45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 10:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-27 11:01:02 --> Could not find the language line "Home"
ERROR - 2023-08-27 11:01:02 --> Could not find the language line "Home"
ERROR - 2023-08-27 11:01:04 --> Could not find the language line "Home"
ERROR - 2023-08-27 11:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 11:03:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 11:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 11:04:33 --> Could not find the language line "products"
ERROR - 2023-08-27 11:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 11:06:00 --> Could not find the language line "products"
ERROR - 2023-08-27 11:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 11:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 11:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 11:12:12 --> Could not find the language line "0"
ERROR - 2023-08-27 11:13:31 --> Could not find the language line "Home"
ERROR - 2023-08-27 11:15:26 --> Could not find the language line "products"
ERROR - 2023-08-27 11:16:53 --> Could not find the language line "products"
ERROR - 2023-08-27 11:18:10 --> Could not find the language line "Home"
ERROR - 2023-08-27 11:18:20 --> Could not find the language line "products"
ERROR - 2023-08-27 11:19:47 --> Could not find the language line "products"
ERROR - 2023-08-27 11:21:04 --> Could not find the language line "Home"
ERROR - 2023-08-27 11:21:14 --> Could not find the language line "products"
ERROR - 2023-08-27 11:23:25 --> Could not find the language line "products"
ERROR - 2023-08-27 11:26:19 --> Could not find the language line "products"
ERROR - 2023-08-27 11:27:46 --> Could not find the language line "products"
ERROR - 2023-08-27 11:28:30 --> Could not find the language line "products"
ERROR - 2023-08-27 11:29:13 --> Could not find the language line "products"
ERROR - 2023-08-27 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-27 11:30:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 11:34:14 --> Could not find the language line "Home"
ERROR - 2023-08-27 11:35:02 --> Could not find the language line "products"
ERROR - 2023-08-27 11:37:30 --> Could not find the language line "Home"
ERROR - 2023-08-27 11:38:20 --> Could not find the language line "Home"
ERROR - 2023-08-27 11:38:39 --> Could not find the language line "products"
ERROR - 2023-08-27 11:38:59 --> Could not find the language line "Home"
ERROR - 2023-08-27 11:40:06 --> Could not find the language line "products"
ERROR - 2023-08-27 11:41:34 --> Could not find the language line "products"
ERROR - 2023-08-27 11:43:01 --> Could not find the language line "products"
ERROR - 2023-08-27 11:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 11:48:05 --> Could not find the language line "products"
ERROR - 2023-08-27 11:49:33 --> Could not find the language line "products"
ERROR - 2023-08-27 11:49:40 --> Could not find the language line "Home"
ERROR - 2023-08-27 11:51:16 --> Could not find the language line "Home"
ERROR - 2023-08-27 11:51:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 11:51:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-27 12:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:05:38 --> Could not find the language line "Home"
ERROR - 2023-08-27 12:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:09:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 12:09:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 12:11:27 --> Could not find the language line "Home"
ERROR - 2023-08-27 12:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:15:35 --> Could not find the language line "Home"
ERROR - 2023-08-27 12:20:33 --> Could not find the language line "Home"
ERROR - 2023-08-27 12:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:21:44 --> Could not find the language line "Home"
ERROR - 2023-08-27 12:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:24:31 --> Could not find the language line "Home"
ERROR - 2023-08-27 12:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:28:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 12:28:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-27 12:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:31:50 --> Could not find the language line "Home"
ERROR - 2023-08-27 12:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:33:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 12:33:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 12:33:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 12:34:43 --> Could not find the language line "Home"
ERROR - 2023-08-27 12:34:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 12:34:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 12:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:45:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 12:45:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 12:46:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 12:46:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 12:47:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 12:47:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 12:47:56 --> Could not find the language line "assets"
ERROR - 2023-08-27 12:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:48:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 12:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:53:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 12:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 12:57:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 12:57:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 13:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:02:53 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:03:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-27 13:04:15 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:06:00 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:08:53 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:11:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 13:11:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 13:11:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 13:11:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 13:11:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 13:11:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('47', '45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 13:11:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('47', '45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 13:11:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('47', '45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 13:11:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('47', '45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 13:11:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('47', '45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 13:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:13:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 13:19:57 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:20:42 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:25:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 13:25:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 13:25:32 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:30:09 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:31:13 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:34:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 13:34:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 13:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:37:44 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:38:07 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:38:38 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:51:34 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:51:57 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:52:01 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:52:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-27 13:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:54:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 13:54:17 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:54:31 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:57:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 13:57:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 13:57:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 13:58:35 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 13:59:08 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:59:12 --> Could not find the language line "Home"
ERROR - 2023-08-27 13:59:12 --> 404 Page Not Found: Uyijplrnhl/index
ERROR - 2023-08-27 14:00:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 14:00:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-27 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:00:38 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:01:42 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 14:09:23 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-27 14:09:23 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-27 14:09:24 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-27 14:09:24 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-27 14:09:44 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 14:12:40 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 14:17:53 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 14:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 14:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 14:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 14:28:40 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 14:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 14:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 14:32:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 14:34:11 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:38:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 14:38:31 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:38:33 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:38:41 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 14:38:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 14:38:51 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:39:02 --> Could not find the language line "Other"
ERROR - 2023-08-27 14:39:04 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 14:39:07 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:39:09 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 14:39:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 14:39:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 14:39:48 --> Could not find the language line "Bracelets"
ERROR - 2023-08-27 14:39:49 --> Could not find the language line "Perfume"
ERROR - 2023-08-27 14:40:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 14:40:28 --> Could not find the language line "Other"
ERROR - 2023-08-27 14:40:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 14:41:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 14:41:30 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 14:41:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 14:42:32 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:42:50 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 14:42:55 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 14:42:56 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 14:42:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 14:43:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 14:43:17 --> Could not find the language line "Socks"
ERROR - 2023-08-27 14:43:27 --> Could not find the language line "Hair%2520%25and%2520Skin%2520Products"
ERROR - 2023-08-27 14:43:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 14:43:38 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 14:43:46 --> Could not find the language line "Other"
ERROR - 2023-08-27 14:43:48 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 14:43:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 14:44:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 14:44:17 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-27 14:44:21 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 14:44:24 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:44:27 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:46:47 --> Could not find the language line "Home"
ERROR - 2023-08-27 14:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 15:15:16 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:16:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 15:16:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 15:16:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 15:16:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 15:16:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 15:16:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 15:16:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 15:16:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 15:16:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 15:16:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 15:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 15:19:58 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 15:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 15:23:35 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:24:38 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:26:58 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:29:53 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:30:09 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:30:22 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:30:25 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:32:48 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 15:40:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 15:40:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 15:41:33 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 15:51:18 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:51:25 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:51:26 --> Could not find the language line "Home"
ERROR - 2023-08-27 15:51:47 --> Could not find the language line "Home"
ERROR - 2023-08-27 16:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-27 16:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 16:18:13 --> Could not find the language line "Home"
ERROR - 2023-08-27 16:19:47 --> Could not find the language line "Home"
ERROR - 2023-08-27 16:27:31 --> Could not find the language line "Home"
ERROR - 2023-08-27 16:29:11 --> Could not find the language line "Home"
ERROR - 2023-08-27 16:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-27 16:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 16:37:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 16:38:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 16:43:33 --> Could not find the language line "Home"
ERROR - 2023-08-27 16:43:34 --> Could not find the language line "Home"
ERROR - 2023-08-27 16:48:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 16:48:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 16:48:43 --> Could not find the language line "Home"
ERROR - 2023-08-27 16:49:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 16:49:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 16:49:22 --> Could not find the language line "Home"
ERROR - 2023-08-27 16:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 16:50:45 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 16:50:48 --> Could not find the language line "Home"
ERROR - 2023-08-27 16:50:53 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 16:50:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 16:51:01 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 16:51:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 16:51:13 --> Could not find the language line "Other"
ERROR - 2023-08-27 16:51:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 16:51:43 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-27 16:51:44 --> Could not find the language line "Home"
ERROR - 2023-08-27 16:51:56 --> Could not find the language line "Perfume"
ERROR - 2023-08-27 16:52:21 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 16:52:29 --> Could not find the language line "Other"
ERROR - 2023-08-27 16:52:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 16:53:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 16:54:37 --> Could not find the language line "Other"
ERROR - 2023-08-27 16:54:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 16:54:54 --> Could not find the language line "Bracelets"
ERROR - 2023-08-27 16:55:04 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 16:55:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 16:56:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 16:58:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 16:58:22 --> Could not find the language line "Socks"
ERROR - 2023-08-27 16:59:25 --> Could not find the language line "Bracelets"
ERROR - 2023-08-27 16:59:40 --> Could not find the language line "Home"
ERROR - 2023-08-27 16:59:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 17:00:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-27 17:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 17:00:55 --> Could not find the language line "Home"
ERROR - 2023-08-27 17:01:44 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:02:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-27 17:03:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-27 17:03:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 17:04:24 --> Could not find the language line "Perfume"
ERROR - 2023-08-27 17:04:47 --> Could not find the language line "Home"
ERROR - 2023-08-27 17:05:00 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 17:05:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 17:05:40 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:06:26 --> Could not find the language line "Home"
ERROR - 2023-08-27 17:06:30 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 17:06:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 17:06:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 17:07:22 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:07:52 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 17:07:55 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 17:08:00 --> Could not find the language line "Socks"
ERROR - 2023-08-27 17:08:06 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 17:10:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 17:10:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 17:12:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 17:12:46 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 17:14:13 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:14:17 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:15:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 17:17:01 --> Could not find the language line "Home"
ERROR - 2023-08-27 17:18:16 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:19:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 17:19:42 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-27 17:20:21 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:22:06 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-27 17:22:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 17:22:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 17:22:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 17:23:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 17:23:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 17:24:31 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:24:35 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:24:46 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:24:52 --> 404 Page Not Found: Home/users
ERROR - 2023-08-27 17:24:58 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:25:07 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:25:23 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:25:29 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:25:44 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:25:47 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-27 17:25:52 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:26:09 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:26:13 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:26:19 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:26:23 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:26:26 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-27 17:26:33 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:26:44 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:26:57 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:27:03 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:27:06 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:27:11 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:27:18 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:27:42 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:27:46 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:27:51 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:28:05 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:28:09 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:28:14 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:28:18 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:28:24 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:28:32 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:28:37 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:28:53 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-27 17:29:02 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:29:06 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:29:16 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:29:21 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-27 17:30:22 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:30:24 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:30:37 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:30:42 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:30:58 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:31:02 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:31:08 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:31:10 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:31:15 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:31:21 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:31:27 --> Could not find the language line "Home"
ERROR - 2023-08-27 17:31:31 --> Could not find the language line "Home"
ERROR - 2023-08-27 17:32:14 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:32:27 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:32:29 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:32:35 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:32:40 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:32:49 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-27 17:33:03 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:33:08 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:33:10 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-27 17:33:13 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:33:16 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:33:22 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:33:26 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:33:30 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:33:34 --> 404 Page Not Found: Home/cart
ERROR - 2023-08-27 17:33:38 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:33:42 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:33:57 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:34:00 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:34:04 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:34:10 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:34:14 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:34:18 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:34:29 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:34:33 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:34:37 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:34:47 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:34:51 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:35:01 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-27 17:35:09 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-27 17:35:22 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:35:28 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:35:33 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:35:37 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:35:51 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:35:56 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:36:30 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:36:34 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:36:36 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:36:41 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:36:52 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:36:58 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:37:17 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:37:20 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:37:26 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:37:29 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:37:38 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:37:42 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:37:47 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:37:59 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:38:04 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:38:10 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:38:16 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:38:40 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:38:51 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:38:56 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:38:58 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:39:02 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:39:08 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:39:11 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:39:14 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:39:20 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:39:23 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:39:27 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-27 17:39:31 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:39:35 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:39:43 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:40:28 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:40:33 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:40:35 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:40:40 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:40:50 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:40:54 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:40:57 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:41:00 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:41:10 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:41:27 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:42:16 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:42:21 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:43:17 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-27 17:43:30 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:43:34 --> Could not find the language line "accounts"
ERROR - 2023-08-27 17:43:40 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:43:48 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:44:05 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:44:15 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:44:26 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:44:29 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:44:40 --> Could not find the language line "users"
ERROR - 2023-08-27 17:45:15 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:45:27 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:45:35 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:45:37 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:45:58 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:46:02 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:46:06 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:46:09 --> Could not find the language line "accounts"
ERROR - 2023-08-27 17:46:14 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:46:29 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:46:35 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:46:41 --> Could not find the language line "accounts"
ERROR - 2023-08-27 17:46:46 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:46:51 --> 404 Page Not Found: Home/users
ERROR - 2023-08-27 17:46:59 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:47:04 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:47:09 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:47:13 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:47:28 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:47:34 --> Could not find the language line "Home"
ERROR - 2023-08-27 17:47:43 --> 404 Page Not Found: Home/users
ERROR - 2023-08-27 17:48:22 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:48:26 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:48:37 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:48:41 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:48:44 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:48:48 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:49:02 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:49:09 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:49:14 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-27 17:49:24 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:49:28 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:49:40 --> 404 Page Not Found: Cart/users
ERROR - 2023-08-27 17:49:45 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:49:56 --> Could not find the language line "Home"
ERROR - 2023-08-27 17:50:02 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:50:07 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:50:14 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 17:50:32 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:50:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 17:50:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 17:50:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 17:50:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 17:50:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 17:50:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 17:50:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 17:50:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 17:50:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 17:50:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 17:50:51 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:50:58 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:51:03 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:51:09 --> 404 Page Not Found: Cart/accounts
ERROR - 2023-08-27 17:51:14 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:51:28 --> 404 Page Not Found: Cart/home
ERROR - 2023-08-27 17:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 17:51:48 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:51:59 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:52:15 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:52:19 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:52:28 --> 404 Page Not Found: Cart/accounts
ERROR - 2023-08-27 17:52:32 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:52:55 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:52:59 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:53:02 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-27 17:53:05 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:53:10 --> Could not find the language line "accounts"
ERROR - 2023-08-27 17:53:17 --> Could not find the language line "users"
ERROR - 2023-08-27 17:53:20 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:53:27 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:53:39 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:53:45 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:53:50 --> Could not find the language line "accounts"
ERROR - 2023-08-27 17:53:53 --> 404 Page Not Found: Cart/home
ERROR - 2023-08-27 17:54:38 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:54:42 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:54:52 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:54:57 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:55:25 --> Could not find the language line "accounts"
ERROR - 2023-08-27 17:55:38 --> Could not find the language line "accounts"
ERROR - 2023-08-27 17:55:41 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:55:46 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:55:50 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:55:53 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:56:00 --> Could not find the language line "users"
ERROR - 2023-08-27 17:56:04 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:56:08 --> Could not find the language line "accounts"
ERROR - 2023-08-27 17:56:12 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:56:17 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:56:28 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:56:32 --> 404 Page Not Found: Cart/accounts
ERROR - 2023-08-27 17:56:35 --> 404 Page Not Found: Cart/accounts
ERROR - 2023-08-27 17:56:40 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:56:45 --> 404 Page Not Found: Home/products
ERROR - 2023-08-27 17:56:55 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:56:59 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:57:10 --> Could not find the language line "Other"
ERROR - 2023-08-27 17:57:15 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:57:22 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-27 17:57:48 --> Could not find the language line "Home"
ERROR - 2023-08-27 17:58:18 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 17:58:21 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 17:58:24 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 17:58:39 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 17:58:52 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:00:10 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:00:14 --> 404 Page Not Found: Cart/accounts
ERROR - 2023-08-27 18:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-27 18:00:19 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:00:25 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:00:28 --> 404 Page Not Found: Users/home
ERROR - 2023-08-27 18:00:32 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 18:00:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:01:01 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:01:05 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:01:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:01:21 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:01:25 --> 404 Page Not Found: Users/accounts
ERROR - 2023-08-27 18:01:32 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:01:42 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:01:47 --> 404 Page Not Found: Users/accounts
ERROR - 2023-08-27 18:01:48 --> Could not find the language line "Home"
ERROR - 2023-08-27 18:01:51 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:02:04 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:02:12 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:02:15 --> 404 Page Not Found: Cart/home
ERROR - 2023-08-27 18:02:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:02:40 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-27 18:02:44 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:02:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:02:59 --> 404 Page Not Found: Users/cart
ERROR - 2023-08-27 18:03:03 --> 404 Page Not Found: Users/home
ERROR - 2023-08-27 18:03:06 --> 404 Page Not Found: Users/home
ERROR - 2023-08-27 18:03:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:03:17 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:03:27 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:03:30 --> 404 Page Not Found: Cart/accounts
ERROR - 2023-08-27 18:03:40 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:03:45 --> 404 Page Not Found: Users/accounts
ERROR - 2023-08-27 18:03:49 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:03:53 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:04:07 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:04:12 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:04:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:04:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:04:31 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:04:35 --> 404 Page Not Found: Users/accounts
ERROR - 2023-08-27 18:04:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:04:52 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:04:56 --> 404 Page Not Found: Cart/home
ERROR - 2023-08-27 18:05:00 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:05:16 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:05:24 --> 404 Page Not Found: Users/home
ERROR - 2023-08-27 18:05:43 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:05:54 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:05:56 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:06:01 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:06:23 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:06:27 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:06:41 --> 404 Page Not Found: Cart/home
ERROR - 2023-08-27 18:06:44 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:06:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:06:53 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:06:58 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:07:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:07:27 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:07:30 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:07:35 --> 404 Page Not Found: Cart/users
ERROR - 2023-08-27 18:07:47 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:07:52 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:07:59 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:08:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:08:06 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:08:14 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:08:17 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:09:13 --> Could not find the language line "Home"
ERROR - 2023-08-27 18:09:19 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:09:26 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:09:30 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:09:33 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:09:38 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:09:43 --> 404 Page Not Found: Cart/users
ERROR - 2023-08-27 18:09:48 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:10:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:10:19 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:10:30 --> 404 Page Not Found: Users/home
ERROR - 2023-08-27 18:10:34 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:10:41 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:10:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:10:49 --> 404 Page Not Found: Users/accounts
ERROR - 2023-08-27 18:10:51 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-27 18:10:59 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:11:53 --> 404 Page Not Found: Cart/accounts
ERROR - 2023-08-27 18:12:01 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:12:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:12:09 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:12:14 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:12:18 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:12:23 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:12:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:13:00 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:13:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:14:03 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:14:33 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:14:37 --> 404 Page Not Found: Users/accounts
ERROR - 2023-08-27 18:14:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:14:50 --> 404 Page Not Found: Users/accounts
ERROR - 2023-08-27 18:15:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 18:15:12 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:15:16 --> 404 Page Not Found: Cart/accounts
ERROR - 2023-08-27 18:15:31 --> 404 Page Not Found: Cart/home
ERROR - 2023-08-27 18:15:34 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:15:39 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:15:43 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:16:06 --> 404 Page Not Found: Users/products
ERROR - 2023-08-27 18:16:10 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:16:13 --> 404 Page Not Found: Users/accounts
ERROR - 2023-08-27 18:16:24 --> 404 Page Not Found: Cart/products
ERROR - 2023-08-27 18:18:08 --> Could not find the language line "Home"
ERROR - 2023-08-27 18:20:15 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-27 18:24:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-27 18:36:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 18:36:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 18:39:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 18:39:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 18:39:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 18:40:02 --> Could not find the language line "Home"
ERROR - 2023-08-27 18:40:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 18:44:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic '))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 18:47:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 18:51:07 --> Could not find the language line "Home"
ERROR - 2023-08-27 18:51:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 18:55:58 --> Could not find the language line "Other"
ERROR - 2023-08-27 18:56:08 --> Could not find the language line "Other"
ERROR - 2023-08-27 18:56:17 --> Could not find the language line "Other"
ERROR - 2023-08-27 18:56:28 --> Could not find the language line "Other"
ERROR - 2023-08-27 18:56:31 --> Could not find the language line "Other"
ERROR - 2023-08-27 18:56:39 --> 404 Page Not Found: Products/accounts
ERROR - 2023-08-27 18:56:57 --> Could not find the language line "Home"
ERROR - 2023-08-27 18:57:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 18:58:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 18:58:16 --> Could not find the language line "accounts"
ERROR - 2023-08-27 18:58:28 --> Could not find the language line "accounts"
ERROR - 2023-08-27 18:58:35 --> 404 Page Not Found: Products/users
ERROR - 2023-08-27 18:58:57 --> Could not find the language line "accounts"
ERROR - 2023-08-27 18:59:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 18:59:28 --> 404 Page Not Found: Products/home
ERROR - 2023-08-27 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:00:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:00:31 --> 404 Page Not Found: Products/home
ERROR - 2023-08-27 19:00:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:01:00 --> Could not find the language line "accounts"
ERROR - 2023-08-27 19:01:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:01:20 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:01:33 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:01:53 --> 404 Page Not Found: Products/users
ERROR - 2023-08-27 19:02:03 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:03:31 --> 404 Page Not Found: Products/accounts
ERROR - 2023-08-27 19:03:48 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:03:59 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:04:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:04:26 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:04:37 --> 404 Page Not Found: Products/users
ERROR - 2023-08-27 19:04:44 --> 404 Page Not Found: Products/home
ERROR - 2023-08-27 19:04:48 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:05:18 --> 404 Page Not Found: Products/accounts
ERROR - 2023-08-27 19:06:20 --> 404 Page Not Found: Products/accounts
ERROR - 2023-08-27 19:06:24 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:06:26 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:06:37 --> Could not find the language line "accounts"
ERROR - 2023-08-27 19:07:13 --> Could not find the language line "accounts"
ERROR - 2023-08-27 19:07:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:08:04 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:08:10 --> 404 Page Not Found: Products/home
ERROR - 2023-08-27 19:08:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:08:43 --> Could not find the language line "accounts"
ERROR - 2023-08-27 19:08:56 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:09:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:09:01 --> Could not find the language line "accounts"
ERROR - 2023-08-27 19:09:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:09:15 --> 404 Page Not Found: Products/accounts
ERROR - 2023-08-27 19:09:24 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:09:44 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:10:00 --> Could not find the language line "accounts"
ERROR - 2023-08-27 19:10:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:10:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:11:14 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:11:20 --> 404 Page Not Found: Products/accounts
ERROR - 2023-08-27 19:11:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-27 19:11:34 --> Could not find the language line "accounts"
ERROR - 2023-08-27 19:12:45 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:12:52 --> 404 Page Not Found: Products/cart
ERROR - 2023-08-27 19:12:55 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:12:57 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:13:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:13:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:13:34 --> 404 Page Not Found: Products/home
ERROR - 2023-08-27 19:13:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:13:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:13:49 --> 404 Page Not Found: Products/accounts
ERROR - 2023-08-27 19:13:53 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 19:14:00 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:14:07 --> 404 Page Not Found: Products/home
ERROR - 2023-08-27 19:14:12 --> 404 Page Not Found: Products/accounts
ERROR - 2023-08-27 19:14:16 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:14:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:14:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:14:24 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 19:14:45 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:15:15 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:15:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:15:36 --> Could not find the language line "users"
ERROR - 2023-08-27 19:15:42 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:15:47 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:16:35 --> Could not find the language line "users"
ERROR - 2023-08-27 19:16:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal '))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:16:57 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:17:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:17:07 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:17:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:17:31 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:19:15 --> Could not find the language line "users"
ERROR - 2023-08-27 19:19:21 --> Could not find the language line "users"
ERROR - 2023-08-27 19:19:26 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:19:37 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:19:52 --> Could not find the language line "users"
ERROR - 2023-08-27 19:20:00 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:20:06 --> Could not find the language line "users"
ERROR - 2023-08-27 19:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 19:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 19:20:51 --> Could not find the language line "users"
ERROR - 2023-08-27 19:20:57 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:21:05 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:21:17 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:21:27 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 19:21:56 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:22:00 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:22:37 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-27 19:22:47 --> Could not find the language line "users"
ERROR - 2023-08-27 19:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 19:23:02 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:23:09 --> Could not find the language line "users"
ERROR - 2023-08-27 19:23:18 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:23:30 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:23:33 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:23:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:23:45 --> Could not find the language line "users"
ERROR - 2023-08-27 19:23:51 --> Could not find the language line "users"
ERROR - 2023-08-27 19:24:20 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:24:23 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:24:27 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:24:28 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:24:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:24:49 --> Could not find the language line "users"
ERROR - 2023-08-27 19:26:03 --> Could not find the language line "users"
ERROR - 2023-08-27 19:26:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:26:36 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:26:41 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:28:20 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:28:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:28:25 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:28:35 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:28:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 19:29:23 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:30:08 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:30:16 --> Could not find the language line "users"
ERROR - 2023-08-27 19:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 19:30:23 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:30:34 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:30:51 --> Could not find the language line "Other"
ERROR - 2023-08-27 19:30:55 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:30:55 --> Could not find the language line "users"
ERROR - 2023-08-27 19:30:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:31:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:31:11 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:31:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 19:31:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 19:31:23 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-27 19:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 19:32:55 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:32:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 19:32:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 19:33:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-27 19:33:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 19:33:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 19:33:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 19:33:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-27 19:33:29 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:33:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:33:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:33:31 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:34:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-27 19:34:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-27 19:34:37 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:34:45 --> Could not find the language line "Bracelets"
ERROR - 2023-08-27 19:36:15 --> Could not find the language line "Bracelets"
ERROR - 2023-08-27 19:36:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 19:43:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:43:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:43:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:44:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:44:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:44:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:44:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:45:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:45:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:45:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:45:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:45:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:45:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:45:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:46:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:46:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:46:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:47:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:48:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:48:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:48:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:48:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:48:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:48:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:48:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:48:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:49:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:49:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:49:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:49:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:50:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:50:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:50:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:50:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:50:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:50:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:51:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:51:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:51:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:51:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:52:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 19:52:45 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:52:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:53:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:53:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:53:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:53:16 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:53:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:53:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:53:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:53:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:53:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:53:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:53:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:53:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:54:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:54:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:54:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:54:26 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:54:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:55:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:55:20 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:55:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 19:56:00 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:57:25 --> Could not find the language line "Home"
ERROR - 2023-08-27 19:58:03 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-27 19:59:08 --> Could not find the language line "Home"
ERROR - 2023-08-27 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-27 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-27 20:00:46 --> Could not find the language line "Home"
ERROR - 2023-08-27 20:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:01:10 --> Could not find the language line "Home"
ERROR - 2023-08-27 20:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:08:50 --> Could not find the language line "Home"
ERROR - 2023-08-27 20:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-27 20:38:00 --> Could not find the language line "Home"
ERROR - 2023-08-27 20:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:39:33 --> Could not find the language line "Home"
ERROR - 2023-08-27 20:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:40:47 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:41:49 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:42:11 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:42:23 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:42:40 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:42:53 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:43:32 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:43:41 --> Could not find the language line "Home"
ERROR - 2023-08-27 20:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:44:17 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:45:50 --> Could not find the language line "Home"
ERROR - 2023-08-27 20:46:48 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:47:04 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:47:17 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:48:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-27 20:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:49:05 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:50:32 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:50:38 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:50:40 --> Could not find the language line "Socks"
ERROR - 2023-08-27 20:51:04 --> Could not find the language line "Socks"
ERROR - 2023-08-27 20:51:12 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:51:23 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:51:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 20:51:27 --> Could not find the language line "accounts"
ERROR - 2023-08-27 20:51:31 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:51:39 --> Could not find the language line "accounts"
ERROR - 2023-08-27 20:51:44 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:51:56 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:52:00 --> Could not find the language line "accounts"
ERROR - 2023-08-27 20:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:52:28 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:52:43 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:53:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 20:53:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 20:53:12 --> Could not find the language line "accounts"
ERROR - 2023-08-27 20:53:21 --> Could not find the language line "accounts"
ERROR - 2023-08-27 20:53:29 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:53:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 20:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:54:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 20:54:07 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:54:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 20:54:41 --> Could not find the language line "accounts"
ERROR - 2023-08-27 20:54:51 --> Could not find the language line "accounts"
ERROR - 2023-08-27 20:54:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 20:55:01 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:55:05 --> Could not find the language line "accounts"
ERROR - 2023-08-27 20:55:09 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:55:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 20:55:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-27 20:56:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-27 20:56:02 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:56:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-27 20:56:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 20:56:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 20:56:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 20:56:27 --> Could not find the language line "accounts"
ERROR - 2023-08-27 20:56:30 --> Could not find the language line "Socks"
ERROR - 2023-08-27 20:56:33 --> Could not find the language line "Socks"
ERROR - 2023-08-27 20:56:36 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:56:38 --> Could not find the language line "Home"
ERROR - 2023-08-27 20:56:40 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:56:43 --> Could not find the language line "Perfume"
ERROR - 2023-08-27 20:56:43 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 20:57:02 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:57:10 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:57:12 --> Could not find the language line "Socks"
ERROR - 2023-08-27 20:57:13 --> Could not find the language line "Home"
ERROR - 2023-08-27 20:57:18 --> Could not find the language line "Home"
ERROR - 2023-08-27 20:57:36 --> Could not find the language line "accounts"
ERROR - 2023-08-27 20:57:39 --> Could not find the language line "accounts"
ERROR - 2023-08-27 20:58:08 --> Could not find the language line "accounts"
ERROR - 2023-08-27 20:58:21 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:58:52 --> Could not find the language line "accounts"
ERROR - 2023-08-27 20:59:37 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:59:42 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:59:45 --> Could not find the language line "Other"
ERROR - 2023-08-27 20:59:51 --> Could not find the language line "accounts"
ERROR - 2023-08-27 21:00:04 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:00:08 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:00:21 --> Could not find the language line "Home"
ERROR - 2023-08-27 21:00:23 --> Could not find the language line "accounts"
ERROR - 2023-08-27 21:00:37 --> Could not find the language line "users"
ERROR - 2023-08-27 21:00:41 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:01:05 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:01:13 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:01:21 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:01:29 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:01:33 --> Could not find the language line "accounts"
ERROR - 2023-08-27 21:02:49 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:02:53 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:03:07 --> Could not find the language line "users"
ERROR - 2023-08-27 21:04:01 --> Could not find the language line "users"
ERROR - 2023-08-27 21:04:05 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:04:10 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:04:17 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:04:21 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:04:26 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:04:31 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:04:33 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:04:38 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:05:12 --> Could not find the language line "users"
ERROR - 2023-08-27 21:05:17 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:05:25 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:05:34 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:05:50 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:06:09 --> Could not find the language line "users"
ERROR - 2023-08-27 21:07:09 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:08:08 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:08:17 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:08:21 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:08:35 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:08:39 --> Could not find the language line "accounts"
ERROR - 2023-08-27 21:08:47 --> Could not find the language line "users"
ERROR - 2023-08-27 21:09:02 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:09:10 --> Could not find the language line "accounts"
ERROR - 2023-08-27 21:09:43 --> Could not find the language line "accounts"
ERROR - 2023-08-27 21:09:51 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:10:00 --> Could not find the language line "users"
ERROR - 2023-08-27 21:10:02 --> Could not find the language line "accounts"
ERROR - 2023-08-27 21:10:15 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:10:23 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:10:31 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:10:35 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:10:40 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:10:55 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:10:59 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:11:15 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:11:27 --> Could not find the language line "users"
ERROR - 2023-08-27 21:11:32 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:11:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 21:11:57 --> Could not find the language line "users"
ERROR - 2023-08-27 21:12:10 --> Could not find the language line "Home"
ERROR - 2023-08-27 21:12:19 --> Could not find the language line "users"
ERROR - 2023-08-27 21:12:23 --> Could not find the language line "users"
ERROR - 2023-08-27 21:12:27 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:12:37 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:12:44 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:13:05 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:13:09 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:13:40 --> Could not find the language line "users"
ERROR - 2023-08-27 21:13:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 21:13:42 --> Could not find the language line "Home"
ERROR - 2023-08-27 21:13:43 --> Could not find the language line "users"
ERROR - 2023-08-27 21:13:51 --> Could not find the language line "users"
ERROR - 2023-08-27 21:14:27 --> Could not find the language line "users"
ERROR - 2023-08-27 21:14:31 --> Could not find the language line "users"
ERROR - 2023-08-27 21:14:40 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:14:44 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:14:48 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:14:55 --> Could not find the language line "users"
ERROR - 2023-08-27 21:15:04 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:15:12 --> Could not find the language line "Home"
ERROR - 2023-08-27 21:15:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 21:16:07 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:16:11 --> Could not find the language line "users"
ERROR - 2023-08-27 21:16:28 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:16:36 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:17:15 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:17:18 --> Could not find the language line "users"
ERROR - 2023-08-27 21:17:25 --> Could not find the language line "users"
ERROR - 2023-08-27 21:17:46 --> Could not find the language line "users"
ERROR - 2023-08-27 21:17:50 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:17:54 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:18:58 --> Could not find the language line "users"
ERROR - 2023-08-27 21:19:01 --> Could not find the language line "users"
ERROR - 2023-08-27 21:19:09 --> Could not find the language line "users"
ERROR - 2023-08-27 21:19:19 --> Could not find the language line "users"
ERROR - 2023-08-27 21:19:34 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:19:44 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:19:51 --> Could not find the language line "users"
ERROR - 2023-08-27 21:19:54 --> Could not find the language line "Home"
ERROR - 2023-08-27 21:19:55 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:20:02 --> Could not find the language line "users"
ERROR - 2023-08-27 21:20:13 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:20:17 --> Could not find the language line "users"
ERROR - 2023-08-27 21:20:30 --> Could not find the language line "users"
ERROR - 2023-08-27 21:20:33 --> Could not find the language line "users"
ERROR - 2023-08-27 21:20:42 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:20:45 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:20:48 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:21:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 21:21:46 --> Could not find the language line "Home"
ERROR - 2023-08-27 21:22:24 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:25:29 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:27:13 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:28:10 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:29:31 --> Could not find the language line "Other"
ERROR - 2023-08-27 21:30:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 21:30:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 21:30:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-27 21:30:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 21:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 21:41:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:41:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:42:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:42:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:42:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:42:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:42:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:42:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:43:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:43:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:43:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:43:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:43:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:43:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:43:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:44:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:44:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:44:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:44:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:44:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:44:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:44:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:45:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:45:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:45:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:45:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:45:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:45:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:45:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:45:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:45:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:45:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:46:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:46:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:46:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:46:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:46:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:46:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:46:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:46:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:47:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:47:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:47:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:47:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:47:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:47:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:47:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:47:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:47:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:48:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:48:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:49:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:49:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:49:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:49:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:49:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:49:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:50:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:50:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:50:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:50:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 21:50:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:50:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:51:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 21:51:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 21:51:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:51:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:51:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 21:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 21:52:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 21:52:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:52:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:52:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:53:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:53:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:53:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 21:54:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:54:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 21:54:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 21:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 21:55:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:55:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:55:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:55:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:55:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:56:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:56:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:56:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:56:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:56:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:56:38 --> Could not find the language line "Home"
ERROR - 2023-08-27 21:56:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:56:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:57:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:57:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:57:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:57:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:58:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:58:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:58:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:58:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:58:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:59:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:59:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:59:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:59:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 21:59:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-27 22:00:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 22:00:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 22:00:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 22:00:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 22:02:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 22:02:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 22:02:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 22:02:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 22:02:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 22:02:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 22:02:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 22:02:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 22:02:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 22:02:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-27 22:03:40 --> Could not find the language line "Home"
ERROR - 2023-08-27 22:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 22:05:48 --> Could not find the language line "Home"
ERROR - 2023-08-27 22:15:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 22:24:43 --> Could not find the language line "Home"
ERROR - 2023-08-27 22:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-27 22:31:41 --> Could not find the language line "Home"
ERROR - 2023-08-27 22:32:29 --> Could not find the language line "Home"
ERROR - 2023-08-27 22:32:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 22:33:02 --> Could not find the language line "Home"
ERROR - 2023-08-27 22:33:08 --> Could not find the language line "Perfume"
ERROR - 2023-08-27 22:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 22:33:40 --> Could not find the language line "Perfume"
ERROR - 2023-08-27 22:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 22:33:50 --> Could not find the language line "Perfume"
ERROR - 2023-08-27 22:33:53 --> Could not find the language line "Home"
ERROR - 2023-08-27 22:42:26 --> Could not find the language line "Home"
ERROR - 2023-08-27 22:46:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-27 22:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 22:48:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 22:48:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 22:48:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 22:48:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 22:48:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-27 22:48:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 22:48:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 22:48:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 22:48:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 22:48:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-27 22:49:03 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:51:44 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:51:48 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:56:49 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:57:08 --> Could not find the language line "accounts"
ERROR - 2023-08-27 22:57:13 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:57:22 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:57:26 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:57:33 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:57:54 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:58:07 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:58:28 --> Could not find the language line "accounts"
ERROR - 2023-08-27 22:58:32 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:58:53 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:59:30 --> Could not find the language line "accounts"
ERROR - 2023-08-27 22:59:34 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:59:38 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:59:46 --> Could not find the language line "Other"
ERROR - 2023-08-27 22:59:50 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-27 23:01:03 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:01:05 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:01:22 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:01:42 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:01:50 --> Could not find the language line "Home"
ERROR - 2023-08-27 23:02:03 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:02:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-27 23:02:15 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:02:56 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:03:23 --> Could not find the language line "Home"
ERROR - 2023-08-27 23:04:00 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:04:25 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:04:37 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:04:42 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:04:49 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:04:59 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:05:15 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:06:15 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:06:19 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:06:44 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:06:48 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:07:14 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:07:18 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:07:23 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:07:40 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:08:01 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:08:05 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:08:09 --> Could not find the language line "users"
ERROR - 2023-08-27 23:08:22 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:08:32 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:08:50 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:08:52 --> Could not find the language line "Home"
ERROR - 2023-08-27 23:08:54 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:09:02 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:09:10 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:09:14 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:09:29 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:09:36 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:10:12 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:10:16 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:10:20 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:10:36 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:10:45 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:10:53 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:10:57 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:11:34 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:11:36 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-27 23:11:43 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:11:51 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:12:00 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:12:19 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:12:40 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:12:43 --> Could not find the language line "accounts"
ERROR - 2023-08-27 23:12:48 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:12:52 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:13:55 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:14:21 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:14:43 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:15:16 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:15:29 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:15:37 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:15:49 --> Could not find the language line "users"
ERROR - 2023-08-27 23:15:58 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:16:02 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:16:10 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:16:20 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:16:27 --> Could not find the language line "users"
ERROR - 2023-08-27 23:16:57 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:17:01 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:17:05 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:17:20 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:17:28 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:17:33 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:17:41 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:17:53 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:17:58 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:18:01 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:18:05 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:18:14 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:18:29 --> Could not find the language line "users"
ERROR - 2023-08-27 23:18:38 --> Could not find the language line "users"
ERROR - 2023-08-27 23:18:47 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:18:59 --> Could not find the language line "users"
ERROR - 2023-08-27 23:19:03 --> Could not find the language line "users"
ERROR - 2023-08-27 23:19:10 --> Could not find the language line "users"
ERROR - 2023-08-27 23:19:23 --> Could not find the language line "users"
ERROR - 2023-08-27 23:19:27 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:19:31 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:19:39 --> Could not find the language line "users"
ERROR - 2023-08-27 23:19:53 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:20:02 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:20:05 --> Could not find the language line "users"
ERROR - 2023-08-27 23:20:14 --> Could not find the language line "users"
ERROR - 2023-08-27 23:20:38 --> Could not find the language line "users"
ERROR - 2023-08-27 23:20:46 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:20:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-27 23:20:55 --> Could not find the language line "users"
ERROR - 2023-08-27 23:20:59 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:21:08 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:21:12 --> Could not find the language line "users"
ERROR - 2023-08-27 23:21:16 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:21:20 --> Could not find the language line "users"
ERROR - 2023-08-27 23:21:36 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:21:46 --> Could not find the language line "users"
ERROR - 2023-08-27 23:21:49 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:21:57 --> Could not find the language line "users"
ERROR - 2023-08-27 23:22:04 --> Could not find the language line "users"
ERROR - 2023-08-27 23:22:09 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:22:16 --> Could not find the language line "users"
ERROR - 2023-08-27 23:22:21 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:22:25 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:22:46 --> Could not find the language line "users"
ERROR - 2023-08-27 23:23:02 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:23:10 --> Could not find the language line "users"
ERROR - 2023-08-27 23:23:15 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:23:38 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:24:00 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:24:07 --> Could not find the language line "users"
ERROR - 2023-08-27 23:24:10 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:24:27 --> Could not find the language line "users"
ERROR - 2023-08-27 23:25:21 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:25:23 --> Could not find the language line "users"
ERROR - 2023-08-27 23:25:46 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:27:14 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:27:22 --> Could not find the language line "users"
ERROR - 2023-08-27 23:27:31 --> Could not find the language line "users"
ERROR - 2023-08-27 23:27:43 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:28:01 --> Could not find the language line "Home"
ERROR - 2023-08-27 23:28:39 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:28:58 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:29:06 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-27 23:30:40 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:30:44 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:30:48 --> Could not find the language line "Other"
ERROR - 2023-08-27 23:31:09 --> Could not find the language line "users"
ERROR - 2023-08-27 23:32:27 --> Could not find the language line "users"
ERROR - 2023-08-27 23:32:59 --> Could not find the language line "users"
ERROR - 2023-08-27 23:39:02 --> Could not find the language line "Home"
ERROR - 2023-08-27 23:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-27 23:40:45 --> Could not find the language line "Home"
ERROR - 2023-08-27 23:41:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:42:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:42:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:42:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:42:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:43:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:43:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:43:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:43:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:43:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:43:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:44:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:44:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:44:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:44:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:44:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:45:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:45:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:45:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:45:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:45:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:46:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:46:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:46:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:46:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:46:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:47:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:47:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:47:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:47:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:47:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:48:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:48:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:48:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:48:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:48:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:48:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:49:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:49:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:49:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:49:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:49:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:50:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:50:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:50:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:50:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:50:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:50:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:51:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:51:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:51:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:51:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:51:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:52:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:52:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:52:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:52:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:52:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:52:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:53:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:53:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:53:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:53:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:53:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:54:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:54:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:54:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:54:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:54:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:54:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:54:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:54:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:55:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:55:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:55:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:55:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:55:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:55:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:55:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:55:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:55:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:56:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:56:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:56:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:57:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:58:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:59:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:59:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-27 23:59:46 --> Could not find the language line "Clothing"
