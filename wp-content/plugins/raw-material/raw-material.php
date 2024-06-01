<?php
/*
Plugin Name: Raw Materila
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Checks the health of your WordPress install
Version: 0.3.0
Author: The project Plugin Team
Author URI: http://health-check-team.example.com
Text Domain: midProject
Domain Path: /languages
*/

register_activation_hook(
    __FILE__,
    'create_table'
);
function create_table()
{
    global $wpdb;
    $table = $wpdb->prefix . "raw_material";
    $query = "CREATE TABLE $table(id int AUTO_INCREMENT PRIMARY KEY,name varchar(255), price decimal(10,2))";
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($query);
    $add = "insert into $table(name,price)values('rice','1000')";
    $wpdb->query($add);
}

register_deactivation_hook(
    __FILE__,
    'delete_table'
);

function delete_table()
{
    global $wpdb;
    $table = $wpdb->prefix . "raw_material";
    $query = "drop table $table";
    $wpdb->query($query);
}

function add_my_menu()
{
    add_menu_page(
        'Garements',
        'Garements Menu',
        'manage_options',
        'my-top-level-slug',
        function () {
            include dirname(__FILE__) . '/page.php';
        }
    );
    add_submenu_page(
        'my-top-level-slug',
        'Raw Material',
        'Add material',
        'manage_options',
        'garements',
        function () {
            include dirname(__FILE__) . '/add_material.php';
        }
    );
    add_submenu_page(
        null,
        'update',
        'update Material',
        'manage_options',
        'edit',
        function () {
            include dirname(__FILE__) . '/update.php';
        }
    );
   

}
function contact_fn()
{
    echo  "Welcome";
}
add_action('admin_menu', 'add_my_menu');

add_action('admin_post_save_material','post_material');
function post_material(){
    global $wpdb;
    $name=$_POST['name'];
    $price=$_POST['price'];
    $table = $wpdb->prefix . "raw_material";
    // $wpdb->insert($table,['name'=> $name,'price'=>$price]);

    $add="insert into $table(name,price)values('$name',' $price')";
    $wpdb->query($add);
    wp_redirect(admin_url('admin.php?page=my-top-level-slug'));
    exit;
}
add_action ('admin_post_update_material','update_material');
 function update_material()
 {
    global $wpdb;
    $name=$_POST['name'];
    $price=$_POST['price'];
    $id=$_POST['id'];
    $table=$wpdb->prefix ."raw_material";
    $wpdb->update($table, ['name'=>$name,'price'=>$price], ['id'=> $id]);
        wp_redirect(admin_url('admin.php?page=my-top-level-slug'));
    exit;
 }