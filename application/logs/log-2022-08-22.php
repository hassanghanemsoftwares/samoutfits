<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-08-22 06:21:51 --> Could not find the language line "Home"
ERROR - 2022-08-22 06:38:48 --> Could not find the language line "Home"
ERROR - 2022-08-22 06:39:27 --> Could not find the language line "Home"
ERROR - 2022-08-22 06:42:32 --> Could not find the language line "Home"
ERROR - 2022-08-22 06:42:45 --> Could not find the language line "Home"
ERROR - 2022-08-22 06:43:22 --> Could not find the language line "Home"
ERROR - 2022-08-22 06:43:33 --> Could not find the language line "Home"
ERROR - 2022-08-22 06:44:15 --> Could not find the language line "Home"
ERROR - 2022-08-22 06:44:24 --> Could not find the language line "Home"
ERROR - 2022-08-22 06:44:50 --> Could not find the language line "Clothing"
ERROR - 2022-08-22 06:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 08:42:22 --> Could not find the language line "Home"
ERROR - 2022-08-22 08:42:22 --> Could not find the language line "Home"
ERROR - 2022-08-22 08:43:06 --> Could not find the language line "Home"
ERROR - 2022-08-22 08:43:07 --> Could not find the language line "Sunglasses"
ERROR - 2022-08-22 08:43:11 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 08:43:15 --> Could not find the language line "Women%20Shoes"
ERROR - 2022-08-22 08:43:18 --> Could not find the language line "Unisex%20Shoes"
ERROR - 2022-08-22 08:43:55 --> Could not find the language line "Home"
ERROR - 2022-08-22 08:45:25 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 08:45:30 --> Could not find the language line "Sunglasses"
ERROR - 2022-08-22 08:45:36 --> Could not find the language line "Unisex%20Shoes"
ERROR - 2022-08-22 09:33:22 --> Could not find the language line "Home"
ERROR - 2022-08-22 10:45:06 --> Could not find the language line "Home"
ERROR - 2022-08-22 10:45:07 --> Could not find the language line "Home"
ERROR - 2022-08-22 10:45:17 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:46:04 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:46:05 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:46:42 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:47:09 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:47:29 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:47:44 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:47:45 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:47:47 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:49:48 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:50:14 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:50:38 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:50:56 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:51:22 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:51:32 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:51:49 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:57:11 --> Query error: Unknown column 'total_qty' in 'field list' - Invalid query: SELECT `items`.*, SUM(transaction_items.qty * transaction_items.mvt_type) as total_qty, IF(total_qty> 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`category` = 'Men Shoes'
AND `items`.`price` <= 100
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` ASC
ERROR - 2022-08-22 10:57:39 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:58:33 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:58:51 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:59:10 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2022-08-22 10:59:36 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:59:38 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 10:59:41 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 11:00:30 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 11:00:32 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 11:00:38 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 11:00:43 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 11:00:56 --> Could not find the language line "Men%20Shoes"
ERROR - 2022-08-22 13:03:17 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAMOUTFITS&amp;to=71737624&amp;text=9722 is your verification code for samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 C:\wamp64\www\ahmad_eco\application\controllers\Users.php 39
ERROR - 2022-08-22 13:05:54 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAMOUTFITS&amp;to=71737624&amp;text=1609 is your verification code for samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 C:\wamp64\www\ahmad_eco\application\controllers\Users.php 39
ERROR - 2022-08-22 13:06:22 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAMOUTFITS&amp;to=71737624&amp;text=5600 is your verification code for samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 C:\wamp64\www\ahmad_eco\application\controllers\Users.php 39
ERROR - 2022-08-22 13:21:12 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAMOUTFITS&amp;to=71737624&amp;text=1057 is your verification code for samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 C:\wamp64\www\ahmad_eco\application\controllers\Users.php 42
ERROR - 2022-08-22 13:28:27 --> Could not find the language line "Home"
ERROR - 2022-08-22 13:28:30 --> Could not find the language line "Men%20Shoes"
