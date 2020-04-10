<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header class="container-xl main-header">
			<div class="row">
				<nav class="col navbar navbar-expand-xl px-xl-0">

					<?php echo get_custom_logo(); ?>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
						<span class="nav-opener"><span></span></span>
					</button>
				
					<div class="collapse navbar-collapse" id="main-menu">
					<?php
						if ( has_nav_menu( 'primary' ) ) {

							wp_nav_menu(
								array(
									'container'  => '',
									// 'items_wrap' => '%3$s',
									'theme_location' => 'primary',
									'menu_class' => 'navbar-nav ml-auto header-nav',
									'walker' => new Primary_Walker_Nav_Menu()
								)
							);

						} 
						?>
						<div class="navbar-login ml-4 my-4 my-xl-0">
							<a href="#" class="btn btn-lp mr-4"><?php _e('Sign Up', 'twentytwenty-child'); ?></a>
							<a href="#" class="btn btn-link"><?php _e('Login', 'twentytwenty-child'); ?></a>
						</div>
					</div>
				</nav>
			</div>
		</header>