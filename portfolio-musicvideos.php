<?php
include("header.php");
?>
<!-- #Header Starts -->







<!-- works -->
<div id="works"  class=" clearfix grid">
 <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="simpleHead">Music Videos Portfolio</h2>
                <div class="breadcrumb pull-left" role="group">
                    <li><a href="http://kalakarproduction.com/" class=""><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="portfolio-musicvideos.php">Music Videos</a></li>                    
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
        <!-- Item One -->
            <div class="col-md-6 wowload fadeInLeftBig animated">
                <a data-toggle="modal" data-target="#KarleManmani" href="#">
                    <img class="img-responsive center-block" src="images/portfolio/karlemanmani.jpg" alt="Karle Manmani - Rupika Vaidya FT. Mumzy Stranger"></a>
                <h3 class="portfolioItemName">Karle Manmani - Rupika Vaidya FT. MUMZY STRANGER</h3>
                <a class="btn btn-primary" data-toggle="modal" data-target="#KarleManmani" href="#">Watch Video <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            <div class="modal fade bs-example-modal-lg" id="KarleManmani" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
              <div class="modal-header">
                    <button type="button" class="btn btn-default close unload" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
                    <p>&nbsp;</p>
                </div>
                <div class="modal-content">
                  <div class="responsive-video">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/B1NNhWE5yP0" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>

        <!-- Item Two 
            <div class="col-md-6 wowload fadeInRightBig animated">
                <a data-toggle="modal" data-target="#SarahNabeel" href="#">
                    <img class="img-responsive center-block" src="images/portfolio/sarahnabeelwedding.jpg" alt="">
                </a>
                <h3 class="portfolioItemName">Sarah & Nabeel Wedding Highlights</h3>
                <a class="btn btn-primary" data-toggle="modal" data-target="#SarahNabeel" href="#">Watch Video <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            <div class="modal fade bs-example-modal-lg" id="SarahNabeel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="responsive-video">
                    <iframe src="//player.vimeo.com/video/101472149" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/101472149">Sarah &amp; Nabeel Wedding Highlights</a> from <a href="https://vimeo.com/kalakarproduction">Kalakar Production</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                  </div>
                </div>
              </div>
            </div>-->
           
        </div>
        <!-- /.row -->

        <hr>

        
</div>















<!--Contact Starts-->
<?php
  include("contact.php");
?>
<!--Contact Ends-->



<!-- Footer Starts -->
<?php
  include("socialmedia.php");
?>
<!-- # Footer Ends -->
<a href="#works" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>
<script type="text/javascript">
  $( document ).ready(function() {
        $("#navbar-items>ul>li.active").removeClass("active");
        $("#portfolio").addClass("active");
    });

  $('#KarleManmani').on('hide.bs.modal', function () {
        $('#KarleManmani iframe').attr("src", jQuery("#KarleManmani iframe").attr("src"));

    });
</script>

</body>
</html>
