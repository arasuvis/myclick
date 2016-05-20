<?php //print_r($personal);  die();?>
<style>
    .error{
        color:red;
    }
</style>
<div class="container">

<div class="row">

<article class="col-md-8">

        <div class="content-top">
           <center>
                <h1>Last Will & Testament</h1>
                <p>Finish Your Last Will & Testament in less than 15 min</p>
           </center>
        </div>
    
        <div id="personl-info" class="tab-pane fade in active">

                <div class="content-head">
                    <h4>PERSONAL INFORMATION</h4>
                </div>

                <form id="form" action="<?php echo base_url('user/profileUpdate') ?>" method="POST">
                <div class="form-group">
                <?php foreach($personal as $per) { ?>
                    <form>
                        <input type="text" id="id" name =" id" value="<?php if(isset($per->user_id)) echo $per->user_id; ?>" hidden>
                        <div class="row">
                            <article class="col-sm-3" style="padding-left: 0;">
                                <span class="form-label" id="Fname"><p>Enter First Name</p></span>
                            </article>
                            <article class="col-sm-9" style="padding-right: 0;">
                                <input type="text" id="fname" name ="fname" value="<?php echo $per->fname; ?>">
                                 <span id="error_fname" class="error"></span>
                            </article>
                        </div>
                       

                        <div class="row">
                            <article class="col-sm-3" style="padding-left: 0;">
                                <span class="form-label" id="Mname"><p>Enter Middle Name</p></span>
                            </article>
                            <article class="col-sm-9" style="padding-right: 0;">
                                <input type="text" id="mname" name ="mname" value="<?php echo $per->mname; ?>">
                                <span id="error_mname" class="error"></span>
                            </article>
                            
                        </div>

                        <div class="row">
                            <article class="col-sm-3" style="padding-left: 0;">
                                <span class="form-label" id="Lname"><p>Enter Last Name</p></span>
                            </article>
                            <article class="col-sm-9" style="padding-right: 0;">
                                <input type="text" id="lname" name ="surname" value="<?php echo $per->surname; ?>">
                                <span id="error_lname" class="error"></span>
                            </article>
                        </div>

                         <div class="row">
                            <article class="col-sm-3" style="padding-left: 0;">
                                <span class="form-label"><p>Enter Date Of Birth</p></span>
                            </article>
                            <article class="col-sm-9" style="padding-right: 0;">
							<div class="input-daterange" id="datepicker">
    <input class="" name="dob" id="dob" type="text" value="<?php if(isset($per->dob)) echo $per->dob;?>">
    </div>
                                <span id="error_dob" class="error"></span>
                            </article>
                        </div>

                        <div class="row">
                            <article class="col-sm-3" style="padding-left: 0;">
                                <span class="form-label" id="gender"><p>Your Gender</p></span>
                            </article>
                            <article class="col-sm-9" style="padding-right: 0;">
                            <?php foreach($gen as $gender) { ?>
                                <div class="button">
                                    <input type="radio" class = "gender1" name="gender" value="<?php echo $gender->gender_type ?>" id="<?php echo $gender->id_value ?>" <?php if(isset($per->gender)) if($per->gender == $gender->gender_type) {echo "checked"; } else {echo "";}?> />

                                     <label for="<?php echo $gender->id_value ?>">
                                     <img class="img" style= "" src ='<?php echo base_url("images/$gender->id_value.png");?>'></label> 
                                    <span><?php echo $gender->gender_type ?></span>
                                </div>
                            <?php } ?>
                             <span id="error_name" class="error"></span>

                            </article>
                        </div>

                        <div class="row">
                            <article class="col-sm-3" style="padding-left: 0;">
                                <span class="form-label" id="adrss"><p>Enter Address</p></span>
                            </article>
                            <article class="col-sm-9" style="padding-right: 0;">
                                <textarea id="address" name ="address"><?php echo $per->address; ?></textarea>
                                <span id="error_address" class="error"></span>
                            </article>
                            
                        </div>

                        <div class="row">
                            <article class="col-sm-3" style="padding-left: 0;">
                                <span class="form-label" id="phone"><p>Enter Mobile Number</p></span>
                            </article>
                            <article class="col-sm-9" style="padding-right: 0;">
                                <input type="text" id="mobile" name ="mobile" value="<?php echo $per->mobile; ?>">
                                <span id="error_mobile" class="error"></span>
                            </article>
                        </div>

                         <div class="row">
                            <article class="col-sm-12" style="padding-left: 0;">
                                <button type="submit" id="persnl-submit">CONTINUE &gt;&gt;</button>
                                
                            </article>
                           
                        </div>
                          <?php } ?>
                    </form>
                </div>
             
            </div>

</article>


  
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

</section>
</section>
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.min.js');?>"></script>
<script type="text/javascript">
           $(document).ready(function(){
                $('#dob').datepicker({
                    todayHighlight: true,dateFormat:'yy-mm-dd'
                });

                $('input').attr('maxlength',30);

                $(':input').blur(function(){ 
                $(this).val($.trim($(this).val()));
                });

           });

$('#persnl-submit').on('click',function(){

var name = /^[a-zA-Z\s]+$/;
var age = /^[0-9]+$/;
var phone = /^\d{10}$/;

$('.error').html('');

if( $('#fname').val() == '')
{   
    $('#error_fname').html('Enter First Name');
    return false;
}else if(!(name.test($('#fname').val())) )
{
    $('#error_fname').html('Enter Alphabets');
    return false;
}

if( $('#lname').val() == '')
{   
    $('#error_lname').html('Enter Last Name');
    return false;
}else if(!(name.test($('#lname').val())) )
{
    $('#error_lname').html('Enter Alphabets');
    return false;
}

 if($('#dob').val() == ''){
    $('#error_dob').html("Enter Date of Birth"); $('#dob').focus(); return false; }


if( $('#mobile').val() == ' '){
    $('#error_mobile').html("Enter Mobile Number");
    $('#mobile').focus(); return false;}
  if(!(phone.test(parseInt($("#mobile").val()))))
    {
      $('#error_mobile').html("Enter 10 Digits");
      $('#mobile').focus();
      return false;
    }

$('#form').submit();
});

</script>