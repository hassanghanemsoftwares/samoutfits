<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-23 00:04:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:04:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:04:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:05:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:05:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:08:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:08:42 --> Could not find the language line "Socks"
ERROR - 2024-05-23 00:08:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 00:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:09:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:09:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:09:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 00:09:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 00:09:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 00:09:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 00:09:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 00:09:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 00:09:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 00:09:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 00:09:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 00:09:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 00:09:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 00:10:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:10:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:12:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:12:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:15:49 --> Could not find the language line "Home"
ERROR - 2024-05-23 00:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:15:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:15:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:19:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:20:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:20:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:23:16 --> Could not find the language line "Home"
ERROR - 2024-05-23 00:23:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:23:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:24:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:24:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:24:35 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 00:25:46 --> Could not find the language line "Other"
ERROR - 2024-05-23 00:25:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 00:31:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 00:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:37:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 00:37:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 00:37:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 00:38:03 --> Could not find the language line "Home"
ERROR - 2024-05-23 00:38:47 --> Could not find the language line "Home"
ERROR - 2024-05-23 00:45:41 --> Could not find the language line "Home"
ERROR - 2024-05-23 00:47:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 00:49:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 00:49:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 00:49:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 00:51:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 00:51:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 00:53:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 00:55:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 00:59:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 00:59:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 01:02:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 01:02:39 --> Could not find the language line "Home"
ERROR - 2024-05-23 01:04:36 --> 404 Page Not Found: Users/products
ERROR - 2024-05-23 01:04:43 --> Could not find the language line "Home"
ERROR - 2024-05-23 01:06:39 --> Could not find the language line "Home"
ERROR - 2024-05-23 01:08:51 --> Could not find the language line "Home"
ERROR - 2024-05-23 01:08:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 01:09:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 01:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 01:15:47 --> Could not find the language line "Home"
ERROR - 2024-05-23 01:20:25 --> Could not find the language line "Home"
ERROR - 2024-05-23 01:22:22 --> Could not find the language line "accounts"
ERROR - 2024-05-23 01:28:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-23 01:29:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 01:29:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 01:29:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 01:32:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 01:32:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 01:32:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 01:34:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 01:34:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 01:35:21 --> 404 Page Not Found: Home/products
ERROR - 2024-05-23 01:35:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 01:36:05 --> Could not find the language line "Home"
ERROR - 2024-05-23 01:38:03 --> Could not find the language line "Home"
ERROR - 2024-05-23 01:42:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 01:42:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 01:42:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 01:44:59 --> Could not find the language line "Home"
ERROR - 2024-05-23 01:45:07 --> Could not find the language line "Home"
ERROR - 2024-05-23 01:45:51 --> Could not find the language line "Home"
ERROR - 2024-05-23 01:58:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 01:58:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 01:58:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 01:59:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 01:59:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 01:59:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 02:09:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 02:14:16 --> Could not find the language line "products"
ERROR - 2024-05-23 02:15:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 02:15:53 --> Could not find the language line "Home"
ERROR - 2024-05-23 02:16:09 --> Could not find the language line "Home"
ERROR - 2024-05-23 02:17:37 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 02:18:11 --> Could not find the language line "Other"
ERROR - 2024-05-23 02:18:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 02:18:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 02:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 02:23:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 02:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-23 02:23:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 02:26:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 02:29:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 02:30:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 02:31:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 02:33:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 02:35:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 02:35:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 02:37:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 02:37:25 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-23 02:41:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 02:45:56 --> Could not find the language line "Home"
ERROR - 2024-05-23 02:47:53 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 02:54:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 02:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 02:54:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 02:58:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 02:58:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 02:58:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 03:03:35 --> Could not find the language line "Home"
ERROR - 2024-05-23 03:06:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 03:06:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 03:06:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 03:12:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 03:13:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 03:13:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 03:13:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 03:14:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 03:14:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 03:15:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 03:15:46 --> Could not find the language line "Home"
ERROR - 2024-05-23 03:15:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 03:16:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 03:20:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 03:20:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 03:20:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 03:24:45 --> Could not find the language line "Home"
ERROR - 2024-05-23 03:24:46 --> Could not find the language line "Home"
ERROR - 2024-05-23 03:29:20 --> Could not find the language line "products"
ERROR - 2024-05-23 03:30:07 --> Could not find the language line "accounts"
ERROR - 2024-05-23 03:33:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 03:33:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 03:33:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 03:33:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 03:34:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 03:34:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 03:34:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 03:38:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 03:39:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 03:39:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 03:39:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 03:42:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 03:42:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 03:42:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 03:44:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 03:44:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 03:45:55 --> Could not find the language line "Home"
ERROR - 2024-05-23 03:47:43 --> Could not find the language line "users"
ERROR - 2024-05-23 04:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 04:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 04:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 04:12:16 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 04:12:17 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 04:12:17 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 04:12:18 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 04:12:20 --> Could not find the language line "Home"
ERROR - 2024-05-23 04:14:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 04:14:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 04:15:04 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-23 04:15:48 --> Could not find the language line "Home"
ERROR - 2024-05-23 04:19:16 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 04:21:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 04:21:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 04:21:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 04:29:42 --> Could not find the language line "accounts"
ERROR - 2024-05-23 04:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 04:43:17 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 04:45:27 --> 404 Page Not Found: Users/products
ERROR - 2024-05-23 04:45:46 --> Could not find the language line "Home"
ERROR - 2024-05-23 04:49:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 04:49:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 04:58:54 --> Could not find the language line "Home"
ERROR - 2024-05-23 04:58:57 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:00:42 --> Could not find the language line "accounts"
ERROR - 2024-05-23 05:07:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 05:07:36 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:10:36 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:10:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:10:54 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:11:13 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:11:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:12:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:13:51 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:13:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 05:13:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 05:13:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 05:13:57 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:14:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 05:14:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 05:14:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 05:14:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 05:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:15:44 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:17:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 05:18:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 05:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:19:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 05:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:22:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 05:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:22:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 05:22:57 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:23:29 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:23:50 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:30:09 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:30:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-23 05:30:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-23 05:30:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-23 05:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:30:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-23 05:31:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-23 05:31:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 05:31:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 05:31:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 05:31:22 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:31:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-23 05:31:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-23 05:31:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-23 05:31:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-23 05:31:39 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:31:43 --> Could not find the language line "Socks"
ERROR - 2024-05-23 05:31:47 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:31:50 --> Could not find the language line "Perfume"
ERROR - 2024-05-23 05:31:56 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:32:00 --> Could not find the language line "Bracelets"
ERROR - 2024-05-23 05:32:09 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:32:13 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 05:32:22 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 05:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:32:33 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 05:32:40 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 05:32:51 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:33:36 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:33:41 --> 404 Page Not Found: Users/products
ERROR - 2024-05-23 05:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:37:33 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:37:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:37:47 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:37:59 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:38:18 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:38:21 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:38:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 05:38:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 05:38:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 05:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:39:44 --> 404 Page Not Found: Products/products
ERROR - 2024-05-23 05:40:05 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:40:08 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:40:26 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:41:37 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:41:39 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:41:54 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:42:41 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:42:43 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:43:13 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:43:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:43:30 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:44:04 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:44:35 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:44:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 05:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:45:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 05:45:44 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:48:19 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:48:30 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:49:18 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:50:36 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:52:32 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:53:07 --> 404 Page Not Found: Home/products
ERROR - 2024-05-23 05:54:02 --> Could not find the language line "products"
ERROR - 2024-05-23 05:54:17 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-23 05:54:41 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:55:15 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:56:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 05:57:13 --> Could not find the language line "Home"
ERROR - 2024-05-23 05:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 05:58:57 --> Could not find the language line "Home"
ERROR - 2024-05-23 06:07:55 --> 404 Page Not Found: Cart/products
ERROR - 2024-05-23 06:08:26 --> Could not find the language line "products"
ERROR - 2024-05-23 06:11:55 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 06:14:19 --> Could not find the language line "Home"
ERROR - 2024-05-23 06:15:47 --> Could not find the language line "Home"
ERROR - 2024-05-23 06:17:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 06:17:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 06:17:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 06:20:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 06:30:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 06:30:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 06:30:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 06:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 06:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 06:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 06:42:15 --> Could not find the language line "Home"
ERROR - 2024-05-23 06:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 06:43:15 --> Could not find the language line "Home"
ERROR - 2024-05-23 06:43:15 --> Could not find the language line "Home"
ERROR - 2024-05-23 06:44:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 06:44:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 06:44:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 06:45:45 --> Could not find the language line "Home"
ERROR - 2024-05-23 06:46:19 --> Could not find the language line "Home"
ERROR - 2024-05-23 06:49:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 06:49:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 06:49:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 06:50:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 06:50:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 06:50:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 06:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 06:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 06:56:40 --> Could not find the language line "Home"
ERROR - 2024-05-23 06:58:16 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 06:58:16 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 06:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 06:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 06:59:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 06:59:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 06:59:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 06:59:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 07:00:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 07:00:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 07:00:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 07:02:43 --> Could not find the language line "Home"
ERROR - 2024-05-23 07:03:18 --> Could not find the language line "Home"
ERROR - 2024-05-23 07:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:04:07 --> Could not find the language line "Home"
ERROR - 2024-05-23 07:07:55 --> Could not find the language line "products"
ERROR - 2024-05-23 07:08:06 --> Could not find the language line "Home"
ERROR - 2024-05-23 07:11:33 --> Could not find the language line "Bracelets"
ERROR - 2024-05-23 07:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:12:08 --> 404 Page Not Found: Products/products
ERROR - 2024-05-23 07:12:57 --> Could not find the language line "Home"
ERROR - 2024-05-23 07:15:48 --> Could not find the language line "Home"
ERROR - 2024-05-23 07:24:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 07:24:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-23 07:24:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 07:26:03 --> 404 Page Not Found: Storage/settings
ERROR - 2024-05-23 07:28:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 07:28:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 07:28:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 07:32:07 --> Could not find the language line "Home"
ERROR - 2024-05-23 07:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:37:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 07:37:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 07:37:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 07:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:45:46 --> Could not find the language line "Home"
ERROR - 2024-05-23 07:45:47 --> Could not find the language line "Home"
ERROR - 2024-05-23 07:45:50 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 07:46:08 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 07:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:48:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 07:49:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 07:49:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 07:49:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 07:51:34 --> 404 Page Not Found: Products/products
ERROR - 2024-05-23 07:51:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 07:54:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 07:54:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 07:54:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 07:54:28 --> 404 Page Not Found: Products/products
ERROR - 2024-05-23 07:55:05 --> Could not find the language line "accounts"
ERROR - 2024-05-23 07:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 07:59:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 07:59:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 08:01:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-23 08:01:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-23 08:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 08:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 08:08:55 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-23 08:15:48 --> Could not find the language line "Home"
ERROR - 2024-05-23 08:21:05 --> Could not find the language line "Home"
ERROR - 2024-05-23 08:21:19 --> Could not find the language line "Bracelets"
ERROR - 2024-05-23 08:22:03 --> Could not find the language line "Bracelets"
ERROR - 2024-05-23 08:22:16 --> Could not find the language line "Bracelets"
ERROR - 2024-05-23 08:22:34 --> Could not find the language line "Bracelets"
ERROR - 2024-05-23 08:22:35 --> Could not find the language line "Home"
ERROR - 2024-05-23 08:22:47 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 08:23:20 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 08:23:25 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-05-23 08:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 08:23:44 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 08:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 08:24:25 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 08:24:34 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 08:24:55 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 08:25:04 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 08:25:09 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 08:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 08:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 08:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 08:32:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 08:33:26 --> Could not find the language line "Home"
ERROR - 2024-05-23 08:43:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 08:45:47 --> Could not find the language line "Home"
ERROR - 2024-05-23 08:48:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 08:48:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 08:48:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 08:49:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 08:49:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 08:49:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 08:52:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 08:52:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 08:52:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 08:52:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 08:52:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 08:52:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 08:54:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 08:54:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 08:57:08 --> Could not find the language line "Home"
ERROR - 2024-05-23 08:57:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 08:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-23 08:57:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 08:58:25 --> Could not find the language line "Home"
ERROR - 2024-05-23 08:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 08:59:23 --> Could not find the language line "accounts"
ERROR - 2024-05-23 08:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 08:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 08:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 08:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:04:45 --> Could not find the language line "accounts"
ERROR - 2024-05-23 09:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:10:59 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 09:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:19 --> Could not find the language line "accounts"
ERROR - 2024-05-23 09:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:15:55 --> Could not find the language line "Home"
ERROR - 2024-05-23 09:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:31:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 09:31:42 --> Could not find the language line "Home"
ERROR - 2024-05-23 09:33:21 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-05-23 09:35:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 09:35:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 09:35:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 09:37:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 09:37:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 09:37:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 09:39:48 --> Could not find the language line "Home"
ERROR - 2024-05-23 09:39:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 09:39:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 09:45:49 --> Could not find the language line "Home"
ERROR - 2024-05-23 09:51:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 09:51:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 09:51:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 09:54:43 --> Could not find the language line "Home"
ERROR - 2024-05-23 09:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:55:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 09:55:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 09:55:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 09:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 09:56:10 --> Could not find the language line "accounts"
ERROR - 2024-05-23 09:56:39 --> Could not find the language line "Home"
ERROR - 2024-05-23 10:08:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 10:08:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 10:08:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 10:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:10:40 --> Could not find the language line "users"
ERROR - 2024-05-23 10:12:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 10:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:15:48 --> Could not find the language line "Home"
ERROR - 2024-05-23 10:15:51 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 10:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:17:23 --> Could not find the language line "products"
ERROR - 2024-05-23 10:17:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 10:17:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 10:18:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 10:18:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 10:18:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 10:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:20:58 --> Could not find the language line "products"
ERROR - 2024-05-23 10:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:22:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 10:22:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 10:22:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 10:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:25:39 --> Could not find the language line "Home"
ERROR - 2024-05-23 10:27:53 --> 404 Page Not Found: Images/login5.jpg
ERROR - 2024-05-23 10:31:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 10:31:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 10:31:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 10:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:34:50 --> Could not find the language line "accounts"
ERROR - 2024-05-23 10:35:52 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 10:35:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 10:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:45:53 --> Could not find the language line "Home"
ERROR - 2024-05-23 10:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 10:49:22 --> Could not find the language line "accounts"
ERROR - 2024-05-23 10:52:12 --> Could not find the language line "Home"
ERROR - 2024-05-23 10:52:17 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 10:52:26 --> Could not find the language line "Home"
ERROR - 2024-05-23 10:53:47 --> Could not find the language line "Home"
ERROR - 2024-05-23 10:53:50 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 10:54:12 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 10:54:28 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 10:54:35 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 10:54:41 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 10:54:47 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 10:54:50 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 10:54:52 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 10:55:54 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 10:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 11:01:32 --> Could not find the language line "users"
ERROR - 2024-05-23 11:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 11:05:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 11:12:08 --> Could not find the language line "Other"
ERROR - 2024-05-23 11:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 11:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 11:15:48 --> Could not find the language line "Home"
ERROR - 2024-05-23 11:15:57 --> Could not find the language line "Other"
ERROR - 2024-05-23 11:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 11:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 11:16:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 11:19:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 11:19:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 11:19:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 11:19:18 --> Could not find the language line "Home"
ERROR - 2024-05-23 11:19:56 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-23 11:22:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 11:22:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 11:22:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 11:25:53 --> Could not find the language line "Home"
ERROR - 2024-05-23 11:32:09 --> Could not find the language line "accounts"
ERROR - 2024-05-23 11:35:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 11:36:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 11:36:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 11:36:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 11:39:11 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-05-23 11:39:13 --> Could not find the language line "Home"
ERROR - 2024-05-23 11:39:14 --> 404 Page Not Found: Wp-cronphp/index
ERROR - 2024-05-23 11:39:23 --> Could not find the language line "accounts"
ERROR - 2024-05-23 11:45:48 --> Could not find the language line "Home"
ERROR - 2024-05-23 11:49:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 11:49:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 11:49:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 11:52:00 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 11:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 11:52:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 11:52:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 11:54:49 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-23 11:54:52 --> Could not find the language line "Home"
ERROR - 2024-05-23 11:54:56 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 11:54:56 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 11:55:00 --> Could not find the language line "Bracelets"
ERROR - 2024-05-23 11:55:03 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 11:56:00 --> Could not find the language line "Other"
ERROR - 2024-05-23 11:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 12:01:15 --> Could not find the language line "Home"
ERROR - 2024-05-23 12:07:28 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 12:07:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 12:07:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 12:08:01 --> Could not find the language line "Bracelets"
ERROR - 2024-05-23 12:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 12:09:00 --> Could not find the language line "products"
ERROR - 2024-05-23 12:14:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 12:15:52 --> Could not find the language line "Home"
ERROR - 2024-05-23 12:15:57 --> 404 Page Not Found: Products/products
ERROR - 2024-05-23 12:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 12:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 12:20:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 12:20:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 12:20:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 12:22:05 --> Could not find the language line "accounts"
ERROR - 2024-05-23 12:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 12:26:39 --> Could not find the language line "Home"
ERROR - 2024-05-23 12:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 12:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 12:36:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 12:38:55 --> 404 Page Not Found: Users/products
ERROR - 2024-05-23 12:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 12:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 12:42:09 --> Could not find the language line "Home"
ERROR - 2024-05-23 12:42:17 --> Could not find the language line "accounts"
ERROR - 2024-05-23 12:43:56 --> Could not find the language line "accounts"
ERROR - 2024-05-23 12:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 12:44:39 --> 404 Page Not Found: Users/products
ERROR - 2024-05-23 12:45:50 --> Could not find the language line "Home"
ERROR - 2024-05-23 12:46:14 --> Could not find the language line "Home"
ERROR - 2024-05-23 12:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 12:50:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 12:50:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-23 12:50:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 12:50:26 --> Could not find the language line "Home"
ERROR - 2024-05-23 12:51:05 --> Could not find the language line "Home"
ERROR - 2024-05-23 12:53:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 12:53:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 12:53:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 12:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 12:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 12:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:00:45 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:02:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 13:04:06 --> Could not find the language line "Other"
ERROR - 2024-05-23 13:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:07:19 --> Could not find the language line "products"
ERROR - 2024-05-23 13:10:12 --> Could not find the language line "accounts"
ERROR - 2024-05-23 13:12:14 --> Could not find the language line "accounts"
ERROR - 2024-05-23 13:12:14 --> Could not find the language line "accounts"
ERROR - 2024-05-23 13:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:15:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-23 13:15:50 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:16:10 --> Could not find the language line "Other"
ERROR - 2024-05-23 13:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:27:24 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:28:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 13:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:29:48 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:33:26 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:33:30 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:33:31 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:33:33 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:37:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 13:37:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 13:37:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 13:38:34 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:40:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 13:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:45:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 13:45:32 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:45:52 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:47:35 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:50:24 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:52:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 13:52:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 13:52:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 13:52:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 13:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:54:24 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:56:04 --> Could not find the language line "Home"
ERROR - 2024-05-23 13:56:12 --> Could not find the language line "Other"
ERROR - 2024-05-23 13:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 13:56:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 13:58:09 --> Could not find the language line "Home"
ERROR - 2024-05-23 14:00:42 --> Could not find the language line "products"
ERROR - 2024-05-23 14:01:56 --> Could not find the language line "Home"
ERROR - 2024-05-23 14:03:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 14:03:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 14:03:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 14:07:46 --> Could not find the language line "users"
ERROR - 2024-05-23 14:09:16 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 14:15:51 --> Could not find the language line "Home"
ERROR - 2024-05-23 14:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 14:18:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 14:18:06 --> Could not find the language line "products"
ERROR - 2024-05-23 14:19:00 --> Could not find the language line "products"
ERROR - 2024-05-23 14:20:09 --> Could not find the language line "products"
ERROR - 2024-05-23 14:21:12 --> Could not find the language line "products"
ERROR - 2024-05-23 14:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 14:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 14:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 14:23:22 --> Could not find the language line "products"
ERROR - 2024-05-23 14:23:29 --> 404 Page Not Found: Products/products
ERROR - 2024-05-23 14:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 14:27:11 --> Could not find the language line "Home"
ERROR - 2024-05-23 14:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 14:28:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 14:28:30 --> 404 Page Not Found: Home/products
ERROR - 2024-05-23 14:28:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 14:28:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 14:28:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 14:32:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 14:32:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 14:32:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 14:33:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 14:33:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 14:33:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 14:34:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 14:34:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 14:34:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 14:36:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-23 14:36:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-23 14:36:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 14:39:31 --> Could not find the language line "products"
ERROR - 2024-05-23 14:40:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 14:41:46 --> Could not find the language line "products"
ERROR - 2024-05-23 14:45:50 --> Could not find the language line "Home"
ERROR - 2024-05-23 14:52:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 14:52:39 --> Could not find the language line "Home"
ERROR - 2024-05-23 14:53:36 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 14:54:02 --> Could not find the language line "Home"
ERROR - 2024-05-23 14:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 14:54:12 --> Could not find the language line "Bracelets"
ERROR - 2024-05-23 14:54:23 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 14:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 14:54:32 --> Could not find the language line "products"
ERROR - 2024-05-23 14:54:33 --> Could not find the language line "Home"
ERROR - 2024-05-23 14:54:49 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 14:55:05 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 14:55:27 --> Could not find the language line "Other"
ERROR - 2024-05-23 14:55:36 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 14:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 14:55:53 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 14:56:10 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 14:56:18 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 14:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 15:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 15:00:25 --> Could not find the language line "Home"
ERROR - 2024-05-23 15:05:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 15:05:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 15:05:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 15:08:23 --> Could not find the language line "Home"
ERROR - 2024-05-23 15:09:37 --> Could not find the language line "products"
ERROR - 2024-05-23 15:10:16 --> Could not find the language line "Home"
ERROR - 2024-05-23 15:12:20 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 15:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 15:13:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 15:13:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 15:13:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 15:15:51 --> Could not find the language line "Home"
ERROR - 2024-05-23 15:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 15:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 15:20:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 15:20:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 15:20:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 15:22:13 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-23 15:22:41 --> Could not find the language line "products"
ERROR - 2024-05-23 15:28:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 15:29:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 15:32:21 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 15:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 15:35:26 --> Could not find the language line "Home"
ERROR - 2024-05-23 15:37:42 --> Could not find the language line "products"
ERROR - 2024-05-23 15:39:46 --> Could not find the language line "products"
ERROR - 2024-05-23 15:40:22 --> Could not find the language line "Other"
ERROR - 2024-05-23 15:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 15:40:47 --> Could not find the language line "Home"
ERROR - 2024-05-23 15:40:53 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 15:40:55 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 15:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 15:45:53 --> Could not find the language line "Home"
ERROR - 2024-05-23 15:55:20 --> Could not find the language line "users"
ERROR - 2024-05-23 15:58:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 15:58:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 15:58:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 16:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 16:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 16:08:33 --> Could not find the language line "Home"
ERROR - 2024-05-23 16:13:24 --> Could not find the language line "products"
ERROR - 2024-05-23 16:15:53 --> Could not find the language line "Home"
ERROR - 2024-05-23 16:18:11 --> Could not find the language line "Home"
ERROR - 2024-05-23 16:18:12 --> Could not find the language line "Home"
ERROR - 2024-05-23 16:18:17 --> Could not find the language line "Home"
ERROR - 2024-05-23 16:21:14 --> Could not find the language line "Home"
ERROR - 2024-05-23 16:24:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 16:24:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 16:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 16:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 16:38:00 --> Could not find the language line "products"
ERROR - 2024-05-23 16:39:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 16:39:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 16:39:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 16:40:03 --> Could not find the language line "Socks"
ERROR - 2024-05-23 16:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 16:43:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-23 16:45:56 --> Could not find the language line "Home"
ERROR - 2024-05-23 16:48:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 16:48:29 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 16:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 16:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 17:02:29 --> Could not find the language line "Other"
ERROR - 2024-05-23 17:05:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 17:05:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-23 17:05:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-23 17:08:04 --> Could not find the language line "products"
ERROR - 2024-05-23 17:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 17:09:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-23 17:10:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 17:12:20 --> Could not find the language line "products"
ERROR - 2024-05-23 17:12:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 17:12:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 17:15:55 --> Could not find the language line "Home"
ERROR - 2024-05-23 17:16:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 17:19:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 17:19:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 17:24:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 17:24:10 --> Could not find the language line "Home"
ERROR - 2024-05-23 17:24:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 17:24:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 17:24:47 --> Could not find the language line "Home"
ERROR - 2024-05-23 17:27:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-23 17:28:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 17:31:36 --> Could not find the language line "Home"
ERROR - 2024-05-23 17:32:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 17:35:28 --> Could not find the language line "Other"
ERROR - 2024-05-23 17:40:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-23 17:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 17:45:53 --> Could not find the language line "Home"
ERROR - 2024-05-23 17:48:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 17:48:55 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 17:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 17:53:15 --> Could not find the language line "Home"
ERROR - 2024-05-23 17:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 18:06:12 --> Could not find the language line "products"
ERROR - 2024-05-23 18:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 18:12:38 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 18:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 18:13:50 --> Could not find the language line "Home"
ERROR - 2024-05-23 18:15:54 --> Could not find the language line "Home"
ERROR - 2024-05-23 18:19:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 18:34:03 --> Could not find the language line "Perfume"
ERROR - 2024-05-23 18:36:36 --> Could not find the language line "Other"
ERROR - 2024-05-23 18:36:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 18:37:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 18:45:54 --> Could not find the language line "Home"
ERROR - 2024-05-23 18:47:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-23 18:47:35 --> Could not find the language line "Home"
ERROR - 2024-05-23 18:47:38 --> Could not find the language line "Home"
ERROR - 2024-05-23 18:52:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 18:54:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 19:09:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-23 19:09:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-23 19:09:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-23 19:15:55 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:18:00 --> Could not find the language line "Other"
ERROR - 2024-05-23 19:18:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 19:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 19:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 19:25:41 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:26:16 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 19:36:05 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:38:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 19:38:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 19:40:40 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:41:59 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-23 19:43:34 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 19:45:57 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:46:02 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:46:41 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:47:39 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:47:41 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 19:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 19:47:52 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 19:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 19:47:58 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 19:48:15 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 19:49:01 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:49:10 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 19:49:32 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 19:53:34 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 19:53:35 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:54:53 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:55:40 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:55:47 --> Could not find the language line "Bracelets"
ERROR - 2024-05-23 19:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 19:56:49 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 19:57:19 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:57:29 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:58:08 --> Could not find the language line "Home"
ERROR - 2024-05-23 19:58:18 --> 404 Page Not Found: Images/login5.jpg
ERROR - 2024-05-23 20:00:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 20:01:21 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 20:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:01:23 --> Could not find the language line "Home"
ERROR - 2024-05-23 20:02:46 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 20:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:08:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-23 20:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:08:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:08:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:12:19 --> Could not find the language line "Home"
ERROR - 2024-05-23 20:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:13:26 --> Could not find the language line "Home"
ERROR - 2024-05-23 20:14:19 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-23 20:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:16:20 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-23 20:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:18:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:18:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:18:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:18:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:18:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-23 20:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:24:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 20:25:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 20:26:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 20:28:08 --> Could not find the language line "Home"
ERROR - 2024-05-23 20:32:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 20:32:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 20:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:39:56 --> Could not find the language line "Clothing"
ERROR - 2024-05-23 20:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:41:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 20:41:40 --> Could not find the language line "Home"
ERROR - 2024-05-23 20:42:40 --> Could not find the language line "Home"
ERROR - 2024-05-23 20:43:01 --> Could not find the language line "Home"
ERROR - 2024-05-23 20:43:08 --> Could not find the language line "Home"
ERROR - 2024-05-23 20:43:18 --> Could not find the language line "Home"
ERROR - 2024-05-23 20:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:45:15 --> Could not find the language line "Home"
ERROR - 2024-05-23 20:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:47:45 --> Could not find the language line "Home"
ERROR - 2024-05-23 20:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:54:18 --> Could not find the language line "Home"
ERROR - 2024-05-23 20:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:58:08 --> Could not find the language line "Home"
ERROR - 2024-05-23 20:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 20:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 21:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 21:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 21:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 21:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 21:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 21:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 21:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 21:02:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 21:03:00 --> Could not find the language line "Home"
ERROR - 2024-05-23 21:04:55 --> Could not find the language line "Home"
ERROR - 2024-05-23 21:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 21:07:55 --> Could not find the language line "products"
ERROR - 2024-05-23 21:08:36 --> Could not find the language line "products"
ERROR - 2024-05-23 21:08:44 --> Could not find the language line "Home"
ERROR - 2024-05-23 21:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 21:21:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 21:28:23 --> Could not find the language line "Home"
ERROR - 2024-05-23 21:34:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 21:38:12 --> Could not find the language line "products"
ERROR - 2024-05-23 21:45:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 21:45:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 21:49:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 21:49:41 --> Could not find the language line "Home"
ERROR - 2024-05-23 21:49:52 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-23 21:50:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 21:58:10 --> Could not find the language line "Home"
ERROR - 2024-05-23 22:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 22:21:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 22:21:24 --> Could not find the language line "Home"
ERROR - 2024-05-23 22:27:18 --> Could not find the language line "Other"
ERROR - 2024-05-23 22:28:16 --> Could not find the language line "Home"
ERROR - 2024-05-23 22:35:05 --> Could not find the language line "Home"
ERROR - 2024-05-23 22:35:07 --> Could not find the language line "Home"
ERROR - 2024-05-23 22:52:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 22:52:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 22:58:11 --> Could not find the language line "Home"
ERROR - 2024-05-23 22:58:28 --> Could not find the language line "Home"
ERROR - 2024-05-23 22:58:38 --> Could not find the language line "Home"
ERROR - 2024-05-23 23:20:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 23:21:45 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-23 23:28:13 --> Could not find the language line "Home"
ERROR - 2024-05-23 23:34:15 --> Could not find the language line "Home"
ERROR - 2024-05-23 23:38:13 --> Could not find the language line "products"
ERROR - 2024-05-23 23:46:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 23:46:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-23 23:46:57 --> Could not find the language line "Home"
ERROR - 2024-05-23 23:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 23:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-23 23:58:18 --> Could not find the language line "Home"
