<?php 

require get_template_directory().'/functional_parts/post_types.php';
require get_template_directory().'/functional_parts/specific-functions.php';

/*
* Theme supports 
*/
add_theme_support( 'post-thumbnails', array( 'post', 'product', 'replies', 'services' ) );

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'Menu in header',
		'footer_menu' => 'Мenu in footer'
	] );
} );

function kzk_enqueue_scripts(){

    /*
    * CSS files in theme are moved from HTML + CSS morkups 
    */
    wp_enqueue_style( 'glide-core', get_template_directory_uri() . '/lib/glide/glide.core.min.css'  );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css'  );
    wp_enqueue_style('slick-css', 'cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array('jquery') );
    wp_enqueue_script( 'slick-js', 'cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',array('jquery') );
    /*  
    *  Custom JS ( ajax and default behavior for front-end part )
    */
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', false, true );
    
} 
add_action( 'wp_enqueue_scripts', 'kzk_enqueue_scripts' );