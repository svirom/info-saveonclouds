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
            <div class="widget widget-left pr-0 pr-md-4 pl-0 pl-sm-5 pl-md-0">
              <div class="logo-footer mb-3">
                <img src="img/logo.png" alt="Logo">
              </div>
              <h4 class="widget-title">Save On Clouds</h4>
              <p class="widget-par mb-0">P.O.BOX 575</p>
              <p class="widget-par mb-0">Broadway, NSW, 2007</p>
              <p class="widget-par mb-0">Australia</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="widget widget-center pt-4 pt-md-5">
              <ul class="widget-list pl-0 pl-sm-5">
                <li><a href="#">About</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="https://saveoncloudsblog.cloud" target="_blank">Documentation</a></li>
                <li><a href="#">FAQs</a></li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="row">
              <div class="col-12">
                <div class="widget widget-right pt-4 pt-md-5">
                  <h4 class="widget-title">Our phones</h4>
                  <p class="widget-par mb-0">United States +13423434</p>
                  <p class="widget-par mb-0">United Kingdom +4434234234</p>
                  <p class="widget-par mb-0">Australia +61434243</p>
                </div>
              </div>
              <div class="col-12 pt-4">
                <div class="widget widget-right">
                  <h4 class="widget-title">Our mail</h4>
                  <ul class="widget-list">
                    <li><a href="mailto:info@saveonclouds.com">info@saveonclouds.com</a></li>
                  </ul>
                </div>
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

			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/date */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); ?>">
								<?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
							</a>
						</p><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
