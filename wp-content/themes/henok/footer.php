<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Henok
 */

namespace Henok\Henok;

?>
	<?php get_sidebar( 'sponsor' ); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php get_sidebar(); ?>
		<?php get_template_part( 'template-parts/footer/info' ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
