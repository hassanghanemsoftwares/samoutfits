<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-22 00:25:56 --> Could not find the language line "Home"
ERROR - 2023-10-22 00:26:46 --> Could not find the language line "Home"
ERROR - 2023-10-22 00:27:03 --> Could not find the language line "Home"
ERROR - 2023-10-22 00:31:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 00:32:56 --> Could not find the language line "Home"
ERROR - 2023-10-22 00:33:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-22 00:33:34 --> Could not find the language line "Home"
ERROR - 2023-10-22 00:33:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 00:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 00:34:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 00:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 00:34:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 00:35:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 00:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 00:36:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 00:36:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 00:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 00:37:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 00:37:39 --> Could not find the language line "Home"
ERROR - 2023-10-22 01:02:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 01:14:53 --> Could not find the language line "Home"
ERROR - 2023-10-22 01:14:53 --> Could not find the language line "Home"
ERROR - 2023-10-22 01:14:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 01:15:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 01:15:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 01:25:34 --> Could not find the language line "Home"
ERROR - 2023-10-22 01:36:01 --> Could not find the language line "Home"
ERROR - 2023-10-22 01:36:01 --> Could not find the language line "Home"
ERROR - 2023-10-22 01:49:03 --> Could not find the language line "Home"
ERROR - 2023-10-22 01:53:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-22 02:32:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 02:32:58 --> Could not find the language line "Home"
ERROR - 2023-10-22 02:45:10 --> Could not find the language line "Home"
ERROR - 2023-10-22 02:45:10 --> 404 Page Not Found: Wp-json/tdw
ERROR - 2023-10-22 02:50:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 02:50:47 --> Could not find the language line "Home"
ERROR - 2023-10-22 02:55:34 --> Could not find the language line "Home"
ERROR - 2023-10-22 03:24:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 03:24:40 --> Could not find the language line "Home"
ERROR - 2023-10-22 03:54:31 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-10-22 04:18:36 --> Could not find the language line "Home"
ERROR - 2023-10-22 04:21:06 --> Could not find the language line "Home"
ERROR - 2023-10-22 04:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 05:00:16 --> Could not find the language line "Home"
ERROR - 2023-10-22 05:07:13 --> Could not find the language line "Home"
ERROR - 2023-10-22 05:08:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 05:18:04 --> Could not find the language line "Home"
ERROR - 2023-10-22 05:24:03 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-22 05:29:34 --> Could not find the language line "Home"
ERROR - 2023-10-22 05:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 05:35:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-22 05:37:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 05:37:43 --> Could not find the language line "Home"
ERROR - 2023-10-22 05:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 05:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 05:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 05:40:12 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-10-22 05:40:14 --> Could not find the language line "Home"
ERROR - 2023-10-22 05:40:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 05:40:16 --> 404 Page Not Found: Wp-cronphp/index
ERROR - 2023-10-22 05:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 05:41:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-22 05:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 05:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 05:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 05:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 05:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 05:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 05:43:43 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-10-22 05:43:45 --> 404 Page Not Found: Wp-cronphp/index
ERROR - 2023-10-22 05:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 05:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 05:50:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 05:50:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 05:50:36 --> Could not find the language line "Bracelets"
ERROR - 2023-10-22 05:50:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 05:50:37 --> Could not find the language line "Other"
ERROR - 2023-10-22 05:50:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 05:50:39 --> Could not find the language line "Home"
ERROR - 2023-10-22 05:50:41 --> Could not find the language line "Disclaimer"
ERROR - 2023-10-22 05:50:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 05:50:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 05:50:46 --> Could not find the language line "Home"
ERROR - 2023-10-22 05:50:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 05:55:28 --> Could not find the language line "Home"
ERROR - 2023-10-22 05:58:24 --> Could not find the language line "Home"
ERROR - 2023-10-22 05:59:40 --> Could not find the language line "Home"
ERROR - 2023-10-22 06:04:34 --> Could not find the language line "Home"
ERROR - 2023-10-22 06:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 06:17:44 --> 404 Page Not Found: Wp-panophp/index
ERROR - 2023-10-22 06:22:21 --> Could not find the language line "Home"
ERROR - 2023-10-22 06:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 06:28:29 --> Could not find the language line "Home"
ERROR - 2023-10-22 06:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 06:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 06:34:13 --> Could not find the language line "Home"
ERROR - 2023-10-22 06:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 06:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 06:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 06:36:46 --> Could not find the language line "Home"
ERROR - 2023-10-22 06:38:33 --> Could not find the language line "Home"
ERROR - 2023-10-22 06:40:24 --> Could not find the language line "Home"
ERROR - 2023-10-22 06:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 06:41:57 --> Could not find the language line "Home"
ERROR - 2023-10-22 06:42:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 06:42:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-22 06:42:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 06:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 06:44:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 06:44:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 06:44:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 06:45:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 06:45:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 06:45:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 06:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 06:45:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 06:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 06:46:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 06:46:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 06:46:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 06:46:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 06:47:30 --> Could not find the language line "Home"
ERROR - 2023-10-22 06:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 06:52:40 --> Could not find the language line "Home"
ERROR - 2023-10-22 06:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 06:53:14 --> Could not find the language line "Home"
ERROR - 2023-10-22 06:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 06:54:26 --> Could not find the language line "Home"
ERROR - 2023-10-22 06:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:12:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 07:12:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 07:12:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 07:13:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 07:13:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 07:13:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 07:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:16:32 --> Could not find the language line "Home"
ERROR - 2023-10-22 07:16:35 --> Could not find the language line "Home"
ERROR - 2023-10-22 07:17:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 07:17:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 07:17:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 07:17:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 07:17:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 07:17:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 07:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:24:40 --> Could not find the language line "Home"
ERROR - 2023-10-22 07:24:40 --> Could not find the language line "Home"
ERROR - 2023-10-22 07:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:27:04 --> Could not find the language line "Home"
ERROR - 2023-10-22 07:28:05 --> Could not find the language line "products"
ERROR - 2023-10-22 07:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:31:29 --> Could not find the language line "Home"
ERROR - 2023-10-22 07:31:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 07:32:22 --> Could not find the language line "Home"
ERROR - 2023-10-22 07:32:33 --> Could not find the language line "Socks"
ERROR - 2023-10-22 07:32:53 --> Could not find the language line "Socks"
ERROR - 2023-10-22 07:32:58 --> Could not find the language line "Home"
ERROR - 2023-10-22 07:33:02 --> Could not find the language line "Perfume"
ERROR - 2023-10-22 07:33:13 --> Could not find the language line "Home"
ERROR - 2023-10-22 07:33:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-22 07:33:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-22 07:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 07:56:25 --> Could not find the language line "Home"
ERROR - 2023-10-22 08:04:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 08:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:12:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 08:12:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 08:12:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 08:13:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 08:13:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 08:13:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 08:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:32:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 08:32:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-22 08:32:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 08:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:38:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 08:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:38:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 08:38:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 08:38:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 08:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:40:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 08:40:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-22 08:40:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 08:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:51:43 --> Could not find the language line "Home"
ERROR - 2023-10-22 08:51:51 --> Could not find the language line "Home"
ERROR - 2023-10-22 08:52:06 --> Could not find the language line "Home"
ERROR - 2023-10-22 08:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 08:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:00:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 09:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:03:16 --> Could not find the language line "Home"
ERROR - 2023-10-22 09:03:58 --> Could not find the language line "Home"
ERROR - 2023-10-22 09:04:38 --> Could not find the language line "Home"
ERROR - 2023-10-22 09:06:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 09:06:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 09:06:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 09:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:08:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 09:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:09:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 09:09:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 09:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:22:17 --> Could not find the language line "Home"
ERROR - 2023-10-22 09:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:23:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 09:23:05 --> Could not find the language line "Home"
ERROR - 2023-10-22 09:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:27:43 --> Could not find the language line "Home"
ERROR - 2023-10-22 09:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:30:37 --> Could not find the language line "Home"
ERROR - 2023-10-22 09:30:37 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-10-22 09:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:33:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 09:33:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Casual')
AND `items`.`price` <= '27'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 09:33:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 09:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:34:37 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-22 09:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:34:53 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-22 09:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:35:06 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-22 09:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:47:25 --> Could not find the language line "Home"
ERROR - 2023-10-22 09:47:25 --> Could not find the language line "Home"
ERROR - 2023-10-22 09:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 09:51:10 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:03:37 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-22 10:04:25 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:07:38 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:07:43 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:09:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 10:09:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Boots')
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 10:09:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 10:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:13:01 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:15:22 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:15:59 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:19:30 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:22:50 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-10-22 10:23:07 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:24:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-22 10:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:34:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-22 10:35:33 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:40:13 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:41:15 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:41:21 --> Could not find the language line "Bracelets"
ERROR - 2023-10-22 10:41:40 --> Could not find the language line "Bracelets"
ERROR - 2023-10-22 10:41:52 --> Could not find the language line "Bracelets"
ERROR - 2023-10-22 10:41:56 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:45:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:45:12 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:45:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:46:49 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:47:55 --> Could not find the language line "Home"
ERROR - 2023-10-22 10:48:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:48:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:49:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:49:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:49:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:49:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:49:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:50:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:50:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:51:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:51:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:51:55 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-22 10:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:52:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:53:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:53:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:53:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:53:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:53:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:53:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 10:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 10:59:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:00:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:00:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:00:50 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:01:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:01:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:01:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:01:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:01:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:02:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:02:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:03:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:03:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:03:35 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:03:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:04:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:04:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:04:16 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:04:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:05:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:05:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:05:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:05:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:05:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 11:05:56 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:07:23 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:09:36 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:10:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-22 11:15:13 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:15:33 --> Could not find the language line "Socks"
ERROR - 2023-10-22 11:15:40 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:15:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 11:15:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 11:15:48 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:15:56 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:17:02 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:28:49 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:36:01 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:36:20 --> Could not find the language line "Perfume"
ERROR - 2023-10-22 11:36:35 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:37:18 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:42:21 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:49:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 11:51:51 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 11:52:51 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:56:27 --> Could not find the language line "Home"
ERROR - 2023-10-22 11:59:13 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:11:17 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:13:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-22 12:14:08 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:14:08 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:14:08 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:26:34 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:26:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:26:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:27:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:27:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:28:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:28:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:28:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:28:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:28:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:28:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:28:43 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:31:01 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:33:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:33:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:33:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 12:33:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 12:33:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 12:33:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 12:33:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 15 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '21'
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 12:33:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 12:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:34:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-22 12:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:35:25 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:35:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:35:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:36:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:36:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:36:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:36:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:36:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:36:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:36:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:36:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:37:14 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:37:31 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:37:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:37:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:37:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:37:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:38:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:38:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:38:23 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:38:28 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:38:32 --> Could not find the language line "Socks"
ERROR - 2023-10-22 12:38:43 --> Could not find the language line "Socks"
ERROR - 2023-10-22 12:39:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:39:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:39:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:39:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:39:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:39:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:39:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:39:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-22 12:39:11 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:39:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-22 12:39:24 --> Could not find the language line "Socks"
ERROR - 2023-10-22 12:39:26 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:39:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-22 12:39:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-22 12:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:40:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-22 12:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 12:52:50 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:53:18 --> Could not find the language line "Home"
ERROR - 2023-10-22 12:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-10-22 13:00:34 --> Could not find the language line "Home"
ERROR - 2023-10-22 13:19:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 13:19:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 13:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 13:32:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-22 13:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 13:37:05 --> Could not find the language line "Home"
ERROR - 2023-10-22 13:37:42 --> Could not find the language line "Home"
ERROR - 2023-10-22 13:37:46 --> Could not find the language line "Bracelets"
ERROR - 2023-10-22 13:37:56 --> Could not find the language line "Home"
ERROR - 2023-10-22 13:38:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-22 13:38:42 --> Could not find the language line "Home"
ERROR - 2023-10-22 13:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 13:45:01 --> Could not find the language line "Home"
ERROR - 2023-10-22 13:45:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 13:45:46 --> Could not find the language line "Home"
ERROR - 2023-10-22 13:46:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 13:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 13:46:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 13:47:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 13:47:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 13:48:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 13:48:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 13:48:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 13:48:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 13:56:48 --> Could not find the language line "Home"
ERROR - 2023-10-22 13:57:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-22 14:00:25 --> Could not find the language line "Home"
ERROR - 2023-10-22 14:01:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 14:01:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '13'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 14:01:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 14:07:35 --> Could not find the language line "Home"
ERROR - 2023-10-22 14:10:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 14:10:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 14:10:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 14:10:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 14:10:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 14:10:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Unisex')
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 14:10:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 14:10:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Unisex')
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 14:10:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 14:10:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Unisex')
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 14:10:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Unisex')
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 14:10:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 14:10:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 14:10:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Unisex')
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 14:10:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 14:10:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 14:10:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Unisex')
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 14:10:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 14:10:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 14:10:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 14:10:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 14:10:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-22 14:10:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Unisex')
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 14:10:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Unisex')
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 14:10:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 14:10:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 14:10:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Unisex')
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 14:10:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Unisex')
AND `items`.`price` <= '15'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-22 14:10:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 14:10:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-22 14:12:40 --> Could not find the language line "Home"
ERROR - 2023-10-22 14:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:13:31 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-22 14:16:33 --> Could not find the language line "Home"
ERROR - 2023-10-22 14:18:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-22 14:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:21:08 --> Could not find the language line "Home"
ERROR - 2023-10-22 14:22:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-22 14:24:38 --> Could not find the language line "Home"
ERROR - 2023-10-22 14:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:27:32 --> Could not find the language line "Other"
ERROR - 2023-10-22 14:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 14:46:28 --> Could not find the language line "Home"
ERROR - 2023-10-22 14:51:07 --> Could not find the language line "Home"
ERROR - 2023-10-22 14:54:00 --> Could not find the language line "Home"
ERROR - 2023-10-22 14:55:50 --> Could not find the language line "Home"
ERROR - 2023-10-22 15:05:23 --> Could not find the language line "Home"
ERROR - 2023-10-22 15:07:27 --> Could not find the language line "Home"
ERROR - 2023-10-22 15:09:41 --> Could not find the language line "Home"
ERROR - 2023-10-22 15:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 15:10:33 --> Could not find the language line "Home"
ERROR - 2023-10-22 15:11:01 --> Could not find the language line "Home"
ERROR - 2023-10-22 15:11:58 --> Could not find the language line "Home"
ERROR - 2023-10-22 15:18:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-22 15:22:16 --> Could not find the language line "Home"
ERROR - 2023-10-22 15:24:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 15:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 15:30:00 --> Could not find the language line "Home"
ERROR - 2023-10-22 15:31:25 --> Could not find the language line "Home"
ERROR - 2023-10-22 15:31:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 15:31:59 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-22 15:34:39 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-22 15:38:38 --> Could not find the language line "Home"
ERROR - 2023-10-22 15:45:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 15:45:48 --> Could not find the language line "Home"
ERROR - 2023-10-22 15:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 15:50:41 --> Could not find the language line "Home"
ERROR - 2023-10-22 15:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:03:36 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:06:10 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:12:24 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:14:41 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:15:02 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:15:11 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:16:34 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:17:11 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:17:52 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:18:35 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:19:22 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:20:19 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:20:37 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:21:21 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:21:36 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:22:35 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:23:04 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:23:11 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:23:44 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:25:10 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:25:17 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:28:32 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:29:08 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:30:22 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:32:10 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:32:18 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:32:39 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:36:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 16:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:41:05 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:41:06 --> 404 Page Not Found: Api-docs/index
ERROR - 2023-10-22 16:41:06 --> 404 Page Not Found: V1/api-docs
ERROR - 2023-10-22 16:41:06 --> 404 Page Not Found: V2/api-docs
ERROR - 2023-10-22 16:41:06 --> 404 Page Not Found: Api/v2
ERROR - 2023-10-22 16:41:06 --> 404 Page Not Found: Api/v1
ERROR - 2023-10-22 16:41:06 --> 404 Page Not Found: V3/api-docs
ERROR - 2023-10-22 16:41:06 --> 404 Page Not Found: Api/v3
ERROR - 2023-10-22 16:41:06 --> 404 Page Not Found: Swagger/api
ERROR - 2023-10-22 16:41:06 --> 404 Page Not Found: Swaggerjson/index
ERROR - 2023-10-22 16:41:06 --> 404 Page Not Found: Swaggeryaml/index
ERROR - 2023-10-22 16:41:06 --> 404 Page Not Found: Openapijson/index
ERROR - 2023-10-22 16:41:06 --> 404 Page Not Found: Openapiyaml/index
ERROR - 2023-10-22 16:41:06 --> 404 Page Not Found: Api-docsyaml/index
ERROR - 2023-10-22 16:41:07 --> 404 Page Not Found: Swagger-ui/index
ERROR - 2023-10-22 16:41:07 --> 404 Page Not Found: Swagger/v1
ERROR - 2023-10-22 16:41:07 --> 404 Page Not Found: V1/swagger.json
ERROR - 2023-10-22 16:41:07 --> 404 Page Not Found: V2/swagger.json
ERROR - 2023-10-22 16:41:07 --> 404 Page Not Found: Docs/swagger.json
ERROR - 2023-10-22 16:41:07 --> 404 Page Not Found: Swagger/v2
ERROR - 2023-10-22 16:41:07 --> 404 Page Not Found: Swagger/v3
ERROR - 2023-10-22 16:45:12 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 16:47:49 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-22 16:48:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 16:48:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 16:48:13 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:49:16 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:50:32 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:50:32 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:54:13 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:54:26 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:54:29 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:54:46 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:55:23 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:57:12 --> Could not find the language line "Home"
ERROR - 2023-10-22 16:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 17:02:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 17:02:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 17:02:46 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 17:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 17:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 17:19:04 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 17:27:47 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:29:02 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:29:05 --> Could not find the language line "Bracelets"
ERROR - 2023-10-22 17:29:55 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:31:58 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:38:48 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:40:55 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:41:39 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:43:30 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:43:30 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 17:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 17:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 17:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 17:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 17:49:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-22 17:50:09 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:50:51 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:53:23 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:53:45 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:53:46 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-10-22 17:53:46 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-22 17:53:46 --> Could not find the language line "Home"
ERROR - 2023-10-22 17:53:47 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-10-22 17:53:47 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-10-22 17:53:47 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-10-22 17:53:47 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-10-22 17:53:47 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-10-22 17:53:47 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-10-22 17:53:48 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-10-22 17:53:48 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-10-22 17:53:48 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-10-22 17:53:48 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-10-22 17:53:48 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-10-22 17:53:48 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-10-22 17:53:48 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-10-22 17:53:49 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-10-22 17:53:49 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-10-22 17:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 17:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 18:06:47 --> Could not find the language line "Home"
ERROR - 2023-10-22 18:27:49 --> Could not find the language line "Home"
ERROR - 2023-10-22 18:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 18:28:56 --> Could not find the language line "Home"
ERROR - 2023-10-22 18:29:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 18:29:28 --> Could not find the language line "Home"
ERROR - 2023-10-22 18:30:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 18:30:30 --> Could not find the language line "Home"
ERROR - 2023-10-22 18:35:15 --> Could not find the language line "Home"
ERROR - 2023-10-22 18:35:23 --> Could not find the language line "Bracelets"
ERROR - 2023-10-22 18:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 18:36:36 --> Could not find the language line "Bracelets"
ERROR - 2023-10-22 18:36:42 --> Could not find the language line "Bracelets"
ERROR - 2023-10-22 18:37:23 --> Could not find the language line "Bracelets"
ERROR - 2023-10-22 18:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 18:37:35 --> Could not find the language line "Bracelets"
ERROR - 2023-10-22 18:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 18:38:02 --> Could not find the language line "Bracelets"
ERROR - 2023-10-22 18:41:13 --> Could not find the language line "Home"
ERROR - 2023-10-22 18:48:21 --> Could not find the language line "Home"
ERROR - 2023-10-22 18:50:31 --> Could not find the language line "Home"
ERROR - 2023-10-22 18:50:37 --> Could not find the language line "Home"
ERROR - 2023-10-22 18:50:41 --> Could not find the language line "Home"
ERROR - 2023-10-22 18:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 18:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 18:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 18:51:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-22 18:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 18:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 18:52:27 --> Could not find the language line "Home"
ERROR - 2023-10-22 18:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 18:55:46 --> Could not find the language line "Home"
ERROR - 2023-10-22 19:09:38 --> Could not find the language line "Home"
ERROR - 2023-10-22 19:10:24 --> Could not find the language line "Home"
ERROR - 2023-10-22 19:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 19:17:07 --> Could not find the language line "Home"
ERROR - 2023-10-22 19:24:25 --> Could not find the language line "Home"
ERROR - 2023-10-22 19:24:25 --> Could not find the language line "Home"
ERROR - 2023-10-22 19:24:26 --> Could not find the language line "Home"
ERROR - 2023-10-22 19:27:08 --> Could not find the language line "Home"
ERROR - 2023-10-22 19:43:35 --> Could not find the language line "Socks"
ERROR - 2023-10-22 19:46:26 --> Could not find the language line "Home"
ERROR - 2023-10-22 19:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 19:57:18 --> Could not find the language line "Home"
ERROR - 2023-10-22 20:03:50 --> Could not find the language line "Home"
ERROR - 2023-10-22 20:06:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 20:06:41 --> Could not find the language line "Home"
ERROR - 2023-10-22 20:07:13 --> Could not find the language line "Home"
ERROR - 2023-10-22 20:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 20:10:16 --> Could not find the language line "Home"
ERROR - 2023-10-22 20:15:36 --> Could not find the language line "Home"
ERROR - 2023-10-22 20:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 20:27:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-22 20:31:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-22 20:43:01 --> Could not find the language line "Home"
ERROR - 2023-10-22 20:49:24 --> Could not find the language line "Home"
ERROR - 2023-10-22 20:54:23 --> Could not find the language line "Home"
ERROR - 2023-10-22 21:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 21:14:40 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-22 21:20:29 --> 404 Page Not Found: Cms/.git
ERROR - 2023-10-22 21:20:29 --> 404 Page Not Found: Api/user
ERROR - 2023-10-22 21:20:29 --> 404 Page Not Found: Admin/.git
ERROR - 2023-10-22 21:20:29 --> 404 Page Not Found: A/.git
ERROR - 2023-10-22 21:20:29 --> 404 Page Not Found: __MACOSX/.git
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Git/config
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Amphtml/.git
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Api/admin
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Api/user
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Common/.git
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Api/.git
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Api/admin
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Api/user
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Api/v4
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Data/.git
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Api/admin
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Api/v2
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Api/v3
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Blog/wp-content
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Api/v1
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Blog/.git
ERROR - 2023-10-22 21:20:30 --> 404 Page Not Found: Database/.git
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: App/.git
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: Alpha/.git
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: Api/user
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: Demo/.git
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: Application/.git
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: Backup/.git
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: Api/admin
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: Build/.git
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: Dev/.git
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: Developer/.git
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: Aomanalyzer/.git
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: Flock/.git
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: Git/.git
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: Live/.git
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: M/.git
ERROR - 2023-10-22 21:20:31 --> 404 Page Not Found: Gateway/.git
ERROR - 2023-10-22 21:20:32 --> 404 Page Not Found: Beta/.git
ERROR - 2023-10-22 21:20:32 --> 404 Page Not Found: New/.git
ERROR - 2023-10-22 21:20:32 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-10-22 21:20:32 --> 404 Page Not Found: Content/.git
ERROR - 2023-10-22 21:20:32 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-22 21:20:32 --> 404 Page Not Found: Vendor/.git
ERROR - 2023-10-22 21:20:32 --> 404 Page Not Found: Web/.git
ERROR - 2023-10-22 21:20:32 --> 404 Page Not Found: Js/.git
ERROR - 2023-10-22 21:20:32 --> 404 Page Not Found: V2/.git
ERROR - 2023-10-22 21:20:32 --> 404 Page Not Found: Qa/.git
ERROR - 2023-10-22 21:20:32 --> 404 Page Not Found: Assets/.git
ERROR - 2023-10-22 21:20:32 --> 404 Page Not Found: Public/.git
ERROR - 2023-10-22 21:20:32 --> 404 Page Not Found: Shop/.git
ERROR - 2023-10-22 21:20:32 --> 404 Page Not Found: Old-cuburn/.git
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: Media/.git
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: S3/.git
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: Lib/.git
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: Wp-includes/js
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: Test/.git
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: Staging/.git
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: User/.git
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: Site/.git
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: Wiki/.git
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: Images/.git
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: Events/.git
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: V3/.git
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: Wp-content/.git
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: Css/.git
ERROR - 2023-10-22 21:20:33 --> 404 Page Not Found: V1/.git
ERROR - 2023-10-22 21:20:34 --> 404 Page Not Found: Static/.git
ERROR - 2023-10-22 21:20:34 --> 404 Page Not Found: Store/.git
ERROR - 2023-10-22 21:20:34 --> 404 Page Not Found: Samples/.git
ERROR - 2023-10-22 21:20:34 --> 404 Page Not Found: Repos/.git
ERROR - 2023-10-22 21:20:34 --> 404 Page Not Found: Static/.git
ERROR - 2023-10-22 21:20:34 --> 404 Page Not Found: Img/.git
ERROR - 2023-10-22 21:20:34 --> 404 Page Not Found: Repository/.git
ERROR - 2023-10-22 21:20:37 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-22 21:20:38 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-22 21:27:25 --> Could not find the language line "Home"
ERROR - 2023-10-22 21:27:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 21:30:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 21:30:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 21:30:50 --> Could not find the language line "Home"
ERROR - 2023-10-22 21:33:35 --> Could not find the language line "Home"
ERROR - 2023-10-22 21:33:48 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-22 21:33:48 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-22 21:33:48 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-22 21:33:49 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-22 21:33:49 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-22 21:33:49 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-22 21:33:49 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-22 21:33:49 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-22 21:33:49 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-22 21:33:49 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-22 21:33:55 --> Could not find the language line "Home"
ERROR - 2023-10-22 21:33:55 --> Could not find the language line "Home"
ERROR - 2023-10-22 21:34:06 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-22 21:34:06 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-22 21:34:06 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-22 21:34:06 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-22 21:34:06 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-22 21:34:06 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-22 21:34:06 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-22 21:34:06 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-22 21:34:06 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-22 21:34:06 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-22 21:34:23 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-22 21:34:23 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-22 21:34:23 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-22 21:34:23 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-22 21:34:23 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-22 21:34:23 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-22 21:34:23 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-22 21:34:23 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-22 21:34:23 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-22 21:34:24 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-22 21:34:40 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-22 21:34:40 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-22 21:34:41 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-22 21:34:41 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-22 21:34:41 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-22 21:34:41 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-22 21:34:41 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-22 21:34:41 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-22 21:34:41 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-22 21:34:41 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-22 21:34:58 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-22 21:34:58 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-22 21:34:58 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-22 21:34:58 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-22 21:34:58 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-22 21:34:58 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-22 21:34:58 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-22 21:34:58 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-22 21:34:58 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-22 21:34:58 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-22 21:40:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 21:40:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 21:40:27 --> Could not find the language line "Home"
ERROR - 2023-10-22 21:52:44 --> Could not find the language line "Home"
ERROR - 2023-10-22 21:54:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-22 21:55:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 21:55:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 21:55:22 --> Could not find the language line "Home"
ERROR - 2023-10-22 21:57:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-22 22:10:51 --> Could not find the language line "Home"
ERROR - 2023-10-22 22:11:23 --> Could not find the language line "Home"
ERROR - 2023-10-22 22:15:30 --> Could not find the language line "Home"
ERROR - 2023-10-22 22:21:53 --> Could not find the language line "Home"
ERROR - 2023-10-22 22:23:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 22:23:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-22 22:24:02 --> Could not find the language line "Home"
ERROR - 2023-10-22 22:25:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-22 22:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-22 23:02:44 --> Could not find the language line "Home"
ERROR - 2023-10-22 23:03:19 --> Could not find the language line "Home"
ERROR - 2023-10-22 23:04:12 --> Could not find the language line "Home"
ERROR - 2023-10-22 23:17:15 --> Could not find the language line "Home"
ERROR - 2023-10-22 23:20:10 --> Could not find the language line "Home"
