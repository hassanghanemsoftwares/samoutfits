<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-27 00:01:23 --> Could not find the language line "Home"
ERROR - 2025-03-27 00:01:29 --> Could not find the language line "Home"
ERROR - 2025-03-27 00:01:34 --> Could not find the language line "Home"
ERROR - 2025-03-27 00:01:35 --> Could not find the language line "Home"
ERROR - 2025-03-27 00:11:25 --> Could not find the language line "Home"
ERROR - 2025-03-27 00:13:56 --> Could not find the language line "Home"
ERROR - 2025-03-27 00:14:07 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 00:15:38 --> 404 Page Not Found: Adminfunsphp/index
ERROR - 2025-03-27 00:15:48 --> 404 Page Not Found: Siteheadsphp/index
ERROR - 2025-03-27 00:15:58 --> 404 Page Not Found: Wp-content/siteheads.php
ERROR - 2025-03-27 00:16:05 --> 404 Page Not Found: Tempfunsphp/index
ERROR - 2025-03-27 00:16:12 --> 404 Page Not Found: Thomsphp/index
ERROR - 2025-03-27 00:16:19 --> 404 Page Not Found: Classfunsphp/index
ERROR - 2025-03-27 00:16:28 --> 404 Page Not Found: Userfunsphp/index
ERROR - 2025-03-27 00:16:40 --> 404 Page Not Found: Wp-content/hplfuns.php
ERROR - 2025-03-27 00:17:00 --> 404 Page Not Found: Wp-content/termps.php
ERROR - 2025-03-27 00:17:14 --> 404 Page Not Found: Termpsphp/index
ERROR - 2025-03-27 00:17:18 --> 404 Page Not Found: Inputsphp/index
ERROR - 2025-03-27 00:17:32 --> 404 Page Not Found: Connectsphp/index
ERROR - 2025-03-27 00:17:40 --> 404 Page Not Found: Hplfunsphp/index
ERROR - 2025-03-27 00:18:06 --> 404 Page Not Found: Filefunsphp/index
ERROR - 2025-03-27 00:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 00:18:42 --> 404 Page Not Found: Adminfunsphp/index
ERROR - 2025-03-27 00:18:45 --> 404 Page Not Found: Siteheadsphp/index
ERROR - 2025-03-27 00:18:51 --> 404 Page Not Found: Wp-content/siteheads.php
ERROR - 2025-03-27 00:18:55 --> 404 Page Not Found: Tempfunsphp/index
ERROR - 2025-03-27 00:18:58 --> 404 Page Not Found: Thomsphp/index
ERROR - 2025-03-27 00:19:12 --> Could not find the language line "Other"
ERROR - 2025-03-27 00:19:12 --> 404 Page Not Found: Classfunsphp/index
ERROR - 2025-03-27 00:19:31 --> 404 Page Not Found: Userfunsphp/index
ERROR - 2025-03-27 00:19:39 --> 404 Page Not Found: Wp-content/hplfuns.php
ERROR - 2025-03-27 00:19:41 --> 404 Page Not Found: Wp-content/termps.php
ERROR - 2025-03-27 00:19:45 --> 404 Page Not Found: Termpsphp/index
ERROR - 2025-03-27 00:19:50 --> 404 Page Not Found: Inputsphp/index
ERROR - 2025-03-27 00:19:54 --> 404 Page Not Found: Connectsphp/index
ERROR - 2025-03-27 00:19:59 --> 404 Page Not Found: Hplfunsphp/index
ERROR - 2025-03-27 00:20:06 --> 404 Page Not Found: Filefunsphp/index
ERROR - 2025-03-27 00:24:00 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-27 00:24:00 --> Could not find the language line "Home"
ERROR - 2025-03-27 00:24:00 --> Could not find the language line "Home"
ERROR - 2025-03-27 00:36:40 --> Could not find the language line "Other"
ERROR - 2025-03-27 00:40:04 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 00:40:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 00:43:52 --> Could not find the language line "Home"
ERROR - 2025-03-27 00:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 00:54:53 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-03-27 00:55:58 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 00:57:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 01:06:08 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 01:08:30 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-27 01:12:53 --> Could not find the language line "Home"
ERROR - 2025-03-27 01:12:56 --> Could not find the language line "Other"
ERROR - 2025-03-27 01:14:00 --> Could not find the language line "Home"
ERROR - 2025-03-27 01:44:08 --> Could not find the language line "Home"
ERROR - 2025-03-27 01:45:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 01:45:45 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 01:46:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-27 01:48:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 01:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 01:56:41 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-27 01:56:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 01:57:05 --> Could not find the language line "Home"
ERROR - 2025-03-27 02:03:25 --> Could not find the language line "Home"
ERROR - 2025-03-27 02:09:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 02:10:41 --> Could not find the language line "Home"
ERROR - 2025-03-27 02:13:55 --> Could not find the language line "Home"
ERROR - 2025-03-27 02:14:16 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-27 02:14:17 --> Could not find the language line "Home"
ERROR - 2025-03-27 02:14:17 --> Could not find the language line "Home"
ERROR - 2025-03-27 02:14:39 --> Could not find the language line "Home"
ERROR - 2025-03-27 02:25:11 --> Could not find the language line "Home"
ERROR - 2025-03-27 02:37:02 --> Could not find the language line "Home"
ERROR - 2025-03-27 02:43:56 --> Could not find the language line "Home"
ERROR - 2025-03-27 02:57:50 --> Could not find the language line "Home"
ERROR - 2025-03-27 02:59:09 --> Could not find the language line "Home"
ERROR - 2025-03-27 03:00:06 --> 404 Page Not Found: Wp-admin/index
ERROR - 2025-03-27 03:00:06 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2025-03-27 03:00:07 --> 404 Page Not Found: Admin/index
ERROR - 2025-03-27 03:00:07 --> 404 Page Not Found: User/login
ERROR - 2025-03-27 03:00:08 --> 404 Page Not Found: Login/index
ERROR - 2025-03-27 03:00:08 --> 404 Page Not Found: Dashboard/index
ERROR - 2025-03-27 03:00:09 --> 404 Page Not Found: Cms/index
ERROR - 2025-03-27 03:00:10 --> 404 Page Not Found: Panel/index
ERROR - 2025-03-27 03:00:10 --> 404 Page Not Found: Backend/index
ERROR - 2025-03-27 03:12:01 --> Could not find the language line "Home"
ERROR - 2025-03-27 03:14:00 --> Could not find the language line "Home"
ERROR - 2025-03-27 03:15:05 --> Could not find the language line "Home"
ERROR - 2025-03-27 03:15:15 --> Could not find the language line "Home"
ERROR - 2025-03-27 03:17:11 --> Could not find the language line "Home"
ERROR - 2025-03-27 03:24:37 --> Could not find the language line "Home"
ERROR - 2025-03-27 03:33:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-27 03:35:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 03:37:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-27 03:42:00 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 03:43:55 --> Could not find the language line "Home"
ERROR - 2025-03-27 03:47:37 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-03-27 03:57:01 --> Could not find the language line "Home"
ERROR - 2025-03-27 03:58:52 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 03:59:02 --> Could not find the language line "Home"
ERROR - 2025-03-27 04:06:11 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 04:12:37 --> Could not find the language line "Home"
ERROR - 2025-03-27 04:13:52 --> Could not find the language line "Home"
ERROR - 2025-03-27 04:38:15 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-27 04:43:56 --> Could not find the language line "Home"
ERROR - 2025-03-27 04:45:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 04:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-27 05:12:51 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-27 05:13:57 --> Could not find the language line "Home"
ERROR - 2025-03-27 05:20:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 05:27:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 05:29:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 05:31:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 05:43:54 --> Could not find the language line "Home"
ERROR - 2025-03-27 06:03:59 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-27 06:12:17 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-27 06:12:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 06:13:55 --> Could not find the language line "Home"
ERROR - 2025-03-27 06:17:56 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-27 06:17:57 --> Could not find the language line "Home"
ERROR - 2025-03-27 06:17:57 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-27 06:17:57 --> 404 Page Not Found: Bc/index
ERROR - 2025-03-27 06:17:57 --> 404 Page Not Found: Bk/index
ERROR - 2025-03-27 06:17:57 --> 404 Page Not Found: Backup/index
ERROR - 2025-03-27 06:17:57 --> 404 Page Not Found: New/index
ERROR - 2025-03-27 06:17:57 --> 404 Page Not Found: Main/index
ERROR - 2025-03-27 06:17:58 --> Could not find the language line "Home"
ERROR - 2025-03-27 06:32:44 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-27 06:43:55 --> Could not find the language line "Home"
ERROR - 2025-03-27 06:45:53 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-03-27 06:50:01 --> Could not find the language line "Other"
ERROR - 2025-03-27 06:51:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 06:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 06:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 06:56:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 06:57:15 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-03-27 07:01:16 --> Could not find the language line "Home"
ERROR - 2025-03-27 07:03:21 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 07:11:17 --> Could not find the language line "Home"
ERROR - 2025-03-27 07:13:54 --> Could not find the language line "Home"
ERROR - 2025-03-27 07:18:37 --> Could not find the language line "Other"
ERROR - 2025-03-27 07:31:20 --> Could not find the language line "Home"
ERROR - 2025-03-27 07:38:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 07:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 07:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 07:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 07:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 07:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 07:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 07:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 07:41:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-27 07:43:56 --> Could not find the language line "Home"
ERROR - 2025-03-27 07:47:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 08:09:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-27 08:09:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-27 08:09:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-27 08:10:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-27 08:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 08:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 08:13:54 --> Could not find the language line "Home"
ERROR - 2025-03-27 08:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 08:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 08:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 08:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 08:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 08:30:58 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-27 08:34:57 --> Could not find the language line "Other"
ERROR - 2025-03-27 08:37:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 08:37:40 --> Could not find the language line "Home"
ERROR - 2025-03-27 08:43:55 --> Could not find the language line "Home"
ERROR - 2025-03-27 08:44:49 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-27 08:45:39 --> Could not find the language line "Home"
ERROR - 2025-03-27 08:45:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 08:45:46 --> Could not find the language line "Socks"
ERROR - 2025-03-27 08:50:12 --> Could not find the language line "Home"
ERROR - 2025-03-27 08:54:15 --> Could not find the language line "Other"
ERROR - 2025-03-27 09:02:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 09:03:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 09:08:02 --> Could not find the language line "Home"
ERROR - 2025-03-27 09:11:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 09:13:54 --> Could not find the language line "Home"
ERROR - 2025-03-27 09:18:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 09:19:26 --> Could not find the language line "Other"
ERROR - 2025-03-27 09:25:55 --> Could not find the language line "Home"
ERROR - 2025-03-27 09:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 09:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 09:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 09:30:19 --> Could not find the language line "Home"
ERROR - 2025-03-27 09:31:20 --> Could not find the language line "Home"
ERROR - 2025-03-27 09:33:41 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-27 09:37:16 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-27 09:37:23 --> Could not find the language line "Home"
ERROR - 2025-03-27 09:37:52 --> Could not find the language line "Home"
ERROR - 2025-03-27 09:41:19 --> Could not find the language line "Home"
ERROR - 2025-03-27 09:43:56 --> Could not find the language line "Home"
ERROR - 2025-03-27 09:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 09:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 09:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 09:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 09:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 09:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 09:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 09:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 09:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 10:06:34 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-27 10:13:56 --> Could not find the language line "Home"
ERROR - 2025-03-27 10:26:46 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-27 10:26:51 --> Could not find the language line "Home"
ERROR - 2025-03-27 10:31:25 --> Could not find the language line "Home"
ERROR - 2025-03-27 10:33:33 --> Could not find the language line "Home"
ERROR - 2025-03-27 10:38:49 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-03-27 10:39:38 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-27 10:39:38 --> Could not find the language line "Home"
ERROR - 2025-03-27 10:39:38 --> Could not find the language line "Home"
ERROR - 2025-03-27 10:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 10:43:57 --> Could not find the language line "Home"
ERROR - 2025-03-27 10:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 10:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 10:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:05:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 11:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:11:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:13:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 11:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:13:56 --> Could not find the language line "Home"
ERROR - 2025-03-27 11:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:14:06 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-27 11:14:06 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-27 11:14:06 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-27 11:14:06 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-27 11:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:14:06 --> 404 Page Not Found: Assets/img
ERROR - 2025-03-27 11:14:06 --> 404 Page Not Found: Assets/img
ERROR - 2025-03-27 11:14:06 --> 404 Page Not Found: Assets/img
ERROR - 2025-03-27 11:14:06 --> 404 Page Not Found: Assets/img
ERROR - 2025-03-27 11:14:07 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-27 11:14:07 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-27 11:14:07 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-27 11:14:07 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-27 11:14:07 --> 404 Page Not Found: Assets/js
ERROR - 2025-03-27 11:14:07 --> 404 Page Not Found: Assets/js
ERROR - 2025-03-27 11:14:07 --> 404 Page Not Found: Assets/js
ERROR - 2025-03-27 11:14:07 --> 404 Page Not Found: Assets/js
ERROR - 2025-03-27 11:14:07 --> 404 Page Not Found: Assets/js
ERROR - 2025-03-27 11:14:07 --> 404 Page Not Found: Assets/js
ERROR - 2025-03-27 11:14:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 11:14:09 --> 404 Page Not Found: Assets/images
ERROR - 2025-03-27 11:14:10 --> 404 Page Not Found: Assets/img
ERROR - 2025-03-27 11:14:10 --> 404 Page Not Found: Assets/images
ERROR - 2025-03-27 11:14:16 --> 404 Page Not Found: Assets/img
ERROR - 2025-03-27 11:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:17:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-27 11:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 11:18:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 11:25:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-27 11:29:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-27 11:43:56 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-27 11:43:58 --> Could not find the language line "Home"
ERROR - 2025-03-27 11:49:32 --> Could not find the language line "Home"
ERROR - 2025-03-27 12:13:56 --> Could not find the language line "Home"
ERROR - 2025-03-27 12:34:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 12:34:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 12:35:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 12:35:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 12:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 12:35:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 12:35:44 --> Could not find the language line "Home"
ERROR - 2025-03-27 12:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 12:41:21 --> Could not find the language line "Home"
ERROR - 2025-03-27 12:43:57 --> Could not find the language line "Home"
ERROR - 2025-03-27 12:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 12:49:58 --> Could not find the language line "Home"
ERROR - 2025-03-27 12:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 12:54:26 --> Could not find the language line "Home"
ERROR - 2025-03-27 12:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 12:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 12:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 12:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 12:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:09:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 13:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:13:57 --> Could not find the language line "Home"
ERROR - 2025-03-27 13:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:36:54 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-27 13:37:49 --> Could not find the language line "Home"
ERROR - 2025-03-27 13:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 13:43:59 --> Could not find the language line "Home"
ERROR - 2025-03-27 13:50:42 --> Could not find the language line "accounts"
ERROR - 2025-03-27 13:51:33 --> Could not find the language line "Home"
ERROR - 2025-03-27 13:52:53 --> Could not find the language line "Home"
ERROR - 2025-03-27 13:55:48 --> Could not find the language line "Home"
ERROR - 2025-03-27 13:55:54 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 13:56:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 13:56:08 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 13:56:18 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 13:56:29 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 13:56:51 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 13:56:59 --> Could not find the language line "Home"
ERROR - 2025-03-27 13:57:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-27 13:57:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-27 13:57:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-27 13:57:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-27 13:57:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-27 13:57:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-27 13:57:19 --> Could not find the language line "Home"
ERROR - 2025-03-27 14:05:29 --> Could not find the language line "Home"
ERROR - 2025-03-27 14:05:35 --> Could not find the language line "Home"
ERROR - 2025-03-27 14:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:07:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 14:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:13:58 --> Could not find the language line "Home"
ERROR - 2025-03-27 14:18:05 --> Could not find the language line "Home"
ERROR - 2025-03-27 14:18:07 --> Could not find the language line "Home"
ERROR - 2025-03-27 14:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:21:26 --> Could not find the language line "Home"
ERROR - 2025-03-27 14:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:28:04 --> Could not find the language line "Home"
ERROR - 2025-03-27 14:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:34:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 14:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 14:43:58 --> Could not find the language line "Home"
ERROR - 2025-03-27 15:04:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 15:13:58 --> Could not find the language line "Home"
ERROR - 2025-03-27 15:21:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-27 15:33:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 15:38:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 15:43:18 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-27 15:43:18 --> Could not find the language line "Home"
ERROR - 2025-03-27 15:43:18 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-27 15:43:18 --> 404 Page Not Found: Bc/index
ERROR - 2025-03-27 15:43:18 --> 404 Page Not Found: Bk/index
ERROR - 2025-03-27 15:43:18 --> 404 Page Not Found: Backup/index
ERROR - 2025-03-27 15:43:18 --> 404 Page Not Found: New/index
ERROR - 2025-03-27 15:43:18 --> 404 Page Not Found: Main/index
ERROR - 2025-03-27 15:43:18 --> Could not find the language line "Home"
ERROR - 2025-03-27 15:43:58 --> Could not find the language line "Home"
ERROR - 2025-03-27 15:48:36 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-27 15:48:36 --> Could not find the language line "Home"
ERROR - 2025-03-27 15:48:36 --> Could not find the language line "Home"
ERROR - 2025-03-27 15:48:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 15:54:14 --> Could not find the language line "Home"
ERROR - 2025-03-27 15:56:22 --> Could not find the language line "Home"
ERROR - 2025-03-27 15:56:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 15:57:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 16:07:01 --> Could not find the language line "Home"
ERROR - 2025-03-27 16:11:12 --> Could not find the language line "Home"
ERROR - 2025-03-27 16:13:58 --> Could not find the language line "Home"
ERROR - 2025-03-27 16:19:37 --> Could not find the language line "Home"
ERROR - 2025-03-27 16:24:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:25:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:25:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:25:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:26:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:27:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:28:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:30:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:30:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 16:30:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:31:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:32:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:32:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:32:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:32:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:33:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:33:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-27 16:43:59 --> Could not find the language line "Home"
ERROR - 2025-03-27 16:50:58 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-27 16:56:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 16:56:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 16:56:38 --> Could not find the language line "Home"
ERROR - 2025-03-27 16:57:15 --> Could not find the language line "Home"
ERROR - 2025-03-27 16:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 16:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 16:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 16:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 17:00:21 --> Could not find the language line "Home"
ERROR - 2025-03-27 17:00:26 --> Could not find the language line "Home"
ERROR - 2025-03-27 17:07:43 --> Could not find the language line "Home"
ERROR - 2025-03-27 17:07:48 --> Could not find the language line "Home"
ERROR - 2025-03-27 17:07:49 --> Could not find the language line "Home"
ERROR - 2025-03-27 17:08:08 --> Could not find the language line "Home"
ERROR - 2025-03-27 17:09:04 --> Could not find the language line "Home"
ERROR - 2025-03-27 17:11:05 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-27 17:11:05 --> Could not find the language line "Home"
ERROR - 2025-03-27 17:13:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 17:13:59 --> Could not find the language line "Home"
ERROR - 2025-03-27 17:17:44 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-27 17:19:18 --> Could not find the language line "Home"
ERROR - 2025-03-27 17:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 17:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 17:40:22 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-27 17:42:07 --> Could not find the language line "Other"
ERROR - 2025-03-27 17:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 17:43:59 --> Could not find the language line "Home"
ERROR - 2025-03-27 17:54:33 --> Could not find the language line "Home"
ERROR - 2025-03-27 17:54:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 17:54:55 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-27 17:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 17:56:52 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-27 17:57:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-27 17:58:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 17:59:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 18:03:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 18:09:25 --> Could not find the language line "Home"
ERROR - 2025-03-27 18:11:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 18:14:00 --> Could not find the language line "Home"
ERROR - 2025-03-27 18:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 18:19:09 --> Could not find the language line "Home"
ERROR - 2025-03-27 18:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 18:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 18:34:46 --> Could not find the language line "Home"
ERROR - 2025-03-27 18:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 18:44:00 --> Could not find the language line "Home"
ERROR - 2025-03-27 18:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 18:56:51 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-27 19:02:06 --> Could not find the language line "Home"
ERROR - 2025-03-27 19:09:28 --> Could not find the language line "Home"
ERROR - 2025-03-27 19:14:01 --> Could not find the language line "Home"
ERROR - 2025-03-27 19:23:22 --> Could not find the language line "Home"
ERROR - 2025-03-27 19:23:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 19:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 19:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 19:27:34 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 19:29:27 --> Could not find the language line "Home"
ERROR - 2025-03-27 19:44:01 --> Could not find the language line "Home"
ERROR - 2025-03-27 19:56:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-27 20:05:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-27 20:08:02 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-27 20:08:03 --> Could not find the language line "Home"
ERROR - 2025-03-27 20:08:03 --> Could not find the language line "Home"
ERROR - 2025-03-27 20:09:19 --> Could not find the language line "Home"
ERROR - 2025-03-27 20:12:00 --> Could not find the language line "Home"
ERROR - 2025-03-27 20:14:02 --> Could not find the language line "Home"
ERROR - 2025-03-27 20:32:14 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-27 20:44:01 --> Could not find the language line "Home"
ERROR - 2025-03-27 20:53:59 --> Could not find the language line "Home"
ERROR - 2025-03-27 20:54:50 --> Could not find the language line "Home"
ERROR - 2025-03-27 21:10:59 --> Could not find the language line "Home"
ERROR - 2025-03-27 21:14:01 --> Could not find the language line "Home"
ERROR - 2025-03-27 21:25:51 --> Could not find the language line "Home"
ERROR - 2025-03-27 21:27:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 21:29:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-27 21:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 21:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 21:44:01 --> Could not find the language line "Home"
ERROR - 2025-03-27 21:55:36 --> Could not find the language line "Home"
ERROR - 2025-03-27 22:14:04 --> Could not find the language line "Home"
ERROR - 2025-03-27 22:22:16 --> Could not find the language line "Home"
ERROR - 2025-03-27 22:22:21 --> Could not find the language line "Home"
ERROR - 2025-03-27 22:23:28 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:37 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:42 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:42 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:43 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:43 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:46 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:47 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:47 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:47 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:51 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:52 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:52 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:52 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:56 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:57 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:57 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:23:57 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:24:01 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:24:02 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:24:02 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 22:38:59 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-27 22:44:06 --> Could not find the language line "Home"
ERROR - 2025-03-27 23:02:31 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-27 23:02:34 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-27 23:02:34 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-27 23:02:36 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-27 23:02:40 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-27 23:02:40 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-27 23:02:40 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-27 23:03:03 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 23:03:16 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 23:03:22 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 23:03:26 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 23:03:26 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 23:03:27 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 23:03:27 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 23:03:31 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 23:03:31 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 23:03:31 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 23:03:47 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-27 23:03:55 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-27 23:08:10 --> Could not find the language line "Home"
ERROR - 2025-03-27 23:08:33 --> Could not find the language line "Home"
ERROR - 2025-03-27 23:14:05 --> Could not find the language line "Home"
ERROR - 2025-03-27 23:14:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-27 23:17:54 --> Could not find the language line "Home"
ERROR - 2025-03-27 23:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 23:40:35 --> Could not find the language line "Home"
ERROR - 2025-03-27 23:44:13 --> Could not find the language line "Home"
ERROR - 2025-03-27 23:51:29 --> Could not find the language line "Home"
ERROR - 2025-03-27 23:51:30 --> Could not find the language line "Home"
ERROR - 2025-03-27 23:51:45 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-27 23:51:56 --> Could not find the language line "Home"
ERROR - 2025-03-27 23:52:03 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-27 23:52:24 --> Could not find the language line "Home"
ERROR - 2025-03-27 23:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 23:56:29 --> Could not find the language line "Home"
ERROR - 2025-03-27 23:56:40 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-27 23:57:01 --> Could not find the language line "Home"
ERROR - 2025-03-27 23:57:06 --> Could not find the language line "Clothing"
ERROR - 2025-03-27 23:57:13 --> Could not find the language line "Home"
ERROR - 2025-03-27 23:57:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-27 23:57:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-27 23:57:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-27 23:57:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-27 23:57:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-27 23:57:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-27 23:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 23:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-27 23:57:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-27 23:57:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-27 23:58:00 --> Could not find the language line "Home"
