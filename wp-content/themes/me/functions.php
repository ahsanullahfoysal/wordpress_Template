<?php
  add_theme_support('post-thumbnails');

  function add_my_scripts(){
    wp_enqueue_style('style', get_theme_file_uri('assets/css/font-awesome.min.css'));
    wp_enqueue_style('style1', get_theme_file_uri('assets/css/flaticon.css'));
    wp_enqueue_style('style2', get_theme_file_uri('assets/css/animate.css'));
    wp_enqueue_style('style3', get_theme_file_uri('assets/css/owl.carousel.min.css'));
    wp_enqueue_style('style5', get_theme_file_uri('assets/css/owl.theme.default.min.css'));
    wp_enqueue_style('style6', get_theme_file_uri('assets/css/bootstrap.min.css'));
    wp_enqueue_style('style7', get_theme_file_uri('assets/css/bootsnav.css'));
    wp_enqueue_style('style8', get_theme_file_uri('assets/css/style.css'));
    wp_enqueue_style('style9', get_theme_file_uri('assets/css/responsive.css'));
    wp_enqueue_style('style_sdn','https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext');

    wp_enqueue_script('jquery',get_theme_file_uri('assets/js/jquery.js'));
    wp_enqueue_script('jquery1',get_theme_file_uri('assets/js/bootstrap.min.js'));
    wp_enqueue_script('jquery2',get_theme_file_uri('assets/js/bootsnav.js'));
    wp_enqueue_script('jquery3',get_theme_file_uri('assets/js/jquery.sticky.js'));
    wp_enqueue_script('jquery4',get_theme_file_uri('assets/js/progressbar.js'));
    wp_enqueue_script('jquery5',get_theme_file_uri('assets/js/jquery.appear.js'));
    wp_enqueue_script('jquery6',get_theme_file_uri('assets/js/owl.carousel.min.js'));
    wp_enqueue_script('jquery7',get_theme_file_uri('assets/js/custom.js'));
    wp_enqueue_script('ccdn','https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js');
    wp_enqueue_script('cdn1','https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js');


  
 }