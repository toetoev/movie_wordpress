<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Henok
 */

namespace Henok\Henok;

if ( ! henok()->is_sponsor_sidebar_active() ) {
	return;
}

henok()->print_styles( 'henok-sidebar', 'henok-widgets' );

henok()->print_styles( 'henok-sportspress' );

?>
<aside id="sponsors" class="sponsor-sidebar widget-area">
	<?php henok()->display_sponsor_sidebar(); ?>
</aside><!-- #secondary -->
