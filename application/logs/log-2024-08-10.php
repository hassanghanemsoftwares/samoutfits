<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-10 00:15:00 --> Could not find the language line "Home"
ERROR - 2024-08-10 00:42:09 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-08-10 00:45:02 --> Could not find the language line "Home"
ERROR - 2024-08-10 01:03:11 --> Could not find the language line "Home"
ERROR - 2024-08-10 01:15:00 --> Could not find the language line "Home"
ERROR - 2024-08-10 01:36:54 --> Could not find the language line "Home"
ERROR - 2024-08-10 01:45:01 --> Could not find the language line "Home"
ERROR - 2024-08-10 01:49:44 --> Could not find the language line "Other"
ERROR - 2024-08-10 01:57:37 --> Could not find the language line "Socks"
ERROR - 2024-08-10 02:15:00 --> Could not find the language line "Home"
ERROR - 2024-08-10 02:31:26 --> 404 Page Not Found: Assets/mail
ERROR - 2024-08-10 02:45:01 --> Could not find the language line "Home"
ERROR - 2024-08-10 03:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 03:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 03:15:03 --> Could not find the language line "Home"
ERROR - 2024-08-10 03:45:03 --> Could not find the language line "Home"
ERROR - 2024-08-10 04:15:03 --> Could not find the language line "Home"
ERROR - 2024-08-10 04:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 04:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 04:45:04 --> Could not find the language line "Home"
ERROR - 2024-08-10 05:15:05 --> Could not find the language line "Home"
ERROR - 2024-08-10 05:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 05:39:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-08-10 05:40:29 --> Could not find the language line "Home"
ERROR - 2024-08-10 05:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 05:45:05 --> Could not find the language line "Home"
ERROR - 2024-08-10 06:13:40 --> Could not find the language line "Home"
ERROR - 2024-08-10 06:13:42 --> Could not find the language line "Other"
ERROR - 2024-08-10 06:15:05 --> Could not find the language line "Home"
ERROR - 2024-08-10 06:18:02 --> Could not find the language line "Socks"
ERROR - 2024-08-10 06:19:21 --> Could not find the language line "Home"
ERROR - 2024-08-10 06:42:29 --> Could not find the language line "Home"
ERROR - 2024-08-10 06:45:05 --> Could not find the language line "Home"
ERROR - 2024-08-10 06:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 06:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 06:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 06:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 07:15:05 --> Could not find the language line "Home"
ERROR - 2024-08-10 07:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 07:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 07:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 07:22:51 --> Could not find the language line "Home"
ERROR - 2024-08-10 07:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 07:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 07:37:34 --> Could not find the language line "Home"
ERROR - 2024-08-10 07:44:31 --> Could not find the language line "Home"
ERROR - 2024-08-10 07:44:37 --> Could not find the language line "Home"
ERROR - 2024-08-10 07:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 07:45:05 --> Could not find the language line "Home"
ERROR - 2024-08-10 08:00:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 08:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 08:00:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 08:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 08:01:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 08:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 08:03:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 08:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 08:05:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 08:05:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 08:06:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 08:08:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 08:15:05 --> Could not find the language line "Home"
ERROR - 2024-08-10 08:15:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 08:16:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 08:16:07 --> Could not find the language line "Home"
ERROR - 2024-08-10 08:16:13 --> Could not find the language line "Home"
ERROR - 2024-08-10 08:16:16 --> Could not find the language line "Home"
ERROR - 2024-08-10 08:16:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 08:16:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 08:16:40 --> Could not find the language line "Home"
ERROR - 2024-08-10 08:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 08:26:47 --> Could not find the language line "Home"
ERROR - 2024-08-10 08:34:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 08:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 08:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 08:45:06 --> Could not find the language line "Home"
ERROR - 2024-08-10 08:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 08:59:08 --> Could not find the language line "Home"
ERROR - 2024-08-10 08:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 08:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 09:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 09:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 09:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 09:12:20 --> Could not find the language line "Home"
ERROR - 2024-08-10 09:15:07 --> Could not find the language line "Home"
ERROR - 2024-08-10 09:18:50 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-08-10 09:39:58 --> Could not find the language line "Home"
ERROR - 2024-08-10 09:41:04 --> Could not find the language line "Home"
ERROR - 2024-08-10 09:41:09 --> Could not find the language line "Home"
ERROR - 2024-08-10 09:42:51 --> Could not find the language line "Home"
ERROR - 2024-08-10 09:45:07 --> Could not find the language line "Home"
ERROR - 2024-08-10 09:50:35 --> Could not find the language line "Other"
ERROR - 2024-08-10 09:54:52 --> Could not find the language line "Socks"
ERROR - 2024-08-10 10:12:52 --> Could not find the language line "Home"
ERROR - 2024-08-10 10:15:08 --> Could not find the language line "Home"
ERROR - 2024-08-10 10:18:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:19:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:19:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:20:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:26:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:26:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:26:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:26:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-10 10:29:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:29:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:29:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:29:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 10:30:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:30:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:30:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:30:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:31:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:35:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:37:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:37:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:38:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:38:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:38:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 10:45:07 --> Could not find the language line "Home"
ERROR - 2024-08-10 10:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 10:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 11:10:20 --> Could not find the language line "Home"
ERROR - 2024-08-10 11:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 11:15:08 --> Could not find the language line "Home"
ERROR - 2024-08-10 11:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 11:32:20 --> Could not find the language line "Home"
ERROR - 2024-08-10 11:45:09 --> Could not find the language line "Home"
ERROR - 2024-08-10 11:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 11:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 11:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 11:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 11:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 11:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 11:56:07 --> Could not find the language line "Home"
ERROR - 2024-08-10 12:01:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 12:01:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 12:01:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 12:10:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 12:11:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 12:11:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 12:11:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 12:11:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 12:11:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-10 12:11:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 12:11:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-10 12:12:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 12:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 12:12:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 12:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 12:15:08 --> Could not find the language line "Home"
ERROR - 2024-08-10 12:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 12:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 12:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 12:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 12:38:36 --> Could not find the language line "Home"
ERROR - 2024-08-10 12:39:06 --> Could not find the language line "Home"
ERROR - 2024-08-10 12:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 12:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 12:45:09 --> Could not find the language line "Home"
ERROR - 2024-08-10 12:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 12:54:37 --> Could not find the language line "Clothing"
ERROR - 2024-08-10 13:00:26 --> Could not find the language line "Home"
ERROR - 2024-08-10 13:00:57 --> Could not find the language line "Home"
ERROR - 2024-08-10 13:05:51 --> Could not find the language line "Home"
ERROR - 2024-08-10 13:05:51 --> Could not find the language line "Home"
ERROR - 2024-08-10 13:05:56 --> Could not find the language line "Clothing"
ERROR - 2024-08-10 13:06:08 --> Could not find the language line "Clothing"
ERROR - 2024-08-10 13:06:16 --> Could not find the language line "Clothing"
ERROR - 2024-08-10 13:06:23 --> Could not find the language line "Clothing"
ERROR - 2024-08-10 13:06:32 --> Could not find the language line "Clothing"
ERROR - 2024-08-10 13:10:19 --> Could not find the language line "Home"
ERROR - 2024-08-10 13:11:15 --> Could not find the language line "Socks"
ERROR - 2024-08-10 13:15:09 --> Could not find the language line "Home"
ERROR - 2024-08-10 13:16:45 --> Could not find the language line "Home"
ERROR - 2024-08-10 13:16:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-10 13:25:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-10 13:25:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-10 13:45:09 --> Could not find the language line "Home"
ERROR - 2024-08-10 14:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 14:04:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-10 14:04:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-10 14:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 14:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 14:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 14:12:40 --> Could not find the language line "Home"
ERROR - 2024-08-10 14:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 14:15:10 --> Could not find the language line "Home"
ERROR - 2024-08-10 14:45:10 --> Could not find the language line "Home"
ERROR - 2024-08-10 14:50:06 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-08-10 14:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 14:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 14:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 14:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 15:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 15:15:11 --> Could not find the language line "Home"
ERROR - 2024-08-10 15:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 15:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 15:42:21 --> Could not find the language line "Home"
ERROR - 2024-08-10 15:42:22 --> Could not find the language line "Home"
ERROR - 2024-08-10 15:42:23 --> Could not find the language line "Home"
ERROR - 2024-08-10 15:45:11 --> Could not find the language line "Home"
ERROR - 2024-08-10 15:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 16:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 16:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 16:15:11 --> Could not find the language line "Home"
ERROR - 2024-08-10 16:17:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-10 16:17:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-10 16:17:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-10 16:17:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-10 16:17:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-10 16:17:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-10 16:17:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-10 16:17:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-10 16:17:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-10 16:17:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-10 16:17:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-10 16:17:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-10 16:42:09 --> Could not find the language line "Home"
ERROR - 2024-08-10 16:42:09 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-08-10 16:45:12 --> Could not find the language line "Home"
ERROR - 2024-08-10 17:12:04 --> Could not find the language line "Home"
ERROR - 2024-08-10 17:15:12 --> Could not find the language line "Home"
ERROR - 2024-08-10 17:19:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-08-10 17:24:38 --> Could not find the language line "Home"
ERROR - 2024-08-10 17:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 17:32:08 --> Could not find the language line "Other"
ERROR - 2024-08-10 17:36:58 --> Could not find the language line "Socks"
ERROR - 2024-08-10 17:44:20 --> Could not find the language line "Home"
ERROR - 2024-08-10 17:45:13 --> Could not find the language line "Home"
ERROR - 2024-08-10 18:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 18:15:14 --> Could not find the language line "Home"
ERROR - 2024-08-10 18:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 18:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 18:45:13 --> Could not find the language line "Home"
ERROR - 2024-08-10 18:49:31 --> Could not find the language line "Home"
ERROR - 2024-08-10 18:50:47 --> Could not find the language line "Clothing"
ERROR - 2024-08-10 18:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 18:51:01 --> Could not find the language line "Clothing"
ERROR - 2024-08-10 18:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 18:51:07 --> Could not find the language line "Clothing"
ERROR - 2024-08-10 18:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 18:51:24 --> Could not find the language line "Clothing"
ERROR - 2024-08-10 18:51:43 --> Could not find the language line "Home"
ERROR - 2024-08-10 18:51:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-10 18:51:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-10 18:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 18:52:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-10 18:52:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-10 18:52:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-10 18:52:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-10 18:53:05 --> Could not find the language line "Clothing"
ERROR - 2024-08-10 18:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 18:53:52 --> Could not find the language line "Clothing"
ERROR - 2024-08-10 18:54:30 --> Could not find the language line "Home"
ERROR - 2024-08-10 18:55:19 --> Could not find the language line "Perfume"
ERROR - 2024-08-10 18:55:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-10 18:55:57 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-10 18:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 19:15:13 --> Could not find the language line "Home"
ERROR - 2024-08-10 19:24:25 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-10 19:45:24 --> Could not find the language line "Home"
ERROR - 2024-08-10 20:07:47 --> Could not find the language line "Home"
ERROR - 2024-08-10 20:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 20:15:14 --> Could not find the language line "Home"
ERROR - 2024-08-10 20:25:13 --> Could not find the language line "Home"
ERROR - 2024-08-10 20:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 20:45:14 --> Could not find the language line "Home"
ERROR - 2024-08-10 20:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 20:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 21:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 21:14:41 --> Could not find the language line "Home"
ERROR - 2024-08-10 21:15:15 --> Could not find the language line "Home"
ERROR - 2024-08-10 21:19:51 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-08-10 21:19:51 --> Could not find the language line "Home"
ERROR - 2024-08-10 21:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 21:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 21:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 21:27:55 --> Could not find the language line "Home"
ERROR - 2024-08-10 21:28:17 --> Could not find the language line "Home"
ERROR - 2024-08-10 21:45:16 --> Could not find the language line "Home"
ERROR - 2024-08-10 21:45:48 --> Could not find the language line "Home"
ERROR - 2024-08-10 21:50:39 --> Could not find the language line "Home"
ERROR - 2024-08-10 22:07:14 --> Could not find the language line "Other"
ERROR - 2024-08-10 22:11:57 --> Could not find the language line "Socks"
ERROR - 2024-08-10 22:15:16 --> Could not find the language line "Home"
ERROR - 2024-08-10 22:16:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-10 22:16:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-10 22:16:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-10 22:16:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-10 22:16:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-10 22:16:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-10 22:16:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-10 22:16:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-10 22:16:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-10 22:16:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-10 22:16:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-10 22:16:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-10 22:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 22:45:16 --> Could not find the language line "Home"
ERROR - 2024-08-10 23:15:16 --> Could not find the language line "Home"
ERROR - 2024-08-10 23:40:00 --> 404 Page Not Found: Wp-includes/ID3
ERROR - 2024-08-10 23:40:00 --> 404 Page Not Found: Feed/index
ERROR - 2024-08-10 23:40:00 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-08-10 23:40:00 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2024-08-10 23:40:00 --> 404 Page Not Found: Web/wp-includes
ERROR - 2024-08-10 23:40:01 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2024-08-10 23:40:01 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2024-08-10 23:40:01 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2024-08-10 23:40:01 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2024-08-10 23:40:01 --> 404 Page Not Found: 2021/wp-includes
ERROR - 2024-08-10 23:40:02 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2024-08-10 23:40:02 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2024-08-10 23:40:02 --> 404 Page Not Found: Test/wp-includes
ERROR - 2024-08-10 23:40:02 --> 404 Page Not Found: Site/wp-includes
ERROR - 2024-08-10 23:40:02 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2024-08-10 23:45:17 --> Could not find the language line "Home"
ERROR - 2024-08-10 23:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-10 23:49:22 --> 404 Page Not Found: Assets/css
