<?php namespace Ftw;

abstract class Taxonomies {

	function __construct() {
		add_action('init', [$this, 'registerAll'], 0 );
	}

	public function registerAll() {}

	public function registerTaxonomy($key, $name, $singular, $plural) {
		register_taxonomy(
			$key,
			null,
			array(
				'labels' => array(
					'name'                       => $name,
					'singular_name'              => $singular,
					'search_items'               => 'Search ' . $plural,
					'popular_items'              => 'Popular ' . $plural,
					'all_items'                  => 'All ' . $plural,
					'parent_item'                => null,
					'parent_item_colon'          => null,
					'edit_item'                  => 'Edit ' . $singular,
					'update_item'                => 'Update ' . $singular,
					'add_new_item'               => 'Add New ' . $singular,
					'new_item_name'              => 'New ' . $singular . ' Name',
					'separate_items_with_commas' => 'Separate ' . $plural . ' with commas',
					'add_or_remove_items'        => 'Add or remove ' . $plural,
					'choose_from_most_used'      => 'Choose from the most used ' . $plural,
					'not_found'                  => 'No ' . $plural . ' found.',
					'menu_name'                  => $name,
				),
				'hierarchical' => true,
				'rewrite' => array('slug' => $key),
				'capabilities' => array('manage_terms', 'edit_terms', 'delete_terms')
			)
		);
	}

}
