<?php
/**
 * Template part for displaying Sportspress content.
 * This template does not include comments or next and previous navigation.
 *
 * @package Henok
 */

namespace Henok\Henok;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<?php
	get_template_part( 'template-parts/content/entry_header_sportspress' );

	if ( is_search() || is_archive() ) {
		get_template_part( 'template-parts/content/entry_summary', get_post_type() );
	} else {
		get_template_part( 'template-parts/content/entry_content', get_post_type() );
	}

	get_template_part( 'template-parts/content/entry_footer', get_post_type() );
	?>
</article><!-- #post-<?php the_ID(); ?> -->
