  <div class="container-fluid signs_page">
<div class="container">
	<div class="row sign_reg">
		<div class="col-md-6 sign_in">
      <div class="signn">
	     <h2><span>Sign In</span></h2>
       <span id="login_error"></span>
				
				<form>
          <div class=" row form-group">
              <label for="name" class="col-md-3">Name:</label>
              <input type="text" class="col-md-6" class="form-control" name = "name" id="name">
             <span class="error" id="name_error"></span>
            </div>
          
            <div class=" row form-group">
              <label for="pass" class="col-md-3">Password:</label>
              <input type="pass" class="col-md-6" class="form-control" id="pass" name="pass">
           <span class="error" id="pass_error"></span>
            </div>
            <div class="signbtn">
            <button type="submit" class="btn btn-default" id="sign">Sign In</button>
            </div>
        </form>
      </div>
		</div>
		<div class="col-md-6 register">
	       <div class="regii">
				<h2>Register</h2>
				
<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>user/reg_details">
<fieldset>

<!-- Form Name -->
<legend>REGISTER PAGE</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="text">First Name</label>  
  <div class="col-md-3">
  <input id="text" name="fname" type="text" placeholder="First Name" class="form-control input-md" required="" value="<?php echo set_value('fname') ?>">
   <?php echo form_error('fname'); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="text">Middle Name</label>  
  <div class="col-md-3">
  <input id="text" name="mname" type="text" placeholder="Middle Name" class="form-control input-md" required="" value="<?php echo set_value('mname') ?>">
  <?php echo form_error('mname'); ?> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="text">Surname</label>  
  <div class="col-md-3">
  <input id="text" name="surname" type="text" placeholder="Surname" class="form-control input-md" required="" value="<?php echo set_value('surname') ?>">
  <?php echo form_error('surname'); ?>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email">Email Id</label>  
  <div class="col-md-3">
  <input id="email" name="email" type="email" placeholder="Email Id" class="form-control input-md" required="" value="<?php echo set_value('email') ?>">
<?php echo form_error('email'); ?> 
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password">Password </label>
  <div class="col-md-3">
    <input id="password" name="password" type="password" placeholder="Password " class="form-control input-md" required="" value="<?php echo set_value('password') ?>">
  <?php echo form_error('password'); ?> 
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password">Confirm Password </label>
  <div class="col-md-3">
    <input id="password" name="confirm_password" type="password" placeholder="Confirm Password " class="form-control input-md" required="" value="<?php echo set_value('confirm_password') ?>">
   <?php echo form_error('confirm_password'); ?> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="number">Age</label>  
  <div class="col-md-3">
  <input id="number" name="age" type="text" placeholder="Age" class="form-control input-md" required="" value="<?php echo set_value('age') ?>">
    <?php echo form_error('age'); ?>  
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-3 control-label" for="radios">Gender</label>
  <div class="col-md-3"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="gender" id="radios-0" value="M" checked="checked">
      Male
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="gender" id="radios-1" value="F">
      Female
    </label> 
    <label class="radio-inline" for="radios-2">
      <input type="radio" name="gender" id="radios-2" value="O">
      Other
    </label>
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-3 control-label" for="textarea">Address</label>
  <div class="col-md-3">                     
    <textarea class="form-control" id="textarea" name="address" placeholder="Enter Address" value="<?php echo set_value('address') ?>"> </textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="number">Mobile Number</label>  
  <div class="col-md-3">
  <input id="number" name="mobile" type="text" placeholder="Mobile Number" class="form-control input-md" required="" value="<?php echo set_value('mobile') ?>">
   <?php echo form_error('mobile'); ?> 
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-3 control-label" for="singlebutton"></label>
  <div class="col-md-3">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
      </div>
		</div>
	</div>
</div>
</div>

  


    <script src="http://maps.googleapis.com/maps/api/js"></script>
     <script>
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
              window.location="<?php echo base_url(); ?>user/service";
            }
          }
        });
        return false;
      });
    });
  </script>

