<style>
    .error{
        color:red;
    }
    </style>
<div class="container">
	<div class="">
		<div class="col-md-8">
			<div class="content-top">
           	<center>
                <h1>Last Will & Testament</h1>
                <p>Finish Your Last Will & Testament in less than 15 min</p>
           	</center>
           	</div>
           	<div class="executor-details">
           		 <div class="content-head">
                    <h4>DOCTOR DETAIL</h4>
                  </div> 
                  
                  <form action="" method="post" id="form_doc">
                    <!-- <div class="row">
	            		<div class="col-md-8">
	            			<h5 class="meraClass">Do you want your doctor to certify your health?</h5>
	            		</div>
	            		<div class="col-md-4 text-right">
	            			<div class="move">
                                <div class="radio2">
                                    <input id="immovable" type="radio" name="property" value="immovable" checked>
                                    <label for="immovable">Yes</label>
                                    <input id="movable" type="radio" name="property" value="movable" >
                                    <label for="movable">No</label>
                                </div>
                            </div>
	            		</div>
            		</div> -->
                <div class="section1">
          <div class="col-md-7">      <div class="form-group">
                  <label class="control-label customise-label">Doctor Name</label>
                  <input class="form-control customise-input" type="text" name ="d_name" id="d_name" value="" >
                  <span id="error_name" class="error"></span>
                </div>
                <input class="text" readonly hidden type="text" name ="d_id" id="d_id" value="" >
                <div class="form-group">
                  <label class="control-label customise-label">Address</label>
                  <textarea class="form-control custom-textarea" name ="d_address" id="d_address"></textarea>
                  <span id="error_address" class="error"></span>
                </div>
                <div class="form-group">
                  <label class="control-label customise-label">Mobile Number</label>
                  <input class="form-control customise-input" type="text" name ="d_mobile" id="d_mobile" value="">
                  <span id="error_mobile" class="error"></span>
                </div>
                <br><br><br>
               <!--  <div class="form-group col-md-12 text-center">
                     <input type="submit" id="submt" class="btn  saveAndCon" value="Save &amp; Add More">Or
                    <button class="btn btn-warning Continue-btn1"><a href="<?php //echo base_url('user/witness'); ?>"//>Continue &gt;&gt;</a></button>
                   
                    </div> --></div>
          <div class="col-md-5 prop_details">
                <div class="prop_details1">
                    <center><h5>Doctor Details</h5></center>
                    <ul class="details  list-unstyled">
                    <li>
                    <div class="row" id="a_details">
                    <?php foreach($doctor as $doc) { ?>
                    <div class="myid_<?php echo $doc->d_id; ?>">
                    <div class="col-md-8 col-xs-8">
                    <p id="d_name"><?php echo $doc->d_name; ?></p>
                    <span class="edit_edit" style="cursor:pointer;color:#187aff" data ="<?php echo $doc->d_id; ?>">Edit </span>| 
                    <span class="deleterec" style="cursor:pointer;color:#187aff" id="<?php echo $doc->d_id ?>">Delete</span>
                    </div>
                    <div class="col-md-4 col-xs-4">
                    <p>Mobile</p>
                    <span id="d_mob"><?php echo $doc->d_mobile; ?></span>
                    </div>
                    </div>
                    <?php } ?>
                    </div>
                    
                    </li>
                    </ul>
                    </div>
          </div>
                    </div>
                     <div class="form-group col-md-12 text-center doctor">
                     <input type="submit" id="submt" class="btn  saveAndCon" value="Save &amp; Add More">&nbsp;Or&nbsp;
                    <button class="btn btn-warning Continue-btn1"><a href="<?php echo base_url('user/witness'); ?>">Continue &gt;&gt;</a></button>
                   
                    </div>
           	</div>
            </form>
           	 	
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
  var address = $('#d_address').val()
  var phone = /^\d{10}$/;
  var exp = /^\d*$/;

  if($.trim($('#d_name').val() ) == ''){
    $('#error_name').html("Enter Name");
    $('#d_name').focus(); return false;}
  else if(! (name.test($('#d_name').val()))) {
    $('#error_name').html("Enter only Alphabets");$('#d_name').focus(); return false; }

  if($.trim(address) == ''){
    $('#error_address').html("Enter Address");
    $('#d_address').focus(); return false;}

  if($('#d_mobile').val() == ' '){
    $('#error_mobile').html("Enter Mobile Number");
    $('#d_mobile').focus(); return false;}
  if(!(phone.test(parseInt($("#d_mobile").val()))))
    {
      $('#error_mobile').html("Enter 10 Digits");
      $('#d_mobile').focus();
      return false;
    }

    if($('#submt').hasClass("saveAndCon")){
    var doc_data = $('#form_doc').serialize();

    $.ajax({ 
      type:"post",
      data:{doc_data},
      url:"<?php echo base_url('user/save_doctor'); ?>" ,
      success: function(res){
        if(res == 2)
        {
          alert('something went wrong');
        }
        else{
          var a =  $.parseJSON(res);
          var d_name = a.name.d_name;
          var d_id = a.name.d_id;
          var d_mobile = a.name.d_mobile;

          var str = '';
          str += ' <div class="myid_'+d_id+'"><div class="col-md-8 col-xs-8"><p id="d_name">'+d_name+'</p><span class="edit_edit" style="cursor:pointer;color:#187aff" data ="'+d_id+'">Edit </span> | <span class="deleterec"  style="cursor:pointer;color:#187aff" id="'+d_id+'">Delete</span></div><div class="col-md-4 col-xs-4"><p>Mobile</p><span id="d_mob">'+d_mobile+'</span></div></div> ';

          $('#a_details').append(str);

          $('#d_name').val('');
          $('#d_address').val('');
          $('#d_mobile').val('');

          swal({
                title: 'Successfully Added!',
                type: 'success'
          }); 
        }

      }

    });
  }
  else if($('#submt').hasClass("edit_save")){
    var id = $('#d_id').val();
    var details = $('#form_doc').serialize();

     $.ajax({ 
      type:"post",
      data:{id,details},
      url:"<?php echo base_url('user/update_doctor'); ?>",
      success: function(res){
        if(res == 2)
        {
          alert('something went wrong');
        }
        else{
          $('#d_id').val('');
          $('#d_name').val('');
          $('#d_address').val('');
          $('#d_mobile').val('');

          var a = $.parseJSON(res);
          var name = a.name.d_name;
          var id = a.name.d_id;
          var mobile = a.name.d_mobile;
          //console.log(id);
          $('#a_details').children().each(function(){ 

            var clas = $(this).attr('class');
            var r = clas.split("_");
            var val = r[1];

            //console.log(clas);
            //console.log(val);

            if(r[1] == id){
              $(this).children().children().first().html(name);
              $(this).children().next().children().first().next().html(mobile);
            }
            $('#submt').removeClass('edit_save');
            $('#submt').addClass('saveAndCon');
            
          });


        }


      } });
  }

  });

  $('#a_details').on('click','.edit_edit',function(){
    var id = $(this).attr('data');

    $.ajax({ 
      type:"post",
      data:{id},
      url:"<?php echo base_url('user/edit_doctor'); ?>",
      success: function(res){
        if(res == 2){
          alert('something went wrong');
        }
        else{
          var a = $.parseJSON(res);
          var name = a.d.d_name;
          var add = a.d.d_address;
          var mob = a.d.d_mobile;
          var d_id = a.d.d_id;

          $('#d_name').val(name);
          $('#d_id').val(d_id);
          $('#d_address').val(add);
          $('#d_mobile').val(mob);
          $('#submt').addClass('edit_save');
          $('#submt').removeClass('saveAndCon');

          swal({
              title: 'Successfully Updated!',
              type: 'success'
          }); 
        }
      }
    });
  });

  $('#a_details').on('click','.deleterec',function(e){ 
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
                    url: "<?php echo base_url("user/delete_doctor");?>",
                    type: "POST",
                    data: { id: id },
                    success: function(res) {
                      if(res == 1){ swal("Oops!", "Something went wrong", "warning") } 
                      else{
                        swal("Done!", "It was succesfully deleted!", "success");

                        $('#d_id').val('');
                        $('#d_name').val('');
                        $('#d_address').val('');
                        $('#d_mobile').val('');
                        
                        var a = $.parseJSON(res);
                        var id = a.id;
                        $('#a_details').children().each(function(){ 

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