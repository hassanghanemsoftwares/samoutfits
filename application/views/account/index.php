<div class="tables" id="orders">
    <?php if ($this->session->flashdata('message')) { ?>
        <div id="message" class="alert alert-success" style="text-align:center; margin:0;" onclick="document.getElementById('message').style.display = 'none'">
            <strong><?php echo $this->session->flashdata('message') ?></strong>
        </div>
    <?php } ?>
    <br><br>
    <center>
        <h2> <?php echo $this->lang->line("Welcome_to_Sams_Hub") ?></h2><br>
        <div class="widget_1_box widget-shadow" style="width:60%">
            <div class="tile-progress bg-info" style="background-color:white">
                <div class="content">
                    <h4 style="color:black; float:left; margin-top:-4px;"><i class="fa fa-dashboard icon-sm"></i> <?php echo $this->lang->line('Points_tracker') ?> &nbsp; &nbsp; </h4>
                    <span style="color:black;float:right;margin-top:-4px;"> &nbsp; <?php echo $points['total'].' '.$this->lang->line('earned_points') ?></span>
                    <div class="progress progress-striped active">
                        <div class="bar blue" style="width:80%; "></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </center>
  <br>
        <div class="panel-body widget-shadow" style="width:95%; padding:0;height:120px" id="desktop_view">
            <!--notifications of menu start -->
             <div class="header-left" style="width:100%; float:left;">
             <ul class="nofitications-dropdown" id="acc_wish"  >
                <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                    <a href="accounts/wishlist" style="color:black;padding:23px"><i class="fa fa-heart-o fa-3x" style="color:#FFDF59"></i>
                        <p style="padding:15px;font-size:18px;"> <?php echo $this->lang->line('Wishlist') ?> </p>
                    </a>
                </li>
                <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                    <a href="accounts/viewed_items/1" style="color:black;padding:30px"><i class="fa fa-clock-o fa-3x" style="color:#FFDF59"></i>
                        <p style="padding:15px;font-size:18px;"> <?php echo $this->lang->line('Viewed_Items') ?> </p>
                    </a>
                </li>
                <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                    <a href="accounts/coupons" style="color:black;padding:23px"><i class="fa fa-credit-card-alt fa-3x" style="color:#FFDF59"></i>
                        <p style="padding:15px;font-size:18px;"> <?php echo $this->lang->line('Coupons') ?> </p>
                    </a>
                </li>
            </ul> 
            
            </div>
        </div>
        <div class="panel-body widget-shadow" style="width:95%; padding:0;height:120px" id="mobile_view">
            <!--notifications of menu start -->
             <div class="header-left" style="width:100%; float:left;">
             <ul class="nofitications-dropdown" id="acc_wish"  >
                <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                    <a href="accounts/wishlist" style="color:black;padding:23px"><i class="fa fa-heart-o fa-3x" style="color:#FFDF59"></i>
                        <p style="padding:10px;font-size:15px;"> <?php echo $this->lang->line('Wishlist') ?> </p>
                    </a>
                </li>
                <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                    <a href="accounts/viewed_items/1" style="color:black;padding:30px"><i class="fa fa-clock-o fa-3x" style="color:#FFDF59"></i>
                        <p style="padding:10px;font-size:15px;"> <?php echo $this->lang->line('Viewed_Items') ?> </p>
                    </a>
                </li>
                <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                    <a href="accounts/coupons" style="color:black;padding:23px"><i class="fa fa-credit-card-alt fa-3x" style="color:#FFDF59"></i>
                        <p style="padding:10px;font-size:15px;"> <?php echo $this->lang->line('Coupons') ?> </p>
                    </a>
                </li>
            </ul> 
            
            </div>
        </div>
   <br>
    <div class="panel-body widget-shadow" style="height:220px;" id="desktop_view">
        <div class="header-left" style="width:100%; float:left;">
            <br><br>
            <div class="profile_details" style="margin-top:-40px">
                <!--notifications of menu start -->
                <h4 style="color:#404040;">
                 <span  class="col-md-4"> <?php echo $this->lang->line('Account_Details') ?> </span>
                 <span  class="col-md-4" style="margin-left:-50px"> <?php echo $this->lang->line('Orders') ?> </span>
                 <span  class="col-md-4" style="margin-left:50px"> <?php echo $this->lang->line('Connect_With_Us') ?></span>
                </h4>
                <hr>
                <ul class="nofitications-dropdown">
                    <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="accounts/inbox/1" style="color:black;padding:24px"><i class="fa fa-inbox fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:15px;font-size:18px;"> <?php echo $this->lang->line('Inbox') ?> </p>
                        </a>
                    </li>
                    <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="accounts/shipping_address" style="color:black;padding:50px"><i class="fa fa-map-marker fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:15px;font-size:18px;"> <?php echo $this->lang->line('Shipping_Address') ?> </p>
                        </a>
                    </li>
                    <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a data-target="#phone_modal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#myModal" style="color:black;padding:24px"><i class="fa fa-phone fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:15px;font-size:18px;"> <?php echo $this->lang->line('Phone') ?> </p>
                        </a>
                    </li>
                     <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="accounts/pending_orders/1" style="color:black;padding:45px"><i class="fa fa-hourglass-half fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:15px;font-size:18px;"> <?php echo $this->lang->line('Pending_Orders') ?> </p>
                        </a>
                    </li>

                    <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="accounts/orders" style="color:black;padding:35px"><i class="fa fa-spinner fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:15px;font-size:18px;"> <?php echo $this->lang->line('Pending_Reviews') ?> </p>
                        </a>
                    </li>
                    <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="accounts/archived_orders/1" style="color:black;padding:45px"><i class="fa fa-archive fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:15px;font-size:18px;"> <?php echo $this->lang->line('Archived_Orders') ?> </p>
                        </a>
                    </li>
                     <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="https://api.whatsapp.com/send?phone=123456&text=Hello" style="color:black;padding:45px" style="color:black;padding:24px"><i class="fa fa-whatsapp fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:15px;font-size:18px;"> <?php echo $this->lang->line('Customer_Service') ?> </p>
                        </a>
                    </li>

                    <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="accounts/administration" style="color:black;padding:44px"><i class="fa fa-envelope-o fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:15px;font-size:18px;"> <?php echo $this->lang->line('Administration') ?> </p>
                        </a>
                    </li>
                    <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="accounts/questions" style="color:black;padding:24px"><i class="fa fa-question fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:15px;font-size:18px;"> &nbsp; <?php echo $this->lang->line('Q&A') ?> </p>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
     <br>
        <div class="panel-body widget-shadow" style="width:95%; padding:0;height:140px"  id="mobile_view">
          
             <div class="header-left" style="width:100%; float:left;">
               <h4 style="color:#404040;">
                 <?php echo $this->lang->line('Account_Details') ?> 
                 </h4>
             <ul class="nofitications-dropdown" id="acc_wish"  >
               <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="accounts/inbox/1" style="color:black;padding:24px"><i class="fa fa-inbox fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:15px;font-size:14px;"> <?php echo $this->lang->line('Inbox') ?> </p>
                        </a>
                    </li>
                    <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="accounts/shipping_address" style="color:black;padding:40px"><i class="fa fa-map-marker fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:15px;font-size:14px;"> <?php echo $this->lang->line('Shipping_Address') ?> </p>
                        </a>
                    </li>
                    <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a data-target="#phone_modal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#myModal" style="color:black;padding:24px"><i class="fa fa-phone fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:15px;font-size:14px;"> <?php echo $this->lang->line('Phone') ?> </p>
                        </a>
                    </li>
                   
            </ul> 
            
            </div>
        </div>
   <br>
      <div class="panel-body widget-shadow" style="width:95%; padding:0;height:140px"  id="mobile_view">
          
             <div class="header-left" style="width:100%; float:left;">
               <h4 style="color:#404040;">
                 <?php echo $this->lang->line('Orders') ?> 
               </h4>
             <ul class="nofitications-dropdown" id="acc_wish"  >
                  <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="accounts/pending_orders/1" style="color:black;padding:24px"><i class="fa fa-hourglass-half fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:10px;font-size:14px;"> <?php echo $this->lang->line('Pending_Orders') ?> </p>
                        </a>
                    </li>

                    <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="accounts/orders" style="color:black;padding:44px"><i class="fa fa-spinner fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:10px;font-size:14px;"> <?php echo $this->lang->line('Pending_Reviews') ?> </p>
                        </a>
                    </li>
                    <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="accounts/archived_orders/1" style="color:black;padding:24px"><i class="fa fa-archive fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:10px;font-size:14px;"> <?php echo $this->lang->line('Archived_Orders') ?> </p>
                        </a>
                    </li>
            </ul> 
            
            </div>
        </div>
   <br>
   <div class="panel-body widget-shadow" style="width:95%; padding:0;height:140px"  id="mobile_view">
          
             <div class="header-left" style="width:100%; float:left;">
           
                    <h4 style="color:#404040;"> <?php echo $this->lang->line('Connect_With_Us') ?> </h4>
            
             <ul class="nofitications-dropdown" id="acc_wish"  >
                   <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="https://api.whatsapp.com/send?phone=123456&text=Hello" style="color:black;padding:24px" style="color:black;padding:24px"><i class="fa fa-whatsapp fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:10px;font-size:14px;"> <?php echo $this->lang->line('Customer_Service') ?> </p>
                        </a>
                    </li>

                    <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="accounts/administration" style="color:black;padding:44px"><i class="fa fa-envelope-o fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:10px;font-size:14px;"> <?php echo $this->lang->line('Administration') ?> </p>
                        </a>
                    </li>
                    <li class="dropdown head-dpdn" style="border:none;font-size:14px;">
                        <a href="accounts/questions" style="color:black;padding:24px"><i class="fa fa-question fa-3x" style="color:#FFDF59"></i>
                            <p style="padding:10px;font-size:14px;"> &nbsp; <?php echo $this->lang->line('Q&A') ?> </p>
                        </a>
                    </li>
            </ul> 
            
            </div>
        </div>
    
  
</div>
<br>
<div class="panel-body" style="padding-bottom:0; background-color:#1d1c1c;">
    <center> <a href="cart/index">
            <h4 style="color:#fff;"> <i class="fa fa-angle-double-left" aria-hidden="true"></i> &nbsp; <?php echo $this->lang->line('Back_to_Cart') ?> </h4>
        </a>
    </center>

</div>
</div>
<!-- modal -->
<div class="modal" id="phone_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding: 80px; color:black; font-weight:bold;">
                <center>
                    <div style="margin-bottom: 20px;">
                        <i class="fa fa-phone-square fa-3x"></i>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <h3><?php echo $this->lang->line('Please_contact_admin') ?>.</h3>
                    </div>
                    <div>
                        <button class="btn" data-dismiss="modal" aria-label="Close" style="background-color: black; color:white;"><i class="fa fa-close"></i>  <?php echo $this->lang->line('Close') ?></button>
                        <button class="btn" id="admin"><i class="fa fa-user"></i>  <?php echo $this->lang->line('Admin') ?></button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>