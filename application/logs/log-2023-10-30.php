<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-30 09:44:32 --> Severity: error --> Exception: Call to undefined function mysqli_init() /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2023-10-30 09:44:38 --> Severity: error --> Exception: Call to undefined function mysqli_init() /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2023-10-30 09:44:56 --> Severity: error --> Exception: Call to undefined function mysqli_init() /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2023-10-30 09:45:04 --> Severity: error --> Exception: Call to undefined function mysqli_init() /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2023-10-30 09:45:07 --> Severity: error --> Exception: Call to undefined function mysqli_init() /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2023-10-30 09:45:54 --> Severity: error --> Exception: Call to undefined function mysqli_init() /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2023-10-30 09:46:50 --> Severity: error --> Exception: Call to undefined function mysqli_init() /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2023-10-30 09:47:19 --> Severity: error --> Exception: Call to undefined function mysqli_init() /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2023-10-30 09:48:51 --> Severity: error --> Exception: Call to undefined function mysqli_init() /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2023-10-30 09:49:48 --> Severity: error --> Exception: Call to undefined function mysqli_init() /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2023-10-30 09:49:51 --> Severity: error --> Exception: Call to undefined function mysqli_init() /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2023-10-30 09:50:36 --> Severity: error --> Exception: Call to undefined function mysqli_init() /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2023-10-30 09:51:41 --> Could not find the language line "Home"
ERROR - 2023-10-30 09:52:01 --> Could not find the language line "Home"
ERROR - 2023-10-30 09:55:23 --> Could not find the language line "Home"
ERROR - 2023-10-30 09:57:37 --> Could not find the language line "Home"
ERROR - 2023-10-30 09:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 09:58:39 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:00:32 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:00:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 10:00:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-30 10:00:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 10:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:03:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 10:03:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39', '38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-30 10:03:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 10:04:07 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:07:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 10:07:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40', '41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-30 10:07:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 10:08:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 10:08:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Boots')
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-30 10:08:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 10:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:08:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 10:08:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Boots')
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-30 10:08:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 10:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:10:06 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:13:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-30 10:13:13 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:13:16 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:14:02 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:18:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-30 10:18:19 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:23:12 --> Could not find the language line "Stock_clearance"
ERROR - 2023-10-30 10:26:01 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:28:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:32:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:32:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:32:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:32:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:32:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:32:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:34:35 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:34:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:36:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-30 10:36:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-30 10:41:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:42:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:43:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 10:43:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-30 10:43:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 10:44:59 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:47:25 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:47:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:47:48 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:49:11 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:49:48 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:50:10 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:50:11 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:51:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:51:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:51:26 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:51:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:51:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:51:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:51:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:52:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 10:52:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 10:52:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-30 10:52:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 10:52:32 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:52:33 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:52:35 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:53:16 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:53:31 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:53:33 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:53:34 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:53:42 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:54:44 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:56:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 10:56:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 10:56:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-30 10:56:36 --> Could not find the language line "Home"
ERROR - 2023-10-30 10:57:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 10:57:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 10:57:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 10:57:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-30 10:58:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-30 10:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:58:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 10:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 10:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 11:00:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 11:02:07 --> Could not find the language line "Home"
ERROR - 2023-10-30 11:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 11:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 11:04:04 --> Could not find the language line "Home"
ERROR - 2023-10-30 11:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 11:04:05 --> Could not find the language line "Home"
ERROR - 2023-10-30 11:04:23 --> Could not find the language line "Home"
ERROR - 2023-10-30 11:09:19 --> Could not find the language line "Home"
ERROR - 2023-10-30 11:10:53 --> Could not find the language line "Socks"
ERROR - 2023-10-30 11:12:25 --> Could not find the language line "Home"
ERROR - 2023-10-30 11:12:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 11:12:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 11:13:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 11:13:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 11:13:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 11:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 11:17:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 11:17:44 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-10-30 11:17:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 11:18:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 11:27:24 --> Could not find the language line "Home"
ERROR - 2023-10-30 11:27:53 --> Could not find the language line "Home"
ERROR - 2023-10-30 11:29:07 --> Could not find the language line "Home"
ERROR - 2023-10-30 11:31:48 --> Could not find the language line "Home"
ERROR - 2023-10-30 11:32:21 --> Could not find the language line "Bracelets"
ERROR - 2023-10-30 11:41:14 --> Could not find the language line "Home"
ERROR - 2023-10-30 11:41:49 --> Could not find the language line "Home"
ERROR - 2023-10-30 11:42:03 --> Could not find the language line "Home"
ERROR - 2023-10-30 11:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 11:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 12:07:15 --> Could not find the language line "Home"
ERROR - 2023-10-30 12:07:17 --> Could not find the language line "Home"
ERROR - 2023-10-30 12:07:18 --> Could not find the language line "Home"
ERROR - 2023-10-30 12:07:18 --> Could not find the language line "Home"
ERROR - 2023-10-30 12:07:30 --> Could not find the language line "Home"
ERROR - 2023-10-30 12:08:23 --> Could not find the language line "Home"
ERROR - 2023-10-30 12:14:27 --> Could not find the language line "Home"
ERROR - 2023-10-30 12:14:27 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-10-30 12:14:27 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-30 12:14:28 --> Could not find the language line "Home"
ERROR - 2023-10-30 12:14:28 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-10-30 12:14:28 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-10-30 12:14:28 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-10-30 12:14:28 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-10-30 12:14:29 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-10-30 12:14:29 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-10-30 12:14:29 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-10-30 12:14:29 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-10-30 12:14:29 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-10-30 12:14:29 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-10-30 12:14:30 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-10-30 12:14:30 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-10-30 12:14:30 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-10-30 12:14:30 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-10-30 12:14:30 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-10-30 12:14:30 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-10-30 12:42:46 --> Could not find the language line "Home"
ERROR - 2023-10-30 12:45:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-30 12:47:44 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-10-30 12:48:44 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-30 12:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:06:32 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:06:36 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:06:36 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:06:36 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:08:39 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:08:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-30 13:08:59 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:09:03 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:09:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 13:09:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 13:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:10:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 13:22:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 13:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:27:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 13:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:28:32 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:29:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 13:29:21 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:31:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 13:31:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-30 13:31:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 13:31:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-30 13:31:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 13:32:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 13:33:28 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:34:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 13:34:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 13:34:15 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:35:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-30 13:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:35:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 13:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:35:45 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:35:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 13:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:37:31 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:37:36 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:40:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-30 13:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:52:01 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:53:10 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-10-30 13:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:55:04 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:56:10 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:56:14 --> Could not find the language line "Home"
ERROR - 2023-10-30 13:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 13:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:06:29 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:10:30 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:11:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 14:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:11:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 14:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:11:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 14:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:12:31 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:12:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 14:12:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:12:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 14:12:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 14:12:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 14:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:13:26 --> Could not find the language line "Other"
ERROR - 2023-10-30 14:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:14:53 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:15:26 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:15:29 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:15:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 14:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:15:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 14:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:16:52 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:18:34 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:18:55 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:22:04 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:22:54 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:23:02 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:23:07 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:23:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-30 14:23:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 14:24:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 14:26:16 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:26:59 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:27:31 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:27:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-30 14:27:54 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:38:19 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:42:42 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:43:30 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:48:22 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:49:37 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:50:00 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 14:57:23 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:57:24 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:57:50 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:58:10 --> Could not find the language line "Home"
ERROR - 2023-10-30 14:59:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-30 14:59:43 --> Could not find the language line "Home"
ERROR - 2023-10-30 15:00:50 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-30 15:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 15:03:32 --> Could not find the language line "Home"
ERROR - 2023-10-30 15:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 15:04:09 --> Could not find the language line "Home"
ERROR - 2023-10-30 15:04:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 15:06:12 --> Could not find the language line "Home"
ERROR - 2023-10-30 15:06:25 --> Could not find the language line "Home"
ERROR - 2023-10-30 15:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 15:07:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 15:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 15:10:13 --> Could not find the language line "Home"
ERROR - 2023-10-30 15:10:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 15:12:03 --> Could not find the language line "Home"
ERROR - 2023-10-30 15:16:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-30 15:18:00 --> Could not find the language line "products"
ERROR - 2023-10-30 15:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 15:23:11 --> Could not find the language line "Home"
ERROR - 2023-10-30 15:27:18 --> Could not find the language line "Home"
ERROR - 2023-10-30 15:27:18 --> Could not find the language line "Home"
ERROR - 2023-10-30 15:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 15:42:32 --> Could not find the language line "Home"
ERROR - 2023-10-30 15:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 15:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 15:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 15:50:06 --> Could not find the language line "Home"
ERROR - 2023-10-30 15:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:00:41 --> Could not find the language line "products"
ERROR - 2023-10-30 16:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:10:44 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-30 16:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:32:32 --> Could not find the language line "Home"
ERROR - 2023-10-30 16:32:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 16:32:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 16:32:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 16:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:33:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 16:33:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 16:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:35:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 16:35:57 --> Could not find the language line "Home"
ERROR - 2023-10-30 16:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:45:52 --> Could not find the language line "Home"
ERROR - 2023-10-30 16:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:47:27 --> Could not find the language line "Home"
ERROR - 2023-10-30 16:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:48:29 --> Could not find the language line "Home"
ERROR - 2023-10-30 16:48:47 --> Could not find the language line "Home"
ERROR - 2023-10-30 16:48:48 --> 404 Page Not Found: Home/assets
ERROR - 2023-10-30 16:48:54 --> Could not find the language line "Home"
ERROR - 2023-10-30 16:49:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 16:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 16:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:50:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 16:50:41 --> Could not find the language line "Home"
ERROR - 2023-10-30 16:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 16:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:00:15 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:04:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-30 17:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:07:11 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:08:29 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:08:30 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:08:59 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:09:00 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:09:01 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:09:01 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:09:01 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:09:02 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:09:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-30 17:09:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-30 17:09:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-30 17:09:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-30 17:09:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-30 17:09:57 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:10:17 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:13:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:16:01 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:17:28 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:18:03 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:18:19 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:19:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 17:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:19:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 17:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:20:02 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:20:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 17:20:10 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:20:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 17:20:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 17:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:21:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 17:21:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 17:21:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 17:22:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 17:22:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 17:22:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 17:22:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 17:22:22 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:23:01 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:23:10 --> Could not find the language line "Bracelets"
ERROR - 2023-10-30 17:23:19 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:25:16 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:25:28 --> Could not find the language line "Socks"
ERROR - 2023-10-30 17:25:35 --> Could not find the language line "Socks"
ERROR - 2023-10-30 17:25:48 --> Could not find the language line "Socks"
ERROR - 2023-10-30 17:25:55 --> Could not find the language line "Socks"
ERROR - 2023-10-30 17:26:05 --> Could not find the language line "Socks"
ERROR - 2023-10-30 17:26:09 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:26:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-30 17:26:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-30 17:26:24 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:26:30 --> Could not find the language line "Bracelets"
ERROR - 2023-10-30 17:26:32 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:27:36 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:27:50 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:29:07 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:32:41 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:32:47 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:33:39 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:35:11 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:35:14 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:35:39 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:37:56 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:51:29 --> Could not find the language line "Home"
ERROR - 2023-10-30 17:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 17:59:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-30 18:00:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 18:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:01:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 18:01:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 18:01:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 18:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:06:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 18:06:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-30 18:06:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 18:06:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 18:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:07:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 18:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:08:49 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-30 18:09:01 --> Could not find the language line "Bags%20"
ERROR - 2023-10-30 18:09:15 --> Could not find the language line "Home"
ERROR - 2023-10-30 18:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:10:56 --> Could not find the language line "Bags%20"
ERROR - 2023-10-30 18:11:04 --> Could not find the language line "Bags%20"
ERROR - 2023-10-30 18:11:06 --> Could not find the language line "Bags%20"
ERROR - 2023-10-30 18:16:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 18:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:16:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 18:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:19:27 --> Could not find the language line "Bracelets"
ERROR - 2023-10-30 18:19:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 18:19:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-30 18:19:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 18:20:05 --> Could not find the language line "Home"
ERROR - 2023-10-30 18:20:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 18:22:28 --> Could not find the language line "Bags%20"
ERROR - 2023-10-30 18:22:53 --> Could not find the language line "Home"
ERROR - 2023-10-30 18:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:26:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 18:28:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 18:29:33 --> Could not find the language line "Home"
ERROR - 2023-10-30 18:30:21 --> Could not find the language line "Home"
ERROR - 2023-10-30 18:33:29 --> Could not find the language line "Home"
ERROR - 2023-10-30 18:34:49 --> Could not find the language line "Home"
ERROR - 2023-10-30 18:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:36:56 --> Could not find the language line "Home"
ERROR - 2023-10-30 18:38:07 --> Could not find the language line "Home"
ERROR - 2023-10-30 18:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:40:51 --> Could not find the language line "Home"
ERROR - 2023-10-30 18:41:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 18:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 18:49:00 --> Could not find the language line "Home"
ERROR - 2023-10-30 18:49:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 18:49:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 18:49:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 18:49:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-30 19:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 19:01:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 19:01:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('37')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-30 19:01:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 19:01:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 19:02:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 19:02:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 19:04:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 19:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 19:04:49 --> Could not find the language line "Home"
ERROR - 2023-10-30 19:05:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 19:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 19:06:25 --> Could not find the language line "Socks"
ERROR - 2023-10-30 19:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 19:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 19:20:53 --> Could not find the language line "Home"
ERROR - 2023-10-30 19:21:15 --> Could not find the language line "Home"
ERROR - 2023-10-30 19:21:16 --> Could not find the language line "Home"
ERROR - 2023-10-30 19:22:41 --> Could not find the language line "Home"
ERROR - 2023-10-30 19:26:28 --> Could not find the language line "Home"
ERROR - 2023-10-30 19:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 19:29:10 --> Could not find the language line "Home"
ERROR - 2023-10-30 19:29:11 --> Could not find the language line "Home"
ERROR - 2023-10-30 19:44:58 --> Could not find the language line "Home"
ERROR - 2023-10-30 19:44:58 --> Could not find the language line "Home"
ERROR - 2023-10-30 20:01:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-30 20:07:46 --> Could not find the language line "Home"
ERROR - 2023-10-30 20:18:58 --> Could not find the language line "Home"
ERROR - 2023-10-30 20:19:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-30 20:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 20:33:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 20:33:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-30 20:33:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 20:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 20:44:45 --> Could not find the language line "Home"
ERROR - 2023-10-30 20:46:58 --> Could not find the language line "Home"
ERROR - 2023-10-30 20:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 20:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 20:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 20:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 20:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 20:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 20:54:48 --> Could not find the language line "Home"
ERROR - 2023-10-30 21:01:07 --> Could not find the language line "Home"
ERROR - 2023-10-30 21:03:20 --> Could not find the language line "Home"
ERROR - 2023-10-30 21:04:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 21:04:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-30 21:04:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 21:05:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 21:05:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-30 21:05:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 21:05:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-30 21:05:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Navy')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-30 21:05:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-10-30 21:06:11 --> Could not find the language line "Home"
ERROR - 2023-10-30 21:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 21:06:56 --> Could not find the language line "Home"
ERROR - 2023-10-30 21:07:52 --> Could not find the language line "Home"
ERROR - 2023-10-30 21:11:45 --> Could not find the language line "Home"
ERROR - 2023-10-30 21:13:37 --> Could not find the language line "Home"
ERROR - 2023-10-30 21:18:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-30 21:18:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-30 21:19:01 --> Could not find the language line "Home"
ERROR - 2023-10-30 21:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 21:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 21:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 21:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 21:22:58 --> Could not find the language line "Home"
ERROR - 2023-10-30 21:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 21:40:22 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-10-30 21:45:28 --> Could not find the language line "Home"
ERROR - 2023-10-30 21:45:28 --> Could not find the language line "Home"
ERROR - 2023-10-30 21:51:21 --> Could not find the language line "Socks"
ERROR - 2023-10-30 22:15:15 --> Could not find the language line "Home"
ERROR - 2023-10-30 22:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 22:16:25 --> Could not find the language line "Home"
ERROR - 2023-10-30 22:16:38 --> Could not find the language line "Home"
ERROR - 2023-10-30 22:17:11 --> Could not find the language line "Home"
ERROR - 2023-10-30 22:17:14 --> Could not find the language line "Home"
ERROR - 2023-10-30 23:00:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-30 23:03:57 --> Could not find the language line "Home"
ERROR - 2023-10-30 23:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 23:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 23:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 23:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 23:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 23:08:26 --> Could not find the language line "Home"
ERROR - 2023-10-30 23:19:46 --> Could not find the language line "Home"
ERROR - 2023-10-30 23:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 23:40:18 --> Could not find the language line "Home"
ERROR - 2023-10-30 23:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-30 23:47:01 --> Could not find the language line "Home"
