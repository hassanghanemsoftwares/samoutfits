<style>
	/* Side Navigation */
	#wrapper {
		padding-left: 0px !important;
	}
	#msg_logout{
		margin-top: 50px;
	}

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

	}

	.navbar-brand {
		padding: 5px 15px;
	}

	.navbar-primary {
		background: #d1a3ff;
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
</style>
<div id="wrapper">
	<nav class="navbar navbar-primary navbar-fixed-top desctop_nav" role="navigation" style="margin-left: 200px;">

		<div class="collapse navbar-collapse">

			<ul class="nav navbar-nav side-nav">
			</ul>
		</div>

	</nav>

	<div id="page-wrapper">
		<?php if ($this->session->flashdata('message')) { ?>
			<div id="save_msg" class="alert alert-danger" style="text-align:center;margin-top: 50px;" onclick="document.getElementById('save_msg').style.display = 'none'">
				<strong><?php echo $this->session->flashdata('message') ?></strong>
			</div>
		<?php } ?>
		<?php echo form_open('', 'id="loginForm" name="loginForm" class="form-horizontal" role="form"  onsubmit="return validation();" autocomplete="off" novalidate'); ?>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<h1 class="text-center"><?php echo $this->lang->line('login'); ?></h1>
				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control" placeholder="<?php echo $this->lang->line('Enter_Username') ?>">
					<div id="error_username" style="text-align:center" onclick="document.getElementById('error_username').style.display = 'none'"></div>
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control" placeholder="<?php echo $this->lang->line('Enter_Password') ?>">
					<div id="error_password" style="text-align:center" onclick="document.getElementById('error_password').style.display = 'none'"></div>
				</div>
				<center><button type="submit" class="btn btn-primary btn-block bglogin"><?php echo $this->lang->line('Login') ?></button></center>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>