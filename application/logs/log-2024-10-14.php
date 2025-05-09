<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-14 00:02:40 --> Could not find the language line "Home"
ERROR - 2024-10-14 00:12:14 --> Could not find the language line "Home"
ERROR - 2024-10-14 00:15:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-14 00:19:53 --> Could not find the language line "Home"
ERROR - 2024-10-14 00:27:31 --> Could not find the language line "Home"
ERROR - 2024-10-14 00:33:07 --> Could not find the language line "Home"
ERROR - 2024-10-14 00:42:11 --> Could not find the language line "Home"
ERROR - 2024-10-14 00:50:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-14 00:50:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-14 00:50:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-14 01:02:15 --> Could not find the language line "Home"
ERROR - 2024-10-14 01:12:21 --> Could not find the language line "Home"
ERROR - 2024-10-14 01:42:18 --> Could not find the language line "Home"
ERROR - 2024-10-14 01:57:52 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-14 01:58:56 --> Could not find the language line "Home"
ERROR - 2024-10-14 01:59:00 --> 404 Page Not Found: Wp-includes/css
ERROR - 2024-10-14 01:59:02 --> 404 Page Not Found: Media/system
ERROR - 2024-10-14 02:04:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-14 02:04:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 100
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-14 02:04:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-14 02:12:14 --> Could not find the language line "Home"
ERROR - 2024-10-14 02:37:15 --> Could not find the language line "Home"
ERROR - 2024-10-14 02:42:11 --> Could not find the language line "Home"
ERROR - 2024-10-14 02:54:55 --> Could not find the language line "Home"
ERROR - 2024-10-14 02:57:47 --> Could not find the language line "products"
ERROR - 2024-10-14 03:12:12 --> Could not find the language line "Home"
ERROR - 2024-10-14 03:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 03:28:22 --> Could not find the language line "products"
ERROR - 2024-10-14 03:42:13 --> Could not find the language line "Home"
ERROR - 2024-10-14 04:12:13 --> Could not find the language line "Home"
ERROR - 2024-10-14 04:42:12 --> Could not find the language line "Home"
ERROR - 2024-10-14 05:01:46 --> Could not find the language line "Home"
ERROR - 2024-10-14 05:01:50 --> Could not find the language line "Home"
ERROR - 2024-10-14 05:12:12 --> Could not find the language line "Home"
ERROR - 2024-10-14 05:15:22 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-10-14 05:34:08 --> Could not find the language line "Clothing"
ERROR - 2024-10-14 05:42:11 --> Could not find the language line "Home"
ERROR - 2024-10-14 05:44:00 --> Could not find the language line "Home"
ERROR - 2024-10-14 05:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 05:44:49 --> Could not find the language line "Home"
ERROR - 2024-10-14 05:45:34 --> Could not find the language line "Clothing"
ERROR - 2024-10-14 05:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 05:46:32 --> Could not find the language line "Clothing"
ERROR - 2024-10-14 05:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 05:46:58 --> Could not find the language line "Clothing"
ERROR - 2024-10-14 05:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 05:47:12 --> Could not find the language line "Clothing"
ERROR - 2024-10-14 05:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 05:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 05:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 05:57:35 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-10-14 06:12:12 --> Could not find the language line "Home"
ERROR - 2024-10-14 06:32:29 --> Could not find the language line "Clothing"
ERROR - 2024-10-14 06:34:33 --> Could not find the language line "Clothing"
ERROR - 2024-10-14 06:42:11 --> Could not find the language line "Home"
ERROR - 2024-10-14 06:42:21 --> Could not find the language line "Home"
ERROR - 2024-10-14 06:43:53 --> Could not find the language line "Home"
ERROR - 2024-10-14 06:50:21 --> Could not find the language line "Home"
ERROR - 2024-10-14 06:55:31 --> Could not find the language line "Home"
ERROR - 2024-10-14 06:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 06:57:32 --> Could not find the language line "Home"
ERROR - 2024-10-14 07:12:12 --> Could not find the language line "Home"
ERROR - 2024-10-14 07:42:12 --> Could not find the language line "Home"
ERROR - 2024-10-14 07:49:24 --> Could not find the language line "Home"
ERROR - 2024-10-14 07:50:01 --> Could not find the language line "Clothing"
ERROR - 2024-10-14 08:00:37 --> Could not find the language line "Home"
ERROR - 2024-10-14 08:12:13 --> Could not find the language line "Home"
ERROR - 2024-10-14 08:20:36 --> Could not find the language line "Home"
ERROR - 2024-10-14 08:42:14 --> Could not find the language line "Home"
ERROR - 2024-10-14 09:04:41 --> Could not find the language line "products"
ERROR - 2024-10-14 09:12:14 --> Could not find the language line "Home"
ERROR - 2024-10-14 09:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 09:42:13 --> Could not find the language line "Home"
ERROR - 2024-10-14 09:44:02 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-14 10:10:37 --> Could not find the language line "Home"
ERROR - 2024-10-14 10:10:37 --> 404 Page Not Found: App/index
ERROR - 2024-10-14 10:10:37 --> 404 Page Not Found: Login/index
ERROR - 2024-10-14 10:10:38 --> 404 Page Not Found: Assets/mail
ERROR - 2024-10-14 10:10:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-14 10:10:38 --> 404 Page Not Found: Assets/mail
ERROR - 2024-10-14 10:12:15 --> Could not find the language line "Home"
ERROR - 2024-10-14 10:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 10:42:13 --> Could not find the language line "Home"
ERROR - 2024-10-14 11:12:14 --> Could not find the language line "Home"
ERROR - 2024-10-14 11:20:01 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-14 11:22:50 --> Could not find the language line "Home"
ERROR - 2024-10-14 11:29:30 --> Could not find the language line "Home"
ERROR - 2024-10-14 11:38:53 --> Could not find the language line "Home"
ERROR - 2024-10-14 11:39:01 --> Could not find the language line "Home"
ERROR - 2024-10-14 11:39:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-14 11:39:19 --> Could not find the language line "Home"
ERROR - 2024-10-14 11:42:14 --> Could not find the language line "Home"
ERROR - 2024-10-14 11:42:58 --> Could not find the language line "Home"
ERROR - 2024-10-14 11:58:44 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-14 11:58:44 --> Could not find the language line "Home"
ERROR - 2024-10-14 12:12:15 --> Could not find the language line "Home"
ERROR - 2024-10-14 12:15:46 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-14 12:37:01 --> Could not find the language line "Home"
ERROR - 2024-10-14 12:37:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-14 12:37:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-14 12:37:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-14 12:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 12:42:15 --> Could not find the language line "Home"
ERROR - 2024-10-14 12:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 13:05:40 --> Could not find the language line "Home"
ERROR - 2024-10-14 13:06:43 --> Could not find the language line "Clothing"
ERROR - 2024-10-14 13:12:15 --> Could not find the language line "Home"
ERROR - 2024-10-14 13:20:33 --> Could not find the language line "Home"
ERROR - 2024-10-14 13:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 13:31:15 --> Could not find the language line "Home"
ERROR - 2024-10-14 13:32:40 --> Could not find the language line "Home"
ERROR - 2024-10-14 13:39:16 --> Could not find the language line "Home"
ERROR - 2024-10-14 13:42:00 --> Could not find the language line "Home"
ERROR - 2024-10-14 13:42:16 --> Could not find the language line "Home"
ERROR - 2024-10-14 14:12:16 --> Could not find the language line "Home"
ERROR - 2024-10-14 14:34:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-14 14:42:17 --> Could not find the language line "Home"
ERROR - 2024-10-14 14:44:55 --> Could not find the language line "Home"
ERROR - 2024-10-14 15:12:17 --> Could not find the language line "Home"
ERROR - 2024-10-14 15:15:44 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-14 15:15:44 --> Could not find the language line "Home"
ERROR - 2024-10-14 15:15:44 --> Could not find the language line "Home"
ERROR - 2024-10-14 15:20:47 --> Could not find the language line "Home"
ERROR - 2024-10-14 15:41:32 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-10-14 15:41:32 --> Could not find the language line "Home"
ERROR - 2024-10-14 15:41:33 --> 404 Page Not Found: Wp/index
ERROR - 2024-10-14 15:41:33 --> 404 Page Not Found: Bc/index
ERROR - 2024-10-14 15:41:34 --> 404 Page Not Found: Bk/index
ERROR - 2024-10-14 15:41:34 --> 404 Page Not Found: Backup/index
ERROR - 2024-10-14 15:41:36 --> 404 Page Not Found: New/index
ERROR - 2024-10-14 15:41:36 --> 404 Page Not Found: Main/index
ERROR - 2024-10-14 15:41:37 --> Could not find the language line "Home"
ERROR - 2024-10-14 15:42:17 --> Could not find the language line "Home"
ERROR - 2024-10-14 16:12:18 --> Could not find the language line "Home"
ERROR - 2024-10-14 16:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 16:42:17 --> Could not find the language line "Home"
ERROR - 2024-10-14 17:02:51 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-14 17:02:51 --> Could not find the language line "Home"
ERROR - 2024-10-14 17:02:51 --> Could not find the language line "Home"
ERROR - 2024-10-14 17:08:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-14 17:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 17:12:18 --> Could not find the language line "Home"
ERROR - 2024-10-14 17:19:02 --> Could not find the language line "Socks"
ERROR - 2024-10-14 17:42:18 --> Could not find the language line "Home"
ERROR - 2024-10-14 18:04:58 --> Could not find the language line "Socks"
ERROR - 2024-10-14 18:12:18 --> Could not find the language line "Home"
ERROR - 2024-10-14 18:42:19 --> Could not find the language line "Home"
ERROR - 2024-10-14 19:12:19 --> Could not find the language line "Home"
ERROR - 2024-10-14 19:32:29 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-14 19:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 19:35:57 --> Could not find the language line "Home"
ERROR - 2024-10-14 19:42:19 --> Could not find the language line "Home"
ERROR - 2024-10-14 19:45:35 --> Could not find the language line "Home"
ERROR - 2024-10-14 19:48:04 --> Could not find the language line "Home"
ERROR - 2024-10-14 19:58:33 --> Could not find the language line "Home"
ERROR - 2024-10-14 20:12:20 --> Could not find the language line "Home"
ERROR - 2024-10-14 20:24:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-14 20:24:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-14 20:24:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-14 20:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 20:35:09 --> Could not find the language line "Home"
ERROR - 2024-10-14 20:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 20:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 20:42:19 --> Could not find the language line "Home"
ERROR - 2024-10-14 20:45:14 --> Could not find the language line "Home"
ERROR - 2024-10-14 20:48:13 --> Could not find the language line "Home"
ERROR - 2024-10-14 20:52:44 --> Could not find the language line "Home"
ERROR - 2024-10-14 20:58:09 --> Could not find the language line "Home"
ERROR - 2024-10-14 21:05:45 --> Could not find the language line "Home"
ERROR - 2024-10-14 21:12:21 --> Could not find the language line "Home"
ERROR - 2024-10-14 21:18:24 --> Could not find the language line "Home"
ERROR - 2024-10-14 21:39:29 --> Could not find the language line "Home"
ERROR - 2024-10-14 21:39:29 --> 404 Page Not Found: Feed/index
ERROR - 2024-10-14 21:42:22 --> Could not find the language line "Home"
ERROR - 2024-10-14 22:12:21 --> Could not find the language line "Home"
ERROR - 2024-10-14 22:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 22:42:28 --> Could not find the language line "Home"
ERROR - 2024-10-14 22:45:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-14 23:12:25 --> Could not find the language line "Home"
ERROR - 2024-10-14 23:26:56 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-14 23:26:56 --> Could not find the language line "Home"
ERROR - 2024-10-14 23:26:57 --> Could not find the language line "Home"
ERROR - 2024-10-14 23:27:44 --> Could not find the language line "Home"
ERROR - 2024-10-14 23:42:28 --> Could not find the language line "Home"
ERROR - 2024-10-14 23:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-14 23:55:16 --> Could not find the language line "Sunglasses"
