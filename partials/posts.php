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
								<span class="read-more">+ Read More</span>
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
