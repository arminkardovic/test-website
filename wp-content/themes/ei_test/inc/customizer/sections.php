<?php
/**
 * Customizer sections.
 *
 * @package ei_test
 */

namespace WebDevStudios\ei_test;

/**
 * Register the section sections.
 *
 * @author WebDevStudios
 * @param object $wp_customize Instance of WP_Customize_Class.
 */
function customize_sections( $wp_customize ) {

	// Register additional scripts section.
	$wp_customize->add_section(
		'ei_test_additional_scripts_section',
		[
			'title'    => esc_html__( 'Additional Scripts', 'ei_test' ),
			'priority' => 10,
			'panel'    => 'site-options',
		]
	);

	// Register a social links section.
	$wp_customize->add_section(
		'ei_test_social_links_section',
		[
			'title'       => esc_html__( 'Social Media', 'ei_test' ),
			'description' => esc_html__( 'Links here power the print_social_network_links() template tag.', 'ei_test' ),
			'priority'    => 90,
			'panel'       => 'site-options',
		]
	);

	// Register a header section.
	$wp_customize->add_section(
		'ei_test_header_section',
		[
			'title'    => esc_html__( 'Header Customizations', 'ei_test' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);

	// Register a footer section.
	$wp_customize->add_section(
		'ei_test_footer_section',
		[
			'title'    => esc_html__( 'Footer Customizations', 'ei_test' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);
}
add_action( 'customize_register', __NAMESPACE__ . '\customize_sections' );
