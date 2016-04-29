<style>.error{color:red;}</style>
<div class="container">

<div class="row">

<article class="col-md-8">

        <div class="content-top">
           <center>
                <h1>Last Will & Testament</h1>
                <p>Finish Your Last Will & Testament in less than 15 min</p>
           </center>
        </div>

          <div id="property-loc" >
                 <div class="alloction">
                  <div class="row">
                    <div class="col-md-12">
                    <div class="content-head">
                       <h4>PROPERTY ALLOCATION</h4>
                       </div>
                       <form action="<?php echo base_url('user/add_property_alloc');?>" method="post">
                        <label>Property Type</label>
                       <div class="propert_detailss move">
                                <div class="radio2">
                                    <input class="mychoice" id="alive" name="status" value="alive" checked="" type="radio">
                                    <label for="alive">Alive</label>
                                    <input class="mychoice" id="dead" name="status" value="dead" type="radio">
                                    <label for="dead">Dead</label>
                                </div>
                            </div>
                       
                          
                          <div class="allocation_form">
                            <div class="row">
                              <div class="col-md-7" >
                                  <label>Select Property</label><br>
                                  <div id="immov">
                                   <div class="allocation_style">
                                  <select name="property_id" id="immove_prop">
                                  <option value="none"></option>
                                  <?php  foreach($immov as $im) {  ?>
                                  <option <?php //if(isset($families->relationship)) if($families->relationship == $relation->rel_id) { echo "selected";} ?> value="<?php echo $im->prop_id; ?>" > <?php echo $im->prop_name; ?></option>
                                  <?php } ?> 
                                  </select>
                                 
                                </div>
                                <span id="error_immove" class="error"></span>
                                </div>
                                 
                                    <br>
                                     <label>Select Family Member</label><br>
                                    <div class="allocation_style">
                                        <select name="fam_id" id="fam">
                                        <option value="none"></option>
                                        <?php  foreach($fam as $fa) {  ?>
                                        <option <?php //if(isset($families->relationship)) if($families->relationship == $relation->rel_id) { echo "selected";} ?> value="<?php echo $fa->id; ?>"> <?php echo $fa->name; ?></option>
                                        <?php } ?>
                                        </select>
                                       
                                    </div>
                                     <div><span id="error_fam" class="error"></span></div>
                                    <br>
                                    <div class="allocation_names">
                                      <div class="row">
                                        <div class="col-md-6">
                                            <label>Relationship</label><br>
                                            <input type="text" id="rel" value="" name="rel">
                                            <input type="text" hidden id="rel_id" value="" name="rel_id">
                                        </div>
                                        <span id="error_rel" class="error"></span>
                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col-md-6">
                                            <label>Gender</label><br>
                                            <input type="text" id="gen" name="gen">
                                        </div>
                                        <span id="error_gen" class="error"></span>
                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col-md-6">
                                            <label>Date of birth</label><br>
                                            <input type="text" id="dob" name="dob">
                                            <span id="error_dob" class="error"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Marital status</label><br>
                                            <input type="text" id="marital" name="marital">
                                            <span id="error_marital" class="error"></span>
                                        </div>

                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <label>Enter property allocation</label><br>
                                          <div class="percent">
                                            <input type="text" id="per" name="percent" >
                                            <span>%</span>
                                          </div>
                                          <span id="error_per" class="error"></span>
                                        </div>
                                        <div class="col-md-6">
                                          
                                        </div>
                                      </div>
                                    <br><br><br>  

               <!--     dead section right content -->
                              <div class="continue">
                                 <span style="display: inline;"><input id="submt" type="submit" value="Save & Add More"/> <a>or</a>  <!-- <a href="<?php //echo base_url('user/property'); ?>"> --><input id="contnu" type="button" value="Continue&#62;&#62;" /> <!-- </a> --> </span>
                              </div>
                            <center><p>See <a href="">Terms</a> & <a href="">Privacy Policy</a></p></center>
                                      <br>
                                      </div>
                              </div>

       

                              </form>

                                <div class="col-md-5">
                                    <div class="prop_details">
                                      <center><h5>Property Allocation Details</h5></center>
                                        <ul class="details">
                                          <li>
                                            <div class="row">
                                            <?php foreach ($det as $details) { ?>
                                                                                     
                                              <div class="col-md-8">
                                                  <p><?php echo $details->name ?></p>
                                                  <span><a href="#">Edit</a> | <a href="#">Delete</a></span>
                                              </div>
                                              <div class="col-md-4">
                                                  <p>Allocated</p>
                                                  <span><?php echo $details->percent ?></span>
                                              </div>
                                              <?php   } ?>
                                            </div>
                                          </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                               
                          </div>

  <!--     dead section starts here -->
         <div class="dead-section" style="display:none">
           <div class="row">
             <div class="col-md-7">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label class="control-label col-sm-3">Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="allocatename">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" >Allocation&nbsp;</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control text-right" id="allocatadd" placeholder="%">
                      </div>
                    </div>
                     <div class="form-group">
                     <center>
                      <ul class="list-inline">
                        <li>
                          <button class="btn btn-primary testsubmit">Submit</button>
                        </li>
                        <li>
                          <button class="btn btn-warning">Add More</button>
                        </li>
                      </ul>
                      </center>
                    </div>
                   
                  </form>
             </div></div></div>
                  
                    <div class="col-md-4">
                    </div>
                  
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
              <h4>Q)&nbsp;Why is my favorite genome not present in OMA? </h4>
              <p><b>Ans:</b>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div id="menu1" class="tab-pane fade">
              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <div class="embed-responsive embed-responsive-16by9">
<iframe class="img-rounded" src="https://www.youtube.com/embed/EyRPmrnNLHU?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen>
</iframe>
</div>
            </div>
            
          </div>
        </div>
    </section>

</article>
</div>

</div>

</section>
</section>

<script>
/*
$('#immove_prop').on('change',function(){
  var mypropid = $(this).val();
  $.each($('#immove_prop').children(),function(k,v){
    if($(this).val() == mypropid){
      $('#value').val($(this).attr('data'));
    } 
  });
});*/

$('.mychoice').on('click',function(){
     if($(this).val()== 'alive'){
      $('.allocation_form').show();
       $('.dead-section').hide();
        }else{
          $('.allocation_form').hide();
       $('.dead-section').show();

           }

  })

$('#fam').on('change',function(){
var id = $('#fam').val();

$.ajax({

            type:"POST",
            url:"<?php echo base_url(); ?>user/get_details",
            data: {id:id},
            dataType:"json",
            success:function(res)
            { 
              $('#rel').attr('value',res.rel_name);
              $('#gen').attr('value',res.gender);
              $('#dob').attr('value',res.dob);
              $('#marital').attr('value',res.marital_status);
              $('#rel_id').attr('value',res.relationship);
            }
        });

 });




$('.myclass').on('click',function(){
  $('#rel').attr('value','');
  $('#gen').attr('value','');
  $('#dob').attr('value','');
  $('#marital').attr('value','');
  $.each($('#fam').children(),function(k,v){
    if(k == 0){
      $(this).prop('selected',true);
    }
  });
});

$('#submt').on('click',function(){ 

                  if($('#immove_prop').val()=='none'){
                  $('#error_immove').html('Please, choose an option');
                  $('#immove_prop').focus(); return false; }
               

                  
                  if($('#fam').val()=='none'){
                  $('#error_fam').html('Please, choose an option');
                  $('#fam').focus(); return false; }

                  
                  if($('#rel').val() == ''){
                  $('#error_rel').html("Enter Relationship"); $('#rel').focus(); return false; }

                  if($('#gen').val() == ''){
                  $('#error_gen').html("Enter Gender"); $('#gen').focus(); return false; }

                  if($('#dob').val() == ''){
                  $('#error_dob').html("Enter DOB"); $('#dob').focus(); return false; }

                  if($('#marital').val() == ''){
                  $('#error_marital').html("Enter Marital Status"); $('#marital').focus(); return false; }

                  if($('#per').val() == ''){
                    $('#error_per').html("Enter Percentage");
                    $('#per').focus(); return false;}
                  else if(! (per.test($('#per').val()))) {
                    $('#error_per').html("Enter only Numbers");$('#per').focus(); return false; }
                                    
                });
</script>
