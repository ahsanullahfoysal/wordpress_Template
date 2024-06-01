<?php
/*
Plugin Name:wp Project Plugin
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Checks the health of your WordPress install
Version: 0.1.0
Author: The Test Plugin Team
Author URI: http://health-check-team.example.com
Text Domain: ghgfjgh
Domain Path: /languages
*/

register_activation_hook(
	__FILE__,
	'create_table'
);
function create_table() {
    global $wpdb;
    $table=$wpdb->prefix ."students";
    $query="CREATE TABLE $table(id int AUTO_INCREMENT PRIMARY KEY,name varchar(255),email varchar(50),phone varchar(15))";
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta( $query );
    $add="insert into $table(name,email,phone)values('Habib','habib@email.com','017')";
    $wpdb->query($add);
    
    //contact
    $table=$wpdb->prefix ."students_contact";
    $query1="CREATE TABLE $table(id int AUTO_INCREMENT PRIMARY KEY,name varchar(50),email varchar(50),message varchar(255))";
    $wpdb->query($query1);



}
register_deactivation_hook(
	__FILE__,
	'delete_table'
);

function delete_table(){
    global $wpdb;
    $table=$wpdb->prefix ."students";
    $query="drop table $table";
    $wpdb->query($query);
}
add_shortcode('test_code', 'testCode');
function testCode($atts, $content = '', $tag){
    include dirname(__FILE__) . '/page.php';
}
function add_my_menu()
{
    add_menu_page(
        'Contact',
        'Contact Menu',
        'manage_options',
        'contact',
        function () {
            include dirname(__FILE__) . '/page.php';
        }
    );
}
function contact_fn()
{
    echo  "Welcome";
}
add_action('admin_menu', 'add_my_menu');

add_action('admin_post_save_student','post_student');
function post_student(){
    global $wpdb; 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $table=$wpdb->prefix."students";
    $add="insert into $table(name,email,phone) values(' $name','$email',' $phone')";
    $wpdb->query($add);
     wp_redirect(admin_url(''));exit;
}
add_shortcode('contact_form', 'contactForm');
function contactForm($atts, $content = '', $tag){
    include dirname(__FILE__) . '/contact.php';
}
add_action('admin_post_nopriv_save_contact','post_contact');
function post_contact() {
    global $wpdb; 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['msg'];
    $table=$wpdb->prefix."students_contact";
    $add="insert into $table(name,email,message) values(' $name','$email',' $message')";
    $wpdb->query($add);
    wp_redirect(home_url());
    exit();
}
