<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-02 00:16:34 --> Could not find the language line "Home"
ERROR - 2025-01-02 00:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 00:26:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-02 00:27:43 --> Could not find the language line "Clothing"
ERROR - 2025-01-02 00:28:23 --> Could not find the language line "Home"
ERROR - 2025-01-02 00:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 00:46:37 --> Could not find the language line "Home"
ERROR - 2025-01-02 01:16:37 --> Could not find the language line "Home"
ERROR - 2025-01-02 01:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 01:39:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-02 01:39:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-02 01:39:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-02 01:45:03 --> 404 Page Not Found: _profiler/phpinfo
ERROR - 2025-01-02 01:45:04 --> 404 Page Not Found: _profiler/phpinfo.php
ERROR - 2025-01-02 01:46:35 --> Could not find the language line "Home"
ERROR - 2025-01-02 01:54:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-02 02:16:37 --> Could not find the language line "Home"
ERROR - 2025-01-02 02:23:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-02 02:27:05 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-02 02:46:39 --> Could not find the language line "Home"
ERROR - 2025-01-02 02:55:25 --> Could not find the language line "Clothing"
ERROR - 2025-01-02 02:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 02:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 02:59:57 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:01:53 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-01-02 03:16:40 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:17:56 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2025-01-02 03:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 03:25:55 --> Severity: Notice --> Undefined index: discount /home/samfit/public_html/application/controllers/Checkout.php 29
ERROR - 2025-01-02 03:25:55 --> Severity: Notice --> Undefined index: coupon_id /home/samfit/public_html/application/controllers/Checkout.php 30
ERROR - 2025-01-02 03:25:55 --> Severity: Notice --> Undefined index: discount_type /home/samfit/public_html/application/controllers/Checkout.php 31
ERROR - 2025-01-02 03:25:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2025-01-02 03:46:39 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:52:53 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:53:17 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:53:17 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:53:56 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:54:00 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:54:00 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:54:00 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:54:01 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:54:02 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:54:06 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:54:13 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:54:15 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:54:15 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:54:23 --> Could not find the language line "Home"
ERROR - 2025-01-02 03:54:31 --> Could not find the language line "Home"
ERROR - 2025-01-02 04:08:05 --> Could not find the language line "Clothing"
ERROR - 2025-01-02 04:16:39 --> Could not find the language line "Home"
ERROR - 2025-01-02 04:27:56 --> Could not find the language line "Home"
ERROR - 2025-01-02 04:28:06 --> Could not find the language line "Home"
ERROR - 2025-01-02 04:28:08 --> Could not find the language line "Home"
ERROR - 2025-01-02 04:28:08 --> Could not find the language line "Home"
ERROR - 2025-01-02 04:38:01 --> 404 Page Not Found: Users/home
ERROR - 2025-01-02 04:40:19 --> Could not find the language line "Home"
ERROR - 2025-01-02 04:46:44 --> Could not find the language line "Home"
ERROR - 2025-01-02 04:51:57 --> 404 Page Not Found: Users/users
ERROR - 2025-01-02 04:53:01 --> Could not find the language line "Home"
ERROR - 2025-01-02 04:54:21 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-02 04:57:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-02 05:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 05:06:56 --> Could not find the language line "Home"
ERROR - 2025-01-02 05:07:44 --> 404 Page Not Found: Users/accounts
ERROR - 2025-01-02 05:09:04 --> Could not find the language line "Home"
ERROR - 2025-01-02 05:11:21 --> Could not find the language line "Home"
ERROR - 2025-01-02 05:16:39 --> Could not find the language line "Home"
ERROR - 2025-01-02 05:29:42 --> 404 Page Not Found: Users/accounts
ERROR - 2025-01-02 05:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 05:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 05:46:38 --> Could not find the language line "Home"
ERROR - 2025-01-02 05:47:37 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-02 05:48:58 --> 404 Page Not Found: Users/users
ERROR - 2025-01-02 05:51:50 --> Could not find the language line "Home"
ERROR - 2025-01-02 06:16:37 --> Could not find the language line "Home"
ERROR - 2025-01-02 06:16:58 --> Could not find the language line "Home"
ERROR - 2025-01-02 06:31:30 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-02 06:32:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-02 06:32:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-02 06:32:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-02 06:46:39 --> Could not find the language line "Home"
ERROR - 2025-01-02 06:48:40 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-02 06:49:59 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-02 07:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 07:03:28 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-02 07:16:39 --> Could not find the language line "Home"
ERROR - 2025-01-02 07:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 07:21:24 --> Could not find the language line "Home"
ERROR - 2025-01-02 07:38:02 --> Could not find the language line "Home"
ERROR - 2025-01-02 07:46:38 --> Could not find the language line "Home"
ERROR - 2025-01-02 08:08:03 --> Could not find the language line "Home"
ERROR - 2025-01-02 08:08:06 --> Could not find the language line "Home"
ERROR - 2025-01-02 08:10:39 --> Could not find the language line "Home"
ERROR - 2025-01-02 08:11:01 --> 404 Page Not Found: Assets/mail
ERROR - 2025-01-02 08:11:40 --> Could not find the language line "Home"
ERROR - 2025-01-02 08:12:09 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-02 08:16:38 --> Could not find the language line "Home"
ERROR - 2025-01-02 08:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 08:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 08:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 08:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 08:20:28 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-02 08:22:25 --> Could not find the language line "Home"
ERROR - 2025-01-02 08:32:55 --> Could not find the language line "Clothing"
ERROR - 2025-01-02 08:39:08 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-02 08:46:39 --> Could not find the language line "Home"
ERROR - 2025-01-02 09:08:21 --> Could not find the language line "Home"
ERROR - 2025-01-02 09:08:21 --> Could not find the language line "Home"
ERROR - 2025-01-02 09:08:52 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-02 09:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 09:16:39 --> Could not find the language line "Home"
ERROR - 2025-01-02 09:18:58 --> Could not find the language line "products"
ERROR - 2025-01-02 09:28:07 --> Could not find the language line "Home"
ERROR - 2025-01-02 09:33:59 --> Could not find the language line "Clothing"
ERROR - 2025-01-02 09:35:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-02 09:35:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-02 09:36:17 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-02 09:37:20 --> Could not find the language line "Other"
ERROR - 2025-01-02 09:40:22 --> Could not find the language line "Clothing"
ERROR - 2025-01-02 09:46:39 --> Could not find the language line "Home"
ERROR - 2025-01-02 09:48:25 --> Could not find the language line "Other"
ERROR - 2025-01-02 09:52:56 --> Could not find the language line "Other"
ERROR - 2025-01-02 09:56:44 --> Could not find the language line "Perfume"
ERROR - 2025-01-02 10:00:19 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-02 10:01:25 --> Could not find the language line "Disclaimer"
ERROR - 2025-01-02 10:04:24 --> Could not find the language line "Clothing"
ERROR - 2025-01-02 10:16:40 --> Could not find the language line "Home"
ERROR - 2025-01-02 10:22:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-02 10:22:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-02 10:24:20 --> Could not find the language line "Home"
ERROR - 2025-01-02 10:46:40 --> Could not find the language line "Home"
ERROR - 2025-01-02 11:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 11:16:40 --> Could not find the language line "Home"
ERROR - 2025-01-02 11:18:53 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-02 11:26:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-02 11:26:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 100
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-02 11:26:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-02 11:36:49 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-02 11:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 11:46:40 --> Could not find the language line "Home"
ERROR - 2025-01-02 11:54:34 --> Could not find the language line "Home"
ERROR - 2025-01-02 11:54:35 --> Could not find the language line "Home"
ERROR - 2025-01-02 12:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 12:16:40 --> Could not find the language line "Home"
ERROR - 2025-01-02 12:17:57 --> Could not find the language line "Home"
ERROR - 2025-01-02 12:18:16 --> Could not find the language line "Home"
ERROR - 2025-01-02 12:19:51 --> Could not find the language line "Home"
ERROR - 2025-01-02 12:23:49 --> Could not find the language line "Home"
ERROR - 2025-01-02 12:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 12:27:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-02 12:32:21 --> Could not find the language line "Socks"
ERROR - 2025-01-02 12:38:07 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2025-01-02 12:46:41 --> Could not find the language line "Home"
ERROR - 2025-01-02 13:08:09 --> Could not find the language line "Home"
ERROR - 2025-01-02 13:16:42 --> Could not find the language line "Home"
ERROR - 2025-01-02 13:23:03 --> 404 Page Not Found: Wp-admin/setup-config.php
ERROR - 2025-01-02 13:23:03 --> 404 Page Not Found: Wordpress/wp-admin
ERROR - 2025-01-02 13:34:43 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2025-01-02 13:42:19 --> Could not find the language line "Home"
ERROR - 2025-01-02 13:42:58 --> Could not find the language line "Other"
ERROR - 2025-01-02 13:46:41 --> Could not find the language line "Home"
ERROR - 2025-01-02 13:50:14 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-02 13:52:17 --> Could not find the language line "Home"
ERROR - 2025-01-02 13:54:44 --> Could not find the language line "Home"
ERROR - 2025-01-02 13:57:18 --> Could not find the language line "Home"
ERROR - 2025-01-02 14:05:38 --> Could not find the language line "Clothing"
ERROR - 2025-01-02 14:07:51 --> Could not find the language line "Clothing"
ERROR - 2025-01-02 14:07:59 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-02 14:11:02 --> 404 Page Not Found: Wp-admin/setup-config.php
ERROR - 2025-01-02 14:11:02 --> 404 Page Not Found: Wordpress/wp-admin
ERROR - 2025-01-02 14:13:01 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-02 14:16:42 --> Could not find the language line "Home"
ERROR - 2025-01-02 14:21:40 --> Could not find the language line "Bracelets"
ERROR - 2025-01-02 14:31:02 --> Could not find the language line "Home"
ERROR - 2025-01-02 14:32:32 --> Could not find the language line "Clothing"
ERROR - 2025-01-02 14:41:31 --> Could not find the language line "Home"
ERROR - 2025-01-02 14:46:43 --> Could not find the language line "Home"
ERROR - 2025-01-02 15:12:08 --> Could not find the language line "Home"
ERROR - 2025-01-02 15:16:43 --> Could not find the language line "Home"
ERROR - 2025-01-02 15:22:09 --> Could not find the language line "Home"
ERROR - 2025-01-02 15:30:48 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-02 15:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 15:32:11 --> Could not find the language line "Home"
ERROR - 2025-01-02 15:46:43 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:16:43 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:32:56 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:33:16 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:33:16 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:33:32 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:33:32 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:41:07 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:41:10 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:46:43 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:53:09 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-02 16:53:34 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:53:35 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:53:37 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:53:41 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:57:47 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:57:51 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:57:51 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:57:51 --> Could not find the language line "Home"
ERROR - 2025-01-02 16:58:01 --> Could not find the language line "Home"
ERROR - 2025-01-02 17:05:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-02 17:16:44 --> Could not find the language line "Home"
ERROR - 2025-01-02 17:25:16 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-01-02 17:25:17 --> Could not find the language line "Home"
ERROR - 2025-01-02 17:25:17 --> 404 Page Not Found: Wp/index
ERROR - 2025-01-02 17:25:18 --> 404 Page Not Found: Bc/index
ERROR - 2025-01-02 17:25:18 --> 404 Page Not Found: Bk/index
ERROR - 2025-01-02 17:25:18 --> 404 Page Not Found: Backup/index
ERROR - 2025-01-02 17:25:19 --> 404 Page Not Found: New/index
ERROR - 2025-01-02 17:25:19 --> 404 Page Not Found: Main/index
ERROR - 2025-01-02 17:25:20 --> Could not find the language line "Home"
ERROR - 2025-01-02 17:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 17:46:44 --> Could not find the language line "Home"
ERROR - 2025-01-02 18:00:44 --> Could not find the language line "Home"
ERROR - 2025-01-02 18:12:50 --> Could not find the language line "Clothing"
ERROR - 2025-01-02 18:13:00 --> Could not find the language line "Clothing"
ERROR - 2025-01-02 18:13:21 --> Could not find the language line "Home"
ERROR - 2025-01-02 18:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 18:16:44 --> Could not find the language line "Home"
ERROR - 2025-01-02 18:43:30 --> Could not find the language line "Home"
ERROR - 2025-01-02 18:46:44 --> Could not find the language line "Home"
ERROR - 2025-01-02 18:54:07 --> Could not find the language line "Home"
ERROR - 2025-01-02 19:11:33 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-02 19:11:33 --> Could not find the language line "Home"
ERROR - 2025-01-02 19:11:33 --> Could not find the language line "Home"
ERROR - 2025-01-02 19:16:44 --> Could not find the language line "Home"
ERROR - 2025-01-02 19:27:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-02 19:32:16 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-02 19:32:16 --> Could not find the language line "Home"
ERROR - 2025-01-02 19:32:17 --> Could not find the language line "Home"
ERROR - 2025-01-02 19:34:00 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-02 19:34:04 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-02 19:34:09 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-02 19:34:14 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-02 19:34:19 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-02 19:34:23 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-02 19:34:28 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-02 19:34:33 --> Could not find the language line "Clothing"
ERROR - 2025-01-02 19:34:37 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-02 19:34:42 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-02 19:34:47 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-02 19:34:52 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-02 19:34:57 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-02 19:35:01 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-02 19:46:45 --> Could not find the language line "Home"
ERROR - 2025-01-02 19:48:11 --> Could not find the language line "Other"
ERROR - 2025-01-02 19:49:01 --> Could not find the language line "Home"
ERROR - 2025-01-02 19:52:16 --> Could not find the language line "Home"
ERROR - 2025-01-02 19:53:23 --> Could not find the language line "Home"
ERROR - 2025-01-02 20:16:45 --> Could not find the language line "Home"
ERROR - 2025-01-02 20:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 20:46:45 --> Could not find the language line "Home"
ERROR - 2025-01-02 20:55:12 --> Could not find the language line "Home"
ERROR - 2025-01-02 21:14:00 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-02 21:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 21:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 21:16:46 --> Could not find the language line "Home"
ERROR - 2025-01-02 21:16:58 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-02 21:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 21:17:31 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-02 21:18:41 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-02 21:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 21:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 21:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 21:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 21:46:46 --> Could not find the language line "Home"
ERROR - 2025-01-02 21:47:03 --> Could not find the language line "Home"
ERROR - 2025-01-02 21:49:18 --> 404 Page Not Found: Wordpress/wp-admin
ERROR - 2025-01-02 22:16:49 --> Could not find the language line "Home"
ERROR - 2025-01-02 22:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-02 22:30:48 --> Could not find the language line "Home"
ERROR - 2025-01-02 22:36:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-02 22:36:52 --> Could not find the language line "Home"
ERROR - 2025-01-02 22:37:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-02 22:37:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-02 22:42:59 --> Could not find the language line "Home"
ERROR - 2025-01-02 22:46:48 --> Could not find the language line "Home"
ERROR - 2025-01-02 22:49:02 --> Could not find the language line "Home"
ERROR - 2025-01-02 23:16:50 --> Could not find the language line "Home"
ERROR - 2025-01-02 23:46:51 --> Could not find the language line "Home"
