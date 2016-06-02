<head>
    <?php echo $this->tag->getTitle(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php echo $this->tag->stylesheetLink('img/favicon.ico'); ?>
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