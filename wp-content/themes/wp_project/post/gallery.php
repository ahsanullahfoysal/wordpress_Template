<?php
function wpdocs_register_gallery_cpt() {

  $labels = array(

     'name'                     => __( 'gallerys', 'TEXTDOMAINHERE' ),
     'singular_name'            => __( 'gallery', 'TEXTDOMAINHERE' ),
     'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
     'add_new_item'             => __( 'Add New gallery', 'TEXTDOMAINHERE' ),
     'edit_item'                => __( 'Edit gallery', 'TEXTDOMAINHERE' ),
     'new_item'                 => __( 'New gallery', 'TEXTDOMAINHERE' ),
     'view_item'                => __( 'View gallery', 'TEXTDOMAINHERE' ),
     'view_items'               => __( 'View gallerys', 'TEXTDOMAINHERE' ),
     'search_items'             => __( 'Search gallerys', 'TEXTDOMAINHERE' ),
     'not_found'                => __( 'No gallerys found.', 'TEXTDOMAINHERE' ),
     'not_found_in_trash'       => __( 'No gallerys found in Trash.', 'TEXTDOMAINHERE' ),
     'parent_item_colon'        => __( 'Parent gallerys:', 'TEXTDOMAINHERE' ),
     'all_items'                => __( 'All gallerys', 'TEXTDOMAINHERE' ),
     'archives'                 => __( 'gallery Archives', 'TEXTDOMAINHERE' ),
     'attributes'               => __( 'gallery Attributes', 'TEXTDOMAINHERE' ),
     'insert_into_item'         => __( 'Insert into gallery', 'TEXTDOMAINHERE' ),
     'uploaded_to_this_item'    => __( 'Uploaded to this gallery', 'TEXTDOMAINHERE' ),
     'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
     'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
     'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
     'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
     'menu_name'                => __( 'gallerys', 'TEXTDOMAINHERE' ),
     'filter_items_list'        => __( 'Filter gallery list', 'TEXTDOMAINHERE' ),
     'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
     'items_list_navigation'    => __( 'gallerys list navigation', 'TEXTDOMAINHERE' ),
     'items_list'               => __( 'gallerys list', 'TEXTDOMAINHERE' ),
     'item_published'           => __( 'gallery published.', 'TEXTDOMAINHERE' ),
     'item_published_privately' => __( 'gallery published privately.', 'TEXTDOMAINHERE' ),
     'item_reverted_to_draft'   => __( 'gallery reverted to draft.', 'TEXTDOMAINHERE' ),
     'item_scheduled'           => __( 'gallery scheduled.', 'TEXTDOMAINHERE' ),
     'item_updated'             => __( 'gallery updated.', 'TEXTDOMAINHERE' ),
     'item_link'                => __( 'gallery Link', 'TEXTDOMAINHERE' ),
     'item_link_description'    => __( 'A link to an gallery.', 'TEXTDOMAINHERE' ),

  );

  $args = array(

     'labels'                => $labels,
     'description'           => __( 'organize and manage company gallerys', 'TEXTDOMAINHERE' ),
     'public'                => true,
     'menu_icon'             => 'dashicons-xing',
     'capability_type'       => 'post',
     'supports'              => array( 'title', 'editor','thumbnail','custom-fields' ),
  );

  register_post_type( 'gallery', $args );

}
add_action( 'init', 'wpdocs_register_gallery_cpt' );