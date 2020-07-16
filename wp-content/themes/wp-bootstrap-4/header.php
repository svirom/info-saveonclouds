<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-4' ); ?></a>

	<header class="container-xl main-header">
		<div class="row">
			<nav class="col navbar navbar-expand-xl px-xl-0">

				<?php echo get_custom_logo(); ?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="nav-opener"><span></span></span>
				</button>
			
				<div class="collapse navbar-collapse" id="main-menu">
				<?php
					if ( has_nav_menu( 'primary_child' ) ) {

						wp_nav_menu(
							array(
								'container'  => '',
								'theme_location' => 'primary_child',
								'menu_class' => 'navbar-nav ml-auto header-nav',
								'walker' => new Primary_Walker_Nav_Menu()
							)
						);

					} 
				?>
					<div class="navbar-login ml-4 my-4 my-xl-0">
					<?php
					if ( has_nav_menu( 'login_child' ) ) {

						wp_nav_menu(
							array(
								'container'  => '',
								'items_wrap' => '%3$s',
								'theme_location' => 'login_child',
								'walker' => new Login_Walker()
							)
						);

					} 
					?>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<div id="content" class="site-content">
