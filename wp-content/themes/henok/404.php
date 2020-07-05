<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Henok
 */

namespace Henok\Henok;

get_header();

henok()->print_styles( 'henok-content' );

?>
	<main id="primary" class="site-main" role="main">
		<?php get_template_part( 'template-parts/content/error', '404' ); ?>
	</main><!-- #primary -->
<?php
get_footer();
