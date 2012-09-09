<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
                <div class="w300 fleft">
                    <?php
                        //echo out a certain pages text
                        the_post(); 
                        echo '<h4 class="c666 rokkitt">' . get_the_content() . '</h4>';
                    ?>
                </div>
                <div class="fright ta-center">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/television.png" />
                </div>
                <div class="clr"></div>
                <?php
                    $digest = new WP_Query( array(
                        'post_type' => 'post',
                        'posts_per_page' => 3
                    ) );
                    while ( $digest->have_posts() ) : $digest->the_post(); 
                ?>
                    <div class="fleft article-home w300">
                        <?php get_template_part( 'article', 'home' ); ?>
                    </div>
				<?php endwhile; ?>
                <div class="clr"></div>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
