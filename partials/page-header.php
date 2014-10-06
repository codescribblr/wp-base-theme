<?php if (!get_field('page_header_hide', $pageId)): ?>
<div class="page-header <?php if (get_field('include_border', $pageId)): ?>include-border<?php endif; ?>" style="background-image: url(<?php echo get_field('background_image', $pageId) ?: get_field('default_header_image', 'option'); ?>);">
	<div class="container">
		<h1><?php echo get_the_title($pageId); ?></h1>

		<?php if ($subtitle = get_field('subtitle', $pageId)): ?>
			<p class="subtitle"><?php echo $subtitle; ?></p>
		<?php endif; ?>

		<?php if (get_field('button_text', $pageId) && $buttonLink = get_field('button_link', $pageId)): ?>
		<div class="text-center">
			<a href="<?php echo $buttonLink; ?>" class="btn btn-primary"><?php the_field('button_text', $pageId); ?></a>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php endif; ?>
