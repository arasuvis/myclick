<?php //print_r($rel); echo "<pre>"; print_r($families) ;die();?><style>.error{color:red;}</style>

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
                                <li><span><?php echo $list->name; ?><a href='<?php echo base_url("user/family/{$list->id}");?>'>Edit</a>|
                                <span class="deleterec" style="cursor:pointer;color:#187aff" id="<?php echo $list->id; ?>">Delete</span></span></li>
                            <?php } ?>

                            <input id="list" type="text" value='<?php echo json_encode($lis); ?>' hidden>
                            <input id="rel" type="text" value='<?php echo json_encode($rel); ?>' hidden>
                                
                              </ul>
                            </div>
                        </div>
						<?php if(isset($families->id)) $var = 'user/updateFamily'; else $var = 'user/addFamily';?>
                          <form id = "form" action="<?php echo base_url($var); ?>" method="POST">
                          <div class="family_form">
                          <br>
						  <input autocomplete="off" type="hidden" name="id" value="<?php if(isset($families->id)) echo $families->id;?>">
                              <div class="row family">
                                <div class="col-md-6" style="padding-left: 0;">
                                  <label>Name</label><br>
                                  <input autocomplete="off" type="text" id="name" name="name" value="<?php if(isset($families->name)) echo $families->name?>">
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
                                 <span style="display: inline;"><input id="submt" type="submit" value="Save & Add More"/> <a>or</a>  <!-- <a href="<?php //echo base_url('user/property'); ?>"> --><input id="contnu" type="button" value="Continue&#62;&#62;" /> <!-- </a> --> </span>
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
<link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.css" />
    <script data-require="jquery@*" data-semver="2.1.4" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script data-require="sweet-alert@*" data-semver="0.4.2" src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>

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
                        window.location = "<?php echo base_url("user/delete");?>/"+id;
                    });
                    
                } else {
                    swal("Cancelled,hello");
                }
            }); 

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



 $('#submt').on('click',function(e){
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

    $('#form').submit();
});

    
    
  /*  function del_family(id,ele){ 
        if(confirm('Want to Delete'))
        {
        var data = {id:id};
        //console.log(data);
        $.ajax({

            type:"POST",
            url:"<?php // echo base_url(); ?>user/delete",
            data:data,
            success:function(res)
            {  console.log(ele.parent().parent().remove());
                return false;
             //  window.location="<?php // echo base_url('user/family'); ?>";
            }
        });
        return false;
        }
        else
        {
            return false;
        }
    } */

    $('#contnu').on('click',function(){

        var list = $.parseJSON($('#list').val());
        var rel = $.parseJSON($('#rel').val());
        var id = new Array();
        var name= new Array();
        var i=0;
        $.each(rel,function(k,v){
           if(v['name']=="Son"){
                 $.each(list,function(key,ele){
              if(ele['relationship'] == v['rel_id'])
              {
                    if(ele['marital_status'] == "Married")
                    {
                       //alert(1);  //status.push(ele['marital_status']);
                         //name.push(ele['name']);
                         name = ele['name'];
                         if(confirm(name + ' ,You want to enter Wife details'))
                             {
                           window.location="<?php echo base_url('user/family');?>";
                            }
                         else{ 
                           window.location="<?php echo base_url('user/property');?>";
                              }
                         
                    }
                    else
                     {
                          window.location="<?php echo base_url('user/property');?>"; 
                     } 
					 return false;
				
              } 
			  else
                     {
                          window.location="<?php echo base_url('user/property');?>"; 
                     } 
                	// alert(2); 
                  }); }
            else
            {
              // window.location="<?php echo base_url('user/property');?>"; 
            } 

        });
        
   

     });
	 
	
  </script>
