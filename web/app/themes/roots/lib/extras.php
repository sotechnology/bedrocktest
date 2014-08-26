<?php
/**
 * Clean up the_excerpt()
 */
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Read More', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);

register_nav_menu( 'footer', 'Footer Menu' );

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'stories',
    array(
      'labels' => array(
        'name' => __( 'Stories' ),
        'singular_name' => __( 'Story' )
      ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('thumbnail', 'editor', 'author')
    )
  );
}