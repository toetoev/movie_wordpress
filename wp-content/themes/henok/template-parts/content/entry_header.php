<?php
/**
 * Template part for displaying a post's header
 *
 * @package Henok
 */

namespace Henok\Henok;

?>
<header class="entry-header">
	<?php
	get_template_part( 'template-parts/content/entry_header_taxonomies', get_post_type() );
	get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() );
	get_template_part( 'template-parts/content/entry_title', get_post_type() );
	get_template_part( 'template-parts/content/entry_meta', get_post_type() );
	?>
</header><!-- .entry-header -->
