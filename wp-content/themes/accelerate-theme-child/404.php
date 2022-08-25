<?php
/**
 * This is the 404 error page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */


get_header(); ?>

<div id="primary" class="home-page hero-content page-404">
		<div class="main-content page-404-content" role="main">
			
      <p> This is 404 - Page Not Found Error</p>

      <h3>Get back on track</h3>

      <p>Use the navigation links at the top to get back on track or click on the button:</p>
      
      <a class="button-404" href="<?php echo site_url() ?>"> HOME &#129122;</a>
      
      <br>

      <!-- Add image from img folder in this directory -->

      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404-image.png" class="image-404"/>

		</div><!-- .main-content -->
</div><!-- #primary -->


<?php get_footer(); ?>

