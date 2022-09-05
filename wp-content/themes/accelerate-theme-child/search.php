<?php
/**
 * The template for displaying all pages
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

	<div id="primary" class="site-content search-page">
		<div class="main-content" role="main">
            <!-- Search Loop -->
            <?php if ( have_posts() ) : ?>
                    
                <h2> Search Results </h2>
			        
                    <?php while ( have_posts() ) : the_post(); ?>

                        <div class="search-page-content">
                            <?php get_template_part('content-blog', get_post_format()); ?>
                        </div>
				        
			        <?php endwhile; // end of the loop. ?>
                <?php else :?>

                    <p class="no-search-result"><?php esc_html_e( 'Sorry, No results found' ); ?></p>
                    <p class="no-search-result"><?php esc_html_e( 'Try using a different word' ); ?></p>
                   
                    <div class="search-page-form">
                        <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="search" />
                            <input type="submit" id="searchsubmit" value="" />
                        </form>
                    </div>

            <?php endif; ?>

               
		</div><!-- .main-content -->
        
        <nav id="navigation" class="container">
                <div class="left"><a href="<?php echo site_url('/blog/') ?>">&larr; <span>Back to posts</span></a></div>
        </nav>
	</div><!-- #primary -->

<?php get_footer(); ?>
