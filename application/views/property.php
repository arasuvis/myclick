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

textarea { color: black; 
font-weight: 600;
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
                           
                              <ul class="dropdown-menu" id = "prop_lis">
                              <?php foreach($lis as $l) { ?>
                              <div class = "myid_<?php echo $l->Immovable_id; ?>" >
                                <li><p><?php echo $l->prop_name; ?></p>
                                <span class="edit_edit" style="cursor:pointer;color:#187aff" data ="<?php echo $l->Immovable_id; ?>">Edit </span>|
                                <span class="deleterec" style="cursor:pointer;color:#187aff" id="<?php echo $l->Immovable_id ?>">Delete</span></li></div>
                            <?php } ?>
                            

                           

                          
                                
                              </ul>
                            </div>
                        </div>
                          </div>
                        </div>
                       
                      <div class="details">
                      
                        <form action="" method="post" id="form_prop">
                                              
                            <div class="move">
                                <div class="radio2">
                                    <input id="immovable" type="radio" name="property" value="immovable" checked >
                                    <label for="immovable">Immovable</label>
                                    <input id="movable" type="radio" name="property" value="movable"  >
                                    <label for="movable">Movable</label>
                                </div>
                            </div>

                            <input id="up_id" type="text" hidden readonly name="up_id"  value="" >
                              <div id="immov">
                                <div class="row property">
                                <div class="col-md-6">
                                  <label>List of properties</label><br>
                                <div class="select-style1">
                                  <select name="immov_prop" id="immov_prop">
                                  <option value="none"></option>
                            <?php  foreach($pro as $property) {  
                            if($property->type == 1){  ?>
                            <option value="<?php echo $property->prop_id; ?>"> <?php echo $property->prop_name; ?></option>
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
                            <option value="<?php echo $owner->own_id; ?>"> <?php echo $owner->own_name; ?></option>
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
                                    <input type="text" name="muncipal" id="muncipal" value="">
                                    <span id="error_muncipal" class="error"></span>
                                  </div>
                                  <div class="col-md-6">
                                    <label>Year of Purchase</label><br>
                                    <div class="input-daterange" id="datepicker1">
                                    <input class="" name="year_of_purchase" id="year_of_purchase1" type="text" value="" >
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
                                  <input type="text" name="area" id="area" maxlength="30" value="">
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
                            <option value="<?php echo $property->prop_id; ?>"> <?php echo $property->prop_name; ?></option>
                            <?php } } ?> 
                                  </select>
                                </div>
                                <span id="error_mov" class="error"></span>
                                </div>
                                <div class="col-md-6">
                                  <label>Comments</label><br>
                                  <input type="text" name="comments" id="comments" value="">
                                  <span id="error_comments" class="error"></span>
                                </div>
                              </div>
                              </div>
                              <br><br>
                            <!-- <div class="attach">
                             <span class="btn btn-file"><i class="fa fa-paperclip" aria-hidden="true"></i>Attach Files <input type="file"></span>
                            </div> -->

                            <div class="continue">
                                <span ><input id="submt" type="submit" class="saveAndCon" value="Save & Add More"/>
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
 
       
          $(':input').blur(function(){ 
          $(this).val($.trim($(this).val()));
          });
    
                 $('#year_of_purchase1').datepicker({
                     format: " yyyy", // Notice the Extra space at the beginning
                      viewMode: "years", 
                    minViewMode: "years"
                }).on('changeDate', function(e){
    $(this).datepicker('hide');
});



                $('#immovable').on('click',function(){ 
                $('#immov').show();
                $('#mov').hide();
                });

                $('#movable').on('click',function(){ 
                $('#immov').hide();
                $('#mov').show();
                });

           });

          $('#submt').on('click',function(e){ 

                  e.preventDefault();

                  $('.error').html('');
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

                  if($('#year_of_purchase1').val() == ''){
                  $('#error_year_of_purchase').html("Enter Year of Purchase"); $('#year_of_purchase1').focus(); return false; }

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

                   if($('#submt').hasClass("saveAndCon")){
                    var prop_data = $('#form_prop').serialize();

                    $.ajax({ 
                      type:"post",
                      data:{prop_data},
                      url:"<?php echo base_url('user/addProperty'); ?>" ,
                      success: function(res){ 
                        
                        
                        if(res==1)
                        {
                          alert('something went wrong');
                        }
                        else
                        {
                          var a= $.parseJSON(res);
                          var name = a.lis[0].prop_name;
                          var im_id = a.lis[0].Immovable_id;
                          var str = '';
                          
                          str = '<div class = "myid_'+im_id+'" ><li><p>'+name+'</p><span class="edit_edit" style="cursor:pointer;color:#187aff" data ="'+im_id+'">Edit </span>|<span class="deleterec" style="cursor:pointer;color:#187aff" id="'+im_id+'">Delete</span></li></div>';

                           $('#prop_lis').append(str);

                            $('#immov_prop').children().each(function(){ 
                                if($(this).is(':selected')){
                                $(this).prop('selected',false) }
                            });

                             $('#ownership').children().each(function(){ 
                                if($(this).is(':selected')){
                                $(this).prop('selected',false) }
                            });                            
                            $('#muncipal').val('');
                            $('#year_of_purchase1').val('');
                            $('#address').val('');
                            $('#area').val('');
                            $('#name_mov').val('');
                            $('#comments').val('');

                            swal({
                                title: 'Successfully Added!',
                                type: 'success'
                            }); 
                        }
                      }
                     }); 
                  }
            else if( $('#submt').hasClass("edit_save")) {

                    var id = $('#up_id').val();
                    var details = $('#form_prop').serialize();
                     $.ajax({ 
                      type:"post",
                      data:{id,details},
                      url:"<?php echo base_url('user/update_property'); ?>",
                      success: function(res){

                        if(res == 2)
                        {
                          alert('something went wrong');
                        }
                        else{
                          $('#immov_prop').children().each(function(){ 
                                if($(this).is(':selected')){
                                $(this).prop('selected',false) }
                            });
                          $('#immov_prop').prop('disabled',false);
                          $('#ownership').children().each(function(){ 
                                if($(this).is(':selected')){
                                $(this).prop('selected',false) }
                            });                            
                            $('#muncipal').val('');
                            $('#year_of_purchase1').val('');
                            $('#address').val('');
                            $('#area').val('');
                            $('#name_mov').val('');
                            $('#comments').val('');
                            $('#up_id').val('');
                            $('#name_mov').prop('disabled',false);

                          var a= $.parseJSON(res);
                          var name = a.pro.prop_name;
                          var im_id = a.pro.Immovable_id;
                          $('#prop_lis').children().each(function(){ 

                            var clas = $(this).attr('class');
                            var r = clas.split("_");
                            var val = r[1];

                            if(r[1] == id){
                              $(this).children().children().first().html(name);
                            }

                            swal({
                            title: 'Successfully Updated!',
                            type: 'success'
                            });

                            $('#submt').removeClass('edit_save');
                            $('#submt').addClass('saveAndCon');
                            
                          });

                       }
                       } 
                    });
                   }
                });

                $('#prop_lis').on('click','.edit_edit',function(){
                  var id = $(this).attr('data');

                  $.ajax({ 
                    type:"post",
                    data:{id},
                    url:"<?php echo base_url('user/edit_property'); ?>",
                    success: function(res){
                      if(res == 2){
                        alert('something went wrong');
                      }
                      else{
                        
                        var a = $.parseJSON(res);
                        if(a.pro.type == 1){
                        $('#immov').show();
                        $('#mov').hide();
                        $('#movable').prop('checked',false);
                        $('#immovable').prop('checked',true);
                          
                        $('#address').val(a.pro.address);
                        $('#area').val(a.pro.area);
                        $('#muncipal').val(a.pro.municipal_number);
                        $('#up_id').val(a.pro.Immovable_id);
                        $('#immov_prop').children().each(function(){ 
                          var p = $(this).attr('value');
                          if( p == a.pro.name)
                          {
                            $(this).prop('selected',true);
                          }
                        });
                        $('#immov_prop').prop('disabled',true);
                        $('#ownership').children().each(function(){ 
                          var o = $(this).prop('value');
                          if( o == a.pro.own_id)
                          {
                            $(this).prop('selected',true);
                          }
                        });
                        $('#year_of_purchase1').val(a.pro.year_of_purchase);
                        $('#submt').addClass('edit_save');
                        $('#submt').removeClass('saveAndCon');
                      }
                      else if(a.pro.type == 2){
                        $('#immov').hide();
                        $('#mov').show();                         
                        $('#movable').prop('checked',true);
                        $('#immovable').prop('checked',false);
                  

                        $('#name_mov').children().each(function(){ 
                          var p = $(this).attr('value');
                          if( p == a.pro.name)
                          {
                            $(this).prop('selected',true);
                          }
                        });
                         $('#name_mov').prop('disabled',true);
                         $('#comments').val(a.pro.comments);
                         $('#up_id').val(a.pro.Immovable_id);
                         $('#submt').addClass('edit_save');
                        $('#submt').removeClass('saveAndCon');
                      }

                        
                      }
                    }
                  });
                  });

         $('input[name="property"]').on('change',function(){ 
                $('#immov_prop').children().each(function(){ 
                                if($(this).is(':selected')){
                                $(this).prop('selected',false) }
                            });
                          $('#immov_prop').prop('disabled',false);
                          $('#ownership').children().each(function(){ 
                                if($(this).is(':selected')){
                                $(this).prop('selected',false) }
                            });                            
                            $('#muncipal').val('');
                            $('#year_of_purchase1').val('');
                            $('#address').val('');
                            $('#area').val('');
                            $('#name_mov').val('');
                            $('#comments').val('');
                            $('#up_id').val('');
                            $('#name_mov').prop('disabled',false);
         }); 

         $('#prop_lis').on('click','.deleterec',function(e){ 
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
                    $.ajax({
                    url: "<?php echo base_url("user/delete_property");?>",
                    type: "POST",
                    data: { id: id },
                    success: function(res) {
                      if(res == 1){ swal("Oops!", "Something went wrong", "warning") } 
                      else{
                        swal("Done!", "It was succesfully deleted!", "success");

                        $('#immov_prop').children().each(function(){ 
                                if($(this).is(':selected')){
                                $(this).prop('selected',false) }
                            });

                             $('#ownership').children().each(function(){ 
                                if($(this).is(':selected')){
                                $(this).prop('selected',false) }
                            });                            
                            $('#muncipal').val('');
                            $('#year_of_purchase1').val('');
                            $('#address').val('');
                            $('#area').val('');
                            $('#name_mov').val('');
                            $('#comments').val('');
                            $('#up_id').val('');
                            $('#immov_prop').prop('disabled',false);
                            $('#name_mov').prop('disabled',false);
                        
                        var a = $.parseJSON(res);
                        var id = a.id;
                        $('#prop_lis').children().each(function(){ 

                          var clas = $(this).attr('class');
                          var r = clas.split("_");
                          var val = r[1];

                            if(r[1] == id){
                              $(this).remove();
                            }
                        }); 
                      }
                    }
                  });
                    
                } else {
                    swal({
                        title: 'Cancelled!',
                        type: 'error'
                    }); 
                }

                if($('#submt').hasClass("edit_save")){
                  $('#submt').removeClass('edit_save');
                  $('#submt').addClass('saveAndCon');
                }
            }); 

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
                         swal(
                            '',
                            'Property Already Allocated',
                            'warning'
                          )
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
                         swal(
                            '',
                            'Property Already Allocated',
                            'warning'
                          )
                        $('#name_mov').val('');
                       }
                      }
                  });
                }); 

</script>

