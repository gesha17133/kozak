<?php 

function kzk_enqueue_scripts(){

    /*
    * CSS files in theme are moved from HTML + CSS morkups 
    */
    wp_enqueue_style( 'main_style_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'animate.min', get_template_directory_uri() . '/css/animate.min.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'colors', get_template_directory_uri() . '/css/colors.css' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css' );
    wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'loading', get_template_directory_uri() . '/css/loading.css' );
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.css' );
    wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
    wp_enqueue_style( 'versions', get_template_directory_uri() . '/css/versions.css' );
    
    /*  
    *  Custom JS ( ajax and default behavior for front-end part )
    */
    wp_enqueue_script( 'hoverdir', get_template_directory_uri() . '/js/hoverdir.js', array('jquery') );
    wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery') );
    wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/scroll.js' );

} 
add_action( 'wp_enqueue_scripts', 'kzk_enqueue_scripts' );