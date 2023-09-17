<?php


function luna_assets(){


    wp_enqueue_style( 'input', get_template_directory_uri() . '/assets/css/input.css', false, '1.1', 'all');


}
add_action( 'wp_enqueue_scripts', 'luna_assets' );
