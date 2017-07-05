<?php include('includes/header.php'); ?>

            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive dp-image" src="http://placehold.it/150x150" alt="">
                    <div class="intro-text">
                        <h1 class="name">John Doe</h1>
                        <hr class="star-light">
                        <span class="skills">Programmer - Blogger - Gamer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container page-layout">
      <div id="alpha" class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

          <section id="portfolio">
              <div class="container">
                  <div class="row">
                      <div class="latest-post">
                        <div class="thumbnails">
                             <span class="date">Wednesday, June 28, 2017</span>
                              <div class="thumbnail right-caption span4">
                                <div class="image"><img class="img-responsive" src="http://placehold.it/650x350" alt=""></div>
                                <div class="caption">
                                  <h3>Ionic 3 and Angular 4: Adding Custom Fonts like Open Sans and Font Awesome.</h3>
                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                  <p><a href="#" class="btn btn-primary pull-right">Read More</a></p>
                                </div>
                              </div>

                          </div>

                      </div>

                      <div class="col-xs-12 newLayout">

                        <?php
                        $arr = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
                        foreach ($arr as $posts) { ?>

                          <div class="col-md-6 col-xs-12">

                            <div class="thumbnails small">
                                 <span class="date">Wednesday, June 28, 2017</span>
                                  <div class="thumbnail right-caption span4">
                                    <div class="image"><img class="img-responsive" src="http://placehold.it/650x350" alt=""></div>
                                    <div class="caption">
                                      <h4>Ionic 3 and Angular 4: Adding Custom Fonts...</h4>
                                      <p>Desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                    </div>
                                  </div>

                              </div>
                          </div>

                          <?php } ?>


                    </div>
                    <button class="btn btn-primary " id="addMore">Add More</button>
                  </div>
              </div>
          </section>

       </div>

       <?php include('includes/sidebar.php'); ?>

    </div>


    <!-- About Section -->
    <!--<section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Contact Section -->
  <!--  <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>-->

<?php include('includes/footer.php'); ?>