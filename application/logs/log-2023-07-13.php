<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-13 00:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-13 00:27:55 --> Could not find the language line "Home"
ERROR - 2023-07-13 00:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-13 00:38:31 --> Could not find the language line "Home"
ERROR - 2023-07-13 00:38:38 --> Could not find the language line "Home"
ERROR - 2023-07-13 00:39:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 00:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 00:40:12 --> Could not find the language line "Home"
ERROR - 2023-07-13 00:40:19 --> Could not find the language line "Home"
ERROR - 2023-07-13 00:43:02 --> Could not find the language line "Home"
ERROR - 2023-07-13 00:43:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 00:43:51 --> Could not find the language line "Home"
ERROR - 2023-07-13 00:43:54 --> Could not find the language line "Perfume"
ERROR - 2023-07-13 00:44:04 --> Could not find the language line "Home"
ERROR - 2023-07-13 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-13 01:00:55 --> Could not find the language line "Home"
ERROR - 2023-07-13 01:06:52 --> Could not find the language line "Home"
ERROR - 2023-07-13 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-13 01:49:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-13 01:58:11 --> Could not find the language line "Home"
ERROR - 2023-07-13 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-13 02:08:22 --> Could not find the language line "Home"
ERROR - 2023-07-13 02:16:15 --> Could not find the language line "Home"
ERROR - 2023-07-13 02:25:54 --> Could not find the language line "Home"
ERROR - 2023-07-13 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-13 03:00:20 --> Could not find the language line "Home"
ERROR - 2023-07-13 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-13 03:45:01 --> Could not find the language line "Home"
ERROR - 2023-07-13 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-13 04:24:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-13 04:24:21 --> Could not find the language line "Home"
ERROR - 2023-07-13 04:30:20 --> Could not find the language line "Home"
ERROR - 2023-07-13 04:48:45 --> Could not find the language line "Home"
ERROR - 2023-07-13 04:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 04:52:06 --> Could not find the language line "Home"
ERROR - 2023-07-13 04:52:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 04:52:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 04:52:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 04:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 04:59:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-13 05:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-13 05:03:43 --> Could not find the language line "Home"
ERROR - 2023-07-13 05:05:25 --> Could not find the language line "Home"
ERROR - 2023-07-13 05:11:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-13 05:11:36 --> Could not find the language line "Home"
ERROR - 2023-07-13 05:16:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-13 05:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-13 05:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 05:57:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-13 06:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-13 06:02:02 --> Could not find the language line "Home"
ERROR - 2023-07-13 06:06:42 --> Could not find the language line "Home"
ERROR - 2023-07-13 06:10:02 --> Could not find the language line "Home"
ERROR - 2023-07-13 06:19:41 --> Could not find the language line "Home"
ERROR - 2023-07-13 06:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 06:26:33 --> Could not find the language line "Home"
ERROR - 2023-07-13 06:26:33 --> Could not find the language line "Home"
ERROR - 2023-07-13 06:28:52 --> Could not find the language line "Home"
ERROR - 2023-07-13 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-13 06:33:05 --> Could not find the language line "Home"
ERROR - 2023-07-13 06:49:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 06:49:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-13 06:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-13 07:03:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-13 07:03:10 --> Could not find the language line "Home"
ERROR - 2023-07-13 07:04:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 07:04:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-13 07:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 07:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 07:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 07:11:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 07:11:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-13 07:14:12 --> Could not find the language line "Home"
ERROR - 2023-07-13 07:20:04 --> Could not find the language line "Perfume"
ERROR - 2023-07-13 07:21:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-13 07:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-13 07:47:50 --> Could not find the language line "Home"
ERROR - 2023-07-13 07:48:33 --> Could not find the language line "Home"
ERROR - 2023-07-13 08:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-13 08:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:10:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-13 08:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:19:04 --> Could not find the language line "Home"
ERROR - 2023-07-13 08:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-13 08:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:36:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 08:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:37:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 08:37:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-13 08:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:43:11 --> Could not find the language line "Home"
ERROR - 2023-07-13 08:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:45:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 08:45:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 08:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 08:59:15 --> Could not find the language line "Home"
ERROR - 2023-07-13 09:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-13 09:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 09:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 09:01:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 09:01:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-13 09:03:35 --> Could not find the language line "Home"
ERROR - 2023-07-13 09:03:35 --> Could not find the language line "Home"
ERROR - 2023-07-13 09:05:48 --> Could not find the language line "Home"
ERROR - 2023-07-13 09:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 09:07:41 --> Could not find the language line "Home"
ERROR - 2023-07-13 09:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 09:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 09:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 09:16:29 --> Could not find the language line "Home"
ERROR - 2023-07-13 09:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-13 09:30:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 09:32:24 --> 404 Page Not Found: Files/index.php
ERROR - 2023-07-13 09:33:42 --> Could not find the language line "Home"
ERROR - 2023-07-13 09:39:26 --> Could not find the language line "Home"
ERROR - 2023-07-13 09:47:36 --> Could not find the language line "Home"
ERROR - 2023-07-13 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-13 10:05:58 --> Could not find the language line "Home"
ERROR - 2023-07-13 10:05:58 --> Could not find the language line "Home"
ERROR - 2023-07-13 10:05:58 --> Could not find the language line "Home"
ERROR - 2023-07-13 10:05:58 --> Could not find the language line "Home"
ERROR - 2023-07-13 10:05:59 --> Could not find the language line "Home"
ERROR - 2023-07-13 10:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 10:10:03 --> Could not find the language line "Home"
ERROR - 2023-07-13 10:13:18 --> Could not find the language line "Home"
ERROR - 2023-07-13 10:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 10:14:02 --> Could not find the language line "Home"
ERROR - 2023-07-13 10:14:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-13 10:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 10:24:45 --> Could not find the language line "Home"
ERROR - 2023-07-13 10:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 10:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 10:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 10:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 10:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 10:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 10:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 10:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-13 10:31:00 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=70 374 892&amp;text=6929%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-07-13 10:31:43 --> Could not find the language line "Home"
ERROR - 2023-07-13 10:37:26 --> Could not find the language line "Home"
ERROR - 2023-07-13 10:39:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 10:55:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 10:55:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-13 10:56:10 --> Could not find the language line "Home"
ERROR - 2023-07-13 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-13 11:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 11:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 11:14:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 11:18:58 --> Could not find the language line "Home"
ERROR - 2023-07-13 11:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 11:20:03 --> Could not find the language line "Home"
ERROR - 2023-07-13 11:22:38 --> Could not find the language line "Home"
ERROR - 2023-07-13 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-13 11:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 11:38:51 --> Could not find the language line "Other"
ERROR - 2023-07-13 11:39:05 --> Could not find the language line "Home"
ERROR - 2023-07-13 11:39:45 --> Could not find the language line "Home"
ERROR - 2023-07-13 11:47:31 --> Could not find the language line "Home"
ERROR - 2023-07-13 11:47:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-13 11:47:44 --> Could not find the language line "Home"
ERROR - 2023-07-13 11:48:10 --> Could not find the language line "Home"
ERROR - 2023-07-13 11:48:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 11:48:35 --> Could not find the language line "Home"
ERROR - 2023-07-13 11:54:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 11:56:34 --> Could not find the language line "Home"
ERROR - 2023-07-13 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-13 12:01:59 --> Could not find the language line "Home"
ERROR - 2023-07-13 12:03:04 --> Could not find the language line "Home"
ERROR - 2023-07-13 12:05:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 12:07:00 --> Could not find the language line "Home"
ERROR - 2023-07-13 12:17:41 --> Could not find the language line "Home"
ERROR - 2023-07-13 12:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:19:17 --> Could not find the language line "Home"
ERROR - 2023-07-13 12:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:20:57 --> Could not find the language line "Home"
ERROR - 2023-07-13 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-13 12:36:35 --> Could not find the language line "Home"
ERROR - 2023-07-13 12:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:47:19 --> Could not find the language line "Home"
ERROR - 2023-07-13 12:47:19 --> Could not find the language line "Home"
ERROR - 2023-07-13 12:47:27 --> Could not find the language line "Home"
ERROR - 2023-07-13 12:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:48:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-13 12:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 12:53:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 12:53:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-13 12:54:30 --> Could not find the language line "Home"
ERROR - 2023-07-13 12:57:23 --> Could not find the language line "Home"
ERROR - 2023-07-13 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-13 13:03:05 --> Could not find the language line "Home"
ERROR - 2023-07-13 13:03:08 --> Could not find the language line "Home"
ERROR - 2023-07-13 13:03:36 --> Could not find the language line "Home"
ERROR - 2023-07-13 13:04:34 --> Could not find the language line "Home"
ERROR - 2023-07-13 13:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 13:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 13:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 13:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 13:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 13:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 13:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 13:10:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-13 13:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 13:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-13 13:31:11 --> Could not find the language line "Home"
ERROR - 2023-07-13 13:33:20 --> Could not find the language line "Home"
ERROR - 2023-07-13 13:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 13:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 13:45:36 --> Could not find the language line "Bracelets"
ERROR - 2023-07-13 13:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 13:46:11 --> Could not find the language line "Home"
ERROR - 2023-07-13 13:46:12 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 14:06:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-13 14:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 14:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 14:08:54 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:10:40 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:11:33 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:11:43 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:12:11 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:12:26 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:22:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 14:22:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '15'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-13 14:22:58 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-13 14:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:36:11 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:36:12 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:38:57 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:41:04 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:41:35 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 14:44:51 --> Could not find the language line "Home"
ERROR - 2023-07-13 14:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 14:46:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 14:46:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-13 14:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 14:58:32 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:01:12 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:01:12 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:01:16 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:06:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 15:06:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-13 15:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:13:56 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:14:41 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:14:46 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:31:26 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:31:55 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:33:26 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:35:31 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:35:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-13 15:35:51 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:49:18 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:49:55 --> Could not find the language line "Home"
ERROR - 2023-07-13 15:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 15:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-13 16:09:24 --> Could not find the language line "Home"
ERROR - 2023-07-13 16:14:45 --> Could not find the language line "Home"
ERROR - 2023-07-13 16:17:38 --> Could not find the language line "Home"
ERROR - 2023-07-13 16:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 16:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 16:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 16:29:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 16:29:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-13 16:37:02 --> Could not find the language line "Home"
ERROR - 2023-07-13 16:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 16:40:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-13 16:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 16:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 16:41:52 --> Could not find the language line "Home"
ERROR - 2023-07-13 16:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 16:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 16:46:54 --> Could not find the language line "Home"
ERROR - 2023-07-13 16:46:54 --> Could not find the language line "Home"
ERROR - 2023-07-13 16:46:54 --> Could not find the language line "Home"
ERROR - 2023-07-13 16:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:06:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 17:06:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-13 17:06:50 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-13 17:06:50 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-13 17:06:51 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-13 17:06:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-13 17:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:12:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 17:12:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-13 17:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:15:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-13 17:15:47 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:15:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 17:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:16:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 17:16:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 17:16:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 17:16:22 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:16:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-13 17:16:30 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:16:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-13 17:16:40 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:16:42 --> Could not find the language line "Perfume"
ERROR - 2023-07-13 17:16:50 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:19:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-13 17:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:21:24 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:21:52 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:26:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 17:26:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 17:26:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 17:26:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 17:26:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-13 17:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:31:58 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:32:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:32:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:32:54 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:34:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:34:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:35:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:35:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:35:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:35:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:36:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:36:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:37:40 --> Could not find the language line "Perfume"
ERROR - 2023-07-13 17:37:43 --> Could not find the language line "Bracelets"
ERROR - 2023-07-13 17:37:50 --> Could not find the language line "Perfume"
ERROR - 2023-07-13 17:38:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 17:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:38:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 17:38:36 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:38:37 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:38:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:38:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:39:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:39:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:39:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:39:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:40:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:40:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 17:40:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-13 17:40:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-13 17:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:57:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 17:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:58:05 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:58:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 17:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:58:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 17:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:59:00 --> Could not find the language line "Home"
ERROR - 2023-07-13 17:59:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 17:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 17:59:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-13 18:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 18:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 18:12:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 18:12:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-13 18:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 18:28:16 --> Could not find the language line "Home"
ERROR - 2023-07-13 18:28:16 --> Could not find the language line "Home"
ERROR - 2023-07-13 18:28:17 --> Could not find the language line "Home"
ERROR - 2023-07-13 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-13 18:32:42 --> Could not find the language line "Home"
ERROR - 2023-07-13 18:32:59 --> Could not find the language line "Home"
ERROR - 2023-07-13 18:43:28 --> Could not find the language line "Home"
ERROR - 2023-07-13 18:43:28 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:08:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-13 19:08:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-13 19:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:13:22 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:14:19 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:14:25 --> Could not find the language line "Socks"
ERROR - 2023-07-13 19:14:38 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:16:30 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:17:28 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:17:39 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:28:54 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:30:55 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:33:57 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:36:27 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:40:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-13 19:40:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-13 19:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:41:40 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 19:59:26 --> Could not find the language line "Home"
ERROR - 2023-07-13 19:59:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 19:59:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 19:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 20:00:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:00:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:00:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:00:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:01:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:01:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:01:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:01:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:02:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:02:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:02:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:02:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 20:02:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:02:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:03:27 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:03:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-13 20:03:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-13 20:04:13 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:04:17 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:04:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 20:04:30 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:04:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 20:05:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 20:05:49 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:06:05 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:06:10 --> Could not find the language line "Bracelets"
ERROR - 2023-07-13 20:06:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 20:06:22 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:06:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:06:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:06:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 20:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 20:06:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:06:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 20:07:09 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:07:10 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:07:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:07:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-13 20:07:11 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:10:49 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:13:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 20:13:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 20:13:15 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:13:32 --> Could not find the language line "Perfume"
ERROR - 2023-07-13 20:13:59 --> Could not find the language line "Socks"
ERROR - 2023-07-13 20:18:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-13 20:18:18 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:19:47 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:19:59 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:20:08 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:20:44 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:21:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-13 20:21:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-13 20:21:56 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:32:19 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:32:19 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:32:19 --> Could not find the language line "Home"
ERROR - 2023-07-13 20:32:20 --> Could not find the language line "Home"
ERROR - 2023-07-13 21:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-13 21:01:40 --> Could not find the language line "Home"
ERROR - 2023-07-13 21:22:22 --> Could not find the language line "Home"
ERROR - 2023-07-13 21:22:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 21:23:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 21:23:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 21:23:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-13 21:41:57 --> Could not find the language line "Home"
ERROR - 2023-07-13 21:42:07 --> Could not find the language line "Bracelets"
ERROR - 2023-07-13 21:42:23 --> Could not find the language line "Home"
ERROR - 2023-07-13 21:45:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-13 21:46:20 --> Could not find the language line "Socks"
ERROR - 2023-07-13 22:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-13 22:15:29 --> Could not find the language line "Home"
ERROR - 2023-07-13 22:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 22:16:59 --> Could not find the language line "Home"
ERROR - 2023-07-13 22:22:04 --> Could not find the language line "Home"
ERROR - 2023-07-13 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-13 22:40:10 --> Could not find the language line "Home"
ERROR - 2023-07-13 22:58:00 --> Could not find the language line "Home"
ERROR - 2023-07-13 22:58:00 --> Could not find the language line "Home"
ERROR - 2023-07-13 22:58:00 --> Could not find the language line "Home"
ERROR - 2023-07-13 22:58:01 --> Could not find the language line "Home"
ERROR - 2023-07-13 22:58:01 --> Could not find the language line "Home"
ERROR - 2023-07-13 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-13 23:02:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 23:04:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-13 23:30:19 --> Could not find the language line "Home"
ERROR - 2023-07-13 23:33:53 --> Could not find the language line "Home"
ERROR - 2023-07-13 23:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 23:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 23:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 23:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-13 23:37:02 --> Could not find the language line "Perfume"
ERROR - 2023-07-13 23:37:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-13 23:37:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-13 23:39:12 --> Could not find the language line "Home"
