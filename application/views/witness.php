<style>
    .error{
        color:red;
    }
    </style>
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
                           
                              <ul class="dropdown-menu" id="witness">
                              <?php /*if(!empty($witness)) { */ foreach($witness as $w) {?>
                              <div class="myid_<?php echo $w->w_id; ?>">
                                <li><p><?php echo $w->w_name; ?></p>
                                <span class="edit_edit" style="cursor:pointer;color:#187aff" data ="<?php echo $w->w_id; ?>">Edit </span>|
                                <span class="deleterec" style="cursor:pointer;color:#187aff" id="<?php echo $w->w_id ?>">Delete</span></li></div>
                            <?php } /*} else {*/ ?>
                            <!-- <li><span>No Records Found</span></li> -->
                              <?php // } ?>

                            
                                
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
          <form action="" method="post" id="form_wit">
          <div class="wit-add">
            <div class="row">
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">Witness Name</label>
                    <input class="form-control customise-input" type="text" name="w_name" id="w_name" value="">
                  </div>
                  <span id="error_name" class="error"></span>
              </div>
              <input  type="text" readonly hidden name="w_id" id="w_id" value="">
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">Witness Mobile Number</label>
                    <input class="form-control customise-input" type="text" name="w_mobile" id="w_mobile" minlength="10" value="">
                  </div>
                  <span id="error_mobile" class="error"></span>
              </div>
            </div>
             <label class="control-label customise-label">Witness Address</label>
            <div class="row">
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">Permanent Address </label>
                    <textarea class="form-control custom-textarea" id="w_permanent" name ="permanent_address"></textarea>
                  </div>
                  <span id="error_per_address" class="error"></span>
              </div>
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">Present Address </label>
                    <textarea class="form-control custom-textarea" id="w_present" name ="present_address"></textarea>
                  </div>
                  <span id="error_pre_address" class="error"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">Landmark</label>
                    <input class="form-control customise-input" type="text" id="w_landmark" name="w_landmark" value="" >
                  </div>
                  <span id="error_landmark" class="error"></span>
              </div>
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">Pincode</label>
                    <input class="form-control customise-input" type="text" id="w_pincode" name="w_pincode" value="">
                  </div>
                  <span id="error_pincode" class="error"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">Locality</label>
                    <input class="form-control customise-input" type="text" id="w_locality" name="w_locality" value="">
                  </div>
                  <span id="error_locality" class="error"></span>
              </div>
              <div class="col-md-6 Padleft">
                <div class="form-group">
                    <label class="control-label customise-label">City</label>
                    <input class="form-control customise-input" type="text" id="w_city" name="w_city" value="">
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

<link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="<?php echo base_url('css/sweet-alert.min.css'); ?>" />

<script data-require="sweet-alert@*" data-semver="0.4.2" src="<?php echo base_url('js/sweet-alert.min.js'); ?>"></script>
<script>
//$('#w_mobile').on('keypress', function(e) {
//if (e.charCode >= 32 && e.charCode < 127 && !/^-?\d*[.,]?\d*$/.test(this.value + '' + String.fromCharCode(e.charCode))) { return false; } 
//});

$(document).ready(function(){ 
$(':input').blur(function(){ 
$(this).val($.trim($(this).val()));
});
});


$('#submt').on('click',function(e){
    e.preventDefault();
  
  $('.error').html('');
  var name = /^[a-zA-Z\s]+$/;
  
  var per = $('#w_permanent').val();
  var pre = $('#w_present').val(); 
  var a = $('#w_mobile').val();
  var pincode = /^\d{6}$/;
  var phone = /^\d{10}$/;

  if($.trim($('#w_name').val() ) == ''){
    $('#error_name').html("Enter Name");
    $('#w_name').focus(); return false;}

  if(! (name.test($('#w_name').val()))) {
    $('#error_name').html("Enter only Alphabets");$('#w_name').focus(); return false; }

  if($('#w_mobile').val()  == ''){
    $('#error_mobile').html("Enter Mobile Number");
    $('#w_mobile').focus(); return false; 
  }
   if(!(phone.test(parseInt($("#w_mobile").val()))))
    {
      $('#error_mobile').html("Enter 10 Digits");
      $('#w_mobile').focus();
      return false;
    }
    
  if($.trim(per) == ''){
    $('#error_per_address').html("Enter Address");
    $('#w_permanent').focus(); return false;}

  if($.trim(pre) == ''){
    $('#error_pre_address').html("Enter Address");
    $('#w_present').focus(); return false;}

  if($.trim($('#w_landmark').val()) == ''){
    $('#error_landmark').html("Enter Landmark");
    $('#w_landmark').focus(); return false;}

  if($('#w_pincode').val() == ''){
    $('#error_pincode').html("Enter Pincode");
    $('#w_pincode').focus(); return false;}
  if(!(pincode.test(parseInt($("#w_pincode").val()))))
    {
      $('#error_pincode').html("Enter 6 Digits");
      $('#w_pincode').focus();
      return false;
    }
  

  if($.trim($('#w_locality').val() ) == ''){
    $('#error_locality').html("Enter Locality");
    $('#w_locality').focus(); return false;}

  if($.trim($('#w_city').val() ) == ''){
    $('#error_city').html("Enter city");
    $('#w_city').focus(); return false;}
  if(! (name.test($('#w_city').val()))) {
    $('#error_city').html("Enter only Alphabets");$('#w_city').focus(); return false; }


  if($('#submt').hasClass("saveAndCon")){
    var wit_data = $('#form_wit').serialize();

    $.ajax({ 
      type:"post",
      data:{wit_data},
      url:"<?php echo base_url('user/save_witness'); ?>" ,
      success: function(res){
        if(res == 2)
        {
          alert('something went wrong');
        }
        else{
          var a =  $.parseJSON(res);
          var w_name = a.name.w_name;
          var w_id = a.name.w_id;

          var str = '';

          str += ' <div class="myid_'+w_id+'"><li><p>'+w_name+'</p><span class="edit_edit" style="cursor:pointer;color:#187aff" data ="'+w_id+'">Edit </span>|<span class="deleterec" style="cursor:pointer;color:#187aff" id="'+w_id+'">Delete</span></li></div> ';

          $('#witness').append(str);

          $('#w_name').val('');
          $('#w_mobile').val('');
          $('#w_present').val('');
          $('#w_permanent').val('');
          $('#w_pincode').val('');
          $('#w_landmark').val('');
          $('#w_locality').val('');
          $('#w_city').val('');

          swal({
              title: 'Successfully Added!',
              type: 'success'
          }); 
        }

      }

    });
  }
  else if($('#submt').hasClass("edit_save")){
    var id = $('#w_id').val();
    var details = $('#form_wit').serialize();

     $.ajax({ 
      type:"post",
      data:{id,details},
      url:"<?php echo base_url('user/update_witness'); ?>",
      success: function(res){
        if(res == 2)
        {
          alert('something went wrong');
        }
        else{
          $('#w_name').val('');
          $('#w_id').val('');
          $('#w_mobile').val('');
          $('#w_present').val('');
          $('#w_permanent').val('');
          $('#w_pincode').val('');
          $('#w_landmark').val('');
          $('#w_locality').val('');
          $('#w_city').val('');

          var a = $.parseJSON(res);
          var name = a.wit.w_name;
          var id = a.wit.w_id;
          
          //console.log(id);
          $('#witness').children().each(function(){ 

            var clas = $(this).attr('class');
            var r = clas.split("_");
            var val = r[1];

            //console.log(clas);
            //console.log(val);

            if(r[1] == id){
              $(this).children().children().first().html(name);
            }
            else{
              console.log('false');
            }
            $('#submt').removeClass('edit_save');
            $('#submt').addClass('saveAndCon');
            
            swal({
                  title: 'Successfully Updated!',
                  type: 'success'
              }); 
          });


        }


      } });
  }
});


$('#witness').on('click','.deleterec',function(e){ 
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
                    $.ajax({
                    url: "<?php echo base_url("user/delete_witness");?>",
                    type: "POST",
                    data: { id: id },
                    success: function(res) {
                      if(res == 1){ swal("Oops!", "Something went wrong", "warning") } 
                      else{
                        swal("Done!", "It was succesfully deleted!", "success");

                        $('#w_name').val('');
                        $('#w_id').val('');
                        $('#w_mobile').val('');
                        $('#w_present').val('');
                        $('#w_permanent').val('');
                        $('#w_pincode').val('');
                        $('#w_landmark').val('');
                        $('#w_locality').val('');
                        $('#w_city').val('');
                        
                        var a = $.parseJSON(res);
                        var id = a.id;
                        $('#witness').children().each(function(){ 

                          var clas = $(this).attr('class');
                          var r = clas.split("_");
                          var val = r[1];
                          
                            if(r[1] == id){
                              $(this).remove();
                            }
                        }); 
                      }
                    }
                  });
                    
                } else {
                    swal({
                        title: 'Cancelled!',
                        type: 'error'
                    }); 
                }

                if($('#submt').hasClass("edit_save")){
                  $('#submt').removeClass('edit_save');
                  $('#submt').addClass('saveAndCon');
                }
            }); 
});

$(document).ready(function(){
 $('#witness').on('click','.edit_edit',function(){
    var id = $(this).attr('data');

    $.ajax({ 
      type:"post",
      data:{id},
      url:"<?php echo base_url('user/edit_witness'); ?>",
      success: function(res){
        if(res == 2){
          alert('something went wrong');
        }
        else{
          var a = $.parseJSON(res);
          var name = a.w.w_name;
          var mob = a.w.w_mobile;
          var w_id = a.w.w_id;
          var permanent = a.w.permanent_address;
          var present = a.w.present_address;
          var landmark = a.w.w_landmark;
          var pincode = a.w.w_pincode;
          var locality = a.w.w_locality;
          var city = a.w.w_city;

          $('#w_name').val(name);
          $('#w_id').val(w_id);
          $('#w_permanent').val(permanent);
          $('#w_present').val(present);
          $('#w_landmark').val(landmark);
          $('#w_mobile').val(mob);
          $('#w_pincode').val(pincode);
          $('#w_locality').val(locality);
          $('#w_city').val(city);
          $('#submt').addClass('edit_save');
          $('#submt').removeClass('saveAndCon');
        }
      }
    });
  });
 });  
</script>