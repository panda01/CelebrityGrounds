<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php get_post_format(); ?>
        <?php if(has_post_thumbnail()) echo get_the_post_thumbnail( get_the_ID(),array( 300, 300)); ?>
        <a href="<?php the_permalink(); ?>"><h4 class="rokkitt"><?php the_title(); ?></h4></a>
        <p><?php the_time( 'j.n.y' ); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php comments_popup_link( 'No Comments', '1 Comment', '% Comments' ); ?></p>
        <?php the_excerpt(); ?>
	</article><!-- #post-<?php the_ID(); ?> -->
