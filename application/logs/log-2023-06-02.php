<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-02 00:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-02 00:30:01 --> Could not find the language line "Home"
ERROR - 2023-06-02 00:30:02 --> Could not find the language line "Home"
ERROR - 2023-06-02 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-02 00:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-02 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-02 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-02 01:39:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 02:24:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 02:41:09 --> Could not find the language line "Home"
ERROR - 2023-06-02 02:41:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 02:41:21 --> 404 Page Not Found: Asset-manifestjson/index
ERROR - 2023-06-02 02:46:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-02 03:22:04 --> Could not find the language line "Home"
ERROR - 2023-06-02 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-02 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-02 04:17:29 --> Could not find the language line "Home"
ERROR - 2023-06-02 04:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 04:18:10 --> Could not find the language line "Home"
ERROR - 2023-06-02 04:30:18 --> Could not find the language line "Home"
ERROR - 2023-06-02 04:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 05:04:38 --> Could not find the language line "Home"
ERROR - 2023-06-02 05:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-02 05:42:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-02 05:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 05:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 05:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 05:49:55 --> Could not find the language line "Home"
ERROR - 2023-06-02 05:50:22 --> Could not find the language line "Home"
ERROR - 2023-06-02 05:50:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 05:54:13 --> Could not find the language line "Home"
ERROR - 2023-06-02 05:54:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 05:55:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 05:55:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 05:56:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 05:56:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 05:56:49 --> Could not find the language line "Home"
ERROR - 2023-06-02 05:57:49 --> Could not find the language line "Home"
ERROR - 2023-06-02 05:58:32 --> Could not find the language line "Home"
ERROR - 2023-06-02 05:58:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-02 05:59:27 --> Could not find the language line "Home"
ERROR - 2023-06-02 05:59:31 --> Could not find the language line "Perfume"
ERROR - 2023-06-02 06:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-02 06:13:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-02 06:26:06 --> Could not find the language line "Other"
ERROR - 2023-06-02 06:26:34 --> Could not find the language line "Home"
ERROR - 2023-06-02 06:26:52 --> Could not find the language line "Home"
ERROR - 2023-06-02 06:27:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 06:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 06:28:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 06:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 06:28:46 --> Could not find the language line "Home"
ERROR - 2023-06-02 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 06:35:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 06:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 06:36:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 06:36:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 06:36:19 --> Could not find the language line "Home"
ERROR - 2023-06-02 06:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 06:52:44 --> Could not find the language line "Home"
ERROR - 2023-06-02 06:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 06:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 06:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 06:55:20 --> Could not find the language line "Home"
ERROR - 2023-06-02 06:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 07:04:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 07:04:57 --> Could not find the language line "Home"
ERROR - 2023-06-02 07:05:30 --> Could not find the language line "Home"
ERROR - 2023-06-02 07:08:35 --> Could not find the language line "Home"
ERROR - 2023-06-02 07:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:27:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-02 07:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-02 07:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:37:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 07:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:39:26 --> Could not find the language line "Home"
ERROR - 2023-06-02 07:39:27 --> Could not find the language line "Home"
ERROR - 2023-06-02 07:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:41:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 07:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 07:57:25 --> Could not find the language line "Home"
ERROR - 2023-06-02 07:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-02 08:04:24 --> Could not find the language line "Home"
ERROR - 2023-06-02 08:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:13:05 --> Could not find the language line "Home"
ERROR - 2023-06-02 08:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:18:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 08:18:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 08:18:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 08:18:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 08:18:38 --> Could not find the language line "Home"
ERROR - 2023-06-02 08:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:26:15 --> Could not find the language line "Home"
ERROR - 2023-06-02 08:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:28:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-02 08:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 08:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:40:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 08:42:00 --> Could not find the language line "Home"
ERROR - 2023-06-02 08:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:53:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 08:54:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 08:54:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 08:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 08:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 09:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 09:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 09:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 09:16:54 --> Could not find the language line "Home"
ERROR - 2023-06-02 09:18:57 --> Could not find the language line "Home"
ERROR - 2023-06-02 09:19:00 --> Could not find the language line "Home"
ERROR - 2023-06-02 09:19:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 09:19:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 09:20:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-02 09:21:51 --> Could not find the language line "Home"
ERROR - 2023-06-02 09:21:51 --> Could not find the language line "Home"
ERROR - 2023-06-02 09:24:02 --> Could not find the language line "Home"
ERROR - 2023-06-02 09:24:03 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-02 09:24:04 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2023-06-02 09:24:05 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2023-06-02 09:24:06 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2023-06-02 09:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 09:28:15 --> Could not find the language line "Home"
ERROR - 2023-06-02 09:28:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-02 09:28:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-02 09:28:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-02 09:28:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-02 09:28:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-02 09:28:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-02 09:28:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-02 09:28:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-02 09:28:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-02 09:28:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-02 09:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 09:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 09:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 09:37:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-02 09:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 09:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 09:38:47 --> Could not find the language line "Home"
ERROR - 2023-06-02 09:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 09:41:40 --> Could not find the language line "Home"
ERROR - 2023-06-02 09:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 09:49:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 09:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 09:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 09:55:16 --> Could not find the language line "Home"
ERROR - 2023-06-02 09:57:22 --> Could not find the language line "Home"
ERROR - 2023-06-02 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 10:02:15 --> Could not find the language line "Home"
ERROR - 2023-06-02 10:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 10:17:46 --> Could not find the language line "Home"
ERROR - 2023-06-02 10:18:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-02 10:18:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '8'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-02 10:18:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-02 10:18:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '8'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-02 10:18:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-02 10:18:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '8'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-02 10:18:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-02 10:18:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '8'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-02 10:18:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-02 10:18:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '8'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-02 10:18:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-02 10:18:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '8'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-02 10:18:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-02 10:18:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '8'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-02 10:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 10:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 10:20:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 10:20:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 10:20:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 10:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 10:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 10:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 10:40:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 10:41:03 --> Could not find the language line "Home"
ERROR - 2023-06-02 10:41:09 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-02 10:41:09 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-02 10:41:09 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-02 10:41:09 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-02 10:45:19 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-02 10:45:19 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-02 10:45:20 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-02 10:45:20 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-02 10:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 10:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 10:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-02 11:03:06 --> Could not find the language line "Home"
ERROR - 2023-06-02 11:03:41 --> Could not find the language line "Home"
ERROR - 2023-06-02 11:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 11:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 11:17:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 11:23:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-02 11:23:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-02 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 11:40:21 --> Could not find the language line "Home"
ERROR - 2023-06-02 11:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 11:55:17 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-02 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 12:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:02:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:02:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:02:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:02:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-02 12:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:08:47 --> Could not find the language line "Home"
ERROR - 2023-06-02 12:08:47 --> Could not find the language line "Home"
ERROR - 2023-06-02 12:08:47 --> Could not find the language line "Home"
ERROR - 2023-06-02 12:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:13:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 12:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:16:55 --> Could not find the language line "Home"
ERROR - 2023-06-02 12:18:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 12:18:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 12:18:14 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-06-02 12:18:45 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-06-02 12:19:16 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-06-02 12:19:46 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-06-02 12:20:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 12:20:18 --> Could not find the language line "Home"
ERROR - 2023-06-02 12:25:33 --> Could not find the language line "Disclaimer"
ERROR - 2023-06-02 12:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:26:35 --> Could not find the language line "Home"
ERROR - 2023-06-02 12:26:48 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-06-02 12:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:27:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-02 12:28:36 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-06-02 12:28:43 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 12:29:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:29:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 12:30:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:30:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:31:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:31:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:32:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:36:06 --> Could not find the language line "Other"
ERROR - 2023-06-02 12:36:37 --> Could not find the language line "Other"
ERROR - 2023-06-02 12:37:08 --> Could not find the language line "Other"
ERROR - 2023-06-02 12:37:43 --> Could not find the language line "Other"
ERROR - 2023-06-02 12:38:14 --> Could not find the language line "Perfume"
ERROR - 2023-06-02 12:40:53 --> Could not find the language line "Socks"
ERROR - 2023-06-02 12:41:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-02 12:42:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:43:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:43:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:43:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:46:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-02 12:46:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-02 12:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:51:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:51:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 12:53:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 12:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 12:57:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-02 13:07:00 --> Could not find the language line "Gift_card"
ERROR - 2023-06-02 13:07:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 13:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 13:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 13:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 13:29:26 --> Could not find the language line "Home"
ERROR - 2023-06-02 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 13:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 13:41:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-02 13:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 13:42:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 13:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 13:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 13:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 13:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 13:48:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 13:48:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 13:48:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 13:48:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 13:48:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 13:48:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 13:48:15 --> Could not find the language line "Home"
ERROR - 2023-06-02 13:58:00 --> Could not find the language line "Home"
ERROR - 2023-06-02 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-02 14:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:24:34 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 14:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-02 14:32:08 --> Could not find the language line "Home"
ERROR - 2023-06-02 14:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:38:32 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 14:38:50 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 14:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:39:41 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 14:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:40:41 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 14:40:45 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 14:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:46:17 --> Could not find the language line "Home"
ERROR - 2023-06-02 14:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:47:31 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 14:47:41 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 14:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:53:38 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-02 14:53:38 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-02 14:53:41 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-02 14:53:42 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-02 14:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 14:58:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 14:58:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 15:00:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:01:08 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 15:01:13 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 15:01:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:01:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:01:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:02:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 15:02:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:02:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:02:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:02:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 15:03:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 15:03:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:03:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:03:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:03:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:03:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:03:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 15:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 15:08:13 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 15:08:24 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 15:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 15:10:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 15:11:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 15:14:24 --> Could not find the language line "Home"
ERROR - 2023-06-02 15:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 15:24:02 --> Could not find the language line "Home"
ERROR - 2023-06-02 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-02 15:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 15:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 15:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 15:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 15:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 15:59:38 --> Could not find the language line "Home"
ERROR - 2023-06-02 15:59:40 --> Could not find the language line "Home"
ERROR - 2023-06-02 15:59:41 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:07:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 16:07:36 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:16:42 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-02 16:19:28 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:19:40 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:19:59 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:20:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:24:01 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:55:21 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:55:21 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:55:21 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:55:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-02 16:55:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-02 16:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 16:56:09 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:56:49 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:57:26 --> Could not find the language line "Home"
ERROR - 2023-06-02 16:58:03 --> Could not find the language line "Home"
ERROR - 2023-06-02 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 17:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 17:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 17:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 17:10:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 17:21:42 --> Could not find the language line "Home"
ERROR - 2023-06-02 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-02 17:36:35 --> Could not find the language line "Home"
ERROR - 2023-06-02 17:52:46 --> Could not find the language line "Home"
ERROR - 2023-06-02 17:52:53 --> Could not find the language line "Home"
ERROR - 2023-06-02 17:55:38 --> Could not find the language line "Home"
ERROR - 2023-06-02 17:55:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-02 17:56:02 --> Could not find the language line "Home"
ERROR - 2023-06-02 17:56:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-02 17:56:33 --> Could not find the language line "Home"
ERROR - 2023-06-02 17:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 17:56:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 17:57:17 --> Could not find the language line "Home"
ERROR - 2023-06-02 17:57:21 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 17:57:44 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 17:58:04 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 17:58:05 --> Could not find the language line "Home"
ERROR - 2023-06-02 17:58:10 --> Could not find the language line "Home"
ERROR - 2023-06-02 17:58:18 --> Could not find the language line "Perfume"
ERROR - 2023-06-02 17:59:55 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:01:28 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 18:02:26 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 18:03:19 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 18:04:24 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:04:51 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 18:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 18:06:40 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 18:07:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:07:31 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:22:57 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 18:23:36 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 18:24:37 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:26:57 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:26:57 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:26:57 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:27:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 18:27:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 18:27:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 18:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 18:28:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 18:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:52:31 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:52:32 --> Could not find the language line "Home"
ERROR - 2023-06-02 18:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-02 19:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 19:04:19 --> Could not find the language line "Home"
ERROR - 2023-06-02 19:11:47 --> Could not find the language line "Home"
ERROR - 2023-06-02 19:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 19:16:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-02 19:28:27 --> Could not find the language line "Home"
ERROR - 2023-06-02 19:28:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 19:28:53 --> Could not find the language line "Home"
ERROR - 2023-06-02 19:28:55 --> Could not find the language line "Home"
ERROR - 2023-06-02 19:28:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 19:28:57 --> Could not find the language line "Home"
ERROR - 2023-06-02 19:28:58 --> Could not find the language line "Home"
ERROR - 2023-06-02 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 19:34:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 19:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 19:35:21 --> Could not find the language line "Home"
ERROR - 2023-06-02 19:35:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 19:36:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 19:37:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 19:42:01 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 19:42:09 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 19:42:13 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 19:42:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-02 19:43:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-02 19:43:43 --> Could not find the language line "Home"
ERROR - 2023-06-02 19:53:49 --> Could not find the language line "Home"
ERROR - 2023-06-02 19:53:49 --> Could not find the language line "Home"
ERROR - 2023-06-02 19:53:49 --> Could not find the language line "Home"
ERROR - 2023-06-02 20:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-02 20:17:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-02 20:20:40 --> Could not find the language line "Home"
ERROR - 2023-06-02 20:25:55 --> Could not find the language line "Home"
ERROR - 2023-06-02 20:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 20:27:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-02 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-02 20:40:38 --> Could not find the language line "Home"
ERROR - 2023-06-02 20:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 20:44:40 --> Could not find the language line "Home"
ERROR - 2023-06-02 20:46:54 --> Could not find the language line "Home"
ERROR - 2023-06-02 20:55:53 --> Could not find the language line "Home"
ERROR - 2023-06-02 21:00:22 --> Could not find the language line "Home"
ERROR - 2023-06-02 21:02:43 --> 404 Page Not Found: Admin/fileupload
ERROR - 2023-06-02 21:21:05 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-02 21:21:06 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-02 21:21:06 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-02 21:23:42 --> Could not find the language line "Home"
ERROR - 2023-06-02 21:27:33 --> Could not find the language line "Home"
ERROR - 2023-06-02 21:49:21 --> Could not find the language line "Home"
ERROR - 2023-06-02 22:11:28 --> Could not find the language line "Home"
ERROR - 2023-06-02 22:11:34 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 22:11:49 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 22:11:57 --> Could not find the language line "Bracelets"
ERROR - 2023-06-02 22:11:59 --> Could not find the language line "Home"
ERROR - 2023-06-02 22:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 22:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 22:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 22:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 22:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 22:14:41 --> Could not find the language line "Home"
ERROR - 2023-06-02 22:19:12 --> Could not find the language line "Home"
ERROR - 2023-06-02 22:29:08 --> Could not find the language line "Home"
ERROR - 2023-06-02 22:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-02 22:49:11 --> Could not find the language line "Home"
ERROR - 2023-06-02 22:59:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-02 23:02:45 --> Could not find the language line "Home"
ERROR - 2023-06-02 23:02:53 --> Could not find the language line "Home"
ERROR - 2023-06-02 23:05:10 --> Could not find the language line "Home"
ERROR - 2023-06-02 23:19:14 --> Could not find the language line "Home"
ERROR - 2023-06-02 23:49:13 --> Could not find the language line "Home"
