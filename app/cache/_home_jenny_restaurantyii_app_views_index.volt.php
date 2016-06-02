<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <?php echo $this->tag->getTitle(); ?>
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
    <meta name="author" content="www.zerotheme.com">
    
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
    <?php echo $this->tag->stylesheetLink('css/zerogrid.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/style.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/slide.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/menu.css'); ?>
    
    <!-- Custom Fonts -->
    <?php echo $this->tag->stylesheetLink('font-awesome/css/font-awesome.min.css?family=Halant:300,400', false); ?>
    
    
</head>
<body>
<div class="wrap-body">
    <!--///////////////////////////////////////Top-->
    <div class="top">
        <div class="zerogrid">
            <ul class="number f-left">
                <li class="mail"><p>carolina.vc.94@hotmail.es</p></li>
                <li class="phone"><p>315 293 57 10</p></li>
            </ul>
            <ul class="top-social f-right">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <!--////////////////////////////////////Header-->
    <header>
        <div class="zerogrid">
            <center><div class="logo"><img src="images/logo.png"></div></center>
        </div>
    </header>
    <div class="site-title">
        <div class="zerogrid">
            <div class="row">
                <h2 class="t-center">Aplicacion para mayor efectividad en la Atencion</h2>
            </div>
        </div>
    </div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
        <ul class="clearfix">
            <li class="colour-1"><a href="index.html">Home</a></li>
            <li class="colour-2"><a href="menu.html">Menu</a></li>
            <li class="colour-3"><a href="location.html">Ubicacion</a></li>
            <li class="colour-4"><a href="archive.html">Blog</a></li>
            <li class="colour-5"><a href="reservation.html">Reservation</a></li>
            <li class="colour-6"><a href="staff.html">Our Staff</a></li>
            <li class="colour-7"><a href="news.html">News</a></li>
            <li class="colour-8"><a href="gallery.html">Gallery</a></li>
        </ul>
    </nav>
    
    <div class="zerogrid">
        <div class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <img src="images/banner1.jpg" alt="">
                    <div class="caption">
                        <h2>We've got the best spareribs in town.</h2></br>
                        <p>Nulla eget mauris quis elit mollis ornare vitae ut odio. Cras tincidunt, augue vitae sollicitudin commodo,quam elit varius est, et ornare ante massa quis tellus. Mauris nec lacinia nisl. </p>
                    </div>
                </li>
                <li>
                    <img src="images/banner2.jpg" alt="">
                    <div class="caption">
                        <h2>If food is an experience, then you'll find it at the restaurant.</h2></br>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    </div>
                </li>
                <li>
                    <img src="images/banner3.jpg" alt="">
                    <div class="caption">
                        <h2>Enjoy our take-away menu.</h2></br>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
<!--////////////////////////////////////Container-->
    <?php echo $this->getContent(); ?>

<!--////////////////////////////////////Footer-->
    <?php echo $this->partial('layouts/_footer'); ?>


    <!-- js -->
    <script src="js/classie.js"></script>
    <script src="js/demo.js"></script>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
    $(function () {
      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });
    });
    </script>
</div>
</body></html>