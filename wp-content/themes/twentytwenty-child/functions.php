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
  $html = str_replace( 'custom-logo-link', 'navbar-brand', $html );
  return $html;
}

/* add walker class */
require 'classes/walker-menu-primary.php';

/* register widget areas */
function child_sidebar_registration() {

	// Footer child #1.
	register_sidebar(	
		array(
			'name'        => __( 'Footer left', 'twentytwenty-child' ),
			'id'          => 'sidebar-child-left',
			'description' => '',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => '</div>',
		)
	);

	// Footer child #2.
	register_sidebar(	
		array(
			'name'        => __( 'Footer center', 'twentytwenty-child' ),
			'id'          => 'sidebar-child-center',
			'description' => '',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="widget pt-4 pt-md-5 %2$s">',
			'after_widget'  => '</div>',
		)
	);

	// Footer child #3.
	register_sidebar(	
		array(
			'name'        => __( 'Footer right', 'twentytwenty-child' ),
			'id'          => 'sidebar-child-right',
			'description' => '',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="widget pt-4 %2$s">',
			'after_widget'  => '</div>',
		)
	);

	// Footer copyright.
	register_sidebar(	
		array(
			'name'        => __( 'Footer copyright', 'twentytwenty-child' ),
			'id'          => 'sidebar-copyright',
			'description' => '',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => '</div>',
		)
	);

}
add_action( 'widgets_init', 'child_sidebar_registration' );

/* remove container div in widget menus */
add_filter( 'widget_nav_menu_args', function ( $nav_menu_args, $nav_menu, $args, $instance ) 
{
    $nav_menu_args['container'] = false;
    return $nav_menu_args; 
}, 10, 4 );

/* register navigation login menu */
function child_menus() {
	$locations = array(
		'login_child'  => __( 'Login Menu', 'twentytwenty-child' )
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'child_menus' );