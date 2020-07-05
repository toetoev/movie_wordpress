<?php
/**
 * Template part for displaying a post's footer
 *
 * @package Henok
 */

namespace Henok\Henok;

?>
<footer class="entry-footer">
	<?php get_template_part( 'template-parts/content/entry_taxonomies', get_post_type() ); ?>
	<?php get_template_part( 'template-parts/content/entry_social_share', get_post_type() ); ?>
	<?php get_template_part( 'template-parts/content/entry_actions', get_post_type() ); ?>
</footer><!-- .entry-footer -->
