<div class="container">
	<div class="row">
		<div class="col-md-8">
			 <div class="content-top">
           		<center>
                <h1>Last Will & Testament</h1>
                <p>Finish Your Last Will & Testament in less than 15 min</p>
           		</center>
        	</div>
        	<div class="reason-details">
        		 <div class="content-head">
                    <h4>REASON FOR NOT ALLOCATING ANYTHING</h4>
                  </div>
                  <div class="form-section">
                  	<form method="post" action ="<?php echo base_url('user/save_reason'); ?>">
                  	<div class="form-group">
                    <?php foreach($reason as $r) {?>
                  		<label class="control-label col-md-3 text-left" ><h5><?php echo $r->name ?></h5></label>
                      
                    		<div class="col-md-9 Pad0">
                  			<textarea rows="4" cols="" class="form-control reason-textarea " name="<?php echo $r->id?>" id="reason"> <?php  echo $r->reason;?> </textarea>
                        <span id="error_reason" class="error"></span> 
                  			<i class="fa fa-caret-left"></i>
                  		</div>
                      <?php  } ?>
                  	</div>
                    
                  	 	
                  	 	
                  	<div class="form-group col-md-5 col-md-offset-6">
                  	
                  		<input type="submit" class="btn btn-warning Continue-btn" id="saveandcont" value="Save & Continue &gt;&gt;">
                  	
                  		</div>
                  	
                  	</form>
                  </div>
                  <center>
        		
        	</center>
        	</div>
        	
		</div>





<div class="">
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
</div>
 
<script type="text/javascript">
$(document).ready(function(){ 
$(':input').blur(function(){ 
$(this).val($.trim($(this).val()));
});
});
  $('#saveandcont').on('submit',function(e){
   e.preventDefault();
   var allFieldsComplete = true;
   $( ".reason-textarea" ).each(function( index ) {
  
   if($.trim($( this ).val()) == '')
   {
    // alert($( this ).val());
  //  $('.error').html("Enter Reason");
   // $(this).focus();
    allFieldsComplete = false;
   }  
});
 if(!allFieldsComplete){
    alert('Please complete all required fields');
  }
  else
  {
    location.href="<?php echo site_url();?>user/previous_will";
  }
  //console.log( index + ": " + $( this ).text() );
});
  

</script>     