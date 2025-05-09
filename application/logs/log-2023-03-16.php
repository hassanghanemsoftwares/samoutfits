<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-16 00:00:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 00:16:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 00:18:42 --> 404 Page Not Found: Products/index
ERROR - 2023-03-16 00:30:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 00:51:14 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 01:00:14 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 01:04:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 01:30:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 02:00:11 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 02:26:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 02:28:11 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 02:30:16 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 03:00:13 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 03:09:53 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-03-16 03:30:14 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 03:52:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-16 04:00:13 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 04:25:27 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 04:30:10 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 04:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 04:40:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-16 04:53:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-16 05:00:13 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 05:01:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 05:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 05:03:42 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 05:23:58 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 05:30:13 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 06:00:11 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 06:06:27 --> Could not find the language line "Crocs"
ERROR - 2023-03-16 06:06:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 06:06:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 06:26:18 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 06:26:46 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 06:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 06:28:18 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 06:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 06:28:40 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 06:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 06:29:14 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 06:29:50 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 06:30:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 06:39:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-16 07:00:11 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 07:12:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 07:14:09 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 07:14:22 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 07:14:57 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 07:15:03 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 07:15:05 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 07:15:06 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 07:16:08 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-16 07:19:15 --> Could not find the language line "Home"
ERROR - 2023-03-16 07:21:28 --> Could not find the language line "Home"
ERROR - 2023-03-16 07:21:31 --> Could not find the language line "Home"
ERROR - 2023-03-16 07:21:35 --> Could not find the language line "Home"
ERROR - 2023-03-16 07:21:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-16 07:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 07:21:52 --> Could not find the language line "Home"
ERROR - 2023-03-16 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-16 07:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 07:31:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 07:31:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 07:32:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 07:32:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 07:32:56 --> Could not find the language line "Bracelets"
ERROR - 2023-03-16 07:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 07:33:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 07:34:08 --> Could not find the language line "Home"
ERROR - 2023-03-16 07:37:04 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 07:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 07:38:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 07:38:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 07:38:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 07:38:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 07:39:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 07:46:22 --> Could not find the language line "Home"
ERROR - 2023-03-16 07:53:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:07:23 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:07:31 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:19:28 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:26:04 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:38:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:42:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:42:53 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:46:03 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:46:20 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:47:13 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:47:20 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:52:04 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:57:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 08:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 08:58:28 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:59:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-16 08:59:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-16 08:59:18 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:59:20 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:59:37 --> Could not find the language line "Home"
ERROR - 2023-03-16 08:59:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-16 08:59:46 --> Could not find the language line "Home"
ERROR - 2023-03-16 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-16 09:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:04:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 09:04:57 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 09:05:07 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 09:06:18 --> Could not find the language line "Home"
ERROR - 2023-03-16 09:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:24:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 09:24:48 --> Could not find the language line "Home"
ERROR - 2023-03-16 09:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 09:31:43 --> Could not find the language line "Home"
ERROR - 2023-03-16 09:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:39:26 --> Could not find the language line "Home"
ERROR - 2023-03-16 09:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:40:36 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 09:40:57 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 09:41:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 09:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:47:37 --> Could not find the language line "Home"
ERROR - 2023-03-16 09:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:48:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 09:51:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 09:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:52:07 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 09:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:52:25 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 09:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:52:33 --> Could not find the language line "Home"
ERROR - 2023-03-16 09:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:53:06 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 09:53:06 --> Could not find the language line "Home"
ERROR - 2023-03-16 09:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:53:57 --> Could not find the language line "Home"
ERROR - 2023-03-16 09:53:57 --> Could not find the language line "Home"
ERROR - 2023-03-16 09:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:56:11 --> Could not find the language line "Home"
ERROR - 2023-03-16 09:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:58:11 --> Could not find the language line "Home"
ERROR - 2023-03-16 09:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 09:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 10:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:27:13 --> Could not find the language line "Home"
ERROR - 2023-03-16 10:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:30:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 10:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 10:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:39:24 --> Could not find the language line "Home"
ERROR - 2023-03-16 10:39:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 10:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:39:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 10:46:08 --> Could not find the language line "Home"
ERROR - 2023-03-16 10:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 10:53:17 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-16 10:53:18 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-16 10:53:18 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-16 10:53:18 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-16 10:57:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:02:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-16 11:02:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-16 11:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:08:02 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:08:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-16 11:08:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-16 11:09:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-16 11:09:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-16 11:09:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-16 11:09:19 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:09:25 --> Could not find the language line "Bracelets"
ERROR - 2023-03-16 11:09:46 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:10:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-16 11:10:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-16 11:10:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-16 11:10:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-16 11:10:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-16 11:10:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-16 11:10:38 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:11:07 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:14:17 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:16:25 --> Could not find the language line "Perfume"
ERROR - 2023-03-16 11:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:16:35 --> Could not find the language line "Perfume"
ERROR - 2023-03-16 11:16:39 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:17:04 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:20:31 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:22:28 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:24:39 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:30:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 11:31:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 11:31:15 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:31:23 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-16 11:31:23 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-16 11:31:23 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-16 11:31:24 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-16 11:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:40:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 11:40:20 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:40:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:46:36 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 11:48:51 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:50:46 --> Could not find the language line "Home"
ERROR - 2023-03-16 11:52:14 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 11:52:23 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 11:56:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 11:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:02:21 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:04:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 12:22:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:25:56 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:26:01 --> 404 Page Not Found: Assets/mail
ERROR - 2023-03-16 12:26:01 --> 404 Page Not Found: Assets/mail
ERROR - 2023-03-16 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:34:05 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 12:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:34:41 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:37:02 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 12:37:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 12:37:13 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 12:37:19 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 12:37:30 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 12:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:39:47 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 12:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:40:11 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:40:23 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 12:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:45:31 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:45:32 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:45:44 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:45:48 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:45:49 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:45:51 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:46:00 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:46:02 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:46:02 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:46:02 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:47:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 12:47:23 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 12:47:28 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 12:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:47:46 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:47:53 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:47:54 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:47:55 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:48:03 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:48:04 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:51:12 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 12:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:51:19 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:51:31 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:51:46 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:52:13 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 12:52:16 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 12:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 12:52:43 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:52:53 --> Could not find the language line "Home"
ERROR - 2023-03-16 12:52:54 --> Could not find the language line "Home"
ERROR - 2023-03-16 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-16 13:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:08:10 --> Could not find the language line "Home"
ERROR - 2023-03-16 13:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:15:34 --> Could not find the language line "Home"
ERROR - 2023-03-16 13:16:17 --> Could not find the language line "Home"
ERROR - 2023-03-16 13:16:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-16 13:17:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 13:17:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 13:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:18:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 13:18:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 13:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:19:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 13:19:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 13:19:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 13:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:19:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 13:19:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 13:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:19:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 13:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:24:32 --> Could not find the language line "Home"
ERROR - 2023-03-16 13:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:26:27 --> Could not find the language line "Home"
ERROR - 2023-03-16 13:28:47 --> Could not find the language line "Home"
ERROR - 2023-03-16 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-16 13:34:59 --> Could not find the language line "Home"
ERROR - 2023-03-16 13:35:06 --> Could not find the language line "Home"
ERROR - 2023-03-16 13:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:39:46 --> Could not find the language line "Home"
ERROR - 2023-03-16 13:55:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 13:55:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 13:55:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 13:55:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 13:57:11 --> Could not find the language line "Hair%20"
ERROR - 2023-03-16 13:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 13:58:06 --> Could not find the language line "Home"
ERROR - 2023-03-16 13:58:15 --> Could not find the language line "Home"
ERROR - 2023-03-16 13:59:34 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:00:34 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:01:04 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:01:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 14:01:18 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:03:53 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:04:07 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:11:04 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:13:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:13:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:13:15 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:13:15 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:13:16 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:13:16 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:13:17 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:14:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:14:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-16 14:14:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-16 14:14:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-16 14:14:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-16 14:14:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-16 14:14:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-16 14:14:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-16 14:14:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-16 14:14:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-16 14:14:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-16 14:15:28 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:26:58 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:27:37 --> Could not find the language line "Hair%20"
ERROR - 2023-03-16 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:30:31 --> 404 Page Not Found: Products/index
ERROR - 2023-03-16 14:30:31 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 14:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:39:38 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:40:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 14:40:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 14:40:32 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:40:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 14:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:40:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 14:41:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 14:41:18 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:41:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 14:41:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 14:41:53 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:53:01 --> Could not find the language line "Home"
ERROR - 2023-03-16 14:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 14:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:06:58 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:07:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-16 15:07:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-16 15:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:16:08 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:16:23 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:16:27 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:18:07 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:18:10 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:21:26 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:24:04 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:27:16 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:32:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-16 15:39:42 --> 404 Page Not Found: Adminerphp/index
ERROR - 2023-03-16 15:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:40:46 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:43:46 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:44:51 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:45:17 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:45:23 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:45:42 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:47:48 --> Could not find the language line "Home"
ERROR - 2023-03-16 15:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 15:50:57 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:11:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 16:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:14:13 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:19:39 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:19:40 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:19:42 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-16 16:19:42 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-16 16:19:42 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-16 16:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:19:43 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-16 16:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:24:26 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:24:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-16 16:24:46 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:24:52 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:25:04 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:25:08 --> Could not find the language line "Bracelets"
ERROR - 2023-03-16 16:25:19 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:25:21 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:25:22 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 16:25:44 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:25:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-16 16:26:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:27:06 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:27:35 --> 404 Page Not Found: Assets/admin
ERROR - 2023-03-16 16:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:29:37 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:30:23 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:30:44 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:34:42 --> Could not find the language line "Home"
ERROR - 2023-03-16 16:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:37:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-16 16:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 16:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-16 17:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 17:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 17:04:27 --> Could not find the language line "Home"
ERROR - 2023-03-16 17:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 17:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 17:08:24 --> Could not find the language line "Perfume"
ERROR - 2023-03-16 17:14:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 17:21:12 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-16 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-16 17:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 17:31:28 --> Could not find the language line "Home"
ERROR - 2023-03-16 17:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 17:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 17:51:34 --> Could not find the language line "Home"
ERROR - 2023-03-16 17:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 18:04:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 18:07:43 --> Could not find the language line "Home"
ERROR - 2023-03-16 18:10:04 --> Could not find the language line "Home"
ERROR - 2023-03-16 18:10:25 --> Could not find the language line "Socks"
ERROR - 2023-03-16 18:10:28 --> Could not find the language line "Home"
ERROR - 2023-03-16 18:10:29 --> Could not find the language line "Socks"
ERROR - 2023-03-16 18:10:33 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-16 18:10:34 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-16 18:10:35 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-16 18:10:36 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-16 18:10:36 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-16 18:10:36 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-16 18:10:36 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-16 18:10:37 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-16 18:10:48 --> Could not find the language line "Home"
ERROR - 2023-03-16 18:11:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:11:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:11:48 --> Could not find the language line "Home"
ERROR - 2023-03-16 18:11:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:12:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:12:38 --> Could not find the language line "Home"
ERROR - 2023-03-16 18:12:42 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 18:12:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:13:38 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 18:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:13:55 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 18:13:59 --> Could not find the language line "Home"
ERROR - 2023-03-16 18:14:02 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 18:14:19 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 18:14:33 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 18:14:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:15:13 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 18:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:15:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 18:15:49 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 18:15:49 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 18:15:51 --> Could not find the language line "Home"
ERROR - 2023-03-16 18:16:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:16:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:17:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:17:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:18:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:19:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:19:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:19:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:19:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:20:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:21:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:22:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:22:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:23:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:23:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:24:04 --> Could not find the language line "Home"
ERROR - 2023-03-16 18:24:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:24:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:24:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:24:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:25:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:25:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:25:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:25:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:25:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:25:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:26:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:26:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:27:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:27:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:27:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:27:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:27:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:27:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:27:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:28:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:28:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 18:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:29:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:29:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:30:22 --> Could not find the language line "Home"
ERROR - 2023-03-16 18:31:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:31:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:31:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:31:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:32:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:32:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:33:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:33:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:33:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:33:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:34:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:34:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:34:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:35:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:35:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:35:15 --> Could not find the language line "Perfume"
ERROR - 2023-03-16 18:35:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-16 18:35:54 --> Could not find the language line "Bracelets"
ERROR - 2023-03-16 18:36:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-16 18:36:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-16 18:36:15 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 18:36:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:36:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:37:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:37:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:38:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:38:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:38:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:38:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:38:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:38:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:38:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:38:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:38:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:39:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:39:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:39:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:39:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:39:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:39:59 --> Could not find the language line "Home"
ERROR - 2023-03-16 18:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 18:40:31 --> Could not find the language line "Home"
ERROR - 2023-03-16 18:55:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 18:55:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 18:56:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 19:00:04 --> Could not find the language line "Home"
ERROR - 2023-03-16 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-16 19:00:42 --> Could not find the language line "Home"
ERROR - 2023-03-16 19:03:33 --> Could not find the language line "Home"
ERROR - 2023-03-16 19:10:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 19:11:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 19:12:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 19:14:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 19:14:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 19:16:24 --> Could not find the language line "socks"
ERROR - 2023-03-16 19:18:06 --> Could not find the language line "Home"
ERROR - 2023-03-16 19:18:24 --> Could not find the language line "Home"
ERROR - 2023-03-16 19:21:24 --> Could not find the language line "socks"
ERROR - 2023-03-16 19:28:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-16 19:44:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 19:46:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 19:49:51 --> Could not find the language line "Home"
ERROR - 2023-03-16 19:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 19:50:55 --> Could not find the language line "Home"
ERROR - 2023-03-16 19:51:12 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 19:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 19:51:25 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 19:51:46 --> Could not find the language line "Home"
ERROR - 2023-03-16 19:58:11 --> Could not find the language line "Home"
ERROR - 2023-03-16 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-16 20:11:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 20:11:57 --> Could not find the language line "Home"
ERROR - 2023-03-16 20:24:19 --> Could not find the language line "Home"
ERROR - 2023-03-16 20:25:06 --> Could not find the language line "Home"
ERROR - 2023-03-16 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-16 20:33:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 20:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 20:34:49 --> Could not find the language line "Home"
ERROR - 2023-03-16 20:34:49 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-16 20:51:54 --> Could not find the language line "Home"
ERROR - 2023-03-16 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-16 21:04:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-16 21:04:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-16 21:18:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 21:31:01 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-16 21:39:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 21:39:24 --> Could not find the language line "Home"
ERROR - 2023-03-16 21:45:45 --> Could not find the language line "Home"
ERROR - 2023-03-16 21:51:15 --> Could not find the language line "Home"
ERROR - 2023-03-16 21:51:29 --> Could not find the language line "Home"
ERROR - 2023-03-16 22:00:16 --> Could not find the language line "Home"
ERROR - 2023-03-16 22:02:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 22:19:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-16 22:19:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-16 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 22:55:47 --> Could not find the language line "Home"
ERROR - 2023-03-16 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-16 23:09:04 --> Could not find the language line "Home"
ERROR - 2023-03-16 23:10:37 --> Could not find the language line "Home"
ERROR - 2023-03-16 23:11:37 --> Could not find the language line "Home"
ERROR - 2023-03-16 23:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 23:13:56 --> Could not find the language line "Home"
ERROR - 2023-03-16 23:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 23:15:40 --> Could not find the language line "Home"
ERROR - 2023-03-16 23:16:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 23:16:06 --> Could not find the language line "Clothing"
ERROR - 2023-03-16 23:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 23:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 23:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-16 23:18:12 --> Could not find the language line "Home"
ERROR - 2023-03-16 23:24:06 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-16 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-16 23:31:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-16 23:55:06 --> Could not find the language line "Home"
