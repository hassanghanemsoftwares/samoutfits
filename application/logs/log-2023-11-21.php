<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-21 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-21 00:02:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 00:21:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 00:30:18 --> Could not find the language line "Home"
ERROR - 2023-11-21 00:33:55 --> Could not find the language line "Home"
ERROR - 2023-11-21 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-21 01:06:12 --> Could not find the language line "products"
ERROR - 2023-11-21 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-21 01:32:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-21 01:39:57 --> Could not find the language line "products"
ERROR - 2023-11-21 01:44:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-21 01:51:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 01:52:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 02:00:16 --> Could not find the language line "Home"
ERROR - 2023-11-21 02:12:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 02:13:42 --> Could not find the language line "products"
ERROR - 2023-11-21 02:16:02 --> Could not find the language line "Other"
ERROR - 2023-11-21 02:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 02:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 02:27:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 02:30:22 --> Could not find the language line "Home"
ERROR - 2023-11-21 02:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 02:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 02:36:12 --> Could not find the language line "products"
ERROR - 2023-11-21 02:47:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 02:47:50 --> Could not find the language line "Home"
ERROR - 2023-11-21 02:58:34 --> Could not find the language line "Other"
ERROR - 2023-11-21 02:58:49 --> Could not find the language line "products"
ERROR - 2023-11-21 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-21 03:02:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 03:02:23 --> Could not find the language line "Home"
ERROR - 2023-11-21 03:03:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 03:04:06 --> Could not find the language line "Home"
ERROR - 2023-11-21 03:07:34 --> 404 Page Not Found: Filemanager/dialog.php
ERROR - 2023-11-21 03:07:34 --> 404 Page Not Found: Admin/filemanager
ERROR - 2023-11-21 03:07:35 --> 404 Page Not Found: Js/filemanager
ERROR - 2023-11-21 03:07:36 --> 404 Page Not Found: Admin/js
ERROR - 2023-11-21 03:09:23 --> Could not find the language line "Home"
ERROR - 2023-11-21 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-21 03:30:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-21 03:30:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-21 03:30:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-21 03:30:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-21 03:30:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-21 03:30:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-21 03:30:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 03:30:19 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 03:35:34 --> Could not find the language line "products"
ERROR - 2023-11-21 03:40:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 03:46:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 04:05:35 --> Could not find the language line "products"
ERROR - 2023-11-21 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 04:32:36 --> Could not find the language line "Home"
ERROR - 2023-11-21 04:39:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 04:39:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 04:39:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-21 05:03:04 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-21 05:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 05:35:33 --> Could not find the language line "products"
ERROR - 2023-11-21 05:45:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 05:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 05:47:54 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-21 05:50:33 --> Could not find the language line "products"
ERROR - 2023-11-21 05:53:33 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-11-21 05:56:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-21 06:16:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 06:20:33 --> Could not find the language line "products"
ERROR - 2023-11-21 06:22:14 --> Could not find the language line "Home"
ERROR - 2023-11-21 06:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 06:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 06:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 06:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 06:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 06:39:15 --> Could not find the language line "Home"
ERROR - 2023-11-21 06:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 06:50:33 --> Could not find the language line "products"
ERROR - 2023-11-21 06:53:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-21 06:53:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-21 06:53:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-21 06:53:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-21 06:53:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-21 06:53:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-21 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-21 07:10:04 --> Could not find the language line "Home"
ERROR - 2023-11-21 07:16:08 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-21 07:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 07:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 07:23:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-21 07:23:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-21 07:23:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-21 07:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 07:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 07:35:34 --> Could not find the language line "products"
ERROR - 2023-11-21 07:36:31 --> Could not find the language line "products"
ERROR - 2023-11-21 07:38:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 07:38:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 07:41:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-21 07:41:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-21 07:41:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-21 07:51:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-21 07:51:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-21 07:51:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-21 07:59:32 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-21 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 08:01:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 08:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 08:09:27 --> Could not find the language line "Home"
ERROR - 2023-11-21 08:10:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 08:10:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 08:10:20 --> Could not find the language line "products"
ERROR - 2023-11-21 08:10:22 --> Could not find the language line "Home"
ERROR - 2023-11-21 08:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 08:10:49 --> Could not find the language line "Home"
ERROR - 2023-11-21 08:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 08:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 08:19:35 --> Could not find the language line "Home"
ERROR - 2023-11-21 08:21:41 --> Could not find the language line "Home"
ERROR - 2023-11-21 08:23:46 --> Could not find the language line "Home"
ERROR - 2023-11-21 08:27:23 --> Could not find the language line "Crocs"
ERROR - 2023-11-21 08:27:40 --> Could not find the language line "Home"
ERROR - 2023-11-21 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-21 08:31:59 --> Could not find the language line "Perfume"
ERROR - 2023-11-21 08:32:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 08:33:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 08:33:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 08:34:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 08:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 08:35:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 08:35:39 --> Could not find the language line "products"
ERROR - 2023-11-21 08:35:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 08:36:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 08:36:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 08:52:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 08:55:41 --> Could not find the language line "Home"
ERROR - 2023-11-21 08:57:57 --> Could not find the language line "Home"
ERROR - 2023-11-21 08:59:12 --> Could not find the language line "Home"
ERROR - 2023-11-21 08:59:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-21 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 09:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 09:08:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 09:13:45 --> Could not find the language line "products"
ERROR - 2023-11-21 09:19:38 --> Could not find the language line "Home"
ERROR - 2023-11-21 09:19:42 --> Could not find the language line "Home"
ERROR - 2023-11-21 09:21:35 --> Could not find the language line "Home"
ERROR - 2023-11-21 09:23:36 --> Could not find the language line "Home"
ERROR - 2023-11-21 09:24:51 --> Could not find the language line "products"
ERROR - 2023-11-21 09:29:23 --> Could not find the language line "Home"
ERROR - 2023-11-21 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-21 09:35:42 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-21 09:36:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 09:36:12 --> Could not find the language line "products"
ERROR - 2023-11-21 09:38:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 09:40:53 --> Could not find the language line "Home"
ERROR - 2023-11-21 09:51:33 --> 404 Page Not Found: Item/811008
ERROR - 2023-11-21 09:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 09:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 09:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 09:55:54 --> Could not find the language line "products"
ERROR - 2023-11-21 09:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 09:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 10:05:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 10:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 10:05:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 10:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 10:05:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 10:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 10:06:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 10:06:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 10:11:28 --> Could not find the language line "Home"
ERROR - 2023-11-21 10:12:12 --> Could not find the language line "products"
ERROR - 2023-11-21 10:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 10:14:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-21 10:22:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 10:22:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 10:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 10:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 10:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 10:36:16 --> Could not find the language line "Home"
ERROR - 2023-11-21 10:44:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-21 10:52:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-21 10:52:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-21 10:52:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-21 10:52:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-21 10:52:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-21 10:52:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-21 10:52:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 10:52:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 10:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 11:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:03:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-21 11:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-21 11:03:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-21 11:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:06:12 --> Could not find the language line "products"
ERROR - 2023-11-21 11:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:18:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 11:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:19:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 11:19:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 11:19:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 11:19:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 11:20:09 --> Could not find the language line "Home"
ERROR - 2023-11-21 11:21:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 11:26:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 11:27:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 11:27:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 11:27:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 11:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 11:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:30:56 --> Could not find the language line "products"
ERROR - 2023-11-21 11:31:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 11:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:34:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 11:34:18 --> Could not find the language line "Home"
ERROR - 2023-11-21 11:37:45 --> Could not find the language line "Home"
ERROR - 2023-11-21 11:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:44:04 --> Could not find the language line "Other"
ERROR - 2023-11-21 11:44:10 --> Could not find the language line "products"
ERROR - 2023-11-21 11:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 11:51:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 11:59:11 --> Could not find the language line "products"
ERROR - 2023-11-21 12:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-21 12:09:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 12:19:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-21 12:19:13 --> Could not find the language line "products"
ERROR - 2023-11-21 12:21:02 --> Could not find the language line "Socks"
ERROR - 2023-11-21 12:21:09 --> Could not find the language line "Socks"
ERROR - 2023-11-21 12:22:20 --> Could not find the language line "Other"
ERROR - 2023-11-21 12:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 12:25:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 12:29:49 --> Could not find the language line "products"
ERROR - 2023-11-21 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-21 12:41:21 --> Could not find the language line "Home"
ERROR - 2023-11-21 12:41:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 12:42:09 --> Could not find the language line "Home"
ERROR - 2023-11-21 12:43:15 --> Could not find the language line "Home"
ERROR - 2023-11-21 12:43:21 --> Could not find the language line "Socks"
ERROR - 2023-11-21 12:51:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 12:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 12:59:10 --> Could not find the language line "products"
ERROR - 2023-11-21 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 13:05:00 --> Could not find the language line "Home"
ERROR - 2023-11-21 13:05:56 --> Could not find the language line "Home"
ERROR - 2023-11-21 13:06:52 --> Could not find the language line "Home"
ERROR - 2023-11-21 13:07:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 13:07:19 --> Could not find the language line "Home"
ERROR - 2023-11-21 13:09:48 --> Could not find the language line "Socks"
ERROR - 2023-11-21 13:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 13:30:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 13:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 13:42:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 13:42:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 13:42:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 13:44:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 13:54:46 --> Could not find the language line "Socks"
ERROR - 2023-11-21 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 14:09:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 14:12:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 14:16:18 --> Could not find the language line "Socks"
ERROR - 2023-11-21 14:16:46 --> Could not find the language line "Socks"
ERROR - 2023-11-21 14:19:58 --> Could not find the language line "Socks"
ERROR - 2023-11-21 14:21:13 --> Could not find the language line "products"
ERROR - 2023-11-21 14:21:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 14:26:25 --> Could not find the language line "Home"
ERROR - 2023-11-21 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 14:32:42 --> Could not find the language line "Home"
ERROR - 2023-11-21 14:34:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 14:34:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 14:34:42 --> Could not find the language line "Home"
ERROR - 2023-11-21 14:36:12 --> Could not find the language line "products"
ERROR - 2023-11-21 14:36:28 --> Could not find the language line "Home"
ERROR - 2023-11-21 14:36:29 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-11-21 14:36:29 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-11-21 14:36:29 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-11-21 14:36:29 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-11-21 14:38:28 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-11-21 14:38:30 --> Could not find the language line "Home"
ERROR - 2023-11-21 14:38:41 --> Could not find the language line "Home"
ERROR - 2023-11-21 14:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 14:39:55 --> Could not find the language line "Home"
ERROR - 2023-11-21 14:48:36 --> Could not find the language line "Home"
ERROR - 2023-11-21 14:48:37 --> Could not find the language line "Home"
ERROR - 2023-11-21 14:49:32 --> Could not find the language line "Home"
ERROR - 2023-11-21 14:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 14:53:12 --> Could not find the language line "Home"
ERROR - 2023-11-21 14:56:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 14:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 15:01:59 --> Could not find the language line "Home"
ERROR - 2023-11-21 15:02:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 15:02:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 15:03:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 15:03:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 15:03:39 --> Could not find the language line "Home"
ERROR - 2023-11-21 15:03:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 15:03:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 15:03:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 15:03:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 15:04:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 15:04:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 15:04:22 --> Could not find the language line "products"
ERROR - 2023-11-21 15:05:30 --> Could not find the language line "Home"
ERROR - 2023-11-21 15:10:33 --> Could not find the language line "Home"
ERROR - 2023-11-21 15:14:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 15:19:46 --> Could not find the language line "Home"
ERROR - 2023-11-21 15:23:55 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-21 15:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 15:27:29 --> Could not find the language line "Home"
ERROR - 2023-11-21 15:27:29 --> Could not find the language line "Home"
ERROR - 2023-11-21 15:27:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 15:27:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 15:27:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 15:27:34 --> 404 Page Not Found: Home/home
ERROR - 2023-11-21 15:27:34 --> 404 Page Not Found: Home/accounts
ERROR - 2023-11-21 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-11-21 15:32:32 --> Could not find the language line "products"
ERROR - 2023-11-21 15:33:19 --> Could not find the language line "products"
ERROR - 2023-11-21 15:38:05 --> Could not find the language line "products"
ERROR - 2023-11-21 15:42:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 15:43:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 15:47:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-21 15:47:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-21 15:47:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-21 15:47:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-21 15:47:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-21 15:47:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-21 15:47:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:47:43 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:51:14 --> Could not find the language line "Home"
ERROR - 2023-11-21 15:51:14 --> Could not find the language line "Home"
ERROR - 2023-11-21 15:52:13 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 15:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-21 16:00:35 --> 404 Page Not Found: Products/products
ERROR - 2023-11-21 16:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 16:03:49 --> Could not find the language line "Home"
ERROR - 2023-11-21 16:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 16:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 16:05:45 --> Could not find the language line "Home"
ERROR - 2023-11-21 16:05:52 --> 404 Page Not Found: Assets/lib
ERROR - 2023-11-21 16:06:12 --> Could not find the language line "products"
ERROR - 2023-11-21 16:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 16:07:37 --> Could not find the language line "Home"
ERROR - 2023-11-21 16:07:38 --> Could not find the language line "Home"
ERROR - 2023-11-21 16:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 16:08:08 --> Could not find the language line "Home"
ERROR - 2023-11-21 16:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 16:09:46 --> Could not find the language line "Home"
ERROR - 2023-11-21 16:11:50 --> Could not find the language line "products"
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:13:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:14:27 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-21 16:17:27 --> Could not find the language line "products"
ERROR - 2023-11-21 16:18:43 --> Could not find the language line "products"
ERROR - 2023-11-21 16:21:32 --> Could not find the language line "products"
ERROR - 2023-11-21 16:22:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-21 16:22:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-21 16:22:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-21 16:22:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-21 16:22:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-21 16:22:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-21 16:22:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:22:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 16:24:21 --> Could not find the language line "products"
ERROR - 2023-11-21 16:28:43 --> Could not find the language line "products"
ERROR - 2023-11-21 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 16:45:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 16:49:03 --> Could not find the language line "Home"
ERROR - 2023-11-21 16:49:21 --> Could not find the language line "products"
ERROR - 2023-11-21 16:51:12 --> Could not find the language line "products"
ERROR - 2023-11-21 16:52:13 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-21 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-21 17:07:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-21 17:07:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-21 17:07:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-21 17:09:06 --> Could not find the language line "products"
ERROR - 2023-11-21 17:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:16:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:16:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:16:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:16:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:17:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:17:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:17:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:17:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:18:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:18:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:18:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:18:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:18:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:18:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:19:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:19:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:19:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:19:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:19:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:19:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:19:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:19:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:19:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:19:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:20:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:20:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:20:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:20:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:20:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:20:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 17:20:55 --> Could not find the language line "Home"
ERROR - 2023-11-21 17:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:23:32 --> Could not find the language line "Home"
ERROR - 2023-11-21 17:23:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-21 17:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:26:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-21 17:27:43 --> Could not find the language line "Home"
ERROR - 2023-11-21 17:27:55 --> Could not find the language line "Bracelets"
ERROR - 2023-11-21 17:28:13 --> Could not find the language line "Bracelets"
ERROR - 2023-11-21 17:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:28:36 --> Could not find the language line "Bracelets"
ERROR - 2023-11-21 17:28:43 --> Could not find the language line "Bracelets"
ERROR - 2023-11-21 17:28:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-21 17:29:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-21 17:29:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-21 17:29:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-21 17:30:15 --> Could not find the language line "Home"
ERROR - 2023-11-21 17:30:17 --> Could not find the language line "Home"
ERROR - 2023-11-21 17:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:30:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 17:30:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 17:31:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 17:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:31:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 17:31:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-21 17:32:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 17:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:35:48 --> Could not find the language line "Home"
ERROR - 2023-11-21 17:42:04 --> Could not find the language line "Home"
ERROR - 2023-11-21 17:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 17:43:20 --> Could not find the language line "Home"
ERROR - 2023-11-21 17:46:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 17:48:49 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-21 17:52:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 17:52:45 --> Could not find the language line "Home"
ERROR - 2023-11-21 17:55:28 --> Could not find the language line "Home"
ERROR - 2023-11-21 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-21 18:06:22 --> Could not find the language line "products"
ERROR - 2023-11-21 18:10:28 --> Could not find the language line "products"
ERROR - 2023-11-21 18:11:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-21 18:11:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-21 18:11:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-21 18:11:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-21 18:11:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-21 18:11:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-21 18:11:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:11:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:18:41 --> Could not find the language line "products"
ERROR - 2023-11-21 18:22:46 --> Could not find the language line "products"
ERROR - 2023-11-21 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 18:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 18:30:55 --> Could not find the language line "products"
ERROR - 2023-11-21 18:33:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-21 18:33:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-21 18:33:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-21 18:43:12 --> Could not find the language line "products"
ERROR - 2023-11-21 18:43:25 --> Could not find the language line "Home"
ERROR - 2023-11-21 18:48:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 18:49:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:03:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:04:12 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:04:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-21 19:04:46 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:04:50 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:08:07 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 19:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 19:10:33 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:11:23 --> Could not find the language line "products"
ERROR - 2023-11-21 19:12:30 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 19:16:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 19:21:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 19:24:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 19:29:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 19:29:21 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:31:04 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:31:45 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 19:34:09 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:34:16 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 19:35:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 19:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 19:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 19:38:32 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:38:38 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-21 19:38:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 19:38:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 19:39:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-21 19:39:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 19:39:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 19:39:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 19:40:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-21 19:40:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-21 19:40:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-21 19:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 19:48:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 19:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 19:49:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 19:49:46 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 19:51:21 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:56:12 --> Could not find the language line "Home"
ERROR - 2023-11-21 19:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 19:57:48 --> Could not find the language line "Home"
ERROR - 2023-11-21 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 20:04:05 --> Could not find the language line "Home"
ERROR - 2023-11-21 20:04:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 20:11:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-21 20:12:49 --> Could not find the language line "products"
ERROR - 2023-11-21 20:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 20:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 20:18:03 --> Could not find the language line "Home"
ERROR - 2023-11-21 20:24:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 20:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 20:27:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-21 20:27:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-21 20:27:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-21 20:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 20:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 20:29:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-21 20:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 20:34:43 --> Could not find the language line "Home"
ERROR - 2023-11-21 20:40:08 --> Could not find the language line "Home"
ERROR - 2023-11-21 20:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 20:42:34 --> Could not find the language line "Home"
ERROR - 2023-11-21 20:46:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 20:48:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 20:54:23 --> Could not find the language line "Home"
ERROR - 2023-11-21 20:57:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 20:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-21 21:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 21:06:22 --> Could not find the language line "products"
ERROR - 2023-11-21 21:06:26 --> Could not find the language line "products"
ERROR - 2023-11-21 21:15:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 21:16:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 21:21:19 --> Could not find the language line "products"
ERROR - 2023-11-21 21:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 21:23:31 --> Could not find the language line "Home"
ERROR - 2023-11-21 21:29:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-21 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-21 21:33:24 --> Could not find the language line "Home"
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:50:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:51:17 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 21:51:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 21:59:14 --> Could not find the language line "products"
ERROR - 2023-11-21 22:00:16 --> Could not find the language line "Home"
ERROR - 2023-11-21 22:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 22:14:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-21 22:14:06 --> Could not find the language line "Home"
ERROR - 2023-11-21 22:19:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-21 22:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 22:29:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-21 22:29:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-21 22:29:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-21 22:29:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-21 22:29:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-21 22:29:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-21 22:29:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 22:29:13 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-21 22:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-21 22:31:59 --> Could not find the language line "Home"
ERROR - 2023-11-21 22:32:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 22:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 22:34:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 22:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 22:34:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 22:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 22:34:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 22:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 22:35:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-11-21 22:35:36 --> Could not find the language line "Home"
ERROR - 2023-11-21 22:35:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 22:35:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-11-21 22:35:52 --> Could not find the language line "Home"
ERROR - 2023-11-21 22:36:11 --> Could not find the language line "Home"
ERROR - 2023-11-21 22:36:14 --> Could not find the language line "Bracelets"
ERROR - 2023-11-21 22:36:26 --> Could not find the language line "Home"
ERROR - 2023-11-21 22:36:36 --> Could not find the language line "Home"
ERROR - 2023-11-21 22:36:39 --> Could not find the language line "Perfume"
ERROR - 2023-11-21 22:36:43 --> Could not find the language line "Home"
ERROR - 2023-11-21 22:36:44 --> Could not find the language line "Socks"
ERROR - 2023-11-21 22:36:53 --> Could not find the language line "Home"
ERROR - 2023-11-21 22:50:53 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-21 22:59:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-21 23:00:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-21 23:06:08 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-21 23:21:14 --> Could not find the language line "Home"
ERROR - 2023-11-21 23:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 23:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 23:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 23:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 23:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-21 23:28:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-21 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-21 23:30:51 --> Could not find the language line "Home"
