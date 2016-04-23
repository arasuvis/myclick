
 <section class="service-outer">
    <section>
 <div class="nav-tab-wrp" id="wizard">
        <div class="container" id="rootwizard">
            <div class="row">
               <article class="col-sm-12">
                    <ul class="nav nav-tabs">

                       <!-- <li  class="<?php if(isset($tab)) if($tab == "service") echo "active";?>"><a  href="<?php echo base_url('user/service'); ?>">SIGN IN</a></li>-->
					   <li ><a  href="#">SIGN IN</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "profile") echo "active";?>"><a href="<?php echo base_url('user/profile'); ?>">PERSONAL INFO</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "family") echo "active";?>"><a  href="<?php echo base_url('user/family'); ?>">FAMILY DETAILS</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "property") echo "active";?>"><a  href="<?php echo base_url('user/property'); ?>">PROPERTY DETAILS</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "property_alloc") echo "active";?>"><a  href="<?php echo base_url('user/property_alloc'); ?>">PROPERTY ALLOCATION</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "property") echo "active";?>"><a  href="<?php echo base_url('user/witness'); ?>">WITNESS</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "property") echo "active";?>"><a  href="<?php echo base_url('user/lawyer'); ?>">LAWYERS</a></li>

                        <li class="<?php if(isset($tab)) if($tab == "property") echo "active";?>"><a  href="<?php echo base_url('user/finish'); ?>">PREVIEW & FINISH</a></li>

                        <li ><a data-toggle="tab"  href="<?php echo base_url('user/logout'); ?>">Logout</a></li>
                      </ul>
						          
                      <div id="bar" class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?php if(isset($width)) echo $width; ?> ">

      
        </div>

        </div>

               </article>
            </div>

        </div>
        
    </div>
   