<?php

function luna_setup(){

    register_nav_menus(array(
        'primary_menu' => __( 'Primary Menu', 'luna' ),
    ) );
}


add_action( 'after_setup_theme', 'luna_setup' );


function luna_assets(){

    wp_enqueue_style( 'google-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700');
    wp_enqueue_style( 'input', get_template_directory_uri() . '/assets/css/output.css', false, '1.1', 'all');
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', false, '1.1', 'all');

}
add_action( 'wp_enqueue_scripts', 'luna_assets' );