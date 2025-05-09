<!-- Breadcrumb Start -->
<div class="container-fluid mt-4">
	<div class="row px-xl-5">
		<div class="col-12">
			<nav class="breadcrumb bg-light mb-30">
				<a class="breadcrumb-item text-dark" href="#">Home</a>
				<a class="breadcrumb-item text-dark" href="#">Account</a>
				<span class="breadcrumb-item active"><?php echo $this->lang->line('Edit_Account') ?></span>
			</nav>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->
<?php if ($this->session->flashdata('message')) { ?>
	<div class="modal" id="message_modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body" style="padding: 80px; color:black; font-weight:bold;">
					<center>
						<div style="margin-bottom: 20px;">
							<?php if ($this->session->flashdata('message') === 'Updated Successfully') { ?>
								<img src="assets/images/updated.png" id="modal_image" style="width: 60px; height:60px;">
							<?php } else { ?>
								<img src="assets/images/cancel.png" id="modal_image" style="width: 50px; height:50px;">
							<?php } ?>
						</div>
						<div style="margin-bottom: 20px;">
							<h3><?php echo $this->session->flashdata('message') ?></h3>
						</div>
						<div>
							<button class="btn" data-dismiss="modal" aria-label="Close" style="background-color: black; color:white;"><i class="fa fa-close"></i> <?php echo $this->lang->line('Close') ?></button>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
<div class="container-fluid">
	<div class="row px-xl-5">
		<div class="col-lg-8">
			<div class="bg-light p-30 mb-5">
				<div id="page-wrapper">
					<?php echo form_open_multipart('users/update_user_personal_info', 'id="personalInfoForm" name="personalInfoForm" onsubmit="return validation();" class="form-horizontal" role="form" autocomplete="off" novalidate') ?>
					<div class="main-page">
						<div class="tables">
							<div class="inbox-page">
								<div class="col-md-12">
									<div class="elements row">
										<div class="col-md-4 profile widget-shadow">
											<h4 class="title3"><?php echo $this->lang->line('Profile') ?></h4>
											<div class="profile-top">
												<img src="<?php echo ($this->violet_auth->get_user_profile_image()) ? "profile_images/" . $this->violet_auth->get_user_profile_image() : 'assets/images/profile.png'; ?>" height="130" width="auto" alt="">
												<br> <br>
												<div class="form-group">
													<input type="file" name="attachment">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<input type="text" name="old_profile_image" value="<?php echo $user['profile_image'] ?>" hidden>
									<input type="text" class="form-control" placeholder="<?php echo $this->lang->line('First_Name') ?>" name="info[first_name]" id="first_name" value="<?php echo $user['first_name'] ?>">
									<span class="col-md-4" id='msg_first_name'></span>
								</div>
								<div class="col-md-12">
									<input type="text" class="form-control" placeholder="<?php echo $this->lang->line('Last_Name') ?>" name="info[last_name]" id="last_name" value="<?php echo $user['last_name'] ?>">
									<span class="col-md-4" id='msg_last_name'></span>
								</div>
								<div class="col-md-12">
									<input type="text" class="form-control" placeholder="<?php echo $this->lang->line('Mobile2_(Optional)') ?>" name="account[phone2]" id="phone2" value="<?php echo $user['phone2'] ?>">
									<span class="col-md-4" id='msg_phone2'></span>
								</div>
								<div class="col-md-12">
									<input type="text" class="form-control" placeholder="<?php echo $this->lang->line('Email(optional)') ?>" name="account[email]" id="email" value="<?php echo $user['email'] ?>">
									<span class="col-md-4" id='msg_email'></span>
								</div>
								<div class="col-md-12">
									<input type="date" class="form-control" name="info[birthdate]" id="birthdate" value="<?php echo $user['birthdate'] ?>" />
									<span id='msg_birthdate'></span>
								</div>
								<div class="col-md-12">
									<button type="submit" class="btn btn-block btn-primary font-weight-bold my-3 py-3" id="submit_btn" style="margin-left:2.5%"> <?php echo $this->lang->line('Submit') ?></button>
								</div>

								<?php echo form_close(); ?>
								<br>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>