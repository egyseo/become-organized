<!DOCTYPE html>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/img/favicon.ico">

  <title>Become Organized</title>

  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">

  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/custom.css" rel="stylesheet">

  <!-- Google Fonts  -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700" rel="stylesheet"> -->

  <!-- Typekit Fonts -->
  <link rel="stylesheet" href="https://use.typekit.net/khm6dnq.css">
    
  <?php wp_head(); ?>  

  <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body <?php body_class(); ?>>

  <!-- HEADER
    ================================================================ -->
  <header class="site-header" role="banner">

    <!-- NAVBAR
      ================================================================ -->
    <div class="navbar-wrapper">

      <nav class="navbar navbar-custom navbar-inverse navbar-fixed-top" role="navigation">
      
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand navbar-logo" href="#">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/BOLogoType_White_thick.png" alt="Become Organized">
            </a>
          </div><!-- navbar-header -->
          <?php 
            wp_nav_menu( array(
              'theme_location'    => 'primary',
              'container'         => 'nav',
              'container_class'   => 'navbar-collapse collapse',
              'menu_class'        => 'nav navbar-nav navbar-right',
              'menu_id'           => 'myNavbar' 
            ));
          ?>
        </div><!-- container -->
      </nav><!-- navbar -->

    </div><!-- navbar-wrapper -->

</header>