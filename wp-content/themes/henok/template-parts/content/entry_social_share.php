<?php
/**
 * Template part for displaying social sharing links.
 *
 * @package Henok
 */

namespace Henok\Henok;

if ( is_single() ) {
	?>
	<span class="social-share">
		<?php
		if ( get_theme_mod( 'sharing_tw', 1 ) == 1 || get_theme_mod( 'haring_fb', 1 ) == 1 ) {
			?>
			<div class="sharing">
			<?php
			esc_html_e( 'Share on ', 'henok' );
			if ( get_theme_mod( 'sharing_facebook', 'yes' ) == 'yes' ) {
				?>
				<a href="<?php echo esc_url( 'https://www.facebook.com/sharer/sharer.php?u?' . get_permalink( $post->ID ) ); ?>"><?php esc_html_e( 'Facebook', 'henok' ); ?></a>
				<?php
			}
			if ( get_theme_mod( 'sharing_twitter', 'yes' ) == 'yes' ) {
				?>
				<a href="<?php echo esc_url( 'https://twitter.com/intent/tweet?url=' . get_permalink( $post->ID ) ); ?>"><?php esc_html_e( 'Twitter', 'henok' ); ?></a>
				<?php
			}
			if ( get_theme_mod( 'sharing_linkedin', 'yes' ) == 'yes' ) {
				?>
				<a href="<?php echo esc_url( 'https://www.linkedin.com/shareArticle?url=' . get_permalink( $post->ID ) ); ?>"><?php esc_html_e( 'LinkedIn', 'henok' ); ?></a>
				<?php
			}
			if ( get_theme_mod( 'sharing_reddit', 'yes' ) == 'yes' ) {
				?>
				<a href="<?php echo esc_url( 'https://reddit.com/submit?url=' . get_permalink( $post->ID ) ); ?>"><?php esc_html_e( 'Reddit', 'henok' ); ?></a>
				<?php
			}

			?>
			</div>
			<?php
		}
		?>
	</span><!-- .social-share -->
	<?php
}
