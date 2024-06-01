<?php

 function wpdocs_register_Slider_cpt() {

   $labels = array(

      'name'                     => __( 'Sliders', 'TEXTDOMAINHERE' ),
      'singular_name'            => __( 'Slider', 'TEXTDOMAINHERE' ),
      'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
      'add_new_item'             => __( 'Add New Slider', 'TEXTDOMAINHERE' ),
      'edit_item'                => __( 'Edit Slider', 'TEXTDOMAINHERE' ),
      'new_item'                 => __( 'New Slider', 'TEXTDOMAINHERE' ),
      'view_item'                => __( 'View Slider', 'TEXTDOMAINHERE' ),
      'view_items'               => __( 'View Sliders', 'TEXTDOMAINHERE' ),
      'search_items'             => __( 'Search Sliders', 'TEXTDOMAINHERE' ),
      'not_found'                => __( 'No Sliders found.', 'TEXTDOMAINHERE' ),
      'not_found_in_trash'       => __( 'No Sliders found in Trash.', 'TEXTDOMAINHERE' ),
      'parent_item_colon'        => __( 'Parent Sliders:', 'TEXTDOMAINHERE' ),
      'all_items'                => __( 'All Sliders', 'TEXTDOMAINHERE' ),
      'archives'                 => __( 'Slider Archives', 'TEXTDOMAINHERE' ),
      'attributes'               => __( 'Slider Attributes', 'TEXTDOMAINHERE' ),
      'insert_into_item'         => __( 'Insert into Slider', 'TEXTDOMAINHERE' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Slider', 'TEXTDOMAINHERE' ),
      'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
      'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
      'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
      'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
      'menu_name'                => __( 'Sliders', 'TEXTDOMAINHERE' ),
      'filter_items_list'        => __( 'Filter Slider list', 'TEXTDOMAINHERE' ),
      'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
      'items_list_navigation'    => __( 'Sliders list navigation', 'TEXTDOMAINHERE' ),
      'items_list'               => __( 'Sliders list', 'TEXTDOMAINHERE' ),
      'item_published'           => __( 'Slider published.', 'TEXTDOMAINHERE' ),
      'item_published_privately' => __( 'Slider published privately.', 'TEXTDOMAINHERE' ),
      'item_reverted_to_draft'   => __( 'Slider reverted to draft.', 'TEXTDOMAINHERE' ),
      'item_scheduled'           => __( 'Slider scheduled.', 'TEXTDOMAINHERE' ),
      'item_updated'             => __( 'Slider updated.', 'TEXTDOMAINHERE' ),
      'item_link'                => __( 'Slider Link', 'TEXTDOMAINHERE' ),
      'item_link_description'    => __( 'A link to an Slider.', 'TEXTDOMAINHERE' ),

   );

   $args = array(

      'labels'                => $labels,
      'description'           => __( 'organize and manage company Sliders', 'TEXTDOMAINHERE' ),
      'public'                => true,
      'menu_icon'             => 'dashicons-xing',
      'capability_type'       => 'post',
      'supports'              => array( 'title', 'editor','thumbnail','custom-fields' ),
   );

   register_post_type( 'slider', $args );

}
add_action( 'init', 'wpdocs_register_Slider_cpt' );