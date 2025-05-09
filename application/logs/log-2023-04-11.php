<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-11 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-11 00:18:50 --> Could not find the language line "Home"
ERROR - 2023-04-11 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 00:33:21 --> Could not find the language line "Home"
ERROR - 2023-04-11 00:35:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-11 01:08:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 01:24:00 --> Could not find the language line "Home"
ERROR - 2023-04-11 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-11 01:40:53 --> Could not find the language line "Home"
ERROR - 2023-04-11 01:41:56 --> Could not find the language line "Home"
ERROR - 2023-04-11 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 02:05:08 --> Could not find the language line "Home"
ERROR - 2023-04-11 02:05:42 --> Could not find the language line "Home"
ERROR - 2023-04-11 02:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 02:12:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 02:14:04 --> Could not find the language line "Home"
ERROR - 2023-04-11 02:29:03 --> Could not find the language line "Home"
ERROR - 2023-04-11 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-11 02:32:57 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-04-11 02:32:59 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-04-11 02:33:02 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-04-11 02:33:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 02:38:59 --> Could not find the language line "Home"
ERROR - 2023-04-11 02:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 02:58:27 --> Could not find the language line "Home"
ERROR - 2023-04-11 02:58:30 --> Could not find the language line "Home"
ERROR - 2023-04-11 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-11 03:13:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 03:30:17 --> Could not find the language line "Home"
ERROR - 2023-04-11 03:55:20 --> Could not find the language line "Home"
ERROR - 2023-04-11 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-11 04:03:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 04:09:13 --> Could not find the language line "Home"
ERROR - 2023-04-11 04:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 04:10:44 --> Could not find the language line "Home"
ERROR - 2023-04-11 04:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 04:13:03 --> Could not find the language line "Home"
ERROR - 2023-04-11 04:13:06 --> Could not find the language line "Home"
ERROR - 2023-04-11 04:13:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 04:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 04:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 04:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 04:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 04:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-11 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-11 05:09:08 --> Could not find the language line "Home"
ERROR - 2023-04-11 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 05:30:44 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-04-11 05:31:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-04-11 05:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 05:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 05:51:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 05:56:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-11 06:09:22 --> Could not find the language line "Home"
ERROR - 2023-04-11 06:10:35 --> Could not find the language line "Home"
ERROR - 2023-04-11 06:11:06 --> Could not find the language line "Home"
ERROR - 2023-04-11 06:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:12:54 --> Could not find the language line "Home"
ERROR - 2023-04-11 06:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:15:28 --> Could not find the language line "Home"
ERROR - 2023-04-11 06:15:43 --> Could not find the language line "Socks"
ERROR - 2023-04-11 06:16:00 --> Could not find the language line "Socks"
ERROR - 2023-04-11 06:16:15 --> Could not find the language line "Socks"
ERROR - 2023-04-11 06:16:20 --> Could not find the language line "Socks"
ERROR - 2023-04-11 06:16:38 --> Could not find the language line "Home"
ERROR - 2023-04-11 06:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:26:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 06:27:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 06:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:28:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 06:29:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 06:29:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 06:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 06:30:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 06:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:35:22 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2023-04-11 06:35:22 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: /opt/alt/php73/var/lib/php/session) Unknown 0
ERROR - 2023-04-11 06:35:48 --> Severity: Error --> Maximum execution time of 30 seconds exceeded /home/samfit/public_html/system/libraries/Session/drivers/Session_files_driver.php 267
ERROR - 2023-04-11 06:35:48 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2023-04-11 06:35:48 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: /opt/alt/php73/var/lib/php/session) Unknown 0
ERROR - 2023-04-11 06:37:12 --> Could not find the language line "Home"
ERROR - 2023-04-11 06:37:12 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2023-04-11 06:37:12 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: /opt/alt/php73/var/lib/php/session) Unknown 0
ERROR - 2023-04-11 06:37:12 --> Could not find the language line "Home"
ERROR - 2023-04-11 06:37:12 --> Could not find the language line "Home"
ERROR - 2023-04-11 06:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:41:14 --> Could not find the language line "Home"
ERROR - 2023-04-11 06:42:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 06:47:10 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-04-11 06:48:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 06:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:54:50 --> Could not find the language line "Home"
ERROR - 2023-04-11 06:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 06:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 07:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:05:51 --> Could not find the language line "Home"
ERROR - 2023-04-11 07:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:15:01 --> Could not find the language line "Perfume"
ERROR - 2023-04-11 07:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:19:36 --> Could not find the language line "Other"
ERROR - 2023-04-11 07:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-11 07:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:35:37 --> Could not find the language line "Home"
ERROR - 2023-04-11 07:35:44 --> Could not find the language line "Home"
ERROR - 2023-04-11 07:39:40 --> Could not find the language line "Home"
ERROR - 2023-04-11 07:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:42:08 --> Could not find the language line "Home"
ERROR - 2023-04-11 07:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:42:26 --> Could not find the language line "Home"
ERROR - 2023-04-11 07:42:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-04-11 07:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:43:19 --> Could not find the language line "Home"
ERROR - 2023-04-11 07:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:44:02 --> Could not find the language line "Home"
ERROR - 2023-04-11 07:44:03 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-11 07:44:04 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2023-04-11 07:44:05 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2023-04-11 07:44:06 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2023-04-11 07:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:44:35 --> Could not find the language line "Home"
ERROR - 2023-04-11 07:44:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 07:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:44:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 07:45:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 07:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:45:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 07:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:45:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 07:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:50:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 07:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 07:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:00:16 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:01:37 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:08:06 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:15:22 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:16:36 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:16:36 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:16:43 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-11 08:16:43 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-11 08:16:43 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-11 08:16:44 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-11 08:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:19:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 08:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:25:05 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:26:13 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:28:50 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:34:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 08:34:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 08:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:43:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:45:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 08:45:32 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:45:58 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:46:12 --> Could not find the language line "Bracelets"
ERROR - 2023-04-11 08:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:46:33 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:46:41 --> Could not find the language line "Bracelets"
ERROR - 2023-04-11 08:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:47:27 --> Could not find the language line "Bracelets"
ERROR - 2023-04-11 08:47:33 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:50:41 --> Could not find the language line "Bracelets"
ERROR - 2023-04-11 08:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:54:52 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:54:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 08:55:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 08:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:55:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 08:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:56:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 08:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:56:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 08:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 08:58:50 --> Could not find the language line "Home"
ERROR - 2023-04-11 08:59:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 08:59:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 08:59:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:00:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:00:12 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:00:16 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:01:08 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:01:17 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:01:41 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:02:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:03:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:04:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 09:04:23 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:04:27 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:05:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 09:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:05:37 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:06:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 09:06:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:06:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-11 09:06:44 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:06:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:06:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:07:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:07:45 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:08:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 09:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:09:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:10:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:10:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:11:31 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:11:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 09:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:15:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 09:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:19:36 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:20:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:20:17 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:20:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 09:21:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 09:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:27:07 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:27:33 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:34:10 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:34:47 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:42:35 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:43:08 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:44:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 09:45:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:46:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:46:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:55:53 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:58:58 --> Could not find the language line "Home"
ERROR - 2023-04-11 09:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 09:59:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 09:59:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:00:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:00:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:00:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:00:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:00:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:01:33 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:03:43 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:03:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:03:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:04:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:04:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:04:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:04:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:04:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:04:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:05:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:05:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:05:21 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:05:34 --> Could not find the language line "Socks"
ERROR - 2023-04-11 10:05:55 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:07:32 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:08:10 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:09:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:09:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:09:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:09:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:09:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:09:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 10:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:11:37 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:13:23 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:14:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-11 10:14:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-11 10:14:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-11 10:14:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-11 10:14:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-11 10:14:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-11 10:14:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-11 10:14:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-11 10:14:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-11 10:14:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-11 10:14:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-11 10:14:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-11 10:14:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-11 10:14:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-11 10:14:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-11 10:14:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-11 10:14:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-11 10:14:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-11 10:14:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-11 10:14:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-11 10:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:21:44 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:24:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 10:25:28 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:25:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-11 10:26:27 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:27:44 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:28:33 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:28:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:29:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:30:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:30:16 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:31:46 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:31:46 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:31:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:32:12 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:36:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:37:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:37:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:38:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 10:38:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 10:38:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 10:38:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 10:38:13 --> 404 Page Not Found: Home/home
ERROR - 2023-04-11 10:38:13 --> 404 Page Not Found: Home/accounts
ERROR - 2023-04-11 10:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:38:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:39:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:39:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:42:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:43:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:43:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:43:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:44:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:45:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:45:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:46:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 10:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 10:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 11:02:37 --> Could not find the language line "Home"
ERROR - 2023-04-11 11:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:05:26 --> Could not find the language line "Home"
ERROR - 2023-04-11 11:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:05:45 --> Could not find the language line "Home"
ERROR - 2023-04-11 11:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:18:24 --> Could not find the language line "Home"
ERROR - 2023-04-11 11:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 11:31:28 --> Could not find the language line "Home"
ERROR - 2023-04-11 11:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:32:09 --> Could not find the language line "Home"
ERROR - 2023-04-11 11:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:39:05 --> Could not find the language line "Home"
ERROR - 2023-04-11 11:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:47:54 --> Could not find the language line "Home"
ERROR - 2023-04-11 11:53:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 11:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 11:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-11 12:09:41 --> Could not find the language line "Home"
ERROR - 2023-04-11 12:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:14:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-11 12:14:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-11 12:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:30:21 --> Could not find the language line "Home"
ERROR - 2023-04-11 12:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:36:47 --> Could not find the language line "Home"
ERROR - 2023-04-11 12:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:39:17 --> Could not find the language line "Home"
ERROR - 2023-04-11 12:42:07 --> Could not find the language line "Home"
ERROR - 2023-04-11 12:42:14 --> Could not find the language line "Home"
ERROR - 2023-04-11 12:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:42:30 --> Could not find the language line "Home"
ERROR - 2023-04-11 12:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:52:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 12:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:57:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 12:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:57:47 --> Could not find the language line "Home"
ERROR - 2023-04-11 12:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 12:59:40 --> Could not find the language line "Home"
ERROR - 2023-04-11 12:59:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 13:00:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 13:00:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 13:00:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 13:01:12 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 13:01:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 13:01:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 13:01:18 --> Could not find the language line "Home"
ERROR - 2023-04-11 13:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:25:05 --> Could not find the language line "Home"
ERROR - 2023-04-11 13:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:27:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-11 13:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:28:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-11 13:28:02 --> Could not find the language line "Home"
ERROR - 2023-04-11 13:28:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-11 13:29:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-11 13:29:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-11 13:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 13:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:34:42 --> Could not find the language line "Home"
ERROR - 2023-04-11 13:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:49:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:56:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 13:57:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 13:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 13:59:43 --> Could not find the language line "Home"
ERROR - 2023-04-11 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-11 14:04:42 --> Could not find the language line "Home"
ERROR - 2023-04-11 14:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:05:51 --> Could not find the language line "Home"
ERROR - 2023-04-11 14:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:10:04 --> Could not find the language line "Home"
ERROR - 2023-04-11 14:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:21:04 --> 404 Page Not Found: Wordpress/index
ERROR - 2023-04-11 14:21:05 --> Could not find the language line "Home"
ERROR - 2023-04-11 14:21:05 --> 404 Page Not Found: Wp/index
ERROR - 2023-04-11 14:21:05 --> 404 Page Not Found: Bc/index
ERROR - 2023-04-11 14:21:06 --> 404 Page Not Found: Bk/index
ERROR - 2023-04-11 14:21:06 --> 404 Page Not Found: Backup/index
ERROR - 2023-04-11 14:21:08 --> 404 Page Not Found: New/index
ERROR - 2023-04-11 14:21:09 --> 404 Page Not Found: Main/index
ERROR - 2023-04-11 14:21:10 --> Could not find the language line "Home"
ERROR - 2023-04-11 14:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-11 14:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:38:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 14:39:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 14:39:46 --> Could not find the language line "Home"
ERROR - 2023-04-11 14:40:17 --> Could not find the language line "Home"
ERROR - 2023-04-11 14:40:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 14:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:41:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 14:41:48 --> Could not find the language line "Home"
ERROR - 2023-04-11 14:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:43:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 14:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:48:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 14:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 14:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:01:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-04-11 15:01:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 15:02:46 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:20:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 15:20:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 15:20:22 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:40:05 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:40:05 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:40:05 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:40:05 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:40:06 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:40:06 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:40:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:40:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:40:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:40:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:40:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:40:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:56:20 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 15:57:05 --> Could not find the language line "Home"
ERROR - 2023-04-11 15:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 15:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 15:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 15:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 15:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 15:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-11 16:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:12:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-04-11 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 16:34:24 --> Could not find the language line "Home"
ERROR - 2023-04-11 16:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:40:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 16:41:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 16:41:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 16:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:45:48 --> Could not find the language line "Home"
ERROR - 2023-04-11 16:46:46 --> Could not find the language line "Home"
ERROR - 2023-04-11 16:47:32 --> Could not find the language line "Home"
ERROR - 2023-04-11 16:49:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 16:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:50:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 16:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 16:54:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 16:57:44 --> Could not find the language line "Home"
ERROR - 2023-04-11 16:59:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 17:06:23 --> Could not find the language line "Home"
ERROR - 2023-04-11 17:15:46 --> Could not find the language line "Home"
ERROR - 2023-04-11 17:16:03 --> Could not find the language line "Home"
ERROR - 2023-04-11 17:16:30 --> Could not find the language line "Home"
ERROR - 2023-04-11 17:16:39 --> Could not find the language line "Home"
ERROR - 2023-04-11 17:17:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 17:17:31 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 17:18:14 --> Could not find the language line "Home"
ERROR - 2023-04-11 17:25:56 --> Could not find the language line "Home"
ERROR - 2023-04-11 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-11 17:33:55 --> Could not find the language line "Home"
ERROR - 2023-04-11 17:57:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-11 17:57:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
AND `transaction_item_sizes`.`size` IN('Allhttps:')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-11 17:57:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-11 17:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
AND `transaction_item_sizes`.`size` IN('Allhttps:')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-11 17:57:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-11 17:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
AND `transaction_item_sizes`.`size` IN('Allhttps:')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-11 17:57:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-11 17:57:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
AND `transaction_item_sizes`.`size` IN('Allhttps:')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-11 17:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 17:59:38 --> Could not find the language line "Home"
ERROR - 2023-04-11 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-11 18:03:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 18:03:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-11 18:25:31 --> Could not find the language line "Home"
ERROR - 2023-04-11 18:28:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 18:28:12 --> Could not find the language line "Clothing"
ERROR - 2023-04-11 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 18:33:36 --> Could not find the language line "Home"
ERROR - 2023-04-11 18:33:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-04-11 18:41:38 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-11 18:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 18:44:09 --> Could not find the language line "Home"
ERROR - 2023-04-11 18:44:09 --> Could not find the language line "Home"
ERROR - 2023-04-11 18:44:10 --> Could not find the language line "Home"
ERROR - 2023-04-11 18:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 18:46:05 --> Could not find the language line "Home"
ERROR - 2023-04-11 18:46:07 --> Could not find the language line "Home"
ERROR - 2023-04-11 18:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 18:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 18:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 18:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 18:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 18:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 18:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 18:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 18:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-11 19:00:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 19:01:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 19:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 19:05:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 19:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 19:07:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 19:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 19:08:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 19:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 19:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 19:09:44 --> Could not find the language line "Home"
ERROR - 2023-04-11 19:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 19:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 19:12:45 --> Could not find the language line "Home"
ERROR - 2023-04-11 19:14:08 --> Could not find the language line "Home"
ERROR - 2023-04-11 19:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 19:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 19:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 19:32:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 19:33:45 --> Could not find the language line "Home"
ERROR - 2023-04-11 19:48:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 19:50:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-11 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 20:09:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 20:09:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-11 20:55:33 --> Could not find the language line "Home"
ERROR - 2023-04-11 21:00:21 --> Could not find the language line "Home"
ERROR - 2023-04-11 21:16:28 --> 404 Page Not Found: Public/assets
ERROR - 2023-04-11 21:18:20 --> Could not find the language line "Home"
ERROR - 2023-04-11 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 21:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 22:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-11 22:02:18 --> Could not find the language line "Home"
ERROR - 2023-04-11 22:02:29 --> Could not find the language line "Home"
ERROR - 2023-04-11 22:07:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 22:17:09 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-11 22:22:47 --> Could not find the language line "Home"
ERROR - 2023-04-11 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-11 22:32:15 --> Could not find the language line "Home"
ERROR - 2023-04-11 22:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 22:32:35 --> Could not find the language line "Home"
ERROR - 2023-04-11 22:33:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-11 23:11:49 --> Could not find the language line "Home"
ERROR - 2023-04-11 23:21:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-11 23:21:56 --> Could not find the language line "Home"
ERROR - 2023-04-11 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-11 23:58:57 --> Could not find the language line "Home"
