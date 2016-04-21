<div class="footer">
		<div class="container">
			<div class="footerdata">
				<div class="row">
					<div class="col-sm-3">
						<div class="footerone">
							<h4>Company</h4>
							<ul>
							<li><a href="javascript:void(0)";>About us</a></li>
							<li><a href="javascript:void(0)";>Contact us</a></li>
							<li><a href="javascript:void(0)";>Carrers</a></li>
							<li><a href="javascript:void(0)";>Press</a></li>
							<li><a href="javascript:void(0)";>Affiliate</a></li>
							<li><a href="javascript:void(0)";>Site Map</a></li>
							</ul>
						</div>	
					</div>
						<div class="col-sm-3">
						<div class="footerone">
							<h4>Support</h4>
							<ul>
							<li><a href="javascript:void(0)";>(080)-273839</a></li>
							<li><a href="javascript:void(0)";>Order Staus</a></li>
							<li><a href="javascript:void(0)";>Customer Care</a></li>
							<li><a href="javascript:void(0)";>Talk to an Lawyer</a></li>
							<li><a href="javascript:void(0)";>Join Our Team</a></li>
							</ul>
						</div>	
					</div>
						<div class="col-sm-3">
						<div class="footerone">
							<h4>Learn more</h4>
							<ul>
							<li><a href="javascript:void(0)";>Knowledge Center</a></li>
							<li><a href="javascript:void(0)";>Legal Help</a></li>
							<li><a href="javascript:void(0)";>Compare llc and inc.</a></li>
							<li><a href="javascript:void(0)";>Compare will and living trust</a></li>
							<li><a href="javascript:void(0)";>Compare trademark and copyright</a></li>
							</ul>
						</div>	
					</div>
					<div class="col-sm-3">
					<div class="footerone">
						<h4>Sign up for our NewsLetter</h4>
						<form role="form">
							<div class="form-group">
    							<input type="email" palceholder="Enter Your Email id" placeholder="Enter Your Email Id"class="form-control" id="email">
    							 <button type="submit" class="btn btn-Sign">Sign up</button>
  							</div>
						</form>
					</div>
					</div>
				</div>
			</div>
			<div class="footerdown">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
			</div>
			<div class="row">
				<div class="col-md-6">
					© 2016 Oneclicklaw. All rights reserved
				</div>
				<div class="col-md-6 text-right">
					Designed by : www.indglobal.in
				</div>
			</div>
		</div>
		</div>

			 <!-- jquery library file -->
	<script type="text/javascript" src="<?php //echo base_url('js/jquery-1.11.3.min.js');?>"></script>

	<!-- bootstrap js link -->
	<script type="text/javascript" src="<?php //echo base_url('plugins/bootstrap/js/bootstrap.js');?>"></script>

  <script type="text/javascript" src="<?php //echo base_url('plugins/bootstrap/js/jquery.bootstrap.wizard.min.js');?>"></script>
    <!-- jquery ui js links -->
  <script type="text/javascript" src="<?php //echo base_url('plugins/jquery-ui-1.11.4/jquery-ui.js')?>"></script> 
<script>
    $(document).ready(function() {
        $('#rootwizard').bootstrapWizard({click: function(tab, navigation, index) {
			alert(1);
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#rootwizard .progress-bar').css({width:$percent+'%'});
        }});
    });
    </script>
  </body>
</html>