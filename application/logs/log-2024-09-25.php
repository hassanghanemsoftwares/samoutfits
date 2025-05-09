<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-09-25 00:27:30 --> Could not find the language line "Home"
ERROR - 2024-09-25 00:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 00:57:33 --> Could not find the language line "Home"
ERROR - 2024-09-25 01:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 01:27:31 --> Could not find the language line "Home"
ERROR - 2024-09-25 01:33:51 --> Could not find the language line "Home"
ERROR - 2024-09-25 01:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 01:57:34 --> Could not find the language line "Home"
ERROR - 2024-09-25 02:27:31 --> Could not find the language line "Home"
ERROR - 2024-09-25 02:38:13 --> Could not find the language line "Home"
ERROR - 2024-09-25 02:57:30 --> Could not find the language line "Home"
ERROR - 2024-09-25 03:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 03:27:32 --> Could not find the language line "Home"
ERROR - 2024-09-25 03:57:36 --> Could not find the language line "Home"
ERROR - 2024-09-25 04:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 04:27:31 --> Could not find the language line "Home"
ERROR - 2024-09-25 04:57:31 --> Could not find the language line "Home"
ERROR - 2024-09-25 05:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 05:27:32 --> Could not find the language line "Home"
ERROR - 2024-09-25 05:57:32 --> Could not find the language line "Home"
ERROR - 2024-09-25 06:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 06:27:32 --> Could not find the language line "Home"
ERROR - 2024-09-25 06:57:33 --> Could not find the language line "Home"
ERROR - 2024-09-25 07:02:06 --> Could not find the language line "Home"
ERROR - 2024-09-25 07:11:51 --> Could not find the language line "Home"
ERROR - 2024-09-25 07:19:25 --> Could not find the language line "Home"
ERROR - 2024-09-25 07:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 07:27:33 --> Could not find the language line "Home"
ERROR - 2024-09-25 07:45:26 --> Could not find the language line "Home"
ERROR - 2024-09-25 07:57:34 --> Could not find the language line "Home"
ERROR - 2024-09-25 08:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 08:27:35 --> Could not find the language line "Home"
ERROR - 2024-09-25 08:57:35 --> Could not find the language line "Home"
ERROR - 2024-09-25 09:27:35 --> Could not find the language line "Home"
ERROR - 2024-09-25 09:32:52 --> Could not find the language line "Other"
ERROR - 2024-09-25 09:57:35 --> Could not find the language line "Home"
ERROR - 2024-09-25 10:27:37 --> Could not find the language line "Home"
ERROR - 2024-09-25 10:35:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 10:57:36 --> Could not find the language line "Home"
ERROR - 2024-09-25 11:27:36 --> Could not find the language line "Home"
ERROR - 2024-09-25 11:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 11:57:37 --> Could not find the language line "Home"
ERROR - 2024-09-25 12:27:37 --> Could not find the language line "Home"
ERROR - 2024-09-25 12:57:37 --> Could not find the language line "Home"
ERROR - 2024-09-25 13:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 13:27:38 --> Could not find the language line "Home"
ERROR - 2024-09-25 13:57:38 --> Could not find the language line "Home"
ERROR - 2024-09-25 14:21:32 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-09-25 14:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 14:27:38 --> Could not find the language line "Home"
ERROR - 2024-09-25 14:57:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-25 14:57:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-25 14:57:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-25 14:57:38 --> Could not find the language line "Home"
ERROR - 2024-09-25 15:27:39 --> Could not find the language line "Home"
ERROR - 2024-09-25 15:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 15:57:39 --> Could not find the language line "Home"
ERROR - 2024-09-25 16:27:39 --> Could not find the language line "Home"
ERROR - 2024-09-25 16:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 16:57:41 --> Could not find the language line "Home"
ERROR - 2024-09-25 17:27:41 --> Could not find the language line "Home"
ERROR - 2024-09-25 17:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 17:38:02 --> Could not find the language line "Home"
ERROR - 2024-09-25 17:38:04 --> 404 Page Not Found: Wp-includes/css
ERROR - 2024-09-25 17:38:05 --> 404 Page Not Found: Media/system
ERROR - 2024-09-25 17:57:42 --> Could not find the language line "Home"
ERROR - 2024-09-25 18:27:41 --> Could not find the language line "Home"
ERROR - 2024-09-25 18:57:41 --> Could not find the language line "Home"
ERROR - 2024-09-25 19:07:33 --> Could not find the language line "Home"
ERROR - 2024-09-25 19:27:42 --> Could not find the language line "Home"
ERROR - 2024-09-25 19:44:44 --> Could not find the language line "Home"
ERROR - 2024-09-25 19:57:42 --> Could not find the language line "Home"
ERROR - 2024-09-25 20:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 20:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 20:27:42 --> Could not find the language line "Home"
ERROR - 2024-09-25 20:57:43 --> Could not find the language line "Home"
ERROR - 2024-09-25 21:17:35 --> Could not find the language line "Home"
ERROR - 2024-09-25 21:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 21:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 21:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 21:27:43 --> Could not find the language line "Home"
ERROR - 2024-09-25 21:57:48 --> Could not find the language line "Home"
ERROR - 2024-09-25 22:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 22:27:48 --> Could not find the language line "Home"
ERROR - 2024-09-25 22:57:46 --> Could not find the language line "Home"
ERROR - 2024-09-25 23:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-25 23:27:46 --> Could not find the language line "Home"
ERROR - 2024-09-25 23:57:56 --> Could not find the language line "Home"
