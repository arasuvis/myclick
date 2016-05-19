<style>
    .error{
        color:red;
    }
    </style>
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

                  
                  <form action="" method="post" id="form_exec">
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
                  <input class="form-control customise-input" type="text" name ="e_name" id="e_name" value="">
                  <span id="error_name" class="error"></span>
                </div>
                <input type="text" hidden readonly name ="e_id" id="e_id" value="">
                <div class="form-group">
                  <label class="control-label customise-label">Mobile Number</label>
                  <input class="form-control customise-input" type="text" name ="e_mobile" id="e_mobile" value="">
                  <span id="error_mobile" class="error"></span>
                </div>
                <div class="form-group">
                  <textarea class="form-control custom-textarea" placeholder="Who the Executor is?" rows="4" name ="e_about" id="e_about"></textarea>
                  <span id="error_about" class="error"></span>
                </div>
                <div class="form-group">
                  <label class="control-label customise-label">Address</label>
                  <textarea class="form-control custom-textarea" name ="e_address" id="e_address"></textarea>
                  <span id="error_address" class="error"></span>
                </div>
                <div class="form-group">
                  <label class="control-label customise-label">City</label>
                  <input class="form-control customise-input" type="text" name ="city_name" id="city_name" value="">
                  <span id="error_city" class="error"></span>
                </div>
                <div class="form-group">
                  <label class="control-label customise-label">State</label>
                  <input class="form-control customise-input" type="text" name ="state_name" id="state_name" value="">
                  <span id="error_state" class="error"></span>
                </div><br/><br/>
              

    
                </div>
                <div class="col-md-5">
                  <div class="prop_details">
                  <center><h5>Executor Details</h5></center>
                    <ul class="details  list-unstyled">
                    <li>
                    <div class="row" id="e_details">
                    <?php foreach($executor as $ex) { ?>
                    <div class="myid_<?php echo $ex->e_id; ?>">
                    <div class="col-md-8 col-xs-8">
                    <p class="e_name"><?php echo $ex->e_name; ?></p>
                    <span class="edit_edit" style="cursor:pointer;color:#187aff" data ="<?php echo $ex->e_id; ?>">Edit</span> | 
                    <span class="deleterec" style="cursor:pointer;color:#187aff" id="<?php echo $ex->e_id ?>">Delete</span>
                    </div>
                    <div class="col-md-4 col-xs-4">
                    <p>Mobile</p>
                    <span class="e_mob"><?php echo $ex->e_mobile; ?></span>
                    </div>
                    </div>
                    <?php } ?>
                    </div>

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
               
 </form>
</div>

<link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="<?php echo base_url('css/sweet-alert.min.css'); ?>" />

<script data-require="sweet-alert@*" data-semver="0.4.2" src="<?php echo base_url('js/sweet-alert.min.js'); ?>"></script>
<script>

$(document).ready(function(){ 
$(':input').blur(function(){ 
$(this).val($.trim($(this).val()));
});
});

  $('#submt').on('click',function(e){
    e.preventDefault();

  $('.error').html('');
  var name = /^[a-zA-Z\s]+$/;
  var phone = /^\d{10}$/;
  var address = $('#e_address').val();
  var about = $('#e_about').val(); 

  if($.trim($('#e_name').val() ) == ''){
    $('#error_name').html("Enter Name");
    $('#e_name').focus(); return false;}
  else if(! (name.test($('#e_name').val()))) {
    $('#error_name').html("Enter only Alphabets");$('#e_name').focus(); return false; }

  if($('#e_mobile').val() == ' '){
    $('#error_mobile').html("Enter Mobile Number");
    $('#e_mobile').focus(); return false;}

  if(!(phone.test(parseInt($("#e_mobile").val()))))
    {
      $('#error_mobile').html("Enter 10 Digits");
      $('#e_mobile').focus();
      return false;
    }

  if( $.trim(about) == ''){
    $('#error_about').html("Enter Details");
    $('#e_about').focus(); return false;}
 
  if($.trim(address) == ''){
    $('#error_address').html("Enter Address");
    $('#e_address').focus(); return false;}
  
  if($.trim($('#city_name').val() ) == ''){
    $('#error_city').html("Enter City");
    $('#city_name').focus(); return false;}
  else if(! (name.test($('#city_name').val()))) {
    $('#error_city').html("Enter only Alphabets");$('#city_name').focus(); return false; }

  if($.trim($('#state_name').val() ) == ''){
    $('#error_state').html("Enter City");
    $('#state_name').focus(); return false;}
  else if(! (name.test($('#state_name').val()))) {
    $('#error_state').html("Enter only Alphabets");$('#state_name').focus(); return false; }


  if($('#submt').hasClass("saveAndCon")){
    var exec_data = $('#form_exec').serialize();

    $.ajax({ 
      type:"post",
      data:{exec_data},
      url:"<?php echo base_url('user/save_executor'); ?>" ,
      success: function(res){
        if(res == 2)
        {
          alert('something went wrong');
        }
        else{
          var a =  $.parseJSON(res);
          var e_name = a.name.e_name;
          var e_id = a.name.e_id;
          var e_mobile = a.name.e_mobile;

          var str = '';
          str += ' <div class="myid_'+e_id+'"><div class="col-md-8 col-xs-8"><p id="e_name">'+e_name+'</p><span class="edit_edit" style="cursor:pointer;color:#187aff" data ="'+e_id+'">Edit </span> | <span class="deleterec"  style="cursor:pointer;color:#187aff" id="'+e_id+'">Delete</span></div><div class="col-md-4 col-xs-4"><p>Mobile</p><span id="e_mob">'+e_mobile+'</span></div></div> ';

          $('#e_details').append(str);

          $('#e_name').val('');
          $('#e_address').val('');
          $('#e_mobile').val('');
          $('#e_id').val('');
          $('#e_about').val('');
          $('#city_name').val('');
          $('#state_name').val('');

          swal({
              title: 'Successfully Added!',
              type: 'success'
          }); 
        }

      }

    });
  }
  else if($('#submt').hasClass("edit_save")){
    var id = $('#e_id').val();
    var details = $('#form_exec').serialize();

     $.ajax({ 
      type:"post",
      data:{id,details},
      url:"<?php echo base_url('user/update_executor'); ?>",
      success: function(res){
        if(res == 2)
        {
          alert('something went wrong');
        }
        else{
          $('#e_name').val('');
          $('#e_address').val('');
          $('#e_mobile').val('');
          $('#e_id').val('');
          $('#e_about').val('');
          $('#city_name').val('');
          $('#state_name').val('');

          var a = $.parseJSON(res);
          var name = a.ex.e_name;
          var id = a.ex.e_id;
          var mob = a.ex.e_mobile;
          
          $('#e_details').children().each(function(){ 

            var clas = $(this).attr('class');
            var r = clas.split("_");
            var val = r[1];

            
            if(r[1] == id){
              $(this).children().children().first().html(name);
              $(this).children().next().children().first().next().html(mob);
            }
            
            $('#submt').removeClass('edit_save');
            $('#submt').addClass('saveAndCon');
            
            swal({
                title: 'Successfully Updated!',
                type: 'success'
            }); 
          });


        }


      } });
  }


  });

 $('#e_details').on('click','.edit_edit',function(){
  
    var id = $(this).attr('data');

    $.ajax({ 
      type:"post",
      data:{id},
      url:"<?php echo base_url('user/edit_executor'); ?>",
      success: function(res){
        if(res == 2){
          alert('something went wrong');
        }
        else{
          var a = $.parseJSON(res);
          var name = a.ex.e_name;
          var add = a.ex.e_address;
          var mob = a.ex.e_mobile;
          var e_id = a.ex.e_id;
          var about = a.ex.e_about;
          var city = a.ex.city_name;
          var state = a.ex.state_name;

          $('#e_name').val(name);
          $('#e_id').val(e_id);
          $('#e_mobile').val(mob);
          $('#e_address').val(add);
          $('#e_about').val(about);
          $('#city_name').val(city);
          $('#state_name').val(state);
          
          $('#submt').addClass('edit_save');
          $('#submt').removeClass('saveAndCon');
        }
      }
    });
  });

$('#e_details').on('click','.deleterec',function(e){ 
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
                    url: "<?php echo base_url("user/delete_executor");?>",
                    type: "POST",
                    data: { id: id },
                    success: function(res) {
                      if(res == 1){ swal("Oops!", "Something went wrong", "warning") } 
                      else{
                        swal("Done!", "It was succesfully deleted!", "success");

                        $('#e_name').val('');
                        $('#e_address').val('');
                        $('#e_mobile').val('');
                        $('#e_id').val('');
                        $('#e_about').val('');
                        $('#city_name').val('');
                        $('#state_name').val('');

                        var a = $.parseJSON(res);
                        var id = a.id;
                        $('#e_details').children().each(function(){ 

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
</script>