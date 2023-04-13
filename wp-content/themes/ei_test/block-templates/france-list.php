<?php
/**
 * The template for displaying the France List block
 *
 * @package ei_test
 */

$title = get_field('title');
$list = get_field('list');

$block_id = null;
if (!empty($block['id'])) $block_id = 'france-list-' . $block['id'];

?>
<section class="france-list" id="<?php echo esc_attr($block_id) ?>">
	<?php if (!empty($title)): ?>
		<h2 class="france-list__title">
			<?php echo esc_html($title); ?>
		</h2>
	<?php endif; ?>

	<?php if (!empty($list)): ?>
		<ul class="france-list__list">
			<?php foreach ($list as $item): ?>
				<li class="france-list__item">

					<?php if (!empty($item['image'])): ?>
						<img class="france-list__item-image" src="<?php echo esc_url($item['image']['url']); ?>"
							 alt="<?php echo esc_attr($item['image']['alt']); ?>">
					<?php endif; ?>


					<?php if (!empty($item['title'])): ?>
						<h3 class="france-list__item-title">
							<?php echo esc_html($item['title']); ?>
						</h3>
					<?php endif; ?>

					<?php if (!empty($item['text'])): ?>
						<p class="france-list__item-text">
							<?php echo esc_html($item['text']); ?>
						</p>
					<?php endif; ?>

					<?php if (!empty($item['button']['url'])): ?>
						<?php echo acf_button($item['button'], ['class' => 'france-list__item-button btn']); ?>
					<?php endif; ?>

				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</section>
