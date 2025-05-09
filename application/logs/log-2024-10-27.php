<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-27 00:03:34 --> Could not find the language line "Home"
ERROR - 2024-10-27 00:15:10 --> Could not find the language line "Home"
ERROR - 2024-10-27 00:23:47 --> Could not find the language line "Home"
ERROR - 2024-10-27 00:33:45 --> Could not find the language line "Home"
ERROR - 2024-10-27 00:42:02 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 00:42:03 --> Could not find the language line "Other"
ERROR - 2024-10-27 00:42:03 --> Could not find the language line "Other"
ERROR - 2024-10-27 00:42:04 --> Could not find the language line "Other"
ERROR - 2024-10-27 00:42:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 00:42:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 00:42:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 00:42:19 --> Could not find the language line "Other"
ERROR - 2024-10-27 00:42:19 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 00:45:11 --> Could not find the language line "Home"
ERROR - 2024-10-27 01:02:18 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 01:04:16 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-10-27 01:10:47 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-27 01:14:11 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-27 01:15:10 --> Could not find the language line "Home"
ERROR - 2024-10-27 01:26:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-27 01:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 01:45:10 --> Could not find the language line "Home"
ERROR - 2024-10-27 01:59:57 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 02:15:30 --> Could not find the language line "Home"
ERROR - 2024-10-27 02:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 02:27:09 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 02:29:07 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 02:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 02:33:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-27 02:33:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-27 02:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 02:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 02:33:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-27 02:33:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-27 02:33:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-27 02:33:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-27 02:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 02:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 02:37:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-27 02:37:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-27 02:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 02:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 02:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 02:45:14 --> Could not find the language line "Home"
ERROR - 2024-10-27 03:15:14 --> Could not find the language line "Home"
ERROR - 2024-10-27 03:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 03:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 03:45:14 --> Could not find the language line "Home"
ERROR - 2024-10-27 04:08:22 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 04:08:23 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 04:08:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 04:08:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 04:08:24 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 04:15:14 --> Could not find the language line "Home"
ERROR - 2024-10-27 04:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 04:45:12 --> Could not find the language line "Home"
ERROR - 2024-10-27 04:46:51 --> Could not find the language line "Home"
ERROR - 2024-10-27 04:46:57 --> Could not find the language line "Home"
ERROR - 2024-10-27 04:47:06 --> Could not find the language line "Disclaimer"
ERROR - 2024-10-27 04:47:07 --> Could not find the language line "Home"
ERROR - 2024-10-27 04:47:10 --> Could not find the language line "Bracelets"
ERROR - 2024-10-27 04:47:11 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 04:47:12 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 04:47:13 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 04:47:13 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 04:47:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 04:47:17 --> Could not find the language line "Other"
ERROR - 2024-10-27 04:47:17 --> Could not find the language line "Other"
ERROR - 2024-10-27 04:47:18 --> Could not find the language line "Other"
ERROR - 2024-10-27 04:47:19 --> Could not find the language line "Perfume"
ERROR - 2024-10-27 04:47:23 --> Could not find the language line "Socks"
ERROR - 2024-10-27 04:47:25 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-27 04:47:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-27 04:47:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-27 04:50:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 04:50:08 --> Could not find the language line "Home"
ERROR - 2024-10-27 04:51:49 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 04:54:10 --> Could not find the language line "Home"
ERROR - 2024-10-27 04:58:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 05:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 05:02:33 --> Could not find the language line "Crocs"
ERROR - 2024-10-27 05:06:10 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-27 05:08:35 --> Could not find the language line "Home"
ERROR - 2024-10-27 05:15:16 --> Could not find the language line "Home"
ERROR - 2024-10-27 05:21:15 --> Could not find the language line "Home"
ERROR - 2024-10-27 05:24:01 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-27 05:24:16 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-27 05:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 05:45:13 --> Could not find the language line "Home"
ERROR - 2024-10-27 05:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 05:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 05:48:13 --> Could not find the language line "Home"
ERROR - 2024-10-27 05:54:14 --> Could not find the language line "Home"
ERROR - 2024-10-27 05:55:23 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-27 06:15:13 --> Could not find the language line "Home"
ERROR - 2024-10-27 06:28:12 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-27 06:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 06:45:12 --> Could not find the language line "Home"
ERROR - 2024-10-27 07:00:52 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-10-27 07:00:52 --> Could not find the language line "Home"
ERROR - 2024-10-27 07:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 07:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 07:09:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-27 07:09:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-27 07:15:12 --> Could not find the language line "Home"
ERROR - 2024-10-27 07:24:57 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-27 07:45:12 --> Could not find the language line "Home"
ERROR - 2024-10-27 07:45:15 --> Could not find the language line "Home"
ERROR - 2024-10-27 08:03:52 --> Could not find the language line "Home"
ERROR - 2024-10-27 08:10:15 --> Could not find the language line "Home"
ERROR - 2024-10-27 08:15:15 --> Could not find the language line "Home"
ERROR - 2024-10-27 08:25:18 --> Could not find the language line "Home"
ERROR - 2024-10-27 08:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 08:45:16 --> Could not find the language line "Home"
ERROR - 2024-10-27 08:57:08 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-10-27 09:15:20 --> Could not find the language line "Home"
ERROR - 2024-10-27 09:23:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-27 09:23:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-27 09:24:44 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-27 09:24:58 --> Could not find the language line "Socks"
ERROR - 2024-10-27 09:25:34 --> Could not find the language line "Perfume"
ERROR - 2024-10-27 09:25:45 --> Could not find the language line "Other"
ERROR - 2024-10-27 09:25:57 --> Could not find the language line "Other"
ERROR - 2024-10-27 09:26:08 --> Could not find the language line "Other"
ERROR - 2024-10-27 09:26:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 09:27:09 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 09:27:22 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 09:27:35 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 09:27:48 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 09:28:00 --> Could not find the language line "Bracelets"
ERROR - 2024-10-27 09:28:45 --> Could not find the language line "Home"
ERROR - 2024-10-27 09:29:23 --> Could not find the language line "Disclaimer"
ERROR - 2024-10-27 09:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 09:39:19 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-27 09:39:20 --> Could not find the language line "Home"
ERROR - 2024-10-27 09:42:04 --> Could not find the language line "Home"
ERROR - 2024-10-27 09:45:15 --> Could not find the language line "Home"
ERROR - 2024-10-27 09:52:06 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-10-27 09:54:10 --> Could not find the language line "Home"
ERROR - 2024-10-27 09:56:03 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 10:01:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 10:01:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 10:02:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 10:02:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 10:02:41 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 10:02:55 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-27 10:04:38 --> Could not find the language line "Home"
ERROR - 2024-10-27 10:07:12 --> Could not find the language line "Home"
ERROR - 2024-10-27 10:08:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 10:14:19 --> Could not find the language line "Other"
ERROR - 2024-10-27 10:14:43 --> Could not find the language line "Home"
ERROR - 2024-10-27 10:15:14 --> Could not find the language line "Home"
ERROR - 2024-10-27 10:19:29 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-10-27 10:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 10:29:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-27 10:32:10 --> Could not find the language line "Perfume"
ERROR - 2024-10-27 10:32:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 10:33:20 --> Could not find the language line "Home"
ERROR - 2024-10-27 10:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 10:38:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-27 10:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 10:38:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-27 10:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 10:38:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-27 10:38:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-27 10:42:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 10:42:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 10:42:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 10:43:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 10:43:22 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 10:43:37 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-27 10:45:15 --> Could not find the language line "Home"
ERROR - 2024-10-27 10:51:13 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-27 10:51:31 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-27 10:51:46 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 10:51:59 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 11:09:25 --> Could not find the language line "Home"
ERROR - 2024-10-27 11:15:16 --> Could not find the language line "Home"
ERROR - 2024-10-27 11:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 11:38:39 --> Could not find the language line "Home"
ERROR - 2024-10-27 11:45:16 --> Could not find the language line "Home"
ERROR - 2024-10-27 11:52:21 --> Could not find the language line "Home"
ERROR - 2024-10-27 12:06:57 --> Could not find the language line "Home"
ERROR - 2024-10-27 12:13:12 --> Could not find the language line "Home"
ERROR - 2024-10-27 12:15:15 --> Could not find the language line "Home"
ERROR - 2024-10-27 12:45:16 --> Could not find the language line "Home"
ERROR - 2024-10-27 12:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 12:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 12:57:39 --> 404 Page Not Found: Autodiscover/autodiscover.xml
ERROR - 2024-10-27 12:57:39 --> 404 Page Not Found: Autodiscover/autodiscover.xml
ERROR - 2024-10-27 13:02:22 --> Could not find the language line "Home"
ERROR - 2024-10-27 13:07:38 --> Could not find the language line "Home"
ERROR - 2024-10-27 13:08:10 --> Could not find the language line "Home"
ERROR - 2024-10-27 13:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 13:15:15 --> Could not find the language line "Home"
ERROR - 2024-10-27 13:21:42 --> Could not find the language line "Home"
ERROR - 2024-10-27 13:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 13:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 13:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 13:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 13:24:33 --> Could not find the language line "Home"
ERROR - 2024-10-27 13:45:17 --> Could not find the language line "Home"
ERROR - 2024-10-27 14:15:18 --> Could not find the language line "Home"
ERROR - 2024-10-27 14:26:26 --> Could not find the language line "Home"
ERROR - 2024-10-27 14:37:40 --> Could not find the language line "Home"
ERROR - 2024-10-27 14:45:17 --> Could not find the language line "Home"
ERROR - 2024-10-27 14:49:07 --> Could not find the language line "Home"
ERROR - 2024-10-27 14:52:43 --> Could not find the language line "Home"
ERROR - 2024-10-27 15:15:18 --> Could not find the language line "Home"
ERROR - 2024-10-27 15:26:18 --> Could not find the language line "Home"
ERROR - 2024-10-27 15:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 15:36:46 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-10-27 15:37:37 --> Could not find the language line "Home"
ERROR - 2024-10-27 15:45:17 --> Could not find the language line "Home"
ERROR - 2024-10-27 15:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 15:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 15:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 15:45:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-27 15:45:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-27 15:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 15:48:20 --> Could not find the language line "Home"
ERROR - 2024-10-27 15:50:44 --> Could not find the language line "Home"
ERROR - 2024-10-27 15:51:39 --> Could not find the language line "Home"
ERROR - 2024-10-27 16:15:16 --> Could not find the language line "Home"
ERROR - 2024-10-27 16:24:25 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-27 16:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 16:39:53 --> Could not find the language line "Home"
ERROR - 2024-10-27 16:39:56 --> Could not find the language line "Home"
ERROR - 2024-10-27 16:44:47 --> Could not find the language line "Home"
ERROR - 2024-10-27 16:45:17 --> Could not find the language line "Home"
ERROR - 2024-10-27 16:56:09 --> Could not find the language line "Home"
ERROR - 2024-10-27 16:56:09 --> Could not find the language line "Home"
ERROR - 2024-10-27 17:15:17 --> Could not find the language line "Home"
ERROR - 2024-10-27 17:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 17:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 17:45:17 --> Could not find the language line "Home"
ERROR - 2024-10-27 18:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 18:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 18:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 18:14:10 --> Could not find the language line "Other"
ERROR - 2024-10-27 18:15:18 --> Could not find the language line "Home"
ERROR - 2024-10-27 18:17:54 --> Could not find the language line "Other"
ERROR - 2024-10-27 18:19:59 --> Could not find the language line "Home"
ERROR - 2024-10-27 18:20:01 --> 404 Page Not Found: 404error_testhtml/index
ERROR - 2024-10-27 18:20:03 --> 404 Page Not Found: Contact_us/index
ERROR - 2024-10-27 18:24:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-27 18:40:19 --> Could not find the language line "Other"
ERROR - 2024-10-27 18:45:18 --> Could not find the language line "Home"
ERROR - 2024-10-27 18:58:43 --> Could not find the language line "Home"
ERROR - 2024-10-27 19:14:44 --> Could not find the language line "Home"
ERROR - 2024-10-27 19:15:18 --> Could not find the language line "Home"
ERROR - 2024-10-27 19:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 19:43:37 --> Could not find the language line "Home"
ERROR - 2024-10-27 19:45:18 --> Could not find the language line "Home"
ERROR - 2024-10-27 19:47:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-27 19:51:00 --> Could not find the language line "Home"
ERROR - 2024-10-27 19:55:17 --> Could not find the language line "Home"
ERROR - 2024-10-27 20:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 20:15:19 --> Could not find the language line "Home"
ERROR - 2024-10-27 20:19:08 --> Could not find the language line "Home"
ERROR - 2024-10-27 20:45:19 --> Could not find the language line "Home"
ERROR - 2024-10-27 21:15:20 --> Could not find the language line "Home"
ERROR - 2024-10-27 21:17:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-27 21:45:19 --> Could not find the language line "Home"
ERROR - 2024-10-27 22:11:33 --> Could not find the language line "Clothing"
ERROR - 2024-10-27 22:15:21 --> Could not find the language line "Home"
ERROR - 2024-10-27 22:45:28 --> Could not find the language line "Home"
ERROR - 2024-10-27 23:15:22 --> Could not find the language line "Home"
ERROR - 2024-10-27 23:17:29 --> Could not find the language line "Home"
ERROR - 2024-10-27 23:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-27 23:41:12 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-27 23:45:26 --> Could not find the language line "Home"
