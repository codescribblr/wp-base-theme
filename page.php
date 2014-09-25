<?php
get_header();

while (have_posts()): the_post();

if (!get_field('page_header_hide')): ?>
<div class="page-header <?php if (get_field('include_border')): ?>include-border<?php endif; ?>" style="background-image: url(<?php echo get_field('background_image') ?: get_field('default_header_image', 'option'); ?>);">
	<div class="container">
		<h1><?php the_title(); ?></h1>

		<?php if ($subtitle = get_field('subtitle')): ?>
			<p class="subtitle"><?php echo $subtitle; ?></p>
		<?php endif; ?>

		<?php if (get_field('button_text') && $buttonLink = get_field('button_link')): ?>
		<div class="text-center">
			<a href="<?php echo $buttonLink; ?>" class="btn btn-primary"><?php the_field('button_text'); ?></a>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php endif;

$pageId = get_the_ID();
include 'partials/sections.php';

endwhile;
get_footer();
