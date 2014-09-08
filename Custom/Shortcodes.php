<?php namespace Custom;

use WP_Query;

class Shortcodes extends \Ftw\Shortcodes {

	public function __construct() {
		// add_shortcode('sample', [$this, 'sample']);
	}

	public function sample($atts) {
		extract(shortcode_atts(array(
		  'argone' => false,
		  'argtwo' => 'Default'
		), $atts));

		$args = array('post_type' => 'product', 'posts_per_page' => -1);
		$products = new WP_Query($args);

		$this->data['products'] = $products;
		$html = $this->getPartial('products');

		wp_reset_postdata();
		return $html;
	}

}
