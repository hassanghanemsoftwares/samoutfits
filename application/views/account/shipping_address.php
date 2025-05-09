<?php if ($this->session->flashdata('msg')) { ?>
  <div id="message" class="alert alert-success" style="text-align:center; margin:0;" onclick="document.getElementById('message').style.display = 'none'">
    <strong><?php echo $this->session->flashdata('msg') ?></strong>
  </div>
<?php } ?>
<?php if ($this->session->flashdata('error_msg')) { ?>
  <div id="error_message" class="alert alert-danger" style="text-align:center; margin:0;" onclick="document.getElementById('error_message').style.display = 'none'">
    <strong><?php echo $this->session->flashdata('error_msg') ?></strong>
  </div>
<?php } ?>
<!-- Breadcrumb Start -->
<div class="container-fluid mt-4">
  <div class="row px-xl-5">
    <div class="col-12">
      <nav class="breadcrumb bg-light mb-30">
        <a class="breadcrumb-item text-dark" href="#">Home</a>
        <span class="breadcrumb-item">Account</span>
        <span class="breadcrumb-item active"><?php echo $this->lang->line('Shipping_Address') ?></span>
      </nav>
    </div>
  </div>
</div>
<!-- Breadcrumb End -->
<div class="container-fluid">
  <div class="row px-xl-5">
    <div class="col-lg-7">
      <div class="bg-light p-30">
        <div class="col-lg-12">
          <?php echo form_open('users/update_user_shipping_address', 'id="addressForm" name="addressForm" onsubmit="return validation();" class="form-horizontal" role="form" autocomplete="off" novalidate') ?>
          <input type="text" name="account_id" id="account_id" value="<?php echo $user['account_id'] ?>" hidden>
          <input type="text" id="country_name" value="<?php echo $user['country'] ?>" hidden>
          <div class="form-group">
            <?php echo form_dropdown('address[country]', '', '', 'id="country" class="selectpicker countrypicker form-control" data-live-search="true" data-flag="true" data-default="' . $user['country'] . '"') ?>
            <span id='msg_country'></span>
          </div>
          <div class="form-group">
            <input type="text" list="cities" class="form-control" placeholder="<?php echo $this->lang->line('City') ?>" name="address[city]" id="city" value="<?php echo $user['city'] ?>">
            <datalist id="cities">
            </datalist>
            <span id='msg_city'></span>
          </div>
          <div class="form-group">

            <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('Place') ?>" name="address[place]" id="place" value="<?php echo $user['place'] ?>">

            <span id='msg_place'></span>
          </div>
          <div class="form-group">

            <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('Street') ?>" name="address[street]" id="street" value="<?php echo $user['street'] ?>">

            <span id='msg_street'></span>
          </div>
          <div class="form-group">

            <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('Building') ?>" name="address[building]" id="building" value="<?php echo $user['building'] ?>">

            <span id='msg_building'></span>
          </div>
          <div class="form-group">

            <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('Floor') ?>" name="address[floor]" id="floor" value="<?php echo $user['floor'] ?>">

            <span id='msg_floor'></span>
          </div>
          <div class="form-group">

            <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('Direction') ?>" name="address[description]" id="direction" value="<?php echo $user['description'] ?>">

            <span id='msg_direction'></span>
          </div>
          <button type="submit" class="btn btn-block btn-primary font-weight-bold my-3 py-3" id="submit_btn"><?php echo $this->lang->line('Submit') ?></button>

          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="bg-light p-30">
        <h6>Note:</h6>
        <p>this address will be shown in each checkout of an order.</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>