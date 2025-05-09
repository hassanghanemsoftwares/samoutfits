<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-18 00:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 00:19:45 --> Could not find the language line "Home"
ERROR - 2025-03-18 00:27:52 --> Could not find the language line "Home"
ERROR - 2025-03-18 00:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 00:47:56 --> Could not find the language line "Home"
ERROR - 2025-03-18 00:48:02 --> Could not find the language line "Home"
ERROR - 2025-03-18 00:48:22 --> Could not find the language line "Home"
ERROR - 2025-03-18 00:48:25 --> 404 Page Not Found: Phpinfo/index
ERROR - 2025-03-18 00:48:26 --> 404 Page Not Found: Testphp/index
ERROR - 2025-03-18 00:48:26 --> 404 Page Not Found: _profiler/phpinfo
ERROR - 2025-03-18 00:48:26 --> 404 Page Not Found: Infophp/index
ERROR - 2025-03-18 00:48:26 --> 404 Page Not Found: Phpphp/index
ERROR - 2025-03-18 00:48:26 --> 404 Page Not Found: Php_infophp/index
ERROR - 2025-03-18 00:48:26 --> 404 Page Not Found: Iphp/index
ERROR - 2025-03-18 00:48:27 --> 404 Page Not Found: Piphp/index
ERROR - 2025-03-18 00:48:27 --> 404 Page Not Found: Admin/phpinfo.php
ERROR - 2025-03-18 00:48:27 --> 404 Page Not Found: Aws/credentials
ERROR - 2025-03-18 00:48:27 --> 404 Page Not Found: Statusphp/index
ERROR - 2025-03-18 00:48:27 --> 404 Page Not Found: Debugphp/index
ERROR - 2025-03-18 00:48:34 --> Could not find the language line "Home"
ERROR - 2025-03-18 00:49:50 --> Could not find the language line "Home"
ERROR - 2025-03-18 00:49:53 --> Could not find the language line "Home"
ERROR - 2025-03-18 00:52:49 --> Could not find the language line "Home"
ERROR - 2025-03-18 00:53:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-18 00:55:39 --> Could not find the language line "Home"
ERROR - 2025-03-18 00:55:49 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-18 00:55:58 --> Could not find the language line "Home"
ERROR - 2025-03-18 00:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 00:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 00:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 00:57:53 --> Could not find the language line "Home"
ERROR - 2025-03-18 00:57:59 --> Could not find the language line "Clothing"
ERROR - 2025-03-18 00:58:14 --> Could not find the language line "Home"
ERROR - 2025-03-18 01:11:33 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-18 01:11:33 --> Could not find the language line "Home"
ERROR - 2025-03-18 01:11:33 --> Could not find the language line "Home"
ERROR - 2025-03-18 01:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 01:19:45 --> Could not find the language line "Home"
ERROR - 2025-03-18 01:23:19 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-18 01:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 01:34:54 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-18 01:35:20 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-18 01:35:48 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-18 01:36:11 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-18 01:36:38 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-18 01:36:58 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-18 01:37:22 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-18 01:37:39 --> Could not find the language line "Clothing"
ERROR - 2025-03-18 01:38:00 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-18 01:38:18 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-18 01:38:38 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-18 01:38:59 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-18 01:39:14 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-18 01:39:33 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-18 01:40:50 --> Could not find the language line "Home"
ERROR - 2025-03-18 01:49:46 --> Could not find the language line "Home"
ERROR - 2025-03-18 01:54:36 --> Could not find the language line "Home"
ERROR - 2025-03-18 01:54:43 --> Could not find the language line "Home"
ERROR - 2025-03-18 01:54:44 --> Could not find the language line "Home"
ERROR - 2025-03-18 01:54:45 --> Could not find the language line "Home"
ERROR - 2025-03-18 01:54:48 --> Could not find the language line "Home"
ERROR - 2025-03-18 02:01:31 --> Could not find the language line "Home"
ERROR - 2025-03-18 02:19:58 --> Could not find the language line "Home"
ERROR - 2025-03-18 02:22:20 --> Could not find the language line "Home"
ERROR - 2025-03-18 02:32:54 --> Could not find the language line "Home"
ERROR - 2025-03-18 02:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 02:49:50 --> Could not find the language line "Home"
ERROR - 2025-03-18 02:51:30 --> Could not find the language line "Home"
ERROR - 2025-03-18 03:05:03 --> Could not find the language line "Socks"
ERROR - 2025-03-18 03:12:06 --> Could not find the language line "Home"
ERROR - 2025-03-18 03:19:55 --> Could not find the language line "Home"
ERROR - 2025-03-18 03:22:49 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-18 03:22:50 --> Could not find the language line "Home"
ERROR - 2025-03-18 03:22:50 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-18 03:22:50 --> 404 Page Not Found: Bc/index
ERROR - 2025-03-18 03:22:50 --> 404 Page Not Found: Bk/index
ERROR - 2025-03-18 03:22:51 --> 404 Page Not Found: Backup/index
ERROR - 2025-03-18 03:22:51 --> 404 Page Not Found: New/index
ERROR - 2025-03-18 03:22:51 --> 404 Page Not Found: Main/index
ERROR - 2025-03-18 03:22:52 --> Could not find the language line "Home"
ERROR - 2025-03-18 03:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 03:49:47 --> Could not find the language line "Home"
ERROR - 2025-03-18 04:19:54 --> Could not find the language line "Home"
ERROR - 2025-03-18 04:41:58 --> Could not find the language line "Other"
ERROR - 2025-03-18 04:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 04:47:43 --> Could not find the language line "Home"
ERROR - 2025-03-18 04:49:46 --> Could not find the language line "Home"
ERROR - 2025-03-18 05:19:47 --> Could not find the language line "Home"
ERROR - 2025-03-18 05:48:50 --> Could not find the language line "Other"
ERROR - 2025-03-18 05:48:50 --> Could not find the language line "Other"
ERROR - 2025-03-18 05:48:51 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-18 05:48:52 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-18 05:48:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-18 05:48:54 --> Could not find the language line "Clothing"
ERROR - 2025-03-18 05:48:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-18 05:48:57 --> Could not find the language line "Clothing"
ERROR - 2025-03-18 05:49:00 --> Could not find the language line "Clothing"
ERROR - 2025-03-18 05:49:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-18 05:49:03 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-18 05:49:47 --> Could not find the language line "Home"
ERROR - 2025-03-18 06:04:20 --> Could not find the language line "Home"
ERROR - 2025-03-18 06:04:29 --> Could not find the language line "Home"
ERROR - 2025-03-18 06:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 06:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 06:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 06:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 06:15:48 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-18 06:15:48 --> Could not find the language line "Home"
ERROR - 2025-03-18 06:15:48 --> Could not find the language line "Home"
ERROR - 2025-03-18 06:19:47 --> Could not find the language line "Home"
ERROR - 2025-03-18 06:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 06:39:01 --> Could not find the language line "Home"
ERROR - 2025-03-18 06:39:06 --> Could not find the language line "Home"
ERROR - 2025-03-18 06:39:10 --> Could not find the language line "Home"
ERROR - 2025-03-18 06:39:13 --> Could not find the language line "Home"
ERROR - 2025-03-18 06:39:13 --> Could not find the language line "Home"
ERROR - 2025-03-18 06:49:13 --> Could not find the language line "Home"
ERROR - 2025-03-18 06:49:47 --> Could not find the language line "Home"
ERROR - 2025-03-18 07:01:59 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-18 07:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 07:19:27 --> Could not find the language line "Home"
ERROR - 2025-03-18 07:19:45 --> Could not find the language line "Home"
ERROR - 2025-03-18 07:21:26 --> Could not find the language line "Home"
ERROR - 2025-03-18 07:22:41 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-18 07:22:41 --> Could not find the language line "Home"
ERROR - 2025-03-18 07:22:41 --> Could not find the language line "Home"
ERROR - 2025-03-18 07:26:35 --> Could not find the language line "Home"
ERROR - 2025-03-18 07:27:40 --> Could not find the language line "Home"
ERROR - 2025-03-18 07:29:53 --> Could not find the language line "Home"
ERROR - 2025-03-18 07:31:06 --> Could not find the language line "Home"
ERROR - 2025-03-18 07:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 07:33:42 --> Could not find the language line "Home"
ERROR - 2025-03-18 07:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 07:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 07:38:50 --> Could not find the language line "Home"
ERROR - 2025-03-18 07:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 07:49:37 --> Could not find the language line "Home"
ERROR - 2025-03-18 07:49:46 --> Could not find the language line "Home"
ERROR - 2025-03-18 07:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 07:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 07:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 07:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 07:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 07:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 07:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 08:04:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-18 08:07:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-18 08:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 08:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 08:18:10 --> Could not find the language line "Home"
ERROR - 2025-03-18 08:19:47 --> Could not find the language line "Home"
ERROR - 2025-03-18 08:27:31 --> Could not find the language line "Home"
ERROR - 2025-03-18 08:28:39 --> Could not find the language line "Home"
ERROR - 2025-03-18 08:30:19 --> Could not find the language line "Home"
ERROR - 2025-03-18 08:36:03 --> Could not find the language line "Home"
ERROR - 2025-03-18 08:39:22 --> Could not find the language line "Home"
ERROR - 2025-03-18 08:49:48 --> Could not find the language line "Home"
ERROR - 2025-03-18 08:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 08:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 08:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 09:02:30 --> Could not find the language line "Home"
ERROR - 2025-03-18 09:04:36 --> Could not find the language line "Home"
ERROR - 2025-03-18 09:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 09:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 09:19:47 --> Could not find the language line "Home"
ERROR - 2025-03-18 09:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 09:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 09:28:48 --> Could not find the language line "Home"
ERROR - 2025-03-18 09:28:49 --> Could not find the language line "Home"
ERROR - 2025-03-18 09:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 09:49:48 --> Could not find the language line "Home"
ERROR - 2025-03-18 10:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 10:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 10:04:00 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-18 10:04:50 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-18 10:05:42 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-18 10:19:47 --> Could not find the language line "Home"
ERROR - 2025-03-18 10:20:26 --> Could not find the language line "Home"
ERROR - 2025-03-18 10:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 10:49:48 --> Could not find the language line "Home"
ERROR - 2025-03-18 11:01:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-18 11:01:38 --> Could not find the language line "Home"
ERROR - 2025-03-18 11:17:49 --> Could not find the language line "Home"
ERROR - 2025-03-18 11:19:49 --> Could not find the language line "Home"
ERROR - 2025-03-18 11:49:48 --> Could not find the language line "Home"
ERROR - 2025-03-18 12:06:06 --> Could not find the language line "Home"
ERROR - 2025-03-18 12:06:14 --> Could not find the language line "Home"
ERROR - 2025-03-18 12:12:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-18 12:19:50 --> Could not find the language line "Home"
ERROR - 2025-03-18 12:19:58 --> Could not find the language line "Home"
ERROR - 2025-03-18 12:25:49 --> Could not find the language line "Clothing"
ERROR - 2025-03-18 12:31:03 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-18 12:37:19 --> Could not find the language line "Home"
ERROR - 2025-03-18 12:45:33 --> Could not find the language line "Home"
ERROR - 2025-03-18 12:46:08 --> Could not find the language line "Home"
ERROR - 2025-03-18 12:47:06 --> Could not find the language line "Home"
ERROR - 2025-03-18 12:49:49 --> Could not find the language line "Home"
ERROR - 2025-03-18 12:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 13:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 13:19:50 --> Could not find the language line "Home"
ERROR - 2025-03-18 13:29:00 --> Could not find the language line "Home"
ERROR - 2025-03-18 13:29:08 --> Could not find the language line "Home"
ERROR - 2025-03-18 13:29:09 --> Could not find the language line "Home"
ERROR - 2025-03-18 13:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 13:49:50 --> Could not find the language line "Home"
ERROR - 2025-03-18 13:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 13:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 14:02:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-18 14:09:48 --> Could not find the language line "Home"
ERROR - 2025-03-18 14:15:19 --> Could not find the language line "Home"
ERROR - 2025-03-18 14:15:20 --> Could not find the language line "Home"
ERROR - 2025-03-18 14:19:50 --> Could not find the language line "Home"
ERROR - 2025-03-18 14:32:35 --> Could not find the language line "Home"
ERROR - 2025-03-18 14:33:11 --> Could not find the language line "Home"
ERROR - 2025-03-18 14:33:27 --> Could not find the language line "Home"
ERROR - 2025-03-18 14:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 14:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 14:34:19 --> Could not find the language line "Home"
ERROR - 2025-03-18 14:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 14:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 14:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 14:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 14:43:55 --> Could not find the language line "Home"
ERROR - 2025-03-18 14:49:51 --> Could not find the language line "Home"
ERROR - 2025-03-18 15:08:04 --> Could not find the language line "Home"
ERROR - 2025-03-18 15:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 15:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 15:19:50 --> Could not find the language line "Home"
ERROR - 2025-03-18 15:34:21 --> Could not find the language line "Home"
ERROR - 2025-03-18 15:36:02 --> Could not find the language line "Home"
ERROR - 2025-03-18 15:37:44 --> Could not find the language line "Home"
ERROR - 2025-03-18 15:38:01 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-18 15:49:51 --> Could not find the language line "Home"
ERROR - 2025-03-18 15:54:43 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-18 15:56:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-18 16:02:58 --> Could not find the language line "Clothing"
ERROR - 2025-03-18 16:17:01 --> Could not find the language line "Socks"
ERROR - 2025-03-18 16:19:51 --> Could not find the language line "Home"
ERROR - 2025-03-18 16:26:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-03-18 16:26:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 100
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-03-18 16:26:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-18 16:42:02 --> Could not find the language line "Home"
ERROR - 2025-03-18 16:49:50 --> Could not find the language line "Home"
ERROR - 2025-03-18 16:55:48 --> Could not find the language line "Home"
ERROR - 2025-03-18 17:19:52 --> Could not find the language line "Home"
ERROR - 2025-03-18 17:38:24 --> Could not find the language line "Home"
ERROR - 2025-03-18 17:38:29 --> Could not find the language line "Home"
ERROR - 2025-03-18 17:48:55 --> Could not find the language line "Home"
ERROR - 2025-03-18 17:49:52 --> Could not find the language line "Home"
ERROR - 2025-03-18 17:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 17:52:20 --> Could not find the language line "Home"
ERROR - 2025-03-18 17:58:23 --> Could not find the language line "Socks"
ERROR - 2025-03-18 18:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 18:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 18:12:25 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-18 18:19:53 --> Could not find the language line "Home"
ERROR - 2025-03-18 18:23:23 --> Could not find the language line "Home"
ERROR - 2025-03-18 18:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 18:49:53 --> Could not find the language line "Home"
ERROR - 2025-03-18 18:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 19:07:32 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-18 19:07:32 --> Could not find the language line "Home"
ERROR - 2025-03-18 19:07:33 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-18 19:07:33 --> 404 Page Not Found: Bc/index
ERROR - 2025-03-18 19:07:33 --> 404 Page Not Found: Bk/index
ERROR - 2025-03-18 19:07:33 --> 404 Page Not Found: Backup/index
ERROR - 2025-03-18 19:07:34 --> 404 Page Not Found: New/index
ERROR - 2025-03-18 19:07:34 --> 404 Page Not Found: Main/index
ERROR - 2025-03-18 19:07:34 --> Could not find the language line "Home"
ERROR - 2025-03-18 19:12:21 --> Could not find the language line "Home"
ERROR - 2025-03-18 19:19:53 --> Could not find the language line "Home"
ERROR - 2025-03-18 19:30:51 --> Could not find the language line "Home"
ERROR - 2025-03-18 19:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 19:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 19:33:00 --> Could not find the language line "Home"
ERROR - 2025-03-18 19:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 19:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 19:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 19:49:53 --> Could not find the language line "Home"
ERROR - 2025-03-18 20:01:16 --> Could not find the language line "Home"
ERROR - 2025-03-18 20:19:53 --> Could not find the language line "Home"
ERROR - 2025-03-18 20:24:01 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-18 20:49:53 --> Could not find the language line "Home"
ERROR - 2025-03-18 21:09:06 --> Could not find the language line "Home"
ERROR - 2025-03-18 21:17:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-18 21:19:54 --> Could not find the language line "Home"
ERROR - 2025-03-18 21:20:55 --> Could not find the language line "Home"
ERROR - 2025-03-18 21:44:18 --> Could not find the language line "Socks"
ERROR - 2025-03-18 21:46:37 --> Could not find the language line "Home"
ERROR - 2025-03-18 21:49:55 --> Could not find the language line "Home"
ERROR - 2025-03-18 21:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 21:57:17 --> Could not find the language line "Home"
ERROR - 2025-03-18 21:58:29 --> Could not find the language line "Home"
ERROR - 2025-03-18 22:06:54 --> Could not find the language line "Home"
ERROR - 2025-03-18 22:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 22:07:39 --> Could not find the language line "Home"
ERROR - 2025-03-18 22:07:43 --> Could not find the language line "Home"
ERROR - 2025-03-18 22:08:25 --> Could not find the language line "Home"
ERROR - 2025-03-18 22:10:31 --> Could not find the language line "Home"
ERROR - 2025-03-18 22:13:22 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-18 22:13:45 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-18 22:14:36 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-18 22:15:30 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-18 22:19:54 --> Could not find the language line "Home"
ERROR - 2025-03-18 22:22:43 --> Could not find the language line "Home"
ERROR - 2025-03-18 22:30:07 --> Could not find the language line "Home"
ERROR - 2025-03-18 22:46:15 --> Could not find the language line "Home"
ERROR - 2025-03-18 22:49:54 --> Could not find the language line "Home"
ERROR - 2025-03-18 22:58:15 --> Could not find the language line "Home"
ERROR - 2025-03-18 23:02:46 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-18 23:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 23:07:30 --> Could not find the language line "Home"
ERROR - 2025-03-18 23:11:55 --> Could not find the language line "Home"
ERROR - 2025-03-18 23:19:57 --> Could not find the language line "Home"
ERROR - 2025-03-18 23:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-18 23:50:00 --> Could not find the language line "Home"
ERROR - 2025-03-18 23:53:24 --> Could not find the language line "Home"
ERROR - 2025-03-18 23:53:38 --> Could not find the language line "Home"
ERROR - 2025-03-18 23:57:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-18 23:57:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-18 23:58:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-18 23:58:50 --> 404 Page Not Found: Robotstxt/index
