<?php
/**
 * The calendar template file for the Sportspress plugin.
 *
 * @package Henok
 */

namespace Henok\Henok;

get_header();

henok()->print_styles( 'henok-content' );

henok()->print_styles( 'henok-sportspress' );

?>
	<main id="primary" class="site-main" role="main">
		<?php
		if ( have_posts() ) {

			get_template_part( 'template-parts/content/page_header' );

			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content/entry', 'sportspress' );
			}

			if ( ! is_singular() ) {
				get_template_part( 'template-parts/content/pagination' );
			}
		} else {
			get_template_part( 'template-parts/content/error' );
		}
		?>
	</main><!-- #primary -->
<?php
get_footer();
