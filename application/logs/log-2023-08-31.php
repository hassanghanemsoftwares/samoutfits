<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-31 00:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-31 00:10:45 --> Could not find the language line "Other"
ERROR - 2023-08-31 00:22:05 --> Could not find the language line "Home"
ERROR - 2023-08-31 00:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-31 00:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 00:31:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 00:31:14 --> Could not find the language line "Home"
ERROR - 2023-08-31 00:34:10 --> Could not find the language line "Home"
ERROR - 2023-08-31 00:45:05 --> Could not find the language line "Home"
ERROR - 2023-08-31 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-31 01:12:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 01:25:02 --> Could not find the language line "Home"
ERROR - 2023-08-31 01:30:21 --> Could not find the language line "Home"
ERROR - 2023-08-31 01:46:10 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-31 02:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-31 02:25:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 02:25:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 02:25:16 --> Could not find the language line "Home"
ERROR - 2023-08-31 02:27:55 --> Could not find the language line "Home"
ERROR - 2023-08-31 02:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-31 02:35:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 02:43:47 --> Could not find the language line "Home"
ERROR - 2023-08-31 02:44:14 --> Could not find the language line "Home"
ERROR - 2023-08-31 02:44:22 --> Could not find the language line "Bracelets"
ERROR - 2023-08-31 02:55:54 --> Could not find the language line "Home"
ERROR - 2023-08-31 03:00:18 --> Could not find the language line "Home"
ERROR - 2023-08-31 03:19:38 --> Could not find the language line "Home"
ERROR - 2023-08-31 03:24:25 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-31 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-31 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-31 04:02:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 04:13:22 --> Could not find the language line "Home"
ERROR - 2023-08-31 04:13:22 --> Could not find the language line "Home"
ERROR - 2023-08-31 04:13:23 --> Could not find the language line "Home"
ERROR - 2023-08-31 04:13:23 --> Could not find the language line "Home"
ERROR - 2023-08-31 04:13:23 --> Could not find the language line "Home"
ERROR - 2023-08-31 04:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-31 04:49:08 --> Could not find the language line "Home"
ERROR - 2023-08-31 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-31 05:02:26 --> Could not find the language line "Home"
ERROR - 2023-08-31 05:12:40 --> Could not find the language line "Home"
ERROR - 2023-08-31 05:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-31 05:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 05:37:27 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-08-31 05:41:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 05:42:00 --> Could not find the language line "Home"
ERROR - 2023-08-31 05:54:55 --> Could not find the language line "Home"
ERROR - 2023-08-31 05:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 05:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 05:56:55 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:00:27 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:04:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 06:04:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 06:04:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 06:04:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 06:04:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 06:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 06:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 06:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 06:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 06:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 06:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:05:05 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:05:19 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:05:32 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:07:18 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:07:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 06:08:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 06:08:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 06:08:33 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:08:56 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:09:30 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:10:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 06:10:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-31 06:12:48 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-31 06:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:18:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 06:18:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 06:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:21:24 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:25:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 06:26:00 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:33:39 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:34:51 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:35:13 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:39:55 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:47:57 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 06:57:04 --> Could not find the language line "Home"
ERROR - 2023-08-31 06:59:35 --> Could not find the language line "Home"
ERROR - 2023-08-31 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-31 07:00:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 07:03:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 07:03:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-31 07:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:09:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-31 07:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:10:07 --> Could not find the language line "Bracelets"
ERROR - 2023-08-31 07:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:11:06 --> Could not find the language line "Bracelets"
ERROR - 2023-08-31 07:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:14:47 --> Could not find the language line "Home"
ERROR - 2023-08-31 07:15:23 --> Could not find the language line "Home"
ERROR - 2023-08-31 07:16:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-31 07:20:05 --> Could not find the language line "Home"
ERROR - 2023-08-31 07:20:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 07:20:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 07:20:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 07:20:08 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-31 07:20:08 --> 404 Page Not Found: Home/home
ERROR - 2023-08-31 07:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:21:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 07:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-31 07:33:33 --> 404 Page Not Found: Wp-includes/ID3
ERROR - 2023-08-31 07:33:33 --> 404 Page Not Found: Feed/index
ERROR - 2023-08-31 07:33:33 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-31 07:33:33 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-08-31 07:33:33 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-08-31 07:33:33 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-08-31 07:33:33 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-08-31 07:33:33 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-08-31 07:33:34 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-08-31 07:33:34 --> 404 Page Not Found: 2021/wp-includes
ERROR - 2023-08-31 07:33:34 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-08-31 07:33:34 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-08-31 07:33:34 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-08-31 07:33:34 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-08-31 07:33:34 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-08-31 07:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 07:52:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 07:52:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 07:57:48 --> Could not find the language line "Other"
ERROR - 2023-08-31 08:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-31 08:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:01:07 --> Could not find the language line "Home"
ERROR - 2023-08-31 08:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:04:19 --> Could not find the language line "Home"
ERROR - 2023-08-31 08:05:42 --> Could not find the language line "Home"
ERROR - 2023-08-31 08:05:56 --> Could not find the language line "Home"
ERROR - 2023-08-31 08:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:07:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 08:07:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-31 08:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:10:22 --> Could not find the language line "Home"
ERROR - 2023-08-31 08:11:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 08:11:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 08:12:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 08:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-31 08:33:34 --> Could not find the language line "Home"
ERROR - 2023-08-31 08:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:34:36 --> Could not find the language line "Home"
ERROR - 2023-08-31 08:40:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-31 08:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:52:23 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-31 08:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 08:53:24 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-31 08:54:24 --> Could not find the language line "Home"
ERROR - 2023-08-31 08:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-31 09:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:00:41 --> Could not find the language line "Home"
ERROR - 2023-08-31 09:01:24 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-31 09:01:24 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-31 09:01:24 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-31 09:01:25 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-31 09:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:01:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 09:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:02:35 --> Could not find the language line "Home"
ERROR - 2023-08-31 09:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:08:26 --> Could not find the language line "Home"
ERROR - 2023-08-31 09:09:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 09:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:24:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:24:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:26:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:26:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:26:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:26:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:26:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:26:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:27:07 --> Could not find the language line "Crocs"
ERROR - 2023-08-31 09:27:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:27:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:28:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:28:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:28:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:28:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-31 09:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:32:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:32:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:32:38 --> Could not find the language line "Home"
ERROR - 2023-08-31 09:32:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 09:33:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 09:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:33:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:33:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:34:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:34:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:36:04 --> Could not find the language line "Home"
ERROR - 2023-08-31 09:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:37:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 09:37:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-31 09:38:13 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-31 09:38:14 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-31 09:38:14 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-31 09:38:15 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-31 09:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:42:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-31 09:42:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-31 09:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:11 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:52:54 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:09 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:12 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:53:42 --> Could not find the language line "Other"
ERROR - 2023-08-31 09:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:55:29 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-31 09:55:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:55:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-08-31 09:56:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:56:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:56:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:56:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:56:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:56:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:56:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 09:56:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-31 09:58:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:58:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 09:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 09:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-31 10:00:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:00:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:01:14 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-31 10:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:01:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 10:01:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 10:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:02:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:02:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:02:40 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-31 10:02:40 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-31 10:02:40 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-31 10:02:41 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-31 10:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:04:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:04:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:04:32 --> Could not find the language line "Home"
ERROR - 2023-08-31 10:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:05:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:05:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:05:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:05:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:06:21 --> Could not find the language line "Home"
ERROR - 2023-08-31 10:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:07:03 --> Could not find the language line "Home"
ERROR - 2023-08-31 10:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:10:08 --> Could not find the language line "Home"
ERROR - 2023-08-31 10:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:12:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:12:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:14:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:14:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:15:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:15:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:15:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:15:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:19:27 --> Could not find the language line "assets"
ERROR - 2023-08-31 10:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:21:43 --> Could not find the language line "Clothes"
ERROR - 2023-08-31 10:24:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 10:24:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:24:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:25:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:25:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:25:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:25:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:25:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:25:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:26:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:26:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:26:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:26:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:26:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:26:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:27:02 --> Could not find the language line "Home"
ERROR - 2023-08-31 10:27:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:27:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:27:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 10:27:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 10:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:28:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:28:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:28:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:28:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 10:29:07 --> Could not find the language line "Home"
ERROR - 2023-08-31 10:29:10 --> Could not find the language line "Home"
ERROR - 2023-08-31 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-31 10:30:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 10:30:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 10:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:36:59 --> Could not find the language line "Home"
ERROR - 2023-08-31 10:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:42:42 --> Could not find the language line "Home"
ERROR - 2023-08-31 10:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:47:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 10:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:56:13 --> Could not find the language line "Home"
ERROR - 2023-08-31 10:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 10:59:02 --> Could not find the language line "Bracelets"
ERROR - 2023-08-31 10:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-31 11:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 11:00:31 --> Could not find the language line "Home"
ERROR - 2023-08-31 11:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 11:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 11:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 11:03:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 11:03:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 11:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 11:03:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 11:28:16 --> Could not find the language line "Home"
ERROR - 2023-08-31 11:28:53 --> Could not find the language line "Home"
ERROR - 2023-08-31 11:29:25 --> Could not find the language line "Home"
ERROR - 2023-08-31 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-31 11:36:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 11:36:49 --> Could not find the language line "Home"
ERROR - 2023-08-31 11:45:29 --> Could not find the language line "Other"
ERROR - 2023-08-31 11:46:18 --> Could not find the language line "Home"
ERROR - 2023-08-31 11:48:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 11:48:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 11:49:19 --> Could not find the language line "Home"
ERROR - 2023-08-31 11:58:26 --> Could not find the language line "Home"
ERROR - 2023-08-31 11:58:36 --> Could not find the language line "Home"
ERROR - 2023-08-31 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-31 12:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:03:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 12:03:34 --> Could not find the language line "Home"
ERROR - 2023-08-31 12:04:32 --> Could not find the language line "Home"
ERROR - 2023-08-31 12:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:08:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-31 12:09:03 --> Could not find the language line "Home"
ERROR - 2023-08-31 12:09:10 --> Could not find the language line "Perfume"
ERROR - 2023-08-31 12:09:15 --> Could not find the language line "Home"
ERROR - 2023-08-31 12:09:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 12:09:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 12:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:15:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 12:15:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 12:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:16:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-31 12:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:21:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 12:21:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-31 12:25:46 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-31 12:29:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 12:29:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-31 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-31 12:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:38:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 12:38:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 12:44:02 --> Could not find the language line "Home"
ERROR - 2023-08-31 12:44:16 --> Could not find the language line "Home"
ERROR - 2023-08-31 12:44:23 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-31 12:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 12:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-31 13:04:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 13:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 13:05:28 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-31 13:05:50 --> Could not find the language line "Bags%20"
ERROR - 2023-08-31 13:06:04 --> Could not find the language line "Bags%20"
ERROR - 2023-08-31 13:06:37 --> Could not find the language line "Home"
ERROR - 2023-08-31 13:06:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-31 13:07:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-31 13:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 13:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 13:13:42 --> Could not find the language line "Home"
ERROR - 2023-08-31 13:14:29 --> Could not find the language line "Home"
ERROR - 2023-08-31 13:16:32 --> Could not find the language line "Home"
ERROR - 2023-08-31 13:16:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 13:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 13:17:39 --> 404 Page Not Found: Cart/assets
ERROR - 2023-08-31 13:17:39 --> 404 Page Not Found: Cart/assets
ERROR - 2023-08-31 13:17:39 --> 404 Page Not Found: Cart/assets
ERROR - 2023-08-31 13:17:39 --> 404 Page Not Found: Cart/assets
ERROR - 2023-08-31 13:17:39 --> 404 Page Not Found: Cart/assets
ERROR - 2023-08-31 13:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 13:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 13:27:36 --> Could not find the language line "Home"
ERROR - 2023-08-31 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-31 13:35:30 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-31 13:52:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-31 13:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 13:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 13:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 13:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 13:59:37 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:00:28 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:07:06 --> Could not find the language line "Other"
ERROR - 2023-08-31 14:07:51 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:07:51 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:08:08 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:11:20 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:12:30 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:12:40 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 14:25:57 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 14:29:41 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:30:46 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:31:02 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:31:17 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:31:42 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:32:37 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:33:35 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-31 14:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 14:36:47 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:36:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-31 14:37:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-31 14:37:20 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 14:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 14:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 14:48:49 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:50:33 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:52:08 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:53:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 14:54:35 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:57:16 --> Could not find the language line "Home"
ERROR - 2023-08-31 14:57:18 --> Could not find the language line "Home"
ERROR - 2023-08-31 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-31 15:09:22 --> Could not find the language line "Home"
ERROR - 2023-08-31 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-31 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-31 16:01:11 --> Could not find the language line "Home"
ERROR - 2023-08-31 16:07:57 --> Could not find the language line "Home"
ERROR - 2023-08-31 16:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 16:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 16:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 16:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 16:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-31 16:43:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 16:43:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 16:49:06 --> Could not find the language line "Home"
ERROR - 2023-08-31 17:00:20 --> Could not find the language line "Home"
ERROR - 2023-08-31 17:27:50 --> Could not find the language line "Home"
ERROR - 2023-08-31 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-31 17:32:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 17:32:33 --> Could not find the language line "Home"
ERROR - 2023-08-31 17:37:40 --> Could not find the language line "Home"
ERROR - 2023-08-31 17:37:45 --> Could not find the language line "Home"
ERROR - 2023-08-31 17:38:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 17:42:15 --> Could not find the language line "Home"
ERROR - 2023-08-31 17:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 17:58:56 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:00:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 18:00:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 18:00:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 18:00:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 18:00:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-31 18:00:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 18:00:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 18:00:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 18:00:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 18:00:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-31 18:00:26 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:03:05 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:03:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:03:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:04:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:05:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:05:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:05:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:06:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:06:07 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:06:49 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:07:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:07:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:07:58 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:08:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:08:18 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:08:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:08:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:08:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:08:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:08:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:09:00 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:09:52 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:11:17 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:11:18 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:11:24 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:11:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:11:49 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:12:33 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:12:56 --> Could not find the language line "Socks"
ERROR - 2023-08-31 18:13:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:13:04 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:13:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:13:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:14:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:14:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:15:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:16:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:16:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:16:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:18:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:18:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:19:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:20:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:21:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:21:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:21:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:22:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:24:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-31 18:24:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:24:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:25:05 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:25:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:25:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 18:25:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:27:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:27:08 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:28:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:28:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:29:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 18:30:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:30:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-31 18:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:32:25 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:32:30 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:41:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 18:55:10 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:58:38 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:58:38 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:58:38 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:58:39 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:58:39 --> Could not find the language line "Home"
ERROR - 2023-08-31 18:58:39 --> Could not find the language line "Home"
ERROR - 2023-08-31 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-31 19:15:53 --> Could not find the language line "Home"
ERROR - 2023-08-31 19:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 19:21:12 --> Could not find the language line "Home"
ERROR - 2023-08-31 19:21:13 --> Could not find the language line "Home"
ERROR - 2023-08-31 19:21:13 --> Could not find the language line "Home"
ERROR - 2023-08-31 19:21:13 --> Could not find the language line "Home"
ERROR - 2023-08-31 19:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-31 19:32:00 --> Could not find the language line "Home"
ERROR - 2023-08-31 19:33:44 --> Could not find the language line "Home"
ERROR - 2023-08-31 19:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 19:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 19:54:25 --> Could not find the language line "Home"
ERROR - 2023-08-31 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-31 20:00:53 --> Could not find the language line "Home"
ERROR - 2023-08-31 20:04:43 --> Could not find the language line "Home"
ERROR - 2023-08-31 20:04:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-31 20:14:28 --> Could not find the language line "Home"
ERROR - 2023-08-31 20:19:46 --> Could not find the language line "Home"
ERROR - 2023-08-31 20:22:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 20:25:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 20:27:32 --> Could not find the language line "Home"
ERROR - 2023-08-31 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-31 20:32:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 20:40:11 --> Could not find the language line "Home"
ERROR - 2023-08-31 20:42:17 --> Could not find the language line "Home"
ERROR - 2023-08-31 21:00:23 --> Could not find the language line "Home"
ERROR - 2023-08-31 21:09:05 --> Could not find the language line "Home"
ERROR - 2023-08-31 21:09:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-31 21:09:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-31 21:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:12:09 --> Could not find the language line "Home"
ERROR - 2023-08-31 21:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:12:36 --> Could not find the language line "Home"
ERROR - 2023-08-31 21:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:12:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-31 21:12:51 --> Could not find the language line "Home"
ERROR - 2023-08-31 21:12:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 21:12:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 21:13:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 21:13:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 21:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:13:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 21:13:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 21:14:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 21:14:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 21:14:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 21:14:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-31 21:14:22 --> Could not find the language line "Home"
ERROR - 2023-08-31 21:14:28 --> Could not find the language line "Socks"
ERROR - 2023-08-31 21:15:08 --> Could not find the language line "Home"
ERROR - 2023-08-31 21:15:13 --> Could not find the language line "Perfume"
ERROR - 2023-08-31 21:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:15:36 --> Could not find the language line "Perfume"
ERROR - 2023-08-31 21:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:15:51 --> Could not find the language line "Perfume"
ERROR - 2023-08-31 21:15:58 --> Could not find the language line "Home"
ERROR - 2023-08-31 21:16:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-31 21:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:16:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-31 21:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:17:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-31 21:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:17:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-31 21:17:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-31 21:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:17:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-31 21:17:35 --> Could not find the language line "Home"
ERROR - 2023-08-31 21:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:21:08 --> Could not find the language line "Home"
ERROR - 2023-08-31 21:21:18 --> Could not find the language line "Home"
ERROR - 2023-08-31 21:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 21:21:29 --> Could not find the language line "Home"
ERROR - 2023-08-31 21:21:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-31 21:21:33 --> Could not find the language line "Home"
ERROR - 2023-08-31 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-31 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-31 22:10:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 22:30:20 --> Could not find the language line "Home"
ERROR - 2023-08-31 22:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 22:55:11 --> Could not find the language line "Home"
ERROR - 2023-08-31 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-31 23:08:23 --> 404 Page Not Found: Hg/hgrc
ERROR - 2023-08-31 23:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 23:19:00 --> Could not find the language line "Home"
ERROR - 2023-08-31 23:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-31 23:20:24 --> Could not find the language line "Home"
ERROR - 2023-08-31 23:20:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 23:21:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 23:21:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 23:21:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-31 23:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-31 23:35:09 --> Could not find the language line "Home"
ERROR - 2023-08-31 23:43:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-31 23:43:08 --> Could not find the language line "Home"
ERROR - 2023-08-31 23:44:35 --> 404 Page Not Found: Wp-22php/index
ERROR - 2023-08-31 23:50:40 --> Could not find the language line "Home"
ERROR - 2023-08-31 23:54:40 --> Could not find the language line "Home"
ERROR - 2023-08-31 23:59:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
