<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-01 00:24:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-01 00:52:35 --> Could not find the language line "Home"
ERROR - 2023-11-01 01:06:48 --> Could not find the language line "Home"
ERROR - 2023-11-01 01:08:05 --> Could not find the language line "Home"
ERROR - 2023-11-01 01:10:37 --> Could not find the language line "Home"
ERROR - 2023-11-01 01:49:52 --> Could not find the language line "Home"
ERROR - 2023-11-01 01:58:45 --> Could not find the language line "Home"
ERROR - 2023-11-01 01:58:45 --> Could not find the language line "Home"
ERROR - 2023-11-01 01:58:45 --> Could not find the language line "Home"
ERROR - 2023-11-01 01:58:45 --> Could not find the language line "Home"
ERROR - 2023-11-01 01:58:45 --> Could not find the language line "Home"
ERROR - 2023-11-01 01:58:46 --> Could not find the language line "Home"
ERROR - 2023-11-01 02:07:35 --> Could not find the language line "Home"
ERROR - 2023-11-01 02:07:50 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-01 02:08:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-11-01 02:08:34 --> Could not find the language line "Home"
ERROR - 2023-11-01 02:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 02:38:09 --> Could not find the language line "Home"
ERROR - 2023-11-01 02:58:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 03:00:08 --> Could not find the language line "Home"
ERROR - 2023-11-01 03:01:08 --> Could not find the language line "Home"
ERROR - 2023-11-01 03:01:08 --> Could not find the language line "Home"
ERROR - 2023-11-01 03:02:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 03:29:54 --> Could not find the language line "Home"
ERROR - 2023-11-01 03:56:03 --> Could not find the language line "Home"
ERROR - 2023-11-01 03:58:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 03:58:19 --> Could not find the language line "Home"
ERROR - 2023-11-01 03:59:46 --> Could not find the language line "Home"
ERROR - 2023-11-01 04:00:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-01 04:00:22 --> Could not find the language line "Home"
ERROR - 2023-11-01 04:00:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 04:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 04:01:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 04:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 04:01:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 04:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 04:01:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 04:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 04:02:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 04:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 04:02:18 --> Could not find the language line "Home"
ERROR - 2023-11-01 04:02:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 04:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 04:03:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 04:03:39 --> Could not find the language line "Home"
ERROR - 2023-11-01 04:10:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 04:10:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 04:10:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 04:45:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 04:56:25 --> Could not find the language line "Home"
ERROR - 2023-11-01 05:01:31 --> Could not find the language line "Home"
ERROR - 2023-11-01 05:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 05:18:23 --> Could not find the language line "Home"
ERROR - 2023-11-01 05:32:28 --> Could not find the language line "Home"
ERROR - 2023-11-01 05:33:04 --> Could not find the language line "Home"
ERROR - 2023-11-01 05:35:16 --> Could not find the language line "Home"
ERROR - 2023-11-01 05:35:21 --> Could not find the language line "Home"
ERROR - 2023-11-01 05:44:54 --> Could not find the language line "Home"
ERROR - 2023-11-01 05:47:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 05:47:45 --> Could not find the language line "Home"
ERROR - 2023-11-01 05:47:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 05:47:53 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-11-01 05:47:59 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-11-01 05:48:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 05:48:07 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-11-01 05:48:13 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-11-01 05:48:19 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-11-01 05:48:24 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-11-01 05:48:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-01 05:49:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 05:49:13 --> Could not find the language line "Home"
ERROR - 2023-11-01 05:56:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-11-01 05:56:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-11-01 05:57:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 05:58:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 05:58:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 05:58:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 05:58:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 05:58:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 05:58:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 05:58:40 --> Could not find the language line "Home"
ERROR - 2023-11-01 05:59:02 --> Could not find the language line "Other"
ERROR - 2023-11-01 05:59:07 --> Could not find the language line "Other"
ERROR - 2023-11-01 06:03:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:05:58 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-01 06:13:54 --> Could not find the language line "Home"
ERROR - 2023-11-01 06:14:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:15:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:15:42 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:15:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:16:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:16:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:16:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:16:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:16:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:16:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:16:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:16:31 --> Could not find the language line "Home"
ERROR - 2023-11-01 06:16:32 --> Could not find the language line "Home"
ERROR - 2023-11-01 06:16:36 --> Could not find the language line "Socks"
ERROR - 2023-11-01 06:24:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-11-01 06:30:38 --> Could not find the language line "Home"
ERROR - 2023-11-01 06:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 06:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 06:47:32 --> Could not find the language line "Home"
ERROR - 2023-11-01 06:50:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-01 06:50:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-01 06:51:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-01 06:51:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-01 06:52:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-01 06:52:27 --> Could not find the language line "Home"
ERROR - 2023-11-01 06:52:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 06:53:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:53:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:53:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:54:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:54:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:54:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 06:55:40 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:00:17 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:05:57 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 07:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 07:07:49 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:07:56 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:08:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 07:09:58 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:10:59 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:11:59 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:12:00 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-11-01 07:12:00 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-11-01 07:12:01 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:12:01 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-11-01 07:12:01 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-11-01 07:12:01 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-11-01 07:12:01 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-11-01 07:12:01 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-11-01 07:12:02 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-11-01 07:12:02 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-11-01 07:12:02 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-11-01 07:12:02 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-11-01 07:12:02 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-11-01 07:12:02 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-11-01 07:12:03 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-11-01 07:12:03 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-11-01 07:12:03 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-11-01 07:12:03 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-11-01 07:13:48 --> Could not find the language line "Socks"
ERROR - 2023-11-01 07:14:47 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:18:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-11-01 07:23:59 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:24:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 07:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 07:24:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 07:24:44 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 07:31:19 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:31:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 07:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 07:31:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 07:32:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 07:32:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 07:32:24 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:39:43 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:40:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-01 07:40:44 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:41:25 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 07:42:28 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:42:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 07:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 07:48:23 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-01 07:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 07:58:18 --> Could not find the language line "Home"
ERROR - 2023-11-01 07:58:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 07:58:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 07:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 08:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 08:02:17 --> Could not find the language line "Home"
ERROR - 2023-11-01 08:09:31 --> Could not find the language line "Home"
ERROR - 2023-11-01 08:09:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 08:09:53 --> Could not find the language line "Home"
ERROR - 2023-11-01 08:10:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 08:10:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 08:13:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 08:16:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 08:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 08:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 08:21:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 08:21:47 --> Could not find the language line "Home"
ERROR - 2023-11-01 08:25:22 --> Could not find the language line "Home"
ERROR - 2023-11-01 08:25:29 --> Could not find the language line "Home"
ERROR - 2023-11-01 08:30:10 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-11-01 08:34:19 --> Could not find the language line "Home"
ERROR - 2023-11-01 08:37:16 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-01 08:54:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:57:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:57:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:57:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 08:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 08:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 08:58:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:58:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:58:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:58:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:59:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:59:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:59:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:59:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 08:59:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 09:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:02:45 --> Could not find the language line "Home"
ERROR - 2023-11-01 09:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:06:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-01 09:06:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-01 09:06:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-01 09:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:10:19 --> Could not find the language line "Home"
ERROR - 2023-11-01 09:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:17:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 09:17:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 09:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:19:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 09:19:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 09:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:32:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 09:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:32:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 09:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:35:25 --> Could not find the language line "Home"
ERROR - 2023-11-01 09:37:23 --> Could not find the language line "Home"
ERROR - 2023-11-01 09:38:59 --> Could not find the language line "Home"
ERROR - 2023-11-01 09:40:29 --> Could not find the language line "Home"
ERROR - 2023-11-01 09:44:19 --> Could not find the language line "Home"
ERROR - 2023-11-01 09:44:19 --> Could not find the language line "Home"
ERROR - 2023-11-01 09:45:21 --> Could not find the language line "Home"
ERROR - 2023-11-01 09:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 09:57:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 10:00:39 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:01:30 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:05:25 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:05:39 --> 404 Page Not Found: Autodiscover/autodiscover.xml
ERROR - 2023-11-01 10:05:39 --> 404 Page Not Found: Autodiscover/autodiscover.xml
ERROR - 2023-11-01 10:07:02 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:07:07 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-11-01 10:07:07 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-11-01 10:07:07 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-11-01 10:07:08 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-01 10:09:30 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:09:35 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:09:42 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:13:11 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:13:13 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-11-01 10:13:14 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-11-01 10:13:14 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-11-01 10:13:14 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-01 10:13:36 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:13:40 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:16:30 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:16:38 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:16:43 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:16:53 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:17:58 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:18:17 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:18:47 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:18:55 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:19:07 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:24:08 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:25:57 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 10:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:26:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 10:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:27:32 --> 404 Page Not Found: Sitemap_1xml/index
ERROR - 2023-11-01 10:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:32:01 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:39:37 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:41:15 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:43:12 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:43:48 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:45:25 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:47:18 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-01 10:48:16 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:48:18 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:50:52 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:51:01 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:54:18 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:54:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 10:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:56:37 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:56:42 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 10:56:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 10:57:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 10:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 10:57:38 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:57:38 --> Could not find the language line "Home"
ERROR - 2023-11-01 10:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 11:00:00 --> Could not find the language line "Home"
ERROR - 2023-11-01 11:00:03 --> Could not find the language line "Home"
ERROR - 2023-11-01 11:01:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 11:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 11:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 11:01:51 --> Could not find the language line "Home"
ERROR - 2023-11-01 11:02:20 --> Could not find the language line "Home"
ERROR - 2023-11-01 11:10:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 11:10:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 11:12:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-01 11:16:20 --> Could not find the language line "Home"
ERROR - 2023-11-01 11:22:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 11:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 11:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 11:22:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 11:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 11:22:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 11:22:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 11:22:50 --> 404 Page Not Found: Api/common
ERROR - 2023-11-01 11:22:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 11:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 11:37:56 --> Could not find the language line "Home"
ERROR - 2023-11-01 11:39:48 --> Could not find the language line "Home"
ERROR - 2023-11-01 11:40:04 --> Could not find the language line "Bracelets"
ERROR - 2023-11-01 11:40:21 --> Could not find the language line "Home"
ERROR - 2023-11-01 11:44:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 11:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 11:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 11:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 12:03:15 --> Could not find the language line "Home"
ERROR - 2023-11-01 12:03:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 12:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 12:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 12:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 12:14:29 --> Could not find the language line "Home"
ERROR - 2023-11-01 12:15:03 --> Could not find the language line "Home"
ERROR - 2023-11-01 12:18:06 --> Could not find the language line "Home"
ERROR - 2023-11-01 12:19:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 12:30:05 --> Could not find the language line "Home"
ERROR - 2023-11-01 12:31:42 --> Could not find the language line "products"
ERROR - 2023-11-01 12:41:20 --> Could not find the language line "Home"
ERROR - 2023-11-01 12:41:46 --> Could not find the language line "Home"
ERROR - 2023-11-01 12:44:33 --> Could not find the language line "Home"
ERROR - 2023-11-01 12:44:34 --> Could not find the language line "Home"
ERROR - 2023-11-01 12:45:15 --> Could not find the language line "Home"
ERROR - 2023-11-01 12:45:18 --> Could not find the language line "Home"
ERROR - 2023-11-01 12:45:19 --> Could not find the language line "Home"
ERROR - 2023-11-01 12:51:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 12:54:11 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-11-01 12:56:54 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-11-01 13:03:39 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-11-01 13:05:17 --> Could not find the language line "Home"
ERROR - 2023-11-01 13:11:54 --> Could not find the language line "Home"
ERROR - 2023-11-01 13:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:16:15 --> Could not find the language line "Home"
ERROR - 2023-11-01 13:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:18:57 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-01 13:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:29:09 --> Could not find the language line "Home"
ERROR - 2023-11-01 13:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:34:54 --> Could not find the language line "Home"
ERROR - 2023-11-01 13:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 13:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 14:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 14:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 14:11:42 --> Could not find the language line "Home"
ERROR - 2023-11-01 14:11:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 14:11:45 --> Could not find the language line "Home"
ERROR - 2023-11-01 14:12:39 --> Could not find the language line "Home"
ERROR - 2023-11-01 14:12:41 --> Could not find the language line "Home"
ERROR - 2023-11-01 14:16:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 14:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 14:37:20 --> Could not find the language line "Home"
ERROR - 2023-11-01 14:41:37 --> Could not find the language line "Home"
ERROR - 2023-11-01 14:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 14:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 14:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 14:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 14:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 14:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 14:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 14:49:21 --> Could not find the language line "Home"
ERROR - 2023-11-01 14:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 14:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 14:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 14:56:56 --> Could not find the language line "Home"
ERROR - 2023-11-01 14:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:00:30 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:03:00 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:03:32 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:03:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-01 15:03:59 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:04:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 15:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:07:48 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:09:46 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:19:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 15:20:16 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:21:44 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-01 15:23:02 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-01 15:26:49 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:27:29 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 15:28:00 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:28:54 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:30:31 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:35:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 15:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:39:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-01 15:39:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-01 15:39:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-01 15:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:40:12 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-01 15:40:21 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:40:33 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:40:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:43:04 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 15:52:38 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:54:58 --> Could not find the language line "Disclaimer"
ERROR - 2023-11-01 15:57:48 --> Could not find the language line "Home"
ERROR - 2023-11-01 15:59:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-01 16:02:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 16:02:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 16:04:15 --> Could not find the language line "Home"
ERROR - 2023-11-01 16:04:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 16:04:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 16:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 16:05:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 16:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 16:05:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 16:05:43 --> Could not find the language line "Home"
ERROR - 2023-11-01 16:05:50 --> Could not find the language line "Home"
ERROR - 2023-11-01 16:06:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 16:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 16:06:19 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 16:06:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-01 16:06:37 --> Could not find the language line "Home"
ERROR - 2023-11-01 16:07:14 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 16:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 16:10:39 --> Could not find the language line "Home"
ERROR - 2023-11-01 16:27:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 16:27:04 --> Could not find the language line "Home"
ERROR - 2023-11-01 16:27:47 --> Could not find the language line "Home"
ERROR - 2023-11-01 16:31:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 16:41:04 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-11-01 16:49:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 16:49:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 16:49:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 16:50:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 16:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 17:00:37 --> Could not find the language line "Home"
ERROR - 2023-11-01 17:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 17:06:44 --> Could not find the language line "Home"
ERROR - 2023-11-01 17:07:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 17:09:32 --> Could not find the language line "Home"
ERROR - 2023-11-01 17:09:47 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-01 17:18:28 --> Could not find the language line "Home"
ERROR - 2023-11-01 17:24:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-11-01 17:25:12 --> Could not find the language line "Home"
ERROR - 2023-11-01 17:29:28 --> Could not find the language line "assets"
ERROR - 2023-11-01 17:34:05 --> Could not find the language line "Home"
ERROR - 2023-11-01 17:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 17:46:02 --> Could not find the language line "Home"
ERROR - 2023-11-01 17:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 18:04:58 --> Could not find the language line "Home"
ERROR - 2023-11-01 18:05:00 --> Could not find the language line "Home"
ERROR - 2023-11-01 18:06:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 18:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 18:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 18:07:45 --> Could not find the language line "Home"
ERROR - 2023-11-01 18:07:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:08:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:08:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:08:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:18:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 18:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 18:22:28 --> Could not find the language line "Home"
ERROR - 2023-11-01 18:22:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:22:42 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:22:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:23:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:23:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 18:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 18:28:33 --> Could not find the language line "Home"
ERROR - 2023-11-01 18:29:57 --> Could not find the language line "Home"
ERROR - 2023-11-01 18:30:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-01 18:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 18:30:48 --> Could not find the language line "Home"
ERROR - 2023-11-01 18:30:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:31:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:31:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:31:24 --> Could not find the language line "Home"
ERROR - 2023-11-01 18:32:23 --> Could not find the language line "Home"
ERROR - 2023-11-01 18:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 18:34:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:34:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 18:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 18:44:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:45:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:45:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:46:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 18:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-01 18:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-01 18:46:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-01 18:51:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-01 18:51:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-01 18:51:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-01 18:52:30 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-11-01 18:52:30 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-11-01 18:52:31 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-11-01 18:52:31 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-01 18:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 18:54:21 --> Could not find the language line "Home"
ERROR - 2023-11-01 18:54:43 --> Could not find the language line "Home"
ERROR - 2023-11-01 18:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 18:54:59 --> Could not find the language line "Home"
ERROR - 2023-11-01 18:55:54 --> Could not find the language line "Home"
ERROR - 2023-11-01 19:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 19:06:58 --> Could not find the language line "Home"
ERROR - 2023-11-01 19:09:47 --> Could not find the language line "Home"
ERROR - 2023-11-01 19:09:47 --> Could not find the language line "Home"
ERROR - 2023-11-01 19:09:47 --> Could not find the language line "Home"
ERROR - 2023-11-01 19:09:47 --> Could not find the language line "Home"
ERROR - 2023-11-01 19:09:47 --> Could not find the language line "Home"
ERROR - 2023-11-01 19:09:47 --> Could not find the language line "Home"
ERROR - 2023-11-01 19:09:47 --> Could not find the language line "Home"
ERROR - 2023-11-01 19:13:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-01 19:16:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-11-01 19:21:21 --> Could not find the language line "Other"
ERROR - 2023-11-01 19:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 19:25:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 19:25:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 19:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 19:30:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 19:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 19:36:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 19:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 19:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 19:41:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-01 19:41:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-01 19:41:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-01 19:41:44 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-11-01 19:41:44 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-11-01 19:41:45 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-11-01 19:41:45 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-01 19:42:13 --> Could not find the language line "Home"
ERROR - 2023-11-01 19:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 19:51:42 --> Could not find the language line "Home"
ERROR - 2023-11-01 19:52:51 --> Could not find the language line "Home"
ERROR - 2023-11-01 19:54:15 --> Could not find the language line "Home"
ERROR - 2023-11-01 19:55:40 --> Could not find the language line "Other"
ERROR - 2023-11-01 19:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 19:56:40 --> Could not find the language line "Home"
ERROR - 2023-11-01 19:58:37 --> Could not find the language line "Other"
ERROR - 2023-11-01 19:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 19:59:59 --> Could not find the language line "Home"
ERROR - 2023-11-01 20:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:04:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 20:04:13 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-01 20:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:07:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 20:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:08:56 --> Could not find the language line "Home"
ERROR - 2023-11-01 20:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:13:52 --> Could not find the language line "Home"
ERROR - 2023-11-01 20:16:20 --> Could not find the language line "Home"
ERROR - 2023-11-01 20:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:18:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 20:18:51 --> Could not find the language line "Home"
ERROR - 2023-11-01 20:21:19 --> Could not find the language line "Home"
ERROR - 2023-11-01 20:23:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 20:23:46 --> Could not find the language line "Home"
ERROR - 2023-11-01 20:25:05 --> Could not find the language line "Home"
ERROR - 2023-11-01 20:27:27 --> Could not find the language line "Home"
ERROR - 2023-11-01 20:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:31:48 --> Could not find the language line "Home"
ERROR - 2023-11-01 20:55:07 --> Could not find the language line "Home"
ERROR - 2023-11-01 20:55:07 --> Could not find the language line "Home"
ERROR - 2023-11-01 20:56:23 --> Could not find the language line "Home"
ERROR - 2023-11-01 20:56:35 --> Could not find the language line "Bracelets"
ERROR - 2023-11-01 20:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 20:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:06:08 --> Could not find the language line "Bracelets"
ERROR - 2023-11-01 21:06:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:06:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:06:55 --> Could not find the language line "Home"
ERROR - 2023-11-01 21:07:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:07:45 --> Could not find the language line "Home"
ERROR - 2023-11-01 21:08:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:08:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-01 21:08:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-01 21:08:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-01 21:09:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:09:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:09:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:11:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:11:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:11:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:16:37 --> Could not find the language line "Home"
ERROR - 2023-11-01 21:17:16 --> Could not find the language line "Home"
ERROR - 2023-11-01 21:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:18:32 --> Could not find the language line "Home"
ERROR - 2023-11-01 21:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:19:27 --> Could not find the language line "Home"
ERROR - 2023-11-01 21:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:30:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-01 21:43:19 --> Could not find the language line "Home"
ERROR - 2023-11-01 21:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:47:17 --> Could not find the language line "Home"
ERROR - 2023-11-01 21:47:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:48:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:49:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:49:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:50:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:50:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:50:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:50:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:50:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 21:53:52 --> Could not find the language line "Home"
ERROR - 2023-11-01 21:54:25 --> Could not find the language line "Home"
ERROR - 2023-11-01 21:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-01 21:55:26 --> Could not find the language line "Home"
ERROR - 2023-11-01 21:55:26 --> Could not find the language line "Home"
ERROR - 2023-11-01 21:59:25 --> Could not find the language line "Home"
ERROR - 2023-11-01 22:15:07 --> Could not find the language line "Home"
ERROR - 2023-11-01 22:16:00 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-01 22:17:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 22:18:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 22:18:28 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-11-01 22:18:29 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-11-01 22:18:30 --> Could not find the language line "Home"
ERROR - 2023-11-01 22:20:40 --> Could not find the language line "Socks"
ERROR - 2023-11-01 22:22:36 --> Could not find the language line "Home"
ERROR - 2023-11-01 22:38:40 --> Could not find the language line "Home"
ERROR - 2023-11-01 22:52:23 --> Could not find the language line "Home"
ERROR - 2023-11-01 23:21:52 --> Could not find the language line "Home"
ERROR - 2023-11-01 23:23:37 --> Could not find the language line "Home"
ERROR - 2023-11-01 23:34:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-01 23:34:19 --> Could not find the language line "Home"
ERROR - 2023-11-01 23:38:36 --> Could not find the language line "Home"
ERROR - 2023-11-01 23:38:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-01 23:39:07 --> Could not find the language line "Home"
ERROR - 2023-11-01 23:55:19 --> Could not find the language line "Home"
