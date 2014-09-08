<?php get_header(); ?>

<div class="page-header">
	<div class="container">
		<h1>Search Results</h1>
	</div>
</div>

<div class="page-section">
	<div class="container">
		<h3>Search Results for: <?php echo esc_attr(get_search_query()); ?></h3>

		<?php if (have_posts()):
			while (have_posts()): the_post(); ?>
				<h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
				<p><?php the_excerpt('<span class="read-more">Read more &raquo;</span>'); ?></p>
			<?php endwhile;
		else: ?>
			<h4>Sorry. No Results.</h4>
			<p>Try your search again.</p>
			<p><?php get_search_form(); ?></p>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>
