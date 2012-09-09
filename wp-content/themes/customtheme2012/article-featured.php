<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" class="featured">
        <?php get_post_format(); ?>
        <?php if(has_post_thumbnail()) echo get_the_post_thumbnail( get_the_ID(),array( 700, 700)); ?>
        <a href="<?php the_permalink(); ?>"><h3 class="rokkitt"><?php the_title(); ?></h3></a>
        <p class="xig"><?php echo get_the_excerpt(); ?></p>
        <div class="mt-20"><a href="<?php the_permalink(); ?>" class="rokkit color-red big">read more&nbsp;&rsaquo;</a></div>
	</article><!-- #post-<?php the_ID(); ?> -->
