<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-07 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-07 00:00:41 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 00:05:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 00:12:53 --> Could not find the language line "products"
ERROR - 2023-11-07 00:21:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 00:24:39 --> Could not find the language line "Socks"
ERROR - 2023-11-07 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-07 00:31:41 --> Could not find the language line "products"
ERROR - 2023-11-07 00:37:20 --> Could not find the language line "products"
ERROR - 2023-11-07 00:45:40 --> Could not find the language line "Home"
ERROR - 2023-11-07 00:49:29 --> Could not find the language line "products"
ERROR - 2023-11-07 00:55:27 --> Could not find the language line "Home"
ERROR - 2023-11-07 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-11-07 01:13:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-11-07 01:34:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 01:43:54 --> 404 Page Not Found: Products/products
ERROR - 2023-11-07 01:53:13 --> Could not find the language line "Home"
ERROR - 2023-11-07 01:53:38 --> Could not find the language line "Socks"
ERROR - 2023-11-07 01:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 01:53:47 --> Could not find the language line "Socks"
ERROR - 2023-11-07 01:53:49 --> Could not find the language line "Home"
ERROR - 2023-11-07 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-11-07 02:06:24 --> Could not find the language line "products"
ERROR - 2023-11-07 02:12:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-07 02:13:54 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 02:21:24 --> Could not find the language line "products"
ERROR - 2023-11-07 02:21:56 --> Could not find the language line "Home"
ERROR - 2023-11-07 02:22:46 --> Could not find the language line "Home"
ERROR - 2023-11-07 02:26:06 --> Could not find the language line "Home"
ERROR - 2023-11-07 02:28:54 --> Could not find the language line "products"
ERROR - 2023-11-07 02:28:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-07 02:36:24 --> 404 Page Not Found: Products/products
ERROR - 2023-11-07 02:43:54 --> Could not find the language line "products"
ERROR - 2023-11-07 02:44:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 02:45:41 --> Could not find the language line "Home"
ERROR - 2023-11-07 02:51:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 02:53:12 --> Could not find the language line "Home"
ERROR - 2023-11-07 02:58:36 --> Could not find the language line "Home"
ERROR - 2023-11-07 02:58:54 --> Could not find the language line "products"
ERROR - 2023-11-07 03:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 03:05:57 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-07 03:06:24 --> Could not find the language line "products"
ERROR - 2023-11-07 03:22:23 --> Could not find the language line "Home"
ERROR - 2023-11-07 03:24:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 03:30:55 --> Could not find the language line "Home"
ERROR - 2023-11-07 03:42:27 --> Could not find the language line "products"
ERROR - 2023-11-07 03:52:22 --> Could not find the language line "Home"
ERROR - 2023-11-07 03:52:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 03:54:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 03:57:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 04:00:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 04:01:51 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-11-07 04:06:24 --> Could not find the language line "products"
ERROR - 2023-11-07 04:12:24 --> Could not find the language line "products"
ERROR - 2023-11-07 04:18:24 --> Could not find the language line "products"
ERROR - 2023-11-07 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 04:30:24 --> Could not find the language line "products"
ERROR - 2023-11-07 04:42:24 --> Could not find the language line "products"
ERROR - 2023-11-07 04:43:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 04:45:21 --> Could not find the language line "Home"
ERROR - 2023-11-07 04:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 04:45:48 --> Could not find the language line "Home"
ERROR - 2023-11-07 04:48:24 --> Could not find the language line "products"
ERROR - 2023-11-07 04:50:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 04:55:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 04:57:37 --> Could not find the language line "Disclaimer"
ERROR - 2023-11-07 04:58:09 --> Could not find the language line "Other"
ERROR - 2023-11-07 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-07 05:00:24 --> Could not find the language line "products"
ERROR - 2023-11-07 05:06:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 05:12:24 --> Could not find the language line "products"
ERROR - 2023-11-07 05:16:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 05:22:20 --> Could not find the language line "products"
ERROR - 2023-11-07 05:26:55 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-07 05:27:34 --> Could not find the language line "products"
ERROR - 2023-11-07 05:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 05:32:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 05:38:10 --> Could not find the language line "products"
ERROR - 2023-11-07 05:43:27 --> Could not find the language line "products"
ERROR - 2023-11-07 05:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 05:59:20 --> Could not find the language line "products"
ERROR - 2023-11-07 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 06:00:46 --> Could not find the language line "Home"
ERROR - 2023-11-07 06:08:45 --> Could not find the language line "Home"
ERROR - 2023-11-07 06:09:55 --> 404 Page Not Found: Products/products
ERROR - 2023-11-07 06:11:34 --> Could not find the language line "Home"
ERROR - 2023-11-07 06:12:18 --> Could not find the language line "Home"
ERROR - 2023-11-07 06:13:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 06:14:53 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 06:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:21:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 06:25:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-07 06:33:03 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 06:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:35:00 --> Could not find the language line "Home"
ERROR - 2023-11-07 06:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:46:47 --> Could not find the language line "Home"
ERROR - 2023-11-07 06:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 06:47:34 --> Could not find the language line "Home"
ERROR - 2023-11-07 06:48:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 06:52:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 06:52:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 06:52:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 07:01:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 07:02:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 07:02:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 07:02:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 07:03:17 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 07:05:20 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 07:05:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 07:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 07:14:51 --> Could not find the language line "Home"
ERROR - 2023-11-07 07:14:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 07:14:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 07:14:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 07:14:54 --> 404 Page Not Found: Home/accounts
ERROR - 2023-11-07 07:14:54 --> 404 Page Not Found: Home/home
ERROR - 2023-11-07 07:15:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 07:16:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 07:23:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 07:23:50 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-07 07:24:38 --> Could not find the language line "Home"
ERROR - 2023-11-07 07:25:20 --> Could not find the language line "Home"
ERROR - 2023-11-07 07:26:51 --> Could not find the language line "Home"
ERROR - 2023-11-07 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 07:39:33 --> Could not find the language line "Home"
ERROR - 2023-11-07 07:39:46 --> Could not find the language line "Home"
ERROR - 2023-11-07 07:40:08 --> Could not find the language line "Home"
ERROR - 2023-11-07 07:42:04 --> Could not find the language line "Home"
ERROR - 2023-11-07 07:44:35 --> Could not find the language line "Home"
ERROR - 2023-11-07 07:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 07:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 07:51:28 --> Could not find the language line "Home"
ERROR - 2023-11-07 07:54:53 --> Could not find the language line "Home"
ERROR - 2023-11-07 07:58:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 07:59:08 --> Could not find the language line "Home"
ERROR - 2023-11-07 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 08:06:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 08:07:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 08:07:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 08:24:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-07 08:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 08:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 08:27:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 08:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-07 08:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 08:33:30 --> Could not find the language line "Home"
ERROR - 2023-11-07 08:34:32 --> Could not find the language line "Home"
ERROR - 2023-11-07 08:50:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 08:53:49 --> Could not find the language line "Home"
ERROR - 2023-11-07 08:54:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 08:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 08:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 08:54:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 08:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 08:54:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 08:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 08:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 08:54:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 09:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 09:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 09:06:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 09:06:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-07 09:06:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 09:08:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 09:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 09:22:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 09:22:48 --> Could not find the language line "Home"
ERROR - 2023-11-07 09:26:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-07 09:26:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-07 09:26:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-07 09:26:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-07 09:26:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-07 09:26:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-07 09:26:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:26:07 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:28:29 --> Could not find the language line "Socks"
ERROR - 2023-11-07 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-07 09:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:33:16 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 09:35:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 09:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 09:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 09:44:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 09:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 09:50:19 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-11-07 09:51:31 --> Could not find the language line "Other"
ERROR - 2023-11-07 09:52:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 09:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 10:00:39 --> Could not find the language line "Home"
ERROR - 2023-11-07 10:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 10:18:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 10:24:13 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 10:26:50 --> Could not find the language line "Home"
ERROR - 2023-11-07 10:26:54 --> Could not find the language line "Home"
ERROR - 2023-11-07 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-07 10:33:58 --> Could not find the language line "Home"
ERROR - 2023-11-07 10:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 10:35:36 --> Could not find the language line "Home"
ERROR - 2023-11-07 10:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 10:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 10:38:13 --> Could not find the language line "Home"
ERROR - 2023-11-07 10:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 10:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 10:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 10:44:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 10:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 10:55:58 --> Could not find the language line "Home"
ERROR - 2023-11-07 10:56:14 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 10:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 10:57:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 10:57:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 10:57:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:00:01 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:02:03 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 11:03:58 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 11:04:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:05:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 11:06:26 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 11:07:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:08:05 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:08:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:10:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:10:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:10:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:10:56 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 11:12:20 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:12:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 11:15:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 11:18:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:18:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:18:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:18:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:19:36 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:19:54 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-07 11:20:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:20:14 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:20:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:21:07 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:21:16 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:21:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:21:46 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:21:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:21:52 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 11:23:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 11:23:56 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 11:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 11:28:17 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-07 11:29:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 11:29:14 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 11:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:30:35 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:30:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 11:34:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:40:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:40:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:40:08 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:42:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 11:43:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 11:43:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-07 11:43:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 11:43:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 11:43:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-07 11:43:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 11:45:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:54:00 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 11:54:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 11:55:09 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:57:14 --> Could not find the language line "Home"
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 11:59:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 12:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 12:03:03 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:03:05 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 12:05:57 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:05:57 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:05:57 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:05:58 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:06:02 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:07:30 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:08:16 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:11:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:39:12 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:39:12 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:39:18 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 12:41:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 12:41:18 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:43:12 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:45:04 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:50:40 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:54:12 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 12:55:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 12:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 12:56:28 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 12:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 12:57:04 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:57:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 12:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 12:57:49 --> Could not find the language line "Home"
ERROR - 2023-11-07 12:58:03 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:00:09 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:01:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 13:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 13:18:42 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:19:34 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:19:43 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:20:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 13:20:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-07 13:20:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 13:26:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:26:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 13:26:38 --> 404 Page Not Found: Products/products
ERROR - 2023-11-07 13:27:12 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:27:14 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:27:14 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 13:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 13:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 13:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 13:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 13:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 13:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 13:40:39 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:43:55 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:43:56 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:44:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 13:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 13:44:37 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:48:17 --> 404 Page Not Found: Products/products
ERROR - 2023-11-07 13:48:43 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:51:17 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:52:32 --> Could not find the language line "Home"
ERROR - 2023-11-07 13:55:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 13:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 13:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 13:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 13:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 13:58:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:00:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 14:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 14:01:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 14:02:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 14:02:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 14:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 14:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 14:10:13 --> Could not find the language line "Perfume"
ERROR - 2023-11-07 14:15:50 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:15:50 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:15:50 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:15:51 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:15:57 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:16:18 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 14:22:13 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 14:26:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 14:27:03 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:27:33 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:28:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 14:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 14:29:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:38:42 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:39:16 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:40:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 14:40:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-07 14:40:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 14:49:07 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 14:54:19 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:54:20 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:56:53 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:57:39 --> Could not find the language line "Home"
ERROR - 2023-11-07 14:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 14:59:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 15:01:32 --> 404 Page Not Found: Wp-panophp/index
ERROR - 2023-11-07 15:02:36 --> Could not find the language line "Home"
ERROR - 2023-11-07 15:07:37 --> Could not find the language line "Home"
ERROR - 2023-11-07 15:09:24 --> Could not find the language line "Home"
ERROR - 2023-11-07 15:10:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 15:10:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-07 15:10:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 15:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 15:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 15:16:29 --> Could not find the language line "Home"
ERROR - 2023-11-07 15:25:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 15:25:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-07 15:25:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 15:25:58 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-11-07 15:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-07 15:33:24 --> 404 Page Not Found: Products/products
ERROR - 2023-11-07 15:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 15:45:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 15:45:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-07 15:45:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 15:46:16 --> 404 Page Not Found: Products/products
ERROR - 2023-11-07 15:56:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 15:56:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 15:56:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 15:56:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 15:56:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 15:56:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 15:56:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 15:56:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 16:00:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 16:08:42 --> Could not find the language line "Home"
ERROR - 2023-11-07 16:17:32 --> Could not find the language line "Home"
ERROR - 2023-11-07 16:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:23:12 --> 404 Page Not Found: Products/products
ERROR - 2023-11-07 16:23:42 --> Could not find the language line "Home"
ERROR - 2023-11-07 16:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:27:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 16:27:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-07 16:27:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-11-07 16:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:35:23 --> Could not find the language line "Home"
ERROR - 2023-11-07 16:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:41 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:37:46 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 16:39:05 --> Could not find the language line "Home"
ERROR - 2023-11-07 16:39:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 16:39:49 --> Could not find the language line "Home"
ERROR - 2023-11-07 16:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:40:22 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 16:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:40:31 --> Could not find the language line "Home"
ERROR - 2023-11-07 16:40:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 16:40:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-07 16:40:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 16:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:41:54 --> Could not find the language line "Home"
ERROR - 2023-11-07 16:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:44:18 --> Could not find the language line "Home"
ERROR - 2023-11-07 16:51:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 16:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:57:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 16:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:58:20 --> Could not find the language line "Home"
ERROR - 2023-11-07 16:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 16:59:55 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:00:26 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:00:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 17:00:28 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:00:29 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:01:45 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:01:46 --> Could not find the language line "products"
ERROR - 2023-11-07 17:01:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 17:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:03:04 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 17:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:03:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 17:03:57 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 17:04:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 17:04:49 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:11:27 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:15:55 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:21:28 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:21:40 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:23:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 17:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:27:20 --> Could not find the language line "products"
ERROR - 2023-11-07 17:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:27:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 17:27:38 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:31:47 --> Could not find the language line "Socks"
ERROR - 2023-11-07 17:32:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-07 17:33:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-07 17:33:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-07 17:33:32 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:36:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-07 17:36:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-07 17:36:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-07 17:36:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-07 17:36:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-07 17:36:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-07 17:36:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 17:36:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 17:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:39:34 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:42:50 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:43:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:43:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:46:01 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:46:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 17:46:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 17:47:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 17:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:47:35 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 17:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 17:48:11 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-11-07 17:50:24 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:50:46 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:50:56 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:52:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 17:52:42 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:52:51 --> Could not find the language line "Home"
ERROR - 2023-11-07 17:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:01:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 18:01:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 18:01:54 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:03:22 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-07 18:09:38 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:09:43 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:19:23 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:20:28 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 18:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 18:26:54 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:30:32 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:31:49 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:35:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 18:35:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 18:35:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 18:38:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 18:38:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-07 18:38:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 18:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 18:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 18:41:23 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:41:39 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 18:42:25 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:42:43 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 18:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 18:45:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 18:45:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 18:45:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 18:45:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 18:45:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-07 18:45:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 18:45:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-07 18:45:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 18:45:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-07 18:45:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 18:45:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-07 18:45:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 18:45:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 18:45:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-07 18:45:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 18:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 18:47:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-07 18:48:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 18:48:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 18:48:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 18:49:30 --> Could not find the language line "assets"
ERROR - 2023-11-07 18:50:22 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:52:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 18:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 18:54:02 --> Could not find the language line "Perfume"
ERROR - 2023-11-07 18:55:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 18:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 18:58:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:00:39 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:03:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:03:51 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:03:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 19:04:14 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:04:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:07:01 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:07:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 19:07:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-07 19:07:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 19:07:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:08:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:08:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:08:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:10:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 19:10:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-07 19:10:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 19:12:33 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:12:42 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:14:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 19:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:14:40 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:14:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:18:15 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:20:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 19:20:47 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:22:04 --> Could not find the language line "products"
ERROR - 2023-11-07 19:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:26:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 19:26:34 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:28:17 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:29:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 19:29:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-11-07 19:29:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:34:02 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:34:07 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:34:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:36:49 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:38:50 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:39:20 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:39:39 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 19:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:41:04 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:41:44 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:43:32 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:44:06 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:45:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:52:49 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:54:01 --> Could not find the language line "Home"
ERROR - 2023-11-07 19:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 19:55:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 19:57:13 --> Could not find the language line "Bracelets"
ERROR - 2023-11-07 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-11-07 20:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:02:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 20:02:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:03:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:03:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 20:05:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 20:09:59 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:11:00 --> Could not find the language line "Bracelets"
ERROR - 2023-11-07 20:11:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:11:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:11:30 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:12:11 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:12:13 --> Could not find the language line "Home"
ERROR - 2023-11-07 20:12:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:12:46 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:12:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 20:12:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-07 20:12:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 20:12:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:13:35 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:13:42 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:13:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:14:06 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:14:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 20:14:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('XXXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-07 20:14:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 20:14:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:14:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:14:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:14:45 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:14:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:15:00 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:15:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 20:15:14 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:15:43 --> Could not find the language line "Home"
ERROR - 2023-11-07 20:15:45 --> Could not find the language line "Home"
ERROR - 2023-11-07 20:15:48 --> Could not find the language line "Home"
ERROR - 2023-11-07 20:16:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:20:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-11-07 20:20:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-11-07 20:20:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-11-07 20:25:13 --> Could not find the language line "Home"
ERROR - 2023-11-07 20:29:54 --> Could not find the language line "Home"
ERROR - 2023-11-07 20:29:54 --> Could not find the language line "Home"
ERROR - 2023-11-07 20:30:10 --> Could not find the language line "Home"
ERROR - 2023-11-07 20:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:41:58 --> Could not find the language line "Home"
ERROR - 2023-11-07 20:45:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 20:50:22 --> Could not find the language line "products"
ERROR - 2023-11-07 20:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 20:58:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 21:00:11 --> Could not find the language line "Home"
ERROR - 2023-11-07 21:02:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 21:04:28 --> Could not find the language line "Home"
ERROR - 2023-11-07 21:05:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 21:13:56 --> Could not find the language line "Home"
ERROR - 2023-11-07 21:15:01 --> Could not find the language line "Home"
ERROR - 2023-11-07 21:22:43 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 21:26:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-07 21:26:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-07 21:26:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-07 21:26:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-07 21:26:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-07 21:26:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-07 21:26:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 21:26:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-11-07 21:34:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 21:37:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 21:39:40 --> Could not find the language line "Home"
ERROR - 2023-11-07 21:43:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 21:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 21:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 21:47:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 21:47:56 --> Could not find the language line "Home"
ERROR - 2023-11-07 21:48:16 --> Could not find the language line "Home"
ERROR - 2023-11-07 21:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 21:49:49 --> Could not find the language line "Home"
ERROR - 2023-11-07 21:50:46 --> Could not find the language line "Home"
ERROR - 2023-11-07 21:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 21:59:19 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-11-07 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-11-07 22:01:07 --> Could not find the language line "Home"
ERROR - 2023-11-07 22:05:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:06:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 22:15:31 --> Could not find the language line "Home"
ERROR - 2023-11-07 22:15:56 --> Could not find the language line "Home"
ERROR - 2023-11-07 22:16:29 --> Could not find the language line "Home"
ERROR - 2023-11-07 22:21:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:28:51 --> Could not find the language line "Home"
ERROR - 2023-11-07 22:28:58 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 22:29:24 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:29:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:30:09 --> Could not find the language line "Home"
ERROR - 2023-11-07 22:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 22:35:31 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:37:10 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:41:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:42:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 22:42:45 --> Could not find the language line "Home"
ERROR - 2023-11-07 22:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 22:44:21 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:45:16 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:46:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 22:46:34 --> Could not find the language line "Home"
ERROR - 2023-11-07 22:48:27 --> Could not find the language line "Home"
ERROR - 2023-11-07 22:50:44 --> Could not find the language line "Bracelets"
ERROR - 2023-11-07 22:51:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:51:47 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 22:51:50 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:52:14 --> Could not find the language line "Home"
ERROR - 2023-11-07 22:52:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:54:09 --> Could not find the language line "Home"
ERROR - 2023-11-07 22:54:33 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 22:55:14 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-11-07 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-11-07 23:00:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-11-07 23:13:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-11-07 23:17:45 --> Could not find the language line "Home"
ERROR - 2023-11-07 23:17:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:18:28 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-11-07 23:31:23 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:34:38 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:36:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-11-07 23:37:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:38:05 --> Could not find the language line "Home"
ERROR - 2023-11-07 23:38:05 --> Could not find the language line "Home"
ERROR - 2023-11-07 23:40:12 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:41:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:41:54 --> Could not find the language line "Home"
ERROR - 2023-11-07 23:49:22 --> Could not find the language line "Home"
ERROR - 2023-11-07 23:50:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-07 23:50:42 --> Could not find the language line "Home"
ERROR - 2023-11-07 23:50:55 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:51:16 --> Could not find the language line "Home"
ERROR - 2023-11-07 23:51:18 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:51:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:51:26 --> Could not find the language line "Home"
ERROR - 2023-11-07 23:51:27 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:51:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:51:44 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:51:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 23:52:25 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 23:52:31 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-11-07 23:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 23:52:48 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:52:49 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:52:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:52:52 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:52:54 --> Could not find the language line "Home"
ERROR - 2023-11-07 23:53:02 --> Could not find the language line "Perfume"
ERROR - 2023-11-07 23:53:14 --> Could not find the language line "Home"
ERROR - 2023-11-07 23:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 23:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 23:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 23:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 23:54:37 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:54:39 --> Could not find the language line "Home"
ERROR - 2023-11-07 23:54:51 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 23:56:32 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 23:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-11-07 23:58:09 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:58:15 --> Could not find the language line "Clothing"
ERROR - 2023-11-07 23:58:44 --> Could not find the language line "Bracelets"
ERROR - 2023-11-07 23:58:50 --> Could not find the language line "Bracelets"
ERROR - 2023-11-07 23:58:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-11-07 23:58:56 --> Could not find the language line "Home"
ERROR - 2023-11-07 23:59:18 --> Could not find the language line "Clothing"
