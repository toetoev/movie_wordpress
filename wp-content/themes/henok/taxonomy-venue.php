<?php
/**
 * The template for displaying archive pages for Sportspress venues.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Henok
 */

namespace Henok\Henok;

get_header();

henok()->print_styles( 'henok-content' );

?>
	<main id="primary" class="site-main" role="main">
		<?php
		if ( have_posts() ) {

			get_template_part( 'template-parts/content/page_header' );

			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content/entry', get_post_type() );
			}

			get_template_part( 'template-parts/content/pagination' );
		} else {
			get_template_part( 'template-parts/content/error' );
		}
		?>
	</main><!-- #primary -->
<?php
get_footer();
