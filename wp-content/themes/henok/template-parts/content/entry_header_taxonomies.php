<?php
/**
 * Template part for displaying a post's taxonomy terms
 *
 * @package Henok
 */

namespace Henok\Henok;

?>
<div class="entry-taxonomies">
	<?php
	// Show terms for all taxonomies associated with the post.
	$class = 'category-links term-links';
	$list  = get_the_category_list( ' ', '', $post->ID );
	/* translators: %s: list of taxonomy terms */
	?>
	<span class="<?php echo esc_attr( $class ); ?>">
		<?php
		echo $list; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		?>
	</span>
</div><!-- .entry-taxonomies -->
