<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */


?>
		<div id="secondary" class="w220 ml-20 fleft" role="complementary">
            <aside class="widget">
                <?php
                    //get the Categories
                    $catargs = array(
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'type' => 'post'
                    );
                    $cats = get_categories( $catargs );
                ?>
                <h5 class="c42 oswald mb-10 uppercase title">Categories</h5>
                <div class="inner">
                    <?php 
                        $count = count( $cats );
                        foreach( $cats as $cat ): 
                    ?>
                        <a class="reg" href="<?php echo get_category_link( $cat->term_id ); ?>"><?php echo $cat->cat_name; ?><?php if( --$count != 0 ) echo ', '; ?></a>
                    <?php endforeach; ?>

                </div>
            </aside>
            <aside class="widget">
                <?php $tags = get_terms('post_tag'); ?>
                <h5 class="c42 oswald mb-10 uppercase title">Tags</h5>
                <div class="inner">
                    <?php
                        $count = count( $tags );
                        foreach( $tags as $tag ):
                    ?>
                    <a href="<?php echo get_term_link( $tag ); ?>"><?php echo $tag->name; ?><?php if( --$count != 0 ) echo ', '; ?></a>
                    <?php endforeach; ?>
                </div>
            </aside>
            <?php 
                dynamic_sidebar('sidebar-blog');
            ?>
		</div><!-- #secondary .widget-area -->
