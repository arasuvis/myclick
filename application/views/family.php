<?php //print_r($rel); echo "<pre>"; print_r($families) ;die();?>

<div class="container">

<div class="row">

<article class="col-md-8">

        <div class="content-top">
           <center>
                <h1>Last Will & Testament</h1>
                <p>Finish Your Last Will & Testament in less than 15 min</p>
           </center>
        </div>
    
         <div id="family-detls" >
                <div class="family_details">

                    <div class="row">
                      <div class="col-md-12 content-head">
                      <div class="content-head">
                          <h4>FAMILY DETAILS</h4>
                      </div>
                      
                        <div class="memberbutton text-right">
                            <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">See All Members
                             </button>
                              <ul class="dropdown-menu">
                              <?php foreach($lis as $list) {  ?>
                                <li><span><?php echo $list->name; ?><a href='<?php echo base_url("user/editFamily/{$list->id}");?>'>Edit</a>|<a href="<?php echo base_url("user/delete/{$list->id}");?>">Delete</a></span></li>
                            <?php } ?>
                                
                              </ul>
                            </div>
                        </div>
                          <form id = "form" action="<?php echo base_url('user/addFamily'); ?>" method="POST">
                          <div class="family_form">
                          <br>
                            <form>
                              <div class="row family">
                                <div class="col-md-6" style="padding-left: 0;">
                                  <label>Name</label><br>
                                  <input type="text" name="name" value="<?php if(isset($families->name)) echo $families->name?>">
                                </div>
                                 <div class="col-md-6" style="padding-right: 0;">
                                  <label>Relationship</label><br>
                                    <div class="select-style" >
                                        <select name="relationship">
                                        <option value="none"></option>
                                        <?php  foreach($rel as $relation) {  ?>
                                        <option <?php if(isset($families->relationship)) if($families->relationship == $relation->rel_id) { echo "selected";} ?> value="<?php echo $relation->rel_id; ?>"> <?php echo $relation->name; ?></option>
                                        <?php } ?> 
                                        </select>
                                    </div>
                                </div>
                              </div>
                              <br>

                              <div class="row requirement_age">
                                <div class="col-md-6" style="padding-left: 0;">
                                    <label>Age</label><br>
                                    <input type="text" name="age" value="<?php if(isset($families->age)) echo $families->age;?>">
                                </div>
                                <div class="col-md-6" style="padding-right: 0;">
                                    <label>Date of Birth</label><br>
                                    <input type="text" id="datepicker" name="dob" value="<?php if(isset($families->dob)) echo $families->dob?>">
                                </div>
                              </div>

                              <br>
                              <div class="gender">
                                <div class="radio">

                                <?php foreach($gen as $gender) {  ?>
                                    <input id="<?php echo $gender->id_value ?>" type="radio" name="gender" value="<?php echo $gender->gender_type; ?>" <?php if(isset($families->gender)) if($families->gender == $gender->gender_type) {echo "checked"; } ?> >
                                    <label for="<?php echo $gender->id_value ?>"><?php echo $gender->gender_type ?></label>
                                <?php } ?>
                                  
                                </div>
                              </div>

                                   <br><br>
                               <div class="martial">
                                <div class="radio1">
                                <?php foreach($m_sta as $m_status) { ?>
                                    <input id="<?php echo $m_status->id_value ?>" type="radio" name="marital_status" value="<?php echo $m_status->status_type ?>" <?php if(isset($families->marital_status)) if($families->marital_status == $m_status->status_type) {echo "checked"; } ?>>
                                    <label for="<?php echo $m_status->id_value ?>"><?php echo $m_status->status_type ?></label>
                                    <?php } ?>
                                    
                                </div>
                              </div>

                              <br><br>
                               <div class="status">
                                <div class="radio3">

                                <?php foreach($st as $sta) {  ?>
                                    <input id="<?php echo $sta->id_value ?>" type="radio" name="status" value="<?php echo $sta->status; ?>" <?php if(isset($families->status)) if($families->status == $sta->status) {echo "checked"; } ?> >
                                    <label for="<?php echo $sta->id_value ?>"><?php echo $sta->status ?></label>
                                <?php } ?>
                                  
                                </div>
                              </div>


                              <br><br><br>
                              <div class="continue">
                                 <span style="display: inline;"><input id="submt" type="submit" value="Save & Add More"/> <a>or</a> <a href="<?php echo base_url('user/property'); ?>"><input id="contnu" type="button" value="Continue&#62;&#62;"/></a></span>
                              </div>
                            </form>
                            <center><p>See <a href="">Terms</a> & <a href="">Privacy Policy</a></p></center>
                          </div>
                          </form>
                      </div>
                      <div class="col-md-4">
                      </div>
                    </div>
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
<!-- jquery library file -->
    <script type="text/javascript" src="<?php //echo base_url('js/jquery-1.11.3.min.js');?>"></script>
<script type="text/javascript">
   /* $('#submt').on('click',function(event)
    {
        $(event).preventDefault();
        $('#form').attr("action","<?php// echo base_url('user/addFamily'); ?>");
        $('#form').submit();
    });*/

</script>
