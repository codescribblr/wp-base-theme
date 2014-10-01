<ul class="pagination">
	<?php if ($pages->currentPage > 1): ?>
		<li class="page-arrow"><a href="<?php echo $pages->getUrl($pages->previousPage); ?>">&laquo;</a></li>
	<?php else: ?>
		<li class="disabled"></li>
	<?php endif; ?>

	<?php for (; $pages->count < $pages->totalPages + 1; $pages->count++): ?>
		<li<?php echo $pages->count == $pages->currentPage ? ' class="active"' : ''; ?>><a href="<?php echo $pages->getUrl($pages->count); ?>"><?php echo $pages->count; ?></a></li>
	<?php endfor; ?>

	<?php if ($pages->currentPage < $pages->totalPages): ?>
		<li class="page-arrow"><a href="<?php echo $pages->getUrl($pages->nextPage); ?>">&raquo;</a></li>
	<?php else: ?>
		<li class="disabled"></li>
	<?php endif; ?>
</ul>
