<?php
    
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    function add_my_styles(){
        wp_enqueue_style('style',get_stylesheet_uri());
        wp_enqueue_style('boostrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css");
        wp_enqueue_style('script',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js");

    }

        add_action('wp_enqueue_scripts','add_my_styles');
         function mytheme_register_nav_menu(){
            register_nav_menus(
                array(
                    'primary_menu' =>__('primary Menu', 'text_domain'),
                    'footer_menu' =>__('Footer Menu', 'text_domain'),

                )
                );
        }
        add_action('after_setup_theme','mytheme_register_nav_menu',0);

        class AWP_Menu_Walker extends Walker_Nav_Menu {
            function start_el(&$output, $item, $depth=0, $args=[], $id= 0)
            {
                $output.='<li class="nav-item"><a class="nav-link" href="'. $item->url.'">' .$item->title.'</a>';
            }
        }
