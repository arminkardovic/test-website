<?php


add_action('acf/init', 'ei_acf_init_blocks');
function ei_acf_init_blocks()
{
	if (function_exists('acf_register_block_type')) {
		acf_register_block_type(
			array(
				'name' => 'france-list',
				'title' => 'France List',
				'description' => 'A custom france list block.',
				'render_template' => 'block-templates/france-list.php',
				'category' => 'general',
				'icon' => 'admin-comments',
				'api_version' => 2,
				'keywords' => array('france', 'list'),
				'mode' => 'preview'
			)
		);
	}
}


if ( ! function_exists( 'acf_button' ) ) {
	function acf_button($button, $args = [], $icon = ''){
		if( !isset($button['title']) && !isset($button['url']) ) return;

		$attrs = '';
		foreach ($args as $attr => $value) {
			$attrs .= $attr . '="' . $value . '"';
		}
		$target = !empty($button['target']) ? 'target="' . $button['target'] . '"' : false;
		return sprintf('<a href="%2$s" %3$s %4$s>%1$s %5$s</a>', $button['title'], $button['url'], $target, $attrs, $icon);
	}
}
