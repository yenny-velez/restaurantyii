<!DOCTYPE html>
<html lang="en">

  <head>
    <?php echo $this->tag->getTitle(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo $this->url->getStatic('/img/favicon.ico'); ?>"  />
    <?php echo $this->tag->stylesheetLink('css/bundle.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/style.css'); ?>
    <?php echo $this->tag->stylesheetLink('https://fonts.googleapis.com/css?family=Montserrat:400,700', false); ?>
    <?php echo $this->tag->stylesheetLink('https://fonts.googleapis.com/css?family=Raleway:300,400,500', false); ?>
    <?php echo $this->tag->stylesheetLink('https://fonts.googleapis.com/css?family=Halant:300,400', false); ?>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Preloader-->
    <div id="loader">
      <div class="centrize">
        <div class="v-center">
          <div id="mask">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Preloader-->
    <!-- Navigation Bar-->
    <header id="topnav">
      <div class="container">
        <!-- Logo container-->
        <div class="logo">
          <a href="<?php echo $this->url->get('/home'); ?>">
            <img src="/img/logo_murbanos_light.png" alt="Logo M Urbanos" class="logo-light">
            <img src="/img/logo_murbanos_dark.png" alt="Logo M Urbanos" class="logo-dark">
          </a>
        </div>
        <!-- End Logo container-->
        <div class="menu-extras">
          <div class="menu-item">
            <!-- Mobile menu toggle-->
            <a class="navbar-toggle">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
            <!-- End mobile menu toggle-->
          </div>
        </div>
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <?php echo $this->elements->getMenu(); ?>
            </ul>
            <!-- End navigation menu        -->
        </div>
      </div>
    </header>
    <!-- End Navigation Bar-->
    <!-- Home section-->
        <?php echo $this->getContent(); ?>

    <!-- Footer-->
        <?php echo $this->partial('layouts/_footer'); ?>
    <!-- end of footer-->

    <?php echo $this->tag->javascriptInclude('js/jquery.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/bundle.js'); ?>
    <?php echo $this->tag->javascriptInclude('https://maps.googleapis.com/maps/api/js?v=3.exp', false); ?>
    <?php echo $this->tag->javascriptInclude('js/main.js'); ?>
    
  </body>

</html>