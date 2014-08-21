<?php
/**
 * The template for displaying the footer
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage WRDSB
 */
?>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <!-- automate address -->

              <?php 
                if (function_exists('wrdsb_school_info_display_new')) {
                  wrdsb_school_info_display_new();
                }
                else {
                  ?>
                  <h4>Waterloo Region District School Board</h4>
              <address>51 Ardelt Avenue<br />
                Kitchener, ON N2C 2R5<br />
              </address>
              <address>
                Phone: 519-570-0003<br />
                Email: <a href="mailto:info@wrdsb.on.ca">info@wrdsb.on.ca</a>
              </address>
              <?php  
                }
              ?>
              

              <div class="social-icons">
                <!--<a href="#"><span class="icon-facebook" title="Facebook"></span></a>-->
                <!--<a href="#"><span class="icon-twitter" title="Twitter"></span></a>-->
                <!--<a href="#"><span class="icon-youtube" title="YouTube"></span></a>-->
              </div>
             
            </div>
            <div class="col-sm-6 col-md-3">
              <?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
                <?php dynamic_sidebar( 'footer-left' ); ?>
              <?php endif; ?>
            </div>
            <div class="col-sm-6 col-md-3">
              <?php if ( is_active_sidebar( 'footer-centre' ) ) : ?>
                <?php dynamic_sidebar( 'footer-centre' ); ?>
              <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-3">
              <?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
                <?php dynamic_sidebar( 'footer-right' ); ?>
              <?php endif; ?>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <h6 class="copyright">A WRDSB-ITS Solution</h6>
            </div>
            <div class="col-sm-4">
              <h6 class="copyright">
                <?php wp_loginout(); ?>
                &nbsp;&nbsp; | &nbsp;&nbsp;
                <a href="http://staff.wrdsb.ca">Log in to WRDSB Staff Website</a>
                <?php 
                  $parsed_url = parse_url(network_site_url());
                  $host = explode('.', $parsed_url['host']);
                  if ($host[0] == 'schools') { ?>
                    &nbsp;&nbsp; | &nbsp;&nbsp;
                    <a href="http://staff.wrdsb.ca/<?php $fulldomain = explode('.',$_SERVER['HTTP_HOST']); echo $fulldomain[0]; ?>">Staff Handbook</a>
                  <?php } ?>
              </h6>
            </div>
            <div class="col-sm-4">
              <h6 class="copyright text-right">&copy; Waterloo Region District School Board, 2014</h6>
            </div>
          </div>
        </div>
      </div>

    <?php wp_footer(); ?>
    </body>
    </html>
