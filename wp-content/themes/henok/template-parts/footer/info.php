<?php
/**
 * Template part for displaying the footer info
 *
 * @package Henok
 */

namespace Henok\Henok;

?>
<div class="site-info">
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'henok' ) ); ?>" class="credit"><?php esc_html_e( 'Proudly powered by WordPress', 'henok' ); ?></a>
		<div class="go-to-top">
			<a href="#page">
			<i class="dropdown-symbol"></i>
			<span class="screen-reader-text"><?php esc_html_e( 'Go to the top', 'henok' ); ?></span></a>
		</div>
		<a href="<?php echo esc_url( 'https://theme.tips' ); ?>" rel="nofollow" class="theme-credit"><?php /* translators: 1: Theme name */ printf( esc_html__( 'Theme: %1$s by Carolina', 'henok' ), 'Henok' ); ?></a>
</div><!-- .site-info -->
