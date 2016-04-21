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



