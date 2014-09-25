<?php namespace Ftw;

class PostTypes {

	function __construct() {
		add_action('init', [$this, 'registerAll'], 0 );
		add_action('admin_menu', [$this, 'removeMetaBoxes'], 0 );
	}

	public function registerAll() {}
	public function removeMetaBoxes() {}

	protected function registerPostType($key, $name, $singular, $plural, $icon, $taxonomies = array(), $desc = null) {
		if (!$desc) $desc = $plural;

		$labels = array(
			'name'                => $plural,
			'singular_name'       => $singular,
			'menu_name'           => $name,
			'parent_item_colon'   => 'Parent ' . $singular . ':',
			'all_items'           => 'All ' . $plural,
			'view_item'           => 'View ' . $singular,
			'add_new_item'        => 'Add New ' . $singular,
			'add_new'             => 'Add New',
			'edit_item'           => 'Edit ' . $singular,
			'update_item'         => 'Update ' . $singular,
			'search_items'        => 'Search ' . $plural,
			'not_found'           => 'Not found',
			'not_found_in_trash'  => 'Not found in Trash',
		);
		$args = array(
			'label'               => $singular,
			'description'         => $desc,
			'labels'              => $labels,
			'supports'            => array('title'),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'           => $icon,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			'taxonomies' => $taxonomies
		);
		register_post_type($key, $args);
	}

	public function removeMetaBox($taxonomy, $postType) {
		remove_meta_box($taxonomy . 'div', $postType, 'normal');
	}

}
