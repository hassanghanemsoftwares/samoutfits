<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-24 00:02:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 00:14:23 --> Could not find the language line "Home"
ERROR - 2023-09-24 01:22:40 --> Could not find the language line "Home"
ERROR - 2023-09-24 01:28:11 --> Could not find the language line "Home"
ERROR - 2023-09-24 01:30:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 01:30:12 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-09-24 01:48:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-24 01:50:43 --> Could not find the language line "Home"
ERROR - 2023-09-24 01:50:45 --> Could not find the language line "Home"
ERROR - 2023-09-24 01:50:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-24 01:50:49 --> Could not find the language line "Disclaimer"
ERROR - 2023-09-24 01:50:50 --> 404 Page Not Found: Home/accounts
ERROR - 2023-09-24 01:50:50 --> 404 Page Not Found: Home/home
ERROR - 2023-09-24 01:50:51 --> 404 Page Not Found: Home/home
ERROR - 2023-09-24 01:50:51 --> 404 Page Not Found: Home/home
ERROR - 2023-09-24 01:50:56 --> 404 Page Not Found: Cart/accounts
ERROR - 2023-09-24 01:50:56 --> 404 Page Not Found: Cart/home
ERROR - 2023-09-24 01:50:56 --> 404 Page Not Found: Cart/home
ERROR - 2023-09-24 01:50:57 --> 404 Page Not Found: Cart/home
ERROR - 2023-09-24 01:50:57 --> Could not find the language line "accounts"
ERROR - 2023-09-24 01:50:58 --> 404 Page Not Found: Users/accounts
ERROR - 2023-09-24 01:50:58 --> 404 Page Not Found: Users/home
ERROR - 2023-09-24 01:50:58 --> 404 Page Not Found: Users/home
ERROR - 2023-09-24 01:50:59 --> 404 Page Not Found: Users/home
ERROR - 2023-09-24 01:55:43 --> Could not find the language line "Home"
ERROR - 2023-09-24 01:55:43 --> Could not find the language line "Home"
ERROR - 2023-09-24 01:55:43 --> Could not find the language line "Home"
ERROR - 2023-09-24 01:55:43 --> Could not find the language line "Home"
ERROR - 2023-09-24 01:55:43 --> Could not find the language line "Home"
ERROR - 2023-09-24 01:55:43 --> Could not find the language line "Home"
ERROR - 2023-09-24 02:27:27 --> Could not find the language line "Home"
ERROR - 2023-09-24 02:28:09 --> Could not find the language line "Home"
ERROR - 2023-09-24 02:51:57 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 03:16:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 03:16:14 --> Could not find the language line "Home"
ERROR - 2023-09-24 03:18:04 --> Could not find the language line "Home"
ERROR - 2023-09-24 03:25:04 --> Could not find the language line "Home"
ERROR - 2023-09-24 03:26:47 --> Could not find the language line "Home"
ERROR - 2023-09-24 03:55:28 --> Could not find the language line "Home"
ERROR - 2023-09-24 03:57:08 --> Could not find the language line "Home"
ERROR - 2023-09-24 03:59:50 --> Could not find the language line "Home"
ERROR - 2023-09-24 04:00:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 04:00:31 --> Could not find the language line "Home"
ERROR - 2023-09-24 04:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 04:24:25 --> Could not find the language line "Home"
ERROR - 2023-09-24 04:32:15 --> Could not find the language line "Home"
ERROR - 2023-09-24 04:34:22 --> 404 Page Not Found: Aws/credentials
ERROR - 2023-09-24 04:42:34 --> Could not find the language line "Home"
ERROR - 2023-09-24 05:13:46 --> Could not find the language line "Home"
ERROR - 2023-09-24 05:18:57 --> Could not find the language line "Home"
ERROR - 2023-09-24 05:19:39 --> Could not find the language line "Home"
ERROR - 2023-09-24 05:27:41 --> Could not find the language line "Bracelets"
ERROR - 2023-09-24 05:28:00 --> Could not find the language line "Home"
ERROR - 2023-09-24 05:28:00 --> Could not find the language line "Home"
ERROR - 2023-09-24 05:28:01 --> Could not find the language line "Home"
ERROR - 2023-09-24 05:28:01 --> Could not find the language line "Home"
ERROR - 2023-09-24 05:28:01 --> Could not find the language line "Home"
ERROR - 2023-09-24 05:28:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-24 05:36:58 --> Could not find the language line "Home"
ERROR - 2023-09-24 05:37:31 --> Could not find the language line "Perfume"
ERROR - 2023-09-24 05:37:36 --> Could not find the language line "Home"
ERROR - 2023-09-24 05:45:41 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-24 05:55:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-24 06:04:02 --> Could not find the language line "Home"
ERROR - 2023-09-24 06:05:56 --> Could not find the language line "Home"
ERROR - 2023-09-24 06:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 06:07:07 --> Could not find the language line "Home"
ERROR - 2023-09-24 06:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 06:08:05 --> Could not find the language line "Home"
ERROR - 2023-09-24 06:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 06:12:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 06:16:50 --> Could not find the language line "Home"
ERROR - 2023-09-24 06:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 06:22:58 --> Could not find the language line "products"
ERROR - 2023-09-24 06:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 06:33:54 --> Could not find the language line "Home"
ERROR - 2023-09-24 06:36:33 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 06:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 06:36:43 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 06:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 06:37:00 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 06:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 06:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 06:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 06:59:54 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 07:00:01 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 07:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 07:00:43 --> Could not find the language line "Home"
ERROR - 2023-09-24 07:02:20 --> Could not find the language line "Home"
ERROR - 2023-09-24 07:03:08 --> Could not find the language line "Home"
ERROR - 2023-09-24 07:04:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 07:05:05 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-09-24 07:10:31 --> Could not find the language line "Home"
ERROR - 2023-09-24 07:22:56 --> Could not find the language line "Home"
ERROR - 2023-09-24 07:29:50 --> Could not find the language line "Home"
ERROR - 2023-09-24 07:31:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 07:31:58 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-09-24 07:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 07:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 07:35:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-24 07:35:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-24 07:35:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-24 07:39:16 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 07:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 07:39:26 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 07:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 07:42:05 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 07:42:12 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 07:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 07:42:42 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 07:42:53 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 07:43:06 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 07:43:26 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 07:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 07:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 07:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 07:53:03 --> Could not find the language line "products"
ERROR - 2023-09-24 07:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 08:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 08:01:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-24 08:01:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-24 08:01:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-24 08:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 08:13:13 --> Could not find the language line "Home"
ERROR - 2023-09-24 08:15:19 --> Could not find the language line "Home"
ERROR - 2023-09-24 08:16:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 08:17:01 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-09-24 08:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 08:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 08:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 08:21:20 --> Could not find the language line "Home"
ERROR - 2023-09-24 08:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 08:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 08:22:30 --> Could not find the language line "Home"
ERROR - 2023-09-24 08:22:36 --> Could not find the language line "Home"
ERROR - 2023-09-24 08:24:01 --> Could not find the language line "Home"
ERROR - 2023-09-24 08:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 08:27:55 --> Could not find the language line "Home"
ERROR - 2023-09-24 08:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 08:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 08:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 08:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 08:50:30 --> Could not find the language line "Home"
ERROR - 2023-09-24 08:53:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-24 08:53:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-24 08:53:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-24 08:56:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-24 08:56:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-24 08:56:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-24 09:00:40 --> Could not find the language line "Home"
ERROR - 2023-09-24 09:08:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-24 09:08:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-24 09:08:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-24 09:08:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-24 09:08:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-24 09:08:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-24 09:08:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-24 09:08:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-24 09:08:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-24 09:08:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-24 09:08:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-24 09:08:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-24 09:08:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-24 09:08:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-24 09:08:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-24 09:10:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 09:10:20 --> Could not find the language line "Home"
ERROR - 2023-09-24 09:12:35 --> Could not find the language line "Home"
ERROR - 2023-09-24 09:25:11 --> Could not find the language line "Home"
ERROR - 2023-09-24 09:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:42:04 --> Could not find the language line "Home"
ERROR - 2023-09-24 09:42:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-24 09:42:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-24 09:42:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-24 09:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:45:33 --> Could not find the language line "Home"
ERROR - 2023-09-24 09:45:35 --> 404 Page Not Found: Wp-admin/index
ERROR - 2023-09-24 09:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:57:19 --> Could not find the language line "Home"
ERROR - 2023-09-24 09:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 09:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 10:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 10:02:29 --> Could not find the language line "Home"
ERROR - 2023-09-24 10:02:41 --> Could not find the language line "Home"
ERROR - 2023-09-24 10:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 10:07:05 --> Could not find the language line "Home"
ERROR - 2023-09-24 10:08:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-24 10:08:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-24 10:08:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-24 10:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 10:10:59 --> Could not find the language line "Home"
ERROR - 2023-09-24 10:13:49 --> Could not find the language line "Home"
ERROR - 2023-09-24 10:14:11 --> Could not find the language line "Home"
ERROR - 2023-09-24 10:22:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 10:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 10:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 10:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 10:32:03 --> Could not find the language line "Home"
ERROR - 2023-09-24 10:44:19 --> Could not find the language line "Disclaimer"
ERROR - 2023-09-24 10:53:27 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:00:43 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:01:26 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 11:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 11:06:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-24 11:06:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-24 11:06:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-24 11:07:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 11:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 11:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 11:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 11:18:43 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:21:32 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:22:24 --> Could not find the language line "Socks"
ERROR - 2023-09-24 11:23:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 11:23:20 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-09-24 11:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 11:28:36 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:28:36 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:28:37 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:28:37 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:28:37 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:28:37 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:28:37 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:41:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-24 11:47:45 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:47:45 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:50:23 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:54:19 --> Could not find the language line "Home"
ERROR - 2023-09-24 11:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 12:07:27 --> Could not find the language line "Home"
ERROR - 2023-09-24 12:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 12:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 12:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 12:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 12:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 12:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 12:39:50 --> Could not find the language line "Home"
ERROR - 2023-09-24 12:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 12:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 12:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 12:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 12:42:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-09-24 12:42:43 --> Could not find the language line "Home"
ERROR - 2023-09-24 12:43:21 --> Could not find the language line "Home"
ERROR - 2023-09-24 12:49:56 --> Could not find the language line "Home"
ERROR - 2023-09-24 13:03:35 --> Could not find the language line "Home"
ERROR - 2023-09-24 13:08:36 --> Could not find the language line "Home"
ERROR - 2023-09-24 13:12:54 --> Could not find the language line "Home"
ERROR - 2023-09-24 13:15:31 --> Could not find the language line "Home"
ERROR - 2023-09-24 13:20:50 --> Could not find the language line "Home"
ERROR - 2023-09-24 13:22:38 --> Could not find the language line "Home"
ERROR - 2023-09-24 13:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 13:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 13:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 13:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 13:36:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-24 13:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 13:44:14 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-24 13:44:25 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-24 13:46:22 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-24 13:50:06 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-24 13:53:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-24 13:57:51 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-24 13:57:52 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Sunglasses'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-24 13:58:47 --> Could not find the language line "Home"
ERROR - 2023-09-24 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-24 14:00:38 --> Could not find the language line "Home"
ERROR - 2023-09-24 14:03:37 --> Could not find the language line "Home"
ERROR - 2023-09-24 14:04:27 --> Could not find the language line "Home"
ERROR - 2023-09-24 14:05:00 --> Could not find the language line "Home"
ERROR - 2023-09-24 14:14:34 --> Could not find the language line "Home"
ERROR - 2023-09-24 14:15:42 --> Could not find the language line "Home"
ERROR - 2023-09-24 14:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 14:34:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 15:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 15:07:52 --> Could not find the language line "Home"
ERROR - 2023-09-24 15:15:56 --> Could not find the language line "Home"
ERROR - 2023-09-24 15:23:55 --> Could not find the language line "Home"
ERROR - 2023-09-24 15:26:32 --> Could not find the language line "Home"
ERROR - 2023-09-24 15:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 15:29:11 --> Could not find the language line "Home"
ERROR - 2023-09-24 15:29:19 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 15:29:31 --> Could not find the language line "Home"
ERROR - 2023-09-24 15:44:59 --> Could not find the language line "Home"
ERROR - 2023-09-24 15:45:14 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 15:45:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 15:47:18 --> Could not find the language line "Home"
ERROR - 2023-09-24 15:59:03 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:00:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 16:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:00:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 16:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:01:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 16:02:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 16:06:41 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:11:32 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-24 16:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:34 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:13:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:19:35 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:21:06 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:21:35 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:25:22 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:25:51 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 16:26:22 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 16:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:26:39 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:27:00 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 16:27:02 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:27:05 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:27:26 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 16:27:50 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 16:27:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 16:28:06 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:28:12 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 16:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:28:45 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 16:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:29:04 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 16:29:07 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:31:54 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:33:09 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:42:47 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:42:54 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 16:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:21 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:26 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:47:26 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:47:26 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:47:26 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:27 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:47:27 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:47:27 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:47:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 16:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:48:18 --> Could not find the language line "Home"
ERROR - 2023-09-24 16:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:53:09 --> 404 Page Not Found: Wp-includes/Requests
ERROR - 2023-09-24 16:53:09 --> 404 Page Not Found: Wp-includes/Requests
ERROR - 2023-09-24 16:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 16:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:01:20 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:02:33 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:07:05 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:07:10 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:07:38 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:09:11 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:09:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 17:09:44 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 17:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:11:47 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 17:11:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 17:11:48 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:14:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 17:21:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 17:21:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 17:21:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-24 17:21:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 17:21:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 17:21:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-24 17:25:15 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:26:24 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:29:35 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:31:01 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:31:17 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:33:46 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:33:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-24 17:33:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-24 17:34:08 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:36:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 17:36:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 17:37:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 17:38:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 17:40:33 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:49:47 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:50:07 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:56:05 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:58:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 17:58:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 17:59:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 17:59:20 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:59:21 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:59:21 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:59:21 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:59:21 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:59:21 --> Could not find the language line "Home"
ERROR - 2023-09-24 17:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:59:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 17:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 17:59:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:01:05 --> Could not find the language line "Home"
ERROR - 2023-09-24 18:09:18 --> Could not find the language line "Home"
ERROR - 2023-09-24 18:12:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:12:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:12:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:13:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:15:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:15:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:18:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:19:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:19:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:19:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:26:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:26:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:27:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:27:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:27:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:27:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:30:41 --> Could not find the language line "Home"
ERROR - 2023-09-24 18:30:42 --> Could not find the language line "Home"
ERROR - 2023-09-24 18:31:13 --> Could not find the language line "Home"
ERROR - 2023-09-24 18:38:35 --> Could not find the language line "Home"
ERROR - 2023-09-24 18:43:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:43:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:43:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:43:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:43:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 18:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 18:45:38 --> Could not find the language line "Home"
ERROR - 2023-09-24 18:46:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-24 18:51:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-09-24 19:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 19:05:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-24 19:09:17 --> Could not find the language line "Home"
ERROR - 2023-09-24 19:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 19:12:09 --> Could not find the language line "Home"
ERROR - 2023-09-24 19:14:26 --> Could not find the language line "Home"
ERROR - 2023-09-24 19:15:13 --> Could not find the language line "Home"
ERROR - 2023-09-24 19:15:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 19:15:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 19:15:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 19:15:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 19:15:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-24 19:16:33 --> Could not find the language line "Home"
ERROR - 2023-09-24 19:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 19:18:52 --> Could not find the language line "Home"
ERROR - 2023-09-24 19:23:46 --> Could not find the language line "Home"
ERROR - 2023-09-24 19:23:49 --> Could not find the language line "Home"
ERROR - 2023-09-24 19:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 19:33:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 19:38:39 --> Could not find the language line "Home"
ERROR - 2023-09-24 19:43:06 --> Could not find the language line "Home"
ERROR - 2023-09-24 19:45:36 --> Could not find the language line "Home"
ERROR - 2023-09-24 19:47:58 --> Could not find the language line "Home"
ERROR - 2023-09-24 19:48:47 --> Could not find the language line "Clothing"
ERROR - 2023-09-24 19:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 20:07:40 --> Could not find the language line "Home"
ERROR - 2023-09-24 20:11:58 --> Could not find the language line "Home"
ERROR - 2023-09-24 20:11:58 --> Could not find the language line "Home"
ERROR - 2023-09-24 20:11:58 --> Could not find the language line "Home"
ERROR - 2023-09-24 20:11:58 --> Could not find the language line "Home"
ERROR - 2023-09-24 20:11:58 --> Could not find the language line "Home"
ERROR - 2023-09-24 20:12:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 20:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 20:18:15 --> Could not find the language line "Socks"
ERROR - 2023-09-24 20:38:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 20:38:34 --> Could not find the language line "Home"
ERROR - 2023-09-24 20:40:01 --> Could not find the language line "Home"
ERROR - 2023-09-24 20:40:05 --> Could not find the language line "Home"
ERROR - 2023-09-24 20:53:19 --> Could not find the language line "Home"
ERROR - 2023-09-24 20:58:19 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-24 21:06:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 21:14:18 --> Could not find the language line "Home"
ERROR - 2023-09-24 21:17:30 --> Could not find the language line "Bracelets"
ERROR - 2023-09-24 21:35:09 --> Could not find the language line "Home"
ERROR - 2023-09-24 21:35:09 --> Could not find the language line "Home"
ERROR - 2023-09-24 21:35:09 --> Could not find the language line "Home"
ERROR - 2023-09-24 21:35:09 --> Could not find the language line "Home"
ERROR - 2023-09-24 21:35:09 --> Could not find the language line "Home"
ERROR - 2023-09-24 21:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 21:41:02 --> Could not find the language line "Home"
ERROR - 2023-09-24 21:41:03 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-09-24 21:41:03 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-09-24 21:41:04 --> Could not find the language line "Home"
ERROR - 2023-09-24 21:41:04 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-09-24 21:41:04 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-09-24 21:41:05 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-09-24 21:41:05 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-09-24 21:41:05 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-09-24 21:41:06 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-09-24 21:41:06 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-09-24 21:41:06 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-09-24 21:41:07 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-09-24 21:41:07 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-09-24 21:41:07 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-09-24 21:41:07 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-09-24 21:41:08 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-09-24 21:41:08 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-09-24 21:41:08 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-09-24 21:41:09 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-09-24 21:43:57 --> Could not find the language line "Home"
ERROR - 2023-09-24 21:59:13 --> Could not find the language line "Home"
ERROR - 2023-09-24 22:16:58 --> Could not find the language line "Home"
ERROR - 2023-09-24 22:31:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-24 22:46:47 --> Could not find the language line "Home"
ERROR - 2023-09-24 22:46:47 --> Could not find the language line "Home"
ERROR - 2023-09-24 22:46:47 --> Could not find the language line "Home"
ERROR - 2023-09-24 22:46:47 --> Could not find the language line "Home"
ERROR - 2023-09-24 22:46:47 --> Could not find the language line "Home"
ERROR - 2023-09-24 22:46:48 --> Could not find the language line "Home"
ERROR - 2023-09-24 22:55:51 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-24 23:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 23:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-24 23:56:51 --> Could not find the language line "products"
ERROR - 2023-09-24 23:58:15 --> 404 Page Not Found: Wp-loginphp/index
