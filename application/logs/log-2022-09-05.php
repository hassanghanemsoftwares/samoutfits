<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-09-05 06:09:36 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:09:37 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:12:59 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:13:41 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:13:59 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:23:24 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:23:46 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:24:07 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:24:13 --> Could not find the language line "Gift_card"
ERROR - 2022-09-05 06:24:15 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:25:23 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:25:33 --> Could not find the language line "Perfume"
ERROR - 2022-09-05 06:25:34 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:30:16 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:30:38 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:31:14 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:34:41 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:34:49 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:35:02 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:36:36 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:38:46 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:42:39 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:43:33 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 06:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 06:49:10 --> Query error: Unknown column 'transaction_item_sizes.qty' in 'field list' - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`stock_clearance` = 1
GROUP BY `items`.`id`
ERROR - 2022-09-05 06:49:27 --> Query error: Unknown column 'transaction_item_sizes.qty' in 'field list' - Invalid query: SELECT `items`.*, SUM(transaction_items.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`stock_clearance` = 1
GROUP BY `items`.`id`
ERROR - 2022-09-05 06:49:39 --> Query error: Unknown column 'transaction_item.qty' in 'field list' - Invalid query: SELECT `items`.*, SUM(transaction_items.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`stock_clearance` = 1
GROUP BY `items`.`id`
ERROR - 2022-09-05 06:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 06:50:00 --> Could not find the language line "Home"
ERROR - 2022-09-05 06:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 06:50:53 --> Severity: Notice --> Undefined index: image_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 21
ERROR - 2022-09-05 06:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 06:57:27 --> 404 Page Not Found: Stock_clearance/index
ERROR - 2022-09-05 06:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 06:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:01:26 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 46
ERROR - 2022-09-05 07:01:26 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 49
ERROR - 2022-09-05 07:01:26 --> Severity: Notice --> Undefined variable: pages_count C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 51
ERROR - 2022-09-05 07:01:26 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 57
ERROR - 2022-09-05 07:01:26 --> Severity: Notice --> Undefined variable: pages_count C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 57
ERROR - 2022-09-05 07:01:26 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 58
ERROR - 2022-09-05 07:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:02:41 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 46
ERROR - 2022-09-05 07:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:02:43 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 46
ERROR - 2022-09-05 07:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:02:43 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 46
ERROR - 2022-09-05 07:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:11:18 --> Severity: Notice --> Undefined variable: count C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 49
ERROR - 2022-09-05 07:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:14:46 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 07:15:08 --> Could not find the language line "Home"
ERROR - 2022-09-05 07:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 07:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 09:50:44 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 09:50:45 --> Could not find the language line "Clothing"
ERROR - 2022-09-05 09:50:47 --> Could not find the language line "Clothing"
ERROR - 2022-09-05 09:50:49 --> Could not find the language line "Clothing"
ERROR - 2022-09-05 09:50:50 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 09:50:56 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 09:50:59 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 09:52:38 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 09:52:54 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 09:52:58 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 09:53:12 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:07:13 --> Could not find the language line "Home"
ERROR - 2022-09-05 10:07:32 --> Could not find the language line "Home"
ERROR - 2022-09-05 10:09:39 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 10:12:29 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 10:12:34 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 10:13:39 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 10:13:40 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 10:13:41 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 10:13:42 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 10:14:23 --> Could not find the language line "Clothing"
ERROR - 2022-09-05 10:14:25 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 10:14:27 --> Could not find the language line "Clothing"
ERROR - 2022-09-05 10:14:38 --> Could not find the language line "Clothing"
ERROR - 2022-09-05 10:14:45 --> Could not find the language line "Clothing"
ERROR - 2022-09-05 10:14:48 --> Could not find the language line "Clothing"
ERROR - 2022-09-05 10:14:50 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 10:14:55 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:15:02 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:15:11 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:15:27 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:15:38 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:16:51 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:17:06 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:17:09 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 10:17:58 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 10:18:38 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:18:57 --> Could not find the language line "Clothing"
ERROR - 2022-09-05 10:18:59 --> Could not find the language line "Clothing"
ERROR - 2022-09-05 10:19:01 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 10:19:03 --> Could not find the language line "Clothing"
ERROR - 2022-09-05 10:19:05 --> Could not find the language line "Clothing"
ERROR - 2022-09-05 10:19:09 --> Could not find the language line "Home"
ERROR - 2022-09-05 10:19:12 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:21:23 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:21:27 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:21:31 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:22:35 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:22:38 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:22:42 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:22:44 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:22:59 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:23:04 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:23:13 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:23:15 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:23:17 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:23:33 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:23:44 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:23:57 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:24:55 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:25:17 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:25:23 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:25:24 --> Could not find the language line "Home"
ERROR - 2022-09-05 10:25:49 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:26:04 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:26:27 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:26:39 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:26:53 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:26:57 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:27:29 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:27:32 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:27:36 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:27:58 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:28:36 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:28:36 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:29:48 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:30:46 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:31:01 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:31:33 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:31:54 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:32:00 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 10:33:06 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:33:10 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:33:18 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:33:46 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:38:05 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:38:12 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:38:16 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:38:32 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:38:40 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:38:44 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:38:47 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:40:29 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:43:17 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:43:20 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:43:22 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:43:25 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:43:37 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:44:12 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:44:15 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:58:03 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:58:05 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 10:58:24 --> Could not find the language line "Home"
ERROR - 2022-09-05 10:58:30 --> Could not find the language line "Home"
ERROR - 2022-09-05 10:58:42 --> Could not find the language line "Sunglasses"
ERROR - 2022-09-05 11:14:28 --> Could not find the language line "Home"
ERROR - 2022-09-05 11:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 11:15:49 --> Could not find the language line "Home"
ERROR - 2022-09-05 11:15:59 --> Could not find the language line "Home"
ERROR - 2022-09-05 11:16:13 --> Could not find the language line "Home"
ERROR - 2022-09-05 11:16:21 --> Could not find the language line "Home"
ERROR - 2022-09-05 11:18:02 --> Could not find the language line "Home"
ERROR - 2022-09-05 11:26:49 --> Could not find the language line "Home"
ERROR - 2022-09-05 11:27:28 --> Could not find the language line "Home"
ERROR - 2022-09-05 11:29:27 --> Could not find the language line "Home"
ERROR - 2022-09-05 11:31:08 --> Could not find the language line "Home"
ERROR - 2022-09-05 11:31:18 --> Could not find the language line "Home"
ERROR - 2022-09-05 11:31:33 --> Could not find the language line "Home"
ERROR - 2022-09-05 12:26:20 --> Could not find the language line "Home"
ERROR - 2022-09-05 12:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 12:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 12:27:33 --> Could not find the language line "Home"
ERROR - 2022-09-05 12:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 12:30:08 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 22
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 22
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: min_price C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 30
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: max_pr C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 30
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: max_price C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 31
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: max_pr C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 31
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 46
ERROR - 2022-09-05 13:08:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 46
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 57
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 58
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 64
ERROR - 2022-09-05 13:08:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 64
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: colors_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 82
ERROR - 2022-09-05 13:08:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 82
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 93
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 94
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: sizes_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 101
ERROR - 2022-09-05 13:08:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 101
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 124
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 127
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 128
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 129
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 130
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 132
ERROR - 2022-09-05 13:08:49 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 168
ERROR - 2022-09-05 13:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 23
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 23
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: min_price C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 31
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: max_pr C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 31
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: max_price C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 32
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: max_pr C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 32
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:13:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 58
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 59
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 65
ERROR - 2022-09-05 13:13:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 65
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: colors_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 83
ERROR - 2022-09-05 13:13:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 83
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 94
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 95
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: sizes_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 102
ERROR - 2022-09-05 13:13:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 102
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 125
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 128
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 129
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 130
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 131
ERROR - 2022-09-05 13:13:41 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 133
ERROR - 2022-09-05 13:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:18:35 --> Could not find the language line "Bracelets"
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: min_price C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 31
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: max_price C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 32
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:20:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 58
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 59
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 65
ERROR - 2022-09-05 13:20:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 65
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: colors_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 83
ERROR - 2022-09-05 13:20:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 83
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 94
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 95
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: sizes_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 102
ERROR - 2022-09-05 13:20:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 102
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 125
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 128
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 129
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 130
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 131
ERROR - 2022-09-05 13:20:29 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 133
ERROR - 2022-09-05 13:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:21:58 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:21:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:21:58 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 58
ERROR - 2022-09-05 13:21:58 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 59
ERROR - 2022-09-05 13:21:58 --> Severity: Notice --> Undefined variable: gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 65
ERROR - 2022-09-05 13:21:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 65
ERROR - 2022-09-05 13:21:58 --> Severity: Notice --> Undefined variable: colors_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 83
ERROR - 2022-09-05 13:21:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 83
ERROR - 2022-09-05 13:21:58 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 94
ERROR - 2022-09-05 13:21:58 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 95
ERROR - 2022-09-05 13:21:58 --> Severity: Notice --> Undefined variable: sizes_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 102
ERROR - 2022-09-05 13:21:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 102
ERROR - 2022-09-05 13:21:58 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 125
ERROR - 2022-09-05 13:21:58 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 128
ERROR - 2022-09-05 13:21:58 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 129
ERROR - 2022-09-05 13:21:58 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 130
ERROR - 2022-09-05 13:21:58 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 131
ERROR - 2022-09-05 13:21:58 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 133
ERROR - 2022-09-05 13:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:22:41 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:22:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:22:41 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 58
ERROR - 2022-09-05 13:22:41 --> Severity: Notice --> Undefined variable: gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 65
ERROR - 2022-09-05 13:22:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 65
ERROR - 2022-09-05 13:22:41 --> Severity: Notice --> Undefined variable: colors_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 83
ERROR - 2022-09-05 13:22:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 83
ERROR - 2022-09-05 13:22:41 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 94
ERROR - 2022-09-05 13:22:41 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 95
ERROR - 2022-09-05 13:22:41 --> Severity: Notice --> Undefined variable: sizes_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 102
ERROR - 2022-09-05 13:22:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 102
ERROR - 2022-09-05 13:22:41 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 125
ERROR - 2022-09-05 13:22:41 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 128
ERROR - 2022-09-05 13:22:41 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 129
ERROR - 2022-09-05 13:22:41 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 130
ERROR - 2022-09-05 13:22:41 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 131
ERROR - 2022-09-05 13:22:41 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 133
ERROR - 2022-09-05 13:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:23:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 58
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: selected_gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:23:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: selected_gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:23:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: selected_gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:23:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: selected_gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:23:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: colors_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 83
ERROR - 2022-09-05 13:23:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 83
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 94
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 95
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: sizes_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 102
ERROR - 2022-09-05 13:23:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 102
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 125
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 128
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 129
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 130
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 131
ERROR - 2022-09-05 13:23:16 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 133
ERROR - 2022-09-05 13:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:24:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: category_name C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 58
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: selected_gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:24:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: selected_gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:24:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: selected_gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:24:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: selected_gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:24:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: colors_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 83
ERROR - 2022-09-05 13:24:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 83
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 94
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 95
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: sizes_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 102
ERROR - 2022-09-05 13:24:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 102
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 125
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 128
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 129
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 130
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 131
ERROR - 2022-09-05 13:24:13 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 133
ERROR - 2022-09-05 13:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:25:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: selected_gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:25:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: selected_gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:25:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: selected_gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:25:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: selected_gender C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:25:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: colors_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 83
ERROR - 2022-09-05 13:25:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 83
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 94
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 95
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: sizes_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 102
ERROR - 2022-09-05 13:25:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 102
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 125
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 128
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 129
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 130
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 131
ERROR - 2022-09-05 13:25:17 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 133
ERROR - 2022-09-05 13:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:25:30 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:25:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:25:30 --> Severity: Notice --> Undefined variable: colors_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 65
ERROR - 2022-09-05 13:25:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 65
ERROR - 2022-09-05 13:25:30 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 76
ERROR - 2022-09-05 13:25:30 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 77
ERROR - 2022-09-05 13:25:30 --> Severity: Notice --> Undefined variable: sizes_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 84
ERROR - 2022-09-05 13:25:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 84
ERROR - 2022-09-05 13:25:30 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 107
ERROR - 2022-09-05 13:25:30 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 110
ERROR - 2022-09-05 13:25:30 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 111
ERROR - 2022-09-05 13:25:30 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 112
ERROR - 2022-09-05 13:25:30 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 113
ERROR - 2022-09-05 13:25:30 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 115
ERROR - 2022-09-05 13:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:26:34 --> Severity: Notice --> Undefined property: Products::$Configuration C:\wamp64\www\ahmad_eco\application\controllers\Products.php 249
ERROR - 2022-09-05 13:26:34 --> Severity: error --> Exception: Call to a member function fetch_colors() on null C:\wamp64\www\ahmad_eco\application\controllers\Products.php 249
ERROR - 2022-09-05 13:27:08 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:27:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:27:08 --> Severity: Notice --> Undefined variable: colors C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:27:08 --> Severity: Warning --> in_array() expects parameter 2 to be array, string given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:27:08 --> Severity: Notice --> Undefined variable: colors C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:27:08 --> Severity: Warning --> in_array() expects parameter 2 to be array, string given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:27:08 --> Severity: Notice --> Undefined variable: colors C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:27:08 --> Severity: Warning --> in_array() expects parameter 2 to be array, string given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:27:08 --> Severity: Notice --> Undefined variable: colors C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:27:08 --> Severity: Warning --> in_array() expects parameter 2 to be array, string given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:27:08 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 76
ERROR - 2022-09-05 13:27:08 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 77
ERROR - 2022-09-05 13:27:08 --> Severity: Notice --> Undefined variable: sizes_list C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 84
ERROR - 2022-09-05 13:27:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 84
ERROR - 2022-09-05 13:27:08 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 107
ERROR - 2022-09-05 13:27:08 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 110
ERROR - 2022-09-05 13:27:08 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 111
ERROR - 2022-09-05 13:27:08 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 112
ERROR - 2022-09-05 13:27:08 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 113
ERROR - 2022-09-05 13:27:08 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 115
ERROR - 2022-09-05 13:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: colors C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, string given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: colors C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, string given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: colors C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, string given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: colors C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> in_array() expects parameter 2 to be array, string given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 76
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 77
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 107
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 110
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 111
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 112
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 113
ERROR - 2022-09-05 13:28:12 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 115
ERROR - 2022-09-05 13:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: colors C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, string given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: colors C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, string given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: colors C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, string given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: colors C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, string given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 67
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 76
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 77
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 107
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 110
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 111
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 112
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 113
ERROR - 2022-09-05 13:28:13 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 115
ERROR - 2022-09-05 13:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 76
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: hide_size C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 77
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 107
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 110
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 111
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 112
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 113
ERROR - 2022-09-05 13:31:10 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 115
ERROR - 2022-09-05 13:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sizes C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 86
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 107
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 110
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 111
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 112
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 113
ERROR - 2022-09-05 13:32:06 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 115
ERROR - 2022-09-05 13:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:33:31 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:33:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:33:31 --> Severity: Notice --> Undefined variable: products C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 107
ERROR - 2022-09-05 13:33:31 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 110
ERROR - 2022-09-05 13:33:31 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 111
ERROR - 2022-09-05 13:33:31 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 112
ERROR - 2022-09-05 13:33:31 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 113
ERROR - 2022-09-05 13:33:31 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 115
ERROR - 2022-09-05 13:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:34:33 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:34:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:34:33 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 110
ERROR - 2022-09-05 13:34:33 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 111
ERROR - 2022-09-05 13:34:33 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 112
ERROR - 2022-09-05 13:34:33 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 113
ERROR - 2022-09-05 13:34:33 --> Severity: Notice --> Undefined variable: sort C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 115
ERROR - 2022-09-05 13:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:35:01 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:35:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-05 13:39:00 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:39:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:39:03 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:39:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:40:00 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:40:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:44:00 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:44:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:44:02 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:44:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:44:08 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:44:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:44:11 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:44:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:44:14 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:44:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:46:42 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:46:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:47:23 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:47:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:47:32 --> Could not find the language line "Home"
ERROR - 2022-09-05 13:48:15 --> Could not find the language line "Home"
ERROR - 2022-09-05 13:48:18 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:48:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:58:13 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:58:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:58:30 --> Severity: Notice --> Undefined variable: filter C:\wamp64\www\ahmad_eco\application\models\Item.php 380
ERROR - 2022-09-05 13:58:30 --> Severity: Notice --> Undefined variable: filter C:\wamp64\www\ahmad_eco\application\models\Item.php 386
ERROR - 2022-09-05 13:58:30 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:58:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:59:06 --> Severity: error --> Exception: Cannot unset string offsets C:\wamp64\www\ahmad_eco\application\models\Item.php 380
ERROR - 2022-09-05 13:59:26 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:59:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:59:29 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-05 13:59:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
