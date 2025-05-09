<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-27 00:08:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 00:19:44 --> Could not find the language line "Home"
ERROR - 2024-06-27 00:41:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 00:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 00:49:45 --> Could not find the language line "Home"
ERROR - 2024-06-27 00:53:14 --> Could not find the language line "Home"
ERROR - 2024-06-27 00:56:32 --> Could not find the language line "Other"
ERROR - 2024-06-27 00:56:35 --> Could not find the language line "Bracelets"
ERROR - 2024-06-27 00:56:35 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-27 00:56:36 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-27 00:56:36 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 00:56:38 --> Could not find the language line "Perfume"
ERROR - 2024-06-27 00:56:38 --> Could not find the language line "Other"
ERROR - 2024-06-27 00:56:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 00:56:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 00:56:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 00:56:40 --> Could not find the language line "Other"
ERROR - 2024-06-27 01:00:30 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-06-27 01:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 01:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 01:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 01:06:08 --> Could not find the language line "Socks"
ERROR - 2024-06-27 01:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 01:11:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 01:19:40 --> Could not find the language line "Home"
ERROR - 2024-06-27 01:34:18 --> Could not find the language line "Home"
ERROR - 2024-06-27 01:34:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 01:37:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 01:41:11 --> Could not find the language line "Home"
ERROR - 2024-06-27 01:49:33 --> Could not find the language line "Home"
ERROR - 2024-06-27 02:15:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 02:19:35 --> Could not find the language line "Home"
ERROR - 2024-06-27 02:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 02:44:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 02:49:43 --> Could not find the language line "Home"
ERROR - 2024-06-27 03:02:56 --> Could not find the language line "Home"
ERROR - 2024-06-27 03:17:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 03:18:29 --> Could not find the language line "Home"
ERROR - 2024-06-27 03:19:46 --> Could not find the language line "Home"
ERROR - 2024-06-27 03:20:14 --> Could not find the language line "Home"
ERROR - 2024-06-27 03:21:15 --> Could not find the language line "Home"
ERROR - 2024-06-27 03:22:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 03:22:57 --> Could not find the language line "Home"
ERROR - 2024-06-27 03:23:56 --> Could not find the language line "Home"
ERROR - 2024-06-27 03:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 03:38:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-27 03:49:38 --> Could not find the language line "Home"
ERROR - 2024-06-27 03:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 03:53:42 --> Could not find the language line "Home"
ERROR - 2024-06-27 03:54:25 --> Could not find the language line "products"
ERROR - 2024-06-27 04:00:25 --> Could not find the language line "Home"
ERROR - 2024-06-27 04:07:08 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-06-27 04:07:08 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-06-27 04:07:09 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-06-27 04:07:09 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-06-27 04:13:03 --> Could not find the language line "Home"
ERROR - 2024-06-27 04:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 04:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 04:17:58 --> Could not find the language line "Home"
ERROR - 2024-06-27 04:18:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 04:19:47 --> Could not find the language line "Home"
ERROR - 2024-06-27 04:20:01 --> Could not find the language line "Home"
ERROR - 2024-06-27 04:20:27 --> Could not find the language line "Home"
ERROR - 2024-06-27 04:22:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 04:23:54 --> Could not find the language line "Home"
ERROR - 2024-06-27 04:30:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 04:49:35 --> Could not find the language line "Home"
ERROR - 2024-06-27 04:51:52 --> Could not find the language line "Home"
ERROR - 2024-06-27 04:51:52 --> Could not find the language line "Home"
ERROR - 2024-06-27 04:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 04:52:34 --> Could not find the language line "Home"
ERROR - 2024-06-27 04:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 04:53:11 --> Could not find the language line "Other"
ERROR - 2024-06-27 04:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 04:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 04:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 04:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 04:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:02:22 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-27 05:02:22 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-27 05:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:02:53 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-27 05:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:04:15 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-27 05:04:15 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-27 05:04:46 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-27 05:04:47 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-27 05:04:51 --> Could not find the language line "Home"
ERROR - 2024-06-27 05:04:56 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-27 05:04:56 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-27 05:07:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 05:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:19:36 --> Could not find the language line "Home"
ERROR - 2024-06-27 05:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:29:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 05:33:56 --> Could not find the language line "Home"
ERROR - 2024-06-27 05:34:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-27 05:37:55 --> Could not find the language line "Home"
ERROR - 2024-06-27 05:38:54 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-27 05:48:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-27 05:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:49:34 --> Could not find the language line "Home"
ERROR - 2024-06-27 05:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:50:56 --> Could not find the language line "Home"
ERROR - 2024-06-27 05:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:53:08 --> Could not find the language line "Home"
ERROR - 2024-06-27 05:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 05:58:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 06:02:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 06:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:10:06 --> Could not find the language line "Home"
ERROR - 2024-06-27 06:10:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 06:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:14:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 06:16:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-27 06:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:18:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 06:19:34 --> Could not find the language line "Home"
ERROR - 2024-06-27 06:22:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 06:23:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-27 06:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:26:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 06:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:34:30 --> Could not find the language line "Home"
ERROR - 2024-06-27 06:34:36 --> Could not find the language line "Home"
ERROR - 2024-06-27 06:35:33 --> Could not find the language line "Home"
ERROR - 2024-06-27 06:35:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 06:38:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 06:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:42:40 --> Could not find the language line "Other"
ERROR - 2024-06-27 06:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 06:49:37 --> Could not find the language line "Home"
ERROR - 2024-06-27 06:53:33 --> 404 Page Not Found: Products/products
ERROR - 2024-06-27 06:55:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 07:08:04 --> Could not find the language line "products"
ERROR - 2024-06-27 07:08:07 --> Could not find the language line "Home"
ERROR - 2024-06-27 07:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 07:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 07:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 07:14:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 07:19:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-27 07:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 07:19:41 --> Could not find the language line "Home"
ERROR - 2024-06-27 07:20:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 07:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 07:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 07:33:40 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-27 07:34:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 07:41:10 --> Could not find the language line "Home"
ERROR - 2024-06-27 07:49:41 --> Could not find the language line "Home"
ERROR - 2024-06-27 07:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 07:53:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 07:54:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-27 07:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 07:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 08:05:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-27 08:06:55 --> Could not find the language line "Home"
ERROR - 2024-06-27 08:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 08:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 08:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 08:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 08:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 08:12:35 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-06-27 08:12:47 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 08:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 08:19:36 --> Could not find the language line "Home"
ERROR - 2024-06-27 08:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 08:24:12 --> Could not find the language line "Perfume"
ERROR - 2024-06-27 08:30:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 08:35:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 08:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 08:44:51 --> Could not find the language line "Home"
ERROR - 2024-06-27 08:49:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 08:49:37 --> Could not find the language line "Home"
ERROR - 2024-06-27 08:49:37 --> Could not find the language line "Home"
ERROR - 2024-06-27 08:50:00 --> Could not find the language line "Home"
ERROR - 2024-06-27 08:50:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 08:53:15 --> Could not find the language line "Other"
ERROR - 2024-06-27 08:53:20 --> Could not find the language line "Home"
ERROR - 2024-06-27 08:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 08:59:04 --> Could not find the language line "Home"
ERROR - 2024-06-27 08:59:12 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:01:37 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:06:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 09:06:39 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:08:33 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:10:17 --> Could not find the language line "Other"
ERROR - 2024-06-27 09:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:18:03 --> Could not find the language line "Socks"
ERROR - 2024-06-27 09:19:37 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:21:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 09:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:22:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 09:23:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 09:26:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-27 09:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:30:06 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:31:31 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:33:15 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:39:00 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 09:39:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 09:41:01 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:41:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 09:41:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 09:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:42:36 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 09:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:43:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 09:43:27 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:43:34 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 09:44:07 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:44:20 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:44:21 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:47:25 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:48:40 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:49:37 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:51:47 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:51:56 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:52:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 09:57:19 --> Could not find the language line "Home"
ERROR - 2024-06-27 09:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 09:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:00:03 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:01:28 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:02:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 10:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:03:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 10:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:04:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 10:04:25 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:04:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 10:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:05:24 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:09:02 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:09:02 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:09:04 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:09:04 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:09:05 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:09:15 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:09:42 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:11:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 10:12:01 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:18:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 10:18:02 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:19:02 --> Could not find the language line "products"
ERROR - 2024-06-27 10:19:38 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:20:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 10:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:25:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 10:25:42 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:28:21 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:28:53 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:32:28 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:36:40 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:38:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 10:45:08 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:46:36 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:47:23 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:47:27 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:48:35 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:49:40 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:55:21 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:55:29 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:55:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 10:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:55:40 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-27 10:56:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-27 10:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:57:26 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-27 10:57:29 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-27 10:57:35 --> Could not find the language line "Home"
ERROR - 2024-06-27 10:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 10:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:02:31 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:04:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 11:07:56 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:09:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-27 11:12:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 11:13:12 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:15:50 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:16:58 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:19:40 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:24:58 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:28:00 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:34:53 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-27 11:35:59 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:39:26 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:39:32 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:42:55 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 11:49:40 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:56:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 11:56:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 11:57:19 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:57:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 11:58:08 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:58:23 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:58:25 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:58:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-27 11:58:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-27 11:58:40 --> Could not find the language line "Home"
ERROR - 2024-06-27 11:59:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-27 11:59:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-27 11:59:15 --> Could not find the language line "Other"
ERROR - 2024-06-27 11:59:40 --> Could not find the language line "Other"
ERROR - 2024-06-27 11:59:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 12:00:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 12:00:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 12:01:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 12:02:00 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:05:06 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 12:05:06 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 12:05:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-27 12:05:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-27 12:05:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-27 12:05:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-27 12:05:07 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:05:08 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 12:05:08 --> Could not find the language line "Other"
ERROR - 2024-06-27 12:05:20 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:05:37 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:05:56 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:06:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 12:10:59 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:19:40 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:22:31 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:22:42 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:24:15 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:25:17 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:27:18 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:32:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-27 12:33:53 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:34:32 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:34:44 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:34:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 12:35:07 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:37:38 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:41:46 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:41:51 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:43:45 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:44:43 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-27 12:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:49:40 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:50:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 12:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:50:54 --> Could not find the language line "Home"
ERROR - 2024-06-27 12:51:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 12:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 12:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:07:04 --> Could not find the language line "Home"
ERROR - 2024-06-27 13:07:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-27 13:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:11:07 --> Could not find the language line "Home"
ERROR - 2024-06-27 13:11:49 --> Could not find the language line "Home"
ERROR - 2024-06-27 13:13:34 --> Could not find the language line "Home"
ERROR - 2024-06-27 13:13:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-27 13:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:16:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-27 13:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:19:42 --> Could not find the language line "Home"
ERROR - 2024-06-27 13:19:48 --> 404 Page Not Found: Products/products
ERROR - 2024-06-27 13:21:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-27 13:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:29:13 --> Could not find the language line "Home"
ERROR - 2024-06-27 13:29:31 --> Could not find the language line "Home"
ERROR - 2024-06-27 13:32:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 13:32:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-27 13:32:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-27 13:32:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-27 13:32:41 --> Could not find the language line "products"
ERROR - 2024-06-27 13:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:40:09 --> Could not find the language line "Home"
ERROR - 2024-06-27 13:41:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-27 13:41:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-27 13:41:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-27 13:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:42:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-27 13:42:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-27 13:42:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-27 13:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:45:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 13:45:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 13:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:46:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-27 13:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:47:02 --> Could not find the language line "Home"
ERROR - 2024-06-27 13:47:10 --> Could not find the language line "Bracelets"
ERROR - 2024-06-27 13:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:47:49 --> Could not find the language line "Bracelets"
ERROR - 2024-06-27 13:47:51 --> Could not find the language line "Home"
ERROR - 2024-06-27 13:48:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 13:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:49:41 --> Could not find the language line "Home"
ERROR - 2024-06-27 13:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 13:58:30 --> Could not find the language line "Home"
ERROR - 2024-06-27 14:08:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 14:10:04 --> Could not find the language line "Home"
ERROR - 2024-06-27 14:17:49 --> Could not find the language line "Home"
ERROR - 2024-06-27 14:18:25 --> Could not find the language line "Home"
ERROR - 2024-06-27 14:19:42 --> Could not find the language line "Home"
ERROR - 2024-06-27 14:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 14:25:29 --> Could not find the language line "Socks"
ERROR - 2024-06-27 14:26:53 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-27 14:27:30 --> Could not find the language line "Home"
ERROR - 2024-06-27 14:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 14:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 14:29:49 --> Could not find the language line "Home"
ERROR - 2024-06-27 14:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 14:30:55 --> Could not find the language line "Home"
ERROR - 2024-06-27 14:30:58 --> Could not find the language line "Home"
ERROR - 2024-06-27 14:32:59 --> Could not find the language line "Home"
ERROR - 2024-06-27 14:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 14:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 14:35:42 --> Could not find the language line "Home"
ERROR - 2024-06-27 14:38:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 14:46:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 14:47:56 --> 404 Page Not Found: Assets/mail
ERROR - 2024-06-27 14:49:42 --> Could not find the language line "Home"
ERROR - 2024-06-27 14:50:28 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 14:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 14:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 14:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 14:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 15:08:33 --> Could not find the language line "Home"
ERROR - 2024-06-27 15:19:41 --> Could not find the language line "Home"
ERROR - 2024-06-27 15:25:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 15:27:56 --> Could not find the language line "Home"
ERROR - 2024-06-27 15:28:56 --> Could not find the language line "Home"
ERROR - 2024-06-27 15:30:10 --> Could not find the language line "Home"
ERROR - 2024-06-27 15:33:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 15:39:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 15:49:41 --> Could not find the language line "Home"
ERROR - 2024-06-27 15:51:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 15:58:20 --> Could not find the language line "Home"
ERROR - 2024-06-27 15:58:56 --> Could not find the language line "Home"
ERROR - 2024-06-27 15:59:48 --> Could not find the language line "Home"
ERROR - 2024-06-27 15:59:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-27 15:59:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-27 15:59:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-27 16:19:42 --> Could not find the language line "Home"
ERROR - 2024-06-27 16:24:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 16:27:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 16:32:53 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 16:32:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 16:32:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 16:32:56 --> Could not find the language line "assets"
ERROR - 2024-06-27 16:32:56 --> Could not find the language line "assets"
ERROR - 2024-06-27 16:32:56 --> Could not find the language line "assets"
ERROR - 2024-06-27 16:32:56 --> Could not find the language line "assets"
ERROR - 2024-06-27 16:32:56 --> Could not find the language line "assets"
ERROR - 2024-06-27 16:43:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 16:47:17 --> Could not find the language line "Other"
ERROR - 2024-06-27 16:49:43 --> Could not find the language line "Home"
ERROR - 2024-06-27 16:58:44 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-06-27 17:03:36 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 17:07:40 --> Could not find the language line "Home"
ERROR - 2024-06-27 17:16:33 --> Could not find the language line "Home"
ERROR - 2024-06-27 17:18:17 --> Could not find the language line "Home"
ERROR - 2024-06-27 17:18:35 --> Could not find the language line "Home"
ERROR - 2024-06-27 17:19:42 --> Could not find the language line "Home"
ERROR - 2024-06-27 17:22:00 --> Could not find the language line "Home"
ERROR - 2024-06-27 17:23:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 17:24:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 17:26:24 --> Could not find the language line "Home"
ERROR - 2024-06-27 17:26:42 --> Could not find the language line "Home"
ERROR - 2024-06-27 17:30:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 17:32:56 --> Could not find the language line "Home"
ERROR - 2024-06-27 17:33:38 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-27 17:33:38 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-27 17:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 17:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 17:34:27 --> Could not find the language line "Home"
ERROR - 2024-06-27 17:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 17:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 17:43:50 --> Could not find the language line "Home"
ERROR - 2024-06-27 17:45:59 --> Could not find the language line "Home"
ERROR - 2024-06-27 17:49:43 --> Could not find the language line "Home"
ERROR - 2024-06-27 17:56:34 --> Could not find the language line "Home"
ERROR - 2024-06-27 18:05:44 --> Could not find the language line "Home"
ERROR - 2024-06-27 18:05:54 --> Could not find the language line "Home"
ERROR - 2024-06-27 18:15:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 18:19:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 18:19:44 --> Could not find the language line "Home"
ERROR - 2024-06-27 18:21:33 --> Could not find the language line "Home"
ERROR - 2024-06-27 18:21:57 --> Could not find the language line "Home"
ERROR - 2024-06-27 18:23:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 18:24:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 18:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 18:31:31 --> Could not find the language line "Home"
ERROR - 2024-06-27 18:35:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 18:39:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 18:43:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 18:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 18:44:32 --> Could not find the language line "Bracelets"
ERROR - 2024-06-27 18:44:43 --> Could not find the language line "Bracelets"
ERROR - 2024-06-27 18:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 18:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 18:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 18:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 18:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 18:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 18:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 18:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 18:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 18:49:43 --> Could not find the language line "Home"
ERROR - 2024-06-27 18:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 18:56:02 --> Could not find the language line "Home"
ERROR - 2024-06-27 18:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 18:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 19:05:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-27 19:06:24 --> Could not find the language line "Home"
ERROR - 2024-06-27 19:06:53 --> Could not find the language line "Home"
ERROR - 2024-06-27 19:07:07 --> Could not find the language line "Home"
ERROR - 2024-06-27 19:07:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 19:07:59 --> Could not find the language line "Home"
ERROR - 2024-06-27 19:10:54 --> Could not find the language line "Home"
ERROR - 2024-06-27 19:11:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 19:17:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 19:19:44 --> Could not find the language line "Home"
ERROR - 2024-06-27 19:21:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 19:24:54 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-27 19:28:02 --> Could not find the language line "Home"
ERROR - 2024-06-27 19:45:55 --> Could not find the language line "Home"
ERROR - 2024-06-27 19:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 19:46:32 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 19:46:41 --> 404 Page Not Found: Products/products
ERROR - 2024-06-27 19:47:18 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 19:49:45 --> Could not find the language line "Home"
ERROR - 2024-06-27 19:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 19:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 19:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 19:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 19:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 19:59:23 --> Could not find the language line "Home"
ERROR - 2024-06-27 20:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 20:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 20:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 20:01:27 --> Could not find the language line "Home"
ERROR - 2024-06-27 20:01:29 --> Could not find the language line "Home"
ERROR - 2024-06-27 20:12:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 20:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 20:19:45 --> Could not find the language line "Home"
ERROR - 2024-06-27 20:21:00 --> Could not find the language line "Home"
ERROR - 2024-06-27 20:39:23 --> Could not find the language line "products"
ERROR - 2024-06-27 20:49:45 --> Could not find the language line "Home"
ERROR - 2024-06-27 20:56:01 --> Could not find the language line "Home"
ERROR - 2024-06-27 21:02:17 --> Could not find the language line "Home"
ERROR - 2024-06-27 21:04:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 21:05:50 --> Could not find the language line "products"
ERROR - 2024-06-27 21:12:33 --> Could not find the language line "Home"
ERROR - 2024-06-27 21:19:47 --> Could not find the language line "Home"
ERROR - 2024-06-27 21:22:32 --> Could not find the language line "Home"
ERROR - 2024-06-27 21:40:54 --> Could not find the language line "Home"
ERROR - 2024-06-27 21:40:56 --> Could not find the language line "Home"
ERROR - 2024-06-27 21:41:08 --> Could not find the language line "Home"
ERROR - 2024-06-27 21:41:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 21:45:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 21:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 21:49:49 --> Could not find the language line "Home"
ERROR - 2024-06-27 21:51:46 --> Could not find the language line "Home"
ERROR - 2024-06-27 21:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 21:56:58 --> Could not find the language line "Home"
ERROR - 2024-06-27 21:57:05 --> Could not find the language line "Home"
ERROR - 2024-06-27 21:57:05 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 21:57:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 21:57:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 21:57:08 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 21:57:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 21:57:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 21:57:25 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 21:57:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 21:57:39 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 21:57:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 21:57:52 --> Could not find the language line "Other"
ERROR - 2024-06-27 21:57:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 21:57:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 21:57:54 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 21:58:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 21:58:04 --> Could not find the language line "Home"
ERROR - 2024-06-27 21:58:05 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 21:58:05 --> Could not find the language line "Home"
ERROR - 2024-06-27 21:58:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 21:58:14 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 21:58:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 21:58:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 21:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 21:59:23 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 21:59:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 21:59:40 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 21:59:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:00:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 22:00:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 22:01:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:01:22 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:01:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:01:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:01:58 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:01:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:02:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:02:12 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:02:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:02:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:03:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:03:12 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:03:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:03:20 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:03:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:03:26 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:04:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 22:04:33 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:04:35 --> Could not find the language line "Clothing"
ERROR - 2024-06-27 22:05:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:05:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:05:15 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:05:19 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:05:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:05:37 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:05:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:06:43 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:06:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:06:50 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:06:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:07:17 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:07:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:07:29 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:07:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:07:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:07:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:07:40 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:07:44 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:07:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:07:57 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:07:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:08:06 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:08:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:08:17 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:08:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:08:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:08:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:08:21 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:08:27 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:08:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:08:40 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:08:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:08:48 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:08:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:08:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:08:59 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:09:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:09:07 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:09:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:09:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:09:21 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:09:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:09:32 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:09:42 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:10:50 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:11:38 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:11:42 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:11:59 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:13:35 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:14:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:14:04 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:14:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:14:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:14:14 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:14:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:14:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:14:19 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:14:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:14:41 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:16:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:16:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:16:41 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:16:48 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:16:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:16:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:16:53 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:17:05 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:17:12 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:17:18 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:17:20 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:17:27 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:17:29 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:17:58 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:19:49 --> Could not find the language line "Home"
ERROR - 2024-06-27 22:20:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:20:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-27 22:20:16 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:20:22 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:20:38 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:23:21 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:23:26 --> Could not find the language line "Home"
ERROR - 2024-06-27 22:23:27 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:23:28 --> Could not find the language line "Home"
ERROR - 2024-06-27 22:23:29 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 22:24:05 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:24:27 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:24:36 --> Severity: Notice --> Undefined index: discount /home/samfit/public_html/application/controllers/Checkout.php 29
ERROR - 2024-06-27 22:24:36 --> Severity: Notice --> Undefined index: coupon_id /home/samfit/public_html/application/controllers/Checkout.php 30
ERROR - 2024-06-27 22:24:36 --> Severity: Notice --> Undefined index: discount_type /home/samfit/public_html/application/controllers/Checkout.php 31
ERROR - 2024-06-27 22:24:36 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:26:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 22:26:34 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:26:46 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:26:54 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:26:59 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:27:23 --> 404 Page Not Found: Stylescss/index
ERROR - 2024-06-27 22:31:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 22:49:47 --> Could not find the language line "Home"
ERROR - 2024-06-27 23:03:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-27 23:19:05 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-27 23:19:53 --> Could not find the language line "Home"
ERROR - 2024-06-27 23:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-27 23:49:48 --> Could not find the language line "Home"
