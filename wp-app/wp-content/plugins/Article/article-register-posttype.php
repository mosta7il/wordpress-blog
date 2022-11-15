<?php
/*
Plugin Name: Register Custom Post Types

*/
function article_register_post_type() {
    $labels = array(
        'name' => __( 'Article', 'twentythirteen'),
        'singular_name' => __( 'Article', 'twentythirteen' ),
        'add_new' => __( 'New Article', 'twentythirteen' ),
        'add_new_item' => __( 'Add New Article', 'twentythirteen' ),
        'all_items'    => __( 'All articles', 'twentythirteen' ),
        'edit_item' => __( 'Edit Article', 'twentythirteen' ),
        'new_item' => __( 'New Article', 'twentythirteen' ),
        'view_item' => __( 'View Articles', 'twentythirteen' ),
        'search_items' => __( 'Search Articles', 'twentythirteen' ),
        'not_found' =>  __( 'No Articles Found', 'twentythirteentwentythirteen' ),
        'not_found_in_trash' => __( 'No Articles found in Trash', 'twentythirteen'),
    );

    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => false,
        'supports' => array(
         'title',
         'editor',
         'excerpt',
         'custom-fields',
         'thumbnail',
         'comments',
         'page-attributes'
        ),
        'taxonomies' => array('category', 'tags'),
        'rewrite'   => array( 'slug' => 'article', 'with_front' => false),
        'show_in_rest' => true
    );
    register_post_type( 'Article', $args );
}
add_action( 'init', 'article_register_post_type' );