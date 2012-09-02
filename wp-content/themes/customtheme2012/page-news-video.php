
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary" class="fleft w700">
			<div id="content" role="main">
                <?php
                    the_post();
                ?>
                <h1><?php the_title(); ?></h1>
                <?php
                    //actually show the blog posts 
                    $news = new WP_Query( array(
                        'post_type' => 'post',
                        'paged' => get_query_var( 'paged' )
                        ) );
                    $post_count = 0;
                    while( $news->have_posts() ) : $news->the_post();
                ?>
                    <?php if( $post_count++ == 0 ): ?>
                        <?php get_template_part( 'content', 'featured' ); ?>
                    <?php else: ?>
                        <?php get_template_part( 'content', 'article' ); ?>
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php wp_pagenavi( array( 'query'=> $news ) ); ?>
			</div><!-- #content -->
		</div><!-- #primary -->
        <?php get_sidebar('news-videos'); ?>
        <div class="clr"></div>

<?php get_footer(); ?>
