<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-11 00:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 00:17:20 --> Could not find the language line "Home"
ERROR - 2025-03-11 00:18:01 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-11 00:47:20 --> Could not find the language line "Home"
ERROR - 2025-03-11 01:13:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-11 01:17:20 --> Could not find the language line "Home"
ERROR - 2025-03-11 01:23:56 --> Could not find the language line "Home"
ERROR - 2025-03-11 01:33:40 --> Could not find the language line "Home"
ERROR - 2025-03-11 01:47:19 --> Could not find the language line "Home"
ERROR - 2025-03-11 01:50:35 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-11 01:50:36 --> Could not find the language line "Home"
ERROR - 2025-03-11 01:50:36 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-11 01:50:37 --> 404 Page Not Found: Bc/index
ERROR - 2025-03-11 01:50:37 --> 404 Page Not Found: Bk/index
ERROR - 2025-03-11 01:50:38 --> 404 Page Not Found: Backup/index
ERROR - 2025-03-11 01:50:39 --> 404 Page Not Found: New/index
ERROR - 2025-03-11 01:50:40 --> 404 Page Not Found: Main/index
ERROR - 2025-03-11 01:50:41 --> Could not find the language line "Home"
ERROR - 2025-03-11 02:01:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-11 02:01:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-11 02:17:20 --> Could not find the language line "Home"
ERROR - 2025-03-11 02:47:24 --> Could not find the language line "Home"
ERROR - 2025-03-11 02:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 03:11:19 --> Could not find the language line "Home"
ERROR - 2025-03-11 03:11:43 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-11 03:17:22 --> Could not find the language line "Home"
ERROR - 2025-03-11 03:23:22 --> Could not find the language line "Home"
ERROR - 2025-03-11 03:26:00 --> Could not find the language line "Home"
ERROR - 2025-03-11 03:27:43 --> Could not find the language line "Home"
ERROR - 2025-03-11 03:28:46 --> Could not find the language line "Home"
ERROR - 2025-03-11 03:41:53 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-11 03:47:21 --> Could not find the language line "Home"
ERROR - 2025-03-11 03:50:24 --> Could not find the language line "Home"
ERROR - 2025-03-11 04:10:30 --> Could not find the language line "Home"
ERROR - 2025-03-11 04:17:22 --> Could not find the language line "Home"
ERROR - 2025-03-11 04:22:42 --> Could not find the language line "Home"
ERROR - 2025-03-11 04:24:44 --> Could not find the language line "Home"
ERROR - 2025-03-11 04:26:04 --> Could not find the language line "Home"
ERROR - 2025-03-11 04:28:32 --> Could not find the language line "Home"
ERROR - 2025-03-11 04:35:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-03-11 04:35:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 100
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-03-11 04:35:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-11 04:40:20 --> Could not find the language line "Home"
ERROR - 2025-03-11 04:47:22 --> Could not find the language line "Home"
ERROR - 2025-03-11 04:58:13 --> Could not find the language line "Home"
ERROR - 2025-03-11 05:00:32 --> Could not find the language line "Home"
ERROR - 2025-03-11 05:14:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-11 05:14:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-11 05:14:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-11 05:17:22 --> Could not find the language line "Home"
ERROR - 2025-03-11 05:37:49 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-11 05:47:22 --> Could not find the language line "Home"
ERROR - 2025-03-11 05:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 06:17:17 --> Could not find the language line "Home"
ERROR - 2025-03-11 06:17:23 --> Could not find the language line "Home"
ERROR - 2025-03-11 06:26:12 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-11 06:26:12 --> Could not find the language line "Home"
ERROR - 2025-03-11 06:26:12 --> Could not find the language line "Home"
ERROR - 2025-03-11 06:38:22 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-11 06:47:22 --> Could not find the language line "Home"
ERROR - 2025-03-11 07:11:06 --> Could not find the language line "Home"
ERROR - 2025-03-11 07:17:22 --> Could not find the language line "Home"
ERROR - 2025-03-11 07:22:21 --> Could not find the language line "Perfume"
ERROR - 2025-03-11 07:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 07:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 07:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 07:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 07:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 07:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 07:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 07:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 07:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 07:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 07:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 07:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 07:47:23 --> Could not find the language line "Home"
ERROR - 2025-03-11 08:17:23 --> Could not find the language line "Home"
ERROR - 2025-03-11 08:30:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-03-11 08:30:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 100
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-03-11 08:30:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-11 08:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 08:46:01 --> 404 Page Not Found: Archivarixcmsphp/index
ERROR - 2025-03-11 08:47:23 --> Could not find the language line "Home"
ERROR - 2025-03-11 09:17:23 --> Could not find the language line "Home"
ERROR - 2025-03-11 09:47:24 --> Could not find the language line "Home"
ERROR - 2025-03-11 10:14:44 --> Could not find the language line "Home"
ERROR - 2025-03-11 10:15:35 --> Could not find the language line "Home"
ERROR - 2025-03-11 10:17:25 --> Could not find the language line "Home"
ERROR - 2025-03-11 10:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 10:47:13 --> Could not find the language line "Home"
ERROR - 2025-03-11 10:47:24 --> Could not find the language line "Home"
ERROR - 2025-03-11 10:50:45 --> Could not find the language line "Home"
ERROR - 2025-03-11 10:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 11:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 11:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 11:12:51 --> Could not find the language line "Home"
ERROR - 2025-03-11 11:16:47 --> Could not find the language line "Home"
ERROR - 2025-03-11 11:16:58 --> Could not find the language line "Home"
ERROR - 2025-03-11 11:17:24 --> Could not find the language line "Home"
ERROR - 2025-03-11 11:17:44 --> Could not find the language line "Home"
ERROR - 2025-03-11 11:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 11:32:30 --> Could not find the language line "Home"
ERROR - 2025-03-11 11:37:47 --> Could not find the language line "Home"
ERROR - 2025-03-11 11:40:24 --> Could not find the language line "Home"
ERROR - 2025-03-11 11:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 11:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 11:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 11:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 11:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 11:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 11:43:05 --> Could not find the language line "Home"
ERROR - 2025-03-11 11:47:25 --> Could not find the language line "Home"
ERROR - 2025-03-11 11:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 11:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 11:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 11:56:33 --> Could not find the language line "Other"
ERROR - 2025-03-11 11:58:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-11 12:17:26 --> Could not find the language line "Home"
ERROR - 2025-03-11 12:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 12:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 12:25:26 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-11 12:25:26 --> Could not find the language line "Home"
ERROR - 2025-03-11 12:25:26 --> Could not find the language line "Home"
ERROR - 2025-03-11 12:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 12:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 12:31:21 --> Could not find the language line "Home"
ERROR - 2025-03-11 12:37:27 --> Could not find the language line "Home"
ERROR - 2025-03-11 12:39:21 --> Could not find the language line "Home"
ERROR - 2025-03-11 12:41:28 --> Could not find the language line "Home"
ERROR - 2025-03-11 12:47:26 --> Could not find the language line "Home"
ERROR - 2025-03-11 13:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 13:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 13:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 13:10:36 --> Could not find the language line "Home"
ERROR - 2025-03-11 13:17:25 --> Could not find the language line "Home"
ERROR - 2025-03-11 13:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 13:27:08 --> Could not find the language line "Clothing"
ERROR - 2025-03-11 13:38:45 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-11 13:38:46 --> Could not find the language line "Home"
ERROR - 2025-03-11 13:38:46 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-11 13:38:47 --> 404 Page Not Found: Bc/index
ERROR - 2025-03-11 13:38:47 --> 404 Page Not Found: Bk/index
ERROR - 2025-03-11 13:38:48 --> 404 Page Not Found: Backup/index
ERROR - 2025-03-11 13:38:49 --> 404 Page Not Found: New/index
ERROR - 2025-03-11 13:38:50 --> 404 Page Not Found: Main/index
ERROR - 2025-03-11 13:38:50 --> Could not find the language line "Home"
ERROR - 2025-03-11 13:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 13:41:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-11 13:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 13:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 13:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 13:47:26 --> Could not find the language line "Home"
ERROR - 2025-03-11 13:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 13:56:19 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-11 13:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 14:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 14:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 14:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 14:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 14:16:58 --> Could not find the language line "Home"
ERROR - 2025-03-11 14:17:03 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-03-11 14:17:26 --> Could not find the language line "Home"
ERROR - 2025-03-11 14:38:11 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-11 14:47:28 --> Could not find the language line "Home"
ERROR - 2025-03-11 14:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 15:09:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-11 15:11:53 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-11 15:11:54 --> Could not find the language line "Home"
ERROR - 2025-03-11 15:17:27 --> Could not find the language line "Home"
ERROR - 2025-03-11 15:18:56 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-11 15:22:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-11 15:22:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c891%' OR a.description LIKE '%c891%' OR a.color LIKE '%c891%' OR a.barcode LIKE '%c891%' OR a.category LIKE '%c891%' OR a.sub_category LIKE '%c891%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-11 15:22:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-11 15:38:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-11 15:47:28 --> Could not find the language line "Home"
ERROR - 2025-03-11 15:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 15:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 15:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 16:17:27 --> Could not find the language line "Home"
ERROR - 2025-03-11 16:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 16:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 16:47:27 --> Could not find the language line "Home"
ERROR - 2025-03-11 16:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 16:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 16:54:17 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-11 17:00:46 --> Could not find the language line "Bracelets"
ERROR - 2025-03-11 17:17:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-11 17:17:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-11 17:17:28 --> Could not find the language line "Home"
ERROR - 2025-03-11 17:19:30 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-11 17:37:29 --> Could not find the language line "Home"
ERROR - 2025-03-11 17:47:28 --> Could not find the language line "Home"
ERROR - 2025-03-11 18:17:28 --> Could not find the language line "Home"
ERROR - 2025-03-11 18:47:29 --> Could not find the language line "Home"
ERROR - 2025-03-11 19:17:29 --> Could not find the language line "Home"
ERROR - 2025-03-11 19:27:56 --> Could not find the language line "Home"
ERROR - 2025-03-11 19:32:34 --> Could not find the language line "Home"
ERROR - 2025-03-11 19:40:24 --> Could not find the language line "Home"
ERROR - 2025-03-11 19:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 19:46:02 --> Could not find the language line "Home"
ERROR - 2025-03-11 19:47:29 --> Could not find the language line "Home"
ERROR - 2025-03-11 19:47:55 --> Could not find the language line "Home"
ERROR - 2025-03-11 19:49:30 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-11 20:01:40 --> Could not find the language line "Home"
ERROR - 2025-03-11 20:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 20:17:29 --> Could not find the language line "Home"
ERROR - 2025-03-11 20:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-11 20:27:36 --> Could not find the language line "Home"
ERROR - 2025-03-11 20:39:38 --> Could not find the language line "Home"
ERROR - 2025-03-11 20:45:38 --> Could not find the language line "Home"
ERROR - 2025-03-11 20:46:04 --> Could not find the language line "Home"
ERROR - 2025-03-11 20:46:05 --> Could not find the language line "Home"
ERROR - 2025-03-11 20:46:06 --> Could not find the language line "Home"
ERROR - 2025-03-11 20:47:30 --> Could not find the language line "Home"
ERROR - 2025-03-11 20:47:40 --> Could not find the language line "Home"
ERROR - 2025-03-11 21:17:31 --> Could not find the language line "Home"
ERROR - 2025-03-11 21:26:26 --> Could not find the language line "Home"
ERROR - 2025-03-11 21:46:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-11 21:47:18 --> Could not find the language line "Home"
ERROR - 2025-03-11 21:47:30 --> Could not find the language line "Home"
ERROR - 2025-03-11 22:17:32 --> Could not find the language line "Home"
ERROR - 2025-03-11 22:22:38 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-11 22:22:38 --> Could not find the language line "Home"
ERROR - 2025-03-11 22:22:38 --> Could not find the language line "Home"
ERROR - 2025-03-11 22:47:32 --> Could not find the language line "Home"
ERROR - 2025-03-11 23:08:59 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-11 23:09:00 --> Could not find the language line "Home"
ERROR - 2025-03-11 23:09:00 --> Could not find the language line "Home"
ERROR - 2025-03-11 23:17:35 --> Could not find the language line "Home"
ERROR - 2025-03-11 23:27:22 --> Could not find the language line "Home"
ERROR - 2025-03-11 23:31:46 --> Could not find the language line "Home"
ERROR - 2025-03-11 23:31:46 --> Could not find the language line "Home"
ERROR - 2025-03-11 23:31:46 --> Could not find the language line "Home"
ERROR - 2025-03-11 23:31:47 --> Could not find the language line "Home"
ERROR - 2025-03-11 23:31:47 --> Could not find the language line "Home"
ERROR - 2025-03-11 23:32:01 --> Could not find the language line "Home"
ERROR - 2025-03-11 23:32:41 --> Could not find the language line "Home"
ERROR - 2025-03-11 23:47:33 --> Could not find the language line "Home"
ERROR - 2025-03-11 23:48:20 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-11 23:49:49 --> Could not find the language line "Home"
