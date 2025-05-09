<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-08-18 08:44:10 --> Could not find the language line "Home"
ERROR - 2022-08-18 08:44:11 --> Could not find the language line "Home"
ERROR - 2022-08-18 08:45:52 --> Could not find the language line "Home"
ERROR - 2022-08-18 08:47:45 --> Could not find the language line "Home"
ERROR - 2022-08-18 08:47:58 --> Could not find the language line "Home"
ERROR - 2022-08-18 08:49:37 --> Could not find the language line "Home"
ERROR - 2022-08-18 08:50:07 --> Could not find the language line "Home"
ERROR - 2022-08-18 08:51:40 --> 404 Page Not Found: Assets/js
ERROR - 2022-08-18 08:51:40 --> 404 Page Not Found: Assets/js
ERROR - 2022-08-18 09:04:40 --> 404 Page Not Found: Assets/js
ERROR - 2022-08-18 09:04:40 --> 404 Page Not Found: Assets/js
ERROR - 2022-08-18 09:07:12 --> 404 Page Not Found: Assets/js
ERROR - 2022-08-18 09:07:12 --> 404 Page Not Found: Assets/js
ERROR - 2022-08-18 09:08:58 --> 404 Page Not Found: Assets/js
ERROR - 2022-08-18 09:08:58 --> 404 Page Not Found: Assets/js
ERROR - 2022-08-18 09:09:34 --> Could not find the language line "Home"
ERROR - 2022-08-18 09:09:36 --> 404 Page Not Found: Assets/js
ERROR - 2022-08-18 09:09:36 --> 404 Page Not Found: Assets/js
ERROR - 2022-08-18 09:10:24 --> 404 Page Not Found: Assets/js
ERROR - 2022-08-18 09:10:24 --> 404 Page Not Found: Assets/js
ERROR - 2022-08-18 09:12:33 --> 404 Page Not Found: Assets/js
ERROR - 2022-08-18 09:12:33 --> 404 Page Not Found: Assets/js
ERROR - 2022-08-18 09:13:02 --> Could not find the language line "Home"
ERROR - 2022-08-18 09:16:00 --> Could not find the language line "Sunglasses"
ERROR - 2022-08-18 09:16:05 --> Could not find the language line "Gift_card"
ERROR - 2022-08-18 09:16:11 --> Could not find the language line "perfum"
ERROR - 2022-08-18 09:20:21 --> Could not find the language line "Home"
ERROR - 2022-08-18 09:20:23 --> Could not find the language line "Home"
ERROR - 2022-08-18 09:23:11 --> Could not find the language line "Home"
ERROR - 2022-08-18 09:31:37 --> Query error: Unknown column 'tags.item_id' in 'on clause' - Invalid query: SELECT `items`.*, SUM(transaction_items.qty * transaction_items.mvt_type) as total_qty
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
LEFT JOIN `tags` ON `tags`.`item_id` = `items`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND  `items`.`description` LIKE '%summer%' ESCAPE '!'
OR  `tags`.`tag` LIKE '%summer%' ESCAPE '!'
GROUP BY `items`.`id`
ORDER BY `total_qty` DESC
ERROR - 2022-08-18 09:48:15 --> Could not find the language line "Home"
ERROR - 2022-08-18 09:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-18 10:02:01 --> 404 Page Not Found: Assets/images
ERROR - 2022-08-18 10:02:01 --> 404 Page Not Found: Assets/images
ERROR - 2022-08-18 10:16:44 --> Could not find the language line "Home"
ERROR - 2022-08-18 10:16:44 --> Could not find the language line "Home"
ERROR - 2022-08-18 10:25:09 --> Could not find the language line "Home"
ERROR - 2022-08-18 10:25:10 --> Could not find the language line "Home"
ERROR - 2022-08-18 11:39:59 --> Could not find the language line "Home"
ERROR - 2022-08-18 11:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-18 11:53:48 --> Could not find the language line "Clothes"
ERROR - 2022-08-18 11:59:03 --> Could not find the language line "Home"
ERROR - 2022-08-18 11:59:25 --> Could not find the language line "Home"
ERROR - 2022-08-18 12:48:03 --> Could not find the language line "Home"
ERROR - 2022-08-18 12:48:04 --> Could not find the language line "Home"
