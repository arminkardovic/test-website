<?php
/**
 * Inline Critical CSS.
 *
 * @package ei_test
 */

namespace WebDevStudios\ei_test;

/**
 * Inline Critical CSS.
 *
 * @author Corey Collins
 */
function critical_css() {
	?>
	<style>
		<?php include get_stylesheet_directory() . '/build/critical.css'; ?>
	</style>
	<?php
}
add_action( 'wp_head', __NAMESPACE__ . '\critical_css', 1 );
