<?php add_action( 'init', 'citation_post_type' );
function citation_post_type() {
    register_post_type( 'Citation',
        array(
            'labels' => array(
                'name' => __( 'Citations' ),
                'singular_name' => __( 'Citation' )
            ),
            'public' => true
        )
    );
}

