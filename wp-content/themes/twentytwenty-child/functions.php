<?php

add_action( 'wp_enqueue_scripts', 'child_theme_scripts' );
function child_theme_scripts() {
 
	wp_enqueue_style( 'parent_style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'fonts_style', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&display=swap' );
	wp_enqueue_style( 'bootstrap_style', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_style', get_stylesheet_directory_uri() . '/assets/css/main.css', array( 'bootstrap_style' ) );
	/* wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'parent_style', 'bootstrap_style', 'main_style' ),
		wp_get_theme()->get('Version')
	); */
	wp_register_script('bootstrap_js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
	wp_enqueue_script('bootstrap_js');
}

/* change custom logo classes */
add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {

    // $html = str_replace( 'custom-logo', 'your-custom-class', $html );
    $html = str_replace( 'custom-logo-link', 'navbar-brand', $html );

    return $html;
}

/* add walker class */
require 'classes/walker-menu-primary.php';