<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-23 00:18:55 --> Could not find the language line "Home"
ERROR - 2024-08-23 00:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 00:46:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-08-23 00:46:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-08-23 00:46:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-23 00:48:55 --> Could not find the language line "Home"
ERROR - 2024-08-23 00:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 00:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 01:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 01:18:55 --> Could not find the language line "Home"
ERROR - 2024-08-23 01:23:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-08-23 01:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-08-23 01:23:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-23 01:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 01:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 01:48:55 --> Could not find the language line "Home"
ERROR - 2024-08-23 01:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 02:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 02:18:56 --> Could not find the language line "Home"
ERROR - 2024-08-23 02:34:02 --> Could not find the language line "users"
ERROR - 2024-08-23 02:42:13 --> Could not find the language line "Home"
ERROR - 2024-08-23 02:46:32 --> Could not find the language line "Home"
ERROR - 2024-08-23 02:48:57 --> Could not find the language line "Home"
ERROR - 2024-08-23 03:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 03:05:03 --> Could not find the language line "Socks"
ERROR - 2024-08-23 03:18:57 --> Could not find the language line "Home"
ERROR - 2024-08-23 03:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 03:48:57 --> Could not find the language line "Home"
ERROR - 2024-08-23 03:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 04:04:15 --> Could not find the language line "Home"
ERROR - 2024-08-23 04:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 04:18:57 --> Could not find the language line "Home"
ERROR - 2024-08-23 04:19:16 --> Could not find the language line "products"
ERROR - 2024-08-23 04:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 04:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 04:48:58 --> Could not find the language line "Home"
ERROR - 2024-08-23 04:54:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-08-23 04:54:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-08-23 04:54:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-23 05:06:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 05:12:09 --> Could not find the language line "Home"
ERROR - 2024-08-23 05:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 05:18:58 --> Could not find the language line "Home"
ERROR - 2024-08-23 05:21:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-23 05:21:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-23 05:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 05:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 05:48:59 --> Could not find the language line "Home"
ERROR - 2024-08-23 05:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 06:01:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-08-23 06:01:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-08-23 06:01:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-23 06:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 06:18:59 --> Could not find the language line "Home"
ERROR - 2024-08-23 06:25:10 --> Could not find the language line "Home"
ERROR - 2024-08-23 06:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 06:36:02 --> Could not find the language line "Socks"
ERROR - 2024-08-23 06:46:25 --> Could not find the language line "Home"
ERROR - 2024-08-23 06:48:59 --> Could not find the language line "Home"
ERROR - 2024-08-23 06:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:18:59 --> Could not find the language line "Home"
ERROR - 2024-08-23 07:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:29:55 --> Could not find the language line "Clothing"
ERROR - 2024-08-23 07:30:05 --> Could not find the language line "Clothing"
ERROR - 2024-08-23 07:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:38:03 --> Could not find the language line "Bracelets"
ERROR - 2024-08-23 07:39:38 --> Could not find the language line "Home"
ERROR - 2024-08-23 07:39:39 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-08-23 07:39:39 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-08-23 07:39:39 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-08-23 07:39:40 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-08-23 07:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:42:17 --> Could not find the language line "Home"
ERROR - 2024-08-23 07:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:48:22 --> Could not find the language line "Home"
ERROR - 2024-08-23 07:48:32 --> Could not find the language line "Bracelets"
ERROR - 2024-08-23 07:49:00 --> Could not find the language line "Home"
ERROR - 2024-08-23 07:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:49:56 --> Could not find the language line "Socks"
ERROR - 2024-08-23 07:50:50 --> Could not find the language line "Home"
ERROR - 2024-08-23 07:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 07:53:05 --> Could not find the language line "Home"
ERROR - 2024-08-23 08:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 08:11:26 --> Could not find the language line "products"
ERROR - 2024-08-23 08:19:00 --> Could not find the language line "Home"
ERROR - 2024-08-23 08:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 08:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 08:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 08:49:01 --> Could not find the language line "Home"
ERROR - 2024-08-23 09:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:15:54 --> Could not find the language line "Home"
ERROR - 2024-08-23 09:15:55 --> Could not find the language line "Home"
ERROR - 2024-08-23 09:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:16:27 --> Could not find the language line "Clothing"
ERROR - 2024-08-23 09:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:19:01 --> Could not find the language line "Home"
ERROR - 2024-08-23 09:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:45:16 --> Could not find the language line "Home"
ERROR - 2024-08-23 09:46:26 --> Could not find the language line "Home"
ERROR - 2024-08-23 09:46:33 --> Could not find the language line "Bracelets"
ERROR - 2024-08-23 09:46:37 --> Could not find the language line "Home"
ERROR - 2024-08-23 09:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 09:49:02 --> Could not find the language line "Home"
ERROR - 2024-08-23 10:17:36 --> Could not find the language line "Home"
ERROR - 2024-08-23 10:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:19:02 --> Could not find the language line "Home"
ERROR - 2024-08-23 10:20:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-08-23 10:20:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-08-23 10:20:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-23 10:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:22:01 --> Could not find the language line "Socks"
ERROR - 2024-08-23 10:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:31:59 --> Could not find the language line "Home"
ERROR - 2024-08-23 10:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:49:03 --> Could not find the language line "Home"
ERROR - 2024-08-23 10:53:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-08-23 10:53:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-08-23 10:53:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-23 10:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 10:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 11:11:31 --> Could not find the language line "Clothing"
ERROR - 2024-08-23 11:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 11:19:03 --> Could not find the language line "Home"
ERROR - 2024-08-23 11:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 11:35:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-23 11:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 11:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 11:49:03 --> Could not find the language line "Home"
ERROR - 2024-08-23 11:57:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-23 11:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-23 11:57:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-23 11:57:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-23 11:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-23 11:57:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-23 11:57:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-23 11:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-23 11:57:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-23 11:57:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-23 11:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-23 11:57:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-23 12:02:26 --> Could not find the language line "Home"
ERROR - 2024-08-23 12:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 12:14:31 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-23 12:14:58 --> Could not find the language line "Home"
ERROR - 2024-08-23 12:19:04 --> Could not find the language line "Home"
ERROR - 2024-08-23 12:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 12:26:43 --> Could not find the language line "Home"
ERROR - 2024-08-23 12:26:43 --> Could not find the language line "Home"
ERROR - 2024-08-23 12:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 12:35:52 --> Could not find the language line "Home"
ERROR - 2024-08-23 12:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 12:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 12:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 12:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 12:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 12:49:04 --> Could not find the language line "Home"
ERROR - 2024-08-23 13:01:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-08-23 13:01:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-08-23 13:01:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-23 13:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 13:16:16 --> Could not find the language line "Home"
ERROR - 2024-08-23 13:19:04 --> Could not find the language line "Home"
ERROR - 2024-08-23 13:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 13:24:02 --> Could not find the language line "Home"
ERROR - 2024-08-23 13:24:14 --> Could not find the language line "Socks"
ERROR - 2024-08-23 13:25:04 --> Could not find the language line "Other"
ERROR - 2024-08-23 13:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 13:38:49 --> Could not find the language line "Home"
ERROR - 2024-08-23 13:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 13:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 13:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 13:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 13:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 13:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 13:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 13:49:04 --> Could not find the language line "Home"
ERROR - 2024-08-23 13:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 14:19:05 --> Could not find the language line "Home"
ERROR - 2024-08-23 14:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 14:29:41 --> Could not find the language line "Home"
ERROR - 2024-08-23 14:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 14:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 14:35:13 --> Could not find the language line "Home"
ERROR - 2024-08-23 14:35:48 --> Could not find the language line "Home"
ERROR - 2024-08-23 14:35:53 --> Could not find the language line "Home"
ERROR - 2024-08-23 14:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 14:44:10 --> Could not find the language line "Home"
ERROR - 2024-08-23 14:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 14:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 14:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 14:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 14:47:48 --> Could not find the language line "Home"
ERROR - 2024-08-23 14:47:52 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-23 14:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 14:48:19 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-23 14:48:24 --> Could not find the language line "Home"
ERROR - 2024-08-23 14:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 14:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 14:49:08 --> Could not find the language line "Home"
ERROR - 2024-08-23 14:49:22 --> Could not find the language line "Home"
ERROR - 2024-08-23 14:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 14:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 14:59:43 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-08-23 15:01:00 --> Could not find the language line "Home"
ERROR - 2024-08-23 15:01:23 --> Could not find the language line "Other"
ERROR - 2024-08-23 15:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 15:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 15:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 15:08:28 --> Could not find the language line "Home"
ERROR - 2024-08-23 15:08:33 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-23 15:08:38 --> Could not find the language line "Home"
ERROR - 2024-08-23 15:09:50 --> Could not find the language line "Home"
ERROR - 2024-08-23 15:09:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-23 15:09:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-23 15:10:07 --> Could not find the language line "Home"
ERROR - 2024-08-23 15:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 15:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 15:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 15:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 15:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 15:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 15:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 15:19:05 --> Could not find the language line "Home"
ERROR - 2024-08-23 15:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 15:29:42 --> Could not find the language line "Home"
ERROR - 2024-08-23 15:30:57 --> Could not find the language line "Home"
ERROR - 2024-08-23 15:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 15:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 15:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 15:49:06 --> Could not find the language line "Home"
ERROR - 2024-08-23 15:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 16:10:20 --> Could not find the language line "Home"
ERROR - 2024-08-23 16:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 16:10:30 --> Could not find the language line "Home"
ERROR - 2024-08-23 16:11:15 --> Could not find the language line "Home"
ERROR - 2024-08-23 16:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 16:16:07 --> Could not find the language line "Home"
ERROR - 2024-08-23 16:16:39 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-23 16:17:45 --> Could not find the language line "Home"
ERROR - 2024-08-23 16:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 16:19:06 --> Could not find the language line "Home"
ERROR - 2024-08-23 16:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 16:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 16:37:20 --> Could not find the language line "Home"
ERROR - 2024-08-23 16:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 16:38:14 --> Could not find the language line "Home"
ERROR - 2024-08-23 16:38:19 --> Could not find the language line "Home"
ERROR - 2024-08-23 16:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 16:49:07 --> Could not find the language line "Home"
ERROR - 2024-08-23 16:50:03 --> Could not find the language line "Home"
ERROR - 2024-08-23 16:50:04 --> Could not find the language line "Home"
ERROR - 2024-08-23 16:50:04 --> Could not find the language line "Home"
ERROR - 2024-08-23 16:50:05 --> 404 Page Not Found: Wp-admin/index
ERROR - 2024-08-23 16:58:09 --> Could not find the language line "Home"
ERROR - 2024-08-23 16:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 16:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 17:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 17:13:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-23 17:13:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-23 17:18:16 --> Could not find the language line "Home"
ERROR - 2024-08-23 17:18:22 --> Could not find the language line "Home"
ERROR - 2024-08-23 17:19:07 --> Could not find the language line "Home"
ERROR - 2024-08-23 17:19:24 --> Could not find the language line "Home"
ERROR - 2024-08-23 17:19:24 --> Could not find the language line "Home"
ERROR - 2024-08-23 17:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 17:38:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-23 17:38:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-23 17:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 17:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 17:48:39 --> Could not find the language line "Home"
ERROR - 2024-08-23 17:49:07 --> Could not find the language line "Home"
ERROR - 2024-08-23 17:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 17:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 17:56:29 --> Could not find the language line "Home"
ERROR - 2024-08-23 17:56:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-23 17:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 18:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 18:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 18:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 18:06:25 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-08-23 18:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 18:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 18:10:15 --> Could not find the language line "Home"
ERROR - 2024-08-23 18:10:16 --> Could not find the language line "Home"
ERROR - 2024-08-23 18:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 18:18:44 --> Could not find the language line "Home"
ERROR - 2024-08-23 18:19:08 --> Could not find the language line "Home"
ERROR - 2024-08-23 18:22:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-08-23 18:22:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-08-23 18:22:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-08-23 18:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 18:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 18:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 18:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 18:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 18:49:08 --> Could not find the language line "Home"
ERROR - 2024-08-23 18:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 18:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 19:19:09 --> Could not find the language line "Home"
ERROR - 2024-08-23 19:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 19:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 19:28:07 --> Could not find the language line "Socks"
ERROR - 2024-08-23 19:32:07 --> Could not find the language line "Home"
ERROR - 2024-08-23 19:32:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-23 19:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 19:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 19:49:09 --> Could not find the language line "Home"
ERROR - 2024-08-23 20:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 20:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 20:16:54 --> Could not find the language line "Home"
ERROR - 2024-08-23 20:17:53 --> Could not find the language line "Home"
ERROR - 2024-08-23 20:17:58 --> Could not find the language line "Home"
ERROR - 2024-08-23 20:17:58 --> Could not find the language line "Home"
ERROR - 2024-08-23 20:19:09 --> Could not find the language line "Home"
ERROR - 2024-08-23 20:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 20:49:09 --> Could not find the language line "Home"
ERROR - 2024-08-23 21:19:10 --> Could not find the language line "Home"
ERROR - 2024-08-23 21:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 21:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 21:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 21:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 21:47:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-23 21:49:10 --> Could not find the language line "Home"
ERROR - 2024-08-23 22:09:58 --> Could not find the language line "Home"
ERROR - 2024-08-23 22:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 22:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 22:19:11 --> Could not find the language line "Home"
ERROR - 2024-08-23 22:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 22:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 22:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 22:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-23 22:49:11 --> Could not find the language line "Home"
ERROR - 2024-08-23 23:16:42 --> Could not find the language line "Home"
ERROR - 2024-08-23 23:17:19 --> Could not find the language line "Socks"
ERROR - 2024-08-23 23:19:11 --> Could not find the language line "Home"
ERROR - 2024-08-23 23:49:12 --> Could not find the language line "Home"
