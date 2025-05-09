
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>select account for payemnt</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <body>
  <div class="container">
   <br />
   <br />
   <br />
   <h2 align="center">select account for payemnt</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text_pay" id="search_text" placeholder="Search by Customer Details" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result_pay"></div>
   
  </div>
  <div style="clear:both"></div>
  <br />
  <br />
  <br />
  <br />
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>S_for_payment/fetch_pay",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result_pay').html(data);
   }
  })
 }

 $('#search_text_pay').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>