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

          <div id="property-dtl" >
              <div class="propert_details">
                  <div class="row">
                    <div class="col-md-12">
                     <div class="content-head">
                       <h4>PROPERTY DETAILS</h4>
                       </div>
                       
                      <div class="details">
                        <form action="<?php echo base_url('user/addProperty');?>" method="post">
                        <div class="row">
                          <div class="col-md-6">
                            <label>Property Type</label>

                          </div>
                          <div class="col-md-6 text-right">
                            <div class="memberbutton">
                            <div class="dropdown open">
                              <button data-toggle="dropdown" type="button" class="btn btn-primary dropdown-toggle" aria-expanded="true">See All Members
                             </button>
                             
                              <ul class="dropdown-menu">
                                                              <li><span>Aaaaa<a href="http://localhost/one/trunk/user/family/92">Edit</a>|
                                <span id="92" style="cursor:pointer;color:#187aff" class="deleterec">Delete</span></span></li>                           
                           
                                
                              </ul>
                            </div>
                        </div>
                          </div>
                        </div>
                        
                            <div class="move">
                                <div class="radio2">
                                    <input id="immovable" type="radio" name="property" value="immovable" checked>
                                    <label for="immovable">Immovable</label>
                                    <input id="movable" type="radio" name="property" value="movable" >
                                    <label for="movable">Movable</label>
                                </div>
                            </div>

                              <div id="immov">
                                <div class="row property">
                                <div class="col-md-6">
                                  <label>list of properties</label><br>
                                <div class="select-style1">
                                  <select name="immov_prop" id="immov_prop">
                                  <option value="none"></option>
                            <?php  foreach($pro as $property) {  
                            if($property->type == 1){ ?>
                            <option <?php //if(isset($families->relationship)) if($families->relationship == $relation->rel_id) { echo "selected";} ?> value="<?php echo $property->prop_id; ?>"> <?php echo $property->prop_name; ?></option>
                            <?php } } ?> 
                                  </select>
                                </div>
                                <span id="error_property" class="error"></span>
                                </div>
                                <div class="col-md-6">
                                    <label>Nature of Ownership</label><br>
                                    <div class="select-style1">
                                  <select name="ownership" id="ownership">
                                  <option value="none"></option>
                            <?php  foreach($own as $owner) {  ?>
                            <option <?php //if(isset($families->relationship)) if($families->relationship == $relation->rel_id) { echo "selected";} ?> value="<?php echo $owner->own_id; ?>"> <?php echo $owner->own_name; ?></option>
                            <?php } ?> 
                                  </select>
                                </div>
                                <span id="error_owner" class="error"></span>
                                  </div>
                              </div>
                              <br>
                              <div class="row registration">
                                  <div class="col-md-6">
                                    <label>Muncipal Registration Number</label><br>
                                    <input type="text" name="muncipal" id="muncipal">
                                    <span id="error_muncipal" class="error"></span>
                                  </div>
                                  <div class="col-md-6">
                                    <label>Year of Purchase</label><br>
                                    <div class="input-daterange" id="datepicker">
                                    <input class="" name="year_of_purchase" id="year_of_purchase" type="text" >
                                    </div>
                                    <span id="error_year_of_purchase" class="error"></span>
                                  </div>                                  
                              </div>
                              <br>
                              <div class="row registration">
                                  <div class="col-md-6">
                                    <label>Address</label><br>
                                    <textarea name="address" id="address"></textarea>
                                    <span id="error_address" class="error"></span>
                                  </div>
                                  <div class="col-md-6">
                                  <label>Property Area</label><br>
                                  <input type="text" name="area" id="area">
                                  <span id="error_area" class="error"></span>
                                </div>
                              </div>
                              </div>                       
                              
                              <div id="mov" style="display:none">
                              <div class="row property">
                                <div class="col-md-6">
                                  <label>list of properties</label><br>
                                <div class="select-style1">
                                  <select name="name_mov" id="name_mov">
                                  <option value="none"></option>
                            <?php  foreach($pro as $property) { 
                            if($property->type == 2){ ?>
                            <option <?php //if(isset($families->relationship)) if($families->relationship == $relation->rel_id) { echo "selected";} ?> value="<?php echo $property->prop_id; ?>"> <?php echo $property->prop_name; ?></option>
                            <?php } } ?> 
                                  </select>
                                </div>
                                <span id="error_mov" class="error"></span>
                                </div>
                                <div class="col-md-6">
                                  <label>Comments</label><br>
                                  <input type="text" name="comments" id="comments">
                                  <span id="error_comments" class="error"></span>
                                </div>
                              </div>
                              </div>
                              <br>
                            <div class="attach">
                             <span class="btn btn-file"><i class="fa fa-paperclip" aria-hidden="true"></i>Attach Files <input type="file"></span>
                            </div>

                            <div class="continue">
                                <span ><input id="submt" type="submit" value="Save & Add More"/>
                                <a>or</a>
                                <a href="<?php echo base_url('user/property_alloc');?>">
                                <input id="contnu" type="button" value="Continue&#62;&#62;"/></a></span>
                            </div>

                        </form>
                      
                      </div>
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
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.min.js');?>"></script>
<script>
$(document).ready(function(){
                $('#year_of_purchase').datepicker({
                    todayHighlight: true,dateFormat:'yy-mm-dd'
                });

                $('#immovable').on('click',function(){ 
                $('#immov').show();
                $('#mov').hide();
                });

                $('#movable').on('click',function(){ 
                $('#immov').hide();
                $('#mov').show();
                });

                $('#submt').on('click',function(){ 

                  if($('#immovable').is(':checked'))
                  { 
                  if($('#immov_prop').val()=='none'){
                  $('#error_property').html('Please, choose an option');
                  $('#immov_prop').focus(); return false; }

                  if($('#ownership').val()=='none'){
                  $('#error_owner').html('Please, choose an option');
                  $('#ownership').focus(); return false; }

                  if($('#muncipal').val() == ''){
                  $('#error_muncipal').html("Enter Municipal Number"); $('#muncipal').focus(); return false; }

                  if($('#year_of_purchase').val() == ''){
                  $('#error_year_of_purchase').html("Enter Year of Purchase"); $('#year_of_purchase').focus(); return false; }

                  if($('#address').val() == ''){
                  $('#error_address').html("Enter Address"); $('#address').focus(); return false; }

                  if($('#area').val() == ''){
                  $('#error_area').html("Enter Area"); $('#area').focus(); return false; }
                  }

                  else if($('#movable').is(':checked'))
                  { 
                  if($('#name_mov').val() == 'none'){
                  $('#error_mov').html("Please, choose an option"); $('#name_mov').focus(); return false; }  

                  if($('#comments').val() == ''){
                  $('#error_comments').html("Enter Comments"); $('#comments').focus(); return false; } 
                  } 

                });
           });




 
          

</script>

