<?php
get_header();

$blogId = get_option('page_for_posts');

if (!get_field('page_header_hide', $blogId)): ?>
<div class="page-header <?php if (get_field('include_border', $blogId)): ?>include-border<?php endif; ?>" style="background-image: url(<?php echo get_field('background_image', $blogId) ?: get_field('default_header_image', 'option'); ?>);">
	<div class="container">
		<h1><?php echo get_the_title($blogId); ?></h1>

		<?php if ($subtitle = get_field('subtitle', $blogId)): ?>
			<p class="subtitle"><?php echo $subtitle; ?></p>
		<?php endif; ?>

		<?php if (get_field('button_text', $blogId) && $buttonLink = get_field('button_link', $blogId)): ?>
		<div class="text-center">
			<a href="<?php echo $buttonLink; ?>" class="btn btn-primary"><?php the_field('button_text', $blogId); ?></a>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php endif; ?>

<div class="page-section section-general">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<div class="blog-post">
						<div class="meta-date"><?php echo get_the_date('F d, Y'); ?></div>
						<h2><?php the_title(); ?></h2>
						<?php if ($image = get_field('featured_image')): ?>
						<div class="featured-image">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo $image; ?>" alt="<?php the_title(); ?>" />
								<span class="read-more"></span>
							</a>
						</div>
						<?php endif; ?>
						<div class="excerpt"><?php the_excerpt(); ?></div>
						<a href="<?php the_permalink(); ?>" class="btn btn-green">Read More</a>
						<hr />
					</div>
				<?php endwhile; echo (new Ftw\Bootstrap\Pagination())->render(); endif; ?>
			</div>

			<div class="col-md-4">
				<div class="widget">
					<div class="widget-heading">Categories</div>
					<div class="widget-content">
						<ul>
							<?php foreach (get_categories() as $category): ?>
								<li><a href="/category/<?php echo $category->category_nicename; ?>"><?php echo $category->cat_name; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
$pageId = $blogId;
include 'partials/sections.php';

get_footer();
