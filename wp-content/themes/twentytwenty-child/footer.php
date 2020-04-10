<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
		<footer class="main-footer">
      <div class="container-xl">
               
        <!-- footer widgets -->
        <div class="row footer-widgets">

          <div class="col-12 col-md-4">
            <div class="widget-left pr-0 pr-md-4 pl-0 pl-sm-5 pl-md-0">
              <div class="logo-footer mb-3">
                <?php echo get_custom_logo(); ?>
              </div>
              
              <?php if ( is_active_sidebar( 'sidebar-child-1' ) ) {
                dynamic_sidebar( 'sidebar-child-1' );
              } ?>

            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4">

            <?php if ( is_active_sidebar( 'sidebar-child-2' ) ) {
                dynamic_sidebar( 'sidebar-child-2' );
              } ?>

          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="row">
              <div class="col-12 pt-4 widget-right">
                
                <?php if ( is_active_sidebar( 'sidebar-child-3' ) ) {
                  dynamic_sidebar( 'sidebar-child-3' );
                } ?>
                
              </div>
            </div>
          </div>

        </div>
        <div class="row copyright mt-4 mt-md-0">
          <div class="col">
            <p>Copyright 2020 Save On Clouds by CloudWare Pty Ltd. | All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>

		<?php wp_footer(); ?>

	</body>
</html>
