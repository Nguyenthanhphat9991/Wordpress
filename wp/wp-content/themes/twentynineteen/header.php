<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CNTT
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <?php wp_head(); ?>

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri()?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri()?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo get_template_directory_uri()?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.0.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body <?php body_class(); ?>>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:<?php the_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a>
        <i class="icofont-phone"></i> <?php echo get_field('sdt', 'option'); ?>
        <i class="icofont-google-map"></i> <?php echo get_field('address', 'option'); ?>
      </div>
      <?php
      $twitter = get_field('twiter', 'option');
      $facebook = get_field('facebook', 'option');
      $instagram = get_field('instagram', 'option');
      ?>
      <div class="social-links">
        <a href="<?php echo $twitter?>" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="<?php echo $facebook?>" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="<?php echo $instagram?>" class="instagram"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="<?php echo get_home_url()?>"><?php echo get_field('title_site','option');?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


      <nav class="nav-menu d-none d-lg-block">
          <?php
          $menu = wp_nav_menu( array(
          'echo' => false,
          'theme_location' => 'main-menu',
           'container' => '' 
        ) );
          $menu = str_replace('menu-item-has-children', 'drop-down', $menu);

      echo $menu;
          ?>
      </nav>

      <!-- <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#departments">Departments</a></li>
          <li><a href="#doctors">Doctors</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu --> 

      <a href="#appointment" class="appointment-btn scrollto">Make an Appointment</a>

    </div>
  </header><!-- End Header -->