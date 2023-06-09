<?php
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @package ei_test
 */

namespace WebDevStudios\ei_test;

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @author WebDevStudios
 */
function content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ei_test_content_width', 640 );
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\content_width', 0 );
