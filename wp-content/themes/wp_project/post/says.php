<?php
function wpdocs_register_says_cpt() {

$labels = array(

   'name'                     => __( 'say', 'TEXTDOMAINHERE' ),
   'singular_name'            => __( 'say', 'TEXTDOMAINHERE' ),
   'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
   'add_new_item'             => __( 'Add New say', 'TEXTDOMAINHERE' ),
   'edit_item'                => __( 'Edit say', 'TEXTDOMAINHERE' ),
   'new_item'                 => __( 'New say', 'TEXTDOMAINHERE' ),
   'view_item'                => __( 'View say', 'TEXTDOMAINHERE' ),
   'view_items'               => __( 'View says', 'TEXTDOMAINHERE' ),
   'search_items'             => __( 'Search says', 'TEXTDOMAINHERE' ),
   'not_found'                => __( 'No says found.', 'TEXTDOMAINHERE' ),
   'not_found_in_trash'       => __( 'No says found in Trash.', 'TEXTDOMAINHERE' ),
   'parent_item_colon'        => __( 'Parent says:', 'TEXTDOMAINHERE' ),
   'all_items'                => __( 'All says', 'TEXTDOMAINHERE' ),
   'archives'                 => __( 'say Archives', 'TEXTDOMAINHERE' ),
   'attributes'               => __( 'say Attributes', 'TEXTDOMAINHERE' ),
   'insert_into_item'         => __( 'Insert into say', 'TEXTDOMAINHERE' ),
   'uploaded_to_this_item'    => __( 'Uploaded to this say', 'TEXTDOMAINHERE' ),
   'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
   'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
   'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
   'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
   'menu_name'                => __( 'says', 'TEXTDOMAINHERE' ),
   'filter_items_list'        => __( 'Filter say list', 'TEXTDOMAINHERE' ),
   'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
   'items_list_navigation'    => __( 'says list navigation', 'TEXTDOMAINHERE' ),
   'items_list'               => __( 'says list', 'TEXTDOMAINHERE' ),
   'item_published'           => __( 'say published.', 'TEXTDOMAINHERE' ),
   'item_published_privately' => __( 'say published privately.', 'TEXTDOMAINHERE' ),
   'item_reverted_to_draft'   => __( 'say reverted to draft.', 'TEXTDOMAINHERE' ),
   'item_scheduled'           => __( 'say scheduled.', 'TEXTDOMAINHERE' ),
   'item_updated'             => __( 'say updated.', 'TEXTDOMAINHERE' ),
   'item_link'                => __( 'say Link', 'TEXTDOMAINHERE' ),
   'item_link_description'    => __( 'A link to an say.', 'TEXTDOMAINHERE' ),

);

$args = array(

   'labels'                => $labels,
   'description'           => __( 'organize and manage company says', 'TEXTDOMAINHERE' ),
   'public'                => true,
   'menu_icon'             => 'dashicons-xing',
   'capability_type'       => 'post',
   'supports'              => array( 'title', 'editor','thumbnail','custom-fields' ),
);

register_post_type( 'say', $args );

}
add_action( 'init', 'wpdocs_register_says_cpt' );