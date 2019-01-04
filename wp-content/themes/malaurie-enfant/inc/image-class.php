<?php

function example_add_img_class( $class ) {

  return $class . ' img-fluid';

}

add_filter( 'get_image_tag_class', 'example_add_img_class' );
