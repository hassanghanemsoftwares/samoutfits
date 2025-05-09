<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-05-04 00:14:21 --> Could not find the language line "Home"
ERROR - 2025-05-04 00:16:59 --> Could not find the language line "accounts"
ERROR - 2025-05-04 00:44:22 --> Could not find the language line "Home"
ERROR - 2025-05-04 00:46:04 --> 404 Page Not Found: Users/users
ERROR - 2025-05-04 00:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 01:06:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-05-04 01:08:41 --> Could not find the language line "Home"
ERROR - 2025-05-04 01:12:24 --> Could not find the language line "accounts"
ERROR - 2025-05-04 01:14:24 --> Could not find the language line "Home"
ERROR - 2025-05-04 01:15:11 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-05-04 01:19:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-05-04 01:20:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-05-04 01:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 01:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 01:22:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-05-04 01:22:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-05-04 01:23:04 --> Could not find the language line "accounts"
ERROR - 2025-05-04 01:23:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-05-04 01:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 01:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 01:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 01:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 01:26:36 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-05-04 01:35:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-05-04 01:44:24 --> Could not find the language line "Home"
ERROR - 2025-05-04 01:51:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 01:51:54 --> Could not find the language line "Home"
ERROR - 2025-05-04 01:51:56 --> 404 Page Not Found: Wp/index
ERROR - 2025-05-04 01:51:58 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-05-04 01:52:02 --> 404 Page Not Found: Samoutfits/index
ERROR - 2025-05-04 01:52:04 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-05-04 01:52:09 --> 404 Page Not Found: Backup/index
ERROR - 2025-05-04 01:52:13 --> 404 Page Not Found: New/index
ERROR - 2025-05-04 01:52:23 --> 404 Page Not Found: Wp/index
ERROR - 2025-05-04 01:52:28 --> 404 Page Not Found: Temp/index
ERROR - 2025-05-04 01:52:32 --> 404 Page Not Found: Blog/index
ERROR - 2025-05-04 01:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 02:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 02:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 02:14:24 --> Could not find the language line "Home"
ERROR - 2025-05-04 02:18:41 --> Could not find the language line "Home"
ERROR - 2025-05-04 02:23:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 02:25:44 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-05-04 02:29:12 --> Could not find the language line "Home"
ERROR - 2025-05-04 02:31:13 --> Could not find the language line "Home"
ERROR - 2025-05-04 02:32:48 --> Could not find the language line "Home"
ERROR - 2025-05-04 02:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 02:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 02:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 02:43:23 --> Could not find the language line "Home"
ERROR - 2025-05-04 02:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 02:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 02:44:23 --> Could not find the language line "Home"
ERROR - 2025-05-04 02:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 02:46:48 --> 404 Page Not Found: Metajson/index
ERROR - 2025-05-04 02:46:48 --> Could not find the language line "Home"
ERROR - 2025-05-04 02:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 02:53:44 --> Could not find the language line "Home"
ERROR - 2025-05-04 02:53:58 --> Could not find the language line "Sunglasses"
ERROR - 2025-05-04 02:54:24 --> Could not find the language line "Home"
ERROR - 2025-05-04 02:54:32 --> Could not find the language line "Socks"
ERROR - 2025-05-04 02:54:56 --> Could not find the language line "Home"
ERROR - 2025-05-04 02:55:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 02:55:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 02:55:24 --> Could not find the language line "Home"
ERROR - 2025-05-04 02:55:29 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-05-04 02:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 02:56:59 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-05-04 02:57:08 --> Could not find the language line "Home"
ERROR - 2025-05-04 02:57:12 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 02:57:58 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 03:05:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 03:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 03:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 03:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 03:14:25 --> Could not find the language line "Home"
ERROR - 2025-05-04 03:17:52 --> Could not find the language line "Home"
ERROR - 2025-05-04 03:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 03:27:52 --> Could not find the language line "Home"
ERROR - 2025-05-04 03:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 03:40:21 --> Could not find the language line "Home"
ERROR - 2025-05-04 03:44:19 --> Could not find the language line "Socks"
ERROR - 2025-05-04 03:44:24 --> Could not find the language line "Home"
ERROR - 2025-05-04 03:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 03:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 03:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 04:10:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 04:14:29 --> Could not find the language line "Home"
ERROR - 2025-05-04 04:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 04:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 04:24:22 --> 404 Page Not Found: Wp-content/themes
ERROR - 2025-05-04 04:24:25 --> 404 Page Not Found: Wp-content/themes
ERROR - 2025-05-04 04:24:31 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2025-05-04 04:24:37 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2025-05-04 04:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 04:27:23 --> Could not find the language line "Home"
ERROR - 2025-05-04 04:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 04:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 04:27:51 --> Could not find the language line "Home"
ERROR - 2025-05-04 04:31:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-05-04 04:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 04:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 04:44:25 --> Could not find the language line "Home"
ERROR - 2025-05-04 04:45:32 --> Could not find the language line "Home"
ERROR - 2025-05-04 04:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 04:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 04:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 04:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 04:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 04:56:32 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:04:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-05-04 05:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 05:08:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-05-04 05:09:32 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:10:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 05:14:26 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 05:18:05 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:19:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 05:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 05:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 05:29:06 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 05:44:31 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 05:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 05:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 05:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 05:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 05:51:47 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:51:48 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:51:50 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:51:50 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:51:56 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:52:03 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:52:06 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:52:35 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:53:40 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:54:11 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:57:44 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:57:46 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:57:49 --> Could not find the language line "Home"
ERROR - 2025-05-04 05:57:56 --> Could not find the language line "Home"
ERROR - 2025-05-04 06:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:04:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-05-04 06:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:14:26 --> Could not find the language line "Home"
ERROR - 2025-05-04 06:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:19:12 --> Could not find the language line "Home"
ERROR - 2025-05-04 06:24:06 --> Could not find the language line "Home"
ERROR - 2025-05-04 06:29:31 --> Could not find the language line "Home"
ERROR - 2025-05-04 06:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:42:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-05-04 06:44:27 --> Could not find the language line "Home"
ERROR - 2025-05-04 06:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 06:46:23 --> Could not find the language line "Home"
ERROR - 2025-05-04 06:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:04:27 --> Could not find the language line "Socks"
ERROR - 2025-05-04 07:06:07 --> Could not find the language line "Home"
ERROR - 2025-05-04 07:07:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 07:08:45 --> Could not find the language line "Home"
ERROR - 2025-05-04 07:10:46 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-05-04 07:11:19 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-05-04 07:12:23 --> Could not find the language line "Home"
ERROR - 2025-05-04 07:13:24 --> Could not find the language line "Sunglasses"
ERROR - 2025-05-04 07:14:29 --> Could not find the language line "Home"
ERROR - 2025-05-04 07:15:07 --> Could not find the language line "Home"
ERROR - 2025-05-04 07:16:21 --> Could not find the language line "Home"
ERROR - 2025-05-04 07:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:40:04 --> 404 Page Not Found: Users/cart
ERROR - 2025-05-04 07:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:41:42 --> Could not find the language line "Home"
ERROR - 2025-05-04 07:41:43 --> Could not find the language line "Home"
ERROR - 2025-05-04 07:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 07:44:27 --> Could not find the language line "Home"
ERROR - 2025-05-04 07:44:37 --> 404 Page Not Found: Users/accounts
ERROR - 2025-05-04 07:52:34 --> Could not find the language line "Home"
ERROR - 2025-05-04 07:55:19 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-05-04 07:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:00:20 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:02:20 --> Could not find the language line "users"
ERROR - 2025-05-04 08:07:10 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 08:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:09:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 08:14:27 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:15:51 --> Could not find the language line "products"
ERROR - 2025-05-04 08:16:54 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:26:02 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:26:57 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:27:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 08:27:15 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:27:17 --> Could not find the language line "Sunglasses"
ERROR - 2025-05-04 08:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:27:39 --> Could not find the language line "Sunglasses"
ERROR - 2025-05-04 08:27:40 --> Could not find the language line "Sunglasses"
ERROR - 2025-05-04 08:27:46 --> Could not find the language line "Sunglasses"
ERROR - 2025-05-04 08:27:47 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:27:49 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-05-04 08:28:00 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:28:07 --> Could not find the language line "Perfume"
ERROR - 2025-05-04 08:28:11 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:28:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 08:28:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 08:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:28:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 08:28:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 08:28:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 08:28:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 08:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:28:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 08:28:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 08:28:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 08:28:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 08:28:51 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:28:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 08:29:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 08:29:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 08:29:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 08:29:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 08:31:50 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:43:34 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:44:28 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:44:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 08:46:16 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-05-04 08:46:49 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:47:38 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-05-04 08:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:48:19 --> Could not find the language line "Home"
ERROR - 2025-05-04 08:49:42 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 08:51:03 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 08:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 08:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:00:15 --> Could not find the language line "Home"
ERROR - 2025-05-04 09:00:17 --> Could not find the language line "Home"
ERROR - 2025-05-04 09:01:45 --> Could not find the language line "users"
ERROR - 2025-05-04 09:06:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 09:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:07:26 --> Could not find the language line "Home"
ERROR - 2025-05-04 09:09:17 --> Could not find the language line "Home"
ERROR - 2025-05-04 09:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:12:06 --> Could not find the language line "products"
ERROR - 2025-05-04 09:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:14:22 --> Could not find the language line "Home"
ERROR - 2025-05-04 09:14:29 --> Could not find the language line "Home"
ERROR - 2025-05-04 09:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:26:35 --> 404 Page Not Found: Metajson/index
ERROR - 2025-05-04 09:26:35 --> Could not find the language line "Home"
ERROR - 2025-05-04 09:26:35 --> Could not find the language line "Home"
ERROR - 2025-05-04 09:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:39:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 09:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:40:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 09:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:41:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 09:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:41:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 09:41:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 09:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:42:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 09:42:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 09:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:42:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 09:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:43:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 09:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:43:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 09:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:44:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 09:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:44:28 --> Could not find the language line "Home"
ERROR - 2025-05-04 09:45:14 --> Could not find the language line "Home"
ERROR - 2025-05-04 09:47:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 09:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:47:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 09:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 09:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:06:46 --> Could not find the language line "products"
ERROR - 2025-05-04 10:07:53 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:09:32 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:12:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:13:48 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:14:29 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:15:13 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:16:07 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:16:41 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:17:09 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:17:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 10:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:17:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 10:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:17:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 10:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:18:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 10:19:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 10:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:19:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 10:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:19:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 10:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:20:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 10:20:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 10:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:20:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 10:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:20:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 10:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:20:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 10:21:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 10:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:21:35 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:21:42 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 10:21:50 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:22:10 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:36:16 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:39:47 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 10:42:12 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:42:13 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:44:34 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 10:53:57 --> Could not find the language line "Home"
ERROR - 2025-05-04 10:58:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 11:08:45 --> Could not find the language line "Home"
ERROR - 2025-05-04 11:09:36 --> Could not find the language line "Home"
ERROR - 2025-05-04 11:10:56 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-05-04 11:14:29 --> Could not find the language line "Home"
ERROR - 2025-05-04 11:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 11:20:53 --> Could not find the language line "Home"
ERROR - 2025-05-04 11:25:34 --> Could not find the language line "Home"
ERROR - 2025-05-04 11:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 11:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 11:44:29 --> Could not find the language line "Home"
ERROR - 2025-05-04 11:48:32 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 11:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 11:49:04 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-05-04 11:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 11:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 12:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 12:01:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 12:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 12:04:52 --> Could not find the language line "Home"
ERROR - 2025-05-04 12:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 12:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 12:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 12:14:32 --> Could not find the language line "Home"
ERROR - 2025-05-04 12:16:11 --> Could not find the language line "Home"
ERROR - 2025-05-04 12:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 12:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 12:21:55 --> Could not find the language line "Home"
ERROR - 2025-05-04 12:22:03 --> Could not find the language line "Home"
ERROR - 2025-05-04 12:22:06 --> Could not find the language line "Home"
ERROR - 2025-05-04 12:22:11 --> Could not find the language line "Home"
ERROR - 2025-05-04 12:22:12 --> Could not find the language line "Home"
ERROR - 2025-05-04 12:22:27 --> Could not find the language line "Home"
ERROR - 2025-05-04 12:23:37 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 12:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 12:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 12:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 12:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 12:32:04 --> Could not find the language line "Home"
ERROR - 2025-05-04 12:39:03 --> Could not find the language line "Home"
ERROR - 2025-05-04 12:39:10 --> Could not find the language line "Other"
ERROR - 2025-05-04 12:42:29 --> Could not find the language line "Home"
ERROR - 2025-05-04 12:43:57 --> Could not find the language line "Home"
ERROR - 2025-05-04 12:44:30 --> Could not find the language line "Home"
ERROR - 2025-05-04 12:48:48 --> Could not find the language line "0"
ERROR - 2025-05-04 12:52:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-05-04 12:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 12:58:10 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 13:01:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 13:03:22 --> Could not find the language line "Home"
ERROR - 2025-05-04 13:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 13:07:16 --> Could not find the language line "Other"
ERROR - 2025-05-04 13:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 13:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 13:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 13:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 13:14:29 --> Could not find the language line "Home"
ERROR - 2025-05-04 13:16:03 --> Could not find the language line "Home"
ERROR - 2025-05-04 13:16:13 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-05-04 13:16:13 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-05-04 13:16:45 --> Could not find the language line "Home"
ERROR - 2025-05-04 13:16:54 --> Could not find the language line "Home"
ERROR - 2025-05-04 13:23:15 --> Could not find the language line "Home"
ERROR - 2025-05-04 13:24:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-05-04 13:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 13:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 13:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 13:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 13:44:29 --> Could not find the language line "Home"
ERROR - 2025-05-04 13:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 13:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 13:58:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 14:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 14:03:56 --> Could not find the language line "Home"
ERROR - 2025-05-04 14:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 14:07:25 --> Could not find the language line "Other"
ERROR - 2025-05-04 14:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 14:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 14:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 14:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 14:12:35 --> Could not find the language line "Home"
ERROR - 2025-05-04 14:14:29 --> Could not find the language line "Home"
ERROR - 2025-05-04 14:16:19 --> Could not find the language line "Home"
ERROR - 2025-05-04 14:17:24 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-05-04 14:19:43 --> Could not find the language line "Home"
ERROR - 2025-05-04 14:32:37 --> Could not find the language line "Home"
ERROR - 2025-05-04 14:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 14:33:53 --> Could not find the language line "Home"
ERROR - 2025-05-04 14:34:40 --> Could not find the language line "Home"
ERROR - 2025-05-04 14:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 14:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 14:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 14:44:29 --> Could not find the language line "Home"
ERROR - 2025-05-04 14:44:35 --> Could not find the language line "Home"
ERROR - 2025-05-04 14:54:28 --> Could not find the language line "Home"
ERROR - 2025-05-04 14:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 14:56:24 --> Could not find the language line "Home"
ERROR - 2025-05-04 14:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 14:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 14:57:57 --> Could not find the language line "Home"
ERROR - 2025-05-04 14:58:51 --> Could not find the language line "Other"
ERROR - 2025-05-04 15:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:07:26 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-05-04 15:09:18 --> 404 Page Not Found: Metajson/index
ERROR - 2025-05-04 15:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:12:51 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:14:30 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:22:06 --> Could not find the language line "Socks"
ERROR - 2025-05-04 15:22:41 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:22:41 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:22:46 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:22:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:22:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:22:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:22:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:22:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:22:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:22:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:22:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:22:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:22:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:23:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 15:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:35:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-05-04 15:38:33 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:38:38 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:44:30 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:46:18 --> 404 Page Not Found: Metajson/index
ERROR - 2025-05-04 15:47:16 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:48:53 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:49:52 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:50:29 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:50:58 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:51:12 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:51:55 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:52:12 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:53:17 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:54:05 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:54:07 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:54:08 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:54:11 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:54:11 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:54:12 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:54:13 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:55:06 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:55:41 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:55:42 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:55:45 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:56:00 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:56:01 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:56:04 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:56:21 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:56:22 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:56:24 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:56:34 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:56:59 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:57:32 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:57:37 --> Could not find the language line "Sunglasses"
ERROR - 2025-05-04 15:57:38 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:57:48 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:58:16 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:58:38 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:58:40 --> Could not find the language line "Home"
ERROR - 2025-05-04 15:58:55 --> 404 Page Not Found: Metajson/index
ERROR - 2025-05-04 15:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 15:59:23 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:00:06 --> 404 Page Not Found: Indexhtml/index
ERROR - 2025-05-04 16:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:00:22 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:00:32 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:00:45 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:00:52 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:01:26 --> Could not find the language line "Sunglasses"
ERROR - 2025-05-04 16:01:28 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:01:59 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-05-04 16:02:03 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-05-04 16:02:07 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-05-04 16:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:04:22 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:05:44 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:06:07 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-05-04 16:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:09:25 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:11:00 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:11:38 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:11:51 --> 404 Page Not Found: Metajson/index
ERROR - 2025-05-04 16:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:14:30 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:14:31 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:16:00 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:17:04 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:18:38 --> 404 Page Not Found: Indexhtml/index
ERROR - 2025-05-04 16:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:19:33 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:19:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 16:19:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 16:19:58 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:20:10 --> Could not find the language line "Sunglasses"
ERROR - 2025-05-04 16:20:25 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:21:43 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:22:24 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 16:22:35 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:24:33 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:27:23 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:31:05 --> Could not find the language line "products"
ERROR - 2025-05-04 16:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:33:31 --> Could not find the language line "products"
ERROR - 2025-05-04 16:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:37:44 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 16:39:57 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:44:32 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:48:58 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 16:53:03 --> Could not find the language line "Home"
ERROR - 2025-05-04 16:55:03 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:03:21 --> Could not find the language line "Sunglasses"
ERROR - 2025-05-04 17:03:46 --> Could not find the language line "Sunglasses"
ERROR - 2025-05-04 17:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:08:48 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:13:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-05-04 17:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:14:32 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:19:11 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:19:11 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:25:02 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:25:42 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:30:02 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:30:41 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:38:42 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:43:44 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:44:31 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:46:38 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:48:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:52:51 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:53:43 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-05-04 17:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:54:00 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:54:04 --> Could not find the language line "Home"
ERROR - 2025-05-04 17:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:56:15 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 17:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 17:56:45 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 17:57:03 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 17:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:01:33 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-05-04 18:01:42 --> Could not find the language line "Home"
ERROR - 2025-05-04 18:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:04:25 --> Could not find the language line "Home"
ERROR - 2025-05-04 18:04:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 18:04:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 18:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:09:47 --> Could not find the language line "products"
ERROR - 2025-05-04 18:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:10:25 --> Could not find the language line "Home"
ERROR - 2025-05-04 18:11:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 18:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:14:33 --> Could not find the language line "Home"
ERROR - 2025-05-04 18:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:18:25 --> Could not find the language line "Home"
ERROR - 2025-05-04 18:18:40 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 18:18:59 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 18:19:33 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 18:19:53 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 18:20:07 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 18:20:15 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 18:21:00 --> Could not find the language line "Home"
ERROR - 2025-05-04 18:21:14 --> Could not find the language line "Perfume"
ERROR - 2025-05-04 18:21:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 18:21:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 18:21:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 18:22:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 18:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:25:52 --> Could not find the language line "Home"
ERROR - 2025-05-04 18:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:33:04 --> Could not find the language line "Crocs"
ERROR - 2025-05-04 18:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:36:23 --> Could not find the language line "Home"
ERROR - 2025-05-04 18:43:04 --> Could not find the language line "Home"
ERROR - 2025-05-04 18:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:44:32 --> Could not find the language line "Home"
ERROR - 2025-05-04 18:44:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 18:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:48:09 --> Could not find the language line "Home"
ERROR - 2025-05-04 18:48:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:49:16 --> Could not find the language line "hair%20%26%20skin%20products"
ERROR - 2025-05-04 18:53:30 --> Could not find the language line "Home"
ERROR - 2025-05-04 18:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:57:15 --> Could not find the language line "Home"
ERROR - 2025-05-04 18:57:32 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 18:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:58:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 18:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 18:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:00:54 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:07:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 19:08:54 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:14:33 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:15:34 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:16:09 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:16:22 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:18:23 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:23:12 --> Could not find the language line "products"
ERROR - 2025-05-04 19:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:31:25 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:31:29 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:31:33 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 19:31:38 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:32:09 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:34:54 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 19:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:39:22 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-05-04 19:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:41:25 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:44:33 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:44:57 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:45:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:46:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 19:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:48:59 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:49:31 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:52:09 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-05-04 19:53:44 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-05-04 19:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:57:19 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:57:19 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:57:39 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:57:39 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:57:52 --> Could not find the language line "Home"
ERROR - 2025-05-04 19:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 19:58:54 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:00:02 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 20:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:01:54 --> Could not find the language line "Socks"
ERROR - 2025-05-04 20:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:07:14 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:07:15 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:12:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 20:12:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-05-04 20:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:13:34 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:14:34 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:18:08 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:22:33 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:23:25 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:23:27 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:23:29 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:23:42 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:23:45 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:25:31 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:28:39 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:30:10 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:30:55 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:30:57 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:30:58 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 20:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:34:47 --> Could not find the language line "products"
ERROR - 2025-05-04 20:35:01 --> Could not find the language line "products"
ERROR - 2025-05-04 20:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:44:33 --> Could not find the language line "Home"
ERROR - 2025-05-04 20:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 20:59:53 --> Could not find the language line "Socks"
ERROR - 2025-05-04 21:00:00 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-05-04 21:00:24 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-05-04 21:00:52 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-05-04 21:01:17 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-05-04 21:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:08:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-05-04 21:09:41 --> 404 Page Not Found: Products/accounts
ERROR - 2025-05-04 21:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:13:04 --> Could not find the language line "Home"
ERROR - 2025-05-04 21:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:13:33 --> Could not find the language line "Home"
ERROR - 2025-05-04 21:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:14:34 --> Could not find the language line "Home"
ERROR - 2025-05-04 21:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:15:19 --> Could not find the language line "Home"
ERROR - 2025-05-04 21:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:30:06 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 21:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:39:57 --> Could not find the language line "Home"
ERROR - 2025-05-04 21:40:58 --> Could not find the language line "Home"
ERROR - 2025-05-04 21:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:42:01 --> Could not find the language line "Home"
ERROR - 2025-05-04 21:42:04 --> Could not find the language line "Sunglasses"
ERROR - 2025-05-04 21:42:13 --> Could not find the language line "Home"
ERROR - 2025-05-04 21:44:20 --> Could not find the language line "Home"
ERROR - 2025-05-04 21:44:28 --> Could not find the language line "Other"
ERROR - 2025-05-04 21:44:36 --> Could not find the language line "Home"
ERROR - 2025-05-04 21:50:05 --> Could not find the language line "Home"
ERROR - 2025-05-04 21:55:22 --> Could not find the language line "Home"
ERROR - 2025-05-04 21:55:56 --> Could not find the language line "Other"
ERROR - 2025-05-04 21:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 21:59:01 --> Could not find the language line "Home"
ERROR - 2025-05-04 21:59:02 --> Could not find the language line "Home"
ERROR - 2025-05-04 22:00:08 --> Could not find the language line "Socks"
ERROR - 2025-05-04 22:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 22:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 22:06:35 --> Could not find the language line "Clothing"
ERROR - 2025-05-04 22:07:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-05-04 22:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 22:14:42 --> Could not find the language line "Home"
ERROR - 2025-05-04 22:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 22:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 22:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 22:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 22:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 22:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 22:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 22:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 22:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 22:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 22:35:01 --> Could not find the language line "products"
ERROR - 2025-05-04 22:35:05 --> Could not find the language line "products"
ERROR - 2025-05-04 22:44:13 --> Could not find the language line "Home"
ERROR - 2025-05-04 22:44:45 --> Could not find the language line "Home"
ERROR - 2025-05-04 22:46:54 --> Could not find the language line "Home"
ERROR - 2025-05-04 22:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 23:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 23:05:11 --> Could not find the language line "Home"
ERROR - 2025-05-04 23:12:12 --> Could not find the language line "Home"
ERROR - 2025-05-04 23:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 23:13:51 --> Could not find the language line "Home"
ERROR - 2025-05-04 23:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 23:14:43 --> Could not find the language line "Home"
ERROR - 2025-05-04 23:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 23:19:12 --> Could not find the language line "Home"
ERROR - 2025-05-04 23:20:06 --> 404 Page Not Found: Sftp-configjson/index
ERROR - 2025-05-04 23:20:14 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2025-05-04 23:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 23:29:34 --> Could not find the language line "Socks"
ERROR - 2025-05-04 23:31:37 --> Could not find the language line "Home"
ERROR - 2025-05-04 23:36:12 --> Could not find the language line "products"
ERROR - 2025-05-04 23:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 23:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 23:42:01 --> Could not find the language line "Home"
ERROR - 2025-05-04 23:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 23:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 23:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-05-04 23:44:41 --> Could not find the language line "Home"
ERROR - 2025-05-04 23:46:51 --> Could not find the language line "Home"
ERROR - 2025-05-04 23:50:52 --> Could not find the language line "Home"
ERROR - 2025-05-04 23:58:50 --> 404 Page Not Found: Assets/css
