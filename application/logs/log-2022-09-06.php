<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-09-06 06:12:21 --> Could not find the language line "Home"
ERROR - 2022-09-06 06:12:24 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:12:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:13:03 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:13:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:13:06 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:13:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:14:22 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:14:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:14:25 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:14:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:14:25 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:14:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:14:27 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:14:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:14:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `items`.`id`
ORDER BY `result` DESC
 LIMIT 18' at line 10 - Invalid query: SELECT `items`.*, SUM(transaction_items.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_items.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`stock_clearance` = 1
AND `items`.`price` <= '19'
AND `items`.`color` IN()
GROUP BY `items`.`id`
ORDER BY `result` DESC
 LIMIT 18
ERROR - 2022-09-06 06:15:41 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:15:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:15:53 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:15:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:15:56 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:15:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:15:59 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:15:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:05 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-06 06:16:12 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:18 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:20 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:21 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:29 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:33 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-06 06:16:40 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:49 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:53 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:56 --> Severity: Notice --> Undefined variable: sub_categories C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:16:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ahmad_eco\application\views\products\stock_clearance.php 47
ERROR - 2022-09-06 06:22:52 --> Could not find the language line "Home"
ERROR - 2022-09-06 08:20:48 --> Could not find the language line "Home"
ERROR - 2022-09-06 08:20:49 --> Could not find the language line "Home"
ERROR - 2022-09-06 08:21:25 --> Severity: error --> Exception: Call to undefined method Home::load_all() C:\wamp64\www\ahmad_eco\application\controllers\Home.php 80
ERROR - 2022-09-06 08:21:56 --> Severity: error --> Exception: Cannot use object of type mysqli as array C:\wamp64\www\ahmad_eco\application\core\MY_Model.php 214
ERROR - 2022-09-06 08:23:15 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 49
ERROR - 2022-09-06 08:23:15 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 49
ERROR - 2022-09-06 08:23:15 --> Severity: Notice --> Undefined variable: pages_count C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 51
ERROR - 2022-09-06 08:23:15 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 57
ERROR - 2022-09-06 08:23:15 --> Severity: Notice --> Undefined variable: pages_count C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 57
ERROR - 2022-09-06 08:23:15 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 57
ERROR - 2022-09-06 08:23:15 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 58
ERROR - 2022-09-06 08:23:53 --> Severity: error --> Exception: Cannot use object of type mysqli as array C:\wamp64\www\ahmad_eco\application\core\MY_Model.php 214
ERROR - 2022-09-06 08:24:34 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2022-09-06 08:25:25 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2022-09-06 09:09:13 --> Query error: Unknown column 'Summer' in 'where clause' - Invalid query: SELECT a.* FROM ( SELECT items.*, SUM(transaction_items.qty * transaction_items.mvt_type) AS total_qty FROM `items` INNER JOIN transaction_items on transaction_items.item_id = items.id WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44 GROUP BY items.id ) as a LEFT JOIN item_tags ON a.id = item_tags.item_id INNER JOIN tags ON tags.id = item_tags.tag_id WHERE tags.tag LIKE 'Shoes' OR a.description LIKE Summer OR a.color LIKE Summer OR a.barcode LIKE Summer OR a.category LIKE Summer OR a.sub_category LIKE Summer
ERROR - 2022-09-06 09:13:07 --> Could not find the language line "Home"
ERROR - 2022-09-06 09:13:09 --> Could not find the language line "Home"
ERROR - 2022-09-06 09:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-06 09:15:56 --> Query error: Unknown column 'tag' in 'field list' - Invalid query: SELECT a.* FROM ( SELECT items.*, SUM(transaction_items.qty * transaction_items.mvt_type) AS total_qty, tag FROM `items` INNER JOIN transaction_items on transaction_items.item_id = items.id WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44 GROUP BY items.id ) as a LEFT JOIN item_tags ON a.id = item_tags.item_id INNER JOIN tags ON tags.id = item_tags.tag_id WHERE tags.tag LIKE 'C263' OR a.description LIKE 'C263' OR a.color LIKE 'C263' OR a.barcode LIKE 'C263' OR a.category LIKE 'C263' OR a.sub_category LIKE 'C263' GROUP BY a.id
ERROR - 2022-09-06 09:16:07 --> Query error: Unknown column 'tags.tag' in 'field list' - Invalid query: SELECT a.* FROM ( SELECT items.*, SUM(transaction_items.qty * transaction_items.mvt_type) AS total_qty, tags.tag FROM `items` INNER JOIN transaction_items on transaction_items.item_id = items.id WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44 GROUP BY items.id ) as a LEFT JOIN item_tags ON a.id = item_tags.item_id INNER JOIN tags ON tags.id = item_tags.tag_id WHERE tags.tag LIKE 'C263' OR a.description LIKE 'C263' OR a.color LIKE 'C263' OR a.barcode LIKE 'C263' OR a.category LIKE 'C263' OR a.sub_category LIKE 'C263' GROUP BY a.id
ERROR - 2022-09-06 10:08:39 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 49
ERROR - 2022-09-06 10:08:39 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 49
ERROR - 2022-09-06 10:08:39 --> Severity: Notice --> Undefined variable: pages_count C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 51
ERROR - 2022-09-06 10:08:39 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 57
ERROR - 2022-09-06 10:08:39 --> Severity: Notice --> Undefined variable: pages_count C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 57
ERROR - 2022-09-06 10:08:39 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 57
ERROR - 2022-09-06 10:08:39 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 58
ERROR - 2022-09-06 10:10:19 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 49
ERROR - 2022-09-06 10:10:19 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 49
ERROR - 2022-09-06 10:10:19 --> Severity: Notice --> Undefined variable: pages_count C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 51
ERROR - 2022-09-06 10:10:19 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 57
ERROR - 2022-09-06 10:10:19 --> Severity: Notice --> Undefined variable: pages_count C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 57
ERROR - 2022-09-06 10:10:19 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 57
ERROR - 2022-09-06 10:10:19 --> Severity: Notice --> Undefined variable: page_nb C:\wamp64\www\ahmad_eco\application\views\home\search_result.php 58
ERROR - 2022-09-06 10:14:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\wamp64\www\ahmad_eco\application\controllers\Home.php 72
ERROR - 2022-09-06 10:15:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\wamp64\www\ahmad_eco\application\controllers\Home.php 72
ERROR - 2022-09-06 10:22:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\wamp64\www\ahmad_eco\application\controllers\Home.php 75
ERROR - 2022-09-06 10:33:50 --> Could not find the language line "Home"
ERROR - 2022-09-06 10:33:50 --> Could not find the language line "Home"
ERROR - 2022-09-06 10:34:26 --> Could not find the language line "Home"
ERROR - 2022-09-06 10:35:26 --> Could not find the language line "Home"
ERROR - 2022-09-06 10:42:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%'sport'% OR a.description LIKE 'sport' OR a.color LIKE 'sport' OR a.barcode LIK' at line 13 - Invalid query: SELECT a.*, tag
		FROM (
		SELECT
			items.*, SUM(transaction_items.qty * transaction_items.mvt_type) AS total_qty
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		INNER JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE %'sport'% OR a.description LIKE 'sport' OR a.color LIKE 'sport' OR a.barcode LIKE 'sport' OR a.category LIKE 'sport' OR a.sub_category LIKE 'sport'
		GROUP BY a.id LIMIT 18 OFFSET 0
ERROR - 2022-09-06 11:08:42 --> Could not find the language line "Home"
ERROR - 2022-09-06 11:08:44 --> Could not find the language line "Home"
ERROR - 2022-09-06 11:08:55 --> Could not find the language line "Home"
ERROR - 2022-09-06 11:09:04 --> Could not find the language line "Home"
ERROR - 2022-09-06 11:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-06 11:09:50 --> Could not find the language line "Home"
ERROR - 2022-09-06 11:28:09 --> Could not find the language line "Home"
ERROR - 2022-09-06 12:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-06 12:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-06 12:08:57 --> Could not find the language line "Home"
ERROR - 2022-09-06 12:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-06 12:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-06 12:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-06 12:10:05 --> Could not find the language line "Home"
ERROR - 2022-09-06 12:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2022-09-06 12:26:58 --> Could not find the language line "Home"
ERROR - 2022-09-06 14:03:33 --> Could not find the language line "Home"
