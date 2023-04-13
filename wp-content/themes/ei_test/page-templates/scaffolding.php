<?php
/**
 * Template Name: Scaffolding
 *
 * Template Post Type: page, scaffolding, ei_test_scaffolding
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ei_test
 */

use function WebDevStudios\ei_test\main_classes;

get_header(); ?>

	<main id="main" class="<?php echo esc_attr( main_classes( [ 'relative' ] ) ); ?>">

		<?php do_action( 'ei_test_scaffolding_content' ); ?>

	</main><!-- #main -->

<?php get_footer(); ?>
