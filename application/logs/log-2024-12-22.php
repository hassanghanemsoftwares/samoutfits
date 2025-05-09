<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-22 00:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 00:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 00:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 00:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 00:14:03 --> Could not find the language line "Home"
ERROR - 2024-12-22 00:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 00:41:37 --> Could not find the language line "Home"
ERROR - 2024-12-22 00:41:51 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 00:44:03 --> Could not find the language line "Home"
ERROR - 2024-12-22 01:08:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-22 01:10:35 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-22 01:14:03 --> Could not find the language line "Home"
ERROR - 2024-12-22 01:18:58 --> Could not find the language line "Home"
ERROR - 2024-12-22 01:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 01:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 01:30:26 --> Could not find the language line "Home"
ERROR - 2024-12-22 01:41:56 --> Could not find the language line "Home"
ERROR - 2024-12-22 01:44:04 --> Could not find the language line "Home"
ERROR - 2024-12-22 02:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 02:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 02:07:12 --> Could not find the language line "Home"
ERROR - 2024-12-22 02:07:20 --> Could not find the language line "Home"
ERROR - 2024-12-22 02:07:20 --> Could not find the language line "Home"
ERROR - 2024-12-22 02:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 02:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 02:08:12 --> Could not find the language line "Home"
ERROR - 2024-12-22 02:08:13 --> Could not find the language line "Home"
ERROR - 2024-12-22 02:08:39 --> Could not find the language line "Home"
ERROR - 2024-12-22 02:11:20 --> Could not find the language line "Home"
ERROR - 2024-12-22 02:13:35 --> Could not find the language line "Home"
ERROR - 2024-12-22 02:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 02:14:06 --> Could not find the language line "Home"
ERROR - 2024-12-22 02:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 02:15:51 --> Could not find the language line "Home"
ERROR - 2024-12-22 02:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 02:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 02:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 02:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 02:33:11 --> Could not find the language line "Home"
ERROR - 2024-12-22 02:35:20 --> Could not find the language line "Home"
ERROR - 2024-12-22 02:44:00 --> Could not find the language line "Home"
ERROR - 2024-12-22 02:44:06 --> Could not find the language line "Home"
ERROR - 2024-12-22 03:08:02 --> Could not find the language line "Home"
ERROR - 2024-12-22 03:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 03:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 03:14:06 --> Could not find the language line "Home"
ERROR - 2024-12-22 03:34:30 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-12-22 03:34:30 --> Could not find the language line "Home"
ERROR - 2024-12-22 03:44:05 --> Could not find the language line "Home"
ERROR - 2024-12-22 04:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 04:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 04:14:09 --> Could not find the language line "Home"
ERROR - 2024-12-22 04:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 04:40:29 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-22 04:41:01 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-12-22 04:44:06 --> Could not find the language line "Home"
ERROR - 2024-12-22 04:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 04:53:52 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-12-22 04:54:52 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 05:14:09 --> Could not find the language line "Home"
ERROR - 2024-12-22 05:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 05:35:17 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-22 05:44:07 --> Could not find the language line "Home"
ERROR - 2024-12-22 06:11:00 --> Could not find the language line "Home"
ERROR - 2024-12-22 06:14:08 --> Could not find the language line "Home"
ERROR - 2024-12-22 06:17:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-22 06:30:40 --> 404 Page Not Found: Storage/settings
ERROR - 2024-12-22 06:44:08 --> Could not find the language line "Home"
ERROR - 2024-12-22 06:59:28 --> Could not find the language line "Home"
ERROR - 2024-12-22 07:03:16 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-22 07:07:07 --> Could not find the language line "Home"
ERROR - 2024-12-22 07:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 07:14:07 --> Could not find the language line "Home"
ERROR - 2024-12-22 07:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 07:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 07:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 07:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 07:34:26 --> Could not find the language line "Home"
ERROR - 2024-12-22 07:35:43 --> Could not find the language line "Home"
ERROR - 2024-12-22 07:36:44 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 07:36:48 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 07:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 07:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 07:44:07 --> Could not find the language line "Home"
ERROR - 2024-12-22 07:47:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 07:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 07:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 07:49:41 --> Could not find the language line "Home"
ERROR - 2024-12-22 07:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 07:59:59 --> Could not find the language line "Home"
ERROR - 2024-12-22 08:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:14:08 --> Could not find the language line "Home"
ERROR - 2024-12-22 08:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:17:13 --> Could not find the language line "Home"
ERROR - 2024-12-22 08:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:19:30 --> Could not find the language line "Home"
ERROR - 2024-12-22 08:19:54 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-12-22 08:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:24:02 --> Could not find the language line "Home"
ERROR - 2024-12-22 08:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:27:18 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 08:27:32 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 08:27:35 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-22 08:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 08:41:28 --> Could not find the language line "Home"
ERROR - 2024-12-22 08:42:46 --> Could not find the language line "Home"
ERROR - 2024-12-22 08:44:11 --> Could not find the language line "Home"
ERROR - 2024-12-22 08:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 09:07:19 --> Could not find the language line "Home"
ERROR - 2024-12-22 09:08:18 --> Could not find the language line "Home"
ERROR - 2024-12-22 09:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 09:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 09:13:01 --> Could not find the language line "Home"
ERROR - 2024-12-22 09:13:02 --> Could not find the language line "Home"
ERROR - 2024-12-22 09:14:10 --> Could not find the language line "Home"
ERROR - 2024-12-22 09:24:13 --> Could not find the language line "Home"
ERROR - 2024-12-22 09:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 09:30:12 --> Could not find the language line "Home"
ERROR - 2024-12-22 09:30:29 --> Could not find the language line "Home"
ERROR - 2024-12-22 09:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 09:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 09:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 09:42:11 --> Could not find the language line "Home"
ERROR - 2024-12-22 09:44:09 --> Could not find the language line "Home"
ERROR - 2024-12-22 09:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 09:53:47 --> Could not find the language line "Home"
ERROR - 2024-12-22 09:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 09:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 09:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 09:58:30 --> Could not find the language line "Home"
ERROR - 2024-12-22 10:03:08 --> Could not find the language line "Home"
ERROR - 2024-12-22 10:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 10:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 10:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 10:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 10:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 10:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 10:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 10:14:08 --> Could not find the language line "Home"
ERROR - 2024-12-22 10:37:23 --> Could not find the language line "Home"
ERROR - 2024-12-22 10:40:31 --> Could not find the language line "Home"
ERROR - 2024-12-22 10:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 10:44:09 --> Could not find the language line "Home"
ERROR - 2024-12-22 10:52:47 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 10:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 10:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 10:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 10:53:25 --> Could not find the language line "Home"
ERROR - 2024-12-22 11:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 11:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 11:06:57 --> Could not find the language line "Home"
ERROR - 2024-12-22 11:14:10 --> Could not find the language line "Home"
ERROR - 2024-12-22 11:14:59 --> Could not find the language line "Home"
ERROR - 2024-12-22 11:26:54 --> Could not find the language line "Home"
ERROR - 2024-12-22 11:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 11:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 11:44:09 --> Could not find the language line "Home"
ERROR - 2024-12-22 11:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 11:47:58 --> Could not find the language line "Home"
ERROR - 2024-12-22 11:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 11:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 11:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 11:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 12:14:12 --> Could not find the language line "Home"
ERROR - 2024-12-22 12:15:31 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-22 12:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 12:44:11 --> Could not find the language line "Home"
ERROR - 2024-12-22 12:46:40 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-22 13:01:48 --> Could not find the language line "Home"
ERROR - 2024-12-22 13:04:06 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 13:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 13:14:11 --> Could not find the language line "Home"
ERROR - 2024-12-22 13:18:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-22 13:19:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-22 13:22:29 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-22 13:41:53 --> Could not find the language line "Home"
ERROR - 2024-12-22 13:44:11 --> Could not find the language line "Home"
ERROR - 2024-12-22 13:49:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-22 13:55:38 --> Could not find the language line "Home"
ERROR - 2024-12-22 14:08:03 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 14:08:22 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 14:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 14:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 14:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 14:11:44 --> Could not find the language line "Home"
ERROR - 2024-12-22 14:12:49 --> Could not find the language line "Home"
ERROR - 2024-12-22 14:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 14:13:04 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-12-22 14:13:04 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-12-22 14:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 14:14:11 --> Could not find the language line "Home"
ERROR - 2024-12-22 14:16:35 --> Could not find the language line "Home"
ERROR - 2024-12-22 14:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 14:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 14:25:48 --> Could not find the language line "Home"
ERROR - 2024-12-22 14:30:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-22 14:40:19 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-22 14:44:10 --> Could not find the language line "Home"
ERROR - 2024-12-22 14:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 14:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 14:53:11 --> Could not find the language line "Home"
ERROR - 2024-12-22 14:53:26 --> Could not find the language line "Home"
ERROR - 2024-12-22 14:53:27 --> Could not find the language line "Home"
ERROR - 2024-12-22 14:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 14:56:14 --> Could not find the language line "Home"
ERROR - 2024-12-22 15:02:50 --> Could not find the language line "Home"
ERROR - 2024-12-22 15:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 15:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 15:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 15:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 15:09:01 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-22 15:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 15:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 15:14:11 --> Could not find the language line "Home"
ERROR - 2024-12-22 15:20:02 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-12-22 15:20:04 --> Could not find the language line "Home"
ERROR - 2024-12-22 15:20:07 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-12-22 15:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 15:36:23 --> Could not find the language line "Home"
ERROR - 2024-12-22 15:36:53 --> Could not find the language line "Home"
ERROR - 2024-12-22 15:36:56 --> Could not find the language line "Home"
ERROR - 2024-12-22 15:36:58 --> Could not find the language line "Home"
ERROR - 2024-12-22 15:36:59 --> Could not find the language line "Home"
ERROR - 2024-12-22 15:37:34 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-22 15:38:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-22 15:39:41 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 15:44:11 --> Could not find the language line "Home"
ERROR - 2024-12-22 15:53:36 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 15:53:45 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 15:53:53 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 15:54:02 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 15:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 15:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 15:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 16:04:48 --> Could not find the language line "Home"
ERROR - 2024-12-22 16:14:11 --> Could not find the language line "Home"
ERROR - 2024-12-22 16:17:10 --> Could not find the language line "Home"
ERROR - 2024-12-22 16:17:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 16:17:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-22 16:17:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 100
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-22 16:17:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-22 16:18:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 16:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 16:19:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 16:19:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 16:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 16:20:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 16:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 16:21:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 16:21:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 16:21:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 16:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 16:21:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 16:22:25 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2024-12-22 16:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 16:41:08 --> Could not find the language line "Home"
ERROR - 2024-12-22 16:44:12 --> Could not find the language line "Home"
ERROR - 2024-12-22 17:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:14:12 --> Could not find the language line "Home"
ERROR - 2024-12-22 17:14:13 --> Could not find the language line "Home"
ERROR - 2024-12-22 17:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:21:29 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-12-22 17:21:29 --> Could not find the language line "Home"
ERROR - 2024-12-22 17:21:30 --> 404 Page Not Found: Wp/index
ERROR - 2024-12-22 17:21:30 --> 404 Page Not Found: Bc/index
ERROR - 2024-12-22 17:21:30 --> 404 Page Not Found: Bk/index
ERROR - 2024-12-22 17:21:30 --> 404 Page Not Found: Backup/index
ERROR - 2024-12-22 17:21:31 --> 404 Page Not Found: New/index
ERROR - 2024-12-22 17:21:31 --> 404 Page Not Found: Main/index
ERROR - 2024-12-22 17:21:32 --> Could not find the language line "Home"
ERROR - 2024-12-22 17:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:24:13 --> Could not find the language line "Home"
ERROR - 2024-12-22 17:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:25:40 --> Could not find the language line "Home"
ERROR - 2024-12-22 17:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:35:03 --> Could not find the language line "Home"
ERROR - 2024-12-22 17:35:20 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 17:35:42 --> Could not find the language line "Home"
ERROR - 2024-12-22 17:35:54 --> Could not find the language line "Home"
ERROR - 2024-12-22 17:36:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 17:36:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 17:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:36:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 17:36:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 17:36:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 17:36:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 17:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:37:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 17:37:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 17:37:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 17:37:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 17:37:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 17:37:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 17:37:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 17:37:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 17:41:19 --> Could not find the language line "Home"
ERROR - 2024-12-22 17:41:22 --> Could not find the language line "Home"
ERROR - 2024-12-22 17:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:44:13 --> Could not find the language line "Home"
ERROR - 2024-12-22 17:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 17:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 18:08:49 --> Could not find the language line "Home"
ERROR - 2024-12-22 18:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 18:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 18:14:12 --> Could not find the language line "Home"
ERROR - 2024-12-22 18:19:59 --> Could not find the language line "Home"
ERROR - 2024-12-22 18:22:16 --> Could not find the language line "Home"
ERROR - 2024-12-22 18:26:41 --> Could not find the language line "Home"
ERROR - 2024-12-22 18:44:13 --> Could not find the language line "Home"
ERROR - 2024-12-22 18:52:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 18:52:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-22 18:52:42 --> Could not find the language line "Home"
ERROR - 2024-12-22 18:52:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 18:53:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 18:53:17 --> Could not find the language line "Home"
ERROR - 2024-12-22 18:53:20 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-22 18:53:21 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-22 18:53:37 --> Could not find the language line "Home"
ERROR - 2024-12-22 18:53:46 --> Could not find the language line "Socks"
ERROR - 2024-12-22 18:54:17 --> Could not find the language line "Socks"
ERROR - 2024-12-22 18:54:40 --> Could not find the language line "Socks"
ERROR - 2024-12-22 18:54:42 --> Could not find the language line "Home"
ERROR - 2024-12-22 18:54:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 18:54:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 18:55:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 18:55:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 18:55:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-22 19:06:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 19:08:15 --> Could not find the language line "Home"
ERROR - 2024-12-22 19:14:13 --> Could not find the language line "Home"
ERROR - 2024-12-22 19:21:12 --> 404 Page Not Found: Sitemap/index
ERROR - 2024-12-22 19:24:47 --> Could not find the language line "Home"
ERROR - 2024-12-22 19:28:07 --> Could not find the language line "Home"
ERROR - 2024-12-22 19:34:45 --> Could not find the language line "Home"
ERROR - 2024-12-22 19:44:14 --> Could not find the language line "Home"
ERROR - 2024-12-22 19:53:38 --> Could not find the language line "Home"
ERROR - 2024-12-22 19:55:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-22 20:12:49 --> Could not find the language line "Home"
ERROR - 2024-12-22 20:12:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-22 20:14:14 --> Could not find the language line "Home"
ERROR - 2024-12-22 20:15:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-22 20:18:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-22 20:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 20:22:34 --> Could not find the language line "Home"
ERROR - 2024-12-22 20:23:09 --> Could not find the language line "Home"
ERROR - 2024-12-22 20:36:32 --> Could not find the language line "Home"
ERROR - 2024-12-22 20:37:15 --> Could not find the language line "Home"
ERROR - 2024-12-22 20:37:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-22 20:37:41 --> Could not find the language line "Home"
ERROR - 2024-12-22 20:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 20:38:06 --> Could not find the language line "Home"
ERROR - 2024-12-22 20:39:14 --> Could not find the language line "Home"
ERROR - 2024-12-22 20:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 20:44:14 --> Could not find the language line "Home"
ERROR - 2024-12-22 20:49:23 --> Could not find the language line "Home"
ERROR - 2024-12-22 20:54:26 --> Could not find the language line "Home"
ERROR - 2024-12-22 21:14:14 --> Could not find the language line "Home"
ERROR - 2024-12-22 21:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 21:19:51 --> Could not find the language line "Home"
ERROR - 2024-12-22 21:34:23 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-12-22 21:34:23 --> Could not find the language line "Home"
ERROR - 2024-12-22 21:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 21:42:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-22 21:44:14 --> Could not find the language line "Home"
ERROR - 2024-12-22 22:14:16 --> Could not find the language line "Home"
ERROR - 2024-12-22 22:26:30 --> Could not find the language line "Home"
ERROR - 2024-12-22 22:26:33 --> Could not find the language line "Home"
ERROR - 2024-12-22 22:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 22:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 22:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-22 22:42:06 --> Could not find the language line "Home"
ERROR - 2024-12-22 22:44:15 --> Could not find the language line "Home"
ERROR - 2024-12-22 23:11:27 --> Could not find the language line "Clothing"
ERROR - 2024-12-22 23:14:19 --> Could not find the language line "Home"
ERROR - 2024-12-22 23:44:18 --> Could not find the language line "Home"
