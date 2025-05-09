<br><br><br><br>
<div id="page-wrapper">
	<div class="main-page">
		<div class="tables">
			<h3 class="title1"><?php echo $this->lang->line('Administration') ?> <i class="fa fa-envelope-o"></i> </h3>
			<div class="inbox-page">
				<div class="col-md-8 compose-right widget-shadow">
					<div class="panel-default">
						<div class="panel-heading">
						<?php echo $this->lang->line('Send_New_Message') ?>
						</div>
						<div class="panel-body">
							<div class="row">
								<input type="text" name="subject" id="subject" class="form-control1 control3" placeholder="<?php echo $this->lang->line('Subject') ?>"><br><br>
								<span id='msg_subject'></span>
							</div>
							<div class="row">
								<textarea name="message" id="message" class="form-control1 control2" placeholder="<?php echo $this->lang->line('Message') ?>"></textarea>
								<span id='msg_message'></span>
							</div>
							<button type="button" id="send_message" class="btn-style" id="submit_btn"><?php echo $this->lang->line('Submit') ?></button>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- modal -->
<div class="modal" id="adm_modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body" style="padding: 80px; color:black; font-weight:bold;">
				<center>
					<div style="margin-bottom: 20px;">
						<img src="assets/images/sent.png" id="modal_image" style="width: 50px; height:50px;">
					</div>
					<div style="margin-bottom: 20px;">
						<h3 id="modal_text"></h3>
					</div>
					<div>
						<button class="btn" data-dismiss="modal" aria-label="Close" style="background-color: black; color:white;"><i class="fa fa-close"></i> <?php echo $this->lang->line('Close') ?></button>
					</div>
				</center>
			</div>
		</div>
	</div>
</div>