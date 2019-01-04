<?php
/**
 ** activation theme
 **/


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/styles/compiled.min.css' );
}

function child_script() {
    wp_enqueue_script( 'child_script', get_stylesheet_directory_uri() . '/assets/js/script.js' , array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'child_script');


/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/no-comment.php';

/**
 * Add image class on all images.
 */
require get_stylesheet_directory() . '/inc/image-class.php';

/**
 * menu to prevent to go to single page.
 */
require get_stylesheet_directory() . '/inc/menu.php';
