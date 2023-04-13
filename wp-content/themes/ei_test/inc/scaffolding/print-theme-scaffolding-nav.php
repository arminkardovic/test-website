<?php
/**
 * Add a scaffolding nav for easier access.
 *
 * @package ei_test
 */

namespace WebDevStudios\ei_test;

/**
 * Add a scaffolding nav for easier access.
 *
 * @author JC Palmes
 */
function print_theme_scaffolding_nav() {
	?>
	<nav class="scaffolding-nav">
		<span><?php echo esc_html__( 'Scroll to:', 'ei_test' ); ?></span>
		<a href="#globals" class="link"><?php echo esc_html__( 'Globals', 'ei_test' ); ?></a>
		<a href="#typography" class="link"><?php echo esc_html__( 'Typography', 'ei_test' ); ?></a>
		<a href="#media" class="link"><?php echo esc_html__( 'Media', 'ei_test' ); ?></a>
		<a href="#icons" class="link"><?php echo esc_html__( 'Icons', 'ei_test' ); ?></a>
		<a href="#buttons" class="link"><?php echo esc_html__( 'Buttons', 'ei_test' ); ?></a>
		<a href="#forms" class="link"><?php echo esc_html__( 'Forms', 'ei_test' ); ?></a>
		<a href="#elements" class="link"><?php echo esc_html__( 'Elements', 'ei_test' ); ?></a>
	</nav><!-- .scaffolding-nav -->
	<?php
}
