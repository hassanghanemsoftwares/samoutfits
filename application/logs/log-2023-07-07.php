<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-07 00:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-07 00:14:10 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-07-07 00:14:13 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-07-07 00:14:16 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-07 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-07 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-07 01:07:48 --> Could not find the language line "Home"
ERROR - 2023-07-07 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-07 01:44:07 --> Could not find the language line "Home"
ERROR - 2023-07-07 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-07 02:03:54 --> Could not find the language line "Home"
ERROR - 2023-07-07 02:04:26 --> Could not find the language line "Home"
ERROR - 2023-07-07 02:25:11 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-07 02:30:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-07 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-07 02:33:55 --> Could not find the language line "Home"
ERROR - 2023-07-07 03:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-07 03:17:14 --> Could not find the language line "Home"
ERROR - 2023-07-07 03:21:04 --> Could not find the language line "Home"
ERROR - 2023-07-07 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 03:50:56 --> Could not find the language line "Home"
ERROR - 2023-07-07 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-07 04:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 04:28:19 --> Could not find the language line "Home"
ERROR - 2023-07-07 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-07 04:41:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 04:50:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 04:51:55 --> Could not find the language line "Home"
ERROR - 2023-07-07 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 05:05:29 --> Could not find the language line "Home"
ERROR - 2023-07-07 05:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-07 05:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:36:24 --> Could not find the language line "Home"
ERROR - 2023-07-07 05:37:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 05:38:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-07 05:38:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-07 05:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:42:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-07 05:42:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-07 05:42:22 --> Could not find the language line "Home"
ERROR - 2023-07-07 05:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:42:37 --> Could not find the language line "Home"
ERROR - 2023-07-07 05:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:46:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 05:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 05:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-07 06:04:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 06:06:27 --> Could not find the language line "Home"
ERROR - 2023-07-07 06:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:25:09 --> Could not find the language line "Home"
ERROR - 2023-07-07 06:25:10 --> Could not find the language line "Home"
ERROR - 2023-07-07 06:25:10 --> Could not find the language line "Home"
ERROR - 2023-07-07 06:25:10 --> Could not find the language line "Home"
ERROR - 2023-07-07 06:25:10 --> Could not find the language line "Home"
ERROR - 2023-07-07 06:25:10 --> Could not find the language line "Home"
ERROR - 2023-07-07 06:25:10 --> Could not find the language line "Home"
ERROR - 2023-07-07 06:28:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-07 06:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-07 06:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:28:40 --> Could not find the language line "Home"
ERROR - 2023-07-07 06:28:42 --> Could not find the language line "Home"
ERROR - 2023-07-07 06:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 06:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:43:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-07 06:43:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41', '40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-07 06:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:49:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 06:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:49:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 06:50:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 06:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 06:51:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 06:58:23 --> Could not find the language line "Home"
ERROR - 2023-07-07 07:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-07 07:00:44 --> Could not find the language line "Home"
ERROR - 2023-07-07 07:07:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 07:07:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 07:16:26 --> Could not find the language line "Bracelets"
ERROR - 2023-07-07 07:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 07:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 07:22:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-07 07:22:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-07 07:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 07:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-07 07:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 07:31:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-07 07:31:12 --> Could not find the language line "Home"
ERROR - 2023-07-07 07:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 07:53:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 07:54:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 07:54:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-07 08:05:03 --> Could not find the language line "Home"
ERROR - 2023-07-07 08:13:02 --> Could not find the language line "Home"
ERROR - 2023-07-07 08:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:23:07 --> Could not find the language line "Home"
ERROR - 2023-07-07 08:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-07 08:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:43:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 08:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:49:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-07 08:50:08 --> Could not find the language line "Home"
ERROR - 2023-07-07 08:50:08 --> Could not find the language line "Home"
ERROR - 2023-07-07 08:50:08 --> Could not find the language line "Home"
ERROR - 2023-07-07 08:50:08 --> Could not find the language line "Home"
ERROR - 2023-07-07 08:50:08 --> Could not find the language line "Home"
ERROR - 2023-07-07 08:50:09 --> Could not find the language line "Home"
ERROR - 2023-07-07 08:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 08:58:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-07 08:58:31 --> Could not find the language line "Home"
ERROR - 2023-07-07 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 09:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 09:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 09:03:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 09:04:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 09:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 09:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 09:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-07 09:30:18 --> Could not find the language line "Home"
ERROR - 2023-07-07 09:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 09:58:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-07 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-07 10:00:53 --> Could not find the language line "Home"
ERROR - 2023-07-07 10:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 10:06:20 --> Could not find the language line "Home"
ERROR - 2023-07-07 10:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 10:17:29 --> Could not find the language line "Home"
ERROR - 2023-07-07 10:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 10:22:52 --> Could not find the language line "Bracelets"
ERROR - 2023-07-07 10:27:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-07 10:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 10:32:18 --> Could not find the language line "Home"
ERROR - 2023-07-07 10:32:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 10:33:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 10:34:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 10:34:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 10:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 10:34:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 10:34:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 10:34:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 10:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 10:35:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 10:40:19 --> Could not find the language line "Home"
ERROR - 2023-07-07 10:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 10:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 10:47:28 --> Could not find the language line "Home"
ERROR - 2023-07-07 10:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 10:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 10:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-07 11:01:39 --> Could not find the language line "Home"
ERROR - 2023-07-07 11:05:22 --> Could not find the language line "Home"
ERROR - 2023-07-07 11:20:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 11:30:09 --> Could not find the language line "Home"
ERROR - 2023-07-07 11:37:43 --> Could not find the language line "Home"
ERROR - 2023-07-07 11:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 11:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 11:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 11:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 11:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 11:39:28 --> Could not find the language line "Home"
ERROR - 2023-07-07 11:43:12 --> Could not find the language line "Home"
ERROR - 2023-07-07 11:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 11:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 11:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 11:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 11:47:50 --> Could not find the language line "Home"
ERROR - 2023-07-07 11:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 11:48:31 --> Could not find the language line "Home"
ERROR - 2023-07-07 11:48:38 --> Could not find the language line "Bracelets"
ERROR - 2023-07-07 11:49:12 --> Could not find the language line "Bracelets"
ERROR - 2023-07-07 11:49:25 --> Could not find the language line "Bracelets"
ERROR - 2023-07-07 11:49:29 --> Could not find the language line "Home"
ERROR - 2023-07-07 11:56:23 --> Could not find the language line "Home"
ERROR - 2023-07-07 11:57:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 11:57:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 11:57:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 11:57:46 --> Could not find the language line "Home"
ERROR - 2023-07-07 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 12:18:27 --> Could not find the language line "Home"
ERROR - 2023-07-07 12:18:46 --> Could not find the language line "Home"
ERROR - 2023-07-07 12:18:47 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-07 12:18:52 --> Could not find the language line "Home"
ERROR - 2023-07-07 12:24:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 12:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 12:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 12:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 12:24:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 12:24:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 12:27:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-07 12:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 12:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 12:30:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 12:32:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 12:33:04 --> Could not find the language line "Home"
ERROR - 2023-07-07 12:33:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-07 12:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 12:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 12:35:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-07 12:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 12:35:56 --> Could not find the language line "Home"
ERROR - 2023-07-07 12:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 12:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 12:41:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-07 12:41:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-07 12:43:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 12:43:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 12:47:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 12:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 12:56:52 --> Could not find the language line "Home"
ERROR - 2023-07-07 12:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 13:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:06:00 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:14:54 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:15:02 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:15:05 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:15:20 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:26:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 13:26:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 13:26:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 13:26:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 13:27:33 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:29:04 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 13:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 13:33:18 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 13:33:20 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:34:19 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:34:30 --> Could not find the language line "Perfume"
ERROR - 2023-07-07 13:34:43 --> Could not find the language line "Perfume"
ERROR - 2023-07-07 13:35:33 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:35:37 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:38:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-07 13:38:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 13:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 13:40:42 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:47:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-07 13:47:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-07 13:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 13:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 13:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 13:57:22 --> Could not find the language line "Home"
ERROR - 2023-07-07 13:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 13:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 14:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:13:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 14:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:21:53 --> Could not find the language line "Other"
ERROR - 2023-07-07 14:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:26:43 --> Could not find the language line "Home"
ERROR - 2023-07-07 14:26:48 --> Could not find the language line "Home"
ERROR - 2023-07-07 14:27:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-07 14:27:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '27'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-07 14:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-07 14:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:32:36 --> Could not find the language line "Perfume"
ERROR - 2023-07-07 14:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 14:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 15:00:27 --> Could not find the language line "Home"
ERROR - 2023-07-07 15:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 15:05:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-07 15:05:51 --> Could not find the language line "Home"
ERROR - 2023-07-07 15:12:46 --> Could not find the language line "Home"
ERROR - 2023-07-07 15:14:14 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-07 15:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 15:30:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-07 15:30:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-07 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-07 15:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 15:49:38 --> Could not find the language line "Home"
ERROR - 2023-07-07 15:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:04:50 --> Could not find the language line "Perfume"
ERROR - 2023-07-07 16:08:47 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:09:34 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:09:36 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-07 16:09:44 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:10:52 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:11:19 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:11:51 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:11:58 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:12:32 --> Could not find the language line "Socks"
ERROR - 2023-07-07 16:13:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-07 16:13:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-07 16:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:13:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-07 16:13:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-07 16:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:15:31 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:15:58 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:16:17 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:18:02 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:18:03 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:18:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:18:15 --> Could not find the language line "Bracelets"
ERROR - 2023-07-07 16:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:18:33 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:18:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:18:55 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:18:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:19:00 --> Could not find the language line "Perfume"
ERROR - 2023-07-07 16:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:19:03 --> Could not find the language line "Perfume"
ERROR - 2023-07-07 16:19:08 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:19:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:19:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:20:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:20:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:20:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:21:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:21:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-07 16:21:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-07 16:21:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:22:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:22:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:22:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:24:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-07 16:24:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-07 16:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:29:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:29:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:30:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:30:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:30:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:31:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:31:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:31:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 16:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:37:45 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:37:55 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:37:57 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:38:02 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 16:52:25 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:52:25 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:52:26 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:52:26 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:52:26 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:52:26 --> Could not find the language line "Home"
ERROR - 2023-07-07 16:56:33 --> Could not find the language line "Home"
ERROR - 2023-07-07 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-07 17:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 17:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 17:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 17:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 17:07:08 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-07-07 17:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 17:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 17:14:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 17:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-07 17:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 17:49:44 --> Could not find the language line "Home"
ERROR - 2023-07-07 17:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 17:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:00:09 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:00:26 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:07:30 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:07:47 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:10:12 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:11:06 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:14:38 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:14:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-07 18:15:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-07 18:15:21 --> Could not find the language line "Bracelets"
ERROR - 2023-07-07 18:15:36 --> Could not find the language line "Bracelets"
ERROR - 2023-07-07 18:16:20 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:20:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 18:20:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 18:21:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 18:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:22:28 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:24:15 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:25:49 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:26:18 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:32:50 --> Could not find the language line "Home"
ERROR - 2023-07-07 18:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 18:39:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 18:45:03 --> Could not find the language line "Home"
ERROR - 2023-07-07 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-07 19:03:43 --> Could not find the language line "Home"
ERROR - 2023-07-07 19:04:38 --> Could not find the language line "Home"
ERROR - 2023-07-07 19:05:46 --> Could not find the language line "Home"
ERROR - 2023-07-07 19:07:17 --> Could not find the language line "Home"
ERROR - 2023-07-07 19:07:31 --> Could not find the language line "Home"
ERROR - 2023-07-07 19:10:37 --> Could not find the language line "Home"
ERROR - 2023-07-07 19:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 19:16:24 --> Could not find the language line "Home"
ERROR - 2023-07-07 19:26:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 19:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 19:38:28 --> Could not find the language line "Home"
ERROR - 2023-07-07 19:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 19:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 19:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 19:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 19:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 19:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 19:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 19:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 19:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 19:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 19:43:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 19:43:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 19:46:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 19:46:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-07 19:46:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-07 19:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:01:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:01:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:01:56 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:03:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:03:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:03:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:04:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:05:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:05:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:06:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:06:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:06:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:06:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:08:02 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:08:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:08:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:09:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:09:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:09:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:09:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:10:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:10:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:10:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-07 20:10:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-07 20:10:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:11:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:11:13 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:11:14 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:11:15 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:11:15 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:11:15 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:11:15 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:11:16 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:16:54 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:16:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-07 20:17:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-07 20:17:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-07 20:17:41 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:17:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-07 20:17:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-07 20:18:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-07 20:18:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-07 20:18:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-07 20:18:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-07 20:18:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-07 20:18:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-07 20:18:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-07 20:18:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-07 20:18:28 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:18:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:18:31 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:18:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:18:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:18:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:18:32 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:18:32 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:18:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:52:25 --> Could not find the language line "Home"
ERROR - 2023-07-07 20:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 20:53:46 --> Could not find the language line "Home"
ERROR - 2023-07-07 21:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-07 21:22:47 --> Could not find the language line "Home"
ERROR - 2023-07-07 21:26:09 --> Could not find the language line "Home"
ERROR - 2023-07-07 21:26:10 --> Could not find the language line "Home"
ERROR - 2023-07-07 21:26:10 --> Could not find the language line "Home"
ERROR - 2023-07-07 21:26:10 --> Could not find the language line "Home"
ERROR - 2023-07-07 21:26:10 --> Could not find the language line "Home"
ERROR - 2023-07-07 21:26:10 --> Could not find the language line "Home"
ERROR - 2023-07-07 21:26:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-07 21:27:52 --> Could not find the language line "Socks"
ERROR - 2023-07-07 21:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-07 21:28:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-07 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 21:34:22 --> 404 Page Not Found: Theme/assets
ERROR - 2023-07-07 21:38:55 --> Could not find the language line "Home"
ERROR - 2023-07-07 21:49:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-07 21:49:29 --> Could not find the language line "Home"
ERROR - 2023-07-07 21:52:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-07 21:57:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-07 22:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-07 22:32:25 --> Could not find the language line "Home"
ERROR - 2023-07-07 22:36:17 --> Could not find the language line "Home"
ERROR - 2023-07-07 23:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-07 23:06:10 --> Could not find the language line "Home"
ERROR - 2023-07-07 23:30:11 --> Could not find the language line "Home"
