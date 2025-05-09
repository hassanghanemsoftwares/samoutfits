<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-08 00:03:17 --> Could not find the language line "Home"
ERROR - 2023-10-08 00:04:40 --> Could not find the language line "Home"
ERROR - 2023-10-08 00:06:07 --> Could not find the language line "Home"
ERROR - 2023-10-08 00:07:30 --> Could not find the language line "Home"
ERROR - 2023-10-08 00:24:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 00:24:57 --> Could not find the language line "Home"
ERROR - 2023-10-08 00:32:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 00:44:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 00:44:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-08 00:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 00:50:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 00:50:07 --> Could not find the language line "Home"
ERROR - 2023-10-08 00:50:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 00:50:13 --> Could not find the language line "Home"
ERROR - 2023-10-08 00:53:33 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-08 00:55:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 01:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 01:11:26 --> Could not find the language line "Home"
ERROR - 2023-10-08 01:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 01:19:27 --> Could not find the language line "Home"
ERROR - 2023-10-08 01:52:24 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 02:14:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-08 02:29:50 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 02:40:10 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 02:40:36 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 02:40:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-08 02:46:14 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-08 03:06:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 03:06:58 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-10-08 03:06:59 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-10-08 03:07:00 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 03:14:15 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 03:14:15 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 03:14:15 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 03:14:15 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 03:14:15 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 03:24:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 03:26:22 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 03:27:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-08 03:34:07 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 03:34:08 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 03:48:21 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 03:50:24 --> Could not find the language line "0"
ERROR - 2023-10-08 03:53:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 04:32:59 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 04:42:05 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 04:42:22 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 04:42:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 04:42:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 04:42:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 04:44:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 04:44:56 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 04:46:32 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 04:46:42 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 04:56:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-08 05:03:44 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 05:13:42 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 05:16:18 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 05:18:53 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 05:26:54 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 05:27:06 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 05:33:39 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 05:33:53 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 05:42:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 05:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 05:56:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-08 06:02:56 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:03:35 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:03:47 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:09:00 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:09:03 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 06:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 06:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 06:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 06:11:47 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:26:50 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 06:30:21 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:32:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 06:36:23 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:36:32 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:36:43 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:37:56 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:38:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 06:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 06:39:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 06:39:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 06:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 06:39:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 06:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 06:42:44 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 06:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 06:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 06:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 06:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 06:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 06:56:55 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:57:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 06:59:15 --> Could not find the language line "products"
ERROR - 2023-10-08 07:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:08:14 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:09:48 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:10:08 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:14:37 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:20:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-08 07:20:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-08 07:20:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-08 07:21:04 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:21:15 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:21:28 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:21:31 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:21:46 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:26:07 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:26:10 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:26:11 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:26:22 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:26:27 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:26:30 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 07:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:42:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-10-08 07:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 07:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 08:01:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:02:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:03:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:04:08 --> Could not find the language line "Home"
ERROR - 2023-10-08 08:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 08:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 08:13:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:13:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:13:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:13:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:14:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 08:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 08:18:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:18:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:19:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:22:20 --> Could not find the language line "Home"
ERROR - 2023-10-08 08:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 08:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 08:26:55 --> Could not find the language line "Home"
ERROR - 2023-10-08 08:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 08:28:43 --> Could not find the language line "Home"
ERROR - 2023-10-08 08:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 08:30:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:30:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:31:36 --> Could not find the language line "Home"
ERROR - 2023-10-08 08:32:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:33:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:33:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:34:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:34:30 --> Could not find the language line "Home"
ERROR - 2023-10-08 08:34:42 --> Could not find the language line "Home"
ERROR - 2023-10-08 08:34:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:35:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 08:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 08:46:19 --> Could not find the language line "Home"
ERROR - 2023-10-08 08:48:22 --> Could not find the language line "Home"
ERROR - 2023-10-08 08:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 09:07:10 --> Could not find the language line "products"
ERROR - 2023-10-08 09:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 09:09:56 --> Could not find the language line "Home"
ERROR - 2023-10-08 09:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 09:23:32 --> Could not find the language line "Home"
ERROR - 2023-10-08 09:26:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-08 09:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 09:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 09:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 09:29:55 --> Could not find the language line "Home"
ERROR - 2023-10-08 09:29:56 --> Could not find the language line "Home"
ERROR - 2023-10-08 09:32:20 --> Could not find the language line "Home"
ERROR - 2023-10-08 09:36:18 --> Could not find the language line "Home"
ERROR - 2023-10-08 09:44:00 --> Could not find the language line "Home"
ERROR - 2023-10-08 09:46:32 --> Could not find the language line "Home"
ERROR - 2023-10-08 09:46:32 --> Could not find the language line "Home"
ERROR - 2023-10-08 09:46:32 --> Could not find the language line "Home"
ERROR - 2023-10-08 09:46:32 --> Could not find the language line "Home"
ERROR - 2023-10-08 09:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 09:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 09:50:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 09:50:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 09:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 09:57:02 --> Could not find the language line "Home"
ERROR - 2023-10-08 09:57:15 --> Could not find the language line "Home"
ERROR - 2023-10-08 09:59:51 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:04:20 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:04:37 --> Could not find the language line "Perfume"
ERROR - 2023-10-08 10:06:47 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:07:53 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:07:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 10:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 10:08:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 10:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 10:09:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 10:09:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 10:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 10:10:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 10:10:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 10:11:41 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:12:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 10:12:55 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:13:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 10:13:06 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-08 10:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 10:17:27 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:17:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 10:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 10:18:04 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:18:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 10:18:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 10:19:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 10:19:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 10:19:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 10:19:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 10:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 10:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 10:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 10:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 10:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 10:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 10:27:09 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 10:30:41 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 10:30:49 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 10:31:29 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 10:33:16 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:35:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-08 10:35:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-08 10:35:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-08 10:35:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 10:40:37 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:41:17 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:43:23 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:51:38 --> Could not find the language line "Home"
ERROR - 2023-10-08 10:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 10:58:52 --> Could not find the language line "Home"
ERROR - 2023-10-08 11:11:08 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-08 11:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 11:27:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-08 11:38:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-08 11:57:13 --> Could not find the language line "Home"
ERROR - 2023-10-08 11:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 11:58:24 --> Could not find the language line "Home"
ERROR - 2023-10-08 11:58:29 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 11:58:54 --> Could not find the language line "Home"
ERROR - 2023-10-08 11:59:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 12:01:46 --> Could not find the language line "Home"
ERROR - 2023-10-08 12:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 12:11:53 --> Could not find the language line "Home"
ERROR - 2023-10-08 12:13:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 12:13:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 12:13:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 12:20:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 12:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 12:22:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-08 12:22:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-08 12:22:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-08 12:26:15 --> Could not find the language line "Home"
ERROR - 2023-10-08 12:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 12:29:33 --> Could not find the language line "Home"
ERROR - 2023-10-08 12:29:45 --> Could not find the language line "Socks"
ERROR - 2023-10-08 12:30:00 --> Could not find the language line "Home"
ERROR - 2023-10-08 12:30:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-08 12:30:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-08 12:30:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-08 12:30:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-08 12:30:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-08 12:30:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-08 12:30:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-08 12:30:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-08 12:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 12:37:22 --> Could not find the language line "Home"
ERROR - 2023-10-08 12:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 12:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 12:53:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-08 12:53:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-08 12:53:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-08 12:55:06 --> Could not find the language line "Home"
ERROR - 2023-10-08 12:55:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-08 12:55:41 --> Could not find the language line "Home"
ERROR - 2023-10-08 12:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 12:56:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-08 12:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:00:18 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:00:22 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 13:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:01:28 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 13:02:03 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:05:08 --> 404 Page Not Found: Env/index
ERROR - 2023-10-08 13:05:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 13:05:45 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:05:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-08 13:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:05:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-08 13:05:51 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:05:55 --> Could not find the language line "Perfume"
ERROR - 2023-10-08 13:06:02 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:06:07 --> Could not find the language line "Socks"
ERROR - 2023-10-08 13:06:14 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:06:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-08 13:06:28 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:14:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-08 13:14:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('41', '40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-08 13:14:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-08 13:14:28 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:20:33 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:22:53 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 13:23:35 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 13:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:28:49 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:33:04 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:38:56 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:43:59 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:44:28 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:46:07 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:51:33 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:52:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 13:52:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 13:52:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 13:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:55:31 --> Could not find the language line "Home"
ERROR - 2023-10-08 13:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:58:37 --> Could not find the language line "Other"
ERROR - 2023-10-08 13:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 13:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 14:02:04 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:02:16 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:03:07 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 14:11:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 14:11:05 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:12:41 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:13:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-08 14:13:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-08 14:13:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-08 14:13:28 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:14:00 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 14:19:17 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 14:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 14:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 14:28:32 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:29:20 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:30:31 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:30:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 14:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 14:31:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 14:31:31 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:35:20 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:37:38 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:37:45 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:38:23 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:39:19 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:41:29 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:42:39 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:43:00 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 14:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 14:44:01 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 14:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 14:49:34 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 14:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 14:56:38 --> Could not find the language line "Home"
ERROR - 2023-10-08 14:59:42 --> Could not find the language line "Home"
ERROR - 2023-10-08 15:00:38 --> Could not find the language line "Home"
ERROR - 2023-10-08 15:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 15:12:30 --> Could not find the language line "Home"
ERROR - 2023-10-08 15:25:45 --> Could not find the language line "Home"
ERROR - 2023-10-08 15:26:47 --> Could not find the language line "Home"
ERROR - 2023-10-08 15:27:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:28:05 --> Could not find the language line "Home"
ERROR - 2023-10-08 15:28:17 --> Could not find the language line "Socks"
ERROR - 2023-10-08 15:28:33 --> Could not find the language line "Home"
ERROR - 2023-10-08 15:28:37 --> Could not find the language line "Home"
ERROR - 2023-10-08 15:37:35 --> Could not find the language line "Home"
ERROR - 2023-10-08 15:38:34 --> Could not find the language line "Home"
ERROR - 2023-10-08 15:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 15:47:16 --> Could not find the language line "Home"
ERROR - 2023-10-08 15:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 15:50:16 --> Could not find the language line "Home"
ERROR - 2023-10-08 15:50:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 15:51:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 15:52:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:53:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 15:54:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 15:54:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:55:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 15:55:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:56:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:56:50 --> Could not find the language line "Home"
ERROR - 2023-10-08 15:56:50 --> Could not find the language line "Home"
ERROR - 2023-10-08 15:57:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:57:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:57:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:58:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:58:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:58:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 15:59:39 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 16:01:08 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:12:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 16:14:28 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:16:20 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:17:32 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:17:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 16:17:48 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:18:12 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:18:17 --> Could not find the language line "Socks"
ERROR - 2023-10-08 16:19:02 --> Could not find the language line "Socks"
ERROR - 2023-10-08 16:19:12 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:21:43 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:22:31 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:23:26 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:23:52 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:24:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-08 16:24:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-08 16:24:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-08 16:24:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-08 16:24:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-08 16:24:46 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:24:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 16:25:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 16:25:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 16:25:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 16:26:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 16:26:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 16:26:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 16:26:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 16:26:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 16:26:20 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:31:56 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:32:38 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:33:44 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:33:46 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:35:55 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:36:59 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:38:23 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:38:25 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:39:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 16:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 16:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 16:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 16:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 16:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 16:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 16:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 16:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 16:45:39 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:48:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 16:48:19 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:49:22 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:51:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-08 16:53:27 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:56:36 --> Could not find the language line "Home"
ERROR - 2023-10-08 16:57:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-08 16:57:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-08 16:57:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-08 16:57:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-08 16:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-08 16:57:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-08 16:57:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-08 16:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-08 16:57:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-08 16:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-08 16:57:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-08 16:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-08 16:57:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-08 16:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-08 16:57:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-08 16:58:49 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:00:30 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:03:28 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:05:14 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:08:43 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:14:50 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:23:47 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:33:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 17:36:57 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:39:18 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:42:15 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 17:42:55 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:46:58 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:47:45 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:48:59 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:50:14 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:50:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-08 17:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:52:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-08 17:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:55:11 --> Could not find the language line "Home"
ERROR - 2023-10-08 17:55:43 --> Could not find the language line "Socks"
ERROR - 2023-10-08 17:56:38 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 17:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 17:59:12 --> Could not find the language line "Home"
ERROR - 2023-10-08 18:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 18:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 18:00:57 --> Could not find the language line "Home"
ERROR - 2023-10-08 18:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 18:03:27 --> Could not find the language line "Home"
ERROR - 2023-10-08 18:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 18:05:10 --> Could not find the language line "Home"
ERROR - 2023-10-08 18:05:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 18:05:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 18:06:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 18:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 18:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 18:12:57 --> Could not find the language line "Home"
ERROR - 2023-10-08 18:13:38 --> Could not find the language line "Home"
ERROR - 2023-10-08 18:16:32 --> Could not find the language line "Home"
ERROR - 2023-10-08 18:24:39 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-08 18:25:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 18:25:52 --> Could not find the language line "Home"
ERROR - 2023-10-08 18:26:17 --> Could not find the language line "Home"
ERROR - 2023-10-08 18:27:31 --> Could not find the language line "Home"
ERROR - 2023-10-08 18:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 18:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 18:35:56 --> Could not find the language line "Home"
ERROR - 2023-10-08 18:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 18:43:19 --> Could not find the language line "Home"
ERROR - 2023-10-08 18:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 18:59:45 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:00:32 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 19:24:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 19:24:20 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:29:14 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:33:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-08 19:34:25 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:34:37 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:34:43 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:34:55 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:34:59 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:35:21 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:35:32 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 19:35:57 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:36:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 19:36:38 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 19:36:40 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:36:44 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:36:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-08 19:36:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-08 19:36:58 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:39:29 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:40:55 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:43:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-08 19:46:48 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:48:14 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:51:00 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:53:36 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:53:52 --> Could not find the language line "Home"
ERROR - 2023-10-08 19:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 20:00:45 --> Could not find the language line "Home"
ERROR - 2023-10-08 20:02:09 --> Could not find the language line "Home"
ERROR - 2023-10-08 20:02:56 --> Could not find the language line "Home"
ERROR - 2023-10-08 20:07:21 --> Could not find the language line "Home"
ERROR - 2023-10-08 20:26:50 --> Could not find the language line "Other"
ERROR - 2023-10-08 20:29:03 --> Could not find the language line "Other"
ERROR - 2023-10-08 20:29:05 --> Could not find the language line "products"
ERROR - 2023-10-08 20:45:50 --> Could not find the language line "Home"
ERROR - 2023-10-08 20:45:57 --> Could not find the language line "Home"
ERROR - 2023-10-08 20:46:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-08 20:46:39 --> Could not find the language line "Home"
ERROR - 2023-10-08 20:46:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 20:47:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 20:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 20:47:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 20:47:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 20:48:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 20:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 20:48:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 20:48:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 20:48:42 --> Could not find the language line "Home"
ERROR - 2023-10-08 20:48:46 --> Could not find the language line "Bracelets"
ERROR - 2023-10-08 20:48:58 --> Could not find the language line "Home"
ERROR - 2023-10-08 20:51:38 --> Could not find the language line "Perfume"
ERROR - 2023-10-08 20:54:26 --> Could not find the language line "Home"
ERROR - 2023-10-08 20:54:55 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:05:14 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:06:25 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:06:44 --> Could not find the language line "Perfume"
ERROR - 2023-10-08 21:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 21:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 21:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 21:08:03 --> 404 Page Not Found: Wp-json/index
ERROR - 2023-10-08 21:08:08 --> 404 Page Not Found: Admin/index
ERROR - 2023-10-08 21:08:13 --> 404 Page Not Found: Login/index
ERROR - 2023-10-08 21:08:18 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:08:23 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 21:09:02 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:09:41 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:09:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 21:10:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 21:10:18 --> 404 Page Not Found: Assets/mail
ERROR - 2023-10-08 21:10:44 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 21:12:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 21:12:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 21:12:26 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:15:07 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:15:07 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:15:07 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:15:08 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:15:08 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 21:17:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-08 21:17:46 --> 404 Page Not Found: Accounting/users
ERROR - 2023-10-08 21:17:51 --> 404 Page Not Found: Users/index
ERROR - 2023-10-08 21:17:58 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 21:19:31 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 21:19:41 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:19:49 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:20:08 --> 404 Page Not Found: Storage/settings
ERROR - 2023-10-08 21:21:25 --> Could not find the language line "Disclaimer"
ERROR - 2023-10-08 21:23:13 --> Could not find the language line "Disclaimer"
ERROR - 2023-10-08 21:25:58 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:26:31 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:31:23 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:39:16 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:40:07 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:41:02 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:41:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 21:41:33 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:41:51 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:42:14 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:43:54 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:44:11 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:44:11 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:45:14 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:45:14 --> Could not find the language line "Home"
ERROR - 2023-10-08 21:46:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-08 21:58:52 --> Could not find the language line "Home"
ERROR - 2023-10-08 22:19:03 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-08 22:19:09 --> Could not find the language line "Home"
ERROR - 2023-10-08 22:19:14 --> Could not find the language line "Home"
ERROR - 2023-10-08 22:19:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 22:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 22:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 22:34:07 --> Could not find the language line "Home"
ERROR - 2023-10-08 22:43:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-08 22:58:36 --> Could not find the language line "products"
ERROR - 2023-10-08 23:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 23:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-08 23:30:22 --> 404 Page Not Found: Robotstxt/index
