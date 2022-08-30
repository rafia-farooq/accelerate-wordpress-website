<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work &#129122;</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="featured-work">
		<div class="site-content">
			<h4>Featured Work</h4>

			<div class="work">
				<ul>
					<?php query_posts('posts_per_page=3 & post_type=case_studies & order=ASC'); ?>
						<?php while (have_posts() ) : the_post();
							$image_1 = get_field("image_1");
							$size = "medium";
						?>
						<li>
							<p>
								<a href="<?php the_permalink(); ?>">
								<?php if($image_1) {
								echo wp_get_attachment_image( $image_1, $size );
								} ?>
								</a>
							</p>

							<p class="work-title">
								<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
							</p>
						</li>
			
					<?php endwhile; ?> 
					<?php wp_reset_query(); ?>	
				</ul>
			</div>	<!---->	
		</div> <!--site-content-->
	</section>

	<section class="recent-posts">
		<div class="site-content">
			<div class="blog-post">
				<h4>From the Blog</h4>
				<?php query_posts('posts_per_page=1'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<h2> <?php the_title(); ?> </h2>
						<p> <?php the_excerpt();?></p>
					<?php endwhile; ?> 
				<?php wp_reset_query(); ?>
			</div>			
		</div>
	</section>

	

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>

		<div class="read-more-link follow-us">
			<a href="https://twitter.com/iam_lily_rose"> Follow us &rsaquo; </a>
		</div>

		</div>
	<?php endif; ?>

	

<?php get_footer(); ?>
