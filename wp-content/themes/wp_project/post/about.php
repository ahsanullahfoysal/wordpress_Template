<?php
function wpdocs_register_about_cpt() {

  $labels = array(

     'name'                     => __( 'abouts', 'TEXTDOMAINHERE' ),
     'singular_name'            => __( 'about', 'TEXTDOMAINHERE' ),
     'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
     'add_new_item'             => __( 'Add New about', 'TEXTDOMAINHERE' ),
     'edit_item'                => __( 'Edit about', 'TEXTDOMAINHERE' ),
     'new_item'                 => __( 'New about', 'TEXTDOMAINHERE' ),
     'view_item'                => __( 'View about', 'TEXTDOMAINHERE' ),
     'view_items'               => __( 'View abouts', 'TEXTDOMAINHERE' ),
     'search_items'             => __( 'Search abouts', 'TEXTDOMAINHERE' ),
     'not_found'                => __( 'No abouts found.', 'TEXTDOMAINHERE' ),
     'not_found_in_trash'       => __( 'No abouts found in Trash.', 'TEXTDOMAINHERE' ),
     'parent_item_colon'        => __( 'Parent abouts:', 'TEXTDOMAINHERE' ),
     'all_items'                => __( 'All abouts', 'TEXTDOMAINHERE' ),
     'archives'                 => __( 'about Archives', 'TEXTDOMAINHERE' ),
     'attributes'               => __( 'about Attributes', 'TEXTDOMAINHERE' ),
     'insert_into_item'         => __( 'Insert into about', 'TEXTDOMAINHERE' ),
     'uploaded_to_this_item'    => __( 'Uploaded to this about', 'TEXTDOMAINHERE' ),
     'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
     'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
     'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
     'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
     'menu_name'                => __( 'abouts', 'TEXTDOMAINHERE' ),
     'filter_items_list'        => __( 'Filter about list', 'TEXTDOMAINHERE' ),
     'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
     'items_list_navigation'    => __( 'abouts list navigation', 'TEXTDOMAINHERE' ),
     'items_list'               => __( 'abouts list', 'TEXTDOMAINHERE' ),
     'item_published'           => __( 'about published.', 'TEXTDOMAINHERE' ),
     'item_published_privately' => __( 'about published privately.', 'TEXTDOMAINHERE' ),
     'item_reverted_to_draft'   => __( 'about reverted to draft.', 'TEXTDOMAINHERE' ),
     'item_scheduled'           => __( 'about scheduled.', 'TEXTDOMAINHERE' ),
     'item_updated'             => __( 'about updated.', 'TEXTDOMAINHERE' ),
     'item_link'                => __( 'about Link', 'TEXTDOMAINHERE' ),
     'item_link_description'    => __( 'A link to an about.', 'TEXTDOMAINHERE' ),

  );

  $args = array(

     'labels'                => $labels,
     'description'           => __( 'organize and manage company abouts', 'TEXTDOMAINHERE' ),
     'public'                => true,
     'menu_icon'             => 'dashicons-xing',
     'capability_type'       => 'post',
     'supports'              => array( 'title', 'editor','thumbnail','custom-fields' ),
  );

  register_post_type( 'about', $args );

}
add_action( 'init', 'wpdocs_register_about_cpt' );