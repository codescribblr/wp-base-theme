<?php
get_header();

$pageId = get_option('page_for_posts');
include 'partials/page-header.php';
include 'partials/posts.php';
include 'partials/sections.php';

get_footer();
