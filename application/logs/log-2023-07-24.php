<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-24 00:00:23 --> Could not find the language line "Home"
ERROR - 2023-07-24 00:27:38 --> Could not find the language line "Home"
ERROR - 2023-07-24 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-24 00:37:58 --> Could not find the language line "Home"
ERROR - 2023-07-24 00:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 00:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 00:39:48 --> Could not find the language line "Home"
ERROR - 2023-07-24 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-24 01:25:54 --> Could not find the language line "Home"
ERROR - 2023-07-24 01:30:19 --> Could not find the language line "Home"
ERROR - 2023-07-24 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-24 02:13:38 --> Could not find the language line "Home"
ERROR - 2023-07-24 02:24:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-24 02:30:08 --> Could not find the language line "Home"
ERROR - 2023-07-24 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-24 03:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-24 03:08:06 --> Could not find the language line "Home"
ERROR - 2023-07-24 03:08:43 --> Could not find the language line "Home"
ERROR - 2023-07-24 03:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-24 03:37:09 --> Could not find the language line "Home"
ERROR - 2023-07-24 03:37:09 --> Could not find the language line "Home"
ERROR - 2023-07-24 03:37:09 --> Could not find the language line "Home"
ERROR - 2023-07-24 03:37:09 --> Could not find the language line "Home"
ERROR - 2023-07-24 03:37:09 --> Could not find the language line "Home"
ERROR - 2023-07-24 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-24 04:03:58 --> Could not find the language line "Home"
ERROR - 2023-07-24 04:07:42 --> Could not find the language line "Home"
ERROR - 2023-07-24 04:07:53 --> Could not find the language line "Home"
ERROR - 2023-07-24 04:08:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 04:08:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 04:09:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 04:09:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 04:09:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 04:09:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 04:09:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 04:10:00 --> Could not find the language line "Home"
ERROR - 2023-07-24 04:12:48 --> Could not find the language line "Home"
ERROR - 2023-07-24 04:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 04:13:20 --> Could not find the language line "Home"
ERROR - 2023-07-24 04:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-24 04:41:53 --> Could not find the language line "Home"
ERROR - 2023-07-24 04:43:54 --> Could not find the language line "Home"
ERROR - 2023-07-24 04:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-24 05:00:43 --> Could not find the language line "Home"
ERROR - 2023-07-24 05:05:08 --> Could not find the language line "Home"
ERROR - 2023-07-24 05:14:52 --> Could not find the language line "Home"
ERROR - 2023-07-24 05:16:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-24 05:19:25 --> Could not find the language line "Home"
ERROR - 2023-07-24 05:19:33 --> Could not find the language line "Home"
ERROR - 2023-07-24 05:19:37 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-24 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-24 05:31:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 05:31:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 05:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 05:34:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 05:34:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 05:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 05:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 05:58:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 05:58:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 05:58:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 05:58:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 06:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-24 06:05:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-24 06:05:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-24 06:05:14 --> Could not find the language line "Home"
ERROR - 2023-07-24 06:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:12:23 --> Could not find the language line "Perfume"
ERROR - 2023-07-24 06:13:25 --> Could not find the language line "Home"
ERROR - 2023-07-24 06:13:30 --> Could not find the language line "Home"
ERROR - 2023-07-24 06:22:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-24 06:22:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-24 06:22:38 --> Could not find the language line "Home"
ERROR - 2023-07-24 06:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-24 06:40:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 06:40:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 06:42:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 06:42:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 06:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:43:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 06:43:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 06:43:29 --> Could not find the language line "Home"
ERROR - 2023-07-24 06:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:44:09 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-24 06:44:09 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-24 06:44:09 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-24 06:44:10 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-24 06:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:54:08 --> Could not find the language line "Home"
ERROR - 2023-07-24 06:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:56:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 06:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 06:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-24 07:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:01:38 --> Could not find the language line "Home"
ERROR - 2023-07-24 07:03:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 07:03:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 07:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:24:59 --> Could not find the language line "Home"
ERROR - 2023-07-24 07:25:10 --> Could not find the language line "Home"
ERROR - 2023-07-24 07:25:10 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-24 07:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:28:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 07:29:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 07:29:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 07:29:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 07:29:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-24 07:29:23 --> Could not find the language line "Home"
ERROR - 2023-07-24 07:29:23 --> Could not find the language line "Home"
ERROR - 2023-07-24 07:29:23 --> Could not find the language line "Home"
ERROR - 2023-07-24 07:29:23 --> Could not find the language line "Home"
ERROR - 2023-07-24 07:29:23 --> Could not find the language line "Home"
ERROR - 2023-07-24 07:29:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-24 07:30:27 --> Could not find the language line "Home"
ERROR - 2023-07-24 07:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:32:52 --> Could not find the language line "Home"
ERROR - 2023-07-24 07:32:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 07:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:34:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 07:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:34:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 07:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:35:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 07:36:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 07:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:37:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 07:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:37:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 07:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 07:49:21 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-07-24 07:49:35 --> Could not find the language line "Home"
ERROR - 2023-07-24 07:58:09 --> Could not find the language line "Home"
ERROR - 2023-07-24 07:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-24 08:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 08:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 08:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 08:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 08:12:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 08:12:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 08:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 08:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 08:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 08:28:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-24 08:38:31 --> Could not find the language line "Home"
ERROR - 2023-07-24 08:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 08:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 08:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 08:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:10:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 09:10:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 09:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:26:57 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:26:58 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:26:58 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:26:58 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:26:58 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:26:58 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:26:58 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:28:10 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:30:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 09:30:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 09:30:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 09:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:32:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 09:32:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 09:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:33:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 09:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:36:51 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:42:43 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:42:45 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:42:46 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-24 09:42:47 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-24 09:42:47 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-24 09:42:47 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-24 09:45:10 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:47:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 09:47:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-24 09:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:56:24 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:57:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 09:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 09:59:28 --> Could not find the language line "Home"
ERROR - 2023-07-24 09:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:02:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:02:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:03:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-24 10:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:05:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-24 10:05:49 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:09:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:09:57 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:12:23 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:12:23 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:12:30 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:12:39 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:13:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 10:13:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-24 10:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:13:15 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:13:21 --> Could not find the language line "Socks"
ERROR - 2023-07-24 10:17:58 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:18:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:18:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:18:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:21:10 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:21:10 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:21:11 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-24 10:21:11 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-24 10:21:11 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-24 10:21:11 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-24 10:21:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-24 10:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:30:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 10:30:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-24 10:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:34:37 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:35:04 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:36:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 10:36:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-24 10:37:32 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:37:34 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:37:35 --> Could not find the language line "Bracelets"
ERROR - 2023-07-24 10:38:04 --> Could not find the language line "Bracelets"
ERROR - 2023-07-24 10:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:38:23 --> Could not find the language line "Bracelets"
ERROR - 2023-07-24 10:38:25 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:38:31 --> Could not find the language line "Perfume"
ERROR - 2023-07-24 10:38:42 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:38:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:39:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:39:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:40:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:40:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:40:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:40:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:40:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:40:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:40:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:42:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:42:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:50:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:50:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:50:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:50:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 10:50:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Tops')
AND `items`.`price` <= '13'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-24 10:50:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:50:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:50:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:50:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 10:50:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-24 10:51:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:52:13 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:52:22 --> Could not find the language line "Home"
ERROR - 2023-07-24 10:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:52:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:53:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:53:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:54:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:55:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:56:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:57:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 10:58:14 --> Could not find the language line "Other"
ERROR - 2023-07-24 10:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 10:58:39 --> Could not find the language line "Other"
ERROR - 2023-07-24 10:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-24 11:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-24 11:39:53 --> Could not find the language line "Home"
ERROR - 2023-07-24 11:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:41:50 --> Could not find the language line "Home"
ERROR - 2023-07-24 11:42:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 11:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 11:43:40 --> Could not find the language line "Home"
ERROR - 2023-07-24 11:44:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-24 12:01:31 --> Could not find the language line "Home"
ERROR - 2023-07-24 12:10:54 --> Could not find the language line "Home"
ERROR - 2023-07-24 12:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 12:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 12:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 12:20:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 12:20:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-24 12:27:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 12:27:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-24 12:34:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-24 12:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 12:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 12:37:30 --> Could not find the language line "Home"
ERROR - 2023-07-24 12:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 12:43:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-24 12:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 12:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 12:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 12:49:46 --> Could not find the language line "Home"
ERROR - 2023-07-24 12:50:57 --> Could not find the language line "Home"
ERROR - 2023-07-24 12:51:40 --> Could not find the language line "Home"
ERROR - 2023-07-24 12:51:51 --> Could not find the language line "Home"
ERROR - 2023-07-24 12:52:00 --> Could not find the language line "Home"
ERROR - 2023-07-24 12:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-24 13:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 13:01:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 13:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 13:04:15 --> Could not find the language line "Disclaimer"
ERROR - 2023-07-24 13:04:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 13:04:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 13:05:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 13:05:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 13:05:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 13:05:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 13:08:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 13:08:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '32'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-24 13:08:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 13:08:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '32'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-24 13:11:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 13:11:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 13:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 13:14:10 --> Could not find the language line "Home"
ERROR - 2023-07-24 13:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 13:17:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 13:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 13:19:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 13:19:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 13:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 13:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 13:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 13:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-24 13:34:52 --> Could not find the language line "Home"
ERROR - 2023-07-24 13:35:16 --> Could not find the language line "Home"
ERROR - 2023-07-24 13:37:05 --> Could not find the language line "Home"
ERROR - 2023-07-24 13:37:07 --> Could not find the language line "Home"
ERROR - 2023-07-24 13:37:08 --> Could not find the language line "Home"
ERROR - 2023-07-24 13:37:09 --> Could not find the language line "Home"
ERROR - 2023-07-24 13:37:09 --> Could not find the language line "Home"
ERROR - 2023-07-24 13:37:09 --> Could not find the language line "Home"
ERROR - 2023-07-24 13:37:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 13:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 13:39:37 --> Could not find the language line "Home"
ERROR - 2023-07-24 13:49:57 --> Could not find the language line "Home"
ERROR - 2023-07-24 13:51:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:07:43 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:07:43 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:07:47 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:09:00 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 14:10:15 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:12:43 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:12:45 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:12:45 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:12:45 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:14:38 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:14:38 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:14:38 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:14:39 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:14:40 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:18:50 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 14:26:17 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:30:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 14:32:25 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:35:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 14:37:55 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:38:31 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:42:16 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:46:05 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:49:50 --> Could not find the language line "Home"
ERROR - 2023-07-24 14:50:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-24 14:52:37 --> Could not find the language line "Home"
ERROR - 2023-07-24 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-24 15:03:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 15:03:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 15:03:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 15:03:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 15:03:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 15:03:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 15:03:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 15:03:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 15:03:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 15:03:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 15:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:09:16 --> Could not find the language line "Home"
ERROR - 2023-07-24 15:14:09 --> Could not find the language line "Home"
ERROR - 2023-07-24 15:14:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 15:14:46 --> Could not find the language line "Home"
ERROR - 2023-07-24 15:15:04 --> Could not find the language line "Home"
ERROR - 2023-07-24 15:15:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 15:15:32 --> Could not find the language line "Home"
ERROR - 2023-07-24 15:15:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 15:16:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 15:16:12 --> Could not find the language line "Home"
ERROR - 2023-07-24 15:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-24 15:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 15:49:52 --> Could not find the language line "Home"
ERROR - 2023-07-24 16:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-24 16:07:22 --> Could not find the language line "Home"
ERROR - 2023-07-24 16:07:46 --> Could not find the language line "Home"
ERROR - 2023-07-24 16:07:46 --> 404 Page Not Found: Home/indexed
ERROR - 2023-07-24 16:07:49 --> 404 Page Not Found: Home/indexe
ERROR - 2023-07-24 16:07:51 --> Could not find the language line "Home"
ERROR - 2023-07-24 16:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:11:24 --> Could not find the language line "Home"
ERROR - 2023-07-24 16:17:44 --> Could not find the language line "Home"
ERROR - 2023-07-24 16:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-24 16:31:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 16:31:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 16:31:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 16:32:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 16:32:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 16:33:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 16:33:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 16:33:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 16:33:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 16:33:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 16:34:02 --> Could not find the language line "Home"
ERROR - 2023-07-24 16:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:34:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 16:34:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 16:38:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 16:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:39:22 --> Could not find the language line "Home"
ERROR - 2023-07-24 16:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:39:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-24 16:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 16:57:34 --> Could not find the language line "Home"
ERROR - 2023-07-24 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-24 17:01:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 17:01:57 --> Could not find the language line "Home"
ERROR - 2023-07-24 17:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 17:03:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-24 17:03:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-24 17:05:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 17:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 17:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 17:05:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 17:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 17:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 17:07:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 17:07:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 17:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 17:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 17:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 17:11:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 17:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 17:15:16 --> Could not find the language line "Home"
ERROR - 2023-07-24 17:15:16 --> Could not find the language line "Home"
ERROR - 2023-07-24 17:15:16 --> Could not find the language line "Home"
ERROR - 2023-07-24 17:18:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-24 17:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 17:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 17:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 17:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-24 17:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 17:38:59 --> Could not find the language line "Home"
ERROR - 2023-07-24 17:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-24 18:00:37 --> Could not find the language line "Home"
ERROR - 2023-07-24 18:01:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-24 18:05:26 --> Could not find the language line "Bracelets"
ERROR - 2023-07-24 18:05:34 --> Could not find the language line "Bracelets"
ERROR - 2023-07-24 18:05:39 --> Could not find the language line "Bracelets"
ERROR - 2023-07-24 18:13:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 18:15:30 --> Could not find the language line "Home"
ERROR - 2023-07-24 18:18:13 --> Could not find the language line "Home"
ERROR - 2023-07-24 18:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:23:51 --> Could not find the language line "Home"
ERROR - 2023-07-24 18:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-24 18:37:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 18:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 18:46:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-24 19:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-24 19:21:39 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-24 19:26:30 --> Could not find the language line "Home"
ERROR - 2023-07-24 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-24 19:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 19:34:42 --> Could not find the language line "Home"
ERROR - 2023-07-24 19:36:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 19:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 19:37:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 19:38:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 19:38:41 --> Could not find the language line "Other"
ERROR - 2023-07-24 19:39:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 19:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 19:59:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 20:00:10 --> Could not find the language line "Home"
ERROR - 2023-07-24 20:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 20:17:13 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-07-24 20:17:16 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-24 20:25:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-24 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-24 20:34:28 --> Could not find the language line "Home"
ERROR - 2023-07-24 20:43:34 --> Could not find the language line "Home"
ERROR - 2023-07-24 20:46:05 --> Could not find the language line "Home"
ERROR - 2023-07-24 21:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-24 21:07:18 --> Could not find the language line "Home"
ERROR - 2023-07-24 21:08:55 --> Could not find the language line "Home"
ERROR - 2023-07-24 21:09:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 21:10:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 21:10:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 21:11:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:11:13 --> Could not find the language line "Home"
ERROR - 2023-07-24 21:11:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:11:34 --> Could not find the language line "Home"
ERROR - 2023-07-24 21:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 21:11:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 21:12:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 21:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 21:12:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 21:13:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 21:13:41 --> Could not find the language line "Home"
ERROR - 2023-07-24 21:13:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 21:14:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:14:12 --> Could not find the language line "Home"
ERROR - 2023-07-24 21:14:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:14:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 21:14:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 21:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-24 21:15:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:15:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:15:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 21:19:28 --> Could not find the language line "Home"
ERROR - 2023-07-24 21:19:28 --> Could not find the language line "Home"
ERROR - 2023-07-24 21:20:00 --> Could not find the language line "Home"
ERROR - 2023-07-24 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-24 21:43:48 --> Could not find the language line "Home"
ERROR - 2023-07-24 21:57:24 --> Could not find the language line "Home"
ERROR - 2023-07-24 21:57:26 --> Could not find the language line "Home"
ERROR - 2023-07-24 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-24 22:21:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-24 22:22:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-24 22:30:19 --> Could not find the language line "Home"
ERROR - 2023-07-24 22:48:59 --> Could not find the language line "Home"
ERROR - 2023-07-24 22:51:29 --> Could not find the language line "Home"
ERROR - 2023-07-24 22:54:03 --> Could not find the language line "Home"
ERROR - 2023-07-24 22:56:43 --> Could not find the language line "Home"
ERROR - 2023-07-24 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-24 23:30:17 --> Could not find the language line "Home"
