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
                      
                       <label>Property Type</label>
                       <div class="propert_detailss move">
                                <div class="radio2">
                                    <input class="mychoice" id="alive" name="status" value="alive" checked="" type="radio">
                                    <label for="alive">Allocation</label>
                                    <input class="mychoice" id="dead" name="status" value="dead" type="radio">
                                    <label for="dead">In Case of Death</label>
                                </div>
                            </div>

                       <form action="" id="form" method="post" name="prop_alloc">
                   
                          <div class="allocation_form">
                            <div class="row">
                              <div class="col-md-7" >
                              <input type="text" id="g_im_id" readonly hidden value="" name="g_im_id">
                                  <label>Select Property</label><br>
                                  <div id="immov">
                                   <div class="allocation_style">
                                  <select name="property_id" id="immove_prop"  >
                                  <option value="none"></option>
                                  <?php foreach($immov as $im) {  ?>
                                  <option data="<?php echo $im->Immovable_id; ?>" value="<?php echo $im->name; ?>" > <?php echo $im->prop_name; ?></option>
                                  <?php } ?> 
                                  </select>
                                </div>
                                <span id="error_immove" class="error"></span>
                                </div>
                                
                                    <br>
                                     <label>Select Family Member</label><br>
                                    <div class="allocation_style">
                                        <select name="fam_id" id="fam" >
                                        <option value="none"></option>
                                        <?php  foreach($fam_a as $fa) {  ?>
                                        <option value="<?php echo $fa->id; ?>" ><?php echo $fa->name; ?></option>
                                        <?php } ?>
                                        </select>
                                       
                                    </div>
                                     <div><span id="error_fam" class="error"></span></div>
                                    <br>
                                    <div class="allocation_names">
                                      <div class="row">
                                        <div class="col-md-6">
                                            <label>Relationship</label><br>
                                            <input type="text" id="rel" value="" readonly name="rel">
                                            <input type="text" hidden id="rel_id"  name="rel_id">
                                        </div>
                                        <span id="error_rel" class="error"></span>
                                      </div>
                                      <br>
                                      <div id = "hide_others">
                                      <div class="row">
                                        <div class="col-md-6">
                                            <label>Gender</label><br>
                                            <input type="text" id="gen" value="" readonly name="gen">
                                        </div>
                                        <span id="error_gen" class="error"></span>
                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col-md-6">
                                            <label>Date of birth</label><br>
                                            <input type="text" id="dob" value="" readonly name="dob">
                                            <span id="error_dob" class="error"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Marital status</label><br>
                                            <input type="text" id="marital" value="" readonly name="marital">
                                            <span id="error_marital" class="error"></span>
                                        </div>
                                      </div>
                                      </div>
                                      <div id="show_others" style="display: none">
                                      <div class="col-md-6">
                                       <label>Comments</label>
                                      <textarea rows="5" readonly id="comments" name="comments" class="form-control custom-textarea"></textarea>
                                      <span id="error_comments" class="error"></span>
                                        </div>
                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <label>Remaining property allocation</label><br>
                                          <div class="percent">
                                            <input type="text" id="per" readonly name="percent" value="" >
                                            <span>%</span>
                                          </div>
                                          <span id="error_p" class="error"></span>
                                        </div>
                                        <div class="col-md-6">
                                          <label>Enter property allocation</label><br>
                                          <div class="percent">
                                            <input type="text" id="myallocation" name = "myallocation" value="" data="" >
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
                                      
                                        <ul class="details mytest123" id="p_all_list">
                                        
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
                                    <input type="text" id="dead_id" hidden value="" readonly name="dead_id">
                                    <div class="allocation_names">
                                      <div class="row">
                                        <div class="col-md-6">
                                            <label>Relationship</label><br>
                                           <input type="text" id="rel_d" value="" readonly name="rel_d">
                                            <input type="text" hidden  id="rel_d_id" value="" name="rel_d_id">
                                        </div>
                                        <span id="error_rel_d" class="error"></span>
                                      </div>

                                      <br>
                                      <div id="dead_hide_others">
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
                                      </div>

                                      <div id="dead_show_others" style="display: none">
                                      <div class="col-md-6">
                                       <label>Comments</label>
                                      <textarea rows="5" readonly id="dead_comments" name="dead_comments" class="form-control custom-textarea"></textarea>
                                      <span id="error_comments_dead" class="error"></span>
                                        </div>
                                      </div>
                                      
                                      <br>
                                      <div class="row">
                                                                                 
                                        <div class="col-md-6">
                                          <label>Remaining property allocation</label><br>
                                          <div class="percent">
                                            <input type="text" id="rem_d" name="rem_d" value="">
                                            <span>%</span>
                                            </div>
                                          <label>Enter property allocation</label><br>
                                          <div class="percent">
                                            <input type="text" data="" id="per_d" name="percent_d" value="" >
                                            <span>%</span>
                                          </div>
                                          <span id="error_percent_d" class="error"></span>
                                        </div>
                                        <div class="col-md-7 text-right">
                                          <button class="btn dead-Addmore" id="add_more"><!-- &plus;&nbsp; --> Save &amp; Add More</button>
                                          <button class="btn dead-Addmore" style="display:none" id="save_edit_dead">Save</button>
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
                                 
                                  <div id="dead_alloc_details">
                                   <?php foreach ($dead as $d) { ?> 
                                   <div class="myid_<?php echo $d->dead_id; ?>">
                                    <div class=" col-md-8 col-xs-8">
                                    <p class="nam"><?php echo $d->name; ?></p>
                                    <span class="edit_dead" data ="<?php echo $d->dead_id; ?>" style="cursor:pointer;color:#187aff" fam="<?php echo $d->fam_id; ?>">Edit</span> | 
                    <span class="deleterec" style="cursor:pointer;color:#187aff" id="<?php echo $d->dead_id; ?>">Delete</span>
                                    </div>
                                    <div class=" col-md-4 col-xs-4">
                                    <p class="num"><?php echo $d->percentage; ?> </p>
                                    </div>
                                  </div>
                                  <?php } ?>
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




$('.mychoice').on('click',function(){
     if($(this).val()== 'alive'){
      $('.allocation_form').show();
       $('.dead-section').hide();
        }else{
          $('.allocation_form').hide();
       $('.dead-section').show();

           }

  })

  $('#submt').on('click', function(eve){
    eve.preventDefault();
                  $('.error').html('');
                 var per = /^[0-9]+$/;
                  if($('#immove_prop').val()=='none'){
                  $('#error_immove').html('Please, choose an option');
                  $('#immove_prop').focus(); return false; }

                  if($('#fam').val()=='none'){
                  $('#error_fam').html('Please, choose an option');
                  $('#fam').focus(); return false; }

                  if($('#rel').val() == ''){
                  $('#error_rel').html("Enter Relationship"); $('#rel').focus(); return false; }

                  if($('#rel').val() == 'Others'){
                    if($('#comments').val() == ''){
                  $('#error_comments').html("Enter Comments"); $('#comments').focus(); return false; }
                  } 

                  else{
                  if($('#gen').val() == ''){
                  $('#error_gen').html("Enter Gender"); $('#gen').focus(); return false; }

                  if($('#dob').val() == ''){
                  $('#error_dob').html("Enter DOB"); $('#dob').focus(); return false; }

                  if($('#marital').val() == ''){
                  $('#error_marital').html("Enter Marital Status"); $('#marital').focus(); return false; } }

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
                      
                    if($('#submt').hasClass("saveAndCon")){
                    if( parseInt($('#myallocation').val()) > parseInt($('#per').val())  ) {
                        $('#error_per').html("Enter Valid Percentage");
                        return false;
                    } }
                    else if($('#submt').hasClass("edit_save")){
                       var rem = parseInt($('#per').val());
                        var before = parseInt( $('#myallocation').attr('data') );
                        var after = parseInt($('#myallocation').val());
                        var range = rem + before;
                        
                        if(after > range)
                        {
                          $('#error_per').html("Enter Valid Percentage");
                          return false;
                        }

                    }

                    

                    if($('#submt').hasClass("saveAndCon")){
                      var p_alloc_data = $('#form').serialize();

                      $.ajax({ 
                        type:"post",
                        data:{p_alloc_data},
                        url:"<?php echo base_url('user/add_property_alloc'); ?>" ,
                        success: function(res){ 
                          var a = $.parseJSON(res);
                          var grant_im_id = a.p.grant_im_id;
                          var name = a.p.name;
                          var percent = a.p.percent;
                          var str='';
                          str +='<li class="myid_'+grant_im_id+'"><div class="col-md-8 col-xs-8"><p class="d_name">'+name+'</p><span class="edit_edit" style="cursor:pointer;color:#187aff" data ="'+grant_im_id+'">Edit </span>| <span class="delete" style="cursor:pointer;color:#187aff" id="'+grant_im_id+'">Delete</span></div><div class="col-md-4 col-xs-4"><p>Allocated</p><span class="d_per">'+percent+'</span></div></li>';

                          $('#p_all_list').html(str);

                            $('#immove_prop').children().each(function(){ 
                                if($(this).is(':selected')){
                                $(this).prop('selected',false) }
                            });    
                            $('#fam').children().each(function(){ 
                                if($(this).is(':selected')){
                                $(this).prop('selected',false) }
                            });    
                            $('#rel').attr('value','');
                            $('#gen').attr('value','');
                            $('#dob').attr('value','');
                            $('#marital').attr('value','');
                            $('#rel_id').attr('value','');
                            $('#comments').html('');
                            $('#myallocation').val('');
                            $('#per').val('');

                            swal({
                                title: 'Successfully Added!',
                                type: 'success'
                            }); 
                            $('#prop_details').hide();
                            $('#hide_others').show();
                            $('#show_others').hide();


                         } });
                        } 

           else if($('#submt').hasClass("edit_save")){
                var id = $('#g_im_id').val();
                var data = $('#myallocation').attr('data');
                var details = $('#form').serialize();

                 $.ajax({ 
                  type:"post",
                  data:{id,details,data},
                  url:"<?php echo base_url('user/update_property_alloc'); ?>",
                  success: function(res){ 
                    if(res == 2)
                      {
                        alert('something went wrong');
                      }
                      else{
                        $('#immove_prop').children().each(function(){ 
                                if($(this).is(':selected')){
                                $(this).prop('selected',false) }
                            });
                         $('#immove_prop').prop('disabled',false);   
                            $('#fam').children().each(function(){ 
                                if($(this).is(':selected')){
                                $(this).prop('selected',false) }
                            }); 
                          $('#fam').prop('disabled',false);   
                            $('#rel').attr('value','');
                            $('#gen').attr('value','');
                            $('#dob').attr('value','');
                            $('#marital').attr('value','');
                            $('#rel_id').attr('value','');
                            $('#comments').html('');
                            $('#myallocation').val('');
                            $('#per').val('');
                            $('#g_im_id').val('');

                        var a = $.parseJSON(res);
                        var id = a.p.grant_im_id;
                        var percent = a.p.percent;
                        
                        $('#p_all_list').children().each(function(){ 

                          var clas = $(this).attr('class');
                          var r = clas.split("_");
                          var val = r[1];

                          if(r[1] == id){
                            $(this).children().next().children().first().next().html(percent);
                          }
                          swal({
                              title: 'Successfully Updated!',
                              type: 'success'
                          }); 
                          $('#prop_details').hide();
                          $('#hide_others').show();
                          $('#show_others').hide();
                          $('#submt').removeClass('edit_save');
                          $('#submt').addClass('saveAndCon');
                          
                        });
                      }
                  } }); 
          }        
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
                if(res.rel_name == "Others" ){
                  $('#hide_others').hide();
                  $('#show_others').show();
                  $('#rel').attr('value',res.rel_name);
                  $('#rel_id').attr('value',res.relationship);
                  $('#comments').html(res.comments)
                 }
                else { 
                  $('#hide_others').show();
                  $('#show_others').hide();
                   $('#rel').attr('value',res.rel_name);
                    $('#gen').attr('value',res.gender);
                     $('#dob').attr('value',res.dob);
                     $('#marital').attr('value',res.marital_status);
                      $('#rel_id').attr('value',res.relationship);
          } }
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
              $('#per').val(res);
              $('#per').attr('readonly',true);
            }
        });

 });

   $('#immove_prop').on('change',function(){
var id = $('#immove_prop').val();
$('#prop_details').show();
 
$.ajax({

            type:"POST",
            url:"<?php echo base_url(); ?>user/get_property_list",
            data: {id:id},
            success:function(res)
            { 
              $('#p_all_list').html('');
              var str='';
              if(res == 2){
              str = '<div>No Records</div>';
              $('#p_all_list').append(str);
            }
            else{
              var a = $.parseJSON(res);             
              var i =0;
              $.each(a,function(k,v){
                  str += '<li class="myid_'+v.grant_im_id+'"><div class="col-md-8 col-xs-8"><p class="d_name">'+v.name+'</p><span class="edit_edit" style="cursor:pointer;color:#187aff" data ="'+v.grant_im_id+'" pid="'+v.prop_id+'">Edit </span>| <span class="delete" style="cursor:pointer;color:#187aff" id="'+v.grant_im_id+'">Delete</span></div><div class="col-md-4 col-xs-4"><p>Allocated</p><span class="d_per">'+v.percent+'</span></div></li>';
              })
              $('#p_all_list').append(str);

               
            }
            } 
          });
});

    $('#p_all_list').on('click','.edit_edit',function(){
    var id = $(this).attr('data');
    var pid = $(this).attr('pid');

    $.ajax({ 
      type:"post",
      data:{id:id,pid:pid},
      url:"<?php echo base_url('user/edit_alloc'); ?>",
      success: function(res){
        if(res == 2){
          alert('something went wrong');
        }
        else{
          var a = $.parseJSON(res);  
          $('#immove_prop').children().each(function(){ 
                          var p = $(this).attr('value');
                          if( p == a.allpro.property_id)
                          {
                            $(this).prop('selected',true);
                          }
                        });
           $('#fam').children().each(function(){ 
                          var f = $(this).attr('value');
                          if( f == a.allpro.fam_id)
                          {
                            $(this).prop('selected',true);
                          }
                        });  
              $('#g_im_id').val(a.allpro.grant_im_id);
              $('#rel').attr('value',a.allpro.rel_name);
              $('#rel_id').attr('value',a.allpro.rel_id);

              if(a.allpro.comments == null){
                $('#hide_others').show();
                $('#show_others').hide();
              $('#gen').attr('value',a.allpro.gender);
              $('#dob').attr('value',a.allpro.dob);
              $('#marital').attr('value',a.allpro.marital_status);}
              else{
                $('#hide_others').hide();
                $('#show_others').show();
               $('#comments').html(a.allpro.comments); 
              }
              
              $('#myallocation').val(a.allpro.percent);
              $('#myallocation').attr('data',a.allpro.percent);

              $('#immove_prop').attr('disabled',true);
              $('#fam').attr('disabled',true);
              $('#g_im_id').attr('readonly',true);
              $('#rel').attr('readonly',true);
              $('#gen').attr('readonly',true);
              $('#dob').attr('readonly',true);
              $('#marital').attr('readonly',true);
              $('#rel_id').attr('readonly',true);
          
              $('#submt').addClass('edit_save');
              $('#submt').removeClass('saveAndCon');
        }
      }
    });

  });

 $('#p_all_list').on('click','.delete',function(e){ 
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
                    url: "<?php echo base_url("user/del_alloc");?>",
                    type: "POST",
                    data: { id: id },
                    success: function(res) {
                      if(res == 2){ swal("Oops!", "Something went wrong", "warning") } 
                      else{
                        swal("Done!", "It was succesfully deleted!", "success");

                        $('#immove_prop').children().each(function(){ 
                                if($(this).is(':selected')){
                                $(this).prop('selected',false) }
                            });
                         $('#immove_prop').prop('disabled',false);   
                            $('#fam').children().each(function(){ 
                                if($(this).is(':selected')){
                                $(this).prop('selected',false) }
                            }); 
                          $('#fam').prop('disabled',false);   
                            $('#rel').attr('value','');
                            $('#gen').attr('value','');
                            $('#dob').attr('value','');
                            $('#marital').attr('value','');
                            $('#rel_id').attr('value','');
                            $('#comments').html('');
                            $('#myallocation').val('');
                            $('#per').val('');
                            $('#g_im_id').val('');

                        
                        var a = $.parseJSON(res);
                        var id = a.id;
                        $('#p_all_list').children().each(function(){ 

                          var clas = $(this).attr('class');
                          var r = clas.split("_");
                          var val = r[1];

                            if(r[1] == id){
                              $(this).remove();
                            }
                          $('#prop_details').hide();
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

                $('#hide_others').show();
                $('#show_others').hide();
            }); 

});
 
 $('input[name="status"]').on('change',function(){ 

  $('input[type=text]').attr('value','');
  $('#form')[0].reset();
                         
 }); 
    
    $('#fam_d').on('change',function(){
var id = $('#fam_d').val();

$('#rel_d').attr('value','');
$('#gen_d').attr('value','');
$('#dob_d').attr('value','');
$('#marital_d').attr('value','');
$('#rel_id_d').attr('value',''); 

$.ajax({

            type:"POST",
            url:"<?php echo base_url(); ?>user/get_dead_details",
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
                $('#fam_d').children().each(function(){ 
                  if($(this).is(':selected')){
                    $(this).prop('selected',false);
                  }
                });
              }else {
                if(res.rel_name == "Others" ){
                  $('#dead_hide_others').hide();
                  $('#dead_show_others').show();
                  $('#rel_d').attr('value',res.rel_name);
                  $('#rel_d_id').attr('value',res.relationship);
                  $('#dead_comments').html(res.comments)
                 }
                else { 
                  $('#dead_hide_others').show();
                  $('#dead_show_others').hide();
              $('#rel_d').attr('value',res.rel_name);
              $('#gen_d').attr('value',res.gender);
              $('#dob_d').attr('value',res.dob);
              $('#marital_d').attr('value',res.marital_status);
              $('#rel_d_id').attr('value',res.relationship);  } }
            } 
        });

 });

$('.prop_details').on('click','.deleterec',function(e){ 
var id = $(this).attr('id');
             swal({

                title: "Are you sure?",
                text: "You will not be able to recover this record again",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, I am sure!',
                cancelButtonText: "No, cancel it!",
                closeOnConfirm: false,
               

    }, function (isConfirm) {
        if (!isConfirm) return;
        $.ajax({
            url: "<?php echo base_url("user/delete_dead_alloc");?>",
            type: "POST",
            data: { id: id },
            success: function(res) {
              if(res == 1){ swal("Oops!", "Something went wrong", "warning") } 
                else{
                swal("Done!", "It was succesfully deleted!", "success");

                var a = $.parseJSON(res);
                var id = a.id;
                var rem_d = a.rem_p.percent_count;
                $.each($('#dead_alloc_details').children(), function(){
                  var clas = $(this).attr('class');
                  var r = clas.split("_");
                  var v = r[1];
                  
                  if( id == v){
                    $(this).remove();
                  }
                  $('#dead_hide_others').show();
                  $('#dead_show_others').hide();
                  $('#fam_d').children().each(function(){
                  if($(this).is(':selected')){
                    $(this).prop('selected',false)
                  } });
                  $('#fam_d').prop('disabled',false);
                  $('#dead_id').attr('value','');
                  $('#rem_d').attr('value','');
                  $('#rel_d').attr('value','');
                  $('#gen_d').attr('value','');
                  $('#dob_d').attr('value','');
                  $('#marital_d').attr('value','');
                  $('#rel_d_id').attr('value','');
                  $('#per_d').val('');
                  $('#dead_comments').html('');
                  $('#add_more').show();
                  $('#save_edit_dead').hide();
                  $('#rem_d').attr('value',100 - rem_d);

                });
              }
              
            },
            error: function (xhr, ajaxOptions, thrownError) {
                swal("Error deleting!", "Please try again", "error");
            }
        });
    });
});

$('#save_edit_dead').on('click',function(e){
  e.preventDefault();
  $('error').html('');
  var num = /^[0-9]+$/;
  if(! (num.test($('#per_d').val()))) {
      $('#error_percent_d').html("Enter only Numbers");$('#per_d').focus(); return false;
  }

  var dead_id = parseInt($('#dead_id').val());
  var r_per = parseInt($('#rem_d').val());
  var b_per = parseInt($('#per_d').attr('data'));
  var a_per = parseInt($('#per_d').val());
  var tot = r_per + b_per;
  
            
  
  if(a_per <= 0){
     $('#error_percent_d').html("Enter Valid Percentage");
     return false;
  }else {
    $('#error_percent_d').html('');
  }

  if(a_per > tot){
     $('#error_percent_d').html("Enter Valid Percentage");
     return false;
  }else {
    $('#error_percent_d').html('');
  }

  $.ajax({

            type:"POST",
            url:"<?php echo base_url(); ?>user/update_dead_alloc",
            data: {dead_id:dead_id , a_per:a_per},
            success:function(res)
            { 
              if(res == 2)
              {
                alert('something went wrong');
              }else {
                $('#dead_hide_others').show();
                $('#dead_show_others').hide();
                
                $('#fam_d').children().each(function(){
                  if($(this).is(':selected')){
                    $(this).prop('selected',false);
                  } });

                $('#fam_d').prop('disabled',false);
                $('#dead_id').attr('value','');
                $('#rel_d').attr('value','');
                $('#rel_d_id').attr('value','');
                $('#gen_d').attr('value','');
                $('#dob_d').attr('value','');
                $('#marital_d').attr('value','');
                $('#per_d').val('');
                $('#per_d').attr('data','');
                $('#rem_d').attr('value','');
                $('#add_more').show();
                $('#save_edit_dead').hide();

                var a = $.parseJSON(res)
                var alloc= a.alloc.percentage;
                var rem_per = a.per.percent_count;
                var id = a.id;
                $('#rem_d').attr('value',100 - rem_per);
                $.each($('#dead_alloc_details').children() , function(){
                  var clas =$(this).attr('class');
                  var res = clas.split("_"); 
                  if(res[1] == id)
                  {
                      $(this).children().next().children().html(alloc)
                  }
                });

                swal({
                        title: 'Successfully Updated!',
                        type: 'success'
                    }); 
              } 

            }

    });
  

});

$('.prop_details').on('click','.edit_dead',function(){
  $('.error').html('');
 var id = $(this).attr('data'); 
 var fam = $(this).attr('fam'); 
$.ajax({

            type:"POST",
            url:"<?php echo base_url(); ?>user/edit_dead_alloc",
            data: {id:id,fam:fam},
            //dataType:"json",
            success:function(res)
            {
               $('#fam_d').children().each(function(){
                  if($(this).is(':selected')){
                    $(this).prop('selected',false)
                  } });
              $('#rem_d').attr('value','');
              //$('#rem_d').attr('value',val-per);
              $('#rel_d').attr('value','');
              $('#gen_d').attr('value','');
              $('#dob_d').attr('value','');
              $('#marital_d').attr('value','');
              $('#rel_d_id').attr('value','');
              $('#per_d').val('');

              var a = $.parseJSON(res);
              
              if(a.fam_d.comments != null )
              {
                $('#dead_hide_others').hide();
                $('#dead_show_others').show();
                /*var op = '<option value="none"></option> <option value="'+a.fam_d.id+'">'+a.fam_d.fam_name+'</option>';
                $('#fam_d').html(op);
                $('#fam_d').prop('disabled',true);*/
                $('#fam_d').children().each(function(){
                 var v = $(this).attr('value');
                if( v == a.fam_d.id ){
                $(this).prop('selected',true);
                }
                  });
                $('#fam_d').prop('disabled',true)
                $('#dead_id').attr('value',a.fam_d.dead_id);
                $('#rel_d').attr('value',a.fam_d.name);
                $('#rel_d_id').attr('value',a.fam_d.rel_id);
                $('#dead_comments').html(a.fam_d.comments);
                $('#per_d').val(a.fam_d.percentage);
                $('#per_d').attr('data',a.fam_d.percentage);
                $('#rem_d').attr('value',100 - a.rem_p.percent_count);
                $('#add_more').hide();
                $('#save_edit_dead').show();
              }
              else
              {
                $('#dead_hide_others').show();
                $('#dead_show_others').hide();
                $('#fam_d').children().each(function(){
                 var v = $(this).attr('value');
                if( v == a.fam_d.id ){
                $(this).prop('selected',true);
                }
                  });
                $('#fam_d').prop('disabled',true)
                $('#dead_id').attr('value',a.fam_d.dead_id);
                $('#rel_d').attr('value',a.fam_d.name);
                $('#rel_d_id').attr('value',a.fam_d.rel_id);
                $('#gen_d').attr('value',a.fam_d.gender);
                $('#dob_d').attr('value',a.fam_d.dob);
                $('#marital_d').attr('value',a.fam_d.marital_status);
                $('#per_d').val(a.fam_d.percentage);
                $('#per_d').attr('data',a.fam_d.percentage);
                $('#rem_d').attr('value',100 - a.rem_p.percent_count);
                $('#add_more').hide();
                $('#save_edit_dead').show();
              }


             }
          });
});


$('#add_more').on('click',function(e){
  e.preventDefault();

  $('.error').html('');
  var num = /^[0-9]+$/;
  if(! (num.test($('#per_d').val()))) {
      $('#error_percent_d').html("Enter only Numbers");$('#per_d').focus(); return false;
  }
  var fam_id = $('select[name=fam_id_d]').val();
  var rel_id = $('#rel_d_id').val();
  var per_d = parseInt($('#per_d').val());
  var rem_d = parseInt($('#rem_d').val());
  


if($('#fam_d').val()== 'none')
{
  $('#error_fam_d').html('Select option');
  return false;
}

if($('#per_d').val()== '')
{
  $('#error_percent_d').html('Enter Percentage');
  return false;
}

if(per_d <= 0 ){
  $('#error_percent_d').html('Enter Valid Percentage');
  return false;
}

if(per_d > rem_d ){
  $('#error_percent_d').html('Enter Valid Percentage');
  return false;
}

  $.ajax({
            type:"POST",
            data:{fam_id:fam_id,rel_id:rel_id,percentage:per_d},
            //dataType:"json",
            url:"<?php echo base_url(); ?>user/save_dead",
            success:function(res)
            { 
               if(res == 2){
                alert('something went wrong');
              }else {
              var a = $.parseJSON(res);
              var rem_per = a['per'][0].percent_count;
              var name = a['fam_details'][0].name;
              var per = a['fam_details'][0].percentage;
              var dead_id = a['fam_details'][0].dead_id;
              var fam_id = a['fam_details'][0].fam_id;
              var str ='';
              str += '<div class="myid_'+dead_id+'"><div class="col-md-8 col-xs-8"><p>'+name+'</p><span class="edit_dead"data ="'+dead_id+'" style="cursor:pointer;color:#187aff" fam="'+ fam_id +'">Edit</span> | <span class="deleterec" style="cursor:pointer;color:#187aff" id="'+dead_id+'">Delete</span></div><div class="col-md-4 col-xs-4"><p>'+per+'</p></div></div>'

              $('#dead_alloc_details').append(str);
              /*$('#dead_name').text(name);
              $('#dead_per').text(per);*/
              $('#dead_hide_others').show();
              $('#dead_show_others').hide();
              var val = $('#rem_d').attr('value');
              $('#rem_d').attr('value',val-per);
              $('#rel_d').attr('value','');
              $('#gen_d').attr('value','');
              $('#dob_d').attr('value','');
              $('#marital_d').attr('value','');
              $('#rel_d_id').attr('value','');
              $('#dead_comments').html('');
              $('#per_d').val('');
                $('#fam_d').children().each(function(){
                  if($(this).is(':selected')){
                    $(this).prop('selected',false)
                  };
                });

              swal({
                        title: 'Successfully Added!',
                        type: 'success'
                    }); 
             }
            }
        });  
});  

$("input[name=status]:radio").click(function () {
        if ($('input[name=status]:checked').val() == "dead") {

            $.ajax({
            type:"POST",
            url:"<?php echo base_url(); ?>user/dead_per",
            success:function(res)
            { 
                $('#rem_d').attr('value',res);
                $('#rem_d').attr('readonly',true);
            }          

            })
        }          
});

$('#contnu').on('click',function(){
$.ajax({

            type:"POST",
            url:"<?php echo base_url(); ?>user/comp_det",
            success:function(res)
            {
              if(res == 1){ window.location.href = "<?php echo base_url('user/reason_for_not_alloc');?>";}
              else{  swal({
                            title: 'Some Property Not Allocated',
                            type: 'warning'
                        }); 
                 }
  
            }
        });

});
</script>
