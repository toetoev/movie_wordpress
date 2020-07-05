<?php
/**
 * The template for displaying 500 pages (internal server errors)
 *
 * @link https://github.com/xwp/pwa-wp#offline--500-error-handling
 *
 * @package Henok
 */

namespace Henok\Henok;

get_header();

henok()->print_styles( 'henok-content' );

?>
	<main id="primary" class="site-main" role="main">
		<?php get_template_part( 'template-parts/content/error', '500' ); ?>
	</main><!-- #primary -->
<?php
get_footer();
