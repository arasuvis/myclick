<style type="text/css">
 .memberbutton01 .dropdown {
   margin-bottom: 30px;
}
.memberbutton01 .dropdown ul.dropdown-menu {
   padding: 10px;
}
.memberbutton01 .dropdown-menu {
   left: 65%;
   width: 300px;
}
.memberbutton01 .dropdown ul.dropdown-menu li {
   padding: 5px 0;
}
.memberbutton01 .dropdown ul.dropdown-menu span {
   font-size: 12px;
   font-weight: 600;
   margin: 5px 0;
}
.memberbutton01 .dropdown ul.dropdown-menu span a:first-child {
   border-right: 1px solid #187aff;
   padding-left: 70px;
}
.memberbutton01 .dropdown ul.dropdown-menu span a {
   color: #187aff;
   padding: 0 10px;
}

</style>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="content-top">
          <center>
              <h1>Last Will & Testament</h1>
              <p>Finish Your Last Will & Testament in less than 15 min</p>
          </center>
      </div>
        <div class="executor-details">
         <div class="content-head">
            <h4>WITNESS</h4>
          </div>

          <div class="memberbutton01 text-right">
                           <div class="dropdown open">
                             <button aria-expanded="true" class="btn wintess-btn dropdown-toggle" type="button" data-toggle="dropdown">See All witness list
                            </button>
                           
                             <ul class="dropdown-menu list-unstyled">
                             <?php foreach($witness as $w) {?>
                                            <li><span><?php echo $w->w_name;  ?><a href='<?php echo base_url("user/edit_witness/$w->w_id")?>'>Edit</a>|
                               <span class="deleterec" style="cursor:pointer;color:#187aff" id="91"><a href='<?php echo base_url("user/delete_witness/$w->w_id")?>'>Delete</a></span></span></li>                 
                               
                             </ul>
                             <?php } ?>
                           </div>
                       </div>
       <!-- <div class="row">

       <div class="col-md-12 text-right rightmenu">
            <div class="dropdown">
            <button  class="btn wintess-btn dropdown-toggle" type="button" data-toggle="dropdown">See all witness list
            </button>
             <ul class="right-zero dropdown-menu" style=" float: none!important;
    right: -90px!important; left: auto;padding: 10px;">
              <?php //foreach($witness as $w) {?>
                              <li><span><?php //echo $w->w_name;  ?><a href="#">Edit</a>|<a href="#">Edit</a></span></li>                                
                              </ul>
                              <?php// } ?>
           </div>
       </div> -->
       <!-- row ends -->
        </div>
        <?php if(isset($wit)) {$var='user/update_witness'; } else {$var='user/save_witness';} ?>
          <form action="<?php echo base_url($var);?>" method="post">
          <div class="wit-add">
            <div class="row">
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">Witness Name</label>
                    <input class="form-control customise-input" type="text" name="w_name" id="w_name" value="<?php if(isset($wit->w_name)) echo $wit->w_name; ?> ">
                  </div>
                  <span id="error_name" class="error"></span>
              </div>
              <input  type="text" hidden name="w_id" value="<?php if(isset($wit->w_id)) echo $wit->w_id; ?> ">
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">Witness Mobile Number</label>
                    <input class="form-control customise-input" type="text" name="w_mobile" id="w_mobile" value="<?php if(isset($wit->w_mobile)) echo $wit->w_mobile; ?> ">
                  </div>
                  <span id="error_mobile" class="error"></span>
              </div>
            </div>
             <label class="control-label customise-label">Witness Address</label>
            <div class="row">
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">Permanent Address </label>
                    <textarea class="form-control custom-textarea" id="w_permanent" name ="permanent_address"><?php if(isset($wit->permanent_address)) echo $wit->permanent_address; ?></textarea>
                  </div>
                  <span id="error_per_address" class="error"></span>
              </div>
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">Present Address </label>
                    <textarea class="form-control custom-textarea" id="w_present" name ="present_address"><?php if(isset($wit->present_address)) echo $wit->present_address; ?></textarea>
                  </div>
                  <span id="error_pre_address" class="error"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">Landmark</label>
                    <input class="form-control customise-input" type="text" id="w_landmark" name="w_landmark" value="<?php if(isset($wit->w_landmark)) echo $wit->w_landmark; ?> " >
                  </div>
                  <span id="error_landmark" class="error"></span>
              </div>
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">Pincode</label>
                    <input class="form-control customise-input" type="text" id="w_pincode" name="w_pincode" value="<?php if(isset($wit->w_pincode)) echo $wit->w_pincode; ?> ">
                  </div>
                  <span id="error_pincode" class="error"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">Locality</label>
                    <input class="form-control customise-input" type="text" id="w_locality" name="w_locality" value="<?php if(isset($wit->w_locality)) echo $wit->w_locality; ?> ">
                  </div>
                  <span id="error_locality" class="error"></span>
              </div>
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">City</label>
                    <input class="form-control customise-input" type="text" id="w_city" name="w_city" value="<?php if(isset($wit->w_city)) echo $wit->w_city; ?> ">
                  </div>
                  <span id="error_city" class="error"></span>
              </div>
            </div>
           <div class="form-group col-md-12">
                    <ul class="list-inline text-center marbtm0">
                      <li>
                        <button class="btn  saveAndCon" id="submt">Save &amp; Add More
                        </button>
                      </li>
                      <li class="hidden-xs hidden-sm">Or</li>
                      <li>
                        <button class="btn btn-warning Continue-btn1"><a href="#">Continue &gt;&gt;</a></button>
                       
                      </li>
                      
                    </ul>
                    <div class="con-text2"><a href="#">See <span>Terms</span></a>&nbsp;&amp;&nbsp;<a href="#"><span>Privacy </span></a></div>
             </div>
          </div>
          </form>
        </div>
    </div>
  



<div class="rightcontent">
  <article class="col-md-4">
    <section class="statc-note-wrp">
          <div class="note-wrp">
              <p>Note:</p>
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">FAQ</a></li>
              <li><a data-toggle="tab" href="#menu1">Video</a></li>
            </ul>

            <div class="tab-content note-content">
              <div id="home" class="tab-pane fade in active">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div id="menu1" class="tab-pane fade">
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
              
            </div>
          </div>
      </section>

  </article>
    </div>
  </div>
</div>

<script>
  $('#submt').on('click',function(e){
    e.preventDefault();
  $('.error').html('');
  var name = /^[a-zA-Z\s]+$/;
  var mob = /^\d{10}$/;
  var pin = /^[0-9]+$/;
//alert($('#w_name').val());
  if($('#w_name').val() == ' '){
    $('#error_name').html("Enter Name");
    $('#w_name').focus(); return false;}
  else if(! (name.test($('#w_name').val()))) {
    $('#error_name').html("Enter only Alphabets");$('#w_name').focus(); return false; }

  if($('#w_mobile').val() == ' '){
    $('#error_mobile').html("Enter Mobile Number");
    $('#w_mobile').focus(); return false; }
  else if(! (/^\d*$/.test($('#w_mobile').val()))) {
    $('#error_mobile').html("Enter 10 Digits");
    $('#w_mobile').focus(); return false; }
  //if('#w_mobile').val().lenght)
  var a = $('#w_mobile').val();
  if($('#w_permanent').val() == ' '){
    $('#error_per_address').html("Enter Address");
    $('#w_permanent').focus(); return false;}

  if($('#w_present').val() == ' '){
    $('#error_pre_address').html("Enter Address");
    $('#w_present').focus(); return false;}

  if($('#w_landmark').val() == ' '){
    $('#error_landmark').html("Enter Landmark");
    $('#w_landmark').focus(); return false;}

  if($('#w_pincode').val() == ' '){
    $('#error_pincode').html("Enter Pincode");
    $('#w_pincode').focus(); return false;}
  else if(! (pin.test($('#w_pincode').val()))) {
    $('#error_mpincode').html("Enter only Numbers");$('#w_pincode').focus(); return false; }

  if($('#w_locality').val() == ' '){
    $('#error_locality').html("Enter Locality");
    $('#w_locality').focus(); return false;}

  if($('#w_city').val() == ' '){
    $('#error_city').html("Enter city");
    $('#w_city').focus(); return false;}
  else if(! (name.test($('#w_city').val()))) {
    $('#error_city').html("Enter only Alphabets");$('#w_city').focus(); return false; }

  
  });
</script>