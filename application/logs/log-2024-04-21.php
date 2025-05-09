<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-21 00:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 00:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 00:02:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 00:06:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 00:06:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 00:10:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 00:13:42 --> Could not find the language line "Home"
ERROR - 2024-04-21 00:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 00:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 00:15:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 00:23:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 00:23:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 00:23:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 00:23:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 00:27:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 00:28:05 --> Could not find the language line "Home"
ERROR - 2024-04-21 00:31:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 00:35:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 00:40:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 00:40:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 00:40:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 00:40:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 00:40:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 00:40:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 00:43:43 --> Could not find the language line "Home"
ERROR - 2024-04-21 00:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 00:44:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 00:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 00:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 00:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 00:48:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 00:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 00:52:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 00:52:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 00:52:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 00:52:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 00:52:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 00:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 00:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 00:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 00:52:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 00:52:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 00:56:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:00:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 01:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:05:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 01:05:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:05:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:05:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:09:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 01:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:13:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:13:45 --> Could not find the language line "Home"
ERROR - 2024-04-21 01:18:21 --> Could not find the language line "Home"
ERROR - 2024-04-21 01:22:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 01:22:51 --> Could not find the language line "Home"
ERROR - 2024-04-21 01:25:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-21 01:25:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-21 01:25:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 01:30:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:30:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:30:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:30:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 01:31:00 --> Could not find the language line "Home"
ERROR - 2024-04-21 01:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:34:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 01:34:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:34:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:39:05 --> Could not find the language line "Home"
ERROR - 2024-04-21 01:41:04 --> Could not find the language line "Home"
ERROR - 2024-04-21 01:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:43:41 --> Could not find the language line "Home"
ERROR - 2024-04-21 01:46:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 01:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:50:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 01:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 01:55:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 01:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:01:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 02:03:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:03:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:05:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 02:05:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 02:05:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 02:07:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 02:11:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 02:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:13:45 --> Could not find the language line "Home"
ERROR - 2024-04-21 02:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:17:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 02:20:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:20:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:24:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:26:35 --> Could not find the language line "Home"
ERROR - 2024-04-21 02:32:13 --> Could not find the language line "Home"
ERROR - 2024-04-21 02:32:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-21 02:32:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-21 02:32:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 02:36:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 02:36:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:36:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:40:21 --> Could not find the language line "Home"
ERROR - 2024-04-21 02:40:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 02:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:40:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 02:43:46 --> Could not find the language line "Home"
ERROR - 2024-04-21 02:44:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 02:44:44 --> Could not find the language line "Home"
ERROR - 2024-04-21 02:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:45:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 02:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:45:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 02:48:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 02:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 02:51:09 --> Could not find the language line "Home"
ERROR - 2024-04-21 02:53:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 02:53:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:53:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 02:57:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 03:01:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 03:01:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 03:05:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 03:09:10 --> Could not find the language line "products"
ERROR - 2024-04-21 03:13:44 --> Could not find the language line "Home"
ERROR - 2024-04-21 03:18:09 --> Could not find the language line "Home"
ERROR - 2024-04-21 03:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 03:19:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 03:22:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 03:22:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 03:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 03:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 03:22:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:22:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:22:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:22:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:22:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:22:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:22:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:27:26 --> Could not find the language line "products"
ERROR - 2024-04-21 03:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 03:32:36 --> Could not find the language line "products"
ERROR - 2024-04-21 03:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 03:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 03:35:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 03:35:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 03:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 03:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 03:43:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 03:43:53 --> Could not find the language line "Home"
ERROR - 2024-04-21 03:45:58 --> Could not find the language line "Home"
ERROR - 2024-04-21 03:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 03:49:09 --> Could not find the language line "Home"
ERROR - 2024-04-21 03:49:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 03:49:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 03:49:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 03:49:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 04:00:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:01:04 --> Could not find the language line "Home"
ERROR - 2024-04-21 04:01:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 04:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:04:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:04:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:08:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:08:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:12:13 --> Could not find the language line "Socks"
ERROR - 2024-04-21 04:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:12:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:12:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:13:46 --> Could not find the language line "Home"
ERROR - 2024-04-21 04:16:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:16:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:17:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 04:17:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:17:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:20:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:20:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:20:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:21:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:21:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 04:25:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 04:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:25:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:25:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:25:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:25:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:25:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 04:25:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:25:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:25:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:25:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:29:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 04:33:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:33:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:33:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:33:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:37:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:37:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:41:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:41:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:41:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:41:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:41:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:41:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:43:46 --> Could not find the language line "Home"
ERROR - 2024-04-21 04:45:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:45:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:50:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:50:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 04:50:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:50:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 04:52:36 --> Could not find the language line "products"
ERROR - 2024-04-21 04:53:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 04:54:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:54:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:55:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 04:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:58:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:58:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 04:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 04:58:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:00:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 05:02:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 05:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:04:03 --> Could not find the language line "Home"
ERROR - 2024-04-21 05:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:10:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-21 05:10:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-21 05:10:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 05:13:26 --> Could not find the language line "Home"
ERROR - 2024-04-21 05:13:48 --> Could not find the language line "Home"
ERROR - 2024-04-21 05:15:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 05:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:15:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 05:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:15:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 05:15:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 05:15:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 05:15:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 05:15:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 05:15:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 05:15:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 05:15:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 05:15:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 05:15:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 05:15:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 05:15:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 05:15:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 05:18:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 05:18:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 05:18:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 05:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:19:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 05:19:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 05:21:37 --> Could not find the language line "Home"
ERROR - 2024-04-21 05:21:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 05:23:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 05:23:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 05:27:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 05:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:27:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 05:31:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-21 05:31:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-21 05:31:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 05:35:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 05:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:35:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 05:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:41:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:43:45 --> Could not find the language line "Home"
ERROR - 2024-04-21 05:44:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 05:49:32 --> Could not find the language line "Home"
ERROR - 2024-04-21 05:50:17 --> Could not find the language line "Home"
ERROR - 2024-04-21 05:50:51 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:51:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:51:20 --> Could not find the language line "Home"
ERROR - 2024-04-21 05:51:23 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:51:29 --> Could not find the language line "Bracelets"
ERROR - 2024-04-21 05:52:02 --> Could not find the language line "Bracelets"
ERROR - 2024-04-21 05:52:15 --> Could not find the language line "Bracelets"
ERROR - 2024-04-21 05:52:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 05:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:52:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 05:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:54:04 --> Could not find the language line "Home"
ERROR - 2024-04-21 05:54:35 --> Could not find the language line "Home"
ERROR - 2024-04-21 05:56:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 05:56:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 05:56:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 05:57:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:57:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:57:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:58:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:58:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:58:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:58:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 05:58:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:58:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:58:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:58:48 --> Could not find the language line "Other"
ERROR - 2024-04-21 05:58:55 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:59:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 05:59:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:59:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 05:59:59 --> Could not find the language line "Home"
ERROR - 2024-04-21 06:00:33 --> Could not find the language line "Perfume"
ERROR - 2024-04-21 06:00:38 --> Could not find the language line "Home"
ERROR - 2024-04-21 06:00:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-21 06:00:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-21 06:00:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-21 06:00:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-21 06:00:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 06:00:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 06:00:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 06:00:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-21 06:00:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-21 06:01:00 --> Could not find the language line "Home"
ERROR - 2024-04-21 06:01:49 --> Could not find the language line "Home"
ERROR - 2024-04-21 06:01:58 --> Could not find the language line "Bracelets"
ERROR - 2024-04-21 06:02:08 --> Could not find the language line "Home"
ERROR - 2024-04-21 06:02:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 06:03:01 --> Could not find the language line "Home"
ERROR - 2024-04-21 06:03:21 --> Could not find the language line "Socks"
ERROR - 2024-04-21 06:03:50 --> Could not find the language line "Home"
ERROR - 2024-04-21 06:04:59 --> Could not find the language line "Home"
ERROR - 2024-04-21 06:05:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-21 06:05:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-21 06:05:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 06:05:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 06:05:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 06:05:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 06:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:06:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 06:06:13 --> Could not find the language line "Home"
ERROR - 2024-04-21 06:06:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 06:06:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 06:06:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 06:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:07:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 06:08:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 06:08:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 06:09:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-21 06:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:09:28 --> Could not find the language line "Perfume"
ERROR - 2024-04-21 06:09:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-21 06:09:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 06:10:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-21 06:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:13:48 --> Could not find the language line "Home"
ERROR - 2024-04-21 06:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:15:51 --> Could not find the language line "Home"
ERROR - 2024-04-21 06:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:17:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 06:17:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 06:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:20:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 06:21:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-21 06:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:21:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 06:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:21:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 06:22:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 06:23:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-21 06:24:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-21 06:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:24:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-21 06:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:30:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 06:34:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 06:38:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 06:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:43:50 --> Could not find the language line "Home"
ERROR - 2024-04-21 06:46:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 06:46:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 06:46:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 06:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:51:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 06:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:55:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 06:55:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 06:59:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 06:59:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 06:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:59:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 06:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 06:59:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 06:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 07:01:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 07:01:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 07:01:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 07:03:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 07:07:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 07:11:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 07:11:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 07:11:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 07:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 07:13:47 --> Could not find the language line "Home"
ERROR - 2024-04-21 07:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 07:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 07:20:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 07:22:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 07:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 07:24:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 07:24:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 07:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 07:32:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-21 07:32:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-21 07:32:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 07:36:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 07:37:08 --> Could not find the language line "Home"
ERROR - 2024-04-21 07:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 07:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 07:43:10 --> Could not find the language line "Home"
ERROR - 2024-04-21 07:43:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 07:43:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 07:43:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 07:43:46 --> Could not find the language line "Home"
ERROR - 2024-04-21 07:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 07:45:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 07:45:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 07:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 07:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 07:50:14 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-21 07:50:16 --> Could not find the language line "products"
ERROR - 2024-04-21 07:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 07:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 07:52:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 07:52:09 --> Could not find the language line "Home"
ERROR - 2024-04-21 07:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 07:53:31 --> Could not find the language line "Home"
ERROR - 2024-04-21 07:55:03 --> Could not find the language line "products"
ERROR - 2024-04-21 07:55:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 07:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:00:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 08:01:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 08:01:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 08:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:09:44 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:13:47 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:14:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 08:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:22:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 08:22:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 08:23:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 08:26:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 08:29:49 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:31:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 08:35:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 08:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:37:19 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-21 08:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:39:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 08:39:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 08:39:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 08:41:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 08:43:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 08:43:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 08:43:47 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:47:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 08:47:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 08:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:48:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:51:37 --> 404 Page Not Found: Products/products
ERROR - 2024-04-21 08:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:51:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 08:52:13 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:52:37 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:53:36 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:54:21 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:54:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 08:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:55:09 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:55:34 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:55:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 08:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:56:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 08:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:57:18 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:57:18 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:57:18 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:57:18 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:57:18 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:57:18 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:57:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 08:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:57:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 08:57:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 08:57:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 08:58:05 --> Could not find the language line "Home"
ERROR - 2024-04-21 08:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 08:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:00:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 09:01:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 09:04:05 --> Could not find the language line "Home"
ERROR - 2024-04-21 09:04:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 09:08:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 09:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:13:47 --> Could not find the language line "Home"
ERROR - 2024-04-21 09:16:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 09:16:22 --> Could not find the language line "Home"
ERROR - 2024-04-21 09:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:20:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 09:20:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 09:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:20:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 09:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:24:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 09:24:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 09:28:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 09:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:28:55 --> Could not find the language line "products"
ERROR - 2024-04-21 09:29:35 --> Could not find the language line "Home"
ERROR - 2024-04-21 09:29:35 --> Could not find the language line "Home"
ERROR - 2024-04-21 09:29:35 --> Could not find the language line "Home"
ERROR - 2024-04-21 09:29:35 --> Could not find the language line "Home"
ERROR - 2024-04-21 09:29:36 --> Could not find the language line "Home"
ERROR - 2024-04-21 09:29:36 --> Could not find the language line "Home"
ERROR - 2024-04-21 09:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:32:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 09:32:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 09:32:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 09:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:32:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 09:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:36:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 09:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:36:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 09:36:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 09:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:42:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:43:50 --> Could not find the language line "Home"
ERROR - 2024-04-21 09:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:52:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 09:53:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 09:53:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 09:53:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 09:54:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 09:56:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 09:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 09:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:00:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 10:02:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 10:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:04:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 10:05:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:07:19 --> Could not find the language line "Home"
ERROR - 2024-04-21 10:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:12:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 10:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:13:48 --> Could not find the language line "Home"
ERROR - 2024-04-21 10:16:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 10:16:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 10:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:18:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:20:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 10:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:24:39 --> Could not find the language line "Home"
ERROR - 2024-04-21 10:24:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 10:24:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 10:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:26:59 --> Could not find the language line "Home"
ERROR - 2024-04-21 10:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:28:39 --> Could not find the language line "Home"
ERROR - 2024-04-21 10:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:28:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 10:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:29:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-21 10:29:14 --> Could not find the language line "Home"
ERROR - 2024-04-21 10:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:29:28 --> Could not find the language line "Home"
ERROR - 2024-04-21 10:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:33:20 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-21 10:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:36:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 10:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:40:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 10:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:42:24 --> Could not find the language line "products"
ERROR - 2024-04-21 10:43:48 --> Could not find the language line "Home"
ERROR - 2024-04-21 10:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:44:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 10:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:45:32 --> Could not find the language line "Home"
ERROR - 2024-04-21 10:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:45:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:46:04 --> Could not find the language line "Home"
ERROR - 2024-04-21 10:46:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:46:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:46:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:47:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:47:23 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:47:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:47:58 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:48:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:48:16 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-21 10:48:31 --> Could not find the language line "Home"
ERROR - 2024-04-21 10:48:31 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-21 10:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:48:43 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-21 10:48:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 10:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:49:04 --> Could not find the language line "Home"
ERROR - 2024-04-21 10:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:51:52 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-21 10:52:04 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-21 10:52:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 10:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:55:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:55:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:55:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:55:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:55:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:56:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:56:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:56:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 10:56:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:56:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 10:57:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:57:13 --> Could not find the language line "Other"
ERROR - 2024-04-21 10:57:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:57:53 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:57:56 --> Query error: Column 'customer_id' cannot be null - Invalid query: INSERT INTO `orders` (`auto_no`, `customer_id`, `order_date`, `value_date`, `currency_id`, `currency_rate`, `description`, `status`, `coupon_id`, `discount`, `address`, `delivery_charge`, `otp`, `gest`) VALUES (374, NULL, '2024-04-21', NULL, '8', 1, 'Nabil Sardouk.\r\nPlease call on mobile to give you address by phone.', 'Received & Pending Approval', NULL, '0', 'LB-Mar Elias-Tal3et Center AlMakased near Matahen Hassouneh -Abdulbaset fakhoury-Burj AlNasseem-4-At end of Same street of Matahen Hassouneh ', '3.5', NULL, NULL)
ERROR - 2024-04-21 10:58:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:58:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-21 10:58:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-21 10:59:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-21 10:59:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 10:59:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-21 10:59:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 10:59:11 --> Could not find the language line "Home"
ERROR - 2024-04-21 10:59:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-21 10:59:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-21 10:59:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 10:59:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:59:35 --> Could not find the language line "Socks"
ERROR - 2024-04-21 10:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 10:59:42 --> Could not find the language line "Socks"
ERROR - 2024-04-21 10:59:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 10:59:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-21 10:59:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-21 10:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:00:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 11:00:19 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 11:00:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-21 11:00:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-21 11:00:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 11:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:00:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-21 11:00:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-21 11:00:51 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 11:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:00:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 11:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:00:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 11:00:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 11:00:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 11:00:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 11:00:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 11:00:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 11:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:00:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-21 11:00:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-21 11:00:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 11:01:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 11:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:02:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 11:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:04:14 --> Could not find the language line "Home"
ERROR - 2024-04-21 11:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:04:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 11:06:56 --> Could not find the language line "Home"
ERROR - 2024-04-21 11:08:03 --> Could not find the language line "Home"
ERROR - 2024-04-21 11:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:08:56 --> Could not find the language line "Home"
ERROR - 2024-04-21 11:08:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 11:08:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 11:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:10:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:11:24 --> Could not find the language line "Other"
ERROR - 2024-04-21 11:11:46 --> Could not find the language line "Other"
ERROR - 2024-04-21 11:12:05 --> Could not find the language line "Other"
ERROR - 2024-04-21 11:12:26 --> Could not find the language line "Bracelets"
ERROR - 2024-04-21 11:12:37 --> Could not find the language line "Bracelets"
ERROR - 2024-04-21 11:12:47 --> Could not find the language line "Home"
ERROR - 2024-04-21 11:12:48 --> Could not find the language line "Home"
ERROR - 2024-04-21 11:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:12:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 11:12:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 11:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:13:29 --> Could not find the language line "products"
ERROR - 2024-04-21 11:13:50 --> Could not find the language line "Home"
ERROR - 2024-04-21 11:14:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 11:14:36 --> Could not find the language line "Perfume"
ERROR - 2024-04-21 11:14:44 --> Could not find the language line "Perfume"
ERROR - 2024-04-21 11:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:16:06 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-04-21 11:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:16:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 11:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:17:59 --> Could not find the language line "assets"
ERROR - 2024-04-21 11:17:59 --> Could not find the language line "assets"
ERROR - 2024-04-21 11:17:59 --> Could not find the language line "assets"
ERROR - 2024-04-21 11:17:59 --> Could not find the language line "assets"
ERROR - 2024-04-21 11:17:59 --> Could not find the language line "assets"
ERROR - 2024-04-21 11:20:17 --> Could not find the language line "Home"
ERROR - 2024-04-21 11:20:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 11:20:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 11:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:20:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 11:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:21:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 11:24:02 --> Could not find the language line "Home"
ERROR - 2024-04-21 11:24:07 --> Could not find the language line "Home"
ERROR - 2024-04-21 11:24:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 11:24:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 11:28:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 11:28:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 11:32:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 11:36:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 11:40:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 11:43:50 --> Could not find the language line "Home"
ERROR - 2024-04-21 11:44:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 11:45:06 --> Could not find the language line "Home"
ERROR - 2024-04-21 11:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:52:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-21 11:52:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-21 11:52:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 11:56:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 11:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 11:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:00:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:03:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 12:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:05:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:09:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:09:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 12:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:10:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 12:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:12:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:13:50 --> Could not find the language line "Home"
ERROR - 2024-04-21 12:17:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:21:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:25:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:25:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:25:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 12:29:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:32:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 12:33:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:37:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:41:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 12:43:49 --> Could not find the language line "Home"
ERROR - 2024-04-21 12:45:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:49:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:49:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:53:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:53:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 12:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 12:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:01:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:05:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:09:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:09:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:10:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 13:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:10:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 13:10:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 13:10:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 13:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:11:55 --> Could not find the language line "Home"
ERROR - 2024-04-21 13:12:16 --> Could not find the language line "Home"
ERROR - 2024-04-21 13:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:13:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:13:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:13:50 --> Could not find the language line "Home"
ERROR - 2024-04-21 13:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:15:38 --> Could not find the language line "Home"
ERROR - 2024-04-21 13:17:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:17:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 13:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:21:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:24:29 --> Could not find the language line "Home"
ERROR - 2024-04-21 13:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:25:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:25:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 13:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:27:11 --> Could not find the language line "Home"
ERROR - 2024-04-21 13:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:29:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:29:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:30:53 --> Could not find the language line "products"
ERROR - 2024-04-21 13:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:33:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:33:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:37:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:39:46 --> Could not find the language line "Home"
ERROR - 2024-04-21 13:39:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 13:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:40:08 --> Could not find the language line "Home"
ERROR - 2024-04-21 13:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:41:08 --> Could not find the language line "Home"
ERROR - 2024-04-21 13:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:41:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:41:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:41:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:41:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:41:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-21 13:42:28 --> Could not find the language line "Home"
ERROR - 2024-04-21 13:43:53 --> Could not find the language line "Home"
ERROR - 2024-04-21 13:44:21 --> Could not find the language line "Home"
ERROR - 2024-04-21 13:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:45:08 --> Could not find the language line "Other"
ERROR - 2024-04-21 13:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:45:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:45:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:45:13 --> Could not find the language line "Home"
ERROR - 2024-04-21 13:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:49:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 13:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:51:52 --> 404 Page Not Found: Products/products
ERROR - 2024-04-21 13:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:53:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-21 13:53:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-21 13:53:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 13:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:55:02 --> Could not find the language line "Home"
ERROR - 2024-04-21 13:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 13:57:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 14:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:05:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 14:09:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 14:10:00 --> Could not find the language line "Home"
ERROR - 2024-04-21 14:11:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 14:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:13:51 --> Could not find the language line "Home"
ERROR - 2024-04-21 14:14:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 14:17:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 14:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:17:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 14:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:18:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 14:18:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 14:21:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 14:25:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 14:28:31 --> Could not find the language line "Home"
ERROR - 2024-04-21 14:29:25 --> Could not find the language line "Home"
ERROR - 2024-04-21 14:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:33:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 14:33:57 --> Could not find the language line "Home"
ERROR - 2024-04-21 14:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:35:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 14:35:53 --> Could not find the language line "Home"
ERROR - 2024-04-21 14:35:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 14:36:00 --> Could not find the language line "Home"
ERROR - 2024-04-21 14:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:43:52 --> Could not find the language line "Home"
ERROR - 2024-04-21 14:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 14:45:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 14:45:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 14:49:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 14:49:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 14:49:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 14:53:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 14:57:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 15:01:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 15:05:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 15:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 15:09:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 15:09:57 --> Could not find the language line "Bracelets"
ERROR - 2024-04-21 15:10:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 15:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 15:12:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 15:13:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 15:13:51 --> Could not find the language line "Home"
ERROR - 2024-04-21 15:17:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 15:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 15:21:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-21 15:21:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-21 15:21:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 15:25:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 15:29:20 --> Could not find the language line "Home"
ERROR - 2024-04-21 15:29:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 15:29:40 --> Could not find the language line "Home"
ERROR - 2024-04-21 15:29:42 --> Could not find the language line "Home"
ERROR - 2024-04-21 15:29:45 --> Could not find the language line "Home"
ERROR - 2024-04-21 15:32:15 --> Could not find the language line "Home"
ERROR - 2024-04-21 15:33:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 15:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 15:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 15:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 15:34:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 15:37:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 15:41:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 15:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 15:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 15:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 15:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 15:43:50 --> Could not find the language line "Home"
ERROR - 2024-04-21 15:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 15:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 15:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 15:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 15:45:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 15:57:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 15:57:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 15:57:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 16:01:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 16:01:27 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 16:03:04 --> Could not find the language line "Home"
ERROR - 2024-04-21 16:05:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 16:07:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 16:07:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 16:07:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 16:11:13 --> Could not find the language line "Home"
ERROR - 2024-04-21 16:13:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 16:13:52 --> Could not find the language line "Home"
ERROR - 2024-04-21 16:14:48 --> Could not find the language line "products"
ERROR - 2024-04-21 16:16:43 --> Could not find the language line "Home"
ERROR - 2024-04-21 16:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:17:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 16:18:27 --> Could not find the language line "products"
ERROR - 2024-04-21 16:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:20:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 16:20:10 --> Could not find the language line "Home"
ERROR - 2024-04-21 16:20:15 --> Could not find the language line "Home"
ERROR - 2024-04-21 16:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:23:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 16:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:26:41 --> Could not find the language line "Home"
ERROR - 2024-04-21 16:26:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-21 16:26:53 --> Could not find the language line "Home"
ERROR - 2024-04-21 16:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:31:08 --> Could not find the language line "Home"
ERROR - 2024-04-21 16:32:16 --> Could not find the language line "Home"
ERROR - 2024-04-21 16:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:34:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 16:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:43:53 --> Could not find the language line "Home"
ERROR - 2024-04-21 16:45:01 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=3214431 &amp;text=7683%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 131
ERROR - 2024-04-21 16:45:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2024-04-21 16:45:11 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=3214431 &amp;text=9957%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 131
ERROR - 2024-04-21 16:45:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2024-04-21 16:45:25 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=3214431 &amp;text=8663%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 131
ERROR - 2024-04-21 16:45:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2024-04-21 16:45:29 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=3214431 &amp;text=2107%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 131
ERROR - 2024-04-21 16:45:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2024-04-21 16:45:30 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=3214431 &amp;text=7138%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 131
ERROR - 2024-04-21 16:45:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2024-04-21 16:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:45:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 16:45:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 16:45:31 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=3214431 &amp;text=4737%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 131
ERROR - 2024-04-21 16:45:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2024-04-21 16:47:09 --> Could not find the language line "Home"
ERROR - 2024-04-21 16:48:44 --> Could not find the language line "Home"
ERROR - 2024-04-21 16:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:49:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 16:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:49:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 16:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 16:56:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 17:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:01:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 17:04:49 --> Could not find the language line "Perfume"
ERROR - 2024-04-21 17:04:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 17:06:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 17:06:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 17:06:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 17:08:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 17:09:11 --> Could not find the language line "Home"
ERROR - 2024-04-21 17:09:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-21 17:09:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-21 17:09:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 17:11:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 17:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:13:39 --> Could not find the language line "Home"
ERROR - 2024-04-21 17:13:53 --> Could not find the language line "Home"
ERROR - 2024-04-21 17:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:17:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 17:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:17:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 17:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:18:46 --> Could not find the language line "Home"
ERROR - 2024-04-21 17:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:20:18 --> Could not find the language line "Home"
ERROR - 2024-04-21 17:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:21:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 17:21:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 17:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:29:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 17:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:33:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 17:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:33:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 17:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:33:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 17:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:34:24 --> Could not find the language line "accounts"
ERROR - 2024-04-21 17:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:35:02 --> Could not find the language line "products"
ERROR - 2024-04-21 17:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:36:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 17:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:37:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 17:37:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 17:43:52 --> Could not find the language line "Home"
ERROR - 2024-04-21 17:49:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 17:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:49:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 17:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:49:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 17:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:53:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 17:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:53:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 17:53:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 17:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 17:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:02:50 --> Could not find the language line "Home"
ERROR - 2024-04-21 18:03:10 --> Could not find the language line "Bracelets"
ERROR - 2024-04-21 18:04:01 --> Could not find the language line "Bracelets"
ERROR - 2024-04-21 18:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:04:50 --> Could not find the language line "Bracelets"
ERROR - 2024-04-21 18:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:05:19 --> Could not find the language line "Bracelets"
ERROR - 2024-04-21 18:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:05:31 --> Could not find the language line "Bracelets"
ERROR - 2024-04-21 18:05:36 --> Could not find the language line "Bracelets"
ERROR - 2024-04-21 18:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:05:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 18:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:05:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 18:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:09:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 18:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:12:37 --> Could not find the language line "Socks"
ERROR - 2024-04-21 18:13:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 18:13:53 --> Could not find the language line "Home"
ERROR - 2024-04-21 18:16:40 --> Could not find the language line "Home"
ERROR - 2024-04-21 18:16:40 --> Could not find the language line "Home"
ERROR - 2024-04-21 18:17:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 18:18:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 18:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:21:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 18:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:22:46 --> Could not find the language line "Home"
ERROR - 2024-04-21 18:25:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 18:26:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 18:26:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 18:26:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 18:28:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 18:28:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 18:28:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 18:29:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 18:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:33:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 18:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:37:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 18:39:39 --> Could not find the language line "Home"
ERROR - 2024-04-21 18:41:05 --> Could not find the language line "Home"
ERROR - 2024-04-21 18:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:41:29 --> Could not find the language line "Home"
ERROR - 2024-04-21 18:41:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 18:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:43:53 --> Could not find the language line "Home"
ERROR - 2024-04-21 18:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:44:36 --> Could not find the language line "Home"
ERROR - 2024-04-21 18:45:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 18:45:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 18:45:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 18:45:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 18:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:45:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 18:49:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-21 18:49:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-21 18:49:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 18:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:52:36 --> Could not find the language line "Home"
ERROR - 2024-04-21 18:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:57:11 --> Could not find the language line "Home"
ERROR - 2024-04-21 18:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 18:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:04:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 19:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:05:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 19:05:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 19:05:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 19:05:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 19:05:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 19:09:11 --> Could not find the language line "Home"
ERROR - 2024-04-21 19:09:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:13:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:13:54 --> Could not find the language line "Home"
ERROR - 2024-04-21 19:14:14 --> Could not find the language line "Home"
ERROR - 2024-04-21 19:16:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 19:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:17:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:17:53 --> Could not find the language line "Home"
ERROR - 2024-04-21 19:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:18:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 19:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:19:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 19:19:57 --> Could not find the language line "Home"
ERROR - 2024-04-21 19:20:42 --> Could not find the language line "products"
ERROR - 2024-04-21 19:21:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 19:21:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:24:54 --> Could not find the language line "Home"
ERROR - 2024-04-21 19:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:25:17 --> Could not find the language line "Home"
ERROR - 2024-04-21 19:25:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:25:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:25:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:26:19 --> Could not find the language line "products"
ERROR - 2024-04-21 19:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:28:01 --> Could not find the language line "Home"
ERROR - 2024-04-21 19:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:29:13 --> Could not find the language line "Home"
ERROR - 2024-04-21 19:29:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:33:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:33:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:37:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 19:37:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:41:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:41:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:42:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 19:43:55 --> Could not find the language line "Home"
ERROR - 2024-04-21 19:45:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:48:31 --> Could not find the language line "Home"
ERROR - 2024-04-21 19:49:08 --> Could not find the language line "Home"
ERROR - 2024-04-21 19:49:08 --> Could not find the language line "Home"
ERROR - 2024-04-21 19:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 19:51:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 19:53:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-21 19:53:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-21 19:53:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 19:57:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 19:57:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 19:57:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 19:57:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 19:59:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 20:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:01:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 20:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:07:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 20:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:09:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 20:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:13:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 20:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:13:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 20:13:57 --> Could not find the language line "Home"
ERROR - 2024-04-21 20:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:17:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 20:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:19:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 20:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:21:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 20:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:25:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 20:26:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 20:26:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 20:26:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 20:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:30:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 20:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:33:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 20:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:41:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 20:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:41:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 20:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:43:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 20:43:55 --> Could not find the language line "Home"
ERROR - 2024-04-21 20:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:50:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 20:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:50:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 20:50:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 20:52:53 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-21 20:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:54:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 20:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 20:57:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 20:58:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 20:58:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 20:58:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 21:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:06:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:06:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:06:03 --> Could not find the language line "Home"
ERROR - 2024-04-21 21:06:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-21 21:06:37 --> Could not find the language line "Home"
ERROR - 2024-04-21 21:07:34 --> Could not find the language line "Socks"
ERROR - 2024-04-21 21:08:14 --> Could not find the language line "Home"
ERROR - 2024-04-21 21:08:31 --> Could not find the language line "Home"
ERROR - 2024-04-21 21:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:10:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:12:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 21:13:55 --> Could not find the language line "Home"
ERROR - 2024-04-21 21:14:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:18:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:18:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:22:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:22:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 21:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:26:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:29:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 21:30:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:34:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 21:35:58 --> Could not find the language line "Perfume"
ERROR - 2024-04-21 21:38:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:38:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:42:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:42:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:42:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:43:39 --> Could not find the language line "Home"
ERROR - 2024-04-21 21:43:40 --> Could not find the language line "Home"
ERROR - 2024-04-21 21:44:00 --> Could not find the language line "Home"
ERROR - 2024-04-21 21:44:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 21:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:50:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:50:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:53:26 --> Could not find the language line "products"
ERROR - 2024-04-21 21:54:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 21:54:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 21:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:02:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:03:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 22:03:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 22:03:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 22:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:06:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:06:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:07:09 --> Could not find the language line "Home"
ERROR - 2024-04-21 22:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:10:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:13:57 --> Could not find the language line "Home"
ERROR - 2024-04-21 22:14:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:14:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 22:14:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-21 22:14:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:18:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:22:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:22:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:22:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 22:22:36 --> Could not find the language line "products"
ERROR - 2024-04-21 22:25:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 22:25:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 22:26:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:26:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:26:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 22:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:34:08 --> Could not find the language line "Perfume"
ERROR - 2024-04-21 22:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:34:29 --> 404 Page Not Found: Storage/settings
ERROR - 2024-04-21 22:35:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-21 22:35:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-21 22:35:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-21 22:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:38:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:38:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:42:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:44:00 --> Could not find the language line "Home"
ERROR - 2024-04-21 22:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:46:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:46:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 22:46:25 --> Could not find the language line "Home"
ERROR - 2024-04-21 22:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:54:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:54:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:54:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:54:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 22:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:58:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 22:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 22:58:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 23:02:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 23:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:10:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 23:10:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 23:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:13:59 --> Could not find the language line "Home"
ERROR - 2024-04-21 23:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:14:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-21 23:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:26:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 23:26:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 23:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:26:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 23:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:30:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 23:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:34:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 23:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:44:05 --> Could not find the language line "Home"
ERROR - 2024-04-21 23:46:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 23:48:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-21 23:50:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-21 23:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-21 23:54:16 --> Could not find the language line "Home"
ERROR - 2024-04-21 23:54:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 23:54:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 23:58:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-21 23:58:23 --> 404 Page Not Found: Assets/css
