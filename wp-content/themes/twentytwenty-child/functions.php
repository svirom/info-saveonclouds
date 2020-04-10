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

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentytwenty_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'twentytwenty' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'twentytwenty' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),
			)
		)
	);

}