<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->tag->getTitle(); ?>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
    <?php echo $this->tag->stylesheetLink('css/grid.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/style.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/camera.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/jquery.fancybox.css'); ?>

    <?php echo $this->tag->javascriptInclude('js/jquery.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/jquery-migrate-1.2.1.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/device.min.js'); ?>

</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div class="camera_container">
            <div id="camera" class="camera_wrap">
                <div data-thumb="/images/slide01_thumb.jpg" data-src="/images/slide01.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb="/images/slide02_thumb.jpg" data-src="/images/slide02.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb="/images/slide03_thumb.jpg" data-src="/images/slide03.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
            </div>

            <div class="brand wow fadeIn">
                <h1 class="brand_name">
                    <a href="./">Cafe</a>
                </h1>
            </div>
        </div>
        
        <div class="toggle-menu-container">
            <nav class="nav">
                <div class="nav_title"></div>
                <a class="sf-menu-toggle fa fa-bars" href="#"></a>
                <ul class="sf-menu">
                    <li class="active">
                        <a href="./">Home</a>
                    </li>
                    <li>
                        <a href="index-1.html">About</a>
                        <ul>
                            <li>
                                <a href="#">Quisque nulla</a>
                            </li>
                            <li>
                                <a href="#">Vestibulum libero</a>
                                <ul>
                                    <li>
                                        <a href="#">Lorem</a>
                                    </li>
                                    <li>
                                        <a href="#">Dolor</a>
                                    </li>
                                    <li>
                                        <a href="#">Sit amet</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Vivamus eget nibh</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index-2.html">What We Do</a>
                    </li>
                    <li>
                        <a href="index-3.html">Menu</a>
                    </li>
                    <li>
                        <a href="index-4.html">Contacts</a>
                    </li>
                </ul>
            </nav>            
        </div>

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <?php echo $this->getContent(); ?>
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <?php echo $this->partial('layouts/_footer'); ?>
</div>

<?php echo $this->tag->javascriptInclude('js/jquery.js'); ?>
</body>
</html>