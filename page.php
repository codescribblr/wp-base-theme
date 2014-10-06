<?php
get_header();

while (have_posts()): the_post();

	$pageId = get_the_ID();
	include 'partials/page-header.php';
	include 'partials/sections.php';

endwhile;
get_footer();
