<?php
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
 function add_my_scripts(){
    wp_enqueue_style('bootstrap', get_theme_file_uri('css/bootstrap.css'));
    wp_enqueue_style('style', get_theme_file_uri('css/style.css'));
    wp_enqueue_style('responsive', get_theme_file_uri('css/responsive.css'));
    wp_enqueue_style('font_awesome', get_theme_file_uri('css/font-awesome.min.css'));
    wp_enqueue_style('style1', get_theme_file_uri('style.css'));
    wp_enqueue_style('style_cdn', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet');
    wp_enqueue_style('style_cdn2', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');

    wp_enqueue_script('jquery',get_theme_file_uri('js/jquery-3.4.1.min.js'));
    wp_enqueue_script('bootstrap_js',get_theme_file_uri('js/bootstrap.js'));
    wp_enqueue_script('custom',get_theme_file_uri('js/custom.js'));
    wp_enqueue_script('cdn1','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    wp_enqueue_script('cdn2','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
    
    

 }
 add_action('wp_enqueue_scripts','add_my_scripts');

 function mytheme_register_nav_menu(){
    register_nav_menus(array(
        'primary_menu'=>__('primary Menu','text_domain'),
    )
    );
 }
 add_action('after_setup_theme','mytheme_register_nav_menu',0);

 class AWP_Menu_Walker extends Walker_Nav_Menu{
    function start_el(&$output,  $item,$depth=0 ,$args =[],$id=0){
        $output.='<li class="nav-item"><a class="nav-link" href="'.$item->url.'">' .$item->title.'</a>';
    }
 }
 function set_my_sidebar(){
   register_sidebar(array(
      'name'          => 'Sidebar', 'textdomain',
		'id'            => 'sidebar-1',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
   ));
 }
 add_action('widgets_init','set_my_sidebar');
 
require_once('post/slider2.php');
require_once('post/says.php');
require_once('post/gallery.php');
require_once('post/about.php');

function my_customizer( $wp_customize ) {
   // Theme Options Panel
    $wp_customize->add_panel( 'my_theme_options', 
        array(
            'title'            => __( 'panel Options', 'my_theme' ),
            'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'my_theme' ),
        ) 
    );
    
    $wp_customize->add_section( 'text_options', 
        array(
            'title'         => __( 'Text Options', 'my_theme' ),
            'priority'      => 1,
            'panel'         => 'my_theme_options'
        ) 
    );
   
    // Setting for Copyright text.
    $wp_customize->add_setting( 'my_copyright_text',
        array(
            'default'           => __( 'All rights reserved ', 'my_theme' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control( 'my_copyright_text', 
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'text_options',
            'label'       => 'Copyright text',
            'description' => 'Text put here will be outputted in the footer',
        ) 
    );
    $wp_customize->add_setting( 'logo', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'ic_sanitize_image',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo',
        array(
            'label'    => __( 'image', 'text-domain' ),
            'section'  => 'text_options',
            'settings' => 'logo',
        )
    ) );

    $wp_customize->add_section( 'intro_options', 
    array(
        'title'         => __( 'intro_options', 'my_theme' ),
        'priority'      => 1,
        'panel'         => 'my_theme_options'
    ) 
);

    $wp_customize->add_setting( 'phone',
    array(
        'default'           => __( 'All rights reserved ', 'my_theme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
// Control for Copyright text
$wp_customize->add_control( 'phone', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'intro_options',
        'label'       => 'phone',
        'description' => 'Text put here will be outputted in the footer',
    ) 
);
    $wp_customize->add_setting( 'email',
    array(
        'default'           => __( 'All rights reserved ', 'my_theme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
// Control for Copyright text
$wp_customize->add_control( 'email', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'intro_options',
        'label'       => 'email',
        'description' => 'Text put here will be outputted in the footer',
    ) 
);
    $wp_customize->add_setting( 'location',
    array(
        'default'           => __( 'All rights reserved ', 'my_theme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
// Control for Copyright text
$wp_customize->add_control( 'location', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'intro_options',
        'label'       => 'location',
        'description' => 'Text put here will be outputted in the footer',
    ) 
);
    $wp_customize->add_setting( 'info',
    array(
        'default'           => __( 'All rights reserved ', 'my_theme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
// Control for Copyright text
$wp_customize->add_control( 'info', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'intro_options',
        'label'       => 'info',
        'description' => 'Text put here will be outputted in the footer',
    ) 
);
    
}
function ic_sanitize_image( $file, $setting ) {

	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon'
	);

	//check file type from file name
	$file_ext = wp_check_filetype( $file, $mimes );

	//if file has a valid mime type return it, otherwise return default
	return ( $file_ext['ext'] ? $file : $setting->default );
}
add_action( 'customize_register', 'my_customizer' ); 
