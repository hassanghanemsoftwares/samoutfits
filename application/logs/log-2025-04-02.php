<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-04-02 00:01:45 --> Could not find the language line "Socks"
ERROR - 2025-04-02 00:02:05 --> Could not find the language line "Socks"
ERROR - 2025-04-02 00:02:23 --> Could not find the language line "Other"
ERROR - 2025-04-02 00:02:37 --> Could not find the language line "Other"
ERROR - 2025-04-02 00:03:06 --> Could not find the language line "Other"
ERROR - 2025-04-02 00:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 00:06:23 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-02 00:12:38 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-02 00:15:22 --> Could not find the language line "Home"
ERROR - 2025-04-02 00:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 00:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 00:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 00:45:20 --> Could not find the language line "Home"
ERROR - 2025-04-02 00:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 01:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 01:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 01:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 01:15:16 --> Could not find the language line "Home"
ERROR - 2025-04-02 01:23:23 --> Could not find the language line "Home"
ERROR - 2025-04-02 01:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 01:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 01:45:15 --> Could not find the language line "Home"
ERROR - 2025-04-02 01:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 02:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 02:15:31 --> Could not find the language line "Home"
ERROR - 2025-04-02 02:24:11 --> Could not find the language line "Home"
ERROR - 2025-04-02 02:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 02:31:36 --> 404 Page Not Found: Admin/index
ERROR - 2025-04-02 02:32:08 --> 404 Page Not Found: User/login
ERROR - 2025-04-02 02:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 02:32:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-02 02:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 02:45:19 --> Could not find the language line "Home"
ERROR - 2025-04-02 02:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 02:57:43 --> Could not find the language line "Home"
ERROR - 2025-04-02 03:07:55 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-02 03:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 03:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 03:15:19 --> Could not find the language line "Home"
ERROR - 2025-04-02 03:21:49 --> Could not find the language line "Home"
ERROR - 2025-04-02 03:22:39 --> Could not find the language line "Home"
ERROR - 2025-04-02 03:29:46 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 03:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 03:36:39 --> 404 Page Not Found: Users/accounts
ERROR - 2025-04-02 03:37:23 --> Could not find the language line "Home"
ERROR - 2025-04-02 03:40:52 --> Could not find the language line "Home"
ERROR - 2025-04-02 03:45:31 --> Could not find the language line "Home"
ERROR - 2025-04-02 03:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 04:00:23 --> Could not find the language line "Home"
ERROR - 2025-04-02 04:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 04:09:38 --> Could not find the language line "accounts"
ERROR - 2025-04-02 04:10:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 04:14:31 --> Could not find the language line "Home"
ERROR - 2025-04-02 04:15:19 --> Could not find the language line "Home"
ERROR - 2025-04-02 04:21:50 --> Could not find the language line "Home"
ERROR - 2025-04-02 04:26:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 04:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 04:36:31 --> Could not find the language line "Home"
ERROR - 2025-04-02 04:40:23 --> Could not find the language line "Home"
ERROR - 2025-04-02 04:45:18 --> Could not find the language line "Home"
ERROR - 2025-04-02 04:55:26 --> Could not find the language line "Home"
ERROR - 2025-04-02 05:09:13 --> Could not find the language line "Home"
ERROR - 2025-04-02 05:10:55 --> Could not find the language line "accounts"
ERROR - 2025-04-02 05:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 05:15:24 --> Could not find the language line "Home"
ERROR - 2025-04-02 05:21:29 --> Could not find the language line "Home"
ERROR - 2025-04-02 05:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 05:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 05:45:17 --> Could not find the language line "Home"
ERROR - 2025-04-02 05:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 05:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:11:14 --> 404 Page Not Found: Ipfs/bafkreicyqcbhpicbos7ev4mrxofwqx6hvvge7pahpta6xuspr44crai5by
ERROR - 2025-04-02 06:14:34 --> Could not find the language line "Home"
ERROR - 2025-04-02 06:15:17 --> Could not find the language line "Home"
ERROR - 2025-04-02 06:17:48 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 06:20:58 --> Could not find the language line "Home"
ERROR - 2025-04-02 06:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:45:17 --> Could not find the language line "Home"
ERROR - 2025-04-02 06:49:47 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 06:50:29 --> Could not find the language line "Home"
ERROR - 2025-04-02 06:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:59:27 --> Could not find the language line "Home"
ERROR - 2025-04-02 06:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 06:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:04:07 --> Could not find the language line "Home"
ERROR - 2025-04-02 07:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:15:19 --> Could not find the language line "Home"
ERROR - 2025-04-02 07:20:45 --> Could not find the language line "Home"
ERROR - 2025-04-02 07:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:21:39 --> 404 Page Not Found: Assets/img
ERROR - 2025-04-02 07:21:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 07:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:23:14 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-02 07:24:26 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-04-02 07:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:25:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-02 07:25:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-02 07:26:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-02 07:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:35:11 --> Could not find the language line "Home"
ERROR - 2025-04-02 07:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:38:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 07:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:45:19 --> Could not find the language line "Home"
ERROR - 2025-04-02 07:49:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 07:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 07:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 08:02:44 --> Could not find the language line "products"
ERROR - 2025-04-02 08:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 08:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 08:09:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 08:10:11 --> Could not find the language line "Home"
ERROR - 2025-04-02 08:15:18 --> Could not find the language line "Home"
ERROR - 2025-04-02 08:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 08:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 08:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 08:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 08:29:28 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 08:45:19 --> Could not find the language line "Home"
ERROR - 2025-04-02 08:45:56 --> Could not find the language line "Home"
ERROR - 2025-04-02 08:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 08:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 08:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 08:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 08:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 08:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 09:01:05 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-02 09:03:06 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-02 09:07:54 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-02 09:12:19 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-02 09:15:19 --> Could not find the language line "Home"
ERROR - 2025-04-02 09:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 09:17:05 --> Could not find the language line "Home"
ERROR - 2025-04-02 09:27:25 --> Could not find the language line "Home"
ERROR - 2025-04-02 09:27:25 --> Could not find the language line "Home"
ERROR - 2025-04-02 09:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 09:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 09:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 09:29:12 --> Could not find the language line "Other"
ERROR - 2025-04-02 09:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 09:34:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 09:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 09:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 09:45:20 --> Could not find the language line "Home"
ERROR - 2025-04-02 09:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 09:53:38 --> Could not find the language line "Home"
ERROR - 2025-04-02 10:15:20 --> Could not find the language line "Home"
ERROR - 2025-04-02 10:37:34 --> Could not find the language line "Home"
ERROR - 2025-04-02 10:45:20 --> Could not find the language line "Home"
ERROR - 2025-04-02 10:48:30 --> Could not find the language line "Home"
ERROR - 2025-04-02 10:50:15 --> Could not find the language line "Home"
ERROR - 2025-04-02 10:50:33 --> Could not find the language line "Home"
ERROR - 2025-04-02 10:52:07 --> Could not find the language line "Home"
ERROR - 2025-04-02 10:52:07 --> Could not find the language line "Home"
ERROR - 2025-04-02 10:52:08 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2025-04-02 10:52:08 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2025-04-02 10:52:09 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-02 10:52:09 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-02 10:52:46 --> Could not find the language line "Home"
ERROR - 2025-04-02 10:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 10:53:12 --> Could not find the language line "Home"
ERROR - 2025-04-02 10:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 11:14:37 --> 404 Page Not Found: Ipfs/bafkreicyqcbhpicbos7ev4mrxofwqx6hvvge7pahpta6xuspr44crai5by
ERROR - 2025-04-02 11:15:20 --> Could not find the language line "Home"
ERROR - 2025-04-02 11:17:52 --> Could not find the language line "Home"
ERROR - 2025-04-02 11:19:48 --> Could not find the language line "Home"
ERROR - 2025-04-02 11:32:00 --> Could not find the language line "Home"
ERROR - 2025-04-02 11:41:21 --> Could not find the language line "Home"
ERROR - 2025-04-02 11:45:21 --> Could not find the language line "Home"
ERROR - 2025-04-02 11:45:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 11:48:00 --> Could not find the language line "Home"
ERROR - 2025-04-02 11:51:53 --> Could not find the language line "Home"
ERROR - 2025-04-02 11:56:57 --> Could not find the language line "Home"
ERROR - 2025-04-02 12:15:23 --> Could not find the language line "Home"
ERROR - 2025-04-02 12:16:18 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 12:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 12:25:12 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-02 12:27:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 12:28:38 --> Could not find the language line "Home"
ERROR - 2025-04-02 12:31:36 --> Could not find the language line "Home"
ERROR - 2025-04-02 12:31:39 --> Could not find the language line "Home"
ERROR - 2025-04-02 12:31:40 --> Could not find the language line "Home"
ERROR - 2025-04-02 12:31:41 --> Could not find the language line "Home"
ERROR - 2025-04-02 12:31:42 --> Could not find the language line "Home"
ERROR - 2025-04-02 12:31:47 --> Could not find the language line "Home"
ERROR - 2025-04-02 12:31:48 --> Could not find the language line "Home"
ERROR - 2025-04-02 12:40:04 --> Could not find the language line "Home"
ERROR - 2025-04-02 12:45:21 --> Could not find the language line "Home"
ERROR - 2025-04-02 12:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 12:47:43 --> Could not find the language line "Home"
ERROR - 2025-04-02 13:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:07:11 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 13:15:23 --> Could not find the language line "Home"
ERROR - 2025-04-02 13:16:37 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 13:19:59 --> Could not find the language line "Home"
ERROR - 2025-04-02 13:19:59 --> Could not find the language line "Home"
ERROR - 2025-04-02 13:20:13 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 13:20:19 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 13:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:24:47 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 13:24:53 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 13:24:56 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 13:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:25:07 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 13:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:26:04 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 13:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:28:16 --> Could not find the language line "users"
ERROR - 2025-04-02 13:32:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 13:39:57 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 13:40:04 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 13:44:50 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 13:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:45:22 --> Could not find the language line "Home"
ERROR - 2025-04-02 13:49:34 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 13:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 13:51:32 --> Could not find the language line "Home"
ERROR - 2025-04-02 13:55:10 --> 404 Page Not Found: Ipfs/bafkreicyqcbhpicbos7ev4mrxofwqx6hvvge7pahpta6xuspr44crai5by
ERROR - 2025-04-02 13:58:09 --> 404 Page Not Found: Sites/favicon.ico
ERROR - 2025-04-02 13:58:10 --> 404 Page Not Found: Sites/favicon.png
ERROR - 2025-04-02 13:58:11 --> Could not find the language line "Home"
ERROR - 2025-04-02 13:59:39 --> 404 Page Not Found: Users/users
ERROR - 2025-04-02 14:04:05 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 14:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 14:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 14:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 14:06:07 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 14:08:25 --> Could not find the language line "Other"
ERROR - 2025-04-02 14:08:42 --> Could not find the language line "Other"
ERROR - 2025-04-02 14:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 14:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 14:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 14:12:13 --> Could not find the language line "Other"
ERROR - 2025-04-02 14:15:22 --> Could not find the language line "Home"
ERROR - 2025-04-02 14:16:10 --> Could not find the language line "Home"
ERROR - 2025-04-02 14:16:43 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 14:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 14:24:01 --> Could not find the language line "Home"
ERROR - 2025-04-02 14:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 14:24:20 --> Could not find the language line "Home"
ERROR - 2025-04-02 14:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 14:24:29 --> Could not find the language line "Home"
ERROR - 2025-04-02 14:24:47 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 14:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 14:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 14:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 14:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 14:27:33 --> Could not find the language line "users"
ERROR - 2025-04-02 14:31:11 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-02 14:31:11 --> Could not find the language line "Home"
ERROR - 2025-04-02 14:31:11 --> Could not find the language line "Home"
ERROR - 2025-04-02 14:37:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 14:39:17 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 14:44:15 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 14:44:15 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 14:44:15 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 14:44:15 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 14:44:16 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 14:44:29 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 14:44:30 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 14:44:30 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 14:44:30 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 14:44:30 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 14:45:23 --> Could not find the language line "Home"
ERROR - 2025-04-02 14:52:05 --> Could not find the language line "Home"
ERROR - 2025-04-02 14:53:32 --> Could not find the language line "Home"
ERROR - 2025-04-02 14:54:44 --> Could not find the language line "Home"
ERROR - 2025-04-02 14:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 15:07:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 15:08:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 15:15:24 --> Could not find the language line "Home"
ERROR - 2025-04-02 15:22:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 15:30:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 15:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 15:34:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 15:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 15:45:22 --> Could not find the language line "Home"
ERROR - 2025-04-02 15:51:15 --> Could not find the language line "Home"
ERROR - 2025-04-02 15:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 15:59:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 16:15:23 --> Could not find the language line "Home"
ERROR - 2025-04-02 16:16:49 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 16:24:38 --> Could not find the language line "Home"
ERROR - 2025-04-02 16:24:54 --> Could not find the language line "Home"
ERROR - 2025-04-02 16:25:28 --> Could not find the language line "Home"
ERROR - 2025-04-02 16:25:29 --> Could not find the language line "Home"
ERROR - 2025-04-02 16:27:30 --> Could not find the language line "Home"
ERROR - 2025-04-02 16:45:23 --> Could not find the language line "Home"
ERROR - 2025-04-02 16:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 16:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 17:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 17:01:46 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-02 17:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 17:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 17:04:29 --> Could not find the language line "Home"
ERROR - 2025-04-02 17:04:31 --> Could not find the language line "Home"
ERROR - 2025-04-02 17:15:23 --> Could not find the language line "Home"
ERROR - 2025-04-02 17:17:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 17:29:59 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-02 17:45:24 --> Could not find the language line "Home"
ERROR - 2025-04-02 17:59:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 18:00:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 18:05:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 18:05:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 18:15:25 --> Could not find the language line "Home"
ERROR - 2025-04-02 18:45:24 --> Could not find the language line "Home"
ERROR - 2025-04-02 18:52:20 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 19:02:44 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 19:04:22 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:04:30 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:04:47 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:04:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-02 19:04:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-02 19:05:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-02 19:05:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-02 19:05:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-02 19:05:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-02 19:05:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-02 19:05:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-02 19:05:11 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:08:46 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:15:24 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:27:51 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 19:28:53 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:28:55 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:30:37 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:36:38 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-02 19:36:38 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:36:38 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:38:51 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:40:56 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2025-04-02 19:40:56 --> Unable to connect to the database
ERROR - 2025-04-02 19:40:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-02 19:42:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2025-04-02 19:42:08 --> Unable to connect to the database
ERROR - 2025-04-02 19:42:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-02 19:45:26 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:47:13 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:48:47 --> Could not find the language line "Home"
ERROR - 2025-04-02 19:57:37 --> Could not find the language line "Socks"
ERROR - 2025-04-02 20:08:41 --> Could not find the language line "Home"
ERROR - 2025-04-02 20:08:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-02 20:08:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-02 20:13:18 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-02 20:15:25 --> Could not find the language line "Home"
ERROR - 2025-04-02 20:29:57 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 20:37:12 --> Could not find the language line "Home"
ERROR - 2025-04-02 20:45:26 --> Could not find the language line "Home"
ERROR - 2025-04-02 20:46:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 20:47:15 --> Could not find the language line "Socks"
ERROR - 2025-04-02 20:49:46 --> Could not find the language line "Home"
ERROR - 2025-04-02 20:49:47 --> Could not find the language line "Home"
ERROR - 2025-04-02 20:56:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 20:56:35 --> Could not find the language line "Home"
ERROR - 2025-04-02 20:57:20 --> Could not find the language line "Socks"
ERROR - 2025-04-02 20:58:00 --> Could not find the language line "Home"
ERROR - 2025-04-02 20:59:40 --> Could not find the language line "Home"
ERROR - 2025-04-02 21:04:55 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-02 21:05:05 --> Could not find the language line "Home"
ERROR - 2025-04-02 21:05:32 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-02 21:06:21 --> 404 Page Not Found: Products/accounts
ERROR - 2025-04-02 21:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 21:15:28 --> Could not find the language line "Home"
ERROR - 2025-04-02 21:19:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 21:22:51 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-04-02 21:22:51 --> Could not find the language line "Home"
ERROR - 2025-04-02 21:29:31 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 21:29:35 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 21:30:25 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 21:30:30 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 21:36:46 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 21:38:16 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 21:43:51 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 21:44:14 --> Could not find the language line "Home"
ERROR - 2025-04-02 21:45:27 --> Could not find the language line "Home"
ERROR - 2025-04-02 21:46:23 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 21:47:04 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 21:47:10 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 21:47:20 --> Could not find the language line "Socks"
ERROR - 2025-04-02 21:49:47 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 21:58:38 --> Could not find the language line "Socks"
ERROR - 2025-04-02 22:02:43 --> Could not find the language line "Perfume"
ERROR - 2025-04-02 22:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 22:13:18 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 22:15:32 --> Could not find the language line "Home"
ERROR - 2025-04-02 22:16:55 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 22:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 22:25:07 --> Could not find the language line "Home"
ERROR - 2025-04-02 22:25:53 --> Could not find the language line "Home"
ERROR - 2025-04-02 22:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 22:26:50 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 22:28:23 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 22:30:58 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 22:31:29 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 22:33:31 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 22:36:07 --> Could not find the language line "Home"
ERROR - 2025-04-02 22:37:40 --> Could not find the language line "Home"
ERROR - 2025-04-02 22:42:22 --> Could not find the language line "Home"
ERROR - 2025-04-02 22:43:56 --> Could not find the language line "Home"
ERROR - 2025-04-02 22:45:06 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-02 22:45:30 --> Could not find the language line "Home"
ERROR - 2025-04-02 22:45:34 --> Could not find the language line "Home"
ERROR - 2025-04-02 22:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 22:47:43 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 22:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 22:53:59 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 22:55:43 --> Could not find the language line "Home"
ERROR - 2025-04-02 23:00:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 23:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 23:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 23:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 23:15:30 --> Could not find the language line "Home"
ERROR - 2025-04-02 23:17:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 23:17:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 23:25:21 --> Could not find the language line "Home"
ERROR - 2025-04-02 23:40:47 --> Could not find the language line "Home"
ERROR - 2025-04-02 23:40:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 23:45:32 --> Could not find the language line "Home"
ERROR - 2025-04-02 23:47:13 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 23:47:22 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 23:47:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 23:48:31 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 23:48:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 23:49:17 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 23:49:30 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 23:49:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-02 23:51:36 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 23:52:38 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 23:52:51 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 23:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 23:53:22 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 23:54:32 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 23:54:38 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 23:54:48 --> Could not find the language line "Clothing"
ERROR - 2025-04-02 23:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-02 23:58:21 --> Could not find the language line "Home"
