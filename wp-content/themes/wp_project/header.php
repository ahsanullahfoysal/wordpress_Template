<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
 
  <title><?php echo bloginfo('title') ?> </title>
  <?php wp_head() ?>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid ">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
              <?php echo get_theme_mod('phone');?>
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
              <?php echo get_theme_mod('email');?>
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
              <?php echo get_theme_mod('location');?>
              </span>
            </a>
          </div>
        </div>
      </div>
<!-- navbar -->
      <div class="header_bottom">
        <div class="container-fluid">
            <?php the_custom_logo() ;?>
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="<?php  echo home_url('/')  ?>"><?php bloginfo('title')?></a>
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
                </li>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </ul>
            </div> -->
            <?php 
                wp_nav_menu(array(
                    'theme_location' =>'primary_menu',
                    'menu_class'=> "navbar-nav ",
                    'container_class'=>"collapse navbar-collapse",
                    'container_id'=>"navbarSupportedContent",
                    'walker' => new AWP_Menu_Walker(),
                )
                );
            ?>
          </nav>
        </div>
      </div>