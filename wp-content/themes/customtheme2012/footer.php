<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo" class="wood-bg">
        <div class="w940 oswald xmall c000 uppercase">
            <div class="fleft">
                all rights reserved &copy; copyright 2012 celebrity grounds
            </div>
            <div class="fright">
                Contact: <a href="mailto:celebritygrounds@gmail.com">CelebrityGrounds[at]gmail.com</a>
                <?php
                /* wp_nav_menu( array( 
                    'theme_location' => 'primary',
                    'menu' => 'footer-menu',
                    'container' => ''
                ) ); */ ?>
            </div>
            <div class="clr"></div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
