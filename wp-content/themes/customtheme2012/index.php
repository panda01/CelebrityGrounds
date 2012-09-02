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
                <div class="w300">
                    <?php
                        //echo out a certain pages text
                        $homepage = new WP_Query('page_id=17');
                        $homepage->the_post(); 
                        echo '<h4 class="c666">' . get_the_content() . '</h4>';
                        wp_reset_query();
                    ?>
                </div>
                <?php
                    $post_limit = 3;
                    while ( have_posts() && $post_limit-- > 0 ) : the_post(); 
                ?>
                    <div class="fleft article-home w300">
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    </div>
				<?php endwhile; ?>
                <div class="clr"></div>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
