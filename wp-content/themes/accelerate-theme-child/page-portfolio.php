<?php
/**
 * The template for portfolio page
 *
 * 
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content portfolio">
		<div class="main-content" role="main">
			
				<h2><?php the_title(); ?><h2>
				
			
		</div><!-- .main-content -->
	</div><!-- #primary -->

    <div class="portfolio-content">
        <?php the_content(); ?>
    </div>   

<?php get_footer(); ?>
