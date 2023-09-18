<?php


function luna_assets(){


    wp_enqueue_style( 'input', get_template_directory_uri() . '/assets/css/output.css', false, '1.1', 'all');
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', false, '1.1', 'all');

}
add_action( 'wp_enqueue_scripts', 'luna_assets' );
