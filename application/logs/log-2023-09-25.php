<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-25 00:03:19 --> Could not find the language line "Home"
ERROR - 2023-09-25 00:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 00:04:14 --> Could not find the language line "Home"
ERROR - 2023-09-25 00:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 00:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 00:13:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 00:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 01:40:26 --> Could not find the language line "Home"
ERROR - 2023-09-25 01:45:05 --> Could not find the language line "Home"
ERROR - 2023-09-25 02:15:23 --> Could not find the language line "Home"
ERROR - 2023-09-25 02:15:23 --> Could not find the language line "Home"
ERROR - 2023-09-25 02:15:24 --> Could not find the language line "Home"
ERROR - 2023-09-25 02:15:24 --> Could not find the language line "Home"
ERROR - 2023-09-25 02:15:24 --> Could not find the language line "Home"
ERROR - 2023-09-25 03:10:07 --> Could not find the language line "Home"
ERROR - 2023-09-25 03:10:36 --> Could not find the language line "Home"
ERROR - 2023-09-25 03:12:16 --> Could not find the language line "Home"
ERROR - 2023-09-25 03:12:17 --> Could not find the language line "Home"
ERROR - 2023-09-25 03:21:33 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-09-25 03:27:57 --> Could not find the language line "Home"
ERROR - 2023-09-25 03:41:11 --> Could not find the language line "products"
ERROR - 2023-09-25 03:48:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 03:48:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 03:48:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 03:48:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 03:48:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 03:48:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 03:48:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 03:48:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 03:48:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 03:48:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 03:48:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 03:48:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 03:48:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 03:48:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 03:48:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 03:48:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 03:48:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 03:48:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 03:48:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 03:48:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 03:48:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 03:48:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 03:48:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 03:48:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 03:48:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 03:48:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 03:48:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 03:48:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 03:48:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 03:48:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 04:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 04:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 04:48:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 04:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 04:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 04:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 04:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 04:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 05:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-25 05:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 05:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 05:08:36 --> Could not find the language line "Home"
ERROR - 2023-09-25 05:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 05:10:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 05:10:39 --> 404 Page Not Found: Wp-configphpbak/index
ERROR - 2023-09-25 05:10:39 --> 404 Page Not Found: Wp-configphp~/index
ERROR - 2023-09-25 05:14:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 05:14:38 --> Could not find the language line "Home"
ERROR - 2023-09-25 05:15:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 05:17:53 --> Could not find the language line "Home"
ERROR - 2023-09-25 05:19:31 --> Could not find the language line "Home"
ERROR - 2023-09-25 05:19:37 --> Could not find the language line "Home"
ERROR - 2023-09-25 05:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 05:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 05:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 05:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 05:47:33 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 05:47:33 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 06:06:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 06:13:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 06:13:33 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-09-25 06:13:33 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-09-25 06:13:34 --> Could not find the language line "Home"
ERROR - 2023-09-25 06:16:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 06:16:38 --> Could not find the language line "Home"
ERROR - 2023-09-25 06:17:07 --> Could not find the language line "Home"
ERROR - 2023-09-25 06:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 06:29:09 --> Could not find the language line "Home"
ERROR - 2023-09-25 06:29:37 --> Could not find the language line "Home"
ERROR - 2023-09-25 06:37:52 --> Could not find the language line "Home"
ERROR - 2023-09-25 06:37:53 --> Could not find the language line "Home"
ERROR - 2023-09-25 06:37:54 --> Could not find the language line "Home"
ERROR - 2023-09-25 06:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 06:41:36 --> Could not find the language line "Home"
ERROR - 2023-09-25 06:46:46 --> Could not find the language line "Home"
ERROR - 2023-09-25 06:46:52 --> Could not find the language line "Home"
ERROR - 2023-09-25 06:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 06:52:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-25 06:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 06:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 07:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 07:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 07:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 07:05:17 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-25 07:05:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 07:05:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 07:05:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 07:05:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 07:05:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 07:05:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 07:10:36 --> Could not find the language line "Home"
ERROR - 2023-09-25 07:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 07:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 07:11:54 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 07:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 07:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 07:13:24 --> Could not find the language line "Home"
ERROR - 2023-09-25 07:14:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 07:14:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 07:14:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 07:15:45 --> Could not find the language line "Home"
ERROR - 2023-09-25 07:15:51 --> Could not find the language line "Home"
ERROR - 2023-09-25 07:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 07:22:49 --> Could not find the language line "Home"
ERROR - 2023-09-25 07:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 07:31:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-25 07:42:57 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-25 07:42:58 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-25 07:42:58 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-25 07:42:58 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-25 07:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 07:43:28 --> Could not find the language line "Home"
ERROR - 2023-09-25 07:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 07:44:28 --> Could not find the language line "Home"
ERROR - 2023-09-25 07:51:35 --> Could not find the language line "products"
ERROR - 2023-09-25 07:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 08:06:24 --> Could not find the language line "Home"
ERROR - 2023-09-25 08:10:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 08:10:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-25 08:10:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 08:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 08:14:44 --> Could not find the language line "Home"
ERROR - 2023-09-25 08:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 08:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 08:22:17 --> Could not find the language line "Home"
ERROR - 2023-09-25 08:23:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-25 08:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 08:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 08:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 08:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 08:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 08:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 08:26:03 --> Could not find the language line "Home"
ERROR - 2023-09-25 08:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 08:27:55 --> Could not find the language line "Home"
ERROR - 2023-09-25 08:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 08:34:51 --> Could not find the language line "Home"
ERROR - 2023-09-25 08:36:10 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 08:38:56 --> Could not find the language line "Socks"
ERROR - 2023-09-25 08:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 08:44:03 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 08:47:35 --> Could not find the language line "Home"
ERROR - 2023-09-25 08:50:25 --> Could not find the language line "Home"
ERROR - 2023-09-25 08:50:58 --> Could not find the language line "Home"
ERROR - 2023-09-25 08:53:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 08:56:55 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:00:54 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:02:01 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:05:39 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:08:03 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:33:30 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:34:34 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:36:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 09:36:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 09:36:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 09:36:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 09:36:37 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:40:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 09:40:06 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:43:46 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:48:04 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:49:38 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:50:08 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:50:44 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:50:53 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:51:10 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:53:40 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:57:31 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:57:31 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:57:31 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:57:31 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:57:31 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:57:31 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:57:32 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:57:32 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:57:32 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:57:32 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:57:32 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:57:32 --> Could not find the language line "Home"
ERROR - 2023-09-25 09:57:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-25 09:57:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-25 09:57:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-25 09:57:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-25 09:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 09:59:17 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:03:07 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:04:27 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:08:23 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:09:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-25 10:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:11:36 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:13:53 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:14:20 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:14:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 10:19:19 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:20:18 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:20:46 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:23:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-25 10:23:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-25 10:23:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 10:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:24:46 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:24:59 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:25:04 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:25:37 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:25:37 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:25:42 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:25:42 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:28:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 10:28:33 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 10:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:30:24 --> Could not find the language line "Crocs"
ERROR - 2023-09-25 10:31:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 10:31:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 10:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:34:30 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:34:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 10:35:54 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:36:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 10:36:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 10:40:46 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:41:52 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:45:08 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:49:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 10:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:52:32 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:53:19 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 10:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:55:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 10:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 10:56:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 10:57:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 10:58:05 --> Could not find the language line "Home"
ERROR - 2023-09-25 10:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 11:01:34 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:01:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:02:38 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:03:01 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:04:37 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 11:06:41 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 11:06:41 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 11:07:34 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:09:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:11:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:11:57 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:13:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:14:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:15:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:16:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:17:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:18:17 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:18:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 11:18:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 11:19:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:19:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 11:19:54 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 11:21:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 11:24:11 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:24:15 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:24:26 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:24:37 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 11:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 11:25:12 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:25:45 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:26:05 --> Could not find the language line "Perfume"
ERROR - 2023-09-25 11:27:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:27:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:28:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:31:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:32:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:33:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:34:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:35:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:38:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:39:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:39:31 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:39:49 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:39:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 11:40:24 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:40:25 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 11:40:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:41:02 --> Could not find the language line "Home"
ERROR - 2023-09-25 11:41:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:41:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:42:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:43:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:45:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 11:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 11:57:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:57:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 11:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 11:58:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 11:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 11:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 11:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:04:57 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:08:45 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:11:36 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:15:04 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:17:28 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:17:33 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:17:43 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:17:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:18:08 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:20:45 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:23:52 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:24:02 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:24:29 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:24:46 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 12:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:25:14 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 12:25:27 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:25:42 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 12:26:01 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 12:26:14 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 12:26:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 12:26:43 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 12:26:45 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:26:51 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 12:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:33:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:39:32 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:42:17 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:42:44 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:44:13 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:47:15 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:48:13 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:48:16 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:48:16 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:48:38 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:49:38 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:54:57 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:55:39 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:56:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 12:56:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 12:56:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 12:56:32 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:58:16 --> Could not find the language line "Home"
ERROR - 2023-09-25 12:58:39 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 12:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 12:59:03 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:02:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-25 13:03:38 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:03:40 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:03:41 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:03:59 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 13:04:06 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:04:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 13:04:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-25 13:04:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 13:04:12 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:07:32 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:07:58 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:08:11 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:09:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 13:09:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 13:10:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 13:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:11:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-25 13:11:38 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:11:45 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:18:18 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:18:32 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:19:03 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:20:41 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:25:37 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:29:19 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:29:33 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:29:50 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:30:04 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:30:21 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:30:53 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:31:13 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:31:17 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:31:37 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:32:25 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:32:36 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:35:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:36:14 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:38:41 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:43:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-25 13:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:46:31 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:48:52 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:49:37 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:51:56 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:52:04 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 13:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 13:53:45 --> Could not find the language line "Home"
ERROR - 2023-09-25 13:55:17 --> Could not find the language line "Home"
ERROR - 2023-09-25 14:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 14:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 14:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 14:11:52 --> Could not find the language line "Home"
ERROR - 2023-09-25 14:16:23 --> Could not find the language line "Home"
ERROR - 2023-09-25 14:17:12 --> Could not find the language line "Home"
ERROR - 2023-09-25 14:17:21 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 14:17:42 --> Could not find the language line "Home"
ERROR - 2023-09-25 14:18:06 --> Could not find the language line "Home"
ERROR - 2023-09-25 14:18:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 14:18:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 14:19:26 --> Could not find the language line "Home"
ERROR - 2023-09-25 14:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 14:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 14:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 14:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 14:36:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 14:36:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-25 14:36:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 14:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 14:43:48 --> Could not find the language line "Home"
ERROR - 2023-09-25 14:45:06 --> Could not find the language line "Home"
ERROR - 2023-09-25 14:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 14:51:13 --> Could not find the language line "products"
ERROR - 2023-09-25 14:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 14:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 14:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 14:57:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 14:58:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 15:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 15:07:10 --> Could not find the language line "Home"
ERROR - 2023-09-25 15:08:05 --> Could not find the language line "Home"
ERROR - 2023-09-25 15:08:05 --> Could not find the language line "Home"
ERROR - 2023-09-25 15:08:05 --> Could not find the language line "Home"
ERROR - 2023-09-25 15:08:05 --> Could not find the language line "Home"
ERROR - 2023-09-25 15:08:05 --> Could not find the language line "Home"
ERROR - 2023-09-25 15:29:18 --> Could not find the language line "Home"
ERROR - 2023-09-25 15:31:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 15:34:58 --> Could not find the language line "Home"
ERROR - 2023-09-25 15:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 15:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 15:45:15 --> Could not find the language line "Home"
ERROR - 2023-09-25 15:47:13 --> Could not find the language line "Home"
ERROR - 2023-09-25 15:50:35 --> Could not find the language line "Home"
ERROR - 2023-09-25 15:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:00:30 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:00:38 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:00:41 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:00:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 16:01:25 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:01:34 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 16:01:57 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 16:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:03:28 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 16:03:30 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 16:03:33 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:03:37 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 16:04:01 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:04:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:04:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:04:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:04:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:04:44 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:04:46 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:09:29 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:10:00 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:14:37 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:15:05 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:16:39 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:17:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 16:18:38 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-25 16:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:34:09 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:35:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 16:36:46 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:42:33 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-25 16:42:34 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-25 16:42:34 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-25 16:42:34 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-25 16:44:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 16:44:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 16:48:46 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 16:58:01 --> Could not find the language line "Home"
ERROR - 2023-09-25 16:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 17:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 17:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 17:01:55 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 17:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 17:07:00 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 17:08:33 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 17:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 17:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 17:11:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 17:14:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-25 17:14:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-25 17:14:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-25 17:14:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 17:14:39 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 17:16:20 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:16:31 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 17:16:59 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 17:17:08 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 17:17:09 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 17:17:22 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 17:31:12 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 17:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 17:38:24 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:45:05 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:47:16 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-09-25 17:47:39 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:47:58 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:48:03 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:51:26 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-25 17:51:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:51:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:51:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:51:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:51:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:51:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:59:52 --> Could not find the language line "Home"
ERROR - 2023-09-25 17:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 17:59:59 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:01:30 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 18:01:31 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:01:52 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 18:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:02:25 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 18:02:41 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 18:02:56 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 18:02:59 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:04:37 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:06:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 18:12:14 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:18:57 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:19:52 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:21:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-25 18:22:21 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 18:22:54 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:23:05 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:23:27 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:23:45 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:24:04 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:24:07 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:24:45 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:25:14 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:25:14 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:25:14 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:25:14 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:25:14 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:25:15 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:25:15 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:25:15 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:25:15 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:25:15 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:28:06 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:28:23 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:28:42 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:28:43 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 18:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:29:37 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:30:27 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:32:57 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:33:09 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:33:14 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 18:33:27 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:40:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-25 18:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:48:42 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:49:27 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:51:56 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:52:20 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 18:52:40 --> Could not find the language line "Home"
ERROR - 2023-09-25 18:53:26 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 18:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 18:54:18 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:04:31 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:05:30 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:05:36 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 19:06:07 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 19:06:32 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 19:06:44 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 19:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 19:07:46 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 19:09:40 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:09:41 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 19:09:54 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:09:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 19:10:21 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:10:27 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 19:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 19:10:46 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 19:10:59 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 19:11:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 19:11:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 19:11:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 19:11:20 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 19:11:21 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:13:24 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 19:13:45 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:14:52 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:14:53 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:14:53 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:14:53 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:14:56 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:15:48 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:23:24 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 19:23:59 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:24:02 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 19:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 19:24:17 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:24:32 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:25:09 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 19:25:10 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:28:03 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:30:04 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:35:39 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:36:17 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:36:46 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:36:56 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:38:42 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:38:49 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:40:12 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:40:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-25 19:40:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-25 19:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 19:42:21 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:42:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 19:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 19:43:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 19:45:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:47:11 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:47:40 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:48:22 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:48:46 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:48:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 19:51:45 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 19:54:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 19:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 19:55:24 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:55:31 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:55:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 19:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 19:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 19:58:46 --> Could not find the language line "Home"
ERROR - 2023-09-25 19:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:07:31 --> Could not find the language line "Home"
ERROR - 2023-09-25 20:07:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:07:49 --> Could not find the language line "Home"
ERROR - 2023-09-25 20:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:09:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:10:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:11:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:13:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:14:07 --> Could not find the language line "Home"
ERROR - 2023-09-25 20:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:15:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:16:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:17:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 20:17:22 --> Could not find the language line "Home"
ERROR - 2023-09-25 20:18:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:19:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:19:25 --> Could not find the language line "Home"
ERROR - 2023-09-25 20:19:31 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 20:19:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:19:51 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 20:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:20:08 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 20:20:10 --> Could not find the language line "Home"
ERROR - 2023-09-25 20:20:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-25 20:20:23 --> Could not find the language line "Home"
ERROR - 2023-09-25 20:20:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:20:55 --> Could not find the language line "Home"
ERROR - 2023-09-25 20:20:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:21:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:22:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:24:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-25 20:33:27 --> Could not find the language line "Home"
ERROR - 2023-09-25 20:33:59 --> Could not find the language line "Home"
ERROR - 2023-09-25 20:50:33 --> Could not find the language line "Home"
ERROR - 2023-09-25 20:56:42 --> Could not find the language line "Home"
ERROR - 2023-09-25 20:57:02 --> Could not find the language line "Home"
ERROR - 2023-09-25 20:57:04 --> Could not find the language line "Perfume"
ERROR - 2023-09-25 20:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:57:10 --> Could not find the language line "Perfume"
ERROR - 2023-09-25 20:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 20:57:14 --> Could not find the language line "Perfume"
ERROR - 2023-09-25 20:57:14 --> Could not find the language line "Home"
ERROR - 2023-09-25 21:06:28 --> Could not find the language line "Home"
ERROR - 2023-09-25 21:07:06 --> Could not find the language line "Home"
ERROR - 2023-09-25 21:07:36 --> Could not find the language line "Home"
ERROR - 2023-09-25 21:16:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 21:16:09 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 21:16:11 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-25 21:16:13 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-25 21:16:15 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-25 21:16:17 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-25 21:16:20 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-25 21:16:22 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-25 21:18:59 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 21:23:46 --> Could not find the language line "Home"
ERROR - 2023-09-25 21:25:46 --> Could not find the language line "Home"
ERROR - 2023-09-25 21:26:35 --> Could not find the language line "Home"
ERROR - 2023-09-25 21:26:38 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 21:26:59 --> Could not find the language line "Home"
ERROR - 2023-09-25 21:40:26 --> Could not find the language line "Home"
ERROR - 2023-09-25 21:45:29 --> Could not find the language line "Home"
ERROR - 2023-09-25 21:47:14 --> Could not find the language line "Home"
ERROR - 2023-09-25 21:47:21 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 21:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 21:48:10 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 21:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 21:48:22 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 21:48:26 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 21:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 21:48:47 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 21:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 21:48:53 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 21:49:14 --> Could not find the language line "Bracelets"
ERROR - 2023-09-25 21:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 22:07:31 --> Could not find the language line "Home"
ERROR - 2023-09-25 22:08:22 --> Could not find the language line "Home"
ERROR - 2023-09-25 22:08:47 --> Could not find the language line "Home"
ERROR - 2023-09-25 22:23:01 --> Could not find the language line "Home"
ERROR - 2023-09-25 22:37:52 --> Could not find the language line "Home"
ERROR - 2023-09-25 22:50:34 --> Could not find the language line "Home"
ERROR - 2023-09-25 22:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 22:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 22:52:49 --> Could not find the language line "Home"
ERROR - 2023-09-25 23:13:41 --> Could not find the language line "Home"
ERROR - 2023-09-25 23:18:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-25 23:18:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-25 23:20:31 --> Could not find the language line "Home"
ERROR - 2023-09-25 23:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 23:21:32 --> Could not find the language line "Home"
ERROR - 2023-09-25 23:21:43 --> Could not find the language line "Home"
ERROR - 2023-09-25 23:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 23:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 23:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 23:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 23:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 23:32:21 --> Could not find the language line "Home"
ERROR - 2023-09-25 23:32:27 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 23:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 23:33:42 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 23:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 23:34:13 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 23:34:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 23:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 23:34:41 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 23:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 23:35:39 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 23:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 23:35:54 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 23:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 23:36:07 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 23:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 23:36:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 23:36:41 --> Could not find the language line "Home"
ERROR - 2023-09-25 23:36:56 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 23:37:14 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 23:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-25 23:37:33 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 23:37:46 --> Could not find the language line "Clothing"
ERROR - 2023-09-25 23:43:21 --> Could not find the language line "Home"
ERROR - 2023-09-25 23:51:53 --> Could not find the language line "Home"
ERROR - 2023-09-25 23:53:19 --> Could not find the language line "Home"
