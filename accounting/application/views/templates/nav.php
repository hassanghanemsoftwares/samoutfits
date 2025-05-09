<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// var_dump($uriSegments);exit;

$link = "/";
$link0 = "";
$link1 = "";
$link2 = "";
$link3 = "";
$link0 = $uriSegments[0];
if (isset($uriSegments[1])) {
    $link1 = "/" . $uriSegments[1];
}
if (isset($uriSegments[2])) {
    $link2 = "/" . $uriSegments[2];
}
if (isset($uriSegments[3])) {
    $link3 = "/" . $uriSegments[3];
}

$link = $link1 . $link2 . $link3;
$link = substr($link, 1);

?>
<style>
    /* Side Navigation */
    @media(max-width:768px) {
        .desctop_nav {
            display: none;
        }

    }

    @media(min-width:768px) {
        .mobile_nav {
            display: none;
        }

        .side-nav {
            position: fixed;
            top: 0px;
            left: 200px;
            width: 200px;
            margin-left: -200px;
            border: none;
            border-radius: 0;
            overflow-y: auto;
            background-color: #7f00ff;
            bottom: 0;
            overflow-x: hidden;
            padding-bottom: 40px;
        }

        .side-nav .border_menu {
            border-bottom: 2px solid #d1a3ff;
            width: 100%;
        }

        .side-nav li .active {
            background: #d1a3ff !important;
            color: #7f00ff !important;
            font-weight: bold;
        }

        .side-nav li .active:hover {
            background: #7f00ff !important;
            color: #d1a3ff !important;
            font-weight: bold;
        }

        .side-nav li a:hover {
            background: #7f00ff !important;
            color: #d1a3ff !important;
            font-weight: bold;
        }

        .side-nav>li>a {
            width: 200px;
            font-weight: bold;
        }

        .side-nav li a:hover {
            outline: none;
            /* background-color: #1a242f !important; */
        }
    }

    .side-nav>li>ul {
        padding: 0;
        /* border-bottom: 1px rgba(0,0,0,.3) solid; */
    }

    .side-nav>li>ul>li>a {
        display: block;
        padding: 10px 15px 10px 28px;
        text-decoration: none;
        /*color: #999;*/
        color: #fff;
    }

    .side-nav>li>ul>li>a:hover {
        color: #fff;
    }

    .sub_menu>li>a {
        display: block;
        padding: 10px 15px 10px 28px;
        text-decoration: none;
        /*color: #999;*/
        color: #fff;
    }

    .sub_menu>li>a:hover {
        color: #fff;
    }

    .navbar .nav>li>a>.label {
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        position: absolute;
        top: 14px;
        right: 6px;
        font-size: 10px;
        font-weight: normal;
        min-width: 15px;
        min-height: 15px;
        line-height: 1.0em;
        text-align: center;
        padding: 2px;
    }

    .nav>li>a:hover {
        background-color: transparent !important;
    }

    .nav>li>a:focus {
        background-color: transparent !important;
    }

    .navbar .nav>li>a {
        color: white;
    }

    .navbar .nav>li>a:hover>.label {
        top: 10px;
    }

    .navbar-brand {
        padding: 5px 15px;
    }

    .navbar-primary {
        background: #d1a3ff;
    }

    li {
        width: 100%;
    }

    li .profile {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        margin-bottom: 10px;
        padding-bottom: 10px;
        color: white;
        width: 100%;
        margin-top: 50px;
    }

    .profile img {
        width: 120px;
        margin: 0 auto 20px auto;
        border-radius: 50%;
    }

    .collapse {
        border: none;
    }

    ul {
        list-style-type: none;
    }

    #account_nb {
        border-radius: 20px;
        width: 100%;
    }

    .menu_sidebar {
        padding: 10px;
    }

    .menu_sidebar .glyphicon {
        float: right;
        font-size: 10px;
        margin-top: 3px;
    }

    .side-nav::-webkit-scrollbar {
        width: 1px;
    }

    @media(min-width:768px) {
        body {
            margin-top: 50px;
        }
    }
    
    /* mohammad code 2024-10-31 start */
    @media(max-width:767px){
        .hidden_phone {
            display: none !important;
        }
        .navbar-primary {
            background: #7f00ff333 !important;
            width: 100%;
            margin-left: 0px !important;
            margin-top: 60px;
        }
        .navbar-default {
            margin-top: 0px;
            
            position: fixed;
    right: 0;
    left: 0;
    z-index: 1030;
    top:0;
        }
        .search_list {
            width:100% !important;
            margin: 0px !important;
            padding: 0px;
        }
        .fiscal_year {
            display: none !important;
        }
        .navbar-toggle {
            z-index: 10000 !important;
        }
    }
    
    @media(min-width:768px){
        .navbar-primary {
            
            position: fixed;
    right: 0;
    left: 0px;
    z-index: 1030;
    top:0 !important;
        }
       
    }
    /* mohammad code 2024-10-31 end */
    
</style>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-primary desctop_nav" role="navigation" style="margin-left: 200px; display:flex">
        <!-- Brand and toggle get grouped for better mobile display -->

        <!-- Top Menu Items -->
        <!-- <ul class="nav navbar-right top-nav" style="margin-right: 50px;">
            <li>
                <a href="<?php echo site_url('ecommerce/orders') ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="<?php echo $this->lang->line('go_toecommerce') ?>">

                    <button class="btn btn-primary"> <?php echo $this->lang->line('go_toecommerce') ?> <i class="glyphicon glyphicon-circle-arrow-right mt-1" style="font-size: 14px;"></i></button>
                </a>
            </li>
        </ul> -->
        <ul class="nav navbar-left top-nav hidden_phone" style="padding-left: 10px;width:25%">
            <li>
                <div class="col-lg-4 d-flex p-3" style=" display: contents;padding: 10px">
                    <a href="https://samoutfits.com/" class="text-decoration-none" style="    text-decoration: none;">
                        <!-- <div style="padding-top: 10px; padding-left: 10px"></div> -->
                        <!-- <span class="h1 text-uppercase text-primary bg-dark px-2">SAM</span>
                        <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Outfits</span> -->
                        <img src="<?php echo base_url(); ?>assets/img/logo.png" height="67px" width="auto" alt="">
                    </a>
                </div>
            </li>
        </ul>


        <ul class="nav navbar-right top-nav search_list" style="padding: 10px 8% 0px 8%; width:50%">
            <li>
                <div class="form-group fontsearch">
                    <!-- <i class="fa fa-search fa-lg" ></i> -->
                    <?php echo form_input('', '', ' class="form-control account_nb_search"  style="width: 100%"') ?>
                    <?php echo form_input('', '', ' class="form-control hide account_id_search"') ?>


                </div>
            </li>
        </ul>
        <ul class="nav navbar-right top-nav hidden_phone" style=" margin-left: 10%;width:25%">
            <li>
                <a href="<?php echo site_url('users/logout') ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="<?php echo $this->lang->line('Logout') ?>">
                    <button class="btn btn-primary"><?php echo $this->lang->line('Logout') ?> <i class="glyphicon glyphicon-log-out" style="font-size: 14px;"></i> </button>


                </a>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav side-nav">
                <li>
                    <div class="profile">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJAAAACQCAMAAADQmBKKAAAAMFBMVEXk5ueutLfn6erGysyrsbTh4+TY29zU19m+w8XJzc+nrrGyuLu7wMO1u73M0NLP09SO8U9kAAADKElEQVR4nO2a27ajIAxAMXJTsP7/3x601tOZ1kJSE5k1bF983CuEW4JSjUaj0Wg0Go1Go9FoNP53AJQy6Vt/LgfAzr2PCe8HZy52AmN9pxPdwvozWHWZE8AwbS6/aB3dNWECM7zY3BmDu8AI7PReZw3TZMSVhvFQZ2UWNorH4dmCNEjqmA/DtRt5uRiZkNVZjcSEphIfwRgV+iSjXsIIhnz+7EaW3whsZr7/iWEXMsUDtoaIPY2gLx+whZF70AxqwBKR1wc8LkBLXrMKGaROYuIcM7hhA8QcIsAHiHcHsfgApTHjW4uwc/7OyDhmkeCTTkZsaU2YYwuRTQi3je0ELh81U1IowZVEtJzmFELvG3c01w0ESJMsCd24hFBHoZqFuBai+iJUXQ5VN8tqW4eqW6nr28uIuz3jqbq281B9J8baztT13TowpZhdiPV2T5hngbXaAB4dIMfpQ6h+cKb0QnX1ocKS8APNdyd7AHNlNUbUoGmZtlDxoMnUqcuN5LodZcujZq53PgElU03QRy2TP9sv6yV9Ev3n2c929TkEXGU9VwWqP+hK624Wt3kovaaS1tPtuucNYNLA6T1Qy29/4cuGuxPYm49xmqbo+5ut4T0KwGax/1yqYox1bl5xzlpzkdbyYsjOQwxhT54tk0KI/WxlHxOlsLg+hvFg1ie9sZu8UD6tMkEfuTxb6c7PhnnKATgf8jI7Y4gznxIo22t0QUaP0bE4pfUmdqSC1bJ2n6+j5kCrVm1Ow6m7LSiXPf/klMKJSh9fdyGUTjoigSFWg1+VpjOusfD1aD0rnVDdyz42wxl13wUJSh6bIfmmrA/ui6l+xEgv8VEKeAWQL2zk1kbWaCLtJWw+6y2J4HPW6vPWCN/+YMqf3QgbI6B2ooqNcLU+5NtAkhFq0cZVNokgejKsCf1LuY8T8UFUIIn9ebRR4aAxz/gnCnufIhm9UtaYkQtQYYgoXUMqJe1YoSm2UVBap744oRHyW5pcSi8UpLXoiBW0QxiPZe/JCgmt0g/GXBIB+7njL6HcPQ3ddf6S7OsrO2pZclu+7YXJtkVAmJxPo9FoNBr/Gj+8rij+HndLIAAAAABJRU5ErkJggg==" alt="Image" class="img-fluid">
                        <br>
                        <span class="country"><?php echo $this->violet_auth->get_user_name() ?></span>
                    </div>
                </li>
                <li class="border_menu">
                    <a href="<?php echo base_url()."home"; ?>" class="<?php echo ($link == "home") ? 'active' : '' ?>"><?php echo $this->lang->line('Home') ?></a>
                </li>
                <li class="border_menu">
                    <a href="<?php echo ($_SESSION['vauth_user_type'] == "Admin") ?site_url('items/index'):site_url('items/all') ?>" class="<?php echo ($link == "items/index") ? 'active' : '' ?>"><?php echo $this->lang->line('products') ?></a>
                </li>

                <li class="border_menu">

                    <a href="<?php echo site_url('order_purchases/add') ?>" class="<?php echo ($link == "order_purchases/add") ? 'active' : '' ?>"><?php echo $this->lang->line('order_purchases') ?></a>
                </li>
                <li class="border_menu">
                    <a href="javascript:void(0)" class="menu_sidebar " data-toggle="collapse" aria-expanded="true" data-target="#submenu-2"> <?php echo $this->lang->line('Inventory') ?><i class="glyphicon glyphicon-triangle-right"></i></a>
                    <ul id="submenu-2" class="collapse <?php echo ($link == "warehouses/inventory" || $link == "order_purchases/inventory") ? 'in' : '' ?>">
                        <li><a class="<?php echo ($link == "warehouses/inventory") ? 'active' : '' ?>" href="<?php echo site_url('warehouses/inventory') ?>"><?php echo $this->lang->line('Inventory') ?></a></li>
                        <li><a class="<?php echo ($link == "order_purchases/inventory") ? 'active' : '' ?>" href="<?php echo site_url('order_purchases/inventory') ?>"><?php echo $this->lang->line('OP_Inventory') ?></a></li>
                    </ul>
                </li>
                <li class="border_menu">
                    <a href="javascript:void(0)" class="menu_sidebar " data-toggle="collapse" aria-expanded="true" data-target="#submenu-3"> <?php echo $this->lang->line('Sales') ?><i class="glyphicon glyphicon-triangle-right"></i></a>
                    <ul id="submenu-3" class="collapse <?php echo ($link == "sales/archive"  || $link == "sales/index"  || $link == "delivery_notes/index" || $link == "return_sales/index"  || $link == "pre_orders/index") ? 'in' : '' ?>">
                        <li><a class="<?php echo ($link == "sales/index") ? 'active' : '' ?>" href="<?php echo site_url('sales/index') ?>"><?php echo $this->lang->line('active_orders') ?></a></li>
                        <li><a class="<?php echo ($link == "sales/pending") ? 'active' : '' ?>" href="<?php echo site_url('sales/pending') ?>"><?php echo $this->lang->line('pending_orders') ?></a></li>
                        <li><a class="<?php echo ($link == "sales/archive") ? 'active' : '' ?>" href="<?php echo site_url('sales/archive') ?>"><?php echo $this->lang->line('Archived_Orders') ?></a></li>
                        <!-- <li><a class="<?php echo ($link == "delivery_notes/index") ? 'active' : '' ?>" href="<?php echo site_url('delivery_notes/index') ?>"><?php echo $this->lang->line('Delivery_Notes') ?></a></li> -->
                        <li><a class="<?php echo ($link == "pre_orders/index") ? 'active' : '' ?>" href="<?php echo site_url('pre_orders/index') ?>"><?php echo $this->lang->line('Pre_orders') ?></a></li>

                        <li><a class="<?php echo ($link == "return_sales/index") ? 'active' : '' ?>" href="<?php echo site_url('return_sales/index') ?>"><?php echo $this->lang->line('Return_Orders') ?></a></li>
                    </ul>
                </li>
                <li class="border_menu">
                    <a href="javascript:void(0)" class="menu_sidebar " data-toggle="collapse" aria-expanded="true" data-target="#submenu-4"> <?php echo $this->lang->line('Reports') ?><i class="glyphicon glyphicon-triangle-right"></i></a>
                    <ul id="submenu-4" class="collapse <?php echo ($link == "reports/accounts_history" || $link == "order_purchases/op_inventory" || $link == "reports/multi_invoices" || $link == "reports/stock" || $link == "reports/daily_sales" || $link == "reports/daily_pickup" || $link == "reports/wakilni_data" || $link == "warehouses/reports" || $link == "journal_accounts/index") ? 'in' : '' ?>">

                        <li><a class="<?php echo ($link == "journal_accounts/index") ? 'active' : '' ?>" href="<?php echo site_url('journal_accounts/index') ?>"><?php echo $this->lang->line('Journals_Report') ?> </a></li>
                        <li><a class="<?php echo ($link == "warehouses/reports") ? 'active' : '' ?>" href="<?php echo site_url('warehouses/reports') ?>"><?php echo $this->lang->line('Warehouse_Report') ?></a></li>
                        <li><a class="<?php echo ($link == "reports/wakilni_data") ? 'active' : '' ?>" href="<?php echo site_url('reports/wakilni_data') ?>"><?php echo $this->lang->line('Wakilni_Data_Report') ?></a></li>
                        <li><a class="<?php echo ($link == "reports/daily_pickup") ? 'active' : '' ?>" href="<?php echo site_url('reports/daily_pickup') ?>"><?php echo $this->lang->line('Daily_Pickup_Report') ?></a></li>
                        <li><a class="<?php echo ($link == "reports/daily_sales") ? 'active' : '' ?>" href="<?php echo site_url('reports/daily_sales') ?>"><?php echo $this->lang->line('Daily_Sales_Report') ?></a></li>
                        <li><a class="<?php echo ($link == "reports/stock") ? 'active' : '' ?>" href="<?php echo site_url('reports/stock') ?>"><?php echo $this->lang->line('Product_History') ?></a></li>
                        <li><a class="<?php echo ($link == "reports/multi_invoices") ? 'active' : '' ?>" href="<?php echo site_url('reports/multi_invoices') ?>"><?php echo $this->lang->line('Packing_Orders') ?></a></li>
                        <li><a class="<?php echo ($link == "order_purchases/op_inventory") ? 'active' : '' ?>" href="<?php echo site_url('order_purchases/op_inventory') ?>"><?php echo $this->lang->line('OP_Items_Report') ?></a></li>
                        <!-- <li><a class="<?php echo ($link == "reports/accounts_history") ? 'active' : '' ?>" href="<?php echo site_url('reports/accounts_history') ?>"><?php echo $this->lang->line('Accounts_History') ?></a></li> -->

                    </ul>
                </li>
                <li class="border_menu">

                    <a href="<?php echo site_url('ecommerce/orders') ?>"><?php echo $this->lang->line('Ecommerce') ?> <i class="glyphicon glyphicon-circle-arrow-right mt-1" style="font-size: 14px;"></i></a>
                </li>

                <?php
                if ($this->violet_auth->get_user_type() === "Admin") {
                ?>
                    <li class="border_menu">
                        <a href="javascript:void(0)" class="menu_sidebar" data-toggle="collapse" data-target="#submenu-5"></i><?php echo $this->lang->line('Administration') ?><i class="glyphicon glyphicon-triangle-right"></i></a>
                        <ul id="submenu-5" class="collapse <?php echo ($link == "users/choose_fiscal_year" || $link == "users/index" || $link == "tags/index" || $link == "configurations/index" || $link == "warehouses/index" || $link == "currencies/index" || $link == "fiscal_years/index" || $link == "accounts/index" || $link == "payments/index" || $link == "sales/receive_cash" || $link == "receipts/index" || $link == "return_purchases/index" || $link == "order_purchases/index") ? 'in' : '' ?>">
                            <li class="border_menu"><a class="<?php echo ($link == "accounts/index") ? 'active' : '' ?>" href="<?php echo site_url('accounts/index') ?>"><?php echo $this->lang->line('accounts') ?></a></li>

                            <li class="border_menu">
                                <a href="javascript:void(0)" class="menu_sidebar" data-toggle="collapse" data-target="#submenu-1-1"> <?php echo $this->lang->line('Purchases') ?><i class="glyphicon glyphicon-triangle-right"></i></a>
                                <ul id="submenu-1-1" class="collapse sub_menu <?php echo ($link == "return_purchases/index" || $link == "order_purchases/index") ? 'in' : '' ?>">
                                    <li><a class="<?php echo ($link == "order_purchases/index") ? 'active' : '' ?>" href="<?php echo site_url('order_purchases/index') ?>"><?php echo $this->lang->line('Order_Purchases') ?></a></li>
                                    <li><a class="<?php echo ($link == "purchases/index") ? 'active' : '' ?>" href="<?php echo site_url('purchases/index') ?>"><?php echo $this->lang->line('Purchases_History') ?></a></li>
                                    <!-- <li><a class="<?php echo ($link == "return_purchasesindex") ? 'active' : '' ?>" href="<?php echo site_url('return_purchases/index') ?>"><?php echo $this->lang->line('Return_Purchases') ?></a></li> -->
                                </ul>
                            </li>
                            <li class="border_menu"><a class="<?php echo ($link == "payments/index") ? 'active' : '' ?>" href="<?php echo site_url('payments/index') ?>"><?php echo $this->lang->line('Payments') ?></a></li>

                            <li class="border_menu">
                                <a href="javascript:void(0)" class="menu_sidebar" data-toggle="collapse" data-target="#submenu-1-2"> <?php echo $this->lang->line('Receipts') ?><i class="glyphicon glyphicon-triangle-right"></i></a>
                                <ul id="submenu-1-2" class="collapse sub_menu <?php echo ($link == "sales/receive_cash" || $link == "receipts/index") ? 'in' : '' ?>">
                                    <li><a class="<?php echo ($link == "receipts/index") ? 'active' : '' ?>" href="<?php echo site_url('receipts/index') ?>"><?php echo $this->lang->line('Receipts') ?></a></li>
                                    <li><a class="<?php echo ($link == "sales/receive_cash") ? 'active' : '' ?>" href="<?php echo site_url('sales/receive_cash') ?>"><?php echo $this->lang->line('Receive_Cash') ?></a></li>
                                </ul>
                            </li>
                            <li class="border_menu"><a class="<?php echo ($link == "reports/profits_per_date") ? 'active' : '' ?>" href="<?php echo site_url('reports/profits_per_date') ?>"><?php echo $this->lang->line('profits_per_date') ?></a></li>
                            <li class="border_menu">
                                <a href="javascript:void(0)" class="menu_sidebar" data-toggle="collapse" data-target="#submenu-1-3"> <?php echo $this->lang->line('Settings') ?><i class="glyphicon glyphicon-triangle-right"></i></a>
                                <ul id="submenu-1-3" class="collapse sub_menu <?php echo ($link == "users/choose_fiscal_year" || $link == "users/index" || $link == "tags/index" || $link == "configurations/index" || $link == "warehouses/index" || $link == "currencies/index" || $link == "fiscal_years/index") ? 'in' : '' ?>">
                                    <li><a class="<?php echo ($link == "fiscal_years/index") ? 'active' : '' ?>" href="<?php echo site_url('fiscal_years/index') ?>"><?php echo $this->lang->line('Fiscal_Years') ?></a></li>
                                    <li><a class="<?php echo ($link == "currencies/index") ? 'active' : '' ?>" href="<?php echo site_url('currencies/index') ?>"><?php echo $this->lang->line('Currencies') ?></a></li>
                                    <li><a class="<?php echo ($link == "warehouses/index") ? 'active' : '' ?>" href="<?php echo site_url('warehouses/index') ?>"><?php echo $this->lang->line('Warehouses') ?></a></li>
                                    <li><a class="<?php echo ($link == "configurations/index") ? 'active' : '' ?>" href="<?php echo site_url('configurations/index') ?>"><?php echo $this->lang->line('Configuration') ?></a></li>
                                    <li><a class="<?php echo ($link == "tags/index") ? 'active' : '' ?>" href="<?php echo site_url('tags/index') ?>"><?php echo $this->lang->line('Tags') ?></a></li>
                                    <li><a class="<?php echo ($link == "users/index") ? 'active' : '' ?>" href="<?php echo site_url('users/index') ?>"><?php echo $this->lang->line('Users') ?></a></li>
                                    <li><a class="<?php echo ($link == "users/choose_fiscal_year") ? 'active' : '' ?>" href="<?php echo site_url('users/choose_fiscal_year') ?>"><?php echo $this->lang->line('Change_Fiscal_Year') ?></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                <?php
                }
                ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <nav class="navbar navbar-default mobile_nav" id="navbar" style="background-color:#7f00ff;">
        <div class="container-fluid" id="navbardiv">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                if ($this->violet_auth->get_user_type() === "Admin") {
                ?>
                    <a href="<?php echo site_url('') ?>"> <img id="logo" src="<?php echo site_url('assets/images/logo.png') ?>"></a>
                    <?php echo $this->violet_auth->is_logged_in() ? anchor('', $this->violet_auth->get_fiscal_year(), ' class="navbar-brand fiscal_year" style="margin-left:10px;"') : '' ?>
                <?php
                } else {
                ?>
                    <img id="logo" src="<?php echo site_url('assets/images/logo.png') ?>">
                <?php
                }
                ?>
            </div>
            <?php
            if ($this->session->userdata('vauth_fiscal_year_id')) {
                if ($this->violet_auth->get_user_type() === "Admin") {
            ?>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo site_url('accounts/index') ?>"><?php echo $this->lang->line('accounts') ?></a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->lang->line('products') ?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('items/index') ?>"><?php echo $this->lang->line('all_products') ?></a></li>
                                    <li><a href="<?php echo site_url('opening_items/index') ?>"><?php echo $this->lang->line('opening_products') ?></a></li>
                                    <li><a href="<?php echo site_url('transfers/index') ?>"><?php echo $this->lang->line('Transfer_Products') ?></a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('warehouses/inventory') ?>"><?php echo $this->lang->line('Inventory') ?></a></li>
                            <li><a href="<?php echo site_url('order_purchases/inventory') ?>"><?php echo $this->lang->line('OP_Inventory') ?></a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->lang->line('Sales') ?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a href="<?php // echo site_url('quotations/index') 
                                                        ?>">Quotations</a></li> -->
                                    <!-- <li><a href="<?php // echo site_url('orders/index') 
                                                        ?>">Orders</a></li> -->
                                    <li><a href="<?php echo site_url('pre_orders/index') ?>"><?php echo $this->lang->line('Pre_orders') ?></a></li>
                                    <li><a href="<?php echo site_url('sales/index') ?>"><?php echo $this->lang->line('Invoices') ?></a></li>
                                    <li><a href="<?php echo site_url('delivery_notes/index') ?>"><?php echo $this->lang->line('Delivery_Notes') ?></a></li>
                                    <li><a href="<?php echo site_url('return_sales/index') ?>"><?php echo $this->lang->line('Return_Invoices') ?></a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->lang->line('Purchases') ?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('order_purchases/index') ?>"><?php echo $this->lang->line('Order_Purchases') ?></a></li>
                                    <li><a href="<?php echo site_url('purchases/index') ?>"><?php echo $this->lang->line('Purchases') ?></a></li>
                                    <li><a href="<?php echo site_url('return_purchases/index') ?>"><?php echo $this->lang->line('Return_Purchases') ?></a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->lang->line('Receipts') ?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('receipts/index') ?>"><?php echo $this->lang->line('Receipts') ?></a></li>
                                    <li><a href="<?php echo site_url('sales/receive_cash') ?>"><?php echo $this->lang->line('Receive_Cash') ?></a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('payments/index') ?>"><?php echo $this->lang->line('Payments') ?></a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->lang->line('Reports') ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('journal_accounts/index') ?>"><?php echo $this->lang->line('Journals_Report') ?> </a></li>
                                    <li><a href="<?php echo site_url('warehouses/reports') ?>"><?php echo $this->lang->line('Warehouse_Report') ?></a></li>
                                    <li><a href="<?php echo site_url('reports/wakilni_data') ?>"><?php echo $this->lang->line('Wakilni_Data_Report') ?></a></li>
                                    <li><a href="<?php echo site_url('reports/daily_pickup') ?>"><?php echo $this->lang->line('Daily_Pickup_Report') ?></a></li>
                                    <li><a href="<?php echo site_url('reports/daily_sales') ?>"><?php echo $this->lang->line('Daily_Sales_Report') ?></a></li>
                                    <li><a href="<?php echo site_url('reports/stock') ?>"><?php echo $this->lang->line('Stock_Report') ?></a></li>
                                    <li><a href="<?php echo site_url('reports/multi_invoices') ?>"><?php echo $this->lang->line('Packing_Orders_Report') ?></a></li>
                                    <li><a href="<?php echo site_url('order_purchases/op_inventory') ?>"><?php echo $this->lang->line('OP_Items_Report') ?></a></li>
                                    <li><a href="<?php echo site_url('reports/accounts_history') ?>"><?php echo $this->lang->line('Accounts_History') ?></a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left hide">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default"><?php echo $this->lang->line('Submit') ?></button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <span class="navbar-text text-yellow">
                                    <b>
                                        <?php echo $this->violet_auth->get_user_name() ?>
                                    </b>
                                </span>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->lang->line('language') ?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('users/set_language/En') ?>"><?php echo $this->lang->line('en') ?></a></li>
                                    <li><a href="<?php echo site_url('users/set_language/Fr') ?>"><?php echo $this->lang->line('fr') ?></a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $this->lang->line('Settings') ?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('ecommerce/orders') ?>"><?php echo $this->lang->line('Ecommerce') ?></a></li>
                                    <li><a href="<?php echo site_url('fiscal_years/index') ?>"><?php echo $this->lang->line('Fiscal_Years') ?></a></li>
                                    <li><a href="<?php echo site_url('currencies/index') ?>"><?php echo $this->lang->line('Currencies') ?></a></li>
                                    <li><a href="<?php echo site_url('warehouses/index') ?>"><?php echo $this->lang->line('Warehouses') ?></a></li>
                                    <li><a href="<?php echo site_url('configurations/index') ?>"><?php echo $this->lang->line('Configuration') ?></a></li>
                                    <li><a href="<?php echo site_url('tags/index') ?>"><?php echo $this->lang->line('Tags') ?></a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo site_url('users/index') ?>"><?php echo $this->lang->line('Users') ?></a></li>
                                    <li><a href="<?php echo site_url('users/choose_fiscal_year') ?>"><?php echo $this->lang->line('Change_Fiscal_Year') ?></a></li>
                                    <li><a href="<?php echo site_url('users/logout') ?>"><?php echo $this->lang->line('log_out') ?></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                <?php
                } else {
                ?>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo site_url('items/all') ?>"><?php echo $this->lang->line('products') ?></a></li>
                            <li><a href="<?php echo site_url('warehouses/inventory') ?>"><?php echo $this->lang->line('Inventory') ?></a></li>
                            <li><a href="<?php echo site_url('sales/index') ?>"><?php echo $this->lang->line('Invoices') ?></a></li>
                            <li><a href="<?php echo site_url('return_sales/index') ?>"><?php echo $this->lang->line('Return_Invoices') ?></a></li>
                            <li><a href="<?php echo site_url('pre_orders/index') ?>"><?php echo $this->lang->line('Pre_orders') ?></a></li>
                            <li><a href="<?php echo site_url('order_purchases/add') ?>"><?php echo $this->lang->line('Order_Purchases') ?></a></li>
                            <li><a href="<?php echo site_url('order_purchases/inventory') ?>"><?php echo $this->lang->line('OP_Inventory') ?></a></li>
                            <li><a href="<?php echo site_url('reports/accounts_history') ?>"><?php echo $this->lang->line('accounts') ?></a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->lang->line('Reports') ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('journal_accounts/index') ?>"><?php echo $this->lang->line('Journals_Report') ?> </a></li>
                                    <li><a href="<?php echo site_url('reports/wakilni_data') ?>"><?php echo $this->lang->line('Wakilni_Data_Report') ?></a></li>
                                    <li><a href="<?php echo site_url('reports/daily_pickup') ?>"><?php echo $this->lang->line('Daily_Pickup_Report') ?></a></li>
                                    <li><a href="<?php echo site_url('reports/stock') ?>"><?php echo $this->lang->line('Stock_Report') ?></a></li>
                                    <li><a href="<?php echo site_url('warehouses/reports') ?>"><?php echo $this->lang->line('Warehouse_Report') ?></a></li>
                                    <li><a href="<?php echo site_url('reports/daily_sales') ?>"><?php echo $this->lang->line('Daily_Sales_Report') ?></a></li>
                                    <li><a href="<?php echo site_url('reports/multi_invoices') ?>"><?php echo $this->lang->line('Packing_Orders_Report') ?></a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('ecommerce/orders') ?>"><?php echo $this->lang->line('Ecommerce') ?></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <span class="navbar-text text-yellow">
                                    <b>
                                        <?php echo $this->violet_auth->get_user_name() ?>
                                    </b>
                                </span>
                            </li>
                            <li><a href="<?php echo site_url('users/logout') ?>"><?php echo $this->lang->line('log_out') ?></a></li>
                        </ul>
                    </div>
            <?php
                }
            }
            ?>
        </div><!-- /.container-fluid -->
    </nav>

    <div id="page-wrapper">