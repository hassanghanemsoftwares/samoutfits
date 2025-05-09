 <!-- Breadcrumb Start -->
 <div class="container-fluid mt-5">
     <div class="row px-xl-5">
         <div class="col-12">
             <nav class="breadcrumb bg-light mb-30">
                 <a class="breadcrumb-item text-dark" href="#">Home</a>
                 <span class="breadcrumb-item">Sign Up</span>
                 <span class="breadcrumb-item active">Personal & Address Details</span>
             </nav>
         </div>
     </div>
 </div>
 <!-- Breadcrumb End -->
 <?php echo form_open('users/save_ecomerce_user_and_account', 'id="loginForm" name="loginForm" onsubmit="return validation();" role="form" autocomplete="off" novalidate') ?>
 <section class="mh-100 h-custom gradient-custom-2">
     <div class="container py-5 h-100">
         <div class="row d-flex justify-content-center align-items-center h-100">
             <div class="col-12">
                 <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                     <div class="card-body p-0">
                         <div class="row g-0">

                             <div class="col-lg-6">
                                 <div class="p-5">
                                     <h3 class="fw-normal mb-5" style="color: #FFDF59;">General Infomation</h3>
                                     <div class="mb-4 pb-2">
                                         <div class="form-outline">
                                             <input type="text" id="fname" name="fname" value="<?php echo (isset($account_data['first_name'])) ? $account_data['first_name'] : "" ?>" class="form-control form-control-md" />
                                             <label class="form-label" for="fname">First name</label>
                                             <span id="msg_first_name"></span>
                                         </div>
                                     </div>
                                     <div class="mb-4 pb-2">
                                         <div class="form-outline">
                                             <input type="text" id="lname" name="lname" value="<?php echo (isset($account_data['last_name'])) ? $account_data['last_name'] : "" ?>" class="form-control form-control-md" />
                                             <label class="form-label" for="lname">Last name</label>
                                             <span id="msg_last_name"></span>
                                         </div>
                                     </div>
                                     <div class="mb-4 pb-2">
                                         <div class="form-outline">
                                             <input type="date" id="birthdate" name="birthdate" class="form-control form-control-md" />
                                             <label class="form-label" for="birthdate">Birthdate</label>
                                             <span id="msg_birthdate"></span>
                                         </div>
                                     </div>
                                     <div class="mb-4 pb-2">
                                         <div class="form-outline">
                                             <input type="text" id="phone" name="phone" value="<?php echo (isset($phone)) ? $phone : "" ?>" class="form-control form-control-md" value="<?php echo $phone; ?>" readonly />
                                             <label class="form-label" for="phone">Phone 1</label>
                                         </div>
                                     </div>
                                     <div class="mb-4 pb-2">
                                         <div class="form-outline">
                                             <input type="text" id="phone2" name="phone2" value="<?php echo (isset($account_data['phone2'])) ? $account_data['phone2'] : "" ?>" class="form-control form-control-md" />
                                             <label class="form-label" for="phone2">Phone 2 (Optional)</label>
                                             <span id="msg_phone2"></span>
                                         </div>
                                     </div>
                                     <div class="mb-4 pb-2">
                                         <div class="form-outline">
                                             <input type="text" id="email" name="email" value="<?php echo (isset($account_data['email'])) ? $account_data['email'] : "" ?>" class="form-control form-control-md" />
                                             <label class="form-label" for="email">Email (Optional)</label>
                                             <span id="msg_email"></span>
                                         </div>
                                     </div>
                                     <input type="text" name="password" value="<?php echo $password; ?>" hidden>
                                 </div>
                             </div>
                             <div class="col-lg-6 bg-indigo text-black div-resize-phone">
                                 <div class="p-5">
                                     <h3 class="fw-normal mb-5">Address Details</h3>
                                     <div class="mb-4 pb-2">
                                         <div class="form-outline form-white">
                                             <?php echo form_dropdown('country', '', (isset($account_data['country']))? $account_data['country'] : "", 'id="country" class="form-control form-control-md selectpicker countrypicker"  data-live-search="true" data-flag="true" data-default="LB"') ?>
                                             <!-- <input type="text" id="country" name="country" class="form-control form-control-md" /> -->
                                             <label class="form-label" for="country">Country</label>
                                             <span id="msg_country"></span>
                                         </div>
                                     </div>
                                     <div class="mb-4 pb-2">
                                         <div class="form-outline form-white">
                                             <input type="text" list="cities" id="city" name="city" value="<?php echo (isset($account_data['city'])) ? $account_data['city'] : "" ?>" class="form-control form-control-md" />
                                             <datalist id="cities">
                                             </datalist>
                                             <label class="form-label" for="city">City</label>
                                             <span id="msg_city"></span>
                                         </div>
                                     </div>
                                     <div class="mb-4 pb-2">
                                         <div class="form-outline form-white">
                                             <input type="text" id="place" name="place"  value="<?php echo (isset($account_data['place'])) ? $account_data['place'] : "" ?>" class="form-control form-control-md" />
                                             <label class="form-label" for="place">Place</label>
                                             <span id="msg_place"></span>
                                         </div>
                                     </div>
                                     <div class="mb-4 pb-2">
                                         <div class="form-outline form-white">
                                             <input type="text" id="street" name="street"  value="<?php echo (isset($account_data['street'])) ? $account_data['street'] : "" ?>" class="form-control form-control-md" />
                                             <label class="form-label" for="street">Street</label>
                                             <span id="msg_street"></span>
                                         </div>
                                     </div>
                                     <div class="mb-4 pb-2">
                                         <div class="form-outline form-white">
                                             <input type="text" id="building" name="building"  value="<?php echo (isset($account_data['building'])) ? $account_data['building'] : "" ?>" class="form-control form-control-md" />
                                             <label class="form-label" for="building">Building</label>
                                             <span id="msg_building"></span>
                                         </div>
                                     </div>
                                     <div class="mb-4 pb-2">
                                         <div class="form-outline form-white">
                                             <input type="text" id="floor" name="floor"  value="<?php echo (isset($account_data['floor'])) ? $account_data['floor'] : "" ?>" class="form-control form-control-md" />
                                             <label class="form-label" for="floor">Floor</label>
                                             <span id="msg_floor"></span>
                                         </div>
                                     </div>
                                     <div class="mb-4 pb-2">
                                         <div class="form-outline form-white">
                                             <input type="text" id="direction" name="direction"   class="form-control form-control-md" />
                                             <label class="form-label" for="direction">Direction</label>
                                             <span id="msg_direction"></span>
                                         </div>
                                     </div>

                                     <button type="submit" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Register</button>

                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <?php echo form_close(); ?>