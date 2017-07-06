<?php include('includes/header.php'); ?>


<div class="row">
    <div class="col-lg-12">
        <div class="intro-text">
            <h1 class="name">Tutorials</h1>
            <hr class="star-light">
        </div>
    </div>
</div>
</div>
</header>



  <div class="container page-layout" style="position:relative;">
    <div id="alpha" class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
      <section id="portfolio">

        <h3>Tutorials</h3>


       <div class="content" style="margin-top: 60px;">

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



       <!-- <div class="bottom" style="margin-top:75px;">
         <p class="text-muted text-center">Disclaimer: Everything you read in this website are of my opinion and not of anyone elses' in my family, friends or people working in my Company.</p>
       </div> -->
     </section>
      </div>

      <?php include('includes/sidebar.php'); ?>

      <!-- Sidebar -->




   </div><!-- /.container -->
  <?php include('includes/footer.php'); ?>
