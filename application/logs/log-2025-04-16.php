<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-04-16 00:14:55 --> Could not find the language line "Home"
ERROR - 2025-04-16 00:23:58 --> Could not find the language line "Home"
ERROR - 2025-04-16 00:24:00 --> Could not find the language line "Other"
ERROR - 2025-04-16 00:24:05 --> Could not find the language line "Home"
ERROR - 2025-04-16 00:25:34 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-16 00:25:34 --> Could not find the language line "Home"
ERROR - 2025-04-16 00:25:34 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-16 00:25:34 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-16 00:25:35 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-16 00:25:35 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-16 00:25:35 --> 404 Page Not Found: New/index
ERROR - 2025-04-16 00:25:35 --> 404 Page Not Found: Main/index
ERROR - 2025-04-16 00:25:36 --> Could not find the language line "Home"
ERROR - 2025-04-16 00:27:59 --> Could not find the language line "Home"
ERROR - 2025-04-16 00:28:05 --> Could not find the language line "Other"
ERROR - 2025-04-16 00:37:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 00:44:51 --> Could not find the language line "Home"
ERROR - 2025-04-16 01:01:03 --> Could not find the language line "Home"
ERROR - 2025-04-16 01:13:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 01:14:48 --> Could not find the language line "Home"
ERROR - 2025-04-16 01:16:02 --> Could not find the language line "Clothes"
ERROR - 2025-04-16 01:24:31 --> Could not find the language line "Home"
ERROR - 2025-04-16 01:40:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-16 01:44:53 --> Could not find the language line "Home"
ERROR - 2025-04-16 02:09:43 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 02:14:52 --> Could not find the language line "Home"
ERROR - 2025-04-16 02:20:47 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-16 02:20:47 --> Could not find the language line "Home"
ERROR - 2025-04-16 02:20:47 --> Could not find the language line "Home"
ERROR - 2025-04-16 02:36:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-16 02:38:26 --> Could not find the language line "Home"
ERROR - 2025-04-16 02:44:55 --> Could not find the language line "Home"
ERROR - 2025-04-16 03:09:01 --> Could not find the language line "Socks"
ERROR - 2025-04-16 03:14:53 --> Could not find the language line "Home"
ERROR - 2025-04-16 03:25:42 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 03:31:11 --> Severity: Notice --> Undefined index: discount /home/samfit/public_html/application/controllers/Checkout.php 29
ERROR - 2025-04-16 03:31:11 --> Severity: Notice --> Undefined index: coupon_id /home/samfit/public_html/application/controllers/Checkout.php 30
ERROR - 2025-04-16 03:31:11 --> Severity: Notice --> Undefined index: discount_type /home/samfit/public_html/application/controllers/Checkout.php 31
ERROR - 2025-04-16 03:31:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2025-04-16 03:32:33 --> Could not find the language line "Home"
ERROR - 2025-04-16 03:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 03:45:00 --> Could not find the language line "Home"
ERROR - 2025-04-16 03:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 03:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 03:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 03:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 04:15:05 --> Could not find the language line "Home"
ERROR - 2025-04-16 04:23:20 --> Could not find the language line "Home"
ERROR - 2025-04-16 04:23:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 04:27:33 --> Could not find the language line "Home"
ERROR - 2025-04-16 04:28:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 04:32:22 --> Could not find the language line "Home"
ERROR - 2025-04-16 04:44:52 --> Could not find the language line "Home"
ERROR - 2025-04-16 04:52:43 --> Could not find the language line "Home"
ERROR - 2025-04-16 05:01:03 --> Could not find the language line "Home"
ERROR - 2025-04-16 05:14:53 --> Could not find the language line "Home"
ERROR - 2025-04-16 05:22:22 --> Could not find the language line "Home"
ERROR - 2025-04-16 05:23:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 146
ERROR - 2025-04-16 05:23:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-04-16 05:23:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-16 05:32:23 --> Could not find the language line "Home"
ERROR - 2025-04-16 05:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 05:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 05:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 05:35:26 --> 404 Page Not Found: Wp-aaphp/index
ERROR - 2025-04-16 05:35:26 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2025-04-16 05:43:33 --> Could not find the language line "Home"
ERROR - 2025-04-16 05:44:53 --> Could not find the language line "Home"
ERROR - 2025-04-16 05:46:34 --> Could not find the language line "Other"
ERROR - 2025-04-16 05:52:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 05:52:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 05:54:25 --> Could not find the language line "Home"
ERROR - 2025-04-16 05:55:25 --> Could not find the language line "Home"
ERROR - 2025-04-16 05:55:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 05:56:50 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 05:58:22 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 06:01:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 06:01:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 06:02:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 06:04:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 06:05:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 06:06:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 06:12:11 --> Could not find the language line "Home"
ERROR - 2025-04-16 06:14:23 --> Could not find the language line "Home"
ERROR - 2025-04-16 06:14:45 --> Could not find the language line "Home"
ERROR - 2025-04-16 06:14:50 --> Could not find the language line "Home"
ERROR - 2025-04-16 06:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 06:16:11 --> Could not find the language line "Home"
ERROR - 2025-04-16 06:27:04 --> Could not find the language line "Home"
ERROR - 2025-04-16 06:27:23 --> Could not find the language line "Perfume"
ERROR - 2025-04-16 06:32:22 --> Could not find the language line "Home"
ERROR - 2025-04-16 06:44:50 --> Could not find the language line "Home"
ERROR - 2025-04-16 06:47:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 06:54:09 --> Could not find the language line "Home"
ERROR - 2025-04-16 06:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 06:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 06:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 06:57:29 --> Could not find the language line "Home"
ERROR - 2025-04-16 07:00:16 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 07:03:41 --> Could not find the language line "Home"
ERROR - 2025-04-16 07:11:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 07:14:51 --> Could not find the language line "Home"
ERROR - 2025-04-16 07:15:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 07:19:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 07:21:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 07:22:17 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 07:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 07:24:46 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 07:27:24 --> Could not find the language line "Home"
ERROR - 2025-04-16 07:27:30 --> Could not find the language line "Other"
ERROR - 2025-04-16 07:39:02 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 07:43:23 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-16 07:44:50 --> Could not find the language line "Home"
ERROR - 2025-04-16 07:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:54:45 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 07:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:54:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 07:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:56:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 07:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 07:58:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 08:01:40 --> Could not find the language line "Home"
ERROR - 2025-04-16 08:02:53 --> Could not find the language line "Other"
ERROR - 2025-04-16 08:03:58 --> Could not find the language line "Home"
ERROR - 2025-04-16 08:04:14 --> Could not find the language line "Home"
ERROR - 2025-04-16 08:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:09:34 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-16 08:09:52 --> Could not find the language line "Home"
ERROR - 2025-04-16 08:10:19 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-16 08:10:44 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-16 08:11:08 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-16 08:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:50 --> Could not find the language line "Home"
ERROR - 2025-04-16 08:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:15:19 --> Could not find the language line "Home"
ERROR - 2025-04-16 08:20:13 --> Could not find the language line "Home"
ERROR - 2025-04-16 08:22:01 --> Could not find the language line "Home"
ERROR - 2025-04-16 08:23:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 08:23:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 08:24:05 --> Could not find the language line "Home"
ERROR - 2025-04-16 08:25:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 08:27:01 --> Could not find the language line "Home"
ERROR - 2025-04-16 08:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:28:55 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 08:30:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 08:31:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-16 08:31:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-16 08:32:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 08:33:24 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 08:36:51 --> Could not find the language line "Socks"
ERROR - 2025-04-16 08:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:39:12 --> Could not find the language line "Home"
ERROR - 2025-04-16 08:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 08:44:51 --> Could not find the language line "Home"
ERROR - 2025-04-16 08:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 09:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 09:07:48 --> Could not find the language line "Home"
ERROR - 2025-04-16 09:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 09:12:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-16 09:14:51 --> Could not find the language line "Home"
ERROR - 2025-04-16 09:23:41 --> Could not find the language line "Home"
ERROR - 2025-04-16 09:25:50 --> Could not find the language line "Home"
ERROR - 2025-04-16 09:25:53 --> Could not find the language line "Socks"
ERROR - 2025-04-16 09:32:04 --> Could not find the language line "Socks"
ERROR - 2025-04-16 09:35:02 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-16 09:35:03 --> Could not find the language line "Home"
ERROR - 2025-04-16 09:35:03 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-16 09:35:04 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-16 09:35:04 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-16 09:35:04 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-16 09:35:04 --> 404 Page Not Found: New/index
ERROR - 2025-04-16 09:35:05 --> 404 Page Not Found: Main/index
ERROR - 2025-04-16 09:35:05 --> Could not find the language line "Home"
ERROR - 2025-04-16 09:44:53 --> Could not find the language line "Home"
ERROR - 2025-04-16 09:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 09:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 09:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 09:49:41 --> Could not find the language line "Home"
ERROR - 2025-04-16 09:51:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 10:11:18 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 10:14:53 --> Could not find the language line "Home"
ERROR - 2025-04-16 10:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 10:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 10:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 10:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 10:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 10:26:44 --> Could not find the language line "Home"
ERROR - 2025-04-16 10:28:10 --> Could not find the language line "Home"
ERROR - 2025-04-16 10:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 10:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 10:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 10:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 10:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 10:38:03 --> Could not find the language line "Home"
ERROR - 2025-04-16 10:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 10:44:51 --> Could not find the language line "Home"
ERROR - 2025-04-16 10:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 10:53:08 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 10:58:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-16 11:00:12 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:00:20 --> Could not find the language line "Socks"
ERROR - 2025-04-16 11:00:43 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:00:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-16 11:00:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-16 11:01:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-16 11:01:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-16 11:03:57 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:06:36 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 11:08:01 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 11:08:58 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:09:15 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:12:10 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 11:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 11:13:34 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 11:14:52 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:14:57 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 11:17:29 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:24:17 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-16 11:30:27 --> Could not find the language line "Other"
ERROR - 2025-04-16 11:33:36 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:35:08 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:35:22 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-16 11:35:23 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:35:23 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:35:23 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-16 11:35:24 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-16 11:35:24 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-16 11:35:30 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2025-04-16 11:35:30 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2025-04-16 11:35:30 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-16 11:35:30 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-16 11:35:51 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-16 11:35:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-16 11:40:53 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:41:32 --> Could not find the language line "Other"
ERROR - 2025-04-16 11:42:14 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-16 11:44:13 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-16 11:44:13 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:44:13 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:44:53 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:45:39 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 11:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 11:47:07 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:47:31 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:48:09 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 11:49:25 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 11:51:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 11:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 11:53:27 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 11:54:52 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 11:55:00 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:56:06 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:56:06 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:56:17 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:56:33 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 11:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 11:58:25 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 11:58:58 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:59:11 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 11:59:48 --> Could not find the language line "Home"
ERROR - 2025-04-16 11:59:51 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-16 11:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 12:00:23 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-16 12:01:31 --> Could not find the language line "Home"
ERROR - 2025-04-16 12:01:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-16 12:01:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-16 12:01:50 --> Could not find the language line "Home"
ERROR - 2025-04-16 12:14:54 --> Could not find the language line "Home"
ERROR - 2025-04-16 12:16:32 --> Could not find the language line "Home"
ERROR - 2025-04-16 12:20:05 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-16 12:20:05 --> Could not find the language line "Home"
ERROR - 2025-04-16 12:20:05 --> Could not find the language line "Home"
ERROR - 2025-04-16 12:22:32 --> Could not find the language line "Home"
ERROR - 2025-04-16 12:38:05 --> Could not find the language line "Home"
ERROR - 2025-04-16 12:44:54 --> Could not find the language line "Home"
ERROR - 2025-04-16 13:06:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-16 13:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 13:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 13:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 13:12:31 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 13:13:40 --> Could not find the language line "Home"
ERROR - 2025-04-16 13:14:54 --> Could not find the language line "Home"
ERROR - 2025-04-16 13:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 13:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 13:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 13:32:08 --> Could not find the language line "Home"
ERROR - 2025-04-16 13:32:33 --> Could not find the language line "Home"
ERROR - 2025-04-16 13:32:36 --> Could not find the language line "Home"
ERROR - 2025-04-16 13:32:42 --> Could not find the language line "Home"
ERROR - 2025-04-16 13:33:38 --> Could not find the language line "Home"
ERROR - 2025-04-16 13:44:54 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:06:52 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:14:55 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:19:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 14:24:49 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:26:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 14:29:00 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:29:30 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 14:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 14:35:41 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:35:50 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:37:13 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:41:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 14:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 14:44:54 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 14:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 14:49:49 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:50:00 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:50:02 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:50:03 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:50:18 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:50:25 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:50:26 --> Could not find the language line "Home"
ERROR - 2025-04-16 14:50:43 --> Could not find the language line "Home"
ERROR - 2025-04-16 15:14:55 --> Could not find the language line "Home"
ERROR - 2025-04-16 15:20:18 --> Could not find the language line "Home"
ERROR - 2025-04-16 15:21:33 --> Could not find the language line "Home"
ERROR - 2025-04-16 15:28:00 --> Could not find the language line "Home"
ERROR - 2025-04-16 15:30:44 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-16 15:30:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-16 15:40:34 --> Could not find the language line "Home"
ERROR - 2025-04-16 15:41:18 --> Could not find the language line "Home"
ERROR - 2025-04-16 15:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 15:41:45 --> Could not find the language line "Home"
ERROR - 2025-04-16 15:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 15:43:20 --> Could not find the language line "Home"
ERROR - 2025-04-16 15:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 15:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 15:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 15:44:56 --> Could not find the language line "Home"
ERROR - 2025-04-16 15:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 15:52:21 --> Could not find the language line "Home"
ERROR - 2025-04-16 15:53:35 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 15:54:22 --> Could not find the language line "Home"
ERROR - 2025-04-16 15:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 16:12:22 --> Could not find the language line "Home"
ERROR - 2025-04-16 16:12:45 --> Could not find the language line "Other"
ERROR - 2025-04-16 16:13:49 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2025-04-16 16:14:55 --> Could not find the language line "Home"
ERROR - 2025-04-16 16:20:54 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 16:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 16:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 16:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 16:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 16:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 16:44:56 --> Could not find the language line "Home"
ERROR - 2025-04-16 16:45:05 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 16:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 16:47:56 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-16 16:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 16:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 16:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 16:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 16:52:22 --> Could not find the language line "Home"
ERROR - 2025-04-16 16:53:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-16 16:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 16:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 16:56:50 --> Could not find the language line "Home"
ERROR - 2025-04-16 17:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 17:04:23 --> Could not find the language line "Home"
ERROR - 2025-04-16 17:07:19 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-16 17:08:25 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 17:09:55 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2025-04-16 17:14:56 --> Could not find the language line "Home"
ERROR - 2025-04-16 17:18:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 17:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 17:24:51 --> Could not find the language line "Home"
ERROR - 2025-04-16 17:25:21 --> Could not find the language line "Home"
ERROR - 2025-04-16 17:26:03 --> Could not find the language line "Home"
ERROR - 2025-04-16 17:31:05 --> Could not find the language line "Home"
ERROR - 2025-04-16 17:33:32 --> Could not find the language line "Home"
ERROR - 2025-04-16 17:38:06 --> Could not find the language line "Home"
ERROR - 2025-04-16 17:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 17:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 17:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 17:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 17:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 17:44:56 --> Could not find the language line "Home"
ERROR - 2025-04-16 17:45:05 --> Could not find the language line "Home"
ERROR - 2025-04-16 17:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 17:54:50 --> Could not find the language line "Home"
ERROR - 2025-04-16 17:56:04 --> Could not find the language line "Home"
ERROR - 2025-04-16 17:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 18:01:05 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 18:06:08 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:07:55 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:10:24 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 18:10:53 --> 404 Page Not Found: Git/config
ERROR - 2025-04-16 18:10:53 --> 404 Page Not Found: Git/config
ERROR - 2025-04-16 18:12:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 18:14:58 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:15:13 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:16:56 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 18:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 18:20:04 --> Could not find the language line "Socks"
ERROR - 2025-04-16 18:31:16 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:33:00 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:37:08 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 18:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 18:41:47 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:44:58 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:45:04 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:49:51 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:50:32 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-16 18:50:32 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:50:32 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-16 18:50:32 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-16 18:50:32 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-16 18:50:33 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-16 18:50:33 --> 404 Page Not Found: New/index
ERROR - 2025-04-16 18:50:33 --> 404 Page Not Found: Main/index
ERROR - 2025-04-16 18:50:34 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 18:55:30 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 18:56:44 --> Could not find the language line "Home"
ERROR - 2025-04-16 18:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 18:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 18:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 18:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 19:02:46 --> Could not find the language line "Home"
ERROR - 2025-04-16 19:07:12 --> Could not find the language line "Socks"
ERROR - 2025-04-16 19:12:01 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 19:14:57 --> Could not find the language line "Home"
ERROR - 2025-04-16 19:17:03 --> Could not find the language line "Clothing"
ERROR - 2025-04-16 19:18:15 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-16 19:19:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-16 19:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 19:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 19:24:26 --> Could not find the language line "Other"
ERROR - 2025-04-16 19:25:06 --> Could not find the language line "Home"
ERROR - 2025-04-16 19:25:07 --> Could not find the language line "Other"
ERROR - 2025-04-16 19:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 19:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 19:27:28 --> Could not find the language line "Perfume"
ERROR - 2025-04-16 19:38:41 --> Could not find the language line "Home"
ERROR - 2025-04-16 19:45:01 --> Could not find the language line "Home"
ERROR - 2025-04-16 19:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 19:49:49 --> Could not find the language line "Home"
ERROR - 2025-04-16 19:53:48 --> Could not find the language line "Home"
ERROR - 2025-04-16 20:01:05 --> Could not find the language line "Disclaimer"
ERROR - 2025-04-16 20:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 20:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 20:16:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 20:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 20:23:46 --> Could not find the language line "Home"
ERROR - 2025-04-16 20:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 20:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 20:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 20:34:13 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-16 20:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 20:48:36 --> Could not find the language line "Home"
ERROR - 2025-04-16 20:50:24 --> Could not find the language line "Home"
ERROR - 2025-04-16 20:53:46 --> Could not find the language line "Home"
ERROR - 2025-04-16 20:54:18 --> Could not find the language line "Home"
ERROR - 2025-04-16 20:59:13 --> Could not find the language line "Home"
ERROR - 2025-04-16 21:10:58 --> Could not find the language line "Home"
ERROR - 2025-04-16 21:11:12 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-16 21:11:32 --> Could not find the language line "Home"
ERROR - 2025-04-16 21:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 21:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 21:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 21:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 21:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 21:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 21:15:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 21:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 21:17:04 --> Could not find the language line "Home"
ERROR - 2025-04-16 21:17:12 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-16 21:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 21:17:27 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-16 21:17:30 --> Could not find the language line "Home"
ERROR - 2025-04-16 21:18:29 --> Could not find the language line "Home"
ERROR - 2025-04-16 21:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 21:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 21:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 21:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 21:23:47 --> Could not find the language line "Home"
ERROR - 2025-04-16 21:28:10 --> Could not find the language line "Home"
ERROR - 2025-04-16 21:30:01 --> Could not find the language line "Home"
ERROR - 2025-04-16 21:35:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-16 21:35:54 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-16 21:53:50 --> Could not find the language line "Home"
ERROR - 2025-04-16 21:55:27 --> Could not find the language line "Home"
ERROR - 2025-04-16 22:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 22:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 22:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 22:15:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 22:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 22:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 22:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 22:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 22:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 22:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 22:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 22:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 22:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 22:22:54 --> Could not find the language line "Home"
ERROR - 2025-04-16 22:23:40 --> Could not find the language line "Home"
ERROR - 2025-04-16 22:23:57 --> Could not find the language line "Home"
ERROR - 2025-04-16 22:28:25 --> Could not find the language line "Home"
ERROR - 2025-04-16 22:39:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 22:47:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 22:48:24 --> Could not find the language line "Home"
ERROR - 2025-04-16 22:53:50 --> Could not find the language line "Home"
ERROR - 2025-04-16 22:59:48 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:10:17 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:10:18 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:10:19 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:10:23 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-16 23:10:49 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:10:50 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:10:59 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:11:06 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:14:28 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:14:36 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:14:42 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:14:42 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:14:55 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:14:56 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:14:57 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:23:55 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:24:29 --> 404 Page Not Found: Indexhtml/index
ERROR - 2025-04-16 23:25:27 --> Could not find the language line "Home"
ERROR - 2025-04-16 23:44:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-16 23:54:05 --> Could not find the language line "Home"
