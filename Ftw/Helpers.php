<?php namespace Ftw;

class Helpers {
	public static function getPartial($slug, $name, $vars = array()) {
		extract($vars);

		ob_start();
		require(get_template_directory() . "/partials/$slug-$name.php");
		$contents = ob_get_contents();
		ob_end_clean();

		return $contents;
	}

	public static function stripBreakTags($content) {
	  return str_replace("<br />", '', $content);
	}
}
