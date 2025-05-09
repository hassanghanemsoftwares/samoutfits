<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-20 00:07:23 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-20 00:07:23 --> Could not find the language line "Home"
ERROR - 2025-02-20 00:12:56 --> Could not find the language line "Home"
ERROR - 2025-02-20 00:15:48 --> Could not find the language line "Home"
ERROR - 2025-02-20 00:16:50 --> Could not find the language line "Home"
ERROR - 2025-02-20 00:25:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-20 00:26:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-20 00:33:04 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-20 00:42:59 --> Could not find the language line "Home"
ERROR - 2025-02-20 00:48:54 --> Could not find the language line "Home"
ERROR - 2025-02-20 00:50:31 --> Could not find the language line "Home"
ERROR - 2025-02-20 01:01:00 --> Could not find the language line "Home"
ERROR - 2025-02-20 01:03:53 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-20 01:04:29 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-20 01:12:58 --> Could not find the language line "Home"
ERROR - 2025-02-20 01:28:29 --> Could not find the language line "Home"
ERROR - 2025-02-20 01:35:29 --> Could not find the language line "Home"
ERROR - 2025-02-20 01:36:49 --> Could not find the language line "Disclaimer"
ERROR - 2025-02-20 01:39:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-20 01:42:59 --> Could not find the language line "Home"
ERROR - 2025-02-20 01:43:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-20 01:44:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-20 01:47:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-20 01:49:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-20 01:49:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-20 01:49:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-20 01:51:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-20 02:06:31 --> Could not find the language line "Home"
ERROR - 2025-02-20 02:06:35 --> Could not find the language line "Home"
ERROR - 2025-02-20 02:12:58 --> Could not find the language line "Home"
ERROR - 2025-02-20 02:43:00 --> Could not find the language line "Home"
ERROR - 2025-02-20 03:08:50 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-20 03:12:58 --> Could not find the language line "Home"
ERROR - 2025-02-20 03:16:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-20 03:16:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-20 03:25:16 --> Could not find the language line "Home"
ERROR - 2025-02-20 03:28:20 --> Could not find the language line "Home"
ERROR - 2025-02-20 03:38:12 --> Could not find the language line "Home"
ERROR - 2025-02-20 03:38:28 --> Could not find the language line "Other"
ERROR - 2025-02-20 03:42:21 --> Could not find the language line "Home"
ERROR - 2025-02-20 03:42:59 --> Could not find the language line "Home"
ERROR - 2025-02-20 03:49:57 --> Could not find the language line "Home"
ERROR - 2025-02-20 03:56:05 --> Could not find the language line "Home"
ERROR - 2025-02-20 04:08:17 --> Could not find the language line "Home"
ERROR - 2025-02-20 04:09:23 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-20 04:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 04:13:07 --> Could not find the language line "Home"
ERROR - 2025-02-20 04:28:16 --> Could not find the language line "Home"
ERROR - 2025-02-20 04:40:28 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-20 04:40:28 --> Could not find the language line "Home"
ERROR - 2025-02-20 04:40:29 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-20 04:40:29 --> 404 Page Not Found: Bc/index
ERROR - 2025-02-20 04:40:29 --> 404 Page Not Found: Bk/index
ERROR - 2025-02-20 04:40:29 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-20 04:40:30 --> 404 Page Not Found: New/index
ERROR - 2025-02-20 04:40:30 --> 404 Page Not Found: Main/index
ERROR - 2025-02-20 04:40:30 --> Could not find the language line "Home"
ERROR - 2025-02-20 04:43:00 --> Could not find the language line "Home"
ERROR - 2025-02-20 04:48:25 --> Could not find the language line "Home"
ERROR - 2025-02-20 05:06:16 --> Could not find the language line "Home"
ERROR - 2025-02-20 05:12:59 --> Could not find the language line "Home"
ERROR - 2025-02-20 05:14:55 --> Could not find the language line "Home"
ERROR - 2025-02-20 05:30:17 --> Could not find the language line "Socks"
ERROR - 2025-02-20 05:32:35 --> Could not find the language line "Home"
ERROR - 2025-02-20 05:42:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-20 05:42:52 --> Could not find the language line "Home"
ERROR - 2025-02-20 05:42:59 --> Could not find the language line "Home"
ERROR - 2025-02-20 06:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 06:12:59 --> Could not find the language line "Home"
ERROR - 2025-02-20 06:42:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-20 06:43:00 --> Could not find the language line "Home"
ERROR - 2025-02-20 06:46:39 --> Could not find the language line "Home"
ERROR - 2025-02-20 07:12:59 --> Could not find the language line "Home"
ERROR - 2025-02-20 07:17:55 --> Could not find the language line "Home"
ERROR - 2025-02-20 07:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:43:00 --> Could not find the language line "Home"
ERROR - 2025-02-20 07:43:29 --> Could not find the language line "Home"
ERROR - 2025-02-20 07:47:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-20 07:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:52:22 --> Could not find the language line "Home"
ERROR - 2025-02-20 07:52:22 --> Could not find the language line "Home"
ERROR - 2025-02-20 07:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 07:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 08:13:00 --> Could not find the language line "Home"
ERROR - 2025-02-20 08:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 08:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 08:43:01 --> Could not find the language line "Home"
ERROR - 2025-02-20 08:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 08:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 09:07:33 --> Could not find the language line "Clothing"
ERROR - 2025-02-20 09:12:24 --> Could not find the language line "Clothing"
ERROR - 2025-02-20 09:12:52 --> Could not find the language line "Home"
ERROR - 2025-02-20 09:12:53 --> Could not find the language line "Home"
ERROR - 2025-02-20 09:13:00 --> Could not find the language line "Home"
ERROR - 2025-02-20 09:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 09:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 09:14:43 --> Could not find the language line "Home"
ERROR - 2025-02-20 09:14:44 --> Could not find the language line "Home"
ERROR - 2025-02-20 09:14:45 --> Could not find the language line "Home"
ERROR - 2025-02-20 09:14:48 --> 404 Page Not Found: Admin/index
ERROR - 2025-02-20 09:14:57 --> 404 Page Not Found: Administrator/index
ERROR - 2025-02-20 09:19:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-20 09:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 09:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 09:31:43 --> Could not find the language line "Home"
ERROR - 2025-02-20 09:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 09:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 09:32:49 --> Could not find the language line "Home"
ERROR - 2025-02-20 09:34:27 --> Could not find the language line "Home"
ERROR - 2025-02-20 09:43:02 --> Could not find the language line "Home"
ERROR - 2025-02-20 10:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 10:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 10:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 10:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 10:13:03 --> Could not find the language line "Home"
ERROR - 2025-02-20 10:31:57 --> Could not find the language line "Home"
ERROR - 2025-02-20 10:38:50 --> Could not find the language line "Home"
ERROR - 2025-02-20 10:38:52 --> Could not find the language line "Home"
ERROR - 2025-02-20 10:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 10:43:02 --> Could not find the language line "Home"
ERROR - 2025-02-20 10:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 10:48:48 --> Could not find the language line "Home"
ERROR - 2025-02-20 10:58:37 --> Could not find the language line "Home"
ERROR - 2025-02-20 11:13:03 --> Could not find the language line "Home"
ERROR - 2025-02-20 11:16:40 --> Could not find the language line "Home"
ERROR - 2025-02-20 11:18:20 --> Could not find the language line "Home"
ERROR - 2025-02-20 11:20:30 --> Could not find the language line "Home"
ERROR - 2025-02-20 11:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 11:28:55 --> Could not find the language line "Home"
ERROR - 2025-02-20 11:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 11:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 11:41:52 --> Could not find the language line "Home"
ERROR - 2025-02-20 11:43:02 --> Could not find the language line "Home"
ERROR - 2025-02-20 11:47:01 --> Could not find the language line "Home"
ERROR - 2025-02-20 11:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 11:58:14 --> Could not find the language line "Home"
ERROR - 2025-02-20 11:59:53 --> Could not find the language line "Home"
ERROR - 2025-02-20 12:13:04 --> Could not find the language line "Home"
ERROR - 2025-02-20 12:21:26 --> Could not find the language line "Home"
ERROR - 2025-02-20 12:27:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-20 12:28:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-20 12:28:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-20 12:40:32 --> Could not find the language line "Other"
ERROR - 2025-02-20 12:42:52 --> Could not find the language line "Home"
ERROR - 2025-02-20 12:43:03 --> Could not find the language line "Home"
ERROR - 2025-02-20 12:46:01 --> Could not find the language line "Home"
ERROR - 2025-02-20 12:51:44 --> 404 Page Not Found: Users/users
ERROR - 2025-02-20 12:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 12:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 12:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 12:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 12:58:07 --> Could not find the language line "Home"
ERROR - 2025-02-20 12:58:41 --> Could not find the language line "Clothing"
ERROR - 2025-02-20 12:58:55 --> Could not find the language line "Home"
ERROR - 2025-02-20 12:59:15 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-20 12:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 12:59:47 --> Could not find the language line "Home"
ERROR - 2025-02-20 12:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 12:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 13:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 13:01:25 --> Could not find the language line "Home"
ERROR - 2025-02-20 13:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 13:04:51 --> 404 Page Not Found: Users/accounts
ERROR - 2025-02-20 13:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 13:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 13:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 13:08:38 --> Could not find the language line "Home"
ERROR - 2025-02-20 13:13:03 --> Could not find the language line "Home"
ERROR - 2025-02-20 13:13:07 --> 404 Page Not Found: Cart/accounts
ERROR - 2025-02-20 13:27:33 --> Could not find the language line "Home"
ERROR - 2025-02-20 13:29:58 --> 404 Page Not Found: Users/accounts
ERROR - 2025-02-20 13:31:51 --> Could not find the language line "Home"
ERROR - 2025-02-20 13:32:46 --> 404 Page Not Found: Cart/products
ERROR - 2025-02-20 13:33:58 --> Could not find the language line "Clothing"
ERROR - 2025-02-20 13:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 13:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 13:42:57 --> 404 Page Not Found: Users/accounts
ERROR - 2025-02-20 13:43:04 --> Could not find the language line "Home"
ERROR - 2025-02-20 13:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 13:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 13:50:36 --> 404 Page Not Found: Cart/products
ERROR - 2025-02-20 14:01:57 --> 404 Page Not Found: Users/products
ERROR - 2025-02-20 14:09:19 --> 404 Page Not Found: Cart/products
ERROR - 2025-02-20 14:13:04 --> Could not find the language line "Home"
ERROR - 2025-02-20 14:18:43 --> 404 Page Not Found: Cart/products
ERROR - 2025-02-20 14:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 14:39:53 --> Could not find the language line "Home"
ERROR - 2025-02-20 14:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 14:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 14:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 14:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 14:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 14:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 14:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 14:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 14:43:04 --> Could not find the language line "Home"
ERROR - 2025-02-20 15:07:19 --> Could not find the language line "Home"
ERROR - 2025-02-20 15:07:23 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-20 15:13:04 --> Could not find the language line "Home"
ERROR - 2025-02-20 15:20:57 --> Could not find the language line "Home"
ERROR - 2025-02-20 15:21:01 --> Could not find the language line "Home"
ERROR - 2025-02-20 15:25:37 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-20 15:43:04 --> Could not find the language line "Home"
ERROR - 2025-02-20 15:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 15:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 15:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 15:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 15:59:33 --> Could not find the language line "Home"
ERROR - 2025-02-20 16:13:05 --> Could not find the language line "Home"
ERROR - 2025-02-20 16:43:05 --> Could not find the language line "Home"
ERROR - 2025-02-20 17:05:14 --> Could not find the language line "Bracelets"
ERROR - 2025-02-20 17:05:14 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2025-02-20 17:05:14 --> Could not find the language line "Bracelets"
ERROR - 2025-02-20 17:05:14 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2025-02-20 17:13:06 --> Could not find the language line "Home"
ERROR - 2025-02-20 17:18:34 --> Could not find the language line "Home"
ERROR - 2025-02-20 17:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 17:41:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-20 17:43:05 --> Could not find the language line "Home"
ERROR - 2025-02-20 17:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 18:09:12 --> Could not find the language line "Home"
ERROR - 2025-02-20 18:13:05 --> Could not find the language line "Home"
ERROR - 2025-02-20 18:14:24 --> Could not find the language line "Home"
ERROR - 2025-02-20 18:21:57 --> Could not find the language line "Home"
ERROR - 2025-02-20 18:30:13 --> Could not find the language line "Home"
ERROR - 2025-02-20 18:33:40 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-20 18:33:40 --> Could not find the language line "Home"
ERROR - 2025-02-20 18:41:48 --> Could not find the language line "Socks"
ERROR - 2025-02-20 18:43:06 --> Could not find the language line "Home"
ERROR - 2025-02-20 18:50:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-20 18:50:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-20 18:51:23 --> Could not find the language line "Home"
ERROR - 2025-02-20 18:52:24 --> Could not find the language line "Home"
ERROR - 2025-02-20 18:59:30 --> Could not find the language line "Home"
ERROR - 2025-02-20 18:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 18:59:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-20 19:07:18 --> Could not find the language line "Home"
ERROR - 2025-02-20 19:13:06 --> Could not find the language line "Home"
ERROR - 2025-02-20 19:13:17 --> Could not find the language line "Home"
ERROR - 2025-02-20 19:29:17 --> Could not find the language line "Home"
ERROR - 2025-02-20 19:34:04 --> Could not find the language line "Home"
ERROR - 2025-02-20 19:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 19:43:07 --> Could not find the language line "Home"
ERROR - 2025-02-20 20:10:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-20 20:13:07 --> Could not find the language line "Home"
ERROR - 2025-02-20 20:28:05 --> Could not find the language line "Home"
ERROR - 2025-02-20 20:31:49 --> Could not find the language line "Home"
ERROR - 2025-02-20 20:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 20:36:52 --> Could not find the language line "users"
ERROR - 2025-02-20 20:43:08 --> Could not find the language line "Home"
ERROR - 2025-02-20 20:49:44 --> Could not find the language line "Crocs"
ERROR - 2025-02-20 21:01:53 --> Could not find the language line "Home"
ERROR - 2025-02-20 21:05:21 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-20 21:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 21:12:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-20 21:12:20 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-20 21:13:07 --> Could not find the language line "Home"
ERROR - 2025-02-20 21:27:07 --> Could not find the language line "Home"
ERROR - 2025-02-20 21:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 21:43:08 --> Could not find the language line "Home"
ERROR - 2025-02-20 22:03:32 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-20 22:13:09 --> Could not find the language line "Home"
ERROR - 2025-02-20 22:18:20 --> Could not find the language line "Home"
ERROR - 2025-02-20 22:20:19 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-20 22:41:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-20 22:41:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-20 22:41:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-20 22:43:09 --> Could not find the language line "Home"
ERROR - 2025-02-20 22:58:50 --> Could not find the language line "Home"
ERROR - 2025-02-20 22:59:18 --> Could not find the language line "Socks"
ERROR - 2025-02-20 23:13:10 --> Could not find the language line "Home"
ERROR - 2025-02-20 23:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-20 23:25:42 --> Could not find the language line "Home"
ERROR - 2025-02-20 23:35:21 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-20 23:43:11 --> Could not find the language line "Home"
