<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-01-27 12:35:14 --> Could not find the language line "Home"
ERROR - 2023-01-27 12:35:15 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2023-01-27 12:35:15 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2023-01-27 12:35:38 --> Severity: Notice --> Undefined variable: gender C:\wamp64\www\ahmad_eco\application\views\products\category.php 66
ERROR - 2023-01-27 12:35:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\category.php 66
ERROR - 2023-01-27 12:35:38 --> Severity: Notice --> Undefined variable: colors_list C:\wamp64\www\ahmad_eco\application\views\products\category.php 84
ERROR - 2023-01-27 12:35:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\category.php 84
ERROR - 2023-01-27 12:35:43 --> Severity: Notice --> Undefined variable: gender C:\wamp64\www\ahmad_eco\application\views\products\category.php 66
ERROR - 2023-01-27 12:35:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\category.php 66
ERROR - 2023-01-27 12:35:43 --> Severity: Notice --> Undefined variable: colors_list C:\wamp64\www\ahmad_eco\application\views\products\category.php 84
ERROR - 2023-01-27 12:35:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\category.php 84
ERROR - 2023-01-27 12:51:03 --> Severity: Notice --> Undefined variable: gender C:\wamp64\www\ahmad_eco\application\views\products\category.php 66
ERROR - 2023-01-27 12:51:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\category.php 66
ERROR - 2023-01-27 12:51:03 --> Severity: Notice --> Undefined variable: colors_list C:\wamp64\www\ahmad_eco\application\views\products\category.php 84
ERROR - 2023-01-27 12:51:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\category.php 84
ERROR - 2023-01-27 12:51:45 --> Severity: Notice --> Undefined variable: gender C:\wamp64\www\ahmad_eco\application\views\products\category.php 66
ERROR - 2023-01-27 12:51:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\category.php 66
ERROR - 2023-01-27 12:58:54 --> Severity: Notice --> Undefined variable: gender C:\wamp64\www\ahmad_eco\application\views\products\category.php 66
ERROR - 2023-01-27 12:58:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\category.php 66
ERROR - 2023-01-27 12:59:20 --> Could not find the language line "Clothing"
ERROR - 2023-01-27 12:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-01-27 13:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-01-27 13:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-01-27 13:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-01-27 13:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-01-27 13:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-01-27 13:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-01-27 13:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-01-27 13:05:18 --> Severity: Notice --> Array to string conversion C:\wamp64\www\ahmad_eco\application\models\Transaction.php 229
ERROR - 2023-01-27 13:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-01-27 13:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-01-27 13:46:00 --> Query error: Column 'price' in field list is ambiguous - Invalid query: SELECT `items`.`id`, `items`.`color`, `items`.`gender`, `transaction_item_sizes`.`size`, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, max(price) as price_max
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('sub 1')
GROUP BY `items`.`id`, `transaction_item_sizes`.`size`
HAVING `total_qty` > 0
ERROR - 2023-01-27 14:02:08 --> Severity: Notice --> Undefined variable: max_pr C:\wamp64\www\ahmad_eco\application\views\products\category.php 32
ERROR - 2023-01-27 14:02:08 --> Severity: Notice --> Undefined variable: max_pr C:\wamp64\www\ahmad_eco\application\views\products\category.php 33
ERROR - 2023-01-27 14:04:52 --> Severity: Notice --> Undefined variable: max_pr C:\wamp64\www\ahmad_eco\application\views\products\category.php 32
ERROR - 2023-01-27 14:04:52 --> Severity: Notice --> Undefined variable: max_pr C:\wamp64\www\ahmad_eco\application\views\products\category.php 33
ERROR - 2023-01-27 14:40:19 --> Could not find the language line "Home"
ERROR - 2023-01-27 14:40:19 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2023-01-27 14:40:19 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2023-01-27 14:40:21 --> Could not find the language line "Home"
ERROR - 2023-01-27 14:40:21 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2023-01-27 14:40:21 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2023-01-27 14:41:42 --> Could not find the language line "Home"
ERROR - 2023-01-27 14:41:42 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2023-01-27 14:41:42 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2023-01-27 14:41:47 --> Could not find the language line "Home"
ERROR - 2023-01-27 14:41:48 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2023-01-27 14:41:48 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2023-01-27 14:41:57 --> Could not find the language line "Home"
ERROR - 2023-01-27 14:42:02 --> Could not find the language line "Home"
ERROR - 2023-01-27 14:42:02 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2023-01-27 14:42:02 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2023-01-27 14:45:07 --> 404 Page Not Found: Products/Wallets
ERROR - 2023-01-27 14:45:33 --> Could not find the language line "Clothing"
ERROR - 2023-01-27 14:45:34 --> Could not find the language line "Clothing"
ERROR - 2023-01-27 14:46:10 --> Could not find the language line "Clothing"
ERROR - 2023-01-27 14:46:10 --> Severity: Notice --> Array to string conversion C:\wamp64\www\ahmad_eco\application\views\products\category.php 8
ERROR - 2023-01-27 14:46:27 --> Could not find the language line "Clothing"
ERROR - 2023-01-27 14:46:27 --> Severity: Notice --> Undefined offset: 0 C:\wamp64\www\ahmad_eco\application\views\products\category.php 8
ERROR - 2023-01-27 14:46:36 --> Could not find the language line "Clothing"
ERROR - 2023-01-27 14:46:42 --> Could not find the language line "Clothing"
ERROR - 2023-01-27 14:48:42 --> Could not find the language line "Clothing"
ERROR - 2023-01-27 14:48:57 --> Could not find the language line "Clothing"
ERROR - 2023-01-27 14:49:12 --> Could not find the language line "Home"
ERROR - 2023-01-27 14:49:12 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2023-01-27 14:49:12 --> 404 Page Not Found: Accounting/sections_uploads
