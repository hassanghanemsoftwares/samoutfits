<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-04 00:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-04 00:01:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 00:07:49 --> Could not find the language line "Home"
ERROR - 2023-07-04 00:07:49 --> Could not find the language line "Home"
ERROR - 2023-07-04 00:07:49 --> Could not find the language line "Home"
ERROR - 2023-07-04 00:07:49 --> Could not find the language line "Home"
ERROR - 2023-07-04 00:07:49 --> Could not find the language line "Home"
ERROR - 2023-07-04 00:07:52 --> Could not find the language line "Home"
ERROR - 2023-07-04 00:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-04 00:35:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-04 00:39:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-04 00:59:22 --> Could not find the language line "Home"
ERROR - 2023-07-04 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-04 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-04 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 02:29:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-04 02:44:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-04 02:45:03 --> Could not find the language line "Home"
ERROR - 2023-07-04 02:45:03 --> Could not find the language line "Home"
ERROR - 2023-07-04 03:00:20 --> Could not find the language line "Home"
ERROR - 2023-07-04 03:11:09 --> Could not find the language line "Home"
ERROR - 2023-07-04 03:13:41 --> Could not find the language line "Home"
ERROR - 2023-07-04 03:14:21 --> Could not find the language line "Home"
ERROR - 2023-07-04 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-04 03:34:02 --> Could not find the language line "Home"
ERROR - 2023-07-04 03:38:47 --> Could not find the language line "Perfume"
ERROR - 2023-07-04 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-04 04:17:54 --> Could not find the language line "Home"
ERROR - 2023-07-04 04:18:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 04:18:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 04:18:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 04:19:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 04:27:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-04 04:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-04 04:36:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 04:36:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 04:40:59 --> Could not find the language line "Home"
ERROR - 2023-07-04 04:47:36 --> Could not find the language line "Home"
ERROR - 2023-07-04 04:49:28 --> Could not find the language line "Home"
ERROR - 2023-07-04 04:50:30 --> Could not find the language line "Home"
ERROR - 2023-07-04 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-04 05:01:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 05:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 05:02:24 --> Could not find the language line "Home"
ERROR - 2023-07-04 05:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 05:02:55 --> Could not find the language line "Home"
ERROR - 2023-07-04 05:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 05:03:27 --> Could not find the language line "Home"
ERROR - 2023-07-04 05:11:26 --> Could not find the language line "Home"
ERROR - 2023-07-04 05:23:41 --> Could not find the language line "Home"
ERROR - 2023-07-04 05:26:27 --> Could not find the language line "Home"
ERROR - 2023-07-04 05:26:37 --> Could not find the language line "Home"
ERROR - 2023-07-04 05:26:39 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-04 05:27:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 05:27:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 05:27:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 05:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 05:33:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 05:33:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-04 05:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 05:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 05:42:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 05:43:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 05:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 05:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 05:46:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 05:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 05:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 05:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 05:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 05:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 05:48:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 05:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 05:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:02:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 06:02:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 06:04:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:14:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:18:47 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:20:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:20:33 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:23:44 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:23:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:23:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:24:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:24:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:24:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 06:24:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Shorts')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-04 06:24:17 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:24:33 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:32:42 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:33:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 06:33:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 06:34:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:34:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:34:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:34:59 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:35:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:35:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:35:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:36:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:37:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:37:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 06:37:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 06:37:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:37:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:37:44 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-04 06:37:44 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-04 06:37:45 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-04 06:37:45 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-04 06:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:38:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:39:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:40:02 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:41:01 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:41:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:41:15 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:42:02 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:42:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:43:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:43:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:43:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:45:30 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:45:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:45:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:46:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:49:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:52:04 --> Could not find the language line "Home"
ERROR - 2023-07-04 06:52:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:54:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 06:58:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:58:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:58:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 06:59:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:00:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:01:00 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:01:37 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:03:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:03:51 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:03:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:03:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:03:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 07:03:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Tops')
AND `items`.`price` <= '13'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-04 07:04:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:04:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:04:27 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-04 07:04:27 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-04 07:04:27 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-04 07:04:28 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-04 07:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:04:52 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:04:57 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:04:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:05:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:05:18 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:05:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:05:23 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:05:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:05:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:07:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:07:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:07:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:08:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:09:04 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:09:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:13:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:13:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:13:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:15:06 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:19:42 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:20:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:22:06 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:22:06 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:22:06 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:22:25 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:24:21 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:24:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 07:24:34 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:24:41 --> Could not find the language line "Bracelets"
ERROR - 2023-07-04 07:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:24:48 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:24:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-04 07:25:19 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:25:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:31:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:33:31 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:40:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:44:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:46:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:46:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:46:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:47:16 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:47:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:47:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:47:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:48:14 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:49:23 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:50:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 07:50:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 07:50:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:50:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:51:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:51:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:52:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:52:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:52:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:52:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:52:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:53:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 07:53:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-04 07:53:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 07:55:25 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:56:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-04 07:56:46 --> Could not find the language line "Home"
ERROR - 2023-07-04 07:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 07:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:01:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 08:01:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 08:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:05:15 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:05:23 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:05:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 08:05:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 08:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:06:44 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:07:03 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:09:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 08:09:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 08:09:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:09:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 08:09:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 08:09:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:09:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 08:09:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 08:10:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 08:10:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 08:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:10:30 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:10:38 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:11:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-04 08:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:18:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:18:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:18:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:18:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:18:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:18:49 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:18:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:19:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-04 08:19:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-04 08:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:21:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:23:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-04 08:23:47 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:24:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:24:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:25:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-04 08:25:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:25:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 08:25:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 08:25:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-04 08:25:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-04 08:25:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 08:25:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-04 08:26:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:26:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-04 08:26:22 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:26:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 08:26:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 08:27:09 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:27:16 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:27:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:27:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:27:48 --> Could not find the language line "Perfume"
ERROR - 2023-07-04 08:28:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:29:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 08:29:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 08:29:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 08:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:34:34 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:36:07 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:50:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 08:50:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-04 08:51:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-04 08:52:30 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:52:51 --> Could not find the language line "Home"
ERROR - 2023-07-04 08:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 08:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-04 09:02:26 --> Could not find the language line "Home"
ERROR - 2023-07-04 09:03:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 09:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:06:01 --> Could not find the language line "Home"
ERROR - 2023-07-04 09:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:06:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 09:06:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 09:06:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 09:06:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 09:06:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 09:06:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 09:06:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 09:06:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 09:06:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 09:06:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 09:06:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 09:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:11:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 09:11:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 09:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:13:43 --> Could not find the language line "Home"
ERROR - 2023-07-04 09:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:17:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 09:17:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 09:17:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 09:17:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 09:17:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 09:17:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 09:17:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 09:17:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 09:17:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 09:17:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 09:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:17:06 --> Could not find the language line "Home"
ERROR - 2023-07-04 09:26:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 09:26:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 09:26:40 --> Could not find the language line "Home"
ERROR - 2023-07-04 09:29:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-04 09:29:35 --> Could not find the language line "Home"
ERROR - 2023-07-04 09:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:29:53 --> Could not find the language line "Home"
ERROR - 2023-07-04 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 09:33:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 09:33:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-04 09:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:35:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 09:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:39:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 09:42:12 --> Could not find the language line "Home"
ERROR - 2023-07-04 09:55:50 --> Could not find the language line "Home"
ERROR - 2023-07-04 09:56:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 09:56:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 09:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 09:56:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:01:45 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:01:46 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:02:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 10:02:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-04 10:02:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:04:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 10:04:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 10:05:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:08:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:08:56 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:09:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:09:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:09:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:09:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 10:09:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 10:09:35 --> Could not find the language line "assets"
ERROR - 2023-07-04 10:09:35 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:09:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 10:09:59 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:10:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:10:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:13:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 10:13:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-04 10:14:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 10:14:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 10:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:17:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:17:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 10:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:18:13 --> Could not find the language line "Bracelets"
ERROR - 2023-07-04 10:18:27 --> Could not find the language line "Bracelets"
ERROR - 2023-07-04 10:19:25 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-04 10:19:25 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-04 10:19:25 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-04 10:19:25 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-04 10:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:24:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:30:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:35:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:35:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:38:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 10:38:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 10:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:42:18 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:42:24 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:42:25 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-04 10:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:44:07 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-04 10:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:45:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:46:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:46:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:47:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 10:53:59 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:58:54 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 10:59:53 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:59:53 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:59:53 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:59:53 --> Could not find the language line "Home"
ERROR - 2023-07-04 10:59:53 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:01:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 11:01:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 11:01:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 11:01:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 11:02:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 11:02:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 11:02:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 11:02:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 11:02:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 11:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:05:14 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:05:45 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:05:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 11:06:18 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:06:33 --> Could not find the language line "Perfume"
ERROR - 2023-07-04 11:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:06:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 11:06:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 11:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:06:58 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:11:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:13:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-04 11:14:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 11:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:17:54 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:18:11 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:18:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:19:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 11:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:19:21 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:19:22 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:19:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 11:20:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 11:21:05 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:21:56 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:27:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-04 11:27:26 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:27:31 --> Could not find the language line "Perfume"
ERROR - 2023-07-04 11:27:32 --> Could not find the language line "Perfume"
ERROR - 2023-07-04 11:27:32 --> Could not find the language line "Perfume"
ERROR - 2023-07-04 11:27:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 11:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:28:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 11:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:29:25 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:32:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 11:34:47 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 11:35:36 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:36:55 --> Could not find the language line "Home"
ERROR - 2023-07-04 11:38:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-04 11:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:00:45 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:02:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:02:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:02:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:02:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:02:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:02:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:02:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:02:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:03:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:03:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:03:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:03:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:03:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:03:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:03:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:03:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:03:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:03:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:03:33 --> Could not find the language line "Bracelets"
ERROR - 2023-07-04 12:03:47 --> Could not find the language line "Other"
ERROR - 2023-07-04 12:04:04 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:04:53 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:05:26 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:05:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:05:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:05:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:05:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 12:06:01 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:06:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 12:06:28 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:06:34 --> Could not find the language line "Perfume"
ERROR - 2023-07-04 12:06:39 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:07:17 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:07:18 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-04 12:07:18 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-04 12:07:19 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-04 12:07:19 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-04 12:07:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:08:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:08:29 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:08:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:14:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:23:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:23:37 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:24:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:24:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:25:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:25:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:25:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:26:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 12:26:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Shorts')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-04 12:27:06 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:29:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:30:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:30:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:31:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:31:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 12:31:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 12:33:02 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:36:39 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:39:48 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:42:37 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:43:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:44:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 12:44:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 12:44:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 12:44:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 12:44:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 12:44:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 12:44:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 12:44:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 12:44:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 12:44:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 12:45:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:45:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:45:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:48:28 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:48:37 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:48:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:48:57 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:49:12 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:49:28 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:50:11 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:50:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:50:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:50:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:50:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:50:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:50:59 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:51:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:51:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:51:35 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:52:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:53:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:56:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 12:57:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:58:52 --> Could not find the language line "Home"
ERROR - 2023-07-04 12:59:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 12:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 13:06:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:06:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:06:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:08:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 13:09:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 13:09:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 13:10:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 13:10:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 13:11:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 13:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 13:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 13:12:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:12:47 --> Could not find the language line "Home"
ERROR - 2023-07-04 13:13:57 --> Could not find the language line "Home"
ERROR - 2023-07-04 13:15:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:15:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:21:45 --> Could not find the language line "Home"
ERROR - 2023-07-04 13:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-04 13:32:40 --> Could not find the language line "Home"
ERROR - 2023-07-04 13:32:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:32:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:32:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:32:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 13:32:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 13:33:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:33:54 --> Could not find the language line "Home"
ERROR - 2023-07-04 13:34:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:34:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:34:29 --> Could not find the language line "Home"
ERROR - 2023-07-04 13:36:54 --> Could not find the language line "Home"
ERROR - 2023-07-04 13:36:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:36:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:40:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 13:40:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-04 13:46:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:47:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:49:42 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-07-04 13:49:44 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-07-04 13:49:50 --> 404 Page Not Found: Wp-includes/theme-compat
ERROR - 2023-07-04 13:49:52 --> 404 Page Not Found: Wp-admin/css
ERROR - 2023-07-04 13:49:55 --> 404 Page Not Found: Repeaterphp/index
ERROR - 2023-07-04 13:49:59 --> 404 Page Not Found: Repeaterphp/index
ERROR - 2023-07-04 13:50:01 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-07-04 13:50:03 --> 404 Page Not Found: Rindexphp/index
ERROR - 2023-07-04 13:52:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-04 13:54:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 13:55:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 13:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 13:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 13:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 14:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-04 14:12:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 14:12:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 14:14:36 --> Could not find the language line "Home"
ERROR - 2023-07-04 14:15:32 --> Could not find the language line "Home"
ERROR - 2023-07-04 14:15:46 --> Could not find the language line "Bracelets"
ERROR - 2023-07-04 14:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 14:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 14:20:56 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-04 14:20:56 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-04 14:20:56 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-04 14:20:57 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-04 14:22:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 14:22:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 14:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 14:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 14:32:39 --> Could not find the language line "Home"
ERROR - 2023-07-04 14:32:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-04 14:33:18 --> Could not find the language line "Home"
ERROR - 2023-07-04 14:33:24 --> Could not find the language line "Perfume"
ERROR - 2023-07-04 14:33:32 --> Could not find the language line "Home"
ERROR - 2023-07-04 14:33:35 --> Could not find the language line "Socks"
ERROR - 2023-07-04 14:33:41 --> Could not find the language line "Home"
ERROR - 2023-07-04 14:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 14:46:03 --> Could not find the language line "Home"
ERROR - 2023-07-04 14:49:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 14:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 14:50:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 14:51:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 14:51:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 14:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 14:51:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 14:51:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 14:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-04 15:08:34 --> Could not find the language line "Home"
ERROR - 2023-07-04 15:09:27 --> Could not find the language line "Home"
ERROR - 2023-07-04 15:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:10:14 --> Could not find the language line "Home"
ERROR - 2023-07-04 15:13:40 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-07-04 15:22:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 15:26:05 --> Could not find the language line "Home"
ERROR - 2023-07-04 15:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:27:47 --> Could not find the language line "Home"
ERROR - 2023-07-04 15:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 15:31:15 --> Could not find the language line "Home"
ERROR - 2023-07-04 15:31:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-04 15:31:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-04 15:31:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-04 15:31:17 --> 404 Page Not Found: Home/accounts
ERROR - 2023-07-04 15:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:33:33 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-04 15:33:33 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-04 15:39:07 --> Could not find the language line "Home"
ERROR - 2023-07-04 15:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:42:40 --> Could not find the language line "Home"
ERROR - 2023-07-04 15:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:43:58 --> Could not find the language line "Home"
ERROR - 2023-07-04 15:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:46:21 --> Could not find the language line "Home"
ERROR - 2023-07-04 15:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 15:56:40 --> Could not find the language line "Home"
ERROR - 2023-07-04 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 16:10:01 --> Could not find the language line "Home"
ERROR - 2023-07-04 16:10:01 --> Could not find the language line "Home"
ERROR - 2023-07-04 16:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 16:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 16:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 16:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 16:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-04 16:46:04 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-04 16:50:05 --> Could not find the language line "Home"
ERROR - 2023-07-04 16:51:14 --> Could not find the language line "Home"
ERROR - 2023-07-04 16:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 16:52:01 --> Could not find the language line "Home"
ERROR - 2023-07-04 16:53:50 --> Could not find the language line "Home"
ERROR - 2023-07-04 16:55:23 --> Could not find the language line "Home"
ERROR - 2023-07-04 16:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 16:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-04 17:00:40 --> Could not find the language line "Home"
ERROR - 2023-07-04 17:00:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 17:01:10 --> Could not find the language line "Home"
ERROR - 2023-07-04 17:02:31 --> Could not find the language line "Bracelets"
ERROR - 2023-07-04 17:02:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 17:02:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-04 17:03:42 --> Could not find the language line "Perfume"
ERROR - 2023-07-04 17:03:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 17:03:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 17:04:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 17:04:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 17:04:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 17:04:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 17:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 17:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 17:05:25 --> Could not find the language line "Home"
ERROR - 2023-07-04 17:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 17:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 17:06:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 17:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 17:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 17:11:10 --> Could not find the language line "Home"
ERROR - 2023-07-04 17:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 17:16:51 --> Could not find the language line "Home"
ERROR - 2023-07-04 17:21:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-04 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 17:53:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-04 18:08:39 --> Could not find the language line "Home"
ERROR - 2023-07-04 18:08:40 --> Could not find the language line "Home"
ERROR - 2023-07-04 18:08:42 --> Could not find the language line "Home"
ERROR - 2023-07-04 18:08:48 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-04 18:08:49 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-04 18:08:49 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-04 18:08:49 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-04 18:09:58 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-04 18:11:48 --> Could not find the language line "Home"
ERROR - 2023-07-04 18:12:04 --> Could not find the language line "Home"
ERROR - 2023-07-04 18:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 18:26:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-04 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 18:38:19 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-04 18:48:42 --> Could not find the language line "Home"
ERROR - 2023-07-04 18:50:43 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:04:07 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:04:11 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:04:14 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:11:37 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:12:30 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:13:22 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:13:30 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:16:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 19:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:16:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 19:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:16:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 19:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:17:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 19:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:18:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 19:23:04 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:24:28 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:26:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 19:27:01 --> Could not find the language line "Perfume"
ERROR - 2023-07-04 19:27:12 --> Could not find the language line "Bracelets"
ERROR - 2023-07-04 19:27:39 --> Could not find the language line "Bracelets"
ERROR - 2023-07-04 19:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:29:09 --> Could not find the language line "Other"
ERROR - 2023-07-04 19:29:46 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:30:00 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:44:49 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:47:19 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:53:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 19:53:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 19:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:54:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 19:54:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-04 19:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:57:53 --> Could not find the language line "Home"
ERROR - 2023-07-04 19:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 19:58:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 19:58:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 19:58:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 19:58:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 19:58:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-04 19:58:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 19:58:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 19:58:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 19:58:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 19:58:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-04 20:00:12 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-04 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 20:15:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-04 20:18:33 --> Could not find the language line "Home"
ERROR - 2023-07-04 20:19:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 20:20:41 --> Could not find the language line "Home"
ERROR - 2023-07-04 20:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 20:23:08 --> Could not find the language line "Home"
ERROR - 2023-07-04 20:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 20:24:43 --> Could not find the language line "Home"
ERROR - 2023-07-04 20:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 20:24:59 --> Could not find the language line "Home"
ERROR - 2023-07-04 20:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 20:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 20:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 20:25:53 --> Could not find the language line "Home"
ERROR - 2023-07-04 20:28:58 --> Could not find the language line "Home"
ERROR - 2023-07-04 20:29:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 20:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-04 20:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 20:33:11 --> Could not find the language line "Home"
ERROR - 2023-07-04 20:33:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 20:33:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-04 20:33:57 --> Could not find the language line "Home"
ERROR - 2023-07-04 20:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 20:34:19 --> Could not find the language line "Home"
ERROR - 2023-07-04 20:34:21 --> Could not find the language line "Home"
ERROR - 2023-07-04 20:53:52 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-04 21:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-04 21:08:42 --> Could not find the language line "Home"
ERROR - 2023-07-04 21:09:06 --> Could not find the language line "Bracelets"
ERROR - 2023-07-04 21:09:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:09:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:10:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:10:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:11:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 21:11:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:11:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:12:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:12:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:12:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:13:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:13:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:13:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:13:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 21:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 21:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 21:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 21:19:39 --> Could not find the language line "Home"
ERROR - 2023-07-04 21:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 21:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-04 21:41:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-04 21:41:40 --> Could not find the language line "Home"
ERROR - 2023-07-04 21:48:31 --> Could not find the language line "Home"
ERROR - 2023-07-04 21:48:43 --> Could not find the language line "Home"
ERROR - 2023-07-04 21:50:25 --> Could not find the language line "Home"
ERROR - 2023-07-04 21:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 21:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-04 22:07:55 --> Could not find the language line "Home"
ERROR - 2023-07-04 22:08:26 --> Could not find the language line "Home"
ERROR - 2023-07-04 22:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-04 22:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 22:39:49 --> Could not find the language line "Home"
ERROR - 2023-07-04 22:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 22:48:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-04 22:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-04 22:49:53 --> Could not find the language line "Home"
ERROR - 2023-07-04 22:51:50 --> Could not find the language line "Home"
ERROR - 2023-07-04 22:51:50 --> Could not find the language line "Home"
ERROR - 2023-07-04 22:51:50 --> Could not find the language line "Home"
ERROR - 2023-07-04 22:51:50 --> Could not find the language line "Home"
ERROR - 2023-07-04 22:51:50 --> Could not find the language line "Home"
ERROR - 2023-07-04 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-04 23:05:46 --> Could not find the language line "Home"
ERROR - 2023-07-04 23:14:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 23:27:00 --> Could not find the language line "Home"
ERROR - 2023-07-04 23:28:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-04 23:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-04 23:36:44 --> Could not find the language line "Home"
ERROR - 2023-07-04 23:37:08 --> Could not find the language line "Home"
ERROR - 2023-07-04 23:45:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
