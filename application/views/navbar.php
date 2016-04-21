 <section class="service-outer">
    <section>
 <div class="nav-tab-wrp" id="wizard">
        <div class="container" id="rootwizard">
            <div class="row">
               <article class="col-sm-12">
                    <ul class="nav nav-tabs">
                        <li  class="<?php if(isset($tab)) if($tab == "service") echo "active";?>"><a  href="<?php echo base_url('user/service'); ?>">SIGN IN</a></li>
                        <li class="<?php if(isset($tab)) if($tab == "profile") echo "active";?>"><a href="<?php echo base_url('user/profile'); ?>">PERSONAL INFO</a></li>
                        <li class="<?php if(isset($tab)) if($tab == "family") echo "active";?>"><a data-toggle="tab" href="<?php echo base_url('user/family'); ?>">FAMILY DETAILS</a></li>
                        <li><a data-toggle="tab" href="#property-dtl">PROPERTY DETAILS</a></li>
                        <li><a data-toggle="tab" href="#property-loc">PROPERTY ALLOCATION</a></li>
                        <li><a data-toggle="tab" href="#witnes">WITNESS</a></li>
                        <li><a data-toggle="tab" href="#lawyers">LAWYERS</a></li>
                        <li><a data-toggle="tab" href="#prevw-finish">PREVIEW & FINISH</a></li>
                      </ul>
						
                      <div id="bar" class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
      
        </div>
        </div>
               </article>
            </div>

        </div>
        
    </div>