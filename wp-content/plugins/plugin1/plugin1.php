<?php
/*
Plugin Name:plugin1 Plugin
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Checks the health of your WordPress install
Version: 0.2.0
Author: The Test Plugin Team
Author URI: http://health-check-team.example.com
Text Domain:abfj
Domain Path: /languages

*/

register_activation_hook(
    __FILE__,
    'create_table'
);
function create_table(){
    global $wpdb;
    $table=$wpdb->prefix ."players";
    $query="CREATE TABLE $table(id int AUTO_INCREMENT PRIMARY KEY,name varchar(25),type varchar (25),email varchar(25),phone varchar(15))";
    
    require_once ABSPATH .'wp-admin/includes/upgrade.php';
    dbDelta($query);
    $add="insert into $table (name,type,email,phone)values('Foysal','Allrounder','foysal@gmail.com','01987')";
    $wpdb->query($add);
}

register_deactivation_hook( 
     __FILE__,
'delete_table'
);

function delete_table(){
    global $wpdb;
    $table=$wpdb->prefix ."players";
    $query="drop table $table";
    $wpdb->query($query);
}

add_shortcode('players_code','playerCode');
 function playerCode($atts, $content= '', $tag){
        include dirname(__FILE__,'/player.php');
 }

 function add_my_menu()
{
    add_menu_page(
        'Contact',
        'Contact Menu',
        'manage_options',
        'contact',
        function () {
            include dirname(__FILE__) . '/player.php';
        }
    );
}
function contact_fn()
{
    echo  "Welcome";
}
add_action('admin_menu', 'add_my_menu');

add_action('admin_post_save_player','post_player');
function post_player(){
    global $wpdb; 
    $table=$wpdb->prefix ."players";
    $name=$_POST['name'];
    $type=$_POST['type'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $add="insert into $table(name,type,email,phone) values(' $name','$type','$email',' $phone')";
    $wpdb->query($add);
     wp_redirect(admin_url('admin.php?page=contact'));exit;
}

// add_shortcode('contact_form', 'contactForm');
// function contactForm($atts, $content = '', $tag){
//     include dirname(__FILE__) . '/contact.php';
// }

// add_action('admin_post_nopriv_save_contact','post_contact');
