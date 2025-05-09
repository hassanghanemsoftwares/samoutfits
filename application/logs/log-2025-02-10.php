<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-10 00:13:04 --> Could not find the language line "Home"
ERROR - 2025-02-10 00:15:21 --> Could not find the language line "Home"
ERROR - 2025-02-10 00:21:36 --> Could not find the language line "Home"
ERROR - 2025-02-10 00:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 00:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 00:27:37 --> Could not find the language line "Home"
ERROR - 2025-02-10 00:33:38 --> Could not find the language line "Home"
ERROR - 2025-02-10 00:34:37 --> Could not find the language line "Home"
ERROR - 2025-02-10 00:37:37 --> Could not find the language line "Home"
ERROR - 2025-02-10 00:39:24 --> Could not find the language line "Home"
ERROR - 2025-02-10 00:43:07 --> Could not find the language line "Home"
ERROR - 2025-02-10 00:53:01 --> Could not find the language line "Home"
ERROR - 2025-02-10 00:53:22 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 00:53:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-10 00:53:28 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 00:53:34 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 00:53:42 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 00:53:54 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 00:54:07 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 00:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 00:54:11 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 00:54:11 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 00:54:12 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 00:54:14 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 00:54:15 --> Could not find the language line "Home"
ERROR - 2025-02-10 00:54:17 --> Could not find the language line "Home"
ERROR - 2025-02-10 00:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 01:09:56 --> Could not find the language line "accounts"
ERROR - 2025-02-10 01:13:06 --> Could not find the language line "Home"
ERROR - 2025-02-10 01:15:58 --> Could not find the language line "accounts"
ERROR - 2025-02-10 01:17:27 --> Could not find the language line "Home"
ERROR - 2025-02-10 01:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 01:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 01:26:31 --> Could not find the language line "Home"
ERROR - 2025-02-10 01:27:08 --> Could not find the language line "accounts"
ERROR - 2025-02-10 01:33:37 --> Could not find the language line "Home"
ERROR - 2025-02-10 01:37:04 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-02-10 01:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 01:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 01:42:03 --> Could not find the language line "Crocs"
ERROR - 2025-02-10 01:43:00 --> Could not find the language line "Home"
ERROR - 2025-02-10 01:47:44 --> Could not find the language line "accounts"
ERROR - 2025-02-10 01:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 01:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 01:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 01:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 01:56:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 01:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 02:13:01 --> Could not find the language line "Home"
ERROR - 2025-02-10 02:15:04 --> Could not find the language line "accounts"
ERROR - 2025-02-10 02:26:59 --> Could not find the language line "accounts"
ERROR - 2025-02-10 02:34:46 --> Could not find the language line "accounts"
ERROR - 2025-02-10 02:43:03 --> Could not find the language line "Home"
ERROR - 2025-02-10 02:47:13 --> Could not find the language line "accounts"
ERROR - 2025-02-10 03:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 03:13:01 --> Could not find the language line "Home"
ERROR - 2025-02-10 03:14:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-10 03:16:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-10 03:21:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-10 03:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 03:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 03:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 03:38:44 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-10 03:43:07 --> Could not find the language line "Home"
ERROR - 2025-02-10 03:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 03:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 04:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 04:13:02 --> Could not find the language line "Home"
ERROR - 2025-02-10 04:16:19 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-10 04:16:20 --> Could not find the language line "Home"
ERROR - 2025-02-10 04:16:21 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-10 04:16:21 --> 404 Page Not Found: Bc/index
ERROR - 2025-02-10 04:16:22 --> 404 Page Not Found: Bk/index
ERROR - 2025-02-10 04:16:23 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-10 04:16:24 --> 404 Page Not Found: New/index
ERROR - 2025-02-10 04:16:25 --> 404 Page Not Found: Main/index
ERROR - 2025-02-10 04:16:25 --> Could not find the language line "Home"
ERROR - 2025-02-10 04:43:02 --> Could not find the language line "Home"
ERROR - 2025-02-10 05:13:03 --> Could not find the language line "Home"
ERROR - 2025-02-10 05:13:38 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-10 05:22:14 --> Could not find the language line "Home"
ERROR - 2025-02-10 05:25:51 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-10 05:39:20 --> 404 Page Not Found: Media/system
ERROR - 2025-02-10 05:39:21 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-02-10 05:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:43:02 --> Could not find the language line "Home"
ERROR - 2025-02-10 05:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:51:57 --> Could not find the language line "Home"
ERROR - 2025-02-10 05:51:59 --> Could not find the language line "Home"
ERROR - 2025-02-10 05:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 05:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:02:17 --> Could not find the language line "Home"
ERROR - 2025-02-10 06:02:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:02:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:02:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:02:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:03:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:03:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:03:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:03:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:03:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:03:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:04:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:04:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:04:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:04:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:04:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:04:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:05:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:05:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:05:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:05:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:05:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:05:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:06:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:06:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:06:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:06:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:06:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:06:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:07:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:07:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:07:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:07:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:07:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:07:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:07:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:07:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:07:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:07:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:08:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:08:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:08:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:08:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:08:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:08:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:08:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:08:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 06:08:12 --> Could not find the language line "Home"
ERROR - 2025-02-10 06:08:13 --> Could not find the language line "Home"
ERROR - 2025-02-10 06:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:13:07 --> Could not find the language line "Home"
ERROR - 2025-02-10 06:16:30 --> Could not find the language line "Home"
ERROR - 2025-02-10 06:16:58 --> Could not find the language line "Home"
ERROR - 2025-02-10 06:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 06:28:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-10 06:43:01 --> Could not find the language line "Home"
ERROR - 2025-02-10 06:59:11 --> Could not find the language line "Home"
ERROR - 2025-02-10 07:03:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-10 07:03:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 100
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-10 07:03:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 07:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 07:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 07:06:40 --> Could not find the language line "Home"
ERROR - 2025-02-10 07:07:47 --> Could not find the language line "Home"
ERROR - 2025-02-10 07:07:47 --> Could not find the language line "Home"
ERROR - 2025-02-10 07:08:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-10 07:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 07:11:16 --> Could not find the language line "Home"
ERROR - 2025-02-10 07:11:30 --> Could not find the language line "Home"
ERROR - 2025-02-10 07:11:36 --> Could not find the language line "Perfume"
ERROR - 2025-02-10 07:11:41 --> Could not find the language line "Home"
ERROR - 2025-02-10 07:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 07:13:01 --> Could not find the language line "Home"
ERROR - 2025-02-10 07:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 07:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 07:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 07:35:47 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-10 07:37:37 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 07:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 07:40:52 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-10 07:43:04 --> Could not find the language line "Home"
ERROR - 2025-02-10 07:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 07:47:43 --> Could not find the language line "Home"
ERROR - 2025-02-10 07:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 07:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 07:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 07:58:30 --> Could not find the language line "Home"
ERROR - 2025-02-10 08:01:23 --> Could not find the language line "Home"
ERROR - 2025-02-10 08:01:23 --> Could not find the language line "Home"
ERROR - 2025-02-10 08:01:35 --> Could not find the language line "Home"
ERROR - 2025-02-10 08:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 08:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 08:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 08:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 08:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 08:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 08:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 08:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 08:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 08:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 08:07:45 --> Could not find the language line "Home"
ERROR - 2025-02-10 08:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 08:13:03 --> Could not find the language line "Home"
ERROR - 2025-02-10 08:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 08:38:25 --> Could not find the language line "accounts"
ERROR - 2025-02-10 08:43:03 --> Could not find the language line "Home"
ERROR - 2025-02-10 08:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 08:46:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-10 08:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 08:47:37 --> Could not find the language line "Home"
ERROR - 2025-02-10 08:50:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-10 08:58:16 --> Could not find the language line "Home"
ERROR - 2025-02-10 09:00:34 --> Could not find the language line "Home"
ERROR - 2025-02-10 09:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 09:10:15 --> Could not find the language line "Home"
ERROR - 2025-02-10 09:13:03 --> Could not find the language line "Home"
ERROR - 2025-02-10 09:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 09:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 09:24:21 --> Could not find the language line "Other"
ERROR - 2025-02-10 09:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 09:42:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 09:43:03 --> Could not find the language line "Home"
ERROR - 2025-02-10 09:47:13 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 09:47:29 --> Could not find the language line "Home"
ERROR - 2025-02-10 09:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 09:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 09:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 09:54:19 --> Could not find the language line "Home"
ERROR - 2025-02-10 10:01:47 --> Could not find the language line "Socks"
ERROR - 2025-02-10 10:12:05 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 10:12:15 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 10:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 10:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 10:13:03 --> Could not find the language line "Home"
ERROR - 2025-02-10 10:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 10:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 10:37:59 --> Could not find the language line "Home"
ERROR - 2025-02-10 10:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 10:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 10:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 10:43:04 --> Could not find the language line "Home"
ERROR - 2025-02-10 11:02:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-10 11:13:04 --> Could not find the language line "Home"
ERROR - 2025-02-10 11:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:27:02 --> Could not find the language line "Home"
ERROR - 2025-02-10 11:28:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h455%' OR a.description LIKE '%h455%' OR a.color LIKE '%h455%' OR a.barcode LIKE '%h455%' OR a.category LIKE '%h455%' OR a.sub_category LIKE '%h455%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h455%' OR a.description LIKE '%h455%' OR a.color LIKE '%h455%' OR a.barcode LIKE '%h455%' OR a.category LIKE '%h455%' OR a.sub_category LIKE '%h455%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h455%' OR a.description LIKE '%h455%' OR a.color LIKE '%h455%' OR a.barcode LIKE '%h455%' OR a.category LIKE '%h455%' OR a.sub_category LIKE '%h455%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h455%' OR a.description LIKE '%h455%' OR a.color LIKE '%h455%' OR a.barcode LIKE '%h455%' OR a.category LIKE '%h455%' OR a.sub_category LIKE '%h455%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h455%' OR a.description LIKE '%h455%' OR a.color LIKE '%h455%' OR a.barcode LIKE '%h455%' OR a.category LIKE '%h455%' OR a.sub_category LIKE '%h455%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h455%' OR a.description LIKE '%h455%' OR a.color LIKE '%h455%' OR a.barcode LIKE '%h455%' OR a.category LIKE '%h455%' OR a.sub_category LIKE '%h455%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h455%' OR a.description LIKE '%h455%' OR a.color LIKE '%h455%' OR a.barcode LIKE '%h455%' OR a.category LIKE '%h455%' OR a.sub_category LIKE '%h455%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h455%' OR a.description LIKE '%h455%' OR a.color LIKE '%h455%' OR a.barcode LIKE '%h455%' OR a.category LIKE '%h455%' OR a.sub_category LIKE '%h455%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:28:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-10 11:28:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 11:28:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 11:29:10 --> Could not find the language line "Home"
ERROR - 2025-02-10 11:30:07 --> Could not find the language line "Home"
ERROR - 2025-02-10 11:30:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-10 11:30:52 --> Could not find the language line "Perfume"
ERROR - 2025-02-10 11:31:39 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-10 11:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:34:18 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-10 11:35:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-10 11:36:58 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-10 11:36:58 --> Could not find the language line "Home"
ERROR - 2025-02-10 11:42:37 --> Could not find the language line "Socks"
ERROR - 2025-02-10 11:43:05 --> Could not find the language line "Home"
ERROR - 2025-02-10 11:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 11:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 12:03:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-10 12:03:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-10 12:03:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-10 12:13:05 --> Could not find the language line "Home"
ERROR - 2025-02-10 12:14:53 --> Could not find the language line "Home"
ERROR - 2025-02-10 12:15:49 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-10 12:16:16 --> Could not find the language line "Home"
ERROR - 2025-02-10 12:16:27 --> Could not find the language line "Perfume"
ERROR - 2025-02-10 12:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 12:26:56 --> Could not find the language line "Home"
ERROR - 2025-02-10 12:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 12:29:08 --> Could not find the language line "Socks"
ERROR - 2025-02-10 12:29:52 --> Could not find the language line "Socks"
ERROR - 2025-02-10 12:30:39 --> Could not find the language line "Socks"
ERROR - 2025-02-10 12:30:49 --> Could not find the language line "Socks"
ERROR - 2025-02-10 12:31:14 --> Could not find the language line "Home"
ERROR - 2025-02-10 12:31:15 --> Could not find the language line "Home"
ERROR - 2025-02-10 12:31:18 --> Could not find the language line "Home"
ERROR - 2025-02-10 12:31:18 --> Could not find the language line "Home"
ERROR - 2025-02-10 12:31:19 --> Could not find the language line "Home"
ERROR - 2025-02-10 12:31:20 --> Could not find the language line "Home"
ERROR - 2025-02-10 12:31:58 --> Could not find the language line "Home"
ERROR - 2025-02-10 12:32:03 --> Could not find the language line "Home"
ERROR - 2025-02-10 12:33:51 --> Could not find the language line "Home"
ERROR - 2025-02-10 12:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 12:43:05 --> Could not find the language line "Home"
ERROR - 2025-02-10 13:13:06 --> Could not find the language line "Home"
ERROR - 2025-02-10 13:14:41 --> Could not find the language line "Home"
ERROR - 2025-02-10 13:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 13:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 13:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 13:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 13:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 13:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 13:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 13:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 13:20:41 --> Could not find the language line "Home"
ERROR - 2025-02-10 13:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 13:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 13:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 13:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 13:43:06 --> Could not find the language line "Home"
ERROR - 2025-02-10 13:47:04 --> Could not find the language line "Home"
ERROR - 2025-02-10 13:55:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-10 14:13:06 --> Could not find the language line "Home"
ERROR - 2025-02-10 14:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 14:23:47 --> Could not find the language line "Home"
ERROR - 2025-02-10 14:23:49 --> Could not find the language line "Home"
ERROR - 2025-02-10 14:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 14:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 14:28:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-10 14:32:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-10 14:35:33 --> Could not find the language line "Home"
ERROR - 2025-02-10 14:35:34 --> Could not find the language line "Home"
ERROR - 2025-02-10 14:37:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 14:41:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 14:43:07 --> Could not find the language line "Home"
ERROR - 2025-02-10 14:51:35 --> Could not find the language line "Home"
ERROR - 2025-02-10 14:57:58 --> Could not find the language line "Socks"
ERROR - 2025-02-10 14:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 14:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 15:01:26 --> Could not find the language line "Home"
ERROR - 2025-02-10 15:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 15:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 15:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 15:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 15:13:06 --> Could not find the language line "Home"
ERROR - 2025-02-10 15:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 15:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 15:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 15:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 15:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 15:30:03 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 15:30:08 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 15:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 15:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 15:37:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 15:43:09 --> Could not find the language line "Home"
ERROR - 2025-02-10 15:47:28 --> Could not find the language line "Home"
ERROR - 2025-02-10 15:50:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 15:53:43 --> Could not find the language line "Home"
ERROR - 2025-02-10 15:54:27 --> Could not find the language line "Home"
ERROR - 2025-02-10 15:56:40 --> Could not find the language line "Home"
ERROR - 2025-02-10 16:01:06 --> Could not find the language line "Home"
ERROR - 2025-02-10 16:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:07:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 16:09:17 --> Could not find the language line "Home"
ERROR - 2025-02-10 16:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:13:07 --> Could not find the language line "Home"
ERROR - 2025-02-10 16:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:14:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-10 16:14:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-10 16:14:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-10 16:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:16:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-10 16:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 16:40:48 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-10 16:40:48 --> Could not find the language line "Home"
ERROR - 2025-02-10 16:43:08 --> Could not find the language line "Home"
ERROR - 2025-02-10 17:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 17:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 17:10:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 17:13:08 --> Could not find the language line "Home"
ERROR - 2025-02-10 17:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 17:18:35 --> Could not find the language line "Home"
ERROR - 2025-02-10 17:18:37 --> Could not find the language line "Home"
ERROR - 2025-02-10 17:18:37 --> Could not find the language line "Home"
ERROR - 2025-02-10 17:28:36 --> Could not find the language line "Home"
ERROR - 2025-02-10 17:33:07 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-10 17:33:07 --> Could not find the language line "Home"
ERROR - 2025-02-10 17:33:08 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-10 17:33:08 --> 404 Page Not Found: Bc/index
ERROR - 2025-02-10 17:33:09 --> 404 Page Not Found: Bk/index
ERROR - 2025-02-10 17:33:09 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-10 17:33:11 --> 404 Page Not Found: New/index
ERROR - 2025-02-10 17:33:11 --> 404 Page Not Found: Main/index
ERROR - 2025-02-10 17:33:12 --> Could not find the language line "Home"
ERROR - 2025-02-10 17:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 17:43:08 --> Could not find the language line "Home"
ERROR - 2025-02-10 17:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 18:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 18:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 18:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 18:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 18:13:07 --> Could not find the language line "Home"
ERROR - 2025-02-10 18:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 18:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 18:29:44 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-10 18:42:23 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 18:42:36 --> Could not find the language line "Home"
ERROR - 2025-02-10 18:43:08 --> Could not find the language line "Home"
ERROR - 2025-02-10 18:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 18:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 18:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 18:45:06 --> Could not find the language line "Home"
ERROR - 2025-02-10 18:45:06 --> Could not find the language line "Home"
ERROR - 2025-02-10 18:45:09 --> Could not find the language line "Home"
ERROR - 2025-02-10 18:55:04 --> Could not find the language line "Home"
ERROR - 2025-02-10 18:57:09 --> Could not find the language line "Home"
ERROR - 2025-02-10 18:57:22 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-10 18:57:49 --> Could not find the language line "Home"
ERROR - 2025-02-10 19:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:13:09 --> Could not find the language line "Home"
ERROR - 2025-02-10 19:14:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 19:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:32:08 --> Could not find the language line "Home"
ERROR - 2025-02-10 19:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:34:37 --> Could not find the language line "Home"
ERROR - 2025-02-10 19:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:38:54 --> Could not find the language line "Home"
ERROR - 2025-02-10 19:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:39:40 --> Could not find the language line "Home"
ERROR - 2025-02-10 19:39:43 --> Could not find the language line "Home"
ERROR - 2025-02-10 19:39:44 --> Could not find the language line "Home"
ERROR - 2025-02-10 19:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:40:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 19:40:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-10 19:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:41:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 19:41:45 --> Could not find the language line "Home"
ERROR - 2025-02-10 19:41:46 --> Could not find the language line "Home"
ERROR - 2025-02-10 19:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:43:09 --> Could not find the language line "Home"
ERROR - 2025-02-10 19:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 19:56:56 --> Could not find the language line "Home"
ERROR - 2025-02-10 20:01:03 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-10 20:09:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 20:09:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 20:13:09 --> Could not find the language line "Home"
ERROR - 2025-02-10 20:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 20:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 20:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 20:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 20:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 20:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 20:25:01 --> Could not find the language line "Home"
ERROR - 2025-02-10 20:26:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-10 20:30:07 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-10 20:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 20:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 20:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 20:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 20:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 20:42:48 --> Could not find the language line "Home"
ERROR - 2025-02-10 20:43:10 --> Could not find the language line "Home"
ERROR - 2025-02-10 20:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 20:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 20:55:26 --> Could not find the language line "Home"
ERROR - 2025-02-10 20:56:32 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-10 20:56:32 --> Could not find the language line "Home"
ERROR - 2025-02-10 20:59:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 21:03:48 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-10 21:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 21:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 21:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 21:11:10 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-10 21:13:10 --> Could not find the language line "Home"
ERROR - 2025-02-10 21:16:02 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-10 21:18:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 21:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 21:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 21:35:10 --> Could not find the language line "Home"
ERROR - 2025-02-10 21:42:24 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-10 21:43:11 --> Could not find the language line "Home"
ERROR - 2025-02-10 21:48:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 22:02:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 22:03:20 --> Could not find the language line "Home"
ERROR - 2025-02-10 22:13:10 --> Could not find the language line "Home"
ERROR - 2025-02-10 22:15:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 22:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 22:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 22:34:04 --> Could not find the language line "users"
ERROR - 2025-02-10 22:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 22:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 22:38:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 22:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 22:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 22:42:11 --> Could not find the language line "accounts"
ERROR - 2025-02-10 22:43:14 --> Could not find the language line "Home"
ERROR - 2025-02-10 22:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 22:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 22:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 22:56:09 --> Could not find the language line "Clothing"
ERROR - 2025-02-10 23:00:51 --> Could not find the language line "products"
ERROR - 2025-02-10 23:11:07 --> Could not find the language line "Home"
ERROR - 2025-02-10 23:11:09 --> Could not find the language line "Other"
ERROR - 2025-02-10 23:13:12 --> Could not find the language line "Home"
ERROR - 2025-02-10 23:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 23:15:19 --> Could not find the language line "Home"
ERROR - 2025-02-10 23:16:04 --> Could not find the language line "products"
ERROR - 2025-02-10 23:16:42 --> Could not find the language line "Home"
ERROR - 2025-02-10 23:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 23:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 23:20:55 --> Could not find the language line "Home"
ERROR - 2025-02-10 23:22:20 --> Could not find the language line "Home"
ERROR - 2025-02-10 23:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 23:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-10 23:29:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-10 23:30:19 --> Could not find the language line "Home"
ERROR - 2025-02-10 23:32:08 --> Could not find the language line "Home"
ERROR - 2025-02-10 23:34:59 --> Could not find the language line "Home"
ERROR - 2025-02-10 23:43:16 --> Could not find the language line "Home"
