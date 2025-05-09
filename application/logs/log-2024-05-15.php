<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-15 00:05:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 00:05:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 00:10:05 --> Could not find the language line "Home"
ERROR - 2024-05-15 00:11:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 00:20:29 --> Could not find the language line "Home"
ERROR - 2024-05-15 00:21:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 00:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 00:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-15 00:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 00:35:58 --> Could not find the language line "Other"
ERROR - 2024-05-15 00:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 00:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 00:49:40 --> Could not find the language line "products"
ERROR - 2024-05-15 00:50:27 --> Could not find the language line "Home"
ERROR - 2024-05-15 00:52:17 --> Could not find the language line "Socks"
ERROR - 2024-05-15 00:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 00:57:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 00:57:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 00:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 00:58:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 00:58:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 00:58:18 --> Could not find the language line "Home"
ERROR - 2024-05-15 00:59:36 --> Could not find the language line "products"
ERROR - 2024-05-15 01:00:23 --> Could not find the language line "Home"
ERROR - 2024-05-15 01:01:07 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-05-15 01:01:07 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-05-15 01:01:07 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-05-15 01:01:09 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-05-15 01:01:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-15 01:01:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 01:01:23 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-15 01:01:23 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-05-15 01:01:23 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-05-15 01:01:23 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-05-15 01:01:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 01:01:23 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-05-15 01:01:23 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-05-15 01:03:32 --> Could not find the language line "Home"
ERROR - 2024-05-15 01:05:17 --> Could not find the language line "Home"
ERROR - 2024-05-15 01:05:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 01:05:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 01:11:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 01:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 01:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 01:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 01:18:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 01:18:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 01:18:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 01:20:30 --> Could not find the language line "Home"
ERROR - 2024-05-15 01:21:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 01:21:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 01:21:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 01:24:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 01:30:34 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 01:50:32 --> Could not find the language line "Home"
ERROR - 2024-05-15 02:06:57 --> Could not find the language line "Home"
ERROR - 2024-05-15 02:07:51 --> Could not find the language line "Home"
ERROR - 2024-05-15 02:10:19 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 02:15:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 02:15:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 02:17:23 --> Could not find the language line "Home"
ERROR - 2024-05-15 02:20:34 --> Could not find the language line "Home"
ERROR - 2024-05-15 02:23:09 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 02:24:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 02:25:06 --> Could not find the language line "Home"
ERROR - 2024-05-15 02:26:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 02:28:54 --> Could not find the language line "Home"
ERROR - 2024-05-15 02:40:00 --> Could not find the language line "Home"
ERROR - 2024-05-15 02:50:30 --> Could not find the language line "Home"
ERROR - 2024-05-15 02:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 02:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 02:54:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-15 02:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 02:56:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-15 02:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 02:57:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-15 02:57:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 03:01:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 03:03:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 03:05:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 03:06:32 --> Could not find the language line "Home"
ERROR - 2024-05-15 03:06:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 03:12:23 --> Could not find the language line "Home"
ERROR - 2024-05-15 03:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:15:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 03:16:43 --> Could not find the language line "Home"
ERROR - 2024-05-15 03:16:53 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 03:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:17:39 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 03:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:17:58 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 03:18:15 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 03:18:27 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 03:18:38 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 03:19:04 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 03:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:19:13 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 03:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:19:23 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 03:19:30 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 03:19:45 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 03:20:36 --> Could not find the language line "Home"
ERROR - 2024-05-15 03:22:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-15 03:22:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 03:22:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-15 03:23:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-15 03:23:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-15 03:23:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-15 03:23:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-15 03:29:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 03:30:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 03:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 03:30:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 03:32:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 03:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:33:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-15 03:33:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 03:33:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-15 03:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:37:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-15 03:37:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 03:37:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-15 03:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:38:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-15 03:38:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 03:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 03:47:34 --> Could not find the language line "Socks"
ERROR - 2024-05-15 03:48:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 03:48:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 03:48:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 03:50:33 --> Could not find the language line "Home"
ERROR - 2024-05-15 03:56:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 04:01:31 --> Could not find the language line "Other"
ERROR - 2024-05-15 04:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 04:05:09 --> Could not find the language line "Bracelets"
ERROR - 2024-05-15 04:16:06 --> Could not find the language line "Bracelets"
ERROR - 2024-05-15 04:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 04:20:32 --> Could not find the language line "Home"
ERROR - 2024-05-15 04:24:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 04:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 04:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 04:29:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 04:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 04:37:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 04:37:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 04:37:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 04:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 04:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 04:40:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 04:40:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 04:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 04:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 04:48:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-15 04:50:39 --> Could not find the language line "Home"
ERROR - 2024-05-15 04:56:49 --> Could not find the language line "Home"
ERROR - 2024-05-15 04:57:16 --> Could not find the language line "Home"
ERROR - 2024-05-15 05:02:00 --> Could not find the language line "Home"
ERROR - 2024-05-15 05:02:30 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 05:10:13 --> Could not find the language line "Home"
ERROR - 2024-05-15 05:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 05:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 05:20:32 --> Could not find the language line "Home"
ERROR - 2024-05-15 05:28:32 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 05:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 05:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 05:30:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 05:30:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 05:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 05:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 05:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 05:35:28 --> Could not find the language line "Home"
ERROR - 2024-05-15 05:39:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 05:39:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 05:39:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 05:43:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 05:50:33 --> Could not find the language line "Home"
ERROR - 2024-05-15 06:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:04:10 --> Could not find the language line "Home"
ERROR - 2024-05-15 06:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:06:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 06:06:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 06:06:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 06:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:20:32 --> Could not find the language line "Home"
ERROR - 2024-05-15 06:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:30:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 06:32:41 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 06:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:35:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 06:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:37:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 06:42:54 --> Could not find the language line "Socks"
ERROR - 2024-05-15 06:44:25 --> Could not find the language line "Home"
ERROR - 2024-05-15 06:48:16 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-15 06:50:32 --> Could not find the language line "Home"
ERROR - 2024-05-15 06:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:51:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 06:51:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 06:51:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 06:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 06:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:03:13 --> Could not find the language line "Home"
ERROR - 2024-05-15 07:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:20:32 --> Could not find the language line "Home"
ERROR - 2024-05-15 07:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:26:16 --> Could not find the language line "Home"
ERROR - 2024-05-15 07:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:28:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 07:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:30:14 --> Could not find the language line "Home"
ERROR - 2024-05-15 07:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:31:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 07:31:54 --> Could not find the language line "Home"
ERROR - 2024-05-15 07:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:43:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 07:45:44 --> Could not find the language line "Home"
ERROR - 2024-05-15 07:45:49 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-15 07:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:46:12 --> Could not find the language line "Home"
ERROR - 2024-05-15 07:46:31 --> Could not find the language line "Home"
ERROR - 2024-05-15 07:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:50:32 --> Could not find the language line "Home"
ERROR - 2024-05-15 07:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:51:59 --> Could not find the language line "Home"
ERROR - 2024-05-15 07:51:59 --> 404 Page Not Found: Storage/settings
ERROR - 2024-05-15 07:52:19 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 07:53:41 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 07:54:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 07:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 07:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:00:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 08:00:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 08:00:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 08:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:11:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 08:11:31 --> Could not find the language line "Home"
ERROR - 2024-05-15 08:11:31 --> Could not find the language line "Home"
ERROR - 2024-05-15 08:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:20:34 --> Could not find the language line "Home"
ERROR - 2024-05-15 08:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:24:56 --> Could not find the language line "Home"
ERROR - 2024-05-15 08:26:26 --> Could not find the language line "Home"
ERROR - 2024-05-15 08:26:26 --> Could not find the language line "Home"
ERROR - 2024-05-15 08:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:31:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 08:34:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 08:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:34:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 08:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:34:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 08:34:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 08:34:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 08:34:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 08:34:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 08:34:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 08:34:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 08:34:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 08:34:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 08:34:54 --> Could not find the language line "Home"
ERROR - 2024-05-15 08:41:12 --> Could not find the language line "Home"
ERROR - 2024-05-15 08:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:41:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 08:41:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 08:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:45:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 08:46:01 --> Could not find the language line "Home"
ERROR - 2024-05-15 08:47:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 08:47:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 08:47:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 08:48:02 --> Could not find the language line "Home"
ERROR - 2024-05-15 08:50:34 --> Could not find the language line "Home"
ERROR - 2024-05-15 08:51:34 --> Could not find the language line "Socks"
ERROR - 2024-05-15 08:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:54:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 08:54:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 08:54:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 08:55:43 --> Could not find the language line "Other"
ERROR - 2024-05-15 08:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:57:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 08:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 08:57:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 09:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:02:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 09:02:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 09:02:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 09:02:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 09:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:07:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 09:07:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 09:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:10:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 09:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:10:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 09:12:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 09:12:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 09:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:13:17 --> Could not find the language line "Home"
ERROR - 2024-05-15 09:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:20:35 --> Could not find the language line "Home"
ERROR - 2024-05-15 09:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:23:44 --> Could not find the language line "Home"
ERROR - 2024-05-15 09:24:16 --> Could not find the language line "Home"
ERROR - 2024-05-15 09:31:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 09:42:52 --> Could not find the language line "Home"
ERROR - 2024-05-15 09:43:15 --> Could not find the language line "Home"
ERROR - 2024-05-15 09:46:13 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-05-15 09:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:48:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 09:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:48:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 09:49:49 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-05-15 09:50:34 --> Could not find the language line "Home"
ERROR - 2024-05-15 09:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:53:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-15 09:53:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 09:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:53:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 09:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 09:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:00:49 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-15 10:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:03:49 --> Could not find the language line "Home"
ERROR - 2024-05-15 10:04:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 10:04:51 --> Could not find the language line "Home"
ERROR - 2024-05-15 10:09:51 --> Could not find the language line "Home"
ERROR - 2024-05-15 10:09:52 --> Could not find the language line "Home"
ERROR - 2024-05-15 10:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:10:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 10:10:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 10:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:11:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 10:12:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 10:12:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 10:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:14:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 10:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:14:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 10:15:23 --> Could not find the language line "Home"
ERROR - 2024-05-15 10:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:20:35 --> Could not find the language line "Home"
ERROR - 2024-05-15 10:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:27:32 --> Could not find the language line "Home"
ERROR - 2024-05-15 10:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:30:02 --> Could not find the language line "Home"
ERROR - 2024-05-15 10:30:02 --> Could not find the language line "Home"
ERROR - 2024-05-15 10:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:31:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 10:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:33:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 10:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:34:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 10:36:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 10:36:42 --> Could not find the language line "Home"
ERROR - 2024-05-15 10:36:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:37:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:38:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 10:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:39:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:39:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:40:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 10:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:41:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 10:43:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:43:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:43:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:46:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:47:26 --> Could not find the language line "Home"
ERROR - 2024-05-15 10:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:49:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:49:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:50:02 --> Could not find the language line "Home"
ERROR - 2024-05-15 10:50:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:50:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:50:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:50:34 --> Could not find the language line "Home"
ERROR - 2024-05-15 10:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:51:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:51:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:56:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:57:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:58:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:58:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:59:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 10:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 10:59:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 11:00:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 11:00:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 11:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:00:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 11:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:04:37 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 11:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:09:24 --> Could not find the language line "Home"
ERROR - 2024-05-15 11:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:09:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 11:09:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 11:13:10 --> Could not find the language line "Home"
ERROR - 2024-05-15 11:20:37 --> Could not find the language line "Home"
ERROR - 2024-05-15 11:33:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 11:33:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 11:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:38:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 11:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:39:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 11:39:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 11:41:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 11:41:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 11:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:50:35 --> Could not find the language line "Home"
ERROR - 2024-05-15 11:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 11:59:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 11:59:17 --> Could not find the language line "Socks"
ERROR - 2024-05-15 12:01:29 --> Could not find the language line "Home"
ERROR - 2024-05-15 12:01:29 --> Could not find the language line "Home"
ERROR - 2024-05-15 12:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:01:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 12:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:01:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 12:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:03:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 12:03:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 12:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:04:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 12:04:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 12:04:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 12:05:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 12:06:36 --> Could not find the language line "Home"
ERROR - 2024-05-15 12:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:12:21 --> Could not find the language line "Home"
ERROR - 2024-05-15 12:17:40 --> Could not find the language line "Home"
ERROR - 2024-05-15 12:18:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 12:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:20:37 --> Could not find the language line "Home"
ERROR - 2024-05-15 12:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:21:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 12:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:21:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 12:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:21:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:21:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:21:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:21:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:29:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:29:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:35:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 12:35:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 12:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:38:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:38:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:38:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 12:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:38:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 12:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:44:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:44:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:48:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:50:36 --> Could not find the language line "Home"
ERROR - 2024-05-15 12:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:53:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:54:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 12:56:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:56:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:57:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 12:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:02:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 13:02:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 13:02:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 13:02:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 13:03:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:03:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:07:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 13:07:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 13:07:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 13:11:01 --> Could not find the language line "Home"
ERROR - 2024-05-15 13:16:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:20:37 --> Could not find the language line "Home"
ERROR - 2024-05-15 13:20:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 13:20:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 13:20:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 13:22:45 --> Could not find the language line "Home"
ERROR - 2024-05-15 13:23:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:25:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:25:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:26:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 13:26:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 13:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:27:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 13:28:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:28:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 13:28:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 13:28:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 13:29:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:29:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 13:29:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 13:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:31:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 13:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:31:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 13:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:33:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:34:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 13:35:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 13:35:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 13:35:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 13:36:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 13:36:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 13:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:38:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:39:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 13:39:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 13:39:56 --> Could not find the language line "Other"
ERROR - 2024-05-15 13:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:40:34 --> Could not find the language line "Other"
ERROR - 2024-05-15 13:40:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 13:40:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 13:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:41:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-15 13:41:59 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-15 13:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:43:32 --> Could not find the language line "Bracelets"
ERROR - 2024-05-15 13:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:43:48 --> Could not find the language line "Bracelets"
ERROR - 2024-05-15 13:44:00 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 13:44:12 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 13:44:22 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 13:44:31 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 13:45:04 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 13:46:00 --> Could not find the language line "Home"
ERROR - 2024-05-15 13:46:12 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 13:47:58 --> Could not find the language line "Other"
ERROR - 2024-05-15 13:50:38 --> Could not find the language line "Home"
ERROR - 2024-05-15 13:50:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:50:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 13:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:50:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 13:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 13:51:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:51:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:53:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:53:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 13:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:03:09 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:03:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:03:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:06:48 --> Could not find the language line "products"
ERROR - 2024-05-15 14:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:08:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:08:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:09:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 14:09:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 14:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:09:19 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:10:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 14:10:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 14:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:13:01 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:13:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:13:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:13:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:13:48 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:13:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:14:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 14:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:14:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 14:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:14:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:14:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:16:08 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:16:54 --> Could not find the language line "Socks"
ERROR - 2024-05-15 14:19:12 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:20:38 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:25:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:25:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:26:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:27:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:36:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:36:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:37:08 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:37:08 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:37:08 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:37:11 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:37:11 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:37:11 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:37:11 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:39:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-15 14:40:57 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:43:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-15 14:45:10 --> 404 Page Not Found: Products/products
ERROR - 2024-05-15 14:50:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 14:50:38 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:56:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 14:56:50 --> Could not find the language line "Home"
ERROR - 2024-05-15 14:56:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 14:56:58 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-05-15 14:57:06 --> 404 Page Not Found: Axis2-admin/index
ERROR - 2024-05-15 14:57:07 --> 404 Page Not Found: Axis2/index
ERROR - 2024-05-15 14:57:07 --> 404 Page Not Found: Axis2/axis2-admin
ERROR - 2024-05-15 14:57:08 --> 404 Page Not Found: Phpmyadmin/index.php
ERROR - 2024-05-15 14:57:08 --> 404 Page Not Found: Php/thinkphp
ERROR - 2024-05-15 14:57:09 --> 404 Page Not Found: Index_ssophp/index
ERROR - 2024-05-15 14:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 14:58:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 15:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 15:01:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 15:01:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 15:01:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 15:01:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 15:02:08 --> Could not find the language line "Home"
ERROR - 2024-05-15 15:06:16 --> Could not find the language line "Home"
ERROR - 2024-05-15 15:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 15:10:18 --> Could not find the language line "Home"
ERROR - 2024-05-15 15:10:55 --> Could not find the language line "Home"
ERROR - 2024-05-15 15:11:36 --> Could not find the language line "Home"
ERROR - 2024-05-15 15:13:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 15:13:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 15:13:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 15:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 15:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 15:20:38 --> Could not find the language line "Home"
ERROR - 2024-05-15 15:25:07 --> Could not find the language line "Home"
ERROR - 2024-05-15 15:29:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 15:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 15:29:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 15:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 15:31:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 15:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 15:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 15:33:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 15:33:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 15:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 15:34:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 15:34:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 15:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 15:35:09 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-15 15:38:22 --> Could not find the language line "Home"
ERROR - 2024-05-15 15:39:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 15:39:11 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-05-15 15:39:26 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-05-15 15:39:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 15:39:39 --> 404 Page Not Found: Axis2-admin/index
ERROR - 2024-05-15 15:39:40 --> 404 Page Not Found: Axis2/index
ERROR - 2024-05-15 15:39:43 --> 404 Page Not Found: Axis2/axis2-admin
ERROR - 2024-05-15 15:40:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 15:40:33 --> Could not find the language line "Home"
ERROR - 2024-05-15 15:41:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 15:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 15:43:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 15:43:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 15:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 15:43:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-15 15:44:59 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-15 15:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 15:50:38 --> Could not find the language line "Home"
ERROR - 2024-05-15 16:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:05:28 --> Could not find the language line "Home"
ERROR - 2024-05-15 16:05:47 --> Could not find the language line "Home"
ERROR - 2024-05-15 16:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:09:49 --> Could not find the language line "Home"
ERROR - 2024-05-15 16:09:57 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 16:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:16:55 --> Could not find the language line "Home"
ERROR - 2024-05-15 16:16:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 16:16:58 --> Could not find the language line "Home"
ERROR - 2024-05-15 16:16:58 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-05-15 16:17:08 --> 404 Page Not Found: Securitytxt/index
ERROR - 2024-05-15 16:17:09 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-05-15 16:17:09 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-05-15 16:17:10 --> Could not find the language line "Home"
ERROR - 2024-05-15 16:17:11 --> 404 Page Not Found: Humanstxt/index
ERROR - 2024-05-15 16:17:34 --> Could not find the language line "Home"
ERROR - 2024-05-15 16:18:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 16:20:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 16:20:38 --> Could not find the language line "Home"
ERROR - 2024-05-15 16:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:21:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 16:21:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 16:23:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 16:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:25:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 16:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:25:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 16:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:27:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 16:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:27:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 16:28:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 16:28:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 16:28:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 16:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:29:23 --> Could not find the language line "Home"
ERROR - 2024-05-15 16:29:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 16:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:29:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 16:32:06 --> Could not find the language line "Home"
ERROR - 2024-05-15 16:33:18 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-15 16:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:42:15 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 16:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:43:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 16:43:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 16:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 16:44:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 16:44:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 16:44:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 16:45:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 16:45:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 16:45:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 16:46:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 16:50:40 --> Could not find the language line "Home"
ERROR - 2024-05-15 16:55:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 16:55:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 16:55:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 16:59:40 --> Could not find the language line "Clothing"
ERROR - 2024-05-15 17:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 17:00:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 17:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 17:00:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 17:00:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 17:01:26 --> Could not find the language line "Home"
ERROR - 2024-05-15 17:02:01 --> Could not find the language line "Home"
ERROR - 2024-05-15 17:05:58 --> Could not find the language line "products"
ERROR - 2024-05-15 17:07:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 17:08:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 17:08:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 17:08:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 17:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 17:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 17:19:17 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-15 17:19:33 --> Could not find the language line "Other"
ERROR - 2024-05-15 17:20:41 --> Could not find the language line "Home"
ERROR - 2024-05-15 17:20:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 17:22:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 17:24:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 17:26:11 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-15 17:27:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 17:29:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 17:29:46 --> Could not find the language line "products"
ERROR - 2024-05-15 17:31:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 17:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 17:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 17:31:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 17:31:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 17:34:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 17:34:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 17:34:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 17:34:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 17:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 17:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 17:36:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 17:36:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 17:37:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 17:37:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 17:37:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 17:37:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 17:37:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 17:38:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 17:39:34 --> Could not find the language line "Home"
ERROR - 2024-05-15 17:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 17:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 17:43:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 17:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 17:47:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 17:49:07 --> Could not find the language line "Home"
ERROR - 2024-05-15 17:50:40 --> Could not find the language line "Home"
ERROR - 2024-05-15 17:56:25 --> Could not find the language line "Home"
ERROR - 2024-05-15 17:56:25 --> Could not find the language line "Home"
ERROR - 2024-05-15 17:57:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 17:59:51 --> Could not find the language line "Home"
ERROR - 2024-05-15 18:04:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 18:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:06:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 18:06:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 18:06:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 18:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:11:25 --> Could not find the language line "Home"
ERROR - 2024-05-15 18:12:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 18:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:17:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-15 18:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:19:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 18:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:19:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 18:20:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 18:20:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 18:20:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 18:20:41 --> Could not find the language line "Home"
ERROR - 2024-05-15 18:21:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 18:21:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 18:21:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 18:21:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 18:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:22:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 18:22:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 18:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:29:10 --> Could not find the language line "Home"
ERROR - 2024-05-15 18:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:35:54 --> Could not find the language line "Home"
ERROR - 2024-05-15 18:35:59 --> Could not find the language line "Home"
ERROR - 2024-05-15 18:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:40:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 18:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 18:42:36 --> Could not find the language line "Home"
ERROR - 2024-05-15 18:43:10 --> Could not find the language line "Home"
ERROR - 2024-05-15 18:50:40 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:00:29 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:01:35 --> Could not find the language line "products"
ERROR - 2024-05-15 19:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:06:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 19:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:06:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 19:07:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 19:07:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 19:07:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 19:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:08:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 19:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:09:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 19:09:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 19:09:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 19:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:13:23 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:18:03 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:20:42 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:24:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-15 19:24:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-15 19:24:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 19:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:30:41 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:31:18 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:32:02 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-05-15 19:32:02 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-05-15 19:32:02 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-05-15 19:32:07 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-15 19:32:07 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-05-15 19:32:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 19:32:21 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-15 19:32:21 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-05-15 19:32:21 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-05-15 19:32:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 19:32:21 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-05-15 19:32:21 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-05-15 19:32:22 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-05-15 19:34:32 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:34:46 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:35:31 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:35:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 19:35:55 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:36:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 19:36:16 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:36:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 19:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:37:44 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:38:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:38:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:38:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:38:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:38:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:38:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:38:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:38:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:38:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:38:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:39:08 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:39:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:39:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:39:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:39:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:39:21 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:39:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 19:39:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:39:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:39:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:39:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-15 19:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:39:29 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:39:30 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:39:35 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:39:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 19:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:39:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 19:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:40:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 19:40:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 19:40:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 19:41:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 19:41:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 19:41:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 19:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:44:50 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:44:54 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:46:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 19:46:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 19:46:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 19:50:41 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:52:39 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:52:40 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:56:10 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:56:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 19:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 19:58:44 --> Could not find the language line "Home"
ERROR - 2024-05-15 19:58:44 --> Could not find the language line "Home"
ERROR - 2024-05-15 20:03:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 20:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 20:04:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 20:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 20:06:06 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-15 20:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 20:20:41 --> Could not find the language line "Home"
ERROR - 2024-05-15 20:26:14 --> Could not find the language line "Home"
ERROR - 2024-05-15 20:34:04 --> Could not find the language line "Home"
ERROR - 2024-05-15 20:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 20:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 20:37:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 20:37:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 20:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 20:39:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 20:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 20:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 20:39:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 20:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 20:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 20:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 20:42:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 20:48:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 20:48:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 20:48:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 20:50:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 20:50:04 --> Could not find the language line "Home"
ERROR - 2024-05-15 20:50:42 --> Could not find the language line "Home"
ERROR - 2024-05-15 20:53:00 --> Could not find the language line "Home"
ERROR - 2024-05-15 20:53:57 --> Could not find the language line "Home"
ERROR - 2024-05-15 21:03:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 21:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 21:06:47 --> Could not find the language line "Home"
ERROR - 2024-05-15 21:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 21:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 21:08:44 --> Could not find the language line "Home"
ERROR - 2024-05-15 21:09:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 21:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 21:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 21:10:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 21:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 21:10:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 21:10:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 21:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 21:10:43 --> Could not find the language line "Home"
ERROR - 2024-05-15 21:12:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 21:20:10 --> Could not find the language line "Home"
ERROR - 2024-05-15 21:20:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 21:20:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 21:20:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 21:20:43 --> Could not find the language line "Home"
ERROR - 2024-05-15 21:20:59 --> Could not find the language line "Socks"
ERROR - 2024-05-15 21:22:40 --> Could not find the language line "Home"
ERROR - 2024-05-15 21:26:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 21:26:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 21:26:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 21:26:32 --> Could not find the language line "Home"
ERROR - 2024-05-15 21:36:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 21:36:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 21:36:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 21:39:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 21:39:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 21:39:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 21:43:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 21:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 21:46:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-15 21:46:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 21:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 21:46:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 21:46:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 21:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 21:48:09 --> Could not find the language line "Home"
ERROR - 2024-05-15 21:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 21:50:44 --> Could not find the language line "Home"
ERROR - 2024-05-15 22:01:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 22:01:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 22:01:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 22:02:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 22:02:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 22:02:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 22:02:33 --> Could not find the language line "Home"
ERROR - 2024-05-15 22:04:08 --> Could not find the language line "Perfume"
ERROR - 2024-05-15 22:04:28 --> Could not find the language line "Other"
ERROR - 2024-05-15 22:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 22:11:25 --> Could not find the language line "Home"
ERROR - 2024-05-15 22:12:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 22:12:50 --> Could not find the language line "Home"
ERROR - 2024-05-15 22:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 22:20:46 --> Could not find the language line "Home"
ERROR - 2024-05-15 22:21:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 22:21:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 22:21:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 22:28:25 --> Could not find the language line "Home"
ERROR - 2024-05-15 22:34:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 22:34:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 22:34:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 22:35:24 --> Could not find the language line "products"
ERROR - 2024-05-15 22:38:25 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-15 22:40:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 22:43:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 22:45:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 22:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 22:45:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 22:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 22:45:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 22:45:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 22:45:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 22:45:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 22:45:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 22:45:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 22:45:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 22:45:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 22:45:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 22:45:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 22:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 22:49:48 --> Could not find the language line "Home"
ERROR - 2024-05-15 22:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 22:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 22:50:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 22:50:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 22:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 22:50:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-15 22:50:44 --> Could not find the language line "Home"
ERROR - 2024-05-15 22:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 22:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 22:53:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 22:53:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 23:02:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-15 23:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 23:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 23:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 23:15:15 --> Could not find the language line "Other"
ERROR - 2024-05-15 23:15:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 23:15:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 23:15:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 23:20:49 --> Could not find the language line "Home"
ERROR - 2024-05-15 23:21:03 --> Could not find the language line "Other"
ERROR - 2024-05-15 23:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 23:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 23:34:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 23:34:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 23:35:16 --> Could not find the language line "Other"
ERROR - 2024-05-15 23:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 23:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 23:39:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 23:39:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 23:42:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 23:42:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 23:42:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 23:42:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 23:42:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 23:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 23:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 23:44:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 23:44:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 23:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 23:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 23:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 23:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-15 23:47:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 23:47:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-15 23:50:45 --> Could not find the language line "Home"
ERROR - 2024-05-15 23:58:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-15 23:58:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-15 23:58:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-15 23:59:28 --> 404 Page Not Found: Robotstxt/index
