<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-19 00:10:08 --> Could not find the language line "Home"
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-19 00:10:08 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-19 00:10:08 --> Could not find the language line "Home"
ERROR - 2025-02-19 00:15:10 --> Could not find the language line "Home"
ERROR - 2025-02-19 00:22:50 --> Could not find the language line "Home"
ERROR - 2025-02-19 00:45:16 --> Could not find the language line "Home"
ERROR - 2025-02-19 00:47:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-19 00:47:36 --> Could not find the language line "Home"
ERROR - 2025-02-19 00:50:59 --> Could not find the language line "Home"
ERROR - 2025-02-19 01:15:08 --> Could not find the language line "Home"
ERROR - 2025-02-19 01:31:43 --> Could not find the language line "Home"
ERROR - 2025-02-19 01:31:47 --> Could not find the language line "Home"
ERROR - 2025-02-19 01:31:47 --> Could not find the language line "Home"
ERROR - 2025-02-19 01:31:52 --> Could not find the language line "Home"
ERROR - 2025-02-19 01:41:46 --> Could not find the language line "Home"
ERROR - 2025-02-19 01:45:05 --> Could not find the language line "Home"
ERROR - 2025-02-19 01:48:17 --> 404 Page Not Found: Media/system
ERROR - 2025-02-19 01:48:19 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-19 01:48:20 --> Could not find the language line "Home"
ERROR - 2025-02-19 01:48:20 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-19 01:48:21 --> 404 Page Not Found: Bc/index
ERROR - 2025-02-19 01:48:22 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-02-19 01:48:23 --> 404 Page Not Found: Bk/index
ERROR - 2025-02-19 01:48:23 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-19 01:48:24 --> 404 Page Not Found: New/index
ERROR - 2025-02-19 01:48:25 --> 404 Page Not Found: Main/index
ERROR - 2025-02-19 01:48:25 --> Could not find the language line "Home"
ERROR - 2025-02-19 02:15:17 --> Could not find the language line "Home"
ERROR - 2025-02-19 02:25:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 02:31:33 --> Could not find the language line "Home"
ERROR - 2025-02-19 02:34:53 --> Could not find the language line "Home"
ERROR - 2025-02-19 02:36:17 --> Could not find the language line "Home"
ERROR - 2025-02-19 02:36:20 --> Could not find the language line "Home"
ERROR - 2025-02-19 02:36:21 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-19 02:36:21 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-19 02:36:22 --> Could not find the language line "Other"
ERROR - 2025-02-19 02:36:23 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-19 02:36:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-19 02:36:25 --> Could not find the language line "Other"
ERROR - 2025-02-19 02:36:25 --> Could not find the language line "Clothing"
ERROR - 2025-02-19 02:36:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-19 02:36:31 --> Could not find the language line "Socks"
ERROR - 2025-02-19 02:36:37 --> Could not find the language line "Perfume"
ERROR - 2025-02-19 02:36:43 --> Could not find the language line "Clothing"
ERROR - 2025-02-19 02:36:46 --> Could not find the language line "Other"
ERROR - 2025-02-19 02:36:46 --> Could not find the language line "Clothing"
ERROR - 2025-02-19 02:36:49 --> Could not find the language line "Home"
ERROR - 2025-02-19 02:36:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-19 02:36:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-19 02:36:49 --> Could not find the language line "Disclaimer"
ERROR - 2025-02-19 02:36:51 --> Could not find the language line "Clothing"
ERROR - 2025-02-19 02:36:51 --> Could not find the language line "Home"
ERROR - 2025-02-19 02:38:06 --> Could not find the language line "Home"
ERROR - 2025-02-19 02:41:22 --> Could not find the language line "Home"
ERROR - 2025-02-19 02:45:08 --> Could not find the language line "Home"
ERROR - 2025-02-19 02:45:40 --> Could not find the language line "Home"
ERROR - 2025-02-19 02:47:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-19 02:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-19 02:47:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-19 03:07:45 --> Could not find the language line "Home"
ERROR - 2025-02-19 03:15:13 --> Could not find the language line "Home"
ERROR - 2025-02-19 03:31:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 03:33:18 --> Could not find the language line "Home"
ERROR - 2025-02-19 03:41:18 --> Could not find the language line "Home"
ERROR - 2025-02-19 03:45:08 --> Could not find the language line "Home"
ERROR - 2025-02-19 03:49:40 --> Could not find the language line "Home"
ERROR - 2025-02-19 03:53:21 --> Could not find the language line "Other"
ERROR - 2025-02-19 03:57:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 03:59:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 04:00:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 04:15:13 --> Could not find the language line "Home"
ERROR - 2025-02-19 04:25:47 --> Could not find the language line "Home"
ERROR - 2025-02-19 04:39:01 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-19 04:43:25 --> Could not find the language line "Home"
ERROR - 2025-02-19 04:45:08 --> Could not find the language line "Home"
ERROR - 2025-02-19 05:15:08 --> Could not find the language line "Home"
ERROR - 2025-02-19 05:15:41 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-19 05:15:42 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-19 05:22:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 05:45:07 --> Could not find the language line "Home"
ERROR - 2025-02-19 06:08:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 06:15:12 --> Could not find the language line "Home"
ERROR - 2025-02-19 06:21:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 06:30:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 06:45:07 --> Could not find the language line "Home"
ERROR - 2025-02-19 06:52:53 --> Could not find the language line "Home"
ERROR - 2025-02-19 06:52:55 --> 404 Page Not Found: Home/accounts
ERROR - 2025-02-19 06:52:55 --> 404 Page Not Found: Home/assets
ERROR - 2025-02-19 07:05:22 --> Could not find the language line "Home"
ERROR - 2025-02-19 07:08:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 07:15:07 --> Could not find the language line "Home"
ERROR - 2025-02-19 07:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:45:08 --> Could not find the language line "Home"
ERROR - 2025-02-19 07:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 07:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:02:55 --> Could not find the language line "Clothing"
ERROR - 2025-02-19 08:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:15:08 --> Could not find the language line "Home"
ERROR - 2025-02-19 08:18:22 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-19 08:41:01 --> Could not find the language line "Home"
ERROR - 2025-02-19 08:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:45:07 --> Could not find the language line "Home"
ERROR - 2025-02-19 08:52:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 08:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 08:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:15:08 --> Could not find the language line "Home"
ERROR - 2025-02-19 09:25:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-19 09:26:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-19 09:27:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-19 09:27:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-19 09:44:07 --> Could not find the language line "Home"
ERROR - 2025-02-19 09:45:09 --> Could not find the language line "Home"
ERROR - 2025-02-19 09:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 09:57:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-19 09:57:37 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-19 09:57:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-19 09:57:39 --> Could not find the language line "Other"
ERROR - 2025-02-19 09:57:39 --> Could not find the language line "Clothing"
ERROR - 2025-02-19 09:57:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-19 09:57:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-19 09:57:43 --> Could not find the language line "Clothing"
ERROR - 2025-02-19 09:57:43 --> Could not find the language line "Other"
ERROR - 2025-02-19 09:58:30 --> Could not find the language line "Home"
ERROR - 2025-02-19 09:58:58 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-19 10:03:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-19 10:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:08:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-19 10:08:38 --> Could not find the language line "Home"
ERROR - 2025-02-19 10:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:13:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 10:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:14:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 10:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:15:08 --> Could not find the language line "Home"
ERROR - 2025-02-19 10:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 10:28:04 --> Could not find the language line "Bracelets"
ERROR - 2025-02-19 10:28:54 --> Could not find the language line "Home"
ERROR - 2025-02-19 10:28:54 --> Could not find the language line "Home"
ERROR - 2025-02-19 10:37:07 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-19 10:37:08 --> Could not find the language line "Home"
ERROR - 2025-02-19 10:37:08 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-19 10:37:09 --> 404 Page Not Found: Bc/index
ERROR - 2025-02-19 10:37:09 --> 404 Page Not Found: Bk/index
ERROR - 2025-02-19 10:37:10 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-19 10:37:11 --> 404 Page Not Found: New/index
ERROR - 2025-02-19 10:37:11 --> 404 Page Not Found: Main/index
ERROR - 2025-02-19 10:37:12 --> Could not find the language line "Home"
ERROR - 2025-02-19 10:41:10 --> Could not find the language line "Home"
ERROR - 2025-02-19 10:45:09 --> Could not find the language line "Home"
ERROR - 2025-02-19 10:46:52 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-19 10:48:10 --> Could not find the language line "Home"
ERROR - 2025-02-19 10:48:53 --> Could not find the language line "Socks"
ERROR - 2025-02-19 10:50:18 --> Could not find the language line "Home"
ERROR - 2025-02-19 10:52:15 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-19 10:52:15 --> Could not find the language line "Home"
ERROR - 2025-02-19 10:52:15 --> Could not find the language line "Home"
ERROR - 2025-02-19 10:54:40 --> Could not find the language line "Home"
ERROR - 2025-02-19 10:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:02:59 --> Could not find the language line "Home"
ERROR - 2025-02-19 11:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:15:09 --> Could not find the language line "Home"
ERROR - 2025-02-19 11:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:17:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 11:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:39:06 --> Could not find the language line "Home"
ERROR - 2025-02-19 11:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 11:45:12 --> Could not find the language line "Home"
ERROR - 2025-02-19 11:46:18 --> Could not find the language line "Home"
ERROR - 2025-02-19 11:50:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-19 11:50:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-19 11:50:25 --> Could not find the language line "Home"
ERROR - 2025-02-19 11:54:33 --> Could not find the language line "Home"
ERROR - 2025-02-19 11:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 12:01:14 --> Could not find the language line "Home"
ERROR - 2025-02-19 12:15:11 --> Could not find the language line "Home"
ERROR - 2025-02-19 12:26:13 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-19 12:26:13 --> Could not find the language line "Home"
ERROR - 2025-02-19 12:26:13 --> Could not find the language line "Home"
ERROR - 2025-02-19 12:27:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-19 12:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 12:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 12:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 12:45:11 --> Could not find the language line "Home"
ERROR - 2025-02-19 12:45:41 --> Could not find the language line "Home"
ERROR - 2025-02-19 12:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 12:46:22 --> Could not find the language line "Home"
ERROR - 2025-02-19 12:47:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-19 12:47:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-19 12:49:09 --> Could not find the language line "Home"
ERROR - 2025-02-19 12:49:26 --> Could not find the language line "Home"
ERROR - 2025-02-19 12:52:51 --> Could not find the language line "Home"
ERROR - 2025-02-19 12:53:25 --> Could not find the language line "Home"
ERROR - 2025-02-19 12:55:05 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-19 13:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 13:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 13:01:26 --> Could not find the language line "Home"
ERROR - 2025-02-19 13:05:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-19 13:15:11 --> Could not find the language line "Home"
ERROR - 2025-02-19 13:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 13:20:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 13:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 13:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 13:31:53 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-19 13:43:21 --> Could not find the language line "Clothing"
ERROR - 2025-02-19 13:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 13:45:10 --> Could not find the language line "Home"
ERROR - 2025-02-19 13:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 13:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 13:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 13:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 14:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 14:11:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 14:15:12 --> Could not find the language line "Home"
ERROR - 2025-02-19 14:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 14:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 14:45:11 --> Could not find the language line "Home"
ERROR - 2025-02-19 14:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 14:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 14:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 14:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 14:53:02 --> Could not find the language line "Home"
ERROR - 2025-02-19 15:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 15:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 15:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 15:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 15:08:13 --> Could not find the language line "Home"
ERROR - 2025-02-19 15:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 15:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 15:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 15:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 15:09:41 --> Could not find the language line "Home"
ERROR - 2025-02-19 15:15:12 --> Could not find the language line "Home"
ERROR - 2025-02-19 15:26:24 --> Could not find the language line "Home"
ERROR - 2025-02-19 15:33:02 --> Could not find the language line "Home"
ERROR - 2025-02-19 15:37:40 --> Could not find the language line "Home"
ERROR - 2025-02-19 15:37:42 --> Could not find the language line "Home"
ERROR - 2025-02-19 15:44:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 15:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 15:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 15:45:12 --> Could not find the language line "Home"
ERROR - 2025-02-19 15:48:45 --> Could not find the language line "Home"
ERROR - 2025-02-19 16:15:13 --> Could not find the language line "Home"
ERROR - 2025-02-19 16:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 16:39:25 --> Could not find the language line "Home"
ERROR - 2025-02-19 16:45:13 --> Could not find the language line "Home"
ERROR - 2025-02-19 17:15:14 --> Could not find the language line "Home"
ERROR - 2025-02-19 17:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 17:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 17:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 17:41:02 --> Could not find the language line "Home"
ERROR - 2025-02-19 17:41:03 --> Could not find the language line "Home"
ERROR - 2025-02-19 17:45:13 --> Could not find the language line "Home"
ERROR - 2025-02-19 17:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 18:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 18:03:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-19 18:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 18:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 18:15:14 --> Could not find the language line "Home"
ERROR - 2025-02-19 18:16:54 --> Could not find the language line "Home"
ERROR - 2025-02-19 18:45:13 --> Could not find the language line "Home"
ERROR - 2025-02-19 18:46:55 --> Could not find the language line "Home"
ERROR - 2025-02-19 19:15:14 --> Could not find the language line "Home"
ERROR - 2025-02-19 19:15:45 --> Could not find the language line "Home"
ERROR - 2025-02-19 19:17:22 --> Could not find the language line "Home"
ERROR - 2025-02-19 19:45:14 --> Could not find the language line "Home"
ERROR - 2025-02-19 20:02:51 --> Could not find the language line "Home"
ERROR - 2025-02-19 20:04:29 --> Could not find the language line "Home"
ERROR - 2025-02-19 20:07:08 --> Could not find the language line "Home"
ERROR - 2025-02-19 20:11:25 --> Could not find the language line "Home"
ERROR - 2025-02-19 20:15:14 --> Could not find the language line "Home"
ERROR - 2025-02-19 20:16:55 --> Could not find the language line "Home"
ERROR - 2025-02-19 20:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 20:19:19 --> Could not find the language line "Home"
ERROR - 2025-02-19 20:24:14 --> Could not find the language line "Home"
ERROR - 2025-02-19 20:29:12 --> Could not find the language line "Home"
ERROR - 2025-02-19 20:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 20:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 20:40:37 --> Could not find the language line "Home"
ERROR - 2025-02-19 20:42:53 --> Could not find the language line "Home"
ERROR - 2025-02-19 20:43:37 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2025-02-19 20:43:37 --> Unable to connect to the database
ERROR - 2025-02-19 20:43:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-19 20:43:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2025-02-19 20:43:44 --> Unable to connect to the database
ERROR - 2025-02-19 20:43:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-19 20:46:31 --> Could not find the language line "Home"
ERROR - 2025-02-19 20:57:52 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-19 20:57:52 --> Could not find the language line "Home"
ERROR - 2025-02-19 20:57:52 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-19 20:57:52 --> 404 Page Not Found: Bc/index
ERROR - 2025-02-19 20:57:52 --> 404 Page Not Found: Bk/index
ERROR - 2025-02-19 20:57:53 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-19 20:57:53 --> 404 Page Not Found: New/index
ERROR - 2025-02-19 20:57:53 --> 404 Page Not Found: Main/index
ERROR - 2025-02-19 20:57:54 --> Could not find the language line "Home"
ERROR - 2025-02-19 21:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 21:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 21:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 21:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 21:12:53 --> Could not find the language line "Home"
ERROR - 2025-02-19 21:14:35 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-19 21:15:13 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-19 21:16:21 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-19 21:17:19 --> Could not find the language line "Home"
ERROR - 2025-02-19 21:17:34 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-19 21:19:14 --> Could not find the language line "Home"
ERROR - 2025-02-19 21:23:15 --> Could not find the language line "Home"
ERROR - 2025-02-19 21:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 21:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 21:39:16 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-19 21:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 21:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 21:42:54 --> Could not find the language line "Home"
ERROR - 2025-02-19 21:53:48 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-02-19 22:12:55 --> Could not find the language line "Home"
ERROR - 2025-02-19 22:16:01 --> Could not find the language line "Home"
ERROR - 2025-02-19 22:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 22:31:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-19 22:38:35 --> Could not find the language line "Home"
ERROR - 2025-02-19 22:42:57 --> Could not find the language line "Home"
ERROR - 2025-02-19 22:45:06 --> Could not find the language line "Home"
ERROR - 2025-02-19 22:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 22:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-19 23:04:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-19 23:04:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-19 23:04:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-19 23:04:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-19 23:04:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-19 23:04:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-19 23:04:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-19 23:04:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-19 23:04:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-19 23:04:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-19 23:04:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-19 23:04:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-19 23:12:56 --> Could not find the language line "Home"
ERROR - 2025-02-19 23:42:58 --> Could not find the language line "Home"
ERROR - 2025-02-19 23:46:53 --> Could not find the language line "Home"
