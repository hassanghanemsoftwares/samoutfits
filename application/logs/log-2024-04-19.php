<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-19 00:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:13:14 --> Could not find the language line "Home"
ERROR - 2024-04-19 00:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:22:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 00:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:29:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 00:29:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 00:29:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 00:32:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-19 00:32:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-19 00:32:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 00:34:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 00:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:36:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 00:36:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 00:40:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-19 00:40:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-19 00:40:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 00:41:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-19 00:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:43:18 --> Could not find the language line "Home"
ERROR - 2024-04-19 00:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:44:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 00:48:40 --> Could not find the language line "Home"
ERROR - 2024-04-19 00:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:48:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 00:48:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 00:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:49:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 00:49:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 00:49:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 00:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:50:35 --> Could not find the language line "Home"
ERROR - 2024-04-19 00:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:52:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 00:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:53:12 --> Could not find the language line "Home"
ERROR - 2024-04-19 00:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:55:51 --> Could not find the language line "products"
ERROR - 2024-04-19 00:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 00:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:01:38 --> Could not find the language line "Home"
ERROR - 2024-04-19 01:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:04:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 01:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:09:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-19 01:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:13:09 --> Could not find the language line "Home"
ERROR - 2024-04-19 01:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:19:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 01:19:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 01:19:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 01:20:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 01:24:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 01:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:24:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 01:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:24:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 01:24:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 01:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:34:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 01:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:40:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 01:43:08 --> Could not find the language line "Home"
ERROR - 2024-04-19 01:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:44:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 01:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:48:26 --> Could not find the language line "products"
ERROR - 2024-04-19 01:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:48:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 01:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:48:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 01:48:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 01:52:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 01:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:56:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 01:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 01:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:00:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:04:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-19 02:04:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-19 02:04:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 02:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:08:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:08:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:08:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 02:08:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 02:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:12:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:13:16 --> Could not find the language line "Home"
ERROR - 2024-04-19 02:16:35 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 02:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:16:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:18:16 --> Could not find the language line "Home"
ERROR - 2024-04-19 02:20:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:25:01 --> Could not find the language line "Home"
ERROR - 2024-04-19 02:26:55 --> Could not find the language line "Home"
ERROR - 2024-04-19 02:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:29:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 02:31:51 --> Could not find the language line "Socks"
ERROR - 2024-04-19 02:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:33:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:34:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 02:36:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 02:36:30 --> Could not find the language line "Home"
ERROR - 2024-04-19 02:36:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:40:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:40:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:41:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:41:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:43:08 --> Could not find the language line "Home"
ERROR - 2024-04-19 02:44:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 02:44:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 02:44:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 02:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:44:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:48:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 02:48:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 02:48:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 02:49:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:50:00 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 02:52:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 02:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 02:52:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:57:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 02:58:49 --> Could not find the language line "Other"
ERROR - 2024-04-19 03:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:00:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:00:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:00:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:05:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:05:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:05:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:05:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:05:59 --> Could not find the language line "Home"
ERROR - 2024-04-19 03:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:09:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:09:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:09:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:09:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:13:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:13:24 --> Could not find the language line "Home"
ERROR - 2024-04-19 03:14:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 03:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:25:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:29:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:29:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:31:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 03:31:45 --> Could not find the language line "Home"
ERROR - 2024-04-19 03:33:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:33:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 03:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:37:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:39:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 03:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:41:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 03:43:10 --> Could not find the language line "Home"
ERROR - 2024-04-19 03:45:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:45:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:46:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-19 03:49:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:49:23 --> 404 Page Not Found: Products/products
ERROR - 2024-04-19 03:53:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 03:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 03:57:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:01:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:05:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:11:28 --> Could not find the language line "Home"
ERROR - 2024-04-19 04:13:14 --> Could not find the language line "Home"
ERROR - 2024-04-19 04:14:19 --> Could not find the language line "Home"
ERROR - 2024-04-19 04:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:17:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:17:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:21:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:25:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:28:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 04:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:29:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:33:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:35:11 --> Could not find the language line "products"
ERROR - 2024-04-19 04:36:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 04:36:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 04:36:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 04:37:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:37:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:43:10 --> Could not find the language line "Home"
ERROR - 2024-04-19 04:45:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:45:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 04:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:49:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:49:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:49:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 04:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:53:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 04:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 04:57:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:01:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:04:03 --> Could not find the language line "Home"
ERROR - 2024-04-19 05:05:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:09:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:10:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 05:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:13:09 --> Could not find the language line "Home"
ERROR - 2024-04-19 05:13:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:17:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:21:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 05:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:26:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 05:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:29:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:29:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 05:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:34:07 --> Could not find the language line "Home"
ERROR - 2024-04-19 05:34:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 05:34:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 05:34:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 05:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:37:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:37:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:37:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 05:37:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 05:37:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:37:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:43:11 --> Could not find the language line "Home"
ERROR - 2024-04-19 05:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:45:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:45:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:49:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:51:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 05:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:53:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:53:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 05:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:57:17 --> Could not find the language line "0"
ERROR - 2024-04-19 05:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 05:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:05:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:13:10 --> Could not find the language line "Home"
ERROR - 2024-04-19 06:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:17:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:17:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:25:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:27:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 06:27:47 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-19 06:27:48 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-19 06:27:51 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-19 06:27:53 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-19 06:27:57 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-19 06:28:00 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-19 06:28:03 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-19 06:28:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 06:28:09 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-04-19 06:28:14 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-04-19 06:28:16 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-04-19 06:28:18 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-04-19 06:28:20 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-04-19 06:28:23 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-04-19 06:28:42 --> Could not find the language line "Home"
ERROR - 2024-04-19 06:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:33:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:33:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:36:04 --> Could not find the language line "Home"
ERROR - 2024-04-19 06:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:37:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:37:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:41:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:43:12 --> Could not find the language line "Home"
ERROR - 2024-04-19 06:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:45:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:45:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:46:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 06:49:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:51:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 06:51:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 06:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:52:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 06:52:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 06:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:52:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 06:52:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 06:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:53:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:53:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:55:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 06:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:57:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 06:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 06:57:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 07:01:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 07:03:56 --> Could not find the language line "Home"
ERROR - 2024-04-19 07:04:00 --> Could not find the language line "Home"
ERROR - 2024-04-19 07:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:09:01 --> Could not find the language line "Home"
ERROR - 2024-04-19 07:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:09:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 07:09:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 07:09:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 07:09:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 07:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:09:36 --> Could not find the language line "users"
ERROR - 2024-04-19 07:10:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:10:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 07:11:27 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:12:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 07:12:17 --> Could not find the language line "Home"
ERROR - 2024-04-19 07:12:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:12:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:13:11 --> Could not find the language line "Home"
ERROR - 2024-04-19 07:13:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 07:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:13:27 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 07:13:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 07:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:14:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:15:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:15:23 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:16:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:17:11 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:17:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 07:18:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:18:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:18:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:18:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:18:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:18:59 --> Could not find the language line "Home"
ERROR - 2024-04-19 07:18:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:19:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:19:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:19:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:20:05 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:20:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:20:27 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:20:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:20:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:21:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:21:23 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:21:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 07:21:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:26:23 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:26:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:26:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:26:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:26:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 07:26:37 --> Could not find the language line "Home"
ERROR - 2024-04-19 07:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:33:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 07:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:33:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 07:37:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 07:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:41:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 07:43:11 --> Could not find the language line "Home"
ERROR - 2024-04-19 07:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:50:06 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-19 07:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:53:51 --> Could not find the language line "Socks"
ERROR - 2024-04-19 07:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 07:59:53 --> Could not find the language line "Home"
ERROR - 2024-04-19 08:01:06 --> Could not find the language line "Home"
ERROR - 2024-04-19 08:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:01:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:02:13 --> Could not find the language line "Home"
ERROR - 2024-04-19 08:02:18 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 08:02:34 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 08:04:26 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 08:04:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 08:05:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:05:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:09:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 08:09:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 08:09:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:09:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 08:09:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 08:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:13:11 --> Could not find the language line "Home"
ERROR - 2024-04-19 08:13:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:13:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:16:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-19 08:16:47 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-04-19 08:17:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 08:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:17:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:17:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:17:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:17:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 08:17:43 --> Could not find the language line "Home"
ERROR - 2024-04-19 08:21:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:21:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:25:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:29:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:30:54 --> Could not find the language line "Home"
ERROR - 2024-04-19 08:31:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 08:32:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 08:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:32:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 08:32:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 08:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:32:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 08:33:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:34:00 --> Could not find the language line "Home"
ERROR - 2024-04-19 08:34:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 08:34:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 08:35:05 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 08:35:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 08:35:13 --> Could not find the language line "Home"
ERROR - 2024-04-19 08:35:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 08:36:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 08:36:05 --> Could not find the language line "Home"
ERROR - 2024-04-19 08:36:20 --> Could not find the language line "Socks"
ERROR - 2024-04-19 08:37:04 --> Could not find the language line "Socks"
ERROR - 2024-04-19 08:37:09 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-04-19 08:37:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:39:37 --> Could not find the language line "Home"
ERROR - 2024-04-19 08:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:43:12 --> Could not find the language line "Home"
ERROR - 2024-04-19 08:45:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 08:45:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 08:45:30 --> Could not find the language line "Home"
ERROR - 2024-04-19 08:45:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:45:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:45:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:45:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:49:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:50:48 --> Could not find the language line "Home"
ERROR - 2024-04-19 08:52:43 --> Could not find the language line "Home"
ERROR - 2024-04-19 08:53:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:53:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 08:53:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:53:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 08:55:12 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 08:55:30 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 08:55:46 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 08:57:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:01:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:01:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:05:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:05:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:05:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 09:05:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:06:19 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:09:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:10:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 09:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:11:32 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-04-19 09:11:40 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:13:12 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:13:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:15:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 09:16:45 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:17:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:17:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:20:26 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:21:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:21:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:22:59 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:24:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 09:24:37 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:25:03 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:25:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 09:25:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:25:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:25:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:25:50 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:25:50 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:26:00 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:29:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 09:29:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:29:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:30:33 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 09:30:36 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 09:33:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:35:33 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:35:34 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:36:40 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-04-19 09:37:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:37:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:39:04 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:39:11 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 09:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:39:37 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 09:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:41:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 09:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:41:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:41:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:41:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:41:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 09:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:43:12 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:45:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:46:55 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:49:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:49:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:49:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 09:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:52:07 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:52:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-19 09:52:27 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:52:32 --> 404 Page Not Found: Products/products
ERROR - 2024-04-19 09:52:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 09:52:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 09:52:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 09:52:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 09:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:53:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 09:53:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 09:53:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 09:53:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 09:53:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 09:53:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 09:53:11 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:53:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 09:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:53:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 09:53:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:53:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:53:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 09:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:53:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:53:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 09:54:11 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 09:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:55:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-19 09:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:56:12 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:56:12 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:56:15 --> Could not find the language line "Home"
ERROR - 2024-04-19 09:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:57:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 09:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 09:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:00:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 10:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:01:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 10:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:02:03 --> Could not find the language line "Home"
ERROR - 2024-04-19 10:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:05:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 10:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:05:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 10:06:06 --> Could not find the language line "Home"
ERROR - 2024-04-19 10:06:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 10:06:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 10:06:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 10:06:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 10:08:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 10:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:09:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 10:09:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 10:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:13:13 --> Could not find the language line "Home"
ERROR - 2024-04-19 10:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:17:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 10:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:21:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 10:21:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 10:21:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 10:22:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-19 10:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:25:00 --> Could not find the language line "Home"
ERROR - 2024-04-19 10:25:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 10:26:53 --> Could not find the language line "Home"
ERROR - 2024-04-19 10:27:15 --> Could not find the language line "Home"
ERROR - 2024-04-19 10:27:55 --> Could not find the language line "Home"
ERROR - 2024-04-19 10:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:30:56 --> Could not find the language line "Home"
ERROR - 2024-04-19 10:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:37:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-19 10:37:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-19 10:37:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 10:41:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 10:41:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 10:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:43:15 --> Could not find the language line "Home"
ERROR - 2024-04-19 10:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:45:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 10:49:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 10:53:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 10:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 10:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:01:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:01:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:05:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:08:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 11:08:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 11:09:27 --> Could not find the language line "products"
ERROR - 2024-04-19 11:09:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:11:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 11:11:04 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-19 11:13:14 --> Could not find the language line "Home"
ERROR - 2024-04-19 11:13:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:13:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:15:00 --> Could not find the language line "Home"
ERROR - 2024-04-19 11:17:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:17:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:20:09 --> Could not find the language line "Home"
ERROR - 2024-04-19 11:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:21:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:25:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-19 11:25:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:25:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:26:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 11:26:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 11:26:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 11:26:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-19 11:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:29:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:30:18 --> Could not find the language line "Home"
ERROR - 2024-04-19 11:30:24 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 11:30:29 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 11:30:35 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 11:30:40 --> Could not find the language line "Home"
ERROR - 2024-04-19 11:30:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 11:30:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 11:30:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 11:30:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 11:31:11 --> Could not find the language line "Other"
ERROR - 2024-04-19 11:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:33:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:37:08 --> Could not find the language line "Home"
ERROR - 2024-04-19 11:37:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 11:37:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:37:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 11:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:38:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 11:38:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 11:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:38:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 11:38:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 11:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:41:51 --> Could not find the language line "Home"
ERROR - 2024-04-19 11:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:43:08 --> Could not find the language line "Home"
ERROR - 2024-04-19 11:43:16 --> Could not find the language line "Home"
ERROR - 2024-04-19 11:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:46:51 --> Could not find the language line "Home"
ERROR - 2024-04-19 11:48:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-19 11:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:49:12 --> Could not find the language line "Home"
ERROR - 2024-04-19 11:49:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 11:49:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 11:49:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 11:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 11:58:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:01:58 --> Could not find the language line "Home"
ERROR - 2024-04-19 12:01:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:01:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:01:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 12:01:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:01:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 12:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:04:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 12:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:05:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:10:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:10:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:12:44 --> Could not find the language line "products"
ERROR - 2024-04-19 12:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:13:16 --> Could not find the language line "Home"
ERROR - 2024-04-19 12:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:14:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:14:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:14:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:15:36 --> Could not find the language line "Home"
ERROR - 2024-04-19 12:15:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 12:15:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 12:15:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 12:16:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-19 12:16:27 --> Could not find the language line "Home"
ERROR - 2024-04-19 12:16:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 12:16:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 12:16:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 12:16:52 --> Could not find the language line "Home"
ERROR - 2024-04-19 12:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:18:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:18:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:19:46 --> Could not find the language line "products"
ERROR - 2024-04-19 12:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:22:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:22:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:26:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:30:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:31:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 12:32:31 --> Could not find the language line "products"
ERROR - 2024-04-19 12:33:58 --> Could not find the language line "Perfume"
ERROR - 2024-04-19 12:34:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:34:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:39:09 --> Could not find the language line "Home"
ERROR - 2024-04-19 12:42:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:43:16 --> Could not find the language line "Home"
ERROR - 2024-04-19 12:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:46:02 --> Could not find the language line "Home"
ERROR - 2024-04-19 12:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:46:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:46:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 12:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:48:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-19 12:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:49:07 --> Could not find the language line "Other"
ERROR - 2024-04-19 12:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:50:37 --> Could not find the language line "Crocs"
ERROR - 2024-04-19 12:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 12:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:01:46 --> Could not find the language line "products"
ERROR - 2024-04-19 13:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:02:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 13:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:06:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 13:10:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 13:10:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 13:11:07 --> Could not find the language line "Home"
ERROR - 2024-04-19 13:12:06 --> Could not find the language line "products"
ERROR - 2024-04-19 13:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:13:15 --> Could not find the language line "Home"
ERROR - 2024-04-19 13:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:15:54 --> Could not find the language line "Home"
ERROR - 2024-04-19 13:18:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 13:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:18:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 13:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:20:18 --> Could not find the language line "Home"
ERROR - 2024-04-19 13:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:22:13 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-04-19 13:22:13 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-04-19 13:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:26:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 13:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:26:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 13:27:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 13:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:29:03 --> Could not find the language line "Home"
ERROR - 2024-04-19 13:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:34:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 13:37:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-19 13:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:38:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 13:41:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 13:41:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 13:41:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 13:42:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 13:43:15 --> Could not find the language line "Home"
ERROR - 2024-04-19 13:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:46:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 13:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:46:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 13:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:46:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 13:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:51:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 13:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:53:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2024-04-19 13:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:54:27 --> Could not find the language line "Home"
ERROR - 2024-04-19 13:55:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 13:56:37 --> Could not find the language line "products"
ERROR - 2024-04-19 13:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:58:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 13:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 13:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:01:58 --> Could not find the language line "Home"
ERROR - 2024-04-19 14:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:02:22 --> Could not find the language line "Home"
ERROR - 2024-04-19 14:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:07:08 --> Could not find the language line "Home"
ERROR - 2024-04-19 14:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:10:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 14:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:13:16 --> Could not find the language line "Home"
ERROR - 2024-04-19 14:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:13:56 --> Could not find the language line "Home"
ERROR - 2024-04-19 14:14:14 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-19 14:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:14:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 14:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:21:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 14:21:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 14:21:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 14:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:26:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 14:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:32:08 --> Could not find the language line "Other"
ERROR - 2024-04-19 14:32:57 --> Could not find the language line "Other"
ERROR - 2024-04-19 14:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:33:01 --> Could not find the language line "Perfume"
ERROR - 2024-04-19 14:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:34:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 14:34:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 14:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:38:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 14:42:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 14:43:16 --> Could not find the language line "Home"
ERROR - 2024-04-19 14:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:46:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 14:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:54:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 14:54:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 14:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:56:55 --> Could not find the language line "products"
ERROR - 2024-04-19 14:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 14:58:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 14:59:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 14:59:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 14:59:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 15:00:00 --> Could not find the language line "Home"
ERROR - 2024-04-19 15:00:21 --> Could not find the language line "Home"
ERROR - 2024-04-19 15:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:05:31 --> Could not find the language line "products"
ERROR - 2024-04-19 15:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:06:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 15:06:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 15:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:11:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 15:11:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 15:11:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 15:11:12 --> Could not find the language line "Home"
ERROR - 2024-04-19 15:13:17 --> Could not find the language line "Home"
ERROR - 2024-04-19 15:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:15:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 15:15:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'users'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 15:15:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 15:16:18 --> Could not find the language line "Home"
ERROR - 2024-04-19 15:18:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 15:18:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 15:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:26:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 15:26:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 15:26:52 --> Could not find the language line "Home"
ERROR - 2024-04-19 15:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:27:50 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 15:28:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 15:28:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 15:28:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 15:28:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 15:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:30:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 15:30:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 15:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:31:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 15:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 15:31:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 15:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:36:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 15:36:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'users'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 15:36:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 15:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:38:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 15:38:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 15:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:39:48 --> Could not find the language line "Home"
ERROR - 2024-04-19 15:42:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 15:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:43:17 --> Could not find the language line "Home"
ERROR - 2024-04-19 15:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:50:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 15:52:20 --> Could not find the language line "Home"
ERROR - 2024-04-19 15:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:54:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 15:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:56:51 --> Could not find the language line "products"
ERROR - 2024-04-19 15:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:58:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 15:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 15:59:18 --> Could not find the language line "Home"
ERROR - 2024-04-19 15:59:41 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:01:12 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:01:18 --> Could not find the language line "Socks"
ERROR - 2024-04-19 16:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:06:17 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:06:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 16:08:30 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:09:17 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:09:24 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:10:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 16:10:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 16:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:13:19 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:14:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 16:14:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 16:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:15:24 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:16:20 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:16:31 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 16:16:48 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:17:15 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:18:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 16:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:26:11 --> Could not find the language line "products"
ERROR - 2024-04-19 16:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:28:18 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:28:27 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 16:28:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 16:28:58 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 16:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:30:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 16:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:34:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 16:34:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 16:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:36:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2024-04-19 16:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:38:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 16:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:40:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2024-04-19 16:43:18 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:43:34 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:45:20 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:45:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 16:45:39 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:46:30 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:46:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 16:48:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 16:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:54:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 16:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 16:57:30 --> Could not find the language line "Home"
ERROR - 2024-04-19 16:57:50 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-19 16:58:14 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:01:27 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-19 17:02:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 17:06:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 17:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:07:43 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:07:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 17:09:14 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:10:34 --> Could not find the language line "Perfume"
ERROR - 2024-04-19 17:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:13:18 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:14:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:15:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 17:15:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 17:15:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 17:17:02 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:22:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 17:22:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 17:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:26:16 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:26:57 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-19 17:27:11 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:38:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 17:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:42:15 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:43:18 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:46:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 17:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:48:13 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:48:45 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:48:49 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:48:55 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:48:56 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:56:27 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:57:07 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:57:14 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:58:12 --> Could not find the language line "Home"
ERROR - 2024-04-19 17:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 17:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:01:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 18:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:08:24 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:08:47 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-19 18:09:22 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-19 18:09:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-19 18:09:49 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:10:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 18:10:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 18:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:12:26 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 18:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:13:23 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:13:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-19 18:14:32 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:14:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 18:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:14:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 18:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:15:51 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:15:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 18:15:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 18:16:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 18:16:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 18:16:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 18:16:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 18:16:46 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:16:54 --> Could not find the language line "Perfume"
ERROR - 2024-04-19 18:17:04 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:17:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-19 18:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:18:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-19 18:18:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 18:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:18:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-19 18:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:19:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-19 18:19:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-19 18:19:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-19 18:19:23 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:19:36 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:20:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 18:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:21:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 18:21:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 18:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:21:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 18:21:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 18:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:22:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 18:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:22:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 18:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:22:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 18:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:22:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 18:22:43 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:22:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 18:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:23:05 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 18:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:23:27 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 18:23:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 18:23:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 18:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:26:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 18:26:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 18:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:30:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 18:32:39 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:34:52 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:35:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-19 18:35:21 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:35:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-19 18:35:42 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:36:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 18:36:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 18:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:38:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 18:39:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 18:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:41:02 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:42:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 18:42:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 18:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:43:18 --> Could not find the language line "Home"
ERROR - 2024-04-19 18:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:46:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 18:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:54:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-19 18:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-19 18:54:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 18:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:58:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 18:58:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 18:58:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 18:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 18:58:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 19:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:13:20 --> Could not find the language line "Home"
ERROR - 2024-04-19 19:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:19:50 --> 404 Page Not Found: Products/products
ERROR - 2024-04-19 19:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:26:31 --> Could not find the language line "Home"
ERROR - 2024-04-19 19:26:55 --> Could not find the language line "Home"
ERROR - 2024-04-19 19:28:03 --> Could not find the language line "Home"
ERROR - 2024-04-19 19:28:17 --> Could not find the language line "Home"
ERROR - 2024-04-19 19:29:18 --> Could not find the language line "Home"
ERROR - 2024-04-19 19:30:37 --> Could not find the language line "Home"
ERROR - 2024-04-19 19:30:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 19:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:30:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 19:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:34:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 19:34:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 19:34:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 19:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:35:27 --> Could not find the language line "Home"
ERROR - 2024-04-19 19:35:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-19 19:36:37 --> Could not find the language line "Home"
ERROR - 2024-04-19 19:38:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 19:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:42:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 19:43:21 --> Could not find the language line "Home"
ERROR - 2024-04-19 19:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:50:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 19:50:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 19:54:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 19:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:58:54 --> Could not find the language line "Other"
ERROR - 2024-04-19 19:58:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 19:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 19:59:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 19:59:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 20:01:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 20:01:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 20:01:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 20:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 20:03:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 20:05:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 20:06:16 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-04-19 20:06:17 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:06:19 --> 404 Page Not Found: Wp-cronphp/index
ERROR - 2024-04-19 20:06:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 20:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 20:06:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 20:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 20:10:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 20:13:21 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:14:07 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:14:13 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:14:15 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:14:23 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:14:30 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:14:42 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:14:53 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:14:57 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:14:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 20:15:02 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:15:04 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:15:06 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 20:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 20:18:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 20:20:11 --> Could not find the language line "Disclaimer"
ERROR - 2024-04-19 20:20:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 20:20:19 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 20:20:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 20:20:27 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:20:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 20:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 20:26:58 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 20:26:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 20:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 20:32:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 20:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 20:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 20:35:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 20:35:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 20:35:17 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 20:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 20:39:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 20:43:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 20:43:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 20:43:21 --> Could not find the language line "Home"
ERROR - 2024-04-19 20:47:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 20:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 20:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 20:55:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 20:59:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 21:03:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 21:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:07:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 21:07:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 21:11:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 21:13:23 --> Could not find the language line "Home"
ERROR - 2024-04-19 21:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:15:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 21:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:19:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 21:23:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 21:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:23:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 21:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:23:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 21:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:27:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 21:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:31:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 21:31:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 21:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:36:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 21:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:39:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 21:39:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 21:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:40:26 --> Could not find the language line "Home"
ERROR - 2024-04-19 21:43:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 21:43:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 21:43:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 21:43:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 21:43:23 --> Could not find the language line "Home"
ERROR - 2024-04-19 21:44:07 --> Could not find the language line "Home"
ERROR - 2024-04-19 21:44:16 --> Could not find the language line "Home"
ERROR - 2024-04-19 21:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:47:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 21:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:51:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 21:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 21:59:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 22:01:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 22:02:04 --> Could not find the language line "Home"
ERROR - 2024-04-19 22:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:04:06 --> Could not find the language line "Home"
ERROR - 2024-04-19 22:05:03 --> Could not find the language line "Home"
ERROR - 2024-04-19 22:05:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 22:05:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 22:06:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 22:06:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 22:06:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 22:06:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 22:06:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 22:06:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 22:06:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 22:06:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 22:06:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 22:06:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 22:06:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 22:06:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 22:06:57 --> Could not find the language line "Home"
ERROR - 2024-04-19 22:07:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 22:07:45 --> Could not find the language line "Perfume"
ERROR - 2024-04-19 22:07:51 --> Could not find the language line "Home"
ERROR - 2024-04-19 22:07:57 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-19 22:08:19 --> Could not find the language line "Home"
ERROR - 2024-04-19 22:09:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 22:09:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 22:09:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 22:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:13:24 --> Could not find the language line "Home"
ERROR - 2024-04-19 22:14:02 --> Could not find the language line "Home"
ERROR - 2024-04-19 22:14:17 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 22:14:36 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 22:14:49 --> Could not find the language line "Bracelets"
ERROR - 2024-04-19 22:14:52 --> Could not find the language line "Home"
ERROR - 2024-04-19 22:14:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-19 22:14:54 --> Could not find the language line "Home"
ERROR - 2024-04-19 22:14:59 --> Could not find the language line "Socks"
ERROR - 2024-04-19 22:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:15:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 22:15:32 --> Could not find the language line "Socks"
ERROR - 2024-04-19 22:15:47 --> Could not find the language line "Socks"
ERROR - 2024-04-19 22:15:57 --> Could not find the language line "Home"
ERROR - 2024-04-19 22:19:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 22:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:23:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 22:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:27:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 22:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:27:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 22:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:27:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 22:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:30:48 --> Could not find the language line "Home"
ERROR - 2024-04-19 22:31:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 22:32:35 --> Could not find the language line "Home"
ERROR - 2024-04-19 22:35:12 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-19 22:35:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 22:39:12 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-04-19 22:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:43:27 --> Could not find the language line "Home"
ERROR - 2024-04-19 22:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:47:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 22:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:47:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 22:47:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 22:47:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 22:47:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 22:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:55:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 22:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 22:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:07:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 23:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:07:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 23:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:07:20 --> Could not find the language line "Home"
ERROR - 2024-04-19 23:11:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 23:11:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-19 23:11:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 23:11:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 23:13:31 --> Could not find the language line "Home"
ERROR - 2024-04-19 23:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:19:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 23:20:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 23:20:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 23:20:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 23:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:23:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 23:27:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 23:27:57 --> Could not find the language line "Home"
ERROR - 2024-04-19 23:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:29:40 --> Could not find the language line "Home"
ERROR - 2024-04-19 23:29:43 --> Could not find the language line "Home"
ERROR - 2024-04-19 23:31:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 23:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:35:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 23:35:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 23:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:39:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 23:39:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 23:41:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-19 23:43:23 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-19 23:43:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 23:43:28 --> Could not find the language line "Home"
ERROR - 2024-04-19 23:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:51:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 23:51:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-19 23:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:52:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 23:52:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 23:52:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 23:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-19 23:53:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-19 23:53:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-19 23:53:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-19 23:55:24 --> 404 Page Not Found: Assets/js
