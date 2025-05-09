<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-09-14 00:10:25 --> Could not find the language line "Home"
ERROR - 2024-09-14 00:11:11 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-09-14 00:11:11 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-09-14 00:11:11 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-09-14 00:11:13 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-09-14 00:11:13 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-09-14 00:11:30 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-09-14 00:11:30 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-09-14 00:11:30 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2024-09-14 00:11:30 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-09-14 00:11:30 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2024-09-14 00:11:30 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-09-14 00:11:30 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-09-14 00:11:30 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-09-14 00:12:46 --> Could not find the language line "Home"
ERROR - 2024-09-14 00:14:30 --> Could not find the language line "Home"
ERROR - 2024-09-14 00:14:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-09-14 00:24:12 --> Could not find the language line "Home"
ERROR - 2024-09-14 00:53:47 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-09-14 00:54:11 --> Could not find the language line "Home"
ERROR - 2024-09-14 01:24:12 --> Could not find the language line "Home"
ERROR - 2024-09-14 01:54:13 --> Could not find the language line "Home"
ERROR - 2024-09-14 01:57:37 --> Could not find the language line "Home"
ERROR - 2024-09-14 02:16:27 --> Could not find the language line "Home"
ERROR - 2024-09-14 02:16:28 --> Could not find the language line "Home"
ERROR - 2024-09-14 02:24:12 --> Could not find the language line "Home"
ERROR - 2024-09-14 02:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 02:54:13 --> Could not find the language line "Home"
ERROR - 2024-09-14 03:24:13 --> Could not find the language line "Home"
ERROR - 2024-09-14 03:45:54 --> Could not find the language line "Home"
ERROR - 2024-09-14 03:47:01 --> Could not find the language line "Home"
ERROR - 2024-09-14 03:47:05 --> Could not find the language line "Home"
ERROR - 2024-09-14 03:48:08 --> Could not find the language line "Home"
ERROR - 2024-09-14 03:54:17 --> Could not find the language line "Home"
ERROR - 2024-09-14 04:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 04:24:15 --> Could not find the language line "Home"
ERROR - 2024-09-14 04:48:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-14 04:48:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-14 04:48:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-14 04:54:15 --> Could not find the language line "Home"
ERROR - 2024-09-14 05:24:17 --> Could not find the language line "Home"
ERROR - 2024-09-14 05:54:16 --> Could not find the language line "Home"
ERROR - 2024-09-14 05:56:29 --> Could not find the language line "Home"
ERROR - 2024-09-14 06:01:45 --> Could not find the language line "Home"
ERROR - 2024-09-14 06:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:24:16 --> Could not find the language line "Home"
ERROR - 2024-09-14 06:50:59 --> Could not find the language line "Home"
ERROR - 2024-09-14 06:54:17 --> Could not find the language line "Home"
ERROR - 2024-09-14 06:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 06:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:22:44 --> Could not find the language line "Home"
ERROR - 2024-09-14 07:24:16 --> Could not find the language line "Home"
ERROR - 2024-09-14 07:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:54:18 --> Could not find the language line "Home"
ERROR - 2024-09-14 07:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:59:01 --> Could not find the language line "Home"
ERROR - 2024-09-14 07:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 07:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:19:02 --> Could not find the language line "Home"
ERROR - 2024-09-14 08:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:24:18 --> Could not find the language line "Home"
ERROR - 2024-09-14 08:28:38 --> Could not find the language line "Home"
ERROR - 2024-09-14 08:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:54:19 --> Could not find the language line "Home"
ERROR - 2024-09-14 08:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 08:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:01:08 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:06:15 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:12:06 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:16:45 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:18:43 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:18:47 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:19:39 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:23:30 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:24:18 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:24:39 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:39:12 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:39:22 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:45:16 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:48:40 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:49:30 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:49:31 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:54:19 --> Could not find the language line "Home"
ERROR - 2024-09-14 09:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 09:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 10:07:18 --> Could not find the language line "Home"
ERROR - 2024-09-14 10:15:56 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-09-14 10:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 10:22:31 --> Could not find the language line "Home"
ERROR - 2024-09-14 10:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 10:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 10:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 10:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 10:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 10:24:19 --> Could not find the language line "Home"
ERROR - 2024-09-14 10:24:40 --> Could not find the language line "Home"
ERROR - 2024-09-14 10:24:44 --> Could not find the language line "Home"
ERROR - 2024-09-14 10:28:00 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-09-14 10:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 10:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 10:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 10:46:39 --> Could not find the language line "Home"
ERROR - 2024-09-14 10:46:48 --> Could not find the language line "Socks"
ERROR - 2024-09-14 10:46:58 --> Could not find the language line "Home"
ERROR - 2024-09-14 10:47:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-14 10:47:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-14 10:47:15 --> Could not find the language line "Home"
ERROR - 2024-09-14 10:54:19 --> Could not find the language line "Home"
ERROR - 2024-09-14 11:13:43 --> Could not find the language line "Home"
ERROR - 2024-09-14 11:18:39 --> Could not find the language line "Home"
ERROR - 2024-09-14 11:18:49 --> Could not find the language line "Home"
ERROR - 2024-09-14 11:22:23 --> Could not find the language line "Home"
ERROR - 2024-09-14 11:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 11:24:19 --> Could not find the language line "Home"
ERROR - 2024-09-14 11:25:29 --> Could not find the language line "Home"
ERROR - 2024-09-14 11:25:34 --> Could not find the language line "Sunglasses"
ERROR - 2024-09-14 11:25:39 --> Could not find the language line "Home"
ERROR - 2024-09-14 11:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 11:25:53 --> Could not find the language line "Home"
ERROR - 2024-09-14 11:25:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-14 11:25:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-14 11:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 11:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 11:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 11:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 11:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 11:30:08 --> Could not find the language line "Home"
ERROR - 2024-09-14 11:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 11:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 11:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 11:50:11 --> Could not find the language line "Home"
ERROR - 2024-09-14 11:50:12 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-09-14 11:50:12 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-09-14 11:50:12 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-09-14 11:50:12 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-09-14 11:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 11:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 11:54:20 --> Could not find the language line "Home"
ERROR - 2024-09-14 11:59:13 --> Could not find the language line "Home"
ERROR - 2024-09-14 11:59:41 --> Could not find the language line "Home"
ERROR - 2024-09-14 12:03:21 --> Could not find the language line "Home"
ERROR - 2024-09-14 12:03:21 --> Could not find the language line "Home"
ERROR - 2024-09-14 12:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:21:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 12:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:24:22 --> Could not find the language line "Home"
ERROR - 2024-09-14 12:26:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 12:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:28:14 --> Could not find the language line "Home"
ERROR - 2024-09-14 12:31:23 --> Could not find the language line "Home"
ERROR - 2024-09-14 12:33:14 --> Could not find the language line "Home"
ERROR - 2024-09-14 12:33:57 --> Could not find the language line "Home"
ERROR - 2024-09-14 12:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:34:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 12:35:50 --> Could not find the language line "Home"
ERROR - 2024-09-14 12:39:47 --> Could not find the language line "Home"
ERROR - 2024-09-14 12:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:44:50 --> Could not find the language line "Home"
ERROR - 2024-09-14 12:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:48:11 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-09-14 12:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:48:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 12:48:31 --> Could not find the language line "Home"
ERROR - 2024-09-14 12:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:50:12 --> Could not find the language line "Home"
ERROR - 2024-09-14 12:50:23 --> Could not find the language line "Home"
ERROR - 2024-09-14 12:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 12:54:21 --> Could not find the language line "Home"
ERROR - 2024-09-14 13:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:15:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:19:23 --> Could not find the language line "Home"
ERROR - 2024-09-14 13:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:24:20 --> Could not find the language line "Home"
ERROR - 2024-09-14 13:27:34 --> Could not find the language line "Home"
ERROR - 2024-09-14 13:27:35 --> Could not find the language line "Home"
ERROR - 2024-09-14 13:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:29:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-14 13:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:33:29 --> Could not find the language line "Home"
ERROR - 2024-09-14 13:33:30 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-09-14 13:33:30 --> Could not find the language line "Home"
ERROR - 2024-09-14 13:33:30 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-09-14 13:33:30 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-09-14 13:33:30 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-09-14 13:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:54:21 --> Could not find the language line "Home"
ERROR - 2024-09-14 13:58:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-14 13:58:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-09-14 13:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 13:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 14:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 14:05:22 --> Could not find the language line "Home"
ERROR - 2024-09-14 14:05:55 --> Could not find the language line "Home"
ERROR - 2024-09-14 14:15:40 --> Could not find the language line "Home"
ERROR - 2024-09-14 14:24:22 --> Could not find the language line "Home"
ERROR - 2024-09-14 14:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 14:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 14:47:00 --> Could not find the language line "Home"
ERROR - 2024-09-14 14:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 14:48:17 --> Could not find the language line "Home"
ERROR - 2024-09-14 14:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 14:49:48 --> Could not find the language line "Home"
ERROR - 2024-09-14 14:50:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-14 14:50:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-14 14:50:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-14 14:50:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-09-14 14:50:30 --> Could not find the language line "Home"
ERROR - 2024-09-14 14:50:43 --> Could not find the language line "Home"
ERROR - 2024-09-14 14:54:22 --> Could not find the language line "Home"
ERROR - 2024-09-14 14:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 15:04:32 --> Could not find the language line "Home"
ERROR - 2024-09-14 15:05:09 --> Could not find the language line "Home"
ERROR - 2024-09-14 15:05:14 --> Could not find the language line "Home"
ERROR - 2024-09-14 15:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 15:09:43 --> Could not find the language line "Home"
ERROR - 2024-09-14 15:12:14 --> Could not find the language line "Home"
ERROR - 2024-09-14 15:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 15:13:27 --> Could not find the language line "Home"
ERROR - 2024-09-14 15:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 15:13:36 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-09-14 15:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 15:13:56 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-09-14 15:14:13 --> Could not find the language line "Home"
ERROR - 2024-09-14 15:14:22 --> Could not find the language line "Home"
ERROR - 2024-09-14 15:14:35 --> Could not find the language line "Home"
ERROR - 2024-09-14 15:20:09 --> Could not find the language line "Home"
ERROR - 2024-09-14 15:20:32 --> Could not find the language line "Home"
ERROR - 2024-09-14 15:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 15:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 15:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 15:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 15:24:23 --> Could not find the language line "Home"
ERROR - 2024-09-14 15:25:06 --> Could not find the language line "Home"
ERROR - 2024-09-14 15:50:10 --> Could not find the language line "Home"
ERROR - 2024-09-14 15:54:23 --> Could not find the language line "Home"
ERROR - 2024-09-14 16:13:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 16:24:23 --> Could not find the language line "Home"
ERROR - 2024-09-14 16:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 16:41:07 --> Could not find the language line "Home"
ERROR - 2024-09-14 16:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 16:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 16:54:24 --> Could not find the language line "Home"
ERROR - 2024-09-14 17:24:23 --> Could not find the language line "Home"
ERROR - 2024-09-14 17:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 17:49:15 --> Could not find the language line "Home"
ERROR - 2024-09-14 17:51:32 --> Could not find the language line "Home"
ERROR - 2024-09-14 17:51:44 --> Could not find the language line "Bracelets"
ERROR - 2024-09-14 17:52:16 --> Could not find the language line "Bracelets"
ERROR - 2024-09-14 17:52:33 --> Could not find the language line "Home"
ERROR - 2024-09-14 17:52:41 --> Could not find the language line "Bracelets"
ERROR - 2024-09-14 17:52:44 --> Could not find the language line "Home"
ERROR - 2024-09-14 17:54:13 --> Could not find the language line "Home"
ERROR - 2024-09-14 17:54:20 --> Could not find the language line "Perfume"
ERROR - 2024-09-14 17:54:24 --> Could not find the language line "Home"
ERROR - 2024-09-14 17:54:25 --> Could not find the language line "Home"
ERROR - 2024-09-14 17:56:09 --> Could not find the language line "Home"
ERROR - 2024-09-14 17:56:20 --> Could not find the language line "Perfume"
ERROR - 2024-09-14 17:56:28 --> Could not find the language line "Home"
ERROR - 2024-09-14 17:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 17:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 17:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 17:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 17:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 17:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 17:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 17:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 17:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 17:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 17:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 17:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 17:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 18:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 18:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 18:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 18:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 18:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 18:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 18:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 18:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 18:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 18:24:24 --> Could not find the language line "Home"
ERROR - 2024-09-14 18:26:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-14 18:26:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-14 18:26:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-14 18:26:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-14 18:26:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-14 18:26:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-14 18:26:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-14 18:26:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-14 18:26:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-14 18:26:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-14 18:26:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-14 18:26:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-14 18:54:24 --> Could not find the language line "Home"
ERROR - 2024-09-14 19:05:59 --> Could not find the language line "Home"
ERROR - 2024-09-14 19:06:37 --> Could not find the language line "Home"
ERROR - 2024-09-14 19:24:25 --> Could not find the language line "Home"
ERROR - 2024-09-14 19:27:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 19:27:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 19:27:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 19:27:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 19:27:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 19:27:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 19:27:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 19:27:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 19:27:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 19:27:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 19:27:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 19:27:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-09-14 19:28:48 --> Could not find the language line "Home"
ERROR - 2024-09-14 19:29:29 --> Could not find the language line "Home"
ERROR - 2024-09-14 19:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 19:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 19:42:32 --> Could not find the language line "Home"
ERROR - 2024-09-14 19:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 19:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 19:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 19:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 19:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 19:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 19:49:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-14 19:49:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-14 19:49:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-14 19:49:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-14 19:49:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-14 19:49:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-14 19:49:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-14 19:49:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-14 19:49:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-14 19:49:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-14 19:49:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-14 19:49:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-14 19:54:26 --> Could not find the language line "Home"
ERROR - 2024-09-14 19:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 19:56:35 --> Could not find the language line "Home"
ERROR - 2024-09-14 19:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 19:57:51 --> Could not find the language line "Home"
ERROR - 2024-09-14 20:03:20 --> Could not find the language line "Home"
ERROR - 2024-09-14 20:04:26 --> Could not find the language line "Home"
ERROR - 2024-09-14 20:05:37 --> Could not find the language line "Clothing"
ERROR - 2024-09-14 20:05:43 --> Could not find the language line "Home"
ERROR - 2024-09-14 20:05:51 --> Could not find the language line "Socks"
ERROR - 2024-09-14 20:05:55 --> Could not find the language line "Home"
ERROR - 2024-09-14 20:07:49 --> Could not find the language line "Home"
ERROR - 2024-09-14 20:07:49 --> 404 Page Not Found: Feed/index
ERROR - 2024-09-14 20:09:02 --> Could not find the language line "Home"
ERROR - 2024-09-14 20:11:31 --> Could not find the language line "Home"
ERROR - 2024-09-14 20:24:26 --> Could not find the language line "Home"
ERROR - 2024-09-14 20:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 20:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 20:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 20:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 20:54:27 --> Could not find the language line "Home"
ERROR - 2024-09-14 20:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 20:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 20:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 20:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 21:24:28 --> Could not find the language line "Home"
ERROR - 2024-09-14 21:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-14 21:54:27 --> Could not find the language line "Home"
ERROR - 2024-09-14 22:24:29 --> Could not find the language line "Home"
ERROR - 2024-09-14 22:45:25 --> Could not find the language line "Home"
ERROR - 2024-09-14 22:46:26 --> Could not find the language line "Home"
ERROR - 2024-09-14 22:47:04 --> Could not find the language line "Home"
ERROR - 2024-09-14 22:54:30 --> Could not find the language line "Home"
ERROR - 2024-09-14 23:24:31 --> Could not find the language line "Home"
ERROR - 2024-09-14 23:54:32 --> Could not find the language line "Home"
