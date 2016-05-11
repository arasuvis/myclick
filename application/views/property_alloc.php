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
                       
                      <?php if(isset($allpro->property_id)) $var = 'user/update_property_alloc'; else $var = 'user/add_property_alloc'; ?>
                       <form action="<?php echo base_url($var);?>" method="post" name="prop_alloc">
                       <input type="hidden" name="action" value="<?php if(isset($allpro->property_id)) echo "edit"; else echo "add";?>"></input>

                       <input type="hidden" name="grantid" value="<?php if(isset($grantid)) echo $grantid;?>" ></input>
                        <label>Property Type</label>
                       <div class="propert_detailss move">
                                <div class="radio2">
                                    <input class="mychoice" id="alive" name="status" value="alive" checked="" type="radio">
                                    <label for="alive">Allocation</label>
                                    <input class="mychoice" id="dead" name="status" value="dead" type="radio">
                                    <label for="dead">In Case of Death</label>
                                </div>
                            </div>
                       

                          <div class="allocation_form">
                            <div class="row">
                              <div class="col-md-7" >
                                  <label>Select Property</label><br>
                                  <div id="immov">
                                   <div class="allocation_style">
                                  <?php  //print_r($allpro); die(); ?>
                                  <select name="property_id" id="immove_prop" <?php if(isset($allpro->property_id)) echo "disabled"; ?> >
                                  <option value="none"></option>
                                  <?php foreach($immov as $im) {  ?>
                                  <option data="<?php echo $im->Immovable_id; ?>" value="<?php echo $im->Immovable_id; ?>" <?php if(isset($allpro->property_id)) if($allpro->property_id == $im->prop_id) {
                                    echo "selected";} ?> > <?php echo $im->prop_name; ?></option>
                                  <?php } ?> 
                                  </select>
                                </div>
                                <span id="error_immove" class="error"></span>
                                </div>
                                 
                                    <br>
                                     <label>Select Family Member</label><br>
                                    <div class="allocation_style">
                                        <select name="fam_id" id="fam" <?php if(isset($allpro->fam_id)) echo "disabled"; ?>>
                                        <option value="none"></option>
                                        <?php  foreach($fam_a as $fa) {  ?>
                                        <option value="<?php echo $fa->id; ?>" <?php if(isset($allpro->fam_id)) if($allpro->fam_id == $fa->id) {echo "selected";} ?> > <?php echo $fa->name; ?></option>
                                        <?php } ?>
                                        </select>
                                       
                                    </div>
                                     <div><span id="error_fam" class="error"></span></div>
                                    <br>
                                    <div class="allocation_names">
                                      <div class="row">
                                        <div class="col-md-6">
                                            <label>Relationship</label><br>
                                            <input type="text" id="rel" value="<?php if(isset($allpro->rel_name)) echo $allpro->rel_name; ?>" readonly name="rel">
                                            <input type="text" hidden id="rel_id"  name="rel_id">
                                        </div>
                                        <span id="error_rel" class="error"></span>
                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col-md-6">
                                            <label>Gender</label><br>
                                            <input type="text" id="gen" value="<?php if(isset($allpro->gender)) echo $allpro->gender; ?>" readonly name="gen">
                                        </div>
                                        <span id="error_gen" class="error"></span>
                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col-md-6">
                                            <label>Date of birth</label><br>
                                            <input type="text" id="dob" value="<?php if(isset($allpro->dob)) echo $allpro->dob; ?>" readonly name="dob">
                                            <span id="error_dob" class="error"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Marital status</label><br>
                                            <input type="text" id="marital" value="<?php if(isset($allpro->marital_status)) echo $allpro->marital_status; ?>" readonly name="marital">
                                            <span id="error_marital" class="error"></span>
                                        </div>

                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <label>Remaining property allocation</label><br>
                                          <div class="percent">
                                            <input type="text" id="per" readonly name="percent" value="<?php if(isset($rem->remainder)) echo 100 - $rem->remainder ?>" >
                                            <span>%</span>
                                          </div>
                                          <span id="error_p" class="error"></span>
                                        </div>
                                        <div class="col-md-6">
                                          <label>Enter property allocation</label><br>
                                          <div class="percent">
                                            <input type="text" id="myallocation" name = "myallocation" value="<?php if(isset($allpro->percent)) echo $allpro->percent; ?>" >
                                            <input type="text" hidden id="data" value="<?php if(isset($allpro->percent)) echo $allpro->percent; ?>" name="data">
                                            <span>%</span>
                                          </div>
                                           <span id="error_per" class="error"></span>
                                        </div>
                                      </div>
                                      </div>
                                      </div>



                       <div class="col-md-5">
                                    <div id="prop_details" class="prop_details" style="display:none">
                                      <center><h5>Property Allocation Details</h5></center>
                                        <ul class="details mytest123">
                                         
                                          </ul>
                                    </div>
                                </div>
                                </div>
                                <br><br><br>


                                <div class="form-group col-md-12">
                <ul class="list-inline text-center marbtm0">
                  <li>
                    <button class="btn  saveAndCon" id="submt" type="submit">Save &amp; Add More
                    </button>
                  </li>
                  <li class="hidden-xs hidden-sm">Or</li>
                  <li>
                    <button class="btn btn-warning Continue-btn1" id="contnu" type="button">Continue &gt;&gt;</button>
                   
                  </li>
                </ul>
                
                           </div> 
                               
                          </div>
                                  <!--     dead section starts here -->
   
          <div class="dead-section" style="display:none">
                            <div class="row">
                              <div class="col-md-7" style="padding-left: 0px;">
                                 <label>Select Family Member</label><br>
                                    <div class="allocation_style">
                                         <select name="fam_id_d" id="fam_d">
                                        <option value="none"></option>
                                        <?php  foreach($fam_a as $fa) {  ?>
                                        <option value="<?php echo $fa->id; ?>"> <?php echo $fa->name; ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    <span id="error_fam_d" class="error"></span>
                                    <br>

                                    <div class="allocation_names">
                                      <div class="row">
                                        <div class="col-md-6">
                                            <label>Relationship</label><br>
                                           <input type="text" id="rel_d" value="" readonly name="rel_d">
                                            <input type="text" hidden id="rel_d_id" value="" name="rel_d_id">
                                        </div>
                                        <span id="error_rel_d" class="error"></span>
                                      </div>

                                      <br>
                                      <div class="row">
                                        <div class="col-md-6">
                                            <label>Gender</label><br>
                                           <input type="text" id="gen_d" readonly name="gen_d">
                                        </div>
                                        <span id="error_gen_d" class="error"></span>
                                        <div class="col-md-6">
                                           
                                        </div>
                                      </div>
                                      <br>

                                      <div class="row">
                                        <div class="col-md-6">
                                            <label>Date of birth</label><br>
                                           <input type="text" id="dob_d" readonly name="dob_d">
                                            <span id="error_dob_d" class="error"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Marital status</label><br>
                                           <input type="text" id="marital_d" readonly name="marital_d">
                                            <span id="error_marital_d" class="error"></span>
                                        </div>
                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <label>Enter property allocation</label><br>
                                          <div class="percent">
                                            <input type="text" id="per_d" name="percent_d" >
                                            <span>%</span>
                                          </div>
                                          <span id="error_percent_d" class="error"></span>
                                        </div>
                                        <div class="col-md-6 text-right">
                                          <button class="btn dead-Addmore" id="add_more">&plus;&nbsp;Add More</button>
                                        </div>
                                      </div>

                                      <br>
                                      </div>
                              </div>
                                

          <div class="col-md-5">
                <div class="prop_details">
                    <center><h5>Property Allocation Details</h5></center>
                         <ul class="details">
                             <li>
                                <div class="row">
                                   <div class="col-md-8 col-xs-8">
                                       <p>Name</p>
                                     </div>
                                  <div class="col-md-4 col-xs-4">
                                      <p>Allocated</p>
                                  </div>
                                  <div class="col-md-8 col-xs-8">
                                       <p>Priority 1</p>
                                     </div>
                                  <div class="col-md-4 col-xs-4">
                                      <p id = "prio_1"></p>
                                  </div>
                                  <div class="col-md-8 col-xs-8">
                                       <p>Priority 2</p>
                                     </div>
                                  <div class="col-md-4 col-xs-4">
                                      <p id ="prio_2"></p>
                                  </div>
                                  </div>
                              </li>
                           
                          </ul>
                    </div>
                </div>
              </div>
          </div>

          <!--     dead section ends here -->
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
            <div id="home" class="tab-pane fade in active faq-scroll" >
            
              <div class="container-fluid ">
    <div class="panel-group" id="faqAccordion">
         <div class="panel panel-default">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
              <h4 class="panel-title">
                    <a href="#" class="ing">Q: What's on the BootBundle Roadmap?</a>
              </h4>
            </div>
            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
              <div class="panel-body">
                    <h5><span class="label label-primary">Answer</span></h5>
                    <p>Although BootBundle was built with the Bootstrap developer in mind, we're working on sustainability. We're working to include components in the bundle that utilize HTML5, CSS3 and JavaScript features that will be sustainable down the road. We'll continue to add features, and re-bundle as components are updated periodically.</p>
              </div>
            </div>
          </div><div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
              <h4 class="panel-title">
                    <a href="#" class="ing">Q: What is the size of the bundle?</a>
              </h4>
            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
              <div class="panel-body">
                    <h5><span class="label label-primary">Answer</span></h5>
                    <p>The free bundle is ~64 MB and the premium (ultimate) bundle is ~133 MB.</p>
              </div>
            </div>
          </div><div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
              <h4 class="panel-title">
                    <a href="#" class="ing">Q: What's the difference between a "template" and a "theme"?</a>
              </h4>
            </div>
            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
              <div class="panel-body">
                    <h5><span class="label label-primary">Answer</span></h5>
                    <p>The term "Theme" is overused, and often mistaken for a working "Template". There are numerous
theme Websites that in fact market working templates and not just a "Theme". In this context, a Theme is only the style layer or "skin". A theme is defined by a CSS (LESS or SASS) stylesheet
that is designed for use withing a snippet or template. "Templates" are often used to demonstrate
"Themes".</p>
              </div>
            </div>
          </div><div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
              <h4 class="panel-title">
                    <a href="#" class="ing">Q: What's the difference between a "template" and a "snippet"?</a>
              </h4>
            </div>
            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
              <div class="panel-body">
                    <h5><span class="label label-primary">Answer</span></h5>
                    <p>A template contains a broad set of features, whereas a snippet generally demonstrates a single feature. A "snippet" may demonstrate any type of functionality, but usually with a singular purpose.</p>
              </div>
            </div>
          </div><div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question7">
              <h4 class="panel-title">
                    <a href="#" class="ing">Q: 
What is the license?</a>
              </h4>
            </div>
            <div id="question7" class="panel-collapse collapse" style="height: 0px;">
              <div class="panel-body">
                    <h5><span class="label label-primary">Answer</span></h5>
                    <p>Each component (unit in the bundle) has it's own license terms. Most are MIT, CC and GNU Public.</p>
              </div>
            </div>
          </div><div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question8">
              <h4 class="panel-title">
                    <a href="#" class="ing">Q: How frequently is there a new release?</a>
              </h4>
            </div>
            <div id="question8" class="panel-collapse collapse" style="height: 0px;">
              <div class="panel-body">
                    <h5><span class="label label-primary">Answer</span></h5>
                    <p>In short, it depends. BootBundle will be re-released when a significant number of components change and release new features.</p>
              </div>
            </div>
          </div><div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question11">
              <h4 class="panel-title">
                    <a href="#" class="ing">Q: Do you provide support?</a>
              </h4>
            </div>
            <div id="question11" class="panel-collapse collapse" style="height: 0px;">
              <div class="panel-body">
                    <h5><span class="label label-primary">Answer</span></h5>
                    <p>Support is provided on the bundle as a whole, and downloading it. <a href="#" data-target="#modalContact" data-toggle="modal">Just contact us</a>. However, bundle components are supported by their individual author / creator.</p>
              </div>
            </div>
          </div><!--/panel-->
    </div><!--/panel-group-->
</div>
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
         
 <!-- <?php // foreach($immov as $im) {  ?>
                                  <input  id="prop_<?php // echo $im->Immovable_id; ?>" value="100">
                                  <?php // }   ?>   -->
<link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="<?php echo base_url('css/sweet-alert.min.css'); ?>" />

<script data-require="sweet-alert@*" data-semver="0.4.2" src="<?php echo base_url('js/sweet-alert.min.js'); ?>"></script>
<script>
$(document).ready(function(){ 
  var str = '<?php echo $this->uri->segment(5,0); ?>';
  if(str == "edit" ){
  if($('#per').val() == 0){
    $('#myallocation').attr('readonly','true');

  }
}


});
/*$('#immove_prop').on('change',function(){
  var mydata=0;
     $.each($(this).children(),function(k,v){
          if($(this).is(':selected')){
            mydata = $(this).attr('data');
          }
     }); 
     $('#per').val($('#prop_'+mydata).val());
 });*/

/*
$('#immove_prop').on('change',function(){
  var mypropid = $(this).val();
  $.each($('#immove_prop').children(),function(k,v){
    if($(this).val() == mypropid){
      $('#value').val($(this).attr('data'));
    } 
  });
});*/

/*$('#myallocation').on('change',function(){ 
  alert($('#myallocation').val());
  alert($('#per').val());
if( ($('#myallocation').val()) > ($('#per').val()) ) {
                    console.log($('#myallocation').val());
                    console.log($('#per').val());
                    return false;
                  }
}); */

$('#add_more').on('click',function(){ 
if($('#fam_d').val()== 'none')
{
  $('#error_fam_d').html('Select option');
  return false;
}

if($('#per_d').val() == '')
{
  $('#error_percent_d').html('No Property Allocated');
  return false;
}
var per =  parseInt($('#per_d').val()) / 2;

 $('#prio_1').html(per);
 $('#prio_2').html(per);

});


$('#contnu').on('click',function(){ 
$.ajax({

            type:"POST",
            url:"<?php echo base_url(); ?>user/comp_det",
            success:function(res)
            { 
              if(res == 1){ console.log("true");}
              else{ alert('some property not allocated'); }
             //console.log(res);
            }
        });

});

$('.mychoice').on('click',function(){
     if($(this).val()== 'alive'){
      $('.allocation_form').show();
       $('.dead-section').hide();
        }else{
          $('.allocation_form').hide();
       $('.dead-section').show();

           }

  })


$('#fam_d').on('change',function(){
var id = $('#fam_d').val();

$.ajax({

            type:"POST",
            url:"<?php echo base_url(); ?>user/get_dead_details",
            data: {id:id},
            dataType:"json",
            success:function(res)
            { 
              $('#error_percent_d').html('');
              $('#rel_d').attr('value',res.rel_name);
              $('#gen_d').attr('value',res.gender);
              $('#dob_d').attr('value',res.dob);
              $('#marital_d').attr('value',res.marital_status);
              $('#rel_id_d').attr('value',res.relationship);
              $('#per_d').attr('value',res.percent);
              var per = $('#per_d').val();
              if(per == '')
              {
                $('#error_percent_d').html('No Property Allocated');
                return false;
              }

            }
        });

 });


$('#fam').on('change',function(){
var id = $('#fam').val();
var im_id = $('#immove_prop').val();



$.ajax({

            type:"POST",
            url:"<?php echo base_url(); ?>user/get_details",
            data: {id:id,im_id:im_id},
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
                  
                $('#fam').children().each(function(k,l){
                  if($(this).is(':selected')){
                      $(this).attr('selected',false);
                  }
                });
                $('#rel').attr('value','');
                $('#gen').attr('value','');
                $('#dob').attr('value','');
                $('#marital').attr('value','');
                $('#rel_id').attr('value','');

               }
              else{
              $('#rel').attr('value',res.rel_name);
              $('#gen').attr('value',res.gender);
              $('#dob').attr('value',res.dob);
              $('#marital').attr('value',res.marital_status);
              $('#rel_id').attr('value',res.relationship); }
            }
        });

 });

$('#immove_prop').on('change',function(){
var id = $('#immove_prop').val();
$('#prop_details').show();

$.ajax({

            type:"POST",
            url:"<?php echo base_url(); ?>user/get_property_details",
            data: {id:id},
            dataType:"json",
            success:function(res)
            { 
              $('#per').attr('value',res);
              $('#per').attr('readonly',true);

              if(res == 0){
                $('#myallocation').attr('readonly',true);
              }else{
                $('#myallocation').attr('readonly',false);
              } 
              

            }
        });

 });

$('#immove_prop').on('change',function(){
var id = $('#immove_prop').val();

$.ajax({

            type:"POST",
            url:"<?php echo base_url(); ?>user/details",
            data: {id:id},
            dataType:"json",
            success:function(res)
            { 
              var str = "";
              $.each(res,function(k,v){ 

                str += '<li><div class="row" id = "a_details"><div class="col-md-8 col-xs-8"><p id="d_name">'+v.name+'</p><span id="edit_edit"><a href="<?php echo base_url('user/edit_alloc/\' +v.grant_im_id+\'/\' +id+\'/edit'); ?>">Edit</a> | <a href="<?php echo base_url('user/del_alloc/\' +v.grant_im_id+\'/\' +id+\' '); ?>">Delete</a></span></div><div class="col-md-4 col-xs-4"><p>Allocated</p><span id="d_per">'+v.percent+'</span></div></div></li>';
               
              });
              $('.mytest123').html(str);
            }
        });

 });

// $('.mytest123').on('click','#edit_edit',function(){ 
//  $('form[name=prop_alloc] input[name=action]').val("edit");
//  console.log($('form[name=prop_alloc] input[name=action]').val()); 
// });
/* $('#subm').on('click',function(e){
                    e.preventDefault();
                      var alloc = $('#myallocation').val();
                      var rem = $('#per').val();
                      var mydata = 0;
                       $.each($('#immove_prop').children(),function(k,v){
                        
                            if($(this).is(':selected')){
                              mydata = $(this).attr('data');
                            }
                       }); 
                      if(rem-alloc < 0){
                         alert("please enter proper allocations");
                      }else{
                        $('#per').val(rem-alloc);
                        
                        $('#prop_'+mydata).val(rem-alloc);
                        var p = $('#per').val();
                        var pid= $('#immove_prop').val();
                        var fid= $('#fam').val();                      
                        var rid = $('#rel_id').val();
                        var alloc = $('#myallocation').val();
                        console.log($('#myallocation').val());
                        $.ajax({

                        type:"POST",
                        url:"<?php // echo base_url(); ?>user/add_property_alloc",
                        data: {property_id:pid, fam_id:fid, rel_id:rid , myallocation:alloc , imid:mydata },
                        dataType:"json",
                        success:function(res)
                        {  
                         // $('#d_name').attr('class',res.name);
                          //$('#d_per').attr('class',res.percent);
                          location.reload();
                        }
                         });


                        

                         }
                         

}); */

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

// $('#submt').on('click',function(e){ 
  $('form[name="prop_alloc"]').on('submit', function(event){
                 var per = /^[0-9]+$/;
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

                  if($('#per').val() == '')
                  {
                     $('#error_p').html("Enter Percentage");
                    $('#per').focus(); return false;}

                  if($('#myallocation').val() == ''){
                      $('#error_per').html("Enter Percentage");
                      $('#myallocation').focus(); return false;
                    }
                    if(! (per.test($('#myallocation').val()))) {
                      $('#error_per').html("Enter only Numbers");$('#per').focus(); return false;
                    }
                  
                  if ($('form[name=prop_alloc] input[name=action]').val() == "add") {
                      
                    if( parseInt($('#myallocation').val()) > parseInt($('#per').val()) ) {
                        $('#error_per').html("Enter Valid Percentage");
                        return false;
                    }
                  }
                  else{
                    var rem = parseInt($('#per').val());
                    var before = parseInt( $('#data').val() );
                    var after = parseInt($('#myallocation').val());
                    var range = rem + before;
                    
                    if(after > range)
                    {
                      $('#error_per').html("Enter Valid Percentage");
                      return false;
                    }
                    else
                    {
                      alert('valid');
                    } 
                  }


              });
                  
</script>
