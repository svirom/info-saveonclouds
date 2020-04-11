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
              
              <?php if ( is_active_sidebar( 'sidebar-child-left' ) ) {
                dynamic_sidebar( 'sidebar-child-left' );
              } ?>

            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4">

            <?php if ( is_active_sidebar( 'sidebar-child-center' ) ) {
                dynamic_sidebar( 'sidebar-child-center' );
              } ?>

          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="row">
              <div class="col-12 pt-4 widget-right">
                
                <?php if ( is_active_sidebar( 'sidebar-child-right' ) ) {
                  dynamic_sidebar( 'sidebar-child-right' );
                } ?>
                
              </div>
            </div>
          </div>
        </div>

        <div class="row copyright mt-4 mt-md-0">
          <div class="col-12">
            <?php if ( is_active_sidebar( 'sidebar-copyright' ) ) {
              dynamic_sidebar( 'sidebar-copyright' );
            } ?>
          </div>
        </div>
      </div>
    </footer>

		<?php wp_footer(); ?>

	</body>
</html>
