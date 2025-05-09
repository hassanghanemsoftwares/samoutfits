<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-07 00:00:14 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 00:21:49 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 00:30:21 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 00:46:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 00:46:56 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 01:00:14 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 01:09:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-07 01:16:01 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 01:16:02 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 01:16:02 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 01:16:02 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 01:29:59 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 01:30:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 01:30:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 01:30:18 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 02:00:16 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 02:08:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 02:12:02 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 02:30:14 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 02:37:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 02:37:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 02:46:44 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 03:00:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 03:07:18 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 03:07:28 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 03:15:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-07 03:30:16 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 03:30:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-07 04:00:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 04:02:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-07 04:06:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 04:08:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 04:08:33 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 04:30:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 04:38:03 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 04:47:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 04:51:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 04:51:58 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 04:54:26 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 04:56:30 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 05:00:15 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 05:09:06 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 05:13:58 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 05:24:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-07 05:24:37 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 05:25:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 05:25:45 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 05:27:49 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 05:30:14 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 05:31:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 05:31:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 05:31:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-07 05:56:26 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:10:06 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:10:16 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 06:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 06:13:58 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:14:35 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:15:38 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:16:38 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:16:45 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:18:13 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 06:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 06:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 06:19:52 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:22:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 06:22:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 06:23:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 06:23:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 06:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 06:25:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 06:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 06:27:36 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 06:35:07 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:38:34 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:38:43 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:40:16 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:40:16 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:40:16 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:40:16 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:40:17 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:40:17 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:40:17 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:40:17 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:40:17 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:42:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 06:43:26 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:47:13 --> Could not find the language line "Home"
ERROR - 2023-06-07 06:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 06:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 07:02:15 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:04:22 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:04:42 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:04:45 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:05:05 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:05:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:16:00 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:16:18 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-07 07:16:19 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-07 07:16:19 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-07 07:16:19 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-07 07:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 07:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 07:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 07:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 07:25:44 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:29:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 07:29:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 07:30:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:44:31 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:44:39 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 07:48:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-07 07:48:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '34'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-07 07:51:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:51:43 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:52:23 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:56:00 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:57:49 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:57:58 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:58:03 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 07:59:07 --> Could not find the language line "Home"
ERROR - 2023-06-07 07:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-07 08:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 08:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 08:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 08:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 08:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 08:21:23 --> Could not find the language line "Home"
ERROR - 2023-06-07 08:21:59 --> Could not find the language line "Home"
ERROR - 2023-06-07 08:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 08:23:43 --> Could not find the language line "Home"
ERROR - 2023-06-07 08:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 08:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 08:31:44 --> Could not find the language line "Home"
ERROR - 2023-06-07 08:33:13 --> Could not find the language line "Home"
ERROR - 2023-06-07 08:42:06 --> Could not find the language line "Home"
ERROR - 2023-06-07 08:42:49 --> Could not find the language line "Home"
ERROR - 2023-06-07 08:48:18 --> Could not find the language line "Home"
ERROR - 2023-06-07 08:48:18 --> Could not find the language line "Home"
ERROR - 2023-06-07 08:48:18 --> Could not find the language line "Home"
ERROR - 2023-06-07 08:55:26 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 09:10:42 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:11:18 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 09:17:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 09:23:50 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:24:11 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:24:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-07 09:24:19 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:24:34 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 09:25:11 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 09:25:27 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:25:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 09:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 09:25:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 09:26:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 09:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 09:26:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 09:26:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 09:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 09:27:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 09:27:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 09:27:22 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:33:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 09:33:05 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-06-07 09:33:06 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-06-07 09:33:07 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 09:35:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-07 09:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 09:36:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:38:10 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:38:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-07 09:38:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-07 09:39:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-07 09:39:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-07 09:39:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-07 09:39:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-07 09:39:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-07 09:39:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-07 09:39:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-07 09:39:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-07 09:39:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-07 09:39:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-07 09:44:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 09:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 09:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 09:52:39 --> Could not find the language line "Home"
ERROR - 2023-06-07 09:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-07 10:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:04:21 --> Could not find the language line "Home"
ERROR - 2023-06-07 10:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:18:29 --> 404 Page Not Found: Fileupload/index.php
ERROR - 2023-06-07 10:18:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 10:19:59 --> Could not find the language line "Home"
ERROR - 2023-06-07 10:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 10:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:31:03 --> Could not find the language line "Home"
ERROR - 2023-06-07 10:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:34:46 --> Could not find the language line "Home"
ERROR - 2023-06-07 10:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:35:51 --> Could not find the language line "Home"
ERROR - 2023-06-07 10:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:36:34 --> Could not find the language line "Home"
ERROR - 2023-06-07 10:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:50:04 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-06-07 10:50:05 --> Could not find the language line "Home"
ERROR - 2023-06-07 10:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:51:48 --> Could not find the language line "Home"
ERROR - 2023-06-07 10:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:52:16 --> Could not find the language line "Home"
ERROR - 2023-06-07 10:52:31 --> Could not find the language line "Home"
ERROR - 2023-06-07 10:53:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 10:54:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 10:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 10:55:00 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:02:36 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:03:19 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:06:33 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 11:08:45 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:08:45 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:08:45 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:08:45 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:08:45 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:13:41 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:14:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:15:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:15:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:15:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:15:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:15:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:15:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:15:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:16:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 11:16:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 11:16:47 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:16:56 --> Could not find the language line "Perfume"
ERROR - 2023-06-07 11:17:09 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:17:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 11:17:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 11:17:28 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:17:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 11:27:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:40:44 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:42:45 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:42:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 11:43:05 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:43:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:43:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 11:43:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 11:44:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 11:44:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:44:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 11:45:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 11:45:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 11:47:14 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:47:14 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:48:47 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:49:06 --> Could not find the language line "Home"
ERROR - 2023-06-07 11:50:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:50:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:51:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 11:51:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:01:30 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:01:48 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:14:00 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:14:41 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:21:46 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:21:49 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:22:34 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:22:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:23:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:23:44 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:23:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:24:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:24:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:25:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:25:05 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:28:26 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:34:39 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:36:01 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:40:41 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:40:42 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-07 12:40:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 12:41:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-07 12:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:46:17 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:47:32 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:49:17 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:49:30 --> Could not find the language line "Socks"
ERROR - 2023-06-07 12:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:52:10 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:52:18 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:52:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:53:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:53:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:53:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:53:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:53:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:53:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:53:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:53:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 12:54:05 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:54:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 12:54:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 12:54:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 12:54:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 12:54:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 12:54:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 12:54:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 12:54:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 12:54:58 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:55:03 --> Could not find the language line "Bracelets"
ERROR - 2023-06-07 12:55:20 --> Could not find the language line "Home"
ERROR - 2023-06-07 12:55:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 12:56:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 12:56:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 12:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:57:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 12:57:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 12:57:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-07 12:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 12:59:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 12:59:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-07 12:59:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:00:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 13:00:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-07 13:00:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 13:00:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 13:00:41 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:00:45 --> Could not find the language line "Perfume"
ERROR - 2023-06-07 13:00:49 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:01:17 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:02:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 13:02:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 13:04:00 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:11:09 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:15:01 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:17:18 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:18:05 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:18:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 13:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:25:39 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:27:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-07 13:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:29:30 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:29:50 --> Could not find the language line "Bracelets"
ERROR - 2023-06-07 13:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:30:15 --> Could not find the language line "Bracelets"
ERROR - 2023-06-07 13:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:30:25 --> Could not find the language line "Bracelets"
ERROR - 2023-06-07 13:30:27 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:31:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-07 13:34:47 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:44:07 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:44:11 --> Could not find the language line "Home"
ERROR - 2023-06-07 13:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 13:55:18 --> Could not find the language line "Home"
ERROR - 2023-06-07 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-07 14:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 14:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 14:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 14:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 14:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 14:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 14:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 14:16:25 --> Could not find the language line "Home"
ERROR - 2023-06-07 14:26:08 --> Could not find the language line "Home"
ERROR - 2023-06-07 14:26:34 --> Could not find the language line "Home"
ERROR - 2023-06-07 14:26:34 --> Could not find the language line "Home"
ERROR - 2023-06-07 14:27:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 14:28:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 14:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 14:29:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 14:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 14:29:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 14:29:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 14:30:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 14:30:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 14:30:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 14:31:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 14:31:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 14:31:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 14:31:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 14:31:40 --> Could not find the language line "Home"
ERROR - 2023-06-07 14:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 14:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 14:33:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-07 14:34:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-07 14:36:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-07 14:38:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-07 14:43:22 --> Could not find the language line "Home"
ERROR - 2023-06-07 14:43:22 --> Could not find the language line "Home"
ERROR - 2023-06-07 14:43:22 --> Could not find the language line "Home"
ERROR - 2023-06-07 14:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 14:46:36 --> Could not find the language line "Home"
ERROR - 2023-06-07 14:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 14:47:03 --> Could not find the language line "Home"
ERROR - 2023-06-07 14:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 14:47:08 --> Could not find the language line "Home"
ERROR - 2023-06-07 14:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 15:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 15:00:33 --> Could not find the language line "Home"
ERROR - 2023-06-07 15:00:56 --> Could not find the language line "Home"
ERROR - 2023-06-07 15:02:11 --> Could not find the language line "Home"
ERROR - 2023-06-07 15:02:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 15:03:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 15:03:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 15:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 15:06:33 --> Could not find the language line "Home"
ERROR - 2023-06-07 15:06:34 --> Could not find the language line "Home"
ERROR - 2023-06-07 15:11:28 --> Could not find the language line "Home"
ERROR - 2023-06-07 15:14:51 --> Could not find the language line "Home"
ERROR - 2023-06-07 15:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 15:30:10 --> Could not find the language line "Home"
ERROR - 2023-06-07 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-07 15:31:14 --> Could not find the language line "Home"
ERROR - 2023-06-07 15:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 15:38:46 --> Could not find the language line "Home"
ERROR - 2023-06-07 15:44:29 --> Could not find the language line "Home"
ERROR - 2023-06-07 15:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 15:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 15:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 15:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 16:04:49 --> Could not find the language line "Home"
ERROR - 2023-06-07 16:11:39 --> Could not find the language line "Home"
ERROR - 2023-06-07 16:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 16:12:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 16:12:46 --> Could not find the language line "Home"
ERROR - 2023-06-07 16:12:50 --> Could not find the language line "Home"
ERROR - 2023-06-07 16:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 16:13:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 16:13:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 16:14:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 16:14:21 --> Could not find the language line "Home"
ERROR - 2023-06-07 16:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 16:14:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 16:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 16:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 16:16:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 16:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 16:18:15 --> Could not find the language line "Home"
ERROR - 2023-06-07 16:18:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 16:18:55 --> Could not find the language line "Home"
ERROR - 2023-06-07 16:18:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 16:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 16:20:29 --> Could not find the language line "Home"
ERROR - 2023-06-07 16:23:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-07 16:28:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 16:28:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 16:29:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 16:29:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 16:30:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-07 16:33:42 --> Could not find the language line "Perfume"
ERROR - 2023-06-07 16:39:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 16:39:25 --> Could not find the language line "Home"
ERROR - 2023-06-07 16:42:01 --> Could not find the language line "Home"
ERROR - 2023-06-07 16:54:31 --> Could not find the language line "Home"
ERROR - 2023-06-07 16:56:13 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:03:19 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:03:47 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 17:10:53 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:18:08 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:24:01 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:26:22 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 17:30:08 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:30:08 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-06-07 17:30:08 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-06-07 17:30:09 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:30:09 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-06-07 17:30:09 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-06-07 17:30:09 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-06-07 17:30:09 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-06-07 17:30:09 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-06-07 17:30:09 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-06-07 17:30:10 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-06-07 17:30:10 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-06-07 17:30:10 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-06-07 17:30:10 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-06-07 17:30:10 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-06-07 17:30:10 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-06-07 17:30:10 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-06-07 17:30:10 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-06-07 17:30:10 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:30:11 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-06-07 17:30:11 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-06-07 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:34:51 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:34:54 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:36:11 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:36:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-07 17:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 17:36:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-07 17:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 17:37:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-07 17:37:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-07 17:37:22 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:37:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:37:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 17:38:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:38:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 17:38:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:38:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 17:38:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:38:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:38:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:38:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:38:50 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:38:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:38:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 17:39:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:39:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 17:39:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:39:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:39:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:39:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:39:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:39:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:39:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:39:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:39:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:39:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-07 17:39:28 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:39:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:39:59 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:40:07 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:40:12 --> Could not find the language line "Perfume"
ERROR - 2023-06-07 17:40:19 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 17:40:38 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:40:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 17:41:27 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:41:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 17:42:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 17:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 17:45:00 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:47:29 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:48:00 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 17:54:01 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:54:02 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:54:12 --> Could not find the language line "Bracelets"
ERROR - 2023-06-07 17:54:59 --> Could not find the language line "Bracelets"
ERROR - 2023-06-07 17:55:16 --> Could not find the language line "Bracelets"
ERROR - 2023-06-07 17:55:23 --> Could not find the language line "Home"
ERROR - 2023-06-07 17:55:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 17:56:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 17:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 17:58:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 17:58:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 17:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 17:59:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 18:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:00:41 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:00:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 18:01:16 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:01:16 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:06:28 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:07:01 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:07:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 18:07:33 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:07:36 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:08:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 18:08:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 18:08:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 18:08:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-07 18:09:22 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:09:46 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:09:58 --> Could not find the language line "Socks"
ERROR - 2023-06-07 18:10:14 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:10:38 --> Could not find the language line "Socks"
ERROR - 2023-06-07 18:10:54 --> Could not find the language line "Socks"
ERROR - 2023-06-07 18:10:59 --> Could not find the language line "Socks"
ERROR - 2023-06-07 18:11:16 --> Could not find the language line "Socks"
ERROR - 2023-06-07 18:11:17 --> Could not find the language line "Socks"
ERROR - 2023-06-07 18:11:19 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:14:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:15:56 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:21:00 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:29:18 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-07 18:29:45 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:31:24 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:31:25 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:35:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 18:35:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 18:36:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 18:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 18:36:45 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-07 18:37:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 18:37:05 --> Could not find the language line "clothing"
ERROR - 2023-06-07 18:37:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 18:37:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 18:42:36 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:42:43 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:43:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-07 18:43:50 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:46:10 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:52:14 --> Could not find the language line "Home"
ERROR - 2023-06-07 18:52:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 18:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:12:05 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:12:05 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:12:05 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:12:05 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:12:06 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:12:06 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:13:11 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:18:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 19:19:42 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:19:47 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:26:02 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:32:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:32:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:32:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 19:34:02 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:34:44 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:42:13 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:42:48 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:43:42 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:47:18 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 19:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 19:52:00 --> Could not find the language line "Home"
ERROR - 2023-06-07 19:54:32 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:03:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:04:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:05:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:06:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:07:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:07:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:07:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:08:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:08:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:08:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:09:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:09:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:09:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:10:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:10:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:11:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:11:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:12:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 20:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:13:48 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:15:03 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:17:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-07 20:18:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:18:37 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:19:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:19:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 20:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:23:10 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:33:35 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:34:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 20:36:49 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:37:34 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:37:59 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:39:24 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:41:48 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:44:52 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:47:56 --> Could not find the language line "Home"
ERROR - 2023-06-07 20:56:33 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:05:15 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:05:16 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:05:19 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 21:06:54 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 21:07:21 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:07:30 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:08:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 21:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 21:09:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 21:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 21:10:27 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:10:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 21:11:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 21:11:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 21:12:19 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:12:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-07 21:13:28 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:13:56 --> Could not find the language line "Bracelets"
ERROR - 2023-06-07 21:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 21:14:09 --> Could not find the language line "Bracelets"
ERROR - 2023-06-07 21:14:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:15:03 --> Could not find the language line "Socks"
ERROR - 2023-06-07 21:15:37 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:25:35 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:28:25 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:29:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:33:09 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:36:01 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:36:44 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:38:09 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:46:35 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:47:31 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:48:00 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:50:15 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:50:24 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:50:25 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:53:23 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:53:44 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:53:44 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:53:44 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:54:07 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:54:44 --> Could not find the language line "Home"
ERROR - 2023-06-07 21:54:56 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:00:40 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:01:17 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:01:43 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:01:47 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:03:04 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:03:24 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:04:27 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:04:37 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:05:00 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 22:05:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 22:05:32 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:05:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 22:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 22:06:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-07 22:08:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 22:08:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 22:08:20 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:08:39 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:08:40 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:08:40 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:08:55 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-07 22:08:55 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-07 22:08:55 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-07 22:08:55 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-07 22:09:43 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:11:03 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:12:36 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:12:51 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:14:46 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:16:27 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:19:07 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:19:15 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:19:45 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:23:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:27:17 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:28:02 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:28:23 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-07 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:31:54 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:34:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:45:52 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:45:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:51:16 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:57:23 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:58:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:58:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:58:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:58:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:58:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:58:57 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:59:31 --> Could not find the language line "Home"
ERROR - 2023-06-07 22:59:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-07 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:04:44 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:07:19 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:08:16 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:11:36 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:15:53 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:16:31 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:21:29 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:24:20 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:26:53 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:27:01 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:28:56 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:29:08 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:29:51 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:30:34 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:30:36 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:30:42 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:31:45 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:32:39 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:35:39 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:44:44 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 23:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-07 23:50:38 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:56:24 --> Could not find the language line "Home"
ERROR - 2023-06-07 23:59:35 --> Could not find the language line "Home"
