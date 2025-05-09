<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-15 00:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 00:02:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 00:02:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 00:06:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 00:16:04 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 00:18:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 00:18:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 00:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 00:28:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 00:41:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 00:41:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 00:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 00:46:03 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 00:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 00:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 00:54:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 00:54:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 00:58:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 01:02:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 01:02:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 01:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 01:06:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 01:06:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 01:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 01:10:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 01:10:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 01:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 01:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 01:16:13 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 01:22:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 01:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 01:25:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 01:30:23 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 01:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 01:31:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 01:32:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 01:42:52 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 01:46:05 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 01:46:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 01:47:27 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 01:50:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 02:02:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:02:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:02:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:02:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:02:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:06:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:10:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 02:10:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 02:10:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 02:12:01 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 02:12:02 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 02:14:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 02:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 02:14:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:14:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 02:16:05 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 02:18:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:26:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:30:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 02:32:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 02:38:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:41:58 --> Could not find the language line "Perfume"
ERROR - 2024-06-15 02:42:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:46:08 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 02:46:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:50:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:54:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 02:58:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 03:02:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 03:03:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 03:03:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 03:13:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 03:14:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 03:16:04 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 03:22:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 03:26:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 03:31:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 03:31:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 03:38:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 03:42:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 03:46:07 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 03:46:37 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-06-15 03:54:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 03:58:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 04:08:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 04:08:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 04:08:36 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 04:16:15 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 04:22:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 04:22:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 04:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 04:26:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 04:26:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 04:26:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 04:26:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 04:26:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 04:30:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 04:30:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 04:34:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 04:38:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 04:42:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 04:46:07 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 04:46:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 04:50:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 04:50:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 04:51:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-15 04:51:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-15 04:51:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 04:54:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 05:02:23 --> Could not find the language line "products"
ERROR - 2024-06-15 05:02:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 05:06:40 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-15 05:06:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 05:10:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 05:16:04 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 05:16:51 --> Could not find the language line "products"
ERROR - 2024-06-15 05:22:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 05:22:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 05:30:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 05:34:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 05:40:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 05:41:21 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 05:43:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 05:44:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 05:44:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-15 05:45:35 --> Could not find the language line "Home"
ERROR - 2024-06-15 05:46:04 --> Could not find the language line "Home"
ERROR - 2024-06-15 05:52:54 --> Could not find the language line "Other"
ERROR - 2024-06-15 05:54:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 05:58:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 06:00:30 --> Could not find the language line "Socks"
ERROR - 2024-06-15 06:01:46 --> Could not find the language line "Home"
ERROR - 2024-06-15 06:02:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 06:02:04 --> Could not find the language line "Home"
ERROR - 2024-06-15 06:02:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 06:05:25 --> Could not find the language line "Home"
ERROR - 2024-06-15 06:06:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 06:08:49 --> Could not find the language line "Home"
ERROR - 2024-06-15 06:10:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 06:12:31 --> Could not find the language line "Home"
ERROR - 2024-06-15 06:14:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 06:14:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 06:16:05 --> Could not find the language line "Home"
ERROR - 2024-06-15 06:18:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 06:22:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 06:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 06:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 06:26:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 06:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 06:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 06:30:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 06:32:02 --> Could not find the language line "Home"
ERROR - 2024-06-15 06:39:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 06:40:31 --> Could not find the language line "Home"
ERROR - 2024-06-15 06:46:04 --> Could not find the language line "Home"
ERROR - 2024-06-15 06:47:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 06:50:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 06:53:50 --> Could not find the language line "Home"
ERROR - 2024-06-15 06:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 06:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:05:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 07:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:08:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 07:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:16:06 --> Could not find the language line "Home"
ERROR - 2024-06-15 07:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:19:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 07:19:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 07:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:19:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 07:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:21:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 07:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:36:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 07:36:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 07:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:46:08 --> Could not find the language line "Home"
ERROR - 2024-06-15 07:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:54:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 07:54:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 07:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:55:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 07:55:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 07:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:57:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 07:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 07:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:00:38 --> Could not find the language line "Home"
ERROR - 2024-06-15 08:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:06:21 --> Could not find the language line "Crocs"
ERROR - 2024-06-15 08:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:16:05 --> Could not find the language line "Home"
ERROR - 2024-06-15 08:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:37:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 08:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:45:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 08:46:07 --> Could not find the language line "Home"
ERROR - 2024-06-15 08:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:47:42 --> Could not find the language line "Home"
ERROR - 2024-06-15 08:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:50:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 08:50:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 08:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:53:43 --> Could not find the language line "Home"
ERROR - 2024-06-15 08:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 08:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:06:19 --> Could not find the language line "Home"
ERROR - 2024-06-15 09:06:30 --> Could not find the language line "Other"
ERROR - 2024-06-15 09:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:09:42 --> Could not find the language line "Socks"
ERROR - 2024-06-15 09:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:16:05 --> Could not find the language line "Home"
ERROR - 2024-06-15 09:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:17:51 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 09:18:54 --> Could not find the language line "products"
ERROR - 2024-06-15 09:19:18 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 09:19:20 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 09:20:59 --> Could not find the language line "Home"
ERROR - 2024-06-15 09:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:29:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 09:29:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 09:29:59 --> Could not find the language line "Home"
ERROR - 2024-06-15 09:33:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 09:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:41:14 --> Could not find the language line "Home"
ERROR - 2024-06-15 09:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:46:06 --> Could not find the language line "Home"
ERROR - 2024-06-15 09:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:56:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 09:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 09:59:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 10:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:04:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-15 10:04:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-15 10:10:35 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-15 10:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:16:08 --> Could not find the language line "Home"
ERROR - 2024-06-15 10:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:26:45 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-06-15 10:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:36:57 --> Could not find the language line "Home"
ERROR - 2024-06-15 10:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:41:16 --> Could not find the language line "Home"
ERROR - 2024-06-15 10:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:46:08 --> Could not find the language line "Home"
ERROR - 2024-06-15 10:47:42 --> Could not find the language line "Home"
ERROR - 2024-06-15 10:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 10:53:59 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-15 10:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:00:47 --> Could not find the language line "Home"
ERROR - 2024-06-15 11:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:03:20 --> Could not find the language line "Home"
ERROR - 2024-06-15 11:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:09:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 11:10:21 --> Could not find the language line "Home"
ERROR - 2024-06-15 11:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:16:08 --> Could not find the language line "Home"
ERROR - 2024-06-15 11:16:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 11:16:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 11:16:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-15 11:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:25:47 --> Could not find the language line "Home"
ERROR - 2024-06-15 11:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:27:14 --> Could not find the language line "Home"
ERROR - 2024-06-15 11:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:30:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 11:35:05 --> Could not find the language line "Home"
ERROR - 2024-06-15 11:35:06 --> Could not find the language line "Home"
ERROR - 2024-06-15 11:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:46:10 --> Could not find the language line "Home"
ERROR - 2024-06-15 11:51:08 --> Could not find the language line "Home"
ERROR - 2024-06-15 11:52:50 --> Could not find the language line "Home"
ERROR - 2024-06-15 11:53:39 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-15 11:53:39 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-15 11:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:54:21 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-15 11:54:21 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-15 11:54:26 --> Could not find the language line "Home"
ERROR - 2024-06-15 11:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:54:42 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-15 11:54:42 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-15 11:55:14 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-15 11:55:14 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-15 11:55:24 --> Could not find the language line "Home"
ERROR - 2024-06-15 11:55:28 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-15 11:55:28 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-15 11:55:35 --> Could not find the language line "Home"
ERROR - 2024-06-15 11:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 11:56:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 11:56:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 11:56:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 11:56:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 11:56:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 11:56:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 11:56:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 11:56:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 11:56:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 11:56:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 11:56:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 11:56:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 11:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:00:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 12:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:01:40 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:07:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 12:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:10:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 12:10:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 12:12:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 12:13:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 12:13:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 12:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:16:09 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:17:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 12:17:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 12:19:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 12:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:24:01 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:24:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 12:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:29:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 12:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:40:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 12:40:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 12:40:44 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:41:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 12:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:43:55 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:44:56 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:46:12 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:46:13 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:48:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 12:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:49:24 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-15 12:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:50:33 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:50:34 --> Could not find the language line "products"
ERROR - 2024-06-15 12:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:51:28 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:51:30 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-15 12:51:35 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:51:57 --> 404 Page Not Found: Stylephp/index
ERROR - 2024-06-15 12:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:52:43 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:55:03 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-15 12:55:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-15 12:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:56:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 12:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:57:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 12:58:01 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:58:30 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:58:50 --> Could not find the language line "Home"
ERROR - 2024-06-15 12:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 12:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:01:44 --> Could not find the language line "Home"
ERROR - 2024-06-15 13:01:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:01:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:03:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:03:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 13:03:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:03:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:04:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 13:04:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:04:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:16:09 --> Could not find the language line "Home"
ERROR - 2024-06-15 13:17:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 13:17:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:18:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 13:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:23:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 13:23:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 13:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:27:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 13:29:18 --> Could not find the language line "Other"
ERROR - 2024-06-15 13:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:32:52 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-15 13:34:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:34:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:33 --> Could not find the language line "Home"
ERROR - 2024-06-15 13:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:35:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 13:35:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 13:35:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 13:35:53 --> Could not find the language line "Home"
ERROR - 2024-06-15 13:35:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 13:36:08 --> Could not find the language line "Home"
ERROR - 2024-06-15 13:36:10 --> Could not find the language line "Home"
ERROR - 2024-06-15 13:36:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:36:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:36:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:37:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:40:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 13:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:42:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:44:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 13:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:44:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 13:46:09 --> Could not find the language line "Home"
ERROR - 2024-06-15 13:46:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:46:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:46:36 --> Could not find the language line "Home"
ERROR - 2024-06-15 13:46:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:46:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:50:47 --> Could not find the language line "Home"
ERROR - 2024-06-15 13:51:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:51:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 13:51:31 --> Could not find the language line "Home"
ERROR - 2024-06-15 13:52:00 --> Could not find the language line "Home"
ERROR - 2024-06-15 13:52:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 13:52:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 13:52:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 13:53:07 --> Could not find the language line "Home"
ERROR - 2024-06-15 13:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 13:58:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 14:00:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 14:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:00:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 14:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:00:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 14:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:01:53 --> Could not find the language line "Home"
ERROR - 2024-06-15 14:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:03:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 14:09:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-15 14:09:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-15 14:09:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 14:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:13:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 14:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:13:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 14:13:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 14:16:09 --> Could not find the language line "Home"
ERROR - 2024-06-15 14:17:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 14:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:21:31 --> Could not find the language line "Home"
ERROR - 2024-06-15 14:21:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 14:22:12 --> Could not find the language line "Home"
ERROR - 2024-06-15 14:24:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 14:25:21 --> Could not find the language line "Home"
ERROR - 2024-06-15 14:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:25:57 --> Could not find the language line "Home"
ERROR - 2024-06-15 14:27:04 --> Could not find the language line "Home"
ERROR - 2024-06-15 14:27:28 --> Could not find the language line "Home"
ERROR - 2024-06-15 14:28:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 14:29:15 --> Could not find the language line "Home"
ERROR - 2024-06-15 14:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:34:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 14:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:34:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 14:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:37:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 14:37:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 14:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:38:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 14:38:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 14:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:41:54 --> Could not find the language line "Home"
ERROR - 2024-06-15 14:42:20 --> Could not find the language line "Home"
ERROR - 2024-06-15 14:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:46:09 --> Could not find the language line "Home"
ERROR - 2024-06-15 14:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:50:52 --> Could not find the language line "Socks"
ERROR - 2024-06-15 14:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:50:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 14:50:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 14:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 14:50:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 14:52:16 --> Could not find the language line "Home"
ERROR - 2024-06-15 14:53:31 --> Could not find the language line "Home"
ERROR - 2024-06-15 14:55:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 14:55:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 14:57:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 14:58:01 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-15 14:58:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 14:58:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 14:58:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t169%' OR a.description LIKE '%t169%' OR a.color LIKE '%t169%' OR a.barcode LIKE '%t169%' OR a.category LIKE '%t169%' OR a.sub_category LIKE '%t169%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 14:58:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 14:58:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 14:58:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t169%' OR a.description LIKE '%t169%' OR a.color LIKE '%t169%' OR a.barcode LIKE '%t169%' OR a.category LIKE '%t169%' OR a.sub_category LIKE '%t169%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 14:58:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 14:58:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 14:58:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t169%' OR a.description LIKE '%t169%' OR a.color LIKE '%t169%' OR a.barcode LIKE '%t169%' OR a.category LIKE '%t169%' OR a.sub_category LIKE '%t169%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 14:58:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 14:58:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 14:58:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t169%' OR a.description LIKE '%t169%' OR a.color LIKE '%t169%' OR a.barcode LIKE '%t169%' OR a.category LIKE '%t169%' OR a.sub_category LIKE '%t169%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 14:58:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 14:58:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 14:58:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 14:58:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 14:58:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t169%' OR a.description LIKE '%t169%' OR a.color LIKE '%t169%' OR a.barcode LIKE '%t169%' OR a.category LIKE '%t169%' OR a.sub_category LIKE '%t169%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 14:58:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t169%' OR a.description LIKE '%t169%' OR a.color LIKE '%t169%' OR a.barcode LIKE '%t169%' OR a.category LIKE '%t169%' OR a.sub_category LIKE '%t169%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 14:58:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 14:58:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 14:58:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t169%' OR a.description LIKE '%t169%' OR a.color LIKE '%t169%' OR a.barcode LIKE '%t169%' OR a.category LIKE '%t169%' OR a.sub_category LIKE '%t169%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 14:58:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 14:58:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 14:58:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t169%' OR a.description LIKE '%t169%' OR a.color LIKE '%t169%' OR a.barcode LIKE '%t169%' OR a.category LIKE '%t169%' OR a.sub_category LIKE '%t169%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 14:58:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 14:58:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 14:58:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 14:58:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t169%' OR a.description LIKE '%t169%' OR a.color LIKE '%t169%' OR a.barcode LIKE '%t169%' OR a.category LIKE '%t169%' OR a.sub_category LIKE '%t169%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 14:58:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 14:58:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t169%' OR a.description LIKE '%t169%' OR a.color LIKE '%t169%' OR a.barcode LIKE '%t169%' OR a.category LIKE '%t169%' OR a.sub_category LIKE '%t169%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 14:58:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 14:58:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 14:58:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 14:58:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t169%' OR a.description LIKE '%t169%' OR a.color LIKE '%t169%' OR a.barcode LIKE '%t169%' OR a.category LIKE '%t169%' OR a.sub_category LIKE '%t169%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 14:58:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t169%' OR a.description LIKE '%t169%' OR a.color LIKE '%t169%' OR a.barcode LIKE '%t169%' OR a.category LIKE '%t169%' OR a.sub_category LIKE '%t169%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 14:58:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 14:58:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 14:59:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 14:59:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:00:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:00:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:01:26 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:02:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:02:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:03:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 15:03:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 15:03:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 15:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:04:13 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:04:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t158%' OR a.description LIKE '%t158%' OR a.color LIKE '%t158%' OR a.barcode LIKE '%t158%' OR a.category LIKE '%t158%' OR a.sub_category LIKE '%t158%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t158%' OR a.description LIKE '%t158%' OR a.color LIKE '%t158%' OR a.barcode LIKE '%t158%' OR a.category LIKE '%t158%' OR a.sub_category LIKE '%t158%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t158%' OR a.description LIKE '%t158%' OR a.color LIKE '%t158%' OR a.barcode LIKE '%t158%' OR a.category LIKE '%t158%' OR a.sub_category LIKE '%t158%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t158%' OR a.description LIKE '%t158%' OR a.color LIKE '%t158%' OR a.barcode LIKE '%t158%' OR a.category LIKE '%t158%' OR a.sub_category LIKE '%t158%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t158%' OR a.description LIKE '%t158%' OR a.color LIKE '%t158%' OR a.barcode LIKE '%t158%' OR a.category LIKE '%t158%' OR a.sub_category LIKE '%t158%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t158%' OR a.description LIKE '%t158%' OR a.color LIKE '%t158%' OR a.barcode LIKE '%t158%' OR a.category LIKE '%t158%' OR a.sub_category LIKE '%t158%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t173%' OR a.description LIKE '%t173%' OR a.color LIKE '%t173%' OR a.barcode LIKE '%t173%' OR a.category LIKE '%t173%' OR a.sub_category LIKE '%t173%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t173%' OR a.description LIKE '%t173%' OR a.color LIKE '%t173%' OR a.barcode LIKE '%t173%' OR a.category LIKE '%t173%' OR a.sub_category LIKE '%t173%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t173%' OR a.description LIKE '%t173%' OR a.color LIKE '%t173%' OR a.barcode LIKE '%t173%' OR a.category LIKE '%t173%' OR a.sub_category LIKE '%t173%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t173%' OR a.description LIKE '%t173%' OR a.color LIKE '%t173%' OR a.barcode LIKE '%t173%' OR a.category LIKE '%t173%' OR a.sub_category LIKE '%t173%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t167%' OR a.description LIKE '%t167%' OR a.color LIKE '%t167%' OR a.barcode LIKE '%t167%' OR a.category LIKE '%t167%' OR a.sub_category LIKE '%t167%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t167%' OR a.description LIKE '%t167%' OR a.color LIKE '%t167%' OR a.barcode LIKE '%t167%' OR a.category LIKE '%t167%' OR a.sub_category LIKE '%t167%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t167%' OR a.description LIKE '%t167%' OR a.color LIKE '%t167%' OR a.barcode LIKE '%t167%' OR a.category LIKE '%t167%' OR a.sub_category LIKE '%t167%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t158%' OR a.description LIKE '%t158%' OR a.color LIKE '%t158%' OR a.barcode LIKE '%t158%' OR a.category LIKE '%t158%' OR a.sub_category LIKE '%t158%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t167%' OR a.description LIKE '%t167%' OR a.color LIKE '%t167%' OR a.barcode LIKE '%t167%' OR a.category LIKE '%t167%' OR a.sub_category LIKE '%t167%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t158%' OR a.description LIKE '%t158%' OR a.color LIKE '%t158%' OR a.barcode LIKE '%t158%' OR a.category LIKE '%t158%' OR a.sub_category LIKE '%t158%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t158%' OR a.description LIKE '%t158%' OR a.color LIKE '%t158%' OR a.barcode LIKE '%t158%' OR a.category LIKE '%t158%' OR a.sub_category LIKE '%t158%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t158%' OR a.description LIKE '%t158%' OR a.color LIKE '%t158%' OR a.barcode LIKE '%t158%' OR a.category LIKE '%t158%' OR a.sub_category LIKE '%t158%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:04:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:04:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t158%' OR a.description LIKE '%t158%' OR a.color LIKE '%t158%' OR a.barcode LIKE '%t158%' OR a.category LIKE '%t158%' OR a.sub_category LIKE '%t158%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:04:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:07:00 --> Could not find the language line "Home"
ERROR - 2024-06-15 15:07:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:07:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 15:07:50 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:08:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:08:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:08:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:09:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:09:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:09:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t165%' OR a.description LIKE '%t165%' OR a.color LIKE '%t165%' OR a.barcode LIKE '%t165%' OR a.category LIKE '%t165%' OR a.sub_category LIKE '%t165%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:09:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:09:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:09:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t165%' OR a.description LIKE '%t165%' OR a.color LIKE '%t165%' OR a.barcode LIKE '%t165%' OR a.category LIKE '%t165%' OR a.sub_category LIKE '%t165%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:09:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:09:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-15 15:09:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t165%' OR a.description LIKE '%t165%' OR a.color LIKE '%t165%' OR a.barcode LIKE '%t165%' OR a.category LIKE '%t165%' OR a.sub_category LIKE '%t165%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:09:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:09:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t165%' OR a.description LIKE '%t165%' OR a.color LIKE '%t165%' OR a.barcode LIKE '%t165%' OR a.category LIKE '%t165%' OR a.sub_category LIKE '%t165%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 15:09:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-15 15:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:15:47 --> Could not find the language line "Home"
ERROR - 2024-06-15 15:16:11 --> Could not find the language line "Home"
ERROR - 2024-06-15 15:16:29 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 15:17:03 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 15:17:25 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 15:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:22:36 --> Could not find the language line "Home"
ERROR - 2024-06-15 15:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:24:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 15:24:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 15:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:24:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 15:24:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 15:24:41 --> Could not find the language line "Socks"
ERROR - 2024-06-15 15:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:25:07 --> Could not find the language line "Socks"
ERROR - 2024-06-15 15:25:31 --> Could not find the language line "Socks"
ERROR - 2024-06-15 15:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:26:05 --> Could not find the language line "Socks"
ERROR - 2024-06-15 15:26:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 15:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:29:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:29:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:29:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:30:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 15:30:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-15 15:30:36 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-15 15:30:50 --> Could not find the language line "Other"
ERROR - 2024-06-15 15:31:13 --> Could not find the language line "Other"
ERROR - 2024-06-15 15:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:31:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 15:31:18 --> Could not find the language line "Other"
ERROR - 2024-06-15 15:31:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 15:31:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 15:31:47 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 15:31:57 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 15:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:36:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 15:36:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 15:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:36:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 15:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:40:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 15:43:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 15:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:46:10 --> Could not find the language line "Home"
ERROR - 2024-06-15 15:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:54:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 15:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:57:39 --> Could not find the language line "Home"
ERROR - 2024-06-15 15:57:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 15:57:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 15:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 15:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 16:00:03 --> Could not find the language line "Home"
ERROR - 2024-06-15 16:03:54 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-15 16:05:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 16:05:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 16:05:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 16:05:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 16:05:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 16:05:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 16:05:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 16:05:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 16:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 16:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 16:06:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 16:06:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 16:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 16:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 16:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 16:07:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 16:07:50 --> Could not find the language line "Home"
ERROR - 2024-06-15 16:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 16:08:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 16:09:32 --> Could not find the language line "Other"
ERROR - 2024-06-15 16:09:44 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 16:09:49 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 16:09:50 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 16:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 16:10:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 16:16:11 --> Could not find the language line "Home"
ERROR - 2024-06-15 16:25:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 16:25:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 16:26:03 --> Could not find the language line "Home"
ERROR - 2024-06-15 16:26:21 --> Could not find the language line "Home"
ERROR - 2024-06-15 16:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 16:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 16:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 16:39:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 16:43:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 16:45:03 --> Could not find the language line "Home"
ERROR - 2024-06-15 16:46:11 --> Could not find the language line "Home"
ERROR - 2024-06-15 16:47:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-15 16:47:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 16:47:47 --> Could not find the language line "Home"
ERROR - 2024-06-15 16:55:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 17:00:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 17:07:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 17:08:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 17:12:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 17:16:01 --> Could not find the language line "Home"
ERROR - 2024-06-15 17:16:12 --> Could not find the language line "Home"
ERROR - 2024-06-15 17:16:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 17:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 17:23:56 --> Could not find the language line "Home"
ERROR - 2024-06-15 17:25:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 17:29:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 17:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 17:30:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 17:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 17:33:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 17:33:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 17:37:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 17:40:55 --> Could not find the language line "Other"
ERROR - 2024-06-15 17:41:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 17:45:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 17:46:13 --> Could not find the language line "Home"
ERROR - 2024-06-15 17:50:15 --> Could not find the language line "Home"
ERROR - 2024-06-15 17:50:31 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 17:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 17:51:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 17:51:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 17:51:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 17:54:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 17:57:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 17:58:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 18:02:34 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 18:02:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-15 18:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 18:06:16 --> Could not find the language line "Home"
ERROR - 2024-06-15 18:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 18:11:50 --> Could not find the language line "Socks"
ERROR - 2024-06-15 18:12:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 18:12:28 --> Could not find the language line "Home"
ERROR - 2024-06-15 18:16:13 --> Could not find the language line "Home"
ERROR - 2024-06-15 18:16:35 --> Could not find the language line "Home"
ERROR - 2024-06-15 18:16:36 --> Could not find the language line "Home"
ERROR - 2024-06-15 18:16:41 --> Could not find the language line "Home"
ERROR - 2024-06-15 18:16:58 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-15 18:20:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 18:23:39 --> Could not find the language line "Home"
ERROR - 2024-06-15 18:23:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 18:24:26 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 18:24:53 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 18:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 18:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 18:25:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 18:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 18:25:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 18:25:50 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 18:27:22 --> Could not find the language line "Other"
ERROR - 2024-06-15 18:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 18:37:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-15 18:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 18:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 18:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 18:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 18:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 18:46:12 --> Could not find the language line "Home"
ERROR - 2024-06-15 18:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 18:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 18:47:53 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 18:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 18:57:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 19:03:04 --> Could not find the language line "Home"
ERROR - 2024-06-15 19:03:23 --> Could not find the language line "Home"
ERROR - 2024-06-15 19:03:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 19:03:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 19:06:31 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 19:06:41 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 19:06:42 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 19:06:45 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 19:06:47 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 19:07:47 --> Could not find the language line "Home"
ERROR - 2024-06-15 19:16:14 --> Could not find the language line "Home"
ERROR - 2024-06-15 19:17:03 --> Could not find the language line "Home"
ERROR - 2024-06-15 19:23:59 --> Could not find the language line "Home"
ERROR - 2024-06-15 19:26:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 19:46:14 --> Could not find the language line "Home"
ERROR - 2024-06-15 19:52:36 --> Could not find the language line "Home"
ERROR - 2024-06-15 19:52:52 --> Could not find the language line "Home"
ERROR - 2024-06-15 19:52:55 --> Could not find the language line "Home"
ERROR - 2024-06-15 19:55:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 20:02:25 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-15 20:16:14 --> Could not find the language line "Home"
ERROR - 2024-06-15 20:16:18 --> Could not find the language line "Home"
ERROR - 2024-06-15 20:20:41 --> Could not find the language line "Home"
ERROR - 2024-06-15 20:20:41 --> Could not find the language line "Home"
ERROR - 2024-06-15 20:23:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 20:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 20:28:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 20:32:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 20:35:03 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-15 20:36:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 20:40:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 20:45:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 20:46:14 --> Could not find the language line "Home"
ERROR - 2024-06-15 20:49:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 20:49:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 21:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 21:16:16 --> Could not find the language line "Home"
ERROR - 2024-06-15 21:26:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 21:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 21:30:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 21:34:48 --> Could not find the language line "Home"
ERROR - 2024-06-15 21:35:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 21:39:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 21:42:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 21:43:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 21:46:22 --> Could not find the language line "Home"
ERROR - 2024-06-15 21:46:34 --> Could not find the language line "Home"
ERROR - 2024-06-15 21:46:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:48:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:48:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:48:06 --> Could not find the language line "assets"
ERROR - 2024-06-15 21:48:06 --> Could not find the language line "assets"
ERROR - 2024-06-15 21:48:06 --> Could not find the language line "assets"
ERROR - 2024-06-15 21:48:06 --> Could not find the language line "assets"
ERROR - 2024-06-15 21:48:06 --> Could not find the language line "assets"
ERROR - 2024-06-15 21:48:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:48:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:48:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:48:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:48:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:48:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:48:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:48:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:49:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:49:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:50:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:50:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 21:50:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:50:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 21:51:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:51:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-15 21:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 21:51:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 21:55:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 22:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 22:01:19 --> Could not find the language line "Home"
ERROR - 2024-06-15 22:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 22:01:55 --> Could not find the language line "Home"
ERROR - 2024-06-15 22:01:57 --> Could not find the language line "Home"
ERROR - 2024-06-15 22:08:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 22:08:30 --> Could not find the language line "Home"
ERROR - 2024-06-15 22:12:16 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 22:16:17 --> Could not find the language line "Home"
ERROR - 2024-06-15 22:16:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 22:20:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 22:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 22:25:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 22:33:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 22:37:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 22:41:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 22:46:16 --> Could not find the language line "Home"
ERROR - 2024-06-15 22:46:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 22:46:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 22:46:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-15 22:46:28 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-15 22:46:28 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 22:46:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 22:46:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-15 22:46:29 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-15 22:46:30 --> Could not find the language line "Perfume"
ERROR - 2024-06-15 22:46:31 --> Could not find the language line "Other"
ERROR - 2024-06-15 22:46:32 --> Could not find the language line "Other"
ERROR - 2024-06-15 22:46:45 --> Could not find the language line "Bracelets"
ERROR - 2024-06-15 22:47:25 --> Could not find the language line "Home"
ERROR - 2024-06-15 22:47:33 --> Could not find the language line "Home"
ERROR - 2024-06-15 22:50:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 22:50:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 23:02:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 23:10:02 --> Could not find the language line "Home"
ERROR - 2024-06-15 23:10:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 23:15:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 23:16:03 --> Could not find the language line "Home"
ERROR - 2024-06-15 23:16:18 --> Could not find the language line "Home"
ERROR - 2024-06-15 23:16:38 --> Could not find the language line "Home"
ERROR - 2024-06-15 23:18:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 23:19:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-15 23:22:09 --> Could not find the language line "Home"
ERROR - 2024-06-15 23:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-15 23:30:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-15 23:38:21 --> Could not find the language line "Home"
ERROR - 2024-06-15 23:46:18 --> Could not find the language line "Home"
ERROR - 2024-06-15 23:47:23 --> Could not find the language line "Other"
ERROR - 2024-06-15 23:51:49 --> Could not find the language line "Home"
ERROR - 2024-06-15 23:52:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-15 23:55:58 --> Could not find the language line "Socks"
