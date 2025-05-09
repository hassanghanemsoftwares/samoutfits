<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-25 00:07:27 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-10-25 00:12:39 --> Could not find the language line "Home"
ERROR - 2023-10-25 00:23:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 00:24:33 --> Could not find the language line "Home"
ERROR - 2023-10-25 00:30:47 --> Could not find the language line "Home"
ERROR - 2023-10-25 00:32:26 --> Could not find the language line "Home"
ERROR - 2023-10-25 00:33:01 --> Could not find the language line "Home"
ERROR - 2023-10-25 00:33:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-25 00:34:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-25 00:34:54 --> Could not find the language line "Home"
ERROR - 2023-10-25 00:43:54 --> Could not find the language line "Home"
ERROR - 2023-10-25 00:49:46 --> Could not find the language line "Home"
ERROR - 2023-10-25 01:31:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2023-10-25 01:31:30 --> Unable to connect to the database
ERROR - 2023-10-25 01:31:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 01:31:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2023-10-25 01:31:44 --> Unable to connect to the database
ERROR - 2023-10-25 01:31:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 01:32:53 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 01:38:57 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 01:43:36 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 02:03:51 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 02:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 02:18:37 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 02:36:11 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 02:50:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 03:07:41 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 03:12:52 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 03:12:52 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 03:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 04:03:51 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 04:34:54 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 04:35:25 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 04:35:26 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 04:52:15 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-25 04:54:54 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 04:54:57 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 05:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 05:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 05:25:16 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 05:27:22 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 05:28:20 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 05:59:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 05:59:43 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:02:03 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:06:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:06:28 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:06:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:06:49 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:06:51 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:07:06 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:07:10 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:07:14 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:08:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:20:09 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:20:19 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:20:22 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:21:58 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:22:01 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:22:05 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:22:11 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:23:48 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:23:49 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:23:51 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:24:07 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:24:16 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:24:18 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:24:19 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:24:25 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:24:27 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:24:32 --> Could not find the language line "Bracelets"
ERROR - 2023-10-25 06:24:40 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:24:51 --> Could not find the language line "Bracelets"
ERROR - 2023-10-25 06:24:55 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:25:22 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:25:29 --> Could not find the language line "Bracelets"
ERROR - 2023-10-25 06:25:29 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:25:47 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:26:08 --> Could not find the language line "Bracelets"
ERROR - 2023-10-25 06:26:10 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:26:13 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:26:19 --> Could not find the language line "Bracelets"
ERROR - 2023-10-25 06:27:57 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:28:09 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:28:20 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:28:22 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:28:40 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:28:44 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:29:56 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:30:18 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:31:03 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:35:28 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:35:39 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:37:03 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-25 06:37:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 06:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:40:27 --> Could not find the language line "Home"
ERROR - 2023-10-25 06:40:59 --> Could not find the language line "Home"
ERROR - 2023-10-25 06:41:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 06:41:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 06:42:30 --> Could not find the language line "Home"
ERROR - 2023-10-25 06:42:34 --> Could not find the language line "Bracelets"
ERROR - 2023-10-25 06:42:41 --> Could not find the language line "Bracelets"
ERROR - 2023-10-25 06:44:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 06:46:10 --> Could not find the language line "Home"
ERROR - 2023-10-25 06:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:49:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-25 06:49:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-25 06:49:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 06:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:50:13 --> Could not find the language line "Home"
ERROR - 2023-10-25 06:53:09 --> Could not find the language line "Home"
ERROR - 2023-10-25 06:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:54:37 --> Could not find the language line "Home"
ERROR - 2023-10-25 06:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:55:46 --> Could not find the language line "Home"
ERROR - 2023-10-25 06:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:56:30 --> Could not find the language line "Home"
ERROR - 2023-10-25 06:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 06:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 07:03:21 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:04:17 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 07:05:10 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 07:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 07:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 07:08:07 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:08:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 07:08:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 07:08:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 07:09:02 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:09:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-25 07:09:32 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:09:56 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:09:56 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:09:56 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:09:56 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:09:56 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:09:56 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 07:10:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 07:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 07:11:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 07:15:02 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:20:28 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:42:50 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:43:02 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:43:05 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:43:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 07:44:20 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:44:28 --> Could not find the language line "Home"
ERROR - 2023-10-25 07:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 07:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 07:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 07:58:17 --> Could not find the language line "Home"
ERROR - 2023-10-25 08:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:06:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:07:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-25 08:07:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-25 08:07:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 08:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:08:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-25 08:08:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-25 08:08:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 08:09:25 --> Could not find the language line "Home"
ERROR - 2023-10-25 08:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:23:57 --> Could not find the language line "Home"
ERROR - 2023-10-25 08:24:38 --> Could not find the language line "Home"
ERROR - 2023-10-25 08:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:29:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-25 08:29:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-25 08:29:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 08:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Api/user
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Api/admin
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Api/v1
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Api/.git
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Alpha/.git
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Api/admin
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Api/admin
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Api/v3
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Api/v4
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: A/.git
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Git/config
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Api/user
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Api/v2
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Amphtml/.git
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Aomanalyzer/.git
ERROR - 2023-10-25 08:30:35 --> 404 Page Not Found: Api/admin
ERROR - 2023-10-25 08:30:36 --> 404 Page Not Found: Beta/.git
ERROR - 2023-10-25 08:30:36 --> 404 Page Not Found: App/.git
ERROR - 2023-10-25 08:30:36 --> 404 Page Not Found: Application/.git
ERROR - 2023-10-25 08:30:36 --> 404 Page Not Found: Admin/.git
ERROR - 2023-10-25 08:30:36 --> 404 Page Not Found: V1/.git
ERROR - 2023-10-25 08:30:36 --> 404 Page Not Found: Cms/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: M/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: V2/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: Flock/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: New/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: Web/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: Shop/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: Public/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: User/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: Repository/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: V3/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: Old-cuburn/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: Store/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: Test/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: Api/user
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: Js/.git
ERROR - 2023-10-25 08:30:37 --> 404 Page Not Found: Content/.git
ERROR - 2023-10-25 08:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:32:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:34:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:34:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:34:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:35:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:35:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:40:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:57:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:58:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:58:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:58:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:58:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:58:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:58:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:58:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 08:59:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 08:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 09:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 09:03:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-25 09:03:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-25 09:03:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 09:03:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 09:05:29 --> Could not find the language line "Home"
ERROR - 2023-10-25 09:10:00 --> Could not find the language line "Home"
ERROR - 2023-10-25 09:11:35 --> Could not find the language line "Home"
ERROR - 2023-10-25 09:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 09:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 09:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 09:16:31 --> Could not find the language line "Home"
ERROR - 2023-10-25 09:17:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 09:27:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 09:27:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 09:28:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 09:28:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 09:28:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 09:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 09:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 09:53:59 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-25 09:57:03 --> Could not find the language line "Home"
ERROR - 2023-10-25 09:57:17 --> Could not find the language line "Home"
ERROR - 2023-10-25 09:57:18 --> 404 Page Not Found: Home/assets
ERROR - 2023-10-25 09:59:49 --> Could not find the language line "Home"
ERROR - 2023-10-25 09:59:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 09:59:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 10:00:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 10:00:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 10:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:00:58 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:01:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:01:40 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:02:04 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:02:53 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:03:27 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:03:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:03:53 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:06:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:06:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:06:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:07:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:07:21 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:08:36 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-25 10:10:27 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:21:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:23:48 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:24:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:24:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:28:06 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:29:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:29:42 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:29:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:30:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:36:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-25 10:36:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-25 10:36:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 10:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:48:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:49:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:50:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:51:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:51:24 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:51:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:52:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:52:51 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:52:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:52:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:53:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:53:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:53:13 --> Could not find the language line "Home"
ERROR - 2023-10-25 10:53:17 --> Could not find the language line "Perfume"
ERROR - 2023-10-25 10:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:53:34 --> Could not find the language line "Perfume"
ERROR - 2023-10-25 10:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:59:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 10:59:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:59:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 10:59:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 11:00:39 --> Could not find the language line "Home"
ERROR - 2023-10-25 11:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 11:07:56 --> Could not find the language line "Home"
ERROR - 2023-10-25 11:11:05 --> Could not find the language line "Home"
ERROR - 2023-10-25 11:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 11:11:55 --> Could not find the language line "Perfume"
ERROR - 2023-10-25 11:11:58 --> Could not find the language line "Home"
ERROR - 2023-10-25 11:15:10 --> Could not find the language line "Home"
ERROR - 2023-10-25 11:17:01 --> Could not find the language line "Home"
ERROR - 2023-10-25 11:19:44 --> Could not find the language line "Home"
ERROR - 2023-10-25 11:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 11:20:43 --> Could not find the language line "Home"
ERROR - 2023-10-25 11:24:22 --> Could not find the language line "Home"
ERROR - 2023-10-25 11:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 11:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 11:25:46 --> Could not find the language line "Home"
ERROR - 2023-10-25 11:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 11:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 11:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 11:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 11:47:15 --> Could not find the language line "Home"
ERROR - 2023-10-25 11:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 11:48:30 --> Could not find the language line "Home"
ERROR - 2023-10-25 11:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 11:49:12 --> Could not find the language line "Home"
ERROR - 2023-10-25 11:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 11:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 11:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 11:52:27 --> Could not find the language line "Home"
ERROR - 2023-10-25 11:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 12:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 12:04:53 --> Could not find the language line "Home"
ERROR - 2023-10-25 12:05:00 --> Could not find the language line "Home"
ERROR - 2023-10-25 12:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 12:05:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 12:05:53 --> Could not find the language line "Home"
ERROR - 2023-10-25 12:12:42 --> Could not find the language line "Home"
ERROR - 2023-10-25 12:13:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-25 12:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 12:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 12:17:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-25 12:18:51 --> Could not find the language line "Home"
ERROR - 2023-10-25 12:28:56 --> Could not find the language line "Home"
ERROR - 2023-10-25 12:33:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:33:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 12:33:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:33:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:36:03 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-25 12:36:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:36:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:36:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:37:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:37:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:40:03 --> Could not find the language line "Home"
ERROR - 2023-10-25 12:40:03 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-10-25 12:40:03 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-25 12:40:04 --> Could not find the language line "Home"
ERROR - 2023-10-25 12:40:04 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-10-25 12:40:04 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-10-25 12:40:04 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-10-25 12:40:05 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-10-25 12:40:05 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-10-25 12:40:05 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-10-25 12:40:05 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-10-25 12:40:05 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-10-25 12:40:06 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-10-25 12:40:06 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-10-25 12:40:06 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-10-25 12:40:06 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-10-25 12:40:07 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-10-25 12:40:07 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-10-25 12:40:07 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-10-25 12:47:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:47:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:48:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:48:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:48:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:48:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 12:49:15 --> Could not find the language line "Home"
ERROR - 2023-10-25 12:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 12:49:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:50:25 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-25 12:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 12:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 12:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 12:52:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 12:52:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-10-25 13:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 13:02:23 --> Could not find the language line "Home"
ERROR - 2023-10-25 13:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 13:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 13:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 13:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 13:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 13:05:15 --> Could not find the language line "Home"
ERROR - 2023-10-25 13:06:13 --> Could not find the language line "Home"
ERROR - 2023-10-25 13:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 13:15:53 --> Could not find the language line "Home"
ERROR - 2023-10-25 13:21:35 --> Could not find the language line "Home"
ERROR - 2023-10-25 13:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 13:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 13:50:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-25 13:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 13:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:00:22 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:08:37 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:08:37 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:08:37 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:08:37 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:09:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-25 14:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:09:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 14:11:54 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:17:56 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:20:08 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:21:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 14:23:15 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:25:17 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:28:38 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:29:09 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:29:18 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:30:07 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:31:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-25 14:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:34:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-25 14:36:38 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:38:22 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:41:44 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:43:31 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:44:07 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:44:46 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:45:19 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:46:38 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:54:27 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 14:56:36 --> Could not find the language line "Home"
ERROR - 2023-10-25 14:59:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-25 14:59:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-25 14:59:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 15:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 15:09:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-25 15:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 15:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 15:16:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-25 15:16:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-25 15:16:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 15:18:10 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-25 15:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 15:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 15:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 15:30:21 --> 404 Page Not Found: Aws/credentials
ERROR - 2023-10-25 15:31:04 --> Could not find the language line "Home"
ERROR - 2023-10-25 15:39:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 15:39:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 15:49:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 15:49:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 15:52:29 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-25 15:53:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 15:53:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-25 15:53:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-25 15:53:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 15:53:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-25 15:53:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45-46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-25 15:53:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 15:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 16:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 16:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 16:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 16:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 16:02:53 --> Could not find the language line "Home"
ERROR - 2023-10-25 16:03:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-25 16:03:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-25 16:03:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 16:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 16:16:32 --> Could not find the language line "Bracelets"
ERROR - 2023-10-25 16:16:44 --> Could not find the language line "Bracelets"
ERROR - 2023-10-25 16:20:12 --> Could not find the language line "Home"
ERROR - 2023-10-25 16:21:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 16:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 16:22:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 16:22:17 --> Could not find the language line "Home"
ERROR - 2023-10-25 16:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 16:22:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 16:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 16:22:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 16:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 16:38:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 16:38:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 16:38:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 16:41:22 --> Could not find the language line "Home"
ERROR - 2023-10-25 16:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 16:48:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 16:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 16:51:34 --> Could not find the language line "Home"
ERROR - 2023-10-25 16:54:01 --> Could not find the language line "Home"
ERROR - 2023-10-25 16:56:03 --> Could not find the language line "Socks"
ERROR - 2023-10-25 16:58:05 --> Could not find the language line "Home"
ERROR - 2023-10-25 16:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 17:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 17:07:32 --> Could not find the language line "Home"
ERROR - 2023-10-25 17:10:15 --> Could not find the language line "Home"
ERROR - 2023-10-25 17:17:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 17:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 17:20:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 17:20:44 --> Could not find the language line "Home"
ERROR - 2023-10-25 17:23:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 17:23:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 17:24:15 --> Could not find the language line "Home"
ERROR - 2023-10-25 17:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 17:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 17:28:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 17:28:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 17:28:32 --> Could not find the language line "Home"
ERROR - 2023-10-25 17:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 17:28:44 --> Could not find the language line "Home"
ERROR - 2023-10-25 17:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 17:30:17 --> Could not find the language line "Home"
ERROR - 2023-10-25 17:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 17:35:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 17:36:39 --> Could not find the language line "Home"
ERROR - 2023-10-25 17:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 17:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 17:45:25 --> Could not find the language line "Home"
ERROR - 2023-10-25 17:51:23 --> Could not find the language line "Home"
ERROR - 2023-10-25 17:52:01 --> Could not find the language line "Home"
ERROR - 2023-10-25 17:52:17 --> Could not find the language line "Home"
ERROR - 2023-10-25 17:52:37 --> Could not find the language line "Home"
ERROR - 2023-10-25 17:53:23 --> Could not find the language line "Home"
ERROR - 2023-10-25 17:58:00 --> Could not find the language line "Home"
ERROR - 2023-10-25 18:03:56 --> Could not find the language line "Home"
ERROR - 2023-10-25 18:04:40 --> Could not find the language line "Home"
ERROR - 2023-10-25 18:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 18:14:26 --> Could not find the language line "Home"
ERROR - 2023-10-25 18:19:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 18:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 18:29:43 --> Could not find the language line "Home"
ERROR - 2023-10-25 18:31:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-25 18:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 18:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 18:39:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-25 18:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 18:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 18:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 18:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 18:41:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-25 18:41:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-25 18:41:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 18:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 18:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 18:41:52 --> Could not find the language line "Home"
ERROR - 2023-10-25 18:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 18:42:21 --> Could not find the language line "Home"
ERROR - 2023-10-25 18:42:40 --> Could not find the language line "Home"
ERROR - 2023-10-25 18:45:59 --> Could not find the language line "Home"
ERROR - 2023-10-25 18:49:23 --> Could not find the language line "Home"
ERROR - 2023-10-25 18:49:36 --> Could not find the language line "Home"
ERROR - 2023-10-25 18:49:36 --> 404 Page Not Found: Home/assets
ERROR - 2023-10-25 18:54:19 --> Could not find the language line "Home"
ERROR - 2023-10-25 18:55:24 --> Could not find the language line "Bracelets"
ERROR - 2023-10-25 19:02:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 19:02:24 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:03:51 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:06:25 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:06:25 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:06:25 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:06:28 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:07:51 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:08:54 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:09:48 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:09:57 --> Could not find the language line "Socks"
ERROR - 2023-10-25 19:10:14 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:10:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-25 19:10:31 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:10:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 19:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:10:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 19:11:12 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:11:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 19:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:13:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-25 19:13:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-25 19:14:07 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:16:29 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:19:05 --> Could not find the language line "Perfume"
ERROR - 2023-10-25 19:20:10 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:20:22 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:21:56 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:21:59 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:24:21 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:33:06 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:36:16 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:41:21 --> Could not find the language line "Home"
ERROR - 2023-10-25 19:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:44:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-25 19:44:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-25 19:44:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-25 19:59:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 19:59:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 19:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 19:59:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 19:59:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 19:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:01:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 20:01:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 20:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:02:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 20:02:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 20:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:03:05 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:03:57 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:04:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 20:04:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-25 20:04:33 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:05:17 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:05:48 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:06:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-25 20:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:07:02 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:11:16 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:13:01 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:13:52 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:15:00 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:15:59 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:16:24 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:17:01 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:21:14 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:23:29 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:24:24 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:26:49 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:29:23 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:29:45 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-10-25 20:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 20:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 21:05:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-25 21:05:39 --> Could not find the language line "Home"
ERROR - 2023-10-25 21:05:39 --> Could not find the language line "Home"
ERROR - 2023-10-25 21:05:39 --> Could not find the language line "Home"
ERROR - 2023-10-25 21:05:39 --> Could not find the language line "Home"
ERROR - 2023-10-25 21:05:39 --> Could not find the language line "Home"
ERROR - 2023-10-25 21:09:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-25 21:12:08 --> Could not find the language line "Home"
ERROR - 2023-10-25 21:14:31 --> Could not find the language line "Home"
ERROR - 2023-10-25 21:17:54 --> Could not find the language line "Home"
ERROR - 2023-10-25 21:17:54 --> Could not find the language line "Home"
ERROR - 2023-10-25 21:17:54 --> Could not find the language line "Home"
ERROR - 2023-10-25 21:17:55 --> Could not find the language line "Home"
ERROR - 2023-10-25 21:21:07 --> Could not find the language line "Home"
ERROR - 2023-10-25 21:22:49 --> Could not find the language line "Home"
ERROR - 2023-10-25 21:30:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 21:39:48 --> Could not find the language line "Home"
ERROR - 2023-10-25 21:43:27 --> Could not find the language line "Home"
ERROR - 2023-10-25 22:06:07 --> Could not find the language line "Home"
ERROR - 2023-10-25 22:08:13 --> Could not find the language line "Home"
ERROR - 2023-10-25 22:11:55 --> Could not find the language line "Home"
ERROR - 2023-10-25 22:12:55 --> Could not find the language line "Home"
ERROR - 2023-10-25 22:14:50 --> Could not find the language line "Home"
ERROR - 2023-10-25 22:15:30 --> Could not find the language line "Home"
ERROR - 2023-10-25 22:15:41 --> Could not find the language line "Home"
ERROR - 2023-10-25 22:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 22:17:14 --> Could not find the language line "Home"
ERROR - 2023-10-25 22:18:57 --> Could not find the language line "Home"
ERROR - 2023-10-25 22:18:57 --> Could not find the language line "Home"
ERROR - 2023-10-25 22:21:54 --> Could not find the language line "Bracelets"
ERROR - 2023-10-25 22:38:36 --> Could not find the language line "Home"
ERROR - 2023-10-25 22:54:35 --> Could not find the language line "Home"
ERROR - 2023-10-25 22:55:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 22:55:50 --> Could not find the language line "Home"
ERROR - 2023-10-25 22:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 22:55:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-25 22:55:58 --> Could not find the language line "Home"
ERROR - 2023-10-25 23:06:18 --> Could not find the language line "Home"
ERROR - 2023-10-25 23:10:20 --> Could not find the language line "Home"
ERROR - 2023-10-25 23:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 23:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-25 23:16:54 --> Could not find the language line "Home"
ERROR - 2023-10-25 23:16:55 --> Could not find the language line "Home"
ERROR - 2023-10-25 23:48:01 --> Could not find the language line "Home"
ERROR - 2023-10-25 23:49:38 --> Could not find the language line "Home"
ERROR - 2023-10-25 23:52:13 --> 404 Page Not Found: Well-known/assetlinks.json
