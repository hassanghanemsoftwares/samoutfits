<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-07 00:22:23 --> Could not find the language line "Home"
ERROR - 2024-10-07 00:52:33 --> Could not find the language line "Home"
ERROR - 2024-10-07 01:22:14 --> Could not find the language line "Home"
ERROR - 2024-10-07 01:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 01:52:13 --> Could not find the language line "Home"
ERROR - 2024-10-07 02:22:20 --> Could not find the language line "Home"
ERROR - 2024-10-07 02:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 02:27:43 --> Could not find the language line "Home"
ERROR - 2024-10-07 02:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 02:52:14 --> Could not find the language line "Home"
ERROR - 2024-10-07 03:22:16 --> Could not find the language line "Home"
ERROR - 2024-10-07 03:52:21 --> Could not find the language line "Home"
ERROR - 2024-10-07 04:22:18 --> Could not find the language line "Home"
ERROR - 2024-10-07 04:52:14 --> Could not find the language line "Home"
ERROR - 2024-10-07 05:00:59 --> Could not find the language line "Clothing"
ERROR - 2024-10-07 05:02:58 --> Could not find the language line "Home"
ERROR - 2024-10-07 05:22:15 --> Could not find the language line "Home"
ERROR - 2024-10-07 05:52:15 --> Could not find the language line "Home"
ERROR - 2024-10-07 05:57:35 --> Could not find the language line "Home"
ERROR - 2024-10-07 06:22:16 --> Could not find the language line "Home"
ERROR - 2024-10-07 06:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 06:52:17 --> Could not find the language line "Home"
ERROR - 2024-10-07 07:22:17 --> Could not find the language line "Home"
ERROR - 2024-10-07 07:33:55 --> Could not find the language line "Home"
ERROR - 2024-10-07 07:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 07:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 07:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 07:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 07:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 07:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 07:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 07:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 07:52:17 --> Could not find the language line "Home"
ERROR - 2024-10-07 08:22:18 --> Could not find the language line "Home"
ERROR - 2024-10-07 08:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 08:31:09 --> Could not find the language line "accounts"
ERROR - 2024-10-07 08:37:35 --> Could not find the language line "Home"
ERROR - 2024-10-07 08:52:18 --> Could not find the language line "Home"
ERROR - 2024-10-07 09:22:19 --> Could not find the language line "Home"
ERROR - 2024-10-07 09:31:49 --> Could not find the language line "Home"
ERROR - 2024-10-07 09:52:18 --> Could not find the language line "Home"
ERROR - 2024-10-07 10:22:19 --> Could not find the language line "Home"
ERROR - 2024-10-07 10:25:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-07 10:25:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 100
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-07 10:25:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-07 10:52:20 --> Could not find the language line "Home"
ERROR - 2024-10-07 10:54:16 --> Could not find the language line "Home"
ERROR - 2024-10-07 11:20:54 --> Could not find the language line "users"
ERROR - 2024-10-07 11:22:20 --> Could not find the language line "Home"
ERROR - 2024-10-07 11:52:20 --> Could not find the language line "Home"
ERROR - 2024-10-07 12:06:59 --> Could not find the language line "Home"
ERROR - 2024-10-07 12:22:20 --> Could not find the language line "Home"
ERROR - 2024-10-07 12:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 12:49:57 --> Could not find the language line "Home"
ERROR - 2024-10-07 12:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 12:52:21 --> Could not find the language line "Home"
ERROR - 2024-10-07 13:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 13:22:20 --> Could not find the language line "Home"
ERROR - 2024-10-07 13:41:14 --> Could not find the language line "Home"
ERROR - 2024-10-07 13:52:09 --> Could not find the language line "Home"
ERROR - 2024-10-07 13:52:24 --> Could not find the language line "Home"
ERROR - 2024-10-07 13:53:35 --> Could not find the language line "Home"
ERROR - 2024-10-07 14:22:21 --> Could not find the language line "Home"
ERROR - 2024-10-07 14:36:27 --> Could not find the language line "Home"
ERROR - 2024-10-07 14:52:22 --> Could not find the language line "Home"
ERROR - 2024-10-07 15:20:25 --> Could not find the language line "Home"
ERROR - 2024-10-07 15:22:23 --> Could not find the language line "Home"
ERROR - 2024-10-07 15:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 15:44:52 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-10-07 15:44:52 --> Could not find the language line "Home"
ERROR - 2024-10-07 15:44:52 --> 404 Page Not Found: Wp/index
ERROR - 2024-10-07 15:44:53 --> 404 Page Not Found: Bc/index
ERROR - 2024-10-07 15:44:53 --> 404 Page Not Found: Bk/index
ERROR - 2024-10-07 15:44:53 --> 404 Page Not Found: Backup/index
ERROR - 2024-10-07 15:44:54 --> 404 Page Not Found: New/index
ERROR - 2024-10-07 15:44:54 --> 404 Page Not Found: Main/index
ERROR - 2024-10-07 15:44:55 --> Could not find the language line "Home"
ERROR - 2024-10-07 15:52:23 --> Could not find the language line "Home"
ERROR - 2024-10-07 15:59:03 --> Could not find the language line "users"
ERROR - 2024-10-07 16:22:23 --> Could not find the language line "Home"
ERROR - 2024-10-07 16:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 16:52:24 --> Could not find the language line "Home"
ERROR - 2024-10-07 17:22:27 --> Could not find the language line "Home"
ERROR - 2024-10-07 17:52:24 --> Could not find the language line "Home"
ERROR - 2024-10-07 18:22:25 --> Could not find the language line "Home"
ERROR - 2024-10-07 18:52:25 --> Could not find the language line "Home"
ERROR - 2024-10-07 19:22:25 --> Could not find the language line "Home"
ERROR - 2024-10-07 19:52:25 --> Could not find the language line "Home"
ERROR - 2024-10-07 20:11:09 --> Could not find the language line "Home"
ERROR - 2024-10-07 20:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 20:22:28 --> Could not find the language line "Home"
ERROR - 2024-10-07 20:38:10 --> Could not find the language line "Home"
ERROR - 2024-10-07 20:52:27 --> Could not find the language line "Home"
ERROR - 2024-10-07 21:22:34 --> Could not find the language line "Home"
ERROR - 2024-10-07 21:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-07 21:52:28 --> Could not find the language line "Home"
ERROR - 2024-10-07 22:22:34 --> Could not find the language line "Home"
ERROR - 2024-10-07 22:52:29 --> Could not find the language line "Home"
ERROR - 2024-10-07 23:08:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-10-07 23:08:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-10-07 23:16:54 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-07 23:16:54 --> Could not find the language line "Home"
ERROR - 2024-10-07 23:22:36 --> Could not find the language line "Home"
ERROR - 2024-10-07 23:53:07 --> Could not find the language line "Home"
