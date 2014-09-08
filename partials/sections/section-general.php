<?php
$bg = '';
if ($bgImage = get_sub_field('background_image')) {
	$bg = 'background-image: url(' . $bgImage . ');';
}
?>
<div id="<?php the_sub_field('section_id'); ?>" class="page-section section-<?php echo get_sub_field('background'); ?>" style="<?php echo $bg; ?>">
	<div class="container">
		<?php if (in_array('arrow', (array) get_sub_field('section_additions'))): ?>
		<a href="#<?php the_sub_field('section_id'); ?>" class="arrow-down"></a>
		<?php endif; ?>

		<?php include '../modules.php'; ?>
	</div>
</div>
