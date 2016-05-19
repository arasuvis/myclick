<!--script src="<?php// echo base_url('js/jquery.form.js'); ?>"></script-->
<style type="text/css">
.memberbutton01 .dropdown {
  margin-bottom: 30px;
}
.memberbutton01 .dropdown ul.dropdown-menu {
  padding: 10px;
}
.memberbutton01 .dropdown-menu {
  left: 65%;
  width: 300px;
}
.memberbutton01 .dropdown ul.dropdown-menu li {
  padding: 6px 4px;
  font-weight: bold;
  word-wrap: break-word;
}
.memberbutton01 .dropdown ul.dropdown-menu span {
  font-size: 12px;
  font-weight: 600;
  margin: 5px 0;
  color: #187aff;
}
.memberbutton01 .dropdown ul.dropdown-menu span a:first-child {
  border-right: 1px solid #187aff;
  padding-left: 70px;
}
.memberbutton01 .dropdown ul.dropdown-menu  a {
  color: #187aff;
  padding: 0 10px;
}
.width-resize{
 width: 47%;
}
.width-resize1{
 width: 47%;
 float: right;
 text-align: right;
}
.innerul-witness{
padding-top: 0px !important;
}
</style>
</style><?php //print_r($rel); echo "<pre>"; print_r($families) ;die();?><style>.error{color:red;}</style>

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


                      
                        <div class="memberbutton01 text-right">
                            <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">See All Members
                             </button>
                           
                              <ul class="dropdown-menu list-unstyled"  id="family_mem_details">

                                   <?php foreach($lis as $list) {  ?>
                                   <div class = "myid_<?php echo $list->id; ?>" rel="<?php echo $list->relationship; ?>" marital="<?php echo $list->marital_status; ?>">
                                    <li><p><?php echo $list->name; ?></p>
                                    <span class="edit_mem" style="cursor:pointer;color:#187aff" data ="<?php echo $list->id; ?>">Edit </span>|
                                    <span class="delete_mem" style="cursor:pointer;color:#187aff" id="<?php echo $list->id; ?>">Delete</span>
                                    </li>
                                    </div>
                                  <?php } ?>
                       
			                         </ul>
                            <input id="list" type="text" value='<?php echo json_encode($lis); ?>' hidden>
                            <input id="rel" type="text" value='<?php echo json_encode($rel); ?>' hidden>
                                
                              
                            </div>
                        </div>
						<?php if(isset($families->id)) $var = 'user/updateFamily'; else $var = 'user/addFamily';?>
                          <!--form id = "form" action="<?php// echo base_url($var); ?>" method="POST"-->
                          <form id="form" method="post">

                         <div class="family_form">
                          <br>
						  <input autocomplete="off" type="hidden" id="f_id" name="id" value="<?php if(isset($families->id)) echo $families->id;?>">
                              <div class="row family">
                                <div class="col-md-6" style="padding-left: 0;">
                                  <label>Name</label><br>
                                  <input autocomplete="off" type="text"   id="name" name="name" value="<?php if(isset($families->name)) echo $families->name?>" maxlength="30">
                                  <span id="error_name" class="error"></span>
                                </div>
                                 <div class="col-md-6" style="padding-right: 0;">
                                  <label>Relationship</label><br>
                                    <div class="select-style" >
                                        <select  name="relationship" id="relationship">
                                        <option value="none"></option>
                                        <?php  foreach($rel as $relation) {  ?>
                                        <option <?php if(isset($families->relationship)) if($families->relationship == $relation->rel_id) { echo "selected";} ?> value="<?php echo $relation->rel_id; ?>"> <?php echo $relation->name; ?></option>
                                        <?php } ?> 
                                        </select>
                                    </div>
                                    <span id="error_relation" class="error"></span>
                                </div>
                              </div>
                              <br>

                              <div id="hide_others">
                              <div class="row requirement_age" >
                                <div class="col-md-6" style="padding-left: 0;">
                                    <label>Date of Birth</label><br>
								 <div class="input-daterange" id="datepicker">
    <input class="" name="dob" id="dob" type="text" value="<?php if(isset($families->dob)) echo $families->dob?>">
    </div>
                                  
                                    <span id="error_dob" class="error"></span>
                                </div>
                              </div>

                              <br>
                              <div class="gender">
                                <div class="radio">

                                <?php foreach($gen as $gender) {  ?>
                                    <input  id="<?php echo $gender->id_value ?>" type="radio"  name="gender" value="<?php echo $gender->gender_type; ?>" <?php if(isset($families->gender)) if($families->gender == $gender->gender_type) {echo "checked"; } ?> class = "gend" >
                                    <label for="<?php echo $gender->id_value ?>"><?php echo $gender->gender_type ?></label>
                                <?php } ?>
                              
                                  
                                </div>
                                  <span id="error_gender" class="error"></span>
                              </div>

                                   <br><br>
                               <div class="martial" >
                                <div class="radio1">
                                <?php foreach($m_sta as $m_status) { ?>
                                    <input  id="<?php echo $m_status->id_value ?>" type="radio" name="marital_status" value="<?php echo $m_status->status_type ?>" <?php if(isset($families->marital_status)) if($families->marital_status == $m_status->status_type) {echo "checked"; } ?>>
                                    <label for="<?php echo $m_status->id_value ?>"><?php echo $m_status->status_type ?></label>
                                    <?php } ?>
                                    
                                </div>
                                <span id="error_marital" class="error"></span>
                              </div>

                              <br><br>
                                <div class="gender" >
                                <div class="radio"> 

                                <?php foreach($st as $sta) {  ?>
                                    <input  id="<?php echo $sta->id_value ?>" type="radio" name="status" value="<?php echo $sta->status; ?>" <?php if(isset($families->status)) if($families->status == $sta->status) {echo "checked"; } ?> >
                                    <label for="<?php echo $sta->id_value ?>"><?php echo $sta->status ?></label>
                                <?php } ?>
                                 
                                </div>
                                 <span id="error_status" class="error"></span>
                              </div>
                              </div>

                              <div class="row show-area" style="display:none" id="c">
                              <div class="col-md-12">
                                 <label>Comments</label>
                                <textarea rows="5" class="form-control" id="comments" name="comments"><?php if(isset($families->comments)) echo $families->comments;  ?> </textarea>
                              </div>
                              <span id="error_comments" class="error"></span>
                              </div>

                              <br><br><br>
                              <div class="continue">
                                 <span style="display: inline;"><input id="save_family" type="submit" class="addFamily" value="Save & Add More"/> <a>or</a>  <!-- <a href="<?php //echo base_url('user/property'); ?>"> --><input id="contnu" type="button" value="Continue&#62;&#62;" /> <!-- </a> --> </span>
                              </div>
                           
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
<link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="<?php echo base_url('css/sweet-alert.min.css'); ?>" />
    
<script data-require="sweet-alert@*" data-semver="0.4.2" src="<?php echo base_url('js/sweet-alert.min.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.min.js');?>"></script>
    
<script type="text/javascript">
 
$('#relationship').on('change',function(){ 
 if($('#relationship').val() == 16){
  $('#hide_others').hide();
  $('#c').show(); }
else{
   $('#hide_others').show();
  $('#c').hide();
}

});

</script>

<script type="text/javascript">
$(document).ready(function(){ 
if($('#relationship').val() == 16){ 
  $('#hide_others').hide(); 
  $('#c').show();
}
});

$('#form').on('keyup','input',function(){
  $(this).next().html('');
});

$(':input').blur(function(){ 
$(this).val($.trim($(this).val()));
});


$('#contnu').on('click',function(){

  $.ajax({
        type: "POST",
        url: "<?php echo base_url('user/parents_check'); ?>",
        //data: family_data,
        type: 'POST',
        success: function(response) {
          //alert(response);
          if(response == 1)
          {
            count =0;
               $('#family_mem_details').children().each(function(){ 
                    var rel = parseInt($(this).attr('rel'));
                    var marital = $(this).attr('marital');

                    if(rel == 3){
                            if(marital == "Married"){
                              count =1;
                            }
                    }
                  });
                if(count == 1){
                          swal({
                            title: "You have married Son",
                            text: "Are you willing to add your son's wife and children details",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: '#DD6B55',
                            confirmButtonText: 'Yes, I am!',
                            cancelButtonText: "No, Proceed!",
                            closeOnConfirm: false,
                            closeOnCancel: false
                          },
                          function(isConfirm) {
                            if (isConfirm) {
                                           window.location="<?php echo base_url('user/family');?>";
                                
                            } else {
                                 window.location="<?php echo base_url('user/property');?>";
                            }
                          });   
                }

          }
          else{
                  sweetAlert(
                      'Oops...',
                      'Father or Mother details not entered!',
                      'error'
                    )
          }


        }

    });
});  

</script>

<!-- var list = $.parseJSON($('#list').val());
              var rel = $.parseJSON($('#rel').val());

              var id = new Array();
              var name= new Array();
              var i=0;
              var selected = 1;

              $.each(rel,function(k,v){
                  if(v['name']=="Son"){
                   
                    $.each(list,function(key,ele){
                    if(ele['relationship'] == v['rel_id'])
                    {
                       if(ele['marital_status'] == "Married")
                        {
                          selected = 2;     

                          swal({
                            title: "You have married Son",
                            text: "Are you willing to add your son's wife and children details",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: '#DD6B55',
                            confirmButtonText: 'Yes, I am!',
                            cancelButtonText: "No, Proceed!",
                            closeOnConfirm: false,
                            closeOnCancel: false
                          },
                          function(isConfirm) {
                            if (isConfirm) {
                                           window.location="<?php //echo base_url('user/family');?>";
                                
                            } else {
                                 window.location="<?php // echo base_url('user/property');?>";
                            }
                          });               
                        }
                        else
                        {
                             window.location="<?php // echo base_url('user/property');?>"; 
                        } 
                     return false;  
                        } 
                      }); 
                    }
                    
                  });
 -->

<script>
$(function() {

  $('#save_family').on('click',function(e){
    //alert(); 
    $('.error').html('');
    e.preventDefault();
    var name = /^[a-zA-Z\s]+$/;
    var age = /^[0-9]+$/;
    var rel = $('#relationship').val();
    var comments = $('#comments').val();

      if($('#name').val() == ''){
        $('#error_name').html("Enter Name");
        $('#name').focus(); return false;}
      else if(! (name.test($('#name').val()))) {
        $('#error_name').html("Enter only Alphabets");$('#name').focus(); return false; }

      if($('select').val()=='none'){
        $('#error_relation').html('Please, choose an option');
      $('select').focus(); return false; }
      
      if(rel != 16){

      if($('#dob').val() == ''){
        $('#error_dob').html("Enter Date of Birth"); $('#dob').focus(); return false; }

      if( $('input[name=gender]:checked').length<=0 ) { 
        $('#error_gender').html("Select gender"); $('input[name=gender]:checked').focus(); return false; }

      if( $('input[name=marital_status]:checked').length<=0 ) { 
        $('#error_marital').html("Select Marital Status"); $('input[name=marital_status]:checked').focus(); return false; }

      if( $('input[name=status]:checked').length<=0 ) { 
        $('#error_status').html("Select Status");
         $('input[name=status]:checked').focus(); return false; } }
      else{
      if( comments == '' ) { 
        $('#error_comments').html("Enter Comments");
         $('#comments').focus(); return false; } }


    if($('#save_family').hasClass("addFamily")){

      var family_data = $('#form').serialize();

      $.ajax({
        type: "POST",
        url: "<?php echo base_url('user/addFamily'); ?>",
        data: family_data,
        type: 'POST',
        //dataType:'json',
      success: function(response) {
       // alert(response);
        if(response == 2){
                alert('something went wrong');
              }else {
                       
             $('#name').val('');
             $('#dob').val('');
              $('#relationship').children().each(function(k,l){
                  if($(this).is(':selected')){
                      $(this).attr('selected',false);
                  }
                });
              $('input[name="gender"]').each(function(k,l){
                  if($(this).is(':checked')){
                      $(this).attr('checked',false);
                  }
                });
              $('input[name="marital_status"]').each(function(k,l){
                  if($(this).is(':checked')){
                      $(this).attr('checked',false);
                  }
                });
              $('input[name="status"]').each(function(k,l){
                  if($(this).is(':checked')){
                      $(this).attr('checked',false);
                  }
                });

               

               $('#comments').val('');
               $('#hide_others').show(); 
               $('#c').hide();

              var a = $.parseJSON(response);
              var name = a['family'].name;
              var fam_id = a['family'].id;
              var rel = a['family'].relationship;
              var marital = a['family'].marital_status;
              var str ='';

              str = '<div class = "myid_'+fam_id+'" rel="'+rel+'" marital="'+marital+'"><li><p>'+name+'</p><span class="edit_mem" style="cursor:pointer;color:#187aff" data ="'+fam_id+'">Edit </span>|<span class="delete_mem" style="cursor:pointer;color:#187aff" id="'+fam_id+'">Delete</span></li></div>';

              $('#family_mem_details').append(str)
              swal({
                        title: 'Successfully added!',
                        type: 'success'
                    }); 
              }
          }
        });
      }
      else if($('#save_family').hasClass("updateFamily")){
        var family_data = $('#form').serialize();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('user/updateFamily'); ?>",
            data: family_data,
            type: 'POST',
            //dataType:'json',
          success: function(response) {
            //alert(response);
            if(response == 2){
                    alert('something went wrong');
                  }else {
                // console.log($.parseJSON(response));            
                 $('#name').val('');
                 $('#dob').val('');
                  $('#relationship').children().each(function(k,l){
                      if($(this).is(':selected')){
                          $(this).attr('selected',false);
                      }
                    });
                  $('input[name="gender"]').each(function(k,l){
                      if($(this).is(':checked')){
                          $(this).attr('checked',false);
                      }
                    });
                  $('input[name="marital_status"]').each(function(k,l){
                      if($(this).is(':checked')){
                          $(this).attr('checked',false);
                      }
                    });
                  $('input[name="status"]').each(function(k,l){
                      if($(this).is(':checked')){
                          $(this).attr('checked',false);
                      }
                    });
                  $('#comments').val('');
                  $('#hide_others').show(); 
                  $('#c').hide();

                  var a = $.parseJSON(response);
                  var name = a['family'].name;
                  var fam_id = a['family'].id;

                   $('#family_mem_details').children().each(function(){ 

                                var clas = $(this).attr('class');
                                var k = clas.split("_");
                                var val = k[1];

                                if(k[1] == fam_id){
                                  $(this).children().children().first().html(name);
                                }
                                $('#save_family').removeClass('updateFamily');
                                $('#save_family').addClass('addFamily');
                                
                              });

                              swal({
                                        title: 'Successfully updated!',
                                        type: 'success'
                                    }); 
                            }
                        }
                   });
               }      
              });
});

 $('#family_mem_details').on('click','.edit_mem',function(){
  var id = $(this).attr('data');
 // alert($(this).attr('data'))
 
$.ajax({
            type:"POST",
            url:"<?php echo base_url(); ?>user/edit_family",
            data: {id:id},
            //dataType:"json",
            success:function(res)
            { 
             console.log($.parseJSON(res));
              var a = $.parseJSON(res);

              var id = a['family'].id;
              var name = a['family'].name;
              var dob = a['family'].dob;
              var gen = a['family'].gender;
              var marital_status = a['family'].marital_status;  
              var status = a['family'].status;

              var rel_id = a['families'][0].rel_id;
              var rel_name = a['families'][0].name;

              if(rel_id == 16)
              {
                var comments = a['family'].comments;

                  $('#hide_others').hide(); 
                  $('#c').show();
                  $('#f_id').attr('value',id);
                  $('#name').val(name);
                 
                  $('#relationship').children().each(function(){
                      var r = $(this).attr('value');
                        if( r == rel_id)
                        {
                          $(this).prop('selected',true);
                        }
                  });
                  $('#comments').val(comments);

              }else{
              $('#hide_others').show(); 
              $('#c').hide();
               
              $('#name').val(name);
              $('#dob').val(dob);
            //  $('#name').attr('value',name);
             // $('#dob').attr('value',dob);
              $('#f_id').attr('value',id);

               $('#relationship').children().each(function(){
                          var r = $(this).attr('value');
                         
                          if( r == rel_id)
                          {
                            $(this).prop('selected',true);
                          }
                        });

               $('input[name="gender"]').each(function(){
                  var p = $(this).attr('value');
      
                  if( p == gen)
                  {
                    $(this).prop('checked',true);
                  }
              });

              $('input[name="marital_status"]').each(function(){
                  var p = $(this).attr('value');
                  if( p == marital_status)
                  {
                    $(this).prop('checked',true);
                  }
              }); 

               $('input[name="status"]').each(function(){
                  var p = $(this).attr('value');
                  if( p == status)
                  {
                    $(this).prop('checked',true);
                  }
              }); 
            }
              $('#save_family').removeClass('addFamily');
              $('#save_family').addClass('updateFamily');         
              }
             
          });
});


$('#family_mem_details').on('click','.delete_mem',function(e){ 
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
                    url: "<?php echo base_url("user/delete");?>",
                    type: "POST",
                    data: { id: id },
                    success: function(res) {
                      if(res == 1){ swal("Oops!", "Something went wrong", "warning") } 
                      else{
                        swal("Done!", "It was succesfully deleted!", "success");

                        
                        var a = $.parseJSON(res);
                        var id = a.id;
                        $('#family_mem_details').children().each(function(){ 

                          var clas = $(this).attr('class');
                          var r = clas.split("_");
                          var val = r[1];

                            if(r[1] == id){
                              $(this).remove();
                            }
                        }); 
                         $('#name').val('');
                         $('#dob').val('');
                          $('#relationship').children().each(function(k,l){
                              if($(this).is(':selected')){
                                  $(this).attr('selected',false);
                              }
                            });
                          $('input[name="gender"]').each(function(k,l){
                              if($(this).is(':checked')){
                                  $(this).attr('checked',false);
                              }
                            });
                          $('input[name="marital_status"]').each(function(k,l){
                              if($(this).is(':checked')){
                                  $(this).attr('checked',false);
                              }
                            });
                          $('input[name="status"]').each(function(k,l){
                              if($(this).is(':checked')){
                                  $(this).attr('checked',false);
                              }
                            });
                          $('#comments').val('');
                      }
                    }
                  });
                    
                } else {
                    swal("Cancelled");
                }

                if($('#save_family').hasClass("updateFamily")){
                  $('#save_family').removeClass('updateFamily');
                  $('#save_family').addClass('saveAndCon');
                }
            }); 

}); 
</script>



