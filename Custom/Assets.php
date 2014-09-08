<?php namespace Custom;

class Assets extends \Ftw\Assets {

	public function load() {
		if (!is_admin()) {
			$this->compileLess();

			wp_deregister_script('jquery');

			// wp_register_style('lato', 'http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
		    wp_register_style('styles', get_stylesheet_directory_uri() . '/assets/css/cache/' . $this->mainStylesheet, array(), '', 'all');
		    wp_register_script('jquery', get_stylesheet_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(), '', true);
		    wp_register_script('respond', get_stylesheet_directory_uri() . '/assets/vendor/respond/dest/respond.min.js', array(), '', true);
		    wp_register_script('bootstrap', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/dist/js/bootstrap.min.js', array(), '', true);
		    wp_register_script('bootstrapHoverDropdown', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js', array(), '', true);
		    wp_register_script('scripts', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '', true);

			// wp_enqueue_style('lato');
		    wp_enqueue_style('styles');
		    wp_enqueue_script('jquery');
		    wp_enqueue_script('respond');
		    wp_enqueue_script('bootstrap');
		    wp_enqueue_script('bootstrapHoverDropdown');
		    wp_enqueue_script('scripts');
		}
	}

}
