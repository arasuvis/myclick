<?php //print_r($personal); die();?>

        <div class="container">
         
        <div class="row">

            <article class="col-md-8">

                    <div class="content-top">
                       <center>
                            <h1>Last Will & Testament</h1>
                            <p>Finish Your Last Will & Testament in less than 15 min</p>
                       </center>
                    </div>
                
                    <div class="tab-content">

                        <div id="signin" class="tab-pane fade in active">
                          <h3>SIGN IN</h3>
                          
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




       <!-- jquery library file -->
  <script type="text/javascript" src="<?php echo base_url('js/jquery-1.11.3.min.js');?>"></script>

  <!-- bootstrap js link -->
  <script type="text/javascript" src="<?php echo base_url('plugins/bootstrap/js/bootstrap.js');?>"></script>

  <script type="text/javascript" src="<?php echo base_url('plugins/bootstrap/js/jquery.bootstrap.wizard.min.js');?>"></script>
    <!-- jquery ui js links -->
  <script type="text/javascript" src="<?php echo base_url('plugins/jquery-ui-1.11.4/jquery-ui.js')?>"></script>      


 
    
<script type="text/javascript">
  
 $(function() {
      
      $("#persnl-subm").on('click',function(){

        $(".error").html('');
        if($('#Fname').val() == '' )
        {
          //$('#Fname').focus().val('');
          $('#Fname_err').html('Enter First Name');
        }
        return false;
      });

    });

</script>


<script type="text/javascript">
 /*   
    $(function() {
  $("#test").swipe( {
    //Generic swipe handler for all directions
    swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
      $(this).text("You swiped " + direction );  
    }
  });

  //Set some options later
  $("#test").swipe( {fingers:2} );
}); */
</script>

