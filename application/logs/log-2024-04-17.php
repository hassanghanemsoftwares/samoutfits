<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-17 00:00:34 --> Could not find the language line "Home"
ERROR - 2024-04-17 00:07:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 00:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:07:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 00:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:14:22 --> Could not find the language line "Home"
ERROR - 2024-04-17 00:15:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 00:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:15:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 00:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:21:47 --> Could not find the language line "Home"
ERROR - 2024-04-17 00:21:47 --> Could not find the language line "Home"
ERROR - 2024-04-17 00:21:47 --> Could not find the language line "Home"
ERROR - 2024-04-17 00:21:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 00:21:50 --> Could not find the language line "Home"
ERROR - 2024-04-17 00:21:50 --> Could not find the language line "Home"
ERROR - 2024-04-17 00:23:18 --> Could not find the language line "Home"
ERROR - 2024-04-17 00:23:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 00:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:25:43 --> Could not find the language line "Home"
ERROR - 2024-04-17 00:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:26:45 --> Could not find the language line "Home"
ERROR - 2024-04-17 00:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:30:34 --> Could not find the language line "Home"
ERROR - 2024-04-17 00:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:35:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 00:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:39:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 00:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:39:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 00:42:57 --> Could not find the language line "Home"
ERROR - 2024-04-17 00:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:43:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 00:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:51:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 00:52:59 --> Could not find the language line "Home"
ERROR - 2024-04-17 00:54:33 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-17 00:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 00:59:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:00:27 --> Could not find the language line "Home"
ERROR - 2024-04-17 01:03:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-17 01:03:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-17 01:03:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 01:03:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 01:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:11:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:11:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:15:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:19:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:27:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:27:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:29:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 01:29:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-17 01:29:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 01:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-17 01:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:31:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-17 01:31:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:35:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:35:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:39:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:39:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:39:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:47:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:51:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 01:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:55:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-17 01:55:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-17 01:55:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 01:56:23 --> Could not find the language line "Socks"
ERROR - 2024-04-17 01:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 01:59:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:00:27 --> Could not find the language line "Home"
ERROR - 2024-04-17 02:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:08:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:08:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:08:35 --> Could not find the language line "products"
ERROR - 2024-04-17 02:12:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:16:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:16:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:16:59 --> Could not find the language line "products"
ERROR - 2024-04-17 02:20:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:20:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:23:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 02:23:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 02:23:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 02:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:24:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:26:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 02:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:30:25 --> Could not find the language line "Home"
ERROR - 2024-04-17 02:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:37:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:38:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 02:38:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 02:38:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 02:41:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:45:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-17 02:49:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:51:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2024-04-17 02:54:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:54:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:58:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 02:58:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:58:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 02:58:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-17 02:58:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 02:58:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 03:00:20 --> Could not find the language line "Home"
ERROR - 2024-04-17 03:02:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:02:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:06:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-17 03:06:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-17 03:06:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 03:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:10:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:15:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:15:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:25:08 --> Could not find the language line "Home"
ERROR - 2024-04-17 03:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:27:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:27:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:30:20 --> Could not find the language line "Home"
ERROR - 2024-04-17 03:31:02 --> Could not find the language line "products"
ERROR - 2024-04-17 03:31:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 03:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:31:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:31:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:35:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:35:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:40:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:44:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:44:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:45:32 --> Could not find the language line "Home"
ERROR - 2024-04-17 03:48:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:49:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 03:52:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:52:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 03:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:54:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 03:54:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 03:54:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 03:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 03:56:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:00:26 --> Could not find the language line "Home"
ERROR - 2024-04-17 04:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:00:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:00:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:00:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-17 04:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:05:54 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-17 04:05:54 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-17 04:05:55 --> Could not find the language line "Home"
ERROR - 2024-04-17 04:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:06:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 04:06:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 04:06:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 04:06:44 --> Could not find the language line "Home"
ERROR - 2024-04-17 04:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:09:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:13:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:17:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:21:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:21:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:25:02 --> Could not find the language line "Home"
ERROR - 2024-04-17 04:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:25:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:25:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:30:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:30:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-17 04:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:34:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:34:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:38:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:38:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:42:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:42:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:46:30 --> Could not find the language line "Other"
ERROR - 2024-04-17 04:46:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:50:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:50:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 04:51:04 --> Could not find the language line "products"
ERROR - 2024-04-17 04:55:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 04:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:00:25 --> Could not find the language line "Home"
ERROR - 2024-04-17 05:03:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:03:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:07:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:07:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:11:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:15:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 05:15:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 05:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:15:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:15:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:20:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:20:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 05:21:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 05:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:28:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-17 05:32:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:32:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:34:33 --> Could not find the language line "Home"
ERROR - 2024-04-17 05:34:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 05:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:35:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 05:35:27 --> Could not find the language line "Home"
ERROR - 2024-04-17 05:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:36:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:39:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 05:39:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 05:39:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 05:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:40:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:40:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:41:35 --> Could not find the language line "products"
ERROR - 2024-04-17 05:44:19 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 05:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:45:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:45:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:47:01 --> Could not find the language line "Home"
ERROR - 2024-04-17 05:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:49:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:51:40 --> Could not find the language line "Home"
ERROR - 2024-04-17 05:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:53:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:57:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 05:57:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 05:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:00:16 --> Could not find the language line "Home"
ERROR - 2024-04-17 06:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:01:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 06:01:39 --> Could not find the language line "Home"
ERROR - 2024-04-17 06:02:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 06:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:05:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 06:05:29 --> Could not find the language line "Home"
ERROR - 2024-04-17 06:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:09:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-17 06:09:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-17 06:09:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 06:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:11:37 --> Could not find the language line "Home"
ERROR - 2024-04-17 06:13:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-17 06:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:17:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 06:17:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 06:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:25:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 06:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:29:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 06:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-17 06:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:33:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 06:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:37:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 06:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:41:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 06:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:45:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 06:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:47:00 --> Could not find the language line "Home"
ERROR - 2024-04-17 06:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:48:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 06:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:49:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 06:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:49:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 06:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:51:01 --> Could not find the language line "Home"
ERROR - 2024-04-17 06:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:53:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 06:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:57:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 06:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 06:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-17 07:01:12 --> Could not find the language line "Home"
ERROR - 2024-04-17 07:01:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:05:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:05:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 07:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:09:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:09:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:11:36 --> Could not find the language line "Home"
ERROR - 2024-04-17 07:13:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:13:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:13:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:14:46 --> Could not find the language line "Home"
ERROR - 2024-04-17 07:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:19:45 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-17 07:21:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:25:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:29:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:29:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-17 07:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:33:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:33:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:37:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:41:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:45:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:49:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:49:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:53:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 07:53:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 07:53:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 07:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 07:57:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:57:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 07:57:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 07:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 07:57:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 07:58:07 --> Could not find the language line "Home"
ERROR - 2024-04-17 07:58:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 07:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:00:21 --> Could not find the language line "Home"
ERROR - 2024-04-17 08:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:01:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:01:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:13:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:13:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-17 08:13:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:17:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:17:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:25:20 --> Could not find the language line "products"
ERROR - 2024-04-17 08:25:29 --> Could not find the language line "Home"
ERROR - 2024-04-17 08:25:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:25:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:29:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:29:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-17 08:33:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:34:25 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-04-17 08:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:41:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:41:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:45:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:49:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 08:49:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:49:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:53:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:56:29 --> Could not find the language line "Home"
ERROR - 2024-04-17 08:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 08:57:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 08:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:00:17 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:01:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:01:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:01:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 09:01:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 09:01:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 09:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:05:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:05:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:07:22 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:09:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:10:48 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:11:40 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:13:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:17:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:21:52 --> Could not find the language line "Other"
ERROR - 2024-04-17 09:21:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:25:10 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-04-17 09:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:29:14 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:29:39 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:29:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:29:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:29:53 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:30:08 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:30:08 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:32:08 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:33:39 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 09:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:36:04 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 09:36:06 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 09:36:20 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:37:04 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:37:47 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:37:48 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:37:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:37:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:38:29 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:39:32 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:40:02 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:47:42 --> Could not find the language line "Home"
ERROR - 2024-04-17 09:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:49:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:53:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:57:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 09:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 09:57:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:00:16 --> Could not find the language line "Home"
ERROR - 2024-04-17 10:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:01:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:01:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:05:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:09:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:13:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:13:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:14:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 10:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:17:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:17:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:21:41 --> Could not find the language line "products"
ERROR - 2024-04-17 10:21:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:21:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:22:27 --> Could not find the language line "Home"
ERROR - 2024-04-17 10:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:22:38 --> Could not find the language line "Other"
ERROR - 2024-04-17 10:22:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 10:22:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 10:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:23:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 10:23:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 10:23:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 10:23:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 10:24:37 --> Could not find the language line "Home"
ERROR - 2024-04-17 10:24:55 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 10:25:09 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 10:25:19 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 10:25:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 10:25:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:25:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:26:59 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 10:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:27:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 10:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:29:05 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 10:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:29:20 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 10:29:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:29:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:30:21 --> Could not find the language line "Home"
ERROR - 2024-04-17 10:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:33:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:33:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:37:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:40:23 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 10:40:38 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 10:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:42:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 10:42:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 10:42:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 10:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:45:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:46:53 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 10:47:08 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 10:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:48:05 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 10:48:18 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 10:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:48:41 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 10:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:49:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:49:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:51:03 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-17 10:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:53:49 --> Could not find the language line "Home"
ERROR - 2024-04-17 10:53:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-17 10:53:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-17 10:53:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 10:54:29 --> Could not find the language line "products"
ERROR - 2024-04-17 10:57:00 --> Could not find the language line "Home"
ERROR - 2024-04-17 10:57:11 --> Could not find the language line "Home"
ERROR - 2024-04-17 10:58:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:58:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 10:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 10:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:00:18 --> Could not find the language line "Home"
ERROR - 2024-04-17 11:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:01:20 --> Could not find the language line "products"
ERROR - 2024-04-17 11:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:02:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:02:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:06:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:10:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:10:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:14:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:17:53 --> Could not find the language line "Perfume"
ERROR - 2024-04-17 11:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:19:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 11:19:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 11:19:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 11:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:22:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:22:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 11:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:23:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 11:23:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 11:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:26:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 11:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:29:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 11:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:30:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:30:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-17 11:30:53 --> Could not find the language line "Home"
ERROR - 2024-04-17 11:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:32:23 --> Could not find the language line "products"
ERROR - 2024-04-17 11:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:32:51 --> Could not find the language line "Home"
ERROR - 2024-04-17 11:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:34:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:34:32 --> Could not find the language line "Home"
ERROR - 2024-04-17 11:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:35:24 --> Could not find the language line "Other"
ERROR - 2024-04-17 11:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:39:43 --> Could not find the language line "Home"
ERROR - 2024-04-17 11:40:11 --> Could not find the language line "Home"
ERROR - 2024-04-17 11:40:54 --> Could not find the language line "Home"
ERROR - 2024-04-17 11:41:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 11:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:41:59 --> Could not find the language line "products"
ERROR - 2024-04-17 11:42:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:42:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:42:09 --> Could not find the language line "Home"
ERROR - 2024-04-17 11:42:15 --> Could not find the language line "Home"
ERROR - 2024-04-17 11:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:46:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 11:46:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:46:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:49:42 --> Could not find the language line "Home"
ERROR - 2024-04-17 11:49:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 11:49:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 11:49:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 11:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:50:16 --> Could not find the language line "Home"
ERROR - 2024-04-17 11:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:50:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 11:50:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 11:50:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-17 11:50:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 11:50:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 11:50:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 11:50:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 11:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 11:54:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 11:55:50 --> Could not find the language line "Home"
ERROR - 2024-04-17 11:58:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-17 12:01:45 --> Could not find the language line "Home"
ERROR - 2024-04-17 12:02:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:02:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:02:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 12:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:06:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:07:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-17 12:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:11:26 --> Could not find the language line "Home"
ERROR - 2024-04-17 12:11:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 12:11:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 12:11:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 12:11:31 --> 404 Page Not Found: Cart/home
ERROR - 2024-04-17 12:11:32 --> 404 Page Not Found: Cart/accounts
ERROR - 2024-04-17 12:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:14:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:15:57 --> Could not find the language line "Socks"
ERROR - 2024-04-17 12:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:18:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:18:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:20:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 12:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:22:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:22:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:22:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:22:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 12:22:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 12:22:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 12:22:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 12:22:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 12:22:55 --> Could not find the language line "Home"
ERROR - 2024-04-17 12:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:26:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:27:46 --> Could not find the language line "products"
ERROR - 2024-04-17 12:29:08 --> Could not find the language line "Home"
ERROR - 2024-04-17 12:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:30:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:30:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:30:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 12:30:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 12:30:18 --> Could not find the language line "Home"
ERROR - 2024-04-17 12:30:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 12:30:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 12:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:30:32 --> Could not find the language line "Home"
ERROR - 2024-04-17 12:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:34:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:34:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:37:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 12:37:32 --> Could not find the language line "Home"
ERROR - 2024-04-17 12:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:38:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:38:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:38:44 --> Could not find the language line "Home"
ERROR - 2024-04-17 12:41:26 --> Could not find the language line "Home"
ERROR - 2024-04-17 12:42:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:42:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:44:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 12:46:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:50:10 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-17 12:50:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:53:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 12:53:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 12:54:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 12:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:58:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 12:58:34 --> Could not find the language line "Home"
ERROR - 2024-04-17 12:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 12:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:02:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:02:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:02:29 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:06:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 13:06:42 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:10:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 13:10:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 13:10:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 13:10:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:10:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:10:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 13:10:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:14:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:17:30 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:17:30 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:17:30 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:17:30 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:17:30 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:17:31 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:18:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:22:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:30:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:30:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:34:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:38:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:38:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:39:25 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:41:25 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:42:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:42:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:43:15 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:45:57 --> Could not find the language line "Other"
ERROR - 2024-04-17 13:46:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:46:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:48:51 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 13:50:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:53:02 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:54:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:58:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 13:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 13:59:30 --> Could not find the language line "Home"
ERROR - 2024-04-17 13:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:00:16 --> Could not find the language line "Home"
ERROR - 2024-04-17 14:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:02:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-17 14:02:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-17 14:02:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 14:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:03:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-17 14:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:06:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 14:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:07:15 --> Could not find the language line "Home"
ERROR - 2024-04-17 14:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:10:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 14:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:11:49 --> Could not find the language line "Other"
ERROR - 2024-04-17 14:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:14:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 14:14:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-17 14:14:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 14:14:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 14:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:16:51 --> Could not find the language line "Other"
ERROR - 2024-04-17 14:17:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-17 14:18:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 14:20:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 14:21:54 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 14:22:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 14:26:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 14:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-17 14:30:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 14:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:31:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 14:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:31:56 --> Could not find the language line "Other"
ERROR - 2024-04-17 14:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:33:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 14:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:38:27 --> Could not find the language line "Home"
ERROR - 2024-04-17 14:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:40:29 --> Could not find the language line "Other"
ERROR - 2024-04-17 14:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:42:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 14:42:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 14:45:09 --> Could not find the language line "Home"
ERROR - 2024-04-17 14:45:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 14:45:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 14:45:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 14:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:49:42 --> Could not find the language line "Home"
ERROR - 2024-04-17 14:50:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 14:50:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 14:50:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 14:50:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 14:50:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 14:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:54:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 14:57:15 --> Could not find the language line "Home"
ERROR - 2024-04-17 14:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:58:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 14:58:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 14:58:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 14:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 14:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-17 15:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:03:42 --> Could not find the language line "Home"
ERROR - 2024-04-17 15:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:04:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 15:04:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 15:04:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 15:06:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:08:29 --> Could not find the language line "Home"
ERROR - 2024-04-17 15:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:10:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:10:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:13:42 --> Could not find the language line "Home"
ERROR - 2024-04-17 15:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:15:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:15:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:18:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:18:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:22:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:24:23 --> Could not find the language line "Home"
ERROR - 2024-04-17 15:25:06 --> Could not find the language line "Home"
ERROR - 2024-04-17 15:26:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:26:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:30:18 --> Could not find the language line "Home"
ERROR - 2024-04-17 15:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:32:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 15:32:23 --> Could not find the language line "Home"
ERROR - 2024-04-17 15:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:34:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:38:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:38:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:41:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 15:42:29 --> Could not find the language line "Home"
ERROR - 2024-04-17 15:42:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-17 15:42:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-17 15:42:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 15:46:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:54:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:54:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:55:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 15:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 15:58:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 15:58:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:00:20 --> Could not find the language line "Home"
ERROR - 2024-04-17 16:02:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:06:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:14:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:17:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 16:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:20:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 16:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:22:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:22:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:22:58 --> Could not find the language line "0"
ERROR - 2024-04-17 16:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:26:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:26:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-17 16:30:24 --> Could not find the language line "Home"
ERROR - 2024-04-17 16:30:32 --> Could not find the language line "Home"
ERROR - 2024-04-17 16:30:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:30:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:38:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:42:35 --> Could not find the language line "Home"
ERROR - 2024-04-17 16:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:42:58 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-17 16:43:29 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-17 16:43:43 --> Could not find the language line "Home"
ERROR - 2024-04-17 16:43:58 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 16:46:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:48:55 --> Could not find the language line "products"
ERROR - 2024-04-17 16:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:54:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:58:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 16:58:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 16:59:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 17:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-17 17:02:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 17:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:02:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 17:03:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-17 17:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:09:10 --> Could not find the language line "Home"
ERROR - 2024-04-17 17:09:11 --> Could not find the language line "Home"
ERROR - 2024-04-17 17:09:12 --> Could not find the language line "Home"
ERROR - 2024-04-17 17:09:20 --> Could not find the language line "Home"
ERROR - 2024-04-17 17:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:10:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 17:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:13:53 --> Could not find the language line "Disclaimer"
ERROR - 2024-04-17 17:14:15 --> Could not find the language line "Home"
ERROR - 2024-04-17 17:14:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-17 17:14:44 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-17 17:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:14:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 17:15:07 --> Could not find the language line "Home"
ERROR - 2024-04-17 17:16:08 --> Could not find the language line "Home"
ERROR - 2024-04-17 17:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:19:04 --> Could not find the language line "products"
ERROR - 2024-04-17 17:20:27 --> Could not find the language line "Home"
ERROR - 2024-04-17 17:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:21:21 --> Could not find the language line "Home"
ERROR - 2024-04-17 17:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:22:15 --> Could not find the language line "Home"
ERROR - 2024-04-17 17:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:23:42 --> 404 Page Not Found: Assets/images
ERROR - 2024-04-17 17:23:42 --> 404 Page Not Found: Assets/images
ERROR - 2024-04-17 17:23:51 --> 404 Page Not Found: Assets/images
ERROR - 2024-04-17 17:23:52 --> 404 Page Not Found: Assets/images
ERROR - 2024-04-17 17:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:25:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 17:25:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 17:25:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 17:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:26:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 17:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-17 17:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:30:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 17:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:30:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 17:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:39:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 17:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:42:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 17:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:42:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 17:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:45:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 17:45:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 17:45:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 17:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:46:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 17:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 17:58:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 17:58:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 18:00:16 --> Could not find the language line "Home"
ERROR - 2024-04-17 18:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:06:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 18:10:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-17 18:10:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-17 18:10:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 18:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:14:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 18:14:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 18:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:14:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 18:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:17:11 --> Could not find the language line "Home"
ERROR - 2024-04-17 18:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:18:15 --> Could not find the language line "Home"
ERROR - 2024-04-17 18:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:18:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-17 18:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:23:55 --> Could not find the language line "Home"
ERROR - 2024-04-17 18:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-17 18:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:33:42 --> Could not find the language line "Home"
ERROR - 2024-04-17 18:33:46 --> Could not find the language line "Home"
ERROR - 2024-04-17 18:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:46:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 18:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:49:08 --> Could not find the language line "accounting"
ERROR - 2024-04-17 18:50:36 --> Could not find the language line "Home"
ERROR - 2024-04-17 18:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:50:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 18:50:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 18:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 18:54:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 18:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:00:17 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:02:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 19:02:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 19:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:03:13 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:06:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 19:06:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 19:06:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 19:06:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-17 19:06:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-17 19:06:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 19:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:14:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-17 19:14:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-17 19:14:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 19:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:18:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 19:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:18:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 19:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:22:40 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:22:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 19:23:54 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:30:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 19:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:34:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 19:34:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 19:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:37:11 --> Could not find the language line "Socks"
ERROR - 2024-04-17 19:37:29 --> Could not find the language line "Socks"
ERROR - 2024-04-17 19:37:30 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:38:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 19:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:41:14 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:41:27 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 19:41:45 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:42:12 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-17 19:42:26 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:42:47 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:42:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 19:42:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 19:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:45:07 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:48:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 19:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:50:23 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:51:59 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:52:07 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 19:52:33 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:52:41 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 19:52:44 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:53:04 --> Could not find the language line "Bracelets"
ERROR - 2024-04-17 19:53:06 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:53:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 19:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:54:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 19:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:55:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 19:55:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 19:56:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 19:56:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 19:56:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 19:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:56:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 19:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:57:00 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 19:57:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 19:57:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 19:57:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 19:57:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 19:57:09 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:57:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-17 19:57:38 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:57:43 --> Could not find the language line "Perfume"
ERROR - 2024-04-17 19:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:58:04 --> Could not find the language line "Perfume"
ERROR - 2024-04-17 19:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:58:13 --> Could not find the language line "Perfume"
ERROR - 2024-04-17 19:58:16 --> Could not find the language line "Home"
ERROR - 2024-04-17 19:58:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 19:58:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 19:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 19:59:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 19:59:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 19:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:00:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:00:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:00:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:00:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:01:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:01:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:01:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:01:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:01:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:01:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:01:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:01:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:01:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:01:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:01:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:01:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 20:01:50 --> Could not find the language line "Home"
ERROR - 2024-04-17 20:02:04 --> Could not find the language line "Socks"
ERROR - 2024-04-17 20:02:29 --> Could not find the language line "Socks"
ERROR - 2024-04-17 20:02:38 --> Could not find the language line "Socks"
ERROR - 2024-04-17 20:02:40 --> Could not find the language line "Home"
ERROR - 2024-04-17 20:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:03:09 --> Could not find the language line "Home"
ERROR - 2024-04-17 20:03:14 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-17 20:03:30 --> Could not find the language line "Home"
ERROR - 2024-04-17 20:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:07:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 20:07:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 20:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:12:46 --> Could not find the language line "Home"
ERROR - 2024-04-17 20:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:15:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 20:15:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 20:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:18:03 --> Could not find the language line "Home"
ERROR - 2024-04-17 20:18:16 --> Could not find the language line "assets"
ERROR - 2024-04-17 20:18:16 --> Could not find the language line "assets"
ERROR - 2024-04-17 20:18:16 --> Could not find the language line "assets"
ERROR - 2024-04-17 20:18:16 --> Could not find the language line "assets"
ERROR - 2024-04-17 20:18:16 --> Could not find the language line "assets"
ERROR - 2024-04-17 20:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:21:36 --> Could not find the language line "Home"
ERROR - 2024-04-17 20:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:23:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 20:23:36 --> Could not find the language line "Home"
ERROR - 2024-04-17 20:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:27:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 20:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:31:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 20:31:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 20:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:34:26 --> Could not find the language line "Home"
ERROR - 2024-04-17 20:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:39:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 20:39:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 20:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:42:46 --> Could not find the language line "Home"
ERROR - 2024-04-17 20:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:54:07 --> Could not find the language line "Home"
ERROR - 2024-04-17 20:54:09 --> Could not find the language line "Home"
ERROR - 2024-04-17 20:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:55:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 20:55:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-17 20:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 20:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:11:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 21:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:12:47 --> Could not find the language line "Home"
ERROR - 2024-04-17 21:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:15:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 21:15:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 21:15:49 --> Could not find the language line "Home"
ERROR - 2024-04-17 21:16:13 --> Could not find the language line "Home"
ERROR - 2024-04-17 21:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:17:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 21:17:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 21:17:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 21:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:18:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 21:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 21:18:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 21:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:24:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 21:24:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 21:24:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 21:27:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 21:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:27:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 21:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:30:27 --> Could not find the language line "Home"
ERROR - 2024-04-17 21:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:39:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:39:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:42:53 --> Could not find the language line "Home"
ERROR - 2024-04-17 21:43:01 --> Could not find the language line "products"
ERROR - 2024-04-17 21:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:43:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 21:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:43:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 21:43:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 21:44:37 --> Could not find the language line "Home"
ERROR - 2024-04-17 21:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:45:53 --> Could not find the language line "Other"
ERROR - 2024-04-17 21:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:52:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-17 21:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 21:57:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:05:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 22:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 22:05:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 22:07:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 22:07:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 22:07:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 22:07:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 22:11:01 --> Could not find the language line "Home"
ERROR - 2024-04-17 22:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:11:18 --> Could not find the language line "Perfume"
ERROR - 2024-04-17 22:11:22 --> Could not find the language line "Home"
ERROR - 2024-04-17 22:11:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 22:11:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 22:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:11:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 22:11:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 22:11:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 22:11:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 22:12:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 22:12:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 22:12:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 22:12:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-17 22:12:14 --> Could not find the language line "Home"
ERROR - 2024-04-17 22:12:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:12:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:12:49 --> Could not find the language line "Home"
ERROR - 2024-04-17 22:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:13:19 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:13:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:13:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:13:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:13:45 --> Could not find the language line "Home"
ERROR - 2024-04-17 22:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:15:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 22:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:17:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 22:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:18:23 --> Could not find the language line "Home"
ERROR - 2024-04-17 22:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:22:16 --> Could not find the language line "Home"
ERROR - 2024-04-17 22:22:24 --> Could not find the language line "Home"
ERROR - 2024-04-17 22:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:27:00 --> Could not find the language line "Home"
ERROR - 2024-04-17 22:27:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:27:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:27:11 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:27:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:27:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:27:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:27:53 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:28:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:28:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:28:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:28:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:28:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:28:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:28:51 --> Could not find the language line "Clothing"
ERROR - 2024-04-17 22:28:54 --> Could not find the language line "Home"
ERROR - 2024-04-17 22:31:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 22:31:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 22:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:37:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 22:37:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 22:37:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 22:37:53 --> Could not find the language line "Home"
ERROR - 2024-04-17 22:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:42:48 --> Could not find the language line "Home"
ERROR - 2024-04-17 22:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:47:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 22:47:51 --> Severity: error --> Exception: Too few arguments to function Home::search(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Home.php 108
ERROR - 2024-04-17 22:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:50:34 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-04-17 22:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:54:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 22:54:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 22:54:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 22:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 22:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:03:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 23:04:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-17 23:07:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 23:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:12:51 --> Could not find the language line "Home"
ERROR - 2024-04-17 23:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:19:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 23:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:19:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 23:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:23:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 23:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:23:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 23:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:33:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 23:35:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 23:35:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 23:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:35:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 23:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:35:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 23:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:42:53 --> Could not find the language line "Home"
ERROR - 2024-04-17 23:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:47:27 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-17 23:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:47:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 23:47:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 23:47:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-17 23:47:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-17 23:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:51:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-17 23:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:51:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 23:51:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 23:51:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-17 23:51:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-17 23:52:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-17 23:52:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-17 23:52:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-17 23:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-17 23:55:27 --> 404 Page Not Found: Assets/css
