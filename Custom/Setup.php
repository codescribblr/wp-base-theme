<?php namespace Custom;

class Setup extends \Ftw\Setup {

	public function __construct() {
		parent::__construct();

		add_action('after_setup_theme', [$this, 'setup']);
		$this->optionsPage();
	}

	function setup() {
		register_nav_menus(array(
			'primary' => 'Primary Navigation',
			'footer' => 'Footer Navigation'
		));
	}

	function optionsPage() {
		if (function_exists('acf_add_options_page')) {
			acf_add_options_page();

			acf_add_options_sub_page(array(
				'page_title' 	=> 'General Settings',
				'menu_title'	=> 'General',
			));

			acf_add_options_sub_page(array(
				'page_title' 	=> 'Contact Settings',
				'menu_title'	=> 'Contact',
			));
		}
	}

}
