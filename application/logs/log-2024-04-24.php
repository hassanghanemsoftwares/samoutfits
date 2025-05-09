<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-24 00:00:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 00:00:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:00:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:02:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 00:04:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:08:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:09:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 00:12:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:12:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:14:49 --> Could not find the language line "Home"
ERROR - 2024-04-24 00:16:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:16:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:20:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:20:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:21:49 --> 404 Page Not Found: Chosenphp/index
ERROR - 2024-04-24 00:24:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:28:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:28:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:32:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 00:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 00:36:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:37:53 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-24 00:40:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:41:10 --> Could not find the language line "Socks"
ERROR - 2024-04-24 00:44:36 --> Could not find the language line "Home"
ERROR - 2024-04-24 00:44:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:48:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:48:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:51:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 00:52:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:52:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:56:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 00:56:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:00:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:03:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 01:04:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:08:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:09:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 01:12:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:14:36 --> Could not find the language line "Home"
ERROR - 2024-04-24 01:16:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:20:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:22:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 01:24:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:26:49 --> Could not find the language line "products"
ERROR - 2024-04-24 01:28:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:29:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 01:32:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 01:32:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 01:32:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 01:32:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 01:40:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:44:36 --> Could not find the language line "Home"
ERROR - 2024-04-24 01:44:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:48:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 01:48:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:52:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:56:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 01:59:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 02:01:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:01:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:04:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:04:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:05:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 02:08:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 02:08:56 --> Could not find the language line "Other"
ERROR - 2024-04-24 02:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 02:08:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 02:08:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 02:08:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 02:08:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 02:11:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 02:14:35 --> Could not find the language line "Home"
ERROR - 2024-04-24 02:16:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 02:21:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:21:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:24:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:24:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:25:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 02:25:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 02:25:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 02:27:01 --> Could not find the language line "Home"
ERROR - 2024-04-24 02:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 02:28:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:28:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 02:37:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:37:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:40:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 02:40:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'users'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 02:40:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 02:41:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:41:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:44:41 --> Could not find the language line "Home"
ERROR - 2024-04-24 02:45:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:45:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:45:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 02:45:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 02:45:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 02:49:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:49:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:53:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 02:57:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 03:01:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 03:04:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 03:04:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 03:04:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 03:05:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-24 03:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 03:05:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 03:07:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 03:09:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 03:13:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 03:13:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 03:14:18 --> Could not find the language line "Home"
ERROR - 2024-04-24 03:14:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 03:14:38 --> Could not find the language line "Home"
ERROR - 2024-04-24 03:16:08 --> Could not find the language line "Home"
ERROR - 2024-04-24 03:17:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 03:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 03:21:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-24 03:21:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 03:21:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 03:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 03:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 03:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 03:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 03:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 03:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 03:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 03:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 03:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 03:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 03:25:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 03:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 03:29:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 03:29:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 03:31:41 --> Could not find the language line "Home"
ERROR - 2024-04-24 03:33:02 --> Could not find the language line "Home"
ERROR - 2024-04-24 03:33:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 03:41:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 03:44:42 --> Could not find the language line "Home"
ERROR - 2024-04-24 03:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 03:45:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 03:45:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 03:45:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 03:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 03:46:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 03:49:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 03:50:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 03:50:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 03:50:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 03:53:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 03:54:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 03:54:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 03:54:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 03:57:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 03:57:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:01:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:01:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 04:06:52 --> Could not find the language line "Home"
ERROR - 2024-04-24 04:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 04:13:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:13:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:13:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 04:14:46 --> Could not find the language line "Home"
ERROR - 2024-04-24 04:17:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:19:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 04:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 04:21:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 04:22:22 --> Could not find the language line "Home"
ERROR - 2024-04-24 04:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 04:25:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 04:28:08 --> Could not find the language line "Home"
ERROR - 2024-04-24 04:29:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:29:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:33:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:33:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 04:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 04:37:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:41:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 04:41:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 04:41:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 04:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 04:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 04:41:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:41:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:44:39 --> Could not find the language line "Home"
ERROR - 2024-04-24 04:45:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:45:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:47:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 04:49:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:49:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 04:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 04:53:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:53:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 04:57:00 --> Could not find the language line "Home"
ERROR - 2024-04-24 04:57:16 --> Could not find the language line "Other"
ERROR - 2024-04-24 04:57:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-24 05:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 05:14:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 05:14:41 --> Could not find the language line "Home"
ERROR - 2024-04-24 05:15:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 05:17:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:17:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:18:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 05:18:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 05:18:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 05:18:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 05:18:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 05:18:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 05:18:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 05:21:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:21:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:24:55 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-24 05:25:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:25:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:28:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 05:29:19 --> Could not find the language line "Socks"
ERROR - 2024-04-24 05:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 05:29:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 05:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 05:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 05:33:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:33:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:37:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:37:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:40:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 05:41:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:41:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:44:38 --> Could not find the language line "Home"
ERROR - 2024-04-24 05:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 05:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 05:45:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:46:12 --> Could not find the language line "Home"
ERROR - 2024-04-24 05:47:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 05:49:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:49:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 05:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 05:53:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 05:57:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 05:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:01:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 06:04:19 --> Could not find the language line "Home"
ERROR - 2024-04-24 06:05:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 06:07:39 --> Could not find the language line "Home"
ERROR - 2024-04-24 06:07:52 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 06:08:09 --> Could not find the language line "Home"
ERROR - 2024-04-24 06:09:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 06:10:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 06:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:14:39 --> Could not find the language line "Home"
ERROR - 2024-04-24 06:15:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 06:17:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 06:17:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 06:17:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 06:20:01 --> Could not find the language line "Home"
ERROR - 2024-04-24 06:20:08 --> Could not find the language line "Socks"
ERROR - 2024-04-24 06:20:24 --> Could not find the language line "Socks"
ERROR - 2024-04-24 06:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:21:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 06:23:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 06:25:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 06:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:32:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 06:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:37:09 --> Could not find the language line "Home"
ERROR - 2024-04-24 06:37:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 06:37:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 06:37:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 06:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:42:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 06:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:43:20 --> Could not find the language line "Socks"
ERROR - 2024-04-24 06:43:47 --> Could not find the language line "products"
ERROR - 2024-04-24 06:44:37 --> Could not find the language line "Home"
ERROR - 2024-04-24 06:46:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 06:49:33 --> Could not find the language line "Home"
ERROR - 2024-04-24 06:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:51:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 06:51:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 06:51:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 06:53:54 --> Could not find the language line "Home"
ERROR - 2024-04-24 06:53:55 --> Could not find the language line "Home"
ERROR - 2024-04-24 06:54:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 06:54:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 06:54:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 06:55:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 06:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:57:53 --> Could not find the language line "Home"
ERROR - 2024-04-24 06:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 06:59:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 07:03:34 --> Could not find the language line "Home"
ERROR - 2024-04-24 07:07:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 07:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:08:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 07:08:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 07:08:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 07:08:49 --> Could not find the language line "Home"
ERROR - 2024-04-24 07:11:44 --> Could not find the language line "Other"
ERROR - 2024-04-24 07:11:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 07:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:11:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 07:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:14:38 --> Could not find the language line "Home"
ERROR - 2024-04-24 07:15:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 07:17:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 07:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:20:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 07:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:23:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 07:24:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 07:24:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 07:24:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 07:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:24:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 07:25:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 07:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:28:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 07:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:30:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 07:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:33:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 07:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:36:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 07:39:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 07:39:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 07:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:40:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 07:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:43:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 07:44:37 --> Could not find the language line "Home"
ERROR - 2024-04-24 07:45:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-24 07:45:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 07:45:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 07:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:49:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 07:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:53:27 --> Could not find the language line "Other"
ERROR - 2024-04-24 07:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:53:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 07:53:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 07:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 07:59:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 08:01:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 08:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:10:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 08:10:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 08:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:14:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 08:14:38 --> Could not find the language line "Home"
ERROR - 2024-04-24 08:15:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 08:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:18:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-24 08:18:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 08:18:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 08:18:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 08:19:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 08:22:21 --> Could not find the language line "Home"
ERROR - 2024-04-24 08:22:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 08:22:51 --> Could not find the language line "Home"
ERROR - 2024-04-24 08:22:53 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 08:23:00 --> Could not find the language line "Home"
ERROR - 2024-04-24 08:23:18 --> Could not find the language line "Home"
ERROR - 2024-04-24 08:23:21 --> Could not find the language line "Socks"
ERROR - 2024-04-24 08:23:43 --> Could not find the language line "Home"
ERROR - 2024-04-24 08:26:40 --> Could not find the language line "Home"
ERROR - 2024-04-24 08:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:26:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 08:28:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 08:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:30:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 08:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:33:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 08:33:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 08:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:35:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 08:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:39:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 08:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:41:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 08:42:33 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2024-04-24 08:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:44:39 --> Could not find the language line "Home"
ERROR - 2024-04-24 08:47:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 08:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:49:07 --> Could not find the language line "Home"
ERROR - 2024-04-24 08:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:51:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 08:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 08:54:59 --> Could not find the language line "Home"
ERROR - 2024-04-24 08:55:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 08:57:54 --> Could not find the language line "Home"
ERROR - 2024-04-24 08:58:43 --> Could not find the language line "Home"
ERROR - 2024-04-24 08:58:52 --> Could not find the language line "Home"
ERROR - 2024-04-24 08:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:00:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 09:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:02:00 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:02:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 09:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:04:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 09:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:04:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 09:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:09:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 09:09:08 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:12:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 09:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:14:42 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:14:47 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:15:27 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:15:34 --> 404 Page Not Found: Assets/images
ERROR - 2024-04-24 09:15:34 --> 404 Page Not Found: Assets/images
ERROR - 2024-04-24 09:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:16:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 09:17:08 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:18:33 --> 404 Page Not Found: Assets/images
ERROR - 2024-04-24 09:18:33 --> 404 Page Not Found: Assets/images
ERROR - 2024-04-24 09:18:49 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:18:53 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:20:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 09:20:13 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-04-24 09:20:17 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:20:21 --> Could not find the language line "Perfume"
ERROR - 2024-04-24 09:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:22:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 09:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:25:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 09:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:25:51 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:25:53 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:27:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 09:29:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 09:29:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 09:29:28 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:29:56 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:33:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 09:34:21 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2024-04-24 09:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:41:03 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 09:41:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 09:41:36 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 09:41:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 09:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:44:40 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:46:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 09:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:49:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 09:49:34 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:50:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 09:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:51:22 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-24 09:51:26 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:52:36 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:52:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-24 09:52:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-24 09:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:53:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-24 09:53:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-24 09:54:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 09:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:54:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-24 09:54:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-24 09:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:54:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-24 09:54:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-24 09:54:50 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:57:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 09:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:58:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 09:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:59:04 --> Could not find the language line "Home"
ERROR - 2024-04-24 09:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 09:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:00:52 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:02:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 10:02:36 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:02:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 10:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:02:39 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:04:33 --> Could not find the language line "accounts"
ERROR - 2024-04-24 10:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:07:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 10:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:10:46 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:14:50 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:15:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 10:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:15:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 10:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:19:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 10:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:20:49 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:21:47 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:22:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 10:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:22:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 10:22:41 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:23:10 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:23:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 10:24:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 10:24:27 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:25:24 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:26:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 10:27:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 10:30:15 --> 404 Page Not Found: Products/products
ERROR - 2024-04-24 10:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:33:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 10:33:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 10:33:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 10:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:39:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 10:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:44:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 10:44:41 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:46:09 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:46:21 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:46:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 10:46:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 10:46:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 10:46:24 --> 404 Page Not Found: Home/accounts
ERROR - 2024-04-24 10:46:24 --> 404 Page Not Found: Home/home
ERROR - 2024-04-24 10:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:46:45 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:47:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 10:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:47:55 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:48:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 10:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:48:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 10:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:52:20 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:52:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 10:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:52:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 10:52:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 10:53:32 --> Could not find the language line "Home"
ERROR - 2024-04-24 10:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:56:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 10:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 10:59:45 --> Could not find the language line "Home"
ERROR - 2024-04-24 11:00:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 11:00:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 11:00:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 11:00:56 --> Could not find the language line "Other"
ERROR - 2024-04-24 11:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:00:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 11:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:05:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:05:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:09:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:09:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:13:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:13:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:14:00 --> Could not find the language line "Home"
ERROR - 2024-04-24 11:14:42 --> Could not find the language line "Home"
ERROR - 2024-04-24 11:16:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 11:16:32 --> Could not find the language line "Home"
ERROR - 2024-04-24 11:17:34 --> Could not find the language line "Home"
ERROR - 2024-04-24 11:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:17:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:17:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:17:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 11:18:06 --> Could not find the language line "Home"
ERROR - 2024-04-24 11:21:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 11:21:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:21:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 11:21:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 11:21:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 11:25:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:25:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:25:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 11:27:36 --> Could not find the language line "Home"
ERROR - 2024-04-24 11:30:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:30:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 11:31:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 11:34:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:36:00 --> Could not find the language line "Home"
ERROR - 2024-04-24 11:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:37:39 --> Could not find the language line "Home"
ERROR - 2024-04-24 11:38:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:39:44 --> Could not find the language line "Home"
ERROR - 2024-04-24 11:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:42:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 11:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:44:41 --> Could not find the language line "Home"
ERROR - 2024-04-24 11:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:46:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:46:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:47:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 11:50:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:55:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:58:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 11:58:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 11:58:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 11:59:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:59:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 11:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 11:59:42 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:00:26 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:03:03 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:11:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 12:11:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 12:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:12:48 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:14:42 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:15:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-24 12:15:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 12:15:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 12:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:20:25 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:22:00 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:22:02 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:28:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 12:28:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 12:29:10 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:29:41 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:29:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-24 12:29:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-24 12:30:04 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:30:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 12:30:22 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:31:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 12:31:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 12:31:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 12:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:32:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 12:32:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 12:35:03 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:35:12 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 12:35:24 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:35:28 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 12:35:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 12:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:35:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 12:35:46 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 12:35:51 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 12:35:53 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:35:53 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 12:36:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 12:36:26 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 12:36:30 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 12:36:31 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 12:36:33 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:36:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 12:36:43 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 12:36:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 12:36:57 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 12:36:58 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:37:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-24 12:37:17 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:37:40 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:43:05 --> Could not find the language line "products"
ERROR - 2024-04-24 12:44:41 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:45:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 12:49:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 12:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:51:09 --> Could not find the language line "products"
ERROR - 2024-04-24 12:53:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 12:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:53:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 12:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 12:54:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 12:54:49 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:57:04 --> Could not find the language line "Home"
ERROR - 2024-04-24 12:57:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 12:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:01:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 13:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:05:56 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:05:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 13:06:01 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:06:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:07:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:07:39 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:08:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:08:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:08:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:09:08 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:09:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:09:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:10:41 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:11:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:11:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:11:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:12:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:13:13 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:13:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:13:55 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:13:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 13:14:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:14:31 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:14:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:14:44 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:14:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 13:16:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 13:18:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:18:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 13:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:22:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 13:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:23:58 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:26:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 13:26:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 13:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:30:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 13:31:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 13:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:31:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 13:31:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 13:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:33:08 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:35:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 13:36:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 13:36:44 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:39:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 13:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:41:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:43:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 13:43:40 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:44:45 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:46:05 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:46:36 --> Could not find the language line "products"
ERROR - 2024-04-24 13:46:52 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:47:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:47:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:47:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 13:47:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 13:48:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:48:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:49:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:50:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:50:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:51:21 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:51:27 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:51:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 13:51:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 13:52:05 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 13:54:42 --> Could not find the language line "Home"
ERROR - 2024-04-24 13:56:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 13:59:19 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:00:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:04:28 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:06:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-24 14:06:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-24 14:06:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 14:08:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:10:51 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:11:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 14:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:12:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:13:10 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:13:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 14:13:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 14:13:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 14:13:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 14:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:13:58 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 14:14:41 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:15:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 14:15:22 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:16:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:17:47 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:21:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:21:16 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:21:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 14:21:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 14:22:41 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:22:51 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:23:16 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:23:16 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:23:25 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:23:25 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:23:35 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:24:42 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:24:56 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:24:56 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:25:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:25:18 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:25:18 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:25:32 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:25:32 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:25:50 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:25:50 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:26:10 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:27:11 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:27:12 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:27:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 14:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:29:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:33:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:33:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:33:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:34:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 14:34:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 14:36:16 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:36:17 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:37:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 14:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:37:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:37:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:41:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:44:03 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:44:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 14:44:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 14:44:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 14:44:43 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:44:48 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:46:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:46:22 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:50:10 --> 404 Page Not Found: Support/privacy-policy
ERROR - 2024-04-24 14:50:54 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:51:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 14:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:52:49 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 14:54:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 14:55:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 14:56:19 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-24 14:57:47 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:57:49 --> Could not find the language line "Home"
ERROR - 2024-04-24 14:58:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:02:14 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:02:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:02:52 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:06:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 15:06:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:06:54 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:13:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-24 15:14:12 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:14:43 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:15:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:16:59 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:19:05 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:19:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:20:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-24 15:20:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-24 15:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:22:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 15:23:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:24:09 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:25:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-24 15:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:26:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 15:27:26 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:27:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:27:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:27:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 15:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:28:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:29:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:29:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:29:37 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:29:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:29:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:30:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:30:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:31:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:31:11 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:31:15 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:31:16 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:31:19 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:31:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:31:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:31:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:31:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:31:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:31:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:32:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:32:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:32:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:33:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:34:36 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:35:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 15:35:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 15:36:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:36:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 15:37:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 15:38:17 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:38:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 15:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:40:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:44:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:44:44 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:48:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:52:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:54:28 --> Could not find the language line "Home"
ERROR - 2024-04-24 15:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:56:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:56:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 15:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 15:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:01:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:01:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:01:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 16:01:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 16:01:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 16:02:24 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:05:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:08:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 16:09:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:11:15 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-04-24 16:13:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:13:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:14:44 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:17:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:19:01 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:21:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:21:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:23:34 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:25:43 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:32:54 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:33:43 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:34:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:34:50 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:35:22 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:35:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 16:35:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 16:37:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 16:37:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 16:37:50 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:38:04 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:38:05 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:38:05 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:38:05 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:38:16 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-24 16:38:23 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:38:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:42:16 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:42:46 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:44:45 --> Could not find the language line "Home"
ERROR - 2024-04-24 16:46:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:51:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:51:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:55:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:55:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:57:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-24 16:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 16:59:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 16:59:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 17:03:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 17:11:26 --> Could not find the language line "Home"
ERROR - 2024-04-24 17:11:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 17:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:11:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 17:11:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 17:11:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 17:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:14:45 --> Could not find the language line "Home"
ERROR - 2024-04-24 17:16:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 17:16:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 17:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:20:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 17:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:28:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 17:29:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 17:29:12 --> Could not find the language line "Home"
ERROR - 2024-04-24 17:29:16 --> Could not find the language line "Home"
ERROR - 2024-04-24 17:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:36:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 17:36:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 17:37:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 17:37:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 17:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:41:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 17:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:41:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 17:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:44:44 --> Could not find the language line "Home"
ERROR - 2024-04-24 17:45:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 17:45:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 17:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 17:52:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 17:57:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 17:57:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:01:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:02:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 18:09:25 --> Could not find the language line "Home"
ERROR - 2024-04-24 18:09:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 18:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:10:19 --> Could not find the language line "Home"
ERROR - 2024-04-24 18:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:13:06 --> Could not find the language line "Home"
ERROR - 2024-04-24 18:13:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 18:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:14:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:14:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:14:45 --> Could not find the language line "Home"
ERROR - 2024-04-24 18:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:19:14 --> Could not find the language line "Home"
ERROR - 2024-04-24 18:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:21:27 --> Could not find the language line "Home"
ERROR - 2024-04-24 18:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:22:20 --> Could not find the language line "Home"
ERROR - 2024-04-24 18:22:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:22:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:23:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 18:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:27:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:27:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:29:37 --> Could not find the language line "Home"
ERROR - 2024-04-24 18:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:31:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 18:31:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:31:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:31:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:35:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:35:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 18:35:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 18:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:39:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:39:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:44:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 18:44:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 18:44:25 --> Could not find the language line "products"
ERROR - 2024-04-24 18:44:45 --> Could not find the language line "Home"
ERROR - 2024-04-24 18:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:52:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 18:53:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 18:54:01 --> Could not find the language line "Home"
ERROR - 2024-04-24 18:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 18:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:00:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 19:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:08:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 19:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:08:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 19:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:14:46 --> Could not find the language line "Home"
ERROR - 2024-04-24 19:16:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 19:21:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 19:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:21:42 --> Could not find the language line "Home"
ERROR - 2024-04-24 19:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:25:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 19:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:25:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 19:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:33:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 19:37:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 19:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:41:01 --> Could not find the language line "Home"
ERROR - 2024-04-24 19:41:20 --> Could not find the language line "Home"
ERROR - 2024-04-24 19:41:21 --> Could not find the language line "Home"
ERROR - 2024-04-24 19:41:34 --> Could not find the language line "Home"
ERROR - 2024-04-24 19:41:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 19:41:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 19:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:44:47 --> Could not find the language line "Home"
ERROR - 2024-04-24 19:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:46:32 --> Could not find the language line "Home"
ERROR - 2024-04-24 19:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:48:06 --> Could not find the language line "Home"
ERROR - 2024-04-24 19:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:48:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 19:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:52:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 19:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 19:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 20:00:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 20:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 20:03:16 --> Could not find the language line "Home"
ERROR - 2024-04-24 20:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 20:06:56 --> Could not find the language line "Perfume"
ERROR - 2024-04-24 20:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 20:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 20:14:46 --> Could not find the language line "Home"
ERROR - 2024-04-24 20:15:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 20:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 20:37:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 20:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 20:44:48 --> Could not find the language line "Home"
ERROR - 2024-04-24 20:45:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 20:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 21:01:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 21:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 21:14:53 --> Could not find the language line "Home"
ERROR - 2024-04-24 21:21:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 21:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 21:24:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 21:25:34 --> Could not find the language line "products"
ERROR - 2024-04-24 21:26:06 --> Could not find the language line "Other"
ERROR - 2024-04-24 21:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 21:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 21:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 21:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 21:30:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 21:30:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 21:30:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 21:30:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 21:30:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 21:30:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 21:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 21:34:10 --> Could not find the language line "Home"
ERROR - 2024-04-24 21:34:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 21:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 21:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 21:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 21:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 21:38:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 21:42:48 --> Could not find the language line "Socks"
ERROR - 2024-04-24 21:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 21:42:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 21:44:51 --> Could not find the language line "Home"
ERROR - 2024-04-24 21:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 21:51:06 --> Could not find the language line "Home"
ERROR - 2024-04-24 21:51:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 21:55:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-24 21:55:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-24 21:55:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-24 21:59:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 22:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 22:02:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 22:03:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 22:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 22:04:10 --> Could not find the language line "Home"
ERROR - 2024-04-24 22:04:10 --> 404 Page Not Found: Assets/mail
ERROR - 2024-04-24 22:04:10 --> 404 Page Not Found: Assets/mail
ERROR - 2024-04-24 22:04:10 --> Could not find the language line "Home"
ERROR - 2024-04-24 22:04:10 --> 404 Page Not Found: Assets/mail
ERROR - 2024-04-24 22:04:10 --> 404 Page Not Found: Assets/mail
ERROR - 2024-04-24 22:04:11 --> Could not find the language line "Home"
ERROR - 2024-04-24 22:04:11 --> 404 Page Not Found: Assets/mail
ERROR - 2024-04-24 22:04:11 --> 404 Page Not Found: Assets/mail
ERROR - 2024-04-24 22:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 22:06:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 22:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 22:14:53 --> Could not find the language line "Home"
ERROR - 2024-04-24 22:24:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 22:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 22:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 22:44:51 --> Could not find the language line "Home"
ERROR - 2024-04-24 22:49:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 22:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 22:57:46 --> Could not find the language line "Other"
ERROR - 2024-04-24 22:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 22:57:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 22:57:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 22:57:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 22:57:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 22:57:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 23:00:45 --> Could not find the language line "Home"
ERROR - 2024-04-24 23:02:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 23:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 23:06:07 --> Could not find the language line "Other"
ERROR - 2024-04-24 23:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 23:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 23:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 23:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 23:10:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-24 23:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 23:14:27 --> Could not find the language line "Bracelets"
ERROR - 2024-04-24 23:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 23:14:51 --> Could not find the language line "Home"
ERROR - 2024-04-24 23:18:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 23:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 23:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 23:18:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-24 23:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 23:23:19 --> Could not find the language line "Home"
ERROR - 2024-04-24 23:39:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 23:39:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 23:43:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-24 23:44:49 --> Could not find the language line "Home"
ERROR - 2024-04-24 23:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 23:47:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-24 23:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 23:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-24 23:55:33 --> Could not find the language line "Home"
ERROR - 2024-04-24 23:57:42 --> Could not find the language line "Home"
ERROR - 2024-04-24 23:58:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-24 23:59:44 --> Could not find the language line "Home"
