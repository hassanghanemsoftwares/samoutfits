<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-25 00:12:30 --> 404 Page Not Found: Assets/lib
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-25 00:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:14:53 --> Could not find the language line "Home"
ERROR - 2024-04-25 00:17:02 --> Could not find the language line "Home"
ERROR - 2024-04-25 00:19:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 00:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:20:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 00:20:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 00:20:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 00:20:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 00:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:20:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 00:24:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 00:28:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-25 00:28:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-25 00:28:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-25 00:32:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-25 00:32:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-25 00:32:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-25 00:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:36:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 00:36:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 00:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:36:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 00:36:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 00:36:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 00:36:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 00:40:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-25 00:40:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-25 00:40:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-25 00:44:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 00:44:53 --> Could not find the language line "Home"
ERROR - 2024-04-25 00:56:02 --> Could not find the language line "Home"
ERROR - 2024-04-25 00:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:56:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 00:56:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 00:56:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 00:56:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 00:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:57:48 --> Could not find the language line "Home"
ERROR - 2024-04-25 00:57:55 --> Could not find the language line "Bracelets"
ERROR - 2024-04-25 00:58:15 --> Could not find the language line "Bracelets"
ERROR - 2024-04-25 00:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:58:30 --> Could not find the language line "Bracelets"
ERROR - 2024-04-25 00:58:33 --> Could not find the language line "Home"
ERROR - 2024-04-25 00:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 00:59:08 --> Could not find the language line "Home"
ERROR - 2024-04-25 00:59:24 --> Could not find the language line "Home"
ERROR - 2024-04-25 00:59:28 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-25 00:59:35 --> Could not find the language line "Home"
ERROR - 2024-04-25 00:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:00:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 01:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:00:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 01:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:01:02 --> Could not find the language line "Home"
ERROR - 2024-04-25 01:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:12:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 01:14:51 --> Could not find the language line "Home"
ERROR - 2024-04-25 01:17:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 01:19:03 --> Could not find the language line "Home"
ERROR - 2024-04-25 01:20:33 --> Could not find the language line "Other"
ERROR - 2024-04-25 01:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:24:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 01:32:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 01:32:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 01:32:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 01:36:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 01:44:41 --> 404 Page Not Found: Images/login5.jpg
ERROR - 2024-04-25 01:44:55 --> Could not find the language line "Home"
ERROR - 2024-04-25 01:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:48:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 01:48:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 01:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:51:00 --> Could not find the language line "Home"
ERROR - 2024-04-25 01:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:54:54 --> Could not find the language line "Home"
ERROR - 2024-04-25 01:56:37 --> Could not find the language line "Home"
ERROR - 2024-04-25 01:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 01:59:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 02:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 02:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 02:04:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 02:04:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 02:04:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 02:04:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 02:08:44 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-25 02:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 02:14:57 --> Could not find the language line "Home"
ERROR - 2024-04-25 02:32:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 02:40:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 02:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 02:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 02:40:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 02:40:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 02:40:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 02:40:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 02:44:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:44:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 02:45:12 --> Could not find the language line "Home"
ERROR - 2024-04-25 02:49:56 --> Could not find the language line "products"
ERROR - 2024-04-25 02:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 02:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 02:56:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 02:56:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 02:56:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 03:00:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 03:04:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 03:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:08:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 03:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:08:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 03:14:56 --> Could not find the language line "Home"
ERROR - 2024-04-25 03:16:46 --> Could not find the language line "Other"
ERROR - 2024-04-25 03:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:16:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 03:19:16 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-25 03:20:46 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-25 03:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:23:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 03:24:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 03:24:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 03:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:32:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 03:36:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 03:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:37:08 --> Could not find the language line "Home"
ERROR - 2024-04-25 03:37:41 --> Could not find the language line "Home"
ERROR - 2024-04-25 03:37:47 --> Could not find the language line "Home"
ERROR - 2024-04-25 03:37:57 --> Could not find the language line "Home"
ERROR - 2024-04-25 03:38:01 --> Could not find the language line "Home"
ERROR - 2024-04-25 03:40:50 --> Could not find the language line "Disclaimer"
ERROR - 2024-04-25 03:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:44:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 03:44:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 03:44:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 03:45:00 --> Could not find the language line "Home"
ERROR - 2024-04-25 03:45:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 03:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:47:09 --> Could not find the language line "products"
ERROR - 2024-04-25 03:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 03:52:13 --> Could not find the language line "products"
ERROR - 2024-04-25 03:52:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 03:52:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 03:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:04:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 04:08:32 --> Could not find the language line "products"
ERROR - 2024-04-25 04:11:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 04:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:14:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 04:14:59 --> Could not find the language line "Home"
ERROR - 2024-04-25 04:20:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 04:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:20:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 04:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:24:57 --> Could not find the language line "products"
ERROR - 2024-04-25 04:25:36 --> Could not find the language line "Home"
ERROR - 2024-04-25 04:26:24 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-04-25 04:26:24 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-04-25 04:26:24 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-04-25 04:26:26 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-25 04:26:26 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-04-25 04:26:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 04:26:45 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-25 04:26:46 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-04-25 04:26:46 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-04-25 04:26:46 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-04-25 04:26:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 04:26:46 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-04-25 04:26:46 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-04-25 04:31:07 --> Could not find the language line "Home"
ERROR - 2024-04-25 04:32:20 --> Could not find the language line "Home"
ERROR - 2024-04-25 04:32:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 04:32:55 --> Could not find the language line "Home"
ERROR - 2024-04-25 04:32:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 04:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:33:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 04:33:23 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 04:44:53 --> Could not find the language line "Home"
ERROR - 2024-04-25 04:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:46:44 --> Could not find the language line "products"
ERROR - 2024-04-25 04:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:50:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 04:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 04:58:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 04:58:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 04:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:00:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 05:00:37 --> Could not find the language line "Home"
ERROR - 2024-04-25 05:00:39 --> Could not find the language line "Home"
ERROR - 2024-04-25 05:00:50 --> Could not find the language line "Home"
ERROR - 2024-04-25 05:01:22 --> Could not find the language line "Home"
ERROR - 2024-04-25 05:01:55 --> Could not find the language line "Home"
ERROR - 2024-04-25 05:02:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 05:03:00 --> Could not find the language line "Home"
ERROR - 2024-04-25 05:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:10:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 05:10:25 --> Could not find the language line "Home"
ERROR - 2024-04-25 05:14:57 --> Could not find the language line "Home"
ERROR - 2024-04-25 05:15:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 05:15:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 05:15:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 05:15:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 05:15:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 05:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:23:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:23:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:27:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 05:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:31:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:31:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:35:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:35:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:38:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 05:38:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 05:38:33 --> Could not find the language line "Socks"
ERROR - 2024-04-25 05:39:28 --> Could not find the language line "Socks"
ERROR - 2024-04-25 05:39:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 05:40:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 05:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:40:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:40:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:40:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 05:40:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 05:40:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 05:40:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 05:40:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 05:40:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 05:40:12 --> Could not find the language line "Socks"
ERROR - 2024-04-25 05:44:11 --> Could not find the language line "Home"
ERROR - 2024-04-25 05:44:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:44:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:44:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:44:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:44:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 05:44:57 --> Could not find the language line "Home"
ERROR - 2024-04-25 05:46:08 --> Could not find the language line "Home"
ERROR - 2024-04-25 05:48:14 --> Could not find the language line "Other"
ERROR - 2024-04-25 05:48:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:52:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:52:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 05:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 05:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:04:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 06:06:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 06:08:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 06:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:12:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 06:12:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 06:12:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 06:14:49 --> Could not find the language line "Home"
ERROR - 2024-04-25 06:14:50 --> Could not find the language line "Home"
ERROR - 2024-04-25 06:14:53 --> Could not find the language line "Home"
ERROR - 2024-04-25 06:16:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 06:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:18:07 --> Could not find the language line "Home"
ERROR - 2024-04-25 06:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:19:58 --> Could not find the language line "products"
ERROR - 2024-04-25 06:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:20:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 06:20:59 --> Could not find the language line "Home"
ERROR - 2024-04-25 06:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:23:49 --> Could not find the language line "Home"
ERROR - 2024-04-25 06:23:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 06:24:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 06:28:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 06:31:05 --> Could not find the language line "Home"
ERROR - 2024-04-25 06:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:38:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 06:44:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 06:44:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 06:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:44:55 --> Could not find the language line "Home"
ERROR - 2024-04-25 06:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:49:07 --> Could not find the language line "Home"
ERROR - 2024-04-25 06:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:52:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 06:52:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 06:54:26 --> Could not find the language line "Home"
ERROR - 2024-04-25 06:56:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 06:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 06:59:37 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-04-25 06:59:38 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-04-25 07:02:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 07:02:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 07:02:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 07:03:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 07:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:04:29 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-25 07:05:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 07:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:12:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 07:12:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 07:14:39 --> Could not find the language line "Home"
ERROR - 2024-04-25 07:14:42 --> Could not find the language line "Home"
ERROR - 2024-04-25 07:14:54 --> Could not find the language line "Home"
ERROR - 2024-04-25 07:16:46 --> Could not find the language line "Home"
ERROR - 2024-04-25 07:16:52 --> Could not find the language line "Home"
ERROR - 2024-04-25 07:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:20:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 07:20:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 07:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:24:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 07:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:24:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 07:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:27:54 --> Could not find the language line "Home"
ERROR - 2024-04-25 07:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:28:26 --> Could not find the language line "products"
ERROR - 2024-04-25 07:30:02 --> Could not find the language line "Home"
ERROR - 2024-04-25 07:32:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 07:32:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 07:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:36:23 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-04-25 07:36:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 07:36:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 07:36:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 07:37:33 --> Could not find the language line "Home"
ERROR - 2024-04-25 07:40:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 07:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:44:55 --> Could not find the language line "Home"
ERROR - 2024-04-25 07:48:52 --> Could not find the language line "Home"
ERROR - 2024-04-25 07:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:52:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 07:52:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 07:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:52:53 --> Could not find the language line "Home"
ERROR - 2024-04-25 07:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:56:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 07:56:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 07:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:58:35 --> Could not find the language line "products"
ERROR - 2024-04-25 07:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 07:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:00:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 08:00:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 08:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:03:23 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:04:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 08:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:04:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 08:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:06:00 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:08:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 08:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:08:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 08:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:14:56 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:15:23 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:15:24 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:19:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 08:19:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 08:19:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 08:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:23:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 08:23:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 08:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:28:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 08:28:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 08:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:32:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 08:32:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 08:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:40:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 08:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:40:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 08:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:40:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 08:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:41:24 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:44:55 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:45:13 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:47:44 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:48:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 08:48:42 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:48:53 --> Could not find the language line "Socks"
ERROR - 2024-04-25 08:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 08:52:16 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:52:16 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:52:38 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:52:41 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:52:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 08:52:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 08:52:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 08:52:43 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:52:43 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:52:44 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:52:44 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:55:40 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:56:18 --> Could not find the language line "Socks"
ERROR - 2024-04-25 08:56:28 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:56:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 08:56:53 --> Could not find the language line "Home"
ERROR - 2024-04-25 08:58:39 --> Could not find the language line "products"
ERROR - 2024-04-25 08:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:08:00 --> Could not find the language line "Home"
ERROR - 2024-04-25 09:08:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 09:09:08 --> Could not find the language line "products"
ERROR - 2024-04-25 09:12:59 --> Could not find the language line "Home"
ERROR - 2024-04-25 09:13:00 --> Could not find the language line "Home"
ERROR - 2024-04-25 09:13:07 --> Could not find the language line "Home"
ERROR - 2024-04-25 09:13:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 09:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:14:57 --> Could not find the language line "Home"
ERROR - 2024-04-25 09:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:16:33 --> Could not find the language line "Home"
ERROR - 2024-04-25 09:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:22:35 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-25 09:28:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 09:28:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 09:30:02 --> Could not find the language line "Home"
ERROR - 2024-04-25 09:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:40:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 09:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:44:56 --> Could not find the language line "Home"
ERROR - 2024-04-25 09:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:47:58 --> Could not find the language line "Home"
ERROR - 2024-04-25 09:51:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 09:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 09:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:03:29 --> Could not find the language line "Home"
ERROR - 2024-04-25 10:03:33 --> Could not find the language line "products"
ERROR - 2024-04-25 10:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:08:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 10:09:00 --> Could not find the language line "Home"
ERROR - 2024-04-25 10:12:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 10:12:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 10:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:14:58 --> Could not find the language line "Home"
ERROR - 2024-04-25 10:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:16:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 10:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:20:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 10:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:24:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 10:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:24:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 10:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:32:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-25 10:32:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-25 10:32:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-25 10:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 10:44:58 --> Could not find the language line "Home"
ERROR - 2024-04-25 10:48:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 10:53:49 --> Could not find the language line "Home"
ERROR - 2024-04-25 11:04:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 11:08:45 --> Could not find the language line "Perfume"
ERROR - 2024-04-25 11:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 11:08:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 11:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 11:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 11:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 11:14:45 --> Could not find the language line "Home"
ERROR - 2024-04-25 11:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 11:14:57 --> Could not find the language line "Home"
ERROR - 2024-04-25 11:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 11:26:00 --> Could not find the language line "Home"
ERROR - 2024-04-25 11:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 11:28:49 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-25 11:28:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 11:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 11:32:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 11:32:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 11:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 11:35:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 11:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 11:44:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 11:45:00 --> Could not find the language line "Home"
ERROR - 2024-04-25 11:45:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 11:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 11:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 11:48:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 11:48:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 11:48:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 11:48:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 11:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 11:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 11:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:08:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 12:08:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 12:08:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 12:08:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 12:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:11:57 --> Could not find the language line "Home"
ERROR - 2024-04-25 12:14:07 --> Could not find the language line "Home"
ERROR - 2024-04-25 12:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:14:58 --> Could not find the language line "Home"
ERROR - 2024-04-25 12:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:19:07 --> Could not find the language line "Home"
ERROR - 2024-04-25 12:25:25 --> Could not find the language line "products"
ERROR - 2024-04-25 12:39:15 --> Could not find the language line "products"
ERROR - 2024-04-25 12:45:00 --> Could not find the language line "Home"
ERROR - 2024-04-25 12:52:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 12:52:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 12:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 12:56:27 --> Could not find the language line "Home"
ERROR - 2024-04-25 12:56:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 13:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 13:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 13:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 13:14:58 --> Could not find the language line "Home"
ERROR - 2024-04-25 13:18:22 --> Could not find the language line "Home"
ERROR - 2024-04-25 13:20:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-25 13:20:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-25 13:20:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-25 13:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 13:29:39 --> Could not find the language line "Home"
ERROR - 2024-04-25 13:45:00 --> Could not find the language line "Home"
ERROR - 2024-04-25 13:45:07 --> Could not find the language line "Home"
ERROR - 2024-04-25 13:45:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 13:45:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 13:45:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 13:45:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 13:45:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 13:45:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 13:45:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 13:45:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 13:45:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 13:45:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 13:45:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 13:47:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 13:48:20 --> Could not find the language line "Home"
ERROR - 2024-04-25 13:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 13:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 13:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 13:51:06 --> Could not find the language line "Home"
ERROR - 2024-04-25 13:51:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 13:51:17 --> Could not find the language line "Home"
ERROR - 2024-04-25 13:52:19 --> Could not find the language line "Home"
ERROR - 2024-04-25 13:52:22 --> Could not find the language line "Home"
ERROR - 2024-04-25 13:52:46 --> Could not find the language line "Home"
ERROR - 2024-04-25 13:52:54 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-25 13:53:17 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-25 13:53:48 --> Could not find the language line "Socks"
ERROR - 2024-04-25 13:55:09 --> Could not find the language line "Home"
ERROR - 2024-04-25 13:55:09 --> Could not find the language line "Home"
ERROR - 2024-04-25 13:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 13:55:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-25 13:55:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 13:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 13:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 13:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 13:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 13:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 14:01:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 14:02:36 --> Could not find the language line "products"
ERROR - 2024-04-25 14:03:03 --> Could not find the language line "Home"
ERROR - 2024-04-25 14:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 14:05:30 --> Could not find the language line "Home"
ERROR - 2024-04-25 14:07:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-25 14:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 14:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 14:15:01 --> Could not find the language line "Home"
ERROR - 2024-04-25 14:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 14:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 14:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 14:17:28 --> Could not find the language line "Home"
ERROR - 2024-04-25 14:17:33 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-25 14:29:26 --> Could not find the language line "Home"
ERROR - 2024-04-25 14:45:00 --> Could not find the language line "Home"
ERROR - 2024-04-25 14:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 14:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 14:53:50 --> Could not find the language line "Home"
ERROR - 2024-04-25 14:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 14:54:12 --> Could not find the language line "products"
ERROR - 2024-04-25 14:57:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-25 14:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 14:58:12 --> Could not find the language line "Other"
ERROR - 2024-04-25 15:01:10 --> Could not find the language line "products"
ERROR - 2024-04-25 15:15:02 --> Could not find the language line "Home"
ERROR - 2024-04-25 15:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 15:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 15:32:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 15:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 15:38:22 --> Could not find the language line "products"
ERROR - 2024-04-25 15:45:01 --> Could not find the language line "Home"
ERROR - 2024-04-25 15:53:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 16:15:02 --> Could not find the language line "Home"
ERROR - 2024-04-25 16:17:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-25 16:17:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-25 16:17:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-25 16:27:07 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-04-25 16:29:31 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-04-25 16:34:32 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-04-25 16:34:32 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-04-25 16:34:33 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-04-25 16:34:33 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-04-25 16:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 16:39:08 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-04-25 16:45:01 --> Could not find the language line "Home"
ERROR - 2024-04-25 17:00:44 --> Could not find the language line "Home"
ERROR - 2024-04-25 17:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 17:01:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-25 17:01:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-25 17:01:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-25 17:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 17:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 17:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 17:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 17:07:31 --> Could not find the language line "products"
ERROR - 2024-04-25 17:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 17:15:02 --> Could not find the language line "Home"
ERROR - 2024-04-25 17:22:32 --> Could not find the language line "products"
ERROR - 2024-04-25 17:24:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 17:24:17 --> Could not find the language line "Home"
ERROR - 2024-04-25 17:33:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:33:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 17:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 17:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 17:41:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 17:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 17:43:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-25 17:44:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-25 17:44:24 --> Could not find the language line "Home"
ERROR - 2024-04-25 17:45:03 --> Could not find the language line "Home"
ERROR - 2024-04-25 17:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 17:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 17:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 17:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 17:50:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 17:52:28 --> Could not find the language line "Home"
ERROR - 2024-04-25 17:53:40 --> Could not find the language line "Home"
ERROR - 2024-04-25 17:53:47 --> Could not find the language line "Home"
ERROR - 2024-04-25 17:57:24 --> Could not find the language line "Home"
ERROR - 2024-04-25 18:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 18:07:15 --> Could not find the language line "Home"
ERROR - 2024-04-25 18:07:27 --> Could not find the language line "Home"
ERROR - 2024-04-25 18:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 18:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 18:09:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 18:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 18:13:53 --> Could not find the language line "Home"
ERROR - 2024-04-25 18:14:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:14:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:15:04 --> Could not find the language line "Home"
ERROR - 2024-04-25 18:18:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 18:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 18:19:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:19:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:19:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:19:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 18:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 18:22:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:22:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:22:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:22:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 18:24:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:24:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 18:24:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:24:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 18:25:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:25:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:25:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:25:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:25:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:25:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-25 18:25:39 --> Could not find the language line "Home"
ERROR - 2024-04-25 18:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 18:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 18:39:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 18:45:02 --> Could not find the language line "Home"
ERROR - 2024-04-25 18:48:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 18:48:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 18:52:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 18:56:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 19:00:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 19:04:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 19:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 19:08:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 19:09:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 19:10:54 --> Could not find the language line "Home"
ERROR - 2024-04-25 19:13:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 19:13:50 --> Could not find the language line "Home"
ERROR - 2024-04-25 19:15:05 --> Could not find the language line "Home"
ERROR - 2024-04-25 19:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 19:17:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 19:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 19:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 19:18:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 19:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 19:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 19:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 19:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 19:21:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 19:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 19:25:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 19:29:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 19:34:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 19:36:41 --> Could not find the language line "Home"
ERROR - 2024-04-25 19:40:10 --> Could not find the language line "Home"
ERROR - 2024-04-25 19:42:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 19:45:03 --> Could not find the language line "Home"
ERROR - 2024-04-25 19:50:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 19:54:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 19:55:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 20:02:08 --> Could not find the language line "Home"
ERROR - 2024-04-25 20:07:35 --> Could not find the language line "Home"
ERROR - 2024-04-25 20:11:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 20:15:04 --> Could not find the language line "Home"
ERROR - 2024-04-25 20:15:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 20:18:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 20:18:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 20:19:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 20:23:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 20:28:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 20:32:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 20:36:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 20:36:51 --> Could not find the language line "Home"
ERROR - 2024-04-25 20:39:08 --> Could not find the language line "Home"
ERROR - 2024-04-25 20:44:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 20:45:04 --> Could not find the language line "Home"
ERROR - 2024-04-25 20:48:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 20:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 20:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 20:49:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 20:49:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 20:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 20:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:05:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 21:05:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 21:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:05:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 21:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:15:07 --> Could not find the language line "Home"
ERROR - 2024-04-25 21:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:18:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 21:18:21 --> Could not find the language line "Home"
ERROR - 2024-04-25 21:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:22:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 21:22:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 21:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:26:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 21:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:37:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 21:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:38:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 21:38:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 21:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:42:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 21:42:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 21:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:43:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 21:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:45:04 --> Could not find the language line "Home"
ERROR - 2024-04-25 21:45:13 --> Could not find the language line "Home"
ERROR - 2024-04-25 21:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:47:53 --> Could not find the language line "Home"
ERROR - 2024-04-25 21:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:54:32 --> Could not find the language line "Home"
ERROR - 2024-04-25 21:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:54:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 21:54:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 21:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 21:58:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:06:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:10:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:10:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:11:42 --> Could not find the language line "Home"
ERROR - 2024-04-25 22:14:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:14:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:15:11 --> Could not find the language line "Home"
ERROR - 2024-04-25 22:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:21:25 --> Could not find the language line "Home"
ERROR - 2024-04-25 22:21:26 --> Could not find the language line "Home"
ERROR - 2024-04-25 22:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:22:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:22:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:25:46 --> Could not find the language line "Home"
ERROR - 2024-04-25 22:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:26:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:26:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:26:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 22:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:30:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:34:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-25 22:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:34:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:34:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:42:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:45:17 --> Could not find the language line "Home"
ERROR - 2024-04-25 22:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:46:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:46:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 22:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:47:30 --> Could not find the language line "Home"
ERROR - 2024-04-25 22:47:30 --> Could not find the language line "Home"
ERROR - 2024-04-25 22:47:30 --> Could not find the language line "Home"
ERROR - 2024-04-25 22:47:30 --> Could not find the language line "Home"
ERROR - 2024-04-25 22:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 22:50:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 22:59:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 23:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:02:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 23:02:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 23:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:15:12 --> Could not find the language line "Home"
ERROR - 2024-04-25 23:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:18:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 23:18:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 23:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:22:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 23:22:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 23:34:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 23:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:42:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-25 23:45:09 --> Could not find the language line "Home"
ERROR - 2024-04-25 23:50:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 23:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:50:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 23:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:58:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-25 23:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-25 23:58:46 --> 404 Page Not Found: Assets/lib
