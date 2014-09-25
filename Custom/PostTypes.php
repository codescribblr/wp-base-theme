<?php namespace Custom;

class PostTypes extends \Ftw\PostTypes {

	public function registerAll() {
		// $this->registerPostType('product', 'Products', 'Product', 'Products', 'dashicons-cart', array('product_category'));
	}

	public function removeMetaBoxes() {
		// $this->removeMetaBox('product_category', 'product');
	}

}
