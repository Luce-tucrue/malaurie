<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package malaurie
 */

add_filter('comments_open', 'wpc_comments_closed', 10, 2);
function wpc_comments_closed( $open, $post_id ) {
  $post = get_post( $post_id );
  if ('post' == $post->post_type)
    $open = false;
  return $open;
}

add_action( 'admin_menu' , 'remove_commentstatus_meta_box' );
function remove_commentstatus_meta_box() {
  remove_meta_box( 'commentstatusdiv' , 'post' , 'normal' );
}
