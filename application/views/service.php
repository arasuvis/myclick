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

                        <div id="signin" class="tab-pane fade ">
                          <h3>SIGN IN</h3>
                          
                        </div>


                        <div id="personl-info" class="tab-pane fade in active">

                            <div class="content-head">
                                <h4>PERSONAL INFORMATION</h4>
                            </div>

                            <div class="form-group">
                            <?php foreach($personal as $per) { ?>
                                <form>
                                   
                                    <div class="row">
                                        <article class="col-sm-3" style="padding-left: 0;">
                                            <span class="form-label" id="Fname"><p>ENTER FIRST NAME</p></span>
                                        </article>
                                        <article class="col-sm-9" style="padding-right: 0;">
                                            <input type="text" id="Fname" value="<?php echo $per->fname; ?>">
                                             <!-- <span class="error" id="Fname_err"></span> -->
                                        </article>
                                    </div>
                                   

                                    <div class="row">
                                        <article class="col-sm-3" style="padding-left: 0;">
                                            <span class="form-label" id="Mname"><p>ENTER MIDDLE NAME</p></span>
                                        </article>
                                        <article class="col-sm-9" style="padding-right: 0;">
                                            <input type="text" id="Mname" value="<?php echo $per->mname; ?>">
                                        </article>
                                    </div>

                                    <div class="row">
                                        <article class="col-sm-3" style="padding-left: 0;">
                                            <span class="form-label" id="Lname"><p>ENTER LAST NAME</p></span>
                                        </article>
                                        <article class="col-sm-9" style="padding-right: 0;">
                                            <input type="text" id="Lname" value="<?php echo $per->surname; ?>">
                                        </article>
                                    </div>

                                     <div class="row">
                                        <article class="col-sm-3" style="padding-left: 0;">
                                            <span class="form-label" id="Age"><p>ENTER AGE</p></span>
                                        </article>
                                        <article class="col-sm-9" style="padding-right: 0;">
                                            <input type="text" id="Age" value="<?php echo $per->age; ?>">
                                        </article>
                                    </div>

                                    <div class="row">
                                        <article class="col-sm-3" style="padding-left: 0;">
                                            <span class="form-label" id="gender"><p>YOUR GENDER</p></span>
                                        </article>
                                        <article class="col-sm-9" style="padding-right: 0;">

                                            <div class="button">
                                                <input type="radio" name="a" value="a" id="a" />
                                                <label for="a"><img src="<?php echo base_url('images/male.png');?>"></label>
                                                <span>Male</span>
                                            </div>

                                            <div class="button">
                                                <input type="radio" name="a" value="b" id="b" />
                                                <label for="b"><img src="<?php echo base_url('images/female.png');?>"></label>
                                                <span>Female</span>
                                            </div>
        
                                        </article>
                                    </div>

                                    <div class="row">
                                        <article class="col-sm-3" style="padding-left: 0;">
                                            <span class="form-label" id="adrss"><p>ENTER ADDRESS</p></span>
                                        </article>
                                        <article class="col-sm-9" style="padding-right: 0;">
                                            <textarea id="adrss"><?php echo $per->address; ?></textarea>
                                        </article>
                                    </div>

                                    <div class="row">
                                        <article class="col-sm-3" style="padding-left: 0;">
                                            <span class="form-label" id="phone"><p>ENTER MOBILE NUMBER</p></span>
                                        </article>
                                        <article class="col-sm-9" style="padding-right: 0;">
                                            <input type="text" id="phone" value="<?php echo $per->mobile; ?>">
                                        </article>
                                    </div>

                                     <div class="row">
                                        <article class="col-sm-12" style="padding-left: 0;">
                                            <button type="submit" id="persnl-submit">CONTINUE >></button>
                                            <center><p>See <a href="">Terms</a> & <a href="">Privacy Policy</a></p></center>
                                        </article>
                                       
                                    </div>
                                      <?php } ?>
                                </form>
                            </div>
                         
                        </div>


                        <div id="family-detls" class="tab-pane fade">
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
                                            <li><span>Shivanand Pawar<a href="#">Edit</a>|<a href="#">Edit</a></span></li>
                                            <li><span>Sukhanya Pawar<a href="#">Edit</a>|<a href="#">Edit</a></span></li>
                                            <li><span>Ramesh Pawar<a href="#">Edit</a>|<a href="#">Edit</a></span></li>
                                          </ul>
                                        </div>
                                    </div>
                                      
                                      <div class="family_form">
                                      <br>
                                        <form>
                                          <div class="row family">
                                            <div class="col-md-6" style="padding-left: 0;">
                                              <label>Name</label><br>
                                              <input type="text" >
                                            </div>
                                             <div class="col-md-6" style="padding-right: 0;">
                                              <label>Requirements</label><br>
                                                <div class="select-style">
                                                    <select >
                                                    <option value="none"></option>
                                                    <option value="1">English</option>
                                                    <option value="2">Hindi</option>
                                                    <option value="3">German</option>
                                                    <option value="4">French</option>
                                                    </select>
                                                </div>
                                            </div>
                                          </div>
                                          <br>

                                          <div class="row requirement_age">
                                            <div class="col-md-6" style="padding-left: 0;">
                                                <label>Age</label><br>
                                                <input type="text">
                                            </div>
                                            <div class="col-md-6" style="padding-right: 0;">
                                                <label>Date of Birth</label><br>
                                                <input type="text" id="datepicker">
                                            </div>
                                          </div>

                                          <br>
                                          <div class="gender">
                                            <div class="radio">
                                                <input id="male" type="radio" name="gender" value="male">
                                                <label for="male">Male</label>
                                                <input id="female" type="radio" name="gender" value="female">
                                                <label for="female">Female</label>
                                            </div>
                                          </div>

                                               <br><br>
                                           <div class="martial">
                                            <div class="radio1">
                                                <input id="married" type="radio" name="martial" value="male">
                                                <label for="married">Married</label>
                                                <input id="unmarried" type="radio" name="martial" value="female">
                                                <label for="unmarried">Unmarried</label>
                                                <input id="widow" type="radio" name="martial" value="female">
                                                <label for="widow">Widow</label>
                                            </div>
                                          </div>

                                          <br><br><br>
                                          <div class="continue">
                                             <span style="display: inline;"><input id="submt" type="submit" value="Save & Add More"/><a>or</a><input id="contnu" type="button" value="Continue&#62;&#62;"/></span>
                                          </div>
                                        </form>
                                        <center><p>See <a href="">Terms</a> & <a href="">Privacy Policy</a></p></center>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                  </div>
                                </div>
                              </div>

                        </div>


                        <div id="property-dtl" class="tab-pane fade">
                          <div class="propert_details">
                              <div class="row">
                                <div class="col-md-12">
                                 <div class="content-head">
                                   <h4>PROPERTY DETAILS</h4>
                                   </div>
                                   
                                  <div class="details">
                                    <form>
                                    <label>Property Type</label>

                                        <div class="move">
                                            <div class="radio2">
                                                <input id="immovable" type="radio" name="immovable" value="male">
                                                <label for="immovable">Immovable</label>
                                                <input id="movable" type="radio" name="movable" value="movable">
                                                <label for="movable">Movable</label>
                                            </div>
                                        </div>

                                          <div class="row property">
                                            <div class="col-md-6">
                                              <label>list of properties</label><br>
                                            <div class="select-style1">
                                              <select>
                                              <option value="volvo"></option>
                                              <option value="volvo">English</option>
                                              <option value="saab">Hindi</option>
                                              <option value="mercedes">German</option>
                                              <option value="audi">French</option>
                                              </select>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                              <label>Propert Area</label><br>
                                              <input type="text">
                                            </div>
                                          </div>
                                          <br>
                                          <div class="row registration">
                                              <div class="col-md-6">
                                                <label>Muncipal Registration Number</label><br>
                                                <input type="text">
                                              </div>
                                              <div class="col-md-6">
                                                <label>Property Owner Name</label><br>
                                                <input type="text">
                                              </div>
                                          </div>
                                          <br>
                                        <div class="attach">
                                         <span class="btn btn-file"><i class="fa fa-paperclip" aria-hidden="true"></i>Attach Files <input type="file"></span>
                                        </div>

                                        <div class="continue">
                                            <span ><input id="submt" type="submit" value="Save & Add More"/>
                                            <a>or</a>
                                            <input id="contnu" type="button" value="Continue&#62;&#62;"/></span>
                                        </div>

                                    </form>
                                    <center><p>See <a href="">Terms</a> & <a href="">Privacy Policy</a></p></center>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                </div>
                              </div>
                            </div>
                        </div>


                         <div id="property-loc" class="tab-pane fade">
                             <div class="alloction">
                              <div class="row">
                                <div class="col-md-12">
                                <div class="content-head">
                                   <h4>PROPERTY ALLOCATION</h4>
                                   </div>
                                      <div class="allocation_form">
                                        <div class="row">
                                          <div class="col-md-7">
                                              <label>Select Property</label><br>
                                                <div class="allocation_style">
                                                    <select>
                                                      <option value="volvo"></option>
                                                      <option value="volvo">English</option>
                                                      <option value="saab">Hindi</option>
                                                      <option value="mercedes">German</option>
                                                      <option value="audi">French</option>
                                                    </select>
                                                </div>
                                                <br>
                                                 <label>Select Family Member</label><br>
                                                <div class="allocation_style">
                                                    <select>
                                                    <option value="volvo"></option>
                                                    <option value="volvo">English</option>
                                                    <option value="saab">Hindi</option>
                                                    <option value="mercedes">German</option>
                                                    <option value="audi">French</option>
                                                    </select>
                                                </div>
                                                <br>
                                                <div class="allocation_names">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Relationship</label><br>
                                                        <input type="text" placeholder="son">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Age</label><br>
                                                        <input type="text" placeholder="29">
                                                    </div>
                                                  </div>
                                                  <br>
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Gender</label><br>
                                                        <input type="text" placeholder="Male">
                                                    </div>
                                                    <div class="col-md-6">
                                                       
                                                    </div>
                                                  </div>
                                                  <br>
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Date of birth</label><br>
                                                        <input type="text" placeholder="DD/MM/YYYY">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Marital status</label><br>
                                                        <input type="text" placeholder="Single">
                                                    </div>
                                                  </div>
                                                  <br>
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <label>Enter property allocation</label><br>
                                                      <div class="percent">
                                                        <input type="text" placeholder="00">
                                                        <span>%</span>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      
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
                                                          <div class="col-md-8">
                                                              <p>Shivanand Pawar</p>
                                                              <span><a href="#">Edit</a> | <a href="#">Edit</a></span>
                                                          </div>
                                                          <div class="col-md-4">
                                                              <p>Allocated</p>
                                                              <span>30%</span>
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <li>
                                                        <div class="row">
                                                          <div class="col-md-8">
                                                              <p>Shivanand Pawar</p>
                                                              <span><a href="#">Edit</a> | <a href="#">Edit</a></span>
                                                          </div>
                                                          <div class="col-md-4">
                                                              <p>Allocated</p>
                                                              <span>30%</span>
                                                          </div>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                           
                                      </div>
                              
                                <div class="col-md-4">
                                </div>
                              </div>
                            </div>
                            </div>
                        </div>


                        <div id="witnes" class="tab-pane fade">
                          <center><h3>Witness</h3></center>
                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>


                        <div id="lawyers" class="tab-pane fade">
                          <center><h3>Lawyers</h3></center>
                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>


                        <div id="prevw-finish" class="tab-pane fade">
                          <center><h3>Preview</h3></center>
                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                         
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


 <script>
    $(document).ready(function() {
        $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#rootwizard .progress-bar').css({width:$percent+'%'});
        }});
    });
    </script>
    
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

