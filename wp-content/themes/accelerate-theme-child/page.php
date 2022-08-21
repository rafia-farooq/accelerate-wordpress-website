<?php
/**
 * The template for Contact page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
            <div class="contact-form">

                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
                
            </div>

        </div> <!--main content-->

	</div><!-- #primary -->

<?php get_footer(); ?>
