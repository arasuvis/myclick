
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
                    <h4>DOCTOR DETAIL</h4>
                  </div>
                  <?php if(isset($d)) {$var='user/update_doctor'; } else {$var='user/save_doctor';} ?>
                  <form action="<?php echo base_url($var);?>" method="post">
                    <!-- <div class="row">
	            		<div class="col-md-8">
	            			<h5 class="meraClass">Do you want your doctor to certify your health?</h5>
	            		</div>
	            		<div class="col-md-4 text-right">
	            			<div class="move">
                                <div class="radio2">
                                    <input id="immovable" type="radio" name="property" value="immovable" checked>
                                    <label for="immovable">Yes</label>
                                    <input id="movable" type="radio" name="property" value="movable" >
                                    <label for="movable">No</label>
                                </div>
                            </div>
	            		</div>
            		</div> -->
                <div class="section1">
          <div class="col-md-7">      <div class="form-group">
                  <label class="control-label customise-label">Doctor Name</label>
                  <input class="form-control customise-input" type="text" name ="d_name" id="d_name" value="<?php if(isset($d->d_name)) echo $d->d_name; ?> " >
                  <span id="error_name" class="error"></span>
                </div>
                <input type="text" hidden name ="d_id" value="<?php if(isset($d->d_id)) echo $d->d_id; ?> ">
                <div class="form-group">
                  <label class="control-label customise-label">Address</label>
                  <textarea class="form-control custom-textarea" name ="d_address" id="d_address"><?php if(isset($d->d_address)) echo $d->d_address; ?> </textarea>
                  <span id="error_address" class="error"></span>
                </div>
                <div class="form-group">
                  <label class="control-label customise-label">Mobile Number</label>
                  <input class="form-control customise-input" type="text" name ="d_mobile" id="d_mobile" value="<?php if(isset($d->d_mobile)) echo $d->d_mobile; ?> ">
                  <span id="error_mobile" class="error"></span>
                </div>
                <br><br><br>
               <!--  <div class="form-group col-md-12 text-center">
                     <input type="submit" id="submt" class="btn  saveAndCon" value="Save &amp; Add More">Or
                    <button class="btn btn-warning Continue-btn1"><a href="<?php //echo base_url('user/witness'); ?>"//>Continue &gt;&gt;</a></button>
                   
                    </div> --></div>
          <div class="col-md-5 prop_details">
                <div class="prop_details1">
                    <center><h5>Doctor Details</h5></center>
                    <ul class="details  list-unstyled">
                    <li>
                    <div class="row" id="a_details">
                    <?php foreach($doctor as $doc) { ?>
                    <div class="col-md-8 col-xs-8">
                    <p id="d_name"><?php echo $doc->d_name; ?></p>
                    <span id="edit_edit"><a href='<?php echo base_url("user/edit_doctor/$doc->d_id");?>'>Edit</a> </span>| 
                    <span class="deleterec" style="cursor:pointer;color:#187aff" id="<?php echo $doc->d_id ?>">Delete</span>
                    </div>
                    <div class="col-md-4 col-xs-4">
                    <p>Mobile</p>
                    <span id="d_per"><?php echo $doc->d_mobile; ?></span>
                    </div>
                    </div>
                    <?php } ?>
                    </li>
                    </ul>
                    </div>
          </div>
                    </div>
                     <div class="form-group col-md-12 text-center">
                     <input type="submit" id="submt" class="btn  saveAndCon" value="Save &amp; Add More">&nbsp;Or&nbsp;
                    <button class="btn btn-warning Continue-btn1"><a href="<?php echo base_url('user/witness'); ?>">Continue &gt;&gt;</a></button>
                   
                    </div>
           	</div>
            </form>
           	 	
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
  $('#submt').on('click',function(){
   
  $('.error').html('');
  var name = /^[a-zA-Z\s]+$/;
  var address = $('#d_address').val()
  var phone = /^\d{10}$/;
  var exp = /^\d*$/;

  if($('#d_name').val() == ' '){
    $('#error_name').html("Enter Name");
    $('#d_name').focus(); return false;}
  else if(! (name.test($('#d_name').val()))) {
    $('#error_name').html("Enter only Alphabets");$('#d_name').focus(); return false; }

  if(address == ' '){
    $('#error_address').html("Enter Address");
    $('#d_address').focus(); return false;}

  if($('#d_mobile').val() == ' '){
    $('#error_mobile').html("Enter Mobile Number");
    $('#d_mobile').focus(); return false;}
  if(!(phone.test(parseInt($("#d_mobile").val()))))
    {
      $('#error_mobile').html("Enter 10 Digits");
      $('#d_mobile').focus();
      return false;
    }

  });

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
                        window.location = "<?php echo base_url("user/delete_doctor");?>/"+id;
                    });
                    
                } else {
                    swal("Cancelled");
                }
            }); 

});
</script>