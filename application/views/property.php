<style>.error{color:red;}
.propert_details .dropdown ul.dropdown-menu span a:first-child {
    border-right: 1px solid #187aff;
    padding-left: 70px;
}
.propert_details .dropdown ul.dropdown-menu span a {
    color: #187aff;
    padding: 0 10px;
}
.propert_details .dropdown ul.dropdown-menu span {
    font-size: 12px;
    font-weight: 600;
    margin: 5px 0;
}
.propert_details .dropdown ul.dropdown-menu {
    padding: 10px;
}
.propert_details .memberbutton .dropdown-menu, .memberbutton .dropdown-menu {
    left: 65%;
    width: 300px;
}
.propert_details .dropdown ul.dropdown-menu li {
    padding: 5px 0;
}
.dropdown-menu{
  text-align: right;
}
.resize-width{
  width: 80px;
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

          <div id="property-dtl" >
              <div class="propert_details">
                  <div class="row">
                    <div class="col-md-12">
                     <div class="content-head">
                       <h4>PROPERTY DETAILS</h4>
                       </div>
                         <div class="row">
                          <div class="col-md-6">
                            <label>Property Type</label>

                          </div>
                          <div class="col-md-6 text-right">
                                <div class="memberbutton text-right">
                            <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">See All Properties List
                             </button>
                           
                              <ul class="dropdown-menu">
                              <?php foreach($lis as $l) { ?>
                                <li><span><span class="resize-width"><?php echo $l->prop_name; ?><span><a href='<?php echo base_url("user/edit_property/$l->Immovable_id");?>'>Edit</a>|
                                <span class="deleterec" style="cursor:pointer;color:#187aff" id="<?php echo $l->Immovable_id ?>">Delete</span></span></li>
                            <?php } ?>
                            

                           

                            <input id="list" type="text" value='<?php echo json_encode($lis); ?>' hidden>
                            <input id="rel" type="text" value='<?php echo json_encode($rel); ?>' hidden>
                                
                              </ul>
                            </div>
                        </div>
                          </div>
                        </div>
                       
                      <div class="details">
                      <?php if(isset($e_pro->Immovable_id)) {$var='user/update_property';} else {$var='user/addProperty';} ?>
                        <form action="<?php echo base_url($var);?>" method="post">
                                              
                            <div class="move">
                                <div class="radio2">
                                    <input id="immovable" type="radio" name="property" value="immovable" <?php if(isset($e_pro->type)) {if($e_pro->type == 1) {echo "checked";}} else echo "checked"; ?> >
                                    <label for="immovable">Immovable</label>
                                    <input id="movable" type="radio" name="property" value="movable" <?php if( isset($e_pro->type)) if($e_pro->type == 2) echo "checked"; ?> >
                                    <label for="movable">Movable</label>
                                </div>
                            </div>

                            <input id="up_id" type="text" name="up_id" hidden value="<?php if( isset($e_pro->Immovable_id)) echo $e_pro->Immovable_id; ?>" >
                              <div id="immov">
                                <div class="row property">
                                <div class="col-md-6">
                                  <label>List of properties</label><br>
                                <div class="select-style1">
                                  <select name="immov_prop" id="immov_prop">
                                  <option value="none"></option>
                            <?php  foreach($pro as $property) {  
                            if($property->type == 1){ ?>
                            <option <?php if(isset($e_pro->name)) if($e_pro->name == $property->prop_id) { echo "selected"; } ?> value="<?php echo $property->prop_id; ?>"> <?php echo $property->prop_name; ?></option>
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
                            <option <?php if(isset($e_pro->nature_of_ownership)) if($e_pro->nature_of_ownership == $owner->own_id) { echo "selected";} ?> value="<?php echo $owner->own_id; ?>"> <?php echo $owner->own_name; ?></option>
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
                                    <input type="text" name="muncipal" id="muncipal" value="<?php if(isset($e_pro->municipal_number)) echo $e_pro->municipal_number;  ?>">
                                    <span id="error_muncipal" class="error"></span>
                                  </div>
                                  <div class="col-md-6">
                                    <label>Year of Purchase</label><br>
                                    <div class="input-daterange" id="datepicker">
                                    <input class="" name="year_of_purchase" id="year_of_purchase" type="text" value="<?php if(isset($e_pro->year_of_purchase)) echo $e_pro->year_of_purchase;  ?>" >
                                    </div>
                                    <span id="error_year_of_purchase" class="error"></span>
                                  </div>                                  
                              </div>
                              <br>
                              <div class="row registration">
                                  <div class="col-md-6">
                                    <label>Address</label><br>
                                    <textarea name="address" id="address"><?php if(isset($e_pro->address)) echo $e_pro->address;  ?></textarea>
                                    <span id="error_address" class="error"></span>
                                  </div>
                                  <div class="col-md-6">
                                  <label>Property Area</label><br>
                                  <input type="text" name="area" id="area" maxlength="30" value="<?php if(isset($e_pro->area)) echo $e_pro->area;  ?>">
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
                            <option <?php if(isset($e_pro->name)) if($e_pro->name == $property->prop_id) { echo "selected";} ?> value="<?php echo $property->prop_id; ?>"> <?php echo $property->prop_name; ?></option>
                            <?php } } ?> 
                                  </select>
                                </div>
                                <span id="error_mov" class="error"></span>
                                </div>
                                <div class="col-md-6">
                                  <label>Comments</label><br>
                                  <input type="text" name="comments" id="comments" value="<?php if(isset($e_pro->comments)) { echo $e_pro->comments;} ?>">
                                  <span id="error_comments" class="error"></span>
                                </div>
                              </div>
                              </div>
                              <br><br>
                            <!-- <div class="attach">
                             <span class="btn btn-file"><i class="fa fa-paperclip" aria-hidden="true"></i>Attach Files <input type="file"></span>
                            </div> -->

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
<link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="<?php echo base_url('css/sweet-alert.min.css'); ?>" />
    
    <script data-require="sweet-alert@*" data-semver="0.4.2" src="<?php echo base_url('js/sweet-alert.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.min.js');?>"></script>
<script>
$(document).ready(function(){
 
      var str = '<?php echo $this->uri->segment(3,0); ?>';
          if(str != 0 ){
           $('#immov_prop')
                .attr("disabled", true);
          }

      if($('input[name="property"]:checked').val() == "movable") {
        $('#mov').show();
        $('#immov').hide();
      }   
   
          $(':input').blur(function(){ 
          $(this).val($.trim($(this).val()));
          });
    
                $('#year_of_purchase').datepicker({
                    todayHighlight: true,dateFormat:'yy-mm-dd'
                });

                $('#immov_prop').on('change',function(){ 
                  var id =$('#immov_prop').val();

                  $.ajax({
                      type:"POST",
                      url:"<?php echo base_url(); ?>user/check_prop_details",
                      data: {id:id},
                      dataType:"json",
                      success:function(res)
                      { 
                       if(res == 1)
                       {
                        alert('Property Already Allocated');
                        $('#immov_prop').val('');
                       }
                      }
                  });
                });

                $('#name_mov').on('change',function(){ 
                  var id =$('#name_mov').val();

                  $.ajax({
                      type:"POST",
                      url:"<?php echo base_url(); ?>user/check_prop_details",
                      data: {id:id},
                      dataType:"json",
                      success:function(res)
                      { 
                       if(res == 1)
                       {
                        alert('Property Already Allocated');
                        $('#name_mov').val('');
                       }
                      }
                  });
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
                        window.location = "<?php echo base_url("user/delete_property");?>/"+id;
                    });
                    
                } else {
                    swal("Cancelled,hello");
                }
            }); 
          });

 




 
          

</script>

