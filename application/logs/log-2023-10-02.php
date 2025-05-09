<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-02 00:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 00:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 00:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 00:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 00:17:18 --> Could not find the language line "Home"
ERROR - 2023-10-02 00:20:12 --> Could not find the language line "Home"
ERROR - 2023-10-02 00:39:58 --> Could not find the language line "Home"
ERROR - 2023-10-02 00:40:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 00:40:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 00:40:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 00:40:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 01:36:45 --> Could not find the language line "Home"
ERROR - 2023-10-02 01:44:36 --> Could not find the language line "Home"
ERROR - 2023-10-02 01:44:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 01:45:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 01:46:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 01:46:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 01:46:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 01:46:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 01:47:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 01:47:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 01:47:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 01:47:18 --> Could not find the language line "Home"
ERROR - 2023-10-02 01:47:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 01:47:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 01:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 01:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 01:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 02:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 02:31:44 --> Could not find the language line "Home"
ERROR - 2023-10-02 02:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 02:34:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 02:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 02:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 02:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 02:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 02:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 02:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 02:54:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 03:13:48 --> Could not find the language line "Home"
ERROR - 2023-10-02 03:26:16 --> Could not find the language line "Home"
ERROR - 2023-10-02 03:34:51 --> Could not find the language line "Home"
ERROR - 2023-10-02 03:51:15 --> Could not find the language line "Home"
ERROR - 2023-10-02 03:54:21 --> Could not find the language line "Home"
ERROR - 2023-10-02 03:55:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-02 03:55:48 --> Could not find the language line "Home"
ERROR - 2023-10-02 04:01:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-02 04:01:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-02 04:01:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-02 04:01:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-02 04:01:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-02 04:01:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-02 04:01:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-02 04:01:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-02 04:01:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-02 04:01:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-02 04:01:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-02 04:01:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-02 04:01:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-02 04:01:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-02 04:01:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-02 04:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 04:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 04:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 04:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 04:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 04:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 04:13:59 --> Could not find the language line "Home"
ERROR - 2023-10-02 04:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 04:19:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 04:20:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 04:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 04:23:15 --> Could not find the language line "Home"
ERROR - 2023-10-02 04:23:15 --> Could not find the language line "Home"
ERROR - 2023-10-02 04:23:15 --> Could not find the language line "Home"
ERROR - 2023-10-02 04:23:15 --> Could not find the language line "Home"
ERROR - 2023-10-02 04:23:15 --> Could not find the language line "Home"
ERROR - 2023-10-02 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-10-02 05:00:33 --> Could not find the language line "Home"
ERROR - 2023-10-02 05:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 05:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 05:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 05:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 05:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 05:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 05:07:45 --> Could not find the language line "Home"
ERROR - 2023-10-02 05:07:47 --> Could not find the language line "Home"
ERROR - 2023-10-02 05:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 05:20:21 --> Could not find the language line "Home"
ERROR - 2023-10-02 05:27:13 --> Could not find the language line "Home"
ERROR - 2023-10-02 05:34:10 --> Could not find the language line "Home"
ERROR - 2023-10-02 05:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 05:35:06 --> Could not find the language line "Home"
ERROR - 2023-10-02 05:40:17 --> Could not find the language line "Home"
ERROR - 2023-10-02 05:40:17 --> Could not find the language line "Home"
ERROR - 2023-10-02 05:40:17 --> Could not find the language line "Home"
ERROR - 2023-10-02 06:04:13 --> Could not find the language line "Home"
ERROR - 2023-10-02 06:06:22 --> Could not find the language line "Home"
ERROR - 2023-10-02 06:10:46 --> Could not find the language line "Home"
ERROR - 2023-10-02 06:19:08 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 06:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 06:20:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 06:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 06:26:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 06:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 06:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 06:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 06:32:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 06:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 06:39:59 --> Could not find the language line "Home"
ERROR - 2023-10-02 06:40:50 --> Could not find the language line "Home"
ERROR - 2023-10-02 06:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 06:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 06:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 06:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 06:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 06:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 06:46:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-02 06:46:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '27'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-02 06:46:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-02 06:49:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 06:54:02 --> Could not find the language line "Home"
ERROR - 2023-10-02 06:54:06 --> Could not find the language line "Home"
ERROR - 2023-10-02 06:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 06:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 06:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:09:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 07:15:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 07:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:15:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 07:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:16:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 07:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:16:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 07:16:53 --> Could not find the language line "Home"
ERROR - 2023-10-02 07:22:37 --> Could not find the language line "Home"
ERROR - 2023-10-02 07:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:24:08 --> Could not find the language line "Home"
ERROR - 2023-10-02 07:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:27:03 --> Could not find the language line "Home"
ERROR - 2023-10-02 07:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:36:30 --> Could not find the language line "Home"
ERROR - 2023-10-02 07:37:50 --> Could not find the language line "Home"
ERROR - 2023-10-02 07:46:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 07:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:49:21 --> Could not find the language line "Home"
ERROR - 2023-10-02 07:58:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 07:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 07:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:02:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:02:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:04:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 08:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:05:38 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:08:54 --> Could not find the language line "Socks"
ERROR - 2023-10-02 08:11:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 08:12:33 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:16:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-02 08:16:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-02 08:16:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-02 08:17:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-02 08:17:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '21'
AND `items`.`price` <= '27'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-02 08:17:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-02 08:18:05 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:18:16 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:19:44 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:20:17 --> Could not find the language line "Perfume"
ERROR - 2023-10-02 08:20:29 --> Could not find the language line "Socks"
ERROR - 2023-10-02 08:20:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:20:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:20:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-02 08:20:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:20:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:22:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:23:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:23:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:25:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:26:53 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:28:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:28:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:28:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:28:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:28:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:28:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:29:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:30:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:32:22 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:32:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:32:54 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:33:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:33:10 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:33:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:33:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 08:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:33:38 --> Could not find the language line "Socks"
ERROR - 2023-10-02 08:33:42 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:33:43 --> Could not find the language line "Socks"
ERROR - 2023-10-02 08:33:44 --> Could not find the language line "Socks"
ERROR - 2023-10-02 08:33:54 --> Could not find the language line "Socks"
ERROR - 2023-10-02 08:33:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:33:57 --> Could not find the language line "Socks"
ERROR - 2023-10-02 08:33:58 --> Could not find the language line "Socks"
ERROR - 2023-10-02 08:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:34:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:34:21 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:34:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:34:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:34:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:35:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:35:22 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:35:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:36:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:36:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:36:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:36:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:36:47 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:36:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:37:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:37:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:37:29 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:37:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:38:07 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:38:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:38:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:38:38 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:38:40 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:38:50 --> Could not find the language line "Socks"
ERROR - 2023-10-02 08:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:40:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:40:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 08:40:17 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:42:44 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:42:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:42:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:43:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:43:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:43:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:43:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:43:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:43:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:43:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:43:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:43:18 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:43:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:43:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 08:43:29 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:43:32 --> Could not find the language line "Socks"
ERROR - 2023-10-02 08:43:41 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:43:43 --> Could not find the language line "Perfume"
ERROR - 2023-10-02 08:43:49 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:43:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-02 08:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:44:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-02 08:44:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-02 08:44:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-02 08:45:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-02 08:45:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-02 08:45:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-02 08:45:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-02 08:45:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-02 08:45:34 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:47:45 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:47:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:48:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:48:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:48:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:48:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:48:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:48:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:48:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 08:49:01 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:49:04 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 08:49:23 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 08:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:50:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 08:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:50:44 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 08:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:51:02 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 08:53:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 08:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 08:53:57 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 08:54:00 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 08:54:00 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:55:31 --> Could not find the language line "Home"
ERROR - 2023-10-02 08:59:25 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-02 09:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:00:27 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:00:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 09:00:35 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:06:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 09:08:00 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:08:00 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:08:00 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:08:00 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:12:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 09:12:17 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:12:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 09:12:19 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:12:19 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:12:19 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:13:23 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:13:29 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:13:31 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:13:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 09:13:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 09:14:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 09:14:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 09:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:14:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 09:14:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 09:14:44 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:14:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 09:15:23 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:15:48 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:16:37 --> Could not find the language line "Socks"
ERROR - 2023-10-02 09:17:07 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:17:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 09:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:18:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 09:18:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 09:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:22:51 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:24:57 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:25:44 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:31:23 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:31:27 --> 404 Page Not Found: Contact_us/index
ERROR - 2023-10-02 09:31:29 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:31:32 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:37:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 09:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:40:48 --> Could not find the language line "Home"
ERROR - 2023-10-02 09:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 09:52:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-02 09:52:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-02 09:52:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-02 09:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 10:05:22 --> Could not find the language line "Home"
ERROR - 2023-10-02 10:10:19 --> Could not find the language line "Home"
ERROR - 2023-10-02 10:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 10:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 10:25:08 --> Could not find the language line "Home"
ERROR - 2023-10-02 10:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 10:28:16 --> Could not find the language line "Home"
ERROR - 2023-10-02 10:33:05 --> Could not find the language line "Home"
ERROR - 2023-10-02 10:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 10:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 10:37:08 --> Could not find the language line "Home"
ERROR - 2023-10-02 10:38:03 --> Could not find the language line "Home"
ERROR - 2023-10-02 10:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 10:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 10:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 11:20:28 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:25:19 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:25:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 11:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 11:25:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 11:25:49 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 11:26:28 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 11:27:20 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:29:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 11:29:30 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-02 11:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 11:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 11:32:44 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:35:55 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:36:05 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:36:17 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 11:40:52 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:40:52 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:40:52 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:40:52 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:40:52 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 11:47:41 --> Could not find the language line "Home"
ERROR - 2023-10-02 11:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 11:55:19 --> Could not find the language line "products"
ERROR - 2023-10-02 11:57:13 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:04:52 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:05:13 --> Could not find the language line "Socks"
ERROR - 2023-10-02 12:05:48 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:06:26 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:06:33 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 12:07:03 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:07:09 --> Could not find the language line "Perfume"
ERROR - 2023-10-02 12:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:07:28 --> Could not find the language line "Perfume"
ERROR - 2023-10-02 12:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:07:36 --> Could not find the language line "Perfume"
ERROR - 2023-10-02 12:07:37 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:25:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 12:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:26:52 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:28:29 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:29:29 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:42:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 12:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:45:57 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:46:00 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:46:32 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:48:19 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:48:27 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:48:40 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:48:44 --> Could not find the language line "Socks"
ERROR - 2023-10-02 12:48:55 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:48:57 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:49:13 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:50:35 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:53:05 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:53:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 12:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 12:57:21 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:57:22 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:59:08 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:59:37 --> Could not find the language line "Home"
ERROR - 2023-10-02 12:59:55 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 12:59:57 --> Could not find the language line "Home"
ERROR - 2023-10-02 13:01:11 --> Could not find the language line "Home"
ERROR - 2023-10-02 13:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:06:36 --> Could not find the language line "Home"
ERROR - 2023-10-02 13:11:35 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 13:11:50 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 13:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:15:00 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:15:09 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:15:16 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:15:43 --> Could not find the language line "Home"
ERROR - 2023-10-02 13:16:32 --> Could not find the language line "Home"
ERROR - 2023-10-02 13:20:16 --> Could not find the language line "Home"
ERROR - 2023-10-02 13:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:22:02 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:25:59 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:27:51 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:27:57 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:28:01 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:28:18 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:28:41 --> Could not find the language line "Home"
ERROR - 2023-10-02 13:30:32 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:30:45 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:31:17 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:31:21 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:31:47 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:32:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 13:32:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-02 13:32:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-02 13:32:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-02 13:34:41 --> Could not find the language line "Home"
ERROR - 2023-10-02 13:34:51 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:37:52 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:37:53 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:38:59 --> Could not find the language line "Home"
ERROR - 2023-10-02 13:39:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 13:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:39:19 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:39:30 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:41:35 --> Could not find the language line "Socks"
ERROR - 2023-10-02 13:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:46:47 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 13:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:48:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 13:49:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 13:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:51:35 --> 404 Page Not Found: Products/products
ERROR - 2023-10-02 13:51:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 13:51:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 13:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:54:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 13:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:56:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-02 13:57:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-02 13:57:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-02 13:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:59:23 --> Could not find the language line "Home"
ERROR - 2023-10-02 13:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 13:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:00:22 --> 404 Page Not Found: Products/products
ERROR - 2023-10-02 14:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:02:04 --> Could not find the language line "Home"
ERROR - 2023-10-02 14:03:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 14:07:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 14:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:10:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-02 14:10:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-02 14:10:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-02 14:11:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 14:11:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 14:11:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 14:12:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 14:13:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 14:13:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-02 14:13:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-02 14:13:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-02 14:14:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 14:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:20:37 --> Could not find the language line "Home"
ERROR - 2023-10-02 14:20:47 --> Could not find the language line "Home"
ERROR - 2023-10-02 14:21:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 14:21:39 --> Could not find the language line "Home"
ERROR - 2023-10-02 14:22:20 --> Could not find the language line "Home"
ERROR - 2023-10-02 14:22:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 14:23:04 --> Could not find the language line "Home"
ERROR - 2023-10-02 14:23:11 --> Could not find the language line "Home"
ERROR - 2023-10-02 14:23:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 14:23:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 14:23:34 --> Could not find the language line "Home"
ERROR - 2023-10-02 14:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:28:56 --> Could not find the language line "Home"
ERROR - 2023-10-02 14:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:31:02 --> 404 Page Not Found: Git/config
ERROR - 2023-10-02 14:31:05 --> 404 Page Not Found: Git/config
ERROR - 2023-10-02 14:31:08 --> 404 Page Not Found: Git/config
ERROR - 2023-10-02 14:32:51 --> 404 Page Not Found: Git/config
ERROR - 2023-10-02 14:33:13 --> Could not find the language line "Home"
ERROR - 2023-10-02 14:34:15 --> 404 Page Not Found: Git/config
ERROR - 2023-10-02 14:35:22 --> 404 Page Not Found: Git/config
ERROR - 2023-10-02 14:36:36 --> Could not find the language line "Socks"
ERROR - 2023-10-02 14:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:38:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-02 14:38:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-02 14:38:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-02 14:38:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 14:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 14:43:20 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 14:44:00 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 14:46:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 14:56:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 15:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:01:46 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:05:59 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:06:41 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:06:42 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:08:20 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:09:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:11:49 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-02 15:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:12:00 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:12:34 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-02 15:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:14:09 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:14:11 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-02 15:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:15:00 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-02 15:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:15:48 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-02 15:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:17:00 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-02 15:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:30:21 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:30:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 15:30:42 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:33:30 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:35:54 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:37:51 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:38:38 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:41:45 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:42:25 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:44:16 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-02 15:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 15:44:34 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-02 15:50:52 --> Could not find the language line "Socks"
ERROR - 2023-10-02 15:52:37 --> Could not find the language line "Socks"
ERROR - 2023-10-02 15:52:38 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:53:30 --> Could not find the language line "Socks"
ERROR - 2023-10-02 15:55:19 --> Could not find the language line "Socks"
ERROR - 2023-10-02 15:55:32 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:56:09 --> Could not find the language line "Home"
ERROR - 2023-10-02 15:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:00:34 --> Could not find the language line "Home"
ERROR - 2023-10-02 16:02:20 --> Could not find the language line "Home"
ERROR - 2023-10-02 16:04:35 --> Could not find the language line "Home"
ERROR - 2023-10-02 16:09:39 --> Could not find the language line "Home"
ERROR - 2023-10-02 16:09:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 16:10:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 16:10:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 16:11:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 16:12:48 --> Could not find the language line "Home"
ERROR - 2023-10-02 16:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:14:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 16:15:40 --> Could not find the language line "Home"
ERROR - 2023-10-02 16:18:29 --> Could not find the language line "Home"
ERROR - 2023-10-02 16:20:48 --> Could not find the language line "Home"
ERROR - 2023-10-02 16:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:23:16 --> Could not find the language line "Home"
ERROR - 2023-10-02 16:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:23:38 --> Could not find the language line "Home"
ERROR - 2023-10-02 16:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:27:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 16:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:28:45 --> Could not find the language line "Home"
ERROR - 2023-10-02 16:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:30:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 16:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:46:16 --> Could not find the language line "Home"
ERROR - 2023-10-02 16:48:26 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-02 16:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 16:59:48 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:08:34 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:15:10 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:15:14 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:15:21 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:18:26 --> Could not find the language line "Socks"
ERROR - 2023-10-02 17:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:18:46 --> Could not find the language line "Socks"
ERROR - 2023-10-02 17:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:18:55 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-02 17:18:56 --> Could not find the language line "Socks"
ERROR - 2023-10-02 17:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:19:05 --> Could not find the language line "Socks"
ERROR - 2023-10-02 17:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:19:17 --> Could not find the language line "Socks"
ERROR - 2023-10-02 17:20:07 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:22:44 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:24:44 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:24:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:25:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:25:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:25:25 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:25:38 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:26:39 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:27:30 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:28:12 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:31:41 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:33:20 --> Could not find the language line "Bracelets"
ERROR - 2023-10-02 17:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:37:57 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:37:57 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:37:57 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:37:57 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:37:58 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:41:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 17:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:43:32 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:43:32 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:43:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:44:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:44:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:45:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:45:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:45:38 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:46:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:46:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:46:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:46:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:47:21 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-02 17:47:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:47:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:47:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 17:48:11 --> Could not find the language line "Socks"
ERROR - 2023-10-02 17:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:55:50 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:56:38 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 17:58:14 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:58:16 --> Could not find the language line "Home"
ERROR - 2023-10-02 17:59:43 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:04:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 18:06:34 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:13:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 18:13:07 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:15:35 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:16:53 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:17:02 --> Could not find the language line "Perfume"
ERROR - 2023-10-02 18:17:16 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:17:21 --> Could not find the language line "Socks"
ERROR - 2023-10-02 18:17:31 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:19:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-02 18:19:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-02 18:19:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-02 18:20:56 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:25:27 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:25:48 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:25:49 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:29:55 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:30:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:30:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:30:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:30:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:30:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:30:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:31:08 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:31:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:31:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:31:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:31:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:32:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:32:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:32:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:32:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:32:13 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:41:00 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:41:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:41:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 18:41:08 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:42:59 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:44:08 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:45:32 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:57:28 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 18:58:10 --> Could not find the language line "Home"
ERROR - 2023-10-02 18:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 19:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 19:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 19:03:25 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:03:25 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:03:25 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:03:25 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:03:25 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:03:25 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:05:32 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:05:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 19:06:21 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:12:07 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:14:24 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:15:51 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:15:51 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:15:51 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:15:52 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:15:52 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:18:21 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-02 19:21:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 19:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 19:21:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 19:21:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 19:21:57 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:22:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 19:22:12 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:26:04 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 19:27:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 19:27:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 19:27:11 --> Could not find the language line "Perfume"
ERROR - 2023-10-02 19:27:18 --> Could not find the language line "Perfume"
ERROR - 2023-10-02 19:30:31 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:30:31 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:30:31 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:32:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 19:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 19:36:34 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 19:38:14 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 19:39:30 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:40:14 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:41:21 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:42:19 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:42:27 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:42:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 19:43:10 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:44:40 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-02 19:47:20 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-02 19:48:47 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-02 19:48:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 19:53:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 19:53:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 19:53:49 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-02 19:53:56 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-02 19:53:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 19:54:02 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-02 19:54:07 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-02 19:54:12 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-02 19:54:13 --> Could not find the language line "Home"
ERROR - 2023-10-02 19:54:17 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-02 19:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:00:23 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:00:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-02 20:01:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-02 20:01:03 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:01:18 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:01:25 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:02:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 20:02:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 20:02:43 --> Could not find the language line "Other"
ERROR - 2023-10-02 20:02:46 --> Could not find the language line "Other"
ERROR - 2023-10-02 20:04:28 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:08:15 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:08:16 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:09:58 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:18:00 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:22:03 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:22:03 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:22:03 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:27:14 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:27:47 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:28:55 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:28:56 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:29:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 20:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:29:15 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:29:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 20:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:30:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 20:30:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 20:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:30:36 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:31:02 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:31:56 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:32:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-02 20:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:32:43 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:32:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 20:33:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 20:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:34:59 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:35:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 20:35:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 20:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:35:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 20:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:35:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 20:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:36:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 20:36:36 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:36:37 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:36:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 20:36:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-02 20:37:28 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:38:51 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:50:42 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:51:12 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:55:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-02 20:55:42 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 20:58:35 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:58:41 --> Could not find the language line "Home"
ERROR - 2023-10-02 20:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:00:25 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 21:00:48 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:01:00 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 21:02:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 21:05:22 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 21:12:03 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 21:21:20 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:22:17 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:24:53 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:25:20 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:25:59 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 21:26:28 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:26:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 21:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 21:27:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 21:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 21:27:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 21:27:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 21:28:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 21:28:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 21:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 21:34:53 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:34:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 21:35:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 21:35:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 21:35:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 21:35:30 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 21:35:45 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:40:56 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:41:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-02 21:52:06 --> Could not find the language line "Home"
ERROR - 2023-10-02 21:56:28 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:06:33 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:07:09 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:07:58 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:08:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 22:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 22:08:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 22:08:44 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 22:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 22:09:47 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:13:15 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:18:20 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:18:31 --> Could not find the language line "Perfume"
ERROR - 2023-10-02 22:18:42 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:19:09 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 22:19:21 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:23:10 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:27:23 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:39:12 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:39:16 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:39:16 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:39:16 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:39:16 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:39:18 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:39:18 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:39:18 --> Could not find the language line "Home"
ERROR - 2023-10-02 22:39:18 --> Could not find the language line "Home"
ERROR - 2023-10-02 23:04:25 --> Could not find the language line "Home"
ERROR - 2023-10-02 23:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 23:06:12 --> Could not find the language line "Home"
ERROR - 2023-10-02 23:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 23:06:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 23:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 23:06:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 23:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 23:07:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 23:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 23:08:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 23:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 23:08:33 --> Could not find the language line "Home"
ERROR - 2023-10-02 23:09:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 23:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 23:09:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 23:09:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 23:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 23:11:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 23:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 23:11:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 23:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 23:11:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 23:13:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-02 23:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 23:21:55 --> Could not find the language line "Home"
ERROR - 2023-10-02 23:37:25 --> Could not find the language line "Home"
ERROR - 2023-10-02 23:46:52 --> Could not find the language line "Home"
ERROR - 2023-10-02 23:47:55 --> Could not find the language line "Home"
ERROR - 2023-10-02 23:54:10 --> Could not find the language line "Home"
ERROR - 2023-10-02 23:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-02 23:55:57 --> 404 Page Not Found: Assets/css
