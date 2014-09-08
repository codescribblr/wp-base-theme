<?php namespace Ftw;

class Widgets {
	protected $path = 'Fueling\\Widgets\\'; // Namespace for widgets
	protected $widgets = []; // Widgets to register

	function __construct() {
		add_action('widgets_init', [$this, 'register']);
		add_action('widgets_init', [$this, 'registerWidgets']);
	}

	public function register() {
	}

	public function registerWidgets() {
		foreach($this->widgets as $widget) {
			$this->registerWidget($widget);
		}
	}

	protected function registerWidget($name) {
		register_widget($this->path . $name);
	}

	protected function registerSidebar($args) {
		$args = wp_parse_args((array) $args, array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar',
			'description'   => '',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		));
		extract($args);

		register_sidebar(array(
			'name'          => $name,
			'id'            => $id,
			'description'   => $description,
			'before_widget' => $before_widget,
			'after_widget'  => $after_widget,
			'before_title'  => $before_title,
			'after_title'   => $after_title,
		));
	}
}
