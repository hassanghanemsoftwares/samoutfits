<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-13 00:04:08 --> Could not find the language line "Home"
ERROR - 2024-06-13 00:04:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 00:04:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 00:04:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 00:05:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 00:06:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 00:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 00:12:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 00:16:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 00:20:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 00:20:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 00:20:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 00:22:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 00:26:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 00:28:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 00:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 00:32:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 00:34:04 --> Could not find the language line "Home"
ERROR - 2024-06-13 00:36:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 00:40:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-13 00:40:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 00:40:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-13 00:44:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 00:47:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 00:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 00:48:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 00:52:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 00:56:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 01:00:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 01:04:09 --> Could not find the language line "Home"
ERROR - 2024-06-13 01:04:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 01:08:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 01:08:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 01:08:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 01:12:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 01:12:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 01:12:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 01:13:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 01:13:56 --> Could not find the language line "Home"
ERROR - 2024-06-13 01:13:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 01:13:58 --> 404 Page Not Found: Assets/mail
ERROR - 2024-06-13 01:14:00 --> 404 Page Not Found: Home/assets
ERROR - 2024-06-13 01:14:00 --> 404 Page Not Found: Home/home
ERROR - 2024-06-13 01:14:00 --> 404 Page Not Found: Assets/mail
ERROR - 2024-06-13 01:14:00 --> 404 Page Not Found: Home/assets
ERROR - 2024-06-13 01:14:00 --> 404 Page Not Found: Home/assets
ERROR - 2024-06-13 01:14:01 --> 404 Page Not Found: Home/assets
ERROR - 2024-06-13 01:14:03 --> 404 Page Not Found: Home/assets
ERROR - 2024-06-13 01:14:04 --> 404 Page Not Found: Home/assets
ERROR - 2024-06-13 01:14:07 --> 404 Page Not Found: Home/home
ERROR - 2024-06-13 01:14:07 --> 404 Page Not Found: Home/home
ERROR - 2024-06-13 01:14:15 --> Could not find the language line "Home"
ERROR - 2024-06-13 01:14:15 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-13 01:14:17 --> 404 Page Not Found: Cart/assets
ERROR - 2024-06-13 01:14:17 --> 404 Page Not Found: Cart/home
ERROR - 2024-06-13 01:14:17 --> 404 Page Not Found: Cart/assets
ERROR - 2024-06-13 01:14:17 --> 404 Page Not Found: Cart/assets
ERROR - 2024-06-13 01:14:18 --> 404 Page Not Found: Cart/assets
ERROR - 2024-06-13 01:14:18 --> 404 Page Not Found: Cart/assets
ERROR - 2024-06-13 01:14:18 --> 404 Page Not Found: Cart/assets
ERROR - 2024-06-13 01:14:18 --> 404 Page Not Found: Cart/assets
ERROR - 2024-06-13 01:14:18 --> 404 Page Not Found: Home/assets
ERROR - 2024-06-13 01:14:18 --> 404 Page Not Found: Cart/home
ERROR - 2024-06-13 01:14:19 --> 404 Page Not Found: Cart/home
ERROR - 2024-06-13 01:14:19 --> Could not find the language line "Bracelets"
ERROR - 2024-06-13 01:14:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:21 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:21 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:22 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:22 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:22 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:24 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:26 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:28 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:31 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:32 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:32 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:40 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:40 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:45 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:48 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:50 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:50 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:50 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:53 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:54 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:54 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:55 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:56 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:56 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:14:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:14:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:01 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:21 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:15:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:22 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:15:22 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:15:22 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:15:22 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:15:22 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:15:23 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:15:23 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:15:23 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:15:23 --> Could not find the language line "assets"
ERROR - 2024-06-13 01:15:24 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:24 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:24 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:24 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 01:15:40 --> Could not find the language line "Other"
ERROR - 2024-06-13 01:15:40 --> Could not find the language line "Other"
ERROR - 2024-06-13 01:15:43 --> Could not find the language line "Other"
ERROR - 2024-06-13 01:15:44 --> Could not find the language line "Other"
ERROR - 2024-06-13 01:15:45 --> Could not find the language line "Other"
ERROR - 2024-06-13 01:15:49 --> Could not find the language line "Other"
ERROR - 2024-06-13 01:15:49 --> Could not find the language line "Other"
ERROR - 2024-06-13 01:15:49 --> Could not find the language line "Other"
ERROR - 2024-06-13 01:15:49 --> Could not find the language line "Other"
ERROR - 2024-06-13 01:15:50 --> Could not find the language line "Other"
ERROR - 2024-06-13 01:15:50 --> Could not find the language line "Other"
ERROR - 2024-06-13 01:15:50 --> Could not find the language line "Other"
ERROR - 2024-06-13 01:15:50 --> Could not find the language line "Other"
ERROR - 2024-06-13 01:15:50 --> Could not find the language line "Perfume"
ERROR - 2024-06-13 01:15:54 --> Could not find the language line "Socks"
ERROR - 2024-06-13 01:15:55 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 01:15:57 --> Could not find the language line "Home"
ERROR - 2024-06-13 01:16:17 --> 404 Page Not Found: Util/login.aspx
ERROR - 2024-06-13 01:20:20 --> 404 Page Not Found: Products/products
ERROR - 2024-06-13 01:20:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 01:22:26 --> Could not find the language line "Home"
ERROR - 2024-06-13 01:25:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 01:27:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 01:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 01:32:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 01:34:06 --> Could not find the language line "Home"
ERROR - 2024-06-13 01:34:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 01:36:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 01:48:03 --> Could not find the language line "Socks"
ERROR - 2024-06-13 01:48:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 01:49:42 --> Could not find the language line "Other"
ERROR - 2024-06-13 01:52:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 01:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 01:56:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:04:11 --> Could not find the language line "Home"
ERROR - 2024-06-13 02:04:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:04:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 02:08:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:19:20 --> Could not find the language line "Home"
ERROR - 2024-06-13 02:20:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 02:24:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:28:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 02:31:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 02:31:43 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-13 02:32:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:33:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 02:34:13 --> Could not find the language line "Home"
ERROR - 2024-06-13 02:36:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:36:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:40:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:40:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:41:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 02:44:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:46:57 --> Could not find the language line "Home"
ERROR - 2024-06-13 02:48:01 --> Could not find the language line "Home"
ERROR - 2024-06-13 02:48:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:52:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:52:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 02:53:07 --> Could not find the language line "Home"
ERROR - 2024-06-13 03:00:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 03:00:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 03:00:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 03:04:09 --> Could not find the language line "Home"
ERROR - 2024-06-13 03:04:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 03:07:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 03:13:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-13 03:14:38 --> Could not find the language line "Home"
ERROR - 2024-06-13 03:18:54 --> Could not find the language line "Home"
ERROR - 2024-06-13 03:20:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 03:22:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 03:33:15 --> Could not find the language line "Home"
ERROR - 2024-06-13 03:34:19 --> Could not find the language line "Home"
ERROR - 2024-06-13 03:40:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 03:44:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 03:44:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 03:48:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 03:48:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 03:52:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 03:52:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 03:56:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 03:56:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-13 03:56:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 03:59:46 --> Could not find the language line "Other"
ERROR - 2024-06-13 04:00:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:01:37 --> Could not find the language line "Home"
ERROR - 2024-06-13 04:01:45 --> Could not find the language line "Home"
ERROR - 2024-06-13 04:01:57 --> Could not find the language line "Bracelets"
ERROR - 2024-06-13 04:04:10 --> Could not find the language line "Home"
ERROR - 2024-06-13 04:04:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:12:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:12:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:16:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 04:20:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:20:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 04:24:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:24:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:25:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 04:26:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 04:27:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 04:28:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:28:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:32:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:34:08 --> Could not find the language line "Home"
ERROR - 2024-06-13 04:35:25 --> Could not find the language line "products"
ERROR - 2024-06-13 04:40:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:40:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:44:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 04:48:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:48:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 04:51:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 04:52:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:56:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 04:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 05:04:08 --> Could not find the language line "Home"
ERROR - 2024-06-13 05:04:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 05:06:09 --> Could not find the language line "Home"
ERROR - 2024-06-13 05:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 05:08:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 05:08:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 05:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 05:12:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 05:12:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 05:13:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 05:14:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 05:16:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 05:16:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 05:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 05:25:21 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-13 05:25:21 --> Could not find the language line "Home"
ERROR - 2024-06-13 05:25:33 --> Could not find the language line "Home"
ERROR - 2024-06-13 05:32:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 05:34:10 --> Could not find the language line "Home"
ERROR - 2024-06-13 05:35:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 05:36:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 05:38:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 05:39:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 05:41:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-13 05:41:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-13 05:41:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-13 05:44:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 05:46:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 05:47:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 05:47:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-13 05:47:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-13 05:47:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-13 05:48:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 05:52:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 05:54:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 05:55:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 05:56:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 05:58:55 --> Could not find the language line "Home"
ERROR - 2024-06-13 05:59:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-13 05:59:40 --> Could not find the language line "Home"
ERROR - 2024-06-13 06:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 06:00:44 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 06:00:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 06:01:07 --> Could not find the language line "Home"
ERROR - 2024-06-13 06:01:07 --> Could not find the language line "Home"
ERROR - 2024-06-13 06:01:44 --> Could not find the language line "Home"
ERROR - 2024-06-13 06:04:08 --> Could not find the language line "Home"
ERROR - 2024-06-13 06:04:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 06:04:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 06:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 06:08:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 06:12:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 06:16:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 06:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 06:19:55 --> Could not find the language line "products"
ERROR - 2024-06-13 06:19:59 --> Could not find the language line "Other"
ERROR - 2024-06-13 06:20:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 06:24:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 06:26:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 06:28:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 06:30:45 --> Could not find the language line "Home"
ERROR - 2024-06-13 06:32:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 06:33:23 --> Could not find the language line "Home"
ERROR - 2024-06-13 06:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 06:34:09 --> Could not find the language line "Home"
ERROR - 2024-06-13 06:34:10 --> Could not find the language line "Home"
ERROR - 2024-06-13 06:34:11 --> Could not find the language line "Home"
ERROR - 2024-06-13 06:36:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 06:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 06:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 06:44:28 --> Could not find the language line "Other"
ERROR - 2024-06-13 06:45:32 --> Could not find the language line "Socks"
ERROR - 2024-06-13 06:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 06:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 06:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 06:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 06:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 06:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 06:48:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 06:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 06:50:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 06:52:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 06:53:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 06:57:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 07:04:09 --> Could not find the language line "Home"
ERROR - 2024-06-13 07:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 07:06:43 --> Could not find the language line "Home"
ERROR - 2024-06-13 07:07:28 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-06-13 07:07:28 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-06-13 07:07:28 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-06-13 07:07:30 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-13 07:07:30 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-06-13 07:07:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 07:07:46 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-13 07:07:46 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-06-13 07:07:47 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2024-06-13 07:07:47 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2024-06-13 07:07:47 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-06-13 07:07:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 07:07:47 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-06-13 07:07:47 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-06-13 07:07:47 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-06-13 07:08:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 07:09:58 --> Could not find the language line "Home"
ERROR - 2024-06-13 07:10:14 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 07:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 07:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 07:10:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 07:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 07:10:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 07:10:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 07:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 07:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 07:11:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 07:11:42 --> Could not find the language line "Home"
ERROR - 2024-06-13 07:11:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 07:11:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 07:14:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 07:14:53 --> Could not find the language line "Home"
ERROR - 2024-06-13 07:21:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 07:23:35 --> Could not find the language line "Home"
ERROR - 2024-06-13 07:23:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 07:23:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 07:24:46 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 07:24:50 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 07:25:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 07:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 07:25:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 07:25:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 07:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 07:25:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 07:25:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 07:25:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 07:25:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 07:25:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 07:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 07:26:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 07:29:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 07:30:05 --> Could not find the language line "Home"
ERROR - 2024-06-13 07:30:06 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-06-13 07:30:06 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-06-13 07:30:06 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-06-13 07:30:06 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-06-13 07:33:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 07:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 07:34:10 --> Could not find the language line "Home"
ERROR - 2024-06-13 07:35:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 07:37:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 07:40:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 07:41:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 07:42:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 07:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 07:45:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 07:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 07:49:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 07:53:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 07:53:45 --> Could not find the language line "Home"
ERROR - 2024-06-13 07:57:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 08:04:10 --> Could not find the language line "Home"
ERROR - 2024-06-13 08:09:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 08:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 08:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 08:13:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 08:20:29 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2024-06-13 08:21:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 08:22:05 --> Could not find the language line "Other"
ERROR - 2024-06-13 08:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 08:28:00 --> Could not find the language line "Home"
ERROR - 2024-06-13 08:29:36 --> Could not find the language line "Home"
ERROR - 2024-06-13 08:31:22 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 08:31:35 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 08:31:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 08:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 08:31:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 08:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 08:31:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 08:32:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 08:33:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 08:34:11 --> Could not find the language line "Home"
ERROR - 2024-06-13 08:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 08:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 08:37:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 08:40:50 --> Could not find the language line "products"
ERROR - 2024-06-13 08:41:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 08:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 08:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 08:48:46 --> Could not find the language line "Home"
ERROR - 2024-06-13 08:49:03 --> Could not find the language line "Home"
ERROR - 2024-06-13 08:49:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 08:52:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 08:52:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 08:52:58 --> Could not find the language line "Home"
ERROR - 2024-06-13 08:53:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 09:04:13 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:06:01 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:09:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-13 09:09:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 09:09:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-13 09:09:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 09:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:13:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 09:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:14:38 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:16:28 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 09:16:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 09:16:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 09:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:17:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 09:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:17:16 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2024-06-13 09:17:27 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:17:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 09:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:20:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 09:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:21:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 09:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:23:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 09:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:25:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 09:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:26:20 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:26:52 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:28:08 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:28:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:28:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:29:07 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:29:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:29:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:29:16 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:29:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 09:29:23 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:30:53 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:31:19 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:31:39 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 09:31:54 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:32:13 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-13 09:32:13 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-13 09:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:34:34 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:35:22 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-13 09:35:22 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-13 09:35:24 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:35:27 --> Could not find the language line "Bracelets"
ERROR - 2024-06-13 09:35:59 --> Could not find the language line "Bracelets"
ERROR - 2024-06-13 09:36:10 --> Could not find the language line "Bracelets"
ERROR - 2024-06-13 09:36:11 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:36:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-13 09:37:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 09:39:58 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:40:33 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:40:33 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 09:40:51 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:41:15 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 09:41:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 09:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:42:16 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 09:42:21 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:42:39 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 09:42:41 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:44:55 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:44:59 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 09:45:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 09:46:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 09:47:32 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:47:41 --> Could not find the language line "Socks"
ERROR - 2024-06-13 09:47:46 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:48:12 --> Could not find the language line "Socks"
ERROR - 2024-06-13 09:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:49:00 --> Could not find the language line "Socks"
ERROR - 2024-06-13 09:49:05 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:49:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 09:49:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:49:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 09:49:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 09:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:50:45 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 09:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:51:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:51:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-13 09:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:51:49 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:51:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 09:51:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 09:52:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 09:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:52:50 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 09:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:53:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 09:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:53:58 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 09:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:56:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 09:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:57:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 09:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:59:09 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:59:09 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:59:09 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:59:10 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:59:11 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:59:11 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:59:11 --> Could not find the language line "Home"
ERROR - 2024-06-13 09:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:59:31 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 09:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 09:59:51 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 09:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:01:03 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 10:01:20 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:01:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 10:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:05:02 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:05:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 10:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:08:10 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:08:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 10:08:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 10:08:57 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:10:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 10:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:13:32 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:14:50 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:17:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 10:17:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 10:21:12 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:21:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 10:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:21:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 10:21:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 10:21:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 10:25:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 10:25:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 10:29:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 10:29:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 10:33:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 10:34:20 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:35:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 10:37:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 10:40:20 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:40:25 --> 404 Page Not Found: Mall/toget
ERROR - 2024-06-13 10:40:26 --> 404 Page Not Found: Kefu/css
ERROR - 2024-06-13 10:40:26 --> 404 Page Not Found: Index/user
ERROR - 2024-06-13 10:40:27 --> 404 Page Not Found: Dist/images
ERROR - 2024-06-13 10:40:28 --> 404 Page Not Found: Static/diff_worker.js
ERROR - 2024-06-13 10:40:28 --> 404 Page Not Found: Index/user
ERROR - 2024-06-13 10:40:29 --> 404 Page Not Found: Public/wap
ERROR - 2024-06-13 10:40:30 --> 404 Page Not Found: Static/voice
ERROR - 2024-06-13 10:40:30 --> 404 Page Not Found: Public/home
ERROR - 2024-06-13 10:40:31 --> 404 Page Not Found: Public/h5static
ERROR - 2024-06-13 10:40:32 --> 404 Page Not Found: Resources/css
ERROR - 2024-06-13 10:40:32 --> 404 Page Not Found: Views/commData
ERROR - 2024-06-13 10:40:33 --> 404 Page Not Found: Forerest/user
ERROR - 2024-06-13 10:40:34 --> 404 Page Not Found: Public/home
ERROR - 2024-06-13 10:40:34 --> 404 Page Not Found: Public/home
ERROR - 2024-06-13 10:40:35 --> 404 Page Not Found: Index/index
ERROR - 2024-06-13 10:40:36 --> 404 Page Not Found: Index/police
ERROR - 2024-06-13 10:40:36 --> 404 Page Not Found: Static/home
ERROR - 2024-06-13 10:40:39 --> 404 Page Not Found: Static/local
ERROR - 2024-06-13 10:40:39 --> 404 Page Not Found: Site/api
ERROR - 2024-06-13 10:40:40 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:40:42 --> 404 Page Not Found: Api/v
ERROR - 2024-06-13 10:40:43 --> 404 Page Not Found: GetConfig/listPopFrame.do
ERROR - 2024-06-13 10:40:46 --> 404 Page Not Found: Api/index
ERROR - 2024-06-13 10:40:46 --> 404 Page Not Found: M/index
ERROR - 2024-06-13 10:40:47 --> 404 Page Not Found: H5/index
ERROR - 2024-06-13 10:40:47 --> 404 Page Not Found: H5/index
ERROR - 2024-06-13 10:40:47 --> 404 Page Not Found: App/index
ERROR - 2024-06-13 10:40:47 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:40:47 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:40:48 --> 404 Page Not Found: 999/index
ERROR - 2024-06-13 10:40:48 --> 404 Page Not Found: Live/index
ERROR - 2024-06-13 10:40:49 --> 404 Page Not Found: Admin/index
ERROR - 2024-06-13 10:40:49 --> 404 Page Not Found: Wap/index
ERROR - 2024-06-13 10:40:50 --> 404 Page Not Found: Imei/index
ERROR - 2024-06-13 10:40:50 --> 404 Page Not Found: Mobile/index
ERROR - 2024-06-13 10:40:50 --> 404 Page Not Found: Config/index
ERROR - 2024-06-13 10:40:50 --> 404 Page Not Found: Homes/index
ERROR - 2024-06-13 10:40:50 --> 404 Page Not Found: Mhtml/index
ERROR - 2024-06-13 10:40:50 --> 404 Page Not Found: Im/h5
ERROR - 2024-06-13 10:40:50 --> 404 Page Not Found: 1html/index
ERROR - 2024-06-13 10:40:50 --> 404 Page Not Found: Mobile/index
ERROR - 2024-06-13 10:40:50 --> 404 Page Not Found: Sitejs/index
ERROR - 2024-06-13 10:40:50 --> 404 Page Not Found: Pchtml/index
ERROR - 2024-06-13 10:40:51 --> 404 Page Not Found: Langjs/index
ERROR - 2024-06-13 10:40:51 --> 404 Page Not Found: Eidsjs/index
ERROR - 2024-06-13 10:40:51 --> 404 Page Not Found: Api/c
ERROR - 2024-06-13 10:40:51 --> 404 Page Not Found: Z03html/index
ERROR - 2024-06-13 10:40:51 --> 404 Page Not Found: Ddoo_im/index
ERROR - 2024-06-13 10:40:51 --> 404 Page Not Found: M/index
ERROR - 2024-06-13 10:40:51 --> 404 Page Not Found: Step1asp/index
ERROR - 2024-06-13 10:40:51 --> 404 Page Not Found: Lanren/css
ERROR - 2024-06-13 10:40:51 --> 404 Page Not Found: Home/help
ERROR - 2024-06-13 10:40:51 --> 404 Page Not Found: Css/m.css
ERROR - 2024-06-13 10:40:52 --> 404 Page Not Found: Stylecss/index
ERROR - 2024-06-13 10:40:52 --> 404 Page Not Found: Js/home.js
ERROR - 2024-06-13 10:40:52 --> 404 Page Not Found: App/index
ERROR - 2024-06-13 10:40:52 --> 404 Page Not Found: GetLocale/index
ERROR - 2024-06-13 10:40:52 --> 404 Page Not Found: Index/aurl
ERROR - 2024-06-13 10:40:52 --> 404 Page Not Found: Api/notice
ERROR - 2024-06-13 10:40:52 --> 404 Page Not Found: Jiaoyimao/index
ERROR - 2024-06-13 10:40:52 --> 404 Page Not Found: Pro/qb365
ERROR - 2024-06-13 10:40:52 --> 404 Page Not Found: Index/init
ERROR - 2024-06-13 10:40:52 --> 404 Page Not Found: Optionpng/index
ERROR - 2024-06-13 10:40:52 --> 404 Page Not Found: Homehtml/index
ERROR - 2024-06-13 10:40:52 --> 404 Page Not Found: Api/config
ERROR - 2024-06-13 10:40:52 --> 404 Page Not Found: Api/version
ERROR - 2024-06-13 10:40:52 --> 404 Page Not Found: Js/a.script
ERROR - 2024-06-13 10:40:53 --> 404 Page Not Found: Js/post.js
ERROR - 2024-06-13 10:40:53 --> 404 Page Not Found: Mindexhtml/index
ERROR - 2024-06-13 10:40:53 --> 404 Page Not Found: Versionjson/index
ERROR - 2024-06-13 10:40:53 --> 404 Page Not Found: My/zijin.png
ERROR - 2024-06-13 10:40:53 --> 404 Page Not Found: Css/main.css
ERROR - 2024-06-13 10:40:53 --> 404 Page Not Found: M/allticker
ERROR - 2024-06-13 10:40:53 --> 404 Page Not Found: FePublicInfo/index
ERROR - 2024-06-13 10:40:53 --> 404 Page Not Found: Nyyh/game.css
ERROR - 2024-06-13 10:40:53 --> 404 Page Not Found: Img/xxing.png
ERROR - 2024-06-13 10:40:53 --> 404 Page Not Found: H52taobao/index
ERROR - 2024-06-13 10:40:54 --> 404 Page Not Found: 3/favicon.ico
ERROR - 2024-06-13 10:40:54 --> 404 Page Not Found: Api/v1
ERROR - 2024-06-13 10:40:54 --> 404 Page Not Found: Img/style.css
ERROR - 2024-06-13 10:40:54 --> 404 Page Not Found: Download/info
ERROR - 2024-06-13 10:40:54 --> 404 Page Not Found: ThriveGamecss/index
ERROR - 2024-06-13 10:40:54 --> 404 Page Not Found: Sign/index
ERROR - 2024-06-13 10:40:54 --> 404 Page Not Found: Setting/global
ERROR - 2024-06-13 10:40:55 --> 404 Page Not Found: Home/login.jpg
ERROR - 2024-06-13 10:40:55 --> 404 Page Not Found: App/js
ERROR - 2024-06-13 10:40:55 --> 404 Page Not Found: Api/shop
ERROR - 2024-06-13 10:40:55 --> 404 Page Not Found: Api/apps
ERROR - 2024-06-13 10:40:55 --> 404 Page Not Found: Css/scanner.css
ERROR - 2024-06-13 10:40:55 --> 404 Page Not Found: Js/nsc
ERROR - 2024-06-13 10:40:55 --> 404 Page Not Found: Api/app
ERROR - 2024-06-13 10:40:55 --> 404 Page Not Found: Bannerdo/index
ERROR - 2024-06-13 10:40:55 --> 404 Page Not Found: Verificationasp/index
ERROR - 2024-06-13 10:40:55 --> 404 Page Not Found: V6/getAppContent
ERROR - 2024-06-13 10:40:55 --> 404 Page Not Found: Files/pub_rem.js
ERROR - 2024-06-13 10:40:55 --> 404 Page Not Found: FriendGroup/list
ERROR - 2024-06-13 10:40:55 --> 404 Page Not Found: Api/Event
ERROR - 2024-06-13 10:40:56 --> 404 Page Not Found: Home/Bind
ERROR - 2024-06-13 10:40:56 --> 404 Page Not Found: Res/font
ERROR - 2024-06-13 10:40:56 --> 404 Page Not Found: Public/initJs.php
ERROR - 2024-06-13 10:40:56 --> 404 Page Not Found: Skin/js
ERROR - 2024-06-13 10:40:56 --> 404 Page Not Found: Css/nsc
ERROR - 2024-06-13 10:40:56 --> 404 Page Not Found: Home/Get
ERROR - 2024-06-13 10:40:56 --> 404 Page Not Found: Mytio/config
ERROR - 2024-06-13 10:40:56 --> 404 Page Not Found: Api/app
ERROR - 2024-06-13 10:40:57 --> 404 Page Not Found: 123/ok
ERROR - 2024-06-13 10:40:57 --> 404 Page Not Found: Mobile/index
ERROR - 2024-06-13 10:40:57 --> 404 Page Not Found: Api/common
ERROR - 2024-06-13 10:40:57 --> 404 Page Not Found: Mall/toget
ERROR - 2024-06-13 10:40:57 --> 404 Page Not Found: Api/v1
ERROR - 2024-06-13 10:40:57 --> 404 Page Not Found: JS/loginstatus.js
ERROR - 2024-06-13 10:40:57 --> 404 Page Not Found: Manager/js
ERROR - 2024-06-13 10:40:57 --> 404 Page Not Found: Public/img
ERROR - 2024-06-13 10:40:57 --> 404 Page Not Found: Api/uploads
ERROR - 2024-06-13 10:40:57 --> 404 Page Not Found: Scripts/common.js
ERROR - 2024-06-13 10:40:57 --> 404 Page Not Found: Home/GetInitSource
ERROR - 2024-06-13 10:40:58 --> 404 Page Not Found: Static/guide
ERROR - 2024-06-13 10:40:58 --> 404 Page Not Found: Api/message
ERROR - 2024-06-13 10:40:58 --> 404 Page Not Found: Content/favicon.ico
ERROR - 2024-06-13 10:40:58 --> 404 Page Not Found: Mobile/lottery
ERROR - 2024-06-13 10:40:58 --> 404 Page Not Found: Public/js
ERROR - 2024-06-13 10:40:58 --> 404 Page Not Found: Static/js
ERROR - 2024-06-13 10:40:58 --> 404 Page Not Found: Api/index
ERROR - 2024-06-13 10:40:58 --> 404 Page Not Found: Index_files/conf.js
ERROR - 2024-06-13 10:40:58 --> 404 Page Not Found: Xy/image
ERROR - 2024-06-13 10:40:58 --> 404 Page Not Found: Public/css
ERROR - 2024-06-13 10:40:58 --> 404 Page Not Found: Public/css
ERROR - 2024-06-13 10:40:58 --> 404 Page Not Found: Static/css
ERROR - 2024-06-13 10:40:59 --> 404 Page Not Found: Kmasmx/getPlatParam
ERROR - 2024-06-13 10:40:59 --> 404 Page Not Found: Api/shares
ERROR - 2024-06-13 10:40:59 --> 404 Page Not Found: Static/css
ERROR - 2024-06-13 10:40:59 --> 404 Page Not Found: Other/getTopQuestion
ERROR - 2024-06-13 10:40:59 --> 404 Page Not Found: Static/diff_worker.js
ERROR - 2024-06-13 10:40:59 --> 404 Page Not Found: Data/json
ERROR - 2024-06-13 10:40:59 --> 404 Page Not Found: Static/css
ERROR - 2024-06-13 10:40:59 --> 404 Page Not Found: Public/Home
ERROR - 2024-06-13 10:40:59 --> 404 Page Not Found: Api/user
ERROR - 2024-06-13 10:40:59 --> 404 Page Not Found: Api/user
ERROR - 2024-06-13 10:40:59 --> 404 Page Not Found: Api/user
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Static/css
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Cx_platform/conf.json
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Iexchange/webtrader
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Aktv/img
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Static/images
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Member/js
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Public/Wchat
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Index_files/bankCheck.js
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: H5/static
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Resources/main
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Assets/app-manifest.json
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Phone/images
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Static/new
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Static/voice
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Static/js
ERROR - 2024-06-13 10:41:00 --> 404 Page Not Found: Dist/azzara
ERROR - 2024-06-13 10:41:01 --> 404 Page Not Found: S_api/basic
ERROR - 2024-06-13 10:41:01 --> 404 Page Not Found: Api/Config
ERROR - 2024-06-13 10:41:01 --> 404 Page Not Found: Public/home
ERROR - 2024-06-13 10:41:01 --> 404 Page Not Found: Mobile/film
ERROR - 2024-06-13 10:41:01 --> 404 Page Not Found: Content/css
ERROR - 2024-06-13 10:41:01 --> 404 Page Not Found: Static/home
ERROR - 2024-06-13 10:41:01 --> 404 Page Not Found: Saconfig/secure
ERROR - 2024-06-13 10:41:01 --> 404 Page Not Found: Static/wap
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Template/920ka
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Static/common
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Template/Mobile
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Api/currency
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Public/h5static
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Pages/console
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Public/mobile
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Portal/index
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Static/wap
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Front/index
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Api/predict-whole-panel.do
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Templates/user
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Resources/css
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Static/admincp
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Static/data
ERROR - 2024-06-13 10:41:02 --> 404 Page Not Found: Wap/Api
ERROR - 2024-06-13 10:41:03 --> 404 Page Not Found: Market/market-ws
ERROR - 2024-06-13 10:41:03 --> 404 Page Not Found: Content/m_1
ERROR - 2024-06-13 10:41:03 --> 404 Page Not Found: Views/commData
ERROR - 2024-06-13 10:41:03 --> 404 Page Not Found: Common/member
ERROR - 2024-06-13 10:41:03 --> 404 Page Not Found: Melody/api
ERROR - 2024-06-13 10:41:03 --> 404 Page Not Found: Mobile/v3
ERROR - 2024-06-13 10:41:03 --> 404 Page Not Found: Template/mb
ERROR - 2024-06-13 10:41:03 --> 404 Page Not Found: Forerest/user
ERROR - 2024-06-13 10:41:04 --> 404 Page Not Found: Ws/index
ERROR - 2024-06-13 10:41:04 --> 404 Page Not Found: MasterControl/getSystemSetting
ERROR - 2024-06-13 10:41:04 --> 404 Page Not Found: Lottery/rotate
ERROR - 2024-06-13 10:41:04 --> 404 Page Not Found: Index/index
ERROR - 2024-06-13 10:41:04 --> 404 Page Not Found: Api/appVersion
ERROR - 2024-06-13 10:41:04 --> 404 Page Not Found: GetConfig/getArticle.do
ERROR - 2024-06-13 10:41:04 --> 404 Page Not Found: Wap/static
ERROR - 2024-06-13 10:41:04 --> 404 Page Not Found: A/other
ERROR - 2024-06-13 10:41:04 --> 404 Page Not Found: Api/public
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Api/exclude
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Admin/webadmin.php
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Client/static
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Static/home
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Bet/lotteryinfo
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Public/static
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Source/20220119
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Api/stock
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Static/img
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Public/Home
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Common/template
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Clientapi/app
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Static/local
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Public/Mobile
ERROR - 2024-06-13 10:41:05 --> 404 Page Not Found: Client/api
ERROR - 2024-06-13 10:41:06 --> 404 Page Not Found: Site/api
ERROR - 2024-06-13 10:41:06 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:41:08 --> 404 Page Not Found: Content/Wap
ERROR - 2024-06-13 10:41:08 --> 404 Page Not Found: LeftDaophp/index
ERROR - 2024-06-13 10:41:08 --> 404 Page Not Found: GetConfig/listPopFrame.do
ERROR - 2024-06-13 10:41:08 --> 404 Page Not Found: GetConfig/listPopFrame.do
ERROR - 2024-06-13 10:41:08 --> 404 Page Not Found: Public/static
ERROR - 2024-06-13 10:41:08 --> 404 Page Not Found: Pay_Indexhtml/index
ERROR - 2024-06-13 10:41:08 --> 404 Page Not Found: Api/v
ERROR - 2024-06-13 10:41:09 --> 404 Page Not Found: User/reg.php
ERROR - 2024-06-13 10:41:09 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:41:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 10:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:49:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 10:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:49:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 10:53:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 10:55:04 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:55:40 --> Could not find the language line "Bracelets"
ERROR - 2024-06-13 10:55:58 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:56:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 10:56:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 10:56:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 10:56:26 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 10:56:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 10:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:56:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 10:56:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 10:56:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 10:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 10:56:44 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 10:57:15 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:57:22 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 10:57:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 10:58:31 --> Could not find the language line "Home"
ERROR - 2024-06-13 10:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 11:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 11:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 11:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 11:00:42 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-13 11:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 11:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 11:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 11:01:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 11:04:12 --> Could not find the language line "Home"
ERROR - 2024-06-13 11:04:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 11:11:06 --> Could not find the language line "Home"
ERROR - 2024-06-13 11:13:52 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-13 11:18:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 11:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 11:21:49 --> Could not find the language line "Home"
ERROR - 2024-06-13 11:23:42 --> Could not find the language line "Home"
ERROR - 2024-06-13 11:26:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 11:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 11:34:12 --> Could not find the language line "Home"
ERROR - 2024-06-13 11:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 11:40:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 11:49:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 11:49:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 11:52:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 11:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 11:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:03:05 --> Could not find the language line "Home"
ERROR - 2024-06-13 12:04:13 --> Could not find the language line "Home"
ERROR - 2024-06-13 12:06:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 12:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:07:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 12:07:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 12:17:03 --> Could not find the language line "Home"
ERROR - 2024-06-13 12:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:17:18 --> Could not find the language line "Home"
ERROR - 2024-06-13 12:17:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 12:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:19:02 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-13 12:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:19:07 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-13 12:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:19:30 --> Could not find the language line "Home"
ERROR - 2024-06-13 12:23:34 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 12:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:31:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 12:33:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 12:33:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 12:34:14 --> Could not find the language line "Home"
ERROR - 2024-06-13 12:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:41:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 12:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:45:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 12:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:53:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-13 12:53:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 12:53:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-13 12:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 12:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:01:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 13:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:04:15 --> Could not find the language line "Home"
ERROR - 2024-06-13 13:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:24:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 13:24:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 13:27:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 13:29:28 --> Could not find the language line "users"
ERROR - 2024-06-13 13:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:34:14 --> Could not find the language line "Home"
ERROR - 2024-06-13 13:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 13:42:42 --> Could not find the language line "accounts"
ERROR - 2024-06-13 13:42:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-13 13:42:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Footwear')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-13 13:42:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-13 13:42:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-13 13:42:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Footwear')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-13 13:42:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-13 13:43:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 13:45:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 13:53:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 13:57:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 13:58:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 14:04:13 --> Could not find the language line "Home"
ERROR - 2024-06-13 14:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:15:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 14:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:31:20 --> Could not find the language line "Home"
ERROR - 2024-06-13 14:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:34:13 --> Could not find the language line "Home"
ERROR - 2024-06-13 14:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:41:58 --> Could not find the language line "Other"
ERROR - 2024-06-13 14:44:06 --> Could not find the language line "Socks"
ERROR - 2024-06-13 14:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:53:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-13 14:53:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 14:53:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-13 14:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 14:59:27 --> Could not find the language line "products"
ERROR - 2024-06-13 15:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 15:04:15 --> Could not find the language line "Home"
ERROR - 2024-06-13 15:07:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 15:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 15:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 15:16:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 15:17:17 --> Could not find the language line "Home"
ERROR - 2024-06-13 15:17:23 --> Could not find the language line "Home"
ERROR - 2024-06-13 15:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 15:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 15:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 15:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 15:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 15:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 15:33:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 15:33:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 15:33:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 15:33:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 15:34:16 --> Could not find the language line "Home"
ERROR - 2024-06-13 15:35:18 --> Could not find the language line "Home"
ERROR - 2024-06-13 15:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 15:41:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-13 15:41:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 15:45:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 15:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 15:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 15:48:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 15:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 15:50:59 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-13 15:52:24 --> Could not find the language line "Home"
ERROR - 2024-06-13 15:55:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 15:55:49 --> Could not find the language line "Home"
ERROR - 2024-06-13 16:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 16:04:15 --> Could not find the language line "Home"
ERROR - 2024-06-13 16:05:26 --> Could not find the language line "Home"
ERROR - 2024-06-13 16:05:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 16:06:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 16:16:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 16:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 16:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 16:29:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 16:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 16:30:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 16:31:06 --> Could not find the language line "Home"
ERROR - 2024-06-13 16:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 16:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 16:34:16 --> Could not find the language line "Home"
ERROR - 2024-06-13 16:34:36 --> Could not find the language line "Home"
ERROR - 2024-06-13 16:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 16:38:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 16:39:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 16:42:38 --> Could not find the language line "Home"
ERROR - 2024-06-13 16:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 16:47:14 --> Could not find the language line "Home"
ERROR - 2024-06-13 16:49:06 --> Could not find the language line "Perfume"
ERROR - 2024-06-13 16:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 16:51:39 --> Could not find the language line "Home"
ERROR - 2024-06-13 16:52:28 --> Could not find the language line "Other"
ERROR - 2024-06-13 16:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 16:55:41 --> Could not find the language line "Home"
ERROR - 2024-06-13 16:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 17:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 17:04:18 --> Could not find the language line "Home"
ERROR - 2024-06-13 17:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 17:06:32 --> Could not find the language line "Home"
ERROR - 2024-06-13 17:09:59 --> Could not find the language line "Other"
ERROR - 2024-06-13 17:10:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 17:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 17:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 17:10:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 17:10:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 17:10:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 17:10:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 17:12:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 17:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 17:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 17:30:01 --> Could not find the language line "Other"
ERROR - 2024-06-13 17:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 17:34:16 --> Could not find the language line "Home"
ERROR - 2024-06-13 17:34:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-13 17:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 17:41:55 --> Could not find the language line "Home"
ERROR - 2024-06-13 17:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 17:42:49 --> Could not find the language line "Home"
ERROR - 2024-06-13 17:44:00 --> Could not find the language line "Home"
ERROR - 2024-06-13 17:44:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 17:44:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 17:44:40 --> Could not find the language line "Home"
ERROR - 2024-06-13 17:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 17:46:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 17:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 17:54:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 17:54:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 17:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 17:58:04 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 17:58:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 17:59:00 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-13 18:02:05 --> Could not find the language line "Other"
ERROR - 2024-06-13 18:02:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 18:04:17 --> Could not find the language line "Home"
ERROR - 2024-06-13 18:06:00 --> Could not find the language line "Home"
ERROR - 2024-06-13 18:06:07 --> Could not find the language line "Socks"
ERROR - 2024-06-13 18:06:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 18:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 18:10:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 18:10:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 18:14:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 18:16:37 --> Could not find the language line "Socks"
ERROR - 2024-06-13 18:18:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-13 18:18:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 18:18:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-13 18:22:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 18:25:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 18:26:12 --> Could not find the language line "Home"
ERROR - 2024-06-13 18:26:46 --> Could not find the language line "Home"
ERROR - 2024-06-13 18:34:17 --> Could not find the language line "Home"
ERROR - 2024-06-13 18:46:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 18:46:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 18:48:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 18:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 18:52:54 --> Could not find the language line "Home"
ERROR - 2024-06-13 18:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 18:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 18:54:52 --> Could not find the language line "Home"
ERROR - 2024-06-13 18:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 19:04:18 --> Could not find the language line "Home"
ERROR - 2024-06-13 19:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 19:09:55 --> Could not find the language line "Home"
ERROR - 2024-06-13 19:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 19:11:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 19:13:59 --> Could not find the language line "Home"
ERROR - 2024-06-13 19:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 19:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 19:17:11 --> Could not find the language line "Home"
ERROR - 2024-06-13 19:18:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 19:18:38 --> Could not find the language line "Home"
ERROR - 2024-06-13 19:28:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-13 19:30:14 --> Could not find the language line "Other"
ERROR - 2024-06-13 19:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 19:30:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 19:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 19:34:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 19:34:19 --> Could not find the language line "Home"
ERROR - 2024-06-13 19:39:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 19:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 19:50:08 --> Could not find the language line "Home"
ERROR - 2024-06-13 19:50:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 19:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 19:50:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 19:52:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 19:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 19:54:40 --> Could not find the language line "Home"
ERROR - 2024-06-13 19:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 20:00:29 --> Could not find the language line "Home"
ERROR - 2024-06-13 20:00:44 --> Could not find the language line "Home"
ERROR - 2024-06-13 20:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 20:02:49 --> Could not find the language line "Home"
ERROR - 2024-06-13 20:03:41 --> Could not find the language line "Home"
ERROR - 2024-06-13 20:04:20 --> Could not find the language line "Home"
ERROR - 2024-06-13 20:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 20:06:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 20:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 20:16:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 20:17:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-13 20:17:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-13 20:17:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-13 20:19:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 20:23:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 20:23:08 --> Could not find the language line "Home"
ERROR - 2024-06-13 20:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 20:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 20:32:49 --> Could not find the language line "Home"
ERROR - 2024-06-13 20:34:19 --> Could not find the language line "Home"
ERROR - 2024-06-13 20:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 20:34:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 20:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 20:37:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 20:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 20:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 20:44:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 20:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 20:50:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 20:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 20:54:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 20:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 21:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 21:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 21:04:20 --> Could not find the language line "Home"
ERROR - 2024-06-13 21:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 21:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 21:23:42 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-13 21:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 21:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 21:28:54 --> Could not find the language line "Home"
ERROR - 2024-06-13 21:31:46 --> Could not find the language line "products"
ERROR - 2024-06-13 21:34:22 --> Could not find the language line "Home"
ERROR - 2024-06-13 21:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 21:35:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 21:37:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 21:37:12 --> Could not find the language line "Bracelets"
ERROR - 2024-06-13 21:37:12 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-13 21:37:13 --> Could not find the language line "Perfume"
ERROR - 2024-06-13 21:37:13 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 21:37:14 --> Could not find the language line "Other"
ERROR - 2024-06-13 21:37:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 21:42:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 21:42:28 --> Could not find the language line "Home"
ERROR - 2024-06-13 21:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 21:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 21:44:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 21:59:55 --> Could not find the language line "Other"
ERROR - 2024-06-13 22:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 22:03:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 22:04:20 --> Could not find the language line "Home"
ERROR - 2024-06-13 22:04:46 --> Could not find the language line "Home"
ERROR - 2024-06-13 22:07:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 22:12:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 22:12:40 --> Could not find the language line "Home"
ERROR - 2024-06-13 22:12:55 --> Could not find the language line "Home"
ERROR - 2024-06-13 22:13:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 22:13:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 22:13:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 22:13:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 22:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 22:13:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 22:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 22:25:11 --> Could not find the language line "Home"
ERROR - 2024-06-13 22:28:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-13 22:28:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 22:29:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 22:29:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-13 22:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 22:31:11 --> Could not find the language line "Home"
ERROR - 2024-06-13 22:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 22:34:21 --> Could not find the language line "Home"
ERROR - 2024-06-13 22:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 22:46:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 22:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 22:49:08 --> Could not find the language line "Home"
ERROR - 2024-06-13 22:49:57 --> Could not find the language line "Home"
ERROR - 2024-06-13 22:51:51 --> Could not find the language line "Home"
ERROR - 2024-06-13 22:51:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 22:51:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 22:53:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 22:53:47 --> Could not find the language line "Home"
ERROR - 2024-06-13 22:55:53 --> Could not find the language line "Other"
ERROR - 2024-06-13 22:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 22:59:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-13 23:00:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 23:04:24 --> Could not find the language line "Home"
ERROR - 2024-06-13 23:08:37 --> Could not find the language line "Home"
ERROR - 2024-06-13 23:11:45 --> Could not find the language line "Home"
ERROR - 2024-06-13 23:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 23:13:55 --> Could not find the language line "Home"
ERROR - 2024-06-13 23:14:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 23:15:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 23:27:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-13 23:27:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 23:31:33 --> Could not find the language line "Home"
ERROR - 2024-06-13 23:31:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 23:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-13 23:34:24 --> Could not find the language line "Home"
ERROR - 2024-06-13 23:41:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 23:41:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-13 23:43:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 23:47:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 23:50:28 --> Could not find the language line "Home"
ERROR - 2024-06-13 23:52:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 23:56:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-13 23:58:17 --> Could not find the language line "Home"
