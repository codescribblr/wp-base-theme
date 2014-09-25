<?php
$bg = '';
if ($bgImage = get_sub_field('background_image')) {
	$bg = 'background-image: url(' . $bgImage . ');';
}

$padding = '';
if ($pad = get_sub_field('padding')) {
	$padding = 'padding-top: ' . $pad . 'px; padding-bottom: ' . $pad . 'px;';
}
?>
<div id="<?php the_sub_field('section_id'); ?>" class="page-section section-general section-<?php echo get_sub_field('background'); ?>" style="<?php echo $bg; ?>">
	<div class="container" style="<?php echo $padding; ?>">
		<?php if (in_array('arrow', (array) get_sub_field('section_additions'))): ?>
		<a href="#<?php the_sub_field('section_id'); ?>" class="arrow-down"></a>
		<?php endif; ?>

		<?php include get_stylesheet_directory() . '/partials/modules.php'; ?>
	</div>
</div>
