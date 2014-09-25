<?php

function getPartial($slug, $name, $vars = array()) {
	extract($vars);

	ob_start();
	require(get_template_directory() . "/partials/$slug-$name.php");
	$contents = ob_get_contents();
	ob_end_clean();

	return $contents;
}

function stripBreakTags($content) {
  return str_replace("<br />", '', $content);
}

/**
 * Helpers for Advanced Custom Fields
 */
function theOption($key) {
	the_field($key, 'option');
}

function getOption($key) {
	return get_field($key, 'option');
}

function dd($value) {
	var_dump($value);
	die;
}
