<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-29 00:00:23 --> Could not find the language line "Home"
ERROR - 2023-08-29 00:25:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 00:26:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-29 00:33:35 --> Could not find the language line "Home"
ERROR - 2023-08-29 01:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-29 01:12:20 --> Could not find the language line "Other"
ERROR - 2023-08-29 01:20:55 --> Could not find the language line "Home"
ERROR - 2023-08-29 01:30:20 --> Could not find the language line "Home"
ERROR - 2023-08-29 02:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-29 02:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 02:10:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 02:14:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 02:14:12 --> Could not find the language line "Home"
ERROR - 2023-08-29 02:16:17 --> Could not find the language line "Home"
ERROR - 2023-08-29 02:17:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 02:21:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 02:30:20 --> Could not find the language line "Home"
ERROR - 2023-08-29 02:43:51 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-29 02:54:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 03:00:23 --> Could not find the language line "Home"
ERROR - 2023-08-29 03:29:57 --> Could not find the language line "Home"
ERROR - 2023-08-29 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-29 03:31:12 --> Could not find the language line "Home"
ERROR - 2023-08-29 03:33:43 --> Could not find the language line "Home"
ERROR - 2023-08-29 03:36:06 --> Could not find the language line "Home"
ERROR - 2023-08-29 03:51:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 03:52:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-29 04:06:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 04:06:54 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-29 04:06:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-29 04:07:00 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-29 04:07:03 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-29 04:07:07 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-29 04:07:12 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-29 04:07:16 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-29 04:18:52 --> Could not find the language line "Socks"
ERROR - 2023-08-29 04:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 04:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-29 04:58:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 04:59:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 04:59:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 04:59:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 04:59:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 04:59:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 04:59:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 04:59:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 04:59:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 04:59:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 04:59:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-29 05:04:58 --> Could not find the language line "Home"
ERROR - 2023-08-29 05:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 05:26:13 --> Could not find the language line "Home"
ERROR - 2023-08-29 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-29 05:43:31 --> Could not find the language line "Home"
ERROR - 2023-08-29 05:45:14 --> Could not find the language line "Home"
ERROR - 2023-08-29 05:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 05:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 05:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-29 06:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:03:51 --> Could not find the language line "Home"
ERROR - 2023-08-29 06:06:14 --> Could not find the language line "Other"
ERROR - 2023-08-29 06:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:07:41 --> Could not find the language line "Home"
ERROR - 2023-08-29 06:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:10:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 06:10:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 06:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:19:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 06:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:22:15 --> Could not find the language line "Home"
ERROR - 2023-08-29 06:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:23:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 06:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:24:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:24:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:24:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:24:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:24:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:24:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:24:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:24:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:24:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:24:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:25:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:25:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:25:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 06:29:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 06:29:06 --> Could not find the language line "Home"
ERROR - 2023-08-29 06:29:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:29:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:29:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:29:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:29:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:29:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 06:29:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 06:29:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 06:29:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 06:29:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-29 06:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:33:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:33:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:33:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:33:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:33:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:33:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:33:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:33:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:33:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:33:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:36:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:36:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 06:37:58 --> 404 Page Not Found: Wp-admin/css
ERROR - 2023-08-29 06:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:39:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 06:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:41:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:41:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '12'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 06:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:43:58 --> Could not find the language line "Home"
ERROR - 2023-08-29 06:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:44:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:44:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:44:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:44:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:44:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:44:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:44:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:44:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:44:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:44:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:45:21 --> Could not find the language line "Home"
ERROR - 2023-08-29 06:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:46:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 06:46:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 06:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-29 06:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:49:04 --> Could not find the language line "Home"
ERROR - 2023-08-29 06:50:51 --> Could not find the language line "Home"
ERROR - 2023-08-29 06:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:52:25 --> Could not find the language line "Home"
ERROR - 2023-08-29 06:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:53:01 --> Could not find the language line "Home"
ERROR - 2023-08-29 06:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:54:38 --> Could not find the language line "Home"
ERROR - 2023-08-29 06:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 06:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-29 07:02:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 07:02:11 --> Could not find the language line "Home"
ERROR - 2023-08-29 07:03:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 07:05:49 --> Could not find the language line "Home"
ERROR - 2023-08-29 07:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:06:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 07:09:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 07:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:10:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 07:14:13 --> Could not find the language line "Home"
ERROR - 2023-08-29 07:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:17:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 07:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:25:59 --> Could not find the language line "Home"
ERROR - 2023-08-29 07:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:27:57 --> Could not find the language line "Home"
ERROR - 2023-08-29 07:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-29 07:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:35:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 07:38:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 07:38:52 --> Could not find the language line "Home"
ERROR - 2023-08-29 07:39:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 07:40:57 --> Could not find the language line "Home"
ERROR - 2023-08-29 07:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:44:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 07:44:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 07:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:44:37 --> Could not find the language line "assets"
ERROR - 2023-08-29 07:45:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 07:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:51:27 --> Could not find the language line "Home"
ERROR - 2023-08-29 07:51:28 --> Could not find the language line "Home"
ERROR - 2023-08-29 07:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 07:58:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 07:58:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 07:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-29 08:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 08:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 08:07:54 --> Could not find the language line "Home"
ERROR - 2023-08-29 08:15:10 --> Could not find the language line "Home"
ERROR - 2023-08-29 08:15:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 08:15:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 08:15:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 08:15:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 08:15:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 08:15:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 08:15:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 08:15:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 08:15:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 08:15:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 08:18:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 08:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 08:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 08:23:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal '))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-29 08:25:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:26:49 --> Could not find the language line "Home"
ERROR - 2023-08-29 08:26:49 --> Could not find the language line "Home"
ERROR - 2023-08-29 08:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 08:28:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-29 08:30:44 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:31:37 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:32:04 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:32:57 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:33:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:33:02 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:33:23 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:33:28 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:33:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:34:02 --> Could not find the language line "Home"
ERROR - 2023-08-29 08:34:42 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:34:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 08:35:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:35:36 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:35:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:35:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:36:02 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:36:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 08:36:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:36:33 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 08:36:55 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:37:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:38:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:39:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 08:39:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:39:39 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:40:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:40:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 08:40:28 --> Could not find the language line "Home"
ERROR - 2023-08-29 08:40:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:43:08 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:43:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:44:01 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:44:03 --> Could not find the language line "Home"
ERROR - 2023-08-29 08:44:29 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:44:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:44:53 --> Could not find the language line "Socks"
ERROR - 2023-08-29 08:45:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 08:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 08:47:04 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:47:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:47:59 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:48:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:48:28 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:48:49 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:49:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:51:28 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:51:57 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:52:24 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:53:16 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:54:10 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:54:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:54:36 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:55:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:55:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 08:55:29 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:55:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:56:15 --> Could not find the language line "Home"
ERROR - 2023-08-29 08:57:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 08:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 08:57:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 08:57:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 08:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 08:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 08:58:34 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 08:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 08:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 08:59:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 09:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-29 09:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:00:55 --> Could not find the language line "Home"
ERROR - 2023-08-29 09:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:02:56 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 09:03:50 --> 404 Page Not Found: Products/products
ERROR - 2023-08-29 09:04:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 09:05:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 09:05:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 09:06:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 09:06:46 --> Could not find the language line "Home"
ERROR - 2023-08-29 09:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:11:21 --> Could not find the language line "Home"
ERROR - 2023-08-29 09:11:34 --> Could not find the language line "Home"
ERROR - 2023-08-29 09:11:36 --> Could not find the language line "Home"
ERROR - 2023-08-29 09:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:13:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 09:13:38 --> Could not find the language line "Home"
ERROR - 2023-08-29 09:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:16:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:16:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 09:16:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 09:16:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:16:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:16:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:17:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 09:17:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '5'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 09:17:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:17:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 09:17:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '7'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 09:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:18:46 --> Could not find the language line "Home"
ERROR - 2023-08-29 09:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:19:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 09:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:20:44 --> Could not find the language line "Home"
ERROR - 2023-08-29 09:20:47 --> Could not find the language line "Home"
ERROR - 2023-08-29 09:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-29 09:31:35 --> Could not find the language line "Home"
ERROR - 2023-08-29 09:32:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 09:33:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:34:06 --> Could not find the language line "Home"
ERROR - 2023-08-29 09:34:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:34:22 --> Could not find the language line "Home"
ERROR - 2023-08-29 09:35:02 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-29 09:35:02 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-29 09:35:03 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-29 09:35:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-29 09:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:39:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:40:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:41:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:47:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 09:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:47:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 09:48:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 09:48:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:48:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:48:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:48:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 09:48:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 09:48:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '8'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 09:49:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 09:51:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 09:51:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-29 10:00:05 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-29 10:00:06 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-29 10:00:06 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-29 10:00:07 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-29 10:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-29 10:02:35 --> Could not find the language line "Home"
ERROR - 2023-08-29 10:02:35 --> Could not find the language line "Home"
ERROR - 2023-08-29 10:02:35 --> Could not find the language line "Home"
ERROR - 2023-08-29 10:02:36 --> Could not find the language line "Home"
ERROR - 2023-08-29 10:02:36 --> Could not find the language line "Home"
ERROR - 2023-08-29 10:02:36 --> Could not find the language line "Home"
ERROR - 2023-08-29 10:04:11 --> 404 Page Not Found: Wp-22php/index
ERROR - 2023-08-29 10:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 10:08:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:08:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 10:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 10:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 10:13:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 10:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 10:21:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-29 10:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 10:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 10:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 10:22:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 10:22:56 --> Could not find the language line "Home"
ERROR - 2023-08-29 10:23:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:24:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:24:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:27:07 --> Could not find the language line "Home"
ERROR - 2023-08-29 10:27:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:27:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-29 10:30:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:32:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:33:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:33:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:34:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:34:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 10:34:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 10:36:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:36:13 --> Could not find the language line "Home"
ERROR - 2023-08-29 10:36:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:37:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 10:42:07 --> Could not find the language line "Home"
ERROR - 2023-08-29 10:42:15 --> Could not find the language line "Home"
ERROR - 2023-08-29 10:42:16 --> 404 Page Not Found: Home/assets
ERROR - 2023-08-29 10:42:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 10:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 10:52:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 10:52:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 10:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 10:55:11 --> Could not find the language line "Home"
ERROR - 2023-08-29 10:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 10:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 10:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 11:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-29 11:00:28 --> Could not find the language line "Home"
ERROR - 2023-08-29 11:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 11:01:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 11:03:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 11:03:08 --> Could not find the language line "Home"
ERROR - 2023-08-29 11:05:12 --> Could not find the language line "Home"
ERROR - 2023-08-29 11:14:04 --> Could not find the language line "Home"
ERROR - 2023-08-29 11:18:27 --> Could not find the language line "Home"
ERROR - 2023-08-29 11:25:40 --> Could not find the language line "Home"
ERROR - 2023-08-29 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-29 11:30:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 11:32:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 11:32:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 11:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 11:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 11:33:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 11:33:49 --> Could not find the language line "Home"
ERROR - 2023-08-29 11:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 11:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 11:35:30 --> Could not find the language line "Home"
ERROR - 2023-08-29 11:35:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 11:35:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 11:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 11:43:58 --> Could not find the language line "Home"
ERROR - 2023-08-29 11:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 11:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 11:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 11:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 11:58:23 --> Could not find the language line "Home"
ERROR - 2023-08-29 11:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 11:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:03:38 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:05:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 12:05:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 12:05:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 12:05:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 12:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:24:32 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:24:49 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:25:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 12:25:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 12:26:24 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:26:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 12:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:27:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 12:28:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 12:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:32:09 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:32:53 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:32:59 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:33:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 12:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:33:27 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:39:10 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:39:30 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:40:08 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:40:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 12:40:59 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:41:46 --> Could not find the language line "Socks"
ERROR - 2023-08-29 12:43:05 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:47:36 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:52:30 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:52:45 --> Could not find the language line "Home"
ERROR - 2023-08-29 12:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 12:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 13:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 13:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-29 13:03:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 13:03:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-29 13:03:27 --> Could not find the language line "Home"
ERROR - 2023-08-29 13:03:40 --> Could not find the language line "Home"
ERROR - 2023-08-29 13:03:49 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-29 13:03:49 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-29 13:03:50 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-29 13:03:50 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-29 13:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 13:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 13:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 13:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 13:06:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 13:06:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 13:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 13:12:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-29 13:12:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-29 13:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 13:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 13:20:27 --> Could not find the language line "Home"
ERROR - 2023-08-29 13:21:51 --> Could not find the language line "Home"
ERROR - 2023-08-29 13:28:50 --> Could not find the language line "Home"
ERROR - 2023-08-29 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-29 13:32:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 13:34:22 --> Could not find the language line "Home"
ERROR - 2023-08-29 13:34:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-29 13:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 13:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 13:46:17 --> Could not find the language line "Home"
ERROR - 2023-08-29 13:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 13:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 13:56:24 --> Could not find the language line "Home"
ERROR - 2023-08-29 13:56:46 --> Could not find the language line "Home"
ERROR - 2023-08-29 13:59:48 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:04:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-29 14:07:25 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:07:58 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:11:40 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:23:28 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:23:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 14:23:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 14:23:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 14:23:31 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-29 14:23:31 --> 404 Page Not Found: Home/home
ERROR - 2023-08-29 14:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:30:21 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:30:55 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:30:55 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:36:13 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:39:42 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:43:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-29 14:43:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-29 14:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:49:02 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:49:51 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:56:06 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:57:08 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:57:15 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:57:22 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:58:37 --> Could not find the language line "Home"
ERROR - 2023-08-29 14:58:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 14:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 14:59:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 15:00:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-29 15:00:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 15:00:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 15:01:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 15:01:30 --> Could not find the language line "Home"
ERROR - 2023-08-29 15:02:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 15:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 15:02:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 15:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 15:02:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 15:02:33 --> Could not find the language line "Home"
ERROR - 2023-08-29 15:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 15:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 15:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 15:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 15:12:17 --> Could not find the language line "Home"
ERROR - 2023-08-29 15:17:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 15:17:25 --> Could not find the language line "Home"
ERROR - 2023-08-29 15:18:58 --> Could not find the language line "Home"
ERROR - 2023-08-29 15:19:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 15:19:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 15:19:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 15:19:03 --> Could not find the language line "Home"
ERROR - 2023-08-29 15:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-29 15:32:15 --> Could not find the language line "Home"
ERROR - 2023-08-29 15:34:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-29 15:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 15:48:10 --> Could not find the language line "Home"
ERROR - 2023-08-29 15:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 15:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 15:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 15:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 15:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 15:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 15:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 16:00:18 --> Could not find the language line "Home"
ERROR - 2023-08-29 16:00:52 --> Could not find the language line "Home"
ERROR - 2023-08-29 16:10:14 --> Could not find the language line "Home"
ERROR - 2023-08-29 16:19:00 --> Could not find the language line "Home"
ERROR - 2023-08-29 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-29 16:43:34 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-29 16:45:39 --> Could not find the language line "Home"
ERROR - 2023-08-29 16:45:44 --> Could not find the language line "Home"
ERROR - 2023-08-29 16:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 16:47:14 --> Could not find the language line "Home"
ERROR - 2023-08-29 16:53:10 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:01:33 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:01:38 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:02:21 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:03:26 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:15:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 17:15:29 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-29 17:17:15 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:17:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 17:19:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 17:19:44 --> Could not find the language line "Socks"
ERROR - 2023-08-29 17:20:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-29 17:20:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 17:20:20 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:25:59 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:26:00 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:26:00 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:26:00 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:26:00 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:26:00 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:26:43 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:30:20 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:41:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 17:45:32 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 17:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 17:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 17:48:10 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:55:03 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:55:11 --> Could not find the language line "Home"
ERROR - 2023-08-29 17:55:22 --> Could not find the language line "Home"
ERROR - 2023-08-29 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-29 18:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 18:10:08 --> Could not find the language line "Home"
ERROR - 2023-08-29 18:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-29 18:36:12 --> Could not find the language line "Home"
ERROR - 2023-08-29 18:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 18:41:07 --> Could not find the language line "Home"
ERROR - 2023-08-29 18:42:38 --> Could not find the language line "Home"
ERROR - 2023-08-29 18:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 18:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 18:48:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 18:48:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 18:48:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 18:48:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 18:48:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 18:48:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 18:48:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 18:48:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 18:48:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 18:48:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 18:55:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-29 18:55:55 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:08:32 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:11:00 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:15:05 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 19:21:29 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 19:26:51 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:28:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-29 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:41:23 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:41:26 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:43:33 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:43:33 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:43:33 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:43:35 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:43:35 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:43:35 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:46:56 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:47:03 --> Could not find the language line "Home"
ERROR - 2023-08-29 19:54:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 19:54:56 --> Could not find the language line "Home"
ERROR - 2023-08-29 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-29 20:00:58 --> Could not find the language line "Home"
ERROR - 2023-08-29 20:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 20:05:05 --> Could not find the language line "Home"
ERROR - 2023-08-29 20:11:34 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-29 20:14:20 --> Could not find the language line "Home"
ERROR - 2023-08-29 20:14:21 --> Could not find the language line "Home"
ERROR - 2023-08-29 20:14:24 --> Could not find the language line "Home"
ERROR - 2023-08-29 20:14:24 --> Could not find the language line "Home"
ERROR - 2023-08-29 20:14:24 --> Could not find the language line "Home"
ERROR - 2023-08-29 20:14:24 --> Could not find the language line "Home"
ERROR - 2023-08-29 20:14:24 --> Could not find the language line "Home"
ERROR - 2023-08-29 20:20:26 --> 404 Page Not Found: Wp-admin/css
ERROR - 2023-08-29 20:24:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 20:29:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-29 20:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-29 20:35:28 --> Could not find the language line "Home"
ERROR - 2023-08-29 20:39:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-29 20:39:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-29 20:42:09 --> Could not find the language line "Home"
ERROR - 2023-08-29 20:56:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 20:58:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 20:58:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 20:58:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 20:58:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 20:58:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 20:58:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 20:58:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 20:58:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 20:58:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 20:58:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-29 20:58:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 20:58:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 20:58:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 20:58:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-29 20:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:00:25 --> Could not find the language line "Home"
ERROR - 2023-08-29 21:01:20 --> Could not find the language line "Other"
ERROR - 2023-08-29 21:02:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-29 21:05:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-29 21:09:18 --> Could not find the language line "Home"
ERROR - 2023-08-29 21:11:41 --> Could not find the language line "Home"
ERROR - 2023-08-29 21:12:03 --> Could not find the language line "Home"
ERROR - 2023-08-29 21:13:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 21:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:16:01 --> Could not find the language line "Home"
ERROR - 2023-08-29 21:17:33 --> Could not find the language line "Other"
ERROR - 2023-08-29 21:18:29 --> Could not find the language line "Home"
ERROR - 2023-08-29 21:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:19:07 --> Could not find the language line "Home"
ERROR - 2023-08-29 21:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:26:25 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-29 21:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-29 21:31:10 --> Could not find the language line "Home"
ERROR - 2023-08-29 21:31:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 21:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:31:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 21:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:33:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 21:33:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 21:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:34:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 21:34:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 21:35:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 21:35:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-29 21:35:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 21:35:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 21:35:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 21:37:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 21:41:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 21:44:57 --> Could not find the language line "Other"
ERROR - 2023-08-29 21:53:41 --> Could not find the language line "Home"
ERROR - 2023-08-29 21:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 21:57:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 21:58:00 --> Could not find the language line "Home"
ERROR - 2023-08-29 21:59:28 --> Could not find the language line "Bracelets"
ERROR - 2023-08-29 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-29 22:00:13 --> Could not find the language line "Bracelets"
ERROR - 2023-08-29 22:00:17 --> Could not find the language line "Bracelets"
ERROR - 2023-08-29 22:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 22:00:35 --> Could not find the language line "Bracelets"
ERROR - 2023-08-29 22:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 22:01:25 --> Could not find the language line "Bracelets"
ERROR - 2023-08-29 22:10:41 --> Could not find the language line "Home"
ERROR - 2023-08-29 22:15:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 22:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-29 22:34:04 --> Could not find the language line "Home"
ERROR - 2023-08-29 22:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 22:43:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-29 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-29 23:05:29 --> Could not find the language line "Home"
ERROR - 2023-08-29 23:20:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-29 23:23:53 --> Could not find the language line "Socks"
ERROR - 2023-08-29 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-29 23:33:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-29 23:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-29 23:53:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-29 23:58:08 --> Could not find the language line "Clothing"
