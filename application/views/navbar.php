
 <section class="service-outer">
    <section>
 <div class="nav-tab-wrp" id="wizard">
        <div class="container-fluid" id="rootwizard">
            <div class="row">
               <article class="col-sm-12 padLR0 padtop oneinfo">
                    <ul class="nav nav-tabs">
                       <!-- <li  class="<?php //if(isset($tab)) if($tab == "service") echo "active";?>"><a  href="<?php //echo base_url('user/service'); ?>">SIGN IN</a></li>-->
					   <!-- <li ><a  href="#">SIGN IN</a></li> -->

                        <li class="<?php if(isset($tab)) if($tab == "profile") echo "active";?>"><a href="<?php echo base_url('user/profile'); ?>"><span><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"></span>PERSONAL INFO</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "family") echo "active";?>"><a  href="<?php echo base_url('user/family'); ?>"><span><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"></span>FAMILY DETAILS</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "property") echo "active";?>"><a  href="<?php echo base_url('user/property'); ?>"><span><img  src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"></span>PROPERTY DETAILS</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "property_alloc") echo "active";?>"><a  href="<?php echo base_url('user/property_alloc'); ?>"><span><img  src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"></span>PROPERTY ALLOCATION</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "reason_for_not_alloc") echo "active";?>"><a  href="<?php echo base_url('user/reason_for_not_alloc'); ?>"><span><img  src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"></span>REASON FOR NOT ALLOCATING</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "previous_will") echo "active";?>"><a  href="<?php echo base_url('user/previous_will'); ?>"><span><img src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"></span>PREVIOUS WILL</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "executor") echo "active";?>"><a  href="<?php echo base_url('user/executor'); ?>"><span><img  src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"></span>EXECUTOR </a></li>

                        <li class="<?php if(isset($tab)) if($tab == "doctor") echo "active";?>"><a  href="<?php echo base_url('user/doctor'); ?>"><span><img  src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"></span>DOCTOR </a></li>


                        <li class="<?php if(isset($tab)) if($tab == "witness") echo "active";?>"><a  href="<?php echo base_url('user/witness'); ?>"><span><img  src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"></span>WITNESS</a></li>
<!-- 
                        <li class="<?php //if(isset($tab)) if($tab == "finish") echo "active";?>"><a  href="<?php //echo base_url('user/finish'); ?>">PREVIEW AND FINISH</a></li> -->


                       

                       <!-- <li ><a data-toggle="tab"  href="<?php// echo base_url('user/logout'); ?>">Logout</a></li>-->
                      </ul>
						          
                      <div id="bar" class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?php if(isset($width)) echo $width; ?> ">

      
        </div>

        </div>

               </article>
            </div>

        </div>
        
    </div>
    <script type="text/javascript">
      // $(document).ready(function(){
      //     var num = 0;
      //    $.each($('.oneinfo').children().children(),function(k,v){
      //      if($(this).hasClass('active')){
      //          num = k;
      //       }
      //    });
      //    $.each($('.oneinfo').children().children(),function(k,v){
      //      if(k <= num){
      //       $(this).addClass('active');
      //       if(k < num){
      //         $(this).children().children().children().css('display','inline-block');
      //           console.log();
      //           $(this).css('min-width','100px');
      //       }
      //      }
      //    });
      // });
    </script>
   