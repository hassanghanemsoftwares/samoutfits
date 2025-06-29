<?php $sub_cat_list = $this->violet_auth->get_all_subcategories();
// var_dump($sub_cat_list); exit; 
?>
<!-- <div class="container-fluid">
	<div class="row bg-secondary py-1 px-xl-5"> -->
<div>
	<div class="row bg-secondary">
		<div class="col-lg-6 d-none d-lg-block">
			<div class="d-inline-flex align-items-center h-100">
				<a class="text-body mr-3" href="">About</a>
				<a class="text-body mr-3" href="home/contact_us">Contact</a>
				<a class="text-body mr-3" href="">FAQs</a>
			</div>
		</div>
		<div class="col-lg-6 text-center text-lg-right">
			<!-- <div class="d-inline-flex align-items-center"> -->
			<!-- <div class="btn-group" <?php echo ($this->violet_auth->is_logged_in()) ? 'hidden' : ''; ?>>
					<button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My
						Account</button>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="users/login" class="dropdown-item" type="button">Sign in</a>
						<a href="users/signup" class="dropdown-item" type="button" hidden>Sign up</a>
						<a href="users/register" class="dropdown-item" type="button">Sign up</a>
					</div>
				</div> -->
			<?php
			if ($this->violet_auth->is_logged_in()) {
			?>
				<div class="btn-group" <?php echo ($this->violet_auth->is_logged_in()) ? '' : 'hidden'; ?>>
					<button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My
						Account</button>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="accounts/pending_orders" class="dropdown-item" type="button"><i
								class="fa fa-list-alt"></i>&nbsp; Pending Orders</a>
						<a href="accounts/archived_orders" class="dropdown-item" type="button"><i
								class="fa fa-archive"></i>&nbsp; Archived Orders</a>
						<a href="accounts/wishlist" class="dropdown-item" type="button"><i
								class="fa fa-heart"></i>&nbsp; Wishlist</a>
						<a href="accounts/inbox" class="dropdown-item" type="button"><i class="fa fa-inbox"></i>&nbsp;
							Inbox</a>
						<a href="accounts/coupons" class="dropdown-item" type="button"><i
								class="fa fa-credit-card "></i>&nbsp; Coupons</a>
						<a href="accounts/shipping_address" class="dropdown-item" type="button"><i
								class="fa fa-address-card "></i>&nbsp; Address</a>
						<a href="accounts/edit" class="dropdown-item" type="button"><i
								class="fa fa-user-circle"></i>&nbsp; Profile</a>
						<a href="accounts/change_password" class="dropdown-item" type="button"><i
								class="fa fa-lock"></i>&nbsp; Change Password</a>
						<div class="dropdown-divider"></div>
						<center><a href="users/logout" class="dropdown-item" type="button">Sign Out</a></center>
					</div>
				</div>
			<?php
			}
			?>
			<!-- <div class="btn-group mx-2">
					<button type="button" class="btn btn-sm btn-light dropdown-toggle"
						data-toggle="dropdown">USD</button>
					<div class="dropdown-menu dropdown-menu-right">
						<button class="dropdown-item" type="button">USD</button>
					</div>
				</div>
				<div class="btn-group">
					<button type="button" class="btn btn-sm btn-light dropdown-toggle"
						data-toggle="dropdown">EN</button>
					<div class="dropdown-menu dropdown-menu-right">
						<button class="dropdown-item" type="button">EN</button>
					</div>
				</div> -->
			<!-- </div> -->
			<!-- <div class="d-inline-flex align-items-center d-block d-lg-none">
				<a href="accounts/wishlist" class="btn px-0 ml-2">
					<i class="fas fa-heart text-dark"></i>
					<span class="badge text-dark border border-dark rounded-circle" id="WishlistCountNavPhone"
						style="padding-bottom: 2px;">0</span>
				</a>
				<a href="cart/index" class="btn px-0 ml-2">
					<i class="fas fa-shopping-cart text-dark"></i>
					<span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;"
						id="cartCountNavPhone"><?php echo count($this->cart->contents()); ?></span>
				</a>
			</div> -->
		</div>
	</div>
	<div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
		<div class="col-lg-4">
			<a href="home/index" class="text-decoration-none">
				<!-- <span class="h1 text-uppercase text-primary bg-dark px-2">SAM</span>
				<span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Outfits</span> -->
				<!--<img src="<?php //echo base_url(); 
								?>assets/img/icon.png" height="67px" width="auto" alt="">-->
				<img class="ml-2" src="<?php echo base_url(); ?>assets/img/text.png" height="67px" width="auto" alt="">
				<!-- <span class="h2 text-uppercase text-black px-2">SAM</span> -->
			</a>
		</div>
		<div class="col-lg-4 col-6 text-left">
			<div class="input-group">
				<input type="text" name="search" id="search_inp" class="form-control" placeholder="Search for products">
				<div class="input-group-append">
					<button type="button" class="input-group-text bg-transparent text-primary" id="search_btn">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-6 text-right">
			<p class="m-0">Customer Service</p>
			<h5 class="m-0">+961 70 615 210</h5>
		</div>
	</div>
</div>
<!-- Navbar Start -->
<div class="container-fluid bg-dark navbar_web_container">
	<div class="row px-xl-5">
		<div class="col-lg-3 d-none d-lg-block">
			<a class="btn d-flex align-items-center justify-content-between bg-white w-100" data-toggle="collapse"
				href="#navbar-vertical" id="categories_navbar_id_new"
				style="height: 65px; padding: 0 30px; pointer-events: none;">
				<h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
				<i class="fa fa-angle-down text-dark"></i>
			</a>
			<nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
				id="navbar-vertical" style="width: 100%; z-index: 999;">
				<div class="navbar-nav w-100">
					<?php foreach ($sub_cat_list as $k => $s) {
						if (count($s) == 1 && in_array(NULL, $s)) {
					?>
							<div>
								<a href="products/category/<?php echo ($k == 'Caps') ? 'Hats' : (($k == 'Bags & Wallets') ? 'Wallets' : str_replace(' ', '_', str_replace('&', '-and', $k))) ?>"
									class="nav-item nav-link"><?php echo $k ?></a>
							</div>
						<?php } else { ?>
							<div class="nav-item dropdown dropright">
								<a href="products/category/<?php echo ($k == 'Caps') ? 'Hats' : (($k == 'Bags & Wallets') ? 'Wallets' : str_replace(' ', '_', str_replace('&', '-and', $k))) ?>"
									class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $k ?> <i
										class="fa fa-angle-right float-right mt-1"></i></a>
								<div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
									<a href="products/category/<?php echo ($k == 'Caps') ? 'Hats' : (($k == 'Bags & Wallets') ? 'Wallets' : str_replace(' ', '_', str_replace('&', '-and', $k))) ?>"
										class="dropdown-item">All</a>
									<?php foreach ($s as $c) {
										if ($c != NULL && $c != '0') { ?>
											<a href="products/category/<?php echo ($k == 'Caps') ? 'Hats' : (($k == 'Bags & Wallets') ? 'Wallets' : str_replace(' ', '_', str_replace('&', '-and', $k))) ?>/<?php echo str_replace(' ', '_', str_replace('&', '-and', $c)) ?>"
												class="dropdown-item"><?php echo $c ?></a>
									<?php }
									} ?>
								</div>
							</div>
					<?php }
					} ?>
					<a href="products/stock_clearance" class="nav-item nav-link">Stock Clearance</a>
				</div>
			</nav>
		</div>
		<div class="col-lg-9">
			<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-1 py-lg-0 px-0 navbar_web">
				<div class="d-flex justify-content-between w-100 align-items-center d-lg-none">
					<a href="home/index" class="text-decoration-none">
						<img src="<?php echo base_url(); ?>assets/img/icon_white.png" height="65px" width="auto" alt="">
					</a>
					<div class="d-flex align-items-center">
						<a href="cart/index" class="btn px-0 text-white mr-2">
							<i class="fas fa-shopping-cart" style="font-size: 1.25rem;"></i>

							<span class="badge border rounded-circle" style="padding-bottom: 2px;"
								id="cartCountNavPhone"><?php echo count($this->cart->contents()); ?></span>
						</a>
						<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
							<i class="fas fa-sliders-h text-white"></i>
						</button>
					</div>
				</div>
				<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
					<div class="col-lg-12 col-12 text-left mt-2 d-lg-none">
						<div class="input-group">
							<input type="text" name="search_mobile" id="search_inp_mobile" class="form-control"
								placeholder="Search for products">
							<div class="input-group-append">
								<button type="button" class="input-group-text bg-transparent text-primary"
									id="search_btn_mobile" style="background-color: #7F00FF !important;">
									<i style="color: white;" class="fa fa-search"></i>
								</button>
							</div>
						</div>
					</div>
					<div class="navbar-nav mr-auto py-0">
						<a href="home/index" class="nav-item nav-link active text-white">Home</a>
						<?php foreach ($sub_cat_list as $k => $s) {
							if (count($s) == 1 && in_array(NULL, $s)) {
						?>
								<a href="products/category/<?php echo ($k == 'Caps') ? 'Hats' : (($k == 'Bags & Wallets') ? 'Wallets' : str_replace(' ', '_', str_replace('&', '-and', $k))) ?>"
									class="nav-item nav-link only-mobile"><?php echo $k ?></a>
							<?php } else { ?>
								<div class="nav-item dropdown d-lg-none">
									<a href="products/category/<?php echo ($k == 'Caps') ? 'Hats' : (($k == 'Bags & Wallets') ? 'Wallets' : str_replace(' ', '_', str_replace('&', '-and', $k))) ?>"
										class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $k ?> <i
											class="fa fa-angle-right float-right mt-1"></i></a>
									<div class="dropdown-menu rounded-0 border-0 m-0 pl-2 text-black">
										<a href="products/category/<?php echo ($k == 'Caps') ? 'Hats' : (($k == 'Bags & Wallets') ? 'Wallets' : str_replace(' ', '_', str_replace('&', '-and', $k))) ?>"
											class="nav-item nav-link text-black">All</a>
										<?php foreach ($s as $c) {
											if ($c != NULL && $c != '0') { ?>
												<a href="products/category/<?php echo ($k == 'Caps') ? 'Hats' : (($k == 'Bags & Wallets') ? 'Wallets' : str_replace(' ', '_', str_replace('&', '-and', $k))) ?>/<?php echo str_replace(' ', '_', str_replace('&', '-and', $c)) ?>"
													class="nav-item nav-link text-black"><?php echo $c ?></a>
										<?php }
										} ?>
									</div>
								</div>
						<?php }
						} ?>
						<a href="products/stock_clearance" class="nav-item nav-link d-lg-none">Stock Clearance</a>
					</div>
					<div class="navbar-nav ml-auto py-0 d-none d-lg-block">
						<!-- <a href="accounts/wishlist" class="btn px-0 text-white">
							<i class="fas fa-heart text-white"></i>
							<span class="badge text-secondary border border-secondary rounded-circle"
								style="padding-bottom: 2px;" id="WishlistCountNav">0</span>
						</a> -->
						<a href="cart/index" class="btn px-0 ml-3 text-white">
							<i class="fas fa-shopping-cart text-white"></i>
							<span class="badge text-secondary border border-secondary rounded-circle"
								style="padding-bottom: 2px;"
								id="cartCountNav"><?php echo count($this->cart->contents()); ?></span>
						</a>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>
<?php if ($this->session->flashdata('success')): ?>
	<div id="message_success" class="alert alert-success" style="text-align:center; margin:0;" onclick="document.getElementById('message_success').style.display = 'none'"><?= $this->session->flashdata('success') ?></div>
<?php elseif ($this->session->flashdata('error')): ?>
	<div id="message_danger" class="alert alert-danger" style="text-align:center; margin:0;" onclick="document.getElementById('message_danger').style.display = 'none'"><?= $this->session->flashdata('error') ?></div>
<?php endif; ?>

<!-- Navbar End -->