<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays custom post types: case studies archive
 * 
 * 
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

            <h2 class="case-studies-archive">Our Work: Case studies</h2>

            <?php global $query_string;
            query_posts( $query_string.'&order=ASC' );?>

            <?php while ( have_posts() ) : the_post(); 
                $services = get_field("services");
                $link = get_field("site_link");
                $image_1 = get_field("image_1");
                $size = "full";
            ?>

            <div>
                <section class="case-studies-text">
                    <h2> 
                        <a href="<?php the_permalink(); ?>">
                        <?php the_title();?> 
                        </a>
                    </h2>
                    <h4> <?php echo $services;?> </h4>
                    <p> <?php the_excerpt();?> </p>
                    <p class="read-more-link"><a href="<?php echo $site_link; ?>">View Project 🡢</a></p>
                </section>

                <section class="case-studies-image">
                    <a href="<?php the_permalink(); ?>">
                    <?php if($image_1) {
                            echo wp_get_attachment_image( $image_1, $size );
                        } ?>
                    </a>
                </section>
            </div>

            <?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
