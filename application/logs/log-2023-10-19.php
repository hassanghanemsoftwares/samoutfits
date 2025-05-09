<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-19 00:01:00 --> Could not find the language line "Crocs"
ERROR - 2023-10-19 00:02:23 --> Could not find the language line "Home"
ERROR - 2023-10-19 00:14:52 --> Could not find the language line "Home"
ERROR - 2023-10-19 00:15:12 --> Could not find the language line "Home"
ERROR - 2023-10-19 00:20:56 --> Could not find the language line "Home"
ERROR - 2023-10-19 00:21:01 --> Could not find the language line "Home"
ERROR - 2023-10-19 00:21:22 --> Could not find the language line "Home"
ERROR - 2023-10-19 00:22:23 --> Could not find the language line "Home"
ERROR - 2023-10-19 00:23:06 --> Could not find the language line "products"
ERROR - 2023-10-19 00:23:45 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-19 00:25:06 --> Could not find the language line "Home"
ERROR - 2023-10-19 00:34:16 --> Could not find the language line "Home"
ERROR - 2023-10-19 00:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 00:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 00:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 00:39:18 --> Could not find the language line "Home"
ERROR - 2023-10-19 00:39:27 --> Could not find the language line "Home"
ERROR - 2023-10-19 00:39:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 00:39:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 00:40:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 00:40:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 00:40:37 --> Could not find the language line "Home"
ERROR - 2023-10-19 00:51:16 --> Could not find the language line "Home"
ERROR - 2023-10-19 00:53:26 --> Could not find the language line "Home"
ERROR - 2023-10-19 00:54:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 00:54:21 --> Could not find the language line "Home"
ERROR - 2023-10-19 01:03:03 --> 404 Page Not Found: Env/index
ERROR - 2023-10-19 01:03:04 --> 404 Page Not Found: Wp-content/index
ERROR - 2023-10-19 01:03:13 --> Could not find the language line "Home"
ERROR - 2023-10-19 01:19:11 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-19 01:29:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-19 01:52:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 01:55:58 --> Could not find the language line "Home"
ERROR - 2023-10-19 02:15:09 --> Could not find the language line "Home"
ERROR - 2023-10-19 02:24:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-19 02:42:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 02:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 02:55:12 --> Could not find the language line "Home"
ERROR - 2023-10-19 03:07:46 --> Could not find the language line "Home"
ERROR - 2023-10-19 03:08:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-19 03:08:33 --> Could not find the language line "Home"
ERROR - 2023-10-19 03:08:40 --> Could not find the language line "Home"
ERROR - 2023-10-19 03:10:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 03:25:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 03:29:08 --> Could not find the language line "Home"
ERROR - 2023-10-19 03:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 03:31:58 --> Could not find the language line "Home"
ERROR - 2023-10-19 03:58:04 --> Could not find the language line "Home"
ERROR - 2023-10-19 03:58:31 --> Could not find the language line "Socks"
ERROR - 2023-10-19 03:59:23 --> Could not find the language line "Home"
ERROR - 2023-10-19 03:59:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 03:59:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-10-19 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-10-19 04:00:16 --> Could not find the language line "Perfume"
ERROR - 2023-10-19 04:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 04:00:25 --> Could not find the language line "Perfume"
ERROR - 2023-10-19 04:00:26 --> Could not find the language line "Home"
ERROR - 2023-10-19 04:15:11 --> Could not find the language line "Home"
ERROR - 2023-10-19 04:19:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-19 04:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 04:27:38 --> Could not find the language line "Home"
ERROR - 2023-10-19 04:28:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 04:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 04:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 04:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 04:31:39 --> Could not find the language line "Home"
ERROR - 2023-10-19 04:31:58 --> Could not find the language line "Home"
ERROR - 2023-10-19 04:32:17 --> Could not find the language line "Socks"
ERROR - 2023-10-19 04:32:39 --> Could not find the language line "Socks"
ERROR - 2023-10-19 04:32:50 --> Could not find the language line "Socks"
ERROR - 2023-10-19 04:33:14 --> Could not find the language line "Socks"
ERROR - 2023-10-19 04:33:14 --> Could not find the language line "Socks"
ERROR - 2023-10-19 04:33:17 --> Could not find the language line "Home"
ERROR - 2023-10-19 04:33:30 --> Could not find the language line "Home"
ERROR - 2023-10-19 04:40:52 --> Could not find the language line "Home"
ERROR - 2023-10-19 04:41:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 04:41:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 04:41:10 --> Could not find the language line "Home"
ERROR - 2023-10-19 04:41:13 --> Could not find the language line "Socks"
ERROR - 2023-10-19 04:41:26 --> Could not find the language line "Home"
ERROR - 2023-10-19 04:42:31 --> Could not find the language line "Socks"
ERROR - 2023-10-19 04:43:04 --> Could not find the language line "Home"
ERROR - 2023-10-19 04:44:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 04:44:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 04:44:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 04:57:32 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:07:33 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 05:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 05:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 05:12:11 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:12:14 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 05:12:42 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:13:01 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:14:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-19 05:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 05:18:35 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 05:20:55 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:21:54 --> Severity: Warning --> file_get_contents(): https:// wrapper is disabled in the server configuration by allow_url_fopen=0 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:21:54 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=71007455&amp;text=5441%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: no suitable wrapper could be found /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:21:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2023-10-19 05:22:00 --> Severity: Warning --> file_get_contents(): https:// wrapper is disabled in the server configuration by allow_url_fopen=0 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:22:00 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=71007455&amp;text=1591%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: no suitable wrapper could be found /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:22:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2023-10-19 05:22:03 --> Severity: Warning --> file_get_contents(): https:// wrapper is disabled in the server configuration by allow_url_fopen=0 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:22:03 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=71007455&amp;text=1756%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: no suitable wrapper could be found /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:22:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2023-10-19 05:23:30 --> Severity: Warning --> file_get_contents(): https:// wrapper is disabled in the server configuration by allow_url_fopen=0 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:23:30 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=71007455&amp;text=9130%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: no suitable wrapper could be found /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:23:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2023-10-19 05:23:42 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 05:24:17 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:24:17 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:24:24 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 05:24:50 --> Severity: Warning --> file_get_contents(): https:// wrapper is disabled in the server configuration by allow_url_fopen=0 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:24:50 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=71007455&amp;text=7184%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: no suitable wrapper could be found /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:24:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2023-10-19 05:25:07 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:25:59 --> Severity: Warning --> file_get_contents(): https:// wrapper is disabled in the server configuration by allow_url_fopen=0 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:25:59 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=71007455&amp;text=1038%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: no suitable wrapper could be found /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:25:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2023-10-19 05:27:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-19 05:27:31 --> Severity: Warning --> file_get_contents(): https:// wrapper is disabled in the server configuration by allow_url_fopen=0 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:27:31 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=71007455&amp;text=2559%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: no suitable wrapper could be found /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:27:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2023-10-19 05:29:14 --> Severity: Warning --> file_get_contents(): https:// wrapper is disabled in the server configuration by allow_url_fopen=0 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:29:14 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=71007455&amp;text=3239%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: no suitable wrapper could be found /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 05:29:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2023-10-19 05:34:46 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:37:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 05:43:30 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:51:57 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 05:53:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 05:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 05:53:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 05:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 05:54:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-19 05:55:00 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 05:59:03 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:59:18 --> Could not find the language line "Home"
ERROR - 2023-10-19 05:59:22 --> Could not find the language line "Home"
ERROR - 2023-10-19 06:07:12 --> Could not find the language line "Home"
ERROR - 2023-10-19 06:10:28 --> Could not find the language line "Home"
ERROR - 2023-10-19 06:13:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 06:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 06:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 06:17:28 --> Could not find the language line "Home"
ERROR - 2023-10-19 06:21:55 --> Could not find the language line "Home"
ERROR - 2023-10-19 06:26:06 --> Could not find the language line "Home"
ERROR - 2023-10-19 06:26:41 --> Could not find the language line "Home"
ERROR - 2023-10-19 06:28:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 06:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 06:31:33 --> Could not find the language line "Home"
ERROR - 2023-10-19 06:33:20 --> Could not find the language line "Home"
ERROR - 2023-10-19 06:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 06:38:09 --> Could not find the language line "Home"
ERROR - 2023-10-19 06:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 06:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 06:48:34 --> Could not find the language line "Home"
ERROR - 2023-10-19 06:50:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 06:50:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-19 06:54:06 --> 404 Page Not Found: Wp-includes/ID3
ERROR - 2023-10-19 06:54:06 --> 404 Page Not Found: Feed/index
ERROR - 2023-10-19 06:54:07 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-19 06:54:07 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-10-19 06:54:07 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-10-19 06:54:07 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-10-19 06:54:08 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-10-19 06:54:08 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-10-19 06:54:08 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-10-19 06:54:09 --> 404 Page Not Found: 2021/wp-includes
ERROR - 2023-10-19 06:54:09 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-10-19 06:54:09 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-10-19 06:54:10 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-10-19 06:54:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 06:54:10 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-10-19 06:54:10 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-10-19 06:54:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 06:54:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 06:54:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 06:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 06:57:51 --> Could not find the language line "Home"
ERROR - 2023-10-19 06:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 07:06:48 --> Could not find the language line "Home"
ERROR - 2023-10-19 07:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 07:08:22 --> Could not find the language line "Home"
ERROR - 2023-10-19 07:10:06 --> Could not find the language line "Home"
ERROR - 2023-10-19 07:15:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 07:15:41 --> Could not find the language line "Home"
ERROR - 2023-10-19 07:18:30 --> Could not find the language line "Home"
ERROR - 2023-10-19 07:28:24 --> Could not find the language line "Home"
ERROR - 2023-10-19 07:28:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 07:28:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 07:28:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 07:28:26 --> 404 Page Not Found: Home/accounts
ERROR - 2023-10-19 07:28:26 --> 404 Page Not Found: Home/home
ERROR - 2023-10-19 07:33:59 --> Could not find the language line "Home"
ERROR - 2023-10-19 07:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 07:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 07:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 07:42:34 --> Could not find the language line "Bracelets"
ERROR - 2023-10-19 07:47:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 07:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:05:11 --> Could not find the language line "Home"
ERROR - 2023-10-19 08:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:07:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-19 08:07:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-19 08:07:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-19 08:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:12:28 --> Could not find the language line "Home"
ERROR - 2023-10-19 08:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:15:55 --> Could not find the language line "Home"
ERROR - 2023-10-19 08:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:20:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 08:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:25:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 08:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:37:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 08:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:41:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 08:53:17 --> Could not find the language line "Home"
ERROR - 2023-10-19 08:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 08:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:02:47 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:05:44 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:08:39 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:11:18 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:15:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-19 09:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:22:14 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:22:55 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:23:20 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:24:59 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2023-10-19 09:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:33:28 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:33:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 09:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:33:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 09:33:50 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:34:12 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:35:25 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:35:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-19 09:35:38 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:35:42 --> Could not find the language line "Bracelets"
ERROR - 2023-10-19 09:35:56 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:36:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-19 09:36:24 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:36:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 09:36:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 09:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:36:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 09:36:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 09:36:53 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:36:57 --> Could not find the language line "Perfume"
ERROR - 2023-10-19 09:37:04 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:37:07 --> Could not find the language line "Socks"
ERROR - 2023-10-19 09:37:57 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:39:13 --> Could not find the language line "Home"
ERROR - 2023-10-19 09:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 09:53:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 10:17:15 --> Could not find the language line "Home"
ERROR - 2023-10-19 10:21:39 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2023-10-19 10:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 10:26:24 --> Could not find the language line "Home"
ERROR - 2023-10-19 10:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 10:36:29 --> Could not find the language line "Home"
ERROR - 2023-10-19 10:42:26 --> Could not find the language line "Home"
ERROR - 2023-10-19 10:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 10:44:28 --> Could not find the language line "Home"
ERROR - 2023-10-19 10:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 10:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 10:45:16 --> Could not find the language line "Home"
ERROR - 2023-10-19 10:45:33 --> Could not find the language line "Home"
ERROR - 2023-10-19 10:46:14 --> Could not find the language line "Home"
ERROR - 2023-10-19 10:46:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:46:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 10:47:38 --> Could not find the language line "Home"
ERROR - 2023-10-19 10:48:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:48:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:48:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:48:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:48:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:48:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 10:48:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:48:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:48:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-19 10:48:46 --> Could not find the language line "Home"
ERROR - 2023-10-19 10:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 10:48:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:48:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:49:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:49:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:49:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:49:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 10:50:14 --> Could not find the language line "Disclaimer"
ERROR - 2023-10-19 10:50:33 --> Could not find the language line "Home"
ERROR - 2023-10-19 10:50:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:50:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 10:51:50 --> Could not find the language line "Home"
ERROR - 2023-10-19 10:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 11:00:40 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:03:42 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:03:58 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:05:42 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:06:21 --> Severity: Warning --> file_get_contents(): https:// wrapper is disabled in the server configuration by allow_url_fopen=0 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 11:06:21 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=76123456&amp;text=8889%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: no suitable wrapper could be found /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-19 11:06:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2023-10-19 11:08:32 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:14:21 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 11:21:57 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:25:23 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:28:03 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:28:17 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:28:19 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:29:24 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:32:25 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:50:34 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:51:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-19 11:54:29 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 11:55:06 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:55:10 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:55:50 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 11:57:05 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 11:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 11:58:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-19 11:58:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-19 11:58:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-19 11:58:20 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 11:58:42 --> Could not find the language line "Home"
ERROR - 2023-10-19 11:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 11:59:10 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 12:03:07 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:03:15 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:05:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-19 12:05:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-19 12:05:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-19 12:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 12:07:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 12:07:54 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 12:23:13 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:23:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 12:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 12:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 12:30:39 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 12:46:24 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:48:09 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:52:00 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:52:05 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:52:24 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 12:53:18 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-19 12:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 12:53:42 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:53:44 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 12:55:35 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 12:56:09 --> Could not find the language line "Home"
ERROR - 2023-10-19 12:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 12:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 12:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 12:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:02:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-19 13:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:04:04 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:04:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:04:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:04:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:04:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:04:36 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:04:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:04:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:04:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:04:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:05:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:05:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:05:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:05:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:05:20 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:05:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:05:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:05:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:05:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:05:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:05:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:06:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:06:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:06:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:06:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:06:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:06:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 13:06:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-19 13:07:07 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:08:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-19 13:09:07 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:17:19 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:17:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-19 13:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:24:56 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:25:40 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:29:57 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:42:38 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:43:02 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:43:53 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:46:29 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:49:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 13:49:44 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:49:44 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:49:45 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:49:45 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:51:08 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:53:00 --> Could not find the language line "Perfume"
ERROR - 2023-10-19 13:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 13:53:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 13:57:42 --> Could not find the language line "Home"
ERROR - 2023-10-19 13:59:20 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:03:00 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:03:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-19 14:03:20 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:03:45 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:03:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:04:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 14:04:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:04:03 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:04:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:04:14 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:04:32 --> Could not find the language line "Perfume"
ERROR - 2023-10-19 14:04:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:04:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:05:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:05:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:05:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:05:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:05:28 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:05:31 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:05:44 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:05:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-19 14:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:06:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-19 14:06:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-19 14:06:39 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:07:28 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:10:08 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-19 14:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:18:58 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:19:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-19 14:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:22:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-19 14:22:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-19 14:22:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-19 14:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:26:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-19 14:26:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-19 14:26:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-19 14:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:30:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-19 14:30:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-19 14:30:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-19 14:30:59 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:31:01 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:32:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:32:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:39:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 14:39:11 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:43:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:43:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:43:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:44:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:44:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:44:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:44:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:44:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:44:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:44:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:45:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-19 14:45:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-19 14:45:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-19 14:46:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:46:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:48:00 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:50:43 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:52:21 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:54:52 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:56:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:56:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:56:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:56:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:57:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:57:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:57:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:57:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:57:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:57:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:58:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:58:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:58:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:58:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 14:58:08 --> Could not find the language line "Home"
ERROR - 2023-10-19 14:58:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 14:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:58:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:59:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 14:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 14:59:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 15:00:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 15:00:26 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:00:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 15:00:32 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:00:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 15:00:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 15:00:44 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:01:16 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:01:43 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:03:48 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:03:58 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:04:13 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:12:00 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:13:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 15:14:23 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:14:53 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:15:10 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:18:08 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:19:15 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:19:18 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:19:48 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:25:43 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:37:29 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:39:13 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:45:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:53:09 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:53:12 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:54:09 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:54:36 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:54:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-19 15:55:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-19 15:55:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-19 15:55:47 --> Could not find the language line "Home"
ERROR - 2023-10-19 15:55:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 15:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:56:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 15:56:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 15:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:57:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 15:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:57:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 15:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 15:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:01:50 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:02:47 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:08:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 16:08:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 16:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:16:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 16:16:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 16:16:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 16:17:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 16:17:13 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:17:21 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:27:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 16:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:32:01 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:33:40 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:36:51 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:37:37 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:42:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-19 16:42:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-19 16:42:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-19 16:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:43:02 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:46:40 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:49:03 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:49:34 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:54:15 --> Could not find the language line "Other"
ERROR - 2023-10-19 16:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:56:01 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 16:57:00 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:57:07 --> Could not find the language line "Socks"
ERROR - 2023-10-19 16:57:38 --> Could not find the language line "Home"
ERROR - 2023-10-19 16:59:31 --> 404 Page Not Found: Env/index
ERROR - 2023-10-19 16:59:32 --> 404 Page Not Found: Wp-content/index
ERROR - 2023-10-19 17:00:09 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:00:41 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:01:59 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:03:38 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:05:35 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:05:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 17:05:54 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 17:08:08 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:09:55 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:12:25 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:14:35 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:22:08 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:22:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 17:23:14 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:26:03 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:26:50 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:29:43 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:29:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 17:29:59 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:30:38 --> Could not find the language line "Other"
ERROR - 2023-10-19 17:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 17:33:12 --> Could not find the language line "Other"
ERROR - 2023-10-19 17:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 17:35:44 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 17:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 17:49:55 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:49:57 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:52:41 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:53:55 --> Could not find the language line "Home"
ERROR - 2023-10-19 17:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 17:59:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-19 18:00:24 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:01:48 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:03:17 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:04:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-19 18:04:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-19 18:04:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-19 18:06:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 18:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:10:34 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:10:39 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:10:52 --> Could not find the language line "Bracelets"
ERROR - 2023-10-19 18:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:11:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 18:12:27 --> Could not find the language line "Bracelets"
ERROR - 2023-10-19 18:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:12:54 --> Could not find the language line "Bracelets"
ERROR - 2023-10-19 18:12:55 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:12:58 --> Could not find the language line "Bracelets"
ERROR - 2023-10-19 18:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:13:21 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:13:33 --> Could not find the language line "Bracelets"
ERROR - 2023-10-19 18:13:35 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:14:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-19 18:14:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-19 18:14:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-19 18:20:43 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:24:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 18:28:24 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:28:25 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:29:19 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:29:50 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:30:22 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:30:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 18:30:44 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:30:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:30:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:31:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:31:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:31:12 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:31:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:31:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:31:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:31:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:31:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:31:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:31:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:31:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:31:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:31:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:32:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:32:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-19 18:35:12 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:38:13 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:39:34 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:39:36 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:39:36 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:39:36 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:39:36 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:39:36 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:39:49 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:40:35 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:40:37 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:40:45 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:40:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 18:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:41:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 18:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:42:36 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:42:37 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:42:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 18:43:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 18:43:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 18:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:44:18 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:47:29 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:49:34 --> Could not find the language line "Home"
ERROR - 2023-10-19 18:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 18:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 19:00:20 --> Could not find the language line "Home"
ERROR - 2023-10-19 19:01:39 --> Could not find the language line "Home"
ERROR - 2023-10-19 19:02:09 --> Could not find the language line "Home"
ERROR - 2023-10-19 19:03:52 --> Could not find the language line "Home"
ERROR - 2023-10-19 19:04:36 --> Could not find the language line "Home"
ERROR - 2023-10-19 19:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 19:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 19:17:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 19:24:48 --> Could not find the language line "Home"
ERROR - 2023-10-19 19:24:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 19:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 19:29:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-19 19:29:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-19 19:29:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-19 19:51:27 --> Could not find the language line "Home"
ERROR - 2023-10-19 19:51:47 --> Could not find the language line "Home"
ERROR - 2023-10-19 19:52:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 19:58:55 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:02:04 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:02:54 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:04:07 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:04:56 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:05:04 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:05:07 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:07:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-19 20:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:09:18 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:09:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-19 20:09:57 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:10:10 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:11:21 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:11:28 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:21:37 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:22:22 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:22:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 20:24:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 20:24:18 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:24:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 20:24:20 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:35:18 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:35:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 20:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:36:29 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:36:48 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:39:07 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:52:31 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:52:43 --> Could not find the language line "Home"
ERROR - 2023-10-19 20:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 20:58:53 --> Could not find the language line "Socks"
ERROR - 2023-10-19 20:59:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 20:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 21:00:45 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:00:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 21:01:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 21:01:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 21:02:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 21:03:13 --> Could not find the language line "Perfume"
ERROR - 2023-10-19 21:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 21:05:27 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:06:38 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:08:27 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:09:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-19 21:12:27 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 21:14:00 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:14:29 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:15:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-19 21:16:52 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:17:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-19 21:18:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-19 21:18:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-19 21:18:43 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:21:06 --> Could not find the language line "Socks"
ERROR - 2023-10-19 21:21:46 --> Could not find the language line "Socks"
ERROR - 2023-10-19 21:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 21:32:20 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:37:23 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:39:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 21:42:15 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:43:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 21:43:56 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:44:30 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:47:50 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:48:02 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:51:44 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:53:55 --> Could not find the language line "Home"
ERROR - 2023-10-19 21:55:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 22:02:36 --> Could not find the language line "Home"
ERROR - 2023-10-19 22:09:57 --> Could not find the language line "Home"
ERROR - 2023-10-19 22:11:13 --> Could not find the language line "Home"
ERROR - 2023-10-19 22:11:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 22:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 22:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 22:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 22:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 22:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 22:11:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 22:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 22:11:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 22:11:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 22:11:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 22:11:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 22:11:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 22:11:59 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-19 22:12:04 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-19 22:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 22:12:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 22:12:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 22:12:12 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-19 22:12:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 22:12:17 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-19 22:12:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 22:12:21 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-19 22:12:26 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-19 22:18:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-19 22:19:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 22:20:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-19 22:20:26 --> Could not find the language line "Other"
ERROR - 2023-10-19 22:20:31 --> Could not find the language line "Other"
ERROR - 2023-10-19 22:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 22:23:53 --> Could not find the language line "Socks"
ERROR - 2023-10-19 22:27:25 --> Could not find the language line "Home"
ERROR - 2023-10-19 22:28:55 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-19 22:33:56 --> Could not find the language line "Home"
ERROR - 2023-10-19 22:34:03 --> Could not find the language line "Home"
ERROR - 2023-10-19 22:34:21 --> Could not find the language line "Home"
ERROR - 2023-10-19 22:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-19 22:39:36 --> Could not find the language line "Home"
ERROR - 2023-10-19 22:39:36 --> Could not find the language line "Home"
ERROR - 2023-10-19 22:40:30 --> Could not find the language line "Home"
ERROR - 2023-10-19 22:43:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-19 22:53:13 --> Could not find the language line "Home"
ERROR - 2023-10-19 22:59:48 --> Could not find the language line "Home"
ERROR - 2023-10-19 22:59:53 --> Could not find the language line "Home"
ERROR - 2023-10-19 23:00:39 --> Could not find the language line "Home"
ERROR - 2023-10-19 23:04:37 --> Could not find the language line "Home"
ERROR - 2023-10-19 23:04:37 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-10-19 23:04:37 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-19 23:04:37 --> Could not find the language line "Home"
ERROR - 2023-10-19 23:04:37 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-10-19 23:04:37 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-10-19 23:04:37 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-10-19 23:04:37 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-10-19 23:04:37 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-10-19 23:04:38 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-10-19 23:04:38 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-10-19 23:04:38 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-10-19 23:04:38 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-10-19 23:04:38 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-10-19 23:04:38 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-10-19 23:04:38 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-10-19 23:04:38 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-10-19 23:04:38 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-10-19 23:04:38 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-10-19 23:04:38 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-10-19 23:12:06 --> Could not find the language line "Home"
ERROR - 2023-10-19 23:13:07 --> Could not find the language line "Home"
ERROR - 2023-10-19 23:14:00 --> Could not find the language line "Home"
ERROR - 2023-10-19 23:14:05 --> Could not find the language line "Socks"
ERROR - 2023-10-19 23:14:29 --> Could not find the language line "Home"
ERROR - 2023-10-19 23:14:40 --> Could not find the language line "Home"
ERROR - 2023-10-19 23:44:14 --> 404 Page Not Found: Robotstxt/index
