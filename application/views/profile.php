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
                                <span class="form-label" id="Fname"><p>ENTER FIRST NAME</p></span>
                            </article>
                            <article class="col-sm-9" style="padding-right: 0;">
                                <input type="text" id="fname" name ="fname" value="<?php echo $per->fname; ?>">
                                 <span id="error_fname" class="error"></span>
                            </article>
                        </div>
                       

                        <div class="row">
                            <article class="col-sm-3" style="padding-left: 0;">
                                <span class="form-label" id="Mname"><p>ENTER MIDDLE NAME</p></span>
                            </article>
                            <article class="col-sm-9" style="padding-right: 0;">
                                <input type="text" id="mname" name ="mname" value="<?php echo $per->mname; ?>">
                                <span id="error_mname" class="error"></span>
                            </article>
                            
                        </div>

                        <div class="row">
                            <article class="col-sm-3" style="padding-left: 0;">
                                <span class="form-label" id="Lname"><p>ENTER LAST NAME</p></span>
                            </article>
                            <article class="col-sm-9" style="padding-right: 0;">
                                <input type="text" id="lname" name ="surname" value="<?php echo $per->surname; ?>">
                                <span id="error_lname" class="error"></span>
                            </article>
                        </div>

                         <div class="row">
                            <article class="col-sm-3" style="padding-left: 0;">
                                <span class="form-label"><p>ENTER DATE OF BIRTH</p></span>
                            </article>
                            <article class="col-sm-9" style="padding-right: 0;">
                                <input type="text"  id="dob" name ="dob" value="<?php echo $per->dob; ?>">
                                <span id="error_dob" class="error"></span>
                            </article>
                        </div>

                        <div class="row">
                            <article class="col-sm-3" style="padding-left: 0;">
                                <span class="form-label" id="gender"><p>YOUR GENDER</p></span>
                            </article>
                            <article class="col-sm-9" style="padding-right: 0;">
                            <?php foreach($gen as $gender) { ?>
                                <div class="button">
                                    <input type="radio" class = "gender" name="gender" value="<?php echo $per->gender; ?>" id="<?php echo $gender->id_value ?>" <?php if(isset($per->gender)) if($per->gender == $gender->gender_type) {echo "checked"; } ?> />

                                     <label for="<?php echo $gender->id_value ?>">
                                     <img class="img" style= " <?php if(isset($per->gender)) if($per->gender == $gender->gender_type) {echo "filter: grayscale(0%)"; } ?>" src ='<?php echo base_url("images/$gender->id_value.png");?>'></label> 
                                    <span><?php echo $gender->gender_type ?></span>
                                </div>
                            <?php } ?>
                             <span id="error_name" class="error"></span>

                            </article>
                        </div>

                        <div class="row">
                            <article class="col-sm-3" style="padding-left: 0;">
                                <span class="form-label" id="adrss"><p>ENTER ADDRESS</p></span>
                            </article>
                            <article class="col-sm-9" style="padding-right: 0;">
                                <textarea id="adrss" name ="address"><?php echo $per->address; ?></textarea>
                            </article>
                        </div>

                        <div class="row">
                            <article class="col-sm-3" style="padding-left: 0;">
                                <span class="form-label" id="phone"><p>ENTER MOBILE NUMBER</p></span>
                            </article>
                            <article class="col-sm-9" style="padding-right: 0;">
                                <input type="text" id="mobile" name ="mobile" value="<?php echo $per->mobile; ?>">
                                <span id="error_mobile" class="error"></span>
                            </article>
                        </div>

                         <div class="row">
                            <article class="col-sm-12" style="padding-left: 0;">
                                <button type="submit" id="persnl-submit">CONTINUE >></button>
                                <center><p>See <a href="">Terms</a> & <a href="">Privacy Policy</a></p></center>
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
           });

        </script>
<script>
$('#persnl-submit').on('click',function(e) {

var name = /^[a-zA-Z\s]+$/;
var age = /^[0-9]+$/;

if($('#fname').val() == '')
{   
    $('#error_fname').html('Enter First Name');
    return false;
}else if(! (name.test($('#fname').val())) )
{
    $('#error_fname').html('Enter Alphabets');
    return false;
}

if($('#mname').val() == '')
{   
    $('#error_mname').html('Enter Middle Name');
    return false;
}else if(! (name.test($('#mname').val())) )
{
    $('#error_mname').html('Enter Alphabets'); return false;
}

if($('#lname').val() == '')
{   
    $('#error_lname').html('Enter Middle Name');
    return false;
}else if(! (name.test($('#lname').val())) )
{
    $('#error_lname').html('Enter Alphabets');
    return false;
}

 if($('#dob').val() == ''){
    $('#error_dob').html("Enter Date of Birth"); $('#dob').focus(); return false; }

if($('#mobile').val() == '')
{   
    $('#error_mobile').html('Enter Mobile Number');
    return false;
}else if(! (age.test($('#mobile').val())) )
{
    $('#error_mobile').html('Enter Digits');
    return false;
}

$('#form').submit();
});

</script>

