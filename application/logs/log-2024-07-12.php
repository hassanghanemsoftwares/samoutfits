<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-12 00:10:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 00:13:45 --> Could not find the language line "Home"
ERROR - 2024-07-12 00:14:47 --> Could not find the language line "Home"
ERROR - 2024-07-12 00:19:47 --> Could not find the language line "Home"
ERROR - 2024-07-12 00:32:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 00:38:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 00:42:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 00:44:49 --> Could not find the language line "Home"
ERROR - 2024-07-12 00:46:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 00:48:24 --> Could not find the language line "Home"
ERROR - 2024-07-12 00:49:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 00:53:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 00:53:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 00:54:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 00:54:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 00:55:28 --> Could not find the language line "Other"
ERROR - 2024-07-12 00:55:35 --> Could not find the language line "Home"
ERROR - 2024-07-12 00:56:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 00:57:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 00:58:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 00:59:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:00:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:01:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:02:44 --> Could not find the language line "Socks"
ERROR - 2024-07-12 01:02:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:03:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:04:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:05:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:06:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:07:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:08:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:09:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:09:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 01:10:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:11:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:13:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:14:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 01:14:48 --> Could not find the language line "Home"
ERROR - 2024-07-12 01:16:03 --> Could not find the language line "Clothing"
ERROR - 2024-07-12 01:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 01:44:52 --> Could not find the language line "Home"
ERROR - 2024-07-12 01:47:09 --> Could not find the language line "Home"
ERROR - 2024-07-12 01:50:29 --> Could not find the language line "products"
ERROR - 2024-07-12 01:53:23 --> Could not find the language line "Home"
ERROR - 2024-07-12 02:14:49 --> Could not find the language line "Home"
ERROR - 2024-07-12 02:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 02:23:23 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-12 02:24:56 --> Could not find the language line "Home"
ERROR - 2024-07-12 02:27:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 02:27:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 02:38:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 02:42:41 --> Could not find the language line "Home"
ERROR - 2024-07-12 02:42:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 02:44:51 --> Could not find the language line "Home"
ERROR - 2024-07-12 02:46:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 02:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 02:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 02:50:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 02:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 02:52:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 02:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 02:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 02:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 03:14:54 --> Could not find the language line "Home"
ERROR - 2024-07-12 03:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 03:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 03:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 03:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 03:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 03:24:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 03:25:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 03:30:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 03:31:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 03:32:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 03:44:52 --> Could not find the language line "Home"
ERROR - 2024-07-12 04:14:51 --> Could not find the language line "Home"
ERROR - 2024-07-12 04:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 04:25:23 --> Could not find the language line "products"
ERROR - 2024-07-12 04:26:32 --> Could not find the language line "Clothing"
ERROR - 2024-07-12 04:44:51 --> Could not find the language line "Home"
ERROR - 2024-07-12 04:53:45 --> Could not find the language line "Other"
ERROR - 2024-07-12 04:57:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 04:59:13 --> Could not find the language line "Socks"
ERROR - 2024-07-12 05:02:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 05:02:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 05:03:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 05:03:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 05:03:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 05:03:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 05:03:22 --> Could not find the language line "Clothing"
ERROR - 2024-07-12 05:03:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-12 05:03:23 --> Could not find the language line "Home"
ERROR - 2024-07-12 05:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 05:03:54 --> Could not find the language line "Clothing"
ERROR - 2024-07-12 05:11:53 --> Could not find the language line "Home"
ERROR - 2024-07-12 05:12:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 05:12:35 --> Could not find the language line "Home"
ERROR - 2024-07-12 05:14:53 --> Could not find the language line "Home"
ERROR - 2024-07-12 05:20:46 --> Could not find the language line "products"
ERROR - 2024-07-12 05:23:13 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-07-12 05:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 05:25:46 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-07-12 05:33:24 --> 404 Page Not Found: Products/products
ERROR - 2024-07-12 05:43:56 --> Could not find the language line "Home"
ERROR - 2024-07-12 05:44:46 --> Could not find the language line "Home"
ERROR - 2024-07-12 05:44:52 --> Could not find the language line "Home"
ERROR - 2024-07-12 05:47:51 --> 404 Page Not Found: /hair%20%26%20skin...
ERROR - 2024-07-12 05:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 06:05:05 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 06:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 06:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 06:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 06:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 06:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 06:13:57 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:14:52 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:18:21 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:19:24 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 06:34:44 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:36:52 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:37:15 --> Could not find the language line "Perfume"
ERROR - 2024-07-12 06:38:37 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:39:00 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:39:07 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:44:52 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:47:44 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:48:37 --> Could not find the language line "Clothing"
ERROR - 2024-07-12 06:49:01 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:49:53 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 06:53:06 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:53:17 --> Could not find the language line "Clothing"
ERROR - 2024-07-12 06:53:26 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:53:49 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:54:54 --> Could not find the language line "Clothing"
ERROR - 2024-07-12 06:54:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-12 06:56:03 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:56:10 --> Could not find the language line "Home"
ERROR - 2024-07-12 06:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:00:21 --> Could not find the language line "products"
ERROR - 2024-07-12 07:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:07:14 --> Could not find the language line "Home"
ERROR - 2024-07-12 07:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:10:22 --> Could not find the language line "Home"
ERROR - 2024-07-12 07:11:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 07:11:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 07:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:14:53 --> Could not find the language line "Home"
ERROR - 2024-07-12 07:16:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 07:16:50 --> Could not find the language line "Home"
ERROR - 2024-07-12 07:17:27 --> Could not find the language line "Home"
ERROR - 2024-07-12 07:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:33:57 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-07-12 07:37:05 --> Could not find the language line "Home"
ERROR - 2024-07-12 07:39:47 --> Could not find the language line "Home"
ERROR - 2024-07-12 07:42:16 --> Could not find the language line "Home"
ERROR - 2024-07-12 07:43:00 --> Could not find the language line "Home"
ERROR - 2024-07-12 07:44:22 --> Could not find the language line "Home"
ERROR - 2024-07-12 07:44:53 --> Could not find the language line "Home"
ERROR - 2024-07-12 07:46:20 --> Could not find the language line "Home"
ERROR - 2024-07-12 07:46:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-12 07:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:52:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-12 07:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 07:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:02:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-12 08:02:07 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-12 08:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:11:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 08:11:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 08:14:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 08:14:54 --> Could not find the language line "Home"
ERROR - 2024-07-12 08:15:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 08:15:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 08:15:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 08:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:15:57 --> Could not find the language line "Home"
ERROR - 2024-07-12 08:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:19:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 08:25:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 08:25:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 08:25:58 --> Could not find the language line "Home"
ERROR - 2024-07-12 08:26:06 --> Could not find the language line "Home"
ERROR - 2024-07-12 08:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:27:49 --> Could not find the language line "Home"
ERROR - 2024-07-12 08:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:37:58 --> Could not find the language line "Home"
ERROR - 2024-07-12 08:38:46 --> Could not find the language line "Home"
ERROR - 2024-07-12 08:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:42:39 --> Could not find the language line "Home"
ERROR - 2024-07-12 08:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 08:43:41 --> Could not find the language line "Home"
ERROR - 2024-07-12 08:44:54 --> Could not find the language line "Home"
ERROR - 2024-07-12 08:47:47 --> Could not find the language line "Home"
ERROR - 2024-07-12 08:48:27 --> Could not find the language line "Home"
ERROR - 2024-07-12 09:01:37 --> Could not find the language line "Home"
ERROR - 2024-07-12 09:12:27 --> Could not find the language line "Other"
ERROR - 2024-07-12 09:14:54 --> Could not find the language line "Home"
ERROR - 2024-07-12 09:19:07 --> Could not find the language line "Socks"
ERROR - 2024-07-12 09:19:28 --> Could not find the language line "Home"
ERROR - 2024-07-12 09:19:54 --> Could not find the language line "Home"
ERROR - 2024-07-12 09:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:29:48 --> Could not find the language line "Home"
ERROR - 2024-07-12 09:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:30:58 --> Could not find the language line "Home"
ERROR - 2024-07-12 09:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:31:18 --> Could not find the language line "Perfume"
ERROR - 2024-07-12 09:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 09:44:51 --> Could not find the language line "Home"
ERROR - 2024-07-12 09:44:55 --> Could not find the language line "Home"
ERROR - 2024-07-12 09:45:32 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-12 09:45:33 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-12 09:45:33 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-12 09:46:17 --> Could not find the language line "Home"
ERROR - 2024-07-12 09:47:59 --> Could not find the language line "Home"
ERROR - 2024-07-12 09:51:25 --> 404 Page Not Found: Products/products
ERROR - 2024-07-12 10:14:48 --> Could not find the language line "Home"
ERROR - 2024-07-12 10:14:55 --> Could not find the language line "Home"
ERROR - 2024-07-12 10:16:30 --> Could not find the language line "Home"
ERROR - 2024-07-12 10:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 10:28:57 --> Could not find the language line "products"
ERROR - 2024-07-12 10:29:26 --> Could not find the language line "Home"
ERROR - 2024-07-12 10:32:23 --> Could not find the language line "Home"
ERROR - 2024-07-12 10:32:33 --> Could not find the language line "Perfume"
ERROR - 2024-07-12 10:32:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 10:32:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 10:32:35 --> Could not find the language line "Clothing"
ERROR - 2024-07-12 10:32:35 --> Could not find the language line "Other"
ERROR - 2024-07-12 10:32:35 --> Could not find the language line "Other"
ERROR - 2024-07-12 10:32:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-12 10:32:36 --> Could not find the language line "Clothing"
ERROR - 2024-07-12 10:32:37 --> Could not find the language line "Bracelets"
ERROR - 2024-07-12 10:32:37 --> Could not find the language line "Clothing"
ERROR - 2024-07-12 10:32:38 --> Could not find the language line "Clothing"
ERROR - 2024-07-12 10:36:42 --> Could not find the language line "Home"
ERROR - 2024-07-12 10:37:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 10:38:23 --> Could not find the language line "Home"
ERROR - 2024-07-12 10:44:56 --> Could not find the language line "Home"
ERROR - 2024-07-12 10:46:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 11:09:50 --> Could not find the language line "Home"
ERROR - 2024-07-12 11:14:55 --> Could not find the language line "Home"
ERROR - 2024-07-12 11:22:16 --> Could not find the language line "Home"
ERROR - 2024-07-12 11:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 11:31:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 11:31:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 11:34:53 --> Could not find the language line "Home"
ERROR - 2024-07-12 11:41:52 --> Could not find the language line "Home"
ERROR - 2024-07-12 11:44:56 --> Could not find the language line "Home"
ERROR - 2024-07-12 11:56:14 --> Could not find the language line "Home"
ERROR - 2024-07-12 12:14:56 --> Could not find the language line "Home"
ERROR - 2024-07-12 12:22:33 --> Could not find the language line "Home"
ERROR - 2024-07-12 12:32:07 --> Could not find the language line "Home"
ERROR - 2024-07-12 12:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 12:36:59 --> Could not find the language line "products"
ERROR - 2024-07-12 12:41:17 --> Could not find the language line "products"
ERROR - 2024-07-12 12:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 12:44:57 --> Could not find the language line "Home"
ERROR - 2024-07-12 12:46:56 --> Could not find the language line "products"
ERROR - 2024-07-12 12:48:23 --> Could not find the language line "products"
ERROR - 2024-07-12 12:51:11 --> Could not find the language line "Home"
ERROR - 2024-07-12 12:56:33 --> Could not find the language line "hats"
ERROR - 2024-07-12 12:59:56 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:00:14 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:11:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 13:13:16 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:13:22 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:14:58 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:20:24 --> Could not find the language line "Socks"
ERROR - 2024-07-12 13:21:54 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:26:43 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:35:00 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:35:20 --> Could not find the language line "Bracelets"
ERROR - 2024-07-12 13:35:51 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:35:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 13:35:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 13:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:36:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 13:36:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 13:36:13 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:36:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 13:36:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 13:36:18 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:44:57 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:45:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 13:45:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-12 13:46:34 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:49:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 13:49:50 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-12 13:49:50 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-12 13:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:52:34 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:53:49 --> Could not find the language line "Home"
ERROR - 2024-07-12 13:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 13:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 14:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 14:04:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 14:13:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 14:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 14:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 14:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 14:14:57 --> Could not find the language line "Home"
ERROR - 2024-07-12 14:15:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 14:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 14:16:46 --> Could not find the language line "products"
ERROR - 2024-07-12 14:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 14:27:55 --> Could not find the language line "Home"
ERROR - 2024-07-12 14:30:11 --> Could not find the language line "Home"
ERROR - 2024-07-12 14:31:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 14:33:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 14:33:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 14:33:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 14:33:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-12 14:35:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 14:36:13 --> Could not find the language line "Home"
ERROR - 2024-07-12 14:41:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 14:43:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 14:43:54 --> Could not find the language line "Home"
ERROR - 2024-07-12 14:44:58 --> Could not find the language line "Home"
ERROR - 2024-07-12 14:45:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 14:51:07 --> Could not find the language line "Home"
ERROR - 2024-07-12 14:56:31 --> 404 Page Not Found: Products/products
ERROR - 2024-07-12 15:00:42 --> Could not find the language line "Home"
ERROR - 2024-07-12 15:01:45 --> Could not find the language line "Home"
ERROR - 2024-07-12 15:04:25 --> Could not find the language line "Home"
ERROR - 2024-07-12 15:08:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 15:09:21 --> Could not find the language line "Home"
ERROR - 2024-07-12 15:13:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 15:14:58 --> Could not find the language line "Home"
ERROR - 2024-07-12 15:15:00 --> Could not find the language line "Home"
ERROR - 2024-07-12 15:24:09 --> Could not find the language line "Home"
ERROR - 2024-07-12 15:26:57 --> Could not find the language line "Home"
ERROR - 2024-07-12 15:27:52 --> Could not find the language line "Home"
ERROR - 2024-07-12 15:35:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 15:36:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 15:38:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 15:41:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 15:43:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 15:44:58 --> Could not find the language line "Home"
ERROR - 2024-07-12 15:46:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 16:00:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 16:14:59 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:15:01 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:17:17 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:20:11 --> Could not find the language line "hats"
ERROR - 2024-07-12 16:28:57 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:30:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 16:30:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 16:31:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 16:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:33:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 16:38:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 16:40:48 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-07-12 16:41:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 16:44:17 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:44:20 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-12 16:44:21 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-12 16:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:44:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 16:44:59 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:46:28 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:47:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 16:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:49:12 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:50:09 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:50:53 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:51:42 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:52:15 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:52:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 16:52:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 16:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:52:44 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:52:59 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:53:15 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:53:29 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:54:06 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:54:19 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:54:38 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:54:47 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:54:57 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:55:30 --> Could not find the language line "Home"
ERROR - 2024-07-12 16:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 16:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:00:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 17:04:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 17:06:30 --> Could not find the language line "Home"
ERROR - 2024-07-12 17:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:15:00 --> Could not find the language line "Home"
ERROR - 2024-07-12 17:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:16:20 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-12 17:16:20 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-12 17:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 17:42:47 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-12 17:42:48 --> Could not find the language line "Home"
ERROR - 2024-07-12 17:42:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-12 17:45:00 --> Could not find the language line "Home"
ERROR - 2024-07-12 17:47:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 17:48:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 17:50:09 --> Could not find the language line "Home"
ERROR - 2024-07-12 17:54:47 --> Could not find the language line "Home"
ERROR - 2024-07-12 18:06:31 --> Could not find the language line "Home"
ERROR - 2024-07-12 18:15:01 --> Could not find the language line "Home"
ERROR - 2024-07-12 18:20:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 18:20:55 --> Could not find the language line "Home"
ERROR - 2024-07-12 18:21:19 --> Could not find the language line "Home"
ERROR - 2024-07-12 18:29:38 --> Could not find the language line "Home"
ERROR - 2024-07-12 18:30:29 --> Could not find the language line "Home"
ERROR - 2024-07-12 18:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 18:33:43 --> Could not find the language line "Home"
ERROR - 2024-07-12 18:43:14 --> Could not find the language line "Home"
ERROR - 2024-07-12 18:43:31 --> Could not find the language line "Other"
ERROR - 2024-07-12 18:43:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 18:43:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 18:45:01 --> Could not find the language line "Home"
ERROR - 2024-07-12 18:47:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 18:48:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 18:51:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 18:52:01 --> 404 Page Not Found: /hair%20%26%20skin...
ERROR - 2024-07-12 18:52:51 --> Could not find the language line "Home"
ERROR - 2024-07-12 18:55:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 19:01:02 --> Could not find the language line "Home"
ERROR - 2024-07-12 19:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:15:01 --> Could not find the language line "Home"
ERROR - 2024-07-12 19:17:16 --> Could not find the language line "hats"
ERROR - 2024-07-12 19:23:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-12 19:23:59 --> Could not find the language line "Home"
ERROR - 2024-07-12 19:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 19:37:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 19:42:26 --> 404 Page Not Found: Metajson/index
ERROR - 2024-07-12 19:45:03 --> Could not find the language line "Home"
ERROR - 2024-07-12 19:51:10 --> Could not find the language line "Home"
ERROR - 2024-07-12 19:53:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 19:56:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 20:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 20:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 20:03:34 --> Could not find the language line "Clothing"
ERROR - 2024-07-12 20:11:22 --> Could not find the language line "Home"
ERROR - 2024-07-12 20:15:02 --> Could not find the language line "Home"
ERROR - 2024-07-12 20:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 20:22:03 --> Could not find the language line "Home"
ERROR - 2024-07-12 20:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 20:32:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 20:33:41 --> Could not find the language line "Clothing"
ERROR - 2024-07-12 20:34:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 20:35:29 --> Could not find the language line "Home"
ERROR - 2024-07-12 20:45:03 --> Could not find the language line "Home"
ERROR - 2024-07-12 20:53:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 21:02:40 --> Could not find the language line "Home"
ERROR - 2024-07-12 21:15:07 --> Could not find the language line "Home"
ERROR - 2024-07-12 21:26:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 21:28:44 --> Could not find the language line "Home"
ERROR - 2024-07-12 21:32:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 21:40:12 --> Could not find the language line "Socks"
ERROR - 2024-07-12 21:41:45 --> Could not find the language line "Home"
ERROR - 2024-07-12 21:45:05 --> Could not find the language line "Home"
ERROR - 2024-07-12 21:45:38 --> Could not find the language line "Home"
ERROR - 2024-07-12 21:48:36 --> Could not find the language line "Home"
ERROR - 2024-07-12 21:55:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 22:03:15 --> Could not find the language line "Home"
ERROR - 2024-07-12 22:07:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 22:15:05 --> Could not find the language line "Home"
ERROR - 2024-07-12 22:21:22 --> Could not find the language line "Home"
ERROR - 2024-07-12 22:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-12 22:22:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 22:27:52 --> Could not find the language line "Home"
ERROR - 2024-07-12 22:42:13 --> Could not find the language line "Home"
ERROR - 2024-07-12 22:42:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 22:42:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-12 22:42:44 --> Could not find the language line "Home"
ERROR - 2024-07-12 22:45:05 --> Could not find the language line "Home"
ERROR - 2024-07-12 22:56:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 23:09:35 --> Could not find the language line "Home"
ERROR - 2024-07-12 23:15:05 --> Could not find the language line "Home"
ERROR - 2024-07-12 23:16:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 23:29:09 --> Could not find the language line "Home"
ERROR - 2024-07-12 23:45:06 --> Could not find the language line "Home"
ERROR - 2024-07-12 23:51:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 23:54:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 23:54:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-12 23:56:28 --> 404 Page Not Found: Robotstxt/index
