
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
                <div class="form-group col-md-12 text-center">
                     <input type="submit" id="submt" class="btn  saveAndCon" value="Save &amp; Add More">
                    <button class="btn btn-warning Continue-btn1"><a href="<?php echo base_url('user/witness'); ?>">Continue &gt;&gt;</a></button>
                    <div class="con-text1"><a href="#">See <span>Terms</span></a>&nbsp;&amp;&nbsp;<a href="#"><span>Privacy </span></a></div>
                    </div></div>
          <div class="col-md-5">
                <div class="prop_details">
                    <center><h5>Doctor Details</h5></center>
                    <ul class="details  list-unstyled">
                    <li>
                    <div class="row" id="a_details">
                    <?php foreach($doctor as $doc) { ?>
                    <div class="col-md-8 col-xs-8">
                    <p id="d_name"><?php echo $doc->d_name; ?></p>
                    <span id="edit_edit"><a href='<?php echo base_url("user/edit_doctor/$doc->d_id");?>'>Edit</a> | <a href='<?php echo base_url("user/delete_doctor/$doc->d_id");?>'>Delete</a></span>
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

<script>
  $('#submt').on('click',function(e){
    e.preventDefault();
  $('.error').html('');
  var name = /^[a-zA-Z\s]+$/;
  var age = /^[0-9]+$/;

  if($('#d_name').val() == ''){
    $('#error_name').html("Enter Name");
    $('#d_name').focus(); return false;}
  else if(! (name.test($('#d_name').val()))) {
    $('#error_name').html("Enter only Alphabets");$('#d_name').focus(); return false; }

  if($('#d_address').val() == ''){
    $('#error_address').html("Enter Address");
    $('#d_address').focus(); return false;}

  if($('#d_mobile').val() == ''){
    $('#error_mobile').html("Enter Mobile Number");
    $('#d_mobile').focus(); return false;}
  else if(! (age.test($('#d_mobile').val()))) {
    $('#error_mobile').html("Enter only Numbers");$('#d_mobile').focus(); return false; }
  });
</script>