<?php namespace Ftw;

use Less_Cache;
use Less_Parser;

class Assets {

	protected $mainStylesheet;

	public function __construct() {
		$this->load();
	}

	public function load() {}

	public function compileLess() {
		$files = array(get_stylesheet_directory() . '/assets/less/style.less' => get_stylesheet_directory_uri() . '/assets/css/');
		$options = array(
			'cache_dir' => get_stylesheet_directory() . '/assets/css/cache',
			'compress' => true,
			'sourceMap' => false,
			'sourceMapWriteTo' => get_stylesheet_directory() . '/assets/css/style.css.map',
		    'sourceMapURL' => get_stylesheet_directory_uri() . '/assets/css/style.css.map'
		);

		$this->mainStylesheet = Less_Cache::Get($files, $options);
	}

}
