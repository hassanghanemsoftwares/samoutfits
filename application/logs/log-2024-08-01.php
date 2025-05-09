<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-01 00:20:40 --> Could not find the language line "Home"
ERROR - 2024-08-01 00:27:56 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-08-01 00:49:23 --> Could not find the language line "Home"
ERROR - 2024-08-01 00:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 00:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 00:50:37 --> Could not find the language line "Home"
ERROR - 2024-08-01 00:50:53 --> Could not find the language line "Home"
ERROR - 2024-08-01 00:51:12 --> Could not find the language line "Home"
ERROR - 2024-08-01 00:51:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-01 00:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 01:20:38 --> Could not find the language line "Home"
ERROR - 2024-08-01 01:50:38 --> Could not find the language line "Home"
ERROR - 2024-08-01 01:55:56 --> Could not find the language line "Home"
ERROR - 2024-08-01 02:19:29 --> Could not find the language line "Home"
ERROR - 2024-08-01 02:20:38 --> Could not find the language line "Home"
ERROR - 2024-08-01 02:50:39 --> Could not find the language line "Home"
ERROR - 2024-08-01 03:20:39 --> Could not find the language line "Home"
ERROR - 2024-08-01 03:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 03:50:39 --> Could not find the language line "Home"
ERROR - 2024-08-01 03:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 03:52:23 --> 404 Page Not Found: Cart/cart
ERROR - 2024-08-01 03:54:40 --> Could not find the language line "Home"
ERROR - 2024-08-01 03:54:59 --> Could not find the language line "Home"
ERROR - 2024-08-01 04:20:39 --> Could not find the language line "Home"
ERROR - 2024-08-01 04:50:40 --> Could not find the language line "Home"
ERROR - 2024-08-01 04:54:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-01 04:59:03 --> Could not find the language line "Home"
ERROR - 2024-08-01 04:59:18 --> Could not find the language line "Home"
ERROR - 2024-08-01 05:20:42 --> Could not find the language line "Home"
ERROR - 2024-08-01 05:27:33 --> Could not find the language line "Other"
ERROR - 2024-08-01 05:31:43 --> Could not find the language line "Socks"
ERROR - 2024-08-01 05:50:42 --> Could not find the language line "Home"
ERROR - 2024-08-01 05:59:57 --> Could not find the language line "Home"
ERROR - 2024-08-01 06:00:04 --> Could not find the language line "Home"
ERROR - 2024-08-01 06:20:41 --> Could not find the language line "Home"
ERROR - 2024-08-01 06:24:45 --> Could not find the language line "Home"
ERROR - 2024-08-01 06:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 06:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 06:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 06:25:32 --> Could not find the language line "Home"
ERROR - 2024-08-01 06:25:34 --> Could not find the language line "Bracelets"
ERROR - 2024-08-01 06:25:47 --> Could not find the language line "Bracelets"
ERROR - 2024-08-01 06:25:56 --> Could not find the language line "Bracelets"
ERROR - 2024-08-01 06:25:57 --> Could not find the language line "Home"
ERROR - 2024-08-01 06:50:41 --> Could not find the language line "Home"
ERROR - 2024-08-01 07:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 07:20:42 --> Could not find the language line "Home"
ERROR - 2024-08-01 07:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 07:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 07:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 07:40:15 --> Could not find the language line "Home"
ERROR - 2024-08-01 07:50:42 --> Could not find the language line "Home"
ERROR - 2024-08-01 08:20:42 --> Could not find the language line "Home"
ERROR - 2024-08-01 08:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 08:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 08:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 08:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 08:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 08:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 08:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 08:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 08:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 08:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 08:50:43 --> Could not find the language line "Home"
ERROR - 2024-08-01 08:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 09:08:34 --> Could not find the language line "Clothing"
ERROR - 2024-08-01 09:08:34 --> Could not find the language line "Socks"
ERROR - 2024-08-01 09:10:53 --> Could not find the language line "Clothing"
ERROR - 2024-08-01 09:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 09:11:16 --> Could not find the language line "Socks"
ERROR - 2024-08-01 09:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 09:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 09:20:43 --> Could not find the language line "Home"
ERROR - 2024-08-01 09:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 09:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 09:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 09:31:07 --> Could not find the language line "Other"
ERROR - 2024-08-01 09:35:24 --> Could not find the language line "Socks"
ERROR - 2024-08-01 09:41:25 --> Could not find the language line "Home"
ERROR - 2024-08-01 09:45:29 --> Could not find the language line "Home"
ERROR - 2024-08-01 09:50:43 --> Could not find the language line "Home"
ERROR - 2024-08-01 10:17:03 --> Could not find the language line "Home"
ERROR - 2024-08-01 10:20:44 --> Could not find the language line "Home"
ERROR - 2024-08-01 10:22:15 --> Could not find the language line "Home"
ERROR - 2024-08-01 10:25:41 --> Could not find the language line "Home"
ERROR - 2024-08-01 10:26:15 --> Could not find the language line "Home"
ERROR - 2024-08-01 10:42:39 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-08-01 10:42:39 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-08-01 10:42:39 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-08-01 10:42:39 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-08-01 10:42:40 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-08-01 10:42:40 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-08-01 10:42:40 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-08-01 10:42:40 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-08-01 10:50:44 --> Could not find the language line "Home"
ERROR - 2024-08-01 10:58:41 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-08-01 11:02:00 --> Could not find the language line "Home"
ERROR - 2024-08-01 11:20:21 --> Could not find the language line "Home"
ERROR - 2024-08-01 11:20:44 --> Could not find the language line "Home"
ERROR - 2024-08-01 11:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 11:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 11:31:51 --> Could not find the language line "Home"
ERROR - 2024-08-01 11:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 11:34:07 --> Could not find the language line "Home"
ERROR - 2024-08-01 11:37:35 --> Could not find the language line "Home"
ERROR - 2024-08-01 11:40:49 --> Could not find the language line "Home"
ERROR - 2024-08-01 11:50:49 --> Could not find the language line "Home"
ERROR - 2024-08-01 11:52:12 --> 404 Page Not Found: Cart/cart
ERROR - 2024-08-01 12:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 12:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 12:06:23 --> Could not find the language line "Home"
ERROR - 2024-08-01 12:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 12:19:26 --> Could not find the language line "Home"
ERROR - 2024-08-01 12:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 12:20:46 --> Could not find the language line "Home"
ERROR - 2024-08-01 12:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 12:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 12:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 12:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 12:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 12:50:45 --> Could not find the language line "Home"
ERROR - 2024-08-01 13:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 13:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 13:14:22 --> Could not find the language line "Home"
ERROR - 2024-08-01 13:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 13:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 13:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 13:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 13:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 13:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 13:16:09 --> Could not find the language line "Home"
ERROR - 2024-08-01 13:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 13:20:46 --> Could not find the language line "Home"
ERROR - 2024-08-01 13:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 13:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 13:50:46 --> Could not find the language line "Home"
ERROR - 2024-08-01 14:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 14:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 14:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 14:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 14:15:12 --> Could not find the language line "Home"
ERROR - 2024-08-01 14:19:02 --> Could not find the language line "Home"
ERROR - 2024-08-01 14:20:46 --> Could not find the language line "Home"
ERROR - 2024-08-01 14:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 14:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 14:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 14:45:10 --> Could not find the language line "Home"
ERROR - 2024-08-01 14:45:28 --> Could not find the language line "Clothing"
ERROR - 2024-08-01 14:46:10 --> Could not find the language line "Clothing"
ERROR - 2024-08-01 14:46:29 --> Could not find the language line "Clothing"
ERROR - 2024-08-01 14:46:31 --> Could not find the language line "Home"
ERROR - 2024-08-01 14:46:36 --> Could not find the language line "Home"
ERROR - 2024-08-01 14:50:47 --> Could not find the language line "Home"
ERROR - 2024-08-01 15:00:25 --> Could not find the language line "Home"
ERROR - 2024-08-01 15:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 15:20:47 --> Could not find the language line "Home"
ERROR - 2024-08-01 15:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 15:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 15:50:47 --> Could not find the language line "Home"
ERROR - 2024-08-01 15:55:41 --> Could not find the language line "Home"
ERROR - 2024-08-01 16:20:48 --> Could not find the language line "Home"
ERROR - 2024-08-01 16:37:42 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-08-01 16:45:23 --> Could not find the language line "Home"
ERROR - 2024-08-01 16:45:33 --> Could not find the language line "Clothing"
ERROR - 2024-08-01 16:50:48 --> Could not find the language line "Home"
ERROR - 2024-08-01 16:54:55 --> Could not find the language line "Home"
ERROR - 2024-08-01 16:58:41 --> Could not find the language line "Home"
ERROR - 2024-08-01 17:20:48 --> Could not find the language line "Home"
ERROR - 2024-08-01 17:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 17:46:45 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-08-01 17:46:46 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-08-01 17:46:46 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-08-01 17:46:46 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-08-01 17:50:49 --> Could not find the language line "Home"
ERROR - 2024-08-01 18:08:58 --> Could not find the language line "Home"
ERROR - 2024-08-01 18:20:50 --> Could not find the language line "Home"
ERROR - 2024-08-01 18:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 18:47:19 --> Could not find the language line "Home"
ERROR - 2024-08-01 18:47:32 --> Could not find the language line "Home"
ERROR - 2024-08-01 18:47:34 --> Could not find the language line "Home"
ERROR - 2024-08-01 18:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 18:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 18:50:50 --> Could not find the language line "Home"
ERROR - 2024-08-01 19:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 19:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 19:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 19:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 19:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 19:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 19:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 19:20:50 --> Could not find the language line "Home"
ERROR - 2024-08-01 19:21:19 --> Could not find the language line "Home"
ERROR - 2024-08-01 19:21:31 --> Could not find the language line "Home"
ERROR - 2024-08-01 19:21:33 --> Could not find the language line "Home"
ERROR - 2024-08-01 19:23:26 --> Could not find the language line "Home"
ERROR - 2024-08-01 19:31:51 --> Could not find the language line "Home"
ERROR - 2024-08-01 19:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 19:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 19:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 19:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 19:35:01 --> Could not find the language line "Home"
ERROR - 2024-08-01 19:35:10 --> Could not find the language line "Home"
ERROR - 2024-08-01 19:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 19:35:28 --> Could not find the language line "Home"
ERROR - 2024-08-01 19:35:29 --> Could not find the language line "Home"
ERROR - 2024-08-01 19:38:14 --> Could not find the language line "Home"
ERROR - 2024-08-01 19:38:53 --> Could not find the language line "Home"
ERROR - 2024-08-01 19:50:51 --> Could not find the language line "Home"
ERROR - 2024-08-01 20:00:49 --> Could not find the language line "Home"
ERROR - 2024-08-01 20:00:59 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-01 20:01:06 --> Could not find the language line "Home"
ERROR - 2024-08-01 20:20:51 --> Could not find the language line "Home"
ERROR - 2024-08-01 20:22:36 --> Could not find the language line "Home"
ERROR - 2024-08-01 20:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 20:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 20:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 20:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 20:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 20:35:06 --> Could not find the language line "Home"
ERROR - 2024-08-01 20:35:24 --> Could not find the language line "Clothing"
ERROR - 2024-08-01 20:35:53 --> Could not find the language line "Clothing"
ERROR - 2024-08-01 20:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 20:36:16 --> Could not find the language line "Clothing"
ERROR - 2024-08-01 20:36:18 --> Could not find the language line "Clothing"
ERROR - 2024-08-01 20:36:20 --> Could not find the language line "Home"
ERROR - 2024-08-01 20:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 20:50:51 --> Could not find the language line "Home"
ERROR - 2024-08-01 21:20:52 --> Could not find the language line "Home"
ERROR - 2024-08-01 21:50:52 --> Could not find the language line "Home"
ERROR - 2024-08-01 22:20:54 --> Could not find the language line "Home"
ERROR - 2024-08-01 22:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 22:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 22:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 22:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-01 22:50:56 --> Could not find the language line "Home"
ERROR - 2024-08-01 23:20:55 --> Could not find the language line "Home"
ERROR - 2024-08-01 23:36:23 --> Could not find the language line "Home"
ERROR - 2024-08-01 23:51:01 --> Could not find the language line "Home"
