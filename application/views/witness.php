
<div class="container">
  <div class="">
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

        <!--   <div class="memberbutton01 text-right">
                           <div class="dropdown open">
                             <button aria-expanded="true" class="btn wintess-btn dropdown-toggle" type="button" data-toggle="dropdown">See All witness list
                            </button>
                           
                             <ul class="dropdown-menu list-unstyled">
                             <?php// foreach($witness as $w) {?>
                                            <li><span><?php// echo $w->w_name;  ?><a href='<?php// echo base_url("user/edit_witness/$w->w_id")?>'>Edit</a></span>|
                                            <span class="deleterec" style="cursor:pointer;color:#187aff" id="<?php// echo $w->w_id ?>">Delete</span>
                               </li>                 
                               
                             </ul>
                             <?php// } ?>
                           </div>
                       </div> -->
                               <div class="memberbutton text-right">
                            <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">See All witness list
                             </button>
                           
                              <ul class="dropdown-menu">
                              <?php foreach($witness as $w) {?>
                                <li><span><?php echo $w->w_name; ?><a href='<?php echo base_url("user/edit_witness/$w->w_id");?>'>Edit</a>|
                                <span class="deleterec" style="cursor:pointer;color:#187aff" id="<?php echo $w->w_id ?>">Delete</span></span></li>
                            <?php } ?>

                            <input id="list" type="text" value='<?php echo json_encode($lis); ?>' hidden>
                            <input id="rel" type="text" value='<?php echo json_encode($rel); ?>' hidden>
                                
                              </ul>
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
                    <input class="form-control customise-input" type="text" name="w_mobile" id="w_mobile" minlength="10" value="<?php if(isset($wit->w_mobile)) echo $wit->w_mobile; ?> ">
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
                        <input type="submit" class="btn  saveAndCon" id="submt" value="Save &amp; Add More">
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

<link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.css" />

<script data-require="sweet-alert@*" data-semver="0.4.2" src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
<script>
//$('#w_mobile').on('keypress', function(e) {
//if (e.charCode >= 32 && e.charCode < 127 && !/^-?\d*[.,]?\d*$/.test(this.value + '' + String.fromCharCode(e.charCode))) { return false; } 
//});
  $('.deleterec').on('click',function(e){ 
var id = $(this).attr('id');
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this record again",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, I am sure!',
                cancelButtonText: "No, cancel it!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            
           function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Successfully Deleted!',
                        type: 'success'
                    }, function() {
                        window.location = "<?php echo base_url("user/delete_witness");?>/"+id;
                    });
                    
                } else {
                    swal("Cancelled");
                }
            }); 

    });

  $('#submt').on('click',function(){
  
  $('.error').html('');
  var name = /^[a-zA-Z\s]+$/;
  
  var per = $('#w_permanent').val();
  var pre = $('#w_present').val(); 
  var a = $('#w_mobile').val();
  var pincode = /^\d{6}$/;
  var phone = /^\d{10}$/;

  if($('#w_name').val() == ' '){
    $('#error_name').html("Enter Name");
    $('#w_name').focus(); return false;}
  else if(! (name.test($('#w_name').val()))) {
    $('#error_name').html("Enter only Alphabets");$('#w_name').focus(); return false; }

  if($('#w_mobile').val() == ''){
    $('#error_mobile').html("Enter Mobile Number");
    $('#w_mobile').focus(); return false; 
  }//console.log(parseInt($("#w_mobile").val());
   if(!(phone.test(parseInt($("#w_mobile").val()))))
    {
     // alert(2);
      $('#error_mobile').html("Enter 10 Digits");
      $('#w_mobile').focus();
      //$("#w_mobile").focus().attr("placeholder","Enter 10 digit phone number").val('');
      return false;
    }
  /*if (e.charCode >= 32 && e.charCode < 127 && !/^-?\d*[.,]?\d*$/.test(this.value + '' + String.fromCharCode(e.charCode))) {  $('#error_name').html("Enter Digits"); return false; }
  else if(! (/^\d*$/.test(a))) {
    $('#error_mobile').html("Enter Digits");
    $('#w_mobile').focus(); return false; }
  else if(a.length != 10){
    $('#error_mobile').html("Enter 10 Digits");
    $('#w_mobile').focus(); return false; }*/

  //var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    
    
  if(per == ''){
    $('#error_per_address').html("Enter Address");
    $('#w_permanent').focus(); return false;}

  if(pre == ''){
    $('#error_pre_address').html("Enter Address");
    $('#w_present').focus(); return false;}

  if($('#w_landmark').val() == ' '){
    $('#error_landmark').html("Enter Landmark");
    $('#w_landmark').focus(); return false;}

 

  if($('#w_pincode').val() == ' '){
    $('#error_pincode').html("Enter Pincode");
    $('#w_pincode').focus(); return false;}
  if(!(pincode.test(parseInt($("#w_pincode").val()))))
    {
      $('#error_pincode').html("Enter 6 Digits");
      $('#w_pincode').focus();
      return false;
    }
  

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