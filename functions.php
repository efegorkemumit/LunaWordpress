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
    wp_enqueue_script( 'font-awesome', 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js', array(),  null, true);


}
add_action( 'wp_enqueue_scripts', 'luna_assets' );

function luna_customize_register($wp_customize){

    $wp_customize->add_section('communication', array(
        'title'    => __('Communication', 'luna'),
        'description' => '',
        'priority' => 120,
    ));
    $wp_customize->add_setting('facebook_link', array(
        'default'        => '',
        'sanitize_callback'     => 'esc_url_raw',

    ));

    $wp_customize->add_control('facebook_link', array(
        'label'      => __('Facebook', 'luna'),
        'section'    => 'communication',
        'type'   => 'text',
    ));

    $wp_customize->add_setting('twitter_link', array(
        'default'        => '',
        'sanitize_callback'     => 'esc_url_raw',

    ));

    $wp_customize->add_control('twitter_link', array(
        'label'      => __('Twitter', 'luna'),
        'section'    => 'communication',
        'type'   => 'text',
    ));

    $wp_customize->add_setting('instagram_link', array(
        'default'        => '',
        'sanitize_callback'     => 'esc_url_raw',

    ));

    $wp_customize->add_control('instagram_link', array(
        'label'      => __('Instagram', 'luna'),
        'section'    => 'communication',
        'type'   => 'text',
    ));

    $wp_customize->add_setting('address', array(
        'default'        => '',

    ));

    $wp_customize->add_control('address', array(
        'label'      => __('address', 'luna'),
        'section'    => 'communication',
        'type'   => 'text',
    ));

    $wp_customize->add_setting('copyright', array(
        'default'        => '',

    ));

    $wp_customize->add_control('copyright', array(
        'label'      => __('copyright', 'luna'),
        'section'    => 'communication',
        'type'   => 'text',
    ));


    $wp_customize->add_setting('phone', array(
        'default'        => '',

    ));

    $wp_customize->add_control('phone', array(
        'label'      => __('phone', 'luna'),
        'section'    => 'communication',
        'type'   => 'text',
    ));

    $wp_customize->add_setting('email', array(
        'default'        => '',

    ));

    $wp_customize->add_control('email', array(
        'label'      => __('email', 'luna'),
        'section'    => 'communication',
        'type'   => 'text',
    ));


    //////////////// LOGO SETTINGS

    $wp_customize->add_section('custom_logo_section', array(
        'title'    => __('Logo Settings', 'luna'),
        'description' => '',
        'priority' => 30,
    ));

    $wp_customize->add_setting('custom_logo', array(
        'default'        => '',
        'sanitize_callback'     => 'esc_url_raw',

    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'custom_logo', array(
        'label'    => __('Image Upload Test', 'luna'),
        'section'  => 'custom_logo_section',
        'settings' => 'custom_logo',
    )));

    //////////////// FOOTER LOGO SETTINGS

    $wp_customize->add_section('custom_footer_logo_section', array(
        'title'    => __('Footer Logo Settings', 'luna'),
        'description' => '',
        'priority' => 30,
    ));

    $wp_customize->add_setting('footer_custom_logo', array(
        'default'        => '',
        'sanitize_callback'     => 'esc_url_raw',

    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_custom_logo', array(
        'label'    => __('Image Upload Test', 'luna'),
        'section'  => 'custom_footer_logo_section',
        'settings' => 'footer_custom_logo',
    )));

     //////////////// TESTIMONIAL SETTINGS

     $wp_customize->add_section('testimonial_settings', array(
        'title'    => __('Testimonial  Settings', 'luna'),
        'description' => '',
        'priority' => 60,
    ));

    for($i=1; $i<=3; $i++)
    {
        $wp_customize->add_setting('testimonial_'.$i. '_text', array(
            'default'        => '',
            'sanitize_callback'     => 'sanitize_text_field',
        ));

        $wp_customize->add_control('testimonial_'.$i. '_text', array(
            'label'    => __('Testimonial_'.$i. ' Text', 'luna'),
            'section'  => 'testimonial_settings',
            'type' => 'textarea',
        ));


        $wp_customize->add_setting('testimonial_'.$i. '_name', array(
            'default'        => '',
            'sanitize_callback'     => 'sanitize_text_field',
        ));

        $wp_customize->add_control('testimonial_'.$i. '_name', array(
            'label'    => __('Testimonial_'.$i. ' Name', 'luna'),
            'section'  => 'testimonial_settings',
            'type' => 'text',
        ));

        $wp_customize->add_setting('testimonial_'.$i. '_city', array(
            'default'        => '',
            'sanitize_callback'     => 'sanitize_text_field',
        ));

        $wp_customize->add_control('testimonial_'.$i. '_city', array(
            'label'    => __('Testimonial_'.$i. ' City', 'luna'),
            'section'  => 'testimonial_settings',
            'type' => 'text',
        ));

        $wp_customize->add_setting('testimonial_'.$i. '_ab', array(
            'default'        => '',
            'sanitize_callback'     => 'sanitize_text_field',
        ));

        $wp_customize->add_control('testimonial_'.$i. '_ab', array(
            'label'    => __('Testimonial_'.$i. ' ab', 'luna'),
            'section'  => 'testimonial_settings',
            'type' => 'text',
        ));



    }

}
add_action('customize_register', 'luna_customize_register');

function luna_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer 1 Widgets', 'luna' ),
		'id'            => 'footer-1',
		'description'   => __( 'Widgets in this area will be shown under your single posts, before comments.', 'luna' ),
		'before_widget'	=> '<div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:mb-0">',
		'after_widget'	=> '</div>',
		'before_title'	=> '',
		'after_title'	=> '',
    ) );
    register_sidebar( array(
		'name'          => __( 'Footer 2 Widgets', 'luna' ),
		'id'            => 'footer-2',
		'description'   => __( 'Widgets in this area will be shown under your single posts, before comments.', 'luna' ),
		'before_widget'	=> '<div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:mb-0">',
		'after_widget'	=> '</div>',
		'before_title'	=> '',
		'after_title'	=> '',
    ) );
}
add_action( 'widgets_init', 'luna_widgets_init' );
