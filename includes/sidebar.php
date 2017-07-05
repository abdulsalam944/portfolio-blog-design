<div id="beta" class="well col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <div class="module-search module">
          <div class="module-content">
           <h4>Learn with me</h4>
           <form>
             <div class="input-group">
               <input type="text" class="form-control" placeholder="Email Address">
               <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Subscribe</button>
               </span>
            </div>
           </form>
         </div>
      </div>
      <div class="module-search module">
          <div class="module-content">
            <iframe width="100%" height="215" src="//www.youtube.com/embed/4KvXrbabutg" frameborder="0" allowfullscreen=""></iframe>
         </div>
      </div>
      <div class="module-twitter module text-center">
          <div class="module-content">
            <img src="http://placehold.it/150x150" class="img-responsive" />
            <h3>John Doe</h3>
            <p>@johndoe</p>
            <button type="button" class="follow-btn"><span>Follow</span></button>
         </div>
      </div>
      <div class="module-posts module">
          <div class="module-content">
              <ul class="thumbnails" style="list-style: none; padding:0;">
            <?php
              $arr = array(2,3,4,5,6,7);
              foreach ($arr as $post) {
            ?>

                <li class="clearfix" style="vertical-align: baseline;">
                  <div class="thumb"><img class="span2" src="http://placehold.it/120x100" alt=""></div>
                  <div class="post-info">
                    <div class="table-cell">
                      <p>Design</p>
                      <h5>Sed Habitasse Venenatis Pharetra</h5>
                    </div>

                  </div>
                </li>


            <?php } ?>
            </ul>
            <div class="clearfix">

            </div>
         </div>
      </div>
      <!-- <div class="module-search module">
          <h4 class="module-header">Search</h4>
          <div class="module-content">
            <h1>Categories</h1>
         </div>
      </div> -->
      <div class="module-tags module">
          <h4 class="module-header">Tag Cloud</h4>
          <div class="module-content">
            <div class="tag-cloud">
              <?php
                  $arr = array("nature","tech","travel","people","nodejs","docker","gaming","html5","javascript","js","css");
                  foreach($arr as $tag){
               ?>
                <a href="#"><?php echo $tag; ?></a>
               <?php } ?>

            </div>
         </div>
      </div>



</div>
