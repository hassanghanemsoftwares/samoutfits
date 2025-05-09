<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-25 00:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 00:01:51 --> Could not find the language line "Home"
ERROR - 2023-03-25 00:05:12 --> Could not find the language line "Home"
ERROR - 2023-03-25 00:05:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 00:22:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 00:22:30 --> Could not find the language line "Home"
ERROR - 2023-03-25 00:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 00:51:01 --> Could not find the language line "Home"
ERROR - 2023-03-25 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-25 01:10:13 --> 404 Page Not Found: Sellersjson/index
ERROR - 2023-03-25 01:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 01:41:32 --> Could not find the language line "Home"
ERROR - 2023-03-25 01:41:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 01:42:53 --> Could not find the language line "Home"
ERROR - 2023-03-25 01:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 01:43:56 --> Could not find the language line "Home"
ERROR - 2023-03-25 01:43:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 01:44:14 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 01:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 01:44:36 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 01:44:55 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 02:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 02:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 02:05:44 --> Could not find the language line "Home"
ERROR - 2023-03-25 02:05:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 02:06:04 --> Could not find the language line "Home"
ERROR - 2023-03-25 02:06:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 02:06:25 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-03-25 02:06:26 --> Could not find the language line "Home"
ERROR - 2023-03-25 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 02:54:05 --> Could not find the language line "Home"
ERROR - 2023-03-25 03:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 03:30:57 --> Could not find the language line "Home"
ERROR - 2023-03-25 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 04:14:27 --> Could not find the language line "Home"
ERROR - 2023-03-25 04:14:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 04:15:05 --> Could not find the language line "Home"
ERROR - 2023-03-25 04:29:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-25 04:42:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-25 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 05:39:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-25 05:40:14 --> Could not find the language line "Disclaimer"
ERROR - 2023-03-25 05:40:54 --> Could not find the language line "Home"
ERROR - 2023-03-25 05:42:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 05:45:28 --> Could not find the language line "Home"
ERROR - 2023-03-25 05:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 06:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 06:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 06:19:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 06:22:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 06:34:06 --> Could not find the language line "Home"
ERROR - 2023-03-25 06:34:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 06:46:42 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-25 06:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 06:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 06:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 06:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-25 07:00:57 --> Could not find the language line "Home"
ERROR - 2023-03-25 07:01:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 07:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:09:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 07:09:31 --> Could not find the language line "Home"
ERROR - 2023-03-25 07:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:24:45 --> Could not find the language line "Home"
ERROR - 2023-03-25 07:25:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 07:29:12 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 07:29:31 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 07:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 07:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:30:49 --> Could not find the language line "Home"
ERROR - 2023-03-25 07:30:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 07:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 07:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-25 08:05:03 --> Could not find the language line "Home"
ERROR - 2023-03-25 08:05:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 08:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:05:54 --> Could not find the language line "Home"
ERROR - 2023-03-25 08:05:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 08:06:04 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 08:06:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 08:06:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 08:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 08:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:49:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 08:57:02 --> Could not find the language line "Home"
ERROR - 2023-03-25 08:57:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 09:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 09:02:21 --> Could not find the language line "Home"
ERROR - 2023-03-25 09:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 09:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 09:26:08 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-03-25 09:26:11 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-03-25 09:26:14 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-03-25 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 09:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 09:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 09:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 09:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 09:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 09:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 09:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-25 10:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 10:11:28 --> Could not find the language line "Home"
ERROR - 2023-03-25 10:25:37 --> Could not find the language line "Home"
ERROR - 2023-03-25 10:25:38 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-25 10:30:09 --> Could not find the language line "Home"
ERROR - 2023-03-25 10:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 10:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 10:56:49 --> Could not find the language line "Home"
ERROR - 2023-03-25 10:56:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-25 11:02:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 11:04:59 --> Could not find the language line "Home"
ERROR - 2023-03-25 11:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 11:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 11:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 11:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 11:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 11:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 11:24:31 --> Could not find the language line "Socks"
ERROR - 2023-03-25 11:24:59 --> Could not find the language line "Home"
ERROR - 2023-03-25 11:25:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 11:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 11:27:37 --> Could not find the language line "Home"
ERROR - 2023-03-25 11:27:38 --> Could not find the language line "Home"
ERROR - 2023-03-25 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-25 11:30:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 11:39:20 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 11:42:29 --> Could not find the language line "Home"
ERROR - 2023-03-25 11:43:00 --> Could not find the language line "Home"
ERROR - 2023-03-25 11:43:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 11:43:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 11:44:55 --> Could not find the language line "Home"
ERROR - 2023-03-25 11:44:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 11:44:55 --> Could not find the language line "Home"
ERROR - 2023-03-25 11:44:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 11:55:28 --> Could not find the language line "Home"
ERROR - 2023-03-25 12:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 12:01:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 12:01:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 12:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:03:19 --> Could not find the language line "Home"
ERROR - 2023-03-25 12:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:04:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 12:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:05:34 --> Could not find the language line "Home"
ERROR - 2023-03-25 12:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:08:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 12:09:04 --> Could not find the language line "Home"
ERROR - 2023-03-25 12:09:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 12:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:09:51 --> Could not find the language line "Home"
ERROR - 2023-03-25 12:09:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 12:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:14:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-25 12:17:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 12:17:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 12:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 12:32:59 --> Could not find the language line "Home"
ERROR - 2023-03-25 12:33:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 12:33:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 12:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:35:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 12:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:40:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-25 12:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:52:48 --> Could not find the language line "Home"
ERROR - 2023-03-25 12:52:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 12:53:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-25 12:53:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-25 12:53:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-25 12:53:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-25 12:53:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-25 12:53:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-25 12:53:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-25 12:53:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-25 12:53:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-25 12:53:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-25 12:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 12:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-25 13:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:13:55 --> Could not find the language line "Home"
ERROR - 2023-03-25 13:14:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 13:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:17:36 --> Could not find the language line "Home"
ERROR - 2023-03-25 13:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:17:49 --> Could not find the language line "Home"
ERROR - 2023-03-25 13:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:21:49 --> Could not find the language line "Home"
ERROR - 2023-03-25 13:21:50 --> Could not find the language line "Home"
ERROR - 2023-03-25 13:21:52 --> Could not find the language line "Home"
ERROR - 2023-03-25 13:21:52 --> Could not find the language line "Home"
ERROR - 2023-03-25 13:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:22:00 --> Could not find the language line "Home"
ERROR - 2023-03-25 13:22:20 --> Could not find the language line "Home"
ERROR - 2023-03-25 13:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 13:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 13:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 14:00:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 14:02:48 --> Could not find the language line "Home"
ERROR - 2023-03-25 14:03:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 14:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:04:24 --> Could not find the language line "Home"
ERROR - 2023-03-25 14:04:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-25 14:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:08:41 --> Could not find the language line "Home"
ERROR - 2023-03-25 14:09:49 --> Could not find the language line "Home"
ERROR - 2023-03-25 14:10:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 14:12:26 --> Could not find the language line "Home"
ERROR - 2023-03-25 14:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:17:36 --> Could not find the language line "Home"
ERROR - 2023-03-25 14:17:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:22:42 --> Could not find the language line "Home"
ERROR - 2023-03-25 14:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 14:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:32:25 --> Could not find the language line "Home"
ERROR - 2023-03-25 14:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:47:16 --> Could not find the language line "Home"
ERROR - 2023-03-25 14:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 14:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 15:00:52 --> Could not find the language line "Home"
ERROR - 2023-03-25 15:03:22 --> Could not find the language line "Home"
ERROR - 2023-03-25 15:14:26 --> Could not find the language line "Home"
ERROR - 2023-03-25 15:14:36 --> Could not find the language line "Bracelets"
ERROR - 2023-03-25 15:14:45 --> Could not find the language line "Home"
ERROR - 2023-03-25 15:15:57 --> Could not find the language line "Home"
ERROR - 2023-03-25 15:16:11 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 15:16:16 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 15:16:23 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 15:16:41 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 15:16:44 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 15:17:01 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 15:17:04 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 15:17:05 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 15:17:08 --> Could not find the language line "Home"
ERROR - 2023-03-25 15:18:48 --> Could not find the language line "Home"
ERROR - 2023-03-25 15:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 15:40:34 --> Could not find the language line "Home"
ERROR - 2023-03-25 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-25 16:06:07 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-25 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 16:32:40 --> Could not find the language line "Home"
ERROR - 2023-03-25 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 17:04:06 --> Could not find the language line "Home"
ERROR - 2023-03-25 17:13:18 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-25 17:25:58 --> Could not find the language line "Home"
ERROR - 2023-03-25 17:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 17:26:57 --> Could not find the language line "Home"
ERROR - 2023-03-25 17:28:00 --> Could not find the language line "Home"
ERROR - 2023-03-25 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 17:47:25 --> Could not find the language line "Home"
ERROR - 2023-03-25 17:54:56 --> Could not find the language line "Home"
ERROR - 2023-03-25 17:55:21 --> Could not find the language line "Home"
ERROR - 2023-03-25 17:57:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 17:58:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-03-25 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 18:00:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 18:23:44 --> Could not find the language line "Home"
ERROR - 2023-03-25 18:24:02 --> Could not find the language line "Home"
ERROR - 2023-03-25 18:25:38 --> Could not find the language line "Home"
ERROR - 2023-03-25 18:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 18:29:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 18:29:42 --> Could not find the language line "Home"
ERROR - 2023-03-25 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 18:36:02 --> Could not find the language line "Home"
ERROR - 2023-03-25 18:50:26 --> Could not find the language line "Home"
ERROR - 2023-03-25 18:53:08 --> Could not find the language line "Home"
ERROR - 2023-03-25 18:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 18:54:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 18:54:46 --> Could not find the language line "Home"
ERROR - 2023-03-25 18:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 18:56:05 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:02:37 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:07:40 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:07:44 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 19:09:06 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 19:11:16 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 19:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 19:17:35 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:27:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 19:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 19:29:17 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 19:29:49 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:33:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:37:00 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 19:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 19:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 19:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 19:42:18 --> Could not find the language line "Home"
ERROR - 2023-03-25 19:49:34 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 19:51:30 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 20:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 20:16:59 --> Could not find the language line "Home"
ERROR - 2023-03-25 20:20:49 --> Could not find the language line "Home"
ERROR - 2023-03-25 20:21:21 --> Could not find the language line "Home"
ERROR - 2023-03-25 20:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 20:21:46 --> Could not find the language line "Home"
ERROR - 2023-03-25 20:23:20 --> Could not find the language line "Home"
ERROR - 2023-03-25 20:23:39 --> Could not find the language line "Home"
ERROR - 2023-03-25 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 21:05:56 --> 404 Page Not Found: Admin/server
ERROR - 2023-03-25 21:07:08 --> Could not find the language line "Home"
ERROR - 2023-03-25 21:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 21:08:07 --> Could not find the language line "Home"
ERROR - 2023-03-25 21:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 21:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 21:27:06 --> Could not find the language line "Home"
ERROR - 2023-03-25 21:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 21:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 21:52:12 --> Could not find the language line "Home"
ERROR - 2023-03-25 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-25 22:00:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-25 22:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 22:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 22:23:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-25 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-25 22:40:31 --> Could not find the language line "Home"
ERROR - 2023-03-25 22:40:58 --> Could not find the language line "Home"
ERROR - 2023-03-25 22:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 22:41:56 --> Could not find the language line "Home"
ERROR - 2023-03-25 22:42:20 --> Could not find the language line "Home"
ERROR - 2023-03-25 22:48:59 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-25 22:48:59 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-25 22:49:00 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-25 22:49:00 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-25 22:53:56 --> Could not find the language line "Home"
ERROR - 2023-03-25 22:54:20 --> Could not find the language line "Home"
ERROR - 2023-03-25 22:54:27 --> Could not find the language line "Clothing"
ERROR - 2023-03-25 22:54:34 --> Could not find the language line "Home"
ERROR - 2023-03-25 22:54:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-25 22:54:39 --> Could not find the language line "Home"
ERROR - 2023-03-25 22:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 22:56:01 --> Could not find the language line "Home"
ERROR - 2023-03-25 22:58:02 --> Could not find the language line "Home"
ERROR - 2023-03-25 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-25 23:09:35 --> Could not find the language line "Home"
ERROR - 2023-03-25 23:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 23:10:40 --> Could not find the language line "Home"
ERROR - 2023-03-25 23:15:28 --> Could not find the language line "Home"
ERROR - 2023-03-25 23:16:04 --> Could not find the language line "Home"
ERROR - 2023-03-25 23:19:20 --> Could not find the language line "Home"
ERROR - 2023-03-25 23:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 23:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 23:28:45 --> Could not find the language line "Home"
ERROR - 2023-03-25 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-25 23:57:11 --> Could not find the language line "Home"
ERROR - 2023-03-25 23:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-25 23:59:25 --> Could not find the language line "Home"
