<?php
/**
 * Template part for displaying a post's taxonomy terms
 *
 * @package Henok
 */

namespace Henok\Henok;

$taxonomies = wp_list_filter(
	get_object_taxonomies( $post, 'objects' ),
	array(
		'public' => true,
	)
);

?>
<div class="entry-taxonomies">
	<?php
	// Show terms for all taxonomies associated with the post.
	foreach ( $taxonomies as $taxonomy ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited

		/* translators: separator between taxonomy terms */
		$separator = _x( ', ', 'list item separator', 'henok' );

		switch ( $taxonomy->name ) {
			case 'category':
				/** Do not print categories, they are in the post header*/
				$list = '';
				break;
			case 'post_tag':
				$class = 'tag-links term-links';
				$list  = get_the_tag_list( '', esc_html( $separator ), '', $post->ID );
				/* translators: %s: list of taxonomy terms */
				$placeholder_text = __( 'Tagged %s', 'henok' );
				break;
			case 'post_format':
				/** Do not print post formats.*/
				$list = '';
				break;
			default:
				$class            = str_replace( '_', '-', $taxonomy->name ) . '-links term-links';
				$list             = get_the_term_list( $post->ID, $taxonomy->name, '', esc_html( $separator ), '' );
				$placeholder_text = sprintf(
					/* translators: %s: taxonomy name */
					__( '%s:', 'henok' ),
					$taxonomy->labels->name // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				);
		}

		if ( empty( $list ) ) {
			continue;
		}
		?>
		<span class="<?php echo esc_attr( $class ); ?>">
			<?php
			printf(
				esc_html( $placeholder_text ),
				$list // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			);
			?>
		</span>
		<?php
	}
	?>
</div><!-- .entry-taxonomies -->
