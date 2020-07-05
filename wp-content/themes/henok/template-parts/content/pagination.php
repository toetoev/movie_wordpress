<?php
/**
 * Template part for displaying a pagination
 *
 * @package Henok
 */

namespace Henok\Henok;

the_posts_pagination(
	[
		'mid_size'           => 2,
		'prev_text'          => _x( 'Previous', 'previous set of search results', 'henok' ),
		'next_text'          => _x( 'Next', 'next set of search results', 'henok' ),
		'screen_reader_text' => __( 'Page navigation', 'henok' ),
	]
);
