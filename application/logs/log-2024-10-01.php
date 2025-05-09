<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-01 00:20:32 --> Could not find the language line "Home"
ERROR - 2024-10-01 00:50:46 --> Could not find the language line "Home"
ERROR - 2024-10-01 01:20:35 --> Could not find the language line "Home"
ERROR - 2024-10-01 01:50:31 --> Could not find the language line "Home"
ERROR - 2024-10-01 02:20:38 --> Could not find the language line "Home"
ERROR - 2024-10-01 02:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 02:46:40 --> Could not find the language line "Home"
ERROR - 2024-10-01 02:50:27 --> Could not find the language line "Home"
ERROR - 2024-10-01 03:20:28 --> Could not find the language line "Home"
ERROR - 2024-10-01 03:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 03:50:31 --> Could not find the language line "Home"
ERROR - 2024-10-01 04:03:04 --> Could not find the language line "Home"
ERROR - 2024-10-01 04:03:06 --> 404 Page Not Found: Home/accounts
ERROR - 2024-10-01 04:03:06 --> 404 Page Not Found: Home/home
ERROR - 2024-10-01 04:03:06 --> 404 Page Not Found: Home/assets
ERROR - 2024-10-01 04:20:34 --> Could not find the language line "Home"
ERROR - 2024-10-01 04:50:27 --> Could not find the language line "Home"
ERROR - 2024-10-01 05:20:28 --> Could not find the language line "Home"
ERROR - 2024-10-01 05:28:04 --> Could not find the language line "accounts"
ERROR - 2024-10-01 05:50:28 --> Could not find the language line "Home"
ERROR - 2024-10-01 06:20:29 --> Could not find the language line "Home"
ERROR - 2024-10-01 06:47:11 --> Could not find the language line "Home"
ERROR - 2024-10-01 06:50:29 --> Could not find the language line "Home"
ERROR - 2024-10-01 06:58:38 --> Could not find the language line "Home"
ERROR - 2024-10-01 07:20:30 --> Could not find the language line "Home"
ERROR - 2024-10-01 07:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 07:41:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-01 07:41:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-01 07:41:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-01 07:50:31 --> Could not find the language line "Home"
ERROR - 2024-10-01 08:20:31 --> Could not find the language line "Home"
ERROR - 2024-10-01 08:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 08:50:37 --> Could not find the language line "Home"
ERROR - 2024-10-01 09:16:17 --> Could not find the language line "Home"
ERROR - 2024-10-01 09:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 09:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 09:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 09:20:31 --> Could not find the language line "Home"
ERROR - 2024-10-01 09:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 09:34:10 --> Could not find the language line "Home"
ERROR - 2024-10-01 09:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 09:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 09:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 09:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 09:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 09:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 09:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 09:50:31 --> Could not find the language line "Home"
ERROR - 2024-10-01 09:51:56 --> Could not find the language line "Other"
ERROR - 2024-10-01 10:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 10:11:16 --> Could not find the language line "Home"
ERROR - 2024-10-01 10:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 10:13:47 --> Could not find the language line "Home"
ERROR - 2024-10-01 10:13:49 --> Could not find the language line "Home"
ERROR - 2024-10-01 10:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 10:20:31 --> Could not find the language line "Home"
ERROR - 2024-10-01 10:36:27 --> Could not find the language line "Home"
ERROR - 2024-10-01 10:36:30 --> Could not find the language line "Home"
ERROR - 2024-10-01 10:50:31 --> Could not find the language line "Home"
ERROR - 2024-10-01 11:20:33 --> Could not find the language line "Home"
ERROR - 2024-10-01 11:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 11:25:59 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-01 11:25:59 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-01 11:29:18 --> Could not find the language line "Home"
ERROR - 2024-10-01 11:31:03 --> Could not find the language line "Home"
ERROR - 2024-10-01 11:33:07 --> Could not find the language line "Home"
ERROR - 2024-10-01 11:43:27 --> Could not find the language line "Home"
ERROR - 2024-10-01 11:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 11:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 11:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 11:50:32 --> Could not find the language line "Home"
ERROR - 2024-10-01 12:20:34 --> Could not find the language line "Home"
ERROR - 2024-10-01 12:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 12:50:33 --> Could not find the language line "Home"
ERROR - 2024-10-01 13:20:33 --> Could not find the language line "Home"
ERROR - 2024-10-01 13:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 13:41:08 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-01 13:41:11 --> Could not find the language line "Home"
ERROR - 2024-10-01 13:41:39 --> Could not find the language line "Home"
ERROR - 2024-10-01 13:50:34 --> Could not find the language line "Home"
ERROR - 2024-10-01 14:02:36 --> Could not find the language line "Home"
ERROR - 2024-10-01 14:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 14:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 14:20:36 --> Could not find the language line "Home"
ERROR - 2024-10-01 14:21:51 --> Could not find the language line "Home"
ERROR - 2024-10-01 14:21:52 --> 404 Page Not Found: Wp-json/wp
ERROR - 2024-10-01 14:21:54 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-10-01 14:50:35 --> Could not find the language line "Home"
ERROR - 2024-10-01 15:20:35 --> Could not find the language line "Home"
ERROR - 2024-10-01 15:50:36 --> Could not find the language line "Home"
ERROR - 2024-10-01 15:53:55 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-01 16:20:38 --> Could not find the language line "Home"
ERROR - 2024-10-01 16:50:37 --> Could not find the language line "Home"
ERROR - 2024-10-01 17:20:38 --> Could not find the language line "Home"
ERROR - 2024-10-01 17:22:16 --> Could not find the language line "Home"
ERROR - 2024-10-01 17:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:37:01 --> Could not find the language line "Home"
ERROR - 2024-10-01 17:37:50 --> Could not find the language line "Home"
ERROR - 2024-10-01 17:41:20 --> Could not find the language line "Home"
ERROR - 2024-10-01 17:41:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-01 17:41:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-01 17:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:46:40 --> Could not find the language line "Home"
ERROR - 2024-10-01 17:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 17:50:38 --> Could not find the language line "Home"
ERROR - 2024-10-01 17:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 18:20:38 --> Could not find the language line "Home"
ERROR - 2024-10-01 18:50:38 --> Could not find the language line "Home"
ERROR - 2024-10-01 19:20:38 --> Could not find the language line "Home"
ERROR - 2024-10-01 19:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 19:47:08 --> Could not find the language line "Home"
ERROR - 2024-10-01 19:50:00 --> Could not find the language line "Home"
ERROR - 2024-10-01 19:50:39 --> Could not find the language line "Home"
ERROR - 2024-10-01 19:52:54 --> Could not find the language line "Home"
ERROR - 2024-10-01 20:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 20:20:39 --> Could not find the language line "Home"
ERROR - 2024-10-01 20:22:42 --> Could not find the language line "Home"
ERROR - 2024-10-01 20:22:46 --> Could not find the language line "Home"
ERROR - 2024-10-01 20:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 20:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 20:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 20:25:30 --> Could not find the language line "Home"
ERROR - 2024-10-01 20:26:23 --> Could not find the language line "Home"
ERROR - 2024-10-01 20:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 20:29:44 --> Could not find the language line "Home"
ERROR - 2024-10-01 20:33:48 --> Could not find the language line "Home"
ERROR - 2024-10-01 20:33:53 --> Could not find the language line "Clothing"
ERROR - 2024-10-01 20:34:30 --> Could not find the language line "Clothing"
ERROR - 2024-10-01 20:35:37 --> Could not find the language line "Clothing"
ERROR - 2024-10-01 20:50:39 --> Could not find the language line "Home"
ERROR - 2024-10-01 21:20:42 --> Could not find the language line "Home"
ERROR - 2024-10-01 21:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 21:50:40 --> Could not find the language line "Home"
ERROR - 2024-10-01 22:20:43 --> Could not find the language line "Home"
ERROR - 2024-10-01 22:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-01 22:50:50 --> Could not find the language line "Home"
ERROR - 2024-10-01 23:20:50 --> Could not find the language line "Home"
ERROR - 2024-10-01 23:50:42 --> Could not find the language line "Home"
