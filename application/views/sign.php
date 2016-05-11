<style> .mygend{
  font-style: normal;
  font-weight: 100} 

  .mysta{
   font-weight: 100; 
  }

  </style>
<div class=" container_fluid sign_page">
	<div class="container">
		<h1 class="text-center">Sign In & Register Form</h1>
		
		<div class="row">
			<div class="col-md-6">
				<div class="sign_in ">
				<h3 class="signmove">Sign In</h3>
				 <span id="login_error"></span>
		 			<div class="sign_details text-center">
					<form>
						<div class=" row form-group">
							<div class="col-md-12">
      							<input type="text" class="form-control" name="name" id="name" placeholder="user name">
    						</div>
							 <span class="error" id="name_error"></span>
						</div>
						<div class=" row form-group">
							<div class="col-md-12">
      							<input type="password" class="form-control" name="pass" id="pass" placeholder="password">
    						</div>
							 <span class="error" id="name_error"></span>
						</div>
						<div class="row form-group signbtn">
							<div class="col-md-12">
								<button type="submit" class="btn btn-default" id="sign">Sign In</button>
							</div>
						</div>
						<!-- <div class="sign_social">
							<span>...Or Sign In With</span>
							<div class="social">
								<ul class="list-inline">
									<li><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
									<li><i class="fa fa-google" aria-hidden="true"></i></li>
									<li></li>
								</ul>
							</div>
						</div> -->
					</form>
				</div> 
				</div>
			</div>
			<div class="col-md-6 ">
				<div class="Register">
				<h3 class="regmove">Register</h3>
				<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>user/reg_details">
<fieldset>



<!-- Text input-->
<div class="form-group">
  
  <div class="col-md-12">
  <input id="text" name="fname" type="text" placeholder="First Name" class="form-control input-md" required="" value="<?php echo set_value('fname') ?>">
   <?php echo form_error('fname'); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  
  <div class="col-md-12">
  <input id="text" name="mname" type="text" placeholder="Middle Name" class="form-control input-md" required="" value="<?php echo set_value('mname') ?>">
  <?php echo form_error('mname'); ?> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">

  <div class="col-md-12">
  <input id="text" name="surname" type="text" placeholder="Surname" class="form-control input-md" required="" value="<?php echo set_value('surname') ?>">
  <?php echo form_error('surname'); ?>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">

  <div class="col-md-12">
  <input id="email" name="email" type="email" placeholder="Email Id" class="form-control input-md" required="" value="<?php echo set_value('email') ?>">
<?php echo form_error('email'); ?> 
  </div>
</div>

<!-- Password input-->
<div class="form-group">

  <div class="col-md-12">
    <input id="password" name="password" type="password" placeholder="Password " class="form-control input-md" required="" value="<?php echo set_value('password') ?>">
  <?php echo form_error('password'); ?> 
  </div>
</div>

<!-- Password input-->
<div class="form-group">

  <div class="col-md-12">
    <input id="password" name="confirm_password" type="password" placeholder="Confirm Password " class="form-control input-md" required="" value="<?php echo set_value('confirm_password') ?>">
   <?php echo form_error('confirm_password'); ?> 
  </div>
</div>

<!-- Text input-->
<div class="form-group"> 
  <div class="col-md-12">
  <div class="input-daterange" id="datepicker">
    <input class="form-control input-md" name="dob" id="dob" type="text" placeholder="DOB" value="<?php echo set_value('dob'); ?>">
    </div>
 
    <?php echo form_error('dob'); ?>  
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
 
  <div class="col-md-12"> 
    <?php foreach($gen as $gender) {  
	$checked = ($gender->gender_type == "Male") ? ' checked="checked"' : '';
	?>
    <input  id="<?php echo $gender->id_value ?>" type="radio"  name="gender" value="<?php echo $gender->gender_type; ?>" <?php echo $checked;?>  class = "gend" >
    <label class="mygend" for="<?php echo $gender->id_value ?>"><?php echo $gender->gender_type ?></label>
                                <?php } ?>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
 
  <div class="col-md-12"> 
  
   <?php foreach($m_sta as $m_status) { 
   $checked = ($m_status->status_type == "Unmarried") ? ' checked="checked"' : '';
   ?>
   <input  id="<?php echo $m_status->id_value ?>" type="radio" name="marital_status" value="<?php echo $m_status->status_type ?>" <?php echo $checked;?>>
    <label class="mysta" for="<?php echo $m_status->id_value ?>"><?php echo $m_status->status_type ?></label>
                                    <?php } ?>
                                    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  
  <div class="col-md-12">                     
    <textarea class="form-control" id="textarea" name="address" placeholder="Address" ></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  
  <div class="col-md-12">
  <input id="number" name="mobile" type="text" placeholder="Mobile Number" class="form-control input-md" required="" value="<?php echo set_value('mobile') ?>">
   <?php echo form_error('mobile'); ?> 
  </div>
</div>

<!-- Button -->
<div class="row form-group signbtn">
							<div class="col-md-12">
								<button id="singlebutton" class="btn btn-default" type="submit">Submit</button>
							</div>
						</div>


</fieldset>
</form>
				</div>
			</div>
		</div>
	</div>

</div>


    <script src="<?php echo base_url('js/map_api.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.min.js');?>"></script>
    <script type="text/javascript">
           $(document).ready(function(){
                $('#dob').datepicker({
                    todayHighlight: true,dateFormat:'yy-mm-dd'
                });
           });

        </script>
     <script>

    $('input').attr('maxlength',30);


    $(function() {
      
      $("#sign").click(function(){

        $(".error").html('');
        
        if($("#name").val() == '')
        {
          $("#name").focus().val('');
          $("#name_error").html("Enter Email Id");
          return false;
        }

        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if(!(emailReg.test($("#name").val())))
        {
          $("#name").focus().val('');
          $("#name_error").html("Invalid Email");
          return false;
        }

        if($("#pass").val() == '')
        {
          $("#pass").focus().val('');
          $("#pass_error").html("Password required");
          return false;
        }

        var email_address = $("#name").val();
        var password = $("#pass").val();

        var data = {email_address:email_address,password:password};
        
        $.ajax({
          
          type:"POST",
          url:"<?php echo base_url(); ?>user/signin_form",
          data:data,
          success:function(result)
          {
            if(result == 2)
            {
              //alert("valid");
              $("#login_error").html("Username or password is invalid");
            }
            else if(result == 1)
            {
              window.location="<?php echo base_url(); ?>user/profile";
            }
          }
        });
        return false;
      });
    });

    

  </script>

