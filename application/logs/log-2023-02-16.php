<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-02-16 00:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-16 00:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 00:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 00:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 00:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 00:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 00:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 00:41:26 --> Could not find the language line "Home"
ERROR - 2023-02-16 00:41:27 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-16 00:41:28 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2023-02-16 00:41:29 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2023-02-16 00:41:29 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2023-02-16 00:55:38 --> Could not find the language line "socks"
ERROR - 2023-02-16 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-16 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-16 01:47:01 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:06:02 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:06:03 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:39:14 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:39:54 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:40:33 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:43:09 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:46:07 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:46:30 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:48:16 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:51:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:52:43 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:54:31 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:56:21 --> 404 Page Not Found: 19837437_notfoundhtml/index
ERROR - 2023-02-16 02:57:53 --> Could not find the language line "Home"
ERROR - 2023-02-16 02:58:25 --> Could not find the language line "Home"
ERROR - 2023-02-16 03:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 03:15:51 --> Could not find the language line "Home"
ERROR - 2023-02-16 03:16:40 --> Could not find the language line "Home"
ERROR - 2023-02-16 03:21:51 --> Could not find the language line "Home"
ERROR - 2023-02-16 03:22:21 --> Could not find the language line "Home"
ERROR - 2023-02-16 03:22:58 --> Could not find the language line "Home"
ERROR - 2023-02-16 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-16 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 04:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 04:35:53 --> Could not find the language line "Home"
ERROR - 2023-02-16 04:52:35 --> Could not find the language line "Home"
ERROR - 2023-02-16 04:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 04:59:24 --> Could not find the language line "Home"
ERROR - 2023-02-16 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-16 05:09:21 --> Could not find the language line "Socks"
ERROR - 2023-02-16 05:09:51 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 05:14:15 --> Could not find the language line "Home"
ERROR - 2023-02-16 05:28:53 --> Could not find the language line "Home"
ERROR - 2023-02-16 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 05:37:55 --> Could not find the language line "Socks"
ERROR - 2023-02-16 05:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 05:38:50 --> Could not find the language line "Socks"
ERROR - 2023-02-16 05:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 05:53:33 --> Could not find the language line "Home"
ERROR - 2023-02-16 05:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 05:59:15 --> Could not find the language line "Home"
ERROR - 2023-02-16 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 06:05:50 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 06:25:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-16 06:25:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-16 06:25:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-16 06:25:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-16 06:25:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-16 06:25:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-16 06:27:01 --> Could not find the language line "Home"
ERROR - 2023-02-16 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-16 06:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 07:01:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-16 07:01:17 --> Could not find the language line "Home"
ERROR - 2023-02-16 07:03:34 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-02-16 07:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 07:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 07:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 07:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 07:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 07:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 07:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 07:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 07:27:03 --> Could not find the language line "Home"
ERROR - 2023-02-16 07:28:24 --> Could not find the language line "Home"
ERROR - 2023-02-16 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 07:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 07:38:29 --> Could not find the language line "Home"
ERROR - 2023-02-16 07:39:08 --> Could not find the language line "Home"
ERROR - 2023-02-16 07:41:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 07:42:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 07:42:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 07:42:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 07:42:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 07:42:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 07:42:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 07:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 07:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 07:49:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-16 07:58:56 --> Could not find the language line "Home"
ERROR - 2023-02-16 08:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-16 08:02:06 --> Could not find the language line "Home"
ERROR - 2023-02-16 08:02:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 08:02:25 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 08:02:35 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 08:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 08:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 08:07:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 08:07:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 08:07:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 08:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 08:08:32 --> Could not find the language line "Home"
ERROR - 2023-02-16 08:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 08:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 08:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 08:26:45 --> Could not find the language line "Home"
ERROR - 2023-02-16 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-16 08:50:19 --> Could not find the language line "Home"
ERROR - 2023-02-16 08:50:30 --> Could not find the language line "Home"
ERROR - 2023-02-16 08:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 08:52:40 --> Could not find the language line "Home"
ERROR - 2023-02-16 08:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 08:53:07 --> Could not find the language line "Home"
ERROR - 2023-02-16 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-16 09:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 09:02:16 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 09:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 09:03:41 --> Could not find the language line "Home"
ERROR - 2023-02-16 09:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 09:06:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 09:06:56 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 09:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 09:09:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-16 09:09:19 --> Could not find the language line "Home"
ERROR - 2023-02-16 09:12:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 09:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 09:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 09:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 09:24:04 --> Could not find the language line "Socks"
ERROR - 2023-02-16 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-16 09:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 09:56:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 09:56:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 09:58:42 --> Could not find the language line "Home"
ERROR - 2023-02-16 09:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 09:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:07:33 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:07:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:08:12 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:08:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:08:31 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:08:46 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:08:50 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:08:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:08:59 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:09:04 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:09:26 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:09:28 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:15:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:15:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:16:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:23:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:27:14 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:27:47 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 10:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:34:16 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:38:18 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:38:26 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:38:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:41:36 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:50:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:53:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 10:55:28 --> Could not find the language line "Socks"
ERROR - 2023-02-16 10:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:55:35 --> Could not find the language line "Socks"
ERROR - 2023-02-16 10:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:55:42 --> Could not find the language line "Socks"
ERROR - 2023-02-16 10:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:55:51 --> Could not find the language line "Socks"
ERROR - 2023-02-16 10:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:55:56 --> Could not find the language line "Socks"
ERROR - 2023-02-16 10:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:56:02 --> Could not find the language line "Socks"
ERROR - 2023-02-16 10:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:56:09 --> Could not find the language line "Socks"
ERROR - 2023-02-16 10:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:56:16 --> Could not find the language line "Socks"
ERROR - 2023-02-16 10:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:56:24 --> Could not find the language line "Socks"
ERROR - 2023-02-16 10:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:56:32 --> Could not find the language line "Socks"
ERROR - 2023-02-16 10:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:56:47 --> Could not find the language line "Socks"
ERROR - 2023-02-16 10:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 10:56:54 --> Could not find the language line "Socks"
ERROR - 2023-02-16 10:56:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 10:56:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 10:57:06 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:57:13 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:57:15 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:57:17 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:57:17 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:57:18 --> Could not find the language line "Home"
ERROR - 2023-02-16 10:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-16 11:00:36 --> Could not find the language line "Socks"
ERROR - 2023-02-16 11:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:00:43 --> Could not find the language line "Socks"
ERROR - 2023-02-16 11:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:00:50 --> Could not find the language line "Socks"
ERROR - 2023-02-16 11:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:00:58 --> Could not find the language line "Socks"
ERROR - 2023-02-16 11:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:01:04 --> Could not find the language line "Socks"
ERROR - 2023-02-16 11:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:01:11 --> Could not find the language line "Socks"
ERROR - 2023-02-16 11:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:01:18 --> Could not find the language line "Socks"
ERROR - 2023-02-16 11:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:01:36 --> Could not find the language line "Socks"
ERROR - 2023-02-16 11:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:01:42 --> Could not find the language line "Socks"
ERROR - 2023-02-16 11:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:01:53 --> Could not find the language line "Socks"
ERROR - 2023-02-16 11:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:02:00 --> Could not find the language line "Socks"
ERROR - 2023-02-16 11:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:02:07 --> Could not find the language line "Socks"
ERROR - 2023-02-16 11:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:03:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 11:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:06:38 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:06:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 11:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:09:01 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:09:12 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:09:24 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:09:31 --> Could not find the language line "Home"
ERROR - 2023-02-16 11:09:31 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:09:38 --> Could not find the language line "Home"
ERROR - 2023-02-16 11:09:49 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:09:57 --> Could not find the language line "Home"
ERROR - 2023-02-16 11:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:10:34 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:10:44 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:10:58 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:11:09 --> Could not find the language line "Home"
ERROR - 2023-02-16 11:11:14 --> Could not find the language line "Home"
ERROR - 2023-02-16 11:11:14 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:11:20 --> Could not find the language line "Home"
ERROR - 2023-02-16 11:11:50 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:12:01 --> Could not find the language line "Home"
ERROR - 2023-02-16 11:12:10 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:12:20 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:13:11 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:13:38 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:13:49 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:13:59 --> Could not find the language line "Home"
ERROR - 2023-02-16 11:14:30 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:14:44 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:15:05 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:15:24 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:15:42 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:16:08 --> Could not find the language line "Home"
ERROR - 2023-02-16 11:16:12 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:16:20 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:17:00 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:17:50 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:18:08 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:18:23 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:18:45 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:19:44 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:20:28 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:20:44 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:20:50 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:21:00 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:21:49 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:22:14 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:22:27 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:23:09 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:23:21 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:23:37 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:23:49 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:24:12 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:24:16 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:25:13 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:25:32 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:25:42 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:25:50 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:25:59 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:26:07 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:26:19 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:26:40 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:26:49 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:27:24 --> Could not find the language line "Home"
ERROR - 2023-02-16 11:27:51 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:28:27 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:28:38 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:29:07 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:29:17 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:29:33 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:30:05 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 11:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:30:41 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:31:05 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:31:16 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 11:32:01 --> Could not find the language line "Home"
ERROR - 2023-02-16 11:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:49:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:51:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:52:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:52:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:53:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:53:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:54:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:55:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:56:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:56:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:56:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:57:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:57:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:58:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:58:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:58:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:58:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:59:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:59:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:59:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 11:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 11:59:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:00:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:00:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-16 12:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:00:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-16 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-16 12:00:15 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-02-16 12:00:17 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-02-16 12:00:21 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-16 12:00:23 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-16 12:00:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-16 12:00:29 --> Could not find the language line "Home"
ERROR - 2023-02-16 12:00:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:00:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:01:18 --> Could not find the language line "Disclaimer"
ERROR - 2023-02-16 12:01:25 --> Could not find the language line "Home"
ERROR - 2023-02-16 12:01:41 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 12:01:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:01:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:01:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:01:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:02:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:02:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:02:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:02:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:02:12 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:02:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:02:38 --> Could not find the language line "Perfume"
ERROR - 2023-02-16 12:03:00 --> Could not find the language line "Socks"
ERROR - 2023-02-16 12:03:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:03:24 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:03:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 12:03:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 12:04:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:04:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:05:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:05:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:07:40 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:08:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:09:02 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:09:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:09:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:09:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:09:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:10:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:10:35 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:10:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:11:02 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:11:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:11:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:11:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:12:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:12:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:12:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:12:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:13:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:14:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:14:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:14:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:15:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:15:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:16:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:16:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 12:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 12:35:02 --> Could not find the language line "Home"
ERROR - 2023-02-16 12:38:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-16 12:38:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-16 12:38:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-16 12:38:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-16 12:38:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-16 12:38:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-16 12:45:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:45:33 --> Could not find the language line "Home"
ERROR - 2023-02-16 12:47:12 --> Could not find the language line "Home"
ERROR - 2023-02-16 12:47:44 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:48:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:48:38 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:48:52 --> Could not find the language line "Home"
ERROR - 2023-02-16 12:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:51:08 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 12:51:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 12:58:58 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:00:11 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:01:05 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 13:01:48 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:02:00 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 13:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:03:22 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:03:23 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:04:55 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 13:05:03 --> Could not find the language line "Socks"
ERROR - 2023-02-16 13:05:08 --> Could not find the language line "Socks"
ERROR - 2023-02-16 13:05:12 --> Could not find the language line "Socks"
ERROR - 2023-02-16 13:05:19 --> Could not find the language line "Socks"
ERROR - 2023-02-16 13:05:23 --> Could not find the language line "Socks"
ERROR - 2023-02-16 13:05:26 --> Could not find the language line "Socks"
ERROR - 2023-02-16 13:05:28 --> Could not find the language line "Socks"
ERROR - 2023-02-16 13:05:31 --> Could not find the language line "Socks"
ERROR - 2023-02-16 13:05:34 --> Could not find the language line "Socks"
ERROR - 2023-02-16 13:10:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 13:10:40 --> Could not find the language line "Socks"
ERROR - 2023-02-16 13:11:53 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 13:12:02 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 13:12:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 13:12:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 13:12:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 13:12:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 13:12:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 13:12:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 13:12:26 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:12:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 13:12:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 13:12:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 13:12:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 13:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:12:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 13:12:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 13:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:14:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 13:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:15:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 13:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:15:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 13:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:16:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 13:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:16:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 13:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:17:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 13:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:17:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 13:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:17:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 13:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:18:02 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:18:02 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:18:02 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:18:02 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:18:03 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:18:03 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:18:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 13:18:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 13:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:19:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 13:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:28:07 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:53:37 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:55:10 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:55:47 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:56:26 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 13:57:06 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:57:18 --> Could not find the language line "Socks"
ERROR - 2023-02-16 13:57:47 --> Could not find the language line "Home"
ERROR - 2023-02-16 13:57:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 13:58:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 13:58:37 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 13:58:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 13:58:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 13:58:51 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:02:48 --> Could not find the language line "Socks"
ERROR - 2023-02-16 14:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 14:09:05 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:14:27 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-02-16 14:18:36 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:19:21 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:19:32 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:19:32 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:19:41 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 14:21:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 14:23:12 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:23:15 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:23:18 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:23:19 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:23:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:23:34 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:23:44 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 14:23:58 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 14:24:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:24:38 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:24:40 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:24:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:25:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:25:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:25:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:25:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:25:24 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:25:24 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:25:25 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:25:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 14:30:59 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 14:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 14:35:53 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:35:58 --> Could not find the language line "Socks"
ERROR - 2023-02-16 14:36:01 --> Could not find the language line "Socks"
ERROR - 2023-02-16 14:36:06 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:36:08 --> Could not find the language line "Socks"
ERROR - 2023-02-16 14:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 14:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 14:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 14:37:47 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:37:50 --> Could not find the language line "Socks"
ERROR - 2023-02-16 14:37:53 --> Could not find the language line "Socks"
ERROR - 2023-02-16 14:37:57 --> Could not find the language line "Socks"
ERROR - 2023-02-16 14:38:00 --> Could not find the language line "Socks"
ERROR - 2023-02-16 14:38:02 --> Could not find the language line "Socks"
ERROR - 2023-02-16 14:38:04 --> Could not find the language line "Socks"
ERROR - 2023-02-16 14:38:41 --> Could not find the language line "Socks"
ERROR - 2023-02-16 14:40:17 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 14:40:21 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:40:36 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 14:40:40 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 14:40:44 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 14:40:50 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 14:40:55 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:41:02 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:41:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:41:08 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:41:09 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 14:41:10 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:41:16 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:41:19 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 14:41:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 14:41:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 14:41:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 14:41:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 14:41:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 14:42:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-02-16 14:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 14:42:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-16 14:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 14:43:43 --> Could not find the language line "Perfume"
ERROR - 2023-02-16 14:44:08 --> Could not find the language line "Socks"
ERROR - 2023-02-16 14:44:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 14:44:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 14:44:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 14:44:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 14:53:36 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:53:40 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:53:42 --> Could not find the language line "Home"
ERROR - 2023-02-16 14:57:57 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:05:45 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:09:38 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:14:47 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 15:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 15:17:37 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 15:20:22 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 15:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 15:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 15:22:06 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 15:22:17 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 15:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 15:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 15:23:16 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 15:23:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 15:23:38 --> Could not find the language line "Perfume"
ERROR - 2023-02-16 15:23:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 15:23:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 15:23:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 15:24:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:24:18 --> Could not find the language line "Socks"
ERROR - 2023-02-16 15:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 15:24:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 15:24:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 15:24:37 --> Could not find the language line "Socks"
ERROR - 2023-02-16 15:24:42 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 15:25:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 15:25:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 15:25:15 --> Could not find the language line "Perfume"
ERROR - 2023-02-16 15:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:41:36 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:46:24 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 15:49:22 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:50:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 15:50:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 15:51:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 15:51:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 15:51:45 --> Could not find the language line "Home"
ERROR - 2023-02-16 15:51:51 --> Could not find the language line "Socks"
ERROR - 2023-02-16 15:53:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-16 15:53:30 --> Could not find the language line "Home"
ERROR - 2023-02-16 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 16:02:55 --> Could not find the language line "Socks"
ERROR - 2023-02-16 16:04:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-02-16 16:07:15 --> Could not find the language line "Home"
ERROR - 2023-02-16 16:07:22 --> Could not find the language line "Home"
ERROR - 2023-02-16 16:09:46 --> Could not find the language line "Home"
ERROR - 2023-02-16 16:20:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 16:22:55 --> Could not find the language line "Home"
ERROR - 2023-02-16 16:23:09 --> Could not find the language line "Home"
ERROR - 2023-02-16 16:23:12 --> Could not find the language line "Home"
ERROR - 2023-02-16 16:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 16:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-16 16:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 16:38:27 --> Could not find the language line "Home"
ERROR - 2023-02-16 16:40:06 --> Could not find the language line "Home"
ERROR - 2023-02-16 16:43:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-02-16 16:57:01 --> Could not find the language line "Home"
ERROR - 2023-02-16 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-16 17:07:50 --> Could not find the language line "Home"
ERROR - 2023-02-16 17:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 17:16:43 --> Could not find the language line "Home"
ERROR - 2023-02-16 17:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 17:17:39 --> Could not find the language line "Home"
ERROR - 2023-02-16 17:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 17:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 17:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 17:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 17:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 17:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 17:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 17:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 17:32:14 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-16 17:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 17:38:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 17:38:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 17:39:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 17:39:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 17:39:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 17:40:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 17:40:26 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 17:40:34 --> Could not find the language line "Home"
ERROR - 2023-02-16 17:40:54 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 17:41:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 17:42:04 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 17:42:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 17:48:29 --> 404 Page Not Found: Installerphp/index
ERROR - 2023-02-16 17:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 17:53:21 --> Could not find the language line "Home"
ERROR - 2023-02-16 17:54:18 --> Could not find the language line "Home"
ERROR - 2023-02-16 17:54:35 --> Could not find the language line "Home"
ERROR - 2023-02-16 17:54:53 --> Could not find the language line "Home"
ERROR - 2023-02-16 17:55:00 --> Could not find the language line "Home"
ERROR - 2023-02-16 17:55:04 --> Could not find the language line "Home"
ERROR - 2023-02-16 17:55:34 --> Could not find the language line "Home"
ERROR - 2023-02-16 17:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 17:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 17:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-16 18:04:15 --> Could not find the language line "socks"
ERROR - 2023-02-16 18:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 18:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 18:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 18:12:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-02-16 18:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 18:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 18:13:53 --> Could not find the language line "Home"
ERROR - 2023-02-16 18:14:42 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 18:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 18:14:54 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 18:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 18:15:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 18:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 18:15:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 18:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-16 18:41:58 --> Could not find the language line "Home"
ERROR - 2023-02-16 18:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 18:53:21 --> Could not find the language line "Home"
ERROR - 2023-02-16 19:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-16 19:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 19:03:33 --> Could not find the language line "Home"
ERROR - 2023-02-16 19:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 19:11:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 19:12:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 19:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 19:13:28 --> Could not find the language line "Home"
ERROR - 2023-02-16 19:13:28 --> Could not find the language line "Home"
ERROR - 2023-02-16 19:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 19:14:40 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 19:17:15 --> Could not find the language line "Home"
ERROR - 2023-02-16 19:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-16 19:37:02 --> Could not find the language line "Home"
ERROR - 2023-02-16 19:37:03 --> Could not find the language line "Home"
ERROR - 2023-02-16 19:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 19:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 19:46:38 --> Could not find the language line "Home"
ERROR - 2023-02-16 20:00:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-02-16 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-16 20:06:47 --> Could not find the language line "Home"
ERROR - 2023-02-16 20:07:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 20:07:57 --> Could not find the language line "Home"
ERROR - 2023-02-16 20:11:19 --> Could not find the language line "Home"
ERROR - 2023-02-16 20:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 20:19:25 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-16 20:19:26 --> Could not find the language line "Home"
ERROR - 2023-02-16 20:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 20:25:46 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-02-16 20:25:49 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-02-16 20:25:51 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-02-16 20:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-16 20:32:45 --> Could not find the language line "Home"
ERROR - 2023-02-16 20:51:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-16 20:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:04:21 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:05:00 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:05:20 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:05:57 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:06:32 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:06:38 --> Could not find the language line "Perfume"
ERROR - 2023-02-16 21:06:53 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:07:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 21:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:08:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 21:08:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 21:08:36 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 21:08:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 21:09:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-16 21:10:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-16 21:10:11 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:10:31 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:11:02 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:11:26 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:11:31 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 21:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:12:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 21:12:08 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:12:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 21:12:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 21:12:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:12:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 21:12:50 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:13:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 21:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:13:17 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:13:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 21:13:32 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 21:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:13:44 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 21:13:44 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 21:13:50 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 21:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:14:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 21:17:23 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:18:19 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:18:54 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:19:07 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:19:08 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:19:09 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:34:16 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:34:18 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:37:54 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:38:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-16 21:38:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-16 21:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:44:10 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:46:17 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:51:36 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:51:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-16 21:52:10 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:54:29 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:55:03 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:56:52 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:57:40 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 21:58:02 --> Could not find the language line "Home"
ERROR - 2023-02-16 21:58:18 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 21:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:59:03 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 21:59:10 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 21:59:16 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 21:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 21:59:39 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 21:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 22:00:11 --> Could not find the language line "Bracelets"
ERROR - 2023-02-16 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-16 22:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 22:00:38 --> Could not find the language line "Home"
ERROR - 2023-02-16 22:00:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 22:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 22:01:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 22:02:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 22:02:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-16 22:03:28 --> Could not find the language line "Home"
ERROR - 2023-02-16 22:03:32 --> Could not find the language line "Perfume"
ERROR - 2023-02-16 22:03:43 --> Could not find the language line "Home"
ERROR - 2023-02-16 22:03:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:03:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 22:10:05 --> Could not find the language line "Home"
ERROR - 2023-02-16 22:10:16 --> Could not find the language line "Socks"
ERROR - 2023-02-16 22:10:29 --> Could not find the language line "Home"
ERROR - 2023-02-16 22:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 22:11:01 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-02-16 22:19:35 --> Could not find the language line "Home"
ERROR - 2023-02-16 22:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-16 22:32:37 --> 404 Page Not Found: Wp-plainphp/index
ERROR - 2023-02-16 22:32:37 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-02-16 22:32:37 --> 404 Page Not Found: ALFA_DATA/alfacgiapi
ERROR - 2023-02-16 22:32:37 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-02-16 22:32:37 --> 404 Page Not Found: Nljibvvdphp/index
ERROR - 2023-02-16 22:32:37 --> 404 Page Not Found: Alfacgiapi/perl.alfa
ERROR - 2023-02-16 22:32:37 --> Could not find the language line "Home"
ERROR - 2023-02-16 22:44:23 --> Could not find the language line "Home"
ERROR - 2023-02-16 22:51:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:51:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:51:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:51:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 22:53:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:53:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:54:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:54:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 22:54:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:54:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:54:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:54:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 22:55:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:55:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 22:57:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:57:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:57:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:57:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:58:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:58:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:58:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:58:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 22:59:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:59:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:59:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:59:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 22:59:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 22:59:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:00:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:00:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:00:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:00:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:01:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:01:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:01:14 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:01:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:01:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:01:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:01:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:01:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:01:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:02:00 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:02:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:02:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:02:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:02:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:03:07 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:03:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:03:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:03:57 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:04:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 23:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:04:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 23:04:16 --> Could not find the language line "Clothing"
ERROR - 2023-02-16 23:05:14 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:05:21 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:05:39 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:05:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:05:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:06:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:06:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:06:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:06:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:06:33 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:06:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:06:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:07:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:07:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:07:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:07:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:07:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:07:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:07:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:07:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:07:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:07:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:07:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:07:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-16 23:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:25:33 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:26:30 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:26:47 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:27:09 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:27:52 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-16 23:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-16 23:59:07 --> Could not find the language line "Home"
