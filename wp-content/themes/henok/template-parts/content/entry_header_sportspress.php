<?php
/**
 * Template part for displaying the header of the Sportspress plugin pages.
 * This template does not include meta such as author and publishing date.
 *
 * @package Henok
 */

namespace Henok\Henok;

?>

<header class="entry-header">
	<?php
	get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() );
	get_template_part( 'template-parts/content/entry_title', get_post_type() );
	?>
</header><!-- .entry-header -->
