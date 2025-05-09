<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-30 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-30 00:00:35 --> Could not find the language line "Home"
ERROR - 2023-04-30 00:02:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-30 00:06:55 --> Could not find the language line "Home"
ERROR - 2023-04-30 00:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 00:13:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-30 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-30 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-30 01:04:44 --> Could not find the language line "Home"
ERROR - 2023-04-30 01:13:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 01:13:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 01:14:20 --> Could not find the language line "Home"
ERROR - 2023-04-30 01:15:48 --> Could not find the language line "Home"
ERROR - 2023-04-30 01:17:54 --> Could not find the language line "Home"
ERROR - 2023-04-30 01:17:56 --> Could not find the language line "Home"
ERROR - 2023-04-30 01:17:59 --> Could not find the language line "Home"
ERROR - 2023-04-30 01:24:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-30 01:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-30 01:36:49 --> Could not find the language line "Home"
ERROR - 2023-04-30 01:45:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-30 02:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 02:07:37 --> Could not find the language line "Home"
ERROR - 2023-04-30 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-30 02:34:55 --> Could not find the language line "Home"
ERROR - 2023-04-30 02:37:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-30 03:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 03:27:20 --> Could not find the language line "Home"
ERROR - 2023-04-30 03:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-30 04:21:07 --> Could not find the language line "Home"
ERROR - 2023-04-30 04:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 04:30:50 --> Could not find the language line "Home"
ERROR - 2023-04-30 04:31:30 --> Could not find the language line "Home"
ERROR - 2023-04-30 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-30 05:17:52 --> Could not find the language line "Home"
ERROR - 2023-04-30 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-30 05:34:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-30 05:47:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 05:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 05:49:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-30 05:52:32 --> Could not find the language line "Home"
ERROR - 2023-04-30 05:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 05:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 05:53:34 --> Could not find the language line "Home"
ERROR - 2023-04-30 05:57:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 05:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 05:59:15 --> Could not find the language line "Home"
ERROR - 2023-04-30 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-30 06:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:12:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-30 06:12:26 --> Could not find the language line "Home"
ERROR - 2023-04-30 06:12:28 --> Could not find the language line "Home"
ERROR - 2023-04-30 06:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:30:09 --> Could not find the language line "Home"
ERROR - 2023-04-30 06:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:34:19 --> 404 Page Not Found: Storage/settings
ERROR - 2023-04-30 06:34:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-30 06:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 06:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-30 07:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 07:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:31:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 07:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:38:24 --> Could not find the language line "Home"
ERROR - 2023-04-30 07:38:28 --> Could not find the language line "Home"
ERROR - 2023-04-30 07:38:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 07:38:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 07:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:38:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 07:38:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 07:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:38:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 07:38:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 07:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:38:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 07:38:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 07:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:38:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 07:38:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 07:39:01 --> Could not find the language line "Home"
ERROR - 2023-04-30 07:39:02 --> Could not find the language line "Socks"
ERROR - 2023-04-30 07:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:39:29 --> Could not find the language line "Socks"
ERROR - 2023-04-30 07:39:42 --> Could not find the language line "Socks"
ERROR - 2023-04-30 07:39:51 --> Could not find the language line "Home"
ERROR - 2023-04-30 07:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:42:04 --> Could not find the language line "Home"
ERROR - 2023-04-30 07:42:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 07:42:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 07:42:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 07:42:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 07:42:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 07:43:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 07:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:45:46 --> 404 Page Not Found: Administrator/components
ERROR - 2023-04-30 07:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 07:53:22 --> Could not find the language line "Home"
ERROR - 2023-04-30 07:54:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 07:58:51 --> Could not find the language line "Bracelets"
ERROR - 2023-04-30 07:59:44 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 07:59:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:02:16 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:06:33 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:09:16 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=81 864 232 &amp;text=4173%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-04-30 08:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:09:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:09:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:09:39 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:09:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:09:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:09:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:10:08 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:10:43 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:10:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:10:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:11:33 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:12:03 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:12:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-30 08:12:07 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:12:20 --> Could not find the language line "Perfume"
ERROR - 2023-04-30 08:12:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:12:34 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:12:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-30 08:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:12:53 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:13:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-30 08:13:16 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:13:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-30 08:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:13:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-30 08:14:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:14:38 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:14:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:17:00 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:17:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:19:05 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:19:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:19:58 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:21:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:23:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:23:08 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:24:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:24:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:24:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:24:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:25:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:25:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-30 08:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:26:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:27:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:27:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:27:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:31:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:31:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:34:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:34:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:35:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:37:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:37:31 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 08:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:43:43 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:44:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-30 08:44:02 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:51:08 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:53:21 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:54:07 --> Could not find the language line "Home"
ERROR - 2023-04-30 08:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 08:59:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-30 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:01:51 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:05:28 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:15:34 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:19:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-30 09:19:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-30 09:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:19:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-30 09:19:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-30 09:20:17 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:22:26 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:22:27 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:22:27 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:22:28 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:22:28 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:22:29 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:24:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-30 09:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:26:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-30 09:26:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-30 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:31:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-30 09:37:45 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:39:16 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:45:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-30 09:45:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '15'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-30 09:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:55:33 --> Could not find the language line "Home"
ERROR - 2023-04-30 09:57:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 09:57:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 09:57:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 09:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 09:57:58 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:00:34 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:03:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 10:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:03:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 10:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:04:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 10:04:29 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:07:31 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:07:59 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:10:16 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:13:44 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:13:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 10:13:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 10:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:14:31 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:15:32 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:18:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-30 10:20:17 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 10:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:29:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 10:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:36:28 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:36:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-30 10:36:41 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:36:44 --> Could not find the language line "Bracelets"
ERROR - 2023-04-30 10:37:02 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:37:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 10:37:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 10:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:37:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 10:37:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 10:37:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 10:37:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 10:37:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 10:37:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 10:37:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 10:37:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 10:37:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 10:37:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 10:38:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 10:38:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 10:38:06 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:38:19 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:38:33 --> Could not find the language line "Socks"
ERROR - 2023-04-30 10:38:49 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:39:48 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:40:24 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:40:33 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 10:47:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 10:47:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 10:47:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 10:47:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 10:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:52:11 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 10:55:33 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:56:27 --> Could not find the language line "Home"
ERROR - 2023-04-30 10:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 11:02:31 --> Could not find the language line "Home"
ERROR - 2023-04-30 11:03:34 --> Could not find the language line "Home"
ERROR - 2023-04-30 11:03:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 11:04:07 --> Could not find the language line "Home"
ERROR - 2023-04-30 11:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:04:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 11:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:04:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 11:05:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 11:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:05:08 --> Could not find the language line "Home"
ERROR - 2023-04-30 11:05:30 --> Could not find the language line "Home"
ERROR - 2023-04-30 11:05:45 --> Could not find the language line "Bracelets"
ERROR - 2023-04-30 11:05:59 --> Could not find the language line "Bracelets"
ERROR - 2023-04-30 11:07:40 --> Could not find the language line "Home"
ERROR - 2023-04-30 11:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:24:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 11:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:25:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 11:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:25:31 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 11:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:25:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 11:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:25:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 11:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:25:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 11:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:28:08 --> Could not find the language line "Home"
ERROR - 2023-04-30 11:28:11 --> Could not find the language line "Home"
ERROR - 2023-04-30 11:28:23 --> Could not find the language line "Home"
ERROR - 2023-04-30 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-30 11:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:55:34 --> Could not find the language line "Home"
ERROR - 2023-04-30 11:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 11:59:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 11:59:24 --> Could not find the language line "Home"
ERROR - 2023-04-30 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-30 12:02:56 --> Could not find the language line "Home"
ERROR - 2023-04-30 12:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 12:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 12:09:20 --> Could not find the language line "Home"
ERROR - 2023-04-30 12:09:20 --> Could not find the language line "Home"
ERROR - 2023-04-30 12:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 12:13:30 --> Could not find the language line "Home"
ERROR - 2023-04-30 12:29:58 --> Could not find the language line "Home"
ERROR - 2023-04-30 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-30 12:31:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 12:40:16 --> Could not find the language line "Home"
ERROR - 2023-04-30 12:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 12:44:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-30 12:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 12:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 12:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 12:52:51 --> Could not find the language line "Home"
ERROR - 2023-04-30 12:52:52 --> Could not find the language line "Home"
ERROR - 2023-04-30 12:53:21 --> Could not find the language line "Home"
ERROR - 2023-04-30 12:54:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-30 12:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 12:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 13:00:01 --> Could not find the language line "Home"
ERROR - 2023-04-30 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-30 13:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 13:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 13:15:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-30 13:15:06 --> Could not find the language line "Home"
ERROR - 2023-04-30 13:15:15 --> Could not find the language line "Home"
ERROR - 2023-04-30 13:19:25 --> Could not find the language line "Home"
ERROR - 2023-04-30 13:20:53 --> Could not find the language line "Perfume"
ERROR - 2023-04-30 13:23:35 --> Could not find the language line "Home"
ERROR - 2023-04-30 13:23:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-30 13:23:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-30 13:24:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-30 13:26:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-30 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-30 13:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 13:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 13:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:09:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-30 14:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:09:42 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:10:30 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:10:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:10:50 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:11:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:11:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:11:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:12:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:12:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:12:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:12:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:12:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:12:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:12:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:12:45 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:13:15 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:13:26 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:16:57 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:17:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-30 14:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:17:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:17:12 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:17:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:17:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-30 14:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:17:34 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:17:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:18:06 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:18:07 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:18:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:18:26 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:18:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:18:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:18:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:18:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:18:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:18:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:19:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:19:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:19:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:19:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:19:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:19:52 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:24:47 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:24:51 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:25:18 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:32:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:33:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:33:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:33:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:33:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:33:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:33:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:33:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:33:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 14:33:55 --> Could not find the language line "Socks"
ERROR - 2023-04-30 14:34:14 --> Could not find the language line "Socks"
ERROR - 2023-04-30 14:34:18 --> Could not find the language line "Socks"
ERROR - 2023-04-30 14:34:22 --> Could not find the language line "Socks"
ERROR - 2023-04-30 14:34:37 --> Could not find the language line "Other"
ERROR - 2023-04-30 14:34:45 --> Could not find the language line "Bracelets"
ERROR - 2023-04-30 14:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:38:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:39:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 14:40:04 --> Could not find the language line "Perfume"
ERROR - 2023-04-30 14:40:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-30 14:40:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-30 14:40:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-30 14:41:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-30 14:41:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-30 14:41:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-30 14:41:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-30 14:41:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-30 14:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:45:58 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:49:02 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:49:05 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-30 14:49:05 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-30 14:49:06 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-30 14:49:06 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-30 14:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:52:56 --> Could not find the language line "Home"
ERROR - 2023-04-30 14:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 14:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-30 15:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 15:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 15:10:11 --> Could not find the language line "Home"
ERROR - 2023-04-30 15:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 15:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 15:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 15:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 15:18:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 15:19:20 --> Could not find the language line "Home"
ERROR - 2023-04-30 15:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 15:21:22 --> Could not find the language line "Bracelets"
ERROR - 2023-04-30 15:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 15:47:43 --> Could not find the language line "Home"
ERROR - 2023-04-30 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-30 16:01:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-30 16:08:49 --> Could not find the language line "Home"
ERROR - 2023-04-30 16:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 16:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 16:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 16:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 16:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 16:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 16:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 16:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 16:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-30 16:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 17:07:54 --> Could not find the language line "Home"
ERROR - 2023-04-30 17:08:13 --> Could not find the language line "Home"
ERROR - 2023-04-30 17:18:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-30 17:23:05 --> Could not find the language line "Home"
ERROR - 2023-04-30 17:23:22 --> Could not find the language line "Home"
ERROR - 2023-04-30 17:23:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 17:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 17:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 17:24:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 17:24:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 17:25:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 17:25:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 17:26:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 17:26:03 --> Could not find the language line "Home"
ERROR - 2023-04-30 17:26:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-30 17:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 17:56:18 --> Could not find the language line "Home"
ERROR - 2023-04-30 17:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 17:57:55 --> Could not find the language line "Home"
ERROR - 2023-04-30 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 18:01:39 --> Could not find the language line "Home"
ERROR - 2023-04-30 18:06:47 --> Could not find the language line "Home"
ERROR - 2023-04-30 18:21:00 --> Could not find the language line "Home"
ERROR - 2023-04-30 18:21:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 18:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 18:21:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 18:21:36 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 18:21:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 18:22:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 18:22:07 --> Could not find the language line "Home"
ERROR - 2023-04-30 18:25:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 18:26:42 --> Could not find the language line "Home"
ERROR - 2023-04-30 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-30 18:47:36 --> Could not find the language line "Home"
ERROR - 2023-04-30 18:48:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-30 18:48:30 --> Could not find the language line "Home"
ERROR - 2023-04-30 18:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-30 19:07:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:14:55 --> Could not find the language line "Home"
ERROR - 2023-04-30 19:14:55 --> Could not find the language line "Home"
ERROR - 2023-04-30 19:14:56 --> Could not find the language line "Home"
ERROR - 2023-04-30 19:15:04 --> Could not find the language line "Home"
ERROR - 2023-04-30 19:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:16:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 19:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-30 19:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 19:48:23 --> Could not find the language line "Home"
ERROR - 2023-04-30 19:59:06 --> Could not find the language line "Home"
ERROR - 2023-04-30 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-30 20:09:31 --> Could not find the language line "Home"
ERROR - 2023-04-30 20:10:12 --> Could not find the language line "Home"
ERROR - 2023-04-30 20:11:17 --> Could not find the language line "Home"
ERROR - 2023-04-30 20:11:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 20:11:33 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 20:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 20:11:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 20:11:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 20:11:49 --> Could not find the language line "Home"
ERROR - 2023-04-30 20:11:52 --> Could not find the language line "Socks"
ERROR - 2023-04-30 20:11:59 --> Could not find the language line "Socks"
ERROR - 2023-04-30 20:12:02 --> Could not find the language line "Socks"
ERROR - 2023-04-30 20:12:04 --> Could not find the language line "Home"
ERROR - 2023-04-30 20:12:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 20:12:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-30 20:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:26:54 --> Could not find the language line "Home"
ERROR - 2023-04-30 20:26:55 --> Could not find the language line "Home"
ERROR - 2023-04-30 20:26:56 --> Could not find the language line "Home"
ERROR - 2023-04-30 20:26:56 --> Could not find the language line "Home"
ERROR - 2023-04-30 20:27:19 --> Could not find the language line "Home"
ERROR - 2023-04-30 20:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-30 20:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:32:19 --> Could not find the language line "Home"
ERROR - 2023-04-30 20:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:35:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-30 20:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:45:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:45:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-30 20:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 20:50:08 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:00:16 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:07:26 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 21:07:50 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 21:08:03 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 21:08:53 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 21:09:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 21:09:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 21:10:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 21:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 21:10:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 21:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 21:11:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 21:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 21:11:08 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:11:08 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:11:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 21:11:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 21:11:22 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 21:11:40 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 21:12:13 --> Could not find the language line "Socks"
ERROR - 2023-04-30 21:12:28 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:12:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 21:13:00 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:13:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 21:13:13 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 21:13:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 21:13:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 21:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 21:14:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 21:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 21:24:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-30 21:24:48 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:25:37 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:28:41 --> Could not find the language line "Socks"
ERROR - 2023-04-30 21:28:43 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:37:07 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:50:14 --> Could not find the language line "Home"
ERROR - 2023-04-30 21:57:44 --> Could not find the language line "Home"
ERROR - 2023-04-30 22:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-30 22:07:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 22:27:46 --> Could not find the language line "Home"
ERROR - 2023-04-30 22:29:35 --> Could not find the language line "Home"
ERROR - 2023-04-30 22:29:40 --> Could not find the language line "Home"
ERROR - 2023-04-30 22:29:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 22:30:16 --> Could not find the language line "Home"
ERROR - 2023-04-30 22:30:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 22:30:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 22:31:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 22:31:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 22:31:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 22:32:13 --> Could not find the language line "Other"
ERROR - 2023-04-30 22:32:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 22:32:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 22:32:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 22:32:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-30 22:32:50 --> Could not find the language line "Home"
ERROR - 2023-04-30 22:33:38 --> Could not find the language line "Home"
ERROR - 2023-04-30 22:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 22:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 22:34:38 --> Could not find the language line "Home"
ERROR - 2023-04-30 22:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-30 23:26:24 --> Could not find the language line "Home"
ERROR - 2023-04-30 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-30 23:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-30 23:40:06 --> Could not find the language line "Home"
ERROR - 2023-04-30 23:40:06 --> Could not find the language line "Home"
ERROR - 2023-04-30 23:40:06 --> Could not find the language line "Home"
ERROR - 2023-04-30 23:41:26 --> Could not find the language line "Home"
