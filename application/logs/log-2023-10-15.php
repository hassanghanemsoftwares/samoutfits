<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-15 00:08:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 00:10:24 --> Could not find the language line "Home"
ERROR - 2023-10-15 01:07:10 --> 404 Page Not Found: Api/.env
ERROR - 2023-10-15 01:12:11 --> Could not find the language line "Home"
ERROR - 2023-10-15 01:20:16 --> Could not find the language line "Home"
ERROR - 2023-10-15 01:20:56 --> 404 Page Not Found: App-adstxt/index
ERROR - 2023-10-15 01:20:56 --> 404 Page Not Found: Sellersjson/index
ERROR - 2023-10-15 01:20:56 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-10-15 01:20:58 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-10-15 01:20:58 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-15 01:21:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 01:21:18 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-15 01:21:18 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-10-15 01:21:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 01:21:18 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2023-10-15 01:21:18 --> 404 Page Not Found: Well-known/change-password
ERROR - 2023-10-15 01:21:18 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-10-15 01:21:18 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2023-10-15 01:24:35 --> Could not find the language line "Home"
ERROR - 2023-10-15 01:43:53 --> 404 Page Not Found: C001-shoes/index
ERROR - 2023-10-15 01:44:43 --> Could not find the language line "Home"
ERROR - 2023-10-15 01:45:22 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-10-15 01:45:22 --> 404 Page Not Found: App-adstxt/index
ERROR - 2023-10-15 01:45:22 --> 404 Page Not Found: Sellersjson/index
ERROR - 2023-10-15 01:45:24 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-10-15 01:45:24 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-15 01:45:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 01:45:42 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-15 01:45:43 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2023-10-15 01:45:43 --> 404 Page Not Found: Well-known/change-password
ERROR - 2023-10-15 01:45:43 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2023-10-15 01:45:43 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-10-15 01:45:43 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-10-15 01:45:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 01:49:03 --> Could not find the language line "Home"
ERROR - 2023-10-15 01:50:52 --> Could not find the language line "Home"
ERROR - 2023-10-15 01:50:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 01:50:53 --> 404 Page Not Found: Assets/lib
ERROR - 2023-10-15 02:02:12 --> Could not find the language line "Home"
ERROR - 2023-10-15 02:03:09 --> Could not find the language line "Home"
ERROR - 2023-10-15 02:03:44 --> Could not find the language line "Home"
ERROR - 2023-10-15 02:05:58 --> Could not find the language line "Home"
ERROR - 2023-10-15 02:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 02:07:07 --> Could not find the language line "Home"
ERROR - 2023-10-15 02:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 02:09:54 --> Could not find the language line "Home"
ERROR - 2023-10-15 02:09:56 --> Could not find the language line "Home"
ERROR - 2023-10-15 02:11:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 02:15:18 --> Could not find the language line "Home"
ERROR - 2023-10-15 02:20:48 --> Could not find the language line "Home"
ERROR - 2023-10-15 02:22:38 --> Could not find the language line "Home"
ERROR - 2023-10-15 02:22:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-15 02:22:59 --> Could not find the language line "Perfume"
ERROR - 2023-10-15 02:23:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-15 02:23:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-15 02:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 02:24:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-15 02:25:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-15 02:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 02:26:20 --> Could not find the language line "Home"
ERROR - 2023-10-15 02:58:21 --> Could not find the language line "Socks"
ERROR - 2023-10-15 03:14:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-15 03:19:13 --> Could not find the language line "Home"
ERROR - 2023-10-15 03:21:44 --> Could not find the language line "Home"
ERROR - 2023-10-15 03:26:46 --> Could not find the language line "Home"
ERROR - 2023-10-15 03:28:52 --> Could not find the language line "Home"
ERROR - 2023-10-15 03:29:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 03:29:58 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 03:30:18 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 03:30:26 --> Could not find the language line "Home"
ERROR - 2023-10-15 03:30:38 --> Could not find the language line "Socks"
ERROR - 2023-10-15 03:30:45 --> Could not find the language line "Home"
ERROR - 2023-10-15 03:40:16 --> Could not find the language line "Home"
ERROR - 2023-10-15 03:41:05 --> Could not find the language line "Home"
ERROR - 2023-10-15 03:44:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 03:59:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 03:59:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 03:59:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 04:00:01 --> Could not find the language line "Home"
ERROR - 2023-10-15 04:15:26 --> Could not find the language line "Home"
ERROR - 2023-10-15 04:18:38 --> Could not find the language line "Home"
ERROR - 2023-10-15 04:23:10 --> Could not find the language line "Home"
ERROR - 2023-10-15 04:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 04:38:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-15 04:44:35 --> Could not find the language line "Home"
ERROR - 2023-10-15 04:57:04 --> 404 Page Not Found: Wp-json/index
ERROR - 2023-10-15 04:57:05 --> 404 Page Not Found: Wp-json/index
ERROR - 2023-10-15 05:00:30 --> Could not find the language line "Home"
ERROR - 2023-10-15 05:06:01 --> Could not find the language line "Home"
ERROR - 2023-10-15 05:08:14 --> Could not find the language line "Home"
ERROR - 2023-10-15 05:12:20 --> Could not find the language line "Home"
ERROR - 2023-10-15 05:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 05:14:14 --> Could not find the language line "Home"
ERROR - 2023-10-15 05:30:15 --> Could not find the language line "Home"
ERROR - 2023-10-15 05:43:59 --> Could not find the language line "Home"
ERROR - 2023-10-15 05:44:20 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 05:44:35 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 05:44:50 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 05:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 05:45:38 --> Could not find the language line "Home"
ERROR - 2023-10-15 05:45:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-15 05:46:03 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 05:46:14 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 05:51:51 --> Could not find the language line "Home"
ERROR - 2023-10-15 05:54:48 --> Could not find the language line "Home"
ERROR - 2023-10-15 05:55:18 --> Could not find the language line "Home"
ERROR - 2023-10-15 05:55:34 --> Could not find the language line "Home"
ERROR - 2023-10-15 06:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 06:06:41 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-15 06:15:30 --> Could not find the language line "Other"
ERROR - 2023-10-15 06:22:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 06:23:10 --> Could not find the language line "Home"
ERROR - 2023-10-15 06:24:39 --> Could not find the language line "Home"
ERROR - 2023-10-15 06:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 06:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 06:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 06:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 06:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 06:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 06:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 06:33:49 --> Could not find the language line "Home"
ERROR - 2023-10-15 06:35:05 --> Could not find the language line "Home"
ERROR - 2023-10-15 06:35:05 --> Could not find the language line "Home"
ERROR - 2023-10-15 06:35:09 --> Could not find the language line "Home"
ERROR - 2023-10-15 06:35:15 --> Could not find the language line "Home"
ERROR - 2023-10-15 06:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 06:37:25 --> Could not find the language line "Home"
ERROR - 2023-10-15 06:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 06:40:50 --> Could not find the language line "Home"
ERROR - 2023-10-15 06:40:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 06:42:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-15 06:42:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-15 06:42:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-15 06:42:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-15 06:42:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-15 06:42:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-15 06:42:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-15 06:42:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-15 06:42:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-15 06:42:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-15 06:42:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-15 06:42:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-15 06:42:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-15 06:42:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-15 06:42:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-15 06:50:57 --> Could not find the language line "Home"
ERROR - 2023-10-15 06:58:51 --> Could not find the language line "Home"
ERROR - 2023-10-15 07:06:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 07:06:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 07:13:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-15 07:18:23 --> Could not find the language line "Home"
ERROR - 2023-10-15 07:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 07:19:03 --> Could not find the language line "Home"
ERROR - 2023-10-15 07:24:42 --> Could not find the language line "Home"
ERROR - 2023-10-15 07:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 07:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 07:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 07:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 07:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 07:34:53 --> Could not find the language line "Home"
ERROR - 2023-10-15 07:34:55 --> Could not find the language line "Home"
ERROR - 2023-10-15 07:35:04 --> Could not find the language line "Socks"
ERROR - 2023-10-15 07:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 07:35:16 --> Could not find the language line "Socks"
ERROR - 2023-10-15 07:35:19 --> Could not find the language line "Home"
ERROR - 2023-10-15 07:36:24 --> Could not find the language line "Home"
ERROR - 2023-10-15 07:43:27 --> Could not find the language line "Home"
ERROR - 2023-10-15 07:43:51 --> Could not find the language line "Home"
ERROR - 2023-10-15 08:06:46 --> Could not find the language line "Home"
ERROR - 2023-10-15 08:07:37 --> Could not find the language line "Home"
ERROR - 2023-10-15 08:08:09 --> Could not find the language line "Home"
ERROR - 2023-10-15 08:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 08:14:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 08:14:41 --> Could not find the language line "Home"
ERROR - 2023-10-15 08:23:13 --> Could not find the language line "Home"
ERROR - 2023-10-15 08:25:31 --> Could not find the language line "Home"
ERROR - 2023-10-15 08:25:46 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 08:27:02 --> Could not find the language line "Home"
ERROR - 2023-10-15 08:27:56 --> Could not find the language line "Home"
ERROR - 2023-10-15 08:35:50 --> Could not find the language line "Home"
ERROR - 2023-10-15 08:36:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 08:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 08:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 08:38:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 08:38:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 08:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 08:38:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 08:39:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 08:39:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 08:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 08:39:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 08:39:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 08:40:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 08:40:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 08:40:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 08:40:07 --> Could not find the language line "Home"
ERROR - 2023-10-15 08:43:07 --> Could not find the language line "Home"
ERROR - 2023-10-15 08:47:20 --> Could not find the language line "Home"
ERROR - 2023-10-15 08:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:03:31 --> Could not find the language line "Home"
ERROR - 2023-10-15 09:07:53 --> Could not find the language line "Home"
ERROR - 2023-10-15 09:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:22:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 09:22:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 09:22:32 --> Could not find the language line "Home"
ERROR - 2023-10-15 09:27:01 --> Could not find the language line "Home"
ERROR - 2023-10-15 09:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:27:57 --> Could not find the language line "Home"
ERROR - 2023-10-15 09:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:29:33 --> Could not find the language line "Home"
ERROR - 2023-10-15 09:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:32:09 --> Could not find the language line "Home"
ERROR - 2023-10-15 09:32:13 --> Could not find the language line "Home"
ERROR - 2023-10-15 09:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:34:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-15 09:35:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-15 09:36:17 --> Could not find the language line "Home"
ERROR - 2023-10-15 09:45:12 --> Could not find the language line "Home"
ERROR - 2023-10-15 09:49:18 --> Could not find the language line "Home"
ERROR - 2023-10-15 09:49:51 --> Could not find the language line "Home"
ERROR - 2023-10-15 09:54:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 09:54:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 09:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:54:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 09:54:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 09:54:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 09:54:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 09:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:55:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-15 09:57:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-15 09:57:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-15 09:57:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-15 09:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:58:57 --> Could not find the language line "Home"
ERROR - 2023-10-15 09:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:59:11 --> Could not find the language line "Home"
ERROR - 2023-10-15 09:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 09:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:00:30 --> Could not find the language line "Home"
ERROR - 2023-10-15 10:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:01:46 --> Could not find the language line "Home"
ERROR - 2023-10-15 10:02:14 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-15 10:03:04 --> Could not find the language line "Home"
ERROR - 2023-10-15 10:03:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:03:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:04:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:04:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:04:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:05:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:05:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:07:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:07:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:07:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:09:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:09:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:11:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:11:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:12:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:16:00 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 10:17:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 10:17:41 --> Could not find the language line "Home"
ERROR - 2023-10-15 10:19:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-15 10:24:09 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 10:24:17 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 10:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:33:04 --> Could not find the language line "Home"
ERROR - 2023-10-15 10:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:37:28 --> Could not find the language line "Home"
ERROR - 2023-10-15 10:38:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:42:55 --> Could not find the language line "Home"
ERROR - 2023-10-15 10:44:58 --> Could not find the language line "Home"
ERROR - 2023-10-15 10:46:54 --> Could not find the language line "Home"
ERROR - 2023-10-15 10:47:20 --> Could not find the language line "Home"
ERROR - 2023-10-15 10:47:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:48:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:48:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:48:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:49:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:49:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:49:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:49:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:49:39 --> Could not find the language line "Home"
ERROR - 2023-10-15 10:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:52:26 --> Could not find the language line "Home"
ERROR - 2023-10-15 10:52:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:53:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 10:59:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 10:59:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 11:13:03 --> Could not find the language line "Home"
ERROR - 2023-10-15 11:13:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 11:13:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 11:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 11:13:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 11:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 11:14:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 11:14:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 11:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 11:15:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 11:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 11:15:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 11:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 11:15:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 11:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 11:16:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 11:16:27 --> Could not find the language line "Home"
ERROR - 2023-10-15 11:19:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 11:29:09 --> Could not find the language line "Other"
ERROR - 2023-10-15 11:32:07 --> Could not find the language line "Home"
ERROR - 2023-10-15 11:33:34 --> Could not find the language line "Home"
ERROR - 2023-10-15 11:35:47 --> Could not find the language line "Other"
ERROR - 2023-10-15 11:37:16 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-10-15 11:39:34 --> Could not find the language line "Home"
ERROR - 2023-10-15 11:56:57 --> Could not find the language line "Home"
ERROR - 2023-10-15 11:57:13 --> Could not find the language line "Home"
ERROR - 2023-10-15 11:57:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 11:57:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 11:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 11:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 11:57:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 11:57:40 --> Could not find the language line "Home"
ERROR - 2023-10-15 11:57:44 --> Could not find the language line "Home"
ERROR - 2023-10-15 11:57:52 --> Could not find the language line "Home"
ERROR - 2023-10-15 11:58:19 --> Could not find the language line "Home"
ERROR - 2023-10-15 11:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 11:58:56 --> Could not find the language line "Home"
ERROR - 2023-10-15 12:16:12 --> Could not find the language line "Home"
ERROR - 2023-10-15 12:22:22 --> Could not find the language line "Home"
ERROR - 2023-10-15 12:25:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-15 12:25:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-15 12:29:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-15 12:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 12:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 12:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 12:39:38 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 12:40:34 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 12:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 12:42:02 --> Could not find the language line "Home"
ERROR - 2023-10-15 12:55:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 12:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 12:58:52 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 12:59:01 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 12:59:49 --> Could not find the language line "Home"
ERROR - 2023-10-15 12:59:50 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-15 13:01:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 13:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:05:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-15 13:05:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-15 13:05:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-15 13:07:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-15 13:07:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-15 13:07:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-15 13:09:03 --> Could not find the language line "Home"
ERROR - 2023-10-15 13:09:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-15 13:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:13:00 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 13:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:22:32 --> Could not find the language line "Home"
ERROR - 2023-10-15 13:23:19 --> Could not find the language line "Home"
ERROR - 2023-10-15 13:26:06 --> Could not find the language line "Home"
ERROR - 2023-10-15 13:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:39:37 --> Could not find the language line "Home"
ERROR - 2023-10-15 13:40:15 --> Could not find the language line "Home"
ERROR - 2023-10-15 13:40:25 --> Could not find the language line "Home"
ERROR - 2023-10-15 13:40:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 13:40:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 13:40:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:40:43 --> Could not find the language line "Home"
ERROR - 2023-10-15 13:40:46 --> Could not find the language line "Home"
ERROR - 2023-10-15 13:40:47 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-15 13:40:48 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-15 13:40:48 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-15 13:40:48 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-15 13:40:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 13:40:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 13:41:02 --> Could not find the language line "Home"
ERROR - 2023-10-15 13:41:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 13:41:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 13:41:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 13:41:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 13:41:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 13:41:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 13:41:23 --> Could not find the language line "Home"
ERROR - 2023-10-15 13:41:38 --> Could not find the language line "Home"
ERROR - 2023-10-15 13:41:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 13:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:44:41 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-15 13:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:50:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 13:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 13:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 14:00:37 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 14:08:58 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:09:37 --> Could not find the language line "Other"
ERROR - 2023-10-15 14:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 14:11:11 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-15 14:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 14:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 14:16:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-15 14:16:54 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:19:42 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:20:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 14:20:23 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-10-15 14:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 14:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 14:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 14:25:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 14:25:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 14:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 14:28:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 14:28:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 14:30:42 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:31:40 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 14:32:15 --> Could not find the language line "Socks"
ERROR - 2023-10-15 14:32:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 14:32:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 14:32:24 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:34:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-15 14:35:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-15 14:39:57 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:40:18 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:44:51 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:45:09 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 14:45:33 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 14:50:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-15 14:50:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '10'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-15 14:50:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-15 14:51:12 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:51:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 14:52:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 14:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 14:52:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 14:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 14:52:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 14:52:55 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:56:26 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:57:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 14:57:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 14:58:15 --> Could not find the language line "Home"
ERROR - 2023-10-15 14:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 15:00:30 --> Could not find the language line "Home"
ERROR - 2023-10-15 15:10:20 --> Could not find the language line "Home"
ERROR - 2023-10-15 15:17:27 --> Could not find the language line "Home"
ERROR - 2023-10-15 15:20:42 --> Could not find the language line "Home"
ERROR - 2023-10-15 15:20:42 --> Could not find the language line "Home"
ERROR - 2023-10-15 15:21:12 --> Could not find the language line "Home"
ERROR - 2023-10-15 15:21:46 --> Could not find the language line "Home"
ERROR - 2023-10-15 15:23:46 --> Could not find the language line "Home"
ERROR - 2023-10-15 15:24:08 --> Could not find the language line "Home"
ERROR - 2023-10-15 15:27:48 --> Could not find the language line "Home"
ERROR - 2023-10-15 15:31:02 --> Could not find the language line "Home"
ERROR - 2023-10-15 15:31:52 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-15 15:31:52 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-15 15:31:52 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-15 15:31:52 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-15 15:31:52 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-15 15:31:52 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-15 15:31:52 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-15 15:31:54 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-15 15:31:54 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-15 15:31:56 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-15 15:32:42 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-15 15:32:42 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-15 15:32:42 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-15 15:32:42 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-15 15:32:42 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-15 15:32:43 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-15 15:32:43 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-15 15:32:43 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-15 15:32:44 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-15 15:32:46 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-15 15:33:41 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-15 15:33:41 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-15 15:33:41 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-15 15:33:41 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-15 15:33:42 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-15 15:33:42 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-15 15:33:42 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-15 15:33:42 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-15 15:33:42 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-15 15:33:43 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-15 15:34:16 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-15 15:34:16 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-15 15:34:16 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-15 15:34:16 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-15 15:34:16 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-15 15:34:16 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-15 15:34:16 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-15 15:34:17 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-15 15:34:17 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-15 15:34:18 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-15 15:34:43 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-15 15:34:43 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-15 15:34:43 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-15 15:34:43 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-15 15:34:43 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-15 15:34:43 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-15 15:34:43 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-15 15:34:43 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-15 15:34:44 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-15 15:34:44 --> Could not find the language line "Home"
ERROR - 2023-10-15 15:34:45 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-15 15:47:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 15:47:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 15:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 15:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 15:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 16:00:18 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:03:42 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:03:58 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:18:03 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:18:17 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 16:19:19 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:19:19 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:19:19 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:19:19 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:27:19 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:27:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 16:28:17 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:29:52 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-15 16:29:52 --> 404 Page Not Found: Fm1php/index
ERROR - 2023-10-15 16:29:53 --> 404 Page Not Found: M1php/index
ERROR - 2023-10-15 16:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 16:30:48 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:37:36 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:41:47 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 16:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 16:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 16:43:17 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:45:39 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:50:05 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:50:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 16:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 16:51:58 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:53:26 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:55:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 16:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 16:56:12 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-15 16:56:37 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:56:44 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 16:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 16:58:24 --> Could not find the language line "Home"
ERROR - 2023-10-15 16:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 17:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 17:01:26 --> Could not find the language line "Home"
ERROR - 2023-10-15 17:01:35 --> Could not find the language line "Home"
ERROR - 2023-10-15 17:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 17:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 17:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 17:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 17:08:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 17:11:38 --> Could not find the language line "Home"
ERROR - 2023-10-15 17:11:38 --> Could not find the language line "Home"
ERROR - 2023-10-15 17:14:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 17:15:32 --> Could not find the language line "Home"
ERROR - 2023-10-15 17:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 17:20:36 --> Could not find the language line "Home"
ERROR - 2023-10-15 17:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 17:33:14 --> Could not find the language line "Home"
ERROR - 2023-10-15 17:34:57 --> Could not find the language line "Socks"
ERROR - 2023-10-15 17:41:27 --> Could not find the language line "Perfume"
ERROR - 2023-10-15 17:41:50 --> Could not find the language line "Home"
ERROR - 2023-10-15 17:55:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 17:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 17:57:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 17:57:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 17:59:07 --> Could not find the language line "Home"
ERROR - 2023-10-15 17:59:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-15 17:59:23 --> Could not find the language line "Home"
ERROR - 2023-10-15 17:59:46 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:02:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 18:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:06:54 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:09:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 18:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:10:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 18:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:11:06 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:11:53 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:12:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 18:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:15:37 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:18:56 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:19:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 18:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:20:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 18:20:23 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:24:00 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:24:07 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:27:27 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:30:00 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:30:40 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:35:14 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:35:14 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:35:14 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:35:16 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:36:05 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:36:36 --> Could not find the language line "Socks"
ERROR - 2023-10-15 18:37:01 --> Could not find the language line "Socks"
ERROR - 2023-10-15 18:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:40:09 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:41:11 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:41:17 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 18:41:36 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:41:37 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:41:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-15 18:42:05 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:42:12 --> Could not find the language line "Socks"
ERROR - 2023-10-15 18:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:42:21 --> Could not find the language line "Home"
ERROR - 2023-10-15 18:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 18:56:05 --> Could not find the language line "Home"
ERROR - 2023-10-15 19:00:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 19:01:15 --> Could not find the language line "Home"
ERROR - 2023-10-15 19:06:11 --> Could not find the language line "Home"
ERROR - 2023-10-15 19:10:25 --> Could not find the language line "Home"
ERROR - 2023-10-15 19:10:36 --> Could not find the language line "Home"
ERROR - 2023-10-15 19:10:36 --> Could not find the language line "Home"
ERROR - 2023-10-15 19:15:56 --> Could not find the language line "Home"
ERROR - 2023-10-15 19:27:05 --> Could not find the language line "Home"
ERROR - 2023-10-15 19:31:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 19:39:39 --> Could not find the language line "Home"
ERROR - 2023-10-15 19:39:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 19:39:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 19:40:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 19:40:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 19:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 19:47:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 19:54:39 --> Could not find the language line "Home"
ERROR - 2023-10-15 19:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 19:55:43 --> Could not find the language line "Home"
ERROR - 2023-10-15 20:01:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 20:02:23 --> Could not find the language line "Home"
ERROR - 2023-10-15 20:02:31 --> Could not find the language line "Home"
ERROR - 2023-10-15 20:04:45 --> Could not find the language line "Home"
ERROR - 2023-10-15 20:05:04 --> Could not find the language line "Home"
ERROR - 2023-10-15 20:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 20:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 20:19:15 --> Could not find the language line "Home"
ERROR - 2023-10-15 20:24:27 --> Could not find the language line "Home"
ERROR - 2023-10-15 20:31:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 20:31:17 --> Could not find the language line "Home"
ERROR - 2023-10-15 20:34:43 --> Could not find the language line "Home"
ERROR - 2023-10-15 20:38:08 --> Could not find the language line "Home"
ERROR - 2023-10-15 20:44:32 --> Could not find the language line "Home"
ERROR - 2023-10-15 20:46:39 --> Could not find the language line "Home"
ERROR - 2023-10-15 20:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 20:48:23 --> Could not find the language line "Home"
ERROR - 2023-10-15 20:55:27 --> Could not find the language line "Home"
ERROR - 2023-10-15 20:56:12 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-15 21:19:53 --> Could not find the language line "Home"
ERROR - 2023-10-15 21:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:25:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 21:25:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 21:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:37:00 --> Could not find the language line "Home"
ERROR - 2023-10-15 21:37:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 21:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:38:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 21:38:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 21:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:39:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 21:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:39:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 21:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:39:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 21:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:40:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 21:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:41:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 21:42:44 --> Could not find the language line "Home"
ERROR - 2023-10-15 21:43:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 21:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:49:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 21:53:26 --> Could not find the language line "Home"
ERROR - 2023-10-15 21:55:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-15 21:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 21:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 22:17:36 --> Could not find the language line "Home"
ERROR - 2023-10-15 22:17:36 --> Could not find the language line "Home"
ERROR - 2023-10-15 22:19:41 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-15 22:26:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 22:42:32 --> Could not find the language line "Home"
ERROR - 2023-10-15 22:42:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 22:43:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 22:43:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 22:43:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 22:43:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-15 22:44:22 --> Could not find the language line "Home"
ERROR - 2023-10-15 22:44:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-15 22:44:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-15 22:44:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 22:44:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 22:44:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 22:44:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 22:44:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 22:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 22:45:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 22:45:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 22:45:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 22:45:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 22:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 22:46:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 22:46:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 22:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 22:46:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 22:46:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-15 22:46:48 --> Could not find the language line "Home"
ERROR - 2023-10-15 22:46:52 --> Could not find the language line "Socks"
ERROR - 2023-10-15 22:47:46 --> Could not find the language line "Home"
ERROR - 2023-10-15 22:47:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 22:48:30 --> Could not find the language line "Home"
ERROR - 2023-10-15 22:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 22:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 22:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 22:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 22:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 22:54:25 --> Could not find the language line "Home"
ERROR - 2023-10-15 22:54:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-15 22:54:53 --> Could not find the language line "Home"
ERROR - 2023-10-15 22:55:05 --> Could not find the language line "Bracelets"
ERROR - 2023-10-15 22:55:26 --> Could not find the language line "Home"
ERROR - 2023-10-15 22:55:36 --> Could not find the language line "Perfume"
ERROR - 2023-10-15 22:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 22:55:59 --> Could not find the language line "Perfume"
ERROR - 2023-10-15 22:56:02 --> Could not find the language line "Home"
ERROR - 2023-10-15 22:56:06 --> Could not find the language line "Home"
ERROR - 2023-10-15 22:56:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 22:56:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 22:57:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 22:57:08 --> Could not find the language line "Home"
ERROR - 2023-10-15 22:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 22:58:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 22:58:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 22:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-10-15 23:00:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 23:00:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 23:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 23:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 23:00:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 23:00:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 23:00:59 --> Could not find the language line "Home"
ERROR - 2023-10-15 23:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 23:01:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 23:01:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 23:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 23:02:00 --> Could not find the language line "Home"
ERROR - 2023-10-15 23:02:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 23:02:16 --> Could not find the language line "Home"
ERROR - 2023-10-15 23:02:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 23:02:43 --> Could not find the language line "Home"
ERROR - 2023-10-15 23:02:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 23:03:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 23:03:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-15 23:03:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 23:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 23:03:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 23:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 23:04:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-15 23:05:00 --> Could not find the language line "Home"
ERROR - 2023-10-15 23:05:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 23:05:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 23:05:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 23:05:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 23:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-15 23:06:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 23:06:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-15 23:07:09 --> Could not find the language line "Home"
ERROR - 2023-10-15 23:08:54 --> Could not find the language line "Home"
ERROR - 2023-10-15 23:15:36 --> Could not find the language line "Home"
ERROR - 2023-10-15 23:32:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-15 23:45:26 --> Could not find the language line "Home"
