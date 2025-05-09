<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-26 00:18:34 --> Could not find the language line "Home"
ERROR - 2023-10-26 00:18:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-26 00:18:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-26 00:18:48 --> Could not find the language line "Home"
ERROR - 2023-10-26 00:18:51 --> Could not find the language line "Home"
ERROR - 2023-10-26 00:19:20 --> Could not find the language line "Socks"
ERROR - 2023-10-26 00:19:56 --> Could not find the language line "Home"
ERROR - 2023-10-26 00:27:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 00:43:14 --> Could not find the language line "Home"
ERROR - 2023-10-26 00:44:04 --> Could not find the language line "Home"
ERROR - 2023-10-26 01:06:42 --> Could not find the language line "Home"
ERROR - 2023-10-26 01:11:10 --> Could not find the language line "Home"
ERROR - 2023-10-26 01:11:11 --> Could not find the language line "Home"
ERROR - 2023-10-26 01:11:12 --> Could not find the language line "Home"
ERROR - 2023-10-26 01:57:24 --> Could not find the language line "Home"
ERROR - 2023-10-26 02:06:05 --> Could not find the language line "Socks"
ERROR - 2023-10-26 02:15:03 --> Could not find the language line "Home"
ERROR - 2023-10-26 02:24:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 02:26:01 --> Could not find the language line "Home"
ERROR - 2023-10-26 02:45:15 --> Could not find the language line "Home"
ERROR - 2023-10-26 02:46:25 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-26 03:01:32 --> Could not find the language line "Home"
ERROR - 2023-10-26 03:09:16 --> Could not find the language line "Home"
ERROR - 2023-10-26 03:15:03 --> Could not find the language line "Home"
ERROR - 2023-10-26 03:25:05 --> Could not find the language line "Home"
ERROR - 2023-10-26 03:36:55 --> Could not find the language line "Home"
ERROR - 2023-10-26 03:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 03:37:32 --> Could not find the language line "Home"
ERROR - 2023-10-26 03:40:13 --> Could not find the language line "Home"
ERROR - 2023-10-26 03:43:29 --> Could not find the language line "Home"
ERROR - 2023-10-26 03:50:50 --> Could not find the language line "Home"
ERROR - 2023-10-26 03:50:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 04:00:02 --> Could not find the language line "Home"
ERROR - 2023-10-26 04:16:03 --> Could not find the language line "Home"
ERROR - 2023-10-26 04:53:40 --> Could not find the language line "Home"
ERROR - 2023-10-26 04:53:40 --> Could not find the language line "Home"
ERROR - 2023-10-26 04:53:40 --> Could not find the language line "Home"
ERROR - 2023-10-26 04:53:41 --> Could not find the language line "Home"
ERROR - 2023-10-26 04:53:41 --> Could not find the language line "Home"
ERROR - 2023-10-26 04:58:11 --> Could not find the language line "Home"
ERROR - 2023-10-26 05:05:14 --> Could not find the language line "Home"
ERROR - 2023-10-26 05:17:34 --> Could not find the language line "Home"
ERROR - 2023-10-26 05:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 05:22:21 --> Could not find the language line "Home"
ERROR - 2023-10-26 05:22:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 05:23:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 05:23:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 05:23:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 05:23:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 05:24:15 --> Could not find the language line "Home"
ERROR - 2023-10-26 05:24:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-26 05:24:48 --> Could not find the language line "Home"
ERROR - 2023-10-26 05:25:02 --> Could not find the language line "Socks"
ERROR - 2023-10-26 05:25:31 --> Could not find the language line "Socks"
ERROR - 2023-10-26 05:25:38 --> Could not find the language line "Socks"
ERROR - 2023-10-26 05:25:40 --> Could not find the language line "Home"
ERROR - 2023-10-26 05:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 05:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 05:43:29 --> Could not find the language line "Home"
ERROR - 2023-10-26 05:43:29 --> Could not find the language line "Home"
ERROR - 2023-10-26 05:43:29 --> Could not find the language line "Home"
ERROR - 2023-10-26 05:43:30 --> Could not find the language line "Home"
ERROR - 2023-10-26 05:43:30 --> 404 Page Not Found: Products/products
ERROR - 2023-10-26 05:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:02:04 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:06:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-26 06:12:18 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:12:26 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 06:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:13:14 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 06:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:15:30 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 06:16:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 06:16:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-26 06:16:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 06:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:16:28 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 06:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:17:07 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 06:17:11 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:17:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 06:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:18:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 06:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:18:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 06:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:19:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 06:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:20:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 06:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:21:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 06:21:20 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:24:10 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:24:24 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:25:28 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:25:28 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:26:34 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:27:09 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:27:57 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:28:10 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:28:11 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:28:25 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:28:47 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:28:56 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:33:19 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:34:15 --> 404 Page Not Found: Products/products
ERROR - 2023-10-26 06:37:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 06:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:40:59 --> Could not find the language line "Home"
ERROR - 2023-10-26 06:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:46:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 06:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 06:51:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 06:51:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-26 06:51:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 06:52:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 06:52:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-26 06:52:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 07:02:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 07:02:22 --> Could not find the language line "Home"
ERROR - 2023-10-26 07:04:31 --> Could not find the language line "Home"
ERROR - 2023-10-26 07:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 07:04:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 07:14:47 --> Could not find the language line "Home"
ERROR - 2023-10-26 07:14:49 --> Could not find the language line "Home"
ERROR - 2023-10-26 07:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 07:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 07:23:02 --> Could not find the language line "Home"
ERROR - 2023-10-26 07:24:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 07:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 07:29:33 --> Could not find the language line "Home"
ERROR - 2023-10-26 07:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 07:37:44 --> Could not find the language line "Home"
ERROR - 2023-10-26 07:38:42 --> Could not find the language line "Home"
ERROR - 2023-10-26 07:40:39 --> Could not find the language line "Home"
ERROR - 2023-10-26 07:41:57 --> Could not find the language line "Home"
ERROR - 2023-10-26 07:42:31 --> Could not find the language line "Home"
ERROR - 2023-10-26 07:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 07:49:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 07:49:24 --> Could not find the language line "Home"
ERROR - 2023-10-26 07:53:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 07:53:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 07:53:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 07:54:28 --> Could not find the language line "Home"
ERROR - 2023-10-26 07:56:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 07:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 07:57:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 07:57:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 07:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 07:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 07:57:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 08:00:28 --> Could not find the language line "Home"
ERROR - 2023-10-26 08:01:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 08:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 08:01:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 08:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 08:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 08:07:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 08:07:35 --> Could not find the language line "Home"
ERROR - 2023-10-26 08:14:40 --> Could not find the language line "Home"
ERROR - 2023-10-26 08:19:57 --> Could not find the language line "Home"
ERROR - 2023-10-26 08:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 08:33:06 --> Could not find the language line "Home"
ERROR - 2023-10-26 08:38:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 08:38:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '15'
AND `transaction_item_sizes`.`size` IN('40', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-26 08:38:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 08:40:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 08:40:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 08:40:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 08:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 08:41:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 08:41:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-26 08:41:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 08:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 08:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 08:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 08:47:31 --> Could not find the language line "Home"
ERROR - 2023-10-26 08:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 08:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 08:52:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 08:52:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-26 08:52:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 08:59:33 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:02:58 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:08:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 09:14:44 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:18:45 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:18:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 09:20:22 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:20:31 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:21:16 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:22:10 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:22:13 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:22:59 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:22:59 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:23:04 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:23:45 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:24:07 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:25:22 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:25:39 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:26:59 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:30:49 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:30:49 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:30:55 --> Could not find the language line "Home"
ERROR - 2023-10-26 09:59:40 --> Could not find the language line "Home"
ERROR - 2023-10-26 10:01:45 --> Could not find the language line "Home"
ERROR - 2023-10-26 10:01:50 --> Could not find the language line "Home"
ERROR - 2023-10-26 10:03:31 --> Could not find the language line "Home"
ERROR - 2023-10-26 10:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 10:09:01 --> Could not find the language line "Home"
ERROR - 2023-10-26 10:09:08 --> Could not find the language line "Home"
ERROR - 2023-10-26 10:09:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 10:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 10:34:20 --> Could not find the language line "Home"
ERROR - 2023-10-26 10:56:35 --> Could not find the language line "Home"
ERROR - 2023-10-26 10:57:23 --> Could not find the language line "Home"
ERROR - 2023-10-26 10:59:59 --> Could not find the language line "Home"
ERROR - 2023-10-26 11:03:37 --> Could not find the language line "Home"
ERROR - 2023-10-26 11:05:12 --> Could not find the language line "Home"
ERROR - 2023-10-26 11:06:17 --> Could not find the language line "Home"
ERROR - 2023-10-26 11:07:13 --> Could not find the language line "Home"
ERROR - 2023-10-26 11:07:26 --> Could not find the language line "Home"
ERROR - 2023-10-26 11:07:29 --> Could not find the language line "Home"
ERROR - 2023-10-26 11:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 11:08:11 --> Could not find the language line "Home"
ERROR - 2023-10-26 11:11:22 --> Could not find the language line "Home"
ERROR - 2023-10-26 11:11:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 11:11:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 11:11:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 11:11:25 --> 404 Page Not Found: Cart/home
ERROR - 2023-10-26 11:11:26 --> 404 Page Not Found: Cart/accounts
ERROR - 2023-10-26 11:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 11:13:50 --> Could not find the language line "Home"
ERROR - 2023-10-26 11:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 11:23:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 11:23:04 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-26 11:32:02 --> Could not find the language line "Home"
ERROR - 2023-10-26 11:43:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 11:43:09 --> Could not find the language line "Home"
ERROR - 2023-10-26 11:48:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-26 11:55:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 11:55:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 11:55:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 11:58:01 --> Could not find the language line "Home"
ERROR - 2023-10-26 12:02:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 12:06:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 12:06:48 --> Could not find the language line "Home"
ERROR - 2023-10-26 12:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:09:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 12:09:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-26 12:09:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 12:10:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 12:10:16 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 12:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:17:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 12:17:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 12:17:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 12:17:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 12:19:09 --> Could not find the language line "Home"
ERROR - 2023-10-26 12:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:23:15 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 12:23:19 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 12:24:34 --> Could not find the language line "Home"
ERROR - 2023-10-26 12:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:25:43 --> Could not find the language line "Home"
ERROR - 2023-10-26 12:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:35:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:35:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 12:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:37:32 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-10-26 12:37:33 --> 404 Page Not Found: Securitytxt/index
ERROR - 2023-10-26 12:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 12:51:23 --> Could not find the language line "Home"
ERROR - 2023-10-26 12:55:57 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 13:01:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-26 13:05:54 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 13:09:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-26 13:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 13:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 13:16:47 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:24:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 13:24:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-26 13:24:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 13:25:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 13:27:32 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:31:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 13:31:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-26 13:31:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 13:31:22 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:38:22 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:38:30 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:39:20 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:39:39 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:40:08 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:41:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 13:45:10 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 13:45:50 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:50:12 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 13:54:19 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:54:33 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:56:26 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:56:52 --> Could not find the language line "Home"
ERROR - 2023-10-26 13:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 13:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:02:57 --> Could not find the language line "Home"
ERROR - 2023-10-26 14:03:51 --> Could not find the language line "Home"
ERROR - 2023-10-26 14:05:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 14:05:32 --> Could not find the language line "Perfume"
ERROR - 2023-10-26 14:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:06:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 14:06:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-26 14:06:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 14:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:09:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 14:10:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 14:10:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 14:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:20:20 --> Could not find the language line "Home"
ERROR - 2023-10-26 14:23:40 --> Could not find the language line "Home"
ERROR - 2023-10-26 14:25:06 --> Could not find the language line "Home"
ERROR - 2023-10-26 14:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:31:29 --> Could not find the language line "Home"
ERROR - 2023-10-26 14:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:37:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 14:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:43:55 --> Could not find the language line "Home"
ERROR - 2023-10-26 14:44:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-26 14:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:46:03 --> Could not find the language line "Home"
ERROR - 2023-10-26 14:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:48:19 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-26 14:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:55:57 --> Could not find the language line "Home"
ERROR - 2023-10-26 14:56:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 14:56:18 --> Could not find the language line "Home"
ERROR - 2023-10-26 14:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 14:59:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 14:59:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-26 14:59:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 14:59:38 --> Could not find the language line "Home"
ERROR - 2023-10-26 14:59:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 15:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:00:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 15:00:43 --> Could not find the language line "Home"
ERROR - 2023-10-26 15:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:01:53 --> Could not find the language line "Home"
ERROR - 2023-10-26 15:02:09 --> Could not find the language line "Home"
ERROR - 2023-10-26 15:02:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 15:02:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44-45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-26 15:02:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 15:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:04:08 --> Could not find the language line "Home"
ERROR - 2023-10-26 15:04:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 15:04:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-26 15:04:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 15:04:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 15:04:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 15:04:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 15:04:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 15:05:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 15:05:28 --> Could not find the language line "Home"
ERROR - 2023-10-26 15:05:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-26 15:05:53 --> Could not find the language line "Home"
ERROR - 2023-10-26 15:05:54 --> Could not find the language line "Home"
ERROR - 2023-10-26 15:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:11:36 --> Could not find the language line "Home"
ERROR - 2023-10-26 15:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:20:09 --> Could not find the language line "Home"
ERROR - 2023-10-26 15:20:10 --> Could not find the language line "Home"
ERROR - 2023-10-26 15:21:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-26 15:28:34 --> Could not find the language line "Home"
ERROR - 2023-10-26 15:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:36:49 --> Could not find the language line "Home"
ERROR - 2023-10-26 15:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:39:09 --> Could not find the language line "Home"
ERROR - 2023-10-26 15:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:42:03 --> Could not find the language line "Home"
ERROR - 2023-10-26 15:42:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 15:54:05 --> Could not find the language line "Home"
ERROR - 2023-10-26 16:00:39 --> Could not find the language line "Home"
ERROR - 2023-10-26 16:05:48 --> Could not find the language line "Home"
ERROR - 2023-10-26 16:06:36 --> Could not find the language line "Home"
ERROR - 2023-10-26 16:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 16:21:06 --> Could not find the language line "Home"
ERROR - 2023-10-26 16:22:23 --> Could not find the language line "Home"
ERROR - 2023-10-26 16:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 16:37:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 16:37:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-26 16:37:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 16:40:30 --> Could not find the language line "Home"
ERROR - 2023-10-26 16:51:10 --> Could not find the language line "Home"
ERROR - 2023-10-26 16:57:53 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:03:05 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:03:26 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:11:24 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:12:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 17:12:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 17:12:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 17:13:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 17:13:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 17:13:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 17:14:22 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 17:24:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-26 17:24:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-26 17:24:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-26 17:25:20 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:25:27 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:25:27 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:26:04 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:26:04 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:26:04 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:26:04 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:26:04 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:26:04 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:33:07 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 17:34:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-26 17:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 17:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 17:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 17:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 17:47:16 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:47:18 --> Could not find the language line "Home"
ERROR - 2023-10-26 17:50:49 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 18:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 18:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 18:07:49 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:09:28 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 18:11:21 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 18:16:29 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:18:18 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:25:57 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 18:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 18:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 18:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 18:32:57 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:33:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 18:33:05 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-10-26 18:33:06 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-10-26 18:33:07 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:33:44 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 18:43:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 18:44:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-26 18:46:27 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:46:44 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 18:47:35 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 18:48:08 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 18:48:10 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:48:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-26 18:50:20 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:52:09 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-26 18:53:50 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:54:46 --> Could not find the language line "Home"
ERROR - 2023-10-26 18:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 18:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:01:55 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 19:02:04 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:02:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 19:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:14:35 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:22:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-26 19:22:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-26 19:23:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-26 19:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:28:32 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:32:27 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:33:34 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:33:46 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:33:54 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:33:55 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:34:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-26 19:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:35:55 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:35:55 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:36:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-26 19:36:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-26 19:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:39:20 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:40:44 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:41:15 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:41:52 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:41:56 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:42:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 19:42:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 19:42:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 19:42:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 19:42:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 19:42:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 19:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:48:04 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:48:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 19:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:48:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 19:49:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 19:49:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 19:50:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 19:50:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 19:50:35 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:50:49 --> Could not find the language line "Perfume"
ERROR - 2023-10-26 19:51:08 --> Could not find the language line "Home"
ERROR - 2023-10-26 19:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 19:52:45 --> Could not find the language line "Home"
ERROR - 2023-10-26 20:00:46 --> Could not find the language line "Home"
ERROR - 2023-10-26 20:00:46 --> Could not find the language line "Home"
ERROR - 2023-10-26 20:02:08 --> Could not find the language line "Home"
ERROR - 2023-10-26 20:02:08 --> Could not find the language line "Home"
ERROR - 2023-10-26 20:15:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 20:15:46 --> Could not find the language line "Home"
ERROR - 2023-10-26 20:20:06 --> Could not find the language line "Perfume"
ERROR - 2023-10-26 20:29:45 --> Could not find the language line "Home"
ERROR - 2023-10-26 20:32:26 --> Could not find the language line "Home"
ERROR - 2023-10-26 20:33:01 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-26 20:33:30 --> Could not find the language line "Home"
ERROR - 2023-10-26 20:34:13 --> Could not find the language line "Home"
ERROR - 2023-10-26 20:35:14 --> Could not find the language line "Home"
ERROR - 2023-10-26 20:36:04 --> Could not find the language line "Home"
ERROR - 2023-10-26 20:39:58 --> Could not find the language line "Home"
ERROR - 2023-10-26 20:47:01 --> Could not find the language line "Home"
ERROR - 2023-10-26 21:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 21:18:28 --> Could not find the language line "Home"
ERROR - 2023-10-26 21:19:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 21:19:28 --> Could not find the language line "Home"
ERROR - 2023-10-26 21:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 21:20:40 --> Could not find the language line "Home"
ERROR - 2023-10-26 21:20:56 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 21:22:19 --> Could not find the language line "Home"
ERROR - 2023-10-26 21:26:57 --> Could not find the language line "Home"
ERROR - 2023-10-26 21:38:59 --> Could not find the language line "Home"
ERROR - 2023-10-26 21:40:00 --> Could not find the language line "Home"
ERROR - 2023-10-26 21:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 21:44:31 --> Could not find the language line "Home"
ERROR - 2023-10-26 21:59:46 --> Could not find the language line "Home"
ERROR - 2023-10-26 22:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 22:00:16 --> Could not find the language line "Home"
ERROR - 2023-10-26 22:00:42 --> Could not find the language line "Home"
ERROR - 2023-10-26 22:01:35 --> Could not find the language line "Home"
ERROR - 2023-10-26 22:01:35 --> Could not find the language line "Home"
ERROR - 2023-10-26 22:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 22:09:36 --> Could not find the language line "Home"
ERROR - 2023-10-26 22:10:02 --> Could not find the language line "Home"
ERROR - 2023-10-26 22:15:59 --> Could not find the language line "Socks"
ERROR - 2023-10-26 23:13:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-26 23:13:58 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-26 23:15:40 --> Could not find the language line "Home"
ERROR - 2023-10-26 23:15:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-26 23:17:14 --> Could not find the language line "Home"
ERROR - 2023-10-26 23:22:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 23:25:35 --> Could not find the language line "Home"
ERROR - 2023-10-26 23:28:22 --> Could not find the language line "Bracelets"
ERROR - 2023-10-26 23:28:29 --> Could not find the language line "Home"
ERROR - 2023-10-26 23:28:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 23:30:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 23:30:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-26 23:35:34 --> Could not find the language line "Home"
ERROR - 2023-10-26 23:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-26 23:41:11 --> Could not find the language line "Home"
ERROR - 2023-10-26 23:49:01 --> Could not find the language line "Home"
