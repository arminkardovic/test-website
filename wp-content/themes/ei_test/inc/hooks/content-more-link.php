<?php
/**
 * Customize "Read More" string on <!-- more --> with the_content();
 *
 * @package ei_test
 */

namespace WebDevStudios\ei_test;

/**
 * Customize "Read More" string on <!-- more --> with the_content();
 *
 * @author WebDevStudios
 *
 * @return string Read more link.
 */
function content_more_link() {
	return ' <a class="more-link" href="' . get_permalink() . '">' . esc_html__( 'Read More', 'ei_test' ) . '...</a>';
}

add_filter( 'the_content_more_link', __NAMESPACE__ . '\content_more_link' );
