<?php 

require get_template_directory().'/functional_parts/post_types.php';
require get_template_directory().'/functional_parts/specific-functions.php';

/*
* Theme supports 
*/

add_action( 'after_setup_theme', function(){

    register_nav_menus( [
		'header_menu_left'  => 'Menu in header Left',
        'header_menu_right' => 'Menu in Header Right',
		'footer_menu'       => 'Мenu in footer',
    ] );


    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'custom-logo');

} );

function kzk_enqueue_scripts(){

    /*
    * CSS files in theme are moved from HTML + CSS morkups 
    */
    wp_enqueue_style( 'glide-core', get_template_directory_uri() . '/lib/glide/glide.core.min.css'  );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css'  );
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css' );
    wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js',array('jquery') );
    /*  
    *  Custom JS ( ajax and default behavior for front-end part )
    */
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', false, true );
    
} 
add_action( 'wp_enqueue_scripts', 'kzk_enqueue_scripts' );