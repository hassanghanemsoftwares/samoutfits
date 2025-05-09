<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-19 00:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-19 00:05:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 00:05:47 --> Could not find the language line "Home"
ERROR - 2023-08-19 00:14:20 --> Could not find the language line "Home"
ERROR - 2023-08-19 00:16:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 00:16:33 --> Could not find the language line "Home"
ERROR - 2023-08-19 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-19 00:36:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-19 00:46:51 --> Could not find the language line "Home"
ERROR - 2023-08-19 00:46:51 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-08-19 00:46:51 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-19 00:46:52 --> Could not find the language line "Home"
ERROR - 2023-08-19 00:46:52 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-08-19 00:46:52 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-08-19 00:46:52 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-08-19 00:46:52 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-08-19 00:46:52 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-08-19 00:46:52 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-08-19 00:46:52 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-08-19 00:46:52 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-08-19 00:46:53 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-08-19 00:46:53 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-08-19 00:46:53 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-08-19 00:46:53 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-08-19 00:46:53 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-08-19 00:46:53 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-08-19 00:46:53 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-08-19 00:46:53 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-08-19 00:47:20 --> 404 Page Not Found: Wp-includes/js
ERROR - 2023-08-19 01:00:23 --> Could not find the language line "Home"
ERROR - 2023-08-19 01:04:31 --> Could not find the language line "Home"
ERROR - 2023-08-19 01:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 01:28:00 --> 404 Page Not Found: Phpmyadmin/index
ERROR - 2023-08-19 01:28:01 --> 404 Page Not Found: PhpMyAdmin/index
ERROR - 2023-08-19 01:28:02 --> 404 Page Not Found: Pma/index
ERROR - 2023-08-19 01:28:04 --> 404 Page Not Found: Myadmin/index
ERROR - 2023-08-19 01:28:06 --> 404 Page Not Found: Sql/index
ERROR - 2023-08-19 01:28:07 --> 404 Page Not Found: Mysql/index
ERROR - 2023-08-19 01:28:08 --> 404 Page Not Found: Mysqladmin/index
ERROR - 2023-08-19 01:28:10 --> 404 Page Not Found: Db/index
ERROR - 2023-08-19 01:28:12 --> 404 Page Not Found: Database/index
ERROR - 2023-08-19 01:28:13 --> 404 Page Not Found: Adminerphp/index
ERROR - 2023-08-19 01:28:14 --> 404 Page Not Found: Sqlphp/index
ERROR - 2023-08-19 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-19 01:31:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 01:39:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-19 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-19 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-19 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-19 03:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 03:47:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 03:47:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 03:47:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 03:47:02 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-19 03:47:27 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-19 03:47:44 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-19 03:48:09 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-19 03:48:34 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-19 03:48:50 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-19 03:49:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 03:50:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 03:51:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 03:52:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 03:53:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 03:55:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 03:56:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 03:57:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 03:58:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:00:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-19 04:01:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:02:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:03:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:05:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:07:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:08:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:09:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:10:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:11:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:13:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:14:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:15:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:16:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:17:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:18:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:18:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:20:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:21:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:22:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:23:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:25:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:26:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:27:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:28:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:29:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-19 04:30:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:31:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 04:32:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 04:33:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 04:35:11 --> Could not find the language line "Other"
ERROR - 2023-08-19 04:35:41 --> Could not find the language line "Other"
ERROR - 2023-08-19 04:43:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-19 05:07:49 --> Could not find the language line "Home"
ERROR - 2023-08-19 05:08:21 --> Could not find the language line "Home"
ERROR - 2023-08-19 05:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 05:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 05:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 05:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 05:24:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 05:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 05:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-19 05:30:49 --> Could not find the language line "Home"
ERROR - 2023-08-19 05:32:15 --> Could not find the language line "Home"
ERROR - 2023-08-19 05:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 05:34:22 --> Could not find the language line "Home"
ERROR - 2023-08-19 05:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 05:35:26 --> Could not find the language line "Home"
ERROR - 2023-08-19 05:36:45 --> Could not find the language line "Home"
ERROR - 2023-08-19 05:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 05:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 05:41:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 05:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 05:43:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 05:44:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 05:45:41 --> Could not find the language line "Home"
ERROR - 2023-08-19 05:45:53 --> Could not find the language line "Home"
ERROR - 2023-08-19 05:56:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-19 06:03:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 06:03:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 06:04:24 --> Could not find the language line "Home"
ERROR - 2023-08-19 06:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:13:39 --> Could not find the language line "Home"
ERROR - 2023-08-19 06:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:16:35 --> Could not find the language line "Home"
ERROR - 2023-08-19 06:17:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-19 06:17:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-19 06:17:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 06:17:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 06:18:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 06:18:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 06:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:19:44 --> Could not find the language line "Home"
ERROR - 2023-08-19 06:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:20:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-19 06:20:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-19 06:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-19 06:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:49:34 --> Could not find the language line "Home"
ERROR - 2023-08-19 06:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 06:52:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-19 06:52:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-19 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-19 07:01:42 --> Could not find the language line "Home"
ERROR - 2023-08-19 07:02:27 --> Could not find the language line "Home"
ERROR - 2023-08-19 07:02:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-19 07:02:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-19 07:04:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-19 07:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:07:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-19 07:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:15:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-19 07:15:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-19 07:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:23:05 --> Could not find the language line "Home"
ERROR - 2023-08-19 07:23:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-19 07:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:23:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-19 07:23:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-19 07:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:25:21 --> Could not find the language line "Home"
ERROR - 2023-08-19 07:25:29 --> Could not find the language line "Socks"
ERROR - 2023-08-19 07:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-19 07:34:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 07:35:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 07:35:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 07:36:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 07:38:49 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-19 07:40:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 07:40:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 07:41:00 --> Could not find the language line "Home"
ERROR - 2023-08-19 07:41:00 --> Could not find the language line "Home"
ERROR - 2023-08-19 07:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:45:50 --> Could not find the language line "Crocs"
ERROR - 2023-08-19 07:46:00 --> Could not find the language line "Home"
ERROR - 2023-08-19 07:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 07:48:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 07:52:06 --> Could not find the language line "Bracelets"
ERROR - 2023-08-19 07:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-19 08:03:17 --> Could not find the language line "Home"
ERROR - 2023-08-19 08:04:37 --> Could not find the language line "Home"
ERROR - 2023-08-19 08:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:05:07 --> Could not find the language line "Home"
ERROR - 2023-08-19 08:05:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 08:05:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 08:05:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 08:05:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 08:05:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 08:05:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 08:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:07:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-19 08:07:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-19 08:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:11:14 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-19 08:11:15 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-19 08:11:15 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-19 08:11:15 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-19 08:19:19 --> Could not find the language line "Home"
ERROR - 2023-08-19 08:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:24:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 08:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:29:13 --> Could not find the language line "Home"
ERROR - 2023-08-19 08:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-19 08:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:34:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 08:34:21 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-19 08:34:38 --> Could not find the language line "magic_boxes"
ERROR - 2023-08-19 08:34:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-19 08:34:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-19 08:35:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 08:35:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 08:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:38:22 --> Could not find the language line "Home"
ERROR - 2023-08-19 08:38:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-19 08:38:54 --> Could not find the language line "Home"
ERROR - 2023-08-19 08:38:58 --> Could not find the language line "Perfume"
ERROR - 2023-08-19 08:39:04 --> Could not find the language line "Home"
ERROR - 2023-08-19 08:42:27 --> Could not find the language line "Clothes"
ERROR - 2023-08-19 08:44:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 08:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:53:40 --> Could not find the language line "Socks"
ERROR - 2023-08-19 08:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 08:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-19 09:00:38 --> Could not find the language line "Home"
ERROR - 2023-08-19 09:04:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 09:06:49 --> Could not find the language line "Gift_card"
ERROR - 2023-08-19 09:10:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 09:11:01 --> Could not find the language line "Home"
ERROR - 2023-08-19 09:12:32 --> Could not find the language line "Home"
ERROR - 2023-08-19 09:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 09:21:16 --> Could not find the language line "Stock_clearance"
ERROR - 2023-08-19 09:21:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-19 09:25:56 --> Could not find the language line "Perfume"
ERROR - 2023-08-19 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-19 09:32:23 --> Could not find the language line "Home"
ERROR - 2023-08-19 09:35:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 09:35:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 09:39:44 --> Could not find the language line "Perfumes"
ERROR - 2023-08-19 09:40:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-19 09:40:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-19 09:42:57 --> Could not find the language line "Home"
ERROR - 2023-08-19 09:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 09:48:09 --> Could not find the language line "Home"
ERROR - 2023-08-19 09:50:21 --> Could not find the language line "Home"
ERROR - 2023-08-19 09:55:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 09:59:14 --> Could not find the language line "Home"
ERROR - 2023-08-19 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-19 10:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 10:04:55 --> Could not find the language line "Home"
ERROR - 2023-08-19 10:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 10:10:12 --> Could not find the language line "Home"
ERROR - 2023-08-19 10:10:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-19 10:10:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-19 10:10:59 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-08-19 10:11:55 --> Could not find the language line "Home"
ERROR - 2023-08-19 10:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 10:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 10:14:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 10:14:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 10:15:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-19 10:17:04 --> Could not find the language line "Home"
ERROR - 2023-08-19 10:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 10:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 10:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 10:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 10:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 10:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-19 10:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 10:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 10:49:40 --> Could not find the language line "Home"
ERROR - 2023-08-19 10:53:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 10:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-19 11:06:25 --> Could not find the language line "Home"
ERROR - 2023-08-19 11:08:07 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-19 11:23:17 --> Could not find the language line "Home"
ERROR - 2023-08-19 11:23:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-19 11:23:55 --> Could not find the language line "Home"
ERROR - 2023-08-19 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-19 11:30:59 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-19 11:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 11:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 11:34:11 --> Could not find the language line "Home"
ERROR - 2023-08-19 11:39:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 11:39:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 11:40:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 11:40:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 11:40:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 11:40:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 11:40:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 11:40:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 11:40:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 11:40:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 11:40:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 11:40:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 11:41:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 11:41:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 11:41:19 --> Could not find the language line "Home"
ERROR - 2023-08-19 11:48:18 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-19 11:56:34 --> Could not find the language line "Home"
ERROR - 2023-08-19 11:57:27 --> Could not find the language line "Home"
ERROR - 2023-08-19 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-19 12:03:08 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-19 12:12:17 --> Could not find the language line "Home"
ERROR - 2023-08-19 12:12:17 --> Could not find the language line "Home"
ERROR - 2023-08-19 12:13:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 12:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:13:20 --> Could not find the language line "Home"
ERROR - 2023-08-19 12:15:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 12:15:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 12:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:28:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-19 12:28:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-19 12:29:31 --> Could not find the language line "Home"
ERROR - 2023-08-19 12:29:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-19 12:29:44 --> Could not find the language line "assets"
ERROR - 2023-08-19 12:30:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-19 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-19 12:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:35:08 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-19 12:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:38:35 --> Could not find the language line "Home"
ERROR - 2023-08-19 12:38:38 --> Could not find the language line "Home"
ERROR - 2023-08-19 12:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:49:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-19 12:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 12:56:17 --> Could not find the language line "Home"
ERROR - 2023-08-19 12:56:19 --> 404 Page Not Found: Feed/index
ERROR - 2023-08-19 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-19 13:13:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:13:42 --> 404 Page Not Found: Mifs/aad
ERROR - 2023-08-19 13:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 13:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 13:23:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-19 13:23:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-19 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-19 13:33:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:33:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:34:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:34:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:35:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:35:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:35:47 --> Could not find the language line "Home"
ERROR - 2023-08-19 13:36:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:36:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:36:26 --> Could not find the language line "Home"
ERROR - 2023-08-19 13:36:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:36:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:36:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:36:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:38:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:38:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:44:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 13:48:08 --> Could not find the language line "Home"
ERROR - 2023-08-19 13:48:33 --> Could not find the language line "Home"
ERROR - 2023-08-19 13:49:35 --> Could not find the language line "Home"
ERROR - 2023-08-19 13:52:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 13:52:45 --> Could not find the language line "Home"
ERROR - 2023-08-19 14:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-19 14:00:41 --> Could not find the language line "Home"
ERROR - 2023-08-19 14:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 14:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 14:14:19 --> Could not find the language line "Home"
ERROR - 2023-08-19 14:15:21 --> Could not find the language line "Home"
ERROR - 2023-08-19 14:16:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-19 14:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 14:16:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-19 14:17:04 --> Could not find the language line "Home"
ERROR - 2023-08-19 14:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 14:22:29 --> Could not find the language line "Home"
ERROR - 2023-08-19 14:30:19 --> Could not find the language line "Home"
ERROR - 2023-08-19 14:32:20 --> Could not find the language line "Home"
ERROR - 2023-08-19 14:56:14 --> Could not find the language line "Home"
ERROR - 2023-08-19 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-19 15:01:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 15:01:22 --> Could not find the language line "Home"
ERROR - 2023-08-19 15:05:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 15:05:44 --> Could not find the language line "Home"
ERROR - 2023-08-19 15:13:46 --> Could not find the language line "Home"
ERROR - 2023-08-19 15:16:33 --> Could not find the language line "Home"
ERROR - 2023-08-19 15:16:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 15:16:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 15:17:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 15:17:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 15:17:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 15:17:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-19 15:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 15:27:08 --> Could not find the language line "Home"
ERROR - 2023-08-19 15:27:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 15:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-19 15:31:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 15:31:05 --> Could not find the language line "Home"
ERROR - 2023-08-19 15:54:46 --> Could not find the language line "Home"
ERROR - 2023-08-19 15:55:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 16:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-19 16:04:52 --> Could not find the language line "Home"
ERROR - 2023-08-19 16:10:51 --> Could not find the language line "Home"
ERROR - 2023-08-19 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-19 16:42:12 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-08-19 16:50:21 --> Could not find the language line "Home"
ERROR - 2023-08-19 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-19 17:08:12 --> Could not find the language line "Home"
ERROR - 2023-08-19 17:23:39 --> Could not find the language line "Home"
ERROR - 2023-08-19 17:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-19 17:33:05 --> Could not find the language line "Home"
ERROR - 2023-08-19 17:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 17:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 17:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 17:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-19 18:01:05 --> Could not find the language line "Home"
ERROR - 2023-08-19 18:04:28 --> Could not find the language line "Home"
ERROR - 2023-08-19 18:05:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 18:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 18:06:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-19 18:06:16 --> Could not find the language line "Home"
ERROR - 2023-08-19 18:20:58 --> Could not find the language line "Home"
ERROR - 2023-08-19 18:21:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-19 18:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 18:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-19 18:36:51 --> Could not find the language line "Home"
ERROR - 2023-08-19 18:45:03 --> Could not find the language line "Home"
ERROR - 2023-08-19 18:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 18:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 19:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-19 19:02:03 --> Could not find the language line "Home"
ERROR - 2023-08-19 19:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 19:14:09 --> Could not find the language line "Home"
ERROR - 2023-08-19 19:15:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 19:28:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-19 19:44:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 19:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-19 20:00:33 --> Could not find the language line "Home"
ERROR - 2023-08-19 20:03:23 --> Could not find the language line "Home"
ERROR - 2023-08-19 20:12:24 --> Could not find the language line "Home"
ERROR - 2023-08-19 20:12:27 --> Could not find the language line "Home"
ERROR - 2023-08-19 20:12:27 --> Could not find the language line "Home"
ERROR - 2023-08-19 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-19 20:50:58 --> Could not find the language line "Home"
ERROR - 2023-08-19 20:58:39 --> Could not find the language line "Home"
ERROR - 2023-08-19 20:59:54 --> Could not find the language line "Home"
ERROR - 2023-08-19 21:00:19 --> Could not find the language line "Home"
ERROR - 2023-08-19 21:14:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 21:16:25 --> Could not find the language line "Home"
ERROR - 2023-08-19 21:16:26 --> Could not find the language line "Home"
ERROR - 2023-08-19 21:16:28 --> Could not find the language line "Home"
ERROR - 2023-08-19 21:16:41 --> Could not find the language line "Home"
ERROR - 2023-08-19 21:24:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 21:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-19 21:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-19 22:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 22:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 22:22:02 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-19 22:22:03 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-19 22:22:03 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-19 22:22:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-19 22:22:03 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-19 22:22:03 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-19 22:22:04 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-19 22:22:04 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-19 22:27:50 --> Could not find the language line "Home"
ERROR - 2023-08-19 22:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-19 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-19 23:10:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-19 23:10:15 --> Could not find the language line "Home"
ERROR - 2023-08-19 23:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 23:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 23:28:28 --> Could not find the language line "Home"
ERROR - 2023-08-19 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-19 23:33:46 --> Could not find the language line "Home"
ERROR - 2023-08-19 23:36:33 --> Could not find the language line "Home"
ERROR - 2023-08-19 23:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 23:37:57 --> Could not find the language line "Home"
ERROR - 2023-08-19 23:38:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-08-19 23:39:33 --> Could not find the language line "Home"
ERROR - 2023-08-19 23:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-19 23:44:29 --> 404 Page Not Found: Assets/css
