<table class="table table-striped table-bordered">
	<thead class="hidden-xs">
		<tr>
			<th>Name</th>
		</tr>
	</thead>
	<tbody>
		<?php while ($products->have_posts()): $products->the_post(); ?>
			<tr>
				<td><?php the_title(); ?></td>
			</tr>
		<?php endwhile; ?>
	</tbody>
</table>
