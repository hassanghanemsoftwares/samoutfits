<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-09-12 00:23:35 --> Could not find the language line "Home"
ERROR - 2024-09-12 00:25:37 --> Could not find the language line "Home"
ERROR - 2024-09-12 00:53:35 --> Could not find the language line "Home"
ERROR - 2024-09-12 00:58:37 --> Could not find the language line "Home"
ERROR - 2024-09-12 01:21:06 --> Could not find the language line "Home"
ERROR - 2024-09-12 01:23:37 --> Could not find the language line "Home"
ERROR - 2024-09-12 01:46:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-12 01:46:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-12 01:46:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-12 01:53:36 --> Could not find the language line "Home"
ERROR - 2024-09-12 02:23:36 --> Could not find the language line "Home"
ERROR - 2024-09-12 02:51:47 --> Could not find the language line "Home"
ERROR - 2024-09-12 02:52:33 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-09-12 02:52:33 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-09-12 02:52:33 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-09-12 02:52:42 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-09-12 02:52:42 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-09-12 02:53:37 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-09-12 02:53:37 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2024-09-12 02:53:37 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-09-12 02:53:37 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2024-09-12 02:53:37 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-09-12 02:53:37 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-09-12 02:53:37 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-09-12 02:53:37 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-09-12 02:53:37 --> Could not find the language line "Home"
ERROR - 2024-09-12 02:53:48 --> Could not find the language line "Home"
ERROR - 2024-09-12 02:55:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-12 02:55:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-12 02:55:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-12 02:55:33 --> Could not find the language line "Home"
ERROR - 2024-09-12 02:55:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-09-12 03:23:37 --> Could not find the language line "Home"
ERROR - 2024-09-12 03:53:39 --> Could not find the language line "Home"
ERROR - 2024-09-12 04:23:40 --> Could not find the language line "Home"
ERROR - 2024-09-12 04:36:30 --> Could not find the language line "Home"
ERROR - 2024-09-12 04:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 04:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 04:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 04:45:32 --> Could not find the language line "Home"
ERROR - 2024-09-12 04:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 04:53:38 --> Could not find the language line "Home"
ERROR - 2024-09-12 05:23:38 --> Could not find the language line "Home"
ERROR - 2024-09-12 05:53:39 --> Could not find the language line "Home"
ERROR - 2024-09-12 06:01:22 --> Could not find the language line "Home"
ERROR - 2024-09-12 06:01:39 --> Could not find the language line "Home"
ERROR - 2024-09-12 06:03:03 --> Could not find the language line "Home"
ERROR - 2024-09-12 06:03:09 --> Could not find the language line "Clothing"
ERROR - 2024-09-12 06:03:20 --> Could not find the language line "Home"
ERROR - 2024-09-12 06:03:26 --> Could not find the language line "Perfume"
ERROR - 2024-09-12 06:03:31 --> Could not find the language line "Home"
ERROR - 2024-09-12 06:03:32 --> Could not find the language line "Socks"
ERROR - 2024-09-12 06:03:47 --> Could not find the language line "Socks"
ERROR - 2024-09-12 06:03:59 --> Could not find the language line "Socks"
ERROR - 2024-09-12 06:04:01 --> Could not find the language line "Home"
ERROR - 2024-09-12 06:04:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-12 06:04:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-12 06:04:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-12 06:05:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-12 06:05:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-12 06:05:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-12 06:05:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-12 06:05:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-12 06:05:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-12 06:05:31 --> Could not find the language line "Home"
ERROR - 2024-09-12 06:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 06:23:39 --> Could not find the language line "Home"
ERROR - 2024-09-12 06:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 06:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 06:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 06:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 06:53:41 --> Could not find the language line "Home"
ERROR - 2024-09-12 07:12:41 --> Could not find the language line "Home"
ERROR - 2024-09-12 07:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:23:40 --> Could not find the language line "Home"
ERROR - 2024-09-12 07:26:21 --> Could not find the language line "Home"
ERROR - 2024-09-12 07:26:22 --> Could not find the language line "Home"
ERROR - 2024-09-12 07:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 07:53:42 --> Could not find the language line "Home"
ERROR - 2024-09-12 08:06:16 --> Could not find the language line "Home"
ERROR - 2024-09-12 08:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:23:20 --> Could not find the language line "Home"
ERROR - 2024-09-12 08:23:20 --> Could not find the language line "Home"
ERROR - 2024-09-12 08:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:23:41 --> Could not find the language line "Home"
ERROR - 2024-09-12 08:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:53:19 --> Could not find the language line "Home"
ERROR - 2024-09-12 08:53:42 --> Could not find the language line "Home"
ERROR - 2024-09-12 08:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 08:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:06:10 --> Could not find the language line "Home"
ERROR - 2024-09-12 09:06:49 --> Could not find the language line "Home"
ERROR - 2024-09-12 09:23:41 --> Could not find the language line "Home"
ERROR - 2024-09-12 09:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:27:53 --> Could not find the language line "Home"
ERROR - 2024-09-12 09:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-12 09:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-12 09:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-12 09:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-12 09:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-12 09:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-12 09:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-12 09:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-12 09:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-12 09:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-12 09:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-12 09:50:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-12 09:53:42 --> Could not find the language line "Home"
ERROR - 2024-09-12 09:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 09:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:23:44 --> Could not find the language line "Home"
ERROR - 2024-09-12 10:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:45:29 --> Could not find the language line "Clothing"
ERROR - 2024-09-12 10:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 10:53:44 --> Could not find the language line "Home"
ERROR - 2024-09-12 11:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:07:17 --> Could not find the language line "Home"
ERROR - 2024-09-12 11:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:23:44 --> Could not find the language line "Home"
ERROR - 2024-09-12 11:26:49 --> Could not find the language line "Home"
ERROR - 2024-09-12 11:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:44:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-12 11:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 11:52:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-12 11:52:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-09-12 11:52:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-12 11:52:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-09-12 11:52:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-12 11:52:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-12 11:52:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-12 11:52:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-09-12 11:52:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-12 11:52:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-12 11:52:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-09-12 11:52:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-12 11:53:44 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:00:58 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:13:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-12 12:13:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 100
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-12 12:13:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-12 12:22:55 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-09-12 12:23:44 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 12:40:44 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:41:41 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:41:42 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:41:43 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:41:43 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:41:44 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:41:49 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:41:53 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:41:54 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:41:55 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:41:56 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:41:57 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:41:57 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:41:59 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:00 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:01 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:02 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:03 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:03 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:05 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:42 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:42 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:42 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:42 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:42 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:49 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:49 --> 404 Page Not Found: 1974aa13031d253225918b14744314369amov/index
ERROR - 2024-09-12 12:42:49 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:49 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:50 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:50 --> 404 Page Not Found: Ece629aa309579flv/index
ERROR - 2024-09-12 12:42:51 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:51 --> 404 Page Not Found: 2455dbb94ab33a6a7553596b7emov/index
ERROR - 2024-09-12 12:42:51 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:51 --> 404 Page Not Found: 8e2e8c056ad06bmpg/index
ERROR - 2024-09-12 12:42:52 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:52 --> 404 Page Not Found: 81b0bb51355d3723baogg/index
ERROR - 2024-09-12 12:42:53 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:54 --> 404 Page Not Found: 718227e21365bacab816ae232814663486wmv/index
ERROR - 2024-09-12 12:42:54 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:55 --> 404 Page Not Found: C07406921a2e7ca23dac85422eogg/index
ERROR - 2024-09-12 12:42:55 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:55 --> 404 Page Not Found: 640938be8079bb7d9d9c6551dd47c97b729151mpeg/index
ERROR - 2024-09-12 12:42:56 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:56 --> 404 Page Not Found: 6a2b8ecd1b88c53b0c4d71a0flac/index
ERROR - 2024-09-12 12:42:56 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:56 --> 404 Page Not Found: Aaebad0e10a5bd94c995b45add357628a25659018b3b32mka/index
ERROR - 2024-09-12 12:42:56 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:56 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:56 --> 404 Page Not Found: Cd744c672701cb1576ac56c76046mka/index
ERROR - 2024-09-12 12:42:56 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:56 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:57 --> 404 Page Not Found: 088bd2ba905e54a425ed5c9d94flac/index
ERROR - 2024-09-12 12:42:57 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:57 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:57 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:57 --> 404 Page Not Found: 411bb5e11e0378b7b5028eba7478mpg/index
ERROR - 2024-09-12 12:42:58 --> 404 Page Not Found: 201aad54d3bb4aed6b1949d83cd4820569b198mka/index
ERROR - 2024-09-12 12:42:58 --> 404 Page Not Found: 2763474eab594191276089e84bflac/index
ERROR - 2024-09-12 12:42:58 --> 404 Page Not Found: 8a6d0ae9dbebc10d3a5a969d384d5ee1bab3395712754243mkv/index
ERROR - 2024-09-12 12:42:59 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:59 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:59 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:42:59 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:00 --> 404 Page Not Found: 5223d13c859c6d2753mkv/index
ERROR - 2024-09-12 12:43:01 --> 404 Page Not Found: 99bdc3270736be9eb8a7c56e47webp/index
ERROR - 2024-09-12 12:43:01 --> 404 Page Not Found: 29782683069a145c5e37272508c2844904c2e2223079d6wmv/index
ERROR - 2024-09-12 12:43:01 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:01 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:01 --> 404 Page Not Found: Ace8a4cdd2614d01974417ccb921mkv/index
ERROR - 2024-09-12 12:43:01 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:02 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:02 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:02 --> 404 Page Not Found: Da28ad0c26894304718a7ee079ae348920mka/index
ERROR - 2024-09-12 12:43:02 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:02 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:02 --> 404 Page Not Found: D8e831a80664e9c294e2e3aa1253073581789b0e2c7a43mpg/index
ERROR - 2024-09-12 12:43:02 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:03 --> 404 Page Not Found: 3c2d8ca7885bec1e799121d914cb29webm/index
ERROR - 2024-09-12 12:43:03 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:03 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:03 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:03 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:03 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:04 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:04 --> 404 Page Not Found: Ddd4b6b254b2ada27bc237e2dd37mka/index
ERROR - 2024-09-12 12:43:04 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:04 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:04 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:04 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:04 --> 404 Page Not Found: 13197e46a2webm/index
ERROR - 2024-09-12 12:43:05 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:05 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:05 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:05 --> 404 Page Not Found: B3d07739d111e1bbaa554b89649caewmv/index
ERROR - 2024-09-12 12:43:06 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:06 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:06 --> 404 Page Not Found: 2283e8902263e54e4dmov/index
ERROR - 2024-09-12 12:43:06 --> 404 Page Not Found: Ee082e921d01c45703mpg/index
ERROR - 2024-09-12 12:43:07 --> 404 Page Not Found: C65ee805614829392103585da5103ebdb704b894a4c8743eogg/index
ERROR - 2024-09-12 12:43:07 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:07 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:07 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:08 --> 404 Page Not Found: 3d2816c618webp/index
ERROR - 2024-09-12 12:43:08 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:08 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:08 --> 404 Page Not Found: Cabaa131e6c566b84935wmv/index
ERROR - 2024-09-12 12:43:08 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:08 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:08 --> 404 Page Not Found: 2ac6a0495dd2219280b98164e9592648wmv/index
ERROR - 2024-09-12 12:43:08 --> 404 Page Not Found: 46b74308b14207bbe687bdmov/index
ERROR - 2024-09-12 12:43:08 --> 404 Page Not Found: 0b11b9d2d67688069e898a2ca7cc1ba056flv/index
ERROR - 2024-09-12 12:43:09 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:09 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:09 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:09 --> 404 Page Not Found: Ad93aeba7ca1ec0dmka/index
ERROR - 2024-09-12 12:43:09 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:09 --> 404 Page Not Found: B0646bbb2b2a7c69e0693c55420203baavi/index
ERROR - 2024-09-12 12:43:10 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:10 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:10 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:10 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:10 --> 404 Page Not Found: 23ebc3a434cc724396aed4a046064ac644064348avi/index
ERROR - 2024-09-12 12:43:10 --> 404 Page Not Found: 6c98ce222a28mka/index
ERROR - 2024-09-12 12:43:10 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:11 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:11 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:11 --> 404 Page Not Found: Dab446ee54b1e8698153webp/index
ERROR - 2024-09-12 12:43:11 --> 404 Page Not Found: 35951b21c5615e62abb557346davi/index
ERROR - 2024-09-12 12:43:11 --> 404 Page Not Found: 1918b1cc996abe80c1mka/index
ERROR - 2024-09-12 12:43:11 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:11 --> 404 Page Not Found: Ece2d4119a8a67cacd80ed1b00mov/index
ERROR - 2024-09-12 12:43:11 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:11 --> 404 Page Not Found: 76104e32cac534555475wmv/index
ERROR - 2024-09-12 12:43:12 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:12 --> 404 Page Not Found: 435a997de7ec6b8a32c7b0d54492b3ogg/index
ERROR - 2024-09-12 12:43:12 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:12 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:12 --> 404 Page Not Found: 89cb0b277b8abea913548655b88d4e7265mp4/index
ERROR - 2024-09-12 12:43:13 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:13 --> 404 Page Not Found: Eb4c95714e0277c291302ec4200392cdflac/index
ERROR - 2024-09-12 12:43:13 --> 404 Page Not Found: C8b843b42108a4453845853e247201ebflac/index
ERROR - 2024-09-12 12:43:13 --> 404 Page Not Found: 132dadb9a60a6ed906e8d58354avi/index
ERROR - 2024-09-12 12:43:13 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:14 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:14 --> 404 Page Not Found: Decbe2c5a9a0625d4a4a9077e4bc332cd9524813109emp4/index
ERROR - 2024-09-12 12:43:14 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:14 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:14 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:14 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:14 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:15 --> 404 Page Not Found: 5ddea63d1cdeb0704d39ca7eb7640c38702445d4b9822aavi/index
ERROR - 2024-09-12 12:43:15 --> 404 Page Not Found: B4970914ad0518750ccd4121343a863de9b1212d25527903ogg/index
ERROR - 2024-09-12 12:43:15 --> 404 Page Not Found: Ac7a3e06d8b7e312deaaaa72webp/index
ERROR - 2024-09-12 12:43:15 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:15 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:16 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:16 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:16 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:16 --> 404 Page Not Found: 72330d8349webm/index
ERROR - 2024-09-12 12:43:16 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:16 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:16 --> 404 Page Not Found: Bd7e2c7b6b829c564918b1e3e73a5810a19c7e5aflac/index
ERROR - 2024-09-12 12:43:16 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:17 --> 404 Page Not Found: Ed96622cad59c148d4b2e566633aeb63bb6eb6e8flv/index
ERROR - 2024-09-12 12:43:17 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:17 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:17 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:17 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:18 --> 404 Page Not Found: Accdeddb22127ebeb56dee8572c29e081aavi/index
ERROR - 2024-09-12 12:43:18 --> 404 Page Not Found: B415c7335ab860131d440empg/index
ERROR - 2024-09-12 12:43:18 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:19 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:19 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:19 --> 404 Page Not Found: E5ce8b1750a89a7827b6526daed13a03a9mpeg/index
ERROR - 2024-09-12 12:43:19 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:20 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:20 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:21 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:21 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:22 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:22 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:22 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:23 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:24 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:24 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:24 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:25 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:25 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:25 --> 404 Page Not Found: 50908b2c09d553c1b071981aa2wmv/index
ERROR - 2024-09-12 12:43:26 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:27 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:29 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:43:30 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:53:44 --> Could not find the language line "Home"
ERROR - 2024-09-12 12:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 12:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:02:02 --> Could not find the language line "Home"
ERROR - 2024-09-12 13:16:14 --> Could not find the language line "Home"
ERROR - 2024-09-12 13:16:17 --> Could not find the language line "Home"
ERROR - 2024-09-12 13:23:45 --> Could not find the language line "Home"
ERROR - 2024-09-12 13:32:49 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-09-12 13:32:52 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-09-12 13:34:43 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-09-12 13:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:50:21 --> Could not find the language line "Home"
ERROR - 2024-09-12 13:51:23 --> Could not find the language line "Home"
ERROR - 2024-09-12 13:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:53:46 --> Could not find the language line "Home"
ERROR - 2024-09-12 13:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:56:31 --> Could not find the language line "Home"
ERROR - 2024-09-12 13:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 13:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:00:46 --> Could not find the language line "Home"
ERROR - 2024-09-12 14:11:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:17:07 --> Could not find the language line "Home"
ERROR - 2024-09-12 14:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:19:02 --> Could not find the language line "Home"
ERROR - 2024-09-12 14:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:20:34 --> Could not find the language line "Home"
ERROR - 2024-09-12 14:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:22:17 --> Could not find the language line "Home"
ERROR - 2024-09-12 14:23:20 --> Could not find the language line "Home"
ERROR - 2024-09-12 14:23:45 --> Could not find the language line "Home"
ERROR - 2024-09-12 14:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:31:55 --> Could not find the language line "Home"
ERROR - 2024-09-12 14:51:58 --> Could not find the language line "Home"
ERROR - 2024-09-12 14:53:45 --> Could not find the language line "Home"
ERROR - 2024-09-12 14:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 14:58:43 --> Could not find the language line "Home"
ERROR - 2024-09-12 14:58:48 --> Could not find the language line "Home"
ERROR - 2024-09-12 14:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 15:00:22 --> Could not find the language line "Home"
ERROR - 2024-09-12 15:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 15:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 15:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 15:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 15:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 15:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 15:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 15:07:28 --> Could not find the language line "Home"
ERROR - 2024-09-12 15:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 15:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 15:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 15:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 15:23:46 --> Could not find the language line "Home"
ERROR - 2024-09-12 15:49:27 --> Could not find the language line "Home"
ERROR - 2024-09-12 15:53:47 --> Could not find the language line "Home"
ERROR - 2024-09-12 16:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 16:23:47 --> Could not find the language line "Home"
ERROR - 2024-09-12 16:37:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-12 16:37:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-12 16:37:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-12 16:53:48 --> Could not find the language line "Home"
ERROR - 2024-09-12 17:23:48 --> Could not find the language line "Home"
ERROR - 2024-09-12 17:49:23 --> Could not find the language line "Home"
ERROR - 2024-09-12 17:53:48 --> Could not find the language line "Home"
ERROR - 2024-09-12 17:55:32 --> Could not find the language line "Home"
ERROR - 2024-09-12 17:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:08:33 --> Could not find the language line "Home"
ERROR - 2024-09-12 18:08:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:08:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:09:02 --> Could not find the language line "Home"
ERROR - 2024-09-12 18:09:05 --> Could not find the language line "Clothing"
ERROR - 2024-09-12 18:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:22:01 --> Could not find the language line "Home"
ERROR - 2024-09-12 18:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:23:42 --> Could not find the language line "Home"
ERROR - 2024-09-12 18:23:49 --> Could not find the language line "Home"
ERROR - 2024-09-12 18:23:58 --> Could not find the language line "Socks"
ERROR - 2024-09-12 18:24:16 --> Could not find the language line "Home"
ERROR - 2024-09-12 18:24:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:24:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:24:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:24:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:25:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:25:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:25:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:25:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:25:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:25:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:26:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:26:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:26:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:26:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:26:28 --> Could not find the language line "Home"
ERROR - 2024-09-12 18:26:41 --> Could not find the language line "Clothing"
ERROR - 2024-09-12 18:27:08 --> Could not find the language line "Clothing"
ERROR - 2024-09-12 18:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:27:39 --> Could not find the language line "Clothing"
ERROR - 2024-09-12 18:27:51 --> Could not find the language line "Clothing"
ERROR - 2024-09-12 18:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:28:16 --> Could not find the language line "Clothing"
ERROR - 2024-09-12 18:28:16 --> Could not find the language line "Home"
ERROR - 2024-09-12 18:28:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:28:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-12 18:28:18 --> Could not find the language line "Home"
ERROR - 2024-09-12 18:30:09 --> Could not find the language line "Home"
ERROR - 2024-09-12 18:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:32:33 --> Could not find the language line "Home"
ERROR - 2024-09-12 18:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:53:49 --> Could not find the language line "Home"
ERROR - 2024-09-12 18:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 18:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 19:00:34 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-12 19:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 19:01:13 --> Could not find the language line "Home"
ERROR - 2024-09-12 19:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 19:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 19:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 19:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 19:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 19:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 19:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 19:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 19:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 19:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 19:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 19:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 19:17:05 --> Could not find the language line "Home"
ERROR - 2024-09-12 19:23:51 --> Could not find the language line "Home"
ERROR - 2024-09-12 19:31:33 --> Could not find the language line "Home"
ERROR - 2024-09-12 19:31:51 --> Could not find the language line "Home"
ERROR - 2024-09-12 19:40:52 --> Could not find the language line "Home"
ERROR - 2024-09-12 19:53:50 --> Could not find the language line "Home"
ERROR - 2024-09-12 19:56:46 --> Could not find the language line "Home"
ERROR - 2024-09-12 20:23:50 --> Could not find the language line "Home"
ERROR - 2024-09-12 20:42:57 --> Could not find the language line "Home"
ERROR - 2024-09-12 20:43:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-12 20:45:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-12 20:53:52 --> Could not find the language line "Home"
ERROR - 2024-09-12 21:12:21 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-09-12 21:12:22 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-09-12 21:12:24 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-09-12 21:12:24 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-09-12 21:12:26 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-09-12 21:12:27 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-09-12 21:19:51 --> Could not find the language line "Home"
ERROR - 2024-09-12 21:23:51 --> Could not find the language line "Home"
ERROR - 2024-09-12 21:53:52 --> Could not find the language line "Home"
ERROR - 2024-09-12 22:00:24 --> Could not find the language line "Home"
ERROR - 2024-09-12 22:01:26 --> Could not find the language line "Home"
ERROR - 2024-09-12 22:23:51 --> Could not find the language line "Home"
ERROR - 2024-09-12 22:44:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-12 22:44:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 100
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-12 22:44:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-12 22:46:44 --> Could not find the language line "Home"
ERROR - 2024-09-12 22:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 22:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 22:50:02 --> Could not find the language line "Home"
ERROR - 2024-09-12 22:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 22:51:25 --> Could not find the language line "Home"
ERROR - 2024-09-12 22:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 22:51:50 --> Could not find the language line "Home"
ERROR - 2024-09-12 22:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-12 22:51:59 --> Could not find the language line "Home"
ERROR - 2024-09-12 22:52:52 --> Could not find the language line "Home"
ERROR - 2024-09-12 22:54:02 --> Could not find the language line "Home"
ERROR - 2024-09-12 23:23:53 --> Could not find the language line "Home"
ERROR - 2024-09-12 23:53:54 --> Could not find the language line "Home"
