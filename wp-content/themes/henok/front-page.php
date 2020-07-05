<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package Henok
 */

namespace Henok\Henok;

get_header();

// Use grid layout if blog index is displayed.
if ( is_home() ) {
	henok()->print_styles( 'henok-content', 'henok-front-page' );
} else {
	henok()->print_styles( 'henok-content' );
}

get_sidebar( 'frontpage' );

?>
	<main id="primary" class="site-main" role="main">
		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry', get_post_type() );
		}

		get_template_part( 'template-parts/content/pagination' );
		?>
	</main><!-- #primary -->
<?php
get_footer();
