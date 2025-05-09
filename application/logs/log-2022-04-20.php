<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-04-20 06:08:56 --> Could not find the language line "Home"
ERROR - 2022-04-20 06:08:57 --> Could not find the language line "Home"
ERROR - 2022-04-20 06:13:11 --> Could not find the language line "Home"
ERROR - 2022-04-20 06:13:36 --> Could not find the language line "Home"
ERROR - 2022-04-20 06:14:12 --> Could not find the language line "Home"
ERROR - 2022-04-20 07:14:41 --> Could not find the language line "Home"
ERROR - 2022-04-20 07:14:48 --> Could not find the language line "Home"
ERROR - 2022-04-20 07:15:30 --> Severity: error --> Exception: Too few arguments to function Transaction::create_new_sale_invoice_for_order(), 0 passed in C:\wamp64\www\ecomerce_ahmad\application\controllers\Checkout.php on line 82 and exactly 1 expected C:\wamp64\www\ecomerce_ahmad\application\models\Transaction.php 36
ERROR - 2022-04-20 07:18:46 --> Severity: error --> Exception: Too few arguments to function Transaction::create_new_sale_invoice_for_order(), 0 passed in C:\wamp64\www\ecomerce_ahmad\application\controllers\Checkout.php on line 88 and exactly 1 expected C:\wamp64\www\ecomerce_ahmad\application\models\Transaction.php 36
ERROR - 2022-04-20 07:19:12 --> Severity: Notice --> Undefined property: Checkout::$User C:\wamp64\www\ecomerce_ahmad\system\core\Model.php 73
ERROR - 2022-04-20 07:19:12 --> Severity: error --> Exception: Call to a member function fetch_ecommerce_online_user_from_users_table() on null C:\wamp64\www\ecomerce_ahmad\application\models\Transaction.php 62
ERROR - 2022-04-20 07:20:15 --> Severity: Notice --> Array to string conversion C:\wamp64\www\ecomerce_ahmad\system\database\DB_driver.php 1471
ERROR - 2022-04-20 07:20:15 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `transactions` (`fiscal_year_id`, `trans_type`, `auto_no`, `trans_date`, `value_date`, `account_id`, `account2_id`, `currency_id`, `currency_rate`, `discount`, `user_id`, `driver_id`, `employee_id`, `status`, `delivered`, `pickup`, `description`, `relation_id`, `delivery_charge`, `status2`, `source`, `delivery_note`, `payment_method`) VALUES ('1', 'SA', 25885, '2022-04-20', NULL, '1714', '1302', '10', 1, 0, Array, NULL, NULL, 'In Prograss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)
ERROR - 2022-04-20 07:31:46 --> Could not find the language line "Home"
ERROR - 2022-04-20 07:31:50 --> Could not find the language line "Home"
ERROR - 2022-04-20 07:51:02 --> Could not find the language line "Home"
ERROR - 2022-04-20 07:51:29 --> Severity: Notice --> Array to string conversion C:\wamp64\www\ecomerce_ahmad\system\database\DB_driver.php 1471
ERROR - 2022-04-20 07:51:29 --> Query error: Unknown column 'trans_id' in 'field list' - Invalid query: INSERT INTO `transaction_items` (`trans_id`, `item_id`, `warehouse_id`, `size`, `qty`, `price`, `discount`, `mvt_type`, `cost`, `net_cost`) VALUES (876, '51', Array, '37', 1, 13, 0, '-1', '0', 0)
ERROR - 2022-04-20 07:51:48 --> Query error: Unknown column 'trans_id' in 'field list' - Invalid query: INSERT INTO `transaction_items` (`trans_id`, `item_id`, `warehouse_id`, `size`, `qty`, `price`, `discount`, `mvt_type`, `cost`, `net_cost`) VALUES (877, '51', '10', '37', 1, 13, 0, '-1', '0', 0)
ERROR - 2022-04-20 07:52:12 --> Query error: Unknown column 'size' in 'field list' - Invalid query: INSERT INTO `transaction_items` (`transaction_id`, `item_id`, `warehouse_id`, `size`, `qty`, `price`, `discount`, `mvt_type`, `cost`, `net_cost`) VALUES (878, '51', '10', '37', 1, 13, 0, '-1', '0', 0)
ERROR - 2022-04-20 08:02:21 --> Could not find the language line "Home"
ERROR - 2022-04-20 08:04:58 --> Severity: error --> Exception: Call to undefined method Transaction_item::get_feild() C:\wamp64\www\ecomerce_ahmad\application\models\Transaction_item.php 41
ERROR - 2022-04-20 08:08:08 --> Could not find the language line "Home"
ERROR - 2022-04-20 08:08:20 --> Could not find the language line "Home"
ERROR - 2022-04-20 08:08:32 --> Query error: Duplicate entry '2295' for key 'PRIMARY' - Invalid query: INSERT INTO `transaction_items` (`transaction_id`, `item_id`, `warehouse_id`, `qty`, `mvt_type`, `cost`, `price`, `discount`, `net_cost`, `profit`, `checkbox`, `id`) VALUES (882, '51', '10', 1, '-1', '0', 13, 0, 0, NULL, NULL, 2295)
ERROR - 2022-04-20 08:28:10 --> Could not find the language line "Home"
ERROR - 2022-04-20 08:59:55 --> Could not find the language line "Home"
ERROR - 2022-04-20 09:07:05 --> Could not find the language line "Home"
ERROR - 2022-04-20 09:07:10 --> Could not find the language line "Home"
ERROR - 2022-04-20 09:07:48 --> Severity: Notice --> Undefined property: Checkout::$Journal C:\wamp64\www\ecomerce_ahmad\application\controllers\Checkout.php 105
ERROR - 2022-04-20 09:07:48 --> Severity: error --> Exception: Call to a member function save_trans_in_jounral() on null C:\wamp64\www\ecomerce_ahmad\application\controllers\Checkout.php 105
ERROR - 2022-04-20 09:10:08 --> Could not find the language line "Home"
ERROR - 2022-04-20 09:21:32 --> Could not find the language line "Home"
ERROR - 2022-04-20 09:22:21 --> Severity: error --> Exception: Unable to locate the model you have specified: Journal_account C:\wamp64\www\ecomerce_ahmad\system\core\Loader.php 348
ERROR - 2022-04-20 09:32:41 --> Could not find the language line "Home"
ERROR - 2022-04-20 09:34:06 --> Severity: Notice --> Undefined index: transItems C:\wamp64\www\ecomerce_ahmad\application\controllers\Checkout.php 111
ERROR - 2022-04-20 09:34:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\ecomerce_ahmad\application\models\Transaction.php 98
ERROR - 2022-04-20 09:34:06 --> Severity: error --> Exception: Call to undefined method Violet_auth::get_fiscal_year_id() C:\wamp64\www\ecomerce_ahmad\application\models\Journal.php 69
ERROR - 2022-04-20 09:34:29 --> Severity: error --> Exception: Call to undefined method Violet_auth::get_fiscal_year_id() C:\wamp64\www\ecomerce_ahmad\application\models\Transaction.php 108
ERROR - 2022-04-20 09:36:26 --> Severity: error --> Exception: Call to undefined method Violet_auth::get_fiscal_year_id() C:\wamp64\www\ecomerce_ahmad\application\models\Transaction.php 108
ERROR - 2022-04-20 09:36:34 --> Severity: Notice --> Undefined index: item_id C:\wamp64\www\ecomerce_ahmad\application\models\Transaction.php 109
ERROR - 2022-04-20 09:36:34 --> Severity: Notice --> Undefined index: item_id C:\wamp64\www\ecomerce_ahmad\application\models\Transaction.php 120
ERROR - 2022-04-20 09:36:34 --> 404 Page Not Found: Sales/index
ERROR - 2022-04-20 09:36:57 --> 404 Page Not Found: Sales/index
ERROR - 2022-04-20 09:37:02 --> Could not find the language line "Home"
ERROR - 2022-04-20 09:37:54 --> Could not find the language line "Home"
ERROR - 2022-04-20 09:38:01 --> Severity: Notice --> Undefined index: item_id C:\wamp64\www\ecomerce_ahmad\application\models\Transaction.php 109
ERROR - 2022-04-20 09:38:01 --> Severity: Notice --> Undefined index: item_id C:\wamp64\www\ecomerce_ahmad\application\models\Transaction.php 120
ERROR - 2022-04-20 09:39:43 --> Could not find the language line "Home"
ERROR - 2022-04-20 09:41:06 --> Severity: Notice --> Undefined index: item_id C:\wamp64\www\ecomerce_ahmad\application\models\Transaction.php 120
ERROR - 2022-04-20 09:43:49 --> Could not find the language line "Home"
ERROR - 2022-04-20 10:16:30 --> Could not find the language line "Home"
ERROR - 2022-04-20 11:03:25 --> Could not find the language line "Home"
ERROR - 2022-04-20 11:03:26 --> Could not find the language line "Home"
ERROR - 2022-04-20 11:03:47 --> Could not find the language line "Home"
ERROR - 2022-04-20 11:10:43 --> Could not find the language line "Home"
ERROR - 2022-04-20 11:10:44 --> Could not find the language line "Home"
ERROR - 2022-04-20 11:12:37 --> Could not find the language line "Home"
ERROR - 2022-04-20 11:13:43 --> Could not find the language line "Home"
ERROR - 2022-04-20 11:19:05 --> Could not find the language line "Home"
ERROR - 2022-04-20 11:25:04 --> Could not find the language line "Home"
ERROR - 2022-04-20 11:26:36 --> Could not find the language line "Home"
ERROR - 2022-04-20 12:26:52 --> Could not find the language line "Home"
ERROR - 2022-04-20 12:26:55 --> Could not find the language line "Home"
