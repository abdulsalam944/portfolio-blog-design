<!-- Footer -->
<footer class="text-center sticky-stopper">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p>3481 Melrose Place
                        <br>Beverly Hills, CA 90210</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About Freelancer</h3>
                    <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Your Website 2016
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/sticky-kit.js"></script>
<script src="//platform.twitter.com/widgets.js"></script>
<script type="text/javascript">


// $( document ).ready(function() {
//   console.log( "document ready!" );

//   var $sticky = $('#beta');
//   var $stickyrStopper = $('.sticky-stopper');
//   if (!!$sticky.offset()) { // make sure ".sticky" element exists

//     var generalSidebarHeight = $sticky.innerHeight();
//     var stickyTop = $sticky.offset().top;
//     var stickOffset = 0;
//     var stickyStopperPosition = $stickyrStopper.offset().top;
//     var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
//     var diff = stopPoint + stickOffset;

//     $(window).scroll(function(){ // scroll event
//       var windowTop = $(window).scrollTop(); // returns number

//       if (stopPoint < windowTop) {
//           $sticky.css({ position: 'absolute', top: diff, right: '106px' });
//       } else if (stickyTop < windowTop+stickOffset) {
//           $sticky.css({ position: 'fixed', top: stickOffset });
//       } else {
//           $sticky.css({position: 'absolute', top: 'initial', right: '106px'});
//       }
//     });

//   }
// });
// function adjustScroll($sticky, $stickyrStopper, stickyTop, stickyHeight, windowHeight, stickOffset, stickyStopperPosition, diff, stopPoint, callback){
//   var windowTop = $(document).scrollTop(); // returns number
//   //  console.log(stopPoint);
//   if (stickyStopperPosition < windowHeight + windowTop) {
//       console.log('a');
//       $sticky.css({ position: 'absolute', top: diff, right: '106px' });
//   } else if (stickyHeight < windowHeight+windowTop ) {
//       console.log('b');
//       $sticky.css({ position: 'fixed', top: '-'+stopPoint+'px' });
//   } else {
//    console.log('c');
//       $sticky.css({position: 'absolute', top: 'initial', right: '106px'});
//   }

//   callback();
// };


// $( document ).ready(function() {

//  var $sticky = $('#beta');
//  var $stickyrStopper = $('.sticky-stopper');
//  if (!!$sticky.offset()) { // make sure ".sticky" element exists

//    var generalSidebarHeight = $sticky.innerHeight();

//    var stickyTop = $sticky.offset().top;
//    var stickyHeight = generalSidebarHeight + stickyTop;

//    var windowHeight = $(document).height();

//    var stickOffset = stickyHeight-windowHeight;
//    var stickyStopperPosition = $stickyrStopper.offset().top;
//    var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset - $("#mainNav").innerHeight();
//    var diff = stopPoint+stickOffset+ $("#mainNav").innerHeight();

//    var newLayoutHeight = $(".newLayout").height();
//    $(window).scroll(function(){ // scroll event
//      adjustScroll($sticky, $stickyrStopper, stickyTop, stickyHeight, windowHeight, stickOffset, stickyStopperPosition, diff, stopPoint, function(){
//        console.log("adjusted sidebar 1");
//        console.log(" new layout height " + newLayoutHeight);
//        console.log("window height " + windowHeight);
//      })
//    });

//  }

// });


// $("#addMore").click(function(){
//   var html = '<div class="col-md-6 col-xs-12"><div class="thumbnails small"><span class="date">Wednesday, June 28, 2017</span><div class="thumbnail right-caption span4"><div class="image"><img class="img-responsive" src="http://placehold.it/650x350" alt=""></div><div class="caption"><h4>Ionic 3 and Angular 4: Adding Custom Fonts...</h4><p>Desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div></div></div></div><div class="col-md-6 col-xs-12"><div class="thumbnails small"><span class="date">Wednesday, June 28, 2017</span><div class="thumbnail right-caption span4"><div class="image"><img class="img-responsive" src="http://placehold.it/650x350" alt=""></div><div class="caption"><h4>Ionic 3 and Angular 4: Adding Custom Fonts...</h4><p>Desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div></div></div></div>';

//   $(".newLayout").append(html);

//    var newLayoutHeight = $(".newLayout").height();
//    console.log(" new layout height 2 " + newLayoutHeight);


//   // setTimeout(function(){

//       var $sticky = $('#beta');
//       var $stickyrStopper = $('.sticky-stopper');
//       var generalSidebarHeight = $sticky.innerHeight();

//       var stickyTop = $sticky.offset().top;
//       var stickyHeight = generalSidebarHeight + stickyTop;

//       // var windowHeight = $(window).height();
//       var windowHeight = $(document).height();
//       console.log("window height 2 " + windowHeight);

//       var stickOffset = stickyHeight-windowHeight;
//       var stickyStopperPosition = $stickyrStopper.offset().top;
//       var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset - $("#mainNav").innerHeight();
//       var diff = stopPoint+stickOffset+ $("#mainNav").innerHeight();

//       console.log("gonna hit");
//       console.log(generalSidebarHeight + ' ' + stickyTop + ' ' + stickyHeight + ' ' + windowHeight + ' ' + stickOffset + ' ' + stickyStopperPosition + ' ' + stopPoint + ' ' + diff);


//       adjustScroll($sticky, $stickyrStopper, stickyTop, stickyHeight, windowHeight, stickOffset, stickyStopperPosition, diff, stopPoint, function(){
//         console.log('adjusted sidebar 2!');
//         adjustScroll($sticky, $stickyrStopper, stickyTop, stickyHeight, windowHeight, stickOffset, stickyStopperPosition, diff, stopPoint, function(){
//           console.log('adjusted sidebar again');
//         });
//       })


// // },2000);



// });


$( document ).ready(function() {
    setTimeout(function(){
      console.debug("Scticky Initialized");

     var documentHeight = $("body").height();
     var footerOffsetTop = $("footer").offset().top;
     var stickyHeight = $("#beta").innerHeight();
     var stickyLeftOffset = $("#beta").offset().left;
     var stickyEndPos = stickyHeight + $("#beta").offset().top;    


    $(window).scroll(function(){
        var currentScrollPosTop =$(window).scrollTop();
        var currentScrollPosBottom = $(window).height() + currentScrollPosTop;

        // lockstiky while scroll
        if(footerOffsetTop < currentScrollPosBottom){
          console.log('Sticky touces to bottom');

          $("#beta").css({ position:'absolute', top: 'inherit', bottom: '0px', left:' inherit', right : '0px' });

        }else if(stickyEndPos < currentScrollPosBottom){
          console.log('Fixed while scroll');

          var topOffset = stickyHeight-$(window).height();
          console.log(topOffset);
          $("#beta").css({ position:'fixed', top: '-'+topOffset+'px', left : stickyLeftOffset-parseInt($("#beta").css('margin-left').replace('px',''))+'px' });

        }else{
          console.log('Normal Time');

          $("#beta").css({ position:'initial', top: '0' });
        }

    });


     $("#addMore").click(function(){
      var html = '<div class="col-md-6 col-xs-12"><div class="thumbnails small"><span class="date">Wednesday, June 28, 2017</span><div class="thumbnail right-caption span4"><div class="image"><img class="img-responsive" src="http://placehold.it/650x350" alt=""></div><div class="caption"><h4>Ionic 3 and Angular 4: Adding Custom Fonts...</h4><p>Desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div></div></div></div><div class="col-md-6 col-xs-12"><div class="thumbnails small"><span class="date">Wednesday, June 28, 2017</span><div class="thumbnail right-caption span4"><div class="image"><img class="img-responsive" src="http://placehold.it/650x350" alt=""></div><div class="caption"><h4>Ionic 3 and Angular 4: Adding Custom Fonts...</h4><p>Desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div></div></div></div>';

      $(".newLayout").append(html);

        documentHeight = $("body").height();
        footerOffsetTop = $("footer").offset().top;
        stickyHeight = $("#beta").innerHeight();
        stickyLeftOffset = $("#beta").offset().left;


    });



    },3000);  

  });

</script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>



<!-- Theme JavaScript -->
<script src="assets/js/nickborti.min.js"></script>

</body>

</html>
