<div id="primary" class="fleft w700">
    <div id="content" role="main">
        <?php
            $newspage = new WP_Query( array(
                'p' => 19,
                'post_type' => 'page'
            ));
            $newspage->the_post();
        ?>
        <h1 class="c333 oswald mb-20 uppercase"><?php the_title(); ?></h1>
        <?php
            //reset the query
            wp_reset_query();
            //actually show the blog posts 
            $post_count = 0;
            while( have_posts() ) : the_post();
        ?>
            <?php if( $post_count++ == 0 ): ?>
                <?php get_template_part( 'article', 'featured' ); ?>
            <?php else: ?>
                <?php get_template_part( 'article', 'digest' ); ?>
            <?php endif; ?>
        <?php endwhile; ?>
        <?php wp_pagenavi(); ?>
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar('news-videos'); ?>
<div class="clr"></div>
