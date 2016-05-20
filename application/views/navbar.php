<?php $will_id = $this->session->userdata('is_userlogged_in')['will_id'];?>	
 <section class="service-outer">
    <section>
 <div class="nav-tab-wrp" id="wizard">
        <div class="container-fluid" id="">
            <div class="row">
               <article class="col-sm-12 padLR0 padtop oneinfo">
               <div class="vinay">
                    <ul class="nav nav-tabs">
                       <!-- <li  class="<?php //if(isset($tab)) if($tab == "service") echo "active";?>"><a  href="<?php //echo base_url('user/service'); ?>">SIGN IN</a></li>-->
					   <!-- <li ><a  href="#">SIGN IN</a></li> -->
                        <li class="<?php if(isset($tab)) if($tab == "profile") echo "active";?>"><a href="<?php echo base_url('user/profile'); ?>"><span><?php $status = get_my_status($will_id,1); if($status == 1) { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"><?php } else { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" class="Vhiden" id="tick-img"><?php } ?></span>PERSONAL INFO</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "family") echo "active";?>"><a  href="<?php if(get_my_status($will_id,1) == 1) { echo base_url('user/family'); } else{ echo "#"; } ?>"><span><?php $status = get_my_status($will_id,2); if($status == 1) { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"><?php } else { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" class="Vhiden" id="tick-img"><?php } ?></span>FAMILY DETAILS</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "property") echo "active";?>"><a style="cursor: pointer;"  href="<?php if(get_my_status($will_id,2) == 1) { echo base_url('user/property');  } else{ echo "#"; } ?>"><span><?php $status = get_my_status($will_id,3); if($status == 1) { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"><?php } else { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" class="Vhiden" id="tick-img"><?php } ?></span>PROPERTY DETAILS</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "property_alloc") echo "active";?>"><a  href="<?php if(get_my_status($will_id,3) == 1) { echo base_url('user/property_alloc'); } else{ echo "#"; } ?>"><span><?php $status = get_my_status($will_id,4); if($status == 1) { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"><?php } else { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" class="Vhiden" id="tick-img"><?php } ?></span>PROPERTY ALLOCATION</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "reason_for_not_alloc") echo "active";?>"><a  href="<?php if(get_my_status($will_id,4) == 1) { echo base_url('user/reason_for_not_alloc'); } else{ echo "#"; } ?>"><span><?php $status = get_my_status($will_id,5); if($status == 1) { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"><?php } else { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" class="Vhiden" id="tick-img"><?php } ?></span>REASON FOR NOT ALLOCATING</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "previous_will") echo "active";?>"><a  href="<?php if(get_my_status($will_id,5) == 1) { echo base_url('user/previous_will'); } else{ echo "#"; } ?>"><span><?php $status = get_my_status($will_id,6); if($status == 1) { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"><?php } else { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" class="Vhiden" id="tick-img"><?php } ?></span>PREVIOUS WILL</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "executor") echo "active";?>"><a  href="<?php if(get_my_status($will_id,6) == 1) { echo base_url('user/executor'); } else{ echo "#"; } ?>"><span><?php  $status = get_my_status($will_id,7); if($status == 1) { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"><?php } else { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" class="Vhiden" id="tick-img"><?php } ?></span>EXECUTOR </a></li>

                        <li class="<?php if(isset($tab)) if($tab == "doctor") echo "active";?>"><a  href="<?php if(get_my_status($will_id,7) == 1) { echo base_url('user/doctor'); } else{ echo "#"; } ?>"><span><?php  $status = get_my_status($will_id,8); if($status == 1) { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"><?php } else { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" class="Vhiden" id="tick-img"><?php } ?></span>DOCTOR </a></li>


                        <li class="<?php if(isset($tab)) if($tab == "witness") echo "active";?>"><a  href="<?php if(get_my_status($will_id,8) == 1) { echo base_url('user/witness'); } else{ echo "#"; } ?>"><span><?php  $status = get_my_status($will_id,9); if($status == 1) { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" id="tick-img"><?php } else { ?><img style="display:inline-block;" src="<?php echo base_url();?>images/tick-36x36.png" class="Vhiden" id="tick-img"><?php } ?></span>WITNESS</a></li>
<!-- 
                        <li class="<?php //if(isset($tab)) if($tab == "finish") echo "active";?>"><a  href="<?php //echo base_url('user/finish'); ?>">PREVIEW AND FINISH</a></li> -->


                       

                       <!-- <li ><a data-toggle="tab"  href="<?php// echo base_url('user/logout'); ?>">Logout</a></li>-->
                      </ul>

                      </div>
						          
                      <div id="bar" class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?php if(isset($width)) echo $width; ?> ">

      
        </div>

        </div>

               </article>
            </div>

        </div>
        
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
      var i = 0;

      $.each($('.vinay').children().children(),function(k,v){
        if(i == 1){
          $(this).css('pointer-events','none');
           $(this).css('cursor','default');
        }
        if($(this).hasClass('active')){
          i = 1;
        }

      });
      console.log();
    });
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
   