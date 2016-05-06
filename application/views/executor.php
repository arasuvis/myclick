
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
                    <h4>EXECUTOR DETAIL</h4>
                  </div>

                  <?php if(isset($exec)) {$var='user/update_executor'; } else {$var='user/save_executor';} ?>
                  <form action="<?php echo base_url($var);?>" method="post">
                   <!-- <div class="row">
	            		<div class="col-md-6">
	            			<h5 class="meraClass">&nbsp;&nbsp;&nbsp;Is Your Previous Will Registred?</h5>
	            		</div>
	            		 <div class="col-md-6 text-right">
	            			<div class="move">
                                <div class="radio2">
                                    <input id="immovable" type="radio" name="property" value="immovable" checked>
                                    <label for="immovable">Yes</label>
                                    <input id="movable" type="radio" name="property" value="movable" >
                                    <label for="movable">No</label>
                                </div>
                            </div>
	            		</div> 
            		</div>-->




                <div class="section1">
                <div class="col-md-7">

                  <div class="form-group">
                  <label class="control-label customise-label">Executor Name</label>
                  <input class="form-control customise-input" type="text" name ="e_name" id="ex_name" value="<?php if(isset($exec->e_name)) echo $exec->e_name; ?> ">
                  <span id="error_name" class="error"></span>
                </div>
                <input type="text" hidden name ="e_id" value="<?php if(isset($exec->e_id)) echo $exec->e_id; ?> ">
                <div class="form-group">
                  <label class="control-label customise-label">Mobile Number</label>
                  <input class="form-control customise-input" type="text" name ="e_mobile" id="e_mobile" value="<?php if(isset($exec->e_mobile)) echo $exec->e_mobile; ?> ">
                  <span id="error_mobile" class="error"></span>
                </div>
                <div class="form-group">
                  <textarea class="form-control custom-textarea" placeholder="Who the Executor is?" rows="4" name ="e_about" id="e_about"><?php if(isset($exec->e_about)) echo $exec->e_about; ?></textarea>
                  <span id="error_about" class="error"></span>
                </div>
                <div class="form-group">
                  <label class="control-label customise-label">Address</label>
                  <textarea class="form-control custom-textarea" name ="e_address" id="e_address"><?php if(isset($exec->e_address)) echo $exec->e_address; ?></textarea>
                  <span id="error_address" class="error"></span>
                </div>
                <div class="form-group">
                  <label class="control-label customise-label">City</label>
                  <input class="form-control customise-input" type="text" name ="city_name" id="city_name" value="<?php if(isset($exec->city_name)) echo $exec->city_name; ?> ">
                  <span id="error_city" class="error"></span>
                </div>
                <div class="form-group">
                  <label class="control-label customise-label">State</label>
                  <input class="form-control customise-input" type="text" name ="state_name" id="state_name" value="<?php if(isset($exec->state_name)) echo $exec->state_name; ?> ">
                  <span id="error_state" class="error"></span>
                </div><br/><br/>
               <!--  <div class="form-group col-md-12 text-center">
                    <button type="submit" >SAVE </button>
                    <button class="btn btn-warning Continue-btn1">Continue &gt;&gt;</button>
                    <div class="con-text1"><a href="#">See <span>Terms</span></a>&nbsp;&amp;&nbsp;<a href="#"><span>Privacy </span></a></div>
                    </div> -->

    
                </div>
                <div class="col-md-5">
                  <div class="prop_details">
                  <center><h5>Executor Details</h5></center>
                    <ul class="details  list-unstyled">
                    <li>
                    <div class="row" id="a_details">
                    <?php foreach($executor as $ex) { ?>
                    <div class="col-md-8 col-xs-8">
                    <p id="d_name"><?php echo $ex->e_name; ?></p>
                    <span id="edit_edit"><a href='<?php echo base_url("user/edit_executor/$ex->e_id"); ?>'>Edit</a> | <a href='<?php echo base_url("user/delete_executor/$ex->e_id"); ?>'>Delete</a></span>
                    </div>
                    <div class="col-md-4 col-xs-4">
                    <p>Mobile</p>
                    <span id="d_per"><?php echo $ex->e_mobile; ?></span>
                    </div>
                    </div>
                    <?php } ?>
                    </li>
                    </ul>
                </div>
                </div>
            		</div>
               

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
  <div class="form-group col-md-12">
                <ul class="list-inline text-center marbtm0">
                  <li>
                    <input type="submit" id="submt" class="btn  saveAndCon" value="Save &amp; Add More">
                    
                  </li>
                  <li class="hidden-xs hidden-sm">Or</li>
                  <li>
                    <button type="button" id="contnu" class="btn btn-warning Continue-btn1"><a href="<?php echo base_url('user/doctor'); ?>">Continue &gt;&gt;</a></button>
                   
                  </li>
                </ul>
                <div class="con-text3"><a href="#">See <span>Terms</span></a>&nbsp;&amp;&nbsp;<a href="#"><span>Privacy </span></a></div>
                           </div>
 </form>
</div>

<script>
  $('#submt').on('click',function(){

  $('.error').html('');
  var name = /^[a-zA-Z\s]+$/;
  var mob = parseInt($('#e_mobile').val());
  var address = $('#e_address').val();
  var about = $('#e_about').val(); 

  if($('#ex_name').val() == ' '){
    $('#error_name').html("Enter Name");
    $('#ex_name').focus(); return false;}
  else if(! (name.test($('#ex_name').val()))) {
    $('#error_name').html("Enter only Alphabets");$('#ex_name').focus(); return false; }

  if($('#e_mobile').val() == ' '){
    $('#error_mobile').html("Enter Mobile Number");
    $('#e_mobile').focus(); return false;}

   if(! (/^\d*$/.test($('#e_mobile').val()))) {
    $('#error_mobile').html("Enter only Numbers");$('#e_mobile').focus(); return false; }


   if(mob.length != 10)
    {$('#error_mobile').html("Enter 10 Digits");$('#e_mobile').focus(); return false;}

  if( about == ''){
    $('#error_about').html("Enter Details");
    $('#e_about').focus(); return false;}
 
  if(address == ''){
    $('#error_address').html("Enter Address");
    $('#e_address').focus(); return false;}
  
  if($('#city_name').val() == ' '){
    $('#error_city').html("Enter City");
    $('#city_name').focus(); return false;}
  else if(! (name.test($('#city_name').val()))) {
    $('#error_city').html("Enter only Alphabets");$('#city_name').focus(); return false; }

  if($('#state_name').val() == ' '){
    $('#error_state').html("Enter City");
    $('#state_name').focus(); return false;}
  else if(! (name.test($('#state_name').val()))) {
    $('#error_state').html("Enter only Alphabets");$('#state_name').focus(); return false; }


  });
</script>