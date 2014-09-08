<?php get_header(); ?>

<div class="page-section">
	<div class="container">

		<div id="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">
					<header class="article-header">
						<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					</header>

					<section class="entry-content clearfix">
						<?php the_content(); ?>
					</section>
				</article>
			<?php endwhile; ?>

			<nav>
				<ul class="pager">
					<li class="previous"><?php next_posts_link('&laquo; older entries'); ?></li>
					<li class="next"><?php previous_posts_link('newer entries &raquo;'); ?></li>
				</ul>
			</nav>

			<?php else : ?>
				<h2>Oops, Post Not Found!</h1>
				<p>Uh Oh. Something is missing. Try double checking things.</p>
			<?php endif; ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>
