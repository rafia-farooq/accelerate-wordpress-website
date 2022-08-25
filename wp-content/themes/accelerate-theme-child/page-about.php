<?php
/**
 * The template for About page
 *
 * 
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content about" role="main">
				<?php the_content(); ?>
			
		</div><!-- .main-content -->
	</div><!-- #primary -->


    <section>
		<div class="about-content">
			<div class="about-intro">
				<h4>OUR SERVICES</h4>
                <p>We take pride in our clients and the content we create for them.</p>
                <p>Here's a brief overview of our offered services.</p>
			</div>

			<?php query_posts('post_type=about & order=ASC');?>
					<?php while ( have_posts() ) : the_post(); 
                        $content = get_field('content');
                        $image =get_field('image');
                        $size = 'medium';
                    ?>

			<div class="about-sevices-list">
				<div class="services-list-text">
					<h2> <?php the_title(); ?> </h2>
					<p><?php echo $content; ?></p>
				</div>

				<div>
					<?php if($image) {
							echo wp_get_attachment_image( $image, $size );
							} ?>
				</div>
			</div>

			<?php endwhile; ?> 
			<?php wp_reset_query(); ?>

			<hr class="horizontal-line">
            
            <div class="about-us-contact-section">
                <div>
					<h3>Interested in working with us?</h3>
				</div>
				<div>
					<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us &#129122;</a>
				</div>
			</div>

			
		</div><!--about-content-->
	</section>

   

<?php get_footer(); ?>
