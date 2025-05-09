<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-19 00:00:02 --> Could not find the language line "Home"
ERROR - 2024-12-19 00:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:13:25 --> Could not find the language line "Home"
ERROR - 2024-12-19 00:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:35:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-19 00:43:24 --> Could not find the language line "Home"
ERROR - 2024-12-19 00:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 00:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:13:26 --> Could not find the language line "Home"
ERROR - 2024-12-19 01:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:16:57 --> Could not find the language line "Home"
ERROR - 2024-12-19 01:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:32:18 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 01:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:43:26 --> Could not find the language line "Home"
ERROR - 2024-12-19 01:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 01:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:13:26 --> Could not find the language line "Home"
ERROR - 2024-12-19 02:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:19:43 --> Could not find the language line "Home"
ERROR - 2024-12-19 02:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 02:43:23 --> Could not find the language line "Home"
ERROR - 2024-12-19 02:47:38 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 02:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 03:13:23 --> Could not find the language line "Home"
ERROR - 2024-12-19 03:14:27 --> Could not find the language line "Home"
ERROR - 2024-12-19 03:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 03:22:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-19 03:22:23 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-19 03:33:58 --> Could not find the language line "Home"
ERROR - 2024-12-19 03:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 03:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 03:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 03:42:36 --> Could not find the language line "Home"
ERROR - 2024-12-19 03:42:50 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 03:43:00 --> Could not find the language line "Home"
ERROR - 2024-12-19 03:43:02 --> Could not find the language line "Home"
ERROR - 2024-12-19 03:43:23 --> Could not find the language line "Home"
ERROR - 2024-12-19 03:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 03:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 03:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:01:04 --> Could not find the language line "Home"
ERROR - 2024-12-19 04:04:43 --> Could not find the language line "Home"
ERROR - 2024-12-19 04:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:08:13 --> Could not find the language line "Home"
ERROR - 2024-12-19 04:08:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-19 04:08:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-19 04:08:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-19 04:13:27 --> Could not find the language line "Home"
ERROR - 2024-12-19 04:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:23:36 --> Could not find the language line "Home"
ERROR - 2024-12-19 04:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:33:11 --> Could not find the language line "Home"
ERROR - 2024-12-19 04:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:43:25 --> Could not find the language line "Home"
ERROR - 2024-12-19 04:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 04:59:46 --> Could not find the language line "Home"
ERROR - 2024-12-19 05:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:06:31 --> Could not find the language line "Home"
ERROR - 2024-12-19 05:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:09:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-19 05:13:24 --> Could not find the language line "Home"
ERROR - 2024-12-19 05:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:34:59 --> Could not find the language line "Socks"
ERROR - 2024-12-19 05:38:36 --> Could not find the language line "Other"
ERROR - 2024-12-19 05:40:15 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-19 05:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:43:24 --> Could not find the language line "Home"
ERROR - 2024-12-19 05:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 05:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 06:09:58 --> Could not find the language line "Home"
ERROR - 2024-12-19 06:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 06:13:24 --> Could not find the language line "Home"
ERROR - 2024-12-19 06:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 06:16:53 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-19 06:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 06:28:09 --> Could not find the language line "Home"
ERROR - 2024-12-19 06:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 06:28:14 --> Could not find the language line "Home"
ERROR - 2024-12-19 06:29:41 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-12-19 06:29:42 --> Could not find the language line "Home"
ERROR - 2024-12-19 06:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 06:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 06:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 06:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 06:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 06:43:24 --> Could not find the language line "Home"
ERROR - 2024-12-19 06:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:11:18 --> Could not find the language line "Home"
ERROR - 2024-12-19 07:13:25 --> Could not find the language line "Home"
ERROR - 2024-12-19 07:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:34:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 07:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:43:26 --> Could not find the language line "Home"
ERROR - 2024-12-19 07:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:45:56 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 07:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:50:22 --> Could not find the language line "Home"
ERROR - 2024-12-19 07:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:54:19 --> Could not find the language line "Home"
ERROR - 2024-12-19 07:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 07:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:00:56 --> Could not find the language line "Home"
ERROR - 2024-12-19 08:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:11:47 --> Could not find the language line "Home"
ERROR - 2024-12-19 08:11:47 --> Could not find the language line "Home"
ERROR - 2024-12-19 08:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:13:25 --> Could not find the language line "Home"
ERROR - 2024-12-19 08:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:23:40 --> Could not find the language line "Home"
ERROR - 2024-12-19 08:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:25:22 --> Could not find the language line "Home"
ERROR - 2024-12-19 08:27:25 --> Could not find the language line "Home"
ERROR - 2024-12-19 08:27:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-19 08:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:28:25 --> Could not find the language line "Home"
ERROR - 2024-12-19 08:28:27 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-19 08:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:28:44 --> Could not find the language line "Home"
ERROR - 2024-12-19 08:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:38:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-19 08:39:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:40:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 08:40:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 08:43:25 --> Could not find the language line "Home"
ERROR - 2024-12-19 08:43:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 08:48:44 --> Could not find the language line "Other"
ERROR - 2024-12-19 08:50:07 --> Could not find the language line "Other"
ERROR - 2024-12-19 08:51:39 --> Could not find the language line "Perfume"
ERROR - 2024-12-19 08:55:15 --> Could not find the language line "Home"
ERROR - 2024-12-19 08:55:16 --> Could not find the language line "Home"
ERROR - 2024-12-19 08:55:17 --> Could not find the language line "Home"
ERROR - 2024-12-19 08:55:28 --> Could not find the language line "Home"
ERROR - 2024-12-19 08:55:31 --> Could not find the language line "Disclaimer"
ERROR - 2024-12-19 08:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 08:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:04:50 --> Could not find the language line "Disclaimer"
ERROR - 2024-12-19 09:07:04 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 09:07:10 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 09:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:07:24 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 09:07:30 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 09:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:07:37 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 09:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:11:17 --> Severity: Notice --> Undefined index: discount /home/samfit/public_html/application/controllers/Checkout.php 29
ERROR - 2024-12-19 09:11:17 --> Severity: Notice --> Undefined index: coupon_id /home/samfit/public_html/application/controllers/Checkout.php 30
ERROR - 2024-12-19 09:11:17 --> Severity: Notice --> Undefined index: discount_type /home/samfit/public_html/application/controllers/Checkout.php 31
ERROR - 2024-12-19 09:11:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2024-12-19 09:13:26 --> Could not find the language line "Home"
ERROR - 2024-12-19 09:32:51 --> Could not find the language line "Home"
ERROR - 2024-12-19 09:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:34:39 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-19 09:38:27 --> Could not find the language line "Home"
ERROR - 2024-12-19 09:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:43:27 --> Could not find the language line "Home"
ERROR - 2024-12-19 09:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:44:52 --> Could not find the language line "Home"
ERROR - 2024-12-19 09:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 09:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:13:27 --> Could not find the language line "Home"
ERROR - 2024-12-19 10:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:34:14 --> Could not find the language line "Home"
ERROR - 2024-12-19 10:34:14 --> Could not find the language line "Home"
ERROR - 2024-12-19 10:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 10:43:27 --> Could not find the language line "Home"
ERROR - 2024-12-19 10:48:44 --> Could not find the language line "Home"
ERROR - 2024-12-19 11:13:28 --> Could not find the language line "Home"
ERROR - 2024-12-19 11:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 11:38:49 --> Could not find the language line "Home"
ERROR - 2024-12-19 11:39:05 --> Could not find the language line "Home"
ERROR - 2024-12-19 11:43:27 --> Could not find the language line "Home"
ERROR - 2024-12-19 11:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 11:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 11:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 11:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 11:48:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-19 11:50:46 --> Could not find the language line "Home"
ERROR - 2024-12-19 11:52:53 --> Could not find the language line "Home"
ERROR - 2024-12-19 11:54:57 --> Could not find the language line "Home"
ERROR - 2024-12-19 11:55:17 --> Could not find the language line "Home"
ERROR - 2024-12-19 12:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:09:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-19 12:13:29 --> Could not find the language line "Home"
ERROR - 2024-12-19 12:17:49 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-19 12:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:30:50 --> Could not find the language line "Home"
ERROR - 2024-12-19 12:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:39:22 --> Could not find the language line "Home"
ERROR - 2024-12-19 12:43:28 --> Could not find the language line "Home"
ERROR - 2024-12-19 12:44:53 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-19 12:45:41 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-19 12:49:17 --> Could not find the language line "Home"
ERROR - 2024-12-19 12:51:18 --> Could not find the language line "Home"
ERROR - 2024-12-19 12:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 12:53:17 --> Could not find the language line "Home"
ERROR - 2024-12-19 12:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 13:02:28 --> Could not find the language line "Home"
ERROR - 2024-12-19 13:04:52 --> Could not find the language line "Home"
ERROR - 2024-12-19 13:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 13:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 13:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 13:13:28 --> Could not find the language line "Home"
ERROR - 2024-12-19 13:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 13:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 13:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 13:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 13:37:30 --> Could not find the language line "Home"
ERROR - 2024-12-19 13:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 13:43:28 --> Could not find the language line "Home"
ERROR - 2024-12-19 13:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 13:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 13:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 13:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 13:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 14:13:29 --> Could not find the language line "Home"
ERROR - 2024-12-19 14:27:22 --> Could not find the language line "Home"
ERROR - 2024-12-19 14:27:59 --> Could not find the language line "Home"
ERROR - 2024-12-19 14:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 14:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 14:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 14:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 14:43:29 --> Could not find the language line "Home"
ERROR - 2024-12-19 14:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 14:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 14:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 14:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 14:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 14:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 14:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 15:02:34 --> Could not find the language line "Home"
ERROR - 2024-12-19 15:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 15:13:29 --> Could not find the language line "Home"
ERROR - 2024-12-19 15:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 15:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 15:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 15:43:29 --> Could not find the language line "Home"
ERROR - 2024-12-19 15:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 15:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 15:50:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 15:50:26 --> Could not find the language line "Home"
ERROR - 2024-12-19 15:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 15:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:03:09 --> Could not find the language line "Home"
ERROR - 2024-12-19 16:04:32 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 16:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:13:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-19 16:13:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-19 16:13:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-19 16:13:32 --> Could not find the language line "Home"
ERROR - 2024-12-19 16:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:27:45 --> Could not find the language line "Home"
ERROR - 2024-12-19 16:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:34:56 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-19 16:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:43:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-19 16:43:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-19 16:43:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-19 16:43:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-19 16:43:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-19 16:43:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-19 16:43:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-19 16:43:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-19 16:43:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-19 16:43:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-19 16:43:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-19 16:43:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-19 16:43:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-19 16:43:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-19 16:43:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-19 16:43:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-19 16:43:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-19 16:43:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-19 16:43:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-19 16:43:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-19 16:43:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-19 16:43:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-19 16:43:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-19 16:43:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-19 16:43:30 --> Could not find the language line "Home"
ERROR - 2024-12-19 16:43:50 --> Could not find the language line "Home"
ERROR - 2024-12-19 16:44:15 --> Could not find the language line "Home"
ERROR - 2024-12-19 16:44:19 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-19 16:44:33 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-19 16:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:44:36 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-19 16:44:39 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-19 16:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:45:18 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-19 16:45:21 --> Could not find the language line "Home"
ERROR - 2024-12-19 16:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 16:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:12:37 --> Could not find the language line "Home"
ERROR - 2024-12-19 17:13:30 --> Could not find the language line "Home"
ERROR - 2024-12-19 17:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:17:40 --> Could not find the language line "Home"
ERROR - 2024-12-19 17:17:57 --> Could not find the language line "Home"
ERROR - 2024-12-19 17:17:57 --> Could not find the language line "Home"
ERROR - 2024-12-19 17:18:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:18:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:19:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:19:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:19:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:19:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:19:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:19:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:20:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:20:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:20:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:20:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:20:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:20:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:20:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:20:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:20:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:20:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:20:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:20:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:20:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:20:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:21:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:21:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-19 17:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:21:52 --> Could not find the language line "Home"
ERROR - 2024-12-19 17:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:22:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-19 17:22:39 --> Could not find the language line "Home"
ERROR - 2024-12-19 17:22:54 --> Could not find the language line "Home"
ERROR - 2024-12-19 17:23:23 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-19 17:23:25 --> Could not find the language line "Home"
ERROR - 2024-12-19 17:23:29 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 17:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:23:49 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 17:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:24:16 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 17:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:24:40 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 17:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:25:18 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 17:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:25:28 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 17:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:25:44 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 17:26:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 17:26:18 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 17:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:43:31 --> Could not find the language line "Home"
ERROR - 2024-12-19 17:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 17:47:39 --> Could not find the language line "Home"
ERROR - 2024-12-19 18:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 18:04:42 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-19 18:10:29 --> Could not find the language line "Clothing"
ERROR - 2024-12-19 18:13:31 --> Could not find the language line "Home"
ERROR - 2024-12-19 18:22:38 --> Could not find the language line "Home"
ERROR - 2024-12-19 18:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 18:43:31 --> Could not find the language line "Home"
ERROR - 2024-12-19 18:45:42 --> Could not find the language line "Home"
ERROR - 2024-12-19 18:48:15 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-19 19:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 19:07:55 --> Could not find the language line "Home"
ERROR - 2024-12-19 19:13:31 --> Could not find the language line "Home"
ERROR - 2024-12-19 19:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 19:31:32 --> Could not find the language line "Home"
ERROR - 2024-12-19 19:34:09 --> Could not find the language line "Home"
ERROR - 2024-12-19 19:40:20 --> Could not find the language line "Home"
ERROR - 2024-12-19 19:43:32 --> Could not find the language line "Home"
ERROR - 2024-12-19 19:52:29 --> Could not find the language line "Home"
ERROR - 2024-12-19 20:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:13:32 --> Could not find the language line "Home"
ERROR - 2024-12-19 20:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:29:59 --> Could not find the language line "Home"
ERROR - 2024-12-19 20:30:47 --> Could not find the language line "Home"
ERROR - 2024-12-19 20:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:37:37 --> Could not find the language line "Home"
ERROR - 2024-12-19 20:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:43:32 --> Could not find the language line "Home"
ERROR - 2024-12-19 20:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:44:40 --> Could not find the language line "Home"
ERROR - 2024-12-19 20:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:51:29 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-19 20:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 20:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:06:24 --> Could not find the language line "Home"
ERROR - 2024-12-19 21:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:08:01 --> Could not find the language line "Home"
ERROR - 2024-12-19 21:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:08:59 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-19 21:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:13:33 --> Could not find the language line "Home"
ERROR - 2024-12-19 21:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:17:16 --> Could not find the language line "Home"
ERROR - 2024-12-19 21:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:23:12 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-19 21:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 21:43:33 --> Could not find the language line "Home"
ERROR - 2024-12-19 21:49:59 --> Could not find the language line "Home"
ERROR - 2024-12-19 22:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 22:13:17 --> Could not find the language line "Home"
ERROR - 2024-12-19 22:13:35 --> Could not find the language line "Home"
ERROR - 2024-12-19 22:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 22:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 22:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 22:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 22:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 22:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 22:43:35 --> Could not find the language line "Home"
ERROR - 2024-12-19 22:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 23:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 23:13:37 --> Could not find the language line "Home"
ERROR - 2024-12-19 23:21:59 --> Could not find the language line "Home"
ERROR - 2024-12-19 23:22:42 --> Could not find the language line "Home"
ERROR - 2024-12-19 23:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 23:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 23:43:41 --> Could not find the language line "Home"
ERROR - 2024-12-19 23:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 23:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 23:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 23:50:57 --> Could not find the language line "Other"
ERROR - 2024-12-19 23:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 23:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-19 23:56:21 --> 404 Page Not Found: Assets/css
